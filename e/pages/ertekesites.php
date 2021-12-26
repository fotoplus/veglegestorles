<div id="main-center">

<?php


?>

  <form method="post" action="/ertekesites" autocomplete="off" >
    <fieldset>
        <legend>Új értékesítés</legend>

        <label for="datum">Dátum</label>
        <input name="datum" type="date" value="<?php print(date('Y-m-d')); ?>" required>

        <label for="sorszam">Címke sorszáma</label>
        <input name="sorszam" type="text" value="" placeholder="Olvasd be a vonalkódot" required>

        <label>Termék</label>
        <div class="radio-group">
        <?php
          $query = ('SELECT * FROM `termek` ORDER BY `nev` ASC');
          $result = $mysqli->query($query);
          while($termekek = $result->fetch_assoc()) {
              $kn_szam=substr($termekek['kn'], 0, 4);
              print('
                <input id="termek' . $termekek['id'] . '" type="radio" name="termek" value="' . $termekek['id'] .'" label="'.$termekek['nev'].'" title="'.$kn_szam.'" >
                ');
          }
        ?>
        </div>

        <button name="save" value="uj" >Mentés</button>
        <a href="/ertekesites" title="Mentés nélküli visszalépés" class="space" >Vissza</a>
    </fieldset>
  </form>
</div>