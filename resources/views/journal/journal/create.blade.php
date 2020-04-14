@extends('layouts.app', ['activePage' => 'journal', 'menuParent' => 'journal', 'titlePage' => __('Journal Management')])

@section('content')
    <div class="content">
        <journal-create></journal-create>
    </div>
@endsection