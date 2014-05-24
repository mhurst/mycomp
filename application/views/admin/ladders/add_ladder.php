<div id="ladders">
    <div id="ladder-form">
        <form name="add_ladder" action="<?= base_url() ?>admin/ladders/create" method="post">
            <fieldset>
                <legend>Add Ladder</legend>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="game">Game</label>
                    <select name="game" class="form-control">
                        <option>Choose</option>
                        <?php foreach($games as $game) : ?>
                            <option value="<?= $game->id ?>"><?= $game->name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date-started">Date Started</label>
                    <input type="text" name="date-started" id="date-started" class="form-control" placeholder="Date Started">
                </div>
                <div class="form-group">
                    <label for="rules">Rules</label>
                    <textarea name="rules" class="form-control"></textarea>
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Add Ladder">
            </fieldset>
        </form>
    </div>
</div>
