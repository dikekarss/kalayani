<?php 
$title = "Sell Your Property";
include("assets/includes/header.php");
include("admin/assets/includes/connection.php");

$target_dir = "assets/uploads/";
$uploadOk = 1;

if (isset($_POST['send'])) {

	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$p_type = $_POST['p_type'];
	$p_address = $_POST['p_address'];
	$photo = $_FILES["fileToUpload"]["name"];

	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Error While Uploading Image";
    $uploadOk = 0;
  }
}

	$sql = "INSERT INTO sells(name,mobile,p_type,p_address,p_photo) VALUES ('$name','$mobile','$p_type', '$p_address', '$photo')";
	if ($conn->query($sql) === TRUE) {
	?><script type="text/javascript">alert("Data Saved Successfully"); window.location.replace("propertysell.php");</script>
	<?php
}else{
	echo $conn->error;
}

}

//
?>
<section class="profil  py-5 ">
	<div class="container">
		<h1 class="h2"><?php echo $title; ?></h1>
		<span class="animate-border border-black"></span>
		<div class="row mt-4">
			<div class="bg-white p-2">
				<form method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="mb-3 col-sm-4">
							<label for="Name" class="form-label">Name</label>
							<input type="text" class="form-control" name="name" required>
						</div>
						<div class="mb-3 col-sm-4">
							<label for="Mobile" class="form-label">Mobile Number</label>
							<!-- <input type="number" class="form-control" name="mobile"  required> -->
							<input type="text" class="form-control" name="mobile" id="mobile" pattern="[7-9]{1}[0-9]{9}" title="Please Enter a 10 digit valid Mobile Number" required="">
							<small class="text-danger">Mobile number should starts with 7,8,9 & max 10 Digits</small>
						</div>
						<div class="mb-3 col-sm-4">
							<label for="Property" class="form-label">Property Type</label>
							<select class="form-control" name="p_type" required>
								<option value="">Select One</option>
								<option value="plot">Plot</option>
								<option value="shop">Shop</option>
								<option value="house">Row House</option>
								<option value="flat">Flat</option>
							</select>
						</div>
					</div>
					
					<div class="row">
						<div class="mb-3 col-sm-6">
							<label for="p_address" class="form-label">Property Address</label>
							<textarea name="p_address" class="form-control" required></textarea>
						</div>
						<div class="mb-3 col-sm-3">
							<label for="p_address" class="form-label">Property Address</label>
							<input type="file" name="fileToUpload" class="form-control" required>
						</div>
						<div class="mb-3 col-sm-3">
							<div for="p_address" class="form-label"> . </div>
							<button type="submit" name="send" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>				
			</div>
		</div>
	</div>
</section>
<section>	
	<div class="container p-4">
		<div class="container">
			<h3 class="pb-3 mb-4 font-italic border-bottom">
				Registered Properties
			</h3>
			<div class="row">
				<?php 
				$sql = "SELECT * FROM `sells` ORDER BY id DESC;";

				$result = $conn->query($sql);
				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){ ?>
						<div class="col-md-6">
							<div class="card flex-md-row mb-4 shadow-sm h-md-250">
								<div class="card-body d-flex flex-column align-items-start">
									<strong class="d-inline-block mb-2 text-success"><?php echo($row['name']); ?></strong>
									<h6 class="mb-0">
										<a class="text-dark" href="#"><?php echo($row['mobile']); ?></a>
									</h6>
									<div class="mb-1 card-text"><strong>Property Type : </strong> <?php echo($row['p_type']); ?></div>
									<div class="mb-1 card-text"><strong>Address : </strong><?php echo($row['p_address']); ?></div>
									<div class="card-text mb-auto"><strong>Date : </strong><?php echo($row['created_at']); ?></div>

									<a class="btn btn-outline-success btn-sm" href="contact.php">Send Enquiry</a>
								</div>
								<img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="assets/uploads/<?php echo($row['p_photo']); ?>" style="width: 200px; height: 250px;">
							</div>
						</div>
					<?php }
				}
				?>
			</div>
		</section>
		<?php
		include("assets/includes/footer.php");
	?>