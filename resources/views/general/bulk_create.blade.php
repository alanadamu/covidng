@extends('layouts.app', ['activePage' => 'item-management', 'menuParent' => 'laravel', 'titlePage' => __('Item Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" enctype="multipart/form-data" action="{{ route(isset($route_store) ? $route_store : $route_name.'.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">{{ __($blade_data['createLabel']) }}</h4>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route($route_name.'.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="col-12 mt-2">
                    @include('alerts.errors')
                </div>
                
                <div class="row ml-auto">
                    <div class="col">
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                             
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            <div>
                             <span class="btn btn-raised btn-round btn-primary btn-file">
                                <span class="fileinput-new">Select File</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="data" />
                             </span>
                                 <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
                                 <i class="fa fa-times"></i> Remove</a>
                            </div>
                         </div>
                    </div>
                
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn">{{ __($blade_data['createLabel']) }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
