<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جدول </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            direction: ltr;
            font-family: 'Cairo', sans-serif;
        }
        .table thead {
            background-color:rgb(65, 63, 63);
            color: white;
        }
        .table-hover tbody tr:hover {
            background-color: #e2e6ea;
        }
        .container {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4 text-center">جدول</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped shadow">
                <thead class="text-center">
                    <tr>
                    <th>#</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PHONE</th>
                        <th>IMAGE</th>
                        <th>MSG</th>
                        <th>CERATEDAT</th>
                        <th>UPDTEDAT</th>
                        <th>ACTON UPDATE</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                @foreach ($contact as $c)
                    <tr>
                     <td>{{$c->id}}</td>
                     <td>{{$c->name}}</td>
                     <td>{{$c->email}}</td>
                     <td>{{$c->phone}}</td>
                     <td><img style="width:50px" src="{{asset('uploads/'.$c->image)}}"></td>
                     <td>{{$c->message}}</td>
                     <td>{{$c->created_at}}</td>
                     <td>{{$c->updated_at}}</td>
                     <td><a class="btn btn-info" href="{{route('site1.edit',$c->id)}}">edit</a></td>
                    </tr>
                @endforeach 
                </tbody>
            </table>
        </div>
    </div>

    <!-- سكربت Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>