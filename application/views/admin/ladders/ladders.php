<div id="ladders">
    <h4>Ladders</h4><a href="<?= base_url() ?>admin/ladders/add_form"><span class="glyphicon glyphicon-plus pull-left"></a></span>
    <ul>
    <?php foreach($ladders as $ladders) : ?>
        <li>
            <ul>
                <li><?= $ladder->name ?></li>
                <li><span class="glyphicon glyphicon-pencil"></span></i></li>
                <li><span class="glyphicon glyphicon-remove"></span></li>
            </ul>
        </li>
    <?php endforeach; ?>
    </ul>
</div>
