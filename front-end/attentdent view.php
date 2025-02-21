<?php 
include "headerfile.html";
?>

<body>
    <main style="padding: 10px;">
        <div class="attendent-list" style="display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: center;">
            <div class="attendent-card" style="display: flex;
            width: 	 400px;
            align-items: center;
            background-color: #00a2e8;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            justify-content: space-between;
            margin: 3px;">
                <img src="math12.jpg" alt="Avatar" style="  width: 75px; height: 75px; border-radius: 5px;">
                <div class="attendents-info" style="flex-grow: 1;
                margin-left: 10px;
                color: white;">
                    <p style="font-size: 24px;">Math</p>
                    <p style="font-size: 12px;">2025-02-16</p>
                </div>
                <div class="attendent-value"style="width: 50px;
                height: 60px;
                margin: 15px;
                background-color: #ffffff;
                border-radius: 5px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
                border: solid 1px black;">0</div>
            </div>  
        </div>        
    </main>
</body>
</html>
