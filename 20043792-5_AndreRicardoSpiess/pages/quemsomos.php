<!DOCTYPE html>
<html>
<body>
    <?php
        include '.././function/topo.php';
        include '.././function/article.php';
    ?>
    <main>
        <?php
        include '../dados/quemsomos.php';
        showArticle($quemsomos);
        ?>
    </main>
</body>
<?php
include '.././function/rodape.php';
?>
</html>