
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">

    <!-- ICONS -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <title> Admin </title>
  </head>
  <body>
    <header>
      <nav
        class="navbar navbar-expand-sm d-flex justify-content-between px-5 py-3"
      >
       

        <div class="logo-box">
          <a class="navbar-brand fw-bolder" href="index.html"> </a>
        </div>
        <div class="dropdown">
          <form method="POST" action="{{ route('logout') }}">
@csrf
<button class="ml-3 btn btn-primary">
  {{ Auth::user()->name}}
  {{ __('Log out') }}
</button>
          </form>
        
       
         
         
        </div>
      </nav>
    </header>
    <main>
     
      <section id="home-section">
        <div class="container-fluid px-5 py-5">
          <div
            class="heading-box d-flex align-items-center justify-content-start mb-5"
          >
            <ion-icon class="fs-1" name="apps-outline"></ion-icon>
            <h1 class="m-0 ps-3">Dashboard</h1>
          </div>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div
                class="card h-100 shadow border-0 border-top border-5 border-primary"
              >
                <div class="card-body">
                  <div
                    class="holder d-flex align-items-center justify-content-between mb-5 pt-1"
                  >
                    <div>
                        <ion-icon name="book-sharp"></ion-icon>
                      <h3 class="card-title">My blogs</h3>
                    </div>
                    <p class="number fs-1 fw-bold"></p>
                  </div>
                  <div
                    class="box bg-light border-top border-2 border-secondary"
                  >
                    <a
                      class="nav-link text-primary py-3 px-1 fs-5"
                      href={{ Route('my') }}
                      >View All &rarr;</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div
                class="card h-100 shadow border-0 border-top border-5 border-danger"
              >
                <div class="card-body">
                  <div
                    class="holder d-flex align-items-center justify-content-between mb-5 pt-1"
                  >
                    <div>
                        <ion-icon name="add-outline"></ion-icon>
                      <h3 class="card-title">Add Blog</h3>
                    </div>
                    <p class="number fs-1 fw-bold"></p>
                  </div>
                  <div
                    class="box bg-light border-top border-2 border-secondary"
                  >
                    <a
                      class="nav-link text-danger py-3 px-1 fs-5"
                      href={{ route('blog.create') }}
                      >Create &rarr;</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div
                class="card h-100 shadow border-0 border-top border-5 border-dark"
              >
                <div class="card-body">
                  <div
                    class="holder d-flex align-items-center justify-content-between mb-5 pt-1"
                  >
                    <div>
                      <ion-icon name="book-outline"></ion-icon>
                      <h3 class="card-title">Comments</h3>
                    </div>
                    <p class="number fs-1 fw-bold"></p>
                  </div>
                  <div
                    class="box bg-light border-top border-2 border-secondary"
                  >
                    <a
                      class="nav-link text-dark py-3 px-1 fs-5"
                      href={{ Route('comment.index') }}
                      >View All &rarr;</a
                    >
                  </div>
                </div>
                
              </div>
            </div>
            <div class="col">
              <div
                class="card h-100 shadow border-0 border-top border-5 border-success"
              >
                <div class="card-body">
                  <div
                    class="holder d-flex align-items-center justify-content-between mb-5 pt-1"
                  >
                    <div>
                        <ion-icon name="wifi-sharp"></ion-icon>
                      <h3 class="card-title">Blogs</h3>
                    </div>
                    <p class="number fs-1 fw-bold"></p>
                  </div>
                  <div
                    class="box bg-light border-top border-2 border-secondary"
                  >
                    <a
                      class="nav-link text-success py-3 px-1 fs-5"
                      href={{ Route('blog.index') }}
                      >View All &rarr;</a
                    >
                  </div>
                </div>
                
              </div>
            </div>
           
          </div>
        </div>
      </section>
    </main>
  </body>
</html>




