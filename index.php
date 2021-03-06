<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/* header */
get_header();
?>

<h1 class="content-subhead">Blog</h1>

<?php
while( have_posts() ) :
    the_post();
    ?>
    <section class="post">
        <header class="post-header">
            <img class="post-avatar"
                 alt="Luís Dalmolin" src="http://www.gravatar.com/avatar/1a08c08cc8f79d1140c8d9cbaa974971?d=&s=50"
                 height="48" width="48">

            <h2 class="post-title"><?=the_title()?></h2>

            <p class="post-meta">By <a class="post-author" href="https://plus.google.com/118015701305507171424/" rel="me">Luís Dalmolin</a></p>
        </header><!-- .post-header -->

        <div class="post-description">
            <p><?=the_excerpt()?></p>
        </div><!-- .post-description -->

        <div class="post-links">
            <a href="<?=the_permalink()?>" class="pure-button pure-button-primary">Continue lendo</a>
        </div>
    </section><!-- .post -->
    <?php
endwhile;
?>

<div class="pure-g">
    <div class="pure-u-1-2">
        <?php next_posts_link('&laquo; Posts mais antigos') ?>
    </div>

    <div class="pure-u-1-2" style="text-align: right">
        <?php previous_posts_link('Novos posts &raquo;') ?>
    </div>
</div><!-- .navegacao -->


<?php
/* footer */
get_footer();
?>
