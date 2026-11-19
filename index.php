<?php

$pageTitle = "Home | Katazy Innovations";
$current = "home";
include "includes/db.php";
include "includes/header.php";

$projects = mysqli_query($conn, "SELECT * FROM projects ORDER BY id ASC LIMIT 3");
?>

<main id="main">

<!-- ============ HERO ============ -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-7">
                <p class="hello">Paul Katangozi, founder of Katazy Innovations</p>
                <h1>Innovating the future.</h1>
                <p class="lead text-secondary">I am a computer science student in Lusaka who builds websites and database-driven web applications with HTML, CSS, JavaScript, PHP and MySQL.</p>
                <div class="d-grid d-sm-flex gap-3 mb-4">
                    <a class="btn btn-brand btn-lg" href="projects.php"><i class="fa-solid fa-folder-open"></i>See my projects</a>
                    <a class="btn btn-outline-orange btn-lg" href="contact.php"><i class="fa-solid fa-envelope"></i>Contact me</a>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <span class="chip"><i class="fa-solid fa-location-dot"></i>Lusaka, Zambia</span>
                    <span class="chip"><i class="fa-solid fa-code"></i>Front-end and back-end</span>
                    <span class="chip"><i class="fa-solid fa-database"></i>PHP and MySQL</span>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="photo-frame mx-auto">
                    <img src="images/kay.jpg" alt="Portrait of Paul Katangozi">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============ SHORT INTRO ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2>Hello, I am Paul</h2>
                <p class="text-secondary">I design and build clear, responsive websites and the databases behind them. I am studying at Mandahill IT Excellence Hub and growing into a full-stack developer.</p>
                <a class="btn btn-outline-orange" href="about.php"><i class="fa-solid fa-user"></i>Read more about me</a>
            </div>
        </div>
    </div>
</section>

<!-- ============ RECENT PROJECTS ============ -->
<section class="section">
    <div class="container">
        <h2>Recent projects</h2>
        <p class="section-intro text-secondary">A few of the sites and applications I have worked on.</p>
        <div class="row g-4">

            <?php
            // Loop: one card for each project
            while ($p = mysqli_fetch_assoc($projects)) {
            ?>
                <div class="col-md-6 col-lg-4">
                    <article class="card project h-100">

                        <?php if ($p["image"] != "") { ?>
                            <img class="project-thumb" src="images/<?php echo htmlspecialchars($p["image"]); ?>" alt="<?php echo htmlspecialchars($p["title"]); ?>">
                        <?php } else { ?>
                            <div class="project-thumb no-image"><?php echo htmlspecialchars(substr($p["title"], 0, 1)); ?></div>
                        <?php } ?>

                        <div class="card-body d-flex flex-column p-4">
                            <h3 class="h5 card-title"><?php echo htmlspecialchars($p["title"]); ?></h3>
                            <p class="card-text text-secondary"><?php echo htmlspecialchars($p["description"]); ?></p>

                            <div class="d-flex flex-wrap gap-2 mb-4">
                                <?php
                                // explode() cuts "PHP, MySQL" at each comma into a list of tools
                                $toolList = explode(",", $p["tools"]);
                                foreach ($toolList as $tool) {
                                    echo '<span class="chip">' . htmlspecialchars(trim($tool)) . '</span>';
                                }
                                ?>
                            </div>

                            <div class="mt-auto">
                                <?php if (!empty($p["link"])) { ?>
                                    <a class="btn btn-brand" href="<?php echo htmlspecialchars($p["link"]); ?>" target="_blank" rel="noopener"><i class="fa-solid fa-arrow-up-right-from-square"></i>Visit website</a>
                                <?php } else { ?>
                                    <span class="btn btn-outline-secondary disabled"><i class="fa-regular fa-clock"></i>Link coming soon</span>
                                <?php } ?>
                            </div>
                        </div>
                    </article>
                </div>
            <?php } ?>

        </div>
        <div class="text-center mt-5">
            <a class="btn btn-brand btn-lg" href="projects.php"><i class="fa-solid fa-arrow-right"></i>See all projects</a>
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
