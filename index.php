<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple php document</title>

</head>
<body>

<header></header>

<nav></nav>
    
<main>
    <form action="validation.php" method="post">
        Name: <input type="text" name="name" id="">
        <?php
            if(isset($_SESSION['e_name'])){
                echo '<div>'.$_SESSION['e_name'].'</div>';
            }
            unset($_SESSION['e_name']);
        ?>

        <br>
        E-mail: <input type="email" name="email" id="">
        <br>
        Phone number: <input type="number" name="phone" id="">
        <?php
            if(isset($_SESSION['e_phone'])){
                echo $_SESSION['e_phone'];
            }
            unset($_SESSION['e_phone']);
        ?>
        <br>
        <input type="submit" value="Submit credentials">

    </form>
</main>

<footer></footer>

</body>
</html>