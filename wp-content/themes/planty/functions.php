<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du CSS du thème Planty
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

// Hook qui permet d'ajouter un menu supplémentaire à la barre de navigation
 add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
 function add_extra_item_to_nav_menu( $items, $args ) {
     if (is_user_logged_in() && $args->theme_location == 'primary' || is_user_logged_in() && $args->theme_location =='mobile') {
        $admin_link = '<li><a class="admin-link" href="' . get_admin_url() . '">Admin</a></li>';

        // Recherche des deux éléments à diviser
        $menu_items = explode( '</li>', $items );
        $middle_index = floor( count( $menu_items ) / 2 );

        // Insérer l'élément de menu au milieu des deux éléments
        array_splice( $menu_items, $middle_index, 0, $admin_link );

        // Reconstituer les éléments du menu modifié
        $items = implode( '</li>', $menu_items );

     }
     return $items;
 }

 /* HOOK ADMIN  ???
		<?php if(is_user_logged_in()) : ?>
				<div class="user-logged">
					<!-- Pour afficher un menu Admin invisible si non connecté-->
					<a target= "_blank"href="<?php echo admin_url(); ?>">Admin</a>
					<!-- Idem avec option de déconnexion -->
					<a href="<?php echo wp_logout_url(home_url); ?>">Déconnexion</a>
				</div>
			<?php endif; ?> 
 */