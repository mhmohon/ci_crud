<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Full Name</th>
                        <th>Phone number</th>
                        <th>Roll</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>

                <?php 
                    foreach($all_students as $key=>$student):
                ?>
                <tr>
                    <td><?= $key+1 ?></td>
                    <td><?= $student->name ?></td>
                    <td class="center"><?= $student->phone ?></td>
                    <td class="center"><?= $student->roll ?></td>
                    <td class="center">
                        <span class="label label-warning">Pending</span>
                    </td>
                    <td class="center">
                        
                        <a class="btn btn-info" href="<?= base_url("edit-student/$student->id")?>">
                            <i class="halflings-icon white edit"></i>                                            
                        </a>
                        <a class="btn btn-danger" href="#">
                            <i class="halflings-icon white trash"></i> 
                            
                        </a>
                    </td>
                </tr>

                <?php endforeach; ?>

                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->