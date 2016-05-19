<?php


    require_once(dirname(__FILE__)."/twitteroauth/twitteroauth/twitteroauth.php");

    // developer info
    $consumerKey       = 'hxlPpJHDZQU28NvsFVu0WMWcf';
    $consumerSecret    = 'ho1vt4Z9YTY8qUxR7Nt7hCJNQucIkYH03c8NXmwPq0MTpm1fTB';
    $accessToken       = '3274641626-693pHd2OBx3nitRw4vXJqpfgT4OyAhz0AdAKcLC';
    $accessTokenSecret = 'DPpTzAK3eiMcfhrGqoQgHQ41NX0B2mHFsGMG1rzZl5hmM’;

    $oAuth = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

    // oAuth認証を利用し、twitterに投稿する
    $TWITTER_STATUS_UPDATE_URL = "http://api.twitter.com/1.1/statuses/update.json";
    $method  = 'POST';
    $message = 'テスト';

    $response = $oAuth->post('statuses/update', array('status' => $message));

    // 結果出力
    var_dump($response);



