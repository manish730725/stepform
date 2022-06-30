<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include_once $_SERVER['DOCUMENT_ROOT'] . '/dbConnect.php';

if($_POST['action']=='add_applicant'){


//$dealer_id=$_POST['dealer_id'];
//$xapi_key=$_POST['xapi_key'];
$monthly_budget=$_POST['monthly-budget'];
$Title=$_POST['Final_title'];
$Forename=$_POST['Final-Forename'];
$Surname=$_POST['Final-Surname'];
$Mobile=$_POST['Final-phone'];
$Email=$_POST['Final-Email'];

$date_DOB=$_POST['date-of-birth'];
$parts = explode('/', $date_DOB);
$m  = $parts[1];
$months = array (1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'Jun',7=>'Jul',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec');
$monthName=$months[(int)$m];
$DOB=$parts[0] . '-' . $monthName . '-' . $parts[2];




$Driving_License_Type=$_POST['driving-licence'];
$UK_Passport=$_POST['uk-passport'];
$Marital_Status=$_POST['marital-status'];


$Residential_Status=$_POST['Residential_Status'];
$Postcode=$_POST['Final_postcode'];
//$Address=$_POST['Address'];
$Town=$_POST['Final_town'];
$County=$_POST['Final_county'];

$Street=$_POST['Final_street'];
$BuildingNumber=$_POST['Final_BuildingNumber'];
$BuildingName=$_POST['Final_BuildingName'];
$SubBuildingName=$_POST['Final_SubBuildingName'];
$Years_At_Address=$_POST['Years_At_Address'];
$Months_At_Address=$_POST['Months_At_Address'];




$Employment_Status=$_POST['Employment_Status'];
$Employer=$_POST['Employer'];
$Job_Title=$_POST['Job_Title'];
$Years_At_Employer=$_POST['Years_At_Employer'];
$Months_At_Employer=$_POST['Months_At_Employer'];
$Net_Monthly_Income=$_POST['Net-monthly-income'];

/*
$Registration=$_POST['Registration'];
$Colour=$_POST['Colour'];
$Date_F=$_POST['Date_First_Registered'];
$date = str_replace('/', '-', $Date_F);
$Date_First_Registered = date('Y-m-d', strtotime($date));
$Fuel_Type=$_POST['Fuel_Type'];
$Make=$_POST['Make'];
$Model=$_POST['Model'];
$Mileage=$_POST['Mileage'];
$Days_till_Next_MOT_Due=$_POST['Days_till_Next_MOT_Due'];
$Cash_Price=$_POST['Cash_Price'];
$Deposit=$_POST['Deposit'];
$Part_Exchange=$_POST['Part_Exchange'];
$Settlement=$_POST['Settlement'];
$Balance_to_Finance=$_POST['Balance_to_Finance'];
*/



//API Url
$url = 'https://api.autoconvert.co.uk/application/submit';



 
foreach($Postcode as $key=> $Post){
$Addresses[$key]["Postcode"] = $Post;
$Addresses[$key]["Street"] = $Street[$key];
$Addresses[$key]["Town"]= $Town[$key];
$Addresses[$key]["County"]= $County[$key];
$Addresses[$key]["BuildingNumber"]= $BuildingNumber[$key];
$Addresses[$key]["BuildingName"]= $BuildingName[$key];
$Addresses[$key]["SubBuildingName"]= $SubBuildingName[$key];
$Addresses[$key]["TimeAtAddressYears"] = $Years_At_Address[$key];
$Addresses[$key]["TimeAtAddressMonths"]= $Months_At_Address[$key];
$Addresses[$key]["ResidentialStatus"] = $Residential_Status[$key];
}



/*
$Employments = [
"Company" => $Employer,
"Postcode" => $Postcode,
"Street" => $Address,
"Town"=> $Town,
"County"=> $County,
"JobTitle"=> $Job_Title,
"EmploymentStatus"=> $Employment_Status,
"TimeAtEmployerYears"=> $Years_At_Employer,
"TimeAtEmployerMonths"=> $Months_At_Employer,
"NetMonthlyIncome"=> $Net_Monthly_Income,
"PhoneNumber"=> $Mobile

];
*/

foreach($Employer as $key=> $Emp){
$Employments[$key]["Company"] = $Emp;
$Employments[$key]["JobTitle"] = $Job_Title[$key];
$Employments[$key]["EmploymentStatus"]= $Employment_Status[$key];
$Employments[$key]["TimeAtEmployerYears"]= $Years_At_Employer[$key];
$Employments[$key]["TimeAtEmployerMonths"] = $Months_At_Employer[$key];
$Employments[$key]["NetMonthlyIncome"]= $Net_Monthly_Income;
$Employments[$key]["PhoneNumber"] = $Mobile;
}


$Applicants = [

"Title" => $Title,
"DateOfBirth" => $DOB,
"MaritalStatus"=> $Marital_Status,
"DrivingLicenseType" => $Driving_License_Type,
 "ValidUkPassport"=> $UK_Passport,
"Email" => $Email,
"Forename" => $Forename,
"Surname" => $Surname,
"Mobile" =>$Mobile,
"Addresses" =>   ($Addresses),
"Employments" => ($Employments)

];
$CustomFields = [

"Key" => "Monthly Budget",
"Value"=> $monthly_budget

];
/*
$Vehicles = [

"Make"=> $Make,
"Model"=> $Model,
"Derivative"=> $Model,

"Registration"=> $Registration,
"Mileage"=> $Mileage,
"Colour"=> $Colour,
"PartExchange"=>false,
"DateRegistered"=>$Date_First_Registered



];
$CustomFields = [

"Key" => "dealer_introduced",
"Value"=> "YES"



];
$FinanceDetails = [


"Deposit"=> $Deposit,
 "PartExchangeValue"=> $Part_Exchange,
 "Settlement"=> $Settlement,
 "DistanceSale"=> true,

 "FinanceTypeId"=>"1"


];
*/




$data =[
"CustomFields"=>array($CustomFields),
//"VehicleType"=>"Car",
//"AmountToBorrow"=>$Cash_Price,
//"Term"=> "60",
//"FinanceDetails"=>$FinanceDetails,
 "Applicants"=> array($Applicants),

 //"Vehicles"=>array($Vehicles),

//'UK_Passport'=> $UK_Passport,
//'Date_First_Registered' => $Date_First_Registered,
//'Fuel_Type'=> $Fuel_Type,
//'Days_till_Next_MOT_Due'=> $Days_till_Next_MOT_Due,
//'Cash_Price' => $Cash_Price,
//'Balance_to_Finance' => $Balance_to_Finance

];

print_r(json_encode($data)); die;
//$data=(array('VehicleType'=>'Car','AmountToBorrow' => $Balance_to_Finance,'Term'=>'60','FinanceDetails'=>$FinanceDetails,'Applicants'=>array($Applicants),'Vehicles'=>$Vehicles));


$Addresses =  json_encode($Addresses);
$Employments = json_encode($Employments);


$curl = curl_init($url);


curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curl, CURLOPT_POST, true);


curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));


curl_setopt($curl, CURLOPT_HTTPHEADER, [

  'X-ApiKey: '.$xapi_key,
  'Content-Type: application/json'
]);


$response = curl_exec($curl);


curl_close($curl);

$response=json_decode($response);

if(!empty($response->Reference)){
	$Ref=$response->Reference;
	
	 $sql = "INSERT INTO `applicants`(`dealer_id`,`xapi_key`, `Title`, `Forename`, `Surname`, `Mobile`, `Email`, `DOB`, `Addresses`, `Employments`,`Registration`, `Colour`, `Date_First_Registered`, `Fuel_Type`, `Make`, `Model`, `Days_till_Next_MOT_Due`, `Cash_Price`, `Deposit`, `Part_Exchange`, `Settlement`, `Balance_to_Finance`,`Driving_License_Type`, `UK_Passport`, `Marital_Status`, `Net_Monthly_Income`, `Reference`,`Mileage`)  VALUES ('$dealer_id','$xapi_key','$Title','$Forename','$Surname','$Mobile','$Email','$DOB','$Addresses','$Employments','$Registration','$Colour','$Date_First_Registered','$Fuel_Type','$Make','$Model','$Days_till_Next_MOT_Due','$Cash_Price','$Deposit','$Part_Exchange','$Settlement','$Balance_to_Finance','$Driving_License_Type','$UK_Passport','$Marital_Status','$Net_Monthly_Income','$Ref','$Mileage')";




$urla = 'https://api.autoconvert.co.uk/applicationTask';

date_default_timezone_set('Europe/London');
$sTime = date("m-d-Y H:i:s");

// Collection object
$datas = [
  'PackagedApplicationReference' => $Ref,
  'Description' => "Dealer has introduced a new application for processing",
  'Due' => $sTime,
  'TaskActionReference' => 'c03e2a7b-54c7-4aff-920e-8db9c70fba75'
  
];


 
// Initializes a new cURL session
$curl = curl_init($urla);

// Set the CURLOPT_RETURNTRANSFER option to true
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Set the CURLOPT_POST option to true for POST request
curl_setopt($curl, CURLOPT_POST, true);

// Set the request data as JSON using json_encode function
curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($datas));

// Set custom headers for RapidAPI Auth and Content-Type header
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  
  'X-ApiKey: '.$xapi_key,
  'Content-Type: application/json'
]);

// Execute cURL request with all previous settings
$response = curl_exec($curl);

// Close cURL session
curl_close($curl);






}
else{
	
	 $sql = "INSERT INTO `applicants`(`dealer_id`,`xapi_key`, `Title`, `Forename`, `Surname`, `Mobile`, `Email`, `DOB`, `Addresses`,`Employments`, `Registration`, `Colour`, `Date_First_Registered`, `Fuel_Type`, `Make`, `Model`, `Days_till_Next_MOT_Due`, `Cash_Price`, `Deposit`, `Part_Exchange`, `Settlement`, `Balance_to_Finance`,`Driving_License_Type`, `UK_Passport`, `Marital_Status`, `Net_Monthly_Income`)  VALUES ('$dealer_id','$xapi_key','$Title','$Forename','$Surname','$Mobile','$Email','$DOB','$Addresses','$Employments','$Registration','$Colour','$Date_First_Registered','$Fuel_Type','$Make','$Model','$Days_till_Next_MOT_Due','$Cash_Price','$Deposit','$Part_Exchange','$Settlement','$Balance_to_Finance','$Driving_License_Type','$UK_Passport','$Marital_Status','$Net_Monthly_Income')";
	
}



if ($con->query($sql) === TRUE) {


$extra="dashboard/list-of-all-applicant.php";

echo "<script>window.location.href='".$extra."'</script>";
exit();

}


 else {

$extra="dashboard/create-an-applicant.php";
//$_SESSION['Error']=$con->error;
echo "<script>window.location.href='".$extra."'</script>";
exit();


}





}



?>
