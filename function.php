<?php


function nbInput($nbInput){

    for ($i=0; $i < $nbInput; $i++) { 
        echo '<input type="text" id="name" name="name" required
        minlength="4" maxlength="8" size="10">';
        echo '<br>';
    }

}


?>