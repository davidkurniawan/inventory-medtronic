
        <div class="wrapper row-offcanvas row-offcanvas-left">

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Invetory page
                        <small>Inventory</small>
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
                                    <?php if ($inventory_aktif == "rack_inventory"): ?>
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Qty</th>
                                                <th>Rack</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($qty_rack as $key => $value) {?>
                                            <tr>
                                                <td><?php echo $value['inventory_rack'] ?></td>
                                                <td><?php echo $rack[$key]['rack'] ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Qty</th>
                                                <th>Rack</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <?php endif ?>
                                    <?php if ($inventory_aktif == "inventory"): ?>
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name Series</th>
                                                <th>ScannerUpn</th>
                                                <th>Ref/Upn</th>
                                                <th>Qty</th>
                                                <th>Rack</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($inventory as $value) { ?>
                                            <tr>
                                                <td><?php echo $value['series'] ?></td>
                                                <td><?php echo $value['scanner_upn'] ?></td>
                                                <td><?php echo $value['ref_upn'] ?></td>
                                                <td><?php echo $value['qty'] ?></td>
                                                <td><?php echo $value['rack'] ?></td>
                                                <td><?php echo $value['tgl_input'] ?></td>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name Series</th>
                                                <th>ScannerUpn</th>
                                                <th>Ref/Upn</th>
                                                <th>Qty</th>
                                                <th>Rack</th>
                                                <th>Date</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <?php endif ?>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->