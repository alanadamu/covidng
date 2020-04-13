@extends('layouts.app', [
                            'activePage' => 'res-company', 
                            'menuParent' => 'res', 
                            'titlePage' => __('Companies')
                        ])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{ __('Companies') }}</h4>
              </div>
              <div class="card-body">
                {!!$companies->links();!!}
                <div class="table">
                  <table class="table table-striped table-no-bordered table-hover">
                    <thead class="text-primary">
                      <th>
                          {{ __('Name') }}
                      </th>
                      <th>
                        {{ __('Creation date') }}
                      </th>
                    </thead>
                    <tbody>
                      @foreach($companies as $company)
                        <tr>
                          <td>
                            {{ $company->name }}
                          </td>
                          <td>
                            {{ $company->created_at->format('Y-m-d') }}
                          </td>
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
