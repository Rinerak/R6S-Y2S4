<?php
include "menu.php";
?>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Přihlášení k serkománii</h2>
  <form method="POST" action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Napište svů email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Heslo:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Napište svoje heslo" name="pswd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Zapamatovat si mě
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Přihlásit</button>
  </form>
</div>
