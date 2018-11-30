<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1>AUTHENTIFICATION</h1>
<form method ="post" action ="<?php echo site_url('MOkapi/Login_In_Account');?>">
    <input type="text" class="form-control" placeholder="entez votre pseudo" name="pseudo">
    <input type="password" class="form-control" placeholder="votre password" name="pwd">
	<button class="btn btn-primary">LOGIN</button></fieldset>
</form>
<hr>
<a href ="<?php echo site_url();?>"> <button>ACCUEIL</button></a>
