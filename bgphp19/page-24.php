<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <style>
        #cookie-law-info-again {
            display: none !important;
        }
    </style>
</head>
<body>
<div class="root-wrapper" style="justify-content: center">
    <div class="content-holder">
        <main class="the-content" style="background: none; position: absolute; top: -130px">
            <img src="<?php echo get_template_directory_uri();?>/images/logo_symbol.png" alt="Bulgaria PHP Conference Logo" class="the-logo" width="80">
            <div style="font-size: 24px;">Bulgaria PHP Conference 2019</div>
        </main>
    </div>
    <div class="content-holder">
        <article class="the-content sponsors-list" style="width: 1280px; height: 400px">
            <h1 style="font-size: 40px">Gold Sponsor</h1>
            <a href="https://www.siteground.com/" title="SiteGround" target="_blank">
                <img
                    src="<?php echo get_template_directory_uri();?>/images/sponsor-logos/isobar.png"
                    alt="SiteGround Logo"
                    style="width: 600px"
                >
            </a>
        </article>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
