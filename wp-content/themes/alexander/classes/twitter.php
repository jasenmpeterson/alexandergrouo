<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 9/5/17
 * Time: 9:07 AM
 */

namespace twitter_feed;

use Abraham\TwitterOAuth\TwitterOAuth;

class twitter {

	public $content;
	public $connection;
	public $screen_name;

	public function __construct()
	{
		$access_token = '776846844676730880-YUvVhKfQs7vSEiZWE0PWpK0bTrq2uQU';
		$access_token_secret = 'lsPHepKlhkLhXKDaTA3fYDkdc7ydL3aMAfqSkDJoxY79V';
		$this->screen_name = 'jbirdpeterson';

		$this->connection = new TwitterOAuth('3fmtYKIIFXOJCoI5E8HykT0sG', 'suvly4KgAMIubMhDXxqhc6RqVu7VZVHZp0kjm5nqiC18ebq1rd', $access_token, $access_token_secret);
	}

	public function display_feed()
	{
		$this->content = $this->connection->get("statuses/user_timeline", ["count" => 5, "exclude_replies" => true, "screen_name" => $this->screen_name]);
	}
}