<?php
/**
 * TimeEntry
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PracticePanther KISS Api
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * TimeEntry Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TimeEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TimeEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'is_billable' => 'bool',
        'is_billed' => 'bool',
        'date' => '\DateTime',
        'hours' => 'double',
        'rate' => 'double',
        'description' => 'string',
        'private_notes' => 'string',
        'account_ref' => '\Swagger\Client\Model\AccountReference',
        'matter_ref' => '\Swagger\Client\Model\MatterReference',
        'billed_by_user_ref' => '\Swagger\Client\Model\UserReference',
        'item_ref' => '\Swagger\Client\Model\ItemReference',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'is_billable' => null,
        'is_billed' => null,
        'date' => 'date-time',
        'hours' => 'double',
        'rate' => 'double',
        'description' => null,
        'private_notes' => null,
        'account_ref' => null,
        'matter_ref' => null,
        'billed_by_user_ref' => null,
        'item_ref' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'is_billable' => 'is_billable',
        'is_billed' => 'is_billed',
        'date' => 'date',
        'hours' => 'hours',
        'rate' => 'rate',
        'description' => 'description',
        'private_notes' => 'private_notes',
        'account_ref' => 'account_ref',
        'matter_ref' => 'matter_ref',
        'billed_by_user_ref' => 'billed_by_user_ref',
        'item_ref' => 'item_ref',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'is_billable' => 'setIsBillable',
        'is_billed' => 'setIsBilled',
        'date' => 'setDate',
        'hours' => 'setHours',
        'rate' => 'setRate',
        'description' => 'setDescription',
        'private_notes' => 'setPrivateNotes',
        'account_ref' => 'setAccountRef',
        'matter_ref' => 'setMatterRef',
        'billed_by_user_ref' => 'setBilledByUserRef',
        'item_ref' => 'setItemRef',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'is_billable' => 'getIsBillable',
        'is_billed' => 'getIsBilled',
        'date' => 'getDate',
        'hours' => 'getHours',
        'rate' => 'getRate',
        'description' => 'getDescription',
        'private_notes' => 'getPrivateNotes',
        'account_ref' => 'getAccountRef',
        'matter_ref' => 'getMatterRef',
        'billed_by_user_ref' => 'getBilledByUserRef',
        'item_ref' => 'getItemRef',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_billable'] = isset($data['is_billable']) ? $data['is_billable'] : null;
        $this->container['is_billed'] = isset($data['is_billed']) ? $data['is_billed'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['hours'] = isset($data['hours']) ? $data['hours'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['private_notes'] = isset($data['private_notes']) ? $data['private_notes'] : null;
        $this->container['account_ref'] = isset($data['account_ref']) ? $data['account_ref'] : null;
        $this->container['matter_ref'] = isset($data['matter_ref']) ? $data['matter_ref'] : null;
        $this->container['billed_by_user_ref'] = isset($data['billed_by_user_ref']) ? $data['billed_by_user_ref'] : null;
        $this->container['item_ref'] = isset($data['item_ref']) ? $data['item_ref'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['hours'] === null) {
            $invalidProperties[] = "'hours' can't be null";
        }
        if ($this->container['account_ref'] === null) {
            $invalidProperties[] = "'account_ref' can't be null";
        }
        if ($this->container['matter_ref'] === null) {
            $invalidProperties[] = "'matter_ref' can't be null";
        }
        if ($this->container['billed_by_user_ref'] === null) {
            $invalidProperties[] = "'billed_by_user_ref' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['date'] === null) {
            return false;
        }
        if ($this->container['hours'] === null) {
            return false;
        }
        if ($this->container['account_ref'] === null) {
            return false;
        }
        if ($this->container['matter_ref'] === null) {
            return false;
        }
        if ($this->container['billed_by_user_ref'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_billable
     *
     * @return bool
     */
    public function getIsBillable()
    {
        return $this->container['is_billable'];
    }

    /**
     * Sets is_billable
     *
     * @param bool $is_billable If set to billable, it will be automatically queued to be added to the next invoice. If this is set to false, it will show in PracticePanther as not billable
     *
     * @return $this
     */
    public function setIsBillable($is_billable)
    {
        $this->container['is_billable'] = $is_billable;

        return $this;
    }

    /**
     * Gets is_billed
     *
     * @return bool
     */
    public function getIsBilled()
    {
        return $this->container['is_billed'];
    }

    /**
     * Sets is_billed
     *
     * @param bool $is_billed If set to billed, it will not be added to future invoices and will be marked as \"billed\" in PracticePanther
     *
     * @return $this
     */
    public function setIsBilled($is_billed)
    {
        $this->container['is_billed'] = $is_billed;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date This is the date for this time entry and will be visible to the client if this time entry is billable. The date field can be used to run reports on time entries in PracticePanther.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets hours
     *
     * @return double
     */
    public function getHours()
    {
        return $this->container['hours'];
    }

    /**
     * Sets hours
     *
     * @param double $hours The number of hours worked on this time entry. For example, an hour and a half will be added as 1.5, fifteen minutes will be added as 0.25.
     *
     * @return $this
     */
    public function setHours($hours)
    {
        $this->container['hours'] = $hours;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return double
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param double $rate This is the hourly rate for this time entry. Will be used together with hours to calculate the total billable for this time entry. If you leave this field blank, PracticePanther will automatically add the default hourly rate for the user and matter
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description This is the description which will be visible to the client on the invoice
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets private_notes
     *
     * @return string
     */
    public function getPrivateNotes()
    {
        return $this->container['private_notes'];
    }

    /**
     * Sets private_notes
     *
     * @param string $private_notes These are private notes that are visible to PracticePanther users but will not be added to the invoice
     *
     * @return $this
     */
    public function setPrivateNotes($private_notes)
    {
        $this->container['private_notes'] = $private_notes;

        return $this;
    }

    /**
     * Gets account_ref
     *
     * @return \Swagger\Client\Model\AccountReference
     */
    public function getAccountRef()
    {
        return $this->container['account_ref'];
    }

    /**
     * Sets account_ref
     *
     * @param \Swagger\Client\Model\AccountReference $account_ref account_ref
     *
     * @return $this
     */
    public function setAccountRef($account_ref)
    {
        $this->container['account_ref'] = $account_ref;

        return $this;
    }

    /**
     * Gets matter_ref
     *
     * @return \Swagger\Client\Model\MatterReference
     */
    public function getMatterRef()
    {
        return $this->container['matter_ref'];
    }

    /**
     * Sets matter_ref
     *
     * @param \Swagger\Client\Model\MatterReference $matter_ref matter_ref
     *
     * @return $this
     */
    public function setMatterRef($matter_ref)
    {
        $this->container['matter_ref'] = $matter_ref;

        return $this;
    }

    /**
     * Gets billed_by_user_ref
     *
     * @return \Swagger\Client\Model\UserReference
     */
    public function getBilledByUserRef()
    {
        return $this->container['billed_by_user_ref'];
    }

    /**
     * Sets billed_by_user_ref
     *
     * @param \Swagger\Client\Model\UserReference $billed_by_user_ref The user who billed this time entry, this field is required. If you want to get the current user information you can use GET /users/me
     *
     * @return $this
     */
    public function setBilledByUserRef($billed_by_user_ref)
    {
        $this->container['billed_by_user_ref'] = $billed_by_user_ref;

        return $this;
    }

    /**
     * Gets item_ref
     *
     * @return \Swagger\Client\Model\ItemReference
     */
    public function getItemRef()
    {
        return $this->container['item_ref'];
    }

    /**
     * Sets item_ref
     *
     * @param \Swagger\Client\Model\ItemReference $item_ref This is a reference to the item related to this time entry, This is field is not required, to get all available items you can GET /items
     *
     * @return $this
     */
    public function setItemRef($item_ref)
    {
        $this->container['item_ref'] = $item_ref;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at This field can be used to sync time entries with PracticePanther. This field can be used to sync time entries with PracticePanther.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at This field can be used to sync time entries with PracticePanther. This field can be used to sync time entries with PracticePanther.
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param  integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param  integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
