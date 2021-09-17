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


        <section class="my-4">
            <h4>Inventory Stats</h4>

            <div class="row mt-3" style="min-height: 150px">
                <div class="col-md-4">
                    <div class="p-3 category-box">
                        <h5 class="title">
                            {{ count($categories) }}
                        </h5>
                        <p class="description">
                            CATEGORY TOTAL
                        </p>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="p-3 category-box">
                        <h5 class="title">
                            {{ $item_count }}
                        </h5>
                        <p class="description">
                            ITEMS TOTAL
                        </p>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="p-3 category-box">
                        <h5 class="title">
                            {{ $latest->created_at->diffForHumans() }}
                        </h5>
                        <p class="description">
                            LAST INSERTED
                        </p>
                    </div>
                </div>

        </section>


        <section class="my-4">
            <h4>Categories</h4>

            <div class="row mt-3">

                <div class="col-md-3">
                    <div class="p-3 category-box" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <span style="font-size: 12px"> ADD NEW CATEGORY</span>

                        <p class="description">
                            <i style="font-size:50px" class="ion-plus-circled"></i>
                        </p>

                    </div>
                </div>

                @foreach ($categories as $category)
                    <div class="col-md-3">
                        <div class="p-3 category-box">
                            <span style="font-size: 12px">VIEW ITEMS</span>
                            <h5 class="title">
                                <a href="{{ route('categories', ['id' => $category->id]) }}">{{ $category->name }}</a>
                            </h5>
                            <p class="description">
                                {{ $category->description }}
                            </p>

                            <p class="trash">
                                <a href="{{ route('category.delete', ['id' => $category->id]) }}"><i
                                        class="ion-trash-a"></i></a>
                            </p>
                        </div>
                    </div>

                @endforeach
            </div>
        </section>

    </div>







    @include('partials.create-category')
    @include('partials.create-item')


@endsection
