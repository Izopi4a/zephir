<?php

/*
 +--------------------------------------------------------------------------+
 | Zephir Language                                                          |
 +--------------------------------------------------------------------------+
 | Copyright (c) 2013-2014 Zephir Team and contributors                     |
 +--------------------------------------------------------------------------+
 | This source file is subject the MIT license, that is bundled with        |
 | this package in the file LICENSE, and is available through the           |
 | world-wide-web at the following url:                                     |
 | http://zephir-lang.com/license.html                                      |
 |                                                                          |
 | If you did not receive a copy of the MIT license and are unable          |
 | to obtain it through the world-wide-web, please send a note to           |
 | license@zephir-lang.com so we can mail you a copy immediately.           |
 +--------------------------------------------------------------------------+
*/

/**
 * CommandVersion
 *
 * Shows Zephir version
 */
class CommandVersion extends CommandAbstract
{
	const VERSION = '0.2.2a';

	/**
	 * Command provided by this command
	 *
	 * @return string
	 */
	public function getCommand()
	{
		return 'version';
	}

	/**
	 * Command usage
	 *
	 * @return string
	 */
	public function getUsage()
	{
		return 'version';
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return 'Shows Zephir version';
	}

	/**
	 * Executes the command
	 *
	 * Config $config
	 * Logger $logger
	 */
	public function execute(Config $config, Logger $logger)
	{
		echo self::VERSION, PHP_EOL;
	}
}
