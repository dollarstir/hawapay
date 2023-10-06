<?php

use Firebase\JWT\Key;


class jwtauth
{
    /**
     * @param string $token = jwt token
     * @param string $key = secret key
     * @param string $algorithm = algorithm used to encode the token
     *  @return boolean
     */
    public static function isValidtoken($token, $key, $algorithm)
    {
        require_once __DIR__. '/../../vendor/autoload.php';
       
        try {
            $decoded = \Firebase\JWT\JWT::decode($token, new Key($key, $algorithm));
            return true;
        } catch(Exception $e) {
            return false;
        }
    }

    /**
     * @param string $token = jwt token
     * @param string $key = secret key
     * @param string $algorithm = algorithm used to decode the token
     * 
     * @return mixed $decoded = array of decoded data
     */
    public static function decodeToken($token, $key, $algorithm)
    {
        require_once __DIR__. '/../../vendor/autoload.php';
        try {
            $decoded = \Firebase\JWT\JWT::decode($token, new Key($key, $algorithm));
            return $decoded;
        } catch(Exception $e) {
            return false;
        }
    }

    /**
     * @param array $payload = array of data to be encoded
     * @param string $key = secret key
     * @param string $algorithm = algorithm used to encode the token
     * @return string $token = jwt token
     * 
     */
    public static function encodeToken($payload, $key, $algorithm)
    {
        require_once __DIR__. '/../../vendor/autoload.php';
        try {
            $token = \Firebase\JWT\JWT::encode($payload,$key,$algorithm );
            return $token;
        } catch(Exception $e) {
            return "Error: " . $e->getMessage() . "\n";
        }
    }

    /**
     * @param string $token = jwt token
     * @param string $key = secret key
     * @param string $algorithm = algorithm used to decode the token
     *  @return boolean
     */

    public static function isTokenexpired($payload)
    {
        require_once __DIR__. '/../../vendor/autoload.php';
        try {
           
            $exp = $payload->expiry;
            $now = time();
            // var_dump($exp < $now);die;
            if ($exp < $now) {
                return true;
            } else {
                return false;
            }
        } catch(Exception $e) {
            return "Error: " . $e->getMessage() . "\n";
        }
    }

}