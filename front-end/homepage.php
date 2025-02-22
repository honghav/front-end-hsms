<?php include "headerfile.html"?>

<header>
    <div class="nav">
        <button class="back-btn"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50+" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
          </svg></button>
        <h1>HOME PAGE</h1>
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
    <div class="backgroup" style="
            background-color: aqua;
            width: 440px;
            height: 340px;
            border-bottom-right-radius:220px ;
            border-bottom-left-radius: 220px;
            display: grid;
            place-items: center; 
            "> 
        <div class="all_btn" style ="width: 100%;
            height: 150px;
            display: flex;
            justify-content: space-between;
            align-items: center; ">
            <div class="att_page" style ="background-color: #01427A;
                width: 120px;
                height: 100px;
                border-radius: 15px;
                margin: 5px;">

                <div class="uper" style ="display: flex; margin-top: 8px;">
                    <h3  style="color: white; margin-right:23px; margin-left: 5px;  font-size: 16px;">Present</h3>
                    <h3 style="color: rgb(122, 233, 19); margin-left: 5px; font-size: 16px;">85%</h3>
                </div>
                <div class="uper" style ="display: flex;">
                    <h3 style="color: white; margin-right: 23px; margin-left: 5px; font-size: 16px;">Present</h3>
                    <h3 style="color: rgb(239, 11, 11); margin-left: 5px; font-size: 16px;">15%</h3>
                </div>
            </div>   
        </div>

        <div class="all_card" style = "background-color: #ffffff;
            width: 375px;
            height: 400px;
            border-radius: 25px;
            border: black solid 0.5px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin: auto; ">
<!-- course -->
 <a href="front-end\All course.php">
            <div class="card_contianer" style = "background-color: #6CDFFD;
                width: 150px;
                height: 150px;
                border-radius: 15px;
                text-align: center;
                margin: 10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-projector" viewBox="0 0 16 16">
                    <path d="M14 7.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0M2.5 6a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1z"/>
                    <path d="M0 6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2 1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1H5a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1 2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1z"/>
                  </svg>
                <h3>course</h3>
            </div></a>
<!-- Attendence -->
<a href="front-end\attentdent view.php">
            <div class="card_contianer" style = "background-color: #6CDFFD;
                width: 150px;
                height: 150px;
                border-radius: 15px;
                text-align: center;
                margin: 10px;">
                 <svg xmlns="http://www.w3.org/2000/svg" width="80" height="90" fill="currentColor" class="bi bi-journal-medical" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v.634l.549-.317a.5.5 0 1 1 .5.866L9 6l.549.317a.5.5 0 1 1-.5.866L8.5 6.866V7.5a.5.5 0 0 1-1 0v-.634l-.549.317a.5.5 0 1 1-.5-.866L7 6l-.549-.317a.5.5 0 0 1 .5-.866l.549.317V4.5A.5.5 0 0 1 8 4M5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                  </svg>
                <h3>Attendence</h3>
            </div></a>
<!-- Top Student -->
<a href="List_top_student.php">
            <div class="card_contianer" style = "background-color: #6CDFFD;
                width: 150px;
                height: 150px;
                border-radius: 15px;
                text-align: center;
                margin: 10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="90" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                    <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z"/>
                  </svg>
                <h3>Top Student</h3>
            </div></a>
<!-- Score -->
<a href="front-end\attentdent view.php">
            <div class="card_contianer" style = "background-color: #6CDFFD;
                width: 150px;
                height: 150px;
                border-radius: 15px;
                text-align: center;
                margin: 10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="90" fill="currentColor" class="bi bi-journal-plus" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                  </svg>
                <h3>Score</h3>
            </div></a>
        </div>
        
    </div>
    
</body>
</html>