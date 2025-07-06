#!/bin/bash
# Log create script
# Version: 0.1.1
# Date: 2025-07-06

LOG_DIR="logs"
DATA_DIR="data"

mkdir -p "$LOG_DIR"
mkdir -p "$DATA_DIR"

echo "Log directory initialized at $(date)" >> "$LOG_DIR/setup.log"
