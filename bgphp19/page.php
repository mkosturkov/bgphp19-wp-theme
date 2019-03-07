<?php include __DIR__ . '/header.php';?>
    <main class="content-holder">
        <article class="the-content an-article">
            <h1><?php the_post(); the_title();?></h1>
            <?php the_content();?>
        </article>
    </main>
<?php include __DIR__ . '/footer.php';
