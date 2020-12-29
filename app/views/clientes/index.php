<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require 'app/includes/head.php';
    ?>
</head>
<body>
    <?php 
        require 'app/includes/header.php';
    ?>

    <section class="body">
        <div class="container">
            <aside>
                <?php include('app/includes/sidebar.php'); ?>
            </aside>
            <main>
                <div class="flex">
                    <div class="w30">
                    </div>
                    <section class="login">
                        <breadcumb>
                            <a href="">Conta</a> <span>|</span> <a href="">Login</a>
                        </breadcumb>

                        <form action="" class="login">
                            <div class="input_group">
                                <label for="">Email</label>
                                <input type="email" name="" id="">
                            </div>

                            <div class="input_group">
                                <label for="">Senha</label>
                                <input type="password" name="" id="">
                            </div>
                        </form>
                    </section>
                </div>
                
                
                <div class="anuncio_horizontal">
                    <!-- <img src="imgs/anuncio.png" alt=""> -->
                </div>
            </main>
        </div>
    </section>
<?php 
    require 'app/includes/footer.php';
?>
    