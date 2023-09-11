## Ansible playbook suggestion - work in progress (followed some guide).

### Host is hard coded to my (martin) test VM. Will not working for anyone else since only my public key is on the VM

### To make it run on our staging environment would need to change host to our staging server. Could add ansible script for SSH key exhange from/to ansible node and staging server.

### Created the directory structure with ansible-galaxy init. Like this:
```
ansible-galaxy init server
ansible-galaxy init php
ansible-galaxy init mysql
ansible-galaxy init wordpress
```

### This is probably very messy

### Run the playbook with
```
ansible-playbook playbook.yml -i hosts
```
