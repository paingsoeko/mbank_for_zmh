<?php 
    $con = new mysqli('localhost', 'kopaing', 'password', 'mybank', 5151);
    define('bankName', 'ZMH Bank',true);

if(isset($_SESSION['userId'])){
    $userId = $_SESSION['userId'];
    $ar = $con->query("select * from useraccounts,branch where id = '$_SESSION[userId]' AND useraccounts.branch = branch.branchId");
    // Rest of your code goes here
    $userData = $ar->fetch_assoc();
}

?>
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>