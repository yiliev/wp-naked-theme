<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
            wp_head();
        ?>
    </head>
    <body <?php body_class( $class ); ?>>
        <?php
            echo __FILE__;
        ?>