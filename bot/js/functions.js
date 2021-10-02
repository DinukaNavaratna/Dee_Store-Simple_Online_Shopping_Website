function order_status(o_id, email){
    return new Promise(function(resolve) {
        $.ajax({
            url: "http://localhost/shopping/bot/php/functions.php",
            type: "post",
            data: {"func": "order_status", "o_id": o_id, "email": email},
            success:function(response){
                resolve(response)
            },
            error: function (jqXHR, exception) {
                resolve("error")
            }
        });
    });
}

function create_new_account(user_name, user_email, user_address, user_city, user_country, user_postcode, user_province, user_phone, user_psw){
    return new Promise(function(resolve) {
        $.ajax({
            url: "http://localhost/shopping/bot/php/functions.php",
            type: "post",
            data: {"func": "create_new_account", "user_name": user_name, "user_email": user_email, "user_address": user_address, "user_city": user_city, "user_country": user_country, "user_postcode": user_postcode, "user_province": user_province, "user_phone": user_phone, "user_psw": user_psw},
            success:function(response){
                resolve(response)
            },
            error: function (jqXHR, exception) {
                resolve("error")
            }
        });
    });
}

function submit_feedback(o_id, message){
    $.ajax({
        url: "http://localhost/shopping/bot/php/functions.php",
        type: "post",
        data: {"func": "feedback", "o_id": o_id, "message": message},
        success:function(response){
            console.log("Feedback: Success");
        },
        error: function (jqXHR, exception) {
            console.log("Feedback: Failed");
        }
    });
}