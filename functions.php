<?php

function processRecentBricks()
{
    $lineNo = 1;
    $firstName = $_SERVER['WEBAUTH_LDAP_GIVENNAME'];
    $lastName = $_SERVER['WEBAUTH_LDAP_SN'];
    $username = $_SERVER['WEBAUTH_USER'];
    echo "<tr><td>$lineNo</td><td>$firstName</td><td>$lastName</td><td>$username</td></tr>";
}


?>