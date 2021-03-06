<footer class="the-footer">
    <div class="top-row">
        <?php echo do_shortcode('[mc4wp_form id="19"]'); ?>
        <a href="https://www.bgphp.org/Bulgaria%20PHP%20Conference%202019%20Partnership%20Packs.pdf" class="call-for-sponsors button" target="_blank">
            Partner with us
        </a>
    </div>
    <nav class="the-footer-menu">
        The previous editions:
        <a href="https://www.bgphp.org/bgphp15/" target="_blank">2015</a>
        •
        <a href="https://www.bgphp.org/bgphp16/" target="_blank">2016</a>
        |
        <a href="https://www.bgphp.org/code-of-conduct/">Code of Conduct</a>
        |
        <a href="https://www.bgphp.org/privacy-policy/">Privacy Policy</a>
        |
        <a href="https://www.bgphp.org/terms-and-conditions/">Terms and Conditions</a>
    </nav>
</footer>
</div>

<script>
  (function() {
    var menu = document.getElementById('main-menu');
    var openBtn = document.getElementById('open-menu-btn');
    var closeBtn = document.getElementById('close-menu-btn');
    openBtn.addEventListener('click', function() {
      menu.classList.add('open');
    });
    closeBtn.addEventListener('click', function() {
      menu.classList.remove('open');
    });
  })();
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135188570-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135188570-1');
</script>

<?php wp_footer(); ?>
</body>
</html>
