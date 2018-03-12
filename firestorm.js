console.log("chala");
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyC8Gs7DuPVgyTLx01VG7sVqVshqk94AntA",
    authDomain: "c2c2018-10821.firebaseapp.com",
    databaseURL: "https://c2c2018-10821.firebaseio.com",
    projectId: "c2c2018-10821",
    storageBucket: "c2c2018-10821.appspot.com",
    messagingSenderId: "1089316420936"
  };
  firebase.initializeApp(config);

$("#subDocDat").click(function()
{
    console.log("ye bhi chala");
    var email = $("#docsignpass");
    var password = $("#emaildoc");
    firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        alert("created");
        // ...
      });
});



$("#loginBtn").on('click',function() {
    console.log("Ye kaise chala");
    var email = $("#loginEmail");
    var password = $("#psw");

    firebase.auth().signInWithEmailAndPassword(email, password).catch(function (error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
      
        
            

        // ...

    });
    
});

