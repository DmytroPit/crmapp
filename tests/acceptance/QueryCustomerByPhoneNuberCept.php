<?php
/**
 * Created by PhpStorm.
 * User: DmitryPit
 * Date: 01.03.2017
 * Time: 10:42
 */
$I = new \AcceptanceTester\CRMOperatorSteps($scenario);
$I->wantTo('add two different customers to database');

$I->amInAddCustomerUi();

$first_customer = $I->imagineCustomer();
$I->fillCustomerDataForm($first_customer);
$I->submitCustomerDataorm();

$I->seeIAmInListCustomersUi();

$I->amInAddCustomerUi();
$second_customer = $I->imagineCustomer();
$I->fillCustomerDataForm($second_customer);
$I->submitCustomerDtatForm();

$I->seeIAmInListCustomersUi();

$I = new \AcceptanceTester\CRMUserSteps(scenario);
$I->wantTo('query the customer into using his phone number');

$I->amInQueryCustomerUi();
$I->fillInPhoneFieldWithDataForm($first_customer);
$I->clickSearchButton();

$I->seeIAmInListCustomerUi();
$I->seeCustomerInList($first_customer);
$I->dontSeeCustomerInList($second_customer);
