## Running the project

Use the following steps to get the project up and running on your system.

Prerequisits:
- You need to have docker installed and running.

Steps:
- run: Docker/bin/sail up -d
- Log into the container with: docker-compose exec --user=sail laravel.test bash
- run: ./setup.sh