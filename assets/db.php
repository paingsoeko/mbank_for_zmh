<?php 
    $con = new mysqli('localhost','root','','mybank');
    define('bankName', 'ZMH Bank',true);

if(isset($_SESSION['userId'])){
    $userId = $_SESSION['userId'];
    $ar = $con->query("select * from userAccounts,branch where id = '$_SESSION[userId]' AND userAccounts.branch = branch.branchId");
    // Rest of your code goes here
    $userData = $ar->fetch_assoc();
}

?>
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>