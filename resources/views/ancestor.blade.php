

<html>
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
<title>
@yield('title','sydhad')
</title>
</head>
<div class="container">
<body>
<div id="header">
@section('header')
        <form  method="POST" class="form-group">
    @csrf
    <input type="submit" class="btn-success"role="group" aria-label="Basic example" value="LOGOUT" formaction="/logout">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="TEST" formaction="/test">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="SHOW FILES" formaction="/showuploadedfiles">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="SET UP COMPAIN" formaction="/showTables">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="VIEW REPORTS" formaction="/showReport">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="DOWNLOAD SMTH" formaction="/upload">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="KILL PID" formaction="/showKillPidPage">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="CHECK BOUNCES" formaction="/showCheckBouncesPage">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="SEARCH SMTH IN DB" formaction="/showSearchPage">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="CALL FB" formaction="/showFbCallPage">
    
</form>
@show
@section('body')
<p>This is default</p>
@show
</body>
</div>
</html>
