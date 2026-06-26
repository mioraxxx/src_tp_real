<?php
include('../inc/functions.php');
$stats = get_jobs_stats();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../design/theme-dark/style.css">
    <title>Statistiques par emploi</title>
</head>
<body>
        <div class="container">
        <p><a href="index.php">&larr; Retour aux départements</a></p>
        <h1 style="text-align: center;">Statistiques par emploi</h1>

        <table border="1" class="table">
            <tr>
                <th>Emploi</th>
                <th>Hommes</th>
                <th>Femmes</th>
                <th>Total</th>
                <th>Salaire moyen</th>
            </tr>
            <?php foreach ($stats as $row) { ?>
                <tr>
                    <td><?= $row['title'] ?></td>
                    <td><?= $row['nb_hommes'] ?></td>
                    <td><?= $row['nb_femmes'] ?></td>
                    <td><?= $row['nb_total'] ?></td>
                    <td><?= number_format($row['salaire_moyen'], 0, ',', ' ') ?> €</td>
                </tr>
            <?php } ?>
        </table>
</div>
</body>

</html>