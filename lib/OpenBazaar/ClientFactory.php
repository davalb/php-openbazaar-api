<?php
/**
 * This file is part of the php-openbazaar-api.
 *
 * @link https://github.com/davalb/php-openbazaar-api
 * @package OpenBazaar
 * @author David Albrecht
 */
namespace OpenBazaar;

use GuzzleHttp\Client;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Subscriber\Log\LogSubscriber;

/**
 * Factory class that constructs and returns a configured GuzzleClient
 */
class ClientFactory
{
    /**
     * @param array $config array with config-data for service
     * @param boolean $log if set to true will activate logging for api calls
     * @return GuzzleHttp\Command\Guzzle\GuzzleClient
     */
    public static function factory(array $config = [], $log = false)
    {
        $defaultConfig = [
            'defaults' => [
                'cookies' => true
            ]
        ];
        $mergedConfig = self::mergeRecursive($defaultConfig, $config);
        $client = new Client($mergedConfig);
        if ($log == true) {
            $client->getEmitter()->attach(new LogSubscriber());
        }
        $service = include __DIR__ . '/../../resources/service.php';
        $description = new Description($service);

        return new GuzzleClient($client, $description);
    }

    /**
     * merges two arrays recursively
     * @param array $array1 first array
     * @param array $array2 second array
     * @return array $merged
     */
    public static function &mergeRecursive(array &$array1, &$array2 = null)
    {
        $merged = $array1;

        if (is_array($array2)) {
            foreach ($array2 as $key => $val) {
                if (is_array($array2[$key])) {
                    $merged[$key] = is_array($merged[$key]) ? self::mergeRecursive($merged[$key], $array2[$key]) : $array2[$key];
                } else {
                    $merged[$key] = $val;
                }
            }
        }

        return $merged;
    }
}
