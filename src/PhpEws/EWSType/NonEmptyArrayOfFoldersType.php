<?php
/**
 * Definition of the NonEmptyArrayOfFoldersType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfFoldersType type
 */
class NonEmptyArrayOfFoldersType extends EWSType
{
    /**
     * Folder property
     *
     * FolderType
     */
    public $Folder;

    /**
     * CalendarFolder property
     *
     * CalendarFolderType
     */
    public $CalendarFolder;

    /**
     * ContactsFolder property
     *
     * ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * SearchFolder property
     *
     * SearchFolderType
     */
    public $SearchFolder;

    /**
     * TasksFolder property
     *
     * TasksFolderType
     */
    public $TasksFolder;
}
