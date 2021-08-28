<?php
    include '.././function/topo.php';

    include '.././function/article.php';
    include '.././dados/produtos.php';

    $id = $_GET['id'];
    $produto = $produtos[$id];

    showArticle(array(0=>$produto));
    
    foreach ($produto['images'] as $image) {
        echo '<div>';
        echo '<img  src=".././images/'.$image['src'].'" alt="'.$image['alt'].'" width="100px" height="100px"/></a>';
        echo "</div>";
    }

    include '.././function/rodape.php';
    
?>