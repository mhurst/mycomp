<div id="register-form">
    <form name="register_form" action="<?= base_url() ?>users/register" method="post">
        <fieldset>
            <legend>Register</legend>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="repeat-password">Repeat Password</label>
                <input type="password" name="repeat-password" id="repeat-password" class="form-control" placeholder="Password">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Register">
        </fieldset>
    </form>
</div>
