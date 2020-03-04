@extends('Master.layout')

@section('title')
    {{"Project"}}
@endsection

<!-- 
    path 
-->
@section('path')
    @php 
        $path = [
            'name'          =>  'Project',
            'btn_content'   =>  "New Project",
            'is_modal'      =>  False,
            'btn_href'      =>  "projects.create"
        ]
    @endphp
    @include('Master.path')
@endsection



<!-- 
    Main Content
-->
@section('content')
<div class="row row-sm">
			
    <div class="col-xs-12 col-xl-12">
    
    <div class="card mg-b-20">
    <div class="card-header bg-grandeur tx-white">
        Active Projects
    </div>
    <div class="card-body rounded-bottom table-wr-br">
    <table class="table tx-12">
        <tr class="tx-16">
            <td colspan="4">
                <a href="project-single">
                Project title: altareq Hotel Website
                </a>
                <div class="progress mg-b-5 mg-t-5 ht-15">
                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
                </div>
            </td>
            <td class="bg-light">
                Priority: High
            </td>
        </tr>
        <tr>
            <td>
                Applicant: Management unit
            </td>
            <td>
                Operating unit: Programming Unit
            </td>
            <td>
                Request date: June 25
            </td>
            <td>
                Start date: June 28
            </td>
            <td class="bg-light">
                Status: In progress
            </td>
        </tr>
    </table>
    <table class="table tx-12">
        <tr class="tx-16">
            <td colspan="4">
                <a href="project-single">
                Project title
                </a>	
                <div class="progress mg-b-5 mg-t-5 ht-15">
                    <div class="progress-bar bg-info progress-bar-striped progress-bar-animated wd-70p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                </div>	
            </td>
            <td class="bg-light">
                Project Priority
            </td>
        </tr>
        <tr>
            <td>
                Applicant unit name
            </td>
            <td>
                Operating unit name
            </td>
            <td>
                Request date				
            </td>
            <td>
                Start date
            </td>
            <td class="bg-light">
                Project Status
            </td>
        </tr>
    </table>
    <table class="table tx-12">
        <tr class="tx-16">
            <td colspan="4">
                <a href="project-single">
                Project title
                </a>	
                <div class="progress mg-b-5 mg-t-5 ht-15">
                    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated wd-20p" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                </div>		
            </td>
            <td class="bg-light">
                Project Priority
            </td>
        </tr>
        <tr>
            <td>
                Applicant unit name
            </td>
            <td>
                Operating unit name
            </td>
            <td>
                Request date				
            </td>
            <td>
                Start date
            </td>
            <td class="bg-light">
                Project Status
            </td>
        </tr>
    </table>
    </div>
    </div>
    
    <div class="card mg-b-20">
    <div class="card-header bg-success tx-white">
        Complated Projects
    </div>
    <div class="card-body rounded-bottom table-wr-br">
    <table class="table tx-12">
        <tr class="tx-16">
            <td colspan="4">
                <a href="project-single">
                Project title
                </a>		
            </td>
            <td class="bg-light">
                Complate Date: June 18
            </td>
        </tr>
        <tr>
            <td>
                Applicant unit name
            </td>
            <td>
                Operating unit name
            </td>
            <td>
                Request date				
            </td>
            <td>
                Start date
            </td>
            <td class="bg-success tx-white">
                Status: Complated
            </td>
        </tr>
    </table>
    <table class="table tx-12">
        <tr class="tx-16">
            <td colspan="4">
                <a href="project-single">
                Project title
                </a>		
            </td>
            <td class="bg-light">
                Complate Date: June 18
            </td>
        </tr>
        <tr>
            <td>
                Applicant unit name
            </td>
            <td>
                Operating unit name
            </td>
            <td>
                Request date				
            </td>
            <td>
                Start date
            </td>
            <td class="bg-success tx-white">
                Status: Complated
            </td>
        </tr>
    </table>
    <table class="table tx-12">
        <tr class="tx-16">
            <td colspan="4">
                <a href="project-single">
                Project title
                </a>		
            </td>
            <td class="bg-light">
                Complate Date: June 18
            </td>
        </tr>
        <tr>
            <td>
                Applicant unit name
            </td>
            <td>
                Operating unit name
            </td>
            <td>
                Request date				
            </td>
            <td>
                Start date
            </td>
            <td class="bg-success tx-white">
                Status: Complated
            </td>
        </tr>
    </table>
    </div>
    </div>
    
    <div class="card mg-b-20">
    <div class="card-header bg-dark tx-white">
        Closed Projects
    </div>
    <div class="card-body rounded-bottom table-wr-br">
    <table class="table tx-12">
        <tr class="tx-16">
            <td colspan="4">
                <a href="project-single">
                Project title
                </a>		
            </td>
            <td class="bg-light">
                the reason
            </td>
        </tr>
        <tr>
            <td>
                Applicant unit name
            </td>
            <td>
                Operating unit name
            </td>
            <td>
                Request date				
            </td>
            <td>
                Start date: -
            </td>
            <td class="bg-dark tx-white">
                Status: Closed
            </td>
        </tr>
    </table>
    </div>
    </div>
    
    </div>
    
</div>
@endsection
