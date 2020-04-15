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
                @foreach ($blade_data['indexData'] as $item)
                @if ($item['has_relationship'])
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __($item['label']) }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has($item['key']) ? ' has-danger' : '' }}">
                          <select class="selectpicker col-sm-12 pl-0 pr-0" name={{$item['key']}} data-style="select-with-transition" title="" data-size="100">
                          <option value="">-</option>
                          @foreach ( $options[$item['relationship_name_plural']]['options'] as $option)
  
                          <option value="{{ $option->id }}" {{ $option->id == old('parent_id') ? 'selected' : '' }}>{{ $option->{$item['relationship_target']} }}</option>
  
  
                          @endforeach
                        </select>
                        @include('alerts.feedback', ['field' => $item['key']])
                      </div>
                    </div>
                  </div>
                @else
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __($item['label']) }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has($item['key']) ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has($item['key']) ? ' is-invalid' : '' }}" name="{{$item['key']}}" id="input-{{$item['key']}}" type="text" placeholder="{{ __($item['label']) }}" value="{{ old($item['key']) }}"/>
                        @include('alerts.feedback', ['field' => $item['key']])
                      </div>
                    </div>
                  </div>
                @endif
                @endforeach
                
                @if (isset($blade_data['hiddenData']))
                @foreach ($blade_data['hiddenData'] as $item)
                    <input style="display:none" name="{{$item['key']}}" value="{{$item['value']}}">
                @endforeach
                @endif

                
                
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

@push('js')
<script>
  $(document).ready(function() {
    $('.datetimepicker').datetimepicker({
      icons: {
          time: "fa fa-clock-o",
          date: "fa fa-calendar",
          up: "fa fa-chevron-up",
          down: "fa fa-chevron-down",
          previous: 'fa fa-chevron-left',
          next: 'fa fa-chevron-right',
          today: 'fa fa-screenshot',
          clear: 'fa fa-trash',
          close: 'fa fa-remove'
      },
      format: 'DD-MM-YYYY'
    });
  });
</script>
@endpush