<?php
namespace PhpEws\EWSType;
/**
 * Definition of the FolderResponseShapeType type
 *
 * @package php-ews
 * @subpackage Types
 */



/**
 * Definition of the FolderResponseShapeType type
 */
class FolderResponseShapeType extends EWSType
{
    /**
     * BaseShape property
     *
     * DefaultShapeNamesType
     */
    public $BaseShape;

    /**
     * AdditionalProperties property
     *
     * NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;
}
