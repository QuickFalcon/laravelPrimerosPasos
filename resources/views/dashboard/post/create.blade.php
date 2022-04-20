@extends('dashboard.layout');

@section('content')
<h1>Create Post</h1>

@include('dashboard.fragment._errors-form')

<form action="{{ route('post.store') }}" method="post">
    @csrf

    <label>Title</label>
    <input type="text" name='title'>

    <label>Slug</label>
    <input type="text" name='slug'>

    <label>Category</label>
    <select name="category_id">
        @foreach ( $categories as $title => $id )
            <option value="{{ $id }}">{{ $title }}</option>
        @endforeach
    </select>

    <label>Posted</label>
    <select name="posted">
        <option value='not'> Not </option>
        <option value='yes'> Yes </option>
    </select>

    <label>Content</label>
    <textarea name='content'></textarea>

    <label>Description</label>
    <textarea name='description'></textarea>

    <button type="submit">Submit</button>
</form>
@endsection