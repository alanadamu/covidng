@extends('layouts.app', [
                    'activePage' => 'user-management', 
                    'menuParent' => 'laravel', 
                    'titlePage' => __('User Management')])


@section('content')
<div class="content">
    <router-view></router-view>
</div>


@endsection
