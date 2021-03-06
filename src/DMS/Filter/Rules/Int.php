<?php

namespace DMS\Filter\Rules;

/**
 * Int Rule
 * Converts content into an Int
 *
 * @package DMS
 * @subpackage Filter
 *
 * @Annotation
 */
class Int extends Rule
{
    /**
     * {@inheritDoc}
     */
    public function applyFilter($value)
    {
        return (int) ($value);
    }

}