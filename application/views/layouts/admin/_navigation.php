<div class="col-1-1">
	<nav>
		<ul class="nav nav-tabs">
			<li <?= $current_page == 'home' ? 'class="active"' : '' ?>><a href="<?= base_url() ?>admin">Admin Home</a></li>
			<li <?= $current_page == 'games' ? 'class="active"' : '' ?>><a href="<?= base_url() ?>admin/games">Games</a></li>
			<li <?= $current_page == 'ladders' ? 'class="active"' : '' ?>><a href="<?= base_url() ?>admin/ladders">Ladders</a></li>
		</ul>
	</nav>
</div>
