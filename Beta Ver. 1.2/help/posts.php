<?php
	require "../inv.header.php";
	require "../includes/header.php";
?>
<link rel="stylesheet" type="text/css" media="screen" href="default.css" title="default" />


<div id="content">
<div class="help">
  <h1>Help: Posts</h1>
  <p>Posts can upload images they own. For each image, you can use the tag, comment, note. Members who have an account can use the favorite function.</p>
  <p>投稿は自分が持っている画像をアップロードすることができます。画像には、それぞれ タグ、コメント、ノートが使えます。アカウントを持っているメンバーはお気に入り機能が使えます。</p>
  
<div class="section">
	<h4>Search</h4>
	<p>Searching for posted images is easy. Just type the tags you want to search, separated by spaces. As a result, if you only have one tag, a vague image will be easier to find by using <strong>multiple tags</strong>.</p>
	<p>投稿された画像を検索するのは簡単です。 検索したいタグをスペースで区切って入力するだけです。 たとえば、一つのタグだけだと漠然とした画像が、<strong>複数タグ</strong>を使うことによって、より見つけやすくなります。
</div>
  
<div class="section">
	<h4>Tag List</h4>
    <p>In both the listing page and the show page you'll notice a list of tag links with characters next to them. Here's an explanation of what they do.</p>
    <p>検索時や画像閲覧時に、それらの隣にタグリンクのリストが表示されます。 以下はタグに付属している内容について詳しく説明します。</p>

      <dt>+</dt>
      <dd>This adds the tag to the current search.</dd>
       <dd>これにより、現在の検索にタグが追加されます。</dd>

      <dt>&ndash;</dt>
      <dd>This adds the negated tag to the current search.</dd>
      <dd>これにより、非表示タグが現在の検索に追加されます。</dd>

      <dt>950</dt>
      <dd>The number next to the tag represents how many posts there are. This isn't always the total number of posts for that tag. It may be slightly out of date as cache isn't always refreshed.</dd>
      <dd>タグの横にある数字は、そのタグが付い他画像の投稿数を表します。 これは必ずしもそのタグの投稿の総数ではありません。 キャッシュのリフレッシュには時間が掛かるため、少し古いかもしれません。</dd>
      </dl>

      <p>When you're not searching for a tag, by default the tag list will show the last few tags added to the database. When you are searching for tags, the tag list will show related tags, alphabetically.<br>Since tags can be added and deleted by anyone, please build a good search system yourself.</p>
    <p>タグを検索していないときは、デフォルトでタグリストにデータベースに追加された最後のタグがいくつか表示されます。 タグを検索しているとき、タグリストにはアルファベット順に関連タグが表示されます。<br>タグは誰でも追加、削除できますので ユーザー自身で良い検索システムを築いてください。</p>
</div>
  
</div></div></body></html>