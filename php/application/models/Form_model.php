<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: ahpeth
 * Date: 4/5/15
 * Time: 3:26 PM
 */
class Form_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    function SaveForm($form_data)
    {
        $this->db->insert('Application', $form_data);
        if ($this->db->affected_rows() == '1')
        {
            return TRUE;
        }
        return FALSE;
    }
}
?>