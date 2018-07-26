
        <div class="wrapper row-offcanvas row-offcanvas-left">

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Work Binner Tables
                        <small>View </small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-success">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Scanner UPN</label>
                                                <input type="text" class="form-control" placeholder="No Teransfer" id="no_transfer" value="<?php echo $sections[0]['scanner_upn'] ?>" readonly/>
                                            </div>
                                            <div class="form-group">
                                                <label>Series</label>
                                                <input type="text" class="form-control" placeholder="No Teransfer" value="<?php echo $sections[0]['series'] ?>" readonly/>
                                            </div>
                                            <div class="form-group">
                                                <label>Binner</label>
                                                <input type="text" class="form-control" value="<?php echo $sections[0]['binner'] ?>" readonly/>
                                            </div>
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                            <div class="box">
                                <div class="box-body table-responsive" id="tablepicking">
                                    <table id="tableexample" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Ref/Upn</th>
                                                <th>Lot No</th>
                                                <th>Rack</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;foreach ($sections as $key => $value) { ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $value['ref_upn'] ?></td>
                                                <td><?php echo $value['lot_no'] ?></td>
                                                <td><?php echo $value['rack'] ?></td> 
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                                <a href='javascript:printContent("tablepicking")' style="position: relative;top: -5px; right: -1000px;" class="btn btn-primary btn-sm" id='print_link'>Print</a>
                            </div><!-- /.box -->
                            
                            
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
