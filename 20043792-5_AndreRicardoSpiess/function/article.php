<?php
    function showArticle($article) {
        echo '<article>';
        foreach ($article as $text) {
            echo '<div class="paragraph">';
            echo '<h1><ins>'. $text['title'] .'</ins></h1>';
            echo '</div>';
            echo '<div class="paragraph">';
            foreach ($text['paragraph'] as $line) {
                echo '<p>' . $line['description'] . '</p>';
            }
            echo '</div>';
        }
        echo "</article>";
    }
?>