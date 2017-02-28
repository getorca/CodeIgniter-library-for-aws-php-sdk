<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
 * AWS Config variables
 * 
 */
$config['aws_credentials'] = [
    'version'     => 'latest',
    'region'      => 'YOUR_REGION',
    'credentials' => [
        'key'    => 'YOUR_KEY',
        'secret' => 'YOUR_SECRET'
    ]
]; 

/*
 * AWS Prefix  - can be used for DynamoDB and S3
 */
$config['aws_prefix'] = 'YOUR_PREFIX';
