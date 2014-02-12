<?php

/**
 * Dependency Container for Contao Open Source CMS
 * Copyright (C) 2013 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  (c) 2013 Contao Community Alliance
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    dependency-container
 * @license    LGPL-3.0+
 * @filesource
 */

/**
 * Lazy initialize dependency container.
 */
$GLOBALS['TL_HOOKS']['initializeSystem']['dependency-container'] = array(
	'DependencyInjection\Container\ContainerInitializer',
	'init',
);
