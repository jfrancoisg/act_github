<?php

include('bdd.php');

mysql_query('INSERT INTO contact (nom, prenom, commentaire) VALUES 
                                (\''.$_POST['nom'].'\',
                                 \''.$_POST['prenom'].'\', 
                                 \''.$_POST['commentaire'].'\'
                                 )');
                                 
header('location: index.html');

?>
