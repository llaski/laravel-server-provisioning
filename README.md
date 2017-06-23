# laravel-server-provisioning

## Specs

- Ubuntu 16.04

# Commands

Run Playbooks

```
ansible-playbook -i hosts provision.yml
ansible-playbook -i hosts deploy.yml
```

## Setup Instructions

- Setup encryption vault file
- Customize Variables
- Encrypt group vars
- Generate ssh key

    ssh-keygen -t rsa -b 4096 -C "john@example.com"

- Add key to github repo
- Encrypt ssh keys
- Update hosts file

######

To Do

- Bash scripts to fast track setup
- Symlink deployment setup (Zero Downtime)

-----

- opcache configuration
    - https://ma.ttias.be/a-better-way-to-run-php-fpm/
    - https://medium.com/appstract/make-your-laravel-app-fly-with-php-opcache-9948db2a5f93
