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

<!-- =========  ФОРМА 1  ============-->
 <form  method="post" action="">

 <div class="container">
	<div class="row"><br>
		<table class="table table-striped">
             <!-- ====Руководитель=====  -->
			<tr itemprop="rucovodstvo">
				<!-- <th itemprop="idR">IDРуководства</th> -->
                <th itemprop="fio">Ф.И.О</th>
				<th itemprop="post">Должность</th>
                <th itemprop="telephone">Контактные телефоны</th>
                <th itemprop="email">Адреса электронной почты</th>

			</tr>
			
            <?php
            $sql = "SELECT * FROM rukovodstvo where idR!=1"; 

            $result  = $connection->query($sql);
            $row = mysqli_fetch_assoc($result);


                echo '<tr>   
                <td>'.$row['FIO'].'</td>             
                <td>'.$row['dolznostR'].'</td>
                <td>'.$row['phoneR'].'</td>
                <td>'.$row['emailR'].'</td>
                </tr>';

                $result->close();
?>
		</table>
	</div>	
</div>

	</form>


    <div class="row">
        <h3>Информация о руководителе образовательной организации<h3><br>
    </div>
<!-- =========  ФОРМА 2  ============-->
<form  method="post" action="">
<div class="container">
<div class="row">
<table class="table table-striped">
     <!-- ====ЗамРуководитель=====  -->
    <tr itemprop="rucovodstvoZam">
        <!-- <th itemprop="idR">IDРуководства</th> -->
        <th itemprop="fio">Ф.И.О</th>
        <th itemprop="post">Должность</th>
        <th itemprop="telephone">Контактные телефоны</th>
        <th itemprop="email">Адреса электронной почты</th>

    </tr>
    
<?php
$sql = "SELECT * FROM rukovodstvo where idR!=1"; 

    $result  = $connection->query($sql);
    $row = mysqli_fetch_assoc($result);

    foreach($result as $row)
    {
        echo '<tr>   
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

                <!--============footer===============  -->
<?php                
                include 'temp/footer.php';
                include 'temp/head2.php';
?>      