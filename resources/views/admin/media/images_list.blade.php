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
            dictDefaultMessage: 'Drop image files here to upload',
            dictRemoveFile: 'Remove',
            dictFileTooBig: 'Image is bigger than 10MB',
            uploadMultiple: true,
            parallelUploads: 10,
            acceptedFiles: 'image/*',
            init:function() {
                // Remove file on server
                this.on("removedfile", function(file) {
                    $.ajax({
                        type: 'POST',
                        url: 'upload/delete',
                        data: {id: file.name},
                        dataType: 'html',
                        success: function(data){
                            var rep = JSON.parse(data);

                            if(rep.code == 200)
                            {
                                photo_counter--;
                                countUploadedImages.html(photo_counter);
                            }

                        }
                    });
                } );
            },
            success: function(file,done) {
                // Add uploaded counter information
                photo_counter++;
                countUploadedImages.html(photo_counter);
            }
        };
    </script>

    <!-- Dropzone Block -->
    <div class="block full">
        <!-- Dropzone Title -->
        <div class="block-title">
            <h2><strong>Dropzone.js</strong>
                <small>Drag and Drop files</small>
            </h2>
        </div>
        <!-- END Dropzone Title -->

        <!-- Dropzone Content -->
        <div class="dropzone" id="dropzone-images"></div>

        <h4 class="text-info">
            Uploaded image(s): <strong><span id="countUploadedImages">0</span></strong>
        </h4>
        <!-- END Dropzone Content -->
    </div>
    <!-- END Dropzone Block -->

    <script>
        Dropzone.autoDiscover = false;
        var token = "{{ Session::getToken() }}";

        var myDropzone = new Dropzone("div#dropzone-images", {
            url: '{{route('systems_post_media_images_list')}}',
            params: {
                _token: token
            }
        });

    </script>

@stop