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