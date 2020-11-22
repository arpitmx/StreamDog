<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-database.js"></script>

<style>

@font-face {
  font-family: myFirstFont;
  src: url(sansation_light.woff);
}




#messagebox{
  width: 95%;
  height:40px;
  left: 0px;
  right:0px;
 position: fixed;
    bottom: 0px;
    z-index: 100;
    opacity : 50%;
    margin-left:3px;
    margin:5px;
 background:WhiteSmoke;    


}

#message{
  left:1px;
  width:76% ;
  height:30px;
  
 
  margin:0 auto;
}

#btn{
  left:5px;
  margin-left:3px;
  width: 5em;  height: 2.5em;
}
#messages{
  position: relative;
 
  bottom: 10px;
  width: 100%;

 


  transform: rotate(180deg);

list-style: square inside url("https://firebasestorage.googleapis.com/v0/b/basicly-be6a3.appspot.com/o/icons8-person-16-1.png?alt=media&token=f6a5aebc-2bc9-4953-849d-0fdbe0075b32");
font-family: "Times New Roman", Times, serif;
}
ul > li {
    transform: rotate(-180deg);
    background:WhiteSmoke;
    margin : 2px;
    font-size:15px;
    font-family: myFirstFont;
}





</style>



<script>

///////////////////////////////////// CONFIG ///////////////////////////////
  var firebaseConfig = {
    apiKey: "AIzaSyCIIu9E8inGtE-XQBZHRbSbw7XZJYozDt0",
    authDomain: "streamdog-b2ee9.firebaseapp.com",
    databaseURL: "https://streamdog-b2ee9.firebaseio.com",
    projectId: "streamdog-b2ee9",
    storageBucket: "streamdog-b2ee9.appspot.com",
    messagingSenderId: "535067991045",
    appId: "1:535067991045:web:960b781c86ec6bcc3a106c"
  };

  firebase.initializeApp(firebaseConfig);


////////////////////////////////////////////////////////////////////////
  
  var colors = ["red","blue","cyan","black","purple","pink","brown","yellow","tomatao"];
  
  const random = Math.floor(Math.random() * colors.length);
  var colorcode = colors[random];

  
  var myname = prompt("Enter your name!")

  function sendMessage(){

    var message = document.getElementById("message").value;
    document.getElementById("messagebox");
    firebase.database().ref("messages").push().set({
        "sender":myname,
        "message":message
    });

    return false;
  }


  firebase.database().ref("messages").on("child_added", function(snapshot){
    var html = "";
    html += "<li>";
      html += "<em><b>"+snapshot.val().sender +"</b></em>"+ " : "+ snapshot.val().message;
    html += "</li";
    
    document.getElementById("messages").innerHTML += html;
  });


</script>



<form id = "messagebox" onsubmit="return sendMessage(); ">
<input class = "parent" id = "message" placeholder = "Enter message here" autocomplete="off">
<input id = "btn" class = "child btn" height =50px type = "submit" value = "Send">

</form>

<ul id="messages"></ul>





