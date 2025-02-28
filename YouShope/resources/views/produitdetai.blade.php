
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youshop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
    <script src="https://use.fontawesome.com/dfba0bb4d8.js"></script>
</head>
<body>
    
    <section id="header">
        <a href="#"><img src="" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <a href="#" id="close"><i class='fa fa-close'></i></a>
                <li><a href="index.html">Home</a></li>
                <li><a class="active"href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="/panier"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            <i id="bar" class="fa fa-bars" aria-hidden="true"></i>      
                 
        </div>
    </section>

    <section id="prodetails" class="sectio-p1">
        <div class="single-pro-image">
            <img src="{{ $produit->photo }}" width="100%" id="MainImg" alt="">
        </div>

        <div class="single-pro-details">
            <h4>{{ $produit->name }}</h4>
            <h2>{{ $produit->prix }}$</h2>
            <select>
                <option >select Size</option>
                <option >S</option>
                <option >M</option>
                <option >L</option>
                <option >XL</option>
                <option >XXL</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add to cart</button>
            <h4>Product Details</h4>
            <span>{{ $produit->description }}</span>
        </div>
    </section>

    

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
       <div class="pro-container">
     
            
        </div>

    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign uP for newsletters</h4>
            <p>Lorem ipsum dolor sit amet <span>consectetur</span>.</p>
        </div>
        <div class="form">
            <input type="text" placeholder="your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

   <footer class="section-p1">
    <div class="col">
        <img class="logo" src="" alt="">
        <h4>Contact</h4>
        <p><strong>Address :</strong> Lorem ipsum dolor sit</p>
        <p><strong>Phone :</strong> 13569876540</p>
        <p><strong>Hours :</strong> 5hoai</p>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>

    <div class="col">
        <h4>About</h4>
        <a href="#">About US</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
        <a href="#">About US</a>
    </div>

    <div class="col">
        <h4>MY Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>


    <div class="col install">
        <h4>Install App</h4>
        <p>From app store or Google PLay Store</p>
        <div class="row">
            <img src="img/pay/app.jpg" alt="">
            <img src="img/pay/play.jpg" alt="">
        </div>
        <p>Secured payment Gateways</p>
        <img src="img/pay/pay.png" alt="">
    </div>

    <div class="copyright">
        <p>c 2022, With ❤ Bhandary ,  Ecommerce Website Template</p>
    </div>

   </footer>

   <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>






