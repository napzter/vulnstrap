<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple Vulnerable App Using Bootstrap as its Design">
    <meta name="author" content="Jay Turla, @shipcod3">

    <title>Vulnstrap</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">
      <div class="navbar navbar-inverse">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Vulnstrap</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About Vulnstrap</a></li>
            <li><a href="#">Credits</a></li>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Play Me! <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="blog.php?id=1">Why We Should Party?</a></li>
                <li class="divider"></li>
                <li><a href="dig.php">Search MX record</a></li>
                <li class="divider"></li>
                <li><a href="js/video-js.swf">Watch Pr*n</a></li>
                <li class="divider"></li>
                <li><a href="dom.php">Prepare to be DOM'ed</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      <div class="jumbotron jumbopacity">
        <h2 class="text-danger">What the heck is DOM?</h2>
        <p class="text-info">
          The Document Object Model (DOM) is a cross-platform and language-independent convention 
          for representing and interacting with objects in HTML, XHTML and XML documents.Objects in 
          the DOM tree may be addressed and manipulated by using methods on the objects. The public 
          interface of a DOM is specified in its application programming interface (API). The history 
          of the Document Object Model is intertwined with the history of the "browser wars" of the 
          late 1990s between Netscape Navigator and Microsoft Internet Explorer, as well as with that 
          of JavaScript and JScript, the first scripting languages to be widely implemented in the 
          layout engines of web browsers. ~ <em>Wikipedia</em>
        </p>
      </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jqueryv1-6-1.js"></script>
    <script>
    $(function(){
        try { $(location.hash) } catch(e) {}
    })
    </script>
  </body>
</html>