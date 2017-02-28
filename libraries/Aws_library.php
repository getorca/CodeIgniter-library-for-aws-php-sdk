<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Aws_library {   
    
    public function __construct() {
        
        // Make instance of CodeIgniter to use its resources
        $CI = & get_instance();
        
        $CI->config->load('aws');

        // Load data into CodeIgniter
        $CI->aws = new Aws\Sdk($CI->config->item('aws_credentials'));
        
        // Load the prefix
        $CI->aws_prefix = $CI->config->item('aws_prefix');


        
    }             
    
}
