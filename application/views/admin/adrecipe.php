<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Add Recipe</title>
    <!-- Bootstrap core CSS -->
    <link href="http://localhost/Food_Corner/assets/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/Food_Corner/assets/Admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/Admin/css/newstyle.css');?>" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">FOODCORNER</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo site_url('/AdminView');?>">Dashboard</a></li>
            <li><a href="<?php echo site_url('/AdminView/delivery');?>">Delivery</a></li>
            <li class="active"><a href="<?php echo site_url('/AdminView/recipe');?>">Recipe</a></li>
            <li><a href="<?php echo site_url('/AdminView/users');?>">Users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a>Welcome Admin</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1>Recipe</h1>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a>Dashboard</a></li>
          <li class="active">Add Recipe</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="<?php echo site_url('/AdminView');?>" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="<?php echo site_url('/AdminView/delivery');?>" class="list-group-item">Delivery</a>
              <a href="<?php echo site_url('/AdminView/recipe');?>" class="list-group-item">Recipe</a>
              <a href="<?php echo site_url('/AdminView/users');?>" class="list-group-item">Users</a>
            </div> 
          </div>
          
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Add Recipe</h3>
              </div>
              <div class="panel-body">
                <div class=padd>
                  <?php echo form_open('AdminView/add_recipes')?>
                    <h3>Recipe Title</h3>
                    <input type="text" name="recipe_title" size="25" required>
                    <br>
                    <br>
                    <h4>Region</h4>
                    <select name="region">
                      <?php foreach($regions as $region):?>
                      <option value="<?php echo $region['region_id']?>"><?php echo $region['region_name']?></option>
                      <?php endforeach;?>
                    </select>
                    <h3>Recipe Country</h3>
                     <input type="text" name="recipe_country" min = "0" required>
                    <br>
                    <h3>Recipe Type</h3>
                     <input type="text" name="recipe_type" min = "0" required>
                    <br>
                    <br>
                    <h3>Cook Time</h3>
                      <input type="number" name="recipe_time" min = "0" required>
                    <br>
                    <br>
                    <h3>Serving</h3>
                      <input type="number" name="recipe_serve" min = "0" required>
                    <br>
                    <br>
                    <h3>Price</h3>
                      <input type="number" name="recipe_price" min = "0" required>
                    <br>
                    <br>
                    <h4>Recipe Description</h4>
                      <textarea rows="10" cols="100" name="recipe_desc" required></textarea>
                    <br>
                    <h4>Recipe Instruction</h4>
                      <textarea rows="10" cols="100" name="recipe_inst" required></textarea>
                    <?php for($i=1;$i<=$count;$i=$i+1){?>
                    <h4>Ingredients<?php echo $i;?></h4>
                    <br>
                    Amount: <input type="number" name="ing_amount[]" min = "1" value="1" required>
                    <select name="ingred[]" required>
                      <?php foreach($ingredients as $ingredient): ?>
                        <option value = "<?php echo $ingredient['ing_id'];?>"><?php echo $ingredient['ing_unit']."  |";echo $ingredient['ing_name'];?></option>
                      <?php endforeach; ?>
                    </select><br><br>
                    <?php }?>
                    <button type="submit">Add Recipe</button>
                  </form>
                </div>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright &copy; 2018 Food Corner</p>
    </footer>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://localhost/Food_Corner/assets/Admin/js/bootstrap.min.js"></script>
  </body>
</html>
