<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model {
    
    function _construct() {
        parent::_construct();
    }

    function test($data) {
        return 'aaaa '.$data;
    }
}

?>