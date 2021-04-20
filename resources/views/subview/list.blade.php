@extends('subview/master')
@section('title', 'List the e-books')
@section('content')
<h1>List the e-books</h1>
<table border="1">
  <tr><th>Name of the book</th><th>ISBN</th><th>Category</th><th>No. of Pages</th></tr>
@foreach($books as $book)
<tr>
@foreach($book as $bookcontents)
<td>{{ $bookcontents }}</td>
@endforeach
</tr>
@endforeach
</table>
@endsection
