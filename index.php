<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/* header */ 
get_header(); 


while( have_posts() ) :
    the_post();
    ?>
    <article class="post">
        <div class="post-title">
            <h2><a href="<?=the_permalink()?>" title="<?=the_title()?>"><?=the_title()?></a></h2>
        </div><!-- .post-title --> 
        
        <div class="post-content">
            <?php 
            /* thumbnail */ 
            dalmolin_post_thumbnail();
            
            /* inicio do conteudo */ 
            the_excerpt();
            ?> 
            
            <div class="clear"></div>
            
            <div class="float-right">
                <a href="<?=the_permalink()?>">Continue lendo...</a>
            </div><!-- .float-right --> 
            
            <div class="clear"></div>
        </div><!-- .post-content --> 
    </article><!-- .post --> 
    <?php 
endwhile;
?>
    
<div class="navegacao">
    <div class="float-left">
        <?php next_posts_link('&laquo; Posts mais antigos') ?>
    </div><!-- .float-left --> 

    <div class="float-right">
        <?php previous_posts_link('Novos posts &raquo;') ?>
    </div><!-- .float-right --> 

	<div class="clear"></div>
</div><!-- .navegacao -->

    
<?php 
/* footer */ 
get_footer();
?>
