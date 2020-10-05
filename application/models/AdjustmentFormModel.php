<?php 
defined('BASEPATH') or die('Access Denied');


class AdjustmentFormModel extends CI_Model {
    public function insert($data) {
        $this->db->insert('mis_adjustments',$data);
    }

    public function select_all() {
        $this->db->order_by('id','DESC');
        return $this->db->get('mis_adjustments');
    }
}