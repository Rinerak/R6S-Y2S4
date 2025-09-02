<?php
include "menu.php";
?>

<body>

    <div class="container">
        <h1 class="m-2">Chat</h1>
        
        <!-- Příspěvky -->
        <div class="m-3 mt-4 mb-5">
            <p>Jan Novák</p>
            <p>Ahoj, chtěl bych se zeptat, jaký je váš oblíbený film. Já mám rád komedie a akční filmy.</p>
        </div>

        <div class="m-3 mb-5">
            <p>Petra Svobodová</p>
            <p>Ahoj, máte nějaké tipy na pěkné výlety v ČR? Ráda bych objevila nová místa.</p>
        </div>
        <br>

        <!-- Formulář pro nový příspěvek -->
        <div class="container mt-3">
            <h2 class="m-2">Nová zpráva</h2>
            <form method="POST" action="/action_page.php">
                <div class="">
                    <div class="m-1">
                      <label for="post">Zpráva</label>
                      <textarea class="form-control" rows="1" id="comment" name="text"></textarea>
                    </div>
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>