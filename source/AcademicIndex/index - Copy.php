<?php include_once('../inc/header.php'); ?>
<?php include_once('../lib/connect.php'); 
$query = "SELECT * FROM  `Ai_ACT_Conversion`";

$result = mysql_query($query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
?>
<table>
<thead>
	<th> ACT Composite </th>
    <th> SAT Equivalent </th>
</thead>

<?php
	while ($row = mysql_fetch_assoc($result)) {
    	echo '<tr><td>' . $row['actComposite'] . '</td>';
    	echo '<td>' . $row['satEquivalent'] . '</td></tr>';
	}
?>
</table>

<?php include_once('../inc/footer.php'); ?>