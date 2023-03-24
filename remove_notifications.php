<?php
/**
* Plugin Name: Remove Notifications
* Description: Un plugin que remueve las notificaciones molestosas de tu Backoffice
* Plugin URI: joanmorales24@gmail.com
* Version: 1.0
* Author: Joan Morales
* Author URI: https://joanmorales.com
**/

function remove_dashboard_notifications() {
    remove_all_actions( 'admin_notices' );
}
add_action( 'admin_init', 'remove_dashboard_notifications' );