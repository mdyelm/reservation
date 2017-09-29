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
        <h2>ベルフェイス体感のご予約ありがとうございます！</h2>
        <p class="mess text-center">
            <?php echo $pick_date_time; ?> になりましたら <?php echo $phone_number; ?> <?php echo $name; ?>様宛にお電話させていただきますので、ベルフェイスのデモンストレーションをご覧ください。
        </p>
        <div class="image-wrap cf">
            <div class="image-block">
                <div class="step">STEP1</div>
                <div class="image"><img src="https://cdn.bell-face.com/assets/www/imgs/form/step1.jpg" alt=""></div>
                <div class="text">当日は、担当と電話が繋がった状態で「接続ナンバー発行」をクリック</div>
            </div>
            <div class="image-block">
                <div class="step">STEP2</div>
                <div class="image"><img src="https://cdn.bell-face.com/assets/www/imgs/form/step2a.png" alt=""></div>
                <div class="text">ブラウザは開いたままで、ナンバーをお伝え下さい</div>
            </div>
            <div class="image-block">
                <div class="step">STEP3</div>
                <div class="image"><img src="https://cdn.bell-face.com/assets/www/imgs/form/step3.png" alt=""></div>
                <div class="text">接続がスタートします</div>
            </div>
        </div>
        <p class="form-row text-center">
            <a href="/" class="btnSubmit blue">トップに戻る</a>
        </p>
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
    </div>
</div>