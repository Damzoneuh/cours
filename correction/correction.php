<?php

$n1 = null;
$n2 = null;
$result = null;
$error = [];
if (isset($_POST['n1']) && isset($_POST['n2'])){
   // die(is_numeric($_POST['n1']));
    if($_POST['n1'] && is_numeric($_POST['n1'])){
        $n1 = $_POST['n1'];
    }
    else{
        array_push($error, 'erreur du nombre 1');
    }

    if($_POST['n2'] && is_numeric($_POST['n2'])){
        $n2 = $_POST['n2'];
    }
    else{
        array_push($error, 'erreur du nombre 2');
    }

    switch ($_POST['sign']){
        case '+':
            $result = $n1 + $n2;
            break;
        case '-':
            $result = $n1 - $n2;
            break;
        case '*':
            $result = $n1 * $n2;
            break;
        case '/':
            $result = $n1 / $n2;
            break;

        default:
            array_push($error, 'Signe inconnu');
    }

    if (count($error) > 0){
        foreach ($error as $e){
            echo $e;
        }
        die();
    }

    if ($result === null){
        echo 'handled error';
        die();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>
        Correction calculatrice
    </title>
</head>

<body>
    <h1><?php if($result || $result == 0) :?> <?php echo 'Le résultat est : ' . $result ?> <?php endif;?></h1>
    <form method="post" target="correction.php">
        <input type="number" name="n1" placeholder="Nombre 1" />
        <input type="text" placeholder="sign" name="sign" />
        <input type="number" name="n2" placeholder="Nombre 2 " />
        <button name="submit" type="submit" >Calculer</button>
    </form>
</body>
</html>


