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
                                <div class="col-8">
                                    <h3 class="mb-0">{{ __('Account History') }}</h3>

                                </div>
                                
                            </div>
                        </div>

                        <div class="card-body">
                        <div class="table">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover datatable-primary" style="display:none">
                                <thead class="text-primary">
                                    <tr>
                                        <th scope="col">{{ __('Date') }}</th>
                                        <th scope="col">{{ __('Description') }}</th>
                                        <th scope="col">{{ __('Debit') }}</th>
                                        <th scope="col">{{ __('Credit') }}</th> 
                                        <th scope="col">{{ __('Balance') }}</th>
                                        <th scope="col">{{ __('Creation Date') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($journal as $entry)
                                        <tr>
                                            
                                            <td>
                                                {{ \Carbon\Carbon::parse($entry->date)->format('d/m/Y H:i') }}
                                            </td>
                                            <td>
                                                {{$entry->reason}}
                                            </td>
                                            <td>
                                                @if($entry->transaction_type_id == 1)
                                                    {{ number_format($entry->amount,2) }}
                                                @endif
                                            </td>
                                            <td>
                                                @if($entry->transaction_type_id == 2)
                                                    {{ number_format($entry->amount,2) }}
                                                @endif
                                            </td>
                                            <td>
                                                {{ number_format($entry->balance,2) }}
                                            </td>
                                            <td>{{ $entry->created_at->format('d/m/Y H:i') }}</td>
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
