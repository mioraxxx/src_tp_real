## logique
- Dossier design : contient les fichiers pour les styles et themes des pages
- Dossier inc : contient les fonctions
    - connection.php (uniquement pour connection)
    - functions.php(contient tous les autres fonctions)
- Dossier pages : contient tous les pages a afficher

## Code 
- Dans inc/functions.php : 
    - get_all_lines($sql) affiche tous les lignes d'une requette SELECT
    - get_one_line($sql) affiche une seule ligne d'une requette SELECT
    - get_all_departements() prend tous les departements
    - get_jobs_stats()