<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Lecturer Payment</title>

	<link rel="stylesheet" type="text/css" href="css/Employee/style.css">
    <link rel="stylesheet" href="css/Employee/Employee-t.css">

     <!--Font Awesome CDN-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>



</head>
<body>
    <div id="dashboardMainContainer" >
        <div class="dashboard_sidebar" id="sidebar" id="dashboard_sidebar" style="width: 20%;
        float: left;  position: sticky; top: 0; left: 0; right: 0; ">
            <h3 class="dashboard_logo" id="dashboard_logo">ITC</h3>
            <div class="dashboard_sidebar_user">
                <img src="./images/user/profile.jpg" alt="User image." id="userImage" />
                <span>Admin</span>
            </div>
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists">
                    <ul class="dashboard_menu_lists">
                        <li>
                            <a href="{{url('Admindashboard')}}"><i class="fa fa-reorder"></i>&nbsp;&nbsp;<span class="menuText">Dashboard</span></a>
                        </li>
                        <li class="menuActive">
                            <a href="{{url('Employee')}}"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;<span class="menuText">Employees</span></a>
                        </li>
                        <li>
                            <a href="{{url('LecturerPayment')}}"><i class="fa fa-dollar"></i>&nbsp;&nbsp;<span class="menuText">Lecturer Payment</span></a>
                        </li>
                    </ul>
            </div>
        </div>

        <div class="dashboard_content_container" id="dashboard_content_container" style="width: 80%;
        float: left; ">
            <div class="dashboard_topNav" style=" position: sticky; top: 0; left: 0; right: 0; ">
                <a href="" id="toggleBtn"><i class="fa fa-navicon"></i></a>
                <a href="" id="logoutBtn"><i class="fa fa-bell"></i></a>
                <a href="" id="logoutBtn"><i class="fa fa-search"></i></a>
            </div>
            <div class="dashboard_content" >
                <div class="dashboard_content_main">
                        <div id="page-inner">
                                <div class="row">
                                    <div class="col-md-12" style=" position: sticky; top: 0; left: 0; right: 0; ">
                                        <h1 class="page-head-line" >Employees
                                            <a href="" class="btn btn-primary btn-sm pull-right">Back<i class="glyphicon glyphicon-arrow-right"></i></a><a href="" class="btn btn-primary btn-sm pull-right"><i class="glyphicon glyphicon-plus"></i> Add </a>
                                        </h1>
                                        <nav>
                                            <div class="section__container nav__links"><p>


                                            </div>
                                        </nav>

                                    </div>
                                </div>

                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="container-md text-left">
                                                <!-- Activation button -->
                                                 <br />
                                                 <action>
                                                    <select name="" id="" >
                                                        <option value="none">Academic Year</option>
                                                        <option value="none">2022-2023</option>
                                                        <option value="none">2023-2024</option>
                                                        <option value="none">2024-2025</option>
                                                    </select>
                                                    <select name="" id="" >
                                                        <option value="none">Month</option>
                                                        <option value="none">January</option>
                                                        <option value="none">February</option>
                                                        <option value="none">March</option>
                                                        <option value="none">April</option>
                                                        <option value="none">May</option>
                                                        <option value="none">June</option>
                                                        <option value="none">July</option>
                                                        <option value="none">August</option>
                                                        <option value="none">September</option>
                                                        <option value="none">October</option>
                                                        <option value="none">November</option>
                                                        <option value="none">December</option>
                                                    </select>
                                                    <select name="" id="" >
                                                        <option value="none">Degree</option>
                                                        <option value="none">DUT</option>
                                                        <option value="none">Engineering</option>
                                                        <option value="none">Master</option>
                                                        <option value="none">PHD</option>
                                                    </select>
                                                    <select name="" id="" >
                                                        <option value="none">Department</option>
                                                        <option value="GIC">GIC</option>
                                                        <option value="GIC">GCI</option>
                                                        <option value="GIC">GTR</option>
                                                        <option value="GIC">GAR</option>
                                                        <option value="GIC">GIM</option>
                                                        <option value="GIC">GGG</option>
                                                    </select>
                                                    <select name="" id="">
                                                        <option value="none">Year</option>
                                                        <option value="Fourth Year">First Year</option>
                                                        <option value="Fourth Year">Second Year</option>
                                                        <option value="Fourth Year">Third Year</option>
                                                        <option value="Fourth Year">Fourth Year</option>
                                                        <option value="Fourth Year">Fifth Year</option>
                                                    </select>
                                                    <select name="" id="">
                                                        <option value="none">Lectures</option>
                                                        <option value="TAL Tongsreng">TAL Tongsreng</option>
                                                        <option value="BOU Chhanna">BOU Chhanna</option>
                                                        <option value="HENG Rathpisey">HENG Rathpisey</option>
                                                        <option value="KHEANG Hongly">KHEANG Hongly</option>
                                                        <option value="HOK Tin">HOK Tin</option>
                                                        <option value="CHUN Thavorac">CHUN Thavorac</option>
                                                        <option value="CHEA Socheat">CHEA Socheat</option>
                                                        <option value="NOP Phearum">NOP Phearum</option>
                                                        <option value="YOU Vanndy">YOU Vanndy</option>
                                                        <option value="CHHEANG Vanny Ratanak">CHHEANG Vanny Ratanak</option>
                                                        <option value="RIN Vannat">RIN Vannat</option>
                                                    </select>
                                                 </action>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-sorting table-responsive">
                                                <div class="table table-striped table-bordered table-hover" id="tSortable22">
                                                        <div class="row">
                                                            <div class="container">

                                                                <header>
                                                                    <div class="filterEntries">
                                                                        <div class="entries">
                                                                            Show <select name="" id="table_size">
                                                                                <option value="10">10</option>
                                                                                <option value="20">20</option>
                                                                                <option value="50">50</option>
                                                                                <option value="100">100</option>
                                                                            </select> entries
                                                                        </div>

                                                                        <div class="filter">
                                                                            <label for="search">Search:</label>
                                                                            <input type="search" name="" id="search" placeholder="Enter name">
                                                                        </div>
                                                                    </div>

                                                                    <div class="addMemberBtn">
                                                                        <button>New member</button>
                                                                    </div>

                                                                </header>

                                                                <table id="PayrollTable" class="table table-striped table-hover text-info shadow">

                                                                    <thead>
                                                                        <tr class="heading">
                                                                            <th>No</th>
                                                                            <th>Lecturer Name</th>
                                                                            <th>Gender</th>
                                                                            <th>Department</th>
                                                                            <th>Course</th>
                                                                            <th>Position</th>
                                                                            <th>Email</th>
                                                                            <th>Phone number</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>


                                                                    <tbody class="userInfo">
                                                                        {{-- <td>1</td>
                                                                        <td>Tal Tongsreng</td>
                                                                        <td>Male</td>
                                                                        <td>GIC</td>
                                                                        <td>Software Engineering</td>
                                                                        <td>Professor</td>
                                                                        <td>Tongsreng@gmail.com</td>
                                                                        <td>070 123 456 </td>
                                                                        <th>
                                                                            <!--  <button class="btn btn-primary newUser" data-bs-toggle="modal" data-bs-target="#userForm">New User <i class="bi bi-people"> -->
                                                                            <button class="btn btn-primary newUser">View</button>
                                                                            <button class="btn btn-primary" >Edit</button>
                                                                            <button class="btn btn-danger" >Delete</button>
                                                                        </th> --}}

                                                                        <!-- <tr><td class="empty" colspan="11" align="center">No data available in table</td></tr> -->
                                                                        @foreach ( $employees as $employee )

                                                                        <tr>
                                                                            <td>{{$employee['id']}}</td>
                                                                            <td>{{$employee['name']}}</td>
                                                                            <td>{{$employee['gender']}}</td>
                                                                            <td>{{$employee['department_name']}}</td>
                                                                            <td>{{$employee['course_name']}}</td>
                                                                            <td>{{$employee['type']}}</td>
                                                                            <td>{{$employee['email']}}</td>
                                                                            <td>{{$employee['phone']}}</td>
                                                                            <td>
                                                                                <button class="btn btn-success" onclick="readInfo()">View</button>

                                                                                <button class="btn btn-primary" onclick="editInfo()">Edit</button>


                                                                                <button class="btn btn-danger" onclick = "deleteInfo(${i})">Delete</button>
                                                                            </td>
                                                                        </tr>

                                                                    @endforeach
                                                                    </tbody>

                                                                </table>





                                                                <footer>
                                                                    <span class="showEntries">Showing 1 to 10 of 50 entries</span>
                                                                    <div class="pagination">
                                                                        <!-- <button>Prev</button>
                                                                        <button class="active">1</button>
                                                                        <button>2</button>
                                                                        <button>3</button>
                                                                        <button>4</button>
                                                                        <button>5</button>
                                                                        <button>Next</button> -->
                                                                    </div>
                                                                </footer>
                                                            </div>



                                                            <!--Popup Form-->

                                                            <div class="dark_bg" >

                                                                <div class="popup" style="background-color: #f2f2f2">
                                                                     <header>
                                                                        <h2 class="modalTitle">Fill the Form</h2>
                                                                        <button class="closeBtn">&times;</button>
                                                                     </header>

                                                                     <div class="body">
                                                                        <form action="{{url('create_employee')}}" id="myForm" method="POST">
                                                                            @csrf
                                                                            <div>
                                                                                <label>
                                                                                    <div type="file" name="" id="uploadimg">
                                                                                    <i class="fa-solid fa-plus"></i>
                                                                                </label>
                                                                            </div>

                                                                            <div class="inputFieldContainer">

                                                                                <div class="nameField">
                                                                                    <div class="form_control">
                                                                                        <label for="fName">First Name:</label>
                                                                                        <input type="text" name="firstname" id="fName" >
                                                                                    </div>

                                                                                    <div class="form_control">
                                                                                        <label for="lName">Last Name:</label>
                                                                                        <input type="text" name="lastname" id="lName" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="nameField">
                                                                                    <div class="form_control">
                                                                                        <label for="gender">Gender:</label>
                                                                                        <input type="text" name="gender" id="gender" >
                                                                                    </div>

                                                                                    <div class="form_control">
                                                                                        <label for="department">Department:</label>
                                                                                        <input type="text" name="dept" id="department" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="nameField">
                                                                                    <div class="form_control">
                                                                                        <label for="degree">Degree:</label>
                                                                                        <input type="text" name="degree" id="degree" >
                                                                                    </div>

                                                                                    <div class="form_control">
                                                                                        <label for="course">Course:</label>
                                                                                        <input type="text" name="course" id="course" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="nameField">
                                                                                    <div class="form_control">
                                                                                        <label for="main_salary">Main salary:</label>
                                                                                        <input type="number" name="main_salary" id="main_salary" >
                                                                                    </div>
                                                                                    <div class="form_control">
                                                                                        <label for="hour_salary">Hour salary:</label>
                                                                                        <input type="number" name="hour salary" id="hour_salary" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="nameField">
                                                                                    <div class="form_control">
                                                                                        <label for="email">Email:</label>
                                                                                        <input type="email" name="email" id="email" >
                                                                                    </div>
                                                                                    <div class="form_control">
                                                                                        <label for="phone">Phone:</label>
                                                                                        <input type="number" name="phone" id="phone" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form_control">
                                                                                    <label for="position">Position:</label>
                                                                                    <input type="text" name="position" id="position" >
                                                                                </div>

                                                                                <div class="form_control">
                                                                                    <label for="sDate">Start Date:</label>
                                                                                    <input type="date" name="start_date" id="sDate" required>
                                                                                </div>
                                                                            <footer class="popupFooter">
                                                                                <button form="myForm" type="submit" class="submitBtn">Submit</button>
                                                                             </footer>

                                                                        </form>
                                                                     </div>
                                                                </div>

                                                            </div>


                                                            <script src="APP-JS/Employee.js"></script>

                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                        </div>
                        <!-- /. PAGE INNER  -->
                </div>
            </div>
        </div>
    </div>
<script>
    var sideBarIsOpen = true;

    toggleBtn.addEventListener( 'click', (event)  => {
        event.preventDefault();

        if(sideBarIsOpen){
            dashboard_sidebar.style.width = '10%';
            dashboard_sidebar.style.transition = '0.3s all';
            dashboard_content_container.style.width = '90%';
            dashboard_logo.style.fontSize = '60px';
            userImage.style.fontSize = '60px';


            menuIcons = document.getElementsByClassName('menuText');
            for (var i = 0; i < menuIcons.length; i++) {
                menuIcons[i].style.display = 'none';
            }

            document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';
            sideBarIsOpen = false;
        } else {
            dashboard_sidebar.style.width = '20%';
            dashboard_content_container.style.width = '80%';
            dashboard_logo.style.fontSize = '80px';
            userImage.style.fontSize = '80px';


            menuIcons = document.getElementsByClassName('menuText');
            for (var i = 0; i < menuIcons.length; i++) {
                menuIcons[i].style.display = 'inline-block';
            }

            document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'left';
            sideBarIsOpen = true;
        }

    });
</script>
</body>
</html>
