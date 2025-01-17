@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')

    


<div class="row">
                <div class="col-xs-12">
                    <h2>Overview</h2>
                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>{{ $zone->name }}</h3></div>
                        <div class="panel-body">

                             @if($zoneSetting)
                            <h4>Summary</h4>
                            <table class="table table-bordered">
            <tbody>
                <tr>
                    <td><b>Security Level:</b> <a href="firewall">{{ str_replace("_"," ",title_case($zoneSetting->where('name','security_level')->first()->value)) }}</a></td>
                    <td><b>Caching Level:</b> {{ $zoneSetting->where('name','browser_cache_ttl')->first()->value }}</td>
                    <td><b>SSL:</b> {{ str_replace("_"," ",title_case($zoneSetting->where('name','ssl')->first()->value)) }}</td>
                </tr>
                <tr>
                    <td><b>Development Mode:</b> {{ $zoneSetting->where('name','development_mode')->first()->value }}</td>
                    <td><b>DNS Records:</b> {{ $zone->dns->count() }} records</td>
                    <td><b>Email Address Obfuscation:</b> {{ str_replace("_"," ",title_case($zoneSetting->where('name','email_obfuscation')->first()->value)) }}</td>
                </tr>
            </tbody>
        </table>

         @else

            It looks like Zone is marked as pending. Please make sure that Zone is using correct DNS.
            @if((auth()->user()->id==1 OR auth()->user()->id!=$zone->user_id) AND auth()->user()->can('users_manage'))
                <br>
                <br>
                <div class="row" >
                    <div class="col-lg-2">
                Primary Nameserver:
            </div>
            <div class="col-lg-7">
                {{ $zone->name_server1 }}
                </div>
            </div>
                
                

                <div class="row" >
                    <div class="col-lg-2">
                 Secondary Nameserver:
            </div>
            <div class="col-lg-7">
                {{ $zone->name_server2 }}
                </div>
            </div>
            

            @else

            
               
              
            @endif


        @endif

                        </div>
                    </div>
                </div>
            </div>









@stop

@section('javascript') 
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('admin.users.mass_destroy') }}';
    </script>
@endsection
