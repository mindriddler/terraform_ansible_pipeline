#!/usr/bin/env bash

# Work in progress. Remember to [chmod +x start.sh] to make it executable.
# Will add all the functions tomorrow. 
# I have them, but must modify some to run under each OS.
# We can do without this, but might be nice to kinda create our own "CLI" tool for this project.

start_project() {
    docker-compose up -d
    custom_sleep "Containers are starting...(wait 10 secunds)" 10
}

stop_project() {
    docker-compose stop
    custom_sleep "Containers are stopping...(wait 10 secunds)" 10
}

remove_project() {
    docker-compose down -v
    custom_sleep "Containers are being removed...(wait 10 secunds)" 10
}

custom_sleep() {
    if [ -z "$2" ]; then
        read -p "$1" -n 1 -r 
    else
        read -t $2 -p "$1" -n 1 -r
    fi
}

open_browser() {
    case "$OSTYPE" in
        darwin*)  open http://localhost ;;
        linux*)   xdg-open http://localhost ;;
        msys*)    cmd.exe /C start http://localhost ;;
        *)        echo "unknown: $OSTYPE" ;;
    esac
}