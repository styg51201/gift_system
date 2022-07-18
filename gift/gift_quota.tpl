
<!-- START IGNORE -->
  <link rel="stylesheet" href="gift.css" type="text/css">
  
  <style>
    .list.main_table tbody tr:hover{
      background-color: #ffe4bc;
    }
  </style>

  <script>
    $(document).ready(function(){
      
      //tab����
      $('.tabs>li').on('click', function(){
        var $this = $(this),
            target = $this.data('target');
        $this.addClass('active').siblings().removeClass('active');
        $(target).addClass('active').siblings().removeClass('active');
      });

      //�s�W���
      $('.add_num').on('click',function(){
        var new_num = $.trim($('div.active input[name="base"]').val())
        var new_quota = $.trim($('div.active input[name="quota"]').val())
        var reg = /^[1-9]+\d*$/;

        if( !reg.test(new_num) || !reg.test(new_quota) ){
          alert('��J���~�A�ж�J�����!!')
          return
        }
        
        var arr = $('div.active td.base_num')
        var tr_html = '<tr>'+
                        '<td class="base_num">'+new_num+'</td>'+
                        '<td>'+new_quota+'</td>'+
                        '<td class="del_btn pointer"><img src="../picture/�@�o.png" border="0" alt="�@�o����" title="�@�o����"></td>'+
                      '</tr>'
        var tr

        arr.each(function(){

          if( +new_num < +$(this).text() ){
          tr = $(this).parent('tr')
            return false //=break
          }
        })

        if(tr){
          tr.before(tr_html)
        }else{
          $('div.active tbody>tr.tr_max').before(tr_html)
          $('div.active tbody>tr.tr_max>td:eq(0)').html('>'+new_num)
        }
        $('input[name="base"]').val('')
        $('input[name="quota"]').val('')
        
      })

      //�e�X�x�s
      $('.submit').click(function(){
        var arr = $('div.active td.base_num').parent('tr'),
            type = $('div.active table').data('type'),
            version = $('div.active table').data('version'),
            max_quota_num,
            form = $("<form method='post' action='gift_quota.php?msel=11'></form>"),
            base = [],
            quota = []

        //�ݬO�_���ק�̤j�ȡA�ӧP�_�n��input���� �٬O text ������
        if( $('div.active tbody>tr.tr_max .upd_btn').hasClass('active') ){
          max_quota_num = $('div.active tbody>tr.tr_max input[name="max_quota"]').val();
        }else{
          max_quota_num = $('div.active tbody>tr.tr_max>td:eq(1)').text();
        }

        var reg = /^[1-9]+\d*$/;
        if( !reg.test(max_quota_num) ){
          alert('�o���B�ת��̤j�ȡA��J���~�A�ж�J�����!!');
          $('div.active tbody>tr.tr_max input[name="max_quota"]').focus()
          return;
        }
    
        arr.each(function(){
          base_num = $(this).children('td').eq(0).text()
          quota_num = $(this).children('td').eq(1).text()

          //�[�J�U�Ӱ�Ƹ��B��
          form.append("<input type='hidden' name='base_num[]' value='"+base_num+"'>")
          form.append("<input type='hidden' name='quota[]' value='"+quota_num+"'>")
        })

        //�[�JMAX����
        form.append("<input type='hidden' name='base_num[]' value='MAX'>")
        form.append("<input type='hidden' name='quota[]' value='"+max_quota_num+"'>")

        //�[�Jtype��version
        form.append("<input type='hidden' name='type' value='"+type+"'>")
        form.append("<input type='hidden' name='version' value='"+version+"'>")

        $('#main_container').append(form)
        form.submit();
        
      })

      //�R�����
      $('#main_container').on('click','td.del_btn',function(){
        $(this).parents('tr').remove()
        var max_base = $('div.active tbody>tr.tr_max').prev('tr').find('td').eq(0).text()
        if(!max_base) max_base = 1
        $('div.active tbody>tr.tr_max>td:eq(0)').html('>'+max_base)
      })

      //�ק�̤j�B��
      $('#main_container').on('click','td.upd_btn',function(e){
        
        if( !$(this).hasClass('active') ){
          $(this).addClass('active')
          var td_quota = $(this).prev('td')
          td_quota.html('<input type="number" name="max_quota" min="1" value="'+td_quota.text()+'" style="width:80px">')
          $('div.active input[name="max_quota"]').focus()
        }
        
      })


    });
  </script>
<!-- END IGNORE -->


<!-- START BLOCK : tb_link -->
  <table width="100%" border="0" cellpadding="1" cellspacing="1" class="font">
    <tr>
      <td>
        <div align="left">
            <a href="{tv_home}" >����</a>&nbsp;|&nbsp;
        </div>
      </td>
    </tr>
  </table>
<!-- END BLOCK : tb_link -->

<div class="alert">
  <p class="red" style="font-size:20px;font-weight:bold">{tv_alert}</p>
  <p>{tv_sql_error}</p>
</div>


<!-- START BLOCK : tb_list -->

  <main id="main_container">
    
    <div class="tabs_row">
      <ul class="tabs float-left">
        <li data-target="#content0" class="active">�`��</li>
      <!-- START BLOCK : tb_list_li -->
        <li data-target="#content{tv_num}">{tv_name}</li>
      <!-- END BLOCK : tb_list_li -->
      </ul>
    </div>
    <section class="card">
      <div class="tab_content active" id="content0">
        <h2 class="title">
          �`��@��
          <span class="span">( �ȭ��s���A�Y�n�ק�ЦܦU�ӭ��Ҥ� )</span>
        </h2>
        <!-- START BLOCK : tb_main_table -->
          
          <table class="list left main_table" min-width="50%">
            <thead class="border">
              <tr>
                <th rowspan=2>��� (<=)</th>
                <th colspan={tv_colspan}>�o���B�� (��)</th>
              </tr>
              <tr>
              <!-- START BLOCK : tb_main_th -->
                <th>{tv_name}</th>
              <!-- END BLOCK : tb_main_th -->
              </tr>
            </thead>
            <tbody>
              <!-- START BLOCK : tb_main_tr -->
              <tr>
              <!-- START BLOCK : tb_main_td -->
                <td class="{tv_class}">{tv_value}</td>
              <!-- END BLOCK : tb_main_td -->
              </tr>
              <!-- END BLOCK : tb_main_tr -->
            </tbody>
          </table>
        <!-- END BLOCK : tb_main_table -->

        <!-- START BLOCK : tb_list_none -->
          <p style="margin:30px 50px">�|�L���</p>
        <!-- END BLOCK : tb_list_none -->
      </div>
      <!-- START BLOCK : tb_list_card -->
        <div class="tab_content" id="content{tv_num}">
          <h2 class="title">
            {tv_name}
            <span class="span">( ���}���ҫe�A�Y���ܰʡA�аO�o�x�s )</span>
            <button class="btn btn-ins btn-l submit">�T�w�x�s</button>
          </h2>
          <table class="list left" min-width="30%" data-version={tv_version} data-type={tv_type}>
            <thead class="border">
              <tr>
                <th>��� (<=) </th>
                <th>�o���B�� (��) </th>
                <th>�R��</th>
              </tr>
            </thead>
            <tbody>
            <!-- START BLOCK : tb_list_tr -->
              <tr>
                <td class="base_num">{tv_base}</td>
                <td>{tv_quota}</td>
                <td class="pointer del_btn">{tv_del}</td>
              </tr>
            <!-- END BLOCK : tb_list_tr -->

            <!-- START BLOCK : tb_list_tr_max -->
              <tr class='tr_max'>
                <td>{tv_base}</td>
                <td>{tv_quota}</td>
                <td class="pointer upd_btn">{tv_upd}</td>
              </tr>
            <!-- END BLOCK : tb_list_tr_max -->
            </tbody>
          </table>
          <p>�� �� �u > �v �Ÿ������@��A�N��o���B�ת��̤j�ȡA��Ƥ��i�R���A��Ʒ|�ۦ��ܧ�A�ȥi�ק�o���B�סC</p>
          <!-- START BLOCK : tb_list_add -->
            <div style="margin:30px">
              <label style="margin-right:15px">��� : 
                <input type="number" name="base" min='1' style="width:60px">
              </label>
              <label style="margin-right:15px">�B�� : 
                <input type="number" name="quota" min='1' style="width:60px">
              </label>
              <button class="add_num btn btn-modify">�s�W</button>
            </div>
          <!-- END BLOCK : tb_list_add -->
        </div>
      <!-- END BLOCK : tb_list_card -->

     

      
    </section>

  </main>
  
<!-- END BLOCK : tb_list -->





  





