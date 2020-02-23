@if($errors->any()) 
<div class="alert alert-primary" role="alert">
    <a style="float:left" type="button" class="btn btn-dark btn-sm" data-dismiss="alert" aria-label="Close">
      <strong class="h6 text-light">
        Ok
      </strong>
   </a>
  <h4 class="alert-heading">
  <i class="fas fa-exclamation"></i>
    Error
  </h4>
  <hr>
  @foreach ($errors->all() as $error)
    <p class="mb-0">{{ $error }}</p>
  @endforeach
  
</div>
@endif