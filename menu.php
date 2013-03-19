<?php
/**
 * @author Julien Breux
 * @package https://github.com/JulienBreux/ps.15x.menu
 * @license Read LICENSE file
 */
class Menu extends Module
{
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->name				= 'menu';
		$this->tab				= 'front_office_features';
		$this->version			= 1.0;
		$ps_versions_compliancy	= array('min' => '1.5', 'max' => '1.6');
		$this->author			= 'Julien Breux';

		parent::__construct();

		$this->displayName	= $this->l('Menu (management and framework)');
		$this->description	= $this->l('Manage menu in your shop.');
	}
}