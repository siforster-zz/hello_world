<?php
Plugin::setInfos(array(
    'id'          => 'hello_world',
    'title'       => 'Hello world!',
    'description' => 'Allows you to display "Hello World! where you want.',
    'version'     => '1.0.0',
    'license'     => 'GPL',
    'author'      => 'Martijn van der Kleijn',
    'website'     => 'http://www.wolfcms.org/',
    'update_url'  => 'http://www.siforster.net/plugin-versions.xml',
    'require_wolf_version' => '0.5.0'
));
 
function hello() {
    echo 'Hello World!';
}

Filter::add('hello_world', 'hello_world/filter_hello_world.php');