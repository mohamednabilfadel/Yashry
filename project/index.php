<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Mega Perfection" />
    <meta name="keywords" content="online store, clothes, sales, discount" />
    <meta name="author" content="Mohamed Eraky" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="indexStyle.css" />
    <link rel="icon" type="image/png" href="pics/logo.png" />
</head>

<body>

    <!-- Cart pop-up window -->
    <div class="cartMenu" id="cartMenuId">
        <button class="cartExitButton" id="cartExitButton" onclick="hideCartMenu()">X</button>
        <select name="currency" id="currency" form="form">
            <option value="USD">USD</option>
            <option value="EGP">EGP</option>
        </select>
        <div class="cartDetails">
            <div class="cartDetailsText">
                <p>Product Name : Quantity</p>
                <p id="productsList">Please choose your products first</p>
            </div>

            <button type="submit" name="addProductsToCart" form="form">Procced to Check-out</button>
        </div>

    </div>

    <!-- social media bar  -->
    <header>
        <div class="red-line">
            <div class="social-media-bar">
                <img class="social-media-logos" src="pics/Linkedin.svg" />
                <img class="social-media-logos" src="pics/Instagram.svg" />
                <img class="social-media-logos" src="pics/Facebook.svg" />
                <img class="social-media-logos" src="pics/Twitter.svg" />
            </div>
            <div class="logoDiv">
                <img class="logo" src="pics/logo.png" />
            </div>
        </div>
    </header>

    <!-- store picture -->
    <section class="banner">
        <img src="pics/background.jpg" />
    </section>

    <!-- main bar that contains home & cart buttons -->
    <div class="white-line">
        <div class="banner-buttons">
            <h4>Home</h4>
            <h4>Carrers</h4>
            <h4>About Us</h4>
            <h4>Contact Us</h4>
            <input type="submit" name="Cart" value="Cart" onclick="showCartMenu()">
        </div>
    </div>

    <!-- clothes show case -->
    <section class="main">
        <form action="checkout.php" method="POST" id="form">
            <div class="boxes">
                <p>10.99$ Buy 2 get 50% off on jacket</p>
                <img src="pics/tshirt.jpg" alt="t-shirt">
                <div class="quantity">
                    <div>
                        <button class="quantity-buttons" type="button" onclick="removeTshirts()">-</button>
                        <input type="text" id="tshirtInput" name="tshirtInput" value="0" readonly>
                        <button class="quantity-buttons" type="button" onclick="addTshirts()">+</button>
                    </div>
                    <div>
                        <button type="button" class="cart" onclick="addTshirtsToCart()">Add to
                            cart</button>
                    </div>
                </div>
            </div>
            <div class="boxes">
                <p>19.99$</p>
                <img src="pics/jacket.jpg" alt="jacket">
                <div class="quantity">
                    <div>
                        <button class="quantity-buttons" type="button" onclick="removeJackets()">-</button>
                        <input type="text" id="jacketInput" name="jacketInput" value="0" readonly>
                        <button class="quantity-buttons" type="button" onclick="addJackets()">+</button>
                    </div>
                    <div>
                        <button type="button" class="cart" onclick="addJacketsToCart()">Add to cart</button>
                    </div>
                </div>

            </div>
            <div class="boxes">
                <p>14.99$</p>
                <img src="pics/pants.jpg" alt="pants">
                <div class="quantity">
                    <div>
                        <button class="quantity-buttons" type="button" onclick="removePants()">-</button>
                        <input type="text" id="pantsInput" name="pantsInput" value="0" readonly>
                        <button class="quantity-buttons" type="button" onclick="addPants()">+</button>
                    </div>
                    <div>
                        <button type="button" class="cart" onclick="addPantsToCart()">Add to cart</button>
                    </div>
                </div>

            </div>
            <div class="boxes">
                <p><del>29.99$</del> 26.99$ 10% off</p>
                <img src="pics/shoes.jpg" alt="shoes">
                <div class="quantity">
                    <div>
                        <button class="quantity-buttons" type="button" onclick="removeShoes()">-</button>
                        <input type="text" id="shoesInput" name="shoesInput" value="0" readonly>
                        <button class="quantity-buttons" type="button" onclick="addShoes()">+</button>
                    </div>
                    <div>
                        <button type="button" class="cart" onclick="addShoesToCart()">Add to cart</button>
                    </div>
                </div>

            </div>
        </form>

    </section>


    <!-- footer -->
    <footer class="footer">
        <div>
            <ul>
                <li>
                    <h2><span style="color: red">MEGA</span>STORES</h2>
                </li>
                <li>
                    <h4>
                        It is all about quality <br />
                        Your satisfaction is our priority <br />
                        We care!
                    </h4>
                </li>
            </ul>

            <ul>
                <li>
                    <h3>Explore</h3>
                </li>
                <li>Home</li>
                <li>About</li>
                <li>Careers</li>
                <li>Goals</li>
            </ul>

            <ul>
                <li>
                    <h3>Follow Us</h3>
                </li>
                <li>Facebook</li>
                <li>Twitter</li>
                <li>Linked-in</li>
                <li>Instagram</li>
            </ul>

            <ul>
                <li>
                    <h3>Legal</h3>
                </li>
                <li>Terms and Conditions</li>
                <li>Privacy</li>
            </ul>
        </div>
    </footer>

    <!-- link to JS code -->
    <script src="code.js"></script>
</body>

</html>