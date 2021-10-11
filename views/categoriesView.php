<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php?goto=add" method="get"><button>Add a new category</button></a>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Short Description</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arrCategory as $key => $value) : ?>
                    <tr>
                        <td><?php echo $arrCategory[$key]->getOrderNumber(); ?></td>
                        <td><?php echo $arrCategory[$key]->getName(); ?></td>
                        <td><?php echo $arrCategory[$key]->getShortDesc(); ?></td>
                        <td><a href="index.php?goto=modify&name=<?php echo $arrCategory[$key]->getName(); ?>&short=<?php echo $arrCategory[$key]->getShortDesc(); ?>&id=<?php echo $arrCategory[$key]->getOrderNumber(); ?>">Modifier</a></td>
                        <td><a href="index.php?goto=modify&delete=1&id=<?php echo $arrCategory[$key]->getOrderNumber(); ?>"</a>Supprimer</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>