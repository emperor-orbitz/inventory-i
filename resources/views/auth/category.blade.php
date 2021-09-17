@extends('layouts.app')
@section('title', 'Dashboard')
@section('app_content')
    @include('partials.header')


    <div class="container-lg my-4">
        @if ($success = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span>{{ $success }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <section class="my-3">

            <button class="btn btn-md btn-primary my-4" data-bs-toggle="modal" data-bs-target="#staticBackdropItem">Create a
                New Item</button>

            <h2>{{ $category->name }}</h2>


            <div class="row mt-3">
                @forelse ($items as $item )
                    <div class="col-md-3">
                        <div class="p-3 category-box">
                            <h5 class="title">
                                {{ $item->name }}
                            </h5>
                            <p class="description">
                                {{ $item->description }}
                            </p>

                            <p class="trash">
                                <a href="{{ route('item.delete', ['id' => $item->id]) }}"><i
                                        class="ion-trash-a"></i></a>
                            </p>
                        </div>
                    </div>

                @empty
                    <p>This Category has no Item</p>
                @endforelse
            </div>
        </section>

    </div>



@endsection


@include('partials.create-category')
@include('partials.create-item')
