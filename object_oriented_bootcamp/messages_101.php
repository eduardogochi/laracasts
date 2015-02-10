<?php

use Acme\Users\Person;
use Acme\Staff;
use Acme\Business;

$eduardo = new Person('Eduardo Gochi');

$staff = new Staff([$eduardo]);

$laracasts = new Business($staff);

$laracasts->hire(new Person('Abraham Renteria'));

var_dump($laracasts->getStaffMembers());