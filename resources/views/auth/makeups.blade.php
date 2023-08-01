<!DOCTYPE html>
<html>
<head>
    <title>Makeup</title>
</head>
<body>
    <h1>Makeup</h1>
    <ul>
        @isset($makeups)
            @foreach ($makeups as $makeup)
                <li>
                    <img src="{{ $makeup['url'] }}" alt="Makeup">
                </li>
            @endforeach
        @endisset
    </ul>
</body>
</html>
