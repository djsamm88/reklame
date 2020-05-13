
<!-- Include Firebase Library -->
<script src="https://cdn.firebase.com/js/client/2.2.3/firebase.js"></script>
 <!-- CSS -->
 <style type="text/css">
 	
#chatws {
overflow-y: auto;
height: 550px;
}



#chatws .chat #message_box {
white-space: pre-line;
line-height: 0;
position: relative;
bottom: 50px;
}

#chatws .bubble-left,
#chatws .bubble-right {
line-height: 100%;
display: block;
position: relative;
padding: .5em;
-webkit-border-radius: 11px;
-moz-border-radius: 11px;
border-radius: 5px;
margin-bottom: 1.5em;
clear: both;
max-width: 80%;
border: 1px solid #dadada
}

#chatws #message_box p {
margin: 0;
}

#chatws .bubble-left {
float: left;
margin-right: 10%;
background: #fff;
}

#chatws .bubble-left .name {
display: block;
color: #42A1FF;

}

#chatws .bubble-right {
float: right;
margin-left: 10%;
background: #e2ffc7;
}

#chatws .chat #message_box .name {
margin-bottom: 6px;
}

#chatws .chat #message_box .date {
color: #777;
display: block;
margin-top: 6px;
font-size: 10px;
text-align: right;
}

#chatws .chat #message_box .msgc {
color: #333;
}

#chatws .chat #msg_form {
padding-top: 1.5px;
display: block;
}

#chatws .chat input {
display: inline-table;
border-radius: 0;
background-color: #fbfbfb;
padding: 10px;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
-ms-box-sizing: border-box;
box-sizing: border-box;
border: 3px solid rgba(0,0,0,0);
position: absolute;
bottom: 0px;
-webkit-box-shadow:  0px -2px 4px 2px rgba(0, 0, 0, .1);
-moz-box-shadow:  0px -2px 4px 2px rgba(0, 0, 0, .1);
box-shadow:  0px -2px 4px 2px rgba(0, 0, 0, .1);               
}

#chatws .chat input#name {
width: 30%;   
left: 0px;           
}

#chatws .chat input#message {
/*width: 70%;   */
width: 100%;   
right: 0px;
}


 </style>
 
 <!-- HTML -->
 <div id="chatws">
   <div class="tabs">Chat</div>
   <div class="chat">
     <div id='message_box'>
       <!-- Display messages -->
     </div>
	 <div id="go_tonya"></div>
     <form id="msg_form">
       
       <input id="message" type="text" placeholder="Message.." autofocus/>
       <button type="submit" id="save" style="display:none">Send</button>
     </form>
	 <div id="ip"></div>
   </div>
 </div>   
 <script type="text/javascript">
 	
var dari_id = "<?php echo $dari['id_pengguna']?>";
var dari_nama = "<?php echo $dari['nama']?>";
var kpd_id = "<?php echo $kpd['id_pengguna']?>";
var kpd_nama = "<?php echo $kpd['nama']?>";
var tgl = "<?php echo date('Y-m-d H:i:s')?>";



 	//create firebase reference
var dbRef = new Firebase("https://okiklan-com.firebaseio.com/");
var chatsRef = dbRef.child('chat');

var newItems = false;

//load older conatcts as well as any newly added one...
chatsRef.on("child_added", function(snap){
	console.log("added", snap.key(), snap.val());
	if(snap.key().kpd_id==dari_id)
	{
		

	}
	document.querySelector('#message_box').innerHTML += (chatHtmlFromObject(snap.val()));		

	if(snap.val().kpd_id==dari_id && snap.val().baca=="belum")
	{
		//*********************notification********************************************//
		new Audio("<?php echo base_url()?>assets_chat/notif.mp3").play();
		doNotification (snap.val().dari_nama,snap.val().isi,snap.val().tgl);
		//*********************notification********************************************//	

	    chatsRef.child(snap.key()).update({baca:"sudah"});
	    $.post("<?php echo base_url()?>index.php/welcome/update_chat/"+snap.val().firebase_id);
	}
	

	if (!newItems) return;		
	
	updateScroll();
	

});

chatsRef.once('value', function(snap){
	newItems = true;
	updateScroll();

});


function updateScroll(){
    var element = document.getElementById("chatws");
    element.scrollTop = element.scrollHeight;
}


//prepare conatct object's HTML
function chatHtmlFromObject(chat) 
{
	console.log(chat);
	
	if(chat.dari_id==dari_id)
	{
		var bubble = "bubble-right";
	}else if(chat.kpd_id==dari_id){
		var bubble = "bubble-left";
	}

	var html = '<div class="' + bubble + '"><p><span class="badge badge-pill badge-primary"><a>' + chat.dari_nama + '</a></span><span class="msgc"> ' + chat.isi + '</span><span class="date">' + chat.tgl + '</span></p></div>';
	
	if(chat.dari_id==dari_id && chat.kpd_id==kpd_id || chat.kpd_id==dari_id && chat.dari_id==kpd_id){
		return html;
	}else{
		return "";
	}
	
}



//save chat
document.querySelector('#save').addEventListener("click", function(event){

	chatForm = document.querySelector('#msg_form');
	event.preventDefault();
	var firebase_id = "<?php echo date('Ymdhis')?>";
	var tgl = "<?php echo date('Y-m-d H:i:s')?>";
	if (document.querySelector('#message').value != '') 
	{
		chatsRef.push({
				dari_id:dari_id,
				dari_nama:dari_nama,
				kpd_id:kpd_id,
				kpd_nama:kpd_nama,
				isi:document.querySelector('#message').value,
				baca:"belum",
				firebase_id:firebase_id,
				tgl:tgl
				
				
			});
			
		
		//simpan ke db
		var serialize = {
							dari_id:dari_id,
							dari_nama:dari_nama,
							kpd_id:kpd_id,
							kpd_nama:kpd_nama,
							baca:"belum",
							firebase_id:firebase_id,
							isi:document.querySelector('#message').value
						}
		$.post("<?php echo base_url()?>index.php/welcome/simpan_chat",serialize,function(){

		})
		//chatForm.reset();
		document.querySelector('#message').value='';
	} else {
		alert('Please fill atlease message!');
	}
}, 
false);


 </script>