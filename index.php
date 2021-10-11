  <?php
    if (!empty($_GET['goto'])) :
        switch ($_GET['goto']) {
            case 'categories':
                include 'controllers/categoriesController.php';
                break;

            case 'add':
                include 'controllers/categoriesController.php';
                include 'controllers/addCategories.php';
                break;

            case 'modify':
                include 'controllers/categoriesController.php';
                include 'controllers/modifyCategories.php';
                break;

            default:
                include 'controllers/categoriesController.php?goto=categories';
                break;
        }
    endif;
    ?>