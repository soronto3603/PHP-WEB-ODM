<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/dashBoard.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">

  </head>
  <body>
    <span class="bckg"></span>
    <header>
      <h1>Dashboard</h1>
      <nav>
        <ul>
          <li>
            <a href="javascript:movePage('projectView.php')" data-title="Projects">Projects</a>
          </li>
          <li>
            <a href="javascript:movePage('imagesView.php')" data-title="Images">Images</a>
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="title">
        <h2>Projects</h2>
        <a href="javascript:void(0);">Hello Bob !</a>
      </div>

      <iframe id=mainframe src="projectView.php"></iframe>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="js/dashBoard.js"></script>
  </body>
</html>
