<?php
require_once('storeclass.php');
// accessing methods inside class using arrow operator
$store->addUser();
$user_details = $store->getUserData();
// check if session user data is set otherwise redirect page
if (isset($user_details)) {
 if ($user_details['access_type'] != "administrator") {
  header("Location: login.php");
 }
} else {
 header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>E-Store | Add Custome</title>
 <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
 <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
 <div class="container">
  <h1>Add New Customer</h1>
  <div class="add-user-form">
   <form action="" method="post">
    <div class="field">
     <label class="label">Email</label>
     <div class="control has-icons-left">
      <input class="input" type="email" name="email" id="email" required>
      <span class="icon is-small is-left">
       <i class="fas fa-envelope"></i>
      </span>
     </div>
    </div>
    <!--1st field end-->
    <div class="field">
     <label class="label">Password</label>
     <div class="control has-icons-left">
      <input class="input" type="password" name="password" id="password" required>
      <span class="icon is-small is-left">
       <i class="fas fa-lock"></i>
      </span>
     </div>
    </div>
    <!--2nd field end-->
    <div class="field">
     <label class="label">Firstname</label>
     <div class="control">
      <input class="input" type="text" name="firstname" id="firstname" required>
     </div>
    </div>
    <!--3rd field end-->
    <div class="field">
     <label class="label">Lastname</label>
     <div class="control">
      <input class="input" type="text" name="lastname" id="lastname" required>
     </div>
    </div>
    <!--4th field end-->
    <div class="field">
     <label class="label">Address</label>
     <div class="control">
      <input class="input" type="text" name="address" id="address" required>
     </div>
    </div>
    <!--5th field end-->
    <div class="field">
     <label class="label">Mobile</label>
     <div class="control">
      <input class="input" type="text" name="mobile" id="mobile" required>
     </div>
    </div>
    <!--6 field end-->
    <div class="field">
     <div class="control">
      <button class="button is-link" type="submit" name="add">Add</button>
     </div>
    </div>
   </form>
  </div>
 </div>
 <!--container end-->
</body>

</html>