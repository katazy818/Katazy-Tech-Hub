<?php
$pageTitle = "Projects | Paul Katangozi";
$current = "projects";
include "includes/db.php";
include "includes/header.php";

$projects = mysqli_query($conn, "SELECT * FROM projects ORDER BY id ASC");
?>

<main id="main">

<section class="page-head">
    <div class="container">
        <h1>Projects</h1>
        <p class="sub">A selection of websites and web applications I have built and designed.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row g-4">

            <?php
            while ($p = mysqli_fetch_assoc($projects)) {
            ?>
                <div class="col-md-6 col-lg-4">
                    <article class="card project h-100">

                        <?php if ($p["image"] != "") { ?>
                            <!-- If the project has an image, show it -->
                            <img class="project-thumb" src="images/<?php echo htmlspecialchars($p["image"]); ?>" alt="<?php echo htmlspecialchars($p["title"]); ?>">
                        <?php } else { ?>
                            <div class="project-thumb no-image"><?php echo htmlspecialchars(substr($p["title"], 0, 1)); ?></div>
                        <?php } ?>

                        <div class="card-body d-flex flex-column p-4">
                            <h3 class="h5 card-title"><?php echo htmlspecialchars($p["title"]); ?></h3>
                            <p class="card-text text-secondary"><?php echo htmlspecialchars($p["description"]); ?></p>

                            <div class="d-flex flex-wrap gap-2 mb-4">
                                <?php
                                $toolList = explode(",", $p["tools"]);
                                foreach ($toolList as $tool) {   // go through each tool
                                    echo '<span class="chip">' . htmlspecialchars(trim($tool)) . '</span>';
                                }
                                ?>
                            </div>

                            <div class="mt-auto">
                                <?php if (!empty($p["link"])) { ?>
                                    <!-- The project has a website link -->
                                    <a class="btn btn-brand" href="<?php echo htmlspecialchars($p["link"]); ?>" target="_blank" rel="noopener"><i class="fa-solid fa-arrow-up-right-from-square"></i>Visit website</a>
                                <?php } else { ?>
                                    <!-- No link saved ----->
                                    <span class="btn btn-outline-secondary disabled"><i class="fa-regular fa-clock"></i>Link coming soon</span>
                                <?php } ?>
                            </div>
                        </div>
                    </article>
                </div>
            <?php } // end of loop ?>

        </div>
    </div>
</section>

<!-- ============ CALL TO ACTION ============ -->
<section class="cta">
    <div class="container text-center">
        <h2>Let's build something together</h2>
        <p class="mx-auto text-secondary">Need a website, an online shop or a management system? Tell me about your idea.</p>
        <a class="btn btn-brand btn-lg" href="contact.php"><i class="fa-solid fa-paper-plane"></i>Send a message</a>
    </div>
</section>

</main>

<?php include "includes/footer.php"; ?>
