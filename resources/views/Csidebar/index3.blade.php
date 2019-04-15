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

  <!-- Stylesheet 
    <link rel="stylesheet" href="clever_temp/style.css">-->
    <!-- Favicon 
    <link rel="icon" href="clever_temp/img/core-img/favicon.ico">-->

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
      	<p></p>
<p><strong># টোকেনস</strong></p>
<p>
একটা সি প্রোগ্রাম বিভিন্ন ধরনের টোকেনর এর সমন্বয়ে গঠিত। টোকেন হতে পারে একটা কীওয়ার্ডস, একটা অাইডেন্টিফায়ারস, একটা কন্সট্যান্ট, একটা স্ট্রিং লিটেরাল অথবা একটা সিম্বল। উদাহরন স্বরুপ: 
</p>


   <div style=" border-color: blue;background-size: 3px;">
   	<hr>
             <p><h5 style = "color: black;">
					printf("C programming");
			</h5></p>
	<hr>
   </div>


<p>এই স্টেটমেন্টাকে যদি আমরা টোকেনে ভাগ করি তাহলে এমন হয়:</p>
<hr>
‍‍‍<pre>
<h5>
printf
(
"C programming "
)
;</h5>
</pre>
<hr>
<strong>নোট:</strong> <p> সি তে সেমিকোলন (;) কে স্টেটমেন্ট টার্মিনেটর হিসেবে ব্যবহার করা হয়।  তার মানে প্রতিটা স্টেটমেন্ট একটা সেমিকোলন দিয়ে শেষ করতে হবে। </p><br>

<strong> কমেন্টস </strong><p>
কমেন্টস হচ্ছে সাহায্যকারী টেক্সট। অন্যভাবে বললে কমেন্টস ব্যবহার করা হয় ডকুমেন্টেশনের জন্য । ধরেন আপনি একটি কোড লিখলেন অাজকে, ২ মাস পরে যদি আপনার লেখা কোডটি দেখেন তখন হঠাৎ করে বুঝতে পারবেন নাহ কোনটা কি কারনে লিখেছেন। অথবা ধরেন আপনি একটি কোড লিখলেন সেটা আপনার বন্ধুকে দিলেন, সে হয়তো সহজে বুঝবে না আপনি কোথায় কি করেছেন। এক্ষেত্রে যদি আপনি আপনার কোডের ভিতর কিছু টেক্সট লিখে রাখেন তাহলে বুঝতে অনেক সহজ হবে। যেমন:</p>

<p>
<b style="color: gray;">/* distance calculation *</b>/<br>
<b style = "color: red;">distance = sqrt((x2-x1) + (y2-y1));</b>
</p>
<p>
এখানে ‍<b style="color: gray;">/* distance calculation */</b> হচ্ছে কমেন্ট। কম্পাইলার কম্পাইল করার সময় এই টেক্সটুকু ইগনোর করবে। কমেন্ট লিখার নিয়ম হচ্ছে:</p>

শুরু হবে: <b>`/*`</b> দিয়ে<br>
শেষ হবে: <b>`*/`</b> দিয়ে<br>
<p>
এই ভাবে কমেন্ট করাকে মাল্টিলাইন কমেন্ট বলা হয়। তার মানে এর ভিতর অামরা একের অধিক লাইন লিখতে পারব। যেমন:</p>

<div style="">
	<p style="color:darkblue;">
	/* Hello, this multi line comment.
	I can go line after line. */</p>
</div>
<p>
 সি এর নতুন ভার্সনে সিঈেল লাইন কমেন্টও সাপোর্ট করে। সিঈেল লাইন কমেন্টা লিখার নিয়ম হচ্ছে</p>
<p>
<b>// This is a comment</b>
</p>
	<div>
	<p><strong style="color: green;">কীওয়ার্ডস এবং আইডেন্টিফায়ারস:</strong></p>
	<p><strong>#কীওয়ার্ডস:</p></strong>
	<p>প্রোগ্রামিং ল্যাংগুয়েজে ব্যবহৃত সংরক্ষিত শব্দগুলো হচ্ছে কীওয়ার্ডস । প্রত্যেকটা কীওয়ার্ডসের একটা র্নিদিষ্ট অর্থ অাছে, যা ব্যবহারকারী(অর্থাৎ প্রোগ্রামার) পরিবর্তন করতে পারবে নাহ। কীওয়ার্ডসগুলো ভ্যারিয়েবল, কন্সট্যান্ট, অথবা কোন আইডেন্টিফায়ারের নাম হিসেবে ব্যবহার করা যাবে নাহ। সকল কীওয়ার্ডস অব্যশই ছোট হাতের অক্ষরে লিখতে হবে।</p>

	<p><b style="color:blue;">সি ল্যাংগুয়েজে ব্যবহৃত কীওয়ার্ডসগুলি:</b></p>
	</div>
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