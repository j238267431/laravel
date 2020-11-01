@extends('layouts.main')
@section('content')
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Author -->
            <h2>
                {{ $category }}
            </h2>

            <hr>

    @forelse ($news as $n)

        <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
                <h5 class="mt-0">
                    <a href="{{ route('categories.show.news', ['id' => $n['categoryId'], 'newsId' => $n['id']]) }}">
                        {{ $n['title'] }}
                    </a>
                </h5>
            </div>
        </div>
    @empty
        <p>no news</p>
    @endforelse
    </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
                    </div>
                </div>
            </div>

            <div class="card my-4">
                <h5 class="card-header">Categories</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                @forelse($categories as $c)
                                    <li>
                                        <a href="{{ route('categories.show', ['id' => $c['id']]) }}">{{ $c['category_name'] }}</a>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                        {{--            <div class="col-lg-6">--}}
                        {{--                <ul class="list-unstyled mb-0">--}}
                        {{--                    <li>--}}
                        {{--                        <a href="#">JavaScript</a>--}}
                        {{--                    </li>--}}
                        {{--                    <li>--}}
                        {{--                        <a href="#">CSS</a>--}}
                        {{--                    </li>--}}
                        {{--                    <li>--}}
                        {{--                        <a href="#">Tutorials</a>--}}
                        {{--                    </li>--}}
                        {{--                </ul>--}}
                        {{--            </div>--}}
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-body">
                     put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                </div>
            </div>

        </div>
        </div>
    </div>
@stop
