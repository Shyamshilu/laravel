<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service</title>
</head>
<body>
    <p>welcome to service page</p>
    <ul>
     @php
      foreach($services as $service)
     {
        echo "<li>$service</li>";
     }
     @endphp
</ul>
</body>
</html>