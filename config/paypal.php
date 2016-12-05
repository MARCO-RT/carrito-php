<?php
return array(
    // set your paypal credential
    'client_id' => 'AUGHRqknFLgwdyATtXNotlrpqcTd1OUZdINthYL5jKHRLEYWSCo3RbHdsrtDku0Bk3-7D6h91cCztnGl',
    'secret' => 'EOVoBpTTwTzzjH0lRrOu-aMoc7q6K5u3q9dtEAiZMtkZ-u-n0OIwflj69RWgGXLvZVhMb62_ZnJmsbTl',



    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);