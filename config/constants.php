<?php

$myCurrentAge = (new DateTime())->diff(
    new DateTime('2003-01-15')
)->y;

return [
    'MY_EMAIL_ADDRESS' => 'hollibene@gmail.com',
    'MY_FULL_NAME' => 'Benedikt Hollerauer',
    'MY_NICK_NAME' => 'Bene',
    'MY_CURRENT_AGE' => $myCurrentAge,
    'MY_CURRENT_WORKPLACE' => 'boerse.de Group AG',
    'MY_CURRENT_WORKPLACE_LINK' => 'https://www.boerse-group.de/'
];