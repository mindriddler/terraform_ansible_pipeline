#!/bin/bash
source .env

output=$(echo "hello" 2>&1)
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
    last_50_lines=$(echo "$output" | tail -n 50)
    body_content="$last_50_lines\n\nSee attached log file for more.\n\nPlease check the code immediately!"
    send_mail "$body_content"
else

    PR_JSON=$(
        cat <<EOF
{
"title": "$PR_TITLE",
"body": "$PR_BODY",
"head": "$PR_HEAD_BRANCH",
"base": "$PR_BASE_BRANCH"
}
EOF
    )

    # Create the pull request using GitHub API
    PR_URL="https://api.github.com/repos/$GITHUB_REPO/pulls"
    PR_RESPONSE=$(curl -X POST -H "Authorization: token $GITHUB_TOKEN" -d "$PR_JSON" "$PR_URL")

    # Check the response from GitHub API
    if [ "$(echo "$PR_RESPONSE" | jq -r '.html_url')" != "null" ]; then
        echo "Pull request created successfully: $(echo "$PR_RESPONSE" | jq -r '.html_url')"
    else
        echo "Failed to create a pull request."
    fi
fi
