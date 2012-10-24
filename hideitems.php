<?php defined('_JEXEC') or die;

/**
 * File       hideitems.php
 * Created    10/21/12 3:57 PM
 * Author     Matt Thomas matt@betweenbrain.com
 * Copyright  Copyright (C) 2012 betweenbrain llc.
 */

jimport('joomla.plugin.plugin');

class plgSystemHideitems extends JPlugin
{

	function onAfterRender()
	{

		$app = JFactory::getApplication();

		if ($app->isAdmin()) {
			return;
		}

		$buffer = JResponse::getBody();

		/*
		$data = "1:item1,bob,home;";
		$data .= "2:item2,crazy,mom;";
		$data .= "3:test,mark,bob";

		$contexts = explode(';', $data);

		foreach ($contexts as $context) {
			$id      = strstr($context, ':', TRUE);
			$classes = explode(',', (str_replace(':', '', (strstr($context, ':')))));
			if (($id == '0') || ($itemId == $id)) {
				foreach ($classes as $class) {
					$buffer = preg_replace('/<li( id=\"(.*?)\")? class=\"([a-zA-Z0-9-_ ]*)?\b' . $class . '\b([a-zA-Z0-9-_ ]*)?\"[^>]*>([\s\S]*?)<\/li>/i', '', $buffer);
				}
			}
		}
		*/

		$classes = $this->params->get('classes');
		$classes = explode('|', str_replace(' ', '', $classes));

		$contexts = $this->params->get('contexts');
		$contexts = explode(',', str_replace(' ', '', $contexts));

		$itemId = JRequest::getInt('Itemid', 0);

		foreach ($contexts as $pos => $context) {
			if ($itemId == $context) {
				$classes = explode(',', $classes[$pos]);
				foreach ($classes as $class) {
					$buffer = preg_replace('/<li( id=\"(.*?)\")? class=\"([a-zA-Z0-9-_ ]*)?\b' . $class . '\b([a-zA-Z0-9-_ ]*)?\"[^>]*>([\s\S]*?)<\/li>/i', '', $buffer);
				}
			}
		}

		JResponse::setBody($buffer);

		return TRUE;
	}
}


