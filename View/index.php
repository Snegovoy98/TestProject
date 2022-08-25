
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
    <form action="<?php $controller = new ImportDataController; $controller->index("submit")?>" method="post" enctype="multipart/form-data">
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFileInput" aria-describedby="customFileInput" name="file">
          <label class="custom-file-label" for="customFileInput">Import</label>       
        </div>
      </div>
 <br/>
    <div class="top-name center-block text-center"> 
    <input type="submit" name="submit" value="Upload" class="btn btn-primary">
</div>
  <br/>

<br/>  
   </div>
    <div class="top-name center-block text-center"> 
          <input type="submit" class="center-block"  name="clear" value="Clear All">
    </div>
<br/>
<br/>         
  </form>
<div class="top-name center-block text-center">
          <a href="/TestProject/View/result.php">View result</a>  
 </div>
  </div>
 
</body>
 
</html>

