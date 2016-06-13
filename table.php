<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<title>Таблица</title>
</head>
<body>

<h2>Таблица</h2>

<?php
if(isset($_POST['rows'])&&isset($_POST['columns']))
{
	
	$rows = $_POST['rows']+1; // количество строк, tr
	$cols = $_POST['columns']+1; // количество столбцов, td
	$minr = $_POST['minr']; // минимальное рандомное число
	$maxr = $_POST['maxr']; // максимальное рандомное число

	$table = '<table id="table2" border="1">';

	for ($tr=1; $tr<=$rows; $tr++){
		$table .= '<tr>';
		for ($td=1; $td<=$cols; $td++){			
			if ($tr===1 or $td===1){
				$num = $tr*$td-1;
				$table .= '<th style="color:white;background-color:green;">'. $num .'</th>'; // вычислили первую строку или столбец
			}else{
				$num = rand($minr, $maxr); // создаем рандомное число
				$table .= '<td>'. $num .'</td>'; // все ячейки, кроме ячеек из первого столбца и первой строки
			}
		}
		$table .= '</tr>';
	}

	$rows=$rows-1;
	$table .= '</table><br>
	Введите номер строки (max = '.$rows.'):<br>
	<input type="number" id="mathR" min="1" max="'.$rows.'" value="1" onchange="onChangeMathRows()"><br><br>
	<input type="button" value="Сумма элементов в строке" onclick="summa();">'; //закрываем таблицу и добавляем нужные элементы
	echo $table; // сделали эхо всего 1 раз
}

?>
</body>
</html>
