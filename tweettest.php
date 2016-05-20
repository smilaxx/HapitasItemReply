<?php
    require "twitteroauth/autoload.php";
    use Abraham\TwitterOAuth\TwitterOAuth;

    // developer info
    $consumerKey       = "hxlPpJHDZQU28NvsFVu0WMWcf";
    $consumerSecret    = "ho1vt4Z9YTY8qUxR7Nt7hCJNQucIkYH03c8NXmwPq0MTpm1fTB";
    $accessToken       = "3274641626-693pHd2OBx3nitRw4vXJqpfgT4OyAhz0AdAKcLC";
    $accessTokenSecret = "DPpTzAK3eiMcfhrGqoQgHQ41NX0B2mHFsGMG1rzZl5hmM";

    $oAuth = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

    $res = $oAuth->post("statuses/update", array("status" => "はしもと"));

    // 結果出力
    var_dump($res);



