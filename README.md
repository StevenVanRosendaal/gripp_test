## How To Run

Execute the following command in your webroot folder

`git clone https://github.com/StevenVanRosendaal/gripp_test.git`

Execute the following commands in the project root folder

`npm install`

`npm run production`

Create a database named "gripp_test" with username "root" and password "root", and then execute the following code

`php artisan migrate:fresh --seed`

Execute the following command in the project root folder to deploy the site

`php artisan serve`

Then open http://127.0.0.1:8000 in the browser.
