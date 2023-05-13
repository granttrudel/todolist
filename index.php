<div id="myDIV" class="header">
  <h2>My To Do List</h2>
  <form action="myform2.php" method="post">
	  <input type="text" name="myInput" id="myInput" placeholder="Title...">
	  <input type="submit" name="submit" value=Add />
  </form>
</div>
<?php
session_start();
$todolist = ['run','read','write'];
if (!empty($_SESSION['test2'])) {
	foreach ($_SESSION['test2'] as $item) {
		$todolist[] = $item;
	}
}
?>
<form action="myform.php" method="post">
<ul id="myUL">
<?php foreach ($todolist as $key => $item) {
	$checked = '';
	if (!empty($_SESSION['test'][$item])) $checked = 'checked';
	echo '<li><input name="'.$item.'" type="checkbox" id="'.$item.'" value="'.$item.'" '.$checked.'>'.$item.'</li>';
}
?>
</ul>
<input type="submit" name="submit" value="Submit" />
</form>


