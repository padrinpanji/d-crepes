<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function getOneRecord($table_name = '', $where = '', $order_by = '') {
    $CI = &get_instance();
    $CI->db->from($table_name)->where($where)->limit(1);
    
    if ($order_by != '') $CI->db->order_by($order_by);
    
    $result = $CI->db->get();
    return $result->row();
}

function theQuery($table_name = '', $where = '', $total_rows = '', $order_by = '') {
    $CI = &get_instance();
    $CI->db->from($table_name);
    if (is_array($where)) {
        foreach ($where as $key => $value) {
            $CI->db->where($key, $value);
        }
    } else {
        $CI->db->where($where);
    }
    if ($order_by != '') $CI->db->order_by($order_by);
    
    $result = $CI->db->get();
    
    if ($total_rows == '') {
        return $result->result_array();
    } else {
        return $result->num_rows();
    }
}


#available : success, info, error, block
function notification($type = '', $content = '', $admin = '') {
    if (!empty($type)) {
        $type = 'alert-' . $type;
    }

    if ($admin == '') {
        return '
            <div class="alert ' . $type . '">
                <button class="close" data-dismiss="alert" type="button">x</button>
                ' . $content . '
            </div>';
    } else {
        return "<div class='$type'>$content</div>";
    }
}
