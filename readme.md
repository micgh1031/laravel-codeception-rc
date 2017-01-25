# Laravel App with Codeception
###### The PHP extension for Acceptance, Functional and Unit Testing
***

This is a web application developed with the Laravel Framework. 

## Installation

* `$ git clone https://micgh1031@bitbucket.org/micgh1031/laravel-codeception.git`
* `$ cd laravel-codeception`
* `$ composer install`
* `$ php artisan migrate`
* `$ php artisan serve`
* `$ composer require "codeception/codeception:*"`
* `$ vendor/bin/codecept bootstrap`

## Usage

* Go into the acceptance suite config file: acceptance.suite.yml. And change the URL to that of the project. 

	```url: http://localhost:8000/laranaija.0v```

* Go into the functional suite config file: functional.suite.yml. 

* Unit test suite still remains the same for now unit.suite.yml. 

* Start with Acceptance Testing via terminal. 

	```codecept generate:cept acceptance ProjectSubmission```

* It will generate a ProjectSubmissionCept.php file. 

* Then, change ProjectSubmissionCept.php. 

* Run the command via terminal: 
	
	```codecept run acceptance```


