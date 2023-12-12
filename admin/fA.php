<?php


session_start();

require_once("../common/admin_header.php");


$y=$_POST['yr'];
// echo $y;

$_SESSION['year']=$y;


if($y==1)
{


	?>
	<div class="row">
		<div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-12 mt-5 mx-auto">
			<div class="card">
				<div class="card-body card-color">
					<form action="showlist.php" method="POST">
						<table class="table table-striped mt-5 col-10 mx-auto">
							<tr><td><input type="radio" name="sec" value="A" id="a"><label for="a">Section(A)</label></td></tr>
							<tr><td><input type="radio" name="sec" value="B" id="b"><label for="b">Section(B)</label></td></tr>
							<tr><td><input type="radio" name="sec" value="C" id="c"><label for="c">Section(C)</label></td></tr>
							<tr><td><input type="radio" name="sec" value="D" id="d"><label for="d">Section(D)</label></td></tr>
							<tr><td><input type="radio" name="sec" value="E" id="e"><label for="e">Section(E)</label></td></tr>			
						</table>
						<input type="Submit" class="button" style="float: right; margin: 10px auto; name="select" value="Select">
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<?php

}

if($y==2)
{
	?>

	<div class="row">
		<div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-12 mt-5 mx-auto">
			<div class="card">
				<div class="card-body card-color">
					<form action="showlist.php" method="POST">
						<table class="table table-striped mt-5 col-10 mx-auto">
							<tr><td><input type="radio" name="sec" value="A" id="a"><label for="a">Section(A)</label></td></tr>
							<tr><td><input type="radio" name="sec" value="B" id="b"><label for="b">Section(B)</label></td></tr>
							<tr><td><input type="radio" name="sec" value="C" id="c"><label for="c">Section(C)</label></td></tr>
							<tr><td><input type="radio" name="sec" value="D" id="d"><label for="d">Section(D)</label></td></tr>
							<tr><td><input type="radio" name="sec" value="E" id="e"><label for="e">Section(E)</label></td></tr>			
						</table>
						<input type="Submit" class="button" style="float: right; margin: 10px auto; name="select" value="Select">
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php

}
if($y==3)
{
	?>
	<div class="row">
		<div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-12 mt-5 mx-auto">
			<div class="card">
				<div class="card-body card-color">
					<form action="showlist.php" method="POST">
						<center><label for="CS"><h3>CS</h3></label></center>
						<table class="table table-striped mt-5 col-10 mx-auto mb-5">
							<tr><td><input type="radio" name="sec" value="A" id="a"><label for="a">Section(A)</label></td></tr>
							<tr><td><input type="radio" name="sec" value="B" id="b"><label for="b">Section(B)</label></td></tr>
							<tr><td><input type="radio" name="sec" value="C" id="c"><label for="c">Section(C)</label></td></tr>
						</table>
						<center><label for="CT"><h3>CT</h3></label></center>
						<table class="table table-striped mt-5 col-10 mx-auto">
							<tr><td><input type="radio" name="sec" value="A" id="a"><label for="a">Section(A)</label></td></tr>
						</table>
						<input type="Submit" class="button" style="float: right; margin: 10px auto;" name="select" value="Select">			
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php

}

if($y==4)
{
	?>
	<div class="row">
		<div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-12 mt-5 mx-auto">
			<div class="card">
				<div class="card-body card-color">
					<form action="showlist.php" method="POST">
						<table class="table table-striped mt-5 col-10 mx-auto">		
							<tr><td><input type="radio" name="sec" value="SE" id="se"><label for="se">Software Engineering</label></td></tr>
							<tr><td><input type="radio" name="sec" value="KE" id="ke"><label for="ke">Knowledge Engineering</label></td></tr>
							<tr><td><input type="radio" name="sec" value="HPC" id="hpc"><label for="hpc">High Performance Computing</label></td></tr>
							<tr><td><input type="radio" name="sec" value="BIS" id="bis"><label for="bis">Business Information System</label></td></tr>
							<tr><td><input type="radio" name="sec" value="ES" id="es"><label for="es">Embedded System</label></td></tr>
							<tr><td><input type="radio" name="sec" value="NE" id="ne"><label for="ne">Networking Engineering</label></td></tr>
						</table>
						<input type="Submit" class="button" style="float: right; margin: 10px auto;" name="select" value="Select">	
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php

}

if($y==5)
{
	?>
	<div class="row">
		<div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-12 mt-5 mx-auto">
			<div class="card">
				<div class="card-body card-color">
					<form action="showlist.php" method="POST">
						<table class="table table-striped mt-5 col-10 mx-auto">		
							<tr><td><input type="radio" name="sec" value="SE" id="se"><label for="se">Software Engineering</label></td></tr>
							<tr><td><input type="radio" name="sec" value="KE" id="ke"><label for="ke">Knowledge Engineering</label></td></tr>
							<tr><td><input type="radio" name="sec" value="HPC" id="hpc"><label for="hpc">High Performance Computing</label></td></tr>
							<tr><td><input type="radio" name="sec" value="BIS" id="bis"><label for="bis">Business Information System</label></td></tr>
							<tr><td><input type="radio" name="sec" value="ES" id="es"><label for="es">Embedded System</label></td></tr>
							<tr><td><input type="radio" name="sec" value="NE" id="ne"><label for="ne">Networking Engineering</label></td></tr>
						</table>
						<input type="Submit" class="button" style="float: right; margin: 10px auto;" name="select" value="Select">	
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php

}
require_once("../common/footer.php");

?>