<!-- START BLOCK : tb_css&js -->
<script>
  function submit_chk(){
    console.log($('[type="checkbox"]:checked'))
    if( !$('[type="checkbox"]:checked').length ){
      alert("顯示欄位至少勾選一個!")
      return false
    }else{
      return true
    }
  }

  // excel下載
  // 取得table裡的值,轉成json,透過form表單傳送
  // 不用ajax是因為,後端生成的excel檔,要回傳回來,檔案要轉成其他格式,再觸發一個a連結下載,麻煩..
  function table_ajax(){
   
    let thead = $('.gas_list tr th')
    let arr_th = []
    $.each(thead,function(ind,val){
      arr_th.push( $(val).text() ) 
    })

    let tbody = $('.gas_list tbody tr')
    let arr_td = []
    $.each(tbody,function(ind,val){
      arr_td[ind]=[]
      let td = $(val).find('td')
      $.each(td,function(i,v){
        arr_td[ind][i] = $(v).text()
      })
    })

    arr_td.unshift(arr_th)
    let p_que = $('#p_que').text()  //條件字串
    let obj = { arr_td , p_que } 
    $('[name="table"]').val(JSON.stringify(obj)) //轉成json傳送 

    //console.log($('[name="table"]').val())
    return true
  }
  

  $(document).ready(function(){
    $('[type="checkbox"]').change(chk)

    function chk(){

      if( $(this).val() == 'all' ){

        let all_val = $(this).attr('checked')
        $('[type="checkbox"]').attr('checked',all_val)

      }else if ( $(this).val() == 'A'|| $(this).val() == 'B'|| $(this).val() == 'C' ){
        let block = $(this).val()
        let block_val = $(this).attr('checked')
        $('.'+ block + ' [type="checkbox"]').attr('checked',block_val)
      }else{
        
        let tr =  $(this).parents('.checkbox_tr')
        let block = tr.find('[type="checkbox"]').eq(0) 
        let total = tr.find('[type="checkbox"]').not(block).length
        let num = tr.find('[type="checkbox"]:checked').not(block).length
        let val = total == num ? 'checked' : ''
        tr.find('[type="checkbox"]').eq(0).attr('checked',val)
      }
      // 最後確認ABC區塊是否全選
      let blocks_val
      $.each( $('.checkbox_tr') ,function(ind,val){
        blocks_val = $(val).find('[type="checkbox"]').eq(0).attr('checked')
        if( !blocks_val ) return false
      })
      $('[value="all"]:checkbox').attr('checked',blocks_val)

    }


  });
</script>
<style>
  .gas_que{
    min-width:45%;
    margin:20px auto;
    border-collapse:collapse;
    border:1px solid #616161;
  }
  .gas_que td{
    border:1px solid #616161;
    padding:5px;
  }

  .checkbox_table td{
    border:none;
  }
  .checkbox_tr{
    display: block; 
    float: left;
    margin-right:15px;
  }
  .checkbox_tr>td{
    display: block; 
  }

  .checkbox_tr.A{
    background-color:#ffdad7;
  }
  .checkbox_tr.B{
    background-color:#ffefbe;
  }
  .checkbox_tr.C{
    background-color:#e0ffe1;
  }

  .gas_list{
    min-width:90%;
    margin:20px auto;
    border-collapse:collapse;
    border:1px solid #616161;
  }
  .gas_list thead{
    background-color:rgb(240, 240, 246);
  }
  .gas_list th,.gas_list td{
    border:1px solid #616161;
    padding:5px;
    text-align:center;
  }
  .gas_list tbody tr:nth-child(even){
    background-color:rgb(240, 240, 246);
  }
  .gas_list tbody tr:hover{
    background-color:#cccccc;
  }
  #btn_excel{
    background-color: #ffffff;
    border: 1px solid #7d90ff;
    color: #1d3fff;
    cursor: pointer;
  }
  #btn_excel:hover{
    color: #253bb5;
  }
  @media print {
    #btn_excel{
      display:none;
    }
  }
</style>
<p style="color:red;margin:0">請使用Chrome瀏覽器開啟，謝謝</p>

<!-- END BLOCK : tb_css&js -->



<!-- START BLOCK : tb_gas_que -->
      <table class="gas_que">
        <form id="" action="{tv_action}" method="POST" enctype="multipart/form-data" name="" onsubmit="return submit_chk()">
          <tr><td colspan=99><center>{tv_title}<center></td></tr>
          <!-- START BLOCK : tb_gas_tr -->
            <tr>
              <td style="text-align:right">{tv_cname} : </td>
                <td>
                  
                  <!-- START BLOCK : tb_gas_select -->
                    <select name="{tv_ename}" id="">
                      <!-- START BLOCK : tb_gas_option -->
                        <option  value="{tv_value}" {tv_selected}>{tv_show}</option>
                      <!-- END BLOCK : tb_gas_option -->
                    </select>
                  <!-- END BLOCK : tb_gas_select -->


                  <!-- START BLOCK : tb_gas_checkbox -->
                    <table class="checkbox_table">
                      <tbody>
                        <tr>
                          <td><label><input type="checkbox" name="itemno[]" value="all" />全部</label></td>
                        </tr>
                        <!-- START BLOCK : tb_gas_checkbox_tr -->
                          <tr class="checkbox_tr {tv_class}">
                            <!-- START BLOCK : tb_gas_checkbox_td -->
                              <td>
                                <label><input type="checkbox" name="{tv_ename}[]" value="{tv_value}" />{tv_cname}</label>
                              </td>
                            <!-- END BLOCK : tb_gas_checkbox_td -->
                            
                          </tr>
                        <!-- END BLOCK : tb_gas_checkbox_tr -->
                      </tbody>
                    </table>
                  <!-- END BLOCK : tb_gas_checkbox -->

                  <!-- START BLOCK : tb_gas_checkbox_none -->
                    <p style="color:red">請至 <a href="http://eip.slc.com.tw/~gas/gasdoc_set.php">油站文管系統項目設定檔</a>,新增欄位<p>
                  <!-- END BLOCK : tb_gas_checkbox_none -->

                </td>
            </tr>
          <!-- END BLOCK : tb_gas_tr -->
          <tr>
            <td colspan=99><center>
              <input type="submit" value="查詢">
            <center></td>
          </tr>
        </form>
      </table>
<!-- END BLOCK : tb_gas_que -->


<!-- START BLOCK : tb_gas_list -->
<table class="gas_list">
  <caption style="text-align:left"> 
    <h2>油站文管系統報表</h2> 
    <div style="display:flex;justify-content: space-between;">
      <p id="p_que">
        條件 → 單位別: <u>{tv_q_code}</u> ; 油品: <u>{tv_q_oil}</u> ; 自用/租賃: <u>{tv_q_rent}</u>
      </p>
      <form action="./rpt_gasdoc.php" method="POST" enctype="multipart/form-data" name="" onsubmit="return table_ajax()" style="text-align:right">
        <textarea name="table" style="display:none"></textarea>
        <input id="btn_excel" type="submit" value="下載excel檔">
      </form>
    </div>
  </caption>
    <thead>
      <tr>
        <th>序</th>
        <th>單位別</th>
        <th>油品</th>
        <th>自用/租賃</th>
        <!-- START BLOCK : tb_gas_list_th -->
          <th>{tv_th}</th>    
        <!-- END BLOCK : tb_gas_list_th -->
        
      </tr>
    </thead>
    <tbody>
    <!-- START BLOCK : tb_gas_list_tr -->
      <tr>
        <td>{tv_num}</td>
        <td>{tv_sname}</td>
        <td>{tv_oil}</td>
        <td>{tv_rent}</td>
        <!-- END BLOCK : tb_gas_list_td -->
          <td>{tv_td}</td>
        <!-- END BLOCK : tb_gas_list_td -->
      </tr>

    <!-- END BLOCK : tb_gas_list_tr -->

    </tbody>
  </table>

<!-- END BLOCK : tb_gas_list -->
