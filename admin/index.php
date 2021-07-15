<?php   

session_start();



try{
    $bdd= new pdo('mysql:host=localhost;dbname=cart;charset=utf8', 'root',  '',
    [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

}
catch(exception $e){
    die('Error: ' .$e->getMessage());
}

?>

<h1>connectez-vous ici</h1>
<h2>Admimistation</h2>
<form action="" method="POST">
    <h2>username</h2><input type="text" name="user">
    <h2>mot de passe</h2><input type="password" name="motdepasse">
    <input type="submit" name="sudmit">

</form>
</body>

</html>


<?php

    if(isset($_POST['sudmit'])){
        $username=$_POST['user'];
        $password=$_POST['motdepasse'];

            if(isset($username) && isset($password)){

                $inser=$bdd->prepare('SELECT * FROM admin_nom');
                $inser->execute();

                while($sect=$inser->fetch()){
                    if($username==$sect['nom'] && $password==$sect['motpass']){
                        $_SESSION['username'] = $sect['nom'];
                        header('location: index1.php');
                    }
                    else 
                        // header('location: index.php')
                        ;
                    }
                    echo'les informations ne sont pas correctes';
                
        }
    }
    // var_dump($sect['nom']);
    ?>

<a href="index2.php">
    <h3>inscrivez-vous !</h3>
</a>