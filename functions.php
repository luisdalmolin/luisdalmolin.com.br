<?php
/**
 * Arquivo de funções do tema luisdalmolin
 *
 * @author Luís Dalmolin <luis.nh@gmail.com>
 */



/** constantes de URL */
define('URL', get_bloginfo('url') . '/');
define('TEMPLATE', get_bloginfo('template_url') . '/');

/** links sociais */
define('SOCIAL_GITHUB', 'https://github.com/luisdalmolin');
define('SOCIAL_GOOGLEPLUS', 'https://plus.google.com/118015701305507171424/posts');
define('SOCIAL_TWITTER', 'https://twitter.com/#!/luisdalmolin');
define('SOCIAL_LINKEDIN', 'http://www.linkedin.com/in/luisdalmolin');
define('SOCIAL_RSS', 'http://feeds.feedburner.com/luisdalmolin');


# suporte
add_theme_support('post-thumbnails', array('post', 'page'));



/**
 * The excerpt
 */
function custom_excerpt_length($length) {
	return 100;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);


/**
 * Campos adicionais pro cadastro de usuario
 */
add_action('show_user_profile', 'my_show_extra_profile_fields');
add_action('edit_user_profile', 'my_show_extra_profile_fields');

function my_show_extra_profile_fields($user) {
    ?>
	<h3>Informações extras</h3>

	<table class="form-table">
		<tr>
			<th><label for="twitter">Google plus (ID)</label></th>

			<td>
				<input type="text" name="googleplus" id="googleplus" value="<?php echo esc_attr( get_the_author_meta( 'googleplus', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Seu ID no google plus.</span>
			</td>
		</tr>
		<tr>
			<th><label for="twitter">Twitter</label></th>

			<td>
				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Seu twitter.</span>
			</td>
		</tr>
	</table>
    <?php
}


/**
 * Salvando os campos adicionais
 */
add_action('personal_options_update', 'save_profile_extra_fields');
add_action('edit_user_profile_update', 'save_profile_extra_fields');
function save_profile_extra_fields($user_id) {
	if (! current_user_can('edit_user', $user_id)) {
		return false;
    }

	update_usermeta($user_id, 'twitter', $_POST['twitter']);
	update_usermeta($user_id, 'googleplus', $_POST['googleplus']);
}


/**
 * Retornando a imagem do autor do gravatar
 */
function get_gravatar($email, $size = 20)
{
    if (filter_var( $email, FILTER_VALIDATE_EMAIL)) {
        $grav_url = "http://www.gravatar.com/avatar/" . md5(strtolower(trim($email))) . "?d=" . urlencode($default) . "&s=" . $size;

        return $grav_url;
    }
}


add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="pure-button"';
}