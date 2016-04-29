<?php
/**
 * This file is part of the php-openbazaar-api.
 *
 * @link https://github.com/davalb/php-openbazaar-api
 * @package OpenBazaar
 * @author David Albrecht
 */
namespace OpenBazaar;

/**
 * Factory class that constructs and returns a configured GuzzleClient
 */
class Filter
{
    /**
     * @param string $accountType name of a social network
     * @return bool
     */
    public static function isValidAccountType($accountType)
    {
        $validTypes = [
            'facebook',
            'twitter',
            'instagram',
            'snapchat',
        ];
        if (in_array($accountType, $validTypes)) {
            return true;
        } else {
            throw new \Exception(sprintf('%s is not a valid account type. The API only supports the following types: %s', $accountType, implode(', ', $validTypes)));
        }
    }
}
