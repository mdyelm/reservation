// JavaScript Document
$(function(){

/*******************
生年月日の自動生成
********************/
//今日のデータを変数 today に格納
var optionLoop, this_day, this_month, this_year, today;
today = new Date();
this_year = today.getFullYear();
this_month = today.getMonth() + 1;
this_day = today.getDate();

//ループ処理
optionLoop = function(start, end, id, this_day) {
  var i, opt;
  opt = null;
  for (i = start; i <= end ; i++) {
    if (i === this_day) {
      opt += "<option value='" + i + "' selected>" + i + "</option>";
    } else {
      opt += "<option value='" + i + "'>" + i + "</option>";
    }
  }
  return document.getElementById(id).innerHTML = opt;
};

// 関数設定
optionLoop(1950, this_year, 'b_year', this_year-30);
optionLoop(1, 12, 'b_month', this_month);
optionLoop(1, 31, 'b_day', this_day);
optionLoop(1970, this_year, 'j_year1_start', 2000);
optionLoop(1, 12, 'j_month1_start', 1);
optionLoop(1970, this_year, 'j_year1_end', this_year);
optionLoop(1, 12, 'j_month1_end', 1);

optionLoop(1970, this_year, 'j_year2_start', 2000);
optionLoop(1, 12, 'j_month2_start', 1);
optionLoop(1970, this_year, 'j_year2_end', this_year);
optionLoop(1, 12, 'j_month2_end', 1);
optionLoop(1970, this_year, 'j_year3_start', 2000);
optionLoop(1, 12, 'j_month3_start', 1);
optionLoop(1970, this_year, 'j_year3_end', this_year);
optionLoop(1, 12, 'j_month3_end', 1);
optionLoop(1970, this_year, 'j_year4_start', 2000);
optionLoop(1, 12, 'j_month4_start', 1);
optionLoop(1970, this_year, 'j_year4_end', this_year);
optionLoop(1, 12, 'j_month4_end', 1);
optionLoop(1970, this_year, 'j_year5_start', 2000);
optionLoop(1, 12, 'j_month5_start', 1);
optionLoop(1970, this_year, 'j_year5_end', this_year);
optionLoop(1, 12, 'j_month5_end', 1);

/*******************
インプットファイルへの画像反映
********************/
$(document).on('change','.file',function(){

   var view_box = $(this).parents('.view_box'),
       fileprop = $(this).prop('files')[0],
       find_img = $(this).next('img'),
       fileRdr = new FileReader();

   if(find_img.length){
      find_img.nextAll().remove();
      find_img.remove();
   }

  var img = '<img alt="" class="img_view"><br><a href="#" class="img_del link_danger"><i class="fa fa-trash"></i> 削除する</a>';
  view_box.append(img);

  fileRdr.onload = function() {
    view_box.find('img').attr('src', fileRdr.result);
    img_del(view_box);
  }
  fileRdr.readAsDataURL(fileprop);
});

function img_del(target)
{
   target.find("a.img_del").on('click',function(){

    if(window.confirm('削除してもよろしいですか？'))
    {
       $(this).parent().find('input[type=file]').val('');
       $(this).parent().find('.img_view, br').remove();
       $(this).remove();
    }

    return false;
  });
}

});