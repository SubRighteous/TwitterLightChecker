<?php

require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
     'oauth_access_token' => "934196992795906048-ibkBh2c66f97XcJex9QeVFIi4vveXsK",
     'oauth_access_token_secret' => "ygyR3rXlDzitl5d0IFUpamZGw5NBbcQhvF3O2Jz2Kalz1",
     'consumer_key' => "QueAfQcIO2abML06Agq9EqwCi",
     'consumer_secret' => "SXGpe9PZl8n7TbNxcDcZfYqyuis8DAEn8h0w7rRTYRf8T72PWT"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
        
$requestMethod = "GET";
         
$getfield = '?screen_name=RysFamilyLights&count=20';   
        
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest(),$assoc = TRUE);
   
if($string["errors"][0]["message"] != "")
{
    echo "<h3>Oh, There was a problem. </h3><p>It Seems that Twitter has returned an error:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();
}

$TweetText = "".$items['text'];

echo $TweetText;

//foreach($string as $items)
//    {
//        echo "Time and Date of Tweet: ".$items['created_at']."<br />";
//        echo "Tweet: ". $items['text']."<br />";
//        echo "Tweeted by: ". $items['user']['name']."<br />";
//        echo "Screen name: ". $items['user']['screen_name']."<br />";
//        echo "Followers: ". $items['user']['followers_count']."<br />";
//        echo "Friends: ". $items['user']['friends_count']."<br />";
//        echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
//    }

 //  while(1==1){
 //     if($TweetText != "Turn A1 On" && $TweetText != "Turn A1 Off"){
 //         echo "<h>The Users has posted something other than turn on the lights</h>"
 //     }
 //     if($TweetText == "Turn A1 On"){
 //         echo "<h>Turning A1 On</h>";
 //         echo exec("heyu turn a1 On");
 //     }
 //     if($TweetText == "Turn A1 Off"){
 //           echo "Turning A1 off";
 //           echo exec("heyu turn A1 off");    
 //     }
 //      sleep(10);
 //   }

while (1==)
    echo "Hellow";
    sleep(1);

?>

