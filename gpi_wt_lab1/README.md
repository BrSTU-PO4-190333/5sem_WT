## Launching the project

```bash
make gpi-run-mysql
```

- http://localhost:8000 - phpmyadmin
- http://localhost:8001 - site

## Generate a report

`docker-compose up` or

```bash
cd texlive-full
docker-compose run latex /bin/bash
cd /home/user/content/texlive-full
make gpi-build-rep
```

Regenerate report

```bash
make gpi-build-rep
```

Close the virtual machine

```bash
docker-compose down
```
