var cat = null;
var price = null;
var catname = null;
var pricename = null;
var last_message = null;
var new_user = null;
var new_name = null;
var user_name = null;
var new_email = null;
var user_email = null;
var new_address = null;
var user_address = null;
var new_country = null;
var user_country = null;
var new_postcode = null;
var user_postcode = null;
var new_city = null;
var user_city = null;
var new_province = null;
var user_province = null;
var new_phone = null;
var user_phone = null;
var new_psw = null;
var user_psw = null;
var feedback = false;
var order_id = null;
var track = false;

function getBotResponse(input){
    var t1 = '<p class="botText"><span>';
    var t2 = '</span></p>';

    if(input == "clear" || input == "exit"){
        cat = null;
        price = null;
        catname = null;
        pricename = null;
        last_message = null;
        new_user = null;
        new_name = null;
        user_name = null;
        new_email = null;
        user_email = null;
        new_address = null;
        user_address = null;
        new_country = null;
        user_country = null;
        new_postcode = null;
        user_postcode = null;
        new_city = null;
        user_city = null;
        new_province = null;
        user_province = null;
        new_phone = null;
        user_phone = null;
        new_psw = null;
        user_psw = null;
        feedback = false;
        order_id = null;
        track = false;
        return t1+"Your chat states have been cleared."+t2+t1+"How can we assist you further?."+t2;
    } else if(feedback === true){
        submit_feedback(order_id, input);
        feedback = false;
        order_id = null;
        return t1+"Thank you for your contribution!"+t2;
    } else if(input.includes("register") || input.includes("new","user") || input.includes("new","account") || input.includes("create","account")){
        if(input == "register new user"){
            new_user = true;
            return t1+"Enter your name.<br>Ex: FirstName LastName."+t2;
        } else {
            return t1+"To register new user account, please enter 'Register new user'."+t2;
        }
    } else if(new_user == true && new_name == true && new_email == true && new_address == true && new_city == true && new_province == true && new_postcode == true && new_country == true && new_phone == true && (input != "bye" || input != "exit")){
        str = input.replace(/\s/g, '');
        if(str == ""){
            return t1+"Password can't be empty. Please enter a password."+t2;
        } else {
            new_psw = true;
            user_psw = input;
            var promise = create_new_account(user_name, user_email, user_address, user_city, user_country, user_postcode, user_province, user_phone, user_psw).then(function(res) {
                if(res.includes("success")){
                    return_val = t1+"Congradulations!<be> Your account has been created successfully!"+t2;
                } else {
                    return_val = t1+"Opz!<be> There's been an error when creating your account.<br>Please make sure that there are no any existing accounts for the given email address."+t2;
                }
                new_user = null;
                new_name = null;
                user_name = null;
                new_email = null;
                user_email = null;
                new_address = null;
                user_address = null;
                new_country = null;
                user_country = null;
                new_postcode = null;
                user_postcode = null;
                new_city = null;
                user_city = null;
                new_province = null;
                user_province = null;
                new_phone = null;
                user_phone = null;
                new_psw = null;
                user_psw = null;

                return return_val;
              })
              return promise;
        }
    } else if(new_user == true && new_name == true && new_email == true && new_address == true && new_city == true && new_province == true && new_postcode == true && new_country == true && (input != "bye" || input != "exit")){
        str = input.replace(/\s/g, '');
        if(str == ""){
            return t1+"Mobile number can't be empty. Please enter your mobile number."+t2;
        } else {
            if(/^\d+$/.test(input)){
                new_phone = true;
                user_phone = input;
                return t1+"Enter a password for your account."+t2;
            } else {
                return t1+"Mobile number is not valid. Please try again!"+t2;
            }
        }
    } else if(new_user == true && new_name == true && new_email == true && new_address == true && new_city == true && new_province == true && new_postcode == true && (input != "bye" || input != "exit")){
        str = input.replace(/\s/g, '');
        if(str == ""){
            return t1+"Country can't be empty. Please enter your country."+t2;
        } else {
            new_country = true;
            user_country = input;
            return t1+"Enter your mobile number."+t2;
        }
    } else if(new_user == true && new_name == true && new_email == true && new_address == true && new_city == true && new_province == true && (input != "bye" || input != "exit")){
        str = input.replace(/\s/g, '');
        if(str == ""){
            return t1+"Postcode can't be empty. Please enter your postcode."+t2;
        } else {
            if(/^\d+$/.test(input)){
                new_postcode = true;
                user_postcode = input;
                return t1+"Enter your country."+t2;
            } else {
                return t1+"Postcode is not valid. Please try again!"+t2;
            }
        }
    } else if(new_user == true && new_name == true && new_email == true && new_address == true && new_city == true && (input != "bye" || input != "exit")){
        str = input.replace(/\s/g, '');
        if(str == ""){
            return t1+"Province can't be empty. Please enter your province."+t2;
        } else {
            new_province = true;
            user_province = input;
            return t1+"Enter your postcode. Enter 0 if you don't know the postcode."+t2;
        }
    } else if(new_user == true && new_name == true && new_email == true && new_address == true && (input != "bye" || input != "exit")){
        str = input.replace(/\s/g, '');
        if(str == ""){
            return t1+"City can't be empty. Please enter your city."+t2;
        } else {
            new_city = true;
            user_city = input;
            return t1+"Enter your province."+t2;
        }
    } else if(new_user == true && new_name == true && new_email == true && (input != "bye" || input != "exit")){
        str = input.replace(/\s/g, '');
        if(str == ""){
            return t1+"Address can't be empty. Please enter your address."+t2;
        } else {
            new_address = true;
            user_address = input;
            return t1+"Enter your city."+t2;
        }
    } else if(new_user == true && new_name == true && (input != "bye" || input != "exit")){
        str = input.replace(/\s/g, '');
        if(str == ""){
            return t1+"Email can't be empty. Please enter your email address."+t2;
        } else {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(input)){
                new_email = true;
                user_email = input;
                return t1+"Enter your home address.<br>Ex: House No, Street 1, Street 2"+t2;
            } else {
                return t1+"Entered email address is not valid! Please enter a valid email address."+t2;
            }
        }
    } else if(new_user == true && (input != "bye" || input != "exit")){
        str = input.replace(/\s/g, '');
        if(str == ""){
            return t1+"Name can't be empty. Please enter your name."+t2;
        } else {
            new_name = true;
            user_name = input;
            return t1+"Enter your email address."+t2;
        }
    } else if(input == "hello" || input == "hi" || input == "welcome"){
        return t1+"Hello there!"+t2+t1+"Below are some of the main terms that I understand:<br># Register<br># Categories<br># Payments<br># Order Status<br># Help<br># Products<br># Clear/ Exit<br><br>Try asking me something and I will try my best to understanf you and assist..."+t2;
    } else if(input == "categories" || input == "products" || input.includes("show", "categories") || input.includes("show", "products") || input.includes("new", "arrivals") || input.includes("popular", "products") || input.includes("ladies", "wear")){
        return t1+"Please enter the number of the category.<br>1. Women<br>2. Men<br>3. Children<br>4. Bags & Purses<br>5. Footwear<br>6. Accessories<br>7. Other"+t2;
    } else if(input == "7" ||input == "1" ||input == "2" ||input == "3" ||input == "4" ||input == "5" ||input == "6"){
        var res = "";
        if(input == "1"){
            cat = 1;
            catname = "Women";
            res = t1+"Selected category: Women.<br>If you want to change the category enter the category number from the above list."+t2
        } else if(input == "2"){
            cat = 2;
            catname = "Men";
            res = t1+"Selected category: Men.<br>If you want to change the category enter the category number from the above list."+t2
        } else if(input == "3"){
            cat = 3;
            catname = "Children";
            res = t1+"Selected category: Children.<br>If you want to change the category enter the category number from the above list."+t2
        } else if(input == "4"){
            cat = 4;
            catname = "Bags & Purses";
            res = t1+"Selected category: Bags & Purses.<br>If you want to change the category enter the category number from the above list."+t2
        } else if(input == "5"){
            cat = 5;
            catname = "Footwear";
            res = t1+"Selected category: Footwear.<br>If you want to change the category enter the category number from the above list."+t2
        } else if(input == "6"){
            cat = 6;
            catname = "Accessories";
            res = t1+"Selected category: Accessories.<br>If you want to change the category enter the category number from the above list."+t2
        } else if(input == "7"){
            cat = 7;
            catname = "Other";
            res = t1+"Selected category: Other.<br>If you want to change the category enter the category number from the above list."+t2
        }
        res += t1+"Please enter the letter of the price range.<br>a. Below 1000<br>b. Below 2000<br>c. Below 3000<br>d. Below 4000<br>e. Below 5000<br>f. Above 5000"+t2;
        return res;
    } else if(input == "a" ||input == "b" ||input == "c" ||input == "d" ||input == "e" ||input == "f"){
        var res = "";
        if(input == "a"){
            price = 1000;
            pricename = "Below 1000";
            res = t1+"Selected price range: Below 1000.<br>If you want to change the price range enter the price range letter from the above list."+t2
        } else if(input == "b"){
            price = 2000;
            pricename = "Below 2000";
            res = t1+"Selected price range: Below 2000.<br>If you want to change the price range enter the price range letter from the above list."+t2
        } else if(input == "c"){
            price = 3000;
            pricename = "Below 3000";
            res = t1+"Selected price range: Below 3000.<br>If you want to change the price range enter the price range letter from the above list."+t2
        } else if(input == "d"){
            price = 4000;
            pricename = "Below 4000";
            res = t1+"Selected price range: Below 4000.<br>If you want to change the price range enter the price range letter from the above list."+t2
        } else if(input == "e"){
            price = 5000;
            pricename = "Below 5000";
            res = t1+"Selected price range: Below 5000.<br>If you want to change the price range enter the price range letter from the above list."+t2
        } else if(input == "f"){
            price = 100000;
            pricename = "Above 5000";
            res = t1+"Selected price range: Above 5000.<br>If you want to change the price range enter the price range letter from the above list."+t2
        } 
        res += t1+"To move forward, please enter 'continue'."+t2;
        return res;
    } else if(input == "continue"){
        if(catname == null){
            return t1+"Please enter the number of the category.<br>1. Women<br>2. Men<br>3. Children<br>4. Bags & Purses<br>5. Footwear<br>6. Accessories<br>7. Other"+t2;
        } else if(pricename == null){
            return t1+"Please enter the letter of the price range.<br>a. Below 1000<br>b. Below 2000<br>c. Below 3000<br>d. Below 4000<br>e. Below 5000<br>f. Above 5000"+t2;
        } else {
            return t1+"Category: "+catname+"<br>Price Range: "+pricename+"<br><br>Please enter 'confirm' to move forward.";
        }
    } else if(input == "confirm"){
        if(catname == null){
            return t1+"Please enter the number of the category.<br>1. Women<br>2. Men<br>3. Children<br>4. Bags & Purses<br>5. Footwear<br>6. Accessories<br>7. Other"+t2;
        } else if(pricename == null){
            return t1+"Please enter the letter of the price range.<br>a. Below 1000<br>b. Below 2000<br>c. Below 3000<br>d. Below 4000<br>e. Below 5000<br>f. Above 5000"+t2;
        } else {
            window.open("shop.php?cat="+cat+"&price="+price, '_blank').focus();
            cat = null;
            price = null;
            catname = null;
            pricename = null;
        }
    } else if(input.includes("payment")){
        return t1+"You don't have anything to worry about.<br>We offer you many payment options.<br>1. Online Payments (Visa/Mastercard)<br>2. Online Fund Transfers<br>3. Cash on Delivery"+t2;
    } else if(input.includes("help")){
        window.open("contactUs.php", '_blank').focus();
    } else if(input == "bye" || input == "close"){
        return t1+"Bye.<br>Talk to you later!"+t2;
    } else if(input.includes("track", "order") || input.includes("status", "order")){
        return t1+"Please enter your order ID to get the status with a leading # tag."+t2+t1+"Ex: #123456"+t2;
    } else if(input.includes("#")){
        const inputArr = input.split("#");
        track = true;
        order_id = inputArr[1];
        return t1+"Please enter the email assosiated with this order ID.<br><br>Enter 'exit' to exit the track order state."+t2;
    } else if(track === true){
        str = input.replace(/\s/g, '');
        if(str == ""){
            return t1+"Email can't be empty. Please enter the email assosiated with the given order ID."+t2;
        } else {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(input)){
                var promise = order_status(order_id, input).then(function(res) {
                    if(!res.includes("error")){
                        if(res.toLowerCase() == "completed"){
                            feedback = true;
                            return t1+"Order Status: "+res+t2+t1+"We value your feedback as we always try our best to maintain a higher customer satisfaction.<br><br>Please leave your feedback for the selected order.<br><br>Enter 'exit' to exit the feedback state."+t2;
                        } else {
                            return t1+"Order Status: "+res+t2;
                        }
                    } else {
                        return t1+"I couldn't find a match for the given order number and email address.<br><br>Please check the email address and try again or enter 'exit' to exit the track order state.."+t2;
                    }
                })
                return promise;
            } else {
                return t1+"Entered email address is not valid! Please enter a valid email address."+t2;
            }
        }
    } else {
        return t1+"Try asking something else!"+t2+t1+"If you have any inquirey, please type 'help'"+t2;
    }

}