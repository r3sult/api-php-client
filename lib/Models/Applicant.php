<?php
/**
 * Applicant
 *
 * PHP version 5
 *
 * @category Class
 * @package  Onfido
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Onfido API
 *
 * The Onfido API is used to submit check requests.
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Onfido\Models;

use \ArrayAccess;

/**
 * Applicant Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Onfido
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Applicant implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Applicant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'delete_at' => '\DateTime',
        'href' => 'string',
        'title' => 'string',
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'gender' => 'string',
        'dob' => '\DateTime',
        'telephone' => 'string',
        'mobile' => 'string',
        'country' => 'string',
        'sandbox' => 'bool',
        'nationality' => 'string',
        'mothers_maiden_name' => 'string',
        'country_of_birth' => 'string',
        'town_of_birth' => 'string',
        'previous_last_name' => 'string',
        'addresses' => '\Onfido\Models\Address[]',
        'id_numbers' => '\Onfido\Models\IdNumber[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'created_at' => 'created_at',
        'delete_at' => 'delete_at',
        'href' => 'href',
        'title' => 'title',
        'first_name' => 'first_name',
        'middle_name' => 'middle_name',
        'last_name' => 'last_name',
        'email' => 'email',
        'gender' => 'gender',
        'dob' => 'dob',
        'telephone' => 'telephone',
        'mobile' => 'mobile',
        'country' => 'country',
        'sandbox' => 'sandbox',
        'nationality' => 'nationality',
        'mothers_maiden_name' => 'mothers_maiden_name',
        'country_of_birth' => 'country_of_birth',
        'town_of_birth' => 'town_of_birth',
        'previous_last_name' => 'previous_last_name',
        'addresses' => 'addresses',
        'id_numbers' => 'id_numbers'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'delete_at' => 'setDeleteAt',
        'href' => 'setHref',
        'title' => 'setTitle',
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'last_name' => 'setLastName',
        'email' => 'setEmail',
        'gender' => 'setGender',
        'dob' => 'setDob',
        'telephone' => 'setTelephone',
        'mobile' => 'setMobile',
        'country' => 'setCountry',
        'sandbox' => 'setSandbox',
        'nationality' => 'setNationality',
        'mothers_maiden_name' => 'setMothersMaidenName',
        'country_of_birth' => 'setCountryOfBirth',
        'town_of_birth' => 'setTownOfBirth',
        'previous_last_name' => 'setPreviousLastName',
        'addresses' => 'setAddresses',
        'id_numbers' => 'setIdNumbers'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'delete_at' => 'getDeleteAt',
        'href' => 'getHref',
        'title' => 'getTitle',
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'last_name' => 'getLastName',
        'email' => 'getEmail',
        'gender' => 'getGender',
        'dob' => 'getDob',
        'telephone' => 'getTelephone',
        'mobile' => 'getMobile',
        'country' => 'getCountry',
        'sandbox' => 'getSandbox',
        'nationality' => 'getNationality',
        'mothers_maiden_name' => 'getMothersMaidenName',
        'country_of_birth' => 'getCountryOfBirth',
        'town_of_birth' => 'getTownOfBirth',
        'previous_last_name' => 'getPreviousLastName',
        'addresses' => 'getAddresses',
        'id_numbers' => 'getIdNumbers'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['delete_at'] = isset($data['delete_at']) ? $data['delete_at'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['dob'] = isset($data['dob']) ? $data['dob'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['sandbox'] = isset($data['sandbox']) ? $data['sandbox'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['mothers_maiden_name'] = isset($data['mothers_maiden_name']) ? $data['mothers_maiden_name'] : null;
        $this->container['country_of_birth'] = isset($data['country_of_birth']) ? $data['country_of_birth'] : null;
        $this->container['town_of_birth'] = isset($data['town_of_birth']) ? $data['town_of_birth'] : null;
        $this->container['previous_last_name'] = isset($data['previous_last_name']) ? $data['previous_last_name'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['id_numbers'] = isset($data['id_numbers']) ? $data['id_numbers'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['first_name'] === null) {
            $invalid_properties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalid_properties[] = "'last_name' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['first_name'] === null) {
            return false;
        }
        if ($this->container['last_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The unique identifier for the applicant
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at The date and time when this applicant was created
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets delete_at
     * @return \DateTime
     */
    public function getDeleteAt()
    {
        return $this->container['delete_at'];
    }

    /**
     * Sets delete_at
     * @param \DateTime $delete_at The date and time when this applicant is scheduled to be deleted, or null if the applicant is not scheduled to be deleted
     * @return $this
     */
    public function setDeleteAt($delete_at)
    {
        $this->container['delete_at'] = $delete_at;

        return $this;
    }

    /**
     * Gets href
     * @return string
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     * @param string $href The uri of this resource
     * @return $this
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title The applicant’s title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name The applicant’s first name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets middle_name
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     * @param string $middle_name The applicant’s middle name(s) or initial
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name The applicant’s surname
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email The applicant’s email address
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets gender
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     * @param string $gender The applicant’s gender. Valid values are male and female
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets dob
     * @return \DateTime
     */
    public function getDob()
    {
        return $this->container['dob'];
    }

    /**
     * Sets dob
     * @param \DateTime $dob The applicant’s date of birth
     * @return $this
     */
    public function setDob($dob)
    {
        $this->container['dob'] = $dob;

        return $this;
    }

    /**
     * Gets telephone
     * @return string
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     * @param string $telephone The applicant’s landline phone number
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets mobile
     * @return string
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     * @param string $mobile The applicant’s mobile phone number
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country The country where this applicant will be checked. This must be a three-letter ISO code e.g. GBR or USA
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets sandbox
     * @return bool
     */
    public function getSandbox()
    {
        return $this->container['sandbox'];
    }

    /**
     * Sets sandbox
     * @param bool $sandbox
     * @return $this
     */
    public function setSandbox($sandbox)
    {
        $this->container['sandbox'] = $sandbox;

        return $this;
    }

    /**
     * Gets nationality
     * @return string
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     * @param string $nationality The applicant's nationality. This must be a three-letter ISO code e.g. GBR or USA
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets mothers_maiden_name
     * @return string
     */
    public function getMothersMaidenName()
    {
        return $this->container['mothers_maiden_name'];
    }

    /**
     * Sets mothers_maiden_name
     * @param string $mothers_maiden_name The applicant’s mothers maiden name
     * @return $this
     */
    public function setMothersMaidenName($mothers_maiden_name)
    {
        $this->container['mothers_maiden_name'] = $mothers_maiden_name;

        return $this;
    }

    /**
     * Gets country_of_birth
     * @return string
     */
    public function getCountryOfBirth()
    {
        return $this->container['country_of_birth'];
    }

    /**
     * Sets country_of_birth
     * @param string $country_of_birth The applicant’s country of birth
     * @return $this
     */
    public function setCountryOfBirth($country_of_birth)
    {
        $this->container['country_of_birth'] = $country_of_birth;

        return $this;
    }

    /**
     * Gets town_of_birth
     * @return string
     */
    public function getTownOfBirth()
    {
        return $this->container['town_of_birth'];
    }

    /**
     * Sets town_of_birth
     * @param string $town_of_birth The applicant’s town of birth
     * @return $this
     */
    public function setTownOfBirth($town_of_birth)
    {
        $this->container['town_of_birth'] = $town_of_birth;

        return $this;
    }

    /**
     * Gets previous_last_name
     * @return string
     */
    public function getPreviousLastName()
    {
        return $this->container['previous_last_name'];
    }

    /**
     * Sets previous_last_name
     * @param string $previous_last_name The applicant’s previous last name
     * @return $this
     */
    public function setPreviousLastName($previous_last_name)
    {
        $this->container['previous_last_name'] = $previous_last_name;

        return $this;
    }

    /**
     * Gets addresses
     * @return \Onfido\Models\Address[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     * @param \Onfido\Models\Address[] $addresses
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets id_numbers
     * @return \Onfido\Models\IdNumber[]
     */
    public function getIdNumbers()
    {
        return $this->container['id_numbers'];
    }

    /**
     * Sets id_numbers
     * @param \Onfido\Models\IdNumber[] $id_numbers
     * @return $this
     */
    public function setIdNumbers($id_numbers)
    {
        $this->container['id_numbers'] = $id_numbers;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Onfido\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Onfido\ObjectSerializer::sanitizeForSerialization($this));
    }
}
