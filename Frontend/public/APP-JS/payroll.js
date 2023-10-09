var object = []

let sb_b = document.getElementById('submit_data_button')

let emp_ids = document.getElementById('emp_id')
let total_hour_ids = document.getElementById('total_hour')
let hour_pay_ids = document.getElementById('total_hourpay')
let incentive_ids = document.getElementById('project_inc')
let monthly_ids = document.getElementById('monthly_pay')

let myform = document.getElementById('myForm')


sb_b.onclick = () => {
    // object.forEach((ob) => {
        // console.log(ob)
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url : "/history",
            data : JSON.stringify(object),
            type : 'POST',
            dataType : 'json',
            success : function(result){

                console.log("===== " + result + " =====");

            }
        });

        // $.ajax({
        //     url: '/history',
        //     type: 'POST',
        //     header
        //     data: {
        //       arrayObject: JSON.stringify(object)
        //     },
        //     success: function(response) {
        //       // Handle the response from the controller.
        //     }
        //   });

        // myform.addEventListener('submit', function (e){
        //     e.preventDefault()
        //     emp_ids.value = ob.id
        //     total_hour_ids.value = ob.hour
        //     hour_pay_ids.value = ob.total_hour_pay
        //     incentive_ids.value = ob.incentive
        //     monthly_ids.value = ob.total_final
        //     submit()
        // })



    // }
    // )
}

let personalList = [];
//todo: Load employee from json
 const loadingEmployees = async()=>{
    try{
        const res = await fetch('http://127.0.0.1:8000/api/employee_route/get_employee');
        personalList = await res.json();
        console.log(personalList['new_employee']);

        // if(res.status === 200){
        //     const data = await res.json();
        //     console.log(data);
        // }

       // console.log(res.json());
        // console.log(personalList);

        displayEmployees(personalList['new_employee']);
    }catch(err){
        console.log(err);
    }
};

//todo: display employee to table

const displayEmployees=(employee)=>{
    const employeeTable= employee.map((employee)=>{
        return `
        <tr>

                    <td >${employee.id}</td>
                    <td >${employee.name}</td>
                    <td >$${employee.main_salary_amount}</td>
                    <td >$${employee.hour_salary_amount}</td>
                    <td><input type="number" class="hours-worked" style="width:60px"
                    min="0"> h</td>
                    <td class="Monthly-pay fw-bold"></td>
                    <td>$<input type="number" class="Project-incentive" style="width:60px"
                    min="0"></td>
                    <td class="Monthly2-pay fw-bold"></td>

                    <td style="display:none">${employee.id}</td>
                    <td>
                    <button class="btn btn-primary" >Update</button>
                    </td>


        </tr>

        `;
    })
    .join("");

    document.getElementById('Employees-table').innerHTML = employeeTable;

    // todo: calculate  hour pay|| monthly pay
    monthlyPay();




   // const getEmployeesHW= employee.map((employee)=>employee.hw);

    //todo: maximun Wage
    // let maxHW= calcMaxWage(getEmployeesHW);
    // document.getElementById("Max-wage").innerText = "$" + maxHW;


    //todo: minimum wage
    // let minHW= calcMinWage(getEmployeesHW);
    // document.getElementById("Min-wage").innerText = "$" + minHW;

    //todo: avg wage
    // const getTotalHW = (total, hw) => total + salary + hw;

    // const getAvgHW = (arr) => arr.reduce(getTotalHW, 0) / arr.length;

    // let avgHW = getAvgHw(getEmployeesHW).toFixed(2);

    // document.getElementById("Avg-wage").innerText= "$" + avgHW;
};
loadingEmployees();

var obx_id;
var obx_hour;
var obx_monthpay;
var obx_incentive;
var obx_total;


