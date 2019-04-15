<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?= base_url("update-student/$student_info->id") ?>" method="POST">
                <fieldset>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Student Name </label>
                    <div class="controls">
                        <input type="text" class="span6 typeahead" id="typeahead" value="<?= $student_info->name ?>" name="student_name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Student Phone </label>
                    <div class="controls">
                        <input type="text" class="span6 typeahead"  value="<?= $student_info->phone ?>" id="typeahead" name="student_phone">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Student Roll </label>
                    <div class="controls">
                        <input type="number" class="span6 typeahead"  value="<?= $student_info->roll ?>" id="typeahead" name="student_roll">
                    </div>
                </div>
                

                <!-- <div class="control-group">
                    <label class="control-label" for="fileInput">File input</label>
                    <div class="controls">
                    <input class="input-file uniform_on" id="fileInput" type="file">
                    </div>
                </div>           -->
                
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update Student</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

    </div><!--/row-->