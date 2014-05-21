<div id="games">
	<h4>Games</h4><a href="<?= base_url() ?>admin/game/add_form"><span class="glyphicon glyphicon-plus pull-left"></a></span>
	<ul>
	<?php foreach($games as $game) : ?>
		<li>
			<ul>
				<li><?= $game->name ?></li>
				<li><span class="glyphicon glyphicon-pencil"></span></i></li>
				<li><span class="glyphicon glyphicon-remove"></span></li>
			</ul>
		</li>
	<?php endforeach; ?>
	</ul>
</div>

