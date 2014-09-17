<?php
/**
 * Definition of the TaskType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the TaskType type
 */
class TaskType extends EWSType
{
    /**
     * ActualWork property
     *
     * @var integer
     */
    public $ActualWork;

    /**
     * AssignedTime property
     *
     * dateTime
     */
    public $AssignedTime;

    /**
     * BillingInformation property
     *
     * @var string
     */
    public $BillingInformation;

    /**
     * ChangeCount property
     *
     * @var integer
     */
    public $ChangeCount;

    /**
     * Companies property
     *
     * ArrayOfStringsType
     */
    public $Companies;

    /**
     * CompleteDate property
     *
     * dateTime
     */
    public $CompleteDate;

    /**
     * Contacts property
     *
     * ArrayOfStringsType
     */
    public $Contacts;

    /**
     * DelegationState property
     *
     * TaskDelegateStateType
     */
    public $DelegationState;

    /**
     * Delegator property
     *
     * @var string
     */
    public $Delegator;

    /**
     * DueDate property
     *
     * dateTime
     */
    public $DueDate;

    /**
     * IsAssignmentEditable property
     *
     * @var integer
     */
    public $IsAssignmentEditable;

    /**
     * IsComplete property
     *
     * @var boolean
     */
    public $IsComplete;

    /**
     * IsRecurring property
     *
     * @var boolean
     */
    public $IsRecurring;

    /**
     * IsTeamTask property
     *
     * @var boolean
     */
    public $IsTeamTask;

    /**
     * Mileage property
     *
     * @var string
     */
    public $Mileage;

    /**
     * Owner property
     *
     * @var string
     */
    public $Owner;

    /**
     * PercentComplete property
     *
     * @var float
     */
    public $PercentComplete;

    /**
     * Recurrence property
     *
     * TaskRecurrenceType
     */
    public $Recurrence;

    /**
     * StartDate property
     *
     * dateTime
     */
    public $StartDate;

    /**
     * Status property
     *
     * TaskStatusType
     */
    public $Status;

    /**
     * StatusDescription property
     *
     * @var string
     */
    public $StatusDescription;

    /**
     * TotalWork property
     *
     * @var integer
     */
    public $TotalWork;
}
