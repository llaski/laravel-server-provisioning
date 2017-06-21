# laravel-server-provisioning

## Specs

- Ubuntu 16.04

# Commands

Run Playbook
```
ansible-playbook -i hosts playbook.yml
```


## Setup Instructions

- Setup encryption vault file
- Customize Variables
- Add/Generate ssh keys

######

ssh -i /Users/LarryLaski/.ssh/digital_ocean_built_by_larry_rsa root@104.131.175.203

- apt updates
- set server timezone to UTC
- users
- ssh
- git
- nginx
- php fpm
 - php ini settings - https://github.com/konomae/ansible-laravel-settler/blob/master/tasks/main.yml
- ssl
- node w/ yarn
- ufw

- get restart working

-----

https://github.com/aligajani/ansible-playbooks-laravel-5
https://github.com/mkudenko/vagrant-ansible-laravel

- opcache configuration
    - https://ma.ttias.be/a-better-way-to-run-php-fpm/
    - https://medium.com/appstract/make-your-laravel-app-fly-with-php-opcache-9948db2a5f93





laravel deployment command - possibly use envoyer on a per project basis
