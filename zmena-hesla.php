<?php
include "menu.php";
?>

<div class="container mt-3">
  <h2>Změna hesla</h2>
  <form method="POST" action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="email">Staré heslo:</label>
      <input type="email" class="form-control" id="email" placeholder="Napište svoje staré heslo" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Nové heslo:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Napište svoje nové heslo" name="pswd">
    </div>
    <div class="mb-3">
      <label for="pwd">Nové heslo podruhé:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Napište svoje nové heslo podruhé" name="pswd">
    </div>
    <div class="form-check mb-3">
    </div>
    <button type="submit" class="btn btn-primary">Uložit</button>
  </form>
</div>
