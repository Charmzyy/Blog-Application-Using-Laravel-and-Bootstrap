



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blogs</title>
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- Font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
  </head>
  <body>
    <div id="wrapper">
      <!-- header -->
      <header class="header">
        <div class="header-text">
          <h1> Blog</h1>
          <h4>Home of verified news...</h4>
        </div>
        <div class="overlay"></div>
      </header>

      <!-- sidebar -->
      <div class="sidebar">
        <span class="closeButton">&times;</span>
        <p class="brand-title"><a href=""> Blog</a></p>

        <div class="side-links">
          <ul>
           
          
           
            @auth()
            <li><a href={{ Route('dashboard') }}>My Dashboard</a></li>
           
          @else
          <li><a href={{ Route('login') }}>Login</a></li>
          <li><a href={{ Route('register') }}>Register</a></li>
            @endauth
           
          </ul>
        </div>

        <!-- sidebar footer -->
        <footer class="sidebar-footer">
          <div>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
          </div>

          <small>&copy 2023  Blog</small>
        </footer>
      </div>
      <!-- Menu Button -->
      <div class="menuButton">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
      <!-- main -->
      <main class="container">
        <h2 class="header-title">Latest Blog Posts</h2>
        <section class="cards-blog latest-blog">

            @forelse ($posts as $post)
            <div class="card-blog-content">
                <img src="{{ asset('images/blogs/'.$post->image_path) }}" alt="" />
                
                  <span style="float: right"></span>
                </p>
                <h4 style="font-weight: bolder">
                    <a href={{ route('blog.show',$post->id) }}>{{ $post->title }} </a>
                </h4>
              </div>
            @empty
                
            @endforelse
          

         

         

          
        </section>
      </main>

      <!-- Main footer -->
      <footer class="main-footer">
        <div>
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
        </div>

        
          {{ $posts->links() }}
      
        
       
        <small>&copy 2023</small>
      </footer>
    </div>
    

    <!-- Click events to menu and close buttons using javaascript-->
    <script>
      document
        .querySelector(".menuButton")
        .addEventListener("click", function () {
          document.querySelector(".sidebar").style.width = "100%";
          document.querySelector(".sidebar").style.zIndex = "5";
        });

      document
        .querySelector(".closeButton")
        .addEventListener("click", function () {
          document.querySelector(".sidebar").style.width = "0";
        });
    </script>
  </body>
</html>





