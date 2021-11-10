## Launching the project

- 1st terminal: `make gpi-run-mysql`
- 2nd terminal: `make gpi-run-backend`
- 3rd terminal: `make gpi-run-frontend`

- http://localhost:3000 - site (React)
- http://localhost:3001 - API (Express)
- http://localhost:8000 - phpmyadmin (LAMP)
- http://localhost:8001 - PHP Apache site (LAMP)

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

> ```bash
> cd texlive-full
> sudo docker-compose run latex /bin/bash
> cd /home/user/content/texlive-full
> make gpi-build-rep
> ```
> 
> Regenerate report
> 
> ```bash
> make gpi-build-rep
> ```
> 
> Close the virtual machine
> 
> ```bash
> sudo docker-compose down
> ```
