<!DOCTYPE html>
<html>
<head>
    <link href="headercss.css" rel="stylesheet" type="text/css"/>
    <link href="Bookcard.css" rel="stylesheet" type="text/css"/>
    <style>
        .FAuthor {
            background: #eeeeed;
            padding: 20px;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .carousel {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }
        .carousel img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 class="webname"><a href="index.php">Bookstore</a></h1>       
    </div>

    <div class="bodymanu">
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

    <div>
        <table>
            <tr>
                <td>
                    <img src="Image/2_CuratedWeb0106.jpg" alt="specialday" width="1500px"/>
                </td>
            </tr>
        </table>
    </div>

    <div class="animation">
        <marquee scrollamount="20">
            <img src="Image/89_inr.jpg" alt="img1" width="1490px" height="394px">
            <img src="Image/85_inr.jpg" alt="img2" width="1490px" height="394px">
            <img src="Image/81_inr.jpg" alt="img3" width="1490px" height="394px">
            <img src="Image/84_inr.jpg" alt="img4" width="1490px" height="394px">
            <img src="Image/83_inr.jpg" alt="img5" width="1490px" height="394px">
            <img src="Image/79_inr.jpg" alt="img6" width="1490px" height="394px">
            <img src="Image/80_inr.jpg" alt="img7" width="1490px" height="394px">
        </marquee>
    </div>

    <hr style="height: 1px; border-width: 0; margin: 3px; background-color: black; color: black;">

    <h2 class="webname">Now Trending</h2>

    <div class="container">
        <div class="card">
            <img src="Image/9781421520544.jpg" alt=""/>
            <div class="title">Vagabond (Vizbig Edition), Vol. 1</div>
            <div class="author">Takehiko Inoue</div>
            <div class="review">4.7</div>
            <div class="price">₹1,801 <span class="original-price">₹2,119</span></div>
        </div>
        <div class="card">
            <img src="Image/9781421522449.jpg" alt=""/>
            <div class="title">Vagabond (Vizbig Edition), Vol. 2</div>
            <div class="author">Takehiko Inoue</div>
            <div class="review">4.6</div>
            <div class="price">₹1,733 <span class="original-price">₹2,139</span></div>
        </div>
        <div class="card">
            <img src="Image/9781421522463.jpg" alt=""/>
            <div class="title">Vagabond (Vizbig Edition), Vol. 4</div>
            <div class="author">Takehiko Inoue</div>
            <div class="review">5.0</div>
            <div class="price">₹1,399 <span class="original-price">₹2,119</span></div>
        </div>
        <div class="card">
            <img src="Image/9780241252086.jpg" alt=""/>
            <div class="title">White Nights</div>
            <div class="author">Ronald Meyer</div>
            <div class="review">5.0</div>
            <div class="price">₹74 <span class="original-price">₹124</span></div>
        </div>
        <div class="card">
            <img src="Image/9781685798468.jpg" alt=""/>
            <div class="title">Heaven Official's Blessing: Tian Guan Ci Fu (Novel) Vol. 8</div>
            <div class="author">Mo Xiang Tong Xiu</div>
            <div class="review">5.0</div>
            <div class="price">₹1,545 <span class="original-price">₹2,861</span></div>
        </div>
    </div>

    <hr style="height: 1px; border-width: 0; margin: 3px; background-color: black; color: black;">

    <img src="Image/MedicalWeb.jpg" alt="" width="1500">

    <hr style="height: 1px; border-width: 0; margin: 3px; background-color: black; color: black;">

    <div class="FAuthor">
        <div class="carousel">
            <div>
                <img src="Image/arundhatistory_647_100316054702.jpg" alt="Arundhati Roy"/>
                <div class="author">Arundhati Roy</div>
            </div>
            <div>
                <img src="Image/stephan-coonts.jpg" alt="Stephen Coonts"/>
                <div class="author">Stephen Coonts</div>
            </div>
            <div>
                <img src="Image/william-wordsworth-8.jpg" alt="William Wordsworth"/>
                <div class="author">William Wordsworth</div>
            </div>
            <div>
                <img src="Image/stephen-edwin-king.jpg" alt="Stephen King"/>
                <div class="author">Stephen King</div>
            </div>
            <div>
                <img src="Image/download.jpg" alt="John Green"/>
                <div class="author">John Green</div>
            </div>
            <div>
                <img src="Image/dillian.jpg" alt="Gillian Flynn"/>
                <div class="author">Gillian Flynn</div>
            </div>
            <div>
                <img src="Image/gayle-forman.jpg" alt="Gayle Forman"/>
                <div class="author">Gayle Forman</div>
            </div>
            <div>
                <img src="Image/ma10_milestones_segal.jpg" alt="Erich Segal"/>
                <div class="author">Erich Segal</div>
            </div>
        </div>
    </div>

    <hr style="height: 1px; border-width: 0; margin: 3px; background-color: black; color: black;">

    <footer class="footer">
        <table>
            <tr>
                <th class="footer_heading">Company</th>
                <th class="footer_heading">Policies</th>
                <th class="footer_heading">Help</th>
                <th class="footer_heading">Misc</th>
            </tr>
            <tr>
                <td>About Us</td>
                <td>Privacy Policies</td>
                <td>Payment</td>
                <td>Affiliate</td>
            </tr>
            <tr>
                <td>Career</td>
                <td>Terms of Use</td>
                <td>Shipping</td>
                <td>Sitemap</td>


            </tr>
            <tr>
                <td>Blog</td>
                <td>Secure Shopping</td>
                <td>Return</td>
            </tr>
            <tr>
                <td>Contact Us</td>
                <td>Copyright Policy</td>
                <td>FAQ</td>
            </tr>
        </table>
        <h3>Copyright © 2024 . Bookswagon.com. All Rights Reserved</h3>
    </footer>
</body>
</html>
