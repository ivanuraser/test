<!--Тарифы IPTV -->
<div class="row page-title text-center">
    <p class="h2">Тарифы <span>IPTV</span> от провайдера Westcall
    <?php if ((isset($street_name)) && (isset($house)))	{ 
		echo 'по адресу <span>'.$street_name.', '.$house.'</span>';
	}?>
    :</p>
    <p class="h2">Отдел подключений <?php echo $phone_westcall; ?></p>
</div>
<div class="row jobs">
    <div class="col-lg-12">
        <div class="job-posts table-responsive">
            <table class="table">
                <tr class="odd" >
					<td class="tbl-logo"><img src="img/providers/logo_westcall_full.png" class="img-thumbnail" alt="" title=""></td>
                    <td class="tbl-title"><span class="job-type">Тариф</span><br><p class="h4">Цифровой HD</p></td>
                    <td class="tbl-speed"><p class="h4">116</p><span class="job-type">каналов (23 в HD)</span></td>
                    <td class="tbl-cost"><p class="h4">275</p><span class="job-type">рублей в месяц</span></td>
                    <td class="tbl-description"><p>Подключение бесплатное. ТВ-приставка предоставляется в аренду по 10 руб./мес.</p></td>
                    <td class="tbl-icon"><img src="img/icons/tv.png" width="60px" alt="" title=""></td>
                    <td class="tbl-apply"><button class="btn" name="plan_id" value="14">ПОДКЛЮЧИТЬ</button></td>
                </tr>
                <tr class="even">
                    <td class="tbl-logo"><img src="img/providers/logo_westcall_full.png" class="img-thumbnail" alt="" title=""></td>
                    <td class="tbl-title"><span class="job-type">Тариф</span><br><p class="h4">Стандартный HD</p></td>
                    <td class="tbl-speed"><p class="h4">144</p><span class="job-type">канала (40 в HD)</span></td>
                    <td class="tbl-cost"><p class="h4">325</p><span class="job-type">рублей в месяц</span></td>
                    <td class="tbl-description"><p>Подключение бесплатное. ТВ-приставка предоставляется в аренду по 10 руб./мес.</p></td>
					<td class="tbl-icon"><img src="img/icons/tv.png" width="60px" alt="" title=""></td>
                    <td class="tbl-apply"><button class="btn" name="plan_id" value="15" title="Подключить интернет MNS">ПОДКЛЮЧИТЬ</button></td>
                </tr>
                <tr class="odd" >
                    <td class="tbl-logo"><img src="img/providers/logo_westcall_full.png" alt="" class="img-thumbnail"></td>
                    <td class="tbl-title"><span class="job-type">Тариф</span><br><p class="h4">Базовый HD</p></td>
                    <td class="tbl-speed"><p class="h4">165</p><span class="job-type">каналов (60 в HD)</span></td>
                    <td class="tbl-cost"><p class="h4">375</p><span class="job-type">рублей в месяц</span></td>
                    <td class="tbl-description"><p>Подключение бесплатное. ТВ-приставка предоставляется в аренду по 10 руб./мес.</p></td>
                    <td class="tbl-icon"><img src="img/icons/tv.png" width="60px" alt="" title=""></td>
                    <td class="tbl-apply"><button class="btn" name="plan_id" value="16">ПОДКЛЮЧИТЬ</button></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!--//Тарифы IPTV-->