<!--Exo:
1-evoyer les données saisies dans un formulaire par un user sur
une page traitement.php
2-la page de traitement envoie un mail avec les données saisies.-->

<?php
 echo "Nom: ".$_POST['nom']."</br>";
 echo "Prénom: ".$_POST['prenom']."</br>";
 echo "Email: ".$_POST['email']."</br>";
 echo "Message: ".$_POST['texto']."</br>";
 $to      = 'sagna.ibrahima59@gmail.com';
 $headers = 'From:sagna.ibrahima59@gmail.com'. "\r\n" . phpversion();
 $message = '
            nom: '.$_POST['nom'].'
            prenom: '.$_POST['prenom'].'
            message: '.$_POST['texto'];

 if(isset($_POST['texto'])){
            $position_arobase=strpos($_POST['email'],'@');
            if($position_arobase===false)
                echo '<p>Votre email doit comporter un arobase.</p>';
            else {
                $retour=mail($to, $headers, $message);
                if($retour)
                    echo '<p>Votre message a été envoyé.</p>';
                else
                    echo '<p>Erreur.</p>';
            }
        }
 ?>
