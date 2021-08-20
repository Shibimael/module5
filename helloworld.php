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
   $test = '42';
   var_dump($test);
?>

<br/>

<?php
    //Exo 4
   $sexe = 'homme';
   if($sexe == 'femme') :
      echo 'Bonjour Madame.';
   elseif($sexe == 'homme') :
      echo 'Bonjour Monsieur.';
   else :
      echo 'Bonjour sexe inconnu.';
   endif;
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
    $age = 15;

    if ($age >= 18){
        echo "vous être majeur";
    }
    else {
        echo "Vous êtes Mineurs";
    }
?>

<br/>

<?php
echo'<br/>';
echo'<br/>';
    //Exo 7
    $heure = 15;
    if($heure < 0 || $heure > 23) :
       echo 'Houla, cette heure est incorrecte.';
    elseif($heure >= 7 && $heure < 12) :
       echo 'Bonne matinée.';
    elseif($heure >= 12 && $heure < 22) :
       echo 'Bonne après-midi.';
    else :
       echo 'Bonne nuit.';
    endif;
 ?>



<?php
echo'<br/>';
echo'<br/>';
    //Exo 8
   $n = 5;
   for($i = 1;$i <= 10;$i++) {
      echo $n.' x '.$i.' = '.($n * $i).' <br />';
   }
?>



<?php
echo'<br/>';
echo'<br/>';
    //Exo 9
    $k = 0;
    while($k <= 20) {
       if($k == 10) {
          echo '<strong>'.$k.'</strong>';	  
       } else {
          echo $k;
       }
       echo '<br />';
       $k = $k + 2;
    }
 ?>



<?php*
echo'<br/>';
echo'<br/>';
    //Exo 10
   $tableau = array(
      'France' => 'Paris',
      'Allemagne' => 'Berlin',
      'Italie' => 'Rome'
   );
   foreach($tableau as $t) {
      echo $t.' ';	   
   }
?>



<?php
echo'<br/>';
echo'<br/>';
    //Exo 11
   $tableau = array();
   $i = 0;
   while($i < 10) {
      $tableau[] = rand(0, 50);
      $i++;	  
   }
   if(in_array(42, $tableau))
      echo 'Le nombre 42 est bien dans le tableau.';
   else
      echo 'Le tableau ne contient pas la valeur 42.';
   echo '<br />';  
   var_dump($tableau);
?>



 <?php
 echo'<br/>';
 echo'<br/>';
 // Exo 15
function Helloworld() {
  echo "Hello world!";
}

Helloworld();
?> 


<?php
echo'<br/>';
echo'<br/>';
    function jeretournemonargument(){
        echo 'ABC'. '<br/>';
        echo '123';
        return;
    }
    jeretournemonargument()
?> 


<?php
echo'<br/>';
echo'<br/>';
 //Exo 17
function concatenation($arg1='Antoine', $arg2='Griezmann') {
return $arg1 . $arg2;
}
echo concatenation($arg1='Antoine', $arg2='Griezmann')
?> 
<?php
echo'<br/>';
echo'<br/>';
 //Exo 18
 $arg1='5';
 $arg2='5';
function somme($arg1, $arg2) {
return $arg1 + $arg2;
}
echo somme($arg1, $arg2);
?> 
<?php
echo'<br/>';
echo'<br/>';
 //Exo 19
 $arg1='5';
 $arg2='5';
function soustraction($arg1, $arg2) {
return $arg1 - $arg2;
}
echo soustraction($arg1, $arg2);
?> 
<?php
echo'<br/>';
echo'<br/>';
 //Exo 20
 $arg1='5';
 $arg2='5';
function multiplication($arg1, $arg2) {
return $arg1 * $arg2;
}
echo multiplication($arg1, $arg2);
?> 
<?php
echo'<br/>';
echo'<br/>';
 //Exo 20
 $arg1='5';
 $arg2='5';
function division($arg1, $arg2) {
return $arg1 / $arg2;
}
echo division($arg1, $arg2);
?> 