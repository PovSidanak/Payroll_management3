<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
<style>
    .containerr {
  background-color: white;
  border-radius: 5px;
  border: 1px solid #000;
  position: fixed;
  /* left: 30%;
  top: 90px; */
  z-index: 99;
  box-shadow: inset #000;
  padding: 25px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  display: none;



}

form {
  justify-content: center;
  align-items: center;
  padding-top: 15px;
  font-size: 20px;
}
input[type="name"],
input[type="email"],
input[type="number"],
input[type="date"],
input[type="text"] {
  background-color: rgb(223, 217, 210);
  height: 30px;
  border-radius: 6px;
  width: 250px;
}
#gender,
#department {
  background-color: rgb(223, 217, 210);
  height: 35px;
  border-radius: 6px;
  width: 257px;
}
hr {
  color: green;
  border-top: 2px solid green;
}
.btn {
  right: 30px;
  bottom: 13px;
  display: flex;
  justify-content: flex-end;
}
/* button {
  width: 100px;
  height: 30px;
  border-radius: 10px; */

.cancel {
  background-color: #ff5757;
  width: 100px;
  height: 30px;
  border-radius: 10px;
  margin: 5px;
  color: white;
}
.btn-2 {
  background-color: #5676ff;
  width: 100px;
  height: 30px;
  border-radius: 10px;
  margin: 5px;
  color: white;
}
button:hover {
  background-color: aquamarine;
  cursor: pointer;
}
</style>

</head>
<body>
    <div class="content">
        <div class="container">
            <div>
                <h1>Create Employees</h1>
            </div>
            <hr>
            <form action="">
                <div>
                    <table>
                    <tr>
                        <td><label for="name">Name in Khmer</label></td>
                        <td>:</td>
                        <td><input type="name" size="30"></td>
                    </tr>

                    <tr>
                        <td><label for="name">Name in Latin</label></td>
                        <td>:</td>
                        <td><input type="name" size="30"></td>
                    </tr>

                    <tr>
                    <td><label for="Gender">Gender</label></td>
                    <td>:</td>
                    <td><select name="gender" id="gender">
                        <option value="Gender"></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select >
                    </td>

                    </tr>
                    <tr>
                    <td><label for="Date">Birth Date</label></td>
                    <td>:</td>
                    <td><input type="date"></td>
                    </tr>

                    <tr>
                    <td><label for="Department">Department</label></td>
                    <td>:</td>
                    <td><select name="" id="department">
                        <option value="none"></option>
                        <option value="GCI">GCI</option>
                        <option value="GCA">GCA</option>
                        <option value="GTI">GTI</option>
                        <option value="GEE">GEE</option>
                        <option value="GIC">GIC</option>
                        <option value="GRU">GRU</option>
                        <option value="GGG">GGG</option>
                        <option value="GIM">GIM</option>
                        <option value="AMS">AMS</option>
                        <option value="GTR">GTR</option>
                    </select></td>
                    </tr>
                    <tr>
                        <td><label for="Email">Email</label></td>
                        <td>:</td>
                        <td><input type="email" size="30"></td>
                    </tr>
                    <tr>
                        <td><label for="number">Phone Number</label></td>
                        <td>:</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td><label for="text">Related Role</label></td>
                        <td>:</td>
                        <td><input type="text"></td>
                    </tr>
                </table>
                </div>
                <div>
                </div>
            </form>
            <div class="btn">
                <button class="btn-1" onclick="history()">Cancel</button>
                <button class="btn-2">Save</button>
            </div>
        </div>
    </div>
<script>
       function history(){
            history.back()
        }
</script>
</body>
</html>
