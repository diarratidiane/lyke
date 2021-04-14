<?php
// start the session
session_start();

// check if the user is not loged in, then redirect the user to login page
if (!isset($_SESSION["userid"]) || $_SESSION["userid"] !==true) {
    header("location: loging.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="FR">
    <header>
        <meta charset="UTF-8">
        <title>Welcome Team<?php echo $_SESSION["name"];?></title>
        <link rel="stylesheet" href="#">
</header>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Salut, <strong><?php echo $_SESSION["name"]; ?></strong>. Welcome to Baraka Services & Formations.</h1>
</div>
<p>
    <a href= "logout.php" class= "btn btn-secondary btn-lg active" role="button" aria-pressed= "true" >Log Out </a>
</p>
</div>
</body>
</html>
