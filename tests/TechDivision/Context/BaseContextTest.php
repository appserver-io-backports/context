<?php

/**
 * TechDivision\Context\BaseContextTest
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category  Appserver
 * @package   TechDivision_Context
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.appserver.io
 */

namespace TechDivision\Context;

/**
 * Test for the base context implementation.
 *
 * @category  Appserver
 * @package   TechDivision_Context
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.appserver.io
 */
class BaseContextTest extends \PHPUnit_Framework_TestCase
{

    /**
     * The servlet module instance to test.
     *
     * @var \TechDivision\Context\BaseContext
     */
    protected $context;
    
    /**
     * Initializes the base context to test.
     *
     * @return void
     */
    public function setUp()
    {
        $this->context = new BaseContext();
    }
    
    /**
     * Test context attribute setter and getter.
     *
     * @return void
     */
    public function testSetAndGetAttribute()
    {
        $this->context->setAttribute($key = 'key', $value = 'Test');
        $this->assertSame($value, $this->context->getAttribute($key));
    }
}
