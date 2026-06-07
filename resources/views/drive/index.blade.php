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
  
<a class="btn btn-outline-info m-3" href="{{route('drive.create')}}">Create</a>
</div>
<table class="table table-dark table-striped w-75 m-auto">
<thead>
    <th>index</th>
    <th>name</th>
    <th>email</th>
    <th>Show</th>
</thead>

<tbody>
    @foreach($drivers as $deriver)
    <tr>
<td>{{$loop->iteration}}</td>    
<td>{{$deriver->name}}</td>
<td>{{$deriver->email}}</td>
<td><a class="btn btn-info" href="{{route('drive.show',$deriver->id)}}">Show</a></td>


    </tr>
    @endforeach
</tbody>
</table>

<div class="m-auto w-75 my-4">{{$drivers->links()}}</div>

</body>
</html>