<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Behat\Context\ContextClass;

use Behat\Behat\Context\Suite\Setup\SuiteWithContextsSetup;
use Behat\Testwork\Suite\Suite;

/**
 * Context class generator interface.
 *
 * Used by context suite setup to generate context classes.
 *
 * @see SuiteWithContextsSetup
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface ClassGenerator
{
    /**
     * Checks if generator supports provided context class.
     *
     * @param Suite  $suite
     * @param string $class
     *
     * @return Boolean
     */
    public function supportsSuiteAndClass(Suite $suite, $class);

    /**
     * Generates context class code.
     *
     * @param Suite  $suite
     * @param string $class
     *
     * @return string The context class source code
     */
    public function generateClass(Suite $suite, $class);
}
