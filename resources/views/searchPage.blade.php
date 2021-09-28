@extends ('ancestor')

@section ('body')

<p align="center"> Input text what you want to find and choose DB where to do it</p>
@csrf
<input class="form-control"id="searchtext" type="text" name="searchtext" placeholder=""></textarea>

@csrf
@foreach($tables as $table)

<div class="form-check">
<input class="form-check-input" type="radio" name="databasedata" id="databasedata" value="{{$table->Tables_in_test}}" >
@csrf
<label class="form-check-label" for="databasedata">
{{$table->Tables_in_test}}
</label>
</div>

@endforeach

<button class="btn btn-success"id="search">SEARCH</button>




<div id="result">

<p> Here will be the result</p>

</div>
<script>
document.addEventListener("DOMContentLoaded",function(){
var searchbutton = document.getElementById('search');
searchbutton.addEventListener("click",function(){
var searchtext=document.getElementById('searchtext').value;
var databasedata = document.querySelector('input[name=databasedata]:checked').value;
let data = {
name: searchtext,
database: databasedata
};
var sendData=JSON.stringify(data);
var request = new XMLHttpRequest();
request.open('POST','/search',true);
request.addEventListener('readystatechange',function(){
if((request.readyState==4)&&(request.status==200)){
console.log(request);
console.log(request.responseText);
var jsonn=JSON.parse(request.responseText);
var result = document.getElementById('result');
result.innerHTML='';
//jsonn.forEach(element=>result.innerHTML+=element.email+'<br>');
result.innerHTML=jsonn.length;
}
});

request.setRequestHeader('Content-Type','application/json');
request.setRequestHeader("X-CSRF-TOKEN",document.head.querySelector("[name=csrf-token]").content);
request.send(JSON.stringify(data));
});
});

</script>





@endsection 