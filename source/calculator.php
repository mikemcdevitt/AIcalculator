<?php include_once('../inc/header.php'); ?>
<script src="aiInc/calculate.js" type="text/javascript"></script>
<link href="aiInc/aiCSS.css" rel="stylesheet" type="text/css">
</head>
<body >
	<div id="wrapper">
<?php include_once('../inc/nav.php'); ?>
		<div id="content">

<script type="text/javascript">
<?php include_once('aiInc/calculate.php'); 

// Populate SAT Score JS Arrays.
echo 'var actScores = ["';
for ($i = 0; $i < count($actScoreArray); $i++) {
	if ($i > 0) echo '", "';
   	echo $actScoreArray[$i];
}
echo '"];';
echo "\n";

echo 'var satScores = ["';
for ($i = 0; $i < count($satScoreArray); $i++) {
	if ($i > 0) echo '", "';
   	echo $satScoreArray[$i] ;
}
echo '"];';
echo "\n";
    
echo 'var weightedGPAs = [';
for ($i = 0; $i < count($wGpaLowerBoundArray); $i++) {
	if ($i > 0) echo ', ';
   	echo $wGpaLowerBoundArray[$i] ;
}
echo '];';
echo "\n";

echo 'var weightedCSRs = [';
for ($i = 0; $i < count($wGpaCSRArray); $i++) {
	if ($i > 0) echo ', ';
   	echo $wGpaCSRArray[$i] ;
}
echo '];';
echo "\n";

echo 'var unweightedGPAs = [';
for ($i = 0; $i < count($uwGpaLowerBoundArray); $i++) {
	if ($i > 0) echo ', ';
   	echo $uwGpaLowerBoundArray[$i] ;
}
echo '];';
echo "\n";

echo 'var unweightedCSRs = [';
for ($i = 0; $i < count($uwGpaCSRArray); $i++) {
	if ($i > 0) echo ', ';
   	echo $uwGpaCSRArray[$i] ;
}
echo '];';
echo "\n";

?>


</script>


<h1>Academic Index Calculator - TEST MODE - UNOFFICIAL DATA</h1>
<div id="calculator" >
<div id="testScores" style="height:100px">
	<span class="calcLabels">
    	<div class="calcLine" ><div class="centered">SAT Verbal:</div></div>
    	<div class="calcLine" ><div class="centered">SAT Math:</div></div>
        <div class="calcLine" ><div class="centered">SAT Composite:</div></div>
    </span>
    <span class="calcInputs">
    	<div class="calcLine" >
        	<input type="text" id="satVerbal" title="SAT Verbal" onChange="calculateSAT()"/></div>
    	<div class="calcLine" >
        	<input type="text" id="satMath" title="SAT Math" onChange="calculateSAT()"/></div>
    	<div class="calcLine" >
        	<input type="text" id="satComposite" title="SAT Composite" readOnly="true" /></div>
	</span>
	<span class="calcLabels">
   		<div class="calcLine" ><div class="centered">ACT Composite:</div></div>
    	<div class="calcLine" ><div class="centered">SAT Equivalent:</div></div>
	</span>
    <span class="calcInputs">
    	<div class="calcLine" >
        	<input type="text" id="actScore" title="ACT Composite" onChange="getSatEquivalent()"/>
        </div>
    	<div class="calcLine" >
    		<input type="text" id="satEquivalent" title="SAT Equivalent" readonly/>
        </div>
	</span>
</div>
<div id="hsGpa" style="height:100px">
    <span class="calcLabels" >
    	<div class="calcLine" >
        	<div class="centered">High School GPA:</div></div>
        <div class="calcLine" >
        	<div >Weighted GPA?</div></div>
    </span>
    <span class="calcInputs" >
    	<div class="calcLine" >
        	<input type="text" id="hsGPA" title="High School GPA" onChange="calculateAI()"/>
        </div>
    	<div class="calcLine" >
    		<input class="centered" type="checkbox" id="gpaWeighted" title="GPA Weighted" checked="false" onChange="calculateAI()" "/>
        </div>
	</span>
</div>
	Academic Index:	
<span id="aiResult" style="color:lightgray">Please enter valid ACT or SAT scores.</span>



</div>

<?php include_once('../inc/footer.php'); ?>