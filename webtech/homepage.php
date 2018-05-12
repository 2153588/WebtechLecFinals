<?php
  session_start();
  require_once('dbconfig/config.php');
  //phpinfo();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WebTech 2018</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger text-success" href="#page-top">Welcome <?php echo $_SESSION['username']; ?> </a>
           
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Topics</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Logout</a> 
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-info text-white text-center">
      <div class="container">
        <h1 class="text-uppercase mb-0">WEB SYSTEMS AND TECHNOLOGIES</h1>
    <br>
        <p class="font-weight-light mb-0">By: Kyrie Cerezo, Brian Daclison, Ojoj Dela Cruz,<br> Von Manaois, Jeremiah Pimentel, Von Salazar </p>
         <img class="img-fluid mb-5 d-block mx-auto" src="img/pic.png" alt="logo">
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Topics</h2>
    <br><br>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/jsp.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/php.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/rubyrails.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/node.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/asp.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/websecure.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-dark text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
    <br>
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">This website contains summary for the final period topics including JSP, PHP, Python, and ASP.Net. The Web Application security was based on OWASP Top 10 Web Application Security Risks of 2017 </p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">We are group one from 9340A class under Ms. Clemente Macon. This website aims to develop a website for academic purposes where students can read, watch videos, and take quizzes for assessment. Users need to register their account.</p>
          </div>
        </div>
      </div>
    </section>
  
    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Webtech 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Server Side Web Scripting Technologies</h2>
              <p style="text-align: left;">Server side web scripting technologies are used for back-end web development technologies that includes the software built by server-side scripts, database/operating system and other server-side languages. The focus for our website mainly covers Java Web Servlets and Java Server Pages (JSP), PHP, Server-Side JavaScript (with Node.JS), and Web Application Security.</p>
              <br>
              <h5 style="text-align: left;">Back-end Overview</h5>
              <p style="text-align: left;text-indent: 50px;">The back-end for a website comprises three parts which are the server, database, APIs, and a back-end web application that is written with server-side languages. The function of a server enables back-end software, while the database stores the website’s data. This would allow the user’s information to be gathered from a networking site with the server-side scripts that the user has input. </p>
              <h3 style="text-align: left;">Java Web Servlet</h3>
              <p class="mb-5" style="text-align: left;text-indent: 50px;">A <b>servlet</b> is a java programming language class that extends the attributes for the servers to host the applications that is being accessed in a request-response paradigm. A java servlet allows the web server to be accessed by web developers in a simpler or efficient way in business systems. In addition, it serves as a Java platform technology provided in a component-based, platform-independent method in the structure of web-based application.</p>
              <br>
              <figure>
                 <video width="100%" height="auto" controls="">
                    <source src="vid/jsp.mp4" type="video/mp4">
                 </video>
                 <figcaption>&copy; https://www.youtube.com/watch?v=uQzedmaebvk</figcaption>
             </figure>
            <br>
              <h3 style="text-align: left;">Java Server Pages</h3>
              <p class="mb-5" style="text-align: left;text-indent: 50px;">The technology provides easy and fast development for web developers and web designers in a dynamic web page that has an advantage for business systems. Java Server Pages is platform independent meaning, it could be on any operating system without requiring the Java Virtual Machine(JVM). The technology separates the User Interface(UI) from the content and enables web designers to change the layout of the web page without changing the primary dynamic content.
              </p>
              <br>
               <img class="img-fluid" src="img/js.gif" alt="">
               <br>
               <br>
              <p style="text-align: left;text-indent: 50px;">Java Server Pages is an extension of Java Servlet technology. The Java Web Servlet is a server-side module perfectly fits in a Web Server framework. Moreover, Java Server Pages(JSP) technology uses XML tags which summarizes the logical content of the webpage. The extension of Java Server Pages is embedded with a Java code into an HTML code while the Java Web Servlet, are Java classes that extends HTTPServlet, GenericServlet and implement Servlet Interface. Java Web Servlet declares a servlet in a web.xml configuration file and modifies the servlet into WebServlet for the web container.</p>
              <br>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Topic</a>
                 <a class="btn btn-primary btn-lg rounded-pill" href="quizzer/jsp/index.php">Test your knowledge!</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">PHP</h2>
              <h4 style="text-align: left;">Overview</h4>
              <p class="mb-5" style="text-align: left;text-indent: 50px;">PHP: Hypertext Preprocessor or PHP for short is an open source general-purpose that is widely-used for scripting language that is especially suited for web development. Ramsus Lerdorf is the creator of this web scripting language in the year 1994 and before becoming PHP: Hypertext Preprocessor, PHP stood for “Personal Home Page”.  The PHP code may be embedded into a HTML code, or may be combined with various web template systems, content management, and frameworks. Usually, PHP codes are processed by a PHP interpreter implemented as a module in a web server or as a Common Gateway Interface executable or CGI for short. This is powered by Zend Engines, which is a free software that was released under the PHP License.  It was not until the year 2014 where in the language evolved without a written formal specification or standard. This left the canonical PHP interpreter as a real o0r effective standard. PHP hosts a wide range of diverse arrays of web frameworks which require framework-specific knowledge. It is also an "HTML-embedded scripting language" used by developers with a simple and dynamic design for a website or web application. It is an open source scripting language that is being executed in a server mostly Apache, IIS, and many more. It also runs easily in a server side and almost all platforms like Windows, Linux, Unix, Mac OS X, etc. and supports a lot of database. PHP code can only be executed on PHP-enabled computers since the code is running in a plain-text script. </p>
                <figure>
                 <video width="100%" height="auto" controls="">
                    <source src="vid/php.mp4" type="video/mp4">
                 </video>
                 <figcaption>&copy; https://www.youtube.com/watch?v=iASBvjaU92U</figcaption>
             </figure>
            <br>
              <h4 style="text-align: left;">History</h4>
              <p style="text-align: left;text-indent: 50px;">PHP was written by C programming language by Rasmus Lerdorf in 1994, then PHP/FI or PHP 2.0 in June 8, 1995, followed by PHP/FI 2 by Zeev Suraski and Andi Gutmans in 1997, nevertheless, PHP 3 in 1998, and PHP 4-Zend Engine 1.0 in May 2000, lastly, PHP 5-updated Zend Engine 2.0 released in July 2004.</p>
             <br>
            <h4 style="text-align: left;">PHP Basic Syntax</h4>
            <p style="text-align: left;text-indent: 50px;">The Basic Syntax for PHP is usually developed with an output on the server. The PHP script is placed in a document that uses a tag and starts as “<?php” and ends as “?>:”. The PHP file includes the HTML tags and scripting codes for the PHP. In writing comments in PHP, the line in the code is usually not read by programmers but only used to check if the code is correct. The comments for PHP let’s programmers know what you are doing and helps track down the code you have done before with its function may it be additional things to do or a lack of function. In addition, PHP code with the terms used or keywords like: if, else, while, echo and many other more are NOT case-sensitive.</p>
            <br>
            <h4 style="text-align: left;">PHP Variable</h4>
            <p style="text-align: left;text-indent: 50px;">For declaring variables in PHP, you should start with a “$” sign and next is the variable name. The variable is recommended to place a detailed name like: length, age, total_height, dogname, and others. In addition, every time you code, the variable name should start with a letter or underscore and the variable name must not start with a number or the code won’t work. Since the terms or keywords in the basic syntax for PHP are NOT case-sensitive, the coding for PHP variable names are CASE-SENSITIVE.The PHP Variable includes different scopes that is part of the script in PHP that is used for quotations. The scopes are: local, global, and static. For global and local scope, the variable is declared outside in a function and can only gain access outside of a function and the local scope is only accessible within a function. In addition, the global term/keyword is accessed in a global variable inside a function. The global variables are stored in an array called “$GLOBALS[index]” that holds the name of the variable and access inside the functions and could updated directly from the global variable. Lastly, the static term/keyword in PHP lets the functions that are completed, to let all the variable diminish or removed. Whenever the function is called, the variable would then still have the data to be included. </p>
            <br>
            <h4 style="text-align: left;">PHP Data Types</h4>
            <p style="text-align: left;text-indent: 50px;">The PHP data types allow variables to store data in different types. PHP upholds integers, string, Boolean, float, array, null, object, resource. Firstly, the Php data type: Integer contains numbers that are non-decimal and the numbers should be within a range of -2,147,483,648 and 2,147,483,647. The string is an order of symbols that are used inside a quote. The Boolean symbolizes the x and y for True and False and booleans are usually used for conditional testing. The float in PHP data type is used in numbers with an exponent or a number with a decimal point. The array is used to store various variables or a single variable. The PHP Null value is a special data type because it is restricted to only one value called NULL and the data type of variable has no assigned values to it. However, if the variable is invoked without a value, then it is NULL, and the variable can be voided by the condition of value to NULL. The PHP Object data type allows how the data is being processed from the storage of data and information. Lastly, PHP resource is not a data type but it stores quotations to the functions and external resources in PHP. </p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Topic</a>
                <a class="btn btn-primary btn-lg rounded-pill" href="quizzer/php/index.php">Test your knowledge!</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Ruby on Rails</h2>
               <figure>
                 <video width="100%" height="auto" controls="">
                    <source src="vid/rails.mp4" type="video/mp4">
                 </video>
                 <figcaption>&copy; https://www.youtube.com/watch?v=zppMfm4fuxM</figcaption>
             </figure>
            <br>
            <h4 style="text-align: left;">Overview</h4>
              <p class="mb-5" style="text-align: left;text-indent: 50px;">Ruby on Rails is a web application development framework. Its main purpose is to make programming web applications easier through making assumptions about the developers need in order to get started. Less code is definitely in the picture when it comes to Ruby on Rails while accomplishing more than any other languages and or frameworks. Developers that are experienced had also testified that web development became fun through this. Model-View-Controller or MVC framework for short provide a default structure for a database, web service, and web pages. This facilitates the web standards such as JSON or XML documents for data transfer together with HTML, CSS, and JavaScript in displaying the user interface. Rails also emphasize the use of other known software engineering patterns together with paradigms, includes Convention Over Configuration (CoC), Don’t Repeat Yourself (DRY), and active record pattern. David Heinmeier Hansson extracted Rails from his own work on the project management tool Basecamp at a web application company which also called Basecamp. The first release on Rails was on July of the year 2004, but the sharing of commit right was not established until the month of February of the following year. A milestone achieved by Rails was when Apple agreed to release the Mac OS X v10.5 “Leopard” together with Rails which happened in the year of 2007 of October.</p>
              <br>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Topic</a>
                <a class="btn btn-primary btn-lg rounded-pill" href="quizzer/ror/index.php">Test your knowledge!</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Server-Side JavaScript(Node JS)</h2>
              <p class="mb-5" style="text-align: left;" >In the year 2009, the JavaScript-based Node.js platform was introduced by Ryan Dahl for the Linux and Mac OS as an alternative to Apache HTTP Server. The high level Node.js combines the Google V8 JavaScript engine. Node.js is an open source server environment which is free. It runs on various platforms such as Windows, Linux, Unix, Mac OS X, and others. Node.js uses an Asynchronous programming method. Some common tasks for a web server is to open files on the server and return the content to the client. Node.js handles file requests wherein it sends the task to the computer’s file system, then handles the next request. When the file system has opened and read the files, it returns the content to the client. Node.js is a single-threaded, non-blocking, asynchronous program which is very memory efficient and this eliminates waiting and is simply continuous with the next request. Node.js can generate dynamic page content and also open, read, write, delete, and close files in the server. It also collects data which can be added, deleted, or modified in one’s database. A Node.js file contains the tasks that will be executed in certain events for example; someone is accessing a port on the server. The files must be initiated in the server before having its purposed effect. A brief history of JavaScript is that, in the year 1995, a contractor to Netscape named Brendan Eich created the JavaScript Language in order to run web browsers. It was initially intended to have enabled animations and other manipulations of a browser’s document object model or DOM. Shortly afterwards a version of JavaScript for the Netscape Enterprise Server was introduced. The name of JavaScript was chosen for the marketing purposes because of the Sun’s Java language was a widely famous at that time. JavaScript was based primarily on the scheme and self-languages together with superficial Java-like semantics.</p>
              <figure>
                 <video width="100%" height="auto" controls="">
                    <source src="vid/node.mp4" type="video/mp4">
                 </video>
                 <figcaption>&copy; https://www.youtube.com/watch?v=uVwtVBpw7RQ</figcaption>
             </figure>
            <br>
              <p class="mb-5" style="text-align: left;">JavaScript that runs on a server uses a virtual machine or a JavaScript engine code for hosting with the v8 environment. Node.js runtime system builds a network with other event-based application servers</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Topic</a>
                <a class="btn btn-primary btn-lg rounded-pill" href="quizzer/node/index.php">Test your knowledge!</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-left">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0" style="text-align: center;">ASP.Net</h2>
              <h4>Overview</h4>
              <p class="mb-5" style="text-indent: 50px;">
                Developed in the year 2002. Active Server Pages (ASP/ASP.Net) is a server-side web framework with the structure of modern web applications and development of web pages that includes the services of .NET. ASP.NET in the creation of HTML5, CSS, and JavaScript. ASP.net runs on .NET Core or .Net Framework, Cloud, and multiple platforms like Windows, MAC OS X, and Linux.</p>
              <p style="text-indent: 50px;">
              ASP.Net is a web development platform that provides a programming model which is a comprehensive software infrastructure and some various services required to build up a robust web application on either PC or mobile devices. HTTP protocol work on top of ASP.Net and uses its commands and policies to set a browse-to-server bilateral cooperation and communication. ASP.Net applications are built up of compiled codes, written using extensible and reusable components or objects present in the frameworks. Applications of ASP.net can be written in C#, Visual Basic.Net, Jscript, and J#. ASP.Net is a upgraded version of the Active Server Pages or ASP for sort. This has been designed to work smoothly, with the WYSIWYG HTML editors and some of the programming tools which includes Microsoft Visual Studio.Net. While making web development easy additional functions of ASP.Net provides all of the benefits that the tools have to offer that includes GUI developers that may drop server controls into a web page with a fully integrated support for debugging. Other Developers may use  Web Forms or XML web services in the process of creating an ASP.Net application or in other cases combine these in any way the developers see fit. Supported by the same infrastructure that allows the use of authentication schemes, cache the frequently used data, customization of the application’s configuration and many more, which makes ASP.Net an asset to developers who choose to study this tool for an easy web development tool. This Open-source server-side framework for web applications is usually used to produce dynamic web pages. Developed by Microsoft, they allowed programmers build dynamic web sites, applications, and services. It was initially released on the 5th of January in the year 2002 with the version 1.0 of the .Net framework. It is built on a Common Language Runtime or CLR for short, which allows the programmers write ASP.Net code using any of the .Net languages. The Code-behind model places the codes in a separate file or in a special designated script tag. Examples of Code-behind files are in the format “SamplePage.aspx.cs” or “SamplePage.aspx.vb” while in the page is “SamplePage.aspx”. This is an automatic format for Visual Studio and other IDE’s. Directives are special instructions on the processing of the pages in ASP.Net should be. These Directives are the application Directive, Assembly Directive, Control Directive, Implements Directives, Import Directive, Master Directive, MasterType Directive, OutputCache Directive, Page directive, PreviousPageType Directive, Reference Directive, and the Register Directive.</p>
              <br>
              <h4>ASP.NET CORE</h4>
              <p style="text-indent: 50px;">Asp.net core is a cross- platform framework with high implementations for the development of cloud-based web applications. The framework supports the creation web applications and services that includes Internet of Things (IoT) applications for mobile backend. In addition, ASP.NET Core utilizes in the development of Web User Interface (UI) and Web Application Interface (API), development of workflows, and could be hosted on IIS, Ngingx, Apache, Docker, and many more. </p>
              <br>
               <figure>
                 <video width="100%" height="auto" controls="">
                    <source src="vid/asp.mp4" type="video/mp4">
                 </video>
                 <figcaption>&copy; https://www.youtube.com/watch?v=55o41waXLVQ</figcaption>
             </figure><br>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Topic</a>
                <a class="btn btn-primary btn-lg rounded-pill" href="quizzer/asp/index.php">Test your knowledge!</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0" style="text-align: center;">Web Application Security</h2>
              <br>
             <figure>
                 <video width="70%" height="auto" controls="">
                    <source src="vid/injection.mp4" type="video/mp4">
                 </video>
                 <figcaption style="text-align: left;">&copy; Detectify A1:2017 Injection</figcaption>
             </figure>
             <br>
             <h5>1. Injection</h5>
             <p style="text-indent: 50px;">The application Injection happens when the suspicious data is being sent to an interpreter in a macro/command or query. It basically makes the hacker attack with a suspicious data and deceives the interpreter in making unintentional commands or accesses the data without permission.</p>
             <h5>2. Broken Authentication</h5>
              <p style="text-indent: 50px;">The application lets the user accounts compromised by hackers and to exploit usernames, passwords, keys and other personal information. The session management is the foundation of all authentication and access controls, so hackers can identify the application – Broken Authentication with tools that have an index of all password lists and dictionary.</p>
             <h5>3. Sensitive Data Exposure</h5>
              <p style="text-indent: 50px;">Hackers target protected data in many credit cards, identity theft and many more other crimes. The sensitive data for users could be penetrated without additional security. For example: In a browser, a hacker decides to attack a user in its credentials with retrieved previous passwords in a database using Graphics Processing Units (GPUs). </p>
             <h5>4. XML External Entities</h5>
              <p style="text-indent: 50px;">The application allows hackers to utilize the vulnerability of XML processors to upload XML that comprises of suspicious content in an XML document. The types of attacks by hackers in this case comprises of internal file sharing, internal port scanning, URI handling and denial of service attacks. </p>
             <h5>5. Broken Access Control</h5>
              <p style="text-indent: 50px;">The application lets the hackers detect the deficiency of access controls without the verification if the function is present. The reason for vulnerability is because the restrictions that provided for authenticated users are not properly implemented. The attacks include exploitations such as the access of unauthorized data, access to user accounts, privilege to view sensitive files, modification of authorized data, and remove the credibility of the user.</p>
             <h5>6. Security Misconfiguration</h5>
              <p style="text-indent: 50px;">The application is a common issue because of the default configuration that hackers could attack easily. The default user accounts that includes passwords and all the configuration without updating regularly all the ad hoc, open cloud storage, HTTP headers, and other sensitive containing information would definitely make an easy target for hackers.</p>
             <h5>7. Cross-Site Scripting</h5>
              <p style="text-indent: 50px;">The hacker uses suspicious data with a HTML snippet – an automated tool that could exploit all the Cross-Site Scripting that works as a framework, to hack the credentials of authenticated users. The application is the second most common issue in the top 10 OWASP application security risk. In addition, the automated tools could detect automatically the problems of XSS which are PHP, J2EE/JSP, and ASP.NET.</p>
            <br>
            <figure>
                 <video width="70%" height="auto" controls="">
                    <source src="vid/inse.mp4" type="video/mp4">
                 </video>
                 <figcaption>&copy; Detectify A8:2017 Insecure Deserialization</figcaption>
             </figure>
             <br>
             <h5>8. Insecure Deserialization</h5>
              <p style="text-indent: 50px;">The application is all about remote code execution which is the most dangerous attacks made by hackers. Moreover, the type of attack includes, replay attacks, injection attacks, and privilege escalation attacks. </p>
             <h5>9. Using Components with Known Vulnerabilities</h5>
              <p style="text-indent: 50px;">The attack can be initiated and can be overpowered if only the components of the applications that includes the libraries, frameworks, and software modules are exploited, then the attack would allow serious data loss or server control. In addition, applications and APIS that are common for hackers to penetrate, would compromise the security for application defense and other various-enabled attacks.</p>
             <h5>10. Insufficient Logging and Monitoring</h5>
              <p style="text-indent: 50px;">Hackers attack through the system with tampering, extraction or collapse of data by the patience in timely for the monitoring and finishing the goal without getting caught. A successful attack by a hacker is determined with vulnerability searching by which it allows searching to continue to raise likelihood of successful exploits. </p>
              <p class="mb-5"></p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Topic</a>
                <a class="btn btn-primary btn-lg rounded-pill" href="quizzer/owasp/index.php">Test your knowledge!</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>

