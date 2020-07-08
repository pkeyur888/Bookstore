<!doctype php>
<php lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="DCS_GNU" content="IE=edge,chrome=1" />

	<title>Sidebar | Admin | BookHub</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap book core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>
  <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

  <!--


      Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
      Tip 2: you can also add an image using data-image tag

  -->

    <div class="sidebar-wrapper">
          <div class="logo">
              <a href="index.php" class="simple-text">
                  <b>BOOK HUB - ADMIN</b>
              </a>
          </div>

          <ul class="nav">
              <li>
                  <a href="index.php">
                      <i class="pe-7s-graph"></i>
                      <p>Dashboard</p>
                  </a>
              </li>
              <li>
                  <a href="user.php">
                      <i class="pe-7s-users"></i>
                      <p>User Management</p>
                  </a>
              </li>
              <li>
                  <a href="book.php">
                      <i class="pe-7s-notebook"></i>
                      <p>Book Management</p>
                  </a>
              </li>
				<li>
                  <a href="category.php">
                      <i class="pe-7s-network"></i>
                      <p>Category Management</p>
                  </a>
              </li>
			  <li>
                  <a href="rent.php">
                      <i class="pe-7s-notebook"></i>
                      <p>Rent Book Management</p>
                  </a>
              </li>
              <li>
					<a href="order_manage.php">
                      <i class="pe-7s-shopbag"></i>
                      <p>Order Management</p>
                  </a>
              </li>
							<li>
                  <a href="feedback.php">
                      <i class="pe-7s-like2"></i>
                      <p>Feedback</p>
                  </a>
              </li>
              
          </ul>
    </div>
  </div>
</body>
</html>
