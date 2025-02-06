<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <p class="mytext">welcome to home page</p>
    <form action="/submitdata" >
        @csrf
        Name:<input type="text" name="username" ><br>
      password:<input type="password" name="password"><br>
      <input type="submit">
</form>    
</body>
</html>