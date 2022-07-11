<!-- START BLOCK : tb_css&js -->
<script>
  function submit_chk(){
    console.log($('[type="checkbox"]:checked'))
    if( !$('[type="checkbox"]:checked').length ){
      alert("������ܤ֤Ŀ�@��!")
      return false
    }else{
      return true
    }
  }

  // excel�U��
  // ���otable�̪���,�নjson,�z�Lform���ǰe
  // ����ajax�O�]��,��ݥͦ���excel��,�n�^�Ǧ^��,�ɮ׭n�ন��L�榡,�AĲ�o�@��a�s���U��,�·�..
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
    let p_que = $('#p_que').text()  //����r��
    let obj = { arr_td , p_que } 
    $('[name="table"]').val(JSON.stringify(obj)) //�নjson�ǰe 

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
      // �̫�T�{ABC�϶��O�_����
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
<p style="color:red;margin:0">�Шϥ�Chrome�s�����}�ҡA����</p>

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
                          <td><label><input type="checkbox" name="itemno[]" value="all" />����</label></td>
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
                    <p style="color:red">�Ц� <a href="http://eip.slc.com.tw/~gas/gasdoc_set.php">�o����ިt�ζ��س]�w��</a>,�s�W���<p>
                  <!-- END BLOCK : tb_gas_checkbox_none -->

                </td>
            </tr>
          <!-- END BLOCK : tb_gas_tr -->
          <tr>
            <td colspan=99><center>
              <input type="submit" value="�d��">
            <center></td>
          </tr>
        </form>
      </table>
<!-- END BLOCK : tb_gas_que -->


<!-- START BLOCK : tb_gas_list -->
<table class="gas_list">
  <caption style="text-align:left"> 
    <h2>�o����ިt�γ���</h2> 
    <div style="display:flex;justify-content: space-between;">
      <p id="p_que">
        ���� �� ���O: <u>{tv_q_code}</u> ; �o�~: <u>{tv_q_oil}</u> ; �ۥ�/����: <u>{tv_q_rent}</u>
      </p>
      <form action="./rpt_gasdoc.php" method="POST" enctype="multipart/form-data" name="" onsubmit="return table_ajax()" style="text-align:right">
        <textarea name="table" style="display:none"></textarea>
        <input id="btn_excel" type="submit" value="�U��excel��">
      </form>
    </div>
  </caption>
    <thead>
      <tr>
        <th>��</th>
        <th>���O</th>
        <th>�o�~</th>
        <th>�ۥ�/����</th>
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
