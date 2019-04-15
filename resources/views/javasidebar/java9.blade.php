<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="Csidebar/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="Csidebar/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">জাভা প্রোগ্রামিং বাংলা </div>
      <div class="list-group list-group-flush">
        <a href="javaprogramming1" class="list-group-item list-group-item-action bg-light">পরিচিতি</a>
        <a href="/java1" class="list-group-item list-group-item-action bg-light">প্রাথমিক ধারণা</a>
        <a href="/java2" class="list-group-item list-group-item-action bg-light">জাভা এর মৌলিক বিষয়াবলী</a>
        <a href="/java3" class="list-group-item list-group-item-action bg-light">অপারেটরস এবং এক্সপ্রেশনস</a>
        <a href="java4" class="list-group-item list-group-item-action bg-light">ইনপুট এবং আউটপুট</a>
        <a href="java5" class="list-group-item list-group-item-action bg-light">কন্ট্রোল স্টেটম্যান্ট</a>
        <a href="java6" class="list-group-item list-group-item-action bg-light">ফাংশন</a>
        <a href="java7" class="list-group-item list-group-item-action bg-light">অ্যারে</a>
        <a href="java8" class="list-group-item list-group-item-action bg-light">পয়েন্টার</a>
        <a href="java9" class="list-group-item list-group-item-action bg-light">স্ট্রাকচার</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">ফাইল অপারেশন</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
  			<strong>Will be updated</strong>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="Csidebar/vendor/jquery/jquery.min.js"></script>
  <script src="Csidebar/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>

