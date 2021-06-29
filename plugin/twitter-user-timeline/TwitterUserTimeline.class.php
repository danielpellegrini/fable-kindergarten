<?php

/******************************************************************************/
/******************************************************************************/

class TwitterUserTimeline
{
	/**************************************************************************/

	function __construct()
	{
		$this->includeLibrary();
	}
	
	/**************************************************************************/
	
	function includeLibrary()
	{
		require_once(dirname(__FILE__).'/config.php');
		require_once(dirname(__FILE__).'/../../library/TwitterOAuth/twitteroauth/twitteroauth.php');		
	}
	
	/**************************************************************************/
	
	function create()
	{
		$connection=new TwitterOAuth(TWITTER_USER_TIMELINE_CONSUMER_KEY,TWITTER_USER_TIMELINE_CONSUMER_SECRET,TWITTER_USER_TIMELINE_ACCESS_TOKEN,TWITTER_USER_TIMELINE_ACCESS_TOKEN_SECRET);

		$tweets=$connection->get('https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name='.TWITTER_USER_TIMELINE_USER.'&count='.TWITTER_USER_TIMELINE_COUNT);

		if(property_exists((object)$tweets,'errors') && is_array($tweets->{'errors'}) && count($tweets->{'errors'}))
			return(null);
		
		$html=null;
		
		foreach($tweets as $tweet)
		{
			$html.=
			'
				<li class="template-layout-column-left">
					<i></i>
					<p>'.htmlspecialchars($tweet->{'text'}).'</p>
					<div></div>
					<span>'.htmlspecialchars($tweet->{'user'}->{'screen_name'}).'</span>
				</li>
			';
		}
		
		$html=
		'
			<ul class="template-layout-100">
				'.$html.'
			</ul>
			<div class="template-pagination template-pagination-style-1"></div>
		';
	
		return($html);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/