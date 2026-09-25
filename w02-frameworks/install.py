from __future__ import annotations

import sys
from pathlib import Path

sys.path.insert(0, str(Path(__file__).resolve().parent.parent))

from _install import main


SCRIPT_DIRECTORY = Path(__file__).resolve().parent

PROJECT_DIRECTORIES = (
    "020-http-foundation",
    "030-http-foundation-response",
    "040-front-controller-challenge/do",
    "040-front-controller-challenge/done",
    "050-flat-framework/07-http-foundation",
)


if __name__ == "__main__":
    raise SystemExit(main(SCRIPT_DIRECTORY, PROJECT_DIRECTORIES))
