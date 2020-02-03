@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
        <div class="row col-8 offset-2 border mb-4 bg-white">
            <div class="row">
                <div class="d-flex align-items-center p-4">
                    <div class="pr-3">
                        <a href="/profile/{{ $post->user->id }}">
                            <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px;">
                        </a>
                    </div>
                    <div>
                        <div class="font-weight-bold d-flex">
                            <a href="/profile/{{ $post->user->id }}" class="pr-1">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="">
                    <a href="/profile/{{ $post->user->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="pl-4 pt-4 pr-4">
                        <p>
                            <span class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                            </span>
                            {{ $post->caption }}
                        </p>

                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
