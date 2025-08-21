<?php
/**
 * Plugin Name:       WP_BARQ
 * Plugin URI:        https://your-portfolio-or-github-link.com/wp-barq
 * Description:       WP_BARQ monitors your website's health and performance, detects plugin or core issues, and routes error reports to the right support channel — all with a stylish dashboard.
 * Version:           1.0.0
 * Requires at least: 5.5
 * Requires PHP:      7.4
 * Author:            Adekunle Kehinde Fisayo
 * Author URI:        https://#
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-barq
 * Domain Path:       /languages
 */

add_action('admin_enqueue_scripts', 'wp_barq_enqueue_assets');
function wp_barq_enqueue_assets($hook) {
    // Only load assets on our plugin dashboard page
    if ($hook !== 'toplevel_page_wp-barq-dashboard') return;

    // Tailwind via CDN (official)
    wp_enqueue_script(
        'tailwindcdn',
        'https://cdn.tailwindcss.com',
        [],
        null,
        false 
    );

    wp_add_inline_script('tailwindcdn', "tailwind.config = { theme: { extend: { colors: { primary: '#f6b100' } } } };");

    wp_enqueue_style('wp-barq-style', plugin_dir_url(__FILE__) . 'assets/css/style.css');
    wp_enqueue_script('wp-barq-script', plugin_dir_url(__FILE__) . 'assets/js/script.js', [], null, true);
}

// Add Admin Menu Page
add_action('admin_menu', 'wp_barq_add_menu');
function wp_barq_add_menu() {
    add_menu_page(
        'WP BARQ Dashboard',          
        'WP BARQ',                    
        'manage_options',            
        'wp-barq-dashboard',         
        'wp_barq_dashboard_page',    
        'dashicons-shield-alt',      
        25                        
    );
}

// Render Dashboard Page
function wp_barq_dashboard_page() {
    include plugin_dir_path(__FILE__) . 'templates/dashboard.php';
}