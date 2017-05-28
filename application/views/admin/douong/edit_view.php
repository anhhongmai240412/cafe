<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <?php echo validation_errors(); ?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
            $att = array('role' => 'form');
            echo form_open('', $att);
            ?>
            <div class="box-body">
                <div class="form-group<?php echo (form_error('douong')) ? 'has-error' : ''; ?>">
                    <label>Đồ uống</label>
                    <input type="text" class="form-control" placeholder="Nhập đồ uống" name="douong"
                           value="<?php echo set_value('douong', $ban['douong']); ?>">
                </div>
                <div class="form-group<?php echo (form_error('dongia')) ? 'has-error' : ''; ?>">
                    <label>Đơn giá</label>
                    <input type="text" class="form-control" placeholder="Nhập đơn giá" name="dongia"
                           value="<?php echo set_value('dongia', $ban['dongia']); ?>">
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" name="submit" value="Xác nhận" class="btn btn-primary">
            </div>
            <?php echo form_close(); ?>
        </div>
        <!-- /.box -->
    </div>
    <!--/.col (left) -->
</div>
<!-- /.row -->