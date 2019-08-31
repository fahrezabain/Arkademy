
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
                                                    <option value="1">Frontend Dev</option>
                                                    <option value="2">Backend Dev</option>
                                            </select>
                  </div>

                  <div class="form-group">
                    <select name="salary_id" class="form-control" id="salary_id">
                        <option value=""></option>
                                                    <option value="1">10000000</option>
                                                    <option value="2">12000000</option>
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

                                <tr>
                        <td>Rebecca</td>
                        <td>Frontend Dev</td>
                        <td>10000000</td>
                        <td>
                            <a href="c-delete.php?id=1&name=Rebecca"><i class="text-danger fa fa-trash-alt"></i></a>
                            <a data-toggle="modal" data-target="#edit-1" href="#edit-1"><i class="text-primary fa fa-edit"></i></a>
                        </td>
                    </tr>

                <!-- Modal Edit Edit-1 -->
                <div class="modal fade" id="edit-1" tabindex="-1" role="dialog" aria-labelledby="edit-1" aria-hidden="true">
                  <form id="form-edit-1" method="post" action="c-edit.php">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="edit-1-Label">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <input type="hidden" name="id" value="1">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Name" value="Rebecca">
                          </div>

                          <div class="form-group">
                            <select name="work_id" class="form-control" id="work_id">
                                                                    <option value="1" selected>Frontend Dev</option>
                                                                    <option value="2" >Backend Dev</option>
                                                            </select>
                          </div>

                          <div class="form-group">
                            <select name="salary_id" class="form-control" id="salary_id">
                                                                    <option value="1" selected>10000000</option>
                                                                    <option value="2" >12000000</option>
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


                                    <tr>
                        <td>Vita</td>
                        <td>Backend Dev</td>
                        <td>12000000</td>
                        <td>
                            <a href="c-delete.php?id=2&name=Vita"><i class="text-danger fa fa-trash-alt"></i></a>
                            <a data-toggle="modal" data-target="#edit-2" href="#edit-2"><i class="text-primary fa fa-edit"></i></a>
                        </td>
                    </tr>
                    

                <!-- Modal Edit Edit-2 -->
                <div class="modal fade" id="edit-2" tabindex="-1" role="dialog" aria-labelledby="edit-2" aria-hidden="true">
                  <form id="form-edit-2" method="post" action="c-edit.php">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="edit-2-Label">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <input type="hidden" name="id" value="2">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Name" value="Vita">
                          </div>

                          <div class="form-group">
                            <select name="work_id" class="form-control" id="work_id">
                                                                    <option value="1" >Frontend Dev</option>
                                                                    <option value="2" selected>Backend Dev</option>
                                                            </select>
                          </div>

                          <div class="form-group">
                            <select name="salary_id" class="form-control" id="salary_id">
                                                                    <option value="1" >10000000</option>
                                                                    <option value="2" selected>12000000</option>
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


                                    <tr>
                        <td>xvsdfsdfsdf</td>
                        <td>Backend Dev</td>
                        <td>12000000</td>
                        <td>
                            <a href="c-delete.php?id=7&name=xvsdfsdfsdf"><i class="text-danger fa fa-trash-alt"></i></a>
                            <a data-toggle="modal" data-target="#edit-7" href="#edit-7"><i class="text-primary fa fa-edit"></i></a>
                        </td>
                    </tr>

                <!-- Modal Edit Edit-7 -->
                <div class="modal fade" id="edit-7" tabindex="-1" role="dialog" aria-labelledby="edit-7" aria-hidden="true">
                  <form id="form-edit-7" method="post" action="c-edit.php">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="edit-7-Label">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <input type="hidden" name="id" value="7">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Name" value="xvsdfsdfsdf">
                          </div>

                          <div class="form-group">
                            <select name="work_id" class="form-control" id="work_id">
                                                                    <option value="1" >Frontend Dev</option>
                                                                    <option value="2" selected>Backend Dev</option>
                                                            </select>
                          </div>

                          <div class="form-group">
                            <select name="salary_id" class="form-control" id="salary_id">
                                                                    <option value="1" >10000000</option>
                                                                    <option value="2" selected>12000000</option>
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


                                    <tr>
                        <td>sdfsdfsdf</td>
                        <td>Frontend Dev</td>
                        <td>12000000</td>
                        <td>
                            <a href="c-delete.php?id=8&name=sdfsdfsdf"><i class="text-danger fa fa-trash-alt"></i></a>
                            <a data-toggle="modal" data-target="#edit-8" href="#edit-8"><i class="text-primary fa fa-edit"></i></a>
                        </td>
                    </tr>

                <!-- Modal Edit Edit-8 -->
                <div class="modal fade" id="edit-8" tabindex="-1" role="dialog" aria-labelledby="edit-8" aria-hidden="true">
                  <form id="form-edit-8" method="post" action="c-edit.php">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="edit-8-Label">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <input type="hidden" name="id" value="8">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Name" value="sdfsdfsdf">
                          </div>

                          <div class="form-group">
                            <select name="work_id" class="form-control" id="work_id">
                                                                    <option value="1" selected>Frontend Dev</option>
                                                                    <option value="2" >Backend Dev</option>
                                                            </select>
                          </div>

                          <div class="form-group">
                            <select name="salary_id" class="form-control" id="salary_id">
                                                                    <option value="1" >10000000</option>
                                                                    <option value="2" selected>12000000</option>
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
                Delete  Success
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

    </body>
</html>
