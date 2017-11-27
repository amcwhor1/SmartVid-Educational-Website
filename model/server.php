<?php
session_start();

// variable declaration
$firstName = "";
$lastName = "";
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'smartvid');

// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	$firstName = mysqli_real_escape_string($db, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($firstName)) { array_push($errors, "First Name is required"); }
    if (empty($lastName)) { array_push($errors, "Last Name is required"); }
    if (empty($username)) { array_push($errors, "Username is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password_1)) { array_push($errors, "Password is required"); }

	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database
		$query = "INSERT INTO users (firstName, lastName, username, email, password) 
				  VALUES('$firstName', '$lastName','$username', '$email', '$password')";
		mysqli_query($db, $query);

		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: index.php');
	}

}

// ...

// LOGIN USER
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header("");
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: main.php');
	}

?>

<!--<?php  if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>-->
