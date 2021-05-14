<?php
/**
 * @package DuiloNetsuiteIntegration
 */

namespace Inc\Pages;

use \Inc\Controller;

class Admin extends Controller
{
    public function register()
    {
        add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
    }

    public function add_admin_pages()
    {
        add_menu_page( 'Duilo Netsuite Integration', 'Duilo NS', 'manage_options', 'duilo_netsuite_integration', array( $this, 'admin_index' ), 'dashicons-store', 110 );
    }

    public function admin_index()
    {
        require_once $this->plugin_path . 'templates/admin.php';
    }
}
