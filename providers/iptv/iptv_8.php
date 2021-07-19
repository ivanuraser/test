                <!--Тарифы IPTV -->
                <div class="row page-title text-center">
                    <p class="h2">Тарифы <span>IPTV</span> от провайдера Ростелеком | Твой интернет
                    <?php if ((isset($street_name)) && (isset($house)))	{ 
						echo 'по адресу <span>'.$street_name.', '.$house.'</span>';
					}?>
                    :</p>
                    <p class="h2">Отдел подключений <?php echo $phone_tkt; ?></p>
                </div>
                <div class="row jobs">
                    <div class="col-lg-12">
                        <div class="job-posts table-responsive">
                            <table class="table">
                                <tr class="odd">
                                    <td class="tbl-logo"><img src="img/providers/ros_tkt.png" alt="" class="img-thumbnail" title=""></td>
                                    <td class="tbl-title"><span class="job-type">Тариф</span><br><p class="h4">Популярный</p></td>
                                    <td class="tbl-speed"><p class="h4">108</p><span class="job-type">каналов</span></td>
                                    <td class="tbl-cost"><p class="h4">320</p><span class="job-type">рублей в месяц</span></td>
                                    <td class="tbl-description"><p>Пакет основных телеканалов для всей семьи. Необходима <span data-toggle="tooltip" title="1 рубль в месяц при условии пользования услугами 12 месяцев. Выкуп – 2190 рублей. Доступна аренда по 99 рублей в месяц.">ТВ-приставка</span></p></td>
									<td class="tbl-icon"><img src="img/icons/tv.png" width="60px" alt="л" title=""></td>
                                    <td class="tbl-apply"><button class="btn" name="plan_id" value="87" title="">ПОДКЛЮЧИТЬ</button></td>
                                </tr>
                            </table>
                        </div>
					</div>
                </div>
                <!--//Тарифы IPTV-->