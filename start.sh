#!/usr/bin/env bash

# Work in progress. This script is unnecessary for the project.
# Remember to chmod +x start.sh to make it executable. 
# Then run it with ./start.sh

build_project() {
    docker-compose up -d
    custom_sleep "Project is being built. Press any key to continue..."
}

stop_project() {
    docker-compose stop
    custom_sleep "Containers are stopping...(wait 5 secunds)" 5
}

remove_project() {
    docker-compose down -v
    custom_sleep "Containers are being removed...(wait 5 secunds)" 5
}

start_project() {
    docker-compose start
    custom_sleep "Containers are starting...(wait 5 secunds)" 5
}
   

custom_sleep() {
    if [ -z "$2" ]; then
        read -p "$1" -n 1 -r
    else
        read -t $2 -p "$1" -n 1 -r
    fi
}

joke() {
    curl -H "Accept: text/plain" https://icanhazdadjoke.com/
    echo ""
}


start_docker() {
    case "$OSTYPE" in
        darwin*)  start_docker_mac ;;
        linux*)   start_docker_linux ;;
        msys*)    echo " Start Docker manually!" ;;
        *)        echo "unknown: $OSTYPE" ;;
    esac

}

start_docker_mac() {
    if [ -f "/Applications/Docker.app/Contents/MacOS/Docker" ]; then
        open -a Docker
        custom_sleep "Docker is starting..." 10
    else
        custom_sleep "Docker is not installed!" 2
    fi
}

start_docker_linux() {
    if [ -f "/usr/bin/docker" ]; then
        sudo systemctl start docker
        custom_sleep "Docker is starting..." 10
    else
        custom_sleep "Docker is not installed!" 2
    fi
}

stop_docker() {

    case "$OSTYPE" in
        darwin*)  osascript -e 'quit app "Docker"' ;;
        linux*)   sudo systemctl stop docker ;;
        msys*)    echo " Stop Docker manually!" ;;
        *)        echo "unknown: $OSTYPE" ;;
    esac
}

open_phpmyadmin() {
    case "$OSTYPE" in
        darwin*)  open http://localhost:8080 ;;
        linux*)   xdg-open http://localhost:8080 ;;
        msys*)    cmd.exe /C start http://localhost:8080 ;;
        *)        echo "unknown: $OSTYPE" ;;
    esac
}

open_wordpress() {
    case "$OSTYPE" in
        darwin*)  open http://localhost:8000 ;;
        linux*)   xdg-open http://localhost:8000 ;;
        msys*)    cmd.exe /C start http://localhost:8000 ;;
        *)        echo "unknown: $OSTYPE" ;;
    esac
}

check_docker_started() {
    if docker ps | grep -q "CONTAINER"; then
        echo "1. Docker             ✅"
    else
        clear
        echo "1. Docker             ❌"
    fi
}

check_docker_compose_file() {
    if [ -f "docker-compose.yml" ]; then
        echo "2. docker-compose.yml ✅"

    else
        echo "2. docker-compose.yml ❌"
    fi
}

check_git() {
    if [ -f "/usr/bin/git" ]; then
        echo "3. git                ✅"
    else
        echo "3. git                ❌"
    fi
}

check_env_file() {
    if [ -f ".env" ]; then
        echo "4. .env               ✅"
    else
        echo "4. .env               ❌"
    fi
}

check_project_containers() {
    if docker ps | grep -q "$1"; then
        echo "5. $1 containers   ✅"
    else
        echo "5. $1 containers   ❌"
    fi
}

list_active_containers() {
    if ! docker ps | grep -q "CONTAINER"; then
        custom_sleep "Docker is not active!" 2
        return
    fi
    docker ps --format "table {{.ID}}\t{{.Names}}\t{{.Status}}\t{{.Ports}}"
    custom_sleep "Press any key to continue..."
}



menu() {
    echo "LAMP Quick Menu"
    echo ""
    echo "[0] Start Docker | Mac/Linux Only, on Windows DIY"
    echo "[1] Build project from docker-compose.yml"
    echo "[2] Check Containers Status"
    echo "[3] Stop Containers"
    echo "[4] START Containers"
    echo "[5] Open phpMyAdmin in Browser"
    echo "[6] Open WordPress in Browser"
    echo "[7] Tell me a joke"
    echo "[8] Remove Containers | For fresh start"
    echo "[9] Stop Docker | Mac/Linux Only, on Windows DIY"
    echo ""
    echo "[q] Quit"
}

main() {
    while true; do
        clear
        echo "Info:"
        check_docker_started
        check_docker_compose_file
        check_git
        check_env_file
        check_project_containers "gear5"
        echo ""
        menu
        read -p "Please enter your choice: " choice
        case $choice in
            0)
                clear
                build_project
                ;;
            1)
                clear
                start_project
                ;;
            2)
                clear
                list_active_containers
                ;;
            3)
                clear
                stop_project
                ;;
            4)
                clear
                start_project
                ;;
            5)
                clear
                open_phpmyadmin
                ;;
            6)
                clear
                open_wordpress
                ;;
            7)
                clear
                joke
                custom_sleep "Press any key to continue..."
                ;;
            8)
                clear
                remove_project
                ;;
            9)
                clear
                stop_docker
                ;;
            q)
                echo "Bye"
                break
                ;;
            *)  
                clear
                custom_sleep "$choice is not a valid option" 1
                ;;
        esac
    done
}

main