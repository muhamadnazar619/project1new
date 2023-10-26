<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>nama : {{ $ngaran }}</p>
    <p>jenisjenisSapi</p>
    <ol>

        @foreach ($sapi as $s)
            <li>
                {{ $s }}
            </li>
        @endforeach

        @foreach ($foto as $f)
            <li>
                <img src="{{ $f }}" alt="" />
            </li>
        @endforeach



    </ol>
    <p>karyawan : {{ $bigost }} <img
            src="https://assets.pikiran-rakyat.com/crop/197x102:627x670/x/photo/2022/05/01/2611237580.png"
            alt=""></p>

</body>

</html>
