# Just a docker sandbox
This repository is not very useful. It simply allows me to run tests on docker. 

# Command
## initialize docker
For this repo, you don't need to do it, since it's already done.
```bash
docker init
```

## Add rewrite
Add this line in the Dockerfile
```docker
RUN a2enmod rewrite
```

## build 
```
docker compose up --build
```