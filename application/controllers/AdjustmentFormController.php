<?php 
defined('BASEPATH') or die('Access Denied');

class AdjustmentFormController extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdjustmentFormModel');
    }

    function validation_rules() {
        $rules = [
            [
                'field' => 'date_request',
                'label' => 'Date Request',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'requestor',
                'label' => 'Your Name',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'concerned_problem',
                'label' => 'Concerned Problem',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'requested_solution',
                'label' => 'Requested Solution',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'approved_by',
                'label' => 'Must be approved by',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'accepted_by',
                'label' => 'Accepted By',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'status',
                'label' => 'Status',
                'rules' => 'trim|required'
            ]
        ];

        return $rules;
    }

    public function index() {
        $data = [
            'title' => 'MIS Adjustment Request'
        ];
        $this->load->view('templates/header',$data);
        $this->load->view('adjustment_form/adjustment_form');
        $this->load->view('templates/footer');
        $this->load->view('adjustment_form/script');
    }

    public function adjustment_form_validation() {

        $rules = $this->validation_rules();

        $rules = $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE)

        {

            $data = [
                'title' => 'MIS Adjustment Request'
            ];
            $this->load->view('templates/header',$data);
            $this->load->view('adjustment_form/adjustment_form');
            $this->load->view('templates/footer');
            $this->load->view('adjustment_form/script');

        }
        else
        {
            $data = [
                'title' => 'Success!!!'
            ];

            $inputs = [
                'date' => $this->input->post('date_request'),
                'requestor' => $this->input->post('requestor'),
                'concerned_problem' => $this->input->post('concerned_problem'),
                'requested_solution' => $this->input->post('requested_solution'),
                'approved_by' => $this->input->post('approved_by'),
                'accepted_by' => $this->input->post('accepted_by'),
                'status' => $this->input->post('status')
            ];

            $this->AdjustmentFormModel->insert($inputs);

            $this->load->view('templates/header',$data);
            $this->load->view('adjustment_form/success_page');
            $this->load->view('templates/footer');
            $this->load->view('adjustment_form/script');
        }

    }
    
}