<?php
/**
 * This is a page controller for a multipage. You should name this file
 * as the name of the pagecontroller for this multipage. You should then
 * add a directory with the same name, excluding the file suffix of ".php".
 * You then then have several multipages within the same directory, like this.
 *
 * multipage.php
 * multipage/
 *
 * some-test-page.php
 * some-test-page/
 */
// Include the configuration file
require __DIR__ . "/config.php";

// Include essential functions
require __DIR__ . "/src/functions.php";

$db = connectToDatabase($dsn);

// Get what subpage to show, defaults to index
$pageReference = $_GET["page"] ?? "index";

// Get the filename of this multipage, exkluding the file suffix of .php
$base = basename(__FILE__, ".php");

// Create the collection of valid sub pages.
$pages = [
    "index" => [
        "title" => "Vad är BMO?",
        "file" => __DIR__ . "/$base/index.php",
    ],
    "contact" => [
        "title" => "Kontakta BMO",
        "file" => __DIR__ . "/$base/contact.php",
    ],
];

// Get the current page from the $pages collection, if it matches
$page = $pages[$pageReference] ?? null;

// Base title for all pages and add title from selected multipage
$title = $page["title"] ?? "404";
$title .= " | BMO";


if (isset($_GET['id'])) {
	$post = getPost($_GET['id'], $db);
}

// Render the page
require __DIR__ . "/view/header.php";
?>
<div class="container">
	<div class="content" >
		<!-- Page wrapper -->
		<div class="post-wrapper">
			<!-- full post div -->
			<div class="full-post-div">
				<h2 class="post-title"><?php echo $post[0]['title']; ?></h2>
				<div class="post-body-div">
					<?php echo html_entity_decode($post[0]['content']); ?>
				</div>
			</div>
			<!-- // full post div -->

			<!-- comments section -->
			<!--  coming soon ...  -->
		</div>
		<!-- // Page wrapper -->

		<!-- post sidebar -->
		<div class="post-sidebar">
			<div class="card">
				<div class="card-header">
					<h2>Topics</h2>
				</div>
				<div class="card-content">
				</div>
			</div>
		</div>
		<!-- // post sidebar -->
	</div>
</div>

<?php require __DIR__ . "/view/footer.php";?>
