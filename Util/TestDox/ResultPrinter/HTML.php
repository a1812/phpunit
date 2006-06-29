<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * PHP Version 5
 *
 * LICENSE: This source file is subject to version 3.0 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_0.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   Testing
 * @package    PHPUnit2
 * @author     Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @copyright  2002-2005 Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    CVS: $Id: HTML.php 539 2006-02-13 16:08:42Z sb $
 * @link       http://pear.php.net/package/PHPUnit2
 * @since      File available since Release 2.3.0
 */

require_once 'PHPUnit2/Util/TestDox/ResultPrinter.php';

/**
 * Prints TestDox documentation in HTML format.
 *
 * @category   Testing
 * @package    PHPUnit2
 * @author     Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @copyright  2002-2005 Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    Release: @package_version@
 * @link       http://pear.php.net/package/PHPUnit2
 * @since      Class available since Release 2.1.0
 */
class PHPUnit2_Util_TestDox_ResultPrinter_HTML extends PHPUnit2_Util_TestDox_ResultPrinter {
    /**
     * Handler for 'start run' event.
     *
     * @access protected
     */
    protected function startRun() {
        $this->write('<html><body>');
    }

    /**
     * Handler for 'start class' event.
     *
     * @param  string $name
     * @access protected
     */
    protected function startClass($name) {
        $this->write('<h2>' . $name . '</h2><ul>');
    }

    /**
     * Handler for 'on test' event.
     *
     * @param  string $name
     * @access protected
     */
    protected function onTest($name) {
        $this->write('<li>' . $name . '</li>');
    }

    /**
     * Handler for 'end class' event.
     *
     * @param  string $name
     * @access protected
     */
    protected function endClass($name) {
        $this->write('</ul>');
    }

    /**
     * Handler for 'end run' event.
     *
     * @access protected
     */
    protected function endRun() {
        $this->write('</body></html>');
    }
}

/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */
?>
