
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Binner Tables
                        <small>Binner tables preview</small>
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data On Binner</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name Series</th>
                                                <th>ScannerUpn</th>
                                                <th>Upn</th>
                                                <th>Lot No</th>
                                                <th>Date</th>
                                                <th>Binner</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; foreach ($databinner as $value) { ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $value['series'] ?></td>
                                                <td><?php echo $value['scanner_lot'] ?></td>
                                                <td><?php echo $value['ref_upn'] ?></td>
                                                <td><?php echo $value['lot_no'] ?></td>
                                                <td><?php echo $value['tgl_masuk'] ?></td>
                                                <td><?php echo $value['pickup_name'] ?></td>
                                                <?php if (empty($value['status'])){ ?>
                                                <td>
                                                    <a href="<?php echo base_url('binner/binning/'.$value['id']) ?>" class="btn btn-primary btn-sm">Proggres</a>
                                                </td>   
                                                <?php } else { ?>
                                                <td>
                                                    <a href="<?php echo base_url('binner/binner_view/'.$value['scanner_lot']) ?>" class="btn btn-primary btn-sm">View</a>
                                                </td>
                                                <?php } ?>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                            
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->