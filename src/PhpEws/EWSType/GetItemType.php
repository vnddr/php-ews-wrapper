<?php
/**
 * Definition of the GetItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GetItemType type
 */
class GetItemType extends EWSType
{
    /**
     * ItemShape property
     *
     * ItemResponseShapeType
     */
    public $ItemShape;

    /**
     * ItemIds property
     *
     * NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
}
