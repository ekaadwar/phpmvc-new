<?php 

class Flasher
{
	public static function setFlasher($action, $status, $type)
	{
		$_SESSION['flash'] = [
						'action' => $action,
						'status' => $status,
						'type' => $type
					];
	}

	public static function flash()
	{
		if( isset($_SESSION['flash']) )
		{
			echo 	'
						<div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show" role="alert">
						  Data <strong>' . $_SESSION['flash']['status'] . '</strong> ' . $_SESSION['flash']['action'] . '
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
					';

			unset($_SESSION['flash']);
		}
	}
}