<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>New Arrivals</title>
        <link href="headercss.css" rel="stylesheet" type="text/css"/>
        <style>
            .login-container {
            width: 30%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
        }
         .login-header {
            background-color: #0096DB;
            color: #fff;
            padding: 20px;
            border-radius: 5px 5px 0 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .login-header h1 {
            margin: 0;
            font-size: 1.5em;
        }
        .forgot-password {
            text-align: right;
            margin-bottom: 10px;
        }
        .forgot-password label {
            color: #dc3545;
            text-decoration: none;
        }
        
        .login-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-bottom: 20px;
            font-size: 1em;
        }
        .login-btn:hover {
            background-color: #c82333;
        }
        .or {
            margin: 20px 0;
            color: #333;
        }
        .otp-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #fff;
            color: #dc3545;
            border: 1px solid #dc3545;
            border-radius: 3px;
            cursor: pointer;
            margin-bottom: 20px;
            font-size: 1em;
        }
        .otp-btn:hover {
            background-color: #f8d7da;
        }
        .google-login img {
            width: 30px;
            cursor: pointer;
        }
        .signup-link {
            margin-top: 20px;
            color: #333;
        }
        .signup-link a {
            color: #dc3545;
            text-decoration: none;
        }
        .terms {
            margin-top: 20px;
            color: #666;
            font-size: 0.9em;
        }
        .terms a {
            color: #007BFF;
            text-decoration: none;
        }
        
        .login-form input[type="text"],
        .login-form input[type="password"] {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 1em;
            width: 300px;
        }
        </style>
    </head>
    
    <body>
        <div class="header">
            <h1 class="webname"><a href="index.php">Bookstore</a></h1>
        </div>

        <div class="bodymanu" >
            <table>
                <tr>
                    <th class="bodymanuitem"><a href="NewArrivals.php">New Arrivals</a></th>            
                    <th class="bodymanuitem">|</th>
                    <th class="bodymanuitem"><a href="BoxSets.php">Box Sets</a></th>
                    <th class="bodymanuitem">|</th>
                    <th class="bodymanuitem"><a href="BestSeller.php">Best Seller</a></th>
                    <th class="bodymanuitem">|</th>
                    <th class="bodymanuitem"><a href="RequestaBook.php">Request a Book</a></th>


                </tr>
            </table>
            <div class="manurightcountian">
                <div class="bodymanusearch">            
                        <input type="text" placeholder="Search.." style="height: 20px; width: 200px;">
                        <button type="submit" style="height: 25px; width: 70px; font-family: 'Gill Sans MT'; border-color: rgb(248, 20, 20); font-size: 15px;">Submit</button>
                </div> 
                <!--<div>
                    <img src="Image/85407_red_user_icon.png" alt="usericon" width="40px"/>
                </div>-->
                <div class="myaccount">
                    <h5><a href="myAccount.php">My Account</a></h5>
                </div>
            </div>
        </div>

        <hr style="height: 1px; border-width: 0; margin: 3px; background-color: black; color: black;">
        
        <div class="login-container">
            <div class="login-header">
                <h1>India's Largest Online Book Store</h1>
            </div>
            <div class="login-form">
                <h2>Log in</h2>
                <input type="text" placeholder="Mobile/Email" required><br>
                    <input type="password" placeholder="Password" required>
                    <div class="forgot-password">
                        <label>Forgot your Password?</label>
                    </div>
                    <button class="login-btn">Login</button>
                    
                <div class="or">Or</div>
                <button class="otp-btn">Request OTP</button>
                <div class="google-login">
                    <img src="Image/download.png" alt="Google Icon"/>
                </div>
                <div class="signup-link">
                    New to Bookswagon? <lable>Sign up</lable>
                </div>
                <div class="terms">
                    By continuing, I agree to the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a>
                </div>
            </div>
        </div>
        
        <hr style="height: 1px; border-width: 0; margin: 3px; background-color: black; color: black;">

    <footer class="footer">
        <table >
            <tr>
                <th class="footer_heading">
                    Company
                </th>
                <th class="footer_heading">
                    Policies
                </th>
                <th class="footer_heading">
                    Help
                </th>
                <th class="footer_heading">
                    Misc
                </th>
            </tr>
            <tr>
                <td>
                    About Us    
                </td>
                <td>
                    Privacy Policies
                </td>
                <td>
                    Payment
                </td>
                <td>
                    Affiliate                    
                </td>
            </tr>
            <tr>
                <td>
                    Career
                </td>
                <td>
                    Terms of Use
                </td>
                <td>
                    Shipping                    
                </td>
                <td>
                    Sitemap
                </td>
            </tr>
            <tr>
                <td>
                    Blog
                </td>
                <td>
                    Secure Shopping
                </td>
                <td>
                    Return
                </td>
            </tr>
            <tr>
                <td>
                    Contact Us
                </td>
                <td>
                    Copyright Policy
                </td>
                <td>
                    FAQ
                </td>
            </tr>
        </table>
        <h3>Copyright © 2024 . Bookswagon.com. All Rights Reserved</h3>
    </footer>
    </body>
</html>
