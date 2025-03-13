@extends('layouts.app')

@section('content')
<div class="container py-10 mx-auto">
    <h2 class="text-3xl font-bold text-center text-pink-600">📸 Kenangan Indah Kita</h2>
    <div class="grid grid-cols-2 gap-4 mt-6 md:grid-cols-3">
        @foreach(['1', '2', '3', '4', '5', '6'] as $img)
        <img src="https://source.unsplash.com/400x300/?love,{{ $img }}" class="rounded-lg shadow-md">
        @endforeach
    </div>
</div>
@endsection
{{-- test --}}