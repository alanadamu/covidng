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
                @if (isset($blade_data['createLabel']))
                    {{-- @can('create', App\Accounts::class) --}}
                      <div class="row">
                        <div class="col-12 text-right mb-3">
                            <a href="{{ route($route_name.'.create') }}" class="btn btn-sm btn-primary">{{ __($blade_data['createLabel']) }}</a>
                        </div>
                      </div>                               
                    {{-- @endcan --}}
                @endif
                
                {!!$model->links()!!}
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
                          @php
                              // dd($item);
                          @endphp
                              @if ($item['has_relationship'] && $m->{$item['relationship_name']})
                                <td>
                                  {{ $m->{$item['relationship_name']}->{$item['relationship_target']} }}
                                </td>
                              @else
                              <td>
                                {{ $m->{$item['key']} }}
                              </td>
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
                                  @if ($m->{$action['action_indicator_field']} == $action['action_indicator_target'])
                                    <a href="{{ route($action['route_to'], $m->id) }}" class="btn btn-link btn-{{$icon_color}} btn-icon btn-sm edit"><i class="tim-icons {{$action['icon']}}"></i></a>
                                  @else
                                    <div class="btn btn-link btn-{{$icon_color}} btn-icon btn-sm edit"><i class="tim-icons {{$action['icon']}}"></i></div>
                                  @endif
                                  
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
