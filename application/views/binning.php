        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                                <form action="<?php echo base_url('binner/add_data'); ?>" method="POST">
                                    <!-- Form Element sizes -->
                                    <div class="box box-success">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Scanner Upn</label>
                                                <input type="text" class="form-control" placeholder="No Teransfer" name="scanner_upn" value="<?php echo $sections[0]['scanner_lot'] ?>"  readonly/>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Name Series</label>
                                                <input type="text" class="form-control" id="uid" name="nameseries" placeholder="Name Series" value="<?php echo $sections[0]['series'] ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Binner</label>
                                                <input type="text" class="form-control" id="uid" name="binner"  placeholder="Binner" required>
                                            </div>
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                    <!-- general form elements -->

                                    <div class="box box-primary">
                                        <?php foreach ($sections as $key => $value) {?>
                                            <?php for ($i=0; $i < $value['qty'] ; $i++) { ?>
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Ref/Upn</label>
                                                <input type="text" class="form-control" id="ref-upn" name="ref-upn[]" value="<?php echo $value['ref_upn']?>" readonly>
                                            </div>    
                                        </div>
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Lot No</label>
                                                <input type="text" class="form-control" id="lot-no" name="lot-no[]" value="<?php echo $value['lot_no'] ?>" readonly>
                                            </div>                                                     
                                         </div>
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Qty</label>
                                                <input type="number" class="form-control" id="qty" name="qty[]" value="1" required readonly>
                                            </div>    
                                         </div>
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Rack</label>
                                                <input type="text" class="form-control" id="rack" name="rack[]" >
                                            </div>    
                                        </div>
                                            
                                            <?php } ?>      
                                        <?php } ?>
                                        <input type="text" class="form-control" id="rack" name="Status" value="Done">
                                                                       
                                     </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->    


                        </div><!--/.col (left) -->
                        <!-- right column -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
