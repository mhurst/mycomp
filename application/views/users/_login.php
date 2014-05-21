<div id="login-form">
    <form name="register_form" action="<?= base_url() ?>users/login" method="post">
    	<fieldset>
	        <legend>Login</legend>
	        <div class="form-group">
		    	<label for="username">Username</label>
		        <input type="text" name="username" id="username" class="form-control" placeholder="Username">
		    </div>
		    <div class="form-group">
		        <label for="password">Password</label>
		        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
		    </form>
		    <div class="checkbox">
		        <label><input type="checkbox"> Remember me</label>
		    </div>
	        <input type="submit" name="submit" class="btn btn-primary" value="Log in">
        </fieldset>
    </form>
</div>