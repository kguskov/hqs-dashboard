<?php
return [
    /*
     * Enable/disable logging
     */
    'enable' => false,

    /*
     * Filter out body fields which will never be logged.
     */
    'except' => [
        'password',
        'confirmation',
        'token'
    ],

];
