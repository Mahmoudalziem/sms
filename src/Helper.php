<?php

if (! function_exists('sms')) {
    /**
     * Access SmsManager through helper.
     * @return \Azima\Sms\Sms
     */
    function sms()
    {
        return app('azima-sms');
    }
}
