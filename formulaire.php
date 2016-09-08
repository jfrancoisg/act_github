<?php

include('bdd.php');

pg_query($bdd, 'INSERT INTO contact (nom, prenom, commentaire) VALUES 
                                (\''.$_POST['nom'].'\',
                                 \''.$_POST['prenom'].'\', 
                                 \''.$_POST['commentaire'].'\'
                                 )');
                                 
header('location: index.html');

?>
