@extends('layouts.app', [
    'titlePage' => __('Account Type Categories'),
    'menuParent' => 'accounts',
    'activePage' => 'account_type_category'
])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('Account Types') }}</h4>
                        </div>

                        <div class="card-body">
                            {{-- @can('create', App\Accounts::class) --}}
                            <div class="row">
                                <div class="col-12 text-right mb-3">
                                    <a href="{{ route('journal_account_type_category.create') }}" class="btn btn-sm btn-primary">{{ __('Add Category') }}</a>
                                </div>
                            </div>                                
                            {{-- @endcan --}}
                            <div class="table">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover datatable-primary" style="display:none">
                                    <thead class="text-primary">
                                        <tr>
                                            {{-- <th scope="col">Photo</th> --}}
                                            <th scope="col">{{ __('Name') }}</th>
                                            <th scope="col">{{ __('Account Type') }}</th>
                                            <th scope="col">{{ __('Creation Date') }}</th>
                                            @can('manage-journal-account-type-categories', App\User::class)
                                                <th scope="col"></th>
                                            @endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>
                                                    {{ $category->name }}
                                                </td>
                                                <td>{{ $category->account_type->name }}</td>
                                                <td>{{ $category->created_at->format('d/m/Y H:i') }}</td>
                                                @can('manage-journal-account-type-categories', App\User::class)
                                                    <td class="text-right">
                                                        @if (auth()->user()->can('update', $category) || auth()->user()->can('delete', $category))
                                                            <div class="dropdown">
                                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                    {{-- @if ($user->id != auth()->id()) --}}
                                                                        @can('view', $category)
                                                                            <a class="dropdown-item" href="{{ route('journal_account_type_category.show', $category->id) }}">{{ __('View') }}</a>
                                                                        @endcan
                                                                        @can('update', $category)
                                                                            <a class="dropdown-item" href="{{ route('journal_account_type_category.edit', $category) }}">{{ __('Edit') }}</a>
                                                                        @endcan
                                                                        @can('delete', $category)
                                                                            <form action="{{ route('journal_account_type_category.destroy', $category) }}" method="POST">
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
          searchPlaceholder: "Search account types",
        },
        "columnDefs": [
          { "orderable": false, "targets": 3 },
        ],
      });
    });
  </script>
@endpush