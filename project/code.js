//products variables
let tshirtQuantity = 0;
let jacketQuantity = 0;
let pantsQuantity = 0;
let shoesQuantity = 0;

let tshirtFinal = "";
let jacketFinal = "";
let pantsFinal = "";
let shoesFinal = "";

let products = [];

//products price text panel
const tshirtsInput = document.querySelector("#tshirtInput");
const jacketInput = document.querySelector("#jacketInput");
const pantsInput = document.querySelector("#pantsInput");
const shoesInput = document.querySelector("#shoesInput");

const cart = document.querySelector("#cartMenuId");
const cartproductsList = document.querySelector("#productsList");


//adding Tshirts
function addTshirts(){
    if(tshirtsInput.value == 0){
        tshirtQuantity = 1;
    }
    else{
        tshirtQuantity += 1;
    }
    tshirtsInput.value = tshirtQuantity;
}
//removing Tshirts
function removeTshirts(){
    if(tshirtQuantity > 0){
        tshirtsInput.value = tshirtQuantity -=1;
    }
    
}

//adding Jackets
function addJackets(){
    if(jacketInput.value == 0){
        jacketQuantity = 1;
    }
    else{
        jacketQuantity += 1;
    }
    jacketInput.value = jacketQuantity;
}
//removing Jackets
function removeJackets(){
    if(jacketQuantity > 0){
        jacketInput.value = jacketQuantity -=1;
    }
    
}

//adding Pants
function addPants(){
    if(pantsInput.value == 0){
        pantsQuantity = 1;
    }
    else{
        pantsQuantity += 1;
    }
    pantsInput.value = pantsQuantity;
}
//removing Pants
function removePants(){
    if(pantsQuantity > 0){
        pantsInput.value = pantsQuantity -=1;
    }
    
}

//adding Shoes
function addShoes(){
    if(shoesInput.value == 0){
        shoesQuantity = 1;
    }
    else{
        shoesQuantity += 1;
    }
    shoesInput.value = shoesQuantity;
}
//removing Shoes
function removeShoes(){
    if(shoesQuantity > 0){
        shoesInput.value = shoesQuantity -=1;
    }
    
}
//show the cart menu before check-out
function showCartMenu(){

    let status = 0;

    cart.style.display = "block";
    
    for(let i = 0; i < products.length; i++){
        if(products[i] == ""){status += 0;}
        else{status += 1;}
    }

    if(status == 0){ cartproductsList.innerHTML = "Please choose your products first";}
    else {cartproductsList.innerHTML = products.join(" ");}

}
//hide the cart menu incase you wanted to update your products or quantity
function hideCartMenu(){

    
	cart.style.display = "none";

}
// add the selected quantity to cart
function addTshirtsToCart(){
    
    if(tshirtQuantity > 0){products[0] = `T-shirt(s) : ${tshirtQuantity} <br/>`; alert("Your T-shirt(s) added to the cart successfully");}
    else if(tshirtQuantity <= 0){products[0] = ""; alert("T-shirt(s) removed from the cart successfully");}
}
// add the selected quantity to cart
function addJacketsToCart(){
    
    if(jacketQuantity > 0){products[1] = `Jacket(s) : ${jacketQuantity} <br/>`; alert("Your Jacket(s) added to the cart successfully");}
    else if(jacketQuantity <= 0){products[1] = ""; alert("Jacket(s) removed from the cart successfully");}
}
// add the selected quantity to cart
function addPantsToCart(){
    
    if(pantsQuantity > 0){products[2] = `Pants : ${pantsQuantity} <br/>`; alert("Your Pants added to the cart successfully");}
    else if(pantsQuantity <= 0){products[2] = ""; alert("Pants removed from the cart successfully");}
}
// add the selected quantity to cart
function addShoesToCart(){
    
    if(shoesQuantity > 0){products[3] = `Shoes : ${shoesQuantity} <br/>`; alert("Your Shoes added to the cart successfully");}
    else if(shoesQuantity <= 0){products[3] = ""; alert("Shoes removed from the cart successfully");}
}
