
<head>

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
<link rel="stylesheet" href="{{ asset('css/style1.css') }}" />
    

    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-items-end">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="container-fluid " id="navbarSupportedContent">
          <ul class="navbar-nav  d-flex justify-items-end">
            <li class="nav-item active">
              <a class="nav-link" href={{ Route('dashboard') }}>Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href={{ Route('blog.create') }}>Create</a>
            </li>
          
            <li class="nav-item d-flex justify-self -end">
               
            </li>
          
          </ul>
         
        </div>
      </nav>
       --}}
       <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
         
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav d-flex justify-items-between">
             
              <a class="nav-link" href={{ Route('dashboard') }}>Dashboard</a>
              <a class="nav-link" href={{ Route('blog.create') }}>Create</a>
            
            </div>
          </div>
        </div>
      </nav>


</head>



@if(session()->has('message'))
<div class="alert alert-warning" role="alert">
    {{ session()->get('message') }}
  </div>


@endif

@if(session()->has('update_message'))
<div class="alert alert-warning" role="alert">
    {{ session()->get('update_message') }}
  </div>


@endif

<div class="container mt-5">
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>Title</th>
                <th>Excerpt</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach (Auth::user()->posts  as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->excerpt}}</td>
                <td class="spacing">
                    
                    <a href="{{ Route('blog.edit', $post->id )}}"> <ion-icon class="btn btn-success " name="create"></ion-icon></a>

                   
                 
                    

                    <form action="{{ Route('blog.destroy',$post->id) }}" method="POST"> 
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <ion-icon   name="trash"></ion-icon>
                        </button>
               
            </form>
                
                </td>
                

              
            </tr>

            @endforeach
        </tbody>
    </table>

</div>

    



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"> </script>
<script >$(document).ready( function () {
    $('#table_id').DataTable();
} );</script>

<script
type="module"
src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
></script>
<script
nomodule
src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
></script>
