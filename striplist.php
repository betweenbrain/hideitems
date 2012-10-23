<?php defined('_JEXEC') or die;

/**
 * File       striplist.php
 * Created    10/21/12 3:57 PM
 * Author     Matt Thomas matt@betweenbrain.com
 * Copyright  Copyright (C) 2012 betweenbrain llc.
 */

jimport('joomla.plugin.plugin');

class plgSystemStriplist extends JPlugin
{

	function onAfterRender()
	{

		$app     = JFactory::getApplication();
		$buffer  = JResponse::getBody();
		$classes = $this->params->get('classes');
		$classes = explode(',', str_replace(' ','',$classes));

		if ($app->isAdmin()) {
			return;
		}

		foreach ($classes as $class) {
			$buffer = preg_replace('/<li( id=\"(.*?)\")? class=\"([a-zA-Z0-9-_ ]*)?\b' . $class . '\b([a-zA-Z0-9-_ ]*)?\"[^>]*>([\s\S]*?)<\/li>/i', '', $buffer);
		}

		JResponse::setBody($buffer);

		return TRUE;
	}
}
