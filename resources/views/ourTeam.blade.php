@php
  $team = [
    [
      "name" => "Franco",
      "surname" => "Lino",
      "work" => "web-developer",
],
    [
      "name" => "Piero",
      "surname" => "Afgano",
      "work" => "CEO",
],
];
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Vi presento il nostro Team</h1>
  <ul>
    @foreach ($team as $member)
        <li>{{$member["name"]}} {{$member["surname"]}}</li>
      
            @if ($member["work"] == "CEO")
              <h5>IO SONO IL PADRONE</h5>
            @else
              <h5>IO SONO UN DIPENDENTE</h5>
            @endif
        

    @endforeach
  </ul>
  
</body>
</html>