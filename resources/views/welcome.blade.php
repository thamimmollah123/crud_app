<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="/insert/" method="post">
    @csrf
<input type="text" name="firstName" id=""placeholder="Enter your FirstName"><br> <br>
   <input type="text" name="lastName" id=""placeholder="Enter your LastName"><br> <br>
   <input type="text" name="gender" id=""placeholder="Enter your Gender"><br> <br>
   <input type="text" name="qualification" id=""placeholder="Enter your Qualification"><br> <br>
   <button>Add User</button>
   </form>
   
</body>
</html>