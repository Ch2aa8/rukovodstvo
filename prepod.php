<?php
// =============connection==========
include 'temp/connection.php';
// =============head1==========
include 'temp/head1.php';     
// <!-- ==========header=============== -->
include 'temp/header.php';
// <!-- ==========navbar=============== -->
include 'temp/navbar.php';
?>




<div class="course-area section-padding bg-white">
    <div class="container">
        <div class="row">
            <h3>Информация о руководителе образовательной организации<h3><br>
        </div>

<!-- =========  ФОРМА  ============-->
 <form  method="get" action="disciplina.php">
 <div class="container">
	<div class="row"><br>
		<table class="table table-striped">
<!-- ====Преподаватель=====  -->
			<tr itemprop="teachingStaff">
                <td itemprop="fio">ФИО</td>
				<th itemprop="post">Должность</th>
                <th itemprop="teachingDiscipline">Перечень преподаваемых дисциплин</th>
                <th itemprop="teachingLevel">Уровень образования</th>
                <th itemprop="teachingLevel">Квалификация</th>
                <th itemprop="degree">Учёная степень</th>
                <th itemprop="academStat">Учёное звание</th>
                <th itemprop="employeeQualification">Наименование направления подготовки и (или) специальности педагогического работника</th>
                <th itemprop="profDevelopment">Данные о повышении квалификации и (или) профессиональной переподготовке педагогического работника</th>
                <th itemprop="genExperience">Общий стаж работы</th>
                <th itemprop="specExperience">Стаж работы педагогического работника по специальности</th>
			</tr>
			
<?php
$sql = "SELECT * FROM prepod, disciplina, povkval where disciplina.idP=prepod.idP and povkval.idP=prepod.idP"; 

            $result  = $connection->query($sql);
            $row = mysqli_fetch_assoc($result);

			foreach($result as $row){
                echo '<tr>   
                <td>'.$row['FIOP'].'</td>             
                <td>'.$row['dolznostP'].'</td>
                <td><button href="disciplina.php?='.$row['idD'].'">Посмотреть</button></td>             
                <td>'.$row['uroven'].'</td>
                <td>'.$row['kvalif'].'</td>
                <td>'.$row['ucSt'].'</td>
                <td>'.$row['ucZv'].'</td>
                <td>'.$row['nameNapPod'].'</td>
                <td><button href="povKv.php?='.$row['idKv'].'">Посмотреть</button></td>
                <td>'.$row['staz'].'</td>
                <td>'.$row['stazSp'].'</td>
                </tr>';
            }
                $result->close();
?>
		</table>
	</div>	
</div>

	</form>
    </div>
    </div>

<!--============footer===============  -->
<?php                
                include 'temp/footer.php';
                include 'temp/head2.php';
?>      