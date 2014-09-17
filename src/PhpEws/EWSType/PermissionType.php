<?php
/**
 * Definition of the PermissionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the PermissionType type
 */
class PermissionType extends EWSType
{
    /**
     * ReadItems property
     *
     * PermissionReadAccessType
     */
    public $ReadItems;

    /**
     * PermissionLevel property
     *
     * PermissionLevelType
     */
    public $PermissionLevel;
}
