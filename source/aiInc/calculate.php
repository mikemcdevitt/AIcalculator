<?php 
// This file creates PHP variables from the MySQL database containing all of the
// supporting data that is used by the Academic Index calculator.

include_once('../lib/connect.php'); 

$actQuery = "SELECT * FROM  `Ai_ACT_Conversion` ORDER BY `actComposite`";
$unweightedQuery = "SELECT * FROM  `Ai_GPA_Unweighted` ORDER BY `lowerBound`";
$weightedQuery = "SELECT * FROM  `Ai_GPA_Weighted` ORDER BY `lowerBound`";
$actScoreArray = array();
$satScoreArray = array();
$uwGpaLetterArray = array();
$uwGpaLowerBoundArray = array();
$uwGpaUpperBoundArray = array();
$uwGpaCSRArray = array();
$wGpaLetterArray = array();
$wGpaLowerBoundArray = array();
$wGpaUpperBoundArray = array();
$wGpaCSRArray = array();

$actScores = mysql_query($actQuery);
if (!$actScores) {
    die('Invalid query: ' . mysql_error());
}
while ($row = mysql_fetch_assoc($actScores)) {
		$actScoreArray[] = $row['actComposite'];
		$satScoreArray[] = $row['satEquivalent'];
    }

$gpaUnweighted = mysql_query($unweightedQuery);
if (!$gpaUnweighted) {
    die('Invalid query: ' . mysql_error() . ' -> ' . $unweightedQuery);
}
while ($row = mysql_fetch_assoc($gpaUnweighted)) {
	$uwGpaLetterArray[] = $row['letterGrade'];
	$uwGpaLowerBoundArray[] = $row['lowerBound'];
	$uwGpaUpperBoundArray[] = $row['upperBound'];
	$uwGpaCSRArray[] = $row['CSR'];
}

$gpaWeighted = mysql_query($weightedQuery);
if (!$gpaWeighted) {
    die('Invalid query: ' . mysql_error() . ' -> ' . $weightedQuery);
}
while ($row = mysql_fetch_assoc($gpaWeighted)) {
	$wGpaLetterArray[] = $row['letterGrade'];
	$wGpaLowerBoundArray[] = $row['lowerBound'];
	$wGpaUpperBoundArray[] = $row['upperBound'];
	$wGpaCSRArray[] = $row['CSR'];
}

?>