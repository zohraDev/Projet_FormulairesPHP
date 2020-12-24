<!DOCTYPE html>
<html>  
    <head>
        <meta  charset="UTF-8" >
        <title> INSCRITION FORM</title>
        <link rel ="stylesheet"  href ="Style.css">

    </head>
    <body>
        <div class ="FormInscrs">
            <div class="form-text">Inscription</div>
            <div class="form-saisie">
                <form method="post" action="traitement.php">
                    <label for="name">Enter your name</label>
                    <input type ="text"  id ="name" name= "name" >


                    <label for="lastname">Enter your laste name</label>
                    <input type ="text"  id ="lastename" name= "lastname" >

                    <label for="email">Enter your email</label>
                    <input type ="text"  id ="email" name= "email" >

                    <input type="submit" value="send">

            
            
                </form>

            
            </div>
        
        </div>
    
    </body>


</html>