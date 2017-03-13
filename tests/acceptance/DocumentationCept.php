<?php

$I = new AcceptanceTester\CRMUserSteps($scenario);
$I->wantTo('see whether user documentation is accessible');

$I->amOnPage('/site/docs');
$I->see('Документация', 'h1');
$I->seeLargeBodyOfText();



