<?php
/**
 * Definition of the TwoOperandExpressionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the TwoOperandExpressionType type
 */
class TwoOperandExpressionType extends EWSType
{
    /**
     * Path property
     *
     * BasePathToElementType
     */
    public $Path;

    /**
     * FieldURIOrConstant property
     *
     * FieldURIOrConstantType
     */
    public $FieldURIOrConstant;
}
