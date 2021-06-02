<html>
<head>
  <title>WEB-site of the Syromyatnikov D. BD "Apteka"</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
        <?php
        printf('<P>Hello world! Searching for Medicines in apteka:</P>');
        // Соединяемся, выбираем базу данных VER3

        include('config.php');
        $link = mysqli_connect($server, $user, $password, $database)
            or die('Error: Unable to connect: ' . mysqli_connect_error());
        echo '<P>Succesfully connected!</P>';

        // Выполняем SQL-запрос
        $SQLquery = 'SELECT * FROM Medicines';
        $SQLresult = mysqli_query($link,$SQLquery);
        printf("id_m,name,manufacturer,shelf_life,pic,generic,the_price_for_one,quantity_in_stock,product_balance");
		
		
		
		
        while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
        {
                printf('<p> %d,%s,%s,%d,%d,%d,%d,%d,%d, %d </p>',$result[0],$result[1],$result[2],$result[3],$result[4],$result[5],$result[6],$result[7],$result[8]);

        }
        // Освобождаем память от результата
        mysqli_free_result($SQLresult);
        mysqli_close($link);

?>
<P>Add New Medicines:</P>
                          <form action="add_medicines_form_action.php" method="post">
                                name: <input type="text" name="name">
                                <br>
                                manufacturer:
                                        <input type="text" name="manufacturer">
                                <br>
									shelf_life:
                                        <input type="number" name="shelf_life">
                                <br>
								pic:
                                        <input type="number" name="pic">
                                <br>
								generic:
                                        <input type="number" name="generic">
                                <br>
								the_price_for_one:
                                        <input type="number" name="the_price_for_one">
                                <br>
								quantity_in_stock:
                                        <input type="number" name="quantity_in_stock">
                                <br>
								product_balance:
                                        <input type="number" name="product_balance">
                                <br>
								
                                <br>
                                <input type="submit" value="Add medicines">
                          </form>
<BR>
<a href="index.html"> <P>GO BACK</P> </a>

 </body>
</html>
