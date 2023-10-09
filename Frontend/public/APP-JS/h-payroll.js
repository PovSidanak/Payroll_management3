
//todo: get Data from json file

let personalList = [];
//todo: Load employee from json
const loadingEmployees = async()=>{
    try{
        const res = await fetch('http://127.0.0.1:8000/api/emp_payroll/get_employeepayroll');
        personalList = await res.json();
        console.log(personalList['new_employee_payroll']);

        // if(res.status === 200){
        //     const data = await res.json();
        //     console.log(data);
        // }

       // console.log(res.json());
        // console.log(personalList);

        displayEmployees(personalList['new_employee_payroll']);
    }catch(err){
        console.log(err);
    }
};

//todo: display employee to the DOM

const displayEmployees=(employee)=>{
    const employeeTable= employee.map((employee)=>{
        return `
        <tr>
        <td >${employee.employee_id}</td>
        <td >${employee.employee_name}</td>
        <td >${employee.main_salary_id}</td>
        <td >$${employee.hour_salary_id}</td>
        <td>${employee.create_at}</td>
        <td></td>
        <td></td>
        <td>
        <button class="btn btn-primary" >Paid</button>
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


function monthlyPay(){
    const hoursWorked= document.querySelectorAll(".hours-worked");
    // const ProjectIncentive = document.querySelectorAll(".Project-incentive")
    //console.log(hoursWorked);

    hoursWorked.forEach((workHour, id)=>{
        workHour.addEventListener('keyup',(e)=>{
           // console.log(e.target.value);

           if(e.target.value === "" || e.target.value <= 0){
            return;

           }else{
            //console.log(e.target.value);
            if(e.key==="Enter"){

                const hour=e.target.value;
                //console.log(e.target.parentElement.parentElement.children[3].innerText.substring(1));
                const hourlyWage=Number(e.target.parentElement.parentElement.children[3].innerText.substring(1));
               // console.log(typeof hourlyWage);
               let monthlyPay=e.target.parentElement.parentElement.children[5];
               const calcMonthlyPay =(  hour * hourlyWage).toFixed(2);
               console.log(calcMonthlyPay);
               monthlyPay.innerText= "$" + calcMonthlyPay;

               const project_incentive = e.target.parentElement.parentElement.children[6].children[0]

                project_incentive.addEventListener('keyup', (e)=>{
                    let total_money =( parseInt(calcMonthlyPay) + parseInt(e.target.value) + parseInt(e.target.parentElement.parentElement.children[2].innerHTML.split('$')[1])).toFixed(2);
                    e.target.parentElement.parentElement.children[7].innerText = "$" + total_money
                })

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
//calc max wage
function calcMaxWage(arr){
    return Math.max(...arr);
}
//calc min wage
function calcMinWage(arr){
    return Math.min(...arr);
}

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


