<?php
// Establish a connection with the MySQL database
require_once 'dbcon.php';

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Hello, world!</title>
  </head>
  <body >


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Sample Inventory</title>
  </head>
  <body >


    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/"> -->

    

    


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      /* The Modal (background) */
      .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        margin: auto;
        width: 50%;
        height: 50%;
        overflow: auto;
        background-color: white;
      }

      .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border:none;
        width: 80%;
      }


		/* Close Button */
		.close {
			color: #aaa;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: black;
			text-decoration: none;
			cursor: pointer;
		}

    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">
              <span data-feather="home" class="align-text-bottom"></span>
              inventory
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="option.php">
              <span data-feather="file" class="align-text-bottom"></span>
              truck builder
            </a>
          </li>
          
        </ul>

        
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary" id="myBtn">ADD</button>
          </div>
          
        </div>
      </div>

      <!-- The Modal -->
      <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Insert Data</h2>
	      <form action="insert.php" method="POST">
              <div>
              <label>AVAILABILITY:</label>
          <input type="text" name="availability"><br><br>
              </div>

              <div>
              <label>CODE:</label>
          <input type="text" name="code"><br><br>
              </div>

              <div>
              <label>CABIN MODEL:</label>
          <input type="text" name="cabinmodel"><br><br>
              </div>

              <div>
              <label>CHASSIS:</label>
          <input type="text" name="chassis"><br><br>
              </div>

              <div>
              <label>LENGTH:</label>
          <input type="text" name="length"><br><br>
              </div>

              <div>
              <label>BODY TYPE:</label>
          <input type="text" name="bodytype"><br><br>
              </div>

              <div>
              <label>ENGINE:</label>
          <input type="text" name="engine"><br><br>
              </div>

              <div>
              <label>LOCATION:</label>
          <input type="text" name="location"><br><br>
              </div>

          <div>
          <input type="submit" name="submit" value="Submit">
              </div>
              
        </form>
      </div>

      </div>


      <h2>TRUCKS</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col" >ACTION</th>
              <th scope="col">AVAILABILITY</th>
              <th scope="col">TRUCK CODE</th>
              <th scope="col">CABIN MODEL</th>
              <th scope="col">CHASSIS</th>
              <th scope="col">LENGTH</th>
              <th scope="col">BODY TYPE</th>
              <th scope="col">ENGINE</th>
              <th scope="col">LOCATION</th>

            </tr>
          </thead>

          <tbody>
<?php
$sql = "SELECT * FROM truckinv";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {


?>
            <tr>
              <td></td>
              <td><?php echo $row['availability'];?></td>
              <td><?php echo $row['code'];?></td>
              <td><?php echo $row['cabinmodel'];?></td>
              <td><?php echo $row['chassis'];?></td>
              <td><?php echo $row['length'];?></td>
              <td><?php echo $row['bodytype'];?></td>
              <td><?php echo $row['engine'];?></td>
              <td><?php echo $row['location'];?></td>

            </tr>
<?php
    }
  } else {
      echo "0 results";
  }
  
  // close connection
  $conn->close();
?>
          </tbody>
        </table>
      </div>
      

    </main>
  </div>
</div>


<script>
		var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");

btn.onclick = function() {
  modal.style.display = "block";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

	</script>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- https://cdnjs.com/libraries/popper.js/2.5.4 -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"
    ></script>

    <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->
  </body>
</html>






