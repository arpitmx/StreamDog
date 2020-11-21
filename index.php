<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-database.js"></script>
<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCIIu9E8inGtE-XQBZHRbSbw7XZJYozDt0",
    authDomain: "streamdog-b2ee9.firebaseapp.com",
    databaseURL: "https://streamdog-b2ee9.firebaseio.com",
    projectId: "streamdog-b2ee9",
    storageBucket: "streamdog-b2ee9.appspot.com",
    messagingSenderId: "535067991045",
    appId: "1:535067991045:web:960b781c86ec6bcc3a106c"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  var myname = prompt("Enter your name!")
  
  function sendMessage(){

    var message = document.getElementById("message").value;

    firebase.database.ref("messages").push.set({
        "sender":myname,
        "message":message
    });

    return false;
  }


</script>


<form onsubmit="return sendMessage();">
<input id = "message" placeholder = "Enter message here" autocomplete="off">
<input type = "submit">


</form>


