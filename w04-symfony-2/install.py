from __future__ import annotations

import sys
from pathlib import Path

sys.path.insert(0, str(Path(__file__).resolve().parent.parent))

from _install import main


SCRIPT_DIRECTORY = Path(__file__).resolve().parent

PROJECT_DIRECTORIES = (
    "010-forms/010-form-in-controller",
    "020-validation/010-validation-challenge",
    '030-security/010-basic-plaintext',
    '030-security/020-basic-auto',
    '030-security/030-basic-db',
    '030-security/040-login-form',
    '030-security/050-logout-user',
    '030-security/060-challenge',
    '040-cli/010-commands',
    '050-services/010-services',
)


if __name__ == "__main__":
    raise SystemExit(main(SCRIPT_DIRECTORY, PROJECT_DIRECTORIES))
