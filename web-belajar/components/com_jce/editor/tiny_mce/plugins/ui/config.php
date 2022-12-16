<?php

/**
 * @copyright 	Copyright (c) 2009-2021 Ryan Demmer. All rights reserved
 * @license   	GNU/GPL 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * JCE is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses
 */
class WFUiPluginConfig
{
    public static function getConfig(&$settings)
    {
        $wf = WFApplication::getInstance();
        $settings['object_resizing'] = $wf->getParam('editor.object_resizing', 1);

        if ((int) $settings['object_resizing'] === 0) {
            $settings['object_resizing'] = false;
        } else {
            $settings['object_resizing'] = '';
        }
    }
}