<?php
/**
 * @author Ondřej Doněk <ondrejd@gmail.com>
 * @link https://github.com/ondrejd/https://github.com/ondrejd/twentyseventeen-child for the canonical source repository
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GNU General Public License 3.0
 * @package twentyseventeen
 * @since 1.0.0
 */

if( ! function_exists( 'ondrejdcom_enqueue_styles' ) ):
    /**
     * @internal Loadds required CSS styles.
     * @return void
     * @since 1.0
     */
    function ondrejdcom_enqueue_styles() {
        // Enqueue parent theme's CSS file
        $parent_style = 'twentyseventeen-style';
        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
        // Enqueue our CSS file
        wp_enqueue_style(
                'twentyseventeen-child-style',
                get_stylesheet_directory_uri() . '/style.css',
                array( $parent_style ),
                wp_get_theme()->get('Version')
        );
}
endif;
add_action( 'wp_enqueue_scripts', 'ondrejdcom_enqueue_styles' );
