<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <p class="h4">Add Member</p>
    <form method="POST" action="">
        @csrf
        <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="{{$edit['Id']}}" >

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"  >Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$edit['Name']}}" >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1"  >Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" class="form-label" value="{{$edit['Email']}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address" class="form-label" value="{{$edit['Address']}}">
        </div>
     
        <button type="submit" class="btn btn-primary">Add Member</button>
    </form>

</body>

</html>
