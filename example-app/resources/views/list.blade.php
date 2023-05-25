<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .w-5{
            display: none;
        }
    </style>
</head>
<body>
    <h1>Member List</h1>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
            <td>Operation</td>
        </tr>
        @foreach ($members as $item)
        <tr>
            <td>{{$item['Id']}}</td>
            <td>{{$item['Name']}}</td>
            <td>{{$item['Email']}}</td>
            <td>{{$item['Address']}}</td>
            <td><a href="{{"delete/".$item['Id']}}">Delete</a></td>
            <td><a href="{{"edit/".$item['Id']}}">Edit</a></td>

        </tr>
        @endforeach

    </table>
    <div>{{$members->links()}}</div>
</body>
</html>