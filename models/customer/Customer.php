<?php
/**
 * Created by PhpStorm.
 * User: DmitryPit
 * Date: 01.03.2017
 * Time: 12:46
 */
namespace app\models\customer;

use Faker\Provider\PhoneNumber;

class Customer {
    /** @var string */
    public $name;

    /** @var \DateTime */
    public $birth_date;

    /** @var string */
    public $notes = '';

    /** @var PhoneNumber[] */
    public $phones = [];

    public function __construct($name, $birth_date)
    {
        $this->name = $name;
        $this->birth_date = $birth_date;
    }
}