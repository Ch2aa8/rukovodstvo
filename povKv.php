<?php
// =============connection============
include 'temp/connection.php';
// =============head1================
include 'temp/head1.php';
// <!-- ==========header=============== -->
include 'temp/header.php';
// <!-- ==========navbar=============== -->
include 'temp/navbar.php';
?>

<section class="section">
    <div class="container">
        <div class="row">
        <div>
            <h4>Информация о руководителе образовательной организации<h4><br>
        </div>
<!-- =========  ФОРМА 1  ============-->
 <form  method="get" action="prepod.php">

 <div class="container">
	<div class="row"><br>
		<table class="table table-striped">
			<tr itemprop="povkval">
				<!-- <th itemprop="idR">IDРуководства</th> -->
                <th itemprop="nameK">Наименование</th>
				<th itemprop="colChK">Кол-во часов</th>
			</tr>
			
            <?php
            $sql = "SELECT * FROM povkval where idP"; 

            if (!empty($_GET['idP']))
            {
                $idP=$_GET['idP'];
                $sql= "SELECT * FROM povkval WHERE idP=".$idP;
                var_dump($sql);
            }
            var_dump($idP);
            $result  = $connection->query($sql);
            $row = mysqli_fetch_assoc($result);

                echo '<tr>   
                <td>'.$row['nameK'].'</td>             
                <td>'.$row['colChK'].'</td>
                </tr>';

                $result->close();
?>
		</table>
	</div>	
</div>

	</form>
    </div>


    <div class="row">

<div>
    <h4>Информация о руководителе образовательной организации<h4><br>
</div>

<!-- =========  ФОРМА 2  ============-->
<form  method="post" action="">

<div class="container">
<div class="row"><br>
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
    </section>

                <!--============footer===============  -->
<?php                
                include 'temp/footer.php';
                include 'temp/head2.php';
?>      