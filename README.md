# Yashry
Test project for Yashry e-store

website can be tested live on http://megasoftwares.site/project/index.php

Files order:
            1- index.php
                (indexStyle.css & code.js)
            2- checkout.php    
                (checkoutStyle.css)


*design and architecture:

1-index.php
page has a social media links on the top (visual only)
            -then the store picture.
            -after that sticky home bar which will stay on top of the page when scrolling down (all buttons are visual except for cart button).
            -afterwards comes the showcase area which includes our products.
                        -showcase section contains 4 cards, 1 for each produch.
                                    -each product card contains
                                                1-input panel (view only)
                                                2-"+" and "-" buttons to choose the preffered quantity.
                                                3- "add to cart" button
            -finally the footer, which containes the full links to main pages in the site.(visual only)
            
2-checkout.php
same html code as index.php with some changes:
            -store picture removed.
            -sticky home bar changed to fixed
            -removed the products cards.
            -added the shopping cart's receipt.


*how to run the program:

by loading the home page (index.php)
            -choose the item you want to add to the cart then use the "+" and "-" buttons to control the quantity.
            -press "add to cart" button to submit the item to cart menu.
            -by pressing the "cart" button on the black home bar
                        -this will show you the selected items and the quantities before proceeding to the check-out page.
                        -choose your preferred currency from the top centered panel.
                        -pressing the "proceed to check-out" will take you to the check-out page and view the final detailed receipt.
            -incase of you changed your mind about the quantities viewed in the cart.
                        -close the cart menu by pressing the "x" button on the top right.
                        -change the quantities to your preference.
                        -press the cart button again.
                        -choose your preferred currency from the top centered panel.
                        -press the "proceed to check-out" to go to the check-out page and view the final detailed receipt.
            

                        
*faced obstacles and solutions:

-on the home page when submitting each item separately with php, the page was refreshing.
            -solution: used javascript to collect the chosen items and their quantities and put them in one menut
            which after that will be submitted using php.


-each 2 t-shirts should give you an offer of 50% off for a jacket, but testing the code found that if I bought 4 t-shirts and 
one jacket this will give me 100% off the jacket.
            -solution: 
                        -used a variable to assign number of offers available depending on number of t-shirts using:
                                    -number of t-shirts divided by 2. then floor() this number to get the lowest in case of dicimal.
                        -then used if condition to check if the number of jackets equals or more than the allowed offers.
                                    -if number of jackets less than the allowed offers, make the number of offers equals to the jackets quantity.
                                    -else the code runs normally.

The end..





