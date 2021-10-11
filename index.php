  <?php
    if (!empty($_GET['goto'])) :
        switch ($_GET['goto']) {
            case 'categories':
                include 'controllers/categoriesController.php';
                include 'controllers/productController.php';
                break;

            case 'add':
                include 'controllers/categoriesController.php';
                include 'controllers/addCategories.php';
                include 'controllers/productController.php';
                break;


            case 'addProduct':
                include 'controllers/categoriesController.php';
                include 'controllers/productController.php';
                include 'controllers/addProduct.php';
                break;

            case 'modify':
                include 'controllers/categoriesController.php';
                include 'controllers/modifyCategories.php';
                include 'controllers/productController.php';
                break;

            default:
                include 'controllers/categoriesController.php?goto=categories';
                break;
        }
    endif;
    ?>