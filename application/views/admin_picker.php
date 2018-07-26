        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Admin Picker
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
                                        <div class="col-md-3">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label>Scanner Lot</label>
                                                    <input type="text" class="form-control" id="scannerlot" name="scannerlot" placeholder="Scanner Lot"/>
                                                </div>
                                            </div><!-- /.box-body -->
                                        </div>
                                        <div class="col-md-3">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label>Ref/Upn</label>
                                                    <input type="text" class="form-control" id="ref_upn" name="ref-upn" placeholder="ref-upn"/>
                                                </div>
                                            </div><!-- /.box-body -->
                                        </div>
                                        <div class="col-md-3">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label>Lot No</label>
                                                    <input type="text" class="form-control" id="lot_no" name="lot-no" placeholder="Lot No"/>
                                                </div>
                                            </div><!-- /.box-body -->
                                        </div>
                                        <div class="col-md-3">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label>Name Series</label>
                                                    <input type="text" class="form-control" id="name_Series" name="name_Series" placeholder="Name Series"/>
                                                </div>
                                            </div><!-- /.box-body -->
                                        </div>

                                        <div class="box-footer">
                                            <input type="submit" class="btn btn-primary" id="search" value="submit">
                                        </div>
                                    </div><!-- /.box -->

                                
                                <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Search</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" id="tablepicker" style="overflow: scroll;height: 200px;">
                                    
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                                    <!-- general form elements -->
                                        <div style="margin-bottom: 138px;">
                                                <div class="col-md-2">
                                                    <div class="form-group" style="display: none;" style="display: none;">
                                                        <label for="Nameseries">Name Series</label>
                                                        <input type="text" class="form-control" id="input_series" name="series[]" placeholder="Series" required>
                                                    </div>    
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group" style="display: none;">
                                                        <label for="Box">Scanner Lot</label>
                                                        <input type="text" class="form-control" id="input_scannerlot" name="scannerlot[]" placeholder="UID" required>
                                                    </div>    
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group" style="display: none;">
                                                        <label for="ref-upn">Ref/Upn</label>
                                                        <input type="text" class="form-control" id="input_ref_upn" name="ref_upn[]" placeholder="Ref/Upn" required>
                                                    </div>    
                                                </div> 
                                                <div class="col-md-2">
                                                    <div class="form-group" style="display: none;">
                                                        <label for="Rack">Lot No</label>
                                                        <input type="text" class="form-control" id="input_lot" name="rack[]" required>
                                                    </div>    
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group" style="display: none;">
                                                        <label for="QTY">QTY</label>
                                                        <input type="number" class="form-control" id="input_qty" name="qty[]" placeholder="Plant Name" required>
                                                    </div>    
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group" style="display: none;">
                                                        <label for="Rack">Rack</label>
                                                        <input type="text" class="form-control" id="input_rack" name="qty[]" placeholder="Plant Name" required>
                                                    </div>    
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group" >
                                                        <label for="transfer">No Transfer</label>
                                                        <input type="text" class="form-control" id="no_trans" name="no_trans" placeholder="No Transfer" required>
                                                    </div>    
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group" >
                                                        <label for="Rack">Picker</label>
                                                        <input type="text" class="form-control" id="picker" name="picker" placeholder="Picker" required>
                                                    </div>    
                                                </div>
                                        </div>

                                        <div class=" box box-header">
                                            <h3 class="box-title">Data Input</h3>
                                                <div class="box-body table-responsive" id="tablepicker">
                                                <table id="tablesend" class="table table-bordered table-hover">

                                                </table>
                                            <div class="box-footer">
                                                <button type="submit" style="float: right;" onclick="addtodatabase()" class="btn btn-primary">Submit</button>
                                            </div>   
                                        </div><!-- /.box-body --> 
                                                                            
                                        </div><!-- /.box-header -->
                                            
                                    
                            </div><!-- /.box -->   

                        </div><!--/.col (left) -->
                        <!-- right column -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->