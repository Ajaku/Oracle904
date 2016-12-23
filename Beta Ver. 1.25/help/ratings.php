<?php
	require "../inv.header.php";
	require "../includes/header.php";
?>
<div id="content">
<div class="help">

  <h1>Help: Ratings</h1>

<div class="section">
<p>All posts on <?php echo $site_url3;?> have one of three types of ratings: Safe, Questionable, and Explicit. Safe is the default rating if you do not choose to specify one. <strong>Please take note</strong>: occasionally explicit images will be marked safe, and vice versa. You should not depend completely on rating filters unless you can tolerate the occasional wrongly rated image. If this happens to you, fix it so that other users don't have that happen to them.</p>
<p><?php echo $site_url3;?>のすべての投稿には、Safe、Questionable、Explicitの3種類の評価があります。 何も選択しなければ、安全に設定されます。 <strong>注意</strong>：この評価に反する画像が出てくる可能性があります。 あくまで簡易的に作っていますので、この評価に完全依存することは望ましくはありません。

<div class="section">
	<h4>Explicit</h4>
	<p>It is mainly a sexual description and a loose image. I think that there is hardly anything, but I will set it up just in case.</p>
	<p>主に、性的描写になりゆる画像です。殆ど無いとは思いますが、念のために設置しておきます。</p>
</div>
  
<div class="section">
	<h4>Safe</h4>
	<p>Safe posting is an image with no content on antisocial images or crime.Any sort of sexually suggestive pose are <b>NOT</b> safe and belong in questionable. Swimsuits and lingerie are borderline cases; some are safe, some are questionable.</p>
	<p>安全な投稿とは、反社会的画像や犯罪に関する内容が全くない画像です。 性的に示唆するポーズの画像は安全とは言えません。 水着やランジェリーはボーダーラインです。 いくつかは安全ですが、いくつかは疑わしいです。
</div>
  
<div class="section">
	<h4>Questionable</h4>
	<p>Since the degree of the image also seems to be divided according to the individual opinion, the evaluation is made to be editable by the user himself.</p>
	<p>画像の度合いも、個人の見解により分かれると思いますので 評価はユーザー自身が編集できるようになっています。</p>
</div>

<div class="section">
	<h4>Search</h4>
	<p>You can filter search results by querying for <code>rating:safe</code>, <code>rating:questionable</code>, or <code>rating:explicit</code>. You can also combine them with other tags and they work as expected.</p>
	<p>If you want to remove a rating from your search results, use <code>-rating:safe</code>, <code>-rating:questionable</code>, and <code>-rating:explicit</code>.</p>
	<p><code>rating:safe</code>, <code>rating:questionable</code>, or <code>rating:explicit</code>. と検索することで検索結果を絞り込むことができます。 他のタグと組み合わせることも可能です。</p>
	<p>検索結果から評価を除外する場合は <code>-rating:safe</code>, <code>-rating:questionable</code>,  <code>-rating:explicit</code>と記述します。</p>
</div>
</div></body></html>