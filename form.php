<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form</title>
</head>

<body>
   <h1>Registration Form</h1>
   <form method="POST" action="user_data.php">
      <label for="name">
         Name:<input type="text" name="name" placeholder="Firstname Lastname">
      </label><br>
      <label for="email">
         Email:<input type="email" name="email" placeholder="abc@xmail.com">
      </label><br>
      <label for="DOB">
         Date Of Birth: <input type="date" name="DOB">
      </label><br>
      <label for="gender">
        Gender:<input type="text" name="gender">
      </label><br>
       <label for=" country">
         Country:<input type="text" name="country">
      </label><br>
      <button type="submit">Submit</button>
   </form>

</body>

</html>