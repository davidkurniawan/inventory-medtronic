        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Pickers Tables
                        <small>advanced tables</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Pickers</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example3" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>No Transfer</th>
                                                <th>Scanner UPN</th>
                                                <th>QTY</th>
                                                <th>Status</th>
                                                <th>Tanggal DiBuat</th>
                                                <th>Picker</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; foreach  ($datapicker as $key => $scannerupn) { ?>
                                               <?php foreach ($scannerupn as $key => $value) { ?>
                                                   
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $value['no_transfer']   ?> </td>
                                                <td><?php echo $value['scanner_upn']  ?></td>
                                                <td><?php echo $value['qty'] ?></td>
                                                <td><?php echo $value['status'] ?></td>
                                                <td><?php echo $value['tgl_input']; ?></td>
                                                <td><?php echo $value['picker'] ?></td>
                                                <?php if ($value['status'] == 'PROGRESS'): ?>
                                                <td>
                                                    <a href="<?php echo base_url('pickers/picking/'.$value['no_transfer']) ?>" class="btn btn-primary btn-sm">Process</a>
                                                </td>
                                                <?php endif ?>
                                                <?php if ($value['status'] == 'DONE'): ?>
                                                <td>
                                                    <a href="<?php echo base_url('pickers/pickingview/'.$value['no_transfer']) ?>" class="btn btn-primary btn-sm">View</a>
                                                </td>
                                                <?php endif ?>
                                            </tr>
                                               <?php } ?>
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
