<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/* header */
get_header();


the_post();
?>
<section class="post post-single" itemscope itemtype="http://schema.org/Article">
    <header class="post-header">
        <img class="post-avatar"
             alt="Luís Dalmolin" src="http://www.gravatar.com/avatar/1a08c08cc8f79d1140c8d9cbaa974971?d=&s=50"
             height="48" width="48">

        <h1 class="post-title"><?=the_title()?></h1>

        <p class="post-meta">By <a class="post-author" href="https://plus.google.com/118015701305507171424/" rel="me">Luís Dalmolin</a></p>
    </header><!-- .post-header -->

    <div class="post-description">
        <?php
        the_content();
        ?>

        <div class="clear"></div>
    </div><!-- .post-description -->

    <?php
    # listando as tags do post
    $tags = wp_get_post_tags($post->ID);

    if ($tags) :
        ?>
        <div class="post-tags">
            <h3 class="post-tag-title">Tags:</h3>

            <?php
            foreach ($tags as $i => $tag) :
                ?>
                <a class="post-category post-category-<?=($i + 1)?>" href="<?=URL?>tag/<?=$tag->slug?>"><?=$tag->name?></a>
                <?php
            endforeach;
            ?>

            <div class="clear"></div>
        </div><!-- .post-tags -->
        <?php
    endif;
    ?>

    <?php /*
    <div class="post-social">
        <h3>Compartilhe este post</h3>

        <div class="post-social-googleplus">
            <div class="g-plusone" data-href="<?=the_permalink()?>" data-size="medium" data-width="120"></div>
        </div><!-- .post-social-googleplus -->

        <div class="post-social-twitter">
            <a href="https://twitter.com/share" data-url="<?=the_permalink()?>" class="twitter-share-button" data-lang="pt">Tweetar</a>
        </div><!-- .post-social-twitter -->

        <div class="post-social-facebook">
            <div class="fb-like" data-href="<?=the_permalink()?>" data-layout="button_count" data-send="false" data-width="90" data-show-faces="false" data-font="trebuchet ms"></div>
        </div><!-- .post-social-facebook -->

        <div class="clear"></div>
    </div><!-- .post-social -->
    */ ?>

    <div class="clear"></div>
</section><!-- .post -->


<?php
# comentarios
# comments_template();


# footer
get_footer();
?>