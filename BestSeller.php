<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>New Arrivals</title>
        <link href="headercss.css" rel="stylesheet" type="text/css"/>
        <link href="Bookcard.css" rel="stylesheet" type="text/css"/>
        <style>
            
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
        
        <h2 class="webname">Best Seller</h2>
        <div style="display:flex">
            <h4>Sort By:<h4>
            <select>
                <option>Relevance</option>
                <option>Price- Low to High</option>
                <option>Price- High to Low</option>
                <option>Discount</option>
            </select>     
        </div>

        <div class="container">
        <div class="card">
            <img src="BSeller/9780143452676.jpg" alt=""/>
            <div class="title">Karma: A Yogi's Guide to Crafting Your Destiny NEW...</div>
            <div class="author">Sadhguru</div>
            <div class="review">3.7</div>
            <div class="price">₹239 <span class="original-price">₹300</span></div>
        </div>
        
        <div class="card">
            <img src="BSeller/9788193108703.jpg" alt=""/>
            <div class="title">Lets Crack SSB Interview</div>
            <div class="author">SSBCrack</div>
            <div class="review">4.6</div>
            <div class="price">₹488 </div>
        </div>
        
        <div class="card">
            <img src="BSeller/9780670097111.jpg" alt=""/>
            <div class="title">Doglapan</div>
            <div class="author">Ashneer Grover</div>
            <div class="review">5.0</div>
            <div class="price">₹364 <span class="original-price">₹499</span></div>
        </div>
        <div class="card">
            <img src="BSeller/9781847941831.jpg" alt=""/>
            <div class="title">Atomic Habits</div>
            <div class="author">James Clear</div>  
            <div class="review">4.0</div>
            <div class="price">₹620 <span class="original-price">₹899</span></div>
        </div>
        <div class="card">
            <img src="BSeller/9789389480566.jpg" alt=""/>
            <div class="title">General Knowledge for All - 2023</div>
            <div class="author">RPH Editorial Bo</div>
            <div class="review">5.0</div>
            <div class="price">₹18 <span class="original-price">₹30</span></div>
        </div>
    </div>
   
    <div class="container">
        <div class="card">
            <img src="BSeller/9789390036875.jpg" alt=""/>
            <div class="title">33 Days Challenge CBSE ...</div>
            <div class="author">Akshay Kumar</div>
            <div class="review">1.7</div>
            <div class="price">₹773 <span class="original-price">₹919</span></div>
        </div>
        
        <div class="card">
            <img src="BSeller/9781786330895.jpg" alt=""/>
            <div class="title">Ikigai</div>
            <div class="author">Francesc Miralle</div>
            <div class="review">4.6</div>
            <div class="price">₹396 <span class="original-price">₹509</span></div>
        </div>
        
        <div class="card">
            <img src="BSeller/9789390166268.jpg" alt=""/>
            <div class="title">The Psychology of Money</div>
            <div class="author">Morgan Housel</div>
            <div class="review">4.4</div>
            <div class="price">₹303 <span class="original-price">₹399</span></div>
        </div>
        <div class="card">
            <img src="BSeller/9788131939420.jpg" alt=""/>
            <div class="title">Times Table - Thick Laminated Preschool Chart</div>
            <div class="author">Pegasus Team</div>  
            <div class="review">3.0</div>
            <div class="price">₹218 <span class="original-price">₹300</span></div>
        </div>
        <div class="card">
            <img src="BSeller/9789355431356.jpg" alt=""/>
            <div class="title">Don't believe everything you think</div>
            <div class="author">NA</div>
            <div class="review">5.0</div>
            <div class="price">₹215 <span class="original-price">₹300</span></div>
        </div>
    </div>
    
    <div class="container">
        <div class="card">
            <img src="BSeller/9788195645718.jpg" alt=""/>
            <div class="title">Blackbook of English Vocabulary</div>
            <div class="author">Gupta, Nikhil K.R</div>
            <div class="review">4.7</div>
            <div class="price">₹447</div>
        </div>
        
        <div class="card">
            <img src="BSeller/9789355325341.jpg" alt=""/>
            <div class="title">Indian Polity for UPSC (English)|7th Edition|...</div>
            <div class="author">M Laxmikanth</div>
            <div class="review">4.6</div>
            <div class="price">₹733 <span class="original-price">₹1,139</span></div>
        </div>
        
        <div class="card">
            <img src="BSeller/9780691196350.jpg" alt=""/>
            <div class="title">ndian Sex Life</div>
            <div class="author">Durba Mitra</div>
            <div class="review">5.0</div>
            <div class="price">₹689 <span class="original-price">₹999</span></div>
        </div>
        <div class="card">
            <img src="BSeller/9789389432015.jpg" alt=""/>
            <div class="title">World’s Greatest Books For Personal Growth & Wealth...</div>
            <div class="author">Dale Carnegie, Na</div>  
            <div class="review">4.0</div>
            <div class="price">₹489 <span class="original-price">₹705</span></div>
        </div>
        <div class="card">
            <img src="BSeller/9789385986185.jpg" alt=""/>
            <<div class="title">Bhagavad Gita: Yatharoop</div>
            <div class="author">A.C. Bhaktivedanta S</div>  
            <div class="review">5.0</div>
            <div class="price">₹450 <span class="original-price">₹655</span></div>
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
