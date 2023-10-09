<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>Lecturer Payment</title>
	<link rel="stylesheet" type="text/css" href="css/h-payroll/style.css">


	<title>Lecturer Payment</title>
	<link rel="stylesheet" type="text/css" href="css/payroll/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

       <!--Table add STYLES-->
    <link href="css/payroll/payroll1.css" rel="stylesheet" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
    <div id="dashboardMainContainer">
        <div class="dashboard_sidebar" id="dashboard_sidebar" style=" position: sticky; top: 0; left: 0; right: 0; ">
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
                        <li>
                            <a href="{{url('Employee')}}"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;<span class="menuText">Employees</span></a>
                        </li>
                        <li class="menuActive">
                            <a href="{{url('LecturerPayment')}}"><i class="fa fa-dollar"></i>&nbsp;&nbsp;<span class="menuText">Lecturer Payment</span></a>
                        </li>
                    </ul>
            </div>
        </div>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <div class="dashboard_topNav">
                <a href="" id="toggleBtn"><i class="fa fa-navicon"></i></a>
                <a href="" id="logoutBtn"><i class="fa fa-bell"></i></a>
                <a href="" id="logoutBtn"><i class="fa fa-search"></i></a>
            </div>
            <div class="dashboard_content">
                <div class="dashboard_content_main">
                        <div id="page-inner">
                                            <div class="row" >
                                                @csrf
                                                <div class="col-md-12">
                                                    <h1 class="page-head-line">Lecture payment
                                                        <a href="" class="btn btn-primary btn-sm pull-right" style="display: none;">Add New<i class="glyphicon glyphicon-arrow-right"></i>
                                                        </a><a id="submit_data_button" class="btn btn-primary btn-sm pull-right" style="display: none;">
                                                            <i class="glyphicon glyphicon-plus"></i>Update</a>
                                                    </h1>
                                                    <nav>
                                                        <div class="section__container nav__links"><p>
                                                            <span><a href="{{url('LecturerPayment')}}" >Lectures payment</a></span>
                                                            <span><a>/</a></span>
                                                            <span><a href="{{url('Payroll')}}" style="color: #2bff00;">Monthly Payroll</a></span>
                                                            <span><a>/</a></span>
                                                            <span><a href="{{url('payrolldata')}}">View Payroll history</a></span>
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
                                                        <option value="none">2022</option>
                                                        <option value="none">2023</option>
                                                        <option value="none">2024</option>
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
                                                        <option value="none">Engineer</option>
                                                    </select>
                                                    <select name="" id="" >
                                                        <option value="none">Department</option>
                                                        <option value="GIC">GIC</option>
                                                    </select>
                                                    <select name="" id="">
                                                        <option value="none">Year</option>
                                                        <option value="Fourth Year">Fourth Year</option>
                                                    </select>
                                                    <!-- <select name="" id="">
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
                                                    </select> -->
                                                </action>

                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-sorting table-responsive">
                                                <div class="table table-striped table-bordered table-hover" id="tSortable22">
                                                        <div class="row">
                                                            <div class="container-md text-center">

                                                                <!-- Table  -->
                                                                <table id="PayrollTable" class="table table-striped table-hover text-info shadow">
                                                                    <thead>
                                                                        <tr class="text-dark">
                                                                            <th scope="col">No</th>
                                                                            <th scope="col">Name</th>
                                                                            <th scope="col">Main Salary</th>
                                                                            <th scope="col">Hour Salary</th>
                                                                            <th scope="col">Total Hour</th>
                                                                            <th scope="col">TotalHour Pay</th>
                                                                            <th scope="col">Project Incentive</th>
                                                                            <th scope="col">Monthly Payment</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="Employees-table">
                                                                          {{-- @foreach ($employees as $employee )

                                                                        <tr>

                                                                            <td>{{$employee['id']}}</td>
                                                                            <td>{{$employee['name']}}</td>
                                                                            <td>{{$employee['course_name']}}</td>
                                                                            <td>{{$employee['main_salary_amount']}}</td>
                                                                            <td>{{$employee['hour_salary_amount']}}<td>
                                                                            <td><input type="number" class="hours-worked" style="width:60px" min="0">  h</td>
                                                                            <td class="Monthly-pay fw-bold"></td>
                                                                            <td>$  <input type="number" class="Project-incentive" style="width:60px" min="0"></td>
                                                                            <td class="Monthly2-pay fw-bold"></td>
                                                                        </tr>

                                                                    @endforeach --}}
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                                            <!--Popup Form-->

                                                                            <div class="dark_bg">

                                                                                <div class="popup">
                                                                                     <header>
                                                                                        <h2 class="modalTitle">Fill the Form</h2>
                                                                                        <button class="closeBtn">&times;</button>
                                                                                     </header>

                                                                                     <div class="body">
                                                                                        <form action="{{url('history')}}" id="myForm" method="post">
                                                                                            @csrf


                                                                                            <div class="inputFieldContainer">


                                                                                                    <div class="form_control">
                                                                                                        <label for="Name">id:</label>
                                                                                                        <input type="text"  value="" name="emp_id" id="emp_id" >
                                                                                                    </div>



                                                                                                <div class="form_control">
                                                                                                        <label for="total_hour">Total Hour:</label>
                                                                                                        <input type="text"  value="" name="total_hour" id="total_hour" >
                                                                                                </div>

                                                                                                <div class="postSalary">
                                                                                                    <div class="form_control">
                                                                                                        <label for="total_hourpay">Total HourPay:</label>
                                                                                                        <input type="text"  value= "" name="total_hourpay" id="total_hourpay" >
                                                                                                    </div>

                                                                                                    <div class="form_control">
                                                                                                        <label for="project_inc">Project Inc:</label>
                                                                                                        <input type="text" value="" name="project_inc" id="project_inc" >
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="form_control">
                                                                                                    <label for="Monthly_pay">Monthly Pay:</label>
                                                                                                    <input type="text" value="" name="monthly_pay" id="monthly_pay" >
                                                                                                </div>

                                                                                            </div>
                                                                                        </form>
                                                                                     </div>

                                                                                     <footer class="popupFooter">
                                                                                        <button form="myForm" class="submitBtn">Submit</button>
                                                                                     </footer>
                                                                                </div>

                                                                            </div>


                                                          <script src="APP-JS/payroll.js"> </script>

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
