## OpenBazaar Api

This library is a PHP 5.x implementation of the [OpenBazaar REST API Documentation POST calls](https://gist.github.com/drwasho/bd4b28a5a07c5a952e2f),
[OpenBazaar REST API Documentation GET calls](https://gist.github.com/drwasho/742505589f62f6aa98b4)
The OpenBazaar API is a REST-based interface. By using this library you don't have to worry about communicating with the
API: all the hard work has already be done.

This API is build upon the shoulders of a giant: [Guzzle 5.0](http://guzzle.readthedocs.org/en/latest/). This is an absolutely awesome library.

## Installation
Start by [installing composer](http://getcomposer.org/doc/01-basic-usage.md#installation).
Next do:

    $ composer require davalb/php-openbazaar-api

## Requirements
PHP >=5.4.0

## Usage
Creating a new instance is as simple as:

```php
<?php
$service = OpenBazaar\ClientFactory::factory([
		'base_url' => 'http://your_ip_or_domain_here:18469/',
	]
);
$response = $service->login([
	'username' => 'your_username_here',
	'password' => 'your_password_here',
]);
// get Profile will return your profile info
$result = $service->getProfile();
// get Listings for the store with the given guid
$result = $service->getListings([
	'guid' => 'a06aa22a38f0e62221ab74464c311bd88305f88c'
]);
// follow another page
$result = $service->follow(
	['guid' => 'a06aa22a38f0e62221ab74464c311bd88305f88c']
);
// change your username
$result = $service->changeProfile(
	['name' => 'New Name']
);
?>
```
It is necessary to run the login first. After that you can run more api-calls without worrying about the authentication, since the cookie is persisted. 

### More info and plugins
For more information about Guzzle and its plugins checkout [the docs.](http://guzzle.readthedocs.org/en/latest/)

## Contributing
Implemented a missing call? PR's are welcome!
The project follows the cakephp coding standards.
Plese install and use the [php code sniffer](https://github.com/cakephp/cakephp-codesniffer) before sending a pull request
```
phpcs --standard=cakephp php-openbazaar-api/
```
Also please provide tests for code that you write. Tests can be run like this
```
bin/phpunit davalb/php-openbazaar-api/tests/
```
