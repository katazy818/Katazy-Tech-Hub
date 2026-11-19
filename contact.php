<?php

$pageTitle = "Contact | Katazy innovations";
$current = "contact";
include "includes/header.php";

$status = "";
if (isset($_GET["status"])) {
    $status = $_GET["status"];
}
?>

<main id="main">

<section class="page-head">
    <div class="container">
        <h1>Contact me</h1>
        <p class="sub">Tell me about your project and I will get back to you.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row g-5">

            <!-- Left side: contact details and map -->
            <div class="col-lg-6">
                <div class="card info-card">
                    <div class="card-body p-4">
                        <h3 class="h5 mb-3">Contact details</h3>
                        <p class="text-secondary">Have a project or an idea? Send a message and I will reply.</p>
                        <p class="mb-2 contact-line"><i class="fa-solid fa-envelope"></i><strong>Email:</strong> <a href="mailto:pkatangozi@gmail.com">pkatangozi@gmail.com</a></p>
                        <p class="mb-2 contact-line"><i class="fa-brands fa-whatsapp"></i><strong>Call or WhatsApp:</strong> 0776049910</p>
                        <p class="mb-2 contact-line"><i class="fa-brands fa-github"></i><strong>GitHub:</strong> <a href="https://github.com/katazy818">github.com/katazy818</a></p>
                        <p class="mb-2 contact-line"><i class="fa-solid fa-location-dot"></i><strong>Location:</strong> Lusaka, Zambia</p>
                        <p class="mb-3 contact-line"><i class="fa-solid fa-share-nodes"></i><strong>Facebook and TikTok:</strong> Katazy Innovations</p>

                        <!-- Google Map: change q= to a street address -->
                        <iframe class="map"
                            title="Map of Lusaka, Zambia"
                            src="https://www.google.com/maps?q=Lusaka,+Zambia&output=embed"
                            loading="lazy"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- Right side: the form -->
            <div class="col-lg-6">
                <form action="send_message.php" method="post" class="contact-form">

                    <?php
                    if ($status == "sent")  { echo '<div class="alert alert-success">Thank you. Your message was sent.</div>'; }
                    if ($status == "empty") { echo '<div class="alert alert-danger">Please fill in all the boxes.</div>'; }
                    if ($status == "email") { echo '<div class="alert alert-danger">Please enter a valid email address.</div>'; }
                    if ($status == "error") { echo '<div class="alert alert-danger">Your message could not be saved. Please try again.</div>'; }
                    ?>

                    <div class="mb-3">
                        <label for="name" class="form-label">Your name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Your email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-4">
                        <label for="message" class="form-label">Your message</label>
                        <textarea id="message" name="message" rows="5" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-brand btn-lg w-100"><i class="fa-solid fa-paper-plane"></i>Send message</button>
                </form>
            </div>

        </div>
    </div>
</section>

</main>

<?php include "includes/footer.php"; ?>
