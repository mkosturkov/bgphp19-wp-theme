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
    <title>Bulgaria PHP Conference 2019</title>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Bulgaria PHP Conference 2019" />
    <meta property="og:description" content="Bulgaria PHP Conference is an international 3 day gathering people from the Balkans and all of Europe." />
    <meta property="og:url" content="http://www.bgphp.org/" />
    <meta property="og:site_name" content="Bulgaria PHP Conference" />
    <meta property="og:image" content="http://www.bgphp.org/wp-content/uploads/2016/03/bgphpfacebook.jpg" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Bulgaria PHP Conference is an international 3 day gathering people from the Balkans and all of Europe." />
    <meta name="twitter:title" content="Bulgaria PHP Conference 2019" />
    <meta name="twitter:image" content="http://www.bgphp.org/wp-content/uploads/2016/03/bgphpfacebook.jpg" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Event",
            "name": "Bulgaria PHP Conference 2019",
            "description": "Bulgaria PHP Conference is an international 3 day event gathering people from the Balkans and all of Europe.",
            "image": "https://bgphp.org/logo.svg",
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
</head>
<body>
    <div class="root-wrapper">
        <header class="the-header">
            <div class="logo-holder">
                <img src="<?php echo get_template_directory_uri();?>/images/logo.svg" alt="Bulgaria PHP Conference Logo" width="271.5" height="90" class="the-logo">
                <div class="organizer-notice">
                    organized by Ty's Software
                </div>
            </div>
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
        </header>
        <article class="content-holder the-content call-for-papers">
            <h1>Call for Papers opens on the 8<sup>th</sup>&nbsp;of March 2019!</h1>
        </article>
        <div class="content-holder">
            <main class="the-content">
                <h1>Bulgaria PHP Conference 2019</h1>
                <h2>
                    <span>November 8<sup>th</sup> - 10<sup>th</sup> 2019</span>
                    <span>National Palace of Culture (NDK), Sofia, Bulgaria</span>
                </h2>
            </main>
        </div>
        <div class="content-holder">
            <article class="the-content sponsors-list">
                <h1>Bootstrap Sponsor &amp; Conference Founder</h1>
                <a href="https://www.siteground.com/" title="SiteGround" target="_blank">
                    <img
                        src="<?php echo get_template_directory_uri();?>/images/sponsor-logos/siteground.svg"
                        alt="SiteGround Logo"
                    >
                </a>
            </article>
        </div>
        <footer class="the-footer">
            <div class="top-row">
                <?php echo do_shortcode('[mc4wp_form id="19"]'); ?>
                <a href="mailto:sponsors@bgphp.org" class="call-for-sponsors button">
                    Partner with us
                </a>
            </div>
            <nav class="the-previos">
                The previous editions:
                <a href="http://www.bgphp.org/bgphp15/" target="_blank">2015</a>
                |
                <a href="http://www.bgphp.org/bgphp16/" target="_blank">2016</a>
            </nav>
        </footer>
    </div>
	<script type="text/javascript">
		setTimeout(function()
			{var a=document.createElement("script"); var b=document.getElementsByTagName("script")[0]; a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0017/3442.js?"+Math.floor(new Date().getTime()/3600000); a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}
			, 1);
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
