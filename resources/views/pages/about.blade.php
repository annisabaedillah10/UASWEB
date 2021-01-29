<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Sesi 11</title>
  </head>
  <body>
    <div class="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid justify-content-between">
    <a class="navbar-brand" href="#"><img src="asset/download.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/about')}}">ABOUT</a>
        </li>
        <li class="nav-item">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            OUR WORK
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{url('/winningontheissues')}}">WINNING ON THE ISSUES</a></li>
            <li><a class="dropdown-item" href="{{url('/buildingfower')}}">BUILDING POWER</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">VOTER ENGAGEMENT</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            RESOURCES
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{url('/newsletters')}}">ISSUE REPORTS AND NEWLETTERS</a></li>
            <li><a class="dropdown-item" href="#">ANNUAL REPPORT AND FINANCIALS</a><li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">SOMETHING ELSE HERE</a></li>
          </ul>
        </li><li class="nav-item">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PEOPLE
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Staff</a></li>
            <li><a class="dropdown-item" href="#">Board of Directors</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Careers</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">JOIN US</a>
        </li>
        <li class="nav-item">
         <span class="ourwork-caption">DONATE </span>
        </li>
        <li class="nav-item">
          
        </li>
      </ul>
      
    </div>
  </div>
</nav>
    <section class="content">
      <div class="container">
        <div class="content">
          @foreach($items as $item)
            <div class="row py-5">
              <div class="col-sm-4">
              <img src="{{Storage::url($item->image)}}" alt="image"  class="img-thumbnail" />
              </div>
              <div class="col-sm-8">
                <h3>{{$item->title}}</h3>
                <p>{{$item->text}}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
    <section class="contact py-5">
      <div class="container">
        <h1>
          contact us
        </h1>
        <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Full Name</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Zip</label>
    <input type="password" class="form-control" id="inputPassword4">
     <p>
    City and State Not Required
  </p>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Phone</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <p>
    You understand and agree that by providing your email, you may be contacted in the future by email by Community Change and Community Change Action or other organizations with which we share your email. By providing your mobile number, you consent to being contacted on your cell phone using automatic dialing technology by Community Change Action, as well as Community Change and Community Change Voters, about their issues and opportunities to get involved in their work. Do NOT provide your mobile number if you do not agree. Text STOP to cancel future texts from that sender. Text HELP for help. Message and data rates may apply.
  </p>
  <div class="buttom text-center">
    <a href="" class="btn submit btn-light">SUBMIT</a>
  </div>
</form>
      </div>
    </section>
    <section class="footer py-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <div class="list-foter d-flex justify-content-between">
              <ul>
                <span>About</span>
                <li>Who We Are</li>
                <li>Our Work</li>
                <li>Our Partners</li>
                <li>Path To Power</li>
                <li>Ways to Donate</li>
                <li>Contact us</li>
              </ul>
              <ul>
                <span>Our Work</span>
                <li>Winning on the issues</li>
                <li>Building Power</li>
                <li>Voter Engagement</li>
                <li>Change Champions 2020</li>
                <li>Sign Up for Our Emails</li>
              </ul>
              <ul>
                <span>Resources</span>
                <li>Newsletters & Reports</li>
                <li>Financials</li>
                <li>Press</li>

              </ul>
              <ul>
                <span>People</span>
                <li>Staff</li>
                <li>Board of Director</li>
                <li>Careers</li>
                
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <img src="asset/comunity.jpg">
          </div>
        </div>
      </div>

      
    </section>
    <section class="address bg-light py-5">
      <div class="container d-flex justify-content-between">
        <div class="list-address">
          <img src="asset/logo.png">
          <span>address 1536 U Street NW
Washington, DC 20009</span>
        </div>
          <div class="list-address 2">
          <span>Staff Union</span>
 <span>Pripacy Policy</span>
 <span>Financial Information</span> <br>
  <span>Website Design By Annisa Baedillah</span>

      
    </section>

    




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
