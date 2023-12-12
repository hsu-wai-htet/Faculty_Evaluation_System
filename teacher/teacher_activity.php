<?php
session_start();
include('../connect.php');
require_once("../common/teacher_header.php");

?>
<div class="container">
	<div class="row">
		<div class="col-xl-12 col-md-10 col-sm-12 col-12 mt-3 mx-auto">
<?php



$teachAct=$_SESSION['eid'];
//......................suggestion......................


$select1="SELECT * FROM suggestion s where s.fid=$teachAct ORDER BY s.suid";
$run1=mysqli_query($conn,$select1);
while($row=mysqli_fetch_assoc($run1))
{
	$arr[]=array($row['advice'],$row['SDate']);
}

///.............suggestion....................

$select4="SELECT fdept from Faculty where fid=$teachAct ";
	 		$run4=mysqli_query($conn,$select4);
	 		$run4=$run4->fetch_array();
	 		
	 		$dept=$run4[0];

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
	 		

//...............department.........................

	 		$select2="SELECT * FROM star st where st.fid=$teachAct ORDER BY st.starid";
$run2=mysqli_query($conn,$select2);
while($row2=mysqli_fetch_assoc($run2))
{
	$arrstar[]=array($row2['avgstar'],$row2['StDate']);
}

$select2="SELECT count(starid) as co from star where fid='$teachAct'";
$run2=mysqli_query($conn,$select2);
$row2=$run2->fetch_array();
$co=$row2[0];

if($co==0)
{
	?>

			<div class="card mt-4 mb-5">
				<div class="card-body d-flex card-color">
					<div class="v1 my-auto">
						<div class="label ml-5">
							<?php echo "No Rating and suggestion"; ?>
						</div>
						</div>
						</div>
						</div>
						<?php  

}
else
{


for($j=0;$j<$co;$j++)
{


	?>

			<div class="card mt-4 mb-5">
				<div class="card-body d-flex card-color">
					<div class="v1 my-auto">
						<div class="label ml-5">
							<h3>Updated</h3>
							<h3>Results</h3>
							<!-- <img src="img/a33.png" alt=""> -->
						</div>
					</div>

					<div class="image ml-5 my-auto">
						<img class="modify" src="../assets/img/ar.png" alt="">
					</div>

					<div class="result ml-5">
						
						<?php

						$rating=$arrstar[$j][0];
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
	echo "NO rating star"
;}
						?>
					</p>
					<p>
						<?php 
					if(empty($arr[$j][0]))
					{
						echo "No suggestion";
					}
					else
					{
						echo $arr[$j][0];
					}
					 ?>
					 	
					 </p>
					
					
					<p><?php echo $de ?></p>
					<p><?php echo
					$arrstar[$j][1];
					 ?></p>
					</div>
				</div>
			</div>

			<?php 
}
}
?>
		</div>

	</div>
</div>

<?php

require_once("../common/footer.php");

?>