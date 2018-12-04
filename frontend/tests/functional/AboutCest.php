<?php
namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class AboutCest
{
    public function checkAbout(FunctionalTester $I)
    {
        $I->amOnRoute('user/about');
        $I->see('About', 'h1');
    }
}
