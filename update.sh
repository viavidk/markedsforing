#!/usr/bin/env bash
set -euo pipefail

REPO="https://github.com/viavidk/markedsforing.git"

if [ -d ".git" ]; then
  echo "Opdaterer ViaVi Forge Marketing Site ..."
  git pull --ff-only
  echo "Færdig."
else
  echo "Installerer ViaVi Forge Marketing Site i $(pwd) ..."
  git clone "$REPO" .
  echo "Færdig. Start serveren: php -S localhost:8080"
fi
