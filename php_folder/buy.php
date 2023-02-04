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

<!DOCTYPE html>
<html>
<head>
    <title></title>

   
</head>
<body>    

<div class="main-div"> 
    <h1>List of products</h1>

    <div class="center-div">
        <div class="table-responsive">
            <table>
              <thead>
                 <tr>
                    <th>id</th>
                    <th>product</th>
                    <th>student</th>
                    <th>mobile</th>
                    <th>price</th>
                    <th>email</th>
                    <th>comments</th>
                 </tr>
               </thead>

           <tbody>
           <?php
           include 'connection.php';
           $selectquery = "select*from products";

           $que=mysqli_query($con,$selectquery);

           $res=mysqli_fetch_array($que);
           while($res = mysqli_fetch_array($que)){
           ?>
            <tr> 
               <td><?php echo $res['id'];?></td>
               <td><?php echo $res['product'];?></td>
               <td><?php echo $res['student'];?></td>
               <td><?php echo $res['mobile'];?></td>
               <td><?php echo $res['price'];?></td>
               <td><?php echo $res['email'];?></td>
               <td><?php echo $res['comments'];?></td>
            </tr>
           <?php


           }
           
           ?>
           </tbody>
           </table>
        </div> 
    </div>
</div>         
           








 


</body>
</html