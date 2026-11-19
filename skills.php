<?php
$pageTitle = "Skills | Katazy Innovations";
$current = "skills";
include "includes/db.php";       
include "includes/header.php";

$categories = mysqli_query($conn, "SELECT DISTINCT category FROM skills ORDER BY id ASC");

// An icon for each skill group (the key is the category name in the database)
$icons = array(
    "Front-End" => "fa-laptop-code",
    "Back-End"  => "fa-server",
    "Learning"  => "fa-graduation-cap"
);
?>

<main id="main">

<section class="page-head">
    <div class="container">
        <h1>Skills</h1>
        <p class="sub">The tools and technologies I work with, and what I am learning next.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row g-4">

            <?php
            while ($cat = mysqli_fetch_assoc($categories)) {
                $catName = $cat["category"];

                $icon = "fa-code";                                   
                if (isset($icons[$catName])) { $icon = $icons[$catName]; }
            ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card skill-card h-100">
                        <div class="card-body p-4">
                            <div class="icon-circle mb-3"><i class="fa-solid <?php echo $icon; ?>"></i></div>
                            <h3 class="h5 mb-3"><?php echo htmlspecialchars($catName); ?></h3>
                            <div class="d-flex flex-wrap gap-2">
                                <?php
                                $skillSql = "SELECT name FROM skills WHERE category = '" . mysqli_real_escape_string($conn, $catName) . "'";
                                $skills = mysqli_query($conn, $skillSql);

                                while ($skill = mysqli_fetch_assoc($skills)) {
                                    echo '<span class="chip">' . htmlspecialchars($skill["name"]) . '</span>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>

</main>

<?php include "includes/footer.php"; ?>
