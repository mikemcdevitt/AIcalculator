<?php include_once('../inc/header.php'); ?>
</head>
<body>
	<div id="wrapper">
<?php include_once('../inc/nav.php'); ?>
		<div id="content">

<?php include_once('aiInc/calculate.php'); ?>

<h1>Academic Index Calculator</h1>
<div id="calculator" >
<div id="conversionTables" >
    <span class="conversionTable" >
      <table>
	<caption class="conversionTitle" style="text-align:center">ACT Conversion to SAT</caption>
      <thead title="ACT Conversion to SAT">
          <th > ACT <br/> Composite </th>
          <th > SAT <br/> Equivalent </th>
          </thead>
      <?php
          for ($i = 0; $i < count($satScoreArray); $i++) {
    			echo '<tr><td>' . $actScoreArray[$i] . '</td>';
              echo '<td>' . $satScoreArray[$i] . '</td></tr>';
		}
      ?>
      </table>
    
    </span>
    <span class="conversionTable">
    <table>
	<caption class="conversionTitle" style="text-align:center">Unweighted GPA Conversion</caption>
    <thead title="Unweighted GPA Conversion">
        <th > Letter <br/> Grade </th>
        <th > 4.0 Scale <br/> Unweighted </th>
        <th > CSR </th>
        </thead>
    <?php
          for ($i = 0; $i < count($uwGpaLowerBoundArray); $i++) {
            echo '<tr><td>' . $uwGpaLetterArray[$i] . '</td>';
            if($uwGpaUpperBoundArray[$i] == 99)
            	echo '<td>' . number_format($uwGpaLowerBoundArray[$i], 1) . '</td>';
            else
            	echo '<td>' . number_format($uwGpaLowerBoundArray[$i], 1) . ' to ' . $uwGpaUpperBoundArray[$i] . '</td>';
            echo '<td>' . $uwGpaCSRArray[$i] . '</td></tr>';
        }
    ?>
    </table>

	</span>

	<span class="conversionTable">
	<table>
	<caption class="conversionTitle">Weighted GPA Conversion</caption>
	<thead title="Weighted GPA Conversion">
		<th > Letter <br/> Grade </th>
    	<th > 4.0 Scale <br/> Weighted </th>
    	<th > CSR </th>
    	</thead>
	<?php
          for ($i = 0; $i < count($wGpaLowerBoundArray); $i++) {
            echo '<tr><td>' . $wGpaLetterArray[$i] . '</td>';
            if($wGpaUpperBoundArray[$i] == 99)
            	echo '<td>' . number_format($wGpaLowerBoundArray[$i], 1) . '</td>';
            else
            	echo '<td>' . number_format($wGpaLowerBoundArray[$i], 1) . ' to ' . $wGpaUpperBoundArray[$i] . '</td>';
            echo '<td>' . $wGpaCSRArray[$i] . '</td></tr>';
        }
    ?>
	</table>

	</span>
</div>

</div>

<?php include_once('../inc/footer.php'); ?>