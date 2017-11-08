<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jodelCMS</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="/css/jquery-ui.css">
	<link rel="stylesheet" href="/css/paper.css">
	<link rel="stylesheet" href="/css/editor.css">
	<link rel="stylesheet" href="/font-awesome/css/font-awesome.css">
</head>
<body>

<div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/en/admin/backend">Dashboard</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Collections <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Collection 1 - projects</a></li>
                  <li><a href="#">Collection 2 - homepage slider</a></li>
                </ul>
              </li>
            </ul>

          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->


    </div> <!-- /container -->
    <script src="/js/app.js"></script>
</body>
</html>
