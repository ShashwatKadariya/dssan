@extends('layouts.admin_layout')

@section('content')
    <div class="p-4">
        <a class="back-btn" href="{{ route('batch.index') }}">Back</a>
        <div class="flex flex-row justify-between px-2 py-4">
            <div>
                <p class="text-xl font-semibold">Alumni</p>
                <p class="text-sm">A list of students in {{ $batch->batch }}.</p>
            </div>
            <form action="{{ route('batch.alumni.create', $batch->id) }}">
                <button type="submit" class="create-btn">Add
                    Student</button>
            </form>

        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr class="border">
                        <th scope="col" class="p-3">Image</th>
                        <th scope="col" class="p-3">Full Name</th>
                        <th scope="col" class="p-3">Email</th>
                        <th scope="col" class="p-3">Address</th>
                        <th scope="col" class="p-3">Contact</th>
                        <th scope="col" class="p-3">Social Link</th>
                        <th scope="col" class="p-3">Birth Date</th>
                        <th scope="col" class="p-3">Gender</th>
                        <th scope="col" class="p-3">Current University</th>
                        <th scope="col" class="p-3">Major Subject</th>
                        <th scope="col" colspan="2" class="p-3">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($alumni as $alumnus)
                        <tr class="bg-white border hover:bg-gray-50">
                            <td class="p-3">
                                @if ($alumnus->image)
                                    <div class="w-20 h-20 rounded-full bg-cover mx-auto"
                                        style="background-image: url({{ asset('/storage/' . $alumnus->image) }})"></div>
                                @else
                                    <div class="w-20 h-20 rounded-full bg-cover mx-auto"
                                        style="background-image: url({{ asset('images/default/default.png') }})"></div>
                                @endif
                            </td>
                            <td class="p-3">{{ $alumnus->full_name }}</td>
                            <td class="p-3">{{ $alumnus->email }}</th>
                            <td class="p-3">{{ $alumnus->address }}</td>
                            <td class="p-3">{{ $alumnus->contact }}</td>
                            <td class="p-3">{{ $alumnus->social_link }}</td>
                            <td class="p-3">{{ $alumnus->birth_date }}</td>
                            <td class="p-3">{{ $alumnus->gender }}</td>
                            <td class="p-3">{{ $alumnus->current_university }}</td>
                            <td class="p-3">{{ $alumnus->major_subject }}</td>
                            <td class="p-3">
                                <form id="submitForm_{{ $alumnus->id }}"
                                    action="{{ route('alumni.destroy', $alumnus->id) }}" method="POST">
                                    <a class="font-medium text-blue-600 hover:underline pb-1"
                                        href="{{ route('alumni.edit', $alumnus->id) }}">Edit</a>
                                    <br>
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="font-medium text-red-600 hover:underline pt-1"
                                        onclick="deleteBox({{ $alumnus->id }})">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
