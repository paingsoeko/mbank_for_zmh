<form class="form-inline my-2 my-lg-0">
    <h3 class="text-light mb-0 mx-4">Balance : $ <?php echo $userData['balance']; ?></h3>
        <a href="accounts.php" data-toggle="tooltip" title="Account Summary" class="btn btn-light mx-1" ><ion-icon name="document-text-outline"></ion-icon></a>
        <a href="notice.php" data-toggle="tooltip" title="View Notice" class="btn btn-light mx-1" ><ion-icon name="mail-outline"></ion-icon></a>
        <a href="feedback.php" data-toggle="tooltip" title="Help?" class="btn btn-light mx-1" ><ion-icon name="help-outline"></ion-icon></ion-icon></a>
        <a href="logout.php" data-toggle="tooltip" title="Logout" class="btn btn-danger mx-1" ><ion-icon name="exit-outline"></ion-icon></a>
</form>