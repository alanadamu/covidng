<div class="navbar-minimize-fixed">
  <button class="minimize-sidebar btn btn-link btn-just-icon">
    <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
    <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
  </button>
</div>
<div class="sidebar" data="orange">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
-->
  <div class="sidebar-wrapper">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          {{ __('CT') }}
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          {{ __('Creative Tim') }}
        </a>
    </div>
    <ul class="nav">
      <li class="{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a href="{{ route('home') }}">
          <i class="tim-icons icon-chart-pie-36"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="{{ $menuParent == 'covid' ? ' active' : '' }}">
        <a data-toggle="collapse" href="#covid19Data" {{ $menuParent == 'forms' ? 'aria-expanded="true"' : '' }}>
          <i class="tim-icons icon-notes"></i>
          <p>
            {{ __('Covid19 Data') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ $menuParent == 'covid' ? 'show' : '' }}" id="covid19Data">
          <ul class="nav">
            <li class="{{ $activePage == 'covid-covid_case' ? ' active' : '' }}">
              <a href="{{ route('covid.covid_case.index') }}">
                <span class="sidebar-mini-icon">RF</span>
                <span class="sidebar-normal"> {{ __('Cases') }} </span>
              </a>
            </li>
            <li class="{{ $activePage == 'covid-discharge' ? ' active' : '' }}">
              <a href="{{ route('covid.discharge.index') }}">                
                <span class="sidebar-normal"> {{ __('Recoveries') }} </span>
              </a>
            </li>
            <li class="{{ $activePage == 'covid-death' ? ' active' : '' }}">
              <a href="{{ route('covid.death.index') }}">
                <span class="sidebar-mini-icon">EF</span>
                <span class="sidebar-normal"> {{ __('Deaths') }} </span>
              </a>
            </li>            
            <li class="{{ $activePage == 'covid-test' ? ' active' : '' }}">
              <a href="{{ route('covid.test.index') }}">
                <span class="sidebar-mini-icon">W</span>
                <span class="sidebar-normal"> {{ __('Tests') }} </span>
              </a>
            </li>
            <li class="{{ $activePage == 'covid-state' ? ' active' : '' }}">
              <a href="{{ route('covid.state.index') }}">
                <span class="sidebar-mini-icon">W</span>
                <span class="sidebar-normal"> {{ __('States') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="{{ $menuParent == 'manage' ? ' active' : '' }}">
        <a data-toggle="collapse" href="#manageItems" {{ $menuParent == 'forms' ? 'aria-expanded="true"' : '' }}>
          <i class="tim-icons icon-settings"></i>
          <p>
            {{ __('Manage') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ $menuParent == 'manage' ? 'show' : '' }}" id="manageItems">
          <ul class="nav">
            <li class="{{ $activePage == 'manage-state' ? ' active' : '' }}">
              <a href="{{ route('covid.state.index') }}">
                <span class="sidebar-mini-icon">W</span>
                <span class="sidebar-normal"> {{ __('States') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>