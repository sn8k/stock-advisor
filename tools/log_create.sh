#!/bin/bash
# Log create script
# Version: 0.1.0
# Date: 2025-07-06

LOG_DIR="logs"

mkdir -p "$LOG_DIR"

echo "Log directory initialized at $(date)" >> "$LOG_DIR/setup.log"
