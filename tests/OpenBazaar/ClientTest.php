<?php

namespace OpenBazaar\Test;

use OpenBazaar\ClientFactory;
use GuzzleHttp\Subscriber\History;
use GuzzleHttp\Subscriber\Mock;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    public function testGetProfile()
    {
        $history = new History();
        $client = $this->createClient('get_profile', $history);
        $response = $client->getProfile();
        $this->assertSame($response['profile']['about'], "drwasho's store");
        $this->assertSame($response['profile']['guid'], '375ead0967e63b6cec49f28d3be8731b20f081db');
        $this->assertSame($response['profile']['vendor'], true);
        $this->assertSame($response['profile']['name'], "drwasho");
    }
    public function testLoginFail()
    {
        $history = new History();
        $client = $this->createClient('post_login_fail', $history);
        $this->setExpectedException('GuzzleHttp\Command\Exception\CommandException', 'Validation errors: [username] is a required string');
        $response = $client->login();
        $this->setExpectedException('GuzzleHttp\Command\Exception\CommandException', 'Validation errors: [password] is a required string');
        $response = $client->login([
            'username' => 'username'
        ]);
        $this->assertSame($response['success'], false);
    }
    public function testLogin()
    {
        $history = new History();
        $client = $this->createClient('post_login', $history);
        $response = $client->login([
            'username' => 'username',
            'password' => 'password',
        ]);
        $this->assertSame($response['success'], true);
    }

    protected function createClient($mock, History $history)
    {
        $path = sprintf('%s/../fixtures/%s', __DIR__, $mock);
        $client = ClientFactory::factory();
        $httpClient = $client->getHttpClient();
        $mock = new Mock([
            $path
        ]);
        $httpClient->getEmitter()->attach($mock);
        $httpClient->getEmitter()->attach($history);

        return $client;
    }
}
