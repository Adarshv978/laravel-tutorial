<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<h1>User Login ---</h1>
<form action='form' method='POST'>
    @csrf
    <input type='text' name='username' placeholder='Input User Id' />
    <br><br>
    <input type='password' name='password' placeholder='Enter your Password' />
    <br><br>
    <button type='submit'>Log in</button>



</form>


