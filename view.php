<?php
require('db.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Reg Loans</strong></th>
<th><strong>Reg Name</strong></th>
<th><strong>Reg Email</strong></th>
<th><strong>Reg Phone</strong></th>
<th><strong>Reg Company</strong></th>
<th><strong>Reg City</strong></th>
</tr>

</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from reg_form ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["reg_loans"]; ?></td>
<td align="center"><?php echo $row["reg_name"]; ?></td>
<td align="center"><?php echo $row["reg_email"]; ?></td>
<td align="center"><?php echo $row["reg_phone"]; ?></td>
<td align="center"><?php echo $row["reg_company"]; ?></td>
<td align="center"><?php echo $row["reg_city"]; ?></td>

<td align="center">
<a href="editnew.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>

<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm(' Are you sure you wish to delete this Record?');">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>