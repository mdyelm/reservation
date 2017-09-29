<?php $this->assign('title', $title); ?>
<?php
echo $this->Html->css('nice-select', array('inline' => false));
echo $this->Html->css('flatpickr.min', array('inline' => false));
echo $this->Html->css('airbnb', array('inline' => false));
echo $this->Html->script('jquery.nice-select.min', array('inline' => false));
echo $this->Html->script('flatpickr', array('inline' => false));
echo $this->Html->script('ja', array('inline' => false));
echo $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/classlist/2014.01.31/classList.min.js', array('inline' => false));
?>
<div class="inner">
    <ol class="stepBar step3">
        <li class="step">
            <span class="number">STEP1</span>
            <span class="text">メールアドレスの入力</span>
        </li>
        <li class="step">
            <span class="number">STEP2</span>
            <span class="text">情報の入力</span>
        </li>
        <li class="step current last">
            <span class="number">STEP3</span>
            <span class="text">送信完了</span>
        </li>
    </ol>
    <div class="contact-inner">        
        <h2>無料トライアルありがとうございます。</h2>
        <h3 class="demo_h">ベルフェイス体験(15分)もご予約ください！</h3>
        <div class="description">※ご予約の時間に担当よりお電話し、その場でデモをご覧いただけます。</div>
        <div class="demo_image">

        </div>
        <div class="demo_wrap cf">
            <div class="demo_staff">
                <div class="image">
                    <img src="https://cdn.bell-face.com/assets/www/imgs/contact/demo_staff.jpg" alt="デモンストレーター 小正一葉">
                </div>
                <div class="text">
                    デモンストレーター<br />
                    小正一葉
                </div>
            </div>
            <div class="demo_form">
                <?php
                echo $this->Form->create(false, array(
                    'url' => array('controller' => 'trial', 'action' => 'b04'),
                    'id' => 'formA03',
                    'inputDefaults' => array(
                        'label' => false,
                        'div' => false,
                        'required' => true,
                        'autocomplete' => 'off',
                    )
                ));
                ?>
                <?php echo $this->Form->input('pick_date', array('type' => 'hidden', 'class' => 'pick_date')); ?>
                <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
                <?php echo $this->Form->input('email', array('type' => 'hidden')); ?>
                <?php echo $this->Form->input('company_name', array('type' => 'hidden')); ?>
                <?php echo $this->Form->input('name', array('type' => 'hidden')); ?>
                <?php echo $this->Form->input('phone_number', array('type' => 'hidden')); ?>
                <div id="calendar-a"></div>
                <?php echo $this->Form->select('pick_time', array(), array('class' => 'time', 'id' => 'pick_time', 'empty' => '', 'required' => false, 'style' => "display: none;width:0;height:0;")); ?>

                <div class="form_wrap">
                    <div class="row date form-row form-row2">
                        <input type="text" id="pick_date_time" class="full-text" name="pick_date_time" value="" style="height:0;width:0;padding:0;margin:0;">
                        <label style="margin-top:-15px;" id="label-selected-date">
                            カレンダーから日程をご選択ください                            
                        </label>
                        <div class="input_wrap cf" id="display_time">
                        </div>
                    </div>
                    <div class="row form-row form-row2">
                        <label>当日のご連絡先 電話番号<span class="red">*</span></label>
                        <div class="input_wrap">
                            <input type="text" id="reservation_phone_number" class="full-text" name="reservation_phone_number" value="<?php echo $reservation_phone_number; ?>">
                        </div>
                    </div>
                    <div class="submit-wrap form-row">
                        <button type="submit" class="btnSubmit">予約する</button>
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
        <div class="info">
            <span>電話番号：</span><a href="tel:03-6712-7971">03-6805-0775</a> <br>
            <span>営業時間：</span>平日 9:00 ～ 18:00 <br>
            <span>メールアドレス：</span><a href="mailto:info@bell-face.com">info@bell-face.com</a> <br>
            <span>会社名：</span>ベルフェイス株式会社 <br>
            <span>所在地：</span>〒東京都渋谷区渋谷2丁目11番5号 クロスオフィス 渋谷メディオ4階
        </div>
        <div class="isms cf">
            <div class="text">
                当社ではセキュリティ対策に積極的に取り組んでおり、以下のように第三者による認定を取得しております。<br>
                <span class="number">ISMS：認証番号 3748056</span><br>
                <span class="area">認証範囲：自社のアプリケーションサービスであるWEB会議システムの企画及びテクニカルサポート</span>
            </div>
            <p class="logoImg"><img src="https://cdn.bell-face.com/assets/www/imgs/contact/logoFooter.jpg" alt=""></p>
        </div>
        <script type="text/javascript">
            function getFormattedDate(date) {
                var date = new Date(date);
                var year = date.getFullYear();

                var month = (1 + date.getMonth()).toString();
                month = month.length > 1 ? month : '0' + month;

                var day = date.getDate().toString();
                day = day.length > 1 ? day : '0' + day;

                var dayOfWeek = date.getDay();

                var tmp = [
                    '日',
                    '月',
                    '火',
                    '水',
                    '木',
                    '金',
                    '土'
                ];
                return year + '年' + month + '月' + day + '日' + '(' + tmp[dayOfWeek] + ')';
            }

            $(function () {
                var config = {
                    inline: true,
                    minDate: "today",
                    locale: "ja",
                    dateFormat: 'Y/m/d',
                    disable: [
                        function (date) {
                            // return true to disable
                            return (date.getDay() === 0 || date.getDay() === 6);

                        }, <?php echo $disable; ?>
                    ],
                    onChange: function (selectedDates, dateStr, instance) {
                        var leftSelect = instance.selectedDateElem.offsetLeft;
                        var topSelect = instance.selectedDateElem.offsetTop + 116;

                        $('#pick_date_time').val('');
                        $('#pick_date').val(dateStr);
                        $('#label-selected-date').html('カレンダーから日程をご選択ください');
                        $('.btnSubmit').removeClass('green');
                        $("#pick_time").val('');
                        $("#pick_time").html('<option value="" data-display=""></option>');
                        $("#pick_time").niceSelect('update', topSelect, leftSelect);
                        $(".nice-select").find('li').html('<img style="width:44px;height:44px;max-width:44px;vertical-align: middle;" src="<?php echo $this->Html->url('/img/loading.gif'); ?>"/>');
                        $('#display_time').html(getFormattedDate(selectedDates));
                        // call ajax to get free time option
                        $.ajax({
                            url: '<?php echo $this->Html->url(array("controller" => "index", "action" => "ajax_get_free_time")); ?>',
                            type: 'post',
                            data: 'date=' + dateStr,
                            dataType: "json",
                            success: function (result) {
                                if (result.status == true) {
                                    if (result.time_range.length) {
                                        $("#pick_time").html('<option value="" data-display="時間を選択して下さい">時間を選択して下さい</option>');
                                    } else {
                                        $("#pick_time").html('<option value="" data-display="現在、空きがございません">現在、空きがございません</option>');
                                    }
                                    $.each(result.time_range, function (key, value) {
                                        $("#pick_time").append("<option value='" + value + "'>" + value + "</option>");
                                    });
                                    $("#pick_time").niceSelect('update', topSelect, leftSelect);
                                } else {

                                }
                            }
                        });
                    },
                };
                $("#calendar-a").flatpickr(config);
                $("#pick_time").niceSelect('', 0, 0);
                $("#pick_time").change(function () {
                    if ($(this).val()) {
                        $('#pick_date_time').val($(this).val());
                        $('#pick_date_time-error').hide();
                        var arr = $(this).val().split('-');
                        $('#display_time').html(getFormattedDate($('#pick_date').val()) + ' ' + arr[0] + ' 〜 ' + arr[1]);
                        $('#label-selected-date').html('予約日');
                    } else {
                        $('#pick_date_time').val('');
                        $('#display_time').html(getFormattedDate($('#pick_date').val()));
                        $('#label-selected-date').html('カレンダーから日程をご選択ください');
                    }

                    var reservation_phone_number = $('#reservation_phone_number').val();
                    var pick_date_time = $('#pick_date_time').val();
                    if (reservation_phone_number != '' && pick_date_time != '') {
                        $('.btnSubmit').addClass('green');
                    } else {
                        $('.btnSubmit').removeClass('green');
                    }
                });
            });


        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                var validator = $("#formA03").validate({
                    rules: {
                        pick_date_time: "required",
                        reservation_phone_number: "required",
                    },
                    messages: {
                        pick_date_time: "* 予約日が正しくありません",
                        reservation_phone_number: "* 当日のご連絡先 電話番号が正しくありません",
                    },
                    onkeyup: function (element) {
                        var reservation_phone_number = $('#reservation_phone_number').val();
                        var pick_date_time = $('#pick_date_time').val();
                        if (reservation_phone_number != '' && pick_date_time != '') {
                            $('.btnSubmit').addClass('green');
                        } else {
                            $('.btnSubmit').removeClass('green');
                        }
                    }
                });
            });
        </script>
    </div>
</div>