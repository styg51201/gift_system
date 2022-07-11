
<!-- START BLOCK : tb_css&js -->
  <script>
    $(document).ready(function(){

      //確定儲存
      $("#gas_submit").click(function(){
        if( !$('[name="rent_type"]').val() ){
          alert('請選擇 自用/租賃 的項目!')
          return
        }

        let file = $('[type="file"]')
        let file_sizes = 0
        for(let i = 0;i<file.length;i++){
          try{
            file_sizes += file[i].files[0].size
          }
          catch{
            // 無上傳檔案 則忽視
          }
        }
        if( (file_sizes/1024/1024) >7.8 ){
           alert('上傳檔案總大小,不得超過7.8M')
          return
        }

        let form_data = new FormData(document.gas_form)
        let code = new URL(location.href).searchParams.get('code')

        form_data.append('ajax_upfile', 'Y')
        form_data.append('code', code)


        $.ajax({
                type: 'POST',
                url: 'gasdoc.php',
                cache: false,
                contentType: `multipart/form-data;boundary = ${new Date()}${getTime()}`, 
                processData: false,
                data: form_data ,
                success:function(data){
                  alert(data)
                  location.reload()
                  //console.log(data) 
                }
            })
      })

      //新增項目
      $('.add_submit').click(function(){
        let itemno = $(this).parent('td').find('select').val()
        if( !itemno ) return
        $.ajax({
          type:"POST",
          url:"gasdoc.php",
          data:{ ajax_add:"Y" , itemno:itemno },
          success:function(data){
            if(data){
              location.reload()
            }else{
              alert('新增失敗')
            }
          }
        })
      })

      //歷史視窗-點擊
      $('.hist').click(function(){
        let itemno = $(this).attr('data-itemno')
        let item_name = $(this).text()
        let code = new URL(location.href).searchParams.get('code')

        $.ajax({
          type:"POST",
          url:"gasdoc.php",
          data:{ ajax_hist:'Y' , itemno , code , item_name},
          success:function(data){
            $('.box').html('') //先清空
            $('.box').append(data) 
            $('.hist_box').toggle();
            
          }
        })

      })
       
     //歷史視窗-關閉
      $('.hist_box').click(function(even){
        if( even.target == this ){
          $(this).toggle()
        }
      })

    });
  </script>

  <style type="text/css">
    .body{
      display:flex;
      width:90%;
      margin: 20px auto;
      justify-content: center;
    }
    .gas_table{
      margin:0 15px;
    }
    .gas_table th{
      background-color:#c7c7c7;
    }
    .gas_table .subtitle{
      background-color:#8fd0d8;
    }
    .gas_table .class{
      display: block; 
      float: left;
    }
    .gas_table tr>td{
      text-align:center;
      display: block; 
      padding: 10px;
      border: 1px solid #616161;
      margin: 0 -1px -1px 0;
    }
    .gas_info{
      width:90%;
      margin:20px auto;
      border-collapse:collapse;
      border:1px solid #616161;
    }
    .gas_info td,.gas_info th{
      border:1px solid #616161;
      padding:3px 5px;
    }
    .gas_info .thead.A{
      background-color: #ffdad7;
    }
    .gas_info .thead.B{
      background-color: #ffefbe;
    }
    .gas_info .thead.C{
      background-color: #e0ffe1;
    }
    .gas_info .hist{
      cursor:pointer;
      text-decoration:underline;
      color:#0027ff;
    }
    .add_submit{
      margin-left:10px;
      background-color:#ffffff;
      border:1px solid #ff7a50;
      color:#ff4400;
      cursor:pointer;

    }
    .gas_info .hist:hover{
      font-size:14px;
    }

    .hist_box {
      display:none;
      position: fixed;
      top:0; left:0; right:0; bottom:0;
      background-color:#00000045;
    }
    .hist_box .box{
      position: absolute;
      max-height:80%;
      max-width:80%;
      overflow:auto;
      top:50%;
      left:50%;
      transform: translate(-50%, -50%);
      padding:20px;
      background-color: #ffffff;
      border:1px solid #616161;
      border-radius:10px;
      box-shadow:2px 2px 5px #000000;
    }
    .table_hist{
      border-collapse:collapse;
      border:1px solid #616161;
    }
    .table_hist td,.table_hist th{
      border:1px solid #616161;
      padding:3px 5px;
    }
    .table_hist .thead{
      background-color:#c7c7c7;
    }
    .title_hist{
      margin: 0 0 10px;
      display:flex;
      justify-content:space-between;
    }
    .title_hist h3{
      margin:0;
    }
    .title_hist img{
      padding:10px;
      cursor:pointer;
      position:absolute;
      top:0px;
      right:0px;
    }
    
  </style>
  <p style="color:red;margin:0">請使用Chrome瀏覽器開啟，謝謝</p>

<!-- END BLOCK : tb_css&js -->




<!-- START BLOCK : tb_gas_list -->
  <a target="_blank" style="margin-top:10px;display:inline-block" href="http://eip.slc.com.tw/~gas/gasdoc_set.php">油站文管系統項目設定檔</a>
  <div class="body">
  <!-- START BLOCK : tb_gas_table -->
      <table class="gas_table">
        <tr><th>{tv_title}</th></tr>
        <!-- START BLOCK : tb_gas_tr -->
          <tr class="class">
            <td class="subtitle">{tv_subtitle}</td>
            <!-- START BLOCK : tb_gas_td -->
              <td>
                <a href="{tv_href}">{tv_gas_station}</a>
              </td>
            <!-- END BLOCK : tb_gas_td -->
          </tr>
        <!-- END BLOCK : tb_gas_tr -->
      </table>
  <!-- END BLOCK : tb_gas_table -->
  </div>
<!-- END BLOCK : tb_gas_list -->



<!-- START BLOCK : tb_info -->

<div class="hist_box">
    <div class="box">
     
    </div>
</div>
  <table class="gas_info">
      <form id="gas_form" action="{tv_action}" method="POST" enctype="multipart/form-data" name="gas_form" onsubmit="return false">
        <tbody>
          <!-- START BLOCK : tb_info_block -->
            <tr class="thead {tv_block_type}">
              <th colspan=2 style="text-align:left">
                {tv_title}
                <span style="font-weight:normal;color:red">(上傳檔名不可有空格)</span>
              </th>
              <th>範例說明</th>
            </tr>
              <!-- START BLOCK : tb_info_tr -->
                <tr>
                  <td class="{tv_hist}" data-itemno="{tv_itemno}" style="text-align:right;width:20%">{tv_key}{tv_cname} : </td>

                  <td style="width:43%">

                    <!-- START BLOCK : tb_info_p -->
                      {tv_p}
                    <!-- END BLOCK : tb_info_p -->

                    <!-- START BLOCK : tb_info_text -->
                      <input type="text" name="{tv_ename}" value="{tv_value}">
                    <!-- END BLOCK : tb_info_text -->

                    <!-- START BLOCK : tb_info_textarea -->
                      <textarea  name="{tv_ename}" rows="3" cols="50">{tv_value}</textarea>
                    <!-- END BLOCK : tb_info_textarea -->

                    <!-- START BLOCK : tb_info_select -->
                      <select name="{tv_ename}" id="">

                        <!-- START BLOCK : tb_info_option -->
                          <option  value="{tv_value}" {tv_selected}>{tv_show}</option>
                        <!-- END BLOCK : tb_info_option -->

                      </select>
                    <!-- END BLOCK : tb_info_select -->

                    <!-- START BLOCK : tb_info_file -->
                      <p style="margin:5px 0"><a href="{tv_href}" target="_blank">{tv_value}</a></p>
                      <input name="{tv_ename}" type="file">
                    <!-- END BLOCK : tb_info_file -->

                    <!-- START BLOCK : tb_info_date -->
                      <script type="text/javascript">
                        $(document).ready(function(){$('#{tv_ename}').calendar({dateFormat: 'YMD'});});
                        </script>

                        <input name="{tv_ename}" type="text" value="{tv_value}" size="8" maxlength="8"  id="{tv_ename}" style="background-color:#cddded">
                    <!-- END BLOCK : tb_info_date -->
                        
                    <!-- START BLOCK : tb_info_dt2dt -->
                      <script type="text/javascript">
                        $(document).ready(function(){$('#{tv_ename}_s').calendar({dateFormat: 'YMD'});});
                      </script>

                      <input name="{tv_ename}_s" type="text" value="{tv_value_s}" size="8" maxlength="8"  id="{tv_ename}_s" style="background-color:#cddded">

                      <font color="#523A0B">～</font>

                      <script type="text/javascript">
                        $(document).ready(function(){$('#{tv_ename}_e').calendar({dateFormat: 'YMD'});});
                      </script>

                      <input name="{tv_ename}_e" type="text" value="{tv_value_e}" size="8" maxlength="8"  id="{tv_ename}_e" style="background-color:#cddded">
                    <!-- END BLOCK : tb_info_dt2dt -->

                  </td>

                  <td>{tv_memo1}</td>
                </tr>
              <!-- END BLOCK : tb_info_tr -->
              <tr>
                <td style="text-align:right;width:20%;color:red">[+] 新增項目 : </td>
                <td colspan="2" style="text-align:left">
                  <!-- START BLOCK : tb_item_select -->
                      <select name="{tv_ename}" style="width:180px">
                        <option  value="">-----請選擇-----</option>
                        <!-- START BLOCK : tb_item_option -->
                          <option  value="{tv_value}" {tv_selected}>{tv_show}</option>
                        <!-- END BLOCK : tb_item_option -->

                      </select>
                    <!-- END BLOCK : tb_item_select -->
                  <button class="add_submit">新增</button>
                </td>
              </tr>
        <!-- END BLOCK : tb_info_block -->
      </tbody>
      <tfoot>
        <td colspan=99 style="border:none"> <input id="gas_submit" type="submit" value="確定儲存"> </td>
      </tfoot>
    </form>
  </table>
<!-- END BLOCK : tb_info -->


<!-- START BLOCK : tb_hist -->
  <div class="title_hist">
    <h3>歷史文件</h3>
    <img src="/~sl/img/del.png" onclick="$('.hist_box').toggle();">
  </div>
  <table class="table_hist">
    <thead>
      <tr>
        <th colspan="99"><h3 style="margin:0">{tv_item_name}</h3></th>
      </tr>
      <tr class="thead">
        <th>序</th>
        <th>名稱</th>
        <th>上傳日期</th>
        <th>上傳人員</th>
      </tr>
    </thead>
    <tbody>
      <!-- START BLOCK : tb_hist_tr -->
        <tr>
          <td style="text-align:center">{tv_num}</td>

          <!-- START BLOCK : tb_hist_a -->
            <td><a href="{tv_href}" target="_blank">{tv_gd_1}</a></td>
          <!-- START BLOCK : tb_hist_a -->

          <!-- START BLOCK : tb_hist_p -->
            <td>{tv_gd_1}</td>
          <!-- START BLOCK : tb_hist_p -->

          <td>{tv_b_date}</td>
          <td style="text-align:center">{tv_b_empno}</td>
        </tr>
      <!-- END BLOCK : tb_hist_tr -->
    </tbody>
  </table>
<!-- END BLOCK : tb_hist -->

