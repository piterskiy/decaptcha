<?php

/**
 * Class AnticaptchaTest.
 */
class AnticaptchaTest extends PHPUnit_Framework_TestCase
{
    public function testRecoznixe()
    {
        $captcha = new \jumper423\decaptcha\services\Anticaptcha([
            \jumper423\decaptcha\services\Anticaptcha::PARAM_SPEC_API_KEY => '5464654645646',
        ]);
        $captcha->setErrorLang(\jumper423\decaptcha\core\DeCaptchaErrors::LANG_RU);
        if ($captcha->recognize(__DIR__ . '/data/Captcha.jpg')) {
            $this->assertEquals('11111111111111', $captcha->getCode());
        } else {
            $this->assertEquals('Нулевой либо отрицательный баланс', $captcha->getError());
        }
    }
}
