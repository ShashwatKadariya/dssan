@extends('layouts.admin_layout')

@section('content')
    <div class="p-4">
        <a class="back-btn" href="/dashboard">Back</a>
        <div class="flex flex-row justify-between px-2 py-4">
            <div>
                <p class="text-xl font-semibold">Team</p>
                <p class="text-sm">A list of current team members in DSSAN.</p>
            </div>
            <form action="{{ route('team.create') }}">
                <button type="submit" class="create-btn">Add
                    Member</button>
            </form>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr class="border">
                        <th scope="col" class="p-3">Image</th>
                        <th scope="col" class="p-3">First Name</th>
                        <th scope="col" class="p-3">Last Name</th>
                        <th scope="col" class="p-3">Designation</th>
                        <th scope="col" class="p-3">Position</th>
                        <th scope="col" class="p-3">Statement</th>
                        <th scope="col" class="p-3">LinkedIn url</th>
                        <th scope="col" colspan="2" class="p-3">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($teams as $team)
                        <tr class="bg-white border hover:bg-gray-50">
                            <td class="p-3"><img src="{{ asset('/storage/' . $team->image) }}" alt="image"
                                    class="max-w-20 max-h-20 rounded-full mx-auto"></td>
                            <td class="p-3">{{ $team->first_name }}</td>
                            <td class="p-3">{{ $team->last_name }}</th>
                            <td class="p-3">{{ $team->designation }}</td>
                            <td class="p-3">{{ $team->position }}</td>
                            <td class="p-3">{{ $team->statement }}</td>
                            <td class="p-3">{{ $team->linkedin_url }}</td>
                            <td class="p-3">
                                <form id="submitForm_{{ $team->id }}" action="{{ route('team.destroy', $team->id) }}"
                                    method="POST">
                                    <a class="font-medium text-blue-600 hover:underline pb-1"
                                        href="{{ route('team.edit', $team->id) }}">Edit</a>
                                    <br>
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="font-medium text-red-600 hover:underline pt-1"
                                        onclick="deleteBox({{ $team->id }})">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