function monthlyPay(){
    const hoursWorked= document.querySelectorAll(".hours-worked");

    // const ProjectIncentive = document.querySelectorAll(".Project-incentive")
    //console.log(hoursWorked);

    hoursWorked.forEach((workHour, id)=>{


        workHour.addEventListener('keyup',(e)=>{


           if(e.target.value === "" || e.target.value <= 0){
            return;

           }else{
            //console.log(e.target.value);
            if(e.key==="Enter"){

                const hour=e.target.value;
                //console.log(e.target.parentElement.parentElement.children[3].innerText.substring(1));
                const ids =e.target.parentElement.parentElement.children[8].innerHTML
                const hourlyWage=Number(e.target.parentElement.parentElement.children[3].innerText.substring(1));
               // console.log(typeof hourlyWage);
               let monthlyPay=e.target.parentElement.parentElement.children[5];
               const calcMonthlyPay =(  hour * hourlyWage).toFixed(2);

               monthlyPay.innerText= "$" + calcMonthlyPay;

               const project_incentive = e.target.parentElement.parentElement.children[6].children[0]

                project_incentive.addEventListener('keyup', (e1)=>{
                    let total_money =( parseInt(calcMonthlyPay) + parseInt(e1.target.value) + parseInt(e1.target.parentElement.parentElement.children[2].innerHTML.split('$')[1])).toFixed(2);
                    e1.target.parentElement.parentElement.children[7].innerText = "$" + total_money

                obx_id = ids
                obx_hour = hour
                obx_monthpay = calcMonthlyPay

                obx_incentive = e1.target.value
                obx_total = total_money


                })


                project_incentive.addEventListener("focusout", () => {

                    let obx = {
                        id: obx_id,
                        hour: obx_hour,
                        total_hour_pay: obx_monthpay,
                        incentive: obx_incentive,
                        total_final: obx_total,
                    }

                    let array_object = {
                        employee_id: obx_id,
                        total_hour: obx_hour,
                        project_inc: obx_incentive,
                        payroll_date: "dsf",
                        total_monthly_payroll: obx_total
                    }

                    // $.ajax({
                    //     headers: {
                    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    //     },
                    //     url : "/history",
                    //     data : JSON.stringify(array_object),
                    //     type : 'POST',
                    //     // dataType : 'json',
                    //     success : function(result){

                    //         console.log("===== " + result + " =====");

                    //     },
                    //     error: function(xhr, status, error) {
                    //         console.log(error);
                    //       }
                    // });

                    object.push(obx)
                    // console.log(obx_id)
                    // console.log(obx_hour)
                    // console.log(obx_monthpay)
                    // console.log(obx_incentive)
                    // console.log(obx_total)
                    emp_ids.value=obx_id
                    total_hour_ids.value=obx_hour
                    hour_pay_ids.value=obx_monthpay
                    incentive_ids.value=obx_incentive
                    monthly_ids.value=obx_total



                    myform.submit()
                });

               //todo: Set to local / session storage
               localStorage.setItem(id, calcMonthlyPay)

               saveData(hour);

               //* Get Total Payouts



             getTotalPayouts();

            }
           }
        });
    });



}
// Todo: Input
//* Hours Worked



//todo: Output
//* Monthly Pay = Hourly Wage * Hours Worked * Mainsalary
//utility function
//c
//calc min wage
// function calcMinWage(arr){
//     return Math.min(...arr);
// }

const calcTotal = (total,num)=>{
    return total + num;

}
function getTotalPayouts() {
    const allMonthlyPays = document.querySelectorAll(".monthly-pay");

    let arrayOfPayouts = Array.from(allMonthlyPays);
    // console.log(arrayOfPayouts);

    let newPayout = arrayOfPayouts.map((payout) =>
      parseFloat(payout.innerHTML.substring(1))
    );

    // console.log(newPayout);

    // * Return array elements with values
    newPayout = newPayout.filter((payout) => payout);

    // console.log(newPayout);

    let calculateTotalPay = newPayout.reduce(calcTotal, 0);

    document.getElementById("Total-pay").innerText =
      "$" + calculateTotalPay.toFixed(2);
  }
//* Total

//todo: Set to Local / Session  storage

 function saveData(hour){
    let hours;

    if(sessionStorage.getItem("hours")=== null){
        hours = [];
    }else{
        hours=JSON.parse(sessionStorage.getItem("hours"));
    }

    hours.push(hour);

    sessionStorage.setItem("hours",JSON.stringify(hours));

   // console.log(hours);
   const newHours = hours.map((hour) => parseInt(hour));

  // console.log(newHours);

  let totalHours = newHours.reduce(calcTotal,0);
  // console.log(totalHours);
  document.getElementById("Total-WH").innerText = totalHours + " h";


 }



