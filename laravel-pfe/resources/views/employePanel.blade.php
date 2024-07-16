<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
         <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Long+Cang&family=Dosis&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
  font-family: 'Dosis', sans-serif;
}
a{
  color: inherit;
  text-decoration: none;
}
aside{
  background: #11101D;
  width: 16rem;
  height: 100%;
  max-width:100;
  top:0;
  left:0;
  position:fixed;
}
aside .logo{
  color: rgb(255 255 255);
  font-size: 3rem;
  line-height:3rem;
  font-family: 'Long Cang', cursive;
  padding: 1rem;
  text-align: center;
  cursor: default;
}
nav{
  width: calc(100% - 2rem);
  margin: 1rem;
  position: absolute;
}
ul{
  list-style:none;
}
li{
  width:100%;
  height: 3.25rem;
  color: rgb(255,255,255);
  cursor: pointer;
  font-size: 1rem;
  line-height: 1.25rem;
  padding: 1rem;
  border-radius: 0.25rem;
  z-index: 2;
  position: relative;
}
span.material-icons{
  font-size: 1.25rem;
  vertical-align: bottom;
  margin-right: 0.5rem;
}
span.text{
  font-size: 1rem
}
.stripe{
    background: #FFA402;
    width:100%;
    height: 3.25rem;
    border-radius: 0.25rem;
    position: absolute;
    transition-property: top;
    transition-duration: 150ms;
    transition-timing-function: ease-in-out;
}

main{
  position: fixed;
  left: 16rem;
  width: calc(100% - 16rem);
}
  </style>
</head>
<body>
<aside>
  <div class="logo">Ozias Junior</div>
  <nav>

    <ul>
      <div class="stripe" id="stripe"></div>
      <a href="#tasks">
        <li id="dashboard" onmouseover="over(this)" onmouseout="out(this)">
          <span class="material-icons">tasks</span>
          <span class="text">Dahboard</span>
        </li>
      </a>
      <a href="#people">
        <li id="people" onmouseover="over(this)" onmouseout="out(this)">
          <span class="material-icons">timing</span>
          <span class="text">People</span>
        </li>
      </a>
      <a href="#logout">
        <li id="logout" onmouseover="over(this)" onmouseout="out(this)">

          <span class="material-icons">logout</span>
          <span class="text">Logout</span>
        </li>
      </a>
    </ul>
  </nav>
</aside>
<main style="padding:20px">
  <div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6 col-lg-3">
      <div class="card">
      <img class="card-img-top" src="http://placehold.it/250x150" alt="Card image cap">
      <div class="card-block">
        <h4 class="card-title">task 2</h4>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer..</p>
      </div>
      <div class="card-footer">
        <button type="button" class="btn btn-success">done</button>

      </div>
    </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
      <div class="card">
      <img class="card-img-top" src="http://placehold.it/250x150" alt="Card image cap">
      <div class="card-block">
        <h4 class="card-title">tas1  title</h4>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
        <button type="button" class="btn btn-success">done</button>

      </div>
    </div>
    </div>
    <!-- Add the extra clearfix for only the required viewport -->
    <div class="clearfix hidden-sm-down hidden-lg-up"></div>
    <div class="col-xs-12 col-md-6 col-lg-3">
      <div class="card">
      <img class="card-img-top" src="http://placehold.it/250x150" alt="Card image cap">
      <div class="card-block">
        <h4 class="card-title">task 4 </h4>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
        <button type="button" class="btn btn-success">done</button>

      </div>
      </div></div>
  </div>
</div>
</main>
</body>
</html>