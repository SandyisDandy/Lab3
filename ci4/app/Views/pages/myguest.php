<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--==================== UNICONS ====================-->
    
    

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="styles.css">
    <title>Sign Up</title>
</head>
<body>
    <nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
        <a class="navbar-brand" href="#">Initio</a>
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Welcome</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Stuff.html">Stuff</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="myguest.html">Sell your soul to Technology</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="newsweb.html">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Guestlist.html">See your fellow souls who sold their will</a>
          </li>
        </ul>
      </nav>
    <!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Selling your soul for 1000 robux?</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Just sign up, we won't sell your valuable information to the black market.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="myguestpost.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="comment" name="comment" rows="2" class="form-control md-textarea"></textarea>
                            <label for="comment">Your Comment</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class="text-center text-md-left">
                    <button class="btn btn-primary" type="submit">Send</button>
                </div>
                <div class="status"></div>
            </div>
            </form>

            
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Humabon Street, Makati City, Philippines</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>8-7000</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>asnoynay@student.apc.edu.ph</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->

<p>Current Date and Time is <span id='date-time'></span>.</p>

<!--==================== Bootstrap due to rush time ====================-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!--==================== MAIN JS ====================-->
<script src="main.js"></script>
</body>
</html>