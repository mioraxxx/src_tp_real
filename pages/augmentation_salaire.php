<?php 
include('../inc/functions.php');
$listeSalaire = get_all_salaire();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="traitement_augmentation.php" method="post">
        <input type="submit" value="Augmenter" >
        <input type="text" name="pourcentage"  > %
    </form>
    <table border="1" >
        <tr>
            <th>Numero employe</th>
            <th>Salaire</th>
        </tr>
        <?php foreach ($listeSalaire as $row) { ?>
            <tr>
                <td><?php echo $row['emp_no'] ?></td>
                <td><?php echo $row['salary'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>