<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <form action="{{url('/create_employee')}}" method="POST">
        @csrf
        <label for="employee_name">Employee name</label>
        <input type="text" name="emp_name">

        <label for="employee_phone">Gender</label>
        <input type="text" name="emp_gender">

        <label for="employee_email">Email</label>
        <input type="text" name="emp_email">

        <label for="employee_phone">Phone</label>
        <input type="text" name="emp_phone">

        <label for="employee_position">Position</label>
        <input type="text" name="emp_position">

        <label for="degree_id">Degree ID</label>
        <input type="text" name="degree_id">

        <label for="dept_id">Dept ID</label>
        <input type="text" name="dept_id">

        <button>Create Employee</button>

     </form>

</body>
</html>
