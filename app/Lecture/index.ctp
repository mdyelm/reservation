<?php $this->assign('title', $title);?>
<div class="inner">
	<ol class="stepBar step3">
	  <li class="step current">
	  	<span class="number">STEP1</span>
	  	<span class="text">メールアドレスの入力</span>
	  </li>
	  <li class="step">
	  	<span class="number">STEP2</span>
	  	<span class="text">情報の入力</span>
	  </li>
	  <li class="step last">
	  	<span class="number">STEP3</span>
	  	<span class="text">送信完了</span>
	  </li>
	</ol>
	<div class="contact-inner">
		<h2>すぐにレクチャースタッフより連絡します</h2>
		<form action="<?=$this->webroot?>lecture/B02<?php if( isset($from) ){ echo '/?from=' . $from; } ?>" id="formB01" method="post">
		    <div class="form-row">
	    		<div class="mail-text">連絡先メールアドレスをこちらにご入力ください</div>
		        <input type="email" name="email" placeholder="例）info@bell-face.com">
		    </div>
		    <div class="form-row text-center">
		        <input type="submit" value="送信する" class="btnSubmit green">
		    </div>
		    <div class="form-row text-center link">
		        <a href="#" class="sPolicy">個人情報の取り扱いについて</a>
		    </div>
		
		    <div class="policy">
		        個人情報の取扱いについて<br><br>
		
		        個人情報の利用目的について<br>
		         当社は、ご提供いただいた個人情報を以下の目的のために利用し、それ以外の目的には利用いたしません。<br>
		        ① お客様管理ページの構築、利用者ID発行のため<br>
		        ② ご連絡やお問合せへの対応のため<br>
		        ③ メールマガジンを配信するため<br>
		        ④ 特定の個人を識別できない形にした統計・調査資料を作成し、それらに基づく営業活動を行うため<br>
		        ⑤ お客様へ関連する付帯サービスの提供のため<br>
		         当社は、次の各号のいずれかに該当すると認められる場合には、利用目的の達成に必要な範囲を超えて個人情報を利用することがあります。<br>
		        ① 法令に基づく場合<br>
		        ② 人の生命、身体又は財産の保護のために必要がある場合であって、本人の同意を得ることが困難であるとき<br>
		        ③ 公衆衛生の向上又は児童の健全な育成の推進のために特に必要がある場合であって、本人の同意を得ることが困難であるとき<br>
		        ④ 国の機関若しくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、本人の同意を得ることによって当該事務の遂行に支障を及ぼすおそれがあるとき<br><br>
		
		        個人情報の提供について<br>
		        当社は、本人の同意がある場合及び上記１の（2）の各号のいずれかに該当する場合を除き、個人情報を第三者に提供しません。<br><br>
		
		        個人情報の開示等について<br>
		        当社は、本人から開示対象個人情報について利用目的の通知、開示、内容の訂正・追加・削除、利用の停止、消去又は第三者への提供の停止の求めがあった場合には、遅滞なく対応します。<br><br>
		
		        個人情報を収集する法人の正式名称<br>
		        ベルフェイス株式会社<br>
		        〒150-0031　東京都渋谷区桜丘町3-2 第3野口ビル4階<br>
		        TEL：03-6712-7971　FAX：03-6701-1574<br>
		        Eメール：info@bell-face.com<br>
		        当社が取得した個人情報の委託<br>
		        当社は、利用目的の達成に必要な範囲内において、個人情報の取扱いの全部又は一部を、業務委託先に預託することがあります。その際、 <br>業務委託先としての適格性を十分審査するとともに、契約にあたって守秘義務に関する事項等を規定し、情報が適正に管理される体制作りを行います。<br>
		        個人情報の開示等及び苦情・相談の受付窓口について<br>
		        個人情報の開示等及び苦情・相談につきましては、当社サポート窓口までお申し出ください。<br>
		        個人情報を与えることの任意性<br>
		        個人情報の提出は任意です。ただし提出いただけない場合には本件の業務において支障をきたす場合があります。<br>
		        【２０１５年５月１日策定】<br>
		        【２０１６年６月１日改定】
		    </div>
		</form>
		<div class="info">
		    <span>電話番号：</span><a href="tel:03-6712-7971">03-6805-0775</a> <br>
		    <span>営業時間：</span>平日 9:00 ～ 18:00 <br>
		    <span>メールアドレス：</span><a href="mailto:info@bell-face.com">info@bell-face.com</a> <br>
		    <span>会社名：</span>ベルフェイス株式会社 <br>
		    <span>所在地：</span>〒東京都渋谷区渋谷2丁目11番5号 クロスオフィス 渋谷メディオ4階
		    <p class="logoImg"><img src="<?=$this->webroot?>img/contact/logoFooter.png" alt=""></p>
		</div>
	</div>
</div>
    <script type="text/javascript">
        $(document).ready(function() {
            var validator = $("#formB01").validate({
                rules: {
                    email: "required",
                    password: {
                        required: true,
                        minlength: 7
                    }
                },
                messages: {
                    email: "* メールアドレスが正しくありません",
                    password: {
                        required: "* 必須項目です",
                        minlength: "* 7文字以上にしてください"
                    }
                }
            });
        });
    </script>
