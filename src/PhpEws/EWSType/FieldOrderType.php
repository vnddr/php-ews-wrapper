<?php
/**
 * Definition of the FieldOrderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the FieldOrderType type
 */
class FieldOrderType extends EWSType
{
    /**
     * Path property
     *
     * BasePathToElementType
     */
    public $Path;

    /**
     * Order property
     *
     * SortDirectionType
     */
    public $Order;
}
