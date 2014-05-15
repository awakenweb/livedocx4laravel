<?php

return [
    /*
      |--------------------------------------------------------------------------
      | WSDL to connecto to livedocx
      |--------------------------------------------------------------------------
      |
      | This option controls the WSDL that will be used when creating the
      | SoapClient and connecting to Livedocx. Default is free version of
      | Livedocx
      |
     */
    'wsdl'     => 'https://api.livedocx.com/2.1/mailmerge.asmx?wsdl',
    /*
      |--------------------------------------------------------------------------
      | Username used for Livedocx authentication
      |--------------------------------------------------------------------------
     */
    'username' => 'your username',
    /*
      |--------------------------------------------------------------------------
      | Password used for Livedocx authentication
      |--------------------------------------------------------------------------
     */
    'password' => 'your password'
];
