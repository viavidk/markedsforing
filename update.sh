#!/usr/bin/env bash
set -euo pipefail

REPO="https://github.com/viavidk/markedsforing.git"
INSTALL_DIR="${MARKEDSFORING_DIR:-$HOME/markedsforing}"

if [ -d "$INSTALL_DIR/.git" ]; then
  echo "Opdaterer ViaVi Forge Marketing Site i $INSTALL_DIR ..."
  git -C "$INSTALL_DIR" pull --ff-only
  echo ""
  echo "Færdig. Genstart php -S for at se ændringerne."
else
  echo "Installerer ViaVi Forge Marketing Site i $INSTALL_DIR ..."
  git clone "$REPO" "$INSTALL_DIR"
  echo ""
  echo "Færdig. Start serveren:"
  echo "  cd $INSTALL_DIR && php -S localhost:8080"
fi
