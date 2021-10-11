<?php include 'models/products.php';

$arrProducts = array(
    new Products(1, "Commode Jøtun", "Très très belle commode", "placeurlhere", 200.50, "Jokull Vindsvardt", "someswedendude@gmail.com"),
    new Products(2, "Armoire Skøll", "Du grand luxe", "placeurlhere", 499.99, "Gretta Gretten", "someswedengirl@gmail.com")
);
(new Products(3, "Robinet Flugplükke", "Le robinet qui brille dans la nuit", "placeurlhere", 999.99, "Yvana Bjord", "northdesignerstudio@gmail.com"))->addProduct($arrProducts);


if (!empty($_POST['pName'])) {
    var_dump($_POST);
    (new Products($_POST['id'], $_POST['pName'], $_POST['pShortDesc'], $_POST['pVisual'], $_POST['pPrice'], $_POST['pDesignerName'], $_POST['pDesignerMail']))->addProduct($arrProducts);

    // Fonction calcule TVA
    //    echo Products::calculateTTC($_POST['pPrice'], 20);
}


if (!empty($_GET['delete'])) {

    foreach ($arrProducts as $Products) :
        if ($_GET['id'] == $Products->getId()) :
            $Products->deleteProduct($arrProducts);
        endif;
    endforeach;
}



include 'views/productsView.php';
