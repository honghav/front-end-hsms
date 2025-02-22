

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

    
    
?>