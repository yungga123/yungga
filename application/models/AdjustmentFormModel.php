<?php 
defined('BASEPATH') or die('Access Denied');


class AdjustmentFormModel extends CI_Model {
    public function insert($data) {
        $this->db->insert('mis_adjustments',$data);
    }
}