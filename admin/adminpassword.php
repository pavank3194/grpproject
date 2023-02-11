<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Feedback System</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/studentlogin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
<div class="home_line_1" style="background-color: #21ebae;position: fixed;width: 100%; padding-top: 15px; padding-bottom: 15px ;">
        <a href="#" style="padding: 20px 20px; font-size: larger; font-weight: bold; color: white;">Faculty Feedback System</a>
        <div class="dropdown" style="float: right;">
            <a id="dropdown-admin-login",class="dropbtn" href="./dashboard.php" style="padding-right: 100px; color:white ; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: bold;">Home</a>
            <div class="dropdown-content">
            <a href="./adminpassword.php">Change Password</a>
            <a href="../login/admin.php">Logout</a>
            </div>
        </div>
    </div>
    <div class="dashboard" style="padding-top: 50px;">
    <div id="dashboard-1"  >
                <!-- <p style="background-color: #337ab7; box-sizing: border-box; padding-top: 10px; padding-bottom: 10px; padding-left: 5px; width: 200px;">Dashboard</p> -->
                <!-- this image refers to the profile of the user -->
                <p class="student-dashboard-content-1" style="padding-right: 105px;"><a href="./dashboardhome.php"> Dashboard</a></p>
                
                <hr>
                <p class="student-dashboard-content-3" style="padding-right: 105px;"><a href="./contactus.php">Contact us</a></p>
                <hr>
                <div class="dropdown" style="float: right;">
                <p class="student-dashboard-content-3" style="padding-right: 105px;"><a href="./manage-students.html">Student</a></p>
                <div class="dropdown-content">
                        <a href="./manage-students.html">Manage Students</a>
                    </div>
                    <br>
                    <hr>
                </div>
                
                <div class="dropdown" style="float: right;">
                <p class="student-dashboard-content-3" style="padding-right: 105px;"><a href="#">Feedback</a></p>
                <div class="dropdown-content">
                        <a href="./feedback.php">Feedback</a>
                        <a href="./average-feedback.php">Feedback Average</a>
                    </div>
                    <br>
                    <hr>
                </div>
                <div class="dropdown" style="float: right;">
                    <p class="student-dashboard-content-2" style="padding-right: 105px;"><a href="#">Faculty</a></p>
                    <div class="dropdown-content">
                        <a href="./add-faculty.html">Add Faculty</a>
                        <a href="./manage_faculty.php">Manage  Faculty</a>
                    </div>
                    <br>
                    <hr>
                </div>
                
        </div>
        <div id="dashboard-2">
            <center>
                <h1>Update Password</h1>
            </center>
            <br><br>    
            <span style="margin-left: 50px;"><label for="old">Enter Your Old Password :</label></span>
            <input type="password" name="old" id="password-1" >
            <br><br>
            <span style="margin-left: 50px;"><label for="">Enter Your New Password :</label></span>
            <input type="password" name="old" id="password-2" >
            <br><br>
            <span style="margin-left: 50px;"><label for="">Enter Your Confirm Password :</label></span>
            <input type="password" name="old" id="password-3" >
            <br><br>
            <p id="password-error" style="color: red; margin-left: 360px;"></p>
            <p id="password-update" style="color: green; margin-left: 360px;"></p>

            <br><br>

            <button type="submit" style="background-color: rgb(27, 184, 27); padding:10px; border-radius: 5px; border:none; color:white; margin-left: 250px;" onclick="passwordfunction()">Update Password</button>
            <button type="reset"  style="background-color: rgb(27, 184, 27); padding: 10px; border-radius: 5px; border:none; color:white; " onclick="resetfunction()">reset</button>
            
        </div>
        </div>

        

        
    </div>
    <script src="../css/updatepassword.js"></script>


</body>
</html>