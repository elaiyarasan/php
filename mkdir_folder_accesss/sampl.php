<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>Make File (Create, Rename, Move, Delete, Copy) Using PHP</title>   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <p><br/><br/></p>
    <div class="container">
      <?php
        $base1 = '/var/www/html/mkdir'; 
        $base2 = '/var/www/html/mkdir'; 
        $page = isset($_GET['p'])? $_GET['p'] : '' ;
        if($page == 'add'){        
          if(isset($_POST["title"])){
            $filename = $_POST["title"];
            $txt = $_POST["txt"];
            $myfile = fopen($base1. '/'.$filename, 'w');
            if(fwrite($myfile, $txt)){
              echo "<script>location.href='index.php'</script>";
            }
          }
        ?>
          <form method="post">
            <div class="form-group">
              <input type="text" name="title" class="form-control" placeholder="exp: filename.txt" />
            </div>
             <div class="form-group">
              <textarea name="txt" class="form-control" placeholder="exp: text or article"></textarea>
            </div>
            <input type="submit" value="Create" class="btn btn-primary" />
            <input type="button" value="Back" onclick="location.href='index.php'" class="btn btn-warning" />
          </form>

        <?php
        }else if($page == 'edit'){
          if(isset($_POST["title"])){
            $filename = $_POST["title"];
            $txt = $_POST["txt"];
            $myfile = fopen($base1. '/'.$filename, 'w');
            if(fwrite($myfile, $txt)){
              echo "<script>location.href='index.php'</script>";
            }
          }
        ?>

          <form method="post">
            <div class="form-group">
              <input type="text" name="title" class="form-control" value="<?php echo $_GET['edit']; ?>" />
            </div>
             <div class="form-group">
              <textarea name="txt" class="form-control"><?php if(readfile($base1.'/'.$_GET['edit'])){echo readfile($base1.'/'.$_GET['edit']); }else{ readfile($base2.'/'.$_GET['edit']);}?></textarea>
            </div>
            <input type="submit" value="Update" class="btn btn-primary" />
            <input type="button" value="Back" onclick="location.href='index.php'" class="btn btn-warning" />
          </form>

        <?php
        }else if($page == 'rename'){
            if(isset($_POST["filename2"])){
            $filename1 = $_POST["filename1"];
            $filename2 = $_POST["filename2"];           
            if(rename($filename1, $filename2)){
              echo "<script>location.href='index.php'</script>";
            }
          }
        ?>
          <form method="post">
            <div class="form-group">
              <input type="text" name="filename1" class="form-control" value="C:/xampp/htdocs/codetube/makefile/file1/<?php  echo $_GET['rename']; ?>" />
            </div>
             <div class="form-group">
              <input type="text" name="filename2" class="form-control" value="C:/xampp/htdocs/codetube/makefile/file1/yourname.txt" />
            </div>
            <input type="submit" value="Rename/Move" class="btn btn-primary" />
            <input type="button" value="Back" onclick="location.href='index.php'" class="btn btn-warning" />
          </form>
        <?php
        }else if($page == 'copy'){        
             if(isset($_POST["filename2"])){
            $filename1 = $_POST["filename1"];
            $filename2 = $_POST["filename2"];           
            if(copy($filename1, $filename2)){
              echo "<script>location.href='index.php'</script>";
            }
          }
        ?>
          <form method="post">
            <div class="form-group">
              <input type="text" name="filename1" class="form-control" value="C:/xampp/htdocs/codetube/makefile/file1/<?php  echo $_GET['copy']; ?>" />
            </div>
             <div class="form-group">
              <input type="text" name="filename2" class="form-control" value="C:/xampp/htdocs/codetube/makefile/file1/yourname.txt" />
            </div>
            <input type="submit" value="Copy" class="btn btn-primary" />
            <input type="button" value="Back" onclick="location.href='index.php'" class="btn btn-warning" />
          </form>
        <?php
        }else{
      ?>
      <p><a href="?p=add" class="btn btn-primary">New File</a></p>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th width="40">No</th>
            <th>Name File</th>
            <th width="320">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if(isset($_GET['delete'])){
            if(unlink($base1.'/'.$_GET['delete'])){
              echo "<script>location.href='index.php'</script>";
            }else{
            if(unlink($base2.'/'.$_GET['delete'])){
              echo "<script>location.href='index.php'</script>";
            }
           }
          }         
          if(is_dir($base1)){
            if($dr = opendir($base1)){
              $no = 1;
              while($th = readdir($dr)){
                if($th != '.' && $th != '..'){
            ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $th ?></td>
            <td>
              <a href="?edit=<?php echo $th ?>&p=edit" class="btn btn-info">View</a>
              <a href="?rename=<?php echo $th ?>&p=rename" class="btn btn-warning">Rename</a>
              <a href="?copy=<?php echo $th ?>&p=copy" class="btn btn-success">Copy</a>
              <a href="?delete=<?php echo $th ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <?php
                }
              }
            }
          }
          ?>
        </tbody>
      </table>     
      <p><!-New Tap-></p>
        <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th width="40">No</th>
            <th>Name File</th>
            <th width="320">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          if(is_dir($base2)){
            if($dr = opendir($base2)){
              $no = 1;
              while($th = readdir($dr)){
                if($th != '.' && $th != '..'){
            ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $th ?></td>
            <td>
              <a href="?edit=<?php echo $th ?>&p=edit" class="btn btn-info">View</a>
              <a href="?rename=<?php echo $th ?>&p=rename" class="btn btn-warning">Rename</a>
              <a href="?copy=<?php echo $th ?>&p=copy" class="btn btn-success">Copy</a>
              <a href="?delete=<?php echo $th ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <?php
                }
              }
            }
          }
          ?>
        </tbody>
      </table>
      <?php
        }
      ?>
      <p><!-End New Tap-></p>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>﻿