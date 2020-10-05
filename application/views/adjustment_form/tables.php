<?php 
defined('BASEPATH') or die('Access Denied');
?>

<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-sm-8 offset-sm-2">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Form No.</th>
                                    <th>Date Requested</th>
                                    <th>Requestor</th>
                                    <th>Concerned Problem</th>
                                    <th>Requested Solution</th>
                                    <th>Approved By</th>
                                    <th>Accepted By</th>
                                    <th>Status</th>
                                    <th width="13%">Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($results->result() as $row) { ?>
                                    <tr>
                                        <td><?php echo $row->id ?></td>
                                        <td><?php echo $row->date ?></td>
                                        <td><?php echo $row->requestor ?></td>
                                        <td><?php echo $row->concerned_problem ?></td>
                                        <td><?php echo $row->requested_solution ?></td>
                                        <td><?php echo $row->approved_by ?></td>
                                        <td><?php echo $row->accepted_by ?></td>
                                        <td><?php echo $row->status ?></td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm font-weight-bold btn-block"><i class="fas fa-trash"></i> DELETE</button>
                                            <button type="button" class="btn btn-warning btn-sm font-weight-bold btn-block"><i class="fas fa-edit"></i> EDIT</button>
                                            <button type="button" class="btn btn-success btn-sm font-weight-bold btn-block"><i class="fas fa-check"></i> ACCEPT</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="<?php echo site_url('') ?>" class="btn btn-success font-weight-bold">MIS ADJUSTMENT FORM</a>
                </div>
            </div>
            
        </div>
    </div>
</div>