@extends('layouts.app', [
    'titlePage' => __('Journals'),
    'menuParent' => 'journal',
    'activePage' => 'journal'
])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8 text-center">
                                    <h1 class="mb-100">{{ __('Balance Sheet   ') }}</h1>
                                </div>

                            </div>
                                {!!$blade_code!!}
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
