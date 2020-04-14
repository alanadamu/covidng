@extends('layouts.app', ['activePage' => 'partner-create-journal', 'menuParent' => 'partner', 'titlePage' => __('Account Connection')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" enctype="multipart/form-data" action="{{ route('res.partner.store_journal') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">{{ __('Connect Customer Account') }}</h4>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('res.partner.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Customer') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('partner_id') ? ' has-danger' : '' }}">
                        <select class="selectpicker col-sm-12 pl-0 pr-0" name="partner_id" data-style="select-with-transition" title="" data-size="100">
                        <option value="">-</option>
                        @foreach ($partners as $partner)
                        <option value="{{ $partner->id }}" {{ $partner->id == old('partner_id') ? 'selected' : '' }}>{{ $partner->name }}</option>
                        @endforeach
                      </select>
                      @include('alerts.feedback', ['field' => 'partner_id'])
                    </div>
                  </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Account') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('journal_account_id') ? ' has-danger' : '' }}">
                          <select class="selectpicker col-sm-12 pl-0 pr-0" name="journal_account_id" data-style="select-with-transition" title="" data-size="100">
                          <option value="">-</option>
                          @foreach ($journal_accounts as $journal_account)
                          <option value="{{ $journal_account->id }}" {{ $journal_account->id == old('journal_account_id') ? 'selected' : '' }}>{{ $journal_account->name }}</option>
                          @endforeach
                        </select>
                        @include('alerts.feedback', ['field' => 'journal_account_id'])
                      </div>
                    </div>
                  </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn">{{ __('Add Connection') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection