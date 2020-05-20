<?php




function createForm($listeElement){

    foreach ($listeElement as $elementHtml){
            echo '<input name="'.$elementHtml['name'].'" type="'.$elementHtml['type'].'" class="'.$elementHtml['class'].'" 
            placeholder="'.$elementHtml['name'].'""> <br>';
    
    }
}


?>