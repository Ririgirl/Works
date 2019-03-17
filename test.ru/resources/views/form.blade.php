<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Запрос на статистику</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .container{
      padding-top:3%;
      padding-left:25%;
      padding-right:25%;
      padding-bottom:10%;
    }
    p{
        text-align:center;
    }
    font{
        color:red;
    }
</style>
<body>
		<div class="container">
        <form action="{{ route('hh', $bannersid) }}" method="POST">
            <br/><p>Хотите получить статистику по данному баннеру на свою почту?</p>
            <div class="row">
            	{{ csrf_field() }}
                <div class="col-md-12 contact-table">
                    <label for="basic-url">E-mail <font>*</font></label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>
                <div class="col-md-6 contact-table">
                    <label for="basic-url">Выберите дату <font>*</font></label>
    								<select class="form-control" id="exampleFormControlSelect1" name="day">
    									<option value="1">1</option>
									    <option value="2">2</option>
									    <option value="3">3</option>
									    <option value="4">4</option>
									    <option value="5">5</option>
									    <option value="6">6</option>
									    <option value="7">7</option>
									    <option value="8">8</option>
									    <option value="9">9</option>
									    <option value="10">10</option>
									    <option value="11">11</option>
									    <option value="12">12</option>
									    <option value="13">13</option>
									    <option value="14">14</option>
									    <option value="15">15</option>
									    <option value="16">16</option>
									    <option value="17">17</option>
									    <option value="18">18</option>
									    <option value="19">19</option>
									    <option value="20">20</option>
									    <option value="21">21</option>
									    <option value="22">22</option>
									    <option value="23">23</option>
									    <option value="24">24</option>
									    <option value="25">25</option>
									    <option value="26">26</option>
									    <option value="27">27</option>
									    <option value="28">28</option>
									    <option value="29">29</option>
									    <option value="30">30</option>
									    <option value="31">31</option>
									</select>
									<select class="form-control" id="exampleFormControlSelect1" name="month">
										<option value="01">Январь</option>
								    <option value="02">Февраль</option>
								    <option value="03">Март</option>
								    <option value="04">Апрель</option>
								    <option value="05">Май</option>
								    <option value="06">Июнь</option>
								    <option value="07">Июль</option>
								    <option value="08">Август</option>
								    <option value="09">Сентябрь</option>
								    <option value="10">Октябрь</option>
								    <option value="11">Ноябрь</option>
								    <option value="12">Декабрь</option>
									</select>
									<select class="form-control" id="exampleFormControlSelect1" name="year">
										<option value="2019">2019</option>
								    <option value="2020">2020</option>
									</select>
                </div>
                <div class="col-md-6 contact-table">
                    <label for="basic-url">Выберите дату <font>*</font></label>
    								<select class="form-control" id="exampleFormControlSelect1" name="day_last">
    									<option value="1">1</option>
									    <option value="2">2</option>
									    <option value="3">3</option>
									    <option value="4">4</option>
									    <option value="5">5</option>
									    <option value="6">6</option>
									    <option value="7">7</option>
									    <option value="8">8</option>
									    <option value="9">9</option>
									    <option value="10">10</option>
									    <option value="11">11</option>
									    <option value="12">12</option>
									    <option value="13">13</option>
									    <option value="14">14</option>
									    <option value="15">15</option>
									    <option value="16">16</option>
									    <option value="17">17</option>
									    <option value="18">18</option>
									    <option value="19">19</option>
									    <option value="20">20</option>
									    <option value="21">21</option>
									    <option value="22">22</option>
									    <option value="23">23</option>
									    <option value="24">24</option>
									    <option value="25">25</option>
									    <option value="26">26</option>
									    <option value="27">27</option>
									    <option value="28">28</option>
									    <option value="29">29</option>
									    <option value="30">30</option>
									    <option value="31">31</option>
									</select>
									<select class="form-control" id="exampleFormControlSelect1" name="month_last">
										<option value="01">Январь</option>
								    <option value="02">Февраль</option>
								    <option value="03">Март</option>
								    <option value="04">Апрель</option>
								    <option value="05">Май</option>
								    <option value="06">Июнь</option>
								    <option value="07">Июль</option>
								    <option value="08">Август</option>
								    <option value="09">Сентябрь</option>
								    <option value="10">Октябрь</option>
								    <option value="11">Ноябрь</option>
								    <option value="12">Декабрь</option>
									</select>
									<select class="form-control" id="exampleFormControlSelect1" name="year_last">
										<option value="2019">2019</option>
								    <option value="2020">2020</option>
									</select>
                </div>
                <input type="hidden" class="form-control" name="num" value="{{$bannersid->id}}">
            </div>
            <br/><p><button type="submit" name="submit" class="btn btn-primary pull-right">Получить!</button></p>
        </form>
    </div>
    <?php
    $host = 'localhost'; // адрес сервера 
		$database = 'test'; // имя базы данных
		$user = 'root'; // имя пользователя
		$password = ''; // пароль
	    if (isset($_POST['submit']))
	    {
	    	$link = mysqli_connect($host, $user, $password, $database) 
   				 or die("Ошибка бд: " . mysqli_error($link));
	    	$email = $_POST['email'];
	    	$day = $_POST['day'];
	    	$month = $_POST['month'];
	    	$year = $_POST['year'];
	    	$day_last = $_POST['day_last'];
	    	$month_last = $_POST['month_last'];
	    	$year_last = $_POST['year_last'];
	    	$id_ban_id = $_POST['num'];
	    	echo '<hr>';
	    	$sql="SELECT COUNT(*) FROM `statistics` WHERE (`date`) BETWEEN '$year-$month-$day-00-00' and '$year_last-$month_last-$day_last-23-59-59' and `banner_id`= $id_ban_id GROUP BY (`banner_id`)";
	    	$result = mysqli_query($link, $sql) or die("Ошибка при внесении: " . mysqli_error($link)); 
				if($result) //сообщение о добавлении в бд
					{
					    $row = mysqli_fetch_row($result);
					    echo 'В период с '.$day.'-'.$month.'-'.$year.' по '.$day_last.'-'.$month_last.'-'.$year_last;
					    echo ' колиество просмотров данного баннера = ';
				      echo $row[0];
					}
				mysqli_close($link);
	    }
		?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>