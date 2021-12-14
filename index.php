<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servername = 'bddmysql1.mysql.database.azure.com';
            $username = 'axel';
            $password = 'P@ssword';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password);
            
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion réussie';
            echo 'Test';
            
            //On prépare notre requête 
            $sql = $conn->query("select * from utilisateur");
            var_dump($sql);
            print_r($sql);
        ?>
    </body>
</html>