<?php 
 include ('includes/dbconnect.php');

$select = $con->prepare("SELECT * from tbl_test ");
$select->execute();
?>

<?php foreach($select as $row) { ?>
<h3><?php echo $row['test_name'] ?></h3>
<?php }?>

