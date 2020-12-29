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
                
                <h1>Sessão: <?php echo $_GET['url']; ?></h1>
                
                <div class="anuncio_horizontal">
                    <!-- <img src="imgs/anuncio.png" alt=""> -->
                </div>
            </main>
        </div>
    </section>
<?php 
    require 'app/includes/footer.php';
?>
    