<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
      @yield('title')  
    </title>

    @include('Master.styles')
    @yield('styles')

    
  </head>

  <body>
  
  @include('Master.side_left')
  @include('Master.header')
  @include('Master.side_right')

  <div class="br-mainpanel">
    
    @yield('path')

    <div class="br-pagebody">
        @yield('content')
    </div>
    
</div>

@yield('create_modal')


@include('Master.scripts')
@yield('scripts')

  
  </body>
</html>