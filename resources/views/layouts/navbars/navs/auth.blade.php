<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-minimize d-inline">
        <button class="minimize-sidebar btn btn-link btn-just-icon" rel="tooltip" data-original-title="Sidebar toggle" data-placement="right">
          <i class="tim-icons icon-align-center visible-on-sidebar-regular"></i>
          <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini"></i>
        </button>
      </div>
      <div class="navbar-toggle d-inline">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <a class="navbar-brand" href="javascript:void(0)">{{ $titlePage }}</a>
    </div>
    <button class="navbar-toggler navigation-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="dropdown nav-item">
          <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <i class="tim-icons icon-notes"></i>
            <p class="d-lg-none">
              {{ __('Covid19 Data') }}
            </p>
          </a>
          <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
            <li class="nav-link">
              <a href="{{ route('covid.covid_case.index') }}" class="nav-item dropdown-item">{{ __('Cases') }}</a>
            </li>
            <li class="nav-link">
              <a href="{{ route('covid.discharge.index') }}" class="nav-item dropdown-item">{{ __('Recoveries') }}</a>
            </li>
            <li class="nav-link">
              <a href="{{ route('covid.death.index') }}" class="nav-item dropdown-item">{{ __('Deaths') }}</a>
            </li>
            <li class="nav-link">
              <a href="{{ route('covid.test.index') }}" class="nav-item dropdown-item">{{ __('Tests') }}</a>
            </li>
          </ul>
        </li>
        <li class="dropdown nav-item">
          <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <i class="tim-icons icon-settings"></i>
            <p class="d-lg-none">
              {{ __('Manage') }}
            </p>
          </a>
          <ul class="dropdown-menu dropdown-navbar">
            <li class="nav-link">
              <a href="{{ route('covid.state.index') }}" class="nav-item dropdown-item">{{ __('States') }}</a>
            </li>
          </ul>
        </li>
        <li class="dropdown-divider d-lg-none"></li>
        <li class="search-bar input-group">
          <a href="{{ route('logout') }}" class="btn btn-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="tim-icons icon-double-right"></i>
            <span class="d-lg-none d-md-block">{{ __('Logout') }}</span>
          </a>
        </li>
        <li class="separator d-lg-none"></li>
      </ul>
    </div>
  </div>
</nav>
<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="{{ __('SEARCH') }}">
        <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('Close') }}">
          <i class="tim-icons icon-simple-remove"></i>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- End Navbar -->