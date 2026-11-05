from __future__ import annotations

import sys
from pathlib import Path

sys.path.insert(0, str(Path(__file__).resolve().parent.parent))

from _install import main


SCRIPT_DIRECTORY = Path(__file__).resolve().parent

PROJECT_DIRECTORIES = (
    "020-routes/010-routes",
    "030-controllers/010-hello-challenge",
    "030-controllers/020-responses",
    "040-views/010-blade",
    "040-views/010-blade",
    "050-eloquent/010-mig-seed-model",
    "050-eloquent/020-weather-challenge/do",
    "050-eloquent/020-weather-challenge/done",
)


if __name__ == "__main__":
    raise SystemExit(main(SCRIPT_DIRECTORY, PROJECT_DIRECTORIES))
