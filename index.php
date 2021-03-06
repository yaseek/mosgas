<?

$title = "МОСГАЗИФИКАЦИЯ.РФ | Автономные системы газификации";
$description = "Оптовые поставки систем автономной газификации пр-ва Италии. Обучение и консультации. Доставка по РФ. Вся продукция сертифицирована в РФ.";

?>

<!DOCTYPE html>
<html>
    <head> 
        <title><?=$title?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta property="og:title" content="<?=$title?>">
        <meta property="og:description" content="<?=$description?>">

        <meta name="title" content="<?=$title?>">
        <meta name="description" content="<?=$description?>">

        <script type="text/javascript">
            window.referer = "<?=$_SERVER['HTTP_REFERER']?>";
        </script>
        
        <link rel="stylesheet" href="/css/kendo.common.min.css" type="text/css" />
        <link rel="stylesheet" href="/css/kendo.default.min.css" type="text/css" />
        <link rel="stylesheet" href="/css/style.css" type="text/css" />
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="/js/kendo.core.min.js"></script>
        <script type="text/javascript" src="/js/kendo.data.min.js"></script>
        <script type="text/javascript" src="/js/kendo.data.odata.min.js"></script>
        <script type="text/javascript" src="/js/kendo.binder.min.js"></script>
        <script type="text/javascript" src="/js/kendo.userevents.min.js"></script>
        <script type="text/javascript" src="/js/kendo.validator.min.js"></script>
        <script type="text/javascript" src="/js/model.js"></script>
        <script type="text/javascript" src="/js/main.js?_<?=time()?>"></script>
    </head>
    <body style="opacity: 0;">
        <div class="wrapper">
            <div class="content">
                <div class="left">
                    <!--div class="center f38 pfdin">МОСГАЗИФИКАЦИЯ.РФ</div-->
                    <!--img src="/img/logo_plus.png" alt="МОСГАЗИФИКАЦИЯ.РФ. Оптовые поставки по РФ для предприятий,обслуживающих газовое хозяйство" /-->
                    <img src="/img/logo_plus.png" alt="МОСГАЗИФИКАЦИЯ.РФ. Оптовые поставки по РФ для предприятий,обслуживающих газовое хозяйство" />
                    <!--div class="f16 center bold">
                        Оптовые<span style="letter-spacing: +0.5px">поставки по РФ для предприятий</span>
                    </div>
                    <div class="f16 center bold">
                        <span>обслуживающих газовое хозяйство</span>
                    </div-->
                    
                    <!--div class="table-wrap f16 bold">
                        <div class="row-wrap">
                            <div class="column-wrap left-align" style="width: 10px">Оптовые</div>
                            <div class="column-wrap center">поставки</div>
                            <div class="column-wrap center">по</div>
                            <div class="column-wrap center">РФ</div>
                            <div class="column-wrap center">для</div>
                            <div class="column-wrap right-align" style="width: 100px">&nbsp;предприятий</div>
                        </div>
                    </div>
                    <div class="table-wrap f16 bold">
                        <div class="row-wrap">
                            <div class="column-wrap center">обслуживающих газовое хозяйство</div>
                        </div>
                    </div-->
                </div>
                <div class="right" style="" >
                    <div class="wait-fonts center" style="height: 32px; padding: 5px 0">
                        <a class="tel" href="tel:+74952338872">
                            <img src="/img/tel.png" alt="+7(495)233-88-72" />
                        </a>
                        <!--span>
                            <a class="tel" href="tel:+74952338872">
                        <span class="f24 myriadprocond c7f7f7f">Тел.</span>
                            
                                <span class="f26 pfdin">(495) 233-88-72</span>
                            </a>
                        </span-->
                    </div>
                    <button id="requestcall" class="f20 ptsanswb button orange w100p">Заказать звонок</button>
                </div>
                <div class="clear"></div>
                
                <div class="center" style="padding: 75px 0 55px">
                    <div style="display: inline-block; margin: 0 auto;">
                        <img src="/img/title.png" 
                             alt="Зарабатывайте от 30000 рублей на каждой установке. Расширьте сферу деятельности, займитесь автономной газификацией" />
                        <!--div class="center f41 myriadproboldcond">ЗАРАБАТЫВАЙТЕ ОТ 30 000 РУБЛЕЙ НА КАЖДОЙ УСТАНОВКЕ</div>
                        <div class="table-wrap f30 myriadproboldcond widefont">
                            <div class="row-wrap">
                                <div class="column-wrap left-align" style="letter-spacing: 2px;">Расширьте</div>
                                <div class="column-wrap center">сферу</div>
                                <div class="column-wrap center">деятельности,</div>
                                <div class="column-wrap right-align">займитесь</div>
                                <div class="column-wrap right-align">автономной</div>
                                <div class="column-wrap right-align">газификацией</div>
                            </div>
                        </div-->
                    </div>
                </div>
               
                <div>
                    <div class="left">
                        <img src="/img/house.png" />
                    </div>
                    <div class="right" style="width: 315px">
                        <div class="form">
                            <div class="ptsans f30 center lh30">Оставьте заявку<br />на расчёт пробной партии</div>
                            <div class="f12 center italic b3b3b3" style="padding:15px 0 20px">Наш менеджер перезвонит Вам в ближайшее время</div>
                            <div class="center">
                                <div class="" style="width: 270px; margin: 0 auto;">
                                    <div class="relative">
                                        <input class="input person" type="text" 
                                               validationMessage="Укажите Ваше имя"
                                               placeholder="Ваше имя" 
                                               title="Ваше имя"
                                               data-bind="value: name" />
                                    </div>
                                    <div class="relative">
                                        <input class="input globe" type="text"
                                               validationMessage="Укажите Ваш город"
                                               placeholder="Ваш город" 
                                               title="Ваш город"
                                               data-bind="value: city" />
                                    </div>
                                    <div class="relative">
                                        <input class="input phone" type="text"
                                               placeholder="Ваш телефон" 
                                               data-pattern="+7(999)999-9999"
                                               title="Ваш телефон"
                                               validationMessage="Укажите Ваш телефон"
                                               data-bind="value: phone" />
                                    </div>
                                    <button class="w100p button orange myriadproboldcond f28 buybutton" data-bind="disabled: messageSent, click: commit">Отправить!</button>
                                </div>
                            </div>
                        </div> <!-- FORM -->
                    </div>
                    <div class="clear"></div>
                </div>
                
                <ul class="spec">
                    <li>Автономная газификация для частных клиентов является бытовым оборудованием и не подлежит регистрации в Ростехнадзоре</li>
                    <li>Ежегодно регистрируется более 200 000 земельных участков &laquo;без газа&raquo; и все они Ваши потенциальные клиенты</li>
                    <li>Одна бригада способна устанавливать до 4 комплектов в день, это от 120 000 руб. Вашей прибыли</li>
                    <li>Возможен последующий доход на регулярных заправках газом, от 5 000 руб. на каждой</li>
                    <li>В комплект поставки входит &mdash; Газгольдер нужного объёма и весь необходимый крепёж, гибкие трубы, фитинги и запорная арматура</li>
                    <li>Доставка транспортной компанией в любой регион страны</li>
                </ul>
                
                <div class="table-wrap">
                    <div class="row-wrap">
                        <div class="column-wrap">
                            <div class="buyblock">
                                <img src="/img/small_house.png" />
                                <div class="subscribe">Дома, дачи &LT; 90 кв.м</div>
                                <div class="montage">наземная установка</div>
                            </div>
                            <div class="price">
                                <div class="text">
                                    <div class="regular">
                                        <span class="key">Цена комплекта</span>
                                        &nbsp;&mdash;&nbsp;
                                        <span class="value">от 115 000 руб.</span>
                                    </div>
                                    <div class="regular">
                                        <span class="key">Время установки</span>
                                        &nbsp;&mdash;&nbsp;
                                        <span class="value">до 6 часов</span>
                                    </div>
                                    <div class="profit">
                                        <span class="key bold">Ваша прибыль</span>
                                        &nbsp;&mdash;&nbsp;
                                        <span class="value">от 30 000 руб.</span>
                                    </div>
                                </div>
                                <button id="buy_1" class="w100p button myriadproboldcond orange f28 buybutton">Заказать</button>
                            </div>
                        </div>
                        <div class="delimiter"></div>
                        <div class="column-wrap">
                            <div class="buyblock">
                                <img src="/img/medium_house.png" />
                                <div class="subscribe">Дома, дачи 90&ndash;140 кв.м</div>
                                <div class="montage">наземная установка</div>
                            </div>
                            <div class="price">
                                <div class="text">
                                    <div class="regular">
                                        <span class="key">Цена комплекта</span>
                                        &nbsp;&mdash;&nbsp;
                                        <span class="value">от 155 000 руб.</span>
                                    </div>
                                    <div class="regular">
                                        <span class="key">Время установки</span>
                                        &nbsp;&mdash;&nbsp;
                                        <span class="value">до 6 часов</span>
                                    </div>
                                    <div class="profit">
                                        <span class="key bold">Ваша прибыль</span>
                                        &nbsp;&mdash;&nbsp;
                                        <span class="value">от 40 000 руб.</span>
                                    </div>
                                </div>
                                <button id="buy_2" class="w100p button orange myriadproboldcond f28 buybutton">Заказать</button>
                            </div>
                        </div>
                        <div class="delimiter"></div>
                        <div class="column-wrap">
                            <div class="buyblock">
                                <img src="/img/big_house.png" />
                                <div class="subscribe">Дома, дачи 140&ndash;250 кв.м</div>
                                <div class="montage">подземная установка</div>
                            </div>
                            <div class="price">
                                <div class="text">
                                    <div class="regular">
                                        <span class="key">Цена комплекта</span>
                                        &nbsp;&mdash;&nbsp;
                                        <span class="value">от 210 000 руб.</span>
                                    </div>
                                    <div class="regular">
                                        <span class="key">Время установки</span>
                                        &nbsp;&mdash;&nbsp;
                                        <span class="value">до 2 суток</span>
                                        <div>
                                            <span class="key">(с учётом земляных работ)</span>
                                        </div>
                                    </div>
                                    <div class="profit">
                                        <span class="key bold">Ваша прибыль</span>
                                        &nbsp;&mdash;&nbsp;
                                        <span class="value">от 50 000 руб.</span>
                                    </div>
                                </div>
                                <button id="buy_3" class="w100p button orange myriadproboldcond f28 buybutton">Заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="center myriadprocond f30" style="margin: 35px 0 15px">
                    <span>ВСЯ ПРОДУКЦИЯ И КОМПЛЕКТУЮЩИЕ</span>
                    &nbsp;
                    <span style="color: #b53030">СЕРТИФИЦИРОВАНЫ В РФ И ЕС</span>
                </div>
                
                <div class="table-wrap">
                    <div class="row-wrap">
                        <div class="column-wrap">
                            <img src="/img/sert_1.png" />
                        </div>
                        <div class="column-wrap">
                            <img src="/img/sert_2.png" />
                        </div>
                        <div class="column-wrap">
                            <img src="/img/sert_3.png" />
                        </div>
                        <div class="column-wrap">
                            <img src="/img/sert_4.png" />
                        </div>
                    </div>
                </div>
                
                <div style="margin-top: 55px">
                    <div class="left">
                        <img src="/img/house.png" />
                    </div>
                    <div class="right" style="width: 315px">
                        <div class="form">
                            <div class="ptsans f30 center lh30">Оставьте заявку<br />на расчёт пробной партии</div>
                            <div class="f12 center italic b3b3b3" style="padding:15px 0 20px">Наш менеджер перезвонит Вам в ближайшее время</div>
                            <div class="center">
                                <div class="" style="width: 270px; margin: 0 auto;">
                                    <div class="relative">
                                        <input class="input person" type="text" 
                                               validationMessage="Укажите Ваше имя"
                                               placeholder="Ваше имя" 
                                               title="Ваше имя"
                                               data-bind="value: name" />
                                    </div>
                                    <div class="relative">
                                        <input class="input globe" type="text"
                                               validationMessage="Укажите Ваш город"
                                               placeholder="Ваш город" 
                                               title="Ваш город"
                                               data-bind="value: city" />
                                    </div>
                                    <div class="relative">
                                        <input class="input phone" type="text"
                                               placeholder="Ваш телефон" 
                                               data-pattern="+7(999)999-9999"
                                               title="Ваш телефон"
                                               validationMessage="Укажите Ваш телефон"
                                               data-bind="value: phone" />
                                    </div>
                                    <button class="w100p button orange myriadproboldcond f28 buybutton" data-bind="disabled: messageSent, click: commit">Отправить!</button>
                                </div>
                            </div>
                        </div> <!-- FORM -->
                    </div>
                    <div class="clear"></div>
                </div>
                
            </div>
        </div>
        
        <div class="hidden" style="display: none">
            
            <div id="template-gracias">
                <div class="screen">
                    <div class="moir"></div>
                    <div class="table-wrap" style="height: 100%;">
                        <div class="row-wrap">
                            <div class="column-wrap" style="vertical-align: middle;">
                                <div class="request-call">
                                    <div class="ptsans gracias">
                                        Благодарим за заказ, мы свяжемся с Вами<br />
                                        в самое ближайшее время
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="template-request-call">
                <div class="screen">
                    <div class="moir"></div>
                    <div class="table-wrap" style="height: 100%;">
                        <div class="row-wrap">
                            <div class="column-wrap" style="vertical-align: middle;">
                                <div class="request-call">
                                    <div style="text-align: right">
                                        <span class="cross" data-bind="click: close"></span>
                                    </div>
                                    <div class="form popup-form">
                                        <div class="ptsans f30 center lh30">Заказать звонок</div>
                                        <div class="f12 center italic b3b3b3" style="padding:15px 0 20px">Наш менеджер перезвонит Вам в ближайшее время</div>
                                        <div class="center">
                                            <div class="" style="width: 270px; margin: 0 auto;">
                                                <div class="relative">
                                                    <input class="input person" type="text" 
                                                           validationMessage="Укажите Ваше имя"
                                                           placeholder="Ваше имя" 
                                                           title="Ваше имя"
                                                           data-bind="value: name" />
                                                </div>
                                                <div class="relative">
                                                    <input class="input globe" type="text"
                                                           validationMessage="Укажите Ваш город"
                                                           placeholder="Ваш город" 
                                                           title="Ваш город"
                                                           data-bind="value: city" />
                                                </div>
                                                <div class="relative">
                                                    <input class="input phone" type="text"
                                                           placeholder="Ваш телефон" 
                                                           data-pattern="+7(999)999-9999"
                                                           title="Ваш телефон"
                                                           validationMessage="Укажите Ваш телефон"
                                                           data-bind="value: phone" />
                                                </div>
                                                <div>
                                                <button class="w100p button orange myriadproboldcond f28 buybutton" data-bind="disabled: messageSent, click: commit">Заказать!</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- FORM -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="template-message">
                <span class="k-widget k-tooltip k-tooltip-validation k-invalid-msg" data-for="" role="alert">
                    <span class="k-icon k-warning"> </span>
                    ${text}
                </span>
            </div>

            <div id="template-request-buy">
                <div class="screen">
                    <div class="moir"></div>
                    <div class="table-wrap" style="height: 100%;">
                        <div class="row-wrap">
                            <div class="column-wrap" style="vertical-align: middle;">
                                <div class="request-call">
                                    <div class="right">
                                        <span class="cross" data-bind="click: close"></span>
                                    </div>
                                    
                                    <div class="buy-form">
                                        <div class="ptsans f30 center lh30" data-bind="html: title_win" style="padding-bottom: 20px;"></div>
                                        <div class="table-wrap">
                                            <div class="row-wrap">
                                                <div class="column-wrap" style="vertical-align: middle; height: 120px;" data-bind="html: img">
                                                </div>
                                                <div class="column-delimiter" style="width: 25px"></div>
                                                <div class="column-wrap" style="width: 240px; vertical-align: middle;">
                                                    <div class="f24 ptsans c5e5e5e">
                                                        Заполните форму и наш<br />
                                                        специалист перезвонит Вам<br />
                                                        в самое ближайшее время
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-wrap">
                                                <div class="column-wrap" style="vertical-align: bottom; text-align: left">
                                                    <div class="text" data-bind="html: text"></div>
                                                    <div class="text bold" data-bind="html: boldtext" style="position: relative; bottom: -5px;"></div>
                                                </div>
                                                <div class="column-delimiter" style="width: 25px"></div>
                                                <div class="column-wrap"style="vertical-align: bottom;">
                                                    <div class="form center">
                                                        <div class="" style="margin: 0 auto;">
                                                            <div class="relative">
                                                                <input class="input person" type="text" 
                                                                       validationMessage="Укажите Ваше имя"
                                                                       placeholder="Ваше имя" 
                                                                       title="Ваше имя"
                                                                       data-bind="value: name" />
                                                            </div>
                                                            <div class="relative">
                                                                <input class="input globe" type="text"
                                                                       validationMessage="Укажите Ваш город"
                                                                       placeholder="Ваш город" 
                                                                       title="Ваш город"
                                                                       data-bind="value: city" />
                                                            </div>
                                                            <div class="relative">
                                                                <input class="input phone" type="text"
                                                                       placeholder="Ваш телефон" 
                                                                       data-pattern="+7(999)999-9999"
                                                                       title="Ваш телефон"
                                                                       validationMessage="Укажите Ваш телефон"
                                                                       data-bind="value: phone" />
                                                            </div>
                                                            <div>
                                                            <button class="w100p button orange myriadproboldcond f28 buybutton" 
                                                                    data-bind="disabled: messageSent, click: commit"
                                                                    style="padding: 0;">Заказать!</button>
                                                            </div>
                                                        </div>
                                                    </div> <!-- FORM -->
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div> 
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </body>
</html>
