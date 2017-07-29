<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/retain.css">
<div class="container mt-3">
  <div class="row">
    <div class="col-md-12">
      <h1>Welcome to the JS Retain Page</h1>
      <h3>All data is stored in local storage</h3>
      <form id="new-note-form" class="new-note-form">
        <input id="new-note-content" class="new-note-content form-control" placeholder="Write something in here and hit return, watch the page retain! ">
      </form>
      <ul id="notes" class="notes"></ul>
    </div>
  </div>
</div>
<?php include 'footer-bootstrap.php'; ?>
<script src="js/retain.js"></script>
<?php include 'footer.php'; ?>