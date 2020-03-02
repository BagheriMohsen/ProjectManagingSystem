@if(session('error'))
  <div class="alert alert-danger text-dark" role="alert">
      <a style="float:right" type="button" class="btn btn-dark btn-sm" data-dismiss="alert" aria-label="Close">
        <strong class="h6 text-light">
          {{-- <i class="fas fa-check crud-icon"></i>  --}}
          ok
        </strong>
      </a>
    <h6 class="alert-heading">
      <i class="fas fa-exclamation-triangle"></i>
      Error
    </h6>
    <hr>
      <p class="mb-0">{{ session('error') }}</p>
  </div>
@endif