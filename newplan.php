<?php
include "top.php";

if( $_POST )
{
  // first, we get all values
  $users_name = $_POST['StudentName'];
  $num_credits = $_POST['NumCredits'];
  $AdvisorID = $_POST['AdvisorID'];
  $Major = $_POST['Major'];
  $Minor = $_POST['Minor'];
  $CatYear = $_POST['CatYear'];
  $NetID = $_POST['NetID'];


  $query = "INSERT INTO `DSCHICK_advising`.`tbl4YP` (`fldStudentName`, `fldNumCredits`, `fldAdvisorId`, `fldMajor`, `fldMinor`, `fldCatYear`, `fldDateCreated`, `pmkPlanId`, `fnkNetId`)
  VALUES (?, ?, ?, ?, ?, ?, CURRENT_DATE(), NULL, ?)";
  $data = array($users_name, $num_credits, $AdvisorID, $Major, $Minor, $CatYear, $NetID);
  $insert = $thisDatabaseWriter->insert($query, $data, 0, 0, 0, false, false);
  if($insert == 1){
    print '<p> New plan Created! Click <a href="addClass.php">HERE</a> to add classes.</p>';
  }

}
?>

<!-- BEGIN HTML FORM -->
<form method='post'>
  StudentName: <input type='text' name='StudentName' id='StudentName' /><br />

  NumCredits: <input type='text' name='NumCredits' id='NumCredits' /><br />

  AdvisorID: <input type='text' name='AdvisorID' id='AdvisorID' /><br />

  Major: <input type='text' name='Major' id='Major' /><br />

  Minor: <input type='text' name='Minor' id='Minor' /><br />

  CatYear: <input type='text' name='CatYear' id='CatYear' /><br />

  NetID: <input type='text' value='<?php echo get_current_user()?>' name='NetID' id='NetId' /><br />


  <input type='submit' value='Submit' />
</form>
