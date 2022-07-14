
<!-- START IGNORE -->
  <link rel="stylesheet" href="gift.css" type="text/css">
  <script>
    $(document).ready(function(){

      var caption_top,
          caption_h,
          thead_top,
          thead_h,
          tfoot_top,
          tfoot_h

      $('#excel').click(function(){
        $('form[name="my_form"]').append('<input type="hidden" name="excel" value="Y">');
        $('form[name="my_form"]').submit();
        $('input[name="excel"]').remove()
      })

      $('.table_tab>li').click(function(){

        var id = $(this).attr('data-id')
        $(this).addClass('active').siblings().removeClass('active')
        $('#'+id).addClass('active').siblings().removeClass('active')

        //���s���o�ثeactive����T
        caption_top = $('.guest_table.active>caption').offset().top
        caption_h = $('.guest_table.active>caption').height()-1
        thead_top = $('.guest_table.active>.o_thead').offset().top
        thead_h = $('.guest_table.active>.o_thead').height()
        tfoot_top = $('.guest_table.active>.o_tfoot').offset().top
        tfoot_h = $('.guest_table.active>.o_tfoot').height()
        $(window).scroll()
        
      })

      //�w�]�Ĥ@�ӬOactive
      $('.table_tab>li:first-child').addClass('active')
      $('.main>.guest_table:first-child').addClass('active')

      //���Ӫ����ɤ~����A������b�u�ʮɥX�{thead��tfoot
      if($('table.guest_table').length > 0 ){ 

        caption_top = $('.guest_table.active>caption').offset().top
        caption_h = $('.guest_table.active>caption').height()-1
        thead_top = $('.guest_table.active>.o_thead').offset().top
        thead_h = $('.guest_table.active>.o_thead').height()
        tfoot_top = $('.guest_table.active>.o_tfoot').offset().top
        tfoot_h = $('.guest_table.active>.o_tfoot').height()

    
        $(window).scroll(function(){
          var s_top = $(this).scrollTop()
          var s_bottom = $(this).scrollTop() + $(this).height()

          //�X�{�T�w�b�W��thead
          if( s_top > caption_top && $('.guest_table.active>caption').css('position') != 'fixed' ){
            //�s�Wcaption���ת�div,�]��caption��fix��,���ڪ��Ŷ������F,���b�|���W,�ɭPbug
            $('.guest_table.active').before('<div id="div_head" style="height:'+(caption_h)+'"></div>')
            
            var $o_thead = $('.guest_table.active>thead.o_thead')
            //�ƻs�@��thead
            var n_thead = $o_thead.clone().removeClass('o_thead').addClass('n_thead').css({
              position:'fixed',
              top:caption_h,
              width:'calc(100% - 19px)',
              display:'table'
            })
            n_thead.find('tr').each(function(ind,ele){ //��s��thead�̭��e�׳]�w���ª�thead�@��
              $(ele).find('th').each(function(i,e){
                $(e).width( $o_thead.find('tr').eq(ind).find('th').eq(i).width()+2 )
              })
            })

            $('.guest_table.active>caption').css({
              position:'fixed',
              top:0,
              width:'calc(100% - 17px)',
              display:'table'
            })

            $('.guest_table.active>caption').after(n_thead)
          
          }
          //�R���T�w�b�W��thead
          if( s_top <= caption_top  && $('.guest_table.active>caption').css('position') == 'fixed' ){

            $('#div_head').remove()
            $('.guest_table.active>caption').css({
              position:'relative',
              top:0,
              width:'100%',
              display:'revert'
            })
            $('.n_thead').remove()
         
          }

          //�X�{�T�w�b�U��tfoot
          if( s_bottom < (tfoot_top + (+tfoot_h)) && $('.guest_table.active>.n_tfoot').css('position') != 'fixed' ){

            var $o_tfoot = $('.guest_table.active>tfoot.o_tfoot')
            //�ƻs�@��tfoot
            var n_tfoot = $o_tfoot.clone().removeClass('o_tfoot').addClass('n_tfoot').css({
              position:'fixed',
              bottom:0,
              width:'calc(100% - 17px)',
              display:'table'
            })

            n_tfoot.find('tr').each(function(ind,ele){ //��s��tfoot�̭��e�׳]�w���ª�tfoot�@��
              $(ele).find('th').each(function(i,e){
                $(e).width( $o_tfoot.find('tr').eq(ind).find('th').eq(i).width() )
              })
            })
            $('.guest_table.active>tbody').after(n_tfoot)

      
          }
          //�R���T�w�b�U��tfoot
          if( s_bottom >= (tfoot_top + (+tfoot_h)) && $('.guest_table.active>.n_tfoot').css('position') == 'fixed' ){
          
            $('.guest_table.active .n_tfoot').remove();
            $('.guest_table.active .o_tfoot').css({
              position:'relative',
              bottom:0,
              width:'100%',
              display:'revert'
            })
          }

          
        })


        $(window).scroll() //�����X�{�ɡA����@��

      }

      //���ƦW�檺css�ܧ�
      if( $('#repeat_table tr').length > 1 ){
        
        $('#repeat_table td[name="area"]').each(function(ind,ele){
          $(ele).css('border-top','2px solid #000');
          $(ele).siblings('td:not([name="tax_no"])').css('border-top','2px solid #000');
        })

      }

    });

   
  </script>
  <style>
    #repeat_table thead th{
      background: #126F6E;
    }
    #repeat_table td{
      border-top:2px solid #fff;
      border-right:2px solid #fff;
    }
    #repeat_table tbody td{
      text-align:right;
    }
    #repeat_table tbody td[name=tax_no]{
      text-align:center;
    }
    .list>caption{
      background-color: #fff;
    }
    .list td{
      text-align:right;
    }
    .list.gift tbody tr:nth-child(even){
      background-color: #eaeaea;
    }
    .list.gift tbody tr:hover{
      background-color: #ffe4bc;
    }
    .list.guest_table tbody tr:hover{
      background-color: #ffe4bc;
    }
    .list.guest_table td,.list.guest_table tfoot th{
      text-align:right;
    }
    .list.guest_table td[name=body_id],
    .list.guest_table td[name=company],
    .list.guest_table td[name=guest],
    .list.guest_table td[name=upd],
    .list.guest_table td[name=del]{
      text-align:center;
    }

    .list.guest_table td[name=gift]{
      text-align:left;
    }

    td[name=guest],
    td[name=gift],
    td[name=gift_price],
    td[name=gift_cnt],
    td[name=gift_total]{
      padding-right:0px;
      padding-left:0px;
    }

    td[name=guest]>div,
    td[name=gift]>div,
    td[name=gift_price]>div,
    td[name=gift_cnt]>div,
    td[name=gift_total]>div{
      border-top:1.5px solid #7b7b7b;;
      padding:6px 5px;
    }

    td[name=guest]>div:first-child,
    td[name=gift]>div:first-child,
    td[name=gift_price]>div:first-child,
    td[name=gift_cnt]>div:first-child,
    td[name=gift_total]>div:first-child{
      border-top:1.5px solid transparent;
    }
    .guest_table{
      display:none;
    }
    .guest_table.active{
      display:table;
    }

    .table_tab{
      padding-left: 10px;
      flex-wrap: wrap;
    }
    .table_tab>li{
      padding:2px 5px;
      margin-left:5px;
      font-size:18px;
      color:#9d9d9d;
      border-bottom:2px solid transparent;
      font-weight: bolder;
      transition:.2s;
    }
    .table_tab>li.active{
      border-bottom:2px solid red;
      color:red;
    }

  </style>
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
  <div class="div" style="text-align:center">
    <form  action="{tv_action}" method="POST" name="my_form" >
    <!-- START BLOCK : tb_label -->
      <label style="margin:10px;">{tv_cname} : 
        <select name="{tv_name}">
          <!-- START BLOCK : tb_option -->
            <option value="{tv_value}" {tv_selected}>{tv_show}</option>
          <!-- END BLOCK : tb_option -->
        </select>
      </label>
    <!-- END BLOCK : tb_label -->
      <input style="margin:10px" class="btn btn-m btn-ins" type="submit" value="�d��">
    </form>
  </div>

  <!-- START BLOCK : tb_default -->
    <h2 style="text-align:center;color:#ff9800">�п�ܷj�M����A���I��d�ߡC</h2>
  <!-- END BLOCK : tb_default -->
  
  <!-- START BLOCK : tb_table_gift -->
    <table class="list border gift" width="100%">
      <caption align=center>
        <h2>{tv_year}�~{tv_festival}§�~�w���έp����</h2>
      </caption>
      <thead class="border o_thead">
        <tr>
          <th rowspan=2>���</th>
          <!-- START BLOCK : tb_gift_name -->
            <th colspan=2>{tv_gift_name}</th>
          <!-- END BLOCK : tb_gift_name -->
          <th rowspan=2>§�~���B�X�p(��)</th>
        </tr>
        <tr>
          <!-- START BLOCK : tb_gift_info -->
            <th>�ƶq</th>
            <th>�X�p(��)</th>
          <!-- END BLOCK : tb_gift_info -->
        </tr>
      </thead>
      <tbody>
      <!-- START BLOCK : tb_gift_tr -->
        <tr>
          <td style="text-align:center">{tv_area}</td>
          <!-- START BLOCK : tb_gift_td -->
            <td>{tv_gift_cnt}</td>
            <td>{tv_gift_total}</td>
          <!-- END BLOCK : tb_gift_td -->
          <td>{tv_total}</td>
        </tr>
      <!-- END BLOCK : tb_gift_tr -->
      </tbody>
      <tfoot class="o_tfoot">
        <tr align=right>
          <th>�X�p : </th>
          <!-- START BLOCK : tb_gift_tfoot -->
            <th>{tv_gift_cnt}</th>
            <th>{tv_gift_total}</th>
          <!-- END BLOCK : tb_gift_tfoot -->
          <th>{tv_tfoot_total}</th>
        </tr>
      </tfoot>
    </table>
  <!-- END BLOCK : tb_table_gift -->


  <!-- START BLOCK : tb_table_guest -->
    <div>
      <button id="excel" class="btn btn-l btn-red">�����ץX��Excel��</button>
      <ul class="flex table_tab">
        <!-- START BLOCK : tb_guest_li -->
          <li class="pointer {tv_class}" data-id="s_num_{tv_s_num}">{tv_area_name}</li>
        <!-- START BLOCK : tb_guest_li -->
      </ul>
    </div>
    <div class="main">
    <!-- START BLOCK : tb_table -->
      <table class="list guest_table" width="100%" id="s_num_{tv_s_num}">
        <caption>
          <div style="font-size:20px">
            {tv_year}�~{tv_festival}�w�p��§��H�W�� <span class="red">{tv_all_done}</span>
            <input type="hidden" name="s_num" value="{tv_s_num}">
          </div>
          <div class="flex" style="justify-content:space-between;align-items: flex-end;margin-top:10px">
            <div>
              ��� : {tv_area}
            </div>
            <div>
              �p�����f : {tv_b_name}
            </div>
            <div>
              �a�} : {tv_address}
            </div>
          </div>
        </caption>
        <thead class="border o_thead">
          <tr>
            <th rowspan=2>����</th>
            <th rowspan=2>�Ȥ�W��</th>
            <th colspan=2 style="min-width:130px">�e§��H</th>
            <th colspan=3>��� : �U��</th>
            <th>���</th>
            <th rowspan=2>�e§�B��(��)</th>
            <th rowspan=2>§�~</th>
            <th rowspan=2>§�~���(��)</th>
            <th rowspan=2>§�~�ƶq(��)</th>
            <th rowspan=2>§�~�`���B(��)</th>
          </tr>
          <tr>
            <th>¾��</th>
            <th>�m�W</th>
            <th>�������禬</th>
            <th>������Q</th>
            <th>������Q�v</th>
            <th>�禬{tv_base_rev}% + ��Q{tv_base_gp}%</th>
          </tr>
        </thead>
        <tbody>
          <!-- START BLOCK : tb_guest_tr -->
            <tr>
              <td name="body_id">
                <span>{tv_i}</span>
              </td>
              <td name="company">{tv_company}</td>
              <td colspan=2 name="guest">
                <!-- START BLOCK : tb_guest_div -->
                  <div style="display:flex;align-items:center">
                    <span style="display:inline-block;width:48%">{tv_position}</span>
                    <span style="display:inline-block;width:48%">{tv_name}</span>
                  </div>
                <!-- START BLOCK : tb_guest_div -->
              </td>
              <td>{tv_avg_rev}</td>
              <td>{tv_avg_gp}</td>
              <td>{tv_avg_gpm} %</td>
              <td>{tv_base_num}</td>
              <td>{tv_quota}</td>
              <td name="gift">
                <!-- START BLOCK : tb_gift_div -->
                  <div>
                    {tv_gift}
                  </div>
                <!-- END BLOCK : tb_gift_div -->
              </td>
              <td name="gift_price">
                <!-- START BLOCK : tb_price_div -->
                  <div>
                    {tv_gift_price}
                  </div>
                <!-- END BLOCK : tb_price_div -->
              </td>
              <td name="gift_cnt">
                <!-- START BLOCK : tb_cnt_div -->
                  <div>
                    {tv_gift_cnt}
                  </div>
                <!-- END BLOCK : tb_cnt_div -->
              </td>
              <td name="gift_total"> 
                <!-- START BLOCK : tb_total_div -->
                  <div>
                    {tv_gift_price_total}
                  </div>
                <!-- END BLOCK : tb_total_div -->
              </td>
            </tr>
          <!-- END BLOCK : tb_guest_tr -->
        </tbody>
        <tfoot class="o_tfoot">
          <tr>
            <th colspan=8>�X�p: </th>
            <th>{tv_quota_total} ��</th>
            <th colspan=2></th>
            <th>�X�p: </th>
            <th>{tv_gift_total} ��</th>
          </tr>
            <tr>
              <th colspan=8>�|�p�f���`�w��: </th>
              <th>{tv_fina_quota_total} ��</th>
              <th colspan=4></th>
            </tr>
        </tfoot>
      </table>
    <!-- START BLOCK : tb_table -->
    <div>
  <!-- END BLOCK : tb_table_guest -->

  <!-- START BLOCK : tb_table_repeat -->
    <table class="list" id="repeat_table" style="min-width:50%">
      <button id="excel" class="btn btn-l btn-red">�����ץX��Excel��</button>
      <caption><h2>{tv_year}�~{tv_festival}�w�p��§��H-���ƦW��</h2></caption>
      <thead class="border">
        <tr>
          <th rowspan=2>�νs</th>
          <th rowspan=2>���q�W��</th>
          <th colspan=2>��§��H</th>
          <th rowspan=2>���Ƴ��</th>
        </tr>
        <tr>
          <th style="width:20%">¾��</th>
          <th style="width:20%">�m�W</th>
        </tr>
      </thead>
      <tbody>
        {tv_repeat_tbody}
      </tbody>
      <tbody>
        <!-- START BLOCK : tb_repeat_tr -->
          <tr style="background-color:{tv_color}">
            {tv_tr}
          </tr>
        <!-- END BLOCK : tb_repeat_tr -->
      </tbody>
    </table>

  <!-- END BLOCK : tb_table_repeat -->

  <!-- START BLOCK : tb_no_table -->
    <table class="list border" width="100%">
      <caption align=center>
        <h2 style="color:#ff9800">�ثe�|�L���!</h2>
      </caption>
    </table>
  <!-- END BLOCK : tb_no_table -->

<!-- END BLOCK : tb_list -->







  





