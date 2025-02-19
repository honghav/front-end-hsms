

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>    
        header{
            background-color: gray;
            /* height: 100%; */
            width: 440px;
        }
        .nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #003366;
        color: white;
        /* padding: 10px 15px; */
        font-size: 10px;
        height: 50px;
        width: 100%;

        }
        .icons {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-right: 5px;
            }
        .profile, .bell {
        font-size: 24px;
        cursor: pointer;
        }
        .back-btn {
        font-size: 34px;
        background: none;
        border: none;
        color: white;
        cursor: pointer;
        }
    </style>
</head>
    <header>
        <div class="nav">
            <button class="back-btn">&#x21A9;</button>
            <h1><?php print($title); ?></h1>
            <div class="icons">
                <!-- notivi icon -->
            <div class="not_btn"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
            </svg>
            </div>
            <!-- profile icon -->
            <div class="pro_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
            </div>
            </div>
        </div>
    </header>
        <?php
    }

    function navbar($title){
        
    }

?>