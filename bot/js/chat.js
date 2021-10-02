first_time = true;
var coll = document.getElementsByClassName("collapsible");

for(let i = 0 ; i < coll.length; i++){
    coll[i].addEventListener("click",function(){
        this.classList.toggle("active");

        var content = this.nextElementSibling;

        if(content.style.maxHeight){
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            if(first_time){
                setTimeout(() =>{
                    $("#chatbox").append('<p class="botText" > <span> Below are some of the main terms that I understand:<br># Register<br># Categories<br># Payments<br># Order Status<br># Help<br># Products<br># Clear/ Exit<br><br>Try asking me something and I will try my best to understanf you and assist...</span></P>');
                    first_time = false;
                }, 1000)
            }
        }
    });
}

function getTime(){
    let today = new Date();
    hours = today.getHours();
    minutes = today.getMinutes();

    if(hours < 10){
        hours = "0" + hours; // 05:19
    }
    if(minutes < 10){
        minutes = "0" + minutes; // 05:19
    }

    let time =  hours + ":" + minutes;
    return time;

}

function firstBotMessage(){
    let firstMessage = "Warmly welcome to the chat of Dee Store..."
    document.getElementById("botStarterMessage").innerHTML = '<p class="botText" > <span>' + firstMessage + '</span></P>';

    let time = getTime();
    $("#chat-timestamp").append(time);
    document.getElementById("userInput").scrollIntoView(false);
}
firstBotMessage();

function getHardResponse(userText){
    let botHtml = getBotResponse(userText);
    var type = typeof botHtml;
    if(type == 'object'){
        botHtml.then(value => {
            $("#chatbox").append(value);
        });
    } else {
        $("#chatbox").append(botHtml);
    }

    document.getElementById("chat-bar-bottom").scrollIntoView(true);
}

function getResponse(){
    let userText = $("#textInput").val();


    if(userText == ""){
        userText = "Hello";
    }
    let userHtml = '<p class="userText"><span>' + userText + '</span></p>';
    $("#textInput").val("");
    $("#chatbox").append(userHtml);
    setTimeout(() =>{
        getHardResponse(userText.toLowerCase());

    },1000)

}

function buttonSendText(sampleText){
    let userHtml = '<p class="userText"><span>' + sampleText + '</span></p>';

    $("#textInput").val("");
$("#chatbox").append(userHtml);
document.getElementById("chat-bar-bottom").scrollIntoView(true);
}

function sendButton(){
    getResponse();
}

function heartButton(){
    buttonSendText("Thank you for sending us a heart!")
}

$("#textInput").keypress(function(e){
    if(e.which == 13){
        getResponse();
    }
});
