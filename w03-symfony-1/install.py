from __future__ import annotations

import sys
from pathlib import Path

sys.path.insert(0, str(Path(__file__).resolve().parent.parent))

from _install import main


SCRIPT_DIRECTORY = Path(__file__).resolve().parent

PROJECT_DIRECTORIES = (
    "010-routing/010-parameters-validation",
    "010-routing/020-route-groups-prefixes",
    "010-routing/030-hosts",    
    "010-routing/040-yaml-attribute",    
    "020-controllers/010-basic-controller",
    "030-templates/010-inheritance",    
    "040-doctrine/010-entities",    
    "050-i18n/010-locale",    
)


if __name__ == "__main__":
    raise SystemExit(main(SCRIPT_DIRECTORY, PROJECT_DIRECTORIES))
