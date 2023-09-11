#!/bin/bash
# gmail smtp: smtp.gmail.com:587
RECIEVER_EMAIL_ADDRESS=""
SENDER_EMAIL_ADDRESS=""
SMTP_SERVER=""
EMAIL_ADDRESS=""
PASSWORD=""

output=$(TO <COMMAND RUN >2 >&1)
command_status=$?
output_file="/tmp/$(hostname)_output.log"
echo "$output" >"$output_file"
num_lines=$(echo "$output" | wc -l)
date=$(date)
hostname=$(hostname)
summary="CI/CD PIPELINE HAVE FAILED AT $date ON $hostname."

send_mail() {
    swaks -S --to $RECIEVER_EMAIL_ADDRESS \
        --from $SENDER_EMAIL_ADDRESS \
        --server $SMTP_SERVER \
        --auth LOGIN \
        --auth-user $EMAIL_ADDRESS \
        --auth-password $PASSWORD \
        --tls \
        --header "Subject: ALERT: $summary" \
        --body "$1" \
        --attach "@$output_file"
}

if [ $command_status -ne 0 ]; then
    if [ $num_lines -le 25 ]; then
        body_content="$output\n\nPlease check the server immediately!"
    else
        last_50_lines=$(echo "$output" | tail -n 50)
        body_content="LAST 50 LINES FROM THE LOG FILE:\n\n$last_50_lines\n\nSee attached log file for more.\n\nPlease check the server immediately!"
    fi
    send_mail "$body_content"
else
    echo "success"
fi
