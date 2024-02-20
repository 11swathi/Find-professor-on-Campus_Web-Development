<?php
require_once("dp.php");
$db_handle=new Db();
if(!empty($_pOST["dept"]))
{
	$query="select * from staff where dept='".$_POST["dept"]."'";
	$results=$db_handle->runQuery($query);
	?>
	<option value="">select Staffname</option>
	<?php
	foreach ($results as $course) 
	{
		?>
		<option value="<?php echo $course["name"]; ?>"></option>
		<?php
	}
}
?>
