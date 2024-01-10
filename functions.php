<?php

function isEmailValid($email)
{
    if (empty($email) || (strpos($email, '@') === false || strpos($email, '.') === false)) {
        return false;
    } else {
        return true;
    }
}
