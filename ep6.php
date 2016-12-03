<?php
/*
use autoload instead

require 'src/Person.php';
require 'src/Business.php';
require 'src/Staff.php';

*/

// create "empty" composer file {}
// run composer install

// If you upload autoload settings in composer.json
// update the autoload files:
// composer dump-autoload

// index.php for example would be required
require 'vendor/autoload.php';

use Acme\Person;
use Acme\Business;
use Acme\Staff;

// Main
$troy = new Person('Troy Scott');
$staff = new Staff([$troy]);
$biz = new Business($staff);
$biz->hire($troy);
$biz->hire((new Person('Chie Watanabe')));
var_dump($biz->getStaffMembers());
