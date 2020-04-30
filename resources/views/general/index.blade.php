@extends('layouts.app', [
                            'activePage' => $blade_data['activePage'], 
                            'menuParent' => $blade_data['menuParent'], 
                            'titlePage' => __($blade_data['titlePage'])
                        ])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{ __($blade_data['titlePage']) }}</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <div class="btn-group float-right">
                      @foreach ($blade_data['indexLinks'] as $item)
                        {{-- @can('create', App\Accounts::class) --}}
                        <div class="btn-group m-2 ">
                          <a href="{{ route($item['route']) }}" class="btn btn-sm btn-primary">{{ __($item['label']) }}</a>
                        </div>                              
                      {{-- @endcan --}}
                    @endforeach
                    </div>
                  </div>
                </div>
                <div class="flex-wrap">
                  {!!$model->onEachSide(2)->links()!!}
                </div>
                
                
                <div class="table">
                  <table class="table table-striped table-no-bordered table-hover">
                    <thead class="text-primary">
                      @foreach ($blade_data['indexData'] as $item)
                        <th>
                            {{ __($item['label']) }}
                        </th>
                      @endforeach
                      @can($blade_data['indexActions']['policy_name'], App\User::class)
                        <th class="text-right">
                          {{ __('Actions') }}
                        </th>
                      @endcan
                    </thead>
                    <tbody>
                      @foreach($model as $m)
                        <tr>
                          @foreach ($blade_data['indexData'] as $item)
                              @if ($item['has_relationship'] && $m->{$item['relationship_name']})
                                <td>
                                  {{ $m->{$item['relationship_name']}->{$item['relationship_target']} }}
                                </td>
                              @else
                                @if ($item['format_type'] == 'date')
                                  <td>
                                    {{ \Carbon\Carbon::parse($m->{$item['key']})->format($item['format_target']) }}
                                  </td>
                                @else
                                  <td>
                                    {{ $m->{$item['key']} }}
                                  </td>
                                @endif                              
                              @endif
                          @endforeach
                          @can($blade_data['indexActions']['policy_name'], App\User::class)
                            <td class="td-actions text-right">
                              @foreach ($blade_data['indexActions']['actions'] as $action)
                              @php
                                  if($m->{$action['icon_color_indicator_field']} == $action['icon_color_indicator_target']){
                                    $icon_color = $action['icon_color_indicator_true'];
                                  } else {
                                    $icon_color = $action['icon_color_indicator_false'];
                                  }
                              @endphp
                                @can($action['model_policy_name'], $m)
                                  <a href="{{ route($action['route_to'], $m) }}" class="btn btn-link btn-{{$icon_color}} btn-icon btn-sm edit"><i class="tim-icons {{$action['icon']}}"></i></a>
                                  
                                @endcan
                              @endforeach
                              
                              @else
                                
                            </td>
                          @endcan
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
