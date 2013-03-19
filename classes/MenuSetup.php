<?php
/**
 * @author Julien Breux
 * @package https://github.com/JulienBreux/ps.15x.menu
 * @license Read LICENSE file
 */

class MenuSetup
{
	/** @var ModuleCore Module */
	protected $module;

	/**
	 * Constructor
	 *
	 * @param ModuleCore $module
	 */
	public function __construct(ModuleCore $module)
	{
		$this->module = $module;
	}

	/**
	 * Installation
	 *
	 * @return bool
	 */
	public function install()
	{
		//@todo Temporary
		return true;
	}

	/**
	 * Uninstall
	 *
	 * @return bool
	 */
	public function uninstall()
	{
		//@todo Temporary
		return true;
	}
}