<?php
// DO NOT EDIT! Generated by Protobuf for PHP protoc plugin @package_version@
// Source: addressbook.proto
//   Date: 2011-04-12 12:31:48

namespace tests {

  class Person extends \DrSlump\Protobuf\Message {

    /** @var \DrSlump\Protobuf\Descriptor */
    protected static $__descriptor;
    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor(\DrSlump\Protobuf\Descriptor $descriptor = NULL)
    {
      if (NULL !== $descriptor) {
        self::$__descriptor = $descriptor;
        return self::$__descriptor;
      }

      if (!self::$__descriptor) {
        $descriptor = new \DrSlump\Protobuf\Descriptor("\tests\Person");

        // required  name = 1
        $f = new \DrSlump\Protobuf\Field();
        $f->number    = 1;
        $f->name      = "name";
        $f->type      = 9;
        $f->rule      = 2;
        $descriptor->addField($f);

        // required  id = 2
        $f = new \DrSlump\Protobuf\Field();
        $f->number    = 2;
        $f->name      = "id";
        $f->type      = 5;
        $f->rule      = 2;
        $descriptor->addField($f);

        // optional  email = 3
        $f = new \DrSlump\Protobuf\Field();
        $f->number    = 3;
        $f->name      = "email";
        $f->type      = 9;
        $f->rule      = 1;
        $descriptor->addField($f);

        // repeated .tests.Person.PhoneNumber phone = 4
        $f = new \DrSlump\Protobuf\Field();
        $f->number    = 4;
        $f->name      = "phone";
        $f->type      = 11;
        $f->rule      = 3;
        $f->reference = "\tests\Person\PhoneNumber";
        $descriptor->addField($f);

        foreach (self::$__extensions as $cb) {
          $descriptor->addField($cb(), true);
        }

        self::$__descriptor = $descriptor;
      }

      return self::$__descriptor;
    }

    /** @var string */
    public $name = null;
    
    /** @var int */
    public $id = null;
    
    /** @var string */
    public $email = null;
    
    /** @var \tests\Person\PhoneNumber[] */
    public $phone = array();
    

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \tests\Person
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \tests\Person
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <id> value
     *
     * @return \tests\Person
     */
    public function clearId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <id> value
     *
     * @return int
     */
    public function getId(){
      return $this->_get(2);
    }
    
    /**
     * Set <id> value
     *
     * @param int $value
     * @return \tests\Person
     */
    public function setId( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <email> has a value
     *
     * @return boolean
     */
    public function hasEmail(){
      return $this->_has(3);
    }
    
    /**
     * Clear <email> value
     *
     * @return \tests\Person
     */
    public function clearEmail(){
      return $this->_clear(3);
    }
    
    /**
     * Get <email> value
     *
     * @return string
     */
    public function getEmail(){
      return $this->_get(3);
    }
    
    /**
     * Set <email> value
     *
     * @param string $value
     * @return \tests\Person
     */
    public function setEmail( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <phone> has a value
     *
     * @return boolean
     */
    public function hasPhone(){
      return $this->_has(4);
    }
    
    /**
     * Clear <phone> value
     *
     * @return \tests\Person
     */
    public function clearPhone(){
      return $this->_clear(4);
    }
    
    /**
     * Get <phone> value
     *
     * @param int $idx
     * @return \tests\Person\PhoneNumber
     */
    public function getPhone($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <phone> value
     *
     * @param \tests\Person\PhoneNumber $value
     * @return \tests\Person
     */
    public function setPhone(\tests\Person\PhoneNumber $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <phone>
     *
     * @return \tests\Person\PhoneNumber[]
     */
    public function getPhoneList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <phone>
     *
     * @param \tests\Person\PhoneNumber $value
     * @return \tests\Person
     */
    public function addPhone(\tests\Person\PhoneNumber $value){
     return $this->_add(4, $value);
    }
    
  }
}

namespace tests\Person {

  class PhoneType {
    const MOBILE = 0;
    const HOME = 1;
    const WORK = 2;
  }
}

namespace tests\Person {

  class PhoneNumber extends \DrSlump\Protobuf\Message {

    /** @var \DrSlump\Protobuf\Descriptor */
    protected static $__descriptor;
    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor(\DrSlump\Protobuf\Descriptor $descriptor = NULL)
    {
      if (NULL !== $descriptor) {
        self::$__descriptor = $descriptor;
        return self::$__descriptor;
      }

      if (!self::$__descriptor) {
        $descriptor = new \DrSlump\Protobuf\Descriptor("\tests\Person\PhoneNumber");

        // required  number = 1
        $f = new \DrSlump\Protobuf\Field();
        $f->number    = 1;
        $f->name      = "number";
        $f->type      = 9;
        $f->rule      = 2;
        $descriptor->addField($f);

        // optional .tests.Person.PhoneType type = 2
        $f = new \DrSlump\Protobuf\Field();
        $f->number    = 2;
        $f->name      = "type";
        $f->type      = 14;
        $f->rule      = 1;
        $f->reference = "\tests\Person\PhoneType";
        $f->default   = \tests\Person\PhoneType::HOME;
        $descriptor->addField($f);

        foreach (self::$__extensions as $cb) {
          $descriptor->addField($cb(), true);
        }

        self::$__descriptor = $descriptor;
      }

      return self::$__descriptor;
    }

    /** @var string */
    public $number = null;
    
    /** @var int - \tests\Person\PhoneType */
    public $type = \tests\Person\PhoneType::HOME;
    

    /**
     * Check if <number> has a value
     *
     * @return boolean
     */
    public function hasNumber(){
      return $this->_has(1);
    }
    
    /**
     * Clear <number> value
     *
     * @return \tests\Person\PhoneNumber
     */
    public function clearNumber(){
      return $this->_clear(1);
    }
    
    /**
     * Get <number> value
     *
     * @return string
     */
    public function getNumber(){
      return $this->_get(1);
    }
    
    /**
     * Set <number> value
     *
     * @param string $value
     * @return \tests\Person\PhoneNumber
     */
    public function setNumber( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(2);
    }
    
    /**
     * Clear <type> value
     *
     * @return \tests\Person\PhoneNumber
     */
    public function clearType(){
      return $this->_clear(2);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \tests\Person\PhoneType
     */
    public function getType(){
      return $this->_get(2);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \tests\Person\PhoneType $value
     * @return \tests\Person\PhoneNumber
     */
    public function setType( $value){
      return $this->_set(2, $value);
    }
    
  }
}

namespace tests {

  class AddressBook extends \DrSlump\Protobuf\Message {

    /** @var \DrSlump\Protobuf\Descriptor */
    protected static $__descriptor;
    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor(\DrSlump\Protobuf\Descriptor $descriptor = NULL)
    {
      if (NULL !== $descriptor) {
        self::$__descriptor = $descriptor;
        return self::$__descriptor;
      }

      if (!self::$__descriptor) {
        $descriptor = new \DrSlump\Protobuf\Descriptor("\tests\AddressBook");

        // repeated .tests.Person person = 1
        $f = new \DrSlump\Protobuf\Field();
        $f->number    = 1;
        $f->name      = "person";
        $f->type      = 11;
        $f->rule      = 3;
        $f->reference = "\tests\Person";
        $descriptor->addField($f);

        foreach (self::$__extensions as $cb) {
          $descriptor->addField($cb(), true);
        }

        self::$__descriptor = $descriptor;
      }

      return self::$__descriptor;
    }

    /** @var \tests\Person[] */
    public $person = array();
    

    /**
     * Check if <person> has a value
     *
     * @return boolean
     */
    public function hasPerson(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person> value
     *
     * @return \tests\AddressBook
     */
    public function clearPerson(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person> value
     *
     * @param int $idx
     * @return \tests\Person
     */
    public function getPerson($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <person> value
     *
     * @param \tests\Person $value
     * @return \tests\AddressBook
     */
    public function setPerson(\tests\Person $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <person>
     *
     * @return \tests\Person[]
     */
    public function getPersonList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <person>
     *
     * @param \tests\Person $value
     * @return \tests\AddressBook
     */
    public function addPerson(\tests\Person $value){
     return $this->_add(1, $value);
    }
    
  }
}
