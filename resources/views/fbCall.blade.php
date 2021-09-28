@extends ('ancestor')

@section ('body')

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '616701115990260',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v12.0'
    });
  };
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

<div class="container">
<div class="row">
<button class="btn-success" id="callFb"> CALL FB </button>
</div>
</div>



<div id="result">

<p> Here will be the result</p>

</div>



<script>
document.addEventListener("DOMContentLoaded",function(){
var callFb=document.getElementById('callFb');
callFb.addEventListener("click",function(){
FB.login(function(response) {
    if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
     FB.api('/me', function(response) {
       console.log('Good to see you, ' + response.name + '.');
     });
    } else {
     console.log('User cancelled login or did not fully authorize.');
    }
});
});
});
    
</script>




@endsection 