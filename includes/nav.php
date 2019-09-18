

<div class="kop-achtergrond">
    <img class= "politielogo1 container" src="assets/img/politielogo1.png" width="70" height="70">
</div>

<?php
// Only show nav if user is loggedin
if (isUserLoggedIn()) {
?>
    <nav class="nav-collaps">
        <a href="dashboard" <?php if('dashboard'===$config['serverinfo']['currentpage']){echo "class=\"active\"";} ?> ><label class="fas fa-columns"></label><span>Dashboard</span></a>
        <a href="persoon" <?php if('persoon'===$config['serverinfo']['currentpage']){echo "class=\"active\"";} ?> ><label class="fas fa-user"></label><span>Persoon</span></a>
        <a href="voertuig" <?php if('voertuig'===$config['serverinfo']['currentpage']){echo "class=\"active\"";} ?> ><label class="fas fa-car"></label><span>Voertuig</span></a>
        <a href="meldingen" <?php if('meldingen'===$config['serverinfo']['currentpage']){echo "class=\"active\"";} ?> ><label class="fas fa-book"></label><span>Meldingen</span></a>
        <a href="instellingen" <?php if('instellingen'===$config['serverinfo']['currentpage']){echo "class=\"active\"";} ?> ><label class="fas fa-cogs"></label><span>Instellingen</span></a>
        <a href="login?logout" <?php if('login'===$config['serverinfo']['currentpage']){echo "class=\"active\"";} ?> ><label class="fas fa-sign-out-alt"></label><span>Uitloggen</span></a>
        <a class="back" onclick="toggleNavBar()"><label class="fa fa-chevron-left"></label></a>
    </nav>
<?php } ?>
<main>
