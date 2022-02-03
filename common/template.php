<!DOCTYPE html>
<html lang="en">
        <?php include('common/head.php')?>
    <body>
        <?php 
            include('common/header.php');         
        //afficher le content selon navigation
        $loc = filter_input(INPUT_GET,'loc');
        // par défault c'est sur page home
        if ($loc == null) {$loc = 'home';};
        //navigation
        include('common/navigation.php');

        switch($loc){
            case 'home':
                include('content/index_content.php');
            break;
            case 'about':
                include('content/about_content.php');
            break;
            case 'products':
                include('content/product_content.php');
            break;
            case 'realisations':
                include('content/store_content.php');
            case 'commentaires':
                include('content/commentaires_content.php');
            break;
            default:
            include('content/404.php');
            break;
        }
                include('common/footer.php');
        ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>