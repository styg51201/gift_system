
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
            <a href="{tv_home}" >����</a>&nbsp;|&nbsp;
            <a href="{tv_list}" >�C��</a>&nbsp;|&nbsp;
            <!-- START BLOCK : tb_add -->
              <a href="{tv_add}"  >�s�W</a>&nbsp;|&nbsp;
            <!-- END BLOCK : tb_add -->

        </div>
      </td>
      <td>
      <!-- START BLOCK : tb_page -->
        <div align="right">
          <span>(����: {tv_f_page} / {tv_max_page} )</span>&nbsp;|&nbsp;
          <a href="{tv_up_page}">�W�@��</a>&nbsp;|&nbsp;
          <a href="{tv_dn_page}">�U�@��</a>&nbsp;|&nbsp;
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
        var max_size = 1024*500 /*500KB����*/
        var file_size =  $(this)[0].files[0]['size'] 
        if( file_size > max_size ){
          alert('�W�Ǫ��ɮפj�p�� '+ (file_size/1024).toFixed(2) +'KB�A�W�L500KB')
          $(this).val('')
        }
        
      })

      $('form[name="insert_form"]').submit(function(){

        var type = $('input[name="type"]').val();
        if( $.trim(type).length == 0  ){
          alert('�п�J���O!!');
          return false;
        }

        var company = $('input[name="company"]').val();
        if( $.trim(company).length == 0 ){
          alert('�п�J�t��!!');
          return false;
        }

        var name = $('input[name="name"]').val();
        if( $.trim(name).length == 0  ){
          alert('�п�J���~�W��!!');
          return false;
        }

        var reg = /^\d+$/;    
        var price = $('input[name="price"]').val();
        if( !reg.test(price) || $.trim(price).length == 0  ){
          alert('�����J���~!!');
          return false;
        }

        //s_num = '' ��ܷs�W�A�n�W���ɮ�
        if( $('[name="s_num"]').val() == '' && $('[name="file"]').val() == '' ){
          alert('�ФW�ǲ��~�Ϥ��ɮ�!!');
          return false;
        }

        var content = $('textarea[name="content"]').val();
        if( $.trim(content).length == 0  ){
          alert('�п�J���e��!!');
          return false;
        }

      })

    });

    

  </script>
  <form action="{tv_action}" method="POST" enctype="multipart/form-data" name="insert_form">
    <table class="data" width="100%">
    <tr>
      <th colspan=99 class="caption">{tv_msel_name}§�~</th>
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
          <input class="btn btn-m btn-ins" type="submit" value="�e�X">
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
        if( !confirm('�T�w�@�o�������?') ){
          return false;
        }
      })


    });
  </script>
  <div class="div" style="margin:5px 0px">
    �j�M���� ->  
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
      <th style="width: 3%">�Ǹ�</th>
      <th style="width: 10%">���O</th>
      <th style="width: 10%">�t��</th>
      <th style="width: 10%">���~�W��</th>
      <th style="width: 10%">���</th>
      <th style="width: 10%">���~��</th>
      <th style="width: 10%">���e��</th>
      <th style="width: 5%">�ק�</th>
      <th style="width: 5%">�@�o</th>
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
        <td class="txt_center" colspan="99">�ثe�|���������ơI</td>
      </tr>
    <!-- END BLOCK : tb_list_none -->
    </tbody>
  </table>
<!-- END BLOCK : tb_list -->





  





