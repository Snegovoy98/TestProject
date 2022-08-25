 <!Doctype html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <title>Import CSV File</title>
 
  <style>
    .custom-file-input.selected:lang(en)::after {
      content: "" !important;
    }
 
    .custom-file {
      overflow: hidden;
    }
 
    .custom-file-input {
      white-space: nowrap;
    }
  </style>
</head>
 
<body>
 
  <div class="container">
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFileInput" aria-describedby="customFileInput" name="file">
          <label class="custom-file-label" for="customFileInput">Import</label>
        </div>
      </div>
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
 
  </div>
  <br/>

<br/>  
   </div>
    <div class="top-name center-block text-center"> 
          <input type="button" class="center-block"  name="clear" value="Clear All">
    </div>
<br/>

<br/>  
        <div class="top-name center-block text-center">
          <a href="/TestProject/View/result.php">Views result</a>  
        </div>
  </form>
  </div>
 
</body>
 
</html>

