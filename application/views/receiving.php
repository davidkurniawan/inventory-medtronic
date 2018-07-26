            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Receiving
                        <small>Preview</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            
                                <form action="<?php echo base_url('receiving/insert'); ?>" method="post">
                                    <!-- Form Element sizes -->
                                    <div class="box box-success">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Scanner Lot</label>
                                                <input type="text" class="form-control" name="scanner_lot" placeholder="Scanner Lot"/>
                                            </div>
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                    <!-- general form elements -->
                                    <div class="col-md-12">
                                        <div class="">
                                            <div class="box-body">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="Nameseries">Name Series</label>
                                                        <input type="text" class="form-control" id="ref-upn" name="series" placeholder="Series" required>
                                                    </div>    
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="ref-upn">Ref/Upn</label>
                                                        <input type="text" class="form-control" id="ref-upn" name="ref_upn" placeholder="Ref/Upn" required>
                                                    </div>    
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="ref-upn">Lot No</label>
                                                        <input type="text" class="form-control" id="lot_no" name="lot_no" placeholder="Lot No" required>
                                                    </div>    
                                                </div>  
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="Box">Pick Up Name</label>
                                                        <input type="text" class="form-control" id="pickup_name" name="pickup_name" placeholder="Pick Up Name" required>
                                                    </div>    
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="QTY">QTY</label>
                                                        <input type="number" class="form-control" id="qty" name="qty" placeholder="Plant Name" required>
                                                    </div>    
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="Description">Description</label>
                                                        <textarea type="text" class="form-control" id="description" name="description"  required> </textarea>
                                                    </div>     
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="datetime">Datetime</label>
                                                        <input type="text" class="form-control" id="datetime" name="datetime" placeholder="Datetime" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box-footer">
                                        <a href="javascript:void(0)" class="btn btn-success addMore" style="float: right;"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->    


                        </div><!--/.col (left) -->
                        <!-- right column -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->