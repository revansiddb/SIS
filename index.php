<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SIS Home</title>
  </head>
  <body>
    <div class="container">
        <div class="row" style="margin-top: 1em;">
            <div class="col-12 text-center">
                <h1 style="color:#957bbe;">Student Information System</h1>
            </div>
        </div>

        <div class="row" style="margin-top: 1em;">
            <div class="col-12">
                <nav class="nav justify-content-center">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-register" role="tab" aria-controls="nav-home" aria-selected="true">Register</a>

                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-view" role="tab" aria-controls="nav-profile" aria-selected="false">View</a>

                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-search" role="tab" aria-controls="nav-contact" aria-selected="false">Search</a>

                        
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="nav-register" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="container">
                            <div class="col-12" style="padding: 10%;">
                                <form action="stu_reg_h.php" method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                          <label for="inputEmail4">USN</label>
                                          <input class="form-control" name="usn" type="number" id="usn" maxlength="10" placeholder="USN" required>
                                        </div>

                                        <div class="form-group col-md-3">
                                          <label for="inputEmail4">First Name</label>
                                          <input class="form-control" name="name" type="text" id="name" placeholder="First Name" required>
                                        </div>

                                        <div class="form-group col-md-3">
                                          <label for="inputEmail4">Last Name</label>
                                          <input class="form-control" name="name1" type="text" id="name1" placeholder="Last Name" required>
                                        </div>

                                        <div class="form-group col-md-3">
                                          <label for="inputState">Gender</label>
                                          <select id="gender" name="gender" class="form-control">
                                            <option selected>Choose...</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Others">Others</option>
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                          <label for="inputEmail4">Birth Date</label>
                                          <input class="form-control" name="dob" type="date" id="dob" maxlength="10" placeholder="USN" required>
                                        </div>

                                        <div class="form-group col-md-3">
                                          <label for="inputState">Qualification</label>
                                          <select name="quali" id="quali" class="form-control">
                                            <option selected>Choose...</option>
                                            <option value="High School">High School</option>
                                            <option value="Graduate">Graduate</option>
                                            <option value="MCA">MCA</option>
                                            <option value="BCA">BCA</option>
                                            <option value="Master Degree">Master Degree</option>
                                          </select>
                                        </div>

                                        <div class="form-group col-md-3">
                                          <label for="inputEmail4">Semister</label>
                                          <input class="form-control" name="sem" type="number" id="sem" placeholder="sem" required>
                                        </div>

                                        <div class="form-group col-md-3">
                                          <label for="inputEmail4">Phone No</label>
                                          <input class="form-control" name="num" type="number" id="num" placeholder="Number" required>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="add1">Address</label>
                                        <input type="text" class="form-control" id="add1" name="add1" placeholder="1234 Main St" required>
                                    </div>
                                   
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                          <label for="inputEmail4">City</label>
                                          <input class="form-control" name="city" type="text" id="city" placeholder="city">
                                        </div>

                                        <div class="form-group col-md-3">
                                          <label for="inputEmail4">Year Of Joining</label>
                                          <input class="form-control" name="yoj" type="text" id="yoj" placeholder="year" required>
                                        </div>    

                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Email</label>
                                          <input class="form-control" name="email" type="Email" id="email" placeholder="email" required>
                                        </div>                    
                                    </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-view" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="container">
                            <div class="col-12" style="text-align: center;">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">USN</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Birth Date</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Qualification</th>
                                            <th scope="col">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            
                                            include 'connect.php';
                                            $query="SELECT * FROM st_info";
                                            $result=mysqli_query($link_id,$query);
                                            if(mysqli_error($link_id) != null)
                                            {
                                                die(mysqli_error($link_id));
                                            }

                                            while($arr=mysqli_fetch_row($result))
                                            {
                                        
                                              echo "<tr><th>$arr[0]</th><th>$arr[1]</th><th>$arr[2]</th><th>$arr[3]</th><th>$arr[4]</th><th>$arr[5]</th>
                                                    <th>$arr[6]</th><th>$arr[10]</th></tr>";
                                            }
                                            ?>
                                    </tbody>
                                </table>                                                                                                                   
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-search" role="tabpanel" aria-labelledby="nav-contact-tab">
                         <div class="container text-center">
                            <div class="col-12" style="text-align: center; padding: 2em; ">
                                <form class="form-inline my-2 my-lg-0" action="" method="post">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="usn" aria-label="Search" required>
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
                                </form>


                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">USN</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Birth Date</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Qualification</th>
                                            <th scope="col">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                           
                                            include 'Connect.php';
                                            
                                            if(isset($_POST['search']))
                                            {   
                                                print "<h5>Search result of '$_POST[usn]' are</h5>";
                                                $usn = $_POST['usn'];
                                                $query="SELECT * FROM st_info where usn = $usn";
                                                $result=mysqli_query($link_id,$query);
                                                if(mysqli_error($link_id) != null)
                                                {
                                                    die(mysqli_error($link_id));
                                                }

                                                while($arr=mysqli_fetch_row($result))
                                                {
                                            
                                                  echo "<tr><th>$arr[0]</th><th>$arr[1]</th><th>$arr[2]</th><th>$arr[3]</th><th>$arr[4]</th><th>$arr[5]</th>
                                                        <th>$arr[6]</th><th>$arr[10]</th></tr>";
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>