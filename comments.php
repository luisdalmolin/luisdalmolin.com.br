<div id="comments" class="comments post">
    <?php 
    # listando os coments 
    if ( have_comments() ) : 
        ?>
        <h3 id="comments-title">Comentários</h3>

        <?php 
        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : 
            ?>
            <nav id="comment-nav-above">
                <h1 class="assistive-text"><?php _e( 'Comment navigation', 'twentyeleven' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyeleven' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyeleven' ) ); ?></div>
            </nav>
            <?php 
        endif;
        ?>

		<div class="commentlist">
			<?php             
            while( have_comments() ) : 
                the_comment();
                ?>
                <div class="comment" id="comment-<?=get_comment_ID()?>">
                    <div class="comment-author">
                        <div class="comment-author-img">
                            <?php 
                            if( filter_var( get_comment_author_url(), FILTER_VALIDATE_URL ) ) :
                                ?>
                                <a href="<?=comment_author_url()?>" rel="nofollow">
                                    <img src="<?php echo get_gravatar( get_comment_author_email(), 40 ); ?>" alt="<?php comment_author(); ?>" />
                                </a>
                                <?php 
                            else : 
                                ?>
                                <img src="<?php echo get_gravatar( get_comment_author_email(), 40 ); ?>" alt="<?php comment_author(); ?>" />
                                <?php 
                            endif;
                            ?>                            
                        </div><!-- .comment-author-img--> 
                        
                        <div class="comment-author-name">
                            <?php comment_author(); ?>
                        </div><!-- .comment-author-name--> 
                        
                        <div class="comment-author-date">
                            <?php comment_date(); ?>
                        </div><!-- .comment-author-date --> 
                        
                        <div class="clear"></div>
                    </div><!-- .comment-author --> 
                    
                    <div class="comment-content">
                        <?php comment_text(); ?>
                    </div><!-- .comment-content --> 
                </div><!-- .comment --> 
                <?php 
            endwhile;
			?>
		</div><!-- .commentlist --> 

		<?php 
        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : 
            ?>
            <nav id="comment-nav-below">
                <h1 class="assistive-text"><?php _e( 'Comment navigation', 'twentyeleven' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyeleven' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyeleven' ) ); ?></div>
            </nav>
            <?php 
        endif;
        ?>

        <?php
		/* comentarios fechados */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
        ?>
		<p class="nocomments">Comentários fechados</p>
        <?php 
    endif;
    ?>

	<?php 
    /* formulario pra comentarios */ 
    ?>
    <h4 class="comment-title">Deixe seu comentário</h4>

    <form action="<?=URL?>wp-comments-post.php" method="post" id="commentform">
        <input type='hidden' name='comment_post_ID' value='<?=$post->ID?>' id='comment_post_ID' /> 
        <input type='hidden' name='comment_parent' id='comment_parent' value='0' /> 
        <input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="2b12e3bbc5" /> 

        <div class="clearfix">
            <label for="author">Nome <span class="required">*</span></label> 
            <input id="author" name="author" type="text" value="" size="30" required="true" />
        </div><!-- .clearfix --> 

        <div class="clearfix">
            <label for="email">E-mail <span class="required">*</span></label> 
            <input id="email" name="email" type="email" value="" size="30" required="true" />
        </div><!-- .clearfix --> 

        <div class="clearfix">
            <label for="url">Site</label> 
            <input id="url" name="url" type="url" value="" size="30" />
        </div><!-- .clearfix --> 

        <div class="clearfix">
            <label for="comment">Comentário</label>
            <textarea id="comment" name="comment" cols="45" rows="8" required="true"></textarea>
        </div><!-- .clearfix --> 

        <input name="submit" type="submit" id="submit" value="Publicar comentário" />
    </form><!-- #commentform -->     
</div><!-- #comments -->