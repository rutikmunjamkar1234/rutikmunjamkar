<?php
include("dbconnect.php");
session_start();
extract($_POST);
$id=$_REQUEST['Id'];
$del=mysql_query("delete from boys where Id='$id'");
if($del)
{
?>
<script language="javascript">
alert("Deleted sucessfully");
window.location.href="boys_delete.php";
</script>
<?php
}
else
{
?>
<script language="javascript">
alert("Deleted Unsucessfully");
window.location.href="boys_delete.php";
</script>
<?php
}
?>