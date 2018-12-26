<?php
/**
 * Invoice
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
 * Invoice Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Invoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_ref' => '\Swagger\Client\Model\AccountReference',
        'matter_ref' => '\Swagger\Client\Model\MatterReference',
        'id' => 'string',
        'issue_date' => '\DateTime',
        'due_date' => '\DateTime',
        'items_time_entries' => '\Swagger\Client\Model\InvoiceLineItem[]',
        'items_expenses' => '\Swagger\Client\Model\InvoiceLineItem[]',
        'items_flat_fees' => '\Swagger\Client\Model\InvoiceLineItem[]',
        'subtotal' => 'double',
        'tax' => 'double',
        'discount' => 'double',
        'total' => 'double',
        'total_paid' => 'double',
        'total_outstanding' => 'double',
        'invoice_type' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_ref' => null,
        'matter_ref' => null,
        'id' => 'uuid',
        'issue_date' => 'date-time',
        'due_date' => 'date-time',
        'items_time_entries' => null,
        'items_expenses' => null,
        'items_flat_fees' => null,
        'subtotal' => 'double',
        'tax' => 'double',
        'discount' => 'double',
        'total' => 'double',
        'total_paid' => 'double',
        'total_outstanding' => 'double',
        'invoice_type' => null,
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
        'account_ref' => 'account_ref',
        'matter_ref' => 'matter_ref',
        'id' => 'id',
        'issue_date' => 'issue_date',
        'due_date' => 'due_date',
        'items_time_entries' => 'items_time_entries',
        'items_expenses' => 'items_expenses',
        'items_flat_fees' => 'items_flat_fees',
        'subtotal' => 'subtotal',
        'tax' => 'tax',
        'discount' => 'discount',
        'total' => 'total',
        'total_paid' => 'total_paid',
        'total_outstanding' => 'total_outstanding',
        'invoice_type' => 'invoice_type',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_ref' => 'setAccountRef',
        'matter_ref' => 'setMatterRef',
        'id' => 'setId',
        'issue_date' => 'setIssueDate',
        'due_date' => 'setDueDate',
        'items_time_entries' => 'setItemsTimeEntries',
        'items_expenses' => 'setItemsExpenses',
        'items_flat_fees' => 'setItemsFlatFees',
        'subtotal' => 'setSubtotal',
        'tax' => 'setTax',
        'discount' => 'setDiscount',
        'total' => 'setTotal',
        'total_paid' => 'setTotalPaid',
        'total_outstanding' => 'setTotalOutstanding',
        'invoice_type' => 'setInvoiceType',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_ref' => 'getAccountRef',
        'matter_ref' => 'getMatterRef',
        'id' => 'getId',
        'issue_date' => 'getIssueDate',
        'due_date' => 'getDueDate',
        'items_time_entries' => 'getItemsTimeEntries',
        'items_expenses' => 'getItemsExpenses',
        'items_flat_fees' => 'getItemsFlatFees',
        'subtotal' => 'getSubtotal',
        'tax' => 'getTax',
        'discount' => 'getDiscount',
        'total' => 'getTotal',
        'total_paid' => 'getTotalPaid',
        'total_outstanding' => 'getTotalOutstanding',
        'invoice_type' => 'getInvoiceType',
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

    const INVOICE_TYPE_SALE = 'Sale';
    const INVOICE_TYPE_REFUND = 'Refund';
    const INVOICE_TYPE_CREDIT = 'Credit';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceTypeAllowableValues()
    {
        return [
            self::INVOICE_TYPE_SALE,
            self::INVOICE_TYPE_REFUND,
            self::INVOICE_TYPE_CREDIT,
        ];
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
        $this->container['account_ref'] = isset($data['account_ref']) ? $data['account_ref'] : null;
        $this->container['matter_ref'] = isset($data['matter_ref']) ? $data['matter_ref'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['issue_date'] = isset($data['issue_date']) ? $data['issue_date'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['items_time_entries'] = isset($data['items_time_entries']) ? $data['items_time_entries'] : null;
        $this->container['items_expenses'] = isset($data['items_expenses']) ? $data['items_expenses'] : null;
        $this->container['items_flat_fees'] = isset($data['items_flat_fees']) ? $data['items_flat_fees'] : null;
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['total_paid'] = isset($data['total_paid']) ? $data['total_paid'] : null;
        $this->container['total_outstanding'] = isset($data['total_outstanding']) ? $data['total_outstanding'] : null;
        $this->container['invoice_type'] = isset($data['invoice_type']) ? $data['invoice_type'] : null;
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

        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (!in_array($this->container['invoice_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoice_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (!in_array($this->container['invoice_type'], $allowedValues)) {
            return false;
        }
        return true;
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
     * Gets issue_date
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param \DateTime $issue_date This is the issue date for the invoice. ie. the date this invoice was created
     *
     * @return $this
     */
    public function setIssueDate($issue_date)
    {
        $this->container['issue_date'] = $issue_date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date This is the due date for the invoice. If due_date is in the past and amount_due &gt; 0, then this invoice is overdue.
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets items_time_entries
     *
     * @return \Swagger\Client\Model\InvoiceLineItem[]
     */
    public function getItemsTimeEntries()
    {
        return $this->container['items_time_entries'];
    }

    /**
     * Sets items_time_entries
     *
     * @param \Swagger\Client\Model\InvoiceLineItem[] $items_time_entries items_time_entries
     *
     * @return $this
     */
    public function setItemsTimeEntries($items_time_entries)
    {
        $this->container['items_time_entries'] = $items_time_entries;

        return $this;
    }

    /**
     * Gets items_expenses
     *
     * @return \Swagger\Client\Model\InvoiceLineItem[]
     */
    public function getItemsExpenses()
    {
        return $this->container['items_expenses'];
    }

    /**
     * Sets items_expenses
     *
     * @param \Swagger\Client\Model\InvoiceLineItem[] $items_expenses items_expenses
     *
     * @return $this
     */
    public function setItemsExpenses($items_expenses)
    {
        $this->container['items_expenses'] = $items_expenses;

        return $this;
    }

    /**
     * Gets items_flat_fees
     *
     * @return \Swagger\Client\Model\InvoiceLineItem[]
     */
    public function getItemsFlatFees()
    {
        return $this->container['items_flat_fees'];
    }

    /**
     * Sets items_flat_fees
     *
     * @param \Swagger\Client\Model\InvoiceLineItem[] $items_flat_fees items_flat_fees
     *
     * @return $this
     */
    public function setItemsFlatFees($items_flat_fees)
    {
        $this->container['items_flat_fees'] = $items_flat_fees;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return double
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param double $subtotal subtotal
     *
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return double
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param double $tax tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return double
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param double $discount discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets total
     *
     * @return double
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param double $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets total_paid
     *
     * @return double
     */
    public function getTotalPaid()
    {
        return $this->container['total_paid'];
    }

    /**
     * Sets total_paid
     *
     * @param double $total_paid total_paid
     *
     * @return $this
     */
    public function setTotalPaid($total_paid)
    {
        $this->container['total_paid'] = $total_paid;

        return $this;
    }

    /**
     * Gets total_outstanding
     *
     * @return double
     */
    public function getTotalOutstanding()
    {
        return $this->container['total_outstanding'];
    }

    /**
     * Sets total_outstanding
     *
     * @param double $total_outstanding total_outstanding
     *
     * @return $this
     */
    public function setTotalOutstanding($total_outstanding)
    {
        $this->container['total_outstanding'] = $total_outstanding;

        return $this;
    }

    /**
     * Gets invoice_type
     *
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->container['invoice_type'];
    }

    /**
     * Sets invoice_type
     *
     * @param string $invoice_type Determines if this is a sale invoice, refund or credit note.
     *
     * @return $this
     */
    public function setInvoiceType($invoice_type)
    {
        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (!is_null($invoice_type) && !in_array($invoice_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoice_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_type'] = $invoice_type;

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
     * @param \DateTime $created_at This field can be used to sync invoices with PracticePanther. This field can be used to sync invoices with PracticePanther.
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
     * @param \DateTime $updated_at This field can be used to sync invoices with PracticePanther. This field can be used to sync invoices with PracticePanther.
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
