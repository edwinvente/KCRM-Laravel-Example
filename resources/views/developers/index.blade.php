<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
</head>
<body>
    <h1>Developers Konecta KCRM</h1>

    <form action="{{ route('save.developer') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name Developer">
        <input type="number" name="age" placeholder="Age Developer">
        <select name="skill">
            <option value="react">React</option>
            <option value="laravel">Laravel</option>
            <option value="yii2">Yii2</option>
            <option value="jasper">Jasper report</option>
        </select>
        <button type="submit">Create developer</button>
    </form>
</body>
</html>