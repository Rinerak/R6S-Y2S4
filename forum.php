<?php
include "menu.php";
?>

<body>

    <div class="container">
        <h1 class="m-2">Fórum</h1>
        
        <!-- Příspěvky -->
        <div class="m-3 mt-2 mb-3">
            <h2>Jaký je váš oblíbený film?</h2>
            <p>Autor: Jan Novák</p>
            <p>Ahoj, chtěl bych se zeptat, jaký je váš oblíbený film. Já mám rád komedie a akční filmy.</p>
        </div>

        <div class="m-3 mb-5">
            <h2>Tipy na cestování po ČR</h2>
            <p>Autor: Petra Svobodová</p>
            <p>Ahoj, máte nějaké tipy na pěkné výlety v ČR? Ráda bych objevila nová místa.</p>
        </div>

        <!-- Formulář pro nový příspěvek -->
        <div class="container mt-3">
            <h2 class="m-2">Nový příspěvek</h2>
            <form method="POST" action="/action_page.php">
                <div class="">
                    <div class="m-1">
                      <label for="nadpis">Nadpis</label>
                      <input type="nadpis" class="form-control" id="nadpis" placeholder="Napište nadpis" name="nadpis">
                    </div>
                    <div class="m-1">
                      <label for="post">Příserek</label>
                      <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                    </div>
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>