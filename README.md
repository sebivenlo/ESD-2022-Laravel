## Running the project

Use the following steps to get the project up and running on your system.

Prerequisits:
- You need to have docker installed and running.

Windows:
- run docker-compose up -d
- Log into the container with: docker-compose exec --user=sail laravel.test bash
- run: ./setup.sh
If the step above promps a permission denied error:
- use: sudo chmod 755 setup.sh
- run: ./setup.sh again

MacOS/Linux:
- run: Docker/bin/sail up -d
- Log into the container with: docker-compose exec --user=sail laravel.test bash
- run: ./setup.sh
If the step above promps a permission denied error:
- use: sudo chmod 755 setup.sh
- run: ./setup.sh again

All platforms:
- Finish with running yarn build(You need to do this every time you change something in a vue file.)

## Assignments
Task 1 Car Controller:
-Implement the index function by forwarding all cars to the frontend in the pre-defined array.
-Implement the request validation of the store method, file can be found in App/Http/Requests.
-Implement the store function within a database transaction.
-Implement the edit function by passing a specific car selected by ID to the frontend.
-Implement the update function within a database transaction.

Task 2 API Calls:
Tip, use an external tool like Postman to test the endpoint. API
-Implement a basic API function within the car controller, returning all cars within the system.(Do not worry about authorization).
-Implement an API endpoint by setting up the route in routes/api.php(Example is available in there for cars);

Task 3 Sales Controller:
-Create a migration to set up a Sales table(Make sure it is always in plural as this is the table naming convention that laravel/eloquent expects).
-Create a Sales Model, when in doubt look at https://laravel.com/docs/9.x/eloquent#generating-model-classes.(Models can be adjusted in any way you want however just generating it is enough for eloquent to function).
-Create a Sales Controller with an index and create/store method.
-Create the routes for the sales controller in the web.php routes file(Examples are available within the file for cars).
-Create a frontend overview page and create form(When in doubt, feel free to look in the resources/js/pages/Cars map for a basic vue setup that can be copied and adjusted.)

Tips:
Use artisan commands to set things up for Task 3 like:
php artisan make:migration name
php artisan make:model name
php artisan make:controller name
Vue files can be copied and adjusted to make a new front, data is received through props. For reference look back at the car controller and car overview.
For every change to vue files use yarn build to compile it to JS files.