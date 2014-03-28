<?php
/**
 *
 *
 * PHP version 5
 *
 * @package
 * @author  Andrey Filippov <afi@i-loto.ru>
 */

namespace Solo\Web\FormRestore\Smarty;

use Solo\Core\UI\Smarty\Plugins\Base;

class FormRestore extends Base
{
	/**
	 * Тип плагина (function, block, modifier, etc.)
	 *
	 * @return string
	 */
	function getType()
	{
		return "function";
	}

	/**
	 * Название плагина
	 *
	 * @return string
	 */
	function getTag()
	{
		return "formrestore";
	}

	/**
	 * Восстанавливает данные формы
	 *
	 * @return string
	 */
	public function execute()
	{
		return \Solo\Web\FormRestore\FormRestore::restore();
	}
}

