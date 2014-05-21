<div id="user_main" class="inner-main">
	<h4>My Account</h4>
	<?php
		if($view_type != 'home') {
			$this->load->view('users/' . $view_type);
		}
	?>
</div>