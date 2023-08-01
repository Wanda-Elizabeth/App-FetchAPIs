<!DOCTYPE html>
<html>
<head>
    <title>Cat Images</title>
</head>
<body>
    <h1>Cat Images</h1>
    <ul>
        @foreach ($catImage as $catImages)
            
            <img src="{{ $catImages['url'] }}" alt="Cat Image" style="width: 180px; height:150px;">
           
        @endforeach
    </ul>
</body>
</html>
