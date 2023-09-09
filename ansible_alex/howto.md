# Ansible

Some short explanations on how to use this ansible setup. We will follow Pavel's [guide](https://www.digitalocean.com/community/tutorials/how-to-use-ansible-to-install-and-set-up-wordpress-with-lamp-on-ubuntu-18-04) and continue from there. The file naming is a bit different on my setup, as this is the way i set and use Ansible. We can create more playbooks and roles as we go and later we can get them into one playbook.

## Files

- `update.yml` - playbook to update the system
- `inventory` or `hosts`` - inventory file for ansible, contains the hosts to run the playbook on
- `ansible.cfg` - ansible configuration file, contains the path to the inventory file
- `roles/` - directory containing the roles

## How to (manually) run a playbook

Must be run from the directory containing the playbook.

`ansible-playbook <playbook.yml>`

```bash
ansible-playbook update.yml
```

---

