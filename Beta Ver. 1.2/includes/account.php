<?php 
	echo '<div id="content"><div id="user-index">';
	$user = new user(); 
	if($user->check_log())
	{
		echo '
		<title>Account | '.$site_url3.'</title>
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/images/favicon.png" />
		<h4><a href="index.php?page=account_profile&id='.$checked_user_id.'">&raquo; My Profile</a></h4>
		<p>It\'s your profile. Do you need me to explain more?</p>
		<h4><a href="index.php?page=post&s=add">&raquo; Post</a></h4>
		<p>To post pictures and pictures, please click here first.</p>
		<h4><a href="index.php?page=favorites&amp;s=view&amp;id='.$_COOKIE['user_id'].'">&raquo; My Favorites</a>
		</h4>
		<p>View all of your favorites and remove them if you wish.</p>';


	}
	else
	{
		print '<h2>You are not logged in.</h2><h4><a href="index.php?page=login&amp;code=00">&raquo; Login</a></h4><p>If you already have an account, please login here. If you set cookie, you will be logged in automatically.</p>';
		if($registration_allowed == true)
			echo '<h4><a href="index.php?page=reg">&raquo; Sign Up</a></h4><p>Although you can use '.$site_url3.'  without an account, you can use "favorites" by registering, and contributors become easy to understand. Registration will end soon!</p>';
		else
			echo '<p><b>Registration is closed.</b></p>';
	}
?>

<!--<h4><a href="index.php?page=favorites&amp;s=list">&raquo; Everyone's Favorites</a></h4>
<p>View everyone's favorites.</p>-->
<h4><a href="index.php?page=account-options">&raquo; Options</a></h4>
<p>Manage account options.</p>
</div></div>
<?php 
if($user->check_log())
	{
	echo '<h4><a href="index.php?page=login&amp;code=01">&raquo; Logout</a></h4>
		<p>Make like a tree and get out of here! Click here to logout of your account.</p>';
	}
	else{}
	?>

<?php include_once("analyticstracking.php") ?>
<html>
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56386488-3', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
</body>
</html>