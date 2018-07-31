<?php

/*

Function Use : Display the Errors In The Page
Version : 1.0
Maker : Eslam Nassef ( Coder )

*/
$FormErrors = array();

function Errors($FormErrors){
         if(!empty($FormErrors)){ ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <?php

            foreach($FormErrors as $Errors){
                    echo $Errors . '<br>' ;
            } ?>
</div><?php
    }
}
