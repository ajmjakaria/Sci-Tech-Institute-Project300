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
     	<p><p></p><strong>সি এর মৌলিক বিষয়াবলী</strong></p>
      <p><strong>ক্যারেক্টার সেট:</strong></p>
			<p>বর্তমানে আমরা বেশির ভাগ মানুষই ২ টা বা তিনটা ভাষার সাথে পরিচিত। আর এই বই টা যেহেতু বাংলাতেই লেখা, তাই ধরেই নেয়া যায় যে আমরা বাংলার সাথেও পরিচিত। আমরা লক্ষ্য করলে দেখব বাংলা ভাষায় নির্দিষ্ট কিছু চিহ্ন বা বর্ণমালা আছে। যেমন- স্বরবর্ণ, ব্যঞ্জনবর্ণ। বাংলাতে কোন কিছু লিখতে গেলে আমাদেরকে অবশ্যই এই বর্ণমালার বর্ণই ব্যবহার করতে হবে। এর বাহিরে অন্য কিছু ব্যবহার করলে তাকে আমরা আর শুদ্ধ বাংলা বলিনা। এই স্বরবর্ণ, ব্যঞ্জনবর্ণই হল বাংলা ভাষার ক্যারেক্টার সেট।
			</p>

		  <p>C ও এরকমই একটা ভাষা। এর ও কিছু নির্দিষ্ট ক্যারেক্টার সেট আছে যেগুলো ব্যবহার করে প্রোগ্রাম লেখা হয়।</p>
		
		  <p>C তে ব্যবহৃত সিম্বল বা ক্যারেক্টার গুলোকে সাধারণত ২ তা গ্রুপে ভাগ করা হয়-</p>
      <p>
          ক) সোর্স ক্যারেক্টার সেট (source character set)<br>
          খ) এক্সিকিউশন ক্যারেক্টার সেট (execution character set)
      </p><hr></hr>
      <p>
          ক) <b>সোর্স ক্যারেক্টার সেটঃ</b> আমরা C তে প্রোগ্রাম লেখার জন্য যে সকল বর্ণ (character) বা সিম্বল ব্যবহার করি সেগুলি সম্মিলিত ভাবে C এর সোর্স ক্যারেক্টার সেট নামে পরিচিত। C তে প্রোগ্রাম লেখার জন্য আমরা এই সকল ক্যারেক্টার সরাসরি ব্যবহার করতে পারি।<br><br>
     ১। ইংরেজী ভাষায় ব্যবহৃত ছোট হাতের ও বড় হাতের সকল অক্ষর সমূহ (Uppercase and Lowercase Letters) অর্থাৎ A থেকে Z পর্যন্ত এবং a থেকে z পর্যন্ত যেকোনো লেটার।<br>
     ২। ইংরেজী ভাষায় ব্যবহৃত 0 থেকে 9 পর্যন্ত যেকোনো ডিজিট (digit)।<br>
     ৩। এগুলো ছাড়াও আরো কিছু ক্যারেক্টার ব্যবহৃত হয় C তে প্রোগ্রাম লেখার জন্য যেগুলো সাধারণত স্পেশাল ক্যারেক্টার নামে পরিচিত।<br>
      </p>
      <p>
        <ul>
         
         <li>+ যোগ (Plus Sign)</li>
         <li>- বিয়োগ (Minus Sign)</li>
         <li>_ আন্ডারস্কোর (underscore)</li>
         <li>* এস্টেরিস্ক (asterisk)</li>         
         <li>/ স্লাশ (slash)</li>
         <li>= সমান (equal to)</li>
         <li>% পারসেন্ট (percent sign)</li>
         <li>& অ্যাম্পারসেন্ড (ampersand)</li>
         <li># হ্যাশ বা নাম্বার চিহ্ন</li>
         <li>! এক্সক্লামেশন (exclamation mark)</li>
         <li>? প্রশ্নবোধক Question mark)</li>
         <li>^ ক্যারেট (Caret)</li>
         <li>" ডাবল কোটেশন (quotation mark)</li>
         <li>′ এফস্টোরফ বা সিঙ্গেল কোটেশন (apostrophe)</li>
         <li>~ টিলডি(tilde)</li>
         <li> ব্যাক স্লাশ (back slash)</li>
         <li>| ভারটিক্যাল বার (vertical bar)</li>
         <li>< ক্ষুদ্রতর (less than)</li>
         <li>< বৃহত্তর (greater than)</li>
         <li>( লেফট প্যারেনথেসিস (left parenthesis)</li>
         <li>) রাইট প্যারেনথেসিস (right parenthesis)</li>
         <li>{ লেফট কারলি ব্রেছ (left curly brace)</li>
         <li>} রাইট কারলি ব্রেছ (right curly brace)</li>
         <li>[ লেফট ব্রাকেট (left bracket)</li>
         <li>[ রাইট ব্রাকেট (right bracket)</li>
         <li>: কোলন (colon)</li>
         <li>; সেমিকোলন (semicolon)</li>
         <li>, কমা (comma)</li>
         <li>. ডট (dot)</li>
         <li>@ এট (at)</li>
         <li>$ ডলার (dollar)</li>
        </ul>
      </p>
      <p>
         ৪। এই ক্যারেক্টার গুলো যথাযথ ভাবে ব্যবহার করে প্রোগ্রাম লিখতে হলে আমাদেরকে অবশ্যই স্পেস এর ব্যবহার করতে হবে যাতে প্রোগ্রাম এর এলিমেন্ট গুলো একটা আর একটার সাথে মিশে না যায়। C প্রোগ্রামে এই স্পেস নিচের যেকোনো ক্যারেক্টার ব্যবহার করে দেয়া যায়। এখানে যদিও ব্যাক স্লাশ এর সাথে আরো একটি করে ক্যারেক্টার যুক্ত কিন্তু এই ২ টা ক্যারেক্টার মিলিত ভাবে ১ টির মত কাজ করবে। এই ধরনের ক্যারেক্টার গুলো (ব্যাক স্লাশ এবং আর ১টি ক্যারেক্টার যুক্ত ভাবে) এস্কেপ সিকুয়েন্স নামে পরিচিত।<br><br>    
          \b ব্লাঙ্ক স্পেস (blank)<br>
         \t হরাইজন্টাল ট্যাব (horizontal tab)<br>
         \v ভারটিক্যাল ট্যাব (vertical tab)<br>
         \r ক্যারিজ রিটার্ন (carriage return)<br>
         \f ফরম ফিড (form feed)<br>
         \n নিউ লাইন (new line)<br>
      </p>
      <p>
        খ) <b>এক্সিকিউশন ক্যারেক্টার সেট:</b> C এর এক্সিকিউশন ক্যারেক্টার সেট বলতে সেই ক্যারেক্টার গুলোকে বুঝায় যেগুলো C তে লেখা কোন প্রোগ্রাম এক্সিকিউশন বা চলার সময় কাজ করে। এক্সিকিউশন ক্যারেক্টার সেট এর মধ্যে সোর্স ক্যারেক্টার সেট সহ আরো কিছু ক্যারেক্টার থাকে যেগুলো সাধারণত এস্কেপ সিকুয়েন্স এর মধ্যে পড়ে। এরকম কিছু ক্যারেক্টার হল - অ্যালার্ম বা বেল ক্যারেক্টার (\a), ব্যাক স্পেস (\b)।<br>
আমাদের কম্পাইলার যদি C এর সর্বশেষ স্ট্যান্ডার্ড (ISO/IEC 9899:2011 যা C11 নামে পরিচিত) সাপোর্ট করে তাহলে এগুলোর পাশাপাশি আমরা C প্রোগ্রামে ইউনিকোড ক্যারেক্টারও অ্যাড (add) করতে পারব \uXXXX বা \UXXXXXXXX ফরম্যাট ব্যবহার করে (XXXX বা XXXXXXXX ইউনিকোড ক্যারেক্টার এর হেক্সাডেসিমাল কোড)।
      </p>
		
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
