<?php
$pageTitle = "About | Katazy Innovations";
$current = "about";                     
include "includes/header.php";
?>

<main id="main">

<section class="page-head">
    <div class="container">
        <h1>About me</h1>
        <p class="sub">Computer science student, web developer and founder of Katazy Innovations.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-md-5 col-lg-4">
                <div class="photo-frame mx-auto">
                    <img src="images/paul.png" alt="Portrait of Paul Katangozi">
                </div>
            </div>
            <div class="col-md-7 col-lg-8">
                <h2>Paul Katangozi</h2>
                <p class="text-secondary">I study computer science at Mandahill IT Excellence Hub in Lusaka, Zambia, and I am specialising in web development and interactive programming.</p>
                <p class="text-secondary">On the front end I use HTML, CSS and JavaScript to build clear, interactive pages. On the back end I use PHP and MySQL for login systems and database storage. I am also learning Python and how full-stack applications fit together.</p>
                <p class="text-secondary">Through Katazy Innovations I want to deliver creative, efficient digital solutions, and grow into a full-stack developer who builds reliable software for local and international needs.</p>
                <div class="d-grid d-sm-flex gap-3 mt-4">
                    <a class="btn btn-brand" href="projects.php"><i class="fa-solid fa-folder-open"></i>See my projects</a>
                    <a class="btn btn-outline-orange" href="contact.php"><i class="fa-solid fa-envelope"></i>Contact me</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="vision">
    <div class="container">
        <p class="mx-auto"><i class="fa-solid fa-quote-left quote-icon"></i><br>A commitment to learning, creating and applying technology to solve real-world problems.</p>
    </div>
</section>

</main>

<?php include "includes/footer.php"; // add the bottom of the page ?>
