

<?php
// use for loop our card 
function Loop_card($div , $n){
        
        if($n>= 0 ){
            while($i = $n){
                print($div);
                $i++;
            }
        }else{
            print("the card is empty");
        }      
    }

// hader of our project the agrument is the title if 
    function Headerview($title){
        ?>
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?php print($title); ?></title>
                
        </head>
        <?php
    }

    function navbar($title){
        
    }

?>