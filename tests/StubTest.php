<?php
/**
 * StubTest
 *
 * PHP Version 5.3
 *
 * @category Test
 * @package  Boscot
 * @license  http://www.gnu.org/licenses/gpl-3.0.txt GPL v3
 * @link     None
 */

require_once __DIR__."/../vendor/autoload.php";

use Boscot\Test\GameTest;


/**
 * Class: StubTest
 * 
 * Test Stub classes
 *
 * @category Test
 * @package  Boscot
 * @license  http://www.gnu.org/licenses/gpl-3.0.txt GPL v3
 * @link     None
 * @see      PHPUnit_Framework_TestCase
 */
class StubTest extends GameTest
{
	public $domain = "stub.boscot.com";

    /**
     * Configuration
     *
     * Create Stub object
     *
     * @return void
     */
    protected function setUp()
    {

    }

    
    /**
     * Test all action method of the controller
     *
     * @return void
     */
    public function testHack()
	{
    }
}
