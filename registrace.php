<?php
include "menu.php";
?>

<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Open modal
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container mt-3">
            <h2>Registrace do serkománie</h2>
            <form method="POST" action="/action_page.php">
        <div class="mb-3 mt-3"> <!-- Jméno, příjmení, uživ. jméno, email, heslo, newsletter0-->
            <label for="jm">Jméno:</label>
            <input type="text" class="form-control" id="jm" placeholder="Napište svoje jméno" name="email">
            </div>
        <div class="mb-3 mt-3">
          <label for="přím">Příjmení:</label>
          <input type="text" class="form-control" id="přím" placeholder="Napište svoje příjmení" name="email">
        </div>
            <div class="mb-3 mt-3">
            <label for="user">Uživatelské jméno:</label>
            <input type="text" class="form-control" id="user" placeholder="Napište svoje uživatelské jméno" name="email">
        </div>
        <div class="mb-3 mt-3">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Napište svůj email" name="email">
        </div>
        <div class="mb-3">
              <label for="pwd">Heslo:</label>
              <input type="text" class="form-control" id="pwd" placeholder="Napište svoje heslo" name="pswd">
        </div>
        <div class="form-check mb-3">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="news" checked> Odebírat newsletter
          </label>
        </div>
        <div class="form-check mb-3">
          <label class="form-check-label">
           <input class="form-check-input" type="checkbox" name="souhlas"> Souhlasím se zpracováním osobních údajů
          </label>
        </div>
            <button type="submit" class="btn btn-primary">Zaregistrovat</button>
          </form>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>