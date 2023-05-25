
 
<h1>Hello {{$name[1]}} </h1>
<a href="{{URL::to('/about')}}">About</a>
<br> 
<a href="{{URL::to('/show')}}">Show</a>


<div >{{URL::full()}}</div>
<div>{{URL::current()}}</div>
<div>{{URL::current()}}</div>
 
@if($name =='Adarsh')         
  <h1>Hii, {{$name}}</h1>      
@else
    <h1>AFXc</h1>    
@endif


@for($i = 0; $i<=5 ; $i++)
    <h1>{{$i}}</h1>
@endfor

@foreach($name as $student)
<h3>{{$student}}</h3>
@endforeach


<script>
    var data = @json($name);
    console.log("Data",data)
</script>
