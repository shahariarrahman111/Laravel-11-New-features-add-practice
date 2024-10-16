<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, I am from view.</h1>
    <h2>Location = {{$location['name']}}</h2>
    <h2>Seasons = {{$seasons[0]}}</h2>

    <form action="{{route("weather.{lcoation}")}}" method="POST">
        @csrf

        <label for="label-control">Inter City</label>
        <input type="text" type="submit">
        <br>
        <br>
        <button style="color: white; background-color: blue;">search</button>
    </form>
</body>
</html>