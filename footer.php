<?php
// footer.php - the bottom of every page.

// Social media links. Change these to your exact profile addresses.
$facebook = "https://www.facebook.com/search/top?q=Katazy%20Innovations";
$tiktok   = "https://www.tiktok.com/search?q=Katazy%20Innovations";
$github   = "https://github.com/katazy818";
$whatsapp = "https://wa.me/260776049910";
?>
<footer class="site-footer">
    <div class="container py-5">
        <div class="row g-4">

            <div class="col-lg-4">
                <img src="images/logo.png" alt="Katazy Innovations logo" class="logo mb-3">
                <p class="text-secondary">Innovating the future. Websites and database-driven web applications from Lusaka, Zambia.</p>
            </div>

            <div class="col-6 col-lg-2">
                <h3 class="h6">Pages</h3>
                <ul class="list-unstyled footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="skills.php">Skills</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <a href="#top">Back to top</a>
            </div>

            <div class="col-6 col-lg-3">
                <h3 class="h6">Get in touch</h3>
                <ul class="list-unstyled footer-links">
                    <li><i class="fa-solid fa-envelope"></i> <a href="mailto:pkatangozi@gmail.com">pkatangozi@gmail.com</a></li>
                    <li><i class="fa-solid fa-phone"></i> 0776049910</li>
                    <li><i class="fa-solid fa-location-dot"></i> Lusaka, Zambia</li>
                </ul>
            </div>

            <!-- Social media: each link opens in a new tab -->
            <div class="col-lg-3">
                <h3 class="h6">Follow Katazy Innovations</h3>
                <a class="social-link" href="<?php echo $facebook; ?>" target="_blank" rel="noopener">
                    <span class="social-icon"><i class="fa-brands fa-facebook-f"></i></span> Facebook
                </a>
                <a class="social-link" href="<?php echo $tiktok; ?>" target="_blank" rel="noopener">
                    <span class="social-icon"><i class="fa-brands fa-tiktok"></i></span> TikTok
                </a>
                <a class="social-link" href="<?php echo $github; ?>" target="_blank" rel="noopener">
                    <span class="social-icon"><i class="fa-brands fa-github"></i></span> GitHub
                </a>
                <a class="social-link" href="<?php echo $whatsapp; ?>" target="_blank" rel="noopener">
                    <span class="social-icon"><i class="fa-brands fa-whatsapp"></i></span> WhatsApp
                </a>
            </div>

        </div>
    </div>
    <div class="footer-bottom">
        <div class="container text-center">
            &copy; <?php echo date("Y"); ?> Katazy Innovations. All rights reserved.
            
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
