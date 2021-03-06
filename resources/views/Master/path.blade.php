<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12 mg-r-20">
    <a class="breadcrumb-item" href="index">Dashboard</a>
    @if(isset($path['name']))
        <span class="breadcrumb-item active">{{$path['name']}}</span>
    @endif
    </nav>
    @if(isset($path['btn_content']))
        <a 
        @if(!$path['is_modal'])
            href="{{$path['btn_href']}}"
        @endif
        
        class="btn btn-success btn-sm btn-with-icon btn-submit-new-timeline"
        @if($path['is_modal'])
            data-toggle="modal" data-target="#modalCompose"
        @endif
        >
            <div class="ht-30 justify-content-between text-light">
                <span class="icon wd-40"><i class="fa fa-plus"></i></span>
                
                    <span class="pd-x-15">{{$path['btn_content']}}</span>
            
            </div>	
        </a>
    @endif
</div>