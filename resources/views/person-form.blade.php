<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Forms</title>
</head>
<body>
    
    <h3>Create a perrson form with name, email & file</h3>

    <form action="/personS" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" id="name"><br><br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email"><br><br>
    {{-- <label for="img">Image</label> --}}
    <input type="file" name="image" id="image"><br><br>

    <button style="color: white; background-color: blue;" type="submit">Submit</button>
    </form>


</body>
</html>