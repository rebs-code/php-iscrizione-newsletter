<?php

function isEmailValid($email)
{
    if (empty($email) || (strpos($email, '@') === false || strpos($email, '.') === false)) {
        echo "<div class='alert alert-danger' role='alert'>
               Insert a valid email address
                    </div>";
    } else {
        echo "<div class='alert alert-success' role='alert'> Email is valid </div>";
    }
}
