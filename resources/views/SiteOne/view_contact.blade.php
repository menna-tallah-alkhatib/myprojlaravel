<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>table</title>
</head>
<body>
<table class="table">
  <thead>
  <tr class="table-active">
     <th>#</th>
     <th>NAME</th>
     <th>EMAIL</th>
     <th>PHONE</th>
     <th>IMAGE</th>
     <th>MSG</th>
     <th>CERATEDAT</th>
     <th>UPDTEDAT</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($contact as $c)
    <tr class="table-active">
     <td>{{$c->id}}</td>
     <td>{{$c->name}}</td>
     <td>{{$c->email}}</td>
     <td>{{$c->phone}}</td>
     <td><img style="width:50px" src="{{asset('uploads/'.$c->image)}}"></td>
     <td>{{$c->message}}</td>
     <td>{{$c->created_at}}</td>
     <td>{{$c->updated_at}}</td>
    </tr>
    @endforeach 
  </tbody>
</table>
</body>
</html>