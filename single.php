<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/* header */ 
get_header();


the_post();
?>
<article class="post post-single" itemscope itemtype="http://schema.org/Article">
    <div class="post-title">
        <h1 itemprop="name"><?=the_title()?></h1> 
    </div><!-- .post-title --> 

    <div class="post-author">
        <a href="<?=get_the_author_meta('googleplus')?>" rel="me">
            <img src="<?=get_gravatar( get_the_author_email() )?>" alt="<?=get_the_author_nickname()?>" /> 
            <span class="post-author-name" itemprop="author"><?php echo get_the_author_nickname(); ?></span> 
        </a> 
    </div><!-- .post-author --> 

    <div class="clear"></div>

    <div class="post-content">
        <?php 
        /* conteudo */ 
        the_content();
        ?> 

        <div class="clear"></div>
    </div><!-- .post-content --> 
    
    <?php 
    /* listando as tags do post */ 
    $tags = wp_get_post_tags( $post->ID );
    
    if( $tags ) : 
        ?> 
        <div class="post-tags">
            <h3 class="post-tag-title">Tags:</h3> 
            
            <?php 
            foreach( $tags as $tag ) :                 
                ?>
                <a class="button" href="<?=URL?>tag/<?=$tag->slug?>"><?=$tag->name?></a>
                <?php 
            endforeach;
            ?>
                
            <div class="clear"></div>
        </div><!-- .post-tags --> 
        <?php 
    endif;
    ?>
    
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

    <div class="clear"></div>
</article><!-- .post --> 

        
<?php 
/* comentarios */ 
comments_template();


/* footer */ 
get_footer();
?>