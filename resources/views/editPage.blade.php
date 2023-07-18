<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="post">
    @csrf
    @method('PUT')
<input type="text" name="firstName"value="{{$results->firstName}}" id=""placeholder="Enter your FirstName"><br> <br>
   <input type="text" name="lastName"value="{{$results->lastName}}" id=""placeholder="Enter your LastName"><br> <br>
   <input type="text" name="gender"value="{{$results->gender}}" id=""placeholder="Enter your Gender"><br> <br>
   <input type="text" name="qualification"value="{{$results->qualification}}" id=""placeholder="Enter your Qualification"><br> <br>
   <button>Update User</button>
   </form>
   
</body>
</html>