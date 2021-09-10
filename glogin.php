<html lang="en">
  <head>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="784114177842-jgqpelf479fete0e9u1gss0umv84rqbc.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>

    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" data-width="200" data-height="30" data-longtitle="true"></div>
    
    <script>
      function onSignIn(googleUser) {
       
        var profile = googleUser.getBasicProfile();
        var nom = profile.getName();
        var prenom = profile.getGivenName();
        var postnom = profile.getFamilyName();
        var email= profile.getEmail();
        var imageurl= profile.getImageUrl();
        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'https://sms.eliajimmy.net/glogout.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
          var retour=xhr.responseText;

          if (retour == "") 
            {
              alert("vide");
            }
          else
            {
              //alert(retour);
              window.location.href="https://sms.eliajimmy.net/corp.php"
            }

             
        };
        xhr.send('idtoken=' + id_token);
  }
    </script>

<a href="#" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
  </body>
</html>