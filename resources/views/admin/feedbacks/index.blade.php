@extends('layouts.admin_layout')

@section('content')
    <div class="p-4">
        <a class="back-btn" href="/dashboard">Back</a>
        <div class="px-2 py-4">
            <p class="text-xl font-semibold">Feedback</p>
            <p class="text-sm">Feedback messages received from users.</p>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr class="border">
                        <th scope="col" class="p-3">Full Name</th>
                        <th scope="col" class="p-3">Email address</th>
                        <th scope="col" class="p-3">Subject</th>
                        <th scope="col" class="p-3">Batch</th>
                        <th scope="col" class="p-3">Message</th>
                        <th scope="col" class="p-3">Image</th>
                        <th scope="col" class="p-3">Display Status</th>
                        <th scope="col" colspan="2" class="p-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($feedbacks as $feedback)
                        <tr class="bg-white border hover:bg-gray-50">
                            <td class="p-3">{{ $feedback->full_name }}</td>
                            <td class="p-3">{{ $feedback->email }}</th>
                            <td class="p-3">{{ $feedback->subject }}</td>
                            <td class="p-3">{{ $feedback->batch }}</td>
                            <td class="p-3">{{ $feedback->message }}</td>
                            @if ($feedback->image)
                                <td class="p-3"><img src="{{ asset('/storage/' . $feedback->image) }}" alt="&#10060;"
                                        class="max-h-20 max-w-20 rounded-full"></td>
                            @else
                                <td class="p-3"><img src="{{ asset('/storage/default/default.png') }}"
                                        alt="&#10060;" class="max-h-20 max-w-20 rounded-full"></td>
                            @endif
                            <td class="p-3">{{ $feedback->display_status }}</td>
                            <td class="p-3">
                                <form id="submitForm_{{ $feedback->id }}"
                                    action="{{ route('feedback.destroy', $feedback->id) }}" method="POST">
                                    <a class="font-medium text-blue-600 hover:underline pb-1"
                                        href="{{ route('feedback.edit', $feedback->id) }}">Edit</a>
                                    <br>
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="font-medium text-red-600 hover:underline pt-1"
                                        onclick="deleteBox({{ $feedback->id }})">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
