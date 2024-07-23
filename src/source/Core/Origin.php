<?php

namespace Source\Core;

/**
 * Class Origin
 *
 * @package Source\Core
 */
class Origin
{
    /**
     * Origin constructor.
     */
    public function __construct() {}

    /**
     *
     * 
     */
    public function init()
    {
        $urlReferrer = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : SITE_PROD;

        $referrer = (empty($urlReferrer) ? [] : explode('.', $urlReferrer));
        $referrerFull = (empty($urlReferrer) ? "" : $urlReferrer);

        $mediaUrl = (isset($_GET['mID'])) ? $_GET['mID'] : null;

        if (!empty($mediaUrl)) {
            $qsMidia = $mediaUrl;
            setcookie("qsMidia", "", -1, '/');
            setcookie("qsMidia", $qsMidia, time() + 3600, '/');
        } else if (count($referrer) > 1 && $referrer[1] != ORIGIN_REFER &&  $referrer[1] != 'mmserver') {
            if ($referrer[1] == 'google') {
                $qsMidia = "16";
            } else if ($referrer[1] == 'facebook') {
                $qsMidia = "15";
            } else if ($referrer[1] == 'twitter' || $referrer[1] == 't.co') {
                $qsMidia = "16";
            } else {
                $qsMidia = "57";
            }
        } else {
            $qsMidia = "46";
        }

        if (!isset($_COOKIE['qsMidia'])) {
            setcookie("qsMidia", "", -1, '/');
            setcookie("qsMidia", $qsMidia, time() + 3600, '/');
        }

        return $qsMidia;
    }
}