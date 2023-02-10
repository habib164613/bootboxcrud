@extends('student.layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="col">
                <button class="btn btn-primary" id="createBtn">create student</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('#createBtn').click(function (e) { 
            e.preventDefault();
            let dialog = bootbox.dialog({
    title: 'A custom dialog with buttons and callbacks',
    message: "<p>This dialog has buttons. Each button has it's own callback function.</p>",
    size: 'large',
    buttons: {
        cancel: {
            label: "I'm a cancel button!",
            className: 'btn-danger',
            callback: function(){
                console.log('Custom cancel clicked');
            }
        },
        noclose: {
            label: "I don't close the modal!",
            className: 'btn-warning',
            callback: function() {
                console.log('Custom button clicked');
                return false;
            }
        },
        ok: {
            label: "I'm an OK button!",
            className: 'btn-info',
            callback: function() {
                console.log('Custom OK clicked');
            }
        }
    }
});
        });
    });
</script>

@endsection