<?php


class FizzBuzzCest
{

    // tests
    public function homepageTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('FizzBuzz Magic');
        $I->fillField('integer', 3);
        $I->click('input[type="submit"]');
        $I->see('You get');
    }
}
