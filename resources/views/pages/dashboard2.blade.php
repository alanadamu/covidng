@extends('layouts.app', ['activePage' => 'dashboard', 'menuParent' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content" id="app">
    <router-view></router-view>
</div>


@endsection
