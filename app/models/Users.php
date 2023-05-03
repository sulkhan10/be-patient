<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $name;
    /**
     *
     * @var string
     */
    public $sex;
    /**
     *
     * @var string
     */
    public $religion;
    /**
     *
     * @var string
     */
    public $phone;
    /**
     *
     * @var string
     */
    public $address;
    /**
     *
     * @var string
     */
    public $nik;

    /**
     *
    //  * @var string
     */
    // public $email;

    /**
     * Validations and business logic
     *
    //  * @return boolean
     */
    // public function validation()
    // {
    //     $validator = new Validation();

    //     $validator->add(
    //         'email',
    //         new EmailValidator(
    //             [
    //                 'model'   => $this,
    //                 'message' => 'Please enter a correct email address',
    //             ]
    //         )
    //     );

    //     return $this->validate($validator);
    // }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("patient");
        $this->setSource("users");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]|Users|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
     */
    public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    {
        return parent::findFirst($parameters);
    }

}
