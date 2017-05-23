<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- App title -->
        <title>@yield('title')</title>

        <!-- form Uploads -->
        <link href="{{ asset('assets/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />

        <!--Morris Chart CSS -->
        <link href="{{ asset('assets/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/components.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/menu.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/multiselect/css/multi-select.css') }}"  rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/plugins/select2/dist/css/select2-bootstrap.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

    </head>

	<body>
	<div class="contentpage">
		@yield('content')

		<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>

        <!-- KNOB JS -->
        <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.js') }}"></script>

        <!--Morris Chart-->
        <script src="{{ asset('assets/plugins/morris/morris.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>

        <!-- Dashboard init -->
        <script src="{{ asset('assets/pages/jquery.dashboard.js') }}"></script>

        <!-- Plugins Js -->
        <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
        <script src="{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
     	<script src="{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
     	<script src="{{ asset('assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
     	<script src="{{ asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
     	<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.app.js') }}"></script>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>

        <!-- Plugins Js -->
        <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
        <script src="{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
     	<script src="{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
     	<script src="{{ asset('assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
     	<script src="{{ asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
     	<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>

        <!-- file uploads js -->
        <script src="{{ asset('assets/plugins/fileuploads/js/dropify.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.app.js') }}"></script>

        <script type="text/javascript">
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong appended.'
                },
                error: {
                    'fileSize': 'The file size is too big (1M max).'
                }
            });
        </script>

        <script>
            jQuery(document).ready(function() {
                $("#tambah").click(function(){
                    $("#kegiatan").append("<div id='tes'><div class='panel panel-default'><div class='panel-body'><div class='col-md-12 col-sm-12 col-xs-12'><div class='row'><div class='form-group'><label class='col-sm-2 control-label'>Tanggal</label><div class='col-sm-3'><input type='text' class='form-control'placeholder='mm/dd/yyyy'id='datepicker-autoclose'></div></div></div></div><div class='col-md-12 col-sm-12 col-xs-12'><div class='row'><div class='col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-md-2 col-sm-2 col-xs-2'><div class='form-group'><div class='bootstrap-timepicker'><input id='timepicker2' type='text' class='form-control' name='time[]' placeholder='Time'></div></div></div><div class='col-md-8 col-sm-8 col-xs-8'><div class='form-group'><div class='spasi'><input type='text' name='kegiatan[]' class='form-control' placeholder='Kegiatan' style='position: relative; left: 10px;'></div></div></div></div></div></div></div></div>");
                });

                //
                $("#price").keyup(function(){
                    var harga = $(this).val();
                    var hasil = 0.05*harga+10000;
                    var profit = harga-hasil;
                    $("#harga").text("Value: " +profit);
                });

                //advance multiselect start
                $('#my_multi_select3').multiSelect({
                    selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    afterInit: function (ms) {
                        var that = this,
                            $selectableSearch = that.$selectableUl.prev(),
                            $selectionSearch = that.$selectionUl.prev(),
                            selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                            selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                        that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                            .on('keydown', function (e) {
                                if (e.which === 40) {
                                    that.$selectableUl.focus();
                                    return false;
                                }
                            });

                        that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                            .on('keydown', function (e) {
                                if (e.which == 40) {
                                    that.$selectionUl.focus();
                                    return false;
                                }
                            });
                    },
                    afterSelect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    },
                    afterDeselect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    }
                });

                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
				  maximumSelectionLength: 2
				});

            });

            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true,
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary",
                verticalupclass: 'ti-plus',
                verticaldownclass: 'ti-minus'
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }

            $("input[name='demo1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary",
                postfix: '%'
            });
            $("input[name='demo2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary",
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='demo3']").TouchSpin({
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary"
            });
            $("input[name='demo3_21']").TouchSpin({
                initval: 40,
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary"
            });
            $("input[name='demo3_22']").TouchSpin({
                initval: 40,
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary"
            });

            $("input[name='demo5']").TouchSpin({
                prefix: "pre",
                postfix: "post",
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary"
            });
            $("input[name='demo0']").TouchSpin({
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary"
            });

            // Time Picker
            jQuery('#timepicker').timepicker({
                defaultTIme : false
            });
            jQuery('#timepicker2').timepicker({
                showMeridian : false
            });
            jQuery('#timepicker3').timepicker({
                minuteStep : 15
            });

            //colorpicker start
            $('.colorpicker-default').colorpicker({
                format: 'hex'
            });
            $('.colorpicker-rgba').colorpicker();

            // Date Picker
            jQuery('#datepicker').datepicker({
                format: "yyyy-mm-dd"
            });
            jQuery('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true
            });
            jQuery('#datepicker-inline').datepicker();
            jQuery('#datepicker-multiple-date').datepicker({
                format: "YYYY-DD-MM",
                clearBtn: true,
                multidate: true,
                multidateSeparator: ","
            });
            jQuery('#date-range').datepicker({
                toggleActive: true
            });

            //Date range picker
            $('.input-daterange-datepicker').daterangepicker({
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-default',
                cancelClass: 'btn-primary'
            });
            $('.input-daterange-timepicker').daterangepicker({
                timePicker: true,
                format: 'MM/DD/YYYY h:mm A',
                timePickerIncrement: 30,
                timePicker12Hour: true,
                timePickerSeconds: false,
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-default',
                cancelClass: 'btn-primary'
            });
            $('.input-limit-datepicker').daterangepicker({
                format: 'YYYY-DD-MM',
                minDate: '06/01/2016',
                maxDate: '06/30/2016',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-default',
                cancelClass: 'btn-primary',
                dateLimit: {
                    days: 6
                }
            });

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2016',
                maxDate: '12/31/2016',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-success',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });

            //Bootstrap-MaxLength
            $('input#defaultconfig').maxlength()

            $('input#thresholdconfig').maxlength({
                threshold: 20
            });

            $('input#moreoptions').maxlength({
                alwaysShow: true,
                warningClass: "label label-success",
                limitReachedClass: "label label-danger"
            });

            $('input#alloptions').maxlength({
                alwaysShow: true,
                warningClass: "label label-success",
                limitReachedClass: "label label-danger",
                separator: ' out of ',
                preText: 'You typed ',
                postText: ' chars available.',
                validate: true
            });

            $('textarea#textarea').maxlength({
                alwaysShow: true
            });

            $('input#placement').maxlength({
                alwaysShow: true,
                placement: 'top-left'
            });

            function showagent(id){
                $.ajax({
                  url: "agent/"+id
                }).done(function(data) {
                    data=JSON.parse(data);
                    console.log(data);
                    $("#nama").val(data.fullname).attr('disabled','true');
                    $("#username").val(data.username).attr('disabled','true');
                    $("#email").val(data.email).attr('disabled','true');
                    $("#alamat").val(data.address).attr('disabled','true');
                    $("#tanggallahir").val(data.tanggallahir).attr('disabled','true');
                    $("#kota").val(data.city).attr('disabled','true');
                    $("#provinsi").val(data.province).attr('disabled','true');
                    $("#bahasa").val(data.bahasa).attr('disabled','true');
                    $('#save').css({
                        "display":"none"
                    });
                  $('#con-close-modal').modal();
                });
            }

            var temp =[];

           function editagent(id){
                $.ajax({
                  url: "agent/"+id
                }).done(function(data) {
                    temp['id'] = id;
                    data=JSON.parse(data);
                    $("#nama").val(data.fullname).removeAttr('disabled');
                    $("#username").val(data.username).removeAttr('disabled');
                    $("#email").val(data.email).removeAttr('disabled');
                    $("#alamat").val(data.address).removeAttr('disabled');
                    $("#tanggallahir").val(data.tanggallahir).removeAttr('disabled');
                    $("#kota").val(data.city).removeAttr('disabled');
                    $("#provinsi").val(data.province).removeAttr('disabled');
                    $("#bahasa").val(data.bahasa).removeAttr('disabled');
                    $('#save').css({
                        "display":"inline-block"
                    });
                  $('#con-close-modal').modal();
                });
            }

            function saveagent(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.post("agentupdate/"+temp['id'],
                {
                    fullname:$('#nama').val(),
                    username:$('#username').val(),
                    email:$('#email').val(),
                    address:$('#alamat').val(),
                    tanggallahir:$('#tanggallahir').val(),
                    city:$('#kota').val(),
                    province:$('#provinsi').val(),
                    bahasa:$('#bahasa').val(),
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                function(data, status){
                    if (data=='success') {
                        $('#con-close-modal').modal('hide');
                        location.reload();
                    }
                });
            }

            var idsementaradelete;

            function deleteagent(id){
                $('#panel-modal').modal();
                idsementaradelete=id;
            }

            function executedeleteagent(a){
                $(a).attr('disabled','true');
                $.ajax({
                  url: "agentdelete/"+idsementaradelete
                }).done(function(data, status) {
                    if (data=='success') {
                        $('#panel-modal').modal('hide');
                        location.reload();
                    }
                });
            }


            function showcustomer(id){
                $.ajax({
                  url: "customer/"+id
                }).done(function(data) {
                    data=JSON.parse(data);
                    $("#username").val(data.username).attr('disabled','true');
                    $("#firstname").val(data.firstname).attr('disabled','true');
                    $("#lastname").val(data.lastname).attr('disabled','true');
                    $("#email").val(data.email).attr('disabled','true');
                    $("#alamat").val(data.alamat).attr('disabled','true');
                    $("#phone").val(data.phone).attr('disabled','true');
                    $("#gender").val(data.gender).attr('disabled','true');
                    $("#tanggallahir").val(data.tanggallahir).attr('disabled','true');
                    $("#nationality").val(data.nationality).attr('disabled','true');
                    $('#save').css({
                        "display":"none"
                    });
                  $('#con-close-modal-customer').modal();
                });
            }

           function editcustomer(id){
                $.ajax({
                  url: "customer/"+id
                }).done(function(data) {
                    temp['id'] = id;
                    data=JSON.parse(data);
                    $("#username").val(data.username).removeAttr('disabled');
                    $("#firstname").val(data.firstname).removeAttr('disabled');
                    $("#lastname").val(data.lastname).removeAttr('disabled');
                    $("#email").val(data.email).removeAttr('disabled');
                    $("#alamat").val(data.alamat).removeAttr('disabled');
                    $("#phone").val(data.phone).removeAttr('disabled');
                    $("#gender").val(data.gender).removeAttr('disabled');
                    $("#tanggallahir").val(data.tanggallahir).removeAttr('disabled');
                    $("#nationality").val(data.nationality).removeAttr('disabled');
                    $('#save').css({
                        "display":"inline-block"
                    });
                  $('#con-close-modal-customer').modal();
                });
            }

            function savecustomer(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.post("customerupdate/"+temp['id'],
                {
                    username:$('#username').val(),
                    firstname:$('#firstname').val(),
                    lastname:$('#lastname').val(),
                    email:$('#email').val(),
                    alamat:$('#alamat').val(),
                    phone:$('#phone').val(),
                    gender:$('#gender').val(),
                    tanggallahir:$('#tanggallahir').val(),
                    nationality:$('#nationality').val(),
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                function(data, status){
                    if (data=='success') {
                        $('#con-close-modal-customer').modal('hide');
                        location.reload();
                    }
                });
            }

            function deletecustomer(id){
                $('#panel-modal-customer').modal();
                idsementaradelete=id;
            }

            function executedeletecustomer(a){
                $(a).attr('disabled','true');
                $.ajax({
                  url: "customerdelete/"+idsementaradelete
                }).done(function(data){
                    if (data=='success') {
                        $('#panel-modal-customer').modal('hide');
                        location.reload();
                    }
                });
            }
        </script>
	</body>
</html>
