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
                            <h4 class="card-title">{{ __('Journal Entries') }}</h4>
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
                                            <th scope="col">{{ __('ID') }}</th>
                                            <th scope="col">{{ __('Account Name') }}</th>
                                            <th scope="col">{{ __('Account Type') }}</th>
                                            <th scope="col">{{ __('Type') }}</th>
                                            <th scope="col">{{ __('Amount') }}</th>
                                            <th scope="col">{{ __('Balance') }}</th>
                                            <th scope="col">{{ __('Reason') }}</th>
                                            <th scope="col">{{ __('Creation Date') }}</th>
                                            @can('manage-journals', App\User::class)
                                                <th scope="col"></th>
                                            @endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($journals as $journal)
                                            <tr>
                                                
                                                <td>
                                                    {{ $journal->id }}
                                                </td>
                                                <td>
                                                    {{ $journal->account->name }}
                                                </td>
                                                <td>
                                                    {{ $journal->account->account_type->name }}
                                                </td>
                                                <td>
                                                    {{ $journal->transaction_type->name }}
                                                </td>
                                                <td>{{ number_format($journal->amount,2) }}</td>
                                                <td>{{ number_format($journal->balance,2) }}</td>
                                                <td>{{ $journal->reason }}</td>
                                                <td>{{ $journal->created_at->format('d/m/Y H:i') }}</td>
                                                @can('manage-accounts', App\User::class)
                                                    <td class="text-right">
                                                        @if (auth()->user()->can('update', $journal) || auth()->user()->can('delete', $journal))
                                                            <div class="dropdown">
                                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="nc-icon nc-bullet-list-67"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                    {{-- @if ($user->id != auth()->id()) --}}
                                                                        @can('view', $journal)
                                                                            <a class="dropdown-item" href="{{ route('account.show', $journal->id) }}">{{ __('View') }}</a>
                                                                        @endcan
                                                                        @can('update', $journal)
                                                                            <a class="dropdown-item" href="{{ route('account.edit', $journal) }}">{{ __('Edit') }}</a>
                                                                        @endcan
                                                                        @can('delete', $journal)
                                                                            <form action="{{ route('account.destroy', $journal) }}" method="POST">
                                                                                @csrf
                                                                                @method('delete')
                                                                                <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                                                    {{ __('Delete') }}
                                                                                </button>
                                                                            </form>
                                                                        @endcan
                                                                    {{-- @else
                                                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Edit') }}</a>
                                                                    @endif --}}
                                                                </div>
                                                            </div>
                                                        @endif
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