<main>
    <section id="profil">
    <span>Profil</span>
    <form action="" method="post">
        <p>Nom:</p> 
        <input type="text" name="nom"><br>
        <p>Prénom:</p> 
        <input type="text" name="prenom"><br>
        <p>Adresse:</p>
        <input type="text" name="adresse"><br>
        <p>E-Mail:</p>
        <input type="mail" name="email">
       <div><button class="change">MODIFIER</button></div>
    </form>
    </section>
    <section id="historique">
        <span>Historique des achats</span>
       <?php
        $imgHist = "";
        $dateHist = "";
        $descriptionHist ="";
        $prixHist ="";
       ?>
    </section>
</main>