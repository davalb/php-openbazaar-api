<?php
/**
 * This file is part of the php-openbazaar-api.
 *
 * @link https://github.com/davalb/php-openbazaar-api
 * @package OpenBazaar
 * @author David Albrecht
 */
namespace OpenBazaar\Test;

use GuzzleHttp\Subscriber\History;
use GuzzleHttp\Subscriber\Mock;
use OpenBazaar\ClientFactory;

/**
 * TestClass for OpenBazaar Client
 */
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
    public function testGetListings()
    {
        $history = new History();
        $client = $this->createClient('get_listings', $history);
        $response = $client->getListings();
        $this->assertSame($response['listings'][0]['contract_hash'], "042fe5466b814394ea27532a7436e596414e93a3");
    }
    public function testGetFollowers()
    {
        $history = new History();
        $client = $this->createClient('get_followers', $history);
        $response = $client->getListings();
        $this->assertSame($response['followers'][0]['guid'], "53328edb89afa8a653b4fa062f0cb255aa4a1e50");
    }
    public function testGetFollowing()
    {
        $history = new History();
        $client = $this->createClient('get_following', $history);
        $response = $client->getListings();
        $this->assertSame($response['following'][0]['guid'], "f9ea0b394c58e14c75e8a754ae721ad8bb0cf850");
    }
    public function testGetSettings()
    {
        $history = new History();
        $client = $this->createClient('get_settings', $history);
        $response = $client->getSettings();
        $this->assertSame($response['refund_address'], "n2eMqTT929pb1RDNuqEnxdaLau1rxy3efi");
    }
    public function testGetNotificationss()
    {
        $history = new History();
        $client = $this->createClient('get_notifications', $history);
        $response = $client->getNotifications();
        $this->assertSame($response['notifications'][0]['guid'], "fa5025f8ac9fcba532cff9608d1c080a84e2f7a1");
        $this->setExpectedException('GuzzleHttp\Command\Exception\CommandException', 'Validation errors: [limit] must be of type integer');
        $response = $client->getNotifications(['limit' => 'string']);
    }
    public function testGetChatMessages()
    {
        $history = new History();
        $client = $this->createClient('get_chat_messages', $history);
        $response = $client->getChatMessages(
            ['guid' => 'fa5025f8ac9fcba532cff9608d1c080a84e2f7a1']
        );
        $this->assertSame($response[0]['guid'], "fa5025f8ac9fcba532cff9608d1c080a84e2f7a1");
        $this->setExpectedException('GuzzleHttp\Command\Exception\CommandException', 'Validation errors: [guid] is a required string');
        $response = $client->getChatMessages([
            'limit' => 'string'
        ]);
    }
    public function testGetChatConversations()
    {
        $history = new History();
        $client = $this->createClient('get_chat_conversations', $history);
        $response = $client->getChatConversations();
        $this->assertSame($response[0]['guid'], "04b94de3d69aadbbcef31e6059fc5255655df45a");
    }
    public function testGetSales()
    {
        $history = new History();
        $client = $this->createClient('get_sales', $history);
        $response = $client->getSales();
        $this->assertSame($response[0]['order_id'], "549c844c08048166ed4ac9d44d9bf8916c7ce9cb");
    }
    public function testGetPurchases()
    {
        $history = new History();
        $client = $this->createClient('get_purchases', $history);
        $response = $client->getPurchases();
        $this->assertSame($response[0]['order_id'], "8bd10ebab092d0fbf2cec1f2d0ad84dfa0f4f8df");
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
    public function testFollow()
    {
        $history = new History();
        $client = $this->createClient('follow_success', $history);
        $this->setExpectedException('GuzzleHttp\Command\Exception\CommandException', 'Validation errors: [guid] is a required string');
        $response = $client->follow(
            ['guid' => null]
        );
    }
    public function testUnfollow()
    {
        $history = new History();
        $client = $this->createClient('unfollow_success', $history);
        $this->setExpectedException('GuzzleHttp\Command\Exception\CommandException', 'Validation errors: [guid] is a required string');
        $response = $client->unfollow(
            []
        );
    }
    public function testChangeFailure()
    {
        $history = new History();
        $client = $this->createClient('change_profile_failure', $history);
        $this->setExpectedException('GuzzleHttp\Command\Exception\CommandException', 'Validation errors: [name] must be of type string
[location] must be of type string
[handle] must be of type string
[about] must be of type string
[short_description] must be of type string
[nsfw] must be of type boolean
[vendor] must be of type boolean
[moderator] must be of type boolean
[website] must be of type string
[email] must be of type string
[primary_color] must be of type string
[secondary_color] must be of type string
[text_color] must be of type string
[background_color] must be of type string
[avatar] must be of type string
[header] must be of type string
[pgp_key] must be of type string');
        $response = $client->changeProfile(
            [
                'name' => false,
                'location' => false,
                'handle' => false,
                'about' => false,
                'short_description' => false,
                'nsfw' => 'string',
                'vendor' => 'string',
                'moderator' => 'string',
                'website' => false,
                'email' => false,
                'primary_color' => false,
                'secondary_color' => false,
                'text_color' => false,
                'background_color' => false,
                'avatar' => false,
                'header' => false,
                'pgp_key' => false,
            ]
        );
    }
    public function testCreateContract()
    {
        $history = new History();
        $this->setExpectedException('GuzzleHttp\Command\Exception\CommandException', 'Validation errors: [expiration_date] is a required string
[metadata_category] is a required string
[title] is a required string
[description] is a required string
[currency_code] is a required string
[price] is a required string
[process_time] is a required string
[nsfw] is a required string');
        $client = $this->createClient('post_contracts', $history);
        $response = $client->createContract();
    }
    public function testUploadImage()
    {
        $history = new History();
        $this->setExpectedException('GuzzleHttp\Command\Exception\CommandException', 'Validation errors: [image] must be of type string
[avatar] must be of type string
[header] must be of type string');
        $client = $this->createClient('upload_image', $history);
        $parameters = [
            'image' => false,
            'avatar' => false,
            'header' => false,
        ];
        $response = $client->uploadImage($parameters);
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
    public function testCreateSocialAccount()
    {
        $history = new History();
        $client = $this->createClient('create_social_account_success', $history);
        $this->setExpectedException('\Exception', "unknown_account_type is not a valid account type. The API only supports the following types: facebook, twitter, instagram, snapchat");
        $response = $client->createSocialAccount(
            [
                'account_type' => 'unknown_account_type',
                'username' => 'user',
            ]
        );
        $this->setExpectedException('GuzzleHttp\Command\Exception\CommandException', 'Validation errors: [username] is a required string');
        $response = $client->createSocialAccount(
            [
                'account_type' => 'twitter',
            ]
        );
    }
    public function testMakeModerator()
    {
        $history = new History();
        $client = $this->createClient('make_moderator_success', $history);
        $response = $client->makeModerator();
        $this->assertTrue($response['success']);
    }
    public function testUnmakeModerator()
    {
        $history = new History();
        $client = $this->createClient('make_moderator_success', $history);
        $response = $client->unmakeModerator();
        $this->assertTrue($response['success']);
    }
    public function testChangeSettings()
    {
        $history = new History();
        $this->setExpectedException('GuzzleHttp\Command\Exception\CommandException', "Validation errors: [currency_code] is a required string
[country] is a required string
[language] is a required string
[time_zone] is a required string
[notifications] is a required string
[shipping_addresses] is a required string
[blocked] is a required string
[terms_conditions] is a required string
[refund_policy] is a required string
[moderators] is a required string");
        $client = $this->createClient('change_settings_success', $history);
        $response = $client->changeSettings();
    }
    public function testMarkNotificationAsRead()
    {
        $history = new History();
        $this->setExpectedException('GuzzleHttp\Command\Exception\CommandException', "Validation errors: [id] is a required string");
        $client = $this->createClient('mark_notification_as_read', $history);
        $response = $client->markNotificationAsRead();
    }
    public function testMarkChatMessageAsRead()
    {
        $history = new History();
        $this->setExpectedException('GuzzleHttp\Command\Exception\CommandException', "Validation errors: [guid] is a required string");
        $client = $this->createClient('mark_chat_message_as_read', $history);
        $response = $client->markChatMessageAsRead();
    }
}
