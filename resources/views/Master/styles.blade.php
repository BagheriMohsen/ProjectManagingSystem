
<!-- vendor css -->
<link href="{{asset('panel/css/fontawsome-all.css')}}" rel="stylesheet">
<link href="{{asset('panel/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
<link href="{{asset('panel/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">

<link href="{{asset('panel/css/persiandatepicker.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('panel/css/jquery-ui.min.css')}}">


@if(isset($text_editor))
    @if($text_editor['tags'])
        <link rel="stylesheet" href="{{asset('panel/css/select2.min.css')}}">   
    @endif
@endif
<link rel="stylesheet" href="{{asset('panel/css/main.css')}}">