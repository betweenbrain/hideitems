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
		$itemId = JRequest::getInt('Itemid', 0);

		$itemlists = $this->params->get('itemlists');
		$lists     = explode(';', rtrim($itemlists,';'));

		foreach ($lists as $list) {
			$targetid = strstr($list, ':', TRUE);
			if (($targetid == '0') || ($targetid == $itemId)) {
				$targetclasses = explode(',', (str_replace(':', '', (strstr($list, ':')))));
				foreach ($targetclasses as $targetclass) {
					$buffer = preg_replace('/<li( id=\"(.*?)\")? class=\"([a-zA-Z0-9-_ ]*)?\b' . $targetclass . '\b([a-zA-Z0-9-_ ]*)?\"[^>]*>([\s\S]*?)<\/li>/i', '', $buffer);
				}
			}
		}

		JResponse::setBody($buffer);

		return TRUE;
	}
}


