@extends('layouts.app')

@section('content')
    @if ($onPage === 'Table')
        <div class="w-full min-h-screen bg-gray-100">
            <div class="p-10">
                <div class="p-4">
                    @include('partials.chart')
                </div>
                @include('partials.table')
            </div>
        </div>
    @endif
    @if ($onPage === 'Create')
        <div class="w-full min-h-screen bg-gradient-to-r from-indigo-500 to-blue-500">
            @include('partials.create')
        </div>
    @endif
@endsection
