@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Post Form -->
        <form action="{{ url('post') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Post Name -->
            <div class="form-group">
                <label for="post" class="col-sm-3 control-label">Title</label>

                <div class="col-sm-6">
                    <input type="text" name="title" id="post-title" class="form-control">
                </div>
            </div>

            <!-- Post Body -->
            <div class="form-group">
                <label for="post" class="col-sm-3 control-label">Body</label>

                <div class="col-sm-6">
                    <textarea name="body" id="post-body" class="form-control"></textarea>
                </div>
            </div>

            <!-- Add Post Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Post
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Current Posts -->
    @if (count($posts) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Posts
            </div>

            <div class="panel-body">
                <table class="table table-striped post-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Post</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <!-- Post Name -->
                                <td class="table-text">
                                    <div>{{ $post->title }}</div>
                                </td>

                                <td>
									<form action="{{ url('post/'.$post->id) }}" method="POST">
							            {{ csrf_field() }}
							            {{ method_field('DELETE') }}

							            <button type="submit" class="btn btn-danger">
							                <i class="fa fa-trash"></i> Delete
							            </button>
							        </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection