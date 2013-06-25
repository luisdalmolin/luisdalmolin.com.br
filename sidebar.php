<?php
/**
 * Sidebar do tema 
 * 
 * @author Luís Dalmolin <luis.nh@gmail.com> 
 */ 
?>
<div class="widget widget-ad" style="text-align: center">
    <?php 
    /*
    if( !is_page() ) : 
        ?>
        <div class="ad-box">
            <script type="text/javascript"><!--
            google_ad_client = "ca-pub-5890576079495680";
            google_ad_slot = "0929216115";
            google_ad_width = 300;
            google_ad_height = 250;
            //-->
            </script>
            <script type="text/javascript"
            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
            </script>
        </div><!-- .ad-box --> 
        <?php 
    endif;
    */
    ?>

    <a href="https://www.digitalocean.com/?refcode=0ae0605892ab" target="_blank" rel="external" title="Servidor bom e barato">
        <img src="<?=TEMPLATE?>img/digitalocean-vertical-eps.png" alt="Digital Ocean" width="200px" />
    </a>
</div><!-- .widget --> 

<?php 
/* sidebar 1 */ 
dynamic_sidebar('sidebar-1');


/* pagina de posts */ 
if( is_single() ) : 
    /* exibindo posts relacionados */ 
    $tags = wp_get_post_tags( $post->ID );
    if( $tags ) : 
        /* condições */ 
        $tags[0]->term_id;

        $args = array(
            'tag__in'      => array( $tags[0]->term_id ),
            'post__not_in' => array( $post->ID ),
            'showposts'    => 5
        );

        /* buscando */ 
        $relacionados = new WP_Query( $args );
        if( $relacionados->have_posts() ) : 
            ?>
            <article class="post posts-relacionados">
                <h3>Veja também</h3>

                <?php 
                while( $relacionados->have_posts() ) : 
                    $relacionados->the_post();
                    ?>
                    <h4>
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h4>
                    <?php
                endwhile;
                ?>
            </article>
            <?php 
        endif;

        $relacionados->rewind_posts();
    endif;
endif;
?> 