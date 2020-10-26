<?php

// global variables
$name;
$price;
$quantity;
$totalPerType;
$subTotal;
$taxes;
$discountedProductName;
$finalDiscount;
$total;
$currency;
$dollar = 15.74287913779831;
$currencySymbol = "$";
$overallQuantity = 0;

// prices for reference
// $tshirt = 10.99;
// $jacket = 19.99;
// $pants = 14.99;
// $shoes = 29.99;



// getting the currency preference of the user
$currency = $_POST["currency"];

// all our products with the basic price per peice in dollars + the initial quantity which is zero + final basic price depends on quantity
$products = [
    ["name" => "Product(s)", "price" => "Price/piece", "quantity" => "Quantity", "total" => "Total/Type"],
    ["name" => "T-Shirt(s)", "price" => 10.99, "quantity" => 0, "total" => 0],
    ["name" => "Jacket(s)", "price" => 19.99, "quantity" => 0, "total" => 0],
    ["name" => "Pants", "price" => 14.99, "quantity" => 0, "total" => 0],
    ["name" => "Shoes", "price" => 24.99, "quantity" => 0, "total" => 0]
];


// discounts list with number of offers that valid for the user + the final discount
$discounts = [
    ["name" => "10% off shoes", "discount" => 2.499, "offers" => 0, "finalDiscount" => 0],
    ["name" => "50% off jacket(s)", "discount" => 9.995, "offers" => 0, "finalDiscount" => 0]
];

// if user chose the currency to be EGP
if ($currency == "EGP") {
    for ($i = 1; $i < count($products); $i++) {
        $products[$i]["price"] = round($products[$i]["price"] * $dollar, 2);
        $discounts[$i]["discount"] = round($discounts[$i]["discount"] * $dollar, 2);
    }
    $currencySymbol = "e£";
}

// submitting the chosen items from cart pop-up menu to the check-out page
// assigning data on form submittion
if (isset($_POST["addProductsToCart"])) {
    // assign the quantity from the input area on home page
    $products[1]["quantity"] = $_POST["tshirtInput"];
    $products[2]["quantity"] = $_POST["jacketInput"];
    $products[3]["quantity"] = $_POST["pantsInput"];
    $products[4]["quantity"] = $_POST["shoesInput"];

    // assigning the elgible numbers of offers depending on quantity
    $discounts[0]["offers"] = $products[4]["quantity"];
    $discounts[1]["offers"] = floor($products[1]["quantity"] / 2);

    $discounts[0]["finalDiscount"] = $discounts[0]["discount"] * $discounts[0]["offers"];
    if ($discounts[1]["offers"] > $products[2]["quantity"]) {
        $discounts[1]["offers"] = $products[2]["quantity"];
    }
    $discounts[1]["finalDiscount"] = $discounts[1]["discount"] * $discounts[1]["offers"];


    // calculating the subTotal price
    for ($i = 1; $i < count($products); $i++) {
        $products[$i]["total"] = $products[$i]["quantity"] * $products[$i]["price"];
        $subTotal += $products[$i]["total"];
    }

    // getting the total number of selected items
    for ($i = 0; $i < count($products); $i++) {
        $overallQuantity = $overallQuantity + $products[$i]["quantity"];
    }

    $taxes = $subTotal * 14 / 100;

    $total = ($subTotal + $taxes) - ($discounts[0]["finalDiscount"] + $discounts[1]["finalDiscount"]);
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Mega Perfection" />
    <meta name="keywords" content="online story, clothes, sales, discount" />
    <meta name="author" content="Mohamed Eraky" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="checkoutStyle.css" />
    <link rel="icon" type="image/png" href="pics/logo.png" />
</head>

<body>

    <!-- header including social media bar and the home bar -->
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
        <div class="white-line">
            <div class="banner-buttons">
                <a href="https://megaperfection.com/project/index.php" class="anchorTags">
                    <h4>Home</h4>
                </a>
                <h4>Carrers</h4>
                <h4>About Us</h4>
                <h4>Contact Us</h4>
            </div>
        </div>
    </header>

    <!-- check-out receipt -->
    <section class="main">
        <!-- cart header including total number of selected items -->
        <h3>Shopping Cart ( <?php echo ($overallQuantity) ?> )</h3>

        <!-- outer border for receipt -->
        <div class="receiptBorder">

            <?php
            // printing products list with (names, basic price, quantity and total price)
            for ($i = 0; $i < count($products); $i++) {
                $name = $products[$i]["name"];
                $price = $products[$i]["price"];
                $quantity = $products[$i]["quantity"];
                $totalPerType = $products[$i]["total"];
                if ($quantity == 0 && $i > 0) {
                    continue;
                } else if ($quantity > 0) {
            ?>

            <ul class="receiptDevider"><?php echo ("<li> $name") ?></ul>
            <ul class="receiptDevider"><?php echo ("<li> $currencySymbol $price") ?></ul>
            <ul class="receiptDevider"><?php echo ("<li> $quantity") ?></ul>
            <ul class="receiptDevider"><?php echo ("<li> $currencySymbol $totalPerType") ?></ul>
            <?php }
                if ($i == 0) { ?>
            <ul class="receiptDevider"><?php echo ("<li> <b> $name </b>") ?></ul>
            <ul class="receiptDevider"><?php echo ("<li> <b> $price </b>") ?></ul>
            <ul class="receiptDevider"><?php echo ("<li> <b> $quantity </b>") ?></ul>
            <ul class="receiptDevider"><?php echo ("<li> <b> $totalPerType </b>") ?></ul>
            <?php }
            } ?>
            <!-- printing the subTotal, taxes, discounted items and total -->
            <?php
            echo ("
                    <p>
                        <ul>
                            <li> Sub-Total : $currencySymbol $subTotal
                            <li> Taxes : $currencySymbol $taxes");
            if ($discounts[0]["finalDiscount"] + $discounts[1]["finalDiscount"] > 0) {

                echo ("<li> Discounts :");;
            }
            for ($i = 0; $i < count($discounts); $i++) {
                $discountedProductName = $discounts[$i]["name"];
                $finalDiscount = $discounts[$i]["finalDiscount"];
                if ($finalDiscount > 0) {
                    echo ("
                    
                            <li style='margin-left : 66px;'> $discountedProductName : -$currencySymbol $finalDiscount
                    ");
                }
            }
            echo ("</ul></P>");

            echo ("
                    <p>
                        <ul>
                            <li> Total : $total
                        </ul>
                    </P>                
                ");
            ?>
            </ul>
        </div>
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
</body>

</html>