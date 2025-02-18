<?php 
    include "funtion.php";
    
    Headerview("card_loop");

?>
    <style>
    .back_groud {
        background-color: #01B3EF;
        height: 50px;
        width: 375px;
        font-size: 12px;
        border-radius: 15px;
        text-align: center;
        margin-bottom: 10px;
        padding-top: 10px;
                    }                    
     </style>
<body>

    <?php 
        // html code for loop u need to create your own style 
        $card = '<div class="back_groud">
                    <h1>Card Loop</h1>
                </div>';
        
        // call function loop for card
        Loop_card($card , 5);
    ?>

</body>
</html>
