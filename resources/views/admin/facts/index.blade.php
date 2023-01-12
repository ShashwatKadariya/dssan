@extends('layouts.admin_layout')

@section('content')
    <div class="p-4">
        <a class="back-btn" href="/dashboard">Back</a>
        @foreach ($facts as $fact)
            <div class="flex flex-row justify-between px-2 py-4">
                <div>
                    <p class="text-xl font-semibold"><a href="{{ route('fact.create') }}">Fact</a></p>
                    <p class="text-sm">Number of graduates and current members in DSSAN.</p>
                </div>
                <form action="{{ route('fact.edit', $fact->id) }}">
                    <button type="submit" class="create-btn">Edit Details</button>
                </form>
            </div>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr class="border">
                            <th scope="col" class="p-3">Title</th>
                            <th scope="col" class="p-3">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border hover:bg-gray-50">
                            <td class="p-3">Graduated</td>
                            <td class="p-3">{{ $fact->graduated }}</td>
                        </tr>
                        <tr class="bg-white border hover:bg-gray-50">
                            <td class="p-3">Graduated Text</td>
                            <td class="p-3">{{ $fact->graduated_text }}</td>
                        </tr>
                        <tr class="bg-white border hover:bg-gray-50">
                            <td class="p-3">Current Members</td>
                            <td class="p-3">{{ $fact->current_members }}</td>
                        </tr>
                        <tr class="bg-white border hover:bg-gray-50">
                            <td class="p-3">Current Members Text</td>
                            <td class="p-3">{{ $fact->current_members_text }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
@endsection
