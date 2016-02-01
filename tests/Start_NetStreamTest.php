<?php

class Start_NetStreamTest extends \PHPUnit_Framework_TestCase
{
    function setUp()
    {
        Start::setApiKey('test_sec_k_2b99b969196bece8fa7fd');
    }

    function testSuccess()
    {
        $data = array(
            "amount" => 1050,
            "currency" => "usd",
            "email" => "ahmed@example.com",
            "card" => array(
                "number" => "4242424242424242",
                "exp_month" => 11,
                "exp_year" => 2020,
                "cvc" => "123"
            ),
            "description" => "Stream Test"
        );

        $result = Start_Net_Stream::make_request('charge', $data);

        print_r($result);
    }

    function testException()
    {
        $data = array();

        $result = Start_Net_Stream::make_request('exception', $data);

        print_r($result);
    }
}
