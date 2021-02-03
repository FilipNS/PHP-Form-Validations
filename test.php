
<!DOCTYPE html>
<html lang="eng" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
.error {color: #FF0000;}


</style>
    <title></title>
  </head>
  <body>

<?php 
$nameErr = $passwordErr = $ageErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
$name = $password = $age = $email = $website = $comment = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST["name"])) {
    $nameErr = "Name is required";
  }else {
    $name = test_input($_POST["name"]);
    // check if name only containers letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }


  if(empty($_POST["password"])) {
    $passwordErr = "Password is required";
  }else {
    $password = test_input($_POST["password"]);
    // check if password only containers letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$password)) {
      $passwordErr = "Only letters and white space allowed";
    }
  }


  if(empty($_POST["email"])) {
    $emailErr = "Email is required";
  }else {
    $email = test_input($_POST["email"]);
    // check if email only containers letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$email)) {
      $emailErr = "Only letters and white space allowed";
    }
  }

  

  if(empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  }else {
    $gender = test_input($_POST["gender"]);
    // check if gender only containers letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$gender)) {
      $genderErr = "Only letters and white space allowed";
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
}
?> 

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method = "post" action = "<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);?>">
Name: <input type="text" name="fname">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
Password: <input type="password" name="password">
<span class="error">* <?php echo $passwordErr;?></span>
<br><br>
<br><br>
Age: <input type="text" name="age">

<br><br>
<br><br>
E-mail: <input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
<br><br>
Website: <input type="text" name="website">

<br><br>
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>

<br><br>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>

<br>
<br>

  <?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // collect value of inout field 
  $name = 
  htmlspecialchars($_REQUEST['fname']);
  if (empty($name)) {
    echo "<b>Name</b> is incorect";
  } else {
    echo $name;
  }
}

echo "<br>";
echo "<br>";


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // collect value of inout field 
  $password = 
  htmlspecialchars($_REQUEST['password']);
  if (empty($password)) {
    echo "<b>Password</b> is incorect";
  } else {
    echo $password;
  }
}

echo "<br>";
echo "<br>";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // collect value of inout field 
  $age = 
  htmlspecialchars($_REQUEST['age']);
  if (empty($age)) {
    echo "<b>Age</b> is incorect";
  } else {
    echo $age;
  }
}

echo "<br>";
echo "<br>";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // collect value of inout field 
  $email = 
  htmlspecialchars($_REQUEST['email']);
  if (empty($email)) {
    echo "<b>Email</b> is incorect";
  } else {
    echo $email;
  }
}
?>
    
<?php 
echo "<h2>My Input:</h2>";
echo $name;
echo "<br>";
echo $password;
echo "<br>";
echo $age;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
?>

  </body>
</html>
