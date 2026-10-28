from __future__ import annotations

import sys
from pathlib import Path

sys.path.insert(0, str(Path(__file__).resolve().parent.parent))

from _install import main


SCRIPT_DIRECTORY = Path(__file__).resolve().parent

PROJECT_DIRECTORIES = (
    "010-fixtures/010-fixtures-challenge",
    "020-tests/010-tests",
    "020-tests/020-tests-challenge",
    "030-api/010-api-read",
    "030-api/020-api-write",
)


if __name__ == "__main__":
    raise SystemExit(main(SCRIPT_DIRECTORY, PROJECT_DIRECTORIES))
