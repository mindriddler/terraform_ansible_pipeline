#!/bin/bash

# Navigate to the WordPress directory
cd /var/www/html

# Get the path to the themes directory
THEME_DIR=$(wp theme path --allow-root)

# Find the most recently added theme
LATEST_THEME=$(find $THEME_DIR -maxdepth 1 -type d -printf '%T+ %p\n' | sort -r | head -n 1 | awk '{print $2}' | xargs -I {} basename {})

# If the latest theme is not the currently active one, activate it
if [ "$(wp theme is-active $LATEST_THEME --allow-root)" = "No" ]; then
    wp theme activate $LATEST_THEME --allow-root
fi
