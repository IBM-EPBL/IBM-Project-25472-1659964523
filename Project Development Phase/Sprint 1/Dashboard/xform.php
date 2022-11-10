<?php

include ("connect.php");

$emp_id = $_POST['emp_id'];
$env_sat = $_POST['env_sat'];
$job_sat = $_POST['job_sat'];
$work_bal = $_POST['work_bal'];
$age = $_POST['age'];
$attrition = $_POST['attrition'];
$bus_tra = $_POST['bus_tra'];
$dept = $_POST['dept'];
$dist_home = $_POST['dist_home'];
$education = $_POST['education'];
$edu_field = $_POST['edu_field'];
$gender = $_POST['gender'];
$job_lvl = $_POST['job_lvl'];
$job_role = $_POST['job_role'];
$marital = $_POST['marital'];
$income = $_POST['income'];
$num_com = $_POST['num_com'];
$over_eig = $_POST['over_eig'];
$hike = $_POST['hike'];
$hours = $_POST['hours'];
$stock = $_POST['stock'];
$work_years = $_POST['work_years'];
$training = $_POST['training'];
$years_com = $_POST['years_com'];
$years_pro = $_POST['years_pro'];
$years_curr = $_POST['years_curr'];
$job_inv = $_POST['job_inv'];
$per_rat = $_POST['per_rat'];

$sql = "INSERT INTO `dataset`(`EmployeeID`, `EnvironmentSatisfaction`, `JobSatisfaction`, `WorkLifeBalance`, `Age`, `Attrition`, `BusinessTravel`, `Department`, `DistanceFromHome`, `Education`, `EducationField`, `Gender`, `JobLevel`, `JobRole`, `MaritalStatus`, `MonthlyIncome`, `NumCompaniesWorked`, `Over18`, `PercentSalaryHike`, `StandardHours`, `StockOptionLevel`, `TotalWorkingYears`, `TrainingTimesLastYear`, `YearsAtCompany`, `YearsSinceLastPromotion`, `YearsWithCurrManager`, `JobInvolvement`, `PerformanceRating`) VALUES ('$emp_id','$env_sat','$job_sat','$work_bal','$age','$attrition','$bus_tra','$dept','$dist_home','$education','$edu_field','$gender','$job_lvl','$job_role','$marital','$income','$num_com','$over_eig','$hike','$hours','$stock','$work_years','$training','$years_com','$years_pro','$years_curr','$job_inv','$per_rat')";
$rs = mysqli_query($con, $sql);

if($rs)
{
    
	include ("index.php");
}

?>