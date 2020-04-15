@extends('layouts.app', [
    'titlePage' => __('Journals'),
    'menuParent' => 'journal',
    'activePage' => 'journal-show-account'
])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('Account History') }}</h4>
                        </div>
                        <div class="card-body">
                            {{-- @can('create', App\Accounts::class) --}}
                            <div class="row">
                                <div class="col-12 text-right mb-3">
                                    <a href="{{ route('journal.create') }}" class="btn btn-sm btn-primary">{{ __('Add Journal Entry') }}</a>
                                </div>
                            </div>                                
                            {{-- @endcan --}}
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
@push('js')
  <script>
    $(document).ready(function() {
      $('#datatables').fadeIn(1100);
      $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search entries",
        },
        "columnDefs": [
          { "orderable": false, "targets": 3 },
        ],
      });
    });
  </script>
@endpush