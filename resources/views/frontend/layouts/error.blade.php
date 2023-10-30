<div class="container errors-box">
<div class="row">
<div class="col-12">


@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <h4 class="alert-heading">Error!</h4>
        @foreach ($errors->all() as $error)
            <p class="mb-0">{{ $error }}</p>
        @endforeach

    </div>
@endif
@if (\Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show my-2" role="alert">
        <strong>Success!</strong> {!! \Session::get('success') !!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (\Session::has('wrong'))
        <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
            <strong>Success !</strong> {!! \Session::get('wrong') !!}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
@endif
    @if (\Session::has('warning'))
        <div class="alert alert-warning alert-dismissible fade show my-2" role="alert">
            <strong>Error !</strong> {!! \Session::get('warning') !!}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
@endif
</div>
</div>
</div>
