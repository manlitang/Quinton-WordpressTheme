</main>
<footer>
    <div class="footer-main">
        <div class="footer-content">
            <div>
                <h1>Quinton Dallie Videography</h1>
                <h2>Capturing and creatively assembling video content that people watch and remember.</h2>

                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'container' => false
                    )); 
                ?>
            </div>
            <div>
                <p class="copyright">Copyright © 2020 Quinton Dallie</p>
            </div>

            <div class="socials"> 
                <h1>Find me here</h1>
                <ul>
                    <li><a href="https://www.linkedin.com/in/quinton-d-7537501a9/">LinkedIn</a></li>
                    <li><a href="https://www.youtube.com/channel/UCb_JTFm5tOWQr-Lg1dvnOIQ">YouTube</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>