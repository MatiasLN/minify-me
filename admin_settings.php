<?php

add_action('admin_menu', 'test_plugin_setup_menu');

function test_plugin_setup_menu()
{
    add_menu_page('Minify meeee', 'Minify me Pluginn', 'manage_options', 'minify-me-plugin', 'test_init');
}

function test_init()
{
    echo "<h1>Hello World!</h1>";

    function hello() {
        require 'settings.php';
        echo $this->value;
    }

    hello();

}