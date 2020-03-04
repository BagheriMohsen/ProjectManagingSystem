


<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12 mg-r-20">
    <a class="breadcrumb-item" href="{{ route("dashboard") }}">Dashboard</a>
    @if(isset($path['name']))
        <span class="breadcrumb-item active">{{$path['name']}}</span>
    @endif
    </nav>
    @if(isset($path['btn_content']))
        <a 
        @if(!$path['is_modal'])
        @if(isset($path['route_name'])) href="{{route($path['btn_href'])}}" @endif
        @endif
        
        class="btn btn-success btn-sm btn-with-icon btn-submit-new-timeline p-0"
        @if($path['is_modal'])
            data-toggle="modal" 
            @if(isset($path['modal_name'])) 
                data-target="#{{ $path["modal_name"] }}" 
            @else 
                data-target="#modalCompose" 
            @endif
        @endif
        >
            <div class="ht-30 justify-content-between text-light">
                    <span class="icon wd-40 px-3 hvr-grow"><i class="fa fa-plus"></i></span>
                
                    <span class="pd-x-15">{{$path['btn_content']}}</span>
            
            </div>	
        </a>
    @endif
</div>