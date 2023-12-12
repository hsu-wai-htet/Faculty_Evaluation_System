<?php
require_once("../common/admin_header.php");
?>

<div class="row">
	<div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-12 mt-5 mx-auto">
		<div class="card">
			<div class="card-body card-color">
				<form action="fA.php" method="POST">
					<table class="table table-striped mt-5 col-10 mx-auto">
						<tr>
							<td><input type="radio" name="yr" value="1" id="fyr" ><label for="fyr">First Year</label></td>
							<td><input type="radio" name="yr" value="2" id="syr" ><label for="syr">Second Year</label></td>
							<td><input type="radio" name="yr" value="3" id="tyr" ><label for="tyr">Third Year</label></td>
							<td><input type="radio" name="yr" value="4" id="foyr"><label for="foyr">Fourth Year</label></td>
							<td><input type="radio" name="yr" value="5" id="fiyr"><label for="fiyr">Fifth Year</label></td>
						</tr>
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