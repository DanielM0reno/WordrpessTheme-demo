# Sobre el tema
Tema desarrollado como demo y pruebas de snippets
![Progreso](/screenshot.png)

# Notas
## Añadir Bootstrap a Wordpress
- Añadir a directorio raiz del theme los ficheros CSS y JS compilados
- Editar en el fichero functios.php y agregar

``` 
wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', array('jquery') );

``` 

## Custom logo
```
// Custom-logo
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
    echo '<div class="navbar-brand" href="#">
        <img src="' . esc_url( $custom_logo_url ) . '" alt="" width="150" height="100" class="d-inline-block align-text-top">
    </div>';
// #Custom-logo
```

## Custom menu
![Progreso-header](/capturas/captura-menu_header.png)

- Para poder emplear un menu personalizado se ha utilizado la clase `Walker_Nav_Menu`
- Se ha creado el fichero `custom_walker_nav_menu.php` 
- Se ha añadido las siguientes lineas en `functions.php`
```
function register_custom_nav_walker(){
	require_once 'custom_walker_nav_menu.php';
}
add_action( 'after_setup_theme', 'register_custom_nav_walker' );
```