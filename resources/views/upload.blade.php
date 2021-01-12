@extends('child')

<form  method="POST" class="form-group">
    @csrf
    <input type="submit" class="btn-success"role="group" aria-label="Basic example" value="LOGOUT" formaction="/logout">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="DOWNLOAD LETTER BODY" formaction="">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="SHOW FILES" formaction="/showuploadedfiles">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="SET UP COMPAIN" formaction="/showTables">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="VIEW REPORTS" formaction="/showReport">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="DOWNLOAD SMTH" formaction="/upload">
</form>


@csrf
<body>
 
<div class="container mt-4">
 
  <h2 class="text-center">File Upload in Laravel 8 - Tutsmake.com</h2>
 
      <form method="POST" enctype="multipart/form-data" id="file" formaction="{{ url('store') }}" >
                 @csrf
          <div class="row">
 @csrf
              <div class="col-md-12">
@csrf    
              <div class="form-group">
                      <input type="file" name="file" placeholder="Choose file" id="file">
@csrf                    
    @error('file')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@csrf    
                    @enderror
                  </div>
              </div>
                 
              <div class="col-md-12">
@csrf    
              <input type="submit" class="btn btn-primary" value="submit" formaction="/store">
              </div>
          </div>     
      </form>
</div>
 
</div>  
</body>
