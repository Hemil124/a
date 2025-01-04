<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>New Arrivals</title>
        <link href="headercss.css" rel="stylesheet" type="text/css"/>
        <style>
        .content {
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin: 20px;
        }
        .content h2 {
            color: #333;
        }
        .content label {
            display: block;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .content input[type="text"], .content input[type="number"], .content input[type="tel"] {
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
           
        }
        .content button {
            background-color:  #ff0033;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 20px;
            cursor: pointer;
            margin-bottom: 15px;
            margin-left: 5px;
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
        <div class="content">
            
            <h2>Request A Book</h2>
            <label>Please fill up the form below to Request a Book. We will inform you as soon as the book is available.</label>
            <table>
                <tr>
                    <td>
                        <label>ISBN13:*</label>
                    </td>
                    <td>
                         <input type="text"  required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Book Title:*</label>
                    </td>
                    <td>                    
                       <input type="text"  required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Quantity:</label>
                    </td>
                    <td>                    
                       <input type="number" value="1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email Id:*</label>
                    </td>
                    <td>                    
                       <input type="text"  required>
                    </td>
                    <td>
                        <button>
                            Verify Email
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Phone/Mobile:</label>
                    </td>
                    <td>                    
                       <input type="tel">
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <button>
                           Submit
                        </button>
                    </td>
                </tr>

            </table>

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
