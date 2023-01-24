<html>
    <head>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></head>

@if(session()->has('created'))
<div class="alert alert-warning" role="alert">
    {{ session()->get('created') }}
  </div>


@endif

@if (session()->has('notcreated'))
<div class="alert alert-warning" role="alert"> 
    {{ session()->get('notcreated') }}
</div>
     --}}
 @endif
<div class="row">
 
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-header">
               <h4> Add Post
                 </div>
                 <div class="card-body">
                    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Post Title</label>
                                <input type="text" id="title" class="form-control" name="title"
                                       placeholder="Enter Post Title" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="excerpt">Post Excerpt</label>
                                <input type="text" id="excerpt" class="form-control" name="excerpt" placeholder="Enter Excerpt"
                                          rows="" required></input>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Post Body</label>
                         <textarea type="text" class="ckeditor form-control" name="body" ></textarea>
                                         

                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="min_to_read">Minutes to read</label>
                                <input type="text" id="min_to_read" name="min_to_read" class="form-control"  placeholder="Enter Minutes"></input>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Image</label>
                                <input type="file" id="image_path"  name="image_path"class="form-control" placeholder="Enter Image" ></input>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Create Post
                                </button>
                            </div>
                        </div>
                    
                    </form>

                    </html>

                   
                    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
                    
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                   