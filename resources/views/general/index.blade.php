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
                {!!$model->links()!!}
                <div class="table">
                  <table class="table table-striped table-no-bordered table-hover">
                    <thead class="text-primary">
                      @foreach ($blade_data['indexData'] as $item)
                        <th>
                            {{ __($item['label']) }}
                        </th>
                      @endforeach
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
