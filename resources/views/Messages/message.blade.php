@if(session('message'))
  <div class="alert alert-info text-dark" role="alert">
      <a style="float:right" type="button" class="btn btn-dark btn-sm" data-dismiss="alert" aria-label="Close">
        <strong class="h6 text-light">
          {{-- <i class="fas fa-check crud-icon"></i>  --}}
          ok
        </strong>
      </a>
    <h6 class="alert-heading">
    <i class="fas fa-check-double "></i>
      Successful
    </h6>
    <hr>
      <p class="mb-0">{{ session('message') }}</p>
  </div>
@endif