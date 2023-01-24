@extends('layouts.admin_layout')

@section('content')
    <div class="p-4">
        <a class="back-btn" href="/dashboard">Back</a>
        <div class="flex flex-row justify-between px-2 py-4">
            <div>
                <p class="text-xl font-semibold">Batch</p>
                <p class="text-sm">Current batches in Deerwalk Sifal School.</p>
            </div>
            <form action="{{ route('batch.create') }}">
                <button type="submit" class="create-btn">Add
                    Batch</button>
            </form>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-1/2 text-sm mx-auto">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr class="border">
                        <th scope="col" class="p-3">Batch</th>
                        <th scope="col" colspan="3" class="p-3">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($batches as $batch)
                        <tr class="bg-white border hover:bg-gray-50">
                            <td class="p-3">{{ $batch->batch }}</td>
                            <td class="p-3">
                                <form id="submitForm_{{ $batch->id }}" action="{{ route('batch.destroy', $batch->id) }}"
                                    method="POST">
                                    <a class="mx-2 font-medium text-green-600 hover:underline"
                                        href="{{ route('batch.show', $batch->id) }}">View</a>
                                    <a class="mx-2 font-medium text-blue-600 hover:underline"
                                        href="{{ route('batch.edit', $batch->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="mx-2 font-medium text-red-600 hover:underline"
                                        onclick="deleteBox({{ $batch->id }})">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
