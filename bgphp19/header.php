<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <script type="text/javascript">
      var base_url = '<?php echo get_site_url(); ?>';
    </script>
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');
      <?php if (is_page(16)) : ?>
      fbq('track', 'AddToWishlist');
      <?php endif; ?>
      fbq('init', '984071305047838');
      fbq('track', "PageView");
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=984071305047838&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php if (is_home()):?>
        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Event",
                "name": "Bulgaria PHP Conference 2019",
                "description": "Bulgaria PHP Conference 2019 will take place on the 8th-10th of November. It gathers professionals from the Balkans and all of Europe for fun and learning.",
                "image": "https://www.bgphp.org/wp-content/themes/bgphp19/images/logo.svg",
                "location": {
                    "@type": "Place",
                    "name": "National Palace of Culture",
                    "address": {
                        "@type": "PostalAddress",
                        "addressCountry": "Bulgaria",
                        "addressLocality": "Sofia"
                    },
                    "url": "http://www.ndk.bg/"
                },
                "startDate": "2019-11-08",
                "endDate": "2019-11-10",
                "url": "http://www.bgphp.org/"
            }
        </script>
    <?php endif;?>
</head>
<body>
<div class="root-wrapper">
    <header class="the-header">
        <div class="logo-holder">
            <a href="/">
                <img src="<?php echo get_template_directory_uri();?>/images/logo.svg" alt="Bulgaria PHP Conference Logo" width="271.5" height="90" class="the-logo">
            </a>
            <div class="organizer-notice">
                organized by Ty's Software
            </div>
        </div>
        <div class="menu-holder" id="main-menu">
            <nav class="site-navigation">
                <a href="/sponsors">
                    Sponsors
                </a>
            </nav>
            <nav class="social-holder">
                <a href="https://www.facebook.com/Bulgaria-PHP-Conference-792916594079571/" class="facebook" target="_blank">
                    Facebook
                </a>
                <a href="https://twitter.com/bgphpconf" class="twitter" target="_blank">
                    Twitter
                </a>
                <a href="mailto:conference@bgphp.org" class="mail">
                    conference@bgphp.org
                </a>
            </nav>
            <button class="menu-closer" id="close-menu-btn">Close Menu</button>
        </div>
        <button class="menu-opener" id="open-menu-btn">Open Menu</button>
    </header>
