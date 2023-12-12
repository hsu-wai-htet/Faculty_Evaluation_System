<?php
session_start();
include ('../connect.php');

require_once("../common/teacher_header.php");

?>
<div class="container">
	<div class="row">
		<div class="col-xl-12 col-md-12 col-sm-6 col-12 mt-3">
			<div class="card">
				<div class="card-body d-flex card-color">
					<div class="v1 my-auto">
						<div class="label ml-5">
							<h3>Updated</h3>
							<h3>Results</h3>
							<!-- <img src="img/a33.png" alt=""> -->
						</div>
					</div>

					<?php


					$teacherId=$_SESSION['eid'];

//echo $teacherId;





////////////////////


					$select4="SELECT fdept from Faculty where fid='$teacherId'";
					$run4=mysqli_query($conn,$select4);
					$run4=$run4->fetch_array();
					$department=$run4[0];


					$run3=mysqli_query($conn,"SELECT * FROM star st where st.fid='$teacherId' ORDER BY st.starid DESC LIMIT 1");

                     $count=mysqli_num_rows($run3);


					
					if($count==0)
					{
						
						
								
									 echo "No Rating and suggestion"; 
									
							
						

					}
					else
					{


						?>


						<div class="image ml-5 my-auto">
							<img class="modify" src="../assets/img/ar.png" alt="">
						</div>

						<div class="result ml-5">
							<?php



					$select1="SELECT * FROM suggestion s where s.fid='$teacherId' ORDER BY s.suid DESC LIMIT 1";
					$run1=mysqli_query($conn,$select1);
					$run1=$run1->fetch_array();




					$select2="SELECT * FROM star st where st.fid='$teacherId' ORDER BY st.starid DESC LIMIT 1";
					$run2=mysqli_query($conn,$select2);
					$run2=$run2->fetch_array();
					$rating=$run2['avgstar'];
          echo $rating;


							if($rating<=100 && $rating>80)
							{
								for($i=1;$i<=5;$i++)
								{	
									echo "<span style='font-size:300%;color: #2E86C1;'>&starf;</span>";
								}
							}


							elseif($rating<=80 && $rating>60)
							{
								for($i=1;$i<=4;$i++)
								{	
									echo "<span style='font-size:300%;color: #2E86C1;'>&starf;</span>";
								}
							}

							elseif($rating<=60 && $rating>40)
							{
								for($i=1;$i<=3;$i++)
								{	
									echo "<span style='font-size:300%;color: #2E86C1;'>&starf;</span>";
								}
							}


							elseif($rating<=40 && $rating>20)
							{
								for($i=1;$i<=2;$i++)
								{	
									echo "<span style='font-size:300%;color: #2E86C1;'>&starf;</span>";
								}
							}

							elseif($rating<=20 && $rating>0)
							{
								for($i=1;$i<=1;$i++)
								{	
									echo "<span style='font-size:300%;color: #2E86C1;'>&starf;</span>";
								}

							}

							else
							{
								echo "No rating";
							}
							?>
						</p>
						<p><?php echo $run1[2] ?></p>
						<p><?php echo $department ?></p>
						<p><?php echo $run1[3] ?></p>
					</div>
					<?php
				}
				?>
				</div>
			</div>

		</div>

	</div>
</div>

<?php

require_once("../common/footer.php");

?>