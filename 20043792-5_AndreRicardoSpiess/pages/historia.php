<!DOCTYPE html>
<html>
    <body>
        <?php
            include '.././function/article.php';
            include '.././function/topo.php';
        ?>
    <main>
        <?php
            include '.././dados/historia.php';
            echo '<div class="container">';
            showArticle($historia);
            echo '</div>';
            echo '<div class="container">';
            for ($i=1;$i<5;$i++) {
                echo '<img class="image" src=".././images/home/img_0' . $i .'.png" alt="img_0"+' . $i .'.png" />';
            }
            echo '</div>';
        ?>
    </main>
</body>
<?php
include '.././function/rodape.php';
?>
</html:5>