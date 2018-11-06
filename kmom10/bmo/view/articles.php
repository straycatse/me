<div class="wrap-main">
    <main>
    <?php
    $db = connectToDatabase($dsn);

    // Prepare and execute the SQL statement
    $stmt = $db->prepare("SELECT * FROM Article WHERE category = 'article'");
    $stmt->execute();

    $articles = getPublishedPosts($db);
    ?>

<?php foreach ($articles as $post): ?>
  <article>
	<div class="post">
		<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
		<a href="single_post.php?id=<?php echo $post['id']; ?>">
			<div class="post_info">
				<h1><?php echo $post['title'] ?></h1>
				<div class="info">
          <span><?php echo $post["author"]?>,</span><br>
					<span><?php echo date("F j, Y ", strtotime($post["pubdate"])); ?></span><br>
					<span class="read_more">Läs mer</span>
				</div>
			</div>
		</a>
	</div>
</article>
<?php endforeach ?>
<?php
    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $rows = null;
    foreach ($res as $row) {
        $titles[] = $row['title'];
        $authors[] = $row['author'];
        $contents[] = $row['content'];
        $pubdates[] = $row['pubdate'];
    }
    $sumArticles = count($res);
    for ($i=0; $i < $sumArticles; $i++) {
        echo "<article>";
        echo "<h1>" . $titles[$i] . "</h1>";
        echo "<p>Publicerad " . $pubdates[$i] . "</p>";
        echo "<i><p>" . $authors[$i] . "</i></p>";
        echo $contents[$i];
        echo "</article>";
    }
?>
</main>
</div>
