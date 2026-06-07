<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  
<a class="btn btn-outline-info m-3" href="{{route('car.create')}}">Create</a>
</div>
<table class="table table-dark table-striped w-75 m-auto">
<thead>
    <th>index</th>
    <th>name</th>
    <th>plate_number</th>
    <th>price</th>
    <th>image</th>
    <th>Delete</th>
</thead>

<tbody>
    @foreach($cars as $car)
    <tr>
<td>{{$loop->iteration}}</td>    
<td>{{$car->name}}</td>
<td>{{$car->plate_number}}</td>
<td>{{$car->price}}</td>
<td><img src="{{ asset('storage/'.$car->img) }}" alt=""></td>

<td><a class="btn btn-danger" href="/car/delete/{{$car->id}}">Delete</a></td>

<!-- <td>
    <form action="{{ url('car/delete/'.$car->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">
            Delete
        </button>
    </form>
</td> -->


    </tr>
    @endforeach
</tbody>
</table>



</body>
</html>