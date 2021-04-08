<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
</head>
<body>
    <h1>Update of Developer</h1>

    <form action="{{ route('edit.developer') }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $developer->id }}">
        <input type="text" name="name" value="{{ $developer->developer }}" placeholder="Name Developer">
        <input type="number" name="age" value="{{ $developer->age }}" placeholder="Age Developer">
        <select name="skill">
            <option value="{{ $developer->skill }}">{{ $developer->skill }}</option>
            <option value="react">React</option>
            <option value="laravel">Laravel</option>
            <option value="yii2">Yii2</option>
            <option value="jasper">Jasper report</option>
        </select>
        <button type="submit">Update developer</button>
    </form>
</body>
</html>