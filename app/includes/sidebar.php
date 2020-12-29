<nav>
    <ul>
    <?php 
        foreach(App\Models\ProdutoModels::showCategorias() as $key => $value){
        ?>
            <li><a href="<?php echo $value['slug_categoria']; ?>"><?php echo $value['nome_categoria']; ?></a></li>
        <?php } ?>
    </ul>
</nav>

<div class="anuncio_vertical">
    <!-- <img src="imgs/anuncio.png" alt=""> -->
</div>