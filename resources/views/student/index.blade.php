@extends('student.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5" style="height:100vh">
        <div class="col text-end">
            <a href="{{ route('students.create') }}" class="btn btn-primary" id="bootModal">Create Student</a>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // model click start
        // $(document).on('click','#bootModal',function (e) {
        //     e.preventDefault();
        //     let modalUrl = $(this).attr('href');
        //     $.ajax({
        //         type: "GET",
        //         url: modalUrl,

        //         success: function(res) {
        //             console.log(res);

        //             let dialog = bootbox.dialog({
        //                 title: 'Create Student',
        //                 message: "<div class='studentContent'></div>",
        //                 size: 'large',
        //             });
        //             $('.studentContent').html(res);
        //         }
        //     });
            
        // });
       // bootbox modal show
        $(document).on('click', '#bootModal', function (e) {
            e.preventDefault();
            const modalUrl = $(this).attr('href');
            const modalTitle = $(this).attr('title');
            // form url 
            formUrl = $(this).attr('formUrl');
            $.ajax({
                type: "GET",
                url: modalUrl,
                success: function (res) {
                    dialog = bootbox.dialog({
                        title: 'Student ' + modalTitle,
                        message: "<div class='studentContent'></div>",
                        size: 'large',
                    });
                    // push the thml in studentContent div
                    $('.studentContent').html(res);
                    // generate form id 
                   // formId = "#" + $('.studentContent').find('form').attr('id');
                    // generate form action 
                   // $(formId).attr('action', formUrl);
                }
            });
        });

        // $('#bootModal').click(function(e) {
        //     e.preventDefault();
           
        // });
        // model click end

        $(document).on('submit', '#createStudentForm', function(e) {
            e.preventDefault();

            let formUrl = $(this).attr('action');

            let formData = new FormData($('#createStudentForm')[0]);


            $.ajax({
                type: "POST",
                url: formUrl,
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    console.log(res);

                }
            });


        });







    });
</script>
@endsection