<?php 
session_start();
$title = "Login";

$server = "localhost";
	$user = "root"; 
	$password = "";
	$db = "kalyani";  

	$conn = new mysqli($server,$user,$password,$db);

	if($conn->connect_error)
	{
		die("Connection Error : ".$conn->connect_error);
	}else{
		//echo "Database Connected";
	}

// print_r($_POST);

$myUserName = "";
$myPassword = "";

if (isset($_POST['login'])) {
	$username = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE user_id = '$username' and password = '$password'";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  while($row = $result->fetch_assoc()) {
	    	$newUser = $row['user_id'];
	    	$newPass = $row['password'];
	    	$user = $row['name'];
	    	$createdDate = $row['created_at'];
	    	$_SESSION['is_login'] = "true";
	    	// echo "Welcome - ".$user." created_at ".$createdDate;
	    	header('Location: admin/index.php');
	  	}
	} else {
		?>
		 <script type="text/javascript"> alert("Please Check Username and Password combination");
		</script>
		 <?php
	}
	$conn->close();
}
include("assets/includes/header.php");
?>
<style type="text/css">
	.my-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.my-form .row
{
    margin-left: 0;
    margin-right: 0;
}

.login-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.login-form .row
{
    margin-left: 0;
    margin-right: 0;
}
</style>
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row my-4">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>


                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="login" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
<?php
	include("assets/includes/footer.php");
?>