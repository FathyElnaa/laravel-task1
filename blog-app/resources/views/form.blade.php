@extends('layouts.app')

@section('title', 'Form')

@section('Header')
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('Content')
    <form action="{{ route('store') }}" method="POST" class="mb-5">
        @csrf
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" id="title" name="title">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="form-group">
            <label for="content">content</label>
            <textarea class="form-control" id="content" name="content" rows="5"></textarea>
            @error('content')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="is_published">status</label>
            <select class="form-control" id="is_published" name="is_published">
                <option value="1">published</option>
                <option value="0">Unpublished</option>
            </select>

        </div>

        <button type="submit" class="btn btn-success">add post</button>
    </form>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">Id</th>
                            <th width="25%">Title</th>
                            <th width="40%">Content</th>
                            <th width="15%">Status</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($forms as $form)
                            <tr>
                                <td>{{ $form->id }}</td>
                                <td>{{ $form->title }}</td>
                                <td>{{ $form->content }}</td>
                                <td>
                                    <span class="badge text-bg-secondary">
                                        {{ $form->is_published ? 'Published' : 'Unpublished' }}
                                    </span>
                                </td>
                                <td>
                                    <a href="3" class="btn btn-sm btn-warning btn-action">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger btn-action">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        @endsection
