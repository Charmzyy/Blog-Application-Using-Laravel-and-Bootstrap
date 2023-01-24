
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $post->title }}</title>
  <!-- Css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
  
</head>

 @if(session()->has('reply'))
  <div class="alert alert-warning"role="alert">
    {{ session()->get('reply') }}
</div>
@endif
 



<body class="bg-grey">
  <div id="wrapper">
    <!-- sidebar -->
    <div class="sidebar">
      <span class="closeButton">&times;</span>
      <p class="brand-title"><a  class="nav-link text-white"href={{ Route('blog.index') }}> Blog</a></p>

      <div class="side-links">
        <ul>
         
          @auth()
          <li><a  class="nav-link text white" href={{ Route('dashboard') }}>My Dashboard</a></li>
         
        @else
        <li > <a class="nav-link text white" href={{ Route('login') }}>Login</a></li>
        <li > <a class="nav-link text white" href={{ Route('register') }}>Register</a></li>
          @endauth
        
        </ul>
      </div>
      <!-- sidebar footer -->
      <footer class="sidebar-footer">
        <div>
          <a  class="text-white"href=""><i class="fab fa-facebook-f"></i></a>
          <a class="text-white" href=""><i class="fab fa-instagram"></i></a>
          <a class ="text-white" href=""><i class="fab fa-twitter"></i></a>
        </div>

        <small></small>
      </footer>
    </div>

    <!-- Menu Button -->
   

    <!-- main -->
    <main class="container">
    
      <section class="single-blog-post">
        <h1>{{ $post->title }}</h1>

        <p class="time-and-author">
          {{ $post->created_at }}
          <span>{{ $post->user->name }}</span>
        </p>

        <div class="single-blog-post-ContentImage" data-aos="fade-left">
          <img src="{{ asset('images/blogs/'.$post->image_path) }}" alt="" />
        </div>

        <div class="about-text">
          <p>
         {!! $post->body !!}
          </p>
        </div>
       
      </section>
      <section class="recommended">
        <p>Related</p>
        <form action="{{ route('comment.store') }}" method="POST">
          @csrf
          <textarea name="content"></textarea>
          <input type="hidden" name="post_id" value="{{ $post->id }}">
          <input type="hidden" name="parent_id" value="0">
          <button type="submit">Post comment</button>
      </form>
      <div class="comments">
        <div class="row d-flex justify-content">
              <h3>Comments</h3>
              <div class="comments">
                  @foreach ($post->comments as $comment)
                  @if($comment->parent_id == null)
                      <div class="card mb-5 mt-4 ">
                          <div class="card-body">
                              <p class="card-text">{{ $comment->content }}</p>
                              <p class="card-text">By: {{ $comment->user->name }}</p>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $comment->id }}">
                                Reply
                            </button>
                            @endif
                            
                            @foreach ($post->comments as $child)
                             @if($child->parent_id == $comment->id)
                                <div class="child-comment mt-4">
                                <p class="card-text">{{ $child->content }}</p>
                                <p class="card-text">By {{ $child->user->name}} </p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $child->id }}">
                                  Reply
                              </button>
                              @endif
                                @endforeach

                            <div class="modal fade" id="exampleModal-{{ $comment->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $comment->content }}</h1>
          
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <form action="{{ route('comment.store') }}" method="post">
                                          @csrf
                                          <div class="modal-body">
                                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                                              <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                
                                              <textarea name="content" rows="4" class="form-control"></textarea>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-primary">Reply Back</button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                          
                          </div>
                      </div>
                  @endforeach
                  <hr>
              </div>
          
      </div>
  </div>
        </div>
        
       
         
      

      
        </div>
        
        
          {{-- @else
              <p>No comments yet.</p>
          @endif --}}
      </section>

      </section>
      
      
    
      
     
    </main>

    <!-- Main footer -->
    <footer class="main-footer">
      <div>
        <a href=""><i class="fab fa-facebook-f"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fab fa-twitter"></i></a>
      </div>
      <small>&copy 2023</small>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!-- Click events to menu and close buttons using javaascript-->
 
</body>

</html>

 
