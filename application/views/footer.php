        <!-- jQuery 2.0.2 -->
        <style type="text/css">
            .done {
                display: none;
            }
        </style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/iCheck/icheck.min.js" ></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/js/AdminLTE/app.js" ></script>
        <!-- DataTables JavaScript -->
        <script src="<?php echo base_url(); ?>assets/js/datatablesfortable.js" ></script>
        <script src="<?php echo base_url(); ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url(); ?>assets/js/AdminLTE/dashboard.js" type="text/javascript"></script>  
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
        <script type="text/javascript">
            $( "#search" ).click(function() {
                    var vscanner = $("#scannerlot").val();
                    var vref = $("#ref_upn").val();
                    var vlot = $("#lot_no").val();
                    var vseries = $("#name_Series").val();
                     $.ajax({
                        url: "<?php echo base_url('adminpicker/search_forpicker')?>",
                        type: 'POST',
                        dataType: 'html',
                        data: {
                               vscanner : vscanner,
                               vref     : vref,
                               vlot     : vlot,
                               vseries  : vseries
                              },
                                error: function(error) {
                                  console.log('error');
                              }
                             }).done(function(data){
                           $('#tablepicker').html(data);
                       });
                    });  
        </script>
        <script type="text/javascript">
            var table = document.getElementById('tablepicker');

            for (var i = 1 ; i < table.rows.length; i++) {
                table.rows[i].onclick = function()
                {
                    document.getElementById('series').value = this.cells[0].innerHTML;
                    
                }
            }
        </script>
        <script>
        
    // code to read selected table row cell data (values).
            function myFunction() {
             var table = document.getElementById('examplepicker');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                        var answer = confirm('You click you will delete this,Are you sure Move this Item?');
                        if (answer)
                        {
                          var tr = $('tr');
                         var id = this.cells[0].innerHTML;
                         var series = this.cells[1].innerHTML;
                         var scannerlot = this.cells[2].innerHTML;
                         var refupn = this.cells[3].innerHTML;
                         var lot = this.cells[4].innerHTML;
                         var qty = this.cells[5].innerHTML;
                         var rack = this.cells[6].innerHTML;
                         $.ajax({
                              url: "<?php echo base_url('adminpicker/delete_dataforpicker')?>",
                              type: 'POST',
                              data:{
                                vid      : id,
                                vseries  : series,
                                vscanner : scannerlot,
                                vref     : refupn,
                                vlot     : lot,
                                vqty     : qty,
                                vrack    : rack
                              }
                            }).done(function() {
                              $( "tr" ).click(function() {
                                  $( this ).slideUp();
                                });
                            });
                         //rIndex = this.rowIndex;
                         document.getElementById("input_series").value = this.cells[1].innerHTML;
                         document.getElementById("input_scannerlot").value = this.cells[2].innerHTML;
                         document.getElementById("input_ref_upn").value = this.cells[3].innerHTML;
                         document.getElementById("input_lot").value = this.cells[4].innerHTML;
                         document.getElementById("input_qty").value = this.cells[5].innerHTML;
                         document.getElementById("input_rack").value = this.cells[6].innerHTML;
                            addHtmlTableRow()
                            }
                            else
                            {
                              console.log('cancel');
                            }
                        
                    };
                }
            }

         </script>
         <script>
            
            var rIndex,
                table = document.getElementById("tablesend");
            
            
            // add Row
            function addHtmlTableRow()
            {
                // get the table by id
                // create a new row and cells
                // get value from input text
                // set the values into row cell's
                
                var newRow = table.insertRow(table.length),
                    cell1 = newRow.insertCell(0),
                    cell2 = newRow.insertCell(1),
                    cell3 = newRow.insertCell(2),
                    cell4 = newRow.insertCell(3),
                    cell5 = newRow.insertCell(4),
                    cell6 = newRow.insertCell(5),
                    series = document.getElementById("input_series").value,
                    scannerlot = document.getElementById("input_scannerlot").value,
                    refupn = document.getElementById("input_ref_upn").value,
                    lot = document.getElementById("input_lot").value,
                    qty = document.getElementById("input_qty").value,
                    rack = document.getElementById("input_rack").value;
            
                cell1.innerHTML = series;
                cell2.innerHTML = scannerlot;
                cell3.innerHTML = refupn;
                cell4.innerHTML = lot;
                cell5.innerHTML = qty;
                cell6.innerHTML = rack;
                // call the function to set the event to the new row
                selectedRowToInput();
            }
            
            // display selected row data into input text
            function selectedRowToInput()
            {
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                      // get the seected row index
                      rIndex = this.rowIndex;
                      document.getElementById("input_series").value = this.cells[0].innerHTML;
                      document.getElementById("input_scannerlot").value = this.cells[1].innerHTML;
                      document.getElementById("input_ref_upn").value = this.cells[2].innerHTML;
                      document.getElementById("input_lot").value = this.cells[3].innerHTML;
                      document.getElementById("input_qty").value = this.cells[4].innerHTML;
                      document.getElementById("input_rack").value = this.cells[5].innerHTML;
                    };
                }
            }
            selectedRowToInput();
            
            function editHtmlTbleSelectedRow()
            {
                var fname = document.getElementById("fname").value,
                    lname = document.getElementById("lname").value,
                    age = document.getElementById("age").value;
            }
            
            function removeSelectedRow()
            {
                table.deleteRow(rIndex);
                // clear input text
                document.getElementById("fname").value = "";
                document.getElementById("lname").value = "";
                document.getElementById("age").value = "";
            }
        </script>
        <script type="text/javascript">
            function addtodatabase(){
                var table = $("#tablesend tbody");

                table.find('tr').each(function (i) {
                    var $tds = $(this).find('td'),
                        series = $tds.eq(0).text(),
                        scanner = $tds.eq(1).text(),
                        refupn = $tds.eq(2).text(),
                        lot = $tds.eq(3).text(),
                        qty = $tds.eq(4).text(),
                        rack = $tds.eq(5).text();
                    var picker = $('#picker').val();
                    var no_trans = $('#no_trans').val();
                    $.ajax({
                              url: "<?php echo base_url('adminpicker/add_topicker')?>",
                              type: 'POST',
                              data:{
                                vseries  : series,
                                vscanner  : scanner,
                                vrefupn  : refupn,
                                vlot     : lot,
                                vqty     : qty,
                                vrack    : rack,
                                vpicker  : picker,
                                vno_trans : no_trans
                              }
                            }).done(function() {
                              var url = "<?php echo base_url('pickers'); ?>";    
                                $(location).attr('href',url);
                            });
                }); 
            }
              
        </script>
        <script type="text/javascript">
          function sendpicking(){
            var table = $("#tablepicking tbody");

                table.find('tr').each(function (i) {
                    var $tds = $(this).find('td'),
                        series = $tds.eq(0).text(),
                        refupn = $tds.eq(1).text(),
                        lot = $tds.eq(2).text(),
                        qty = $tds.eq(3).text();
                    var scanner = $('#scanner_upn').val();
                    var admin = $('#nama_admin').val();
                    var ditujukan = $('#ditujukan').val();
                    var no_transdeli = $('#no_transdeli').val();
                    $.ajax({
                              url: "<?php echo base_url('adminpicker/delivery_itempicker')?>",
                              type: 'POST',
                              data:{
                                vseries  : series,
                                vscanner  : scanner,
                                vrefupn  : refupn,
                                vlot     : lot,
                                vqty     : qty,
                                vadmin   : admin,
                                vditujukan : ditujukan,
                                vno_trans : no_transdeli
                              }
                            }).done(function() {
                               var url = "<?php echo base_url('delivery'); ?>";    
                               $(location).attr('href',url);
                            });
                });
          }
        </script>
        <script type="text/javascript">
        function printContent(div_id)
        {
          
        var DocumentContainer = document.getElementById("tablepicking");
        var title = document.getElementById("no_transfer").value;
        var html = '<html><head>'+
                       '<link href="css/template.css" rel="stylesheet" type="text/css" />'+
                       '</head><body style="background:#ffffff;">'+
                       '<link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">'+
          '<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">'+
          '<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">'+
          '<link href="css/sb-admin.css" rel="stylesheet">'+
          '<style> #dataTable2_length { display:none; } #dataTable2_filter { display:none; } .dataTables_info{ display:none; } .paginate_button { display:none; } </style>'+
          '<div class="card-header" style="text-align: center;"><h3><i class="fa fa-table"></i> Scanner/Transfer : '+ title+' </h3></div>'+
                       DocumentContainer.innerHTML+
                       '</body></html>';
         console.log(html);
            var WindowObject = window.open("", "PrintWindow",
            "width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
            WindowObject.document.writeln(html);
            WindowObject.document.close();
            WindowObject.document.focus();
            WindowObject.document.print();
            document.getElementById('print_link').style.display='block';
        }
      </script>
    </body>
</html>