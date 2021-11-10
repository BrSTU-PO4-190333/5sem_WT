## Launching the project

```bash
cd lamp
sudo docker-compose up
sudo docker-compose down
```

- http://localhost:8000 - phpmyadmin
- http://localhost:8001 - site

## Clearing MySQL

```bash
cd lamp
sudo make gpi-clean-mysql
```

## Generate a report

```bash
cd texlive-full
sudo docker-compose up
sudo docker-compose down
```

or

```bash
cd texlive-full
sudo docker-compose run latex /bin/bash
cd /home/user/content/texlive-full
make gpi-build-rep
```

Regenerate report

```bash
make gpi-build-rep
```

Close the virtual machine

```bash
sudo docker-compose down
```
