<div id="games">
	<h4>Games</h4><span class="glyphicon glyphicon-plus"></span>
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

