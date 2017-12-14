<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nofun extends MX_Controller {

	public function index()
	{
		echo "<h1>This is no fun at all</h1>";
	}

	public function sayhallo($firstname, $lastname)
	{
		echo ("Hi ".$firstname." ".$lastname." from nofun controler");
	}
}
