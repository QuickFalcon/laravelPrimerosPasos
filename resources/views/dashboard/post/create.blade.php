<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    <h1>Create Post</h1>

    @if ($errors->any())
        @foreach($errors->all() as $error)
            <div class='error'> {{$error}} </div>
        @endforeach
    @endif

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
    
</body>
</html>