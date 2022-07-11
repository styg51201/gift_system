<!-- START BLOCK : tb_css&js -->
  <script type="text/javascript" src="http://eip.slc.com.tw/~sl/jquery/jquery-1.8.3.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){

      //ajax �ǰe����-���~�T��
      $(document).ajaxError(function (event, jqxhr, settings) {
        alert('ajax - ���~�N�X : '+ jqxhr.status + '�A�Ь���T�H��') 
      })

      //�s�W�@��
      $('#add_gasdoc').click(function(){
        $.ajax({
          tpye :'POST',
          url:'gasdoc_set.php',
          data:{
            ajax_add:'Y'
          },
          success:function(data){
            if(data){
              $('#gasdoc_table>tfoot').append(data)
            }else{
              alert("ajax ��^���ѡA�Ь���T�H��")
            }
          }
        })
      });

      //�s�W�@�����R��
      $('#gasdoc_table>tfoot').on("click",".add_del",function(){
        $(this).parents('tr').remove()
      });

      //�s�W��ƪ�ajax
      $("#add_submit").click(function(){
        let tr = $('.add_info')
        let arr = []
        for(let i=0;i<tr.length;i++){
          let block_type = $(tr[i]).find("[name='block_type']").val()
          let item_name = $(tr[i]).find("[name='item_name']").val()
          let field_type = $(tr[i]).find("[name='field_type']").val()
          let default_box = $(tr[i]).find("[name='default']").attr('checked') ? "Y" :"N"
          let memo = $(tr[i]).find("[name='memo']").val()

          
          //���ŭȮ� return
          if( !block_type || !item_name || !field_type ){
            alert("�нT���g���!!")
            return
          }
          arr.push({ block_type,item_name,field_type,default:default_box ,memo })

        }
        $.ajax({
          type:'POST',
          url:'gasdoc_set.php',
          data: { add_info:JSON.stringify(arr) },
          success:function(data){
            if(data){
              location.reload()
            }else{
              alert('�s�W����!')
            }
          }
        })
      });

      //�@�o��ƪ�ajax
      $(".td_delete").click(function(){
        let itemno = $(this).attr('data-itemno')
        let res = confirm(`�O�_�@�o ���إN�X�� [${ itemno }] ?`)
        if(res){
          $.ajax({
            type:'POST',
            url:'gasdoc_set.php',
            data:{  ajax_update:"delete",
                    ajax_data:itemno },
            success:function(data){
              if(data){
                location.reload()
              }else{
                alert('�R������!')
              }
            }
          })
        }
      })

      //�ק諸����
      $('#gasdoc_table>tbody>tr').dblclick(function(){

        let color = { A:'#ffdad7',B:'#ffefbe',C:'#e0ffe1' }
        let block_type = $(this).find('td').eq(0).text()
        let itemno = $(this).find('td').eq(1).text()
        let item_name = $(this).find('td').eq(2).text()
        let field_type = $(this).find('td').eq(3).text()
        let default_box = $(this).find("[name='default']").attr('checked') ? true : false
        let memo = $(this).find('td').eq(5).text()

        let type = $(this).attr('class')

        $('.set').find("#block_type").text(block_type)
        $('.set').find("#itemno").text(itemno)
        $('.set').find("[name='item_name']").val(item_name)
        $('.set').find("option[value='"+field_type+"']").attr('selected','selected')
        $('.set').find("[name='default']").attr('checked',default_box)
        $('.set').find("[name='memo']").val(memo)
        $('.flex').css('background-color',color[type])
        $('.set').toggle();
      })

      //�ק�e�X ajax
      $('#update_submit').click(function(){
        let itemno = $('.set').find("#itemno").text()
        let item_name = $('.set').find("[name='item_name']").val()
        let field_type = $('.set').find("[name='field_type']").val()
        let default_box = $('.set').find("[name='default']").attr('checked') ? "Y" :"N"
        let memo = $('.set').find("[name='memo']").val()
        memo = memo == '-' ? '' : memo
        

        if( !item_name || !field_type){
          alert('���ئW�٤εn���������o����')
          return
        }
        let obj = { itemno , item_name , field_type , default:default_box , memo } 

        $.ajax({
          type:"POST",
          url:"gasdoc_set.php",
          data:{  ajax_update:"update" ,
                  ajax_data:JSON.stringify(obj) },
          success:function(data){
            if(data){
                location.reload()
              }else{
                alert('�ק異��!')
              }
          }
        })
      })

      //�ק諸����-����
      $('.set').click(function(even){
        if( even.target == this ){
          $(this).toggle()
        }
      })


    });
  </script>

  <style type="text/css">
    #gasdoc_table{
      min-width:90%;
      margin: 10px auto;
      border-collapse:collapse;
      border:1px solid #616161;
    }
    #gasdoc_table>thead{
      background-color: #8DBDD8;
    }
    #gasdoc_table td,th{
      border:1px solid #616161;
      padding:5px 8px;
      text-align:center;
    }
    #gasdoc_table button,.td_delete{
      cursor:pointer;
    }
    #gasdoc_table .A {
      background-color: #ffdad7;
    }
    #gasdoc_table .B {
      background-color: #ffefbe;
    }
    #gasdoc_table .C {
      background-color: #e0ffe1;
    }
    #gasdoc_table tr:hover{
      background-color:#cccccc;
    }
    .set {
      display:none;
      position: fixed;
      top:0; left:0; right:0; bottom:0;
      background-color:#00000045;
    }
    .set .flex{
      max-width:40%;
      max-height:80%;
      position: absolute;
      overflow: auto;
      top:50%;
      left:50%;
      transform: translate(-50%, -50%);
      padding:20px;
      display: flex;
      flex-direction: column;
      background-color: #ffffff;
      border:1px solid #616161;
      border-radius:10px;
      box-shadow:2px 2px 5px #000000;
    }
    .set label {
      margin-bottom:15px;
    }
  </style>

<p style="color:red;margin:0">�Шϥ�Chrome�s�����}�ҡA����</p>
<!-- END BLOCK : tb_css&js -->



<!-- START BLOCK : tb_list -->
  <div class="set">
    <div class="flex">
      <label><b>�ȯ�ק� (���ئW��)�B(�n������)�B(�w�]���)</b></label>
      <label>���O : <span id="block_type"></span> </label>
      <label>���إN�X : <span id="itemno"></span> </label>
      <label>���ئW�� : <input type="text" name="item_name" value="" maxlength="100" size="40"/></label>
      <label>�n������ :

        <!-- START BLOCK : tb_edit_select -->
          <select name="{tv_ename}" id="">
            <!-- START BLOCK : tb_edit_option -->
            <option value="{tv_value}">{tv_show}</option>
            <!-- END BLOCK : tb_edit_option -->
          </select>
        <!-- END BLOCK : tb_edit_select -->

      </label>
      <label>
        �w�]��� : <input type="checkbox" name="default" value="" />
      </label>
      <label style="display:flex;align-items:center">
        �d�һ��� : <textarea  name="memo" rows="5" cols="40" style="margin-left:2px"></textarea>
      </label>
      <div>
        <button id="update_submit" style="margin-right:15px">�T�{</button>
        <button onclick="$('.set').toggle();">����</button>
      </div>
    </div>
  </div>


  <table id="gasdoc_table">
  <caption style="text-align:left"> 
    <h2>�o����ިt�ζ��س]�w��</h2> 
  </caption>
    <thead>
      <tr>
        <th>���O</th>
        <th>���إN�X</th>
        <th>���ئW��</th>
        <th>�n������</th>
        <th>�w�]���</th>
        <th>�d�һ���</th>
        <th>���ɤH</th>
        <th>���ɤ��</th>
        <th>�@�o</th>
      </tr>
    </thead>
    <tbody>
    <!-- START BLOCK : tb_gasdoc -->
      <tr class="{tv_type}">
        <td style="text-align:left">{tv_block_type}</td>
        <td>{tv_itemno}</td>
        <td style="text-align:left">{tv_item_name}</td>
        <td style="text-align:left">{tv_field_type}</td>
        <td><input type="checkbox" name='default' {tv_default} onclick="return false"></td>
        <td style="text-align:left">{tv_memo}</td>
        <td>{tv_b_name}</td>
        <td>{tv_b_date}</td>
        <td class="td_delete" data-itemno="{tv_itemno}">{tv_del_img}</td>
      </tr>

    <!-- END BLOCK : tb_gasdoc -->

    </tbody>
    <tfoot>
      <tr>
        <td colspan=99 style="text-align:left">
          <button id="add_gasdoc">[+]�s�W�@��</button>
          <button id="add_submit" style="margin-left:20px">�T�w�s�W</button>
          <span style="margin-left:20px">( �� �I��U�Y�i�ק鷺�e)</span>
        </td>
      </tr>
    </tfoot>
  </table>

<!-- END BLOCK : tb_list -->



<!-- START BLOCK : tb_add_tr -->
  <tr class="add_info">
    <!-- START BLOCK : tb_add_td -->
      <td>
        <!-- START BLOCK : tb_select -->
          <select name="{tv_ename}" id="">

            <!-- START BLOCK : tb_option -->
            <option value="{tv_value}">{tv_show}</option>
            <!-- END BLOCK : tb_option -->

          </select>
        <!-- END BLOCK : tb_select -->

        <!-- START BLOCK : tb_text -->
          <input type="text" name="{tv_ename}" value="{tv_value}">
        <!-- END BLOCK : tb_text -->

        <!-- START BLOCK : tb_textarea -->
          <textarea  name="{tv_ename}" rows="2" cols="30">{tv_value}</textarea>
        <!-- END BLOCK : tb_textarea -->

        <!-- START BLOCK : tb_checkbox -->
          <input type="checkbox" name="{tv_ename}" value="{tv_value}" {tv_checked}>
        <!-- END BLOCK : tb_checkbox -->

        <!-- START BLOCK : tb_p -->
          {tv_value}
        <!-- END BLOCK : tb_p -->
      </td>
    <!-- END BLOCK : tb_add_td -->
  </tr>
<!-- END BLOCK : tb_add_tr -->
