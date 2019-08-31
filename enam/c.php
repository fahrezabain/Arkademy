<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fahreza";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT name.id AS id, name.name AS name, work.name As work, salary FROM name LEFT JOIN work ON name.id_work = work.id LEFT JOIN category ON name.id_salary = category.id";

$result = mysqli_query($conn, $query);



$query_work = "SELECT * FROM work";

$result_work = mysqli_query($conn, $query_work);

$works = [];
if (mysqli_num_rows($result_work) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result_work)) { 
        $works[] = $row;
    }
}


$query_salary = "SELECT * FROM category";

$result_salary = mysqli_query($conn, $query_salary);

$salaries = [];
if (mysqli_num_rows($result_salary) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result_salary)) { 
        $salaries[] = $row;
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e00ae38d5.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    	<div class="container">
	      <a class="navbar-brand" href="#">Arkademy Bootcamp</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
    	</div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <br>
        <br>
        <br>
        <br>
        <button class="btn btn-warning float-right shadow" data-toggle="modal" data-target="#add">ADD</button>
        <!-- Modal Add-->
        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
          <form id="form-add" method="post" action="c-add.php">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="add-title">Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Name" value="">
                  </div>

                  <div class="form-group">
                    <select name="work_id" class="form-control" id="work_id">
                        <option value=""></option>
                        <?php
                        foreach ($works as $work) { ?>
                            <option value="<?php echo $work['id']?>"><?php echo $work['name']?></option>
                        <?php }
                        ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <select name="salary_id" class="form-control" id="salary_id">
                        <option value=""></option>
                        <?php
                        foreach ($salaries as $salary) { ?>
                            <option value="<?php echo $salary['id']?>"><?php echo $salary['salary']?></option>
                        <?php }
                        ?>
                    </select>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary"  value="Save Change">
              </div>
            </div>
          </div>
          </form>
        </div>
        <br>
        <br>
        <table class="text-center table table-bordered">
        	<tr class="gray">
        		<th>Name</th>
        		<th>Work</th>
        		<th>Salary</th>
        		<th>Action</th>
        	</tr>

            <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) { 
                ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['work']; ?></td>
                        <td><?php echo $row['salary']; ?></td>
                        <td>
                            <a href="c-delete.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>"><i class="text-danger fa fa-trash-alt"></i></a>
                            <a data-toggle="modal" data-target="#edit-<?php echo $row['id']; ?>" href="#edit-<?php echo $row['id']; ?>"><i class="text-primary fa fa-edit"></i></a>
                        </td>
                    </tr>

                <!-- Modal Edit <?php echo 'Edit-'.$row['id']; ?> -->
                <div class="modal fade" id="edit-<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo 'edit-'.$row['id']; ?>" aria-hidden="true">
                  <form id="form-edit-<?php echo $row['id']; ?>" method="post" action="c-edit.php">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="edit-<?php echo $row['id']; ?>-Label">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Name" value="<?php echo $row['name']; ?>">
                          </div>

                          <div class="form-group">
                            <select name="work_id" class="form-control" id="work_id">
                                <?php
                                foreach ($works as $work) { ?>
                                    <option value="<?php echo $work['id']?>" <?php if($work['name'] == $row['work']) echo "selected"; ?>><?php echo $work['name']?></option>
                                <?php }
                                ?>
                            </select>
                          </div>

                          <div class="form-group">
                            <select name="salary_id" class="form-control" id="salary_id">
                                <?php
                                foreach ($salaries as $salary) { ?>
                                    <option value="<?php echo $salary['id']?>" <?php if($salary['salary'] == $row['salary']) echo "selected"; ?>><?php echo $salary['salary']?></option>
                                <?php }
                                ?>
                            </select>
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary"  value="Save Change">
                      </div>
                    </div>
                  </div>
                  </form>
                </div>


                <?php
                }
            }
            ?>

        </table>
      </div>

      <div class="modal fade" id="deleted" tabindex="-1" role="dialog" aria-labelledby="deleted" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="deleted-title">Delete Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-center">
                <br>
                <br>
                Delete <?php echo isset($_GET['deleted']) ? $_GET['deleted'] : ''; ?> Success
                <br>
                <br>
                <br>
                <br>
              </div>
            </div>
          </div>
        </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <?php if(isset($_GET['deleted'])) { ?>
  <script type="text/javascript">
    $(window).on('load',function(){
        $('#deleted').modal('show');
    });
</script>
<?php } ?>
  </body>
</html>
