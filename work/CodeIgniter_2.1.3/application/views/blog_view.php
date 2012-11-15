

<?php

foreach ($articles as $article)
{
	echo "<strong>";
	echo '<a href="'.site_url().'/blog/show_article/';
	echo $article['id'];
	echo '">' ;
	echo $article['title'];
	echo "</a>";
	echo "</strong>";
	echo "<br />";
	echo $article['text'];
	echo "<br />";
	echo '<a href="'.site_url().'/blog/edit/';
	echo $article['id'];
	echo '">' ;
	echo 'Edit';
	echo "</a>";
	echo "<br />";
	echo '<a href="'.site_url().'/blog/delete/';
	echo $article['id'];
	echo '">' ;
	echo 'Delete';
	echo "</a>";
	echo "<br />";
	echo "<br />";
}
	echo "<br />";
	echo '<a href="'.site_url().'/blog/add/"> Add';
	echo "</a>";
	echo "<br />";

?>
