<?php

session_start();
include("../connect.php");
require_once("../common/teacher_header.php");




$facpro=$_SESSION['eid'];


$select1="SELECT * FROM faculty where fid=$facpro ";
$run1=mysqli_query($conn,$select1);
$run1=$run1->fetch_array();

$dept=$run1[3];

	 			if($dept=='fs')
	 			{
	 				$de="Faculty of Information Science";
	 			}
	 			elseif($dept=='ed')
	 			{
	 				$de="English Department";
	 			}
	 			elseif($dept=='md')
	 			{
	 				$de="Myanmar Department";
	 			}
	 			elseif($dept=='hd')
	 			{
	 				$de="Hardware Department";
	 			}





?>
<div class="container">
	<div class="row">
		
		<div class="col-xl-10 col-md-10 col-sm-12 mt-5 col-12 mx-xl-auto mx-lg-auto mx-md-auto">
			<div class="card card-color">
				<div class="card-body">
					<!-- <img src="../assets/img/profile2.jpg"> -->
					
						<table class="table table-borderless">

							<tbody>
								<tr>
									<td>
										<!-- <a href="faculty_image_edit.php?id=<?= $facpro ?>"><img src="<?php echo $run1[6] ?>" style="border-radius: 50%;width: 150px;height: 100px;">
										</a> -->
										<div class="image1">
											
												<img src="<?php echo  $run1[6] ?>"  style="border-radius: 50%;width: 150px;height: 100px;" alt="Avatar" class="image">
												
												
											
										</div>

									</td>
									<td>								
										<button class="button" style="float: right; margin: 10px auto;" ><a href="faculty_image_edit.php?id=<?= $facpro ?>">Change Picture</a></button>
										
									</td>
								</tr> 
								<form action="tea_ps_chg.php" method="POST" enctype="multipart/form-data" name="form1" onsubmit="return formValidator();">
								<tr>
									<td><label for="st_name">Name</label></td>
									<td><?php echo  $run1[1] ?></td>
								</tr>

								<tr>
									<td><label for="email">Email</label></td>
									<td><?php echo $run1[2] ?> </td>
								</tr>

								<tr>
									<td><label for="department">Department</label></td>
									<td><?php echo $de  ?></td>
								</tr>

								<tr>
									<td><label for="gender">Gender</label></td>
									<td><?php echo  $run1[4] ?></td>
								</tr>

								<tr>
									<td><label for="password">Password</label></td>
									<td>*************</td>
								</tr>

								<tr>
									<td><label for="chg_pass" >Change Password</label></td>
									<td><input type="password"  name="password" id="chg_pass"></td>
									<td><button name="btps">change</button>	</td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>


	</div>
</div>

<?php

require_once("../common/footer.php");

?>