<div class="wrap-main">
    <main>
    <?php
    $db = connectToDatabase($dsn);

    // Prepare and execute the SQL statement
    $stmt = $db->prepare("SELECT * FROM Article WHERE category = 'article'");
    $stmt->execute();

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
    // echo "<article>";
    // echo "<h1>" . $titles[0] . "</h1>";
    // echo "<p>Publicerad " . $pubdates[0] . "</p>";
    // echo "<i><p>" . $authors[0] . "</i></p>";
    // print_r($contents[0]);
    // echo "</article>";
?>
</main>
</div>
