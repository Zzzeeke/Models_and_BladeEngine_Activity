@include('partials.header')

<div class="container mx-auto p-8">
    <table class="table-auto w-full font-serif text-sm text-left rtl:text-right">
        <thead class="uppercase">
            <tr>
                <th class="px-4 py-2 border ">ID</th>
                <th class="px-4 py-2 border ">ISBN</th>
                <th class="px-4 py-2 border ">Title</th>
                <th class="px-4 py-2 border ">Author</th>
                <th class="px-4 py-2 border ">Description</th>
                <th class="px-4 py-2 border ">Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td class="px-4 py-2 border ">{{ $book->id }}</td>
                    <td class="px-4 py-2 border ">{{ $book->isbn }}</td>
                    <td class="px-4 py-2 border ">{{ $book->title }}</td>
                    <td class="px-4 py-2 border ">{{ $book->author }}</td>
                    <td class="px-4 py-2 border ">{{ $book->description }}</td>
                    <td class="px-4 py-2 border ">{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@include('partials.footer')