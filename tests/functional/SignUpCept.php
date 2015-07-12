<?php

$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('perform actions and see result');

$I->amOnPage('/');
$I->click('Sign Up');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username:', 'Max');
$I->fillField('Email:', 'max@gmail.com');
$I->fillField('Password:', 'demo');
$I->fillField('Password Confirmation:', 'demo');
$I->click('Sign Up');

$I->seeCurrentUrlEquals('');
$I->see('Welcome to DevBook!');

