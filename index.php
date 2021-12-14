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

            //On prépare notre requête 
            try{
               $sql = "SELECT * FROM utilisateur";
               $stmt = $conn->query($sql);
               if($stmt === false){
                  die("Erreur");
               }
                  
            }catch (PDOException $e){
               echo $e->getMessage();
            }
        ?>
    </body>
</html>