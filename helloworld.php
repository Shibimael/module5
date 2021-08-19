<?php
    //Exo 1
 $note_maths = 15;
 $note_francais = 12;
 $note_histoire_geo = 9;
 $moyenne = ($note_maths + $note_francais + $note_histoire_geo)/3 ;
 echo 'La moyenne est de '.$moyenne.' / 20.';
?>

<br/>

<?php
    //Exo 2
 $prix_ht = 50;
 $tva = 20;
 $prix_ttc = $prix_ttc = $prix_ht * (1+ $tva /100);
 echo 'Le prix TTC du produit est de
'.$prix_ttc.' €.';
?>

<br />

<?php
    //Exo 3
    $test = 42;
    var_dump('$test');
?>

<br/>

<?php
        //Exo 4
    $sexe = 19;

    if ($sexe <= 18 ){
        echo "Vous n'êtes pas en age pour accéeder a la procréation";

    }
    else{
        echo "Accéder a une étape dénueer de sens";
    }
?>

<br/>

<?php
    //Exo 5
    $budget = 1553.89;
    $achat = 1554.76;

    if ($achat <= $budget ){
        echo "achat possible";
    }
    else {
        echo "Vous dépassez votre budget";
    }
?>


<br/>

<?php
    //Exo 6
    $age = 25;

    if ($age >= 18){
        echo "vous être majeur";
    }
    else {
        echo "Vous êtes Mineurs";
    }
?>