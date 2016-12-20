<?php
	echo '
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/images/favicon.png" />';

	if(isset($_GET['id']) && is_numeric($_GET['id']) && isset($_GET['type']))
	{
		$user = new user();
		$id = $db->real_escape_string($_GET['id']);
		$type = $db->real_escape_string($_GET['type']);
		$ip = $db->real_escape_string($_SERVER['REMOTE_ADDR']);
		$user_id ="0";
		$query_part = "";
		if($user->check_log())
		{
			$user_id = $checked_user_id;
			$query_part = " OR post_id='$id' AND user_id='$user_id'";
		}
		$query = "SELECT COUNT(*) FROM $post_vote_table WHERE post_id='$id' AND ip='$ip'".$query_part;
		$result = $db->query($query);
		$row = $result->fetch_assoc();
		if($row['COUNT(*)'] < 1)
		{
			$result->free_result();
			if($type == "up")
				$query = "UPDATE $post_table SET score=score+1 WHERE id='$id'";
			else if($type == "down")
				$query = "UPDATE $post_table SET score=score-1 WHERE id='$id'";
			else
				exit;
			$db->query($query);
			$query = "INSERT INTO $post_vote_table(rated, ip, post_id, user_id) VALUES('$type', '$ip', '$id', '$user_id')";
			$db->query($query);
			$cache = new cache();
			$cache->destroy("cache/$id/post.cache");
		}
		$query = "SELECT score FROM $post_table WHERE id='$id'";
		$result = $db->query($query);
		$row = $result->fetch_assoc();
		echo $row['score'];
		$result->free_result();
	}
?>


<?php include_once("analyticstracking.php") ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56386488-3', 'auto');
  ga('send', 'pageview');

</script>
