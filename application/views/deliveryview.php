        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
           
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Delivery View
                        <small>Preview</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            
                                    <!-- Form Element sizes -->
                                    <div class="box box-success">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>No Transfer</label>
                                                <input type="text" class="form-control" id="no_transfer" name="no_transfer" value="<?php echo $datadelivery[0]['no_transfer'] ?>" readonly/>
                                            </div>
                                            <div class="form-group">
                                                <label>Scanner UPN</label>
                                                <input type="text" class="form-control" id="scanner_upn" name="scanner_upn" placeholder="Scanner UPN" value="<?php echo $datadelivery[0]['scanner_upn'] ?>" readonly/>
                                            </div>
                                            <div class="form-group">
                                                <label>Admin</label>
                                                <input type="text" class="form-control" id="scanner_upn" name="scanner_upn" placeholder="Scanner UPN" value="<?php echo $datadelivery[0]['admin'] ?>" readonly/>
                                            </div>
                                            <div class="form-group">
                                                <label>Scanner</label>
                                                <input type="text" class="form-control" id="scanner_upn" name="scanner_upn" placeholder="Scanner UPN" value="<?php echo $datadelivery[0]['deliveryto'] ?>" readonly/>
                                            </div>
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                
                                    <!-- general form elements -->
                                    <div class="box box-primary">
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Picking</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" id="tablepicking">
                                    <table id="tablepicking" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Series</th>
                                                <th>Ref/Upn</th>
                                                <th>Lot No</th>
                                                <th>QTY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1 ;foreach ($datadelivery as $key => $value) { ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $value['series'] ?></td>
                                                <td><?php echo $value['ref_upn'] ?></td>
                                                <td><?php echo $value['lot_no'] ?></td>
                                                <td><?php echo $value['qty'] ?></td>
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
