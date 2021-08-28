<?php
for ($i=0;$i<count($produtos);$i++) {
        $produto = $produtos[$i];
        echo '<div class="container-foto">';
        $href = 'href="showproduto.php?id='.$i.'"';
        $image = $produto['images'][0];
        echo '<a class="foto" '.$href.'><img  class="image" src=".././images/'.$image['src'].'" alt="'.$image['alt'].'" /></a>';
        echo '<a class="foto-text" '.$href.' >'.$produto['title'].'</a>';
        echo '</div>';
    }
?>

