<?php
namespace FactoryMethod;

/**
 * Class SmsSender
 * @package FactoryMethod
 */
class SmsSender implements ISender
{
    /**
     * send a sms
     */
    public function send()
    {
        echo 'send a sms ' , PHP_EOL;
    }
}