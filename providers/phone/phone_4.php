<!--Тарифы Телефония-->
<div class="row page-title text-center">
    <p class="h2">Тарифы <span>проводной телефонии</span> от провайдера Дом.ru
    	<?php if ((isset($street_name)) && (isset($house)))	{ echo 'по адресу <span>'.$street_name.', '.$house.'</span>';}?>
    :</p>
    <p class="h2">Подключить Дом.ру: <?php echo $phone_domru; ?></p>
</div>
<div class="row jobs">
    <div class="col-lg-12">
        <div class="job-posts table-responsive">
            <table class="table">
                <tr class="odd" >
                    <td class="tbl-logo"><img src="img/providers/domru.gif" alt="" class="img-thumbnail"></td>
                    <td class="tbl-title"><span class="job-type">Тариф</span><br><p class="h4">Повременный</p></td>
                    <td class="tbl-speed"><p class="h4">28</p><span class="job-type">коп./минуту</span></td>
                    <td class="tbl-cost"><p class="h4">240</p><span class="job-type">рублей в месяц</span></td>
                    <td class="tbl-description"><p>Все звонки тарифицируются по 28 копеек за минуту.</p></td>
                                                    <td class="tbl-icon"><img src="img/icons/phone.png" width="60px" alt="" title=""></td>
                    <td class="tbl-apply"><button class="btn" name="plan_id" value="29">ПОДКЛЮЧИТЬ</button></td>
                </tr>
                <tr class="even">
                    <td class="tbl-logo"><img src="img/providers/domru.gif" alt="" class="img-thumbnail" title=""></td>
                    <td class="tbl-title"><span class="job-type">Тариф</span><br><p class="h4">Безлимитный</p></td>
                    <td class="tbl-speed"><p class="h4">Неограниченное</p><span class="job-type">количество минут</span></td>
                    <td class="tbl-cost"><p class="h4">440</p><span class="job-type">рублей в месяц</span></td>
                    <td class="tbl-description"><p>Подключение – бесплатное.</p></td>
                                                    <td class="tbl-icon"><img src="img/icons/phone.png" width="60px" alt="" title=""></td>
                    <td class="tbl-apply"><button class="btn" name="plan_id" value="30" title="">ПОДКЛЮЧИТЬ</button></td>
                </tr>
            </table>
        </div>
	</div>
</div>
<!--//Тарифы Телефония-->