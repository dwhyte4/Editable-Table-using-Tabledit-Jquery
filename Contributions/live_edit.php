
<?php
include_once("db_connect.php");

$input = filter_input_array(INPUT_POST);

if($input["action"] === 'edit')
{
	$user_id = mysqli_real_escape_string($conn, $input["user_id"]);
	$name = mysqli_real_escape_string($conn, $input["name"]);
	$week_id = mysqli_real_escape_string($conn, $input["week_id"]);
	$hours = mysqli_real_escape_string($conn, $input["hours"]);
	$task = mysqli_real_escape_string($conn, $input["task"]);

	if (isset($input["id"]) && !empty($input['id'])) {
		 $query = "
		 UPDATE contribution 
		 SET name = '".$name."', 
		 week_id= '".$week_id."', 
		 hours= '".$hours."',
		 task= '".$task."',
		 user_id ='".$user_id."' WHERE id= ".$input["id"];	
	} else {
		$query = "INSERT INTO contribution  SET name = '".$name."', user_id= '".$user_id."',
			week_id= '".$week_id."', hours= '".$hours."', task= '".$task."'";	 			
	}
 	mysqli_query($conn, $query);
}

if($input["action"] === 'delete')
{
	$query = "DELETE FROM contribution WHERE id = ".$input["id"];
	mysqli_query($conn, $query);
} 

mysqli_close($conn);
 
echo json_encode($input);
?>