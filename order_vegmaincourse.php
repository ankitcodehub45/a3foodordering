<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>


    <!-- Link our CSS file -->
    <link rel="stylesheet" href="1.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="logo.jpg" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

         
                <ul class="space">
                    <li>
                        <a href="index.html">|    Home    |</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">|    Category    |</a>
                        .<div class="dropdown-content">
                        <a href="biryani.html">|BIRYANI|</a>
                            <a href="burger.html">|Burger|</a>
                            <a href="cake.html">|CAKE|</a>
                            <a href="CHINESE.html">|CHINESE|</a>
                            <a href="dhokla.html">|DHOKLA|</a>
                            <a href="dosa.html">|DOSA|</a>
                            <a href="fafra.html">|FAFRA|</a>
                            <a href="gathiya.html">|GATHIYA|</a>
                            <a href="ICE CREAM.html">|ICE CREAM|</a>
                            <a href="idli.html">|IDLI|</a>
                            <a href="patties.html">|PATTIES|</a>
                            <a href="pizza.html">|PIZZA|</a>
                            <a href="STARTER.html">|STARTER|</a>
                            <a href="VEG MAIN COURSE.html">|VEG MAIN COURSE|</a>
                            <a href="roti.html">|ROTI|</a>
                           
                           
                          </div>
                        </li>
                    
                    <li>
                        <a href="contact.html">|Contact    |</a>
                    </li>
                   
                </ul>
            

            <div class="clearfix"></div>
        </div>
    </section>
   <!-- ==================================form============================================== -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="connection_vegmaincourse.php" method="post" class="order">
               
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="fullname" placeholder="E.g. Ankit Sonu" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 7277******" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. A3fooddelivery@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <footer>
    <div class="color">

        <!-- footer Section Starts Here -->
        <section class="footer">
            <div class="container text-center">
                <p>All rights reserved. Designed By <a href="#">A3</a></p>
            </div>
        </section>
        <!-- footer Section Ends Here -->
    </div>
</footer>
</body>
</html>