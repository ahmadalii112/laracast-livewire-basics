@extends('layouts.app')

@section('content')
<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">DropDown Example</h1>
    </div>
</header>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <h2 class="text-lg font-semibold">Dynamic Dropdown</h2>
            <livewire:search-dropdown />
        </div>
    </div>
</main>
@endsection
