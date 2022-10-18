@extends('layouts.dashboard')
@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add books</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('books.store')}}" enctype="multipart/form-data" id="book-form">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Book Name </label>
                    <input type="text" value="{{$book->book_title}}" name="book" class="form-control" id="exampleInputEmail1" placeholder="Enter Book Name">
                </div>
                <div class="form-group" data-select2-id="45">
                    <label>Author</label>
                    <select class="form-control select2 select2-hidden-accessible" name="author" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        @foreach($authors as $author)
                            <option value="{{$author->id}}"  @php $author->id==$book->author_id?'selected':''@endphp data-select2-id="3">{{$author->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group" data-select2-id="45">
                    <label>Category Name</label>
                    <select class="form-control select2 select2-hidden-accessible" name="bookcategory" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        @foreach($bookCatagories as $bookCatagory)
                            <option value="{{$bookCatagory->id}}"  @php $bookCatagory->id==$book->bookcatagories_id?'selected':''@endphp data-select2-id="3">{{$bookCatagory->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Edition</label>
                    <input type="text" name="edition" class="form-control" id="exampleInputEmail1" placeholder="Enter Book Edition">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Page No</label>
                    <input type="text" name="page" class="form-control" id="exampleInputEmail1" placeholder="Enter Book Page">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Publisher</label>
                    <input type="text" name="publisher" class="form-control" id="exampleInputEmail1" placeholder="Enter Book Publisher">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Isbn</label>
                    <input type="text" name="isbn" class="form-control" id="exampleInputEmail1" placeholder="Enter Book Isbn">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Publish date</label>
                    <input type="date" name="pubdate" class="form-control" id="exampleInputEmail1" placeholder="Enter Book Date Of Book Published">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter Book Price">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Copy</label>
                    <input type="text" name="copy" class="form-control" id="exampleInputEmail1" placeholder="Copy of Book">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Arrival Date</label>
                    <input type="date" name="arrivalsdate" class="form-control" id="exampleInputEmail1" placeholder="Enter Arrival Date">
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Book Thumbnail</label>

                    <input type="file" name="thumbnail" class="form-control" id="Pdf">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Book Pdf</label>

                    <input type="file" id="pdf" name="pdf" class="form-control" >

                </div>



                <div class="form-group">
                    <label for="exampleInputEmail1">description</label>
                    <textarea rows="6" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter Book Description"></textarea>
                </div>
            </div>


            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">add Book</button>
            </div>
        </form>
    </div>
@endsection
@section('footer')

@endsection
