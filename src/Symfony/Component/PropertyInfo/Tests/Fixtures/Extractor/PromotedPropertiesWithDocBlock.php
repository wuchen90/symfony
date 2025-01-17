<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\PropertyInfo\Tests\Fixtures\Extractor;

class PromotedPropertiesWithDocBlock
{
    /**
     * @param string $foo Just a foo property
     * @param $bar A phpdoc without type
     */
    public function __construct(
        public string $foo,
        public int $bar,
        /** @var string $baz This phpdoc isn't compatible with the one above this method, thus it won't appear */
        public string $baz,
    ) {
    }
}
