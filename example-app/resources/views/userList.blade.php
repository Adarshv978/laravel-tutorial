<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 60%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h2>Card</h2>

<div class="card">
  {{-- <img src="https://instagram.fdel1-4.fna.fbcdn.net/v/t51.2885-15/340167933_176409168593726_5567754470073917502_n.webp?stp=dst-jpg_e35&_nc_ht=instagram.fdel1-4.fna.fbcdn.net&_nc_cat=102&_nc_ohc=ohQuP9N2viAAX8h8PIg&edm=ACWDqb8BAAAA&ccb=7-5&ig_cache_key=MzA3NzMyMjMwNjk5ODQzMjI3NA%3D%3D.2-ccb7-5&oh=00_AfC1MPJjB4hc_2u5GdDTXhphpLT5AksrPr-LMHmUgtua4A&oe=64564D0C&_nc_sid=1527a3" alt="Avatar" style="width:100%"> --}}
  {{-- <img src="https://instagram.fdel1-4.fna.fbcdn.net/v/t51.2885-15/340167933_176409168593726_5567754470073917502_n.webp?stp=dst-jpg_e35&_nc_ht=instagram.fdel1-4.fna.fbcdn.net&_nc_cat=102&_nc_ohc=ohQuP9N2viAAX8h8PIg&edm=ACWDqb8BAAAA&ccb=7-5&ig_cache_key=MzA3NzMyMjMwNjk5ODQzMjI3NA%3D%3D.2-ccb7-5&oh=00_AfC1MPJjB4hc_2u5GdDTXhphpLT5AksrPr-LMHmUgtua4A&oe=64564D0C&_nc_sid=1527a3" alt="profile Pic" height="200" width="200"> --}}
  <img src="https://instagram.fdel1-4.fna.fbcdn.net/v/t51.2885-15/340167933_176409168593726_5567754470073917502_n.webp?stp=dst-jpg_e35&_nc_ht=instagram.fdel1-4.fna.fbcdn.net&_nc_cat=102&_nc_ohc=ohQuP9N2viAAX8h8PIg&edm=ACWDqb8BAAAA&ccb=7-5&ig_cache_key=MzA3NzMyMjMwNjk5ODQzMjI3NA%3D%3D.2-ccb7-5&oh=00_AfC1MPJjB4hc_2u5GdDTXhphpLT5AksrPr-LMHmUgtua4A&oe=64564D0C&_nc_sid=1527a3" alt="" srcset="">
  <div class="container">
    <h4><b>John Doe</b></h4> 
    <p>Architect & Engineer</p> 
  </div>

<table>
    <tr>
        <td>Id</td>
        <td>First Name</td>
        <td>Middle Name</td>
        <td>Last Name</td>
        <td>Profile Photo</td>


    </tr>
    @foreach ($collection as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['firstName']}}</td>
            <td>{{$item['maidenName']}}</td>
            <td>{{$item['lastName']}}</td>
            <td><img src={{$item['image']}} alt="ghsj" ></td>


           

        </tr>

    @endforeach
    </table>  

{{-- <div>{{$collection}}</div> --}}

</div>

</body>
</html> 