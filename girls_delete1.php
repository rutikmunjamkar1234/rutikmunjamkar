<?php
include("dbconnect.php");
session_start();
extract($_POST);
$id=$_REQUEST['Id'];
$del=mysql_query("delete from girls where Id='$id'");
if($del)
{
?>
<script language="javascript">
alert("Deleted sucessfully");
window.location.href="girls_delete.php";
</script>
<?php
}
else
{
?>
<script language="javascript">
alert("Deleted Unsucessfully");
window.location.href="girls_delete.php";
</script>
<?php
}
?>