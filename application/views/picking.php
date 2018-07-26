        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
           
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        General Form Elements
                        <small>Preview</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">General Elements</li>
                    </ol>
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
                                                <label>Scanner UPN</label>
                                                <input type="text" class="form-control" id="scanner_upn" name="scanner_upn" placeholder="Scanner UPN" value="<?php echo $datadelivery[0]['scanner_upn'] ?>" readonly/>
                                            </div>
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                    <div class="box box-success">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Admin</label>
                                                <input type="text" class="form-control" id="nama_admin" name="nama_admin" placeholder="Nama Admin" required/>
                                                <p>*Yang Memproses Pengiriman</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Di Tujukan</label>
                                                <input type="text" class="form-control" id="ditujukan" name="ditujukan" placeholder="Eksepedisi Atau Sales" required/>
                                            </div>
                                            <div class="form-group">
                                                <label>No Transfer Delivery</label>
                                                <input type="text" class="form-control" id="no_transdeli" name="no_transdeli" placeholder="Eksepedisi Atau Sales" required/>
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
                                    <h3 class="box-title">Data On Picking</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="tablepicking" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Series</th>
                                                <th>Ref/Upn</th>
                                                <th>Lot No</th>
                                                <th>QTY</th>
                                                <th>Rack</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($datadelivery as $key => $value) { ?>
                                            <tr>
                                                <td><?php echo $value['series'] ?></td>
                                                <td><?php echo $value['ref_upn'] ?></td>
                                                <td><?php echo $value['lot_no'] ?></td>
                                                <td><?php echo $value['qty'] ?></td>
                                                <td><?php echo $value['rack'] ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Series</th>
                                                <th>Ref/Upn</th>
                                                <th>Lot No</th>
                                                <th>QTY</th>
                                                <th>Rack</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                            
                            <button style="float: right;" onclick="sendpicking()" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </div>

                </section><!-- /.content -->
