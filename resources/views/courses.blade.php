<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <ul class="list-unstyled">
      @foreach ($coursesList as $corso)
        <li><strong>{{$corso["title"]}}</strong></li>
        <li class="{{ (strlen($corso["description"]) > 200 ? 'text-success' : 'text-primary') }} p-2">{{$corso["description"]}} </li>
      @endforeach
        
    </ul>

</body>

</html>
