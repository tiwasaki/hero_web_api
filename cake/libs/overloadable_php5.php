<?php
/* SVN FILE: $Id: overloadable_php5.php,v 1.1 2011/09/20 08:32:26 iwasaki Exp $ */
/**
 * Overload abstraction interface.  Merges differences between PHP4 and 5.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs
 * @since         CakePHP(tm) v 1.2
 * @version       $Revision: 1.1 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2011/09/20 08:32:26 $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Overloadable class selector
 *
 * Load the interface class based on the version of PHP.
 *
 * @package       cake
 * @subpackage    cake.cake.libs
 */
class Overloadable extends Object {
/**
 * Overload implementation. No need for implementation in PHP5.
 *
 * @access public
 */
	function overload() { }
/**
 * Magic method handler.
 *
 * @param string $method Method name
 * @param array $params Parameters to send to method
 * @return mixed Return value from method
 * @access private
 */
	function __call($method, $params) {
		if (!method_exists($this, 'call__')) {
			trigger_error(sprintf(__('Magic method handler call__ not defined in %s', true), get_class($this)), E_USER_ERROR);
		}
		return $this->call__($method, $params);
	}
}

/**
 * Overloadable2 class selector
 *
 * Load the interface class based on the version of PHP.
 *
 * @package       cake
 */
class Overloadable2 extends Object {
/**
 * Overload implementation. No need for implementation in PHP5.
 *
 * @access public
 */
	function overload() { }
/**
 * Magic method handler.
 *
 * @param string $method Method name
 * @param array $params Parameters to send to method
 * @return mixed Return value from method
 * @access private
 */
	function __call($method, $params) {
		if (!method_exists($this, 'call__')) {
			trigger_error(sprintf(__('Magic method handler call__ not defined in %s', true), get_class($this)), E_USER_ERROR);
		}
		return $this->call__($method, $params);
	}
/**
 * Getter.
 *
 * @param mixed $name What to get
 * @param mixed $value Where to store returned value
 * @return boolean Success
 * @access private
 */
	function __get($name) {
		return $this->get__($name);
	}
/**
 * Setter.
 *
 * @param mixed $name What to set
 * @param mixed $value Value to set
 * @return boolean Success
 * @access private
 */
	function __set($name, $value) {
		return $this->set__($name, $value);
	}
}
?>