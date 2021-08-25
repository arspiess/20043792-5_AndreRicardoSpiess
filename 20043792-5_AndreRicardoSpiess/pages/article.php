<?php
    foreach ($article as $text) {
        echo '<div>';
        echo '<h1><ins>'. $text['title'] .'</ins></h1>';
        foreach ($text['paragraph'] as $line) {
            echo '<p>' . $line['description'] . '</p>';
        }
        echo '</div>';
    }
?>