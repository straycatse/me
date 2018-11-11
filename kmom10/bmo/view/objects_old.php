<div class="wrap-main">
    <main>
    <?php
    $db = connectToDatabase($dsn2);

    // Prepare and execute the SQL statement
    $stmt = $db->prepare("SELECT * FROM Object");
    $stmt->execute();

    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $rows = null;
    foreach ($res as $row) {
        $titles[] = $row['title'];
        $owners[] = $row['owner'];
        $categories[] = $row['category'];
        $texts[] = $row['text'];
        $imgUrl[] = $row['image'];
    }
    $sumArticles = count($res);
    for ($i=0; $i < $sumArticles; $i++) {
        echo "<article class='objArt'>";
        echo "<h2>" . $titles[$i] . "</h2>";
        echo "<img src='img/250x250/$imgUrl[$i]'>";
        echo "<i><p>Ägare: " . $owners[$i] . "</i></p>";
        echo "<p>" . $texts[$i] . "</p>";
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
<?php require __DIR__ . "/objects-aside.php" ?>
</div>
