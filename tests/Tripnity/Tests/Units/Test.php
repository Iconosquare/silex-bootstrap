<?php

namespace Tripnity\Tests\Units;

use mageekguy\atoum,
    mageekguy\atoum\factory;

/**
 * Define namespace for unit test
 * 
 * @author David Guyon <dguyon@gmail.com>
 */
abstract class Test extends atoum\test
{
    /**
     * {@inheritdoc}
     * 
     * @param factory $factory
     */
    public function __construct(factory $factory = null)
    {
        $this->setTestNamespace('\\Tests\\Units');
        parent::__construct($factory);
    }
}