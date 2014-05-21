<div id="addgame-form">
    <form name="addgame-form" action="<?= base_url() ?>admin/game/add_game" method="post">
    	<fieldset>
	        <legend>Add Game</legend>
	        <div class="form-group">
		    	<label for="username">Name</label>
		        <input type="text" name="name" id="name" class="form-control" placeholder="Name">
		    </div>
	        <input type="submit" name="submit" class="btn btn-primary" value="Add Game">
        </fieldset>
    </form>
</div>