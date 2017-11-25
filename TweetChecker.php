<?php

// Set timezone. (Modify to match your timezone) If you need help with this, you can find it here.              (http://php.net/manual/en/timezones.php)
	date_default_timezone_set('America/New_York');
	
	// Require TwitterOAuth files. (Downloadable from : https://github.com/abraham/twitteroauth)
	require_once("TwitterOAuth.php");
	
	// Twitter keys (You'll need to visit https://dev.twitter.com and register to get these.
		$consumerkey         = "QueAfQcIO2abML06Agq9EqwCi";
		$consumersecret      = "SXGpe9PZl8n7TbNxcDcZfYqyuis8DAEn8h0w7rRTYRf8T72PWT";
		$accesstoken         = "934196992795906048-ibkBh2c66f97XcJex9QeVFIi4vveXsK";
		$accesstokensecret   = "ygyR3rXlDzitl5d0IFUpamZGw5NBbcQhvF3O2Jz2Kalz1";
		

    // Function to authenticate app with Twitter.
	function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
	  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
	  return $connection;
	}


?>