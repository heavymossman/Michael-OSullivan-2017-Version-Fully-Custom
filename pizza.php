<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/pizza.css">
<div class="container mt-3">
  <div class="row">
    <div class="col-md-12">
      <h1>Udacity Pizza App</h1>
      <h3>All data is stored in local storage</h3>
      <div class="controls">
        <button class="add-pizza">Add Pizza</button>
    </div>

    <ul class="pizza-list"></ul>

    <script type="text/template" data-template="pizza">
        <li class="pizza" data-id="{{id}}">
            {{id}}
            <div class="pizza-controls">
                <a href="#" style="color:white;" class="remove-pizza">X</a>
            </div>
        </li>
    </script>
    </div>
  </div>
</div>
<?php include 'footer-bootstrap.php'; ?>
<script src="js/pizza.js"></script>
<?php include 'footer.php'; ?>