<?php
    include('../inc/functions.php');
    $teto = 0;
    $departments = get_all_departments();

?>		
<html>
    <head>
        <title>Les news</title>
    </head>
    <body>
    <h1>Liste des départements</h1>
    <p><a href="search.php">🔍 Rechercher un employé</a></p>
    <p><a href="stats.php">📊 Statistiques par emploi</a></p>
    <p><a href="dept_form.php">➕ Ajouter un département</a></p>
    <p><a href="emp_form.php">➕ Ajouter un employé</a></p>
    <?php if($_GET['teto'] == 0){ ?>
        <p><a href="index.php?teto=1">📊 Trier les departements par nom</a></p>
    <?php } elseif($_GET['teto'] == 1){
        ?> <p><a href="index.php?teto=2">📊 Trier les departements par nom par ordre decroisssamt</a></p>
   <?php } elseif ($_GET['teto'] == 2) { ?>
    <p><a href="index.php?teto=1">📊 Trier les departements par nom par ordre croisssamt</a></p>
   <?php } ?>
    

    
    <?php if($_GET['teto'] == 1){
        
        $departments = get_all_departments_croissant();
        
    } elseif ($_GET['teto'] == 2) {
        $departments = get_all_departments_decroissant();
    }
    ?>
 <table border="1">
    <tr>
        <th>Department Number</th>
        <th>Department Name</th>
        <th>Manager actuel</th>
        <th>Nombre d'employés</th>
        <th>Action</th>
    </tr>
    <?php foreach ($departments as $line) {?>
        <tr>
            <td><a href="employees.php?dept_no=<?= urlencode($line['dept_no']) ?>"><?= $line['dept_no']?></a></td>
            <td><?=$line['dept_name']?></td>
            <td><?= $line['manager_name'] ?? '—' ?></td>
            <td><?= $line['nb_employees'] ?></td>
            <td><a href="dept_form.php?dept_no=<?= urlencode($line['dept_no']) ?>">Éditer</a></td>
        </tr>
    <?php } ?>
    </table>

    </body>
</html>
