@extends('admin.layouts.default')

@section('title', 'Page Title')

@section('content')
    <script>
        var photo_counter = 0;
        var countUploadedImages = $('#countUploadedImages');

        Dropzone.options.dropzoneImages = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            dictDefaultMessage: 'Drop files here to upload',
            dictRemoveFile: 'Remove',
            dictFileTooBig: 'File is bigger than 10MB',
            uploadMultiple: true,
            parallelUploads: 10,
            acceptedFiles: 'image/*',
            init: function () {
                // Remove file on server
                this.on("removedfile", function (file) {
                    var token = "{{ Session::getToken() }}";

                    $.ajax({
                        type: 'POST',
                        url: '{{route('systems_single_delete_image')}}',
                        data: {
                            file_name: file.name,
                            _token: token
                        },
                        dataType: 'json',
                        success: function (data) {
                            var rep = JSON.parse(data);

                            if (rep.code == 200) {
                                photo_counter--;
                                countUploadedImages.html(photo_counter);
                            }
                        }
                    });
                });
            },
            success: function (file, done) {
                // Add uploaded counter information
                photo_counter++;
                countUploadedImages.html(photo_counter);
            }
        };
    </script>

    <div class="block full">

        {!! Form::open(array('url' => '','id'=>'frmAddMedia', 'class' => 'form-horizontal form-bordered')) !!}

        <div class="form-group">
            <label class="col-md-2 control-label">Album</label>

            <div class="col-md-10">
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-primary">
                            <i class="gi gi-plus"></i>
                            Add new
                        </button>
                    </span>

                    <select name="example-select2" class="select-select2" style="width: 100%;"
                            data-placeholder="Or choose one...">
                        <option></option>
                        <option value="HTML">HTML</option>
                        <option value="CSS">CSS</option>
                        <option value="Javascript">Javascript</option>
                        <option value="PHP">PHP</option>
                        <option value="MySQL">MySQL</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">
                Name
            </label>

            <div class="col-md-10">
                {!! Form::text('name', null, array('class' => 'form-control')) !!}
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">
                Description
            </label>

            <div class="col-md-10">
                {!! Form::textarea('description', '', ['rows' => 9, 'class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" for="example-file-input">
                Upload file(s)
                <span class="text-danger">*</span>
            </label>

            <div class="col-md-10">
                <div class="dropzone" id="dropzone-images"></div>

                <h4 class="text-info">
                    Uploaded file(s): <strong><span id="countUploadedImages">0</span></strong>
                </h4>
            </div>
        </div>

        <div class="form-group form-actions">
            <div class="col-md-10 col-md-offset-2">
                <button type="submit" class="btn btn-sm btn-primary">
                    <i class="fa fa-angle-right"></i> Save
                </button>
                <button type="reset" class="btn btn-sm btn-warning">
                    <i class="fa fa-repeat"></i> Reset
                </button>
            </div>
        </div>

        {!! Form::close() !!}

    </div>

    <script>
        Dropzone.autoDiscover = false;
        var token = "{{ Session::getToken() }}";

        var myDropzone = new Dropzone("div#dropzone-images", {
            url: '{{route('systems_post_media_images_list')}}',
            params: {
                _token: token
            }
        });

        /* Initialize Form Validation */
        $('#frmAddMedia').validate({
            errorClass: 'help-block animation-slideDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                e.parents('.form-group > div').append(error);
            },
            highlight: function(e) {
                $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                $(e).closest('.help-block').remove();
            },
            success: function(e) {
                e.closest('.form-group').removeClass('has-success has-error');
                e.closest('.help-block').remove();
            },
            rules: {
                val_username: {
                    required: true,
                    minlength: 3
                },
                val_email: {
                    required: true,
                    email: true
                },
                val_password: {
                    required: true,
                    minlength: 5
                },
                val_confirm_password: {
                    required: true,
                    equalTo: '#val_password'
                },
                val_bio: {
                    required: true,
                    minlength: 5
                },
                val_skill: {
                    required: true
                },
                val_website: {
                    required: true,
                    url: true
                },
                val_credit_card: {
                    required: true,
                    creditcard: true
                },
                val_digits: {
                    required: true,
                    digits: true
                },
                val_number: {
                    required: true,
                    number: true
                },
                val_range: {
                    required: true,
                    range: [1, 1000]
                },
                val_terms: {
                    required: true
                }
            },
            messages: {
                val_username: {
                    required: 'Please enter a username',
                    minlength: 'Your username must consist of at least 3 characters'
                },
                val_email: 'Please enter a valid email address',
                val_password: {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long'
                },
                val_confirm_password: {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long',
                    equalTo: 'Please enter the same password as above'
                },
                val_bio: 'Don\'t be shy, share something with us :-)',
                val_skill: 'Please select a skill!',
                val_website: 'Please enter your website!',
                val_credit_card: 'Please enter a valid credit card! Try 446-667-651!',
                val_digits: 'Please enter only digits!',
                val_number: 'Please enter a number!',
                val_range: 'Please enter a number between 1 and 1000!',
                val_terms: 'You must agree to the service terms!'
            }
        });
    </script>

@stop