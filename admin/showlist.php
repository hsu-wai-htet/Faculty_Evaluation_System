<?php

session_start();
include("../connect.php");
require_once("../common/admin_header.php");

$y=$_SESSION['year'];

$sec=$_POST['sec'];

$_SESSION['sec']=$sec;


$sql="SELECT * from faculty";
$result=mysqli_query($conn,$sql);
?>
<div class="row">
	<div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-12 mt-5 mx-auto">
		<div class="card">
			<div class="card-body card-color">
				<form action="addtech.php" method="POST">
					<table class="table table-striped mt-5 col-10 mx-auto">
						<?php
						while($row=mysqli_fetch_assoc($result))
						{
							$dept=$row['fdept'];
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
							<tr>
								<td> <input type="checkbox" name="ch[]" value="<?php echo $row['fid'] ?>">&nbsp;&nbsp;&nbsp;<?php echo $row['fname']."(".$de.")"."<br>";?></td>
							</tr>
							<?php


						}
						?>
					</table>
					<div>
						<input class="button mr-0" style="float: right; margin: 10px auto;" type="submit" value="Select">
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<?php


require_once("../common/footer.php");

?>



