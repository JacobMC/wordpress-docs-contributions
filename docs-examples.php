<?php if ( ! defined( 'ABSPATH' ) ) exit;

/*
 * Plugin Name: Docs Examples
 * Description: Examples to be used in WordPress documentation
 * Version: 1.0.0
 * Author: Jacob McKinney
 * Author URI: http://jacobmckinney.com
 * Text Domain: my-plugin
 *
 * Copyright 2016 Jacob McKinney.
 */

class Docs_Examples {

    function __construct() {

        $this->tdh_widgets();

    }

    public function tdh_widgets() {

        include 'classes/class-tdh-widgets.php';

        add_action( 'widgets_init', function() {
            register_widget( 'My_Widget' );
        });

    }

}

$docs_examples = new Docs_Examples();