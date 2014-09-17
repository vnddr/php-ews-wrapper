<?php
/**
 * Definition of the AppendToFolderFieldType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the AppendToFolderFieldType type
 */
class AppendToFolderFieldType extends EWSType
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
