<?php

include("../connect.php");
require_once("../common/teacher_header.php");
$fid=$_GET['id'];

?>


<div class="container">
	<div class="row">
		
		<div class="col-xl-10 col-md-10 col-sm-12 mt-5 col-12 mx-xl-auto mx-lg-auto mx-md-auto">
			<div class="card card-color">
				<div class="card-body">

					<form method="POST" action="faculty_image_update.php" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $fid ?>">
						<input type="file" name="image">
								<button class="button" style="float: right; margin: 10px auto;" name="submit">Submit</button>
					</form> 
				</div>
			</div>
		</div>
	</div>
	
</div>



<?php

require_once("../common/footer.php");
header("Location:faculty_profile.php");


?>







