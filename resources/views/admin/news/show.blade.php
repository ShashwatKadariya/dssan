@extends('layouts.admin_layout')

@section('content')
    <div class="p-4">
        <a class="back-btn" href="{{ route('news.index') }}">Back</a>
        <div class="p-8 md:w-3/5 mx-auto flex flex-col gap-4 justify-between">
            <p class="font-medium text-lg leading-6">{{ $news->headline }}</p>
            <div class="w-full aspect-3/2 object-contain bg-cover rounded-uihalf"
                style="background-image: url({{ asset('/storage/' . $news->image) }})">
            </div>
            <div class="flex justify-between items-center text-sm">
                <p class="font-normal">{{ $news->release_date->format('d M, Y') }}</p>
                <div class="flex gap-1">
                    <p class="font-normal">By:</p>
                    <p class="font-normal text-dwit-blue">{{ $news->reported_by }}</p>
                </div>
            </div>
            <div>{!! $news->article !!}</div>
        </div>
    </div>
@endsection
