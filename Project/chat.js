var sender;
var lastmessage = 0;
var datenow = Math.floor(Date.now());
var receiver;
var post_chat;
var message;
var otheruser;
function sesh(){
	var sessionCheck = new XMLHttpRequest();
	sessionCheck.addEventListener("load", e =>
	{
		var response = e.target.responseText;
		sender = parseInt(response);
	})
sessionCheck.open("GET" , `session.php`);
sessionCheck.send();
}
sesh();


function main()
{
        document.getElementById("btn1").addEventListener("click", sendmessage);
        receiver = parseInt(document.getElementById("receiver").value);
}
main();

// gets receiver name
function recName(){
	var receiverName = new XMLHttpRequest();
	receiverName.addEventListener("load", e =>
	{
		var response = e.target.responseText;
		otheruser = response;
	})
	receiverName.open("GET" , `receiver.php?id=${receiver}`);
	receiverName.send();
}
recName();


function sendmessage(){
	var message = document.getElementById("message-text").value;
		document.getElementById("message-text").value = "";
    
    var messaging = new XMLHttpRequest();
    messaging.open("GET" , `sendmessage.php?message=${message}&sender=${sender}&receiver=${receiver}&datenow=${datenow}&lastmessage=${lastmessage}`);
    
    messaging.send();
}


setInterval(function receivemessage(){

	var recMessage = new XMLHttpRequest();

        recMessage.addEventListener("load", e =>
        {
            var allmessages = JSON.parse(e.target.responseText);
            allmessages.forEach( curMessage =>
			{
				if(parseInt(curMessage.sendid) == receiver){
					message = `<div class="received message" style="float:left;text-align:left;"><b>${otheruser}:</b></br>${curMessage.message}</div></br></br>`;
				}
				else if(parseInt(curMessage.sendid) == sender){
					message = `<div class="sent message" style="float:right;text-align:right;"><b>You:</b></br>${curMessage.message}</div></br></br>`;
				}
				else{
					message=``;
				}
				lastmessage = parseInt(curMessage.ID);
				var pre_chat = document.getElementById("chat-display").innerHTML;
				post_chat = pre_chat + message;
			});
        document.getElementById("chat-display").innerHTML = post_chat;
    })
    recMessage.open("GET" , `recmessage.php?you=${sender}&them=${receiver}&lastmessage=${lastmessage}&datenow=${datenow}`);
    recMessage.send();
},1000);