<?php 

// Attention on reprend la session ouverte
// session_start();
$title = "BD";
$nav = "bd";
require "header.php";
require "db.php";
//verifie si on est connecté. Dans le cas ou on est pas connecté il nous redirige vers login
if (!is_connected()) {
    //redirection
    header('Location: /coursphp3/login.php');
}







?>
<h1>Base de données</h1>

<?php 
//exo 5
// try{
//     $pdo = new PDO('mysql:dbname=coursmysql;host=localhost', "root","root"); 
//     //On définit le mode d'erreur de PDO sur Exception
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo 'Connexion réussie<br>';
//     //version SQL majuscule
//     // $resultat = $pdo->query(
//     //     'SELECT article_name, UPPER(CONCAT(lastname," ",firstname)) as auteur
//     //     from users INNER JOIN articles ON id_user = id_user_article' );
//     // // var_dump($resultat->fetchAll(PDO::FETCH_OBJ));
    
//     // foreach($resultat->fetchAll(PDO::FETCH_OBJ) as $req){
//     //     echo "Nom de l'article : ".$req->article_name . "<br>Auteur de l'article : ". $req->auteur . "<br><br>";
//     // }

//     //version php majuscule
//     $resultat = $pdo->query(
//         'SELECT article_name, lastname,firstname
//         from users INNER JOIN articles ON id_user = id_user_article' );
//     // var_dump($resultat->fetchAll(PDO::FETCH_OBJ));
    
//     foreach($resultat->fetchAll(PDO::FETCH_OBJ) as $req){
//         echo "Nom de l'article : ".$req->article_name . "<br>Auteur de l'article : ". strtoupper($req->lastname) . " " . strtoupper($req->firstname) ."<br><br>";
//     }
// }catch (PDOException $e){
//     die('Erreur : '. $e->getMessage());
// }

// try{
//     $pdo = new PDO('mysql:dbname=coursmysql3;host=localhost', "root","root"); 
//     //On définit le mode d'erreur de PDO sur Exception
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo 'Connexion réussie<br>';
//     $titre= "Ajouter un article en BD via PHP j";
//     $description = "Blablablabla";
//     $datetime = new DateTime();
//     $date = $datetime->format('Y-m-d H:i:s'); 
//     $id_user = "1";
//     $pdo->exec('INSERT into articles VALUES (NULL,"'.$titre. '","'.$description. '","'.$date. '","'.$date. '" ,"'.$id_user. '" )' );
//     echo "Article ajouté<br>";

// }catch (PDOException $e){
//     die('Erreur : '. $e->getMessage());
// }

$titre= "Ajouter Try/Catch un article avec prepare et execute";
    $description = "Blablablabla";
    $datetime = new DateTime();
    $date = $datetime->format('Y-m-d H:i:s'); 
    $id = 3;
    try{
        $req = $pdo->prepare('INSERT INTO articles VALUES(:id_article, :article_name, :description, :createdAt, :updatedAt, :id_user_article)');
        $req->execute(array(
            'id_article' => NULL, 
            'article_name' => $titre,
            'description' => $description,
            'createdAt' => $date,
            'updatedAt' => $date,
            'id_user_article' => $id
        ));
        echo "Un nouvel article a été ajouté";
    }catch (PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }

// //modification 
// try{
//     $req = $pdo->prepare("UPDATE articles SET article_name = 'White' WHERE id_article = 120");
//     $req->execute();
//     echo "Votre article a bien été modifié<br>";
// }catch (PDOException $e){
//         echo "Erreur : " . $e->getMessage();
//     }

// //suppression 
// try{
//     $req = $pdo->prepare("DELETE FROM articles WHERE id_article = 118");
//     $req->execute();
//     echo "Votre article a bien été supprimé<br>";
// }catch (PDOException $e){
//         echo "Erreur : " . $e->getMessage();
//     }


?>

