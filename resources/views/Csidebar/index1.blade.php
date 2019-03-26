<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>C Programming tutorial</title>

  <!-- Bootstrap core CSS -->
  <link href="Csidebar/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="Csidebar/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">সি প্রোগ্রামিং বাংলা</div>
      <div class="list-group list-group-flush">
        <a href="/Cprogramming" class="list-group-item list-group-item-action bg-light">পরিচিতি</a>
      <a href="/Cprogramming1" class="list-group-item list-group-item-action bg-light">প্রাথমিক ধারণা</a>
      <a href="/Cprogramming2" class="list-group-item list-group-item-action bg-light">সি এর মৌলিক বিষয়াবলী</a>
      <a href="/Cprogramming3" class="list-group-item list-group-item-action bg-light">অপারেটরস এবং এক্সপ্রেশনস</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">ইনপুট এবং আউটপুট</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">কন্ট্রোল স্টেটম্যান্ট</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">ফাংশন</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">অ্যারে</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">পয়েন্টার</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">স্ট্রাকচার</a>
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
     	<p><p></p><strong>প্রাথমিক ধারণা</strong></p>
			<p>যারা কম্পিউটার এর সাথে পরিচিত কিন্তু প্রোগ্রামিং বা সি ল্যাংগুয়েজ সম্পর্কে খুব একটা ধারণা নেই, এই চ্যাপ্টার টি মূলত তাদের জন্য। এখানে কম্পিউটার প্রোগ্রামিং এর পাশাপাশি সি ল্যাংগুয়েজ এবং সি ল্যাংগুয়েজ তে প্রোগ্রামিং করতে গেলে যেসব সফটওয়্যার লাগে সে সম্পর্কে ধারণা দেয়া হয়েছে।
			</p>

		<p><strong>সি এর সমন্ধে :</strong></p>
		<ul>
			<li>
				সি উদ্ভাবন করা হয় UNIX অপারেটিং সিস্টেম লিখার জন্য। 
			</li>
			<li>
				সি হচ্ছে বি ল্যাংগুয়েজের (B Language) উত্তরাধিকারী, বি উদ্ভাবিত হয় ১৯৭০ সালে। 
			</li>
			<li>সি ১৯৮৮ সালে American National Standard Institute (ANSI) দ্বারা ফরমালাইজ করা হয়। 
			</li>
			<li>
				বর্তমানে জনপ্রিয় লিনাক্স ওস এবং অারডিবিএমএস মাইএসকিউএল (RDBMS MySQL) সি তে লিখা।   
			</li>
		</ul>
		<p><strong>কেন সি ব্যবহার করব :</strong></p>
		<p>সি প্রথমদিকে সিস্টেম ডেভলপমেন্ট এর জন্য ব্যবহার করা হত। অন্যভাবে বলতে গেলে সি দিয়ে অপারেটিং সিস্টেম বানানোর জন্য প্রোগ্রাম লিখা হত। সিস্টেম ডেভেলপমেন্টের জন্য সি ব্যবহার করা হয় কারন এর দ্বারা লিখা প্রোগ্রাম, অ্যাসেম্বেলি প্রোগ্রামের মত দ্রুত কাজ করে। সি দিয়ে লিখা কিছু সফটওয়্যারের উদাহরন :</p>
		<ul>
			<li>
				অপারেটিং সিস্টেম । 
			</li>
			<li>
				বিভিন্ন প্রোগ্রামিং ল্যাংগুয়েজের এর কম্পাইলার। 
			</li>
			<li>
				অ্যাসেম্বেলার। 
			</li>
			<li>
				টেক্সট ইডিটর। 
			</li>
			<li>নেটওয়ার্ক ড্রাইভার। 
			</li>
			<li>
				ডাটাবেজে। 
			</li>
			<li>
				ল্যাংগুয়েজ ইন্টারপ্রিটার।
			</li>
		</ul>
		<p>মজার ব্যাপর হল, সি এর কম্পাইলার ও সি তে লিখা।</p>
		<p><strong>সি প্রোগ্রাম</strong></p>
		<p>একটা সি প্রোগ্রাম ৩ লাইন থেকে কয়েক হাজার লাইন হতে পারে। সি তে প্রোগ্রাম লিখা ফাইলের এক্সটেনসন হবে .c । অাপনি সি প্রোগ্রাম লিখার জন্য নোটাপ্যাড, জি ইডিট , ভিম ইত্যাদি টেক্সট ইডিটর ব্যাবহার করতে পারেন। অামরা পরবর্তিতে এ সমন্ধে অারো বিস্তারিত অালোচনা করব।</p>

		
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
