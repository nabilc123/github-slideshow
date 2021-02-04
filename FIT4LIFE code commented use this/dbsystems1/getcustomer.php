<?php
include ("db.php");

$pagename="New Department Confirmation";
echo "<title>".$pagename."</title>";
echo "<h2>".$pagename."</h2>";

echo "<body>";
//capture the value inserted in the form's fields and posted through here
//Store them in local variables
$jbID=$_POST['form_jobid'];
$jbName=$_POST['form_jobName'];
$mnSalary=$_POST['form_minSalary'];
$mxSalary=$_POST['form_maxSalary'];

//check if any of the mandatory fields were not filled in
if (empty($jbID) or empty($jbName))
{
	echo "<p>Please ensure all mandatory fields are filled in!";
}
else
{
	//write SQL query
	$addjobSQL=
	"insert into 
	job (jobID, jobName, minSalary,maxSalary)
	values (".$jbID.", '".$jbName."', ".$mnSalary.", ".$mxSalary.")";
	//run SQL query
	$exeaddjobSQL=mysql_query($addjobSQL);
	
	//check error code and error message, can be commented out later
	//echo "<p>Error code: ".mysql_errno($conn);
	//echo "<br>Error msg: ".mysql_error($conn);
	
	//if error code is 0 then display confirmation message
	if (mysql_errno($conn)==0)
	{ 
		echo "<p>A new job has been added successfully";
		echo "<p>Added job id: ".$jbID;
		echo "<br>Added job Name: ".$jbName;
		echo "<br>Added minSalary: ".$mnSalary;
		echo "<br>Added maxSalary: ".$mxSalary;
	}
	//else check individual error codes and display appropriate message
	else
	{
		echo "<p>There is an error with the department you entered.";
		//error code for breach of PK or unique constraint
		if (mysql_errno($conn)==1062)
		{
			echo "<br>The value entered for the new job id or job name is not valid as it is already used.";
		}
		//error code for breach of FK constraint
		if (mysql_errno($conn)==1452)
		{
			echo "<br>The value entered for the new job id is not valid 
			as it is does not reference an existing value.";
		}
		
		//error code for inserting values that is not a valid number in location id
		if (mysql_errno($conn)==1054)
		{
			echo "<br>Value entered for the minSalary is not valid.";			
		}
		
		//error code for inserting character that is problematic for SQL query
		if (mysql_errno($conn)==1064)
		{
			echo "<br>Values entered for the maxSalary are not valid.";			
		}
		
	}
}
echo "</body>";
?>