<?php
if(isset($_SESSION['message']))
{
    ?>
  <div class="alert alert-warning alert-dismissable fade show" role="alert">
    <strong>Hey!</strong><?=$_SESSION['message'];?>
    <button type="button" class="btn-close"data-bs-dismiss="alert" aria-label="close"></button>
  </div>
  <?php
  unset($_SESSION['message']);
}
?>