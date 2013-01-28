<?php include_once('../inc/header.php'); ?>
<script src="aiInc/calculate.js" type="text/javascript"></script>
</head>
<body >
	<div id="wrapper">
<?php include_once('../inc/nav.php'); ?>
		<div id="content">

<script type="text/javascript">
<?php include_once('aiInc/calculate.php'); 

// Populate SAT Score JS Arrays.
echo 'var actScores = [';
for ($i = 0; $i < count($actScoreArray); $i++) {
	if ($i > 0) echo ", ";
   	echo $actScoreArray[$i];
}
echo "];\n";

echo 'var satScores = [';
for ($i = 0; $i < count($satScoreArray); $i++) {
	if ($i > 0) echo ", ";
   	echo $satScoreArray[$i] ;
}
echo "];\n";
?>


</script>


<h1>Academic Index Calculator</h1>
<div id="calculator" >

<span style="float:left">
	SAT Verbal:  <input type="text" id="satVerbal" title="SAT Verbal" onchange="calculateSAT();"/><br/>
    SAT Math:  <input type="text" id="satMath" title="SAT Math" onchange="calculateSAT();"/><br/>
    SAT Composite:  <input type="text" id="satComposite" title="SAT Composite" readonly="readonly"/>

</span>
<span>
	ACT Composite:  <input type="text" id="actScore" title="ACT Composite"/><br/>
	SAT Equivalent:  <input type="text" id="satEquivalent" title="SAT Equivalent" readonly="readonly"/>
</span><br/><br/><br/>
	Academic Index:	<span id="aiResult">
</span>



</div>

<?php include_once('../inc/footer.php'); ?>