<?php
	$user = new user();
	if($_GET['code'] == "00")
	{
		if($user->check_log())
		{
			header("Location:index.php?page=account");
			exit;
		}
		if(isset($_POST['user']) && $_POST['user'] != "" && isset($_POST['pass']) && $_POST['pass'] != "")
		{
			$username = $db->real_escape_string(htmlentities($_POST['user'], ENT_QUOTES, 'UTF-8'));
			$password = $db->real_escape_string($_POST['pass']);
			if(!$user->login($username, $password))
				header("Location:index.php?page=login&code=00");
			else
				header("Location:index.php?page=account");
			exit;
		}
		header("Cache-Control: store, cache");
		header("Pragma: cache");
		require "includes/header.php";
		echo '<form method="post" action="">
		<table><tr><td>
		Username:<br />
		<input type="text" name="user" value="" />
		</td></tr>
		<tr><td>
		Password:<br />
		<input type="password" name="pass" value="" />
		</td></tr>
		<tr><td>
		<input type="submit" name="submit" value="Log in" />
		</td></tr>
		<tr><td>
		<a href="index.php?page=reset_password">forgot password?</a>
		</td></tr></table></form>';
	}
	if($_GET['code'] == "01")
		$user->logout();
?>
</div>
<?php include_once("analyticstracking.php") ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56386488-3', 'auto');
  ga('send', 'pageview');

</script>

</body></html>