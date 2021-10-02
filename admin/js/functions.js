function login(){
    var username = $('#username').val();
    var psw = $('#psw').val();
    
    $.ajax({
        url:"./php/functions.php",
        type: "post",
        data: {"func": "login", "username":username, "psw":psw},
        success:function(response){
            if(response == "success"){
                window.location.href = "./index.php"
            } else{
                alert("Login Failed!");
            }
        },
        error: function (exception) {
            console.log("Response: "+exception);
            alert("Error occurred!\nPlease refresh the page and try again...");
        }
    });
}

function logout(){    
    $.ajax({
        url:"./php/functions.php",
        type: "post",
        data: {"func": "logout"},
        success:function(response){
            if(response == "success"){
                window.location.href = "./login.php"
            } else{
                alert("Logout Failed!");
            }
        },
        error: function (exception) {0
            alert("Error occurred!\nPlease refresh the page and try again...");
        }
    });
}

function complete_order(o_id){    
    $.ajax({
        url:"./php/functions.php",
        type: "post",
        data: {"func": "complete_order", "o_id":o_id},
        success:function(response){
            if(response == "success"){
                $("#page-inner").load(location.href + " #page-inner");
            } else{
                console.log(response);
                alert("Action Failed!");
            }
        },
        error: function (exception) {0
            alert("Error occurred!\nPlease refresh the page and try again...");
        }
    });
}

function load_orders(status){    
    $.ajax({
        url:"./php/orders.php",
        type: "post",
        data: {"status": status},
        success:function(response){
            console.log(response);
            if(response != "Error"){
                window.location.replace("table.php?status="+status);
            } else{
                console.log(response);
                alert("Action Failed!");
            }
        },
        error: function (exception) {
            alert("Error occurred!\nPlease refresh the page and try again...");
        }
    });
}

function deletep(p_id){
    $.ajax({
        url:"./php/functions.php",
        type: "post",
        data: {"func": "delete", "p_id":p_id},
        success:function(response){
            console.log(response);
            if(response != "Error"){
                $("#port-folio").load(location.href + " #port-folio");
            } else{
                console.log(response);
                alert("Action Failed!");
            }
        },
        error: function (exception) {0
            alert("Error occurred!\nPlease refresh the page and try again...");
        }
    });
}