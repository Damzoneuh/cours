<?php
    // REGLE D OR : les nom de variables sont en rapport avec ce qu'elles contiennent et EN ANGLAIS
    $var = 0;
    $var = $var + 1;

    $var = 2 * 2;
    $var = 2 / 2;
    $var = 1 - 1;
    $var = 3 / 2;

    $var = 'text';
    $text = $var . ' le reste de mon texte';

    // int = nombre entier
    // float = nombre décimal
    // array = tableau
    // string = chaine de caractères

    $array = array('text', 'sub text' , 1.25 , 2);

    echo '<pre>';

    // foreach boucle qui ne fonctionne qu'avec un tableau

    foreach ($array as $key => $value) {
        echo $value . ' ma clé : ' . $key . '</br>';
    }

    echo '</pre>';

    // LES BOUCLES
    // $i ++ est egal a $i = $i + 1

    for ($i = 0; $i < 10; $i ++){
        echo $i . '<br>';
    }


    // verif de variable :
    //  == est egal à
    // != est différent de
    // && une condition ET une autre
    // || une condition ou une autre
    // le backslash ignore le caractère suivant ( \ = echappement )

    $i = 0;
    while ($i < 10){
        if($i % 2 == 0 && $i > 4){
            echo $i . '<br>';
        }
        else if ($i % 2 == 0 || $i < 4){
            echo 'is smaller than 4 \' <br>';
        }
        $i ++;
    }
    ?>

<table>
    <?php foreach ($array as $key => $value) : ?>
    <tr>
        <?php if ($key != 0) : ?>
        <td>
            <?php echo $value ?>
        </td>
        <?php endif ?>
    </tr>
    <?php endforeach ?>
</table>
