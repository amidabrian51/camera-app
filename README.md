# Camera-app

## The Concept

To be build an API using the PHP Laravel Framework.



### Welcome to "Camera App API"
![GET request](http://i.imgur.com/v2MBBNK.png)

## Accessing the site

* Download composer.
* cd to the project.
* Rename ```.env.example``` file to ``` .env ```then fillout database information.
* For instance I have put the name of the database as student, username as root and password leave empty.
* Run ``` composer install ``` or ```php composer.phar install ```.
* This will generate a key in your .env file. So you must rename it before this step.
* Run ``` php artisan db:seed ```.
* Run ``` php artisan key:generate ```.
* Run ```php artisan migrate```. This will setup the database.
* Run ```php artisan serve```. This will run the server.

### You can now access your project at http://178.62.7.224/api/cameras .
* This can be done through Postman or Curl.
* To add cameras send a Post Request to http://178.62.7.224/api/cameras.
* Also, you can update the camera using a put request http://178.62.7.224/api/cameras/{camera}
![Add Camera](http://i.imgur.com/XTTu3yE.png)

## Using the site

### Navigating the api

* Lets you view cameras.
* Lets you add cameras.
* Lets you update cameras.


===============================================================================

# Tech Team

Built by:

 - Brian Patterson


## Notes on the build
Built using the laravel Framework.  

## Key learning


## What went well

* Learning about the structure of the laravel Framework.
* How the MVC Framework works within this Framework.
* Separation of concerns using Laravel file structure.
* Learning about creating Models Views and Controllers using Artisan.
* Building an API using laravel.
* Setting up a LEMP stack on the Digital Ocean server.
* LEMP stack is Linux, Nginx, Mysql and PHP.


## Supporting user stories

The following user stories apply:
```
As a user
to add a new camera with the fields “name”,
"condition", "price", "type".
```
```
As a user
To view cameras.
```
