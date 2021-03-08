<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:100">
    </head>
<body>
    <div class="container">
        <div class="content">
            <div class="title">FPT-APTECH</div>
            @if(count($errors)>0)
{{--                danh sach loi--}}
                <div class="alert alert-danger">
                    <strong>Some thing went wrong</strong>
                    <br><br>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
