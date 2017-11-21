@extends('layouts.web.main')

@section('content')

<div class="row">
    <div class="col-md-4">
        <div id="left_form">
            <figure><img src="{{ url('web/img/registration_bg.svg') }}" alt=""></figure>
            <h2>Registrasi</h2>
            <p>Silahkan mengisi form data diri yang sudah disediakan di samping kanan.</p>
            <a href="javascript:;;" id="more_info" data-toggle="modal" data-target="#more-info"><i class="pe-7s-info"></i></a>
        </div>
    </div>
    <div class="col-md-8">

        <div id="wizard_container">
            <div id="top-wizard">
                <div id="progressbar"></div>
            </div>
            <!-- /top-wizard -->
            <form name="example-1" id="wrapped" method="POST">
                <input id="website" name="website" type="text" value="">
                <!-- Leave for security protection, read docs for details -->
                <div id="middle-wizard">

                    <div class="step">
                        <h3 class="main_question"><strong>1/3</strong>Isi Data Diri Anda</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control required" placeholder="Nama Depan">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control required" placeholder="Nama Belakang">
                                </div>
                            </div>
                        </div>
                        <!-- /row -->

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control required" placeholder="Emal Anda">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control required" placeholder="No Handphone Anda">
                                </div>
                            </div>
                        </div>
                        <!-- /row -->

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="date_of_birth" class="form-control datepicker required" placeholder="Tanggal Lahir">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="Male" checked name="gender" class="icheck">Male</label>
                                    <label><input type="radio" value="Female" name="gender" class="icheck">Female</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <textarea name="address" class="form-control required" placeholder="Alamat Tinggal"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="city" class="form-control required" placeholder="City">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="zip_code" class="form-control required" placeholder="Zip code">
                                </div>
                            </div>
                        </div>
                        
                        <!-- /row -->
                    </div>
                    <!-- /step-->

                    <div class="step">
                        <h3 class="main_question"><strong>2/3</strong>Please fill with additional info</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control required" placeholder="Address">
                                </div>
                            </div>
                            <!-- /col-sm-12 -->
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="city" class="form-control required" placeholder="City">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="zip_code" class="form-control required" placeholder="Zip code">
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="styled-select">
                                        <select class="required" name="country">
                                            <option value="" selected>Select your country</option>
                                            <option value="Europe">Europe</option>
                                            <option value="Asia">Asia</option>
                                            <option value="North America">North America</option>
                                            <option value="South America">South America</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /step-->

                    <div class="submit step">
                        <h3 class="main_question"><strong>3/3</strong>Send an optional message</h3>
                        <div class="form-group">
                            <textarea name="additional_message" class="form-control" style="height:150px;" placeholder="Hello world....write your messagere here!"></textarea>
                        </div>
                        <div class="form-group terms">
                            <input name="terms" type="checkbox" class="icheck required" value="yes">
                            <label>Please accept <a href="index.html#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?</label>
                        </div>
                    </div>
                    <!-- /step-->
                </div>
                <!-- /middle-wizard -->
                <div id="bottom-wizard">
                    <button type="button" name="backward" class="backward">Backward </button>
                    <button type="button" name="forward" class="forward">Forward</button>
                    <button type="submit" name="process" class="submit">Submit</button>
                </div>
                <!-- /bottom-wizard -->
            </form>
        </div>
        <!-- /Wizard container -->
    </div>
</div><!-- /Row -->

<!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal info -->
<div class="modal fade" id="more-info" tabindex="-1" role="dialog" aria-labelledby="more-infoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="more-infoLabel">Isi Data Diri Anda</h4>
            </div>
            <div class="modal-body">
                <p>Isi data diri Anda.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection

@push("script")
<script>
    $('form#wrapped').attr('action', 'registration_send.php');
    $("#wizard_container").wizard({
        stepsWrapper: "#wrapped",
        submit: ".submit",
        beforeSelect: function (event, state) {
            if ($('input#website').val().length != 0) {
                return false;
            }
            if (!state.isMovingForward)
                return true;
            var inputs = $(this).wizard('state').step.find(':input');
            return !inputs.length || !!inputs.valid();
        }
    }).validate({
        errorPlacement: function (error, element) {
            if (element.is(':radio') || element.is(':checkbox')) {
                error.insertBefore(element.next());
            } else {
                error.insertAfter(element);
            }
        }
    });
    //  progress bar
    $("#progressbar").progressbar();
    $("#wizard_container").wizard({
        afterSelect: function (event, state) {
            $("#progressbar").progressbar("value", state.percentComplete);
            $("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
        }
    });
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',
        startView: 2
    });
</script>
@endpush