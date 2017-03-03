<?php

class servicePost_unisender implements iServicePost_SMS {

    public function sms($phone, $message) {
        echo "SEND '$message' TO '$phone'";
        return true;
    }

}