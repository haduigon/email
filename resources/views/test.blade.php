@extends('ancestor')



@section('body')

<p align="center">This is the js API test</p>

@section('oneVar')
<div id="welcome">
{{$test ??''}}



<input type="text" id="name" placeholder="John Smith">
<button id="jsonn">Ckeck JSONN</button>
</div>

@show

<script>
document.addEventListener("DOMContentLoaded",function(){
var mybutton = document.getElementById('jsonn');
mybutton.addEventListener("click",function(){
var name = document.getElementById('name').value;
name = 'nameUser='+ encodeURIComponent(name);
var request = new XMLHttpRequest();
request.open('POST','/jsonn',true);
request.addEventListener('readystatechange',function(){
if((request.readyState==4)&&(request.status==200)){
console.log(request);
console.log(request.responseText);
var jsonn=request.responseText;
var jsonn2=JSON.parse(jsonn);
var jsonn3=jsonn2.nameUser;
var welcome = document.getElementById('welcome');
welcome.innerHTML = 'Hello, '+jsonn3;
}
});
request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
//request.setRequestHeader('Content-Type','application/json');
request.setRequestHeader("X-CSRF-TOKEN", document.head.querySelector("[name=csrf-token]").content );
request.send(name);
//request.send(JSON.stringify({"nameUser" : "TEST"}));
});
});
</script>
@endsection