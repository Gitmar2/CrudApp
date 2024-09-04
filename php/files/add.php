<?php
include('db_conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD APPLICATION</title>
     <!--Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100 min-h-screen">
<!--Header-->
  <div class="text-4xl text-center font-bold text-gray-700 mt-6 ">PHP Complete CRUD Application</div>
  <!--Formparent-->
  <div class="max-w-xl mx-auto mt-12 border-2 p-10 bg-gray-300 shadow-lg" >
  <div class="m text-center mt-4 mb-3 text-lg">
    <h3 class="font-bold text-grey-900">ADD NEW USER</h3>
    <p class ="">Complete the form below to add a new user</p>
  </div>
  <!--FilloutForm-->
  <div class="flex justify-center my-8">
    <form action="save_user.php" method="post" class="w-full">
      <div class="">
         <label for="">FirstName:</label>
        <input type="text" name="name" class="w-full px-3 py-2 border rounded mb-3" placeholder="E.g John" required>
        <label for="">LastName:</label>
        <input type="text" name="lastname" class="w-full px-3 py-2 border rounded mb-3" placeholder="E.g Doe" required>
      </div>
      <!--Email-->
      <div class="mail">
        <label for="">Email:</label>
        <input type="email" name="email" class="w-full px-3 py-2 border rounded mb-3" placeholder="E.g john.doe@example.com" required>
      </div>
      <!--Gender-->
      <div class="form-group mb-3">
      <label for="gender" class="block text-gray-700 font-bold mb-2">Gender:</label>
      <div class="flex items-center space-x-4">
      <div>
      <input type="radio" class="form-radio focus:ring-blue-500 h-4 w-4" name="gender" id="male" value="Male">
      <label for="male" class="ml-2 text-sm">Male</label>
       </div>
       <div>
      <input type="radio" class="form-radio focus:ring-blue-500 h-4 w-4" name="gender" id="female" value="Female">
      <label for="female" class="ml-2 text-sm">Female</label>
      </div>
      </div>
      </div>
      <!--Submit Button-->
      <div class="flex justify-start space-x-4">
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
      Submit
      </button>
      <a href="index.php" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
      Cancel
      </a>
      </div>
      </form>
  </div>
</div>
  
</body>
</html>