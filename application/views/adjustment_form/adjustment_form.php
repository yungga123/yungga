<?php
defined('BASEPATH') or die('Access Denied');
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="text-center">MIS ADJUSTMENT REQUEST</h1>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">

                            <?php echo form_open('adjustment_submit') ?>
                            <div class="form-group">
                                <label for="date_request">Date Request</label>
                                <input type="date" name="date_request" id="date_request" class="form-control" placeholder="" value="<?php echo ($this->input->post('date_request')=="") ? date("Y-m-d") : set_value('date_request') ?>">
                                <?php echo form_error('date_request','<span class="text-danger">','</span>') ?>
                            </div>

                            <div class="form-group">
                                <label for="requestor">Your Name</label>
                                <input type="text" name="requestor" id="requestor" class="form-control" placeholder="" value="<?php echo set_value('requestor') ?>">
                                <?php echo form_error('requestor','<span class="text-danger">','</span>') ?>
                            </div>

                            <div class="form-group">
                                <label for="concerned_problem">Concerned Problem</label>
                                <textarea cols="3" name="concerned_problem" id="concerned_problem" class="form-control" placeholder=""><?php echo set_value('concerned_problem') ?></textarea>
                                <?php echo form_error('concerned_problem','<span class="text-danger">','</span>') ?>
                            </div>

                            <div class="form-group">
                                <label for="requested_solution">Requested Solution</label>
                                <textarea cols="3" name="requested_solution" id="requested_solution" class="form-control" placeholder=""><?php echo set_value('requested_solution') ?></textarea>
                                <?php echo form_error('requested_solution','<span class="text-danger">','</span>') ?>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="approved_by">Must be approved by</label>
                                <input type="text" name="approved_by" id="approved_by" class="form-control" placeholder="" value="<?php echo ($this->input->post('approved_by')=="") ? "Reynan Jardin" : set_value('approved_by') ?>">
                                <?php echo form_error('approved_by','<span class="text-danger">','</span>') ?>
                            </div>

                            <div class="form-group">
                                <label for="accepted_by">Accepted By</label>
                                <input type="text" name="accepted_by" id="accepted_by" class="form-control" placeholder="" value="<?php echo ($this->input->post('accepted_by')=="") ? "Marvin Lucas" : set_value('accepted_by') ?>">
                                <?php echo form_error('accepted_by','<span class="text-danger">','</span>') ?>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" name="status" id="status" class="form-control" placeholder="" value="Pending" readonly value="<?php echo set_value('status') ?>">
                                <?php echo form_error('status','<span class="text-danger">','</span>') ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="<?php echo site_url('adjustment_tables') ?>" class="btn btn-warning font-weight-bold"><i class="fas fa-table"></i> ADJUSTMENT FORM LIST</a>
                    <button type="submit" class="btn btn-success font-weight-bold float-right"><i class="fas fa-check"></i> SUBMIT</button>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>