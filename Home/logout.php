<?php
require_once("config.php");
// session_start();
// session_unset();
// session_destroy();
?>
    <link rel="stylesheet" href="../Home/home.css"></link>
  <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure want to logout?</h5>
      </div>
      <div class="modal-body">
        <i class="bi bi-exclamation-octagon" style="color: red"></i> Do you really wish to leave and logout? All unsaved changes will be lost!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-block" onclick="window.location.href='../Home/home.php'">Yes, I am sure!</button>
        <button type="button" class="btn btn-outline-success btn-block" data-bs-dismiss="modal">No, I am not sure!</button>
      </div>
    </div>
  </div>
</div>
<!-- <meta http-equiv = "refresh" content="0 url=http://localhost/Ngo/Home/sign-in.php"> -->
<?php

?>