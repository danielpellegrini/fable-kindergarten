<?php
		session_start();
		
		require_once('config.php');
		require_once('../../library/TwitterOAuth/twitteroauth/twitteroauth.php');
		
		$connection=new TwitterOAuth(TWITTER_USER_TIMELINE_CONSUMER_KEY,TWITTER_USER_TIMELINE_CONSUMER_SECRET,TWITTER_USER_TIMELINE_ACCESS_TOKEN,TWITTER_USER_TIMELINE_ACCESS_TOKEN_SECRET);

		$tweets=$connection->get('https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name='.TWITTER_USER_TIMELINE_USER.'&count='.TWITTER_USER_TIMELINE_COUNT);

		echo json_encode($tweets);
?>