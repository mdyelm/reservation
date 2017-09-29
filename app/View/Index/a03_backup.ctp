<?php $this->assign('title', $title); ?>

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
        <?php
        echo $this->Form->create(false, array(
            'url' => array('controller' => 'index', 'action' => 'a04'),
            'inputDefaults' => array(
                'label' => false,
                'div' => false,
                'required' => false,
                'autocomplete' => 'off',
//                'format' => array('before', 'label', 'between', 'input', 'after', 'error'),
//                'error' => array('attributes' => array('wrap' => 'span', 'class' => 'error_message')),
            )
        ));
        ?>
        <?php echo $this->Form->input('pick_date', array('type' => 'text', 'class' => 'pick_date')); ?>
        <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
        <?php echo $this->Form->input('email', array('type' => 'hidden')); ?>
        <?php echo $this->Form->input('company_name', array('type' => 'hidden')); ?>
        <?php echo $this->Form->input('name', array('type' => 'hidden')); ?>
        <?php echo $this->Form->input('phone_number', array('type' => 'hidden')); ?>
        <?php echo $this->Form->select('pick_time', array(), array('class' => 'pick_time', 'empty' => '', 'required' => false)); ?>
        <br>
        <p>会社名: <?php echo $company_name;?></p>
        <p>氏名: <?php echo $name;?></p>
        <p>電話番号: <?php echo $phone_number;?></p>
        <input type="submit" value="情報を送信する" class="btnSubmit">

<!--        <h2>資料請求ありがとうございます。</h2>
        <p class="mess text-center">
            担当者が内容確認の後、すぐに登録アドレスに詳細資料をお送りさせていただきます。<br>今しばらくお待ちくださいますよう宜しくお願い致します。
        </p>
        <p class="form-row text-center">
            <a href="/" class="btnSubmit blue">トップに戻る</a>
        </p>-->
        <?php echo $this->Form->end(); ?>
        <div class="info">
            <span>電話番号：</span><a href="tel:03-6712-7971">03-6805-0775</a> <br>
            <span>営業時間：</span>平日 9:00 ～ 18:00 <br>
            <span>メールアドレス：</span><a href="mailto:info@bell-face.com">info@bell-face.com</a> <br>
            <span>会社名：</span>ベルフェイス株式会社 <br>
            <span>所在地：</span>〒東京都渋谷区渋谷2丁目11番5号 クロスオフィス 渋谷メディオ4階
            <p class="logoImg"><img src="https://cdn.bell-face.com/assets/www/imgs/contact/logoFooter.png" alt=""></p>
        </div>
    </div>
</div>

<script>
    $(".pick_date").flatpickr({
        minDate: "today",
        disable: [
            function (date) {
                // return true to disable
                return (date.getDay() === 0 || date.getDay() === 6);

            }, <?php echo $disable; ?>
        ],
        onChange: function (selectedDates, dateStr, instance) {
            $(".pick_time").html('<option value=""></option>');
            // call ajax to get free time option
            $.ajax({
                url: '<?php echo $this->Html->url(array("controller" => "index", "action" => "ajax_get_free_time")); ?>',
                type: 'post',
                data: 'date=' + dateStr,
                dataType: "json",
                success: function (result) {
                    if (result.status == true) {
                        $.each(result.time_range, function (key, value) {
                            $(".pick_time").append("<option value='" + value + "'>" + value + "</option>");
                        });
                    } else {

                    }
                }
            });
        },
    });
</script>