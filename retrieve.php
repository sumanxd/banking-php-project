<?php
require('db.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script>
$(function() {
$( "#tabs" ).tabs();
});
</script>
<style>
.reddy {
	background:pink !important;
	border:none !important;
	
	}
a:visited {
		
		font-size:50px !important;
	}
	.ui-tabs .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor,
.ui-tabs .ui-tabs-nav li.ui-state-disabled .ui-tabs-anchor,
.ui-tabs .ui-tabs-nav li.ui-tabs-loading .ui-tabs-anchor {
	cursor: text;
	background:red;

}
table {
	border:1px solid #bda8a8;
	box-shadow:2px 3px #c5b4b470;
}
		
.pad {
	padding:5px;
}
.btn-danger {
	background-color:#ea1711;
}
.ui-tabs .ui-tabs-nav li {
 margin: 0px;

}
.table {
    border-radius: 12px;
}

.table thead tr{
    background-color:lavender;
    border: 2px solid #ddd;
}

.table thead tr th{
    border: 2px solid #ddd;
}


.table {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
    font-size: 14px;
    margin: 4px 2px;
    cursor: pointer;
}

.table tr td{
     border: 2px solid #ddd;
}
th{
	text-align:center;
}
.ui-tabs .ui-tabs-nav li.ui-tabs-active {
    margin-bottom: 2px;
}
.table-responsive {
    min-height: .01%;
    overflow-x: hidden;
}
</style>
</head>
<body>
	<div Class="container" style="width:100%"> <!--  Container Starts -->
	 <a href="company/logout.php" class="btn btn-info btn-lg" style="float:right;">
						  <span class="glyphicon glyphicon-log-out"></span> Log out
						</a>
		<div  id="tabs"  style="margin-top:60px; border:none" >
			<ul style="background:pink; margin-bottom:30px;"> <!-- Tabs Navigation -->
				<li class="reddy active col-md-2 col-xs-6" ><a href="#material"><b>Apply Loans</b></a></li>
				<li class="reddy col-md-2 col-xs-6 " ><a href="#production"><b>Complaint box</b></a></li>
				<li class="reddy col-md-2 col-xs-6" ><a href="#sales"><b>Feedback</b></a></li>
				
			</ul>
			
	
			<div id="material"> <!--  Raw Material Tab-->

				<div class="row col-md-12 custyle">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
    
							<tr>
								<th>S.No</th>
								<th>Registered Loans</th>
								<th>Registered Name</th>
								<th>Registered Email</th>
								<th>Registered Phone</th>
								<th>Registered Company</th>
								<th>Registered City</th>								
								<th colspan="2" >Action</th>
								
							</tr>
						</thead>
						<tbody>
							<?php
							$count=1;
							$sel_query="Select * from apply_loans ORDER BY id desc;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								<td align="center"><?php echo $count; ?></td>
								<td align="center"><?php echo $row["reg_loans"]; ?></td>
								<td align="center"><?php echo $row["reg_name"]; ?></td>
								<td align="center"><?php echo $row["reg_email"]; ?></td>
								<td align="center"><?php echo $row["reg_phone"]; ?></td>
								<td align="center"><?php echo $row["reg_company"]; ?></td>
								<td align="center"><?php echo $row["reg_city"]; ?></td>
								
								
								<td align="center"><a href="delete1.php?id=<?php echo $row["id"]; ?>"   onclick="return confirm(' Are you sure to delete this record?');" class="btn btn-danger btn-xs pad"><span class="glyphicon glyphicon-remove" ></span> Delete</a></td>
							</tr>
							<?php $count++; } ?>
						</tbody>
					</table>
					</div>
				</div>
			</div> <!--  Raw Material Tab-->

			<div id="production" > <!--Production Tab  -->

				<div class="row col-md-12 custyle">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Loans</th>
								<th>Comment</th>
								
								<th colspan="2" >Action</th>
							</tr>
						</thead>




						<tbody>
							<?php
							$count=1;
							$sel_query="Select * from complaint_box ORDER BY id desc;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								<td align="center"><?php echo $count; ?></td>
								<td align="center"><?php echo $row["com_name"]; ?></td>
								<td align="center"><?php echo $row["com_email"]; ?></td>
								<td align="center"><?php echo $row["com_phone"]; ?></td>
								<td align="center"><?php echo $row["com_loans"]; ?></td>
								<td align="center"><?php echo $row["com_comment"]; ?></td>
								



								

								</td>
								<td align="center">


								 <a href="delete2.php?id=<?php echo $row["id"]; ?>" onclick="return confirm(' Are you sure to delete this record?');" class="btn btn-danger btn-xs pad"><span class="glyphicon glyphicon-remove" ></span> Delete</a>

								</td>



							</tr>
							<?php $count++; } ?>
						</tbody>
					</table>			
				</div>
			</div> <!-- Production Tab End -->

			<div id="sales"> <!--  Sales Tab -->

				<div class="row col-md-12 custyle">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th><strong>S.No</strong></th>
								<th><strong>Name</strong></th>
								<th><strong>Email</strong></th>
								<th><strong>Phone</strong></th>
								<th><strong>Comment</strong></th>
								<th colspan="2" >Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$count=1;
							$sel_query="Select * from feedback ORDER BY id desc;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								<td align="center"><?php echo $count; ?></td>
								<td align="center"><?php echo $row["fed_name"]; ?></td>
								<td align="center"><?php echo $row["fed_email"]; ?></td>
								<td align="center"><?php echo $row["fed_phone"]; ?></td>
								<td align="center"><?php echo $row["fed_comment"]; ?></td>


								

								</td>
								<td align="center">


								 <a href="delete3.php?id=<?php echo $row["id"]; ?>" onclick="return confirm(' Are you sure to delete this record?');" class="btn btn-danger btn-xs pad"><span class="glyphicon glyphicon-remove" ></span> Delete</a>

								</td>
							</tr>
							<?php $count++; } ?>
						</tbody>
					</table>
				</div>
			</div> <!-- Sales Tab End -->


			

			

			

		</div> <!-- Tabs End -->


	</div>  <!-- Container -->

</body>
</html>