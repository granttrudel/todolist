<div id="myDIV" class="header">
  <h2>My To Do List</h2>
  <form action="controller.php" method="post">
	  <input type="text" name="myInput" id="myInput" placeholder="Title...">
	  <input type="submit" name="submit" value="Add" />
  </form>
  <form action="controller.php" method="post">
	  <input type="submit" name="submit" value="Reset" />
  </form>
</div>
<?php
session_start();
if (empty($_SESSION['todolist'])) $_SESSION['todolist'] = ['run','read','write'];
if (!empty($_SESSION['todolist'])) {
	foreach ($_SESSION['todolist'] as $item) {
		$todolist[] = $item;
	}
}
?>
<form action="controller.php" id="form1" method="post">
<ul id="myUL">
<?php foreach ($todolist as $key => $item) {
	$checked = '';
	if (!empty($_SESSION['checkeditems'][$item])) $checked = 'checked';
	echo '<li><input name="'.$item.'" type="checkbox" id="'.$item.'" value="'.$item.'" '.$checked.' onchange=document.getElementById(\'form1\').submit() >'.$item.'</li>';
}
?>
</ul>
<!-- input type="submit" name="submit" value="Submit" /-->
</form>


