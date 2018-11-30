<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1>CREER UN COMPTE</h1>
<form method ="post" action ="<?php echo site_url('MOkapi/Create_Account');?>">
    <input type="text" class="form-control" placeholder="entez votre nom" name="nom">
    <input type="email" class="form-control" placeholder="exemple@domaine.com" name="email">
    <input type="text" class="form-control" placeholder="entrez votre pseudo" name="pseudo">
    <input type="password" class="form-control" placeholder="entez votre pwd" name="pwd">
    <input type="password" class="form-control" placeholder="confirmez pwd" name="pwdc">
	<button class="btn btn-primary">CREATE</button></fieldset>
</form>
