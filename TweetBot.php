<?php

    require_once(dirname(__FILE__).'/twitteroauth/twitteroauth/twitteroauth.php');
    require_once(dirname(__FILE__).'/lib/CSVReader.php');

    // developer info
    $consumerKey       = '';
    $consumerSecret    = '';
    $accessToken       = '';
    $accessTokenSecret = '';

    $oAuth = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

    // oAuth認証を利用し、twitterに投稿する
    $TWITTER_STATUS_UPDATE_URL = "http://api.twitter.com/1.1/statuses/update.json";
    $method  = 'POST';
    $message = getMessage();

    var_dump($message);

    $response = $oAuth->post('statuses/update', array('status' => $message));

    // 結果出力
    var_dump($response);

    /**
     * 投稿メッセージを取得する
     */
    function getMessage(){

        $reader = new CSVReader();

        $csv = './lib/csv/test.csv';

        $csv = $reader->read($csv);

        $i = mt_rand(1, 4);

        return (isset($csv[$i][1])) ? $csv[$i][1] : '';
    }

?>
