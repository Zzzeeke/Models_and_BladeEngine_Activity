<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('partials.header')

    <div class="container mx-auto py-4">
        @yield('content')
    </div>

    @include('partials.footer')

    <h2 class="section font-bold">Book Lists</h2>
    <table class="min-w-full">
        <thead>
            <tr>
                <th class="py-2 px-4 border">ID</th>
                <th class="py-2 px-4 border">ISBN</th>
                <th class="py-2 px-4 border">Title</th>
                <th class="py-2 px-4 border">Author</th>
                <th class="py-2 px-4 border">Description</th>
                <th class="py-2 px-4 border">Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td class="py-2 px-4 border">{{ $book->id }}</td>
                <td class="py-2 px-4 border">{{ $book->isbn }}</td>
                <td class="py-2 px-4 border">{{ $book->title }}</td>
                <td class="py-2 px-4 border">{{ $book->author }}</td>
                <td class="py-2 px-4 border">{{ $book->descriptin }}</td>
                <td class="py-2 px-4 border">{{ $book->date_publish }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>