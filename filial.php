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



<!-- =========  ФОРМА  ============-->
 <form  method="post" action="index.php">
 <div class="container">
	<div class="row">
<br>
            <h3>Информация о руководителях филиалов образовательной организации<h3>
<br>
    </div>
		<table class="table table-striped">
             <!-- ====Зам.Руководителя=====  -->
			<tr itemprop="rucovodstvoFil">
                <th itemprop="nameFil">Наименование филиала</th>
				<th itemprop="fio">ФИО</th>
                <th itemprop="post">Должность</th>
                <th itemprop="telephone">Контактные телефоны</th>
                <th itemprop="email">Адреса электронной почты</th>

			</tr>
			
<?php
$sql = "SELECT * FROM filial, rukovodstvo where rukovodstvo.idF=filial.idF"; 

            $result  = $connection->query($sql);
            $row = mysqli_fetch_assoc($result);

            foreach($result as $row)
            {
                echo '<tr>
                <td>'.$row['nameF'].'</td>                
                <td>'.$row['FIO'].'</td>             
                <td>'.$row['dolznostR'].'</td>
                <td>'.$row['phoneR'].'</td>
                <td>'.$row['emailR'].'</td>
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
    </div>


                <!--============footer===============  -->
<?php                
                include 'temp/footer.php';
                include 'temp/head2.php';
?>      