
<!-- START IGNORE -->
  <link rel="stylesheet" href="gift.css" type="text/css">
  <style>
    .list_img{
      width:150px;
      height:150px;
      object-fit:contain;
    }
  </style>
<!-- END IGNORE -->

<!-- START BLOCK : tb_link -->
  <table width="100%" border="0" cellpadding="1" cellspacing="1" class="font">
    <tr>
      <td>
        <div align="left">
            <a href="{tv_home}" >首頁</a>&nbsp;|&nbsp;
            <a href="{tv_list}" >列表頁</a>&nbsp;|&nbsp;
            <!-- START BLOCK : tb_add -->
              <a href="{tv_add}"  >新增</a>&nbsp;|&nbsp;
            <!-- END BLOCK : tb_add -->

        </div>
      </td>
      <td>
      <!-- START BLOCK : tb_page -->
        <div align="right">
          <span>(頁次: {tv_f_page} / {tv_max_page} )</span>&nbsp;|&nbsp;
          <a href="{tv_up_page}">上一頁</a>&nbsp;|&nbsp;
          <a href="{tv_dn_page}">下一頁</a>&nbsp;|&nbsp;
        </div>
      <!-- END BLOCK : tb_page -->
      </td>
    </tr>
  </table>
<!-- END BLOCK : tb_link -->

<div class="alert">
  <p class="red" style="font-size:20px;font-weight:bold">{tv_alert}</p>
  <p>{tv_sql_error}</p>
</div>


<!-- START BLOCK : tb_insert -->
  <script>
    $(document).ready(function(){

      $('[name="file"]').change(function(){
        var max_size = 1024*500 /*500KB限制*/
        var file_size =  $(this)[0].files[0]['size'] 
        if( file_size > max_size ){
          alert('上傳的檔案大小為 '+ (file_size/1024).toFixed(2) +'KB，超過500KB')
          $(this).val('')
        }
        
      })

      $('form[name="insert_form"]').submit(function(){

        var type = $('input[name="type"]').val();
        if( $.trim(type).length == 0  ){
          alert('請輸入類別!!');
          return false;
        }

        var company = $('input[name="company"]').val();
        if( $.trim(company).length == 0 ){
          alert('請輸入廠商!!');
          return false;
        }

        var name = $('input[name="name"]').val();
        if( $.trim(name).length == 0  ){
          alert('請輸入產品名稱!!');
          return false;
        }

        var reg = /^\d+$/;    
        var price = $('input[name="price"]').val();
        if( !reg.test(price) || $.trim(price).length == 0  ){
          alert('價格輸入錯誤!!');
          return false;
        }

        //s_num = '' 表示新增，要上傳檔案
        if( $('[name="s_num"]').val() == '' && $('[name="file"]').val() == '' ){
          alert('請上傳產品圖片檔案!!');
          return false;
        }

        var content = $('textarea[name="content"]').val();
        if( $.trim(content).length == 0  ){
          alert('請輸入內容物!!');
          return false;
        }

      })

    });

    

  </script>
  <form action="{tv_action}" method="POST" enctype="multipart/form-data" name="insert_form">
    <table class="data" width="100%">
    <tr>
      <th colspan=99 class="caption">{tv_msel_name}禮品</th>
    </tr>
      <tbody>
        <!-- START BLOCK : tb_ins_tr -->
          <tr style="{tv_style}">

            <th class="{tv_class}" style="text-align:right;width:25%">{tv_pkey}{tv_cname} : </th>

            <td>

              <!-- START BLOCK : tb_ins_p -->
                {tv_value}
              <!-- END BLOCK : tb_ins_p -->

              <!-- START BLOCK : tb_ins_hidden -->
                <input type="hidden" name="{tv_ename}" value="{tv_value}">
              <!-- END BLOCK : tb_ins_hidden -->

              <!-- START BLOCK : tb_ins_text -->
                <input type="text" name="{tv_ename}" value="{tv_value}" size="{tv_size}" maxlength="{tv_maxlength}" >
              <!-- END BLOCK : tb_ins_text -->

              <!-- START BLOCK : tb_ins_textarea -->
                <textarea  name="{tv_ename}" rows="5" cols="50">{tv_value}</textarea>
              <!-- END BLOCK : tb_ins_textarea -->

              <!-- START BLOCK : tb_ins_select -->
                <select name="{tv_ename}" id="">

                  <!-- START BLOCK : tb_ins_option -->
                    <option  value="{tv_value}" {tv_selected}>{tv_show}</option>
                  <!-- END BLOCK : tb_ins_option -->

                </select>
              <!-- END BLOCK : tb_ins_select -->

              <!-- START BLOCK : tb_ins_file -->
                {tv_img}<br>
                <img id="tempimg" dynsrc="" src="" style="display:none" /> 
                <input name="{tv_ename}" type="file">
              <!-- END BLOCK : tb_ins_file -->
              
                  
              <span class="memo">{tv_memo}</span>
            </td>
          </tr>
        <!-- END BLOCK : tb_ins_tr -->

      </tbody>
      <tr><td></td>
        <td colspan=99>
          <input class="btn btn-m btn-ins" type="submit" value="送出">
        </td>
      </tr>
    </table>
  </form>

<!-- END BLOCK : tb_insert -->


<!-- START BLOCK : tb_list -->
  <script>
    $(document).ready(function(){

      $('select[name="year"],select[name="festival"]').change(function(){
        var url = '?'
        url += 'msel=4'
        url += '&f_year='+$('select[name="year"]').val()
        url += '&f_festival='+$('select[name="festival"]').val()
        document.location.href = url
      })

      $('.delete').click(function(){
        if( !confirm('確定作廢此筆資料?') ){
          return false;
        }
      })


    });
  </script>
  <div class="div" style="margin:5px 0px">
    搜尋條件 ->  
    <!-- START BLOCK : tb_select -->
      <select name="{tv_name}" >
        <!-- START BLOCK : tb_option -->
          <option  value="{tv_value}" {tv_selected}>{tv_show}</option>
        <!-- END BLOCK : tb_option -->
      </select> {tv_text}
    <!-- END BLOCK : tb_select -->
  </div>

  <table class="list" width="100%">
    <thead class="border">
      <th style="width: 3%">序號</th>
      <th style="width: 10%">類別</th>
      <th style="width: 10%">廠商</th>
      <th style="width: 10%">產品名稱</th>
      <th style="width: 10%">售價</th>
      <th style="width: 10%">產品圖</th>
      <th style="width: 10%">內容物</th>
      <th style="width: 5%">修改</th>
      <th style="width: 5%">作廢</th>
    </thead>
    <tbody>
    <!-- START BLOCK : tb_list_tr -->
      <tr>
        <td>{tv_td00}</td>
        <td>{tv_td01}</td>
        <td>{tv_td02}</td>
        <td>{tv_td03}</td>
        <td>{tv_td04}</td>
        <td>{tv_td05}</td>
        <td style="text-align:left">{tv_td06}</td>
        <td>{tv_td07}</td>
        <td class="delete">{tv_td08}</td>
      </tr>
    <!-- END BLOCK : tb_list_tr -->
    <!-- START BLOCK : tb_list_none -->
      <tr>
        <td class="txt_center" colspan="99">目前尚未有任何資料！</td>
      </tr>
    <!-- END BLOCK : tb_list_none -->
    </tbody>
  </table>
<!-- END BLOCK : tb_list -->





  





