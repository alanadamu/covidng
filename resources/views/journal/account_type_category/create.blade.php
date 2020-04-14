@extends('layouts.app', [
    'titlePage' => __('Account Type Category Management'),
    'menuParent' => 'accounts',
    'activePage' => 'account_type_category'
])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">{{ __('Account Type Category Management') }}</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('journal_account_type_category.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('journal_account_type_category.store') }}" autocomplete="off">
                                @csrf
                                
                                <h6 class="heading-small text-muted mb-4">{{ __('Category information') }}</h6>
                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                        <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>

                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>

                                    <div class="form-group{{ $errors->has('account_type_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-account-type_id">{{ __('Account Type') }}</label>
                                        <select class="selectpicker col-sm-12 pl-0 pr-0" name="account_type_id" data-style="select-with-transition" title="" data-size="100" required>
                                            <option value="">-</option>
                                            @foreach ($account_types as $account_type)
                                                <option value="{{ $account_type->id }}" {{ $account_type->id == old('account_type_id') ? 'selected' : '' }}>{{ $account_type->name }}</option>
                                            @endforeach
                                        </select>

                                        @include('alerts.feedback', ['field' => 'account_type_id'])
                                    </div>
                                    

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection