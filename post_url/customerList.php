<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
		require_once("../functions/$classname.class.php");
	}
	
	$cls_customer = new  cls_customer();
    $query = $cls_customer->get_all_customer();
    $row_c = $query->num_rows;
if($row_c == 0)
{ 
?>
   <option>No result found</option>
<?php
 exit;
}
?>
<option value=""><?php echo 'Selected' ?></option>
<?php

    while($row  = $query->fetch_assoc())
    {
?>

<option value="<?php echo $row['id']; ?>"><?php echo $row['cus_name']; ?></option>
<?php } ?>