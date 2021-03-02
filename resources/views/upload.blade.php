@extends('ancestor')

@section('body')


@csrf
<body>
 
<div class="container mt-4">
 
  <h2 class="text-center">Choose & upload file</h2>
 
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
             
@if($message = Session::get('success'))
<div class="alert alert-success" role="alert">
{{$message}}
</div>
@endif
 <input type="submit" class="btn-secondary" value="submit" formaction="/store">
              </div>
          </div>     
      </form>
</div>
 
</div>  
</body>
@endsection