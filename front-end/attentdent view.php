<?php 
include "headerfile.html";
?>
<header>
    <div class="nav">
        <button class="back-btn"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50+" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
          </svg></button>
        <h1>ALL ATTENDANCE</h1>
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
