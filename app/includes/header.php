<header>
        <section class="alert">
            <div class="container">
                <p><i class="fas fa-tag"></i> Promoção - R$ 19,90</p>
            </div>
        </section>

        <section class="topo">
            <div class="container">
                <div class="left">
                    <a href="<?php echo INCLUDE_PATH; ?>"><span>STORE</span><span>GO</span></a>
                    <div class="search">
                        <form action="" method="get">
                            <input type="search" name="" id="">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="conta">
                        <a href="<?php echo INCLUDE_PATH; ?>conta"><i class="fas fa-user"></i> Conta</a>
                    </div>

                    <div class="carrinho">
                        <a href="<?php echo INCLUDE_PATH; ?>carrinho"><i class="fas fa-shopping-cart"></i> Carrinho (4)</a>
                    </div>
                </div>
            </div>
        </section>
        <?php if(!isset($_SESSION['loginConta'])){ ?>
        <nav>
            <div class="container">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Todas as Categorias</a></li>
                    <li><a href="">Specials</a></li>
                    <li><a href="">Lorem</a></li>
                    <li><a href="">Ipsum</a></li>
                    <li><a href="">Specials</a></li>
                </ul>
            </div>
        </nav>
    <?php  } ?>
</header>