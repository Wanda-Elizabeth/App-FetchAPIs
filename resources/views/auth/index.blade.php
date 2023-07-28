<!DOCTYPE html>
<html>
<head>
    <title>Cat Images</title>
</head>
<body>
    <h1>Cat Images</h1>
    <ul>
        @foreach ($catImages as $catImage)
            
            <img src="{{ $catImage['url'] }}" alt="Cat Image" style="width: 150px; height:150px;">
           
        @endforeach
    </ul>
</body>
</html>
