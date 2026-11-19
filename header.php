<?php
// header.php - the top of every page (head tag + navigation bar).
// Each page sets $pageTitle and $current BEFORE including this file.

// If a page did not set a title, use a default one
if (!isset($pageTitle)) { $pageTitle = "Paul Katangozi | Katazy Innovations"; }
// $current tells us which menu link to highlight (home, about, skills, projects, contact)
if (!isset($current)) { $current = ""; }

// The menu: key => array(link, text). To add a page, add one line here.
$menu = array(
    "home"     => array("index.php",    "Home"),
    "about"    => array("about.php",    "About"),
    "skills"   => array("skills.php",   "Skills"),
    "projects" => array("projects.php", "Projects"),
    "contact"  => array("contact.php",  "Contact")
);
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark"> <!-- Bootstrap dark mode -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- makes the page fit phones -->
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="icon" href="images/logo.png"> <!-- small icon in the browser tab -->

    <!-- Google fonts: Poppins for headings, Source Sans 3 for text -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Source+Sans+3:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS (gives us the grid, navbar, cards, buttons and forms) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome (the icons: <i class="fa-solid fa-envelope"></i> and so on) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Our own styles come LAST so they can change Bootstrap's look -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="top">

<!-- Lets keyboard users jump past the menu -->
<a class="visually-hidden-focusable skip-link" href="#main">Skip to content</a>

<!-- ============ NAVIGATION ============ -->
<nav class="navbar navbar-expand-lg sticky-top site-nav">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="Katazy Innovations" class="logo">
        </a>

        <!-- The button that opens the menu on phones (Bootstrap handles it, no JavaScript from us) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Open menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <?php
                // Loop through the menu and print one link for each page
                foreach ($menu as $key => $item) {
                    $class = "nav-link";                              // normal link
                    if ($current == $key) { $class = "nav-link active"; }   // highlight the current page
                    echo '<li class="nav-item"><a class="' . $class . '" href="' . $item[0] . '">' . $item[1] . '</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
