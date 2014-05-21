<header>
	<div class="pull-left"></div>
	<div class="pull-right">
		<?php if($user = $this->session->userdata('current_user')) : ?>
			<?= 'Welcome ' . $user->username ?>
		<?php else : ?>
			<ul>
				<li><a href="<?= base_url() ?>users/login_form">Log In</a></li>
				<li><a href="<?= base_url() ?>users/register">Register</a></li>
			</ul>
		<?php endif; ?>
	</div>
</header>