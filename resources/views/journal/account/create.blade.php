@extends('layouts.app', [
    'titlePage' => __('Journal Management'),
    'menuParent' => 'journal',
    'activePage' => 'journal'
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
                                    <h3 class="mb-0">{{ __('Journal Management') }}</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('journal_account.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('journal_account.store') }}" autocomplete="off">
                                @csrf
                                
                                <h6 class="heading-small text-muted mb-4">{{ __('Journal Entry information') }}</h6>
                                <div class="pl-lg-4">


                                    <div class="form-group{{ $errors->has('parent_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-parent_id">{{ __('Parent Account') }}</label>
                                        <select class="selectpicker col-sm-12 pl-0 pr-0" name="parent_id" data-style="select-with-transition" title="" data-size="100" required>
                                            <option value="">-</option>
                                            @foreach ($accounts as $account)
                                                <option value="{{ $account->id }}" {{ $account->id == old('parent_id') ? 'selected' : '' }}>{{ $account->name }}</option>
                                            @endforeach
                                        </select>

                                        @include('alerts.feedback', ['field' => 'parent_id'])
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                        <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>

                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="is_source_check" name="is_source_check">
                                        <label class="custom-control-label" for="is_source_check">Source Account</label>
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