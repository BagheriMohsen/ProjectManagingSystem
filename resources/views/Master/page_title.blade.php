@if(isset($page_title))
    <div class="br-pagetitle ">
        {!! $page_title["icon"] !!}
        <div>
        <h4 class="mx-4">
            {{ $page_title["title"] }}
        </h4>
        <p class="mg-b-0 mx-4">
            {{ $page_title["sub_title"] }}
        </p>
        </div>

    </div>
    <br>
@endif