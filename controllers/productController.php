<?php include 'models/products.php';

$arrProducts = array(
    new Products("Commode Jøtun", "Très très belle commode", "placeurlhere", 200.50, "Jokull Vindsvardt", "someswedendude@gmail.com"),
    new Products("Armoire Skøll", "Du grand luxe", "placeurlhere", 499.99, "Gretta Gretten", "someswedengirl@gmail.com")
);
(new Products("Robinet Flugplükke", "Le robinet qui brille dans la nuit", "placeurlhere", 999.99, "Yvana Bjord", "northdesignerstudio@gmail.com"))->addCategory($arrProducts);


if (!empty($_POST['pName'])) {
    var_dump($_POST);
    (new Products($_POST['pName'], $_POST['pShortDesc'], $_POST['pVisual'], $_POST['pPrice'], $_POST['pDesignerName'], $_POST['pDesignerMail']))->addCategory($arrProducts);

    // Fonction calcule TVA
    //    echo Products::calculateTTC($_POST['pPrice'], 20);
}




include 'views/productsView.php';
