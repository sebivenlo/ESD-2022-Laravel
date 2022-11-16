## Running the project

Use the following steps to get the project up and running on your system.

Prerequisits:
- You need to have docker installed and running.

Windows:
- run docker-compose up -d
- Log into the container with: docker-compose exec --user=sail laravel.test bash
- run: ./setup.sh

MacOS/Linux:
- run: Docker/bin/sail up -d
- Log into the container with: docker-compose exec --user=sail laravel.test bash
- run: ./setup.sh
If the step above promps a permission denied error:
- use: sudo chmod 755 setup.sh
- run: ./setup.sh again
