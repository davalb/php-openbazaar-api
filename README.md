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
$this->service = OpenBazaar\ClientFactory::factory([
		'base_url' => 'http://your_ip_or_domain_here:18469/',
	]
);
$response = $this->service->login([
	'username' => 'your_username_here',
	'password' => 'your_password_here',
]);
$result = $this->service->getProfile();
?>
```
It is necessary to run the login first. After that you can run more api-calls without worrying about the authentication, since the cookie is persisted. 

### More info and plugins
For more information about Guzzle and its plugins checkout [the docs.](http://guzzle.readthedocs.org/en/latest/)

## Contributing
Implemented a missing call? PR's are welcome! 

