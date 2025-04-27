<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نموذج بيانات المستخدم</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">نموذج بيانات المستخدم</h4>
        </div>
        <div class="card-body">
        <form action="{{ route('site1.update') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id"  value="{{$contact->id}}">
            @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="text" value="{{$contact->name}}" class="form-control" id="name" name="name" placeholder="أدخل اسمك الكامل">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="email"  value="{{$contact->email}}" class="form-control" id="email" name="email" placeholder="example@example.com">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">phone</label>
                    <input type="tel" value="{{$contact->phone}}" class="form-control" id="phone" name="phone" placeholder="********">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">image</label>
                    <input name="image" id="image" type="file"  class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">previous image</label>
                    <img style="width:50px" src="{{asset('uploads/'.$contact->image)}}">
                </div>
                <div class="mb-3">
                <label for="message"  class="form-label" >Message</label>
                    <textarea class="form-control" name="message" id="message" type="text" placeholder="Enter your message here..." style="height:70px" data-sb-validations="required">{{$contact->message}}</textarea>
                               
                </div>
                <button type="submit" class="btn btn-success">إرسال</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>