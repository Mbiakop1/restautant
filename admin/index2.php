<?php   

// require_once 'composants/header.php';



try{
    $bdd= new pdo('mysql:host=localhost;dbname=cart;charset=utf8', 'root',  '',
    [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

}
catch(exception $e){
    die('Error: ' .$e->getMessage());
}

?>

    <h2>creer un compte</h2> 
    <h2>Admimistation</h2> 
    <form action="" method="POST">
        <h2>username</h2><input type="text" name="user">
        <h2>mot de passe</h2><input type="password" name="motdepasse" placeholder="entrer un mot de passe">
        <input type="submit" name="sudmit">
        
    </form>
</body>
</html>


<?php

    if(isset($_POST['sudmit'])){
        $username=$_POST['user'];
        $password=$_POST['motdepasse'];

            if(isset($username) && isset($password)){

                $inser=$bdd->prepare('INSERT INTO admin_nom(nom, motpass) VALUE(?,?)');
                $inser->execute(array($username, $password));

                header('location: index2.php');
              
        }
    }
    
    ?>
<a href="index.php"><h3> connectez-vous si vous allez un compte</h3></a>

<?php

// require_once 'composants/footer.php';

?> 