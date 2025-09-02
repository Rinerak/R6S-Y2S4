<?php
include "menu.php";
?>

<div class="container mt-3">
  <h2>Změna profilu</h2>
  <form method="POST" action="/action_page.php">
    <div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
         Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    </div>
    <div class="mb-3 mt-3">
      <label for="jm">Jméno</label>
      <input type="text" class="form-control" id="email" placeholder="Nové jméno" name="email">
    </div>
    <div class="mb-3">
      <label for="přím">Příjmení</label>
      <input type="text" class="form-control" id="pwd" placeholder="Nové příjmení" name="pswd">
    </div>
    <div class="mb-3">
      <label for="user">Přezdivka</label>
      <input type="text" class="form-control" id="pwd" placeholder="Nová přezdívka" name="pswd">
    </div>
    <div class="form-check mb-3">
    </div>
    <button type="submit" class="btn btn-primary">Uložit</button>
  </form>
</div>
