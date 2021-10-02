$( document ).ready(function() {
    $("#cart").load(location.href + " #cart");
});

function add_to_cart(img, name, qty, price, p_id) {
    $.ajax({
        url:"./php/functions.php",
        type: "post",
        data: {"func": "add", "img": img, "name": name, "qty": qty, "price": price, "id": p_id},
        success:function(response){
            if(response == "success"){
                $("#cart").load(location.href + " #cart");
            }
        },
        error: function (jqXHR, exception) {
            alert("Error");
        }
    });
}

function cart_open(){
    $('body').toggleClass('cart-data-open');
}

function cart_update(){
    var qtys = []; 
    $('input[type="number"].qty-text').each(function () {
        qtys.push(parseInt($(this).val()));
    });
    $.ajax({
        url:"./php/functions.php",
        type: "post",
        data: {"func": "update", "qtys": qtys},
        success:function(response){
            console.log("Resss: "+response);
            if(response == "success"){
                $("#cart").load(location.href + " #cart");
                $("#cart_body").load(location.href + " #cart_body");
                $("#cart_total").load(location.href + " #cart_total");
            }
        },
        error: function (jqXHR, exception) {
            alert("Error");
        }
    });
}

function cart_clear(){
    $.ajax({
        url:"./php/functions.php",
        type: "post",
        data: {"func": "clear"},
        success:function(response){
            if(response == "success"){
                $("#cart").load(location.href + " #cart");
                $("#cart_body").load(location.href + " #cart_body");
                $("#cart_total").load(location.href + " #cart_total");
            }
        },
        error: function (jqXHR, exception) {
            alert("Error");
        }
    });
}

function place_order(){
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var country = $('#country').val();
    var street_address = $('#street_address').val();
    var street_address2 = $('#street_address2').val();
    var postcode = $('#postcode').val();
    var city = $('#city').val();
    var state = $('#state').val();
    var phone_number = $('#phone_number').val();
    var email_address = $('#email_address').val();
    var create_account = document.getElementById("customCheck2").checked;
    
    if(first_name == "" || last_name == "" || street_address == "" || city == "" || phone_number == "" || email_address == ""){
        alert("Please fill all the required fields to proceed!");
        return;
    }
    
    $.ajax({
        url:"./php/functions.php",
        type: "post",
        data: {"func": "order", "first_name":first_name, "last_name":last_name, "country":country, "street_address":street_address, "street_address2":street_address2, "postcode":postcode, "city":city, "state":state, "phone_number":phone_number, "email_address":email_address, "create_account":create_account},
        success:function(response){
            console.log("RES "+response);
            if(response.includes("success:")){
                const arr = response.split(":");
                window.location.href = "./payment.php?id="+arr[1];
            } else if (response.includes("success 1:")){
                const arr = response.split(":");
                alert("Account created successfully. Password is your first name in simple letters.");
                window.location.href = "./payment.php?id="+arr[1];
            } else if (response == "cart empty"){
                alert("Your cart is empty. Please add items to your cart before checking out!");
            } else {
                console.log("Response: "+response);
                alert("Error occurred!\nPlease refresh the page and try again...");
            }
        },
        error: function (exception) {
            console.log("Response: "+exception);
            alert("Error occurred!\nPlease refresh the page and try again...");
        }
    });
}

function confirm_order(id){    
    $.ajax({
        url:"./php/functions.php",
        type: "post",
        data: {"func": "confirm_order", "id":id},
        success:function(response){
            if(response == "success"){
                alert("Payment Successful!");
                window.location.href = "./index.php"
            } else{
                alert("Payment Failed!");
            }
        },
        error: function (exception) {
            console.log("Response: "+exception);
            alert("Error occurred!\nPlease refresh the page and try again...");
        }
    });
}

function cancel_order(id){
    $.ajax({
        url:"./php/functions.php",
        type: "post",
        data: {"func": "cancel_order", "id":id},
        success:function(response){
            if(response == "success"){
                alert("Order Cancelled Successfully!");
                window.location.href = "./index.php"
            } else{
                alert("Order Cancellation Failed!");
            }
        },
        error: function (exception) {
            console.log("Response: "+exception);
            alert("Error occurred!\nPlease refresh the page and try again...");
        }
    });
}

function login(){
    var email = $('#email').val();
    var psw = $('#psw').val();
    
    $.ajax({
        url:"./php/functions.php",
        type: "post",
        data: {"func": "login", "email":email, "psw":psw},
        success:function(response){
            if(response == "success"){
                window.location.href = "./profile.php"
            } else{
                alert("Login Failed!\nIf you don't have an account, you can create a new account when placing a new order...");
            }
        },
        error: function (exception) {
            console.log("Response: "+exception);
            alert("Error occurred!\nPlease refresh the page and try again...");
        }
    });
}


function clear_keyword(){
    document.getElementById("search_keyword").value = "";
};