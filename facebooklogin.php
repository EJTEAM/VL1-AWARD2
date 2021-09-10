<html lang="en">
  <head>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="784114177842-1vu4ugqvpskvtsgk4gkeq5252o7ohi7d.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>

  <body>
  <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&autoLogAppEvents=1&version=v10.0&appId=274699830996911" nonce="ppU2Qydw"></script>
    
    <script>
    window.fbAsyncInit = function() {
        FB.init({
        appId      : '{274699830996911}',
        cookie     : true,
        xfbml      : true,
        version    : '{v10.0}'
        });
        
        FB.AppEvents.logPageView();   
        
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>


<div class="fb-login-button" data-width="" data-size="medium" data-button-type="continue_with" data-layout="default" data-auto-logout-link="true" data-use-continue-as="true"></div>
<script> 
FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    //console.log(response.authResponse.accessToken);
   alert(response.authResponse.accessToken);
  }
});
</script>
  
  </body>
</html>