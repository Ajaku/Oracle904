<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
<?php
	echo '

		<title>'.$site_url3.' | PSO2 SS Save site</title>
		<link rel="stylesheet" type="text/css" media="screen" href="'.$site_url.'/default.css?2" title="default" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="pso2, phantasy star online2, ss, 加工, 自キャラ" />
		<meta name="description" content="Oracle904は自身のSSを誰かと共有したい、見てもらいたい そういった思いから作られたサイトです。大切なデータをバックアップする目的としても最適です!" />
		<link rel="stylesheet" type="text/css" media="screen" href="default.css" title="default" />
		<link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/notosansjp.css">
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="apple-touch-icon" href="../images/favicon.png" />

		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="A Bird">
		<meta name="twitter:creator" content="@Ajaku_PSO2">
		<meta name="twitter:title" content="'.$site_url3.' | PSO2 SS Save site">
		<meta name="twitter:description" content="Oracle 904 is a site created from the desire to share your SS with others. Ideal for backing up important data!">
		<meta name="twitter:image" content="http://ajaku.luna.ddns.vc/test_2/home.png">
	</head>
<body>
	<br /><br /><br />
	<div id="static-index">
		<h1 style="font-size: 52px; margin-top: 1em;"><a href="'.$site_url.'">'.$site_url3.'</a></h1>
	';
?>
	<div class="space" id="links">
		<a href="index.php?page=post&amp;s=list" title="A paginated list of every post">Posts</a>
		<a href="index.php?page=comment&amp;s=list">Comments</a>
		<a href="index.php?page=favorites&amp;s=list">Favorites</a>
		<a href="index.php?page=account&amp;s=home">My Account</a>
	</div>
	<div class="space">
		<form action="index.php?page=search" method="post">
			<input id="tags" name="tags" size="30" type="text" value="" /><br/>
			<input name="searchDefault" type="submit" value="Search" />
		</form>
	</div>
	<div style="font-size: 80%; margin-bottom: 2em;">
		<p>
<?php
	$query = "UPDATE $hit_counter_table SET count=count+1";
	$db->query($query);
	$query = "SELECT t1.pcount, t2.count FROM $post_count_table AS t1 JOIN $hit_counter_table as t2 WHERE t1.access_key='posts'";
	$result = $db->query($query);
	$row = $result->fetch_assoc();
	echo '<small>Total number of visitors so far:'.number_format($row['count']).'</small><br />Serving '.number_format($row['pcount']).' posts  -  Running <a href="http://gelbooru.com/">Gelbooru</a> Beta 0.1.11
	</p><br />';
	for ($i=0;$i<strlen($row['pcount']);$i++) 
	{
		$digit=substr($row['pcount'],$i,1);
		print '<img src="./counter/'.$digit.'.gif" border="0" alt="'.$digit.'"/>';

	}
	echo '<br /><br /><small style="color: #777777;">Original source by <a href="Danbooru">Danbooru</a></small><br /><br /></div></div><br /><br /><br /><br />
	</body>
</html>';

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

