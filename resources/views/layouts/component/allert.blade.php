<div class="col-sm-12">
    @if (session('msg'))
    <div class="alert  alert-success alert-dismissible fade show" role="alert">
        <span class="badge badge-pill badge-success">Success</span>
        {{session('msg')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
</div>