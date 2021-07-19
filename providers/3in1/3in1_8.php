                <!--Тарифы Интернет + IPTV + Домашний телефон -->
                <div class="row page-title text-center">
                    <p class="h2">Пакетные предложения <span>(Интернет + IPTV + Домашний телефон)</span> от провайдера Ростелеком | Твой интернет
                    <?php if ((isset($street_name)) && (isset($house)))	{ 
						echo 'по адресу <span>'.$street_name.', '.$house.'</span>';
					}?>
                    :</p>
                    <p class="h2">Отдел подключений <span class="ya-phone-tkt"><?php echo $phone_tkt; ?></span></p>
                </div>
                <div class="row jobs">
                    <div class="col-lg-12">
                        <div class="job-posts table-responsive">
                            <table class="table">
                                <tr class="odd" >
                                    <td class="tbl-logo"><img src="img/providers/ros_tkt.png" alt="" class="img-thumbnail"></td>
                                    <td class="tbl-title"><span class="job-type">3 в 1</span><br><p class="h4">Оптимальный</p></td>
                                    <td class="tbl-speed"><p class="h4">40</p><span class="job-type">Мбит/сек</span><p class="h4">112</p><span class="job-type">каналов</span><p class="h4">Безлимитный</p><span class="job-type">телефон</span></td>
                                    <td class="tbl-cost"><p class="h4">1085</p><span class="job-type">рублей в месяц</span></td>
                                    <td class="tbl-description"><p>Подключение бесплатное. Телевидение подключается через <span data-toggle="tooltip" title="без дополнительных проводов">CAM-модуль</span>, либо через <span data-toggle="tooltip" title="1 рубль в месяц при условии пользования услугами 12 месяцев. Доступна аренда по 99 рублей в месяц">ТВ-приставку</span>.</p></td>
									<td class="tbl-icon"><img src="img/icons/www.png" width="60px" alt="" title=""><br>+<br><img src="img/icons/tv.png" width="60px" alt="" title=""><br>+<br><img src="img/icons/phone.png" width="60px" alt="" title=""></td>
                                    <td class="tbl-apply"><button class="btn" name="plan_id" value="82">ПОДКЛЮЧИТЬ</button></td>
                                    <p> <a data-toggle="modal" href="#OplataRostelecomDocsis" class="dashed" onclick="yaCounter30841273.reachGoal('Oplata'); return true;">Способы&nbsp;оплаты</a>&nbsp;&nbsp;&nbsp;&nbsp;<a data-toggle="modal" href="#TV112RostelecomDocsis" class="dashed" onclick="yaCounter30841273.reachGoal('TvModal'); return true;">Список&nbsp;каналов</a></p>
                                </tr>
                            </table>
                        </div>
					</div>
                </div>
                <!--//Тарифы Интернет + IPTV + Домашний телефон-->