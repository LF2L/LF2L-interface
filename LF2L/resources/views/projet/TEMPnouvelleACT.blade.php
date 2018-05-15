<?php
//namespace app;
//use LF2L\app\resources;

header("Access-Control-Allow-Origin: *");
$compteur = $_GET['compteur'];
$compteur1 = $_GET['compteur1'];
$compteurResourceCarre = $_GET['compteurResourceCarre'];
$resources=$_GET['resources'];
$pattern_resources = "#(.*?);#";
preg_match_all($pattern_resources, $resources, $matches_resources);
?>


<div class='w3-row-padding'>
<div  class='w3-container'>
<button   onclick='myFunction(<?php echo$compteur; ?>)' class='w3-btn w3-block w3-black w3-left-align'>Activité <?php echo $compteur-299; ?>  </button>
<div  id="<?php echo$compteur; ?>" name='contenue' class='w3-container w3-hide'>
    <p>Parametre de l'activité</p>
    <input class="w3-input w3-border w3-round-large" type="text" placeholder="nom de l'activité">
    <br>



    <div  class='w3-container'>
    <div class='w3-dropdown-click'>
        <button onclick='myFunctiondropbox(<?php echo$compteur1; ?>)' class='w3-button w3-black'>Resources</button>
        <div id='<?php echo$compteur1; ?>' class='w3-dropdown-content w3-bar-block w3-card-4 w3-animate-zoom'>
            <?php foreach ($matches_resources[1] as $match): ?>
                <a  class='<?php echo$compteurResourceCarre ?> w3-bar-item w3-button' onclick="ajoutRessource('<?php echo $match;?>' , recupID(this.getAttribute('class')))"><?php echo $match;?> </a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class='w3-container'>
        <div  id='<?php echo$compteurResourceCarre ?>' class="w3-panel w3-white w3-topbar w3-bottombar w3-border-amber">
            <p>Liste de ressources</p>
        </div>
    </div>
</div>

<br>
<button class='w3-button w3-round w3-margin w3-blue w3-hover-purple' onclick='ajoutAct(<?php echo $resources ?>)'>Sauvegarder l'activité>
</button>
</div>
</div>