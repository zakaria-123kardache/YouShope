<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Youshop</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://use.fontawesome.com/dfba0bb4d8.js"></script>
  </head>
  <body>
    <section id="header">
      <a href="#"><img src="" class="logo" alt="" /></a>

      <div>
        <ul id="navbar">
          <a href="#" id="close"><i class="fa fa-close"></i></a>
          <li><a href="/">Home</a></li>
          <li><a href="/shop">Shop</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
          <li id="lg-bag">
            <a class="active" href="/panier"
              ><i class="fa fa-shopping-bag" aria-hidden="true"></i
            ></a>
          </li>
        </ul>
      </div>
      <div id="mobile">
        <a href="cart.html"
          ><i class="fa fa-shopping-bag" aria-hidden="true"></i
        ></a>
        <i id="bar" class="fa fa-bars" aria-hidden="true"></i>
      </div>
    </section>

    <section id="page-header" class="about-header">
      <h2>#CART</h2>
      <p>Enter your coupon code...</p>
      <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
      </a>
    </section>
    <div class="small-container">
      <table>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
        {{-- <tr>
          <td>
            <div class="cart-info">
              <img src="{{ $produit->photo }}" alt="Tshirt" />
              <div>
                <p>{{ $produit->name }}</p>
                <small>Price: {{ $produit->prix }}$</small>
                <br />
                <a href="#">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>$78.00</td>
        </tr> --}}
        <tbody id="panier-items"></tbody>
        
      </table>

      <div class="total-price">
        <table>
            <td>Total</td>
            <td>${grandTotal}$</td>
          </tr>
        </table>
      </div>
      <div>

        <button onclick="validerCommande()">Checkout</button>

      </div>
    </div>

    <section id="form-details">
      <form action="">
        <span>Leave a Message</span>
        <h2>We love to hear from you</h2>
        <input type="text" placeholder="Enter your name" />
        <input type="text" placeholder="Enter your Email" />
        <input type="text" placeholder="Enter your Subjext" />
        <textarea
          name=""
          id=""
          cols="30"
          rows="10"
          placeholder="Your Message"
        ></textarea>
        <button class="normal">Submit</button>
      </form>

      <div class="people">
        <div>
          <img src="img/people/1.png" alt="" />
          <p>
            <span>John Doe</span> Senior Marketing Manager <br />
            Phone: +91 1234567890 <br />
            Email: contact@example.com
          </p>
        </div>
        <div>
          <img src="img/people/2.png" alt="" />
          <p>
            <span>John Doe</span> Senior Marketing Manager <br />
            Phone: +91 1234567890 <br />
            Email: contact@example.com
          </p>
        </div>
        <div>
          <img src="img/people/3.png" alt="" />
          <p>
            <span>Jean Doe</span> Senior Marketing Manager <br />
            Phone: +91 1234567890 <br />
            Email: contact@example.com
          </p>
        </div>
      </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
      <div class="newstext">
        <h4>Sign Up for newsletter</h4>
        <p>Lorem ipsum dolor sit amet <span>consectetur</span>.</p>
      </div>
      <div class="form">
        <input type="text" placeholder="your email address" />
        <button class="normal">Sign Up</button>
      </div>
    </section>

    <footer class="section-p1">
      <div class="col">
        <img class="logo" src="" alt="" />
        <h4>Contact</h4>
        <p>
          <strong><i class="fa fa-home"></i></strong> Lorem ipsum dolor sit
        </p>
        <p>
          <strong><i class="fa fa-phone"></i></strong> 13569876540
        </p>
        <p>
          <strong><i class="fa fa-hourglass" aria-hidden="true"></i></strong>
          9:00 AM - 6:00 PM
        </p>
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
          <img src="img/pay/app.jpg" alt="" />
          <img src="img/pay/play.jpg" alt="" />
        </div>
        <p>Secured payment Gateways</p>
        <img src="img/pay/pay.png" alt="" />
      </div>

      <div class="copyright">
        <p>@youshoop@</p>
      </div>
    </footer>

    <script src="{{ asset('assets/js/app.js') }}"></script>
  </body>
</html>
