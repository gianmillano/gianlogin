<style>
.done {
    margin-top: 5px;
    padding: 5px;
    background-color: #F00;
    border: 2px solid #666;
    width: auto;
    color: #000000;
}
</style>
<?php	
	if(isset($_POST["signup"])){

		// create a connection, just like in basic login
		$con = new PDO("mysql:host=localhost; dbname=db_users;","root","");

		// INSERT INTO is ansql command to add new record to the databse
		$sql="INSERT INTO uuser VALUES('". $_POST["txtuname"] ."', '". $_POST["txtpword"] ."')";
		$con->query($sql); //the command will be executed and a new record will be added to the databse
		echo"<div class=\"done\">New Record Saved!</div>";
		header("location: index.php");
	}

?>