<?php
// Attention on reprend la session ouverte
// session_start();
$title = "Dashboard";
$nav = "dashboard";
require "header.php";
//verifie si on est connecté. Dans le cas ou on est pas connecté il nous redirige vers login
if (!is_connected()) {
    //redirection
    header('Location: /coursphp3/login.php');
}

?>

<h1 align="center">Bienvenue <?php echo $_SESSION['pseudo']; ?> dans votre Dashboard</h1>
<p>Voici le contenu de dashboard</p>
<?php
require "footer.php";
?>