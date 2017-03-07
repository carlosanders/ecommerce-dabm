<?php
/**
 * Created by PhpStorm.
 * User: carlosanders
 * Date: 24/02/17
 * Time: 17:45
 */

namespace App\Support\Faker;

use Faker\Provider\pt_BR\Person;

class Pessoa extends Person
{
    protected static $titleMale = [];

    protected static $titleFemale = [];
}
