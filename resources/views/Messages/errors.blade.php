@if($errors->any()) 
<div class="alert alert-warning" role="alert">
    <a style="float:right" type="button" class="btn btn-dark btn-sm" data-dismiss="alert" aria-label="Close">
      <strong class="h6 text-light">
        Ok
      </strong>
   </a>
  <h4 class="alert-heading">
  <i class="fas fa-exclamation-triangle"></i>
    Error
  </h4>
  <hr>
  @foreach ($errors->all() as $error)
    <p class="mb-0">{{ $error }}</p>
  @endforeach
  
</div>
@endif