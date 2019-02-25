# CRUD API with Slim Framework (PHP)
This is simple CRUD API with slim framework.

## Requirments

  - PHP 7.0 or higher
  - Composer 
  - MySQL 5.6 / MariaDB 10.0 or higher for spatial features in MySQL
  - Postman
  
## Installation

For local development you may run PHP's built-in web server:

	`php -S localhost:1234`

Test the script by opening the following URL:

	`http://localhost:1234`

If you wanna use postman, import this collection :

	`crud-api-slim-php.postman_collection.json

Don't forget to modify the configuration at the bottom of the file.

## Configuration

Edit the following lines in the bottom of the file "`config/settings.php`":

	<?php
		return [
			"settings" => [
				"displayErrorDetails" => TRUE,
				"db" => [
						"driver" => 'mysql',
						"host" => 'xxx',
						"username" => 'xxx',
						"password" => 'xxx',
						"database" => 'crud-api-slim-php',
						"charset" => 'utf8',
						"collation" => 'utf8_unicode_ci',
						"prefix" => ''
				]
			]
		];
	?>




