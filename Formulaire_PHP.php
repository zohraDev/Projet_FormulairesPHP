<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php



            $serveur ="localhost";
            $login="root";
            $pass="";
            

            try{

                $connexion =new PDO("mysql:host=$serveur;dbname=UserFormulaire", $login, $pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connexion à la base de données est réussie";

                $requete =$connexion->prepare(
                    "INSERT INTO UserForm(nameU,lastName,userName,passeword,email)
                    Values(:nameU,:lastName,:userName,:passeword,:email)"


                );
             
                $requete->bindParam(':nameU', $_POST['nameU']);
                $requete->bindParam(':lastName', $_POST['lastName']);
                $requete->bindParam(':userName', $_POST['userName']);
                $requete->bindParam(':passeword', $_POST['passeword']);
                $requete->bindParam(':email', $_POST['email']);

                $requete->execute();
                




            }catch(PDOException $e){
                    echo 'Echec de connexion';
                    echo $e;
            }


        ?>

    </body>



</html>