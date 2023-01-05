@extends('layouts.admin_layout')

@section('content')
    <div class="p-4">
        <a class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded text-sm px-5 py-2 text-center"
            href="/admin/dashboard">Back</a>
    </div>
    <div class="px-4">
        <div class="flex flex-row justify-between p-4">
            <div>
                <p class="text-xl font-semibold">Team</p>
                <p class="text-sm">A list of all the members in alumni team.</p>
            </div>
            <form action="{{ route('team.create') }}">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Add
                    Member</button>
            </form>
        </div>

        <div class="relative overflow-x-auto rounded-lg">
            <table class="w-full text-sm text-left">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr class="border">
                        <th scope="col" class="px-6 py-3">Image</th>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Designation</th>
                        <th scope="col" class="px-6 py-3">Position</th>
                        <th scope="col" class="px-6 py-3">Statement</th>
                        <th scope="col" class="px-6 py-3">LinkedIn url</th>
                        <th scope="col" colspan="2" class="px-6 py-3 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $team)
                        <tr class="bg-white border hover:bg-zinc-50">
                            <td class="px-6 py-3"><img src="{{ asset('/storage/' . $team->image) }}" alt="image"
                                    class="w-20 h-20 rounded-full"></td>
                            <th scope="row" class="px-6 py-3 font-medium">
                                {{ $team->full_name }}</th>
                            <td class="px-6 py-3">{{ $team->designation }}</td>
                            <td class="px-6 py-3">{{ $team->position }}</td>
                            <td class="px-6 py-3">{{ $team->statement }}</td>
                            <td class="px-6 py-3">{{ $team->linkedin_url }}</td>
                            <td class="flex items-center justify-center px-6 py-12">
                                <form action="{{ route('team.destroy', $team->id) }}" method="POST">
                                    <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline pr-1"
                                        href="{{ route('team.edit', $team->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline pl-1">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
