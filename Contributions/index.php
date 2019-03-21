<?php 
include_once("db_connect.php");
include("header.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="custom_edit_table.js"></script>

<title>Contributions Sheet</title>
<script type="text/javascript" src="dist\jquery.tabledit.js"></script>	
	<h2>Contribution</h2>	
<table id="data_table" class="table table-striped">
<thead>
<tr>
<th>Id</th>
<th>UserId</th>
<th>Name</th>
<th>Week</th>
<th>Hours</th>
<th>Task</th>
</tr>
</thead>
<tbody>
<button type="button" class="tabledit-add-button btn btn-xs btn-default" id="button">Add Row</button>
<?php
// Tabledit plugin javascript
$sql_query = "SELECT id, user_id, name, week_id, hours, task FROM contribution LIMIT 10";
$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
while( $contribution = mysqli_fetch_assoc($resultset) ) {
?>

<tr id="<?php echo $contribution ['id']; ?>">
<td><?php echo $contribution ['id']; ?></td>
<td><?php echo $contribution ['user_id']; ?></td>
<td><?php echo $contribution ['name']; ?></td>
<td><?php echo $contribution ['week_id']; ?></td>
<td><?php echo $contribution ['hours']; ?></td>
<td><?php echo $contribution ['task']; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
<div style="margin:50px 0px 0px 0px;">		
</div>
</div>
<script type="text/javascript" src="custom_table_edit.js"></script>
<?php include('footer.php');?>

<style>
	table .tabledit-add-button {display: none}
</style>
