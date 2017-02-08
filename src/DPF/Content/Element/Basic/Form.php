<?php
/**
 * @package    DPF
 * @author     Digital Peak http://www.digital-peak.com
 * @copyright  Copyright (C) 2007 - 2016 Digital Peak. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL
 */
namespace DPF\Content\Element\Basic;

class Form extends Container
{

	public function __construct($id, $action, $name, $method = 'POST', array $classes = [], array $attributes = [])
	{
		$attributes['action'] = $action;
		$attributes['name']   = $name;
		$attributes['method'] = $method;

		parent::__construct($id, $classes, $attributes);
	}

	public function getTagName()
	{
		return 'form';
	}
}
