<?php

include('bdd.php');

pg_query($bdd, 'INSERT INTO contact (nom, prenom, commentaire, civilite) VALUES 
                                (\''.$_POST['nom'].'\',
                                 \''.$_POST['prenom'].'\', 
                                 \''.$_POST['commentaire'].'\',
                                 \''.$_POST['civilite'].'\'
                                 )');
                                 
header('location: index.html');

?>
