<?php
function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

function register_my_menu(){

	register_nav_menu('top-menu', __('Menu Superior'));

}

add_action('init', 'register_my_menu');





function send_smtp_email( $phpmailer )
{
// Define que estamos enviando por SMTP
$phpmailer->isSMTP();

// La dirección del HOST del servidor de correo SMTP p.e. smtp.midominio.com
$phpmailer->Host = "smtp.ejemplo.com";

// Uso autenticación por SMTP (true|false)
$phpmailer->SMTPAuth = true;

// Puerto SMTP – Suele ser el 25, 465 o 587
$phpmailer->Port = "587";

// Usuario de la cuenta de correo
$phpmailer->Username = "mestanzacarlos@gmail.com";

// Contraseña para la autenticación SMTP
$phpmailer->Password = "27101982";

// El tipo de encriptación que usamos al conectar – ssl (deprecated) o tls
$phpmailer->SMTPSecure = "ssl";

$phpmailer->From = $_POST['email'];
$phpmailer->FromName = $_POST['first_name'];

}

?>