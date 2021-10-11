
<?php

require_once 'models/categories.php';


// Declaration of all categories inside an array using "categories.php" class.
$arrCategory = array(new Categories("Chaises", "Toutes les chaises", 1), new Categories("Bureaux", "Notre sélection de bureau", 2), new Categories("Armoires", "Direction Narnia!", 3));

// Exemple of the add category method
(new Categories("Plan de Travail", "Toute surfaces de bricolage", 4))->addCategory($arrCategory);




// add element
if (!empty($_POST['name'])) : (new Categories($_POST['name'], $_POST['shortDesc'], $_POST['index']))->addCategory($arrCategory);
endif;

// modify element
if (!empty($_POST['nameToModify'])) :
    foreach ($arrCategory as $Category) :
        if (!empty($_POST['indexToModify'])) :
            if ($_POST['indexToModify'] == $Category->getOrderNumber()) :
                var_dump($_POST);
                if (strlen($Category->getName()) > 1 && strlen($Category->getName()) < 50) {
                    $Category->updateCategory('name', $_POST['nameToModify']);
                } else {
                    echo "error";
                }
                $Category->updateCategory('shortDesc', $_POST['shortDescToModify']);
                $Category->updateCategory('orderNumber', $_POST['indexToModify']);
                var_dump($Category);
            endif;
        endif;
    endforeach;
endif;

// supress array element
if (!empty($_GET['delete'])) {

    foreach ($arrCategory as $Category) :
        if ($_GET['id'] == $Category->getOrderNumber()) :
            $Category->deleteCategory($arrCategory);
        endif;
    endforeach;
}

require_once 'views/categoriesView.php';
