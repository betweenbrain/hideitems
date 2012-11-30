<?php defined('_JEXEC') or die;

/**
 * File       hideitems.php
 * Created    10/21/12 3:57 PM
 * Author     Matt Thomas
 * Website    http://betweenbrain.com/
 * Support    https://github.com/betweenbrain/hideitems/issues
 * Copyright  Copyright (C) 2012 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v3 or later
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

		$buffer      = JResponse::getBody();
		$diagnostics = $this->params->get('diagnostics');
		$itemId      = JRequest::getInt('Itemid', 0);
		$itemlists   = $this->params->get('itemlists');
		$lists       = explode(';', rtrim($itemlists, ';'));

		foreach ($lists as $list) {
			$targetid = strstr($list, ':', TRUE);
			if (($targetid == '0') || ($targetid == $itemId)) {
				$targetclasses = explode(',', (str_replace(':', '', rtrim(strstr($list, ':'), ','))));
				foreach ($targetclasses as $targetclass) {
					$buffer = preg_replace('/<li( id=\"(.*?)\")? class=\"([a-zA-Z0-9-_ ]*)?\b' . $targetclass . '\b([a-zA-Z0-9-_ ]*)?\"[^>]*>([\s\S]*?)<\/li>/i', '', $buffer);
				}
			}
		}

		if ($diagnostics == '1') {
			$buffer = 'Current Item ID: ' . $itemId . $buffer;
		}

		JResponse::setBody($buffer);

		return TRUE;
	}
}


