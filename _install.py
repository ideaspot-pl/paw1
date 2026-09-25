from __future__ import annotations

import argparse
import shutil
import subprocess
import sys
from pathlib import Path
from typing import Sequence


PHP_COMMAND = "php"
COMPOSER_PATH = Path(__file__).resolve().parent / "composer.phar"


def project_paths(base_directory: Path, project_directories: Sequence[str]) -> list[Path]:
    return [base_directory / directory for directory in project_directories]


def validate_project_directories(
    base_directory: Path,
    project_directories: Sequence[str],
    require_composer_manifest: bool,
) -> list[Path]:
    paths = project_paths(base_directory, project_directories)

    for path in paths:
        if not path.is_dir():
            raise FileNotFoundError(f"Project directory does not exist: {path}")

        if require_composer_manifest and not (path / "composer.json").is_file():
            raise FileNotFoundError(f"Composer manifest does not exist: {path / 'composer.json'}")

    return paths


def install_dependencies(base_directory: Path, project_directories: Sequence[str]) -> None:
    if not COMPOSER_PATH.is_file():
        raise FileNotFoundError(f"Composer executable does not exist: {COMPOSER_PATH}")

    paths = validate_project_directories(
        base_directory,
        project_directories,
        require_composer_manifest=True,
    )
    for path in paths:
        print(f"Installing dependencies in {path}")
        subprocess.run(
            [PHP_COMMAND, str(COMPOSER_PATH), "install"],
            cwd=path,
            check=True,
        )


def uninstall_vendors(base_directory: Path, project_directories: Sequence[str]) -> None:
    paths = validate_project_directories(
        base_directory,
        project_directories,
        require_composer_manifest=False,
    )
    for path in paths:
        vendor_path = path / "vendor"
        if vendor_path.is_dir():
            print(f"Removing {vendor_path}")
            shutil.rmtree(vendor_path)
        else:
            print(f"Vendor directory does not exist, skipping: {vendor_path}")


def parse_arguments() -> argparse.Namespace:
    parser = argparse.ArgumentParser(
        description="Install Composer dependencies or uninstall project vendor directories."
    )
    parser.add_argument(
        "command",
        choices=("install", "uninstall"),
        nargs="?",
        help="install dependencies or uninstall vendor directories",
    )
    arguments = parser.parse_args()
    if arguments.command is None:
        parser.print_help()

    return arguments


def main(base_directory: Path, project_directories: Sequence[str]) -> int:
    arguments = parse_arguments()

    if arguments.command is None:
        return 0

    try:
        if arguments.command == "install":
            install_dependencies(base_directory, project_directories)
        else:
            uninstall_vendors(base_directory, project_directories)
    except (FileNotFoundError, subprocess.CalledProcessError) as error:
        print(f"Error: {error}", file=sys.stderr)
        return 1

    return 0
