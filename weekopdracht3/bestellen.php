<?php
 include "include/header.php";
?>

        <div id="contents">
            <h2>Bestellen: Nike Air Max 90</h2>

            <h2><a href="detail.php">&larr; go back</a></h2>
                <h2>map</h2>
                <img src="Images/Fox.png">

            <form class="formulier">
                <div class="veld">
                    <label for="voornaam">Voornaam</label>
                    <input type="text" id="voornaam" name="voornaam" placeholder="Bijvoorbeeld: Sanne" required>
                </div>

                <div class="veld">
                    <label for="achternaam">Achternaam</label>
                    <input type="text" id="achternaam" name="achternaam" required>
                </div>

                <div class="veld">
                    <label for="email">E-mailadres</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="veld">
                    <label for="aantal">Aantal</label>
                    <input type="number" id="aantal" name="aantal" min="1" max="10" value="1" required>
                </div>
                <div class="veld">
                    <label for="maat">Maat</label>
                    <select id="maat" name="maat">
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                    </select>
                </div>
                <div class="veld vinkje">
                    <input type="checkbox" id="voorwaarden" name="voorwaarden" required>
                    <label for="voorwaarden">Ik ga akkoord met de voorwaarden</label>
                </div>
        </div>
        <input type="submit" value="Bestelling plaatsen" class="knop">
        </form>
    <?php
 include "include/footer.php";
?>
</body>

</html>