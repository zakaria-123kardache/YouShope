<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youshop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <script src="https://use.fontawesome.com/dfba0bb4d8.js"></script>
</head>

<body>

    <section id="header">
        <a href="#"><img src="" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <a href="#" id="close"><i class='fa fa-close'></i></a>
                <li><a class="active" href="/">Home</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            <i id="bar" class="fa fa-bars" aria-hidden="true"></i>

        </div>
    </section>

    <section id="hero">
        <h4>Trade in Offer</h4>
        <h2>Super Value Deals</h2>
        <h1>On all products</h1>
        <p>Lorem ipsum dolor</p>
        <button>Shop Now</button>
        <a href="#" class="to-top">
            <p class="to-top--title">BACK <br> TO TOP</p>
        </a>
    </section>
    <div id="feature" class="section-p1 ">
        @foreach ($categorie as $categoriee)
        <div class="fe-box">
                <img src="{{ $categoriee->photo }}" alt="">
                <h6>{{ $categoriee->name }}</h6>
            </div> 
            @endforeach
        </div>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection</p>
        <div class="pro-container">
            <?php foreach ($produit as $produite): ?>
            <div class="pro">
                <img src="{{ $produite->photo }}" alt="">
                <div class="des">
                    <h5>{{ $produite->name }}</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>{{ $produite->prix }}</h4>
                </div>
                <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
            </div>
            <?php endforeach; ?>

        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Upto <span>70% Off</span>- All T-shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection</p>
        <div class="pro-container">
            <?php foreach ($produit as $produite): ?>
            <div class="pro">
                <img src="{{ $produite->photo }}" alt="">
                <div class="des">
                    <h5>{{ $produite->name }}</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>{{ $produite->prix }}</h4>
                </div>
                <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
            </div>
            <?php endforeach; ?>

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
            <p>@Youshop@2025</p>
        </div>

    </footer>

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
