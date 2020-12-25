
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Target PHP</title>
        <p>Bonjour 

        <?php echo trim(strip_tags($_POST['name']));

        /* Methode poste cache les iformations envoyé par l'utilisateur
        * expression régulière pour empecher les injecttion du code dans les chapmps du formulaire
        *---> htmlspecialchars ($_POST['prenom']), les code apparait à l'affichage 
        *---> strip_tags()
        *---> tripslashes()
        *---> trim suprrimer les espaces
        */


            
        ?> , fais comme chez toi ! <br>
        Tu ne t'appelles pas <?php echo trim(strip_tags($_POST['name'])); ?> ? j'ai du mal comprendre<br>
        clique <a href='FormulaireTest.php'>ici</a> pour retapper ton prénom 

    


             <p>

    </head>

    <body>

    </body>
    


</html>
