<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    </head>
    
 
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">NITSells</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="sell.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="buy.php">Buy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sell.php">Sell</a>
      </li>
      
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</body>
</html>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
    <div class="form-group">
        <label>product</label>
        <input type="text" name ="product"
     autocomplete="off" class="form-control">  
     <div class="form-group">
        <label>student</label>
        <input type="text" name ="student"
     autocomplete="off" class="form-control">  
     <div class="form-group">
        <label>mobile</label>
        <input type="text" name ="mobile"
     autocomplete="off" class="form-control">  
     <div class="form-group">
        <label>price</label>
        <input type="text" name ="price"
     autocomplete="off" class="form-control">  
     <div class="form-group">
        <label>email</label>
        <input type="text" name ="email"
     autocomplete="off" class="form-control">  
     <div class="form-group">
        <label>comments</label>
        <textarea class="form-control" name="comments"> </textarea> 
</div>
       <button type="submit" class="btn btn-success">
        submit</button>
</form>