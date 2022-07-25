@php
$team = [
    [
        'name' => 'Franco',
        'surname' => 'Lino',
        'work' => 'front-end Developer',
        'img' => 'https://picsum.photos/200?random=1',
    ],
    [
        'name' => 'Piero',
        'surname' => 'Afgano',
        'work' => 'CEO',
        'img' => 'https://picsum.photos/200?random=2',
    ],
    [
        'name' => 'Elisa',
        'surname' => 'Ferro',
        'work' => 'Designer',
        'img' => 'https://picsum.photos/200?random=3',
    ],
    [
        'name' => 'Franco',
        'surname' => 'Lino',
        'work' => 'back-end Developer',
        'img' => 'https://picsum.photos/200?random=4',
    ],
];
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center p-3">Vi presento il nostro Team</h1>
    <div class="container">
        <div class="row m-auto">
            @foreach ($team as $member)
                <div class="col">
                    <ul class="list-unstyled">
                        <img src="{{ $member['img'] }}" alt="">
                        <li>{{ $member['name'] }} {{ $member['surname'] }}</li>
                        <li>{{ $member['work'] }}</li>
                        @if ($member['work'] == 'CEO')
                            <h5>CAPO</h5>
                        @else
                            <h5>DIPENDENTE</h5>
                        @endif

                    </ul>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
