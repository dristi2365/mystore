<?php
include_once "header.php"
?>
<h1 align="center">Registration</h1>

    <div class="container">
        <form id="register_form" action="register_process.php" method="post" onsubmit="return validate()">

            <label>First Name:</label>
                <input type="text" name="first" id="first" placeholder="Enter your first name">
                <span id="firstname_error"></span>
                
            
            

            <label>Last Name:</label>
                <input type="text" name="last" id="last" placeholder="Enter your last name">
                <span id="lastname_error"></span>
            

            <label> Email:</label>
                <input type="text" name="email" id="email" placeholder="Enter your email">
                <span id="email_error"></span>
            

            <label>Password:</label>
                <input type="password" name="password" id="password" placeholder="Enter your password">
                 <span id="password_error"></span>
            

            <div class="terms">
                <input type="checkbox" id="terms" name="terms" value="1">
                <label for="terms">I agree to the <a href="#">Terms and Conditions</a></label>
            </div>

            <input type="submit" value="Register">
            
            

        </form>
    </div>
