@extends ('ancestor')

@section ('body')
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '544742263481199');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=544742263481199&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
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