<?php

namespace Source\Core;

/**
 * Class Utm
 *
 * @package Source\Core
 */
class Utm
{
    /**
     * Utm constructor.
     */
    public function __construct() {}

    /**
     *
     * 
     */
    public function init()
    {
        $queryParams = (!empty($_SERVER['QUERY_STRING'])) ? $_SERVER['QUERY_STRING'] : '';

        if ($queryParams) {
            if (empty($queryParams)) {
                return;
            }

            $parsedQueryStrings = $this->parseQueryStringCookie($queryParams);

            $concatQueryStrings = [];

            foreach ($parsedQueryStrings as $param => $value) {
                $concatQueryStrings[] = $param . "=" . $this->removeSpecialChar($value);
            }

            $concatQueryStrings = implode('&', $concatQueryStrings);

            if (count($parsedQueryStrings) == 0) {
                return;
            }

            if (isset($_COOKIE['urlQueries'])) {
                setrawcookie("urlQueries", "", -1, '/');
                setrawcookie("urlQueries", $concatQueryStrings, time() + 3600, '/');
            } else {
                setrawcookie("urlQueries", $concatQueryStrings, time() + 3600, '/');
            }
        }

        return !empty($concatQueryStrings) ? $concatQueryStrings : "no_utm_source";
    }

    /**
     *
     * @param mixed $queryStrings
     * 
     */
    private function parseQueryStringCookie($queryStrings)
    {
        $allowedParams = ["utm_source", "utm_medium", "utm_campaign", "utm_content", "utm_term", "gclid", "fbclid"];

        parse_str($queryStrings, $allParams);

        $filteredParams = array_filter(
            $allParams,
            function ($key) use ($allowedParams) {
                return in_array($key, $allowedParams);
            },
            ARRAY_FILTER_USE_KEY
        );

        return $filteredParams;
    }

    /**
     *
     * @param mixed $str
     * 
     */
    private function removeSpecialChar($str)
    {
        // Using str_replace() function
        // to replace the word
        $res = str_replace(array('\'', '"', ',', ';', '<', '>', ' '), '', $str);

        // Returning the result
        return $res;
    }
}