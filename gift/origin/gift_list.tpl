
<!-- START IGNORE -->
  <link rel="stylesheet" href="gift.css" type="text/css">

  <style>
    .upd_fina.active{
      background-color:#ff5722;
      border:none;
    }
    img.icon{
      width:11px;
      height:11px;
      padding:0 5px;
    }
    .his{
      display:none;
      position:absolute;
      background-color:#ddd;
    }
    .his.active{
      display:block;
    }
    .his li:hover{
      background-color:#fff;
    }
    input[type=number]{
      width :77px;
    }
    select[name='gift_s_num[]']{
      margin :1px 0;
    }
    .set {
      display:none;
      position: fixed;
      top:0; left:0; right:0; bottom:0;
      background-color:#00000045;
    }
    .set.active{
      display:block;
    }
    .set .box{
      width:40%;
      height:80%;
      position: absolute;
      overflow: auto;
      top:50%;
      left:50%;
      transform: translate(-50%, -50%);
      padding:20px;
      background-color: #ffffff;
      border:1px solid #616161;
      border-radius:10px;
      box-shadow:2px 2px 5px #000000;
    }
    .set .close_box{
      position: absolute;
      right: 27.5%;
      top: 5%;
      z-index: 5;
      width: 35px;
    }
    .fina_table thead th{
      background: #126F6E;
    }
    .fina_table tbody tr{
      background: #cde3e1;
    }
    .guest_table>caption{
      background-color:#fff;
    }
    .list.guest_table tr{
      height:auto;
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
      border-top:1.5px solid #7b7b7b;
      padding:6px 5px;
    }

    td[name=guest]>div:first-child,
    td[name=gift]>div:first-child,
    td[name=gift_price]>div:first-child,
    td[name=gift_cnt]>div:first-child,
    td[name=gift_total]>div:first-child{
      border-top:1.5px solid transparent;
    }

    .list.guest_table td[name=guest]>div{
      display:flex;
      align-items:center;
    }

    .list.guest_table td[name=guest]>div>span,
    .list.guest_table td[name=guest]>div>input{
      width:48%
    }


  </style>
  <script type="text/javascript" src="/~sl/jquery/jquery.autocomplete.js"></script>
  <script>
    $(document).ready(function(){

      //�|�p�f�ֹw���-�s��e���̪���@���s
      j183('.guest_table').on('click','.upd_fina',function(){

        var btn = this;
        var $th = $(btn).parent('th').prev('th[name="fina_quota_total"]');


        if( $(btn).hasClass('active') ){ //�x�s�eajax

          var s_num = $('input[name="s_num"]').val()
          var fina_quota_total = $(btn).parent('th').prev('th').find('input[name="fina_quota_total"]').val()

          $.ajax({
            type: 'GET',
            url: 'gift_list.php',
            data: {
              ajax_get:'ajax_save_fina',
              s_num:s_num,
              fina_quota_total:fina_quota_total
            },
            success:function(data){
              if(data == 'Y'){
                alert('�x�s���\!!');
                location.reload();
              }else{
                alert('�x�s����!!');
              }
            }
          })


        }else{ //�ק�
          var html = "<input type='text' size='8' name='fina_quota_total' value='"+$th.children('span').text()+"'>";
          $th.children('span').html(html);
          $(btn).text('�T�w�x�s');
          $(btn).toggleClass('active');
        }
        
      })

      //�ק�a�}
      $('#upd_address').click(function(){

        if( !$(this).hasClass('active') ){

          var address = $(this).siblings('span').text();
          var input = '<input type="text" name="address" value="'+address+'" size="40" maxlength="50">';
          $(this).siblings('span').html(input);
          $(this).toggleClass('active');
        }

      })

      //�|�p�ק諸����-�}��&����
      $('#fina_set,.set').click(function(even){

        if( even.target == $('.set')[0] || even.target == $('#fina_set')[0] || even.target == $('.close_box')[0]){
          $('.set').toggleClass('active');
        }

      })

      var url = new URL(document.location.href);
      var params = url.searchParams;

      //���Ӫ����ɤ~����A������b�u�ʮɥX�{thead��tfoot
      if( params.get('msel') == '2' ){ 

        var caption_top = $('.guest_table>caption').offset().top
        var caption_h = $('.guest_table>caption').height()-1
        var thead_top = $('.guest_table>thead').offset().top
        var thead_h = $('.guest_table>thead').height()
        var tfoot_top = $('.guest_table>tfoot').offset().top
        var tfoot_h = $('.guest_table>tfoot').height()
        
        //tbody���ܰʮɪ�callback
        var event_ob = new MutationObserver(function(e){ 
  
          //��s�ثetfoot������
          tfoot_top = $('.guest_table>tbody').offset().top + $('.guest_table>tbody').height()
          $(window).scroll()  //�P�_�O�_�ݭn�]�Xthead��tfoot 

          //�e�׷|�]���i�঳input�b�Ӧ��ҧ���,�ҥH�R���ثe�T�w�����Y���,�A�ؤ@�ӷs��
          if( $('.n_thead').length > 0 ){
            $('.n_thead').remove()
            var $o_thead = $('.guest_table>thead.o_thead')
            var $n_thead = $o_thead.clone().removeClass('o_thead').addClass('n_thead').css({
              position:'fixed',
              top:caption_h,
              width:'calc(100% - 17px)',
              display:'table'
            })
            $n_thead.find('tr').each(function(ind,ele){
              $(ele).find('th').each(function(i,e){
                $(e).width( $o_thead.find('tr').eq(ind).find('th').eq(i).width()+2 )
              })
            })
            $('.guest_table>caption').after($n_thead)

          }

          if( $('.n_tfoot').length > 0 ){
            $('.n_tfoot').remove()
            var $o_tfoot = $('.guest_table>tfoot.o_tfoot')
            var $n_tfoot = $o_tfoot.clone().removeClass('o_tfoot').addClass('n_tfoot').css({
              position:'fixed',
              bottom:0,
              width:'calc(100% - 17px)',
              display:'table'
            })
            $n_tfoot.find('tr').each(function(ind,ele){
              $(ele).find('th').each(function(i,e){
                $(e).width( $o_tfoot.find('tr').eq(ind).find('th').eq(i).width() )
              })
            })
            $('.guest_table>tbody').after($n_tfoot)


          }

        });

        //tbody�j�w�ƥ�,���ܰʮɩI�scallback 
        event_ob.observe($('.guest_table>tbody')[0],{
          attributes:true,
          childList: true,
          subtree: true
        })

        $(window).scroll(function(){
          var s_top = $(this).scrollTop()
          var s_bottom = $(this).scrollTop() + $(this).height()

          //�X�{�T�w�b�W��thead
          if( s_top > caption_top && $('.guest_table>caption').css('position') != 'fixed' ){
            //�s�Wcaption���ת�div,�]��caption��fix��,���ڪ��Ŷ������F,���b�|���W,�ɭPbug
            $('.guest_table').before('<div id="div_head" style="height:'+(caption_h)+'"></div>')
            
            var $o_thead = $('.guest_table>thead.o_thead')
            //�ƻs�@��thead
            var n_thead = $o_thead.clone().removeClass('o_thead').addClass('n_thead').css({
              position:'fixed',
              top:caption_h,
              width:'calc(100% - 17px)',
              display:'table'
            })
            n_thead.find('tr').each(function(ind,ele){ //��s��thead�̭��e�׳]�w���ª�thead�@��
              $(ele).find('th').each(function(i,e){
                $(e).width( $o_thead.find('tr').eq(ind).find('th').eq(i).width()+2 )
              })
            })

            $('.guest_table>caption').css({
              position:'fixed',
              top:0,
              width:'calc(100% - 17px)',
              display:'table'
            })
            $('.guest_table>caption').after(n_thead)
            


          
          }
          //�R���T�w�b�W��thead
          if( s_top <= thead_top && $('.guest_table>caption').css('position') == 'fixed' ){

            $('#div_head').remove()
            $('.guest_table>caption').css({
              position:'relative',
              top:0,
              width:'100%',
              display:'revert'
            })
            $('.n_thead').remove()
         
          }
          //�X�{�T�w�b�U��tfoot
          if( s_bottom < (tfoot_top + (+tfoot_h)) && $('.guest_table>.n_tfoot').css('position') != 'fixed' ){

            var $o_tfoot = $('.guest_table>tfoot.o_tfoot')
            //�ƻs�@��tfoot
            var n_tfoot = $o_tfoot.clone().removeClass('o_tfoot').addClass('n_tfoot').css({
              position:'fixed',
              bottom:0,
              width:'calc(100% - 17px)',
              display:'grid'
            })

            n_tfoot.find('tr').each(function(ind,ele){ //��s��tfoot�̭��e�׳]�w���ª�tfoot�@��
              $(ele).find('th').each(function(i,e){
                $(e).width( $o_tfoot.find('tr').eq(ind).find('th').eq(i).width() )
              })
            })
            $('.guest_table>tbody').after(n_tfoot)

          }
          //�R���T�w�b�U��tfoot
          if( s_bottom >= (tfoot_top + (+tfoot_h)) && $('.guest_table>.n_tfoot').css('position') == 'fixed' ){
            
            //�]��tfoot���|�p�n����input,�ҥH���ª�tfoot�R��,�s���N���ª�,���class�W��
            //�o��input�����e�~���|����
            $('.o_tfoot').remove();
            $('.n_tfoot').removeClass('n_tfoot').addClass('o_tfoot');
            $('.o_tfoot th').width(0);
            $('.guest_table .o_tfoot').css({
              position:'relative',
              bottom:0,
              width:'100%',
              display:'revert'
            })
          }
        })

        $(window).scroll() //�����X�{�ɡA����@���A���F�]�X���
      }

    
    });

  </script>
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


<!-- START BLOCK : tb_guest_table --> 

  <!-- START BLOCK : tb_js_guest -->
    <!-- START IGNORE -->
      <script>
        $(document).ready(function(){

          //�����p�����Ϊ�even
          $(window).click(function(e){
            var e = e || window.event;
            var elem = e.target;

            if( $('#his_com').hasClass('active') && !$(elem).is('.his_com_btn') ){
              if( !$(elem).is('#his_com') && $(elem).parents('#his_com').length == 0 ){
                $('#his_com.active').toggleClass('active')
                j183('#his_com').off('.set');
              }
            }

            if( $('#his_guest').hasClass('active') &&  $(document.activeElement).attr('name') != 'position[]' ){
              if( !$(elem).is('#his_guest') && $(elem).parents('#his_guest').length == 0 ){
                $('#his_guest.active').toggleClass('active')
                j183('#his_guest').off('.set');
              }
            }else if( !$('#his_guest').hasClass('active') && $(document.activeElement).attr('name') == 'position[]' ){
                j183(document.activeElement).focus()
            }
            

          })

          //autocomplete for �νs
          j183('.guest_table').on('focus','input[name="tax_no[]"]',function(event){
            autocomplete(this);
          })

          // blur for chk �νs
          j183('.guest_table').on('blur','input[name="tax_no[]"]',function(){
            var input = this;
            var val = $(this).val();
            if(val.length == 8){
              $.ajax({
                type: 'GET',
                url: 'gift_list.php',
                data: {
                  ajax_get:'ajax_get_com',
                  q:val,
                  rownum:1
                },
                success:function(data){
                  if(data){
                    chk_com(data,input);
                  }else{
                    alert('�s�����~�A�S���ǰt���Ȥ�');
                    $(input).parent('td[name="company"]').attr('data-tax_no','')
                    $(input).val('')
                    $(input).siblings('input[name="company[]"]').val('')
                  }
                }
              })
            }else{
              $(input).parent('td[name="company"]').attr('data-tax_no','')
              $(input).siblings('input[name="company[]"]').val('')
            }

          })

          //�פJ�W�@�������v���
          $('#his_com_btn').click(function(){
            var s_num = $('input[name="s_num"]').val();
            var arr = [];

            $.ajax({
              type: 'POST',
              url: 'gift_list.php',
              async : false,
              data: {
                ajax_get:'ajax_get_his_com',
                s_num:s_num,
              },
              success:function(data){
                if(data == 'N'){
                  arr = 'N';
                }else{
                  arr = JSON.parse(data);
                }
              }
            })

            if(arr == 'N'){
              alert('�L���v����!');
              return;
            }else if(arr.length == 0){
              alert('Ū�����v��������!');
              return;
            }

            var tr = '';
            var num = $('.list tbody>tr').length;
            //�����e���W�w�����Ȥ�νs
            var arr_com = [];
            $('td[name="company"]').each(function(ind,ele){
              if( !$(ele).attr('data-tax_no') ) return true; //�S�ȸ��L
              arr_com.push( $(ele).attr('data-tax_no') );
            })

            $.each(arr,function(tax,item){
              tax = tax.split('-');
              if( arr_com.indexOf(tax[0]) > -1 )return true; //�e���w���Ȥ� ���L

              var div = '';
              $.each(item,function(ind,val){
                val = val.split('-');
                if( ind == 0 ){
                  img = '<img class="add_guest pointer" src="/~sl/img/plus.png" title="�s�W��H">';
                }else{
                  img = '<img class="del_guest pointer" src="/~sl/img/minus.png" title="�R��">';
                }
                div += '<div data-item_id="0">'+
                      '<input type="hidden" name="item_id[]" value="0">'+
                      '<input type="text" name="position[]" size="10" value="'+val[0]+'">'+
                      '<input type="text" name="name[]" size="10" value="'+val[1]+'">'+
                      img+
                    '</div>';
              })
              
              tr += '<tr>'+
                      '<td name="body_id" data-body_id="0">'+
                        '<span>'+(++num)+'</span>'+
                        '<input type="hidden" name="body_id[]" value="0">'+
                      '</td>'+
                      '<td name="company" data-tax_no="'+tax[0]+'">'+
                        '<input type="text" name="tax_no[]" placeholder="�п�J�νs" maxlength="8" size="10" value="'+tax[0]+'">'+
                        '<input type="text" name="company[]" value="'+tax[1]+'" readonly placeholder="���q�W�٦۰ʱa�X">'+
                          '<img class="icon pointer his_com_btn" src="/~sl/img/arrow-down.svg" title="���v�������">'+
                      '</td>'+
                      '<td colspan="2" name="guest">'+div+'</td>'+
                      '<td name="avg_rev"><input type="text" name="avg_rev[]" size="10"></td>'+
                      '<td name="avg_gp"><input type="text" name="avg_gp[]" size="10"></td>'+
                      '<td name="avg_gpm"><input type="text" name="avg_gpm[]" size="10" readonly placeholder="�۰ʱa�X"> %</td>'+
                      '<td name="base_num"><input type="text" name="base_num[]" size="10" readonly  placeholder="�۰ʱa�X"></td>'+
                      '<td name="quota"><input type="text" name="quota[]" size="10" readonly placeholder="�۰ʱa�X"></td>'+
                      '<td colspan=2 name="del"><button type="button" class="del_com btn btn-cancel">�R������</button></td>'+
                    '</tr>';

            })

            if( tr == '' ){
              alert('�W�@���Ȥ�Ҥw�g�b�e���W');
            }else{
              $('.list tbody').append(tr);
            }

          })

          //�s�W�Ȥ�(���q)
          $('#add_com').click(function(){
            
            var tr = '<tr>'+
                        '<td name="body_id" data-body_id="0">'+
                          '<span>'+(++$('.list tbody>tr').length)+'</span>'+
                          '<input type="hidden" name="body_id[]" value="0">'+
                        '</td>'+
                        '<td name="company">'+
                          '<input type="text" name="tax_no[]" placeholder="�п�J�νs" maxlength="8" size="10">'+
                          '<input type="text" name="company[]" readonly placeholder="���q�W�٦۰ʱa�X">'+
                          '<img class="icon pointer his_com_btn" src="/~sl/img/arrow-down.svg" title="���v�������">'+
                        '</td>'+
                        '<td colspan="2" name="guest">'+
                          '<div data-item_id="0">'+
                            '<input type="hidden" name="item_id[]" value="0">'+
                            '<input type="text" name="position[]" size="10">'+
                            '<input type="text" name="name[]" size="10">'+
                            /*'<img class="icon pointer his_guest_btn" src="/~sl/img/arrow-down.svg" title="���v�������">'+*/
                            '<img class="add_guest pointer" src="/~sl/img/plus.png" title="�s�W��H">'+
                        '</div></td>'+
                        '<td name="avg_rev"><input type="text" name="avg_rev[]" size="10"></td>'+
                        '<td name="avg_gp"><input type="text" name="avg_gp[]" size="10"></td>'+
                        '<td name="avg_gpm"><input type="text" name="avg_gpm[]" size="10" readonly placeholder="�۰ʱa�X"> %</td>'+
                        '<td name="base_num"><input type="text" name="base_num[]" size="10" readonly  placeholder="�۰ʱa�X"></td>'+
                        '<td name="quota"><input type="text" name="quota[]" size="10" readonly placeholder="�۰ʱa�X"></td>'+
                        '<td colspan=2 name="del"><button type="button" class="del_com btn btn-cancel">�R������</button></td>'+
                      '</tr>';

            $('.list tbody').append(tr)
          })

          //�ק�Ȥ�(���q)
          j183('.guest_table').on('click','.upd_company>img',function(){

            if( $(this).hasClass('active') ) return;
            $(this).addClass('active');

            var $tr = $(this).parents('tr');
            var $body_id = $tr.children('td[name="body_id"]'),
                $company = $tr.children('td[name="company"]'),
                $guest = $tr.children('td[name="guest"]'),
                $avg_rev = $tr.children('td[name="avg_rev"]'),
                $avg_gp = $tr.children('td[name="avg_gp"]'),
                $avg_gpm = $tr.children('td[name="avg_gpm"]'),
                $base_num = $tr.children('td[name="base_num"]'),
                $quota = $tr.children('td[name="quota"]')

            
            var str_body_id = '<input type="hidden" name="body_id[]" value="'+$body_id.attr('data-body_id')+'">',
                str_company = '<input type="text" name="tax_no[]" value="'+$company.attr('data-tax_no')+'" placeholder="�п�J�νs" maxlength="8" size="10">'+
                              '<input type="text" name="company[]" value="'+$company.text()+'" readonly placeholder="���q�W�٦۰ʱa�X">'+
                              '<img class="icon pointer his_com_btn" src="/~sl/img/arrow-down.svg" title="���v�������">',
                str_avg_rev = '<input type="text" name="avg_rev[]" value="'+$avg_rev.text()+'" size="10">',
                str_avg_gp = '<input type="text" name="avg_gp[]" value="'+$avg_gp.text()+'" size="10">',
                str_avg_gpm = '<input type="text" name="avg_gpm[]" value="'+$avg_gpm.children('span').text()+'" size="10" readonly placeholder="�۰ʱa�X"> %',
                str_base_num = '<input type="text" name="base_num[]" value="'+$base_num.text()+'" size="10" readonly  placeholder="�۰ʱa�X" >',
                str_quota = '<input type="text" name="quota[]" size="10" value="'+$quota.text()+'" readonly placeholder="�۰ʱa�X">'
            
      
            $body_id.append(str_body_id);
            $company.html(str_company);
            $avg_rev.html(str_avg_rev);
            $avg_gp.html(str_avg_gp);
            $avg_gpm.html(str_avg_gpm);
            $base_num.html(str_base_num);
            $quota.html(str_quota);

            $guest.find('div').each(function(ind,ele){
              var img;
              if( ind == 0){
                img = '<img class="add_guest pointer" src="/~sl/img/plus.png" title="�s�W��H">';
              }else{
                img = '<img class="del_guest pointer save_id" src="/~sl/img/minus.png" title="�R��">';
              }
              var item_id = $(ele).attr('data-item_id')
              var position = $(ele).children('span').eq(0).text();
              var name = $(ele).children('span').eq(1).text();
              var str = '<input type="hidden" name="item_id[]" value="'+item_id+'">'+
                        '<input type="text" name="position[]" value="'+position+'" size="15">'+
                        '<input type="text" name="name[]" value="'+name+'" size="15">'
              $(ele).html(str+img)
            })

            

          })

          //�R���Ȥ�(���q)
          j183('.guest_table').on('click','.del_com>img,button.del_com',function(){

            var id = $(this).parents('tr').find('td[name="body_id"]').attr('data-body_id')
            if( id != 0 ){ //s_num�s�_��,�e���ݧ@�o,����0���ܬO�s�W(�٨S�iDB��)
              var del_id = $('input[name="del_company"]').val();
              $('input[name="del_company"]').val( del_id+','+id );
            }

            $(this).parents('tr').remove()
            //�Ǹ����s�ƦC
            $('.guest_table tbody>tr').each(function(ind,el){
              $(el).find('td:eq(0)>span').html(ind+1)
            })

            cnt_quota() //�X�p�e§�B��

          })

          //�s�W�e§��H
          j183('.guest_table').on('click','.add_guest',function(){
            var div = '<div data-item_id="0">'+
                        '<input type="hidden" name="item_id[]" value="0">'+
                        '<input type="text" name="position[]" size="15">'+
                        '<input type="text" name="name[]" size="15">'+
                        /*'<img class="icon pointer his_guest_btn" src="/~sl/img/arrow-down.svg" title="���v�������">'+*/
                        '<img class="del_guest pointer" src="/~sl/img/minus.png" title="�R��">'+
                      '</div>';
            $(this).parents('td').append(div)
          })

          //�R���e§��H
          j183('.guest_table').on('click','.del_guest',function(){

            var id = $(this).parent('div').attr('data-item_id');
            if( id != 0 ){ //s_num�s�_��,�e���ݧ@�o,����0���ܬO�s�W(�٨S�iDB��)
              var del_id = $('input[name="del_item"]').val();
              $('input[name="del_item"]').val( del_id+','+id );
            }

            $(this).parent('div').remove()
          })

          //�Ȥ�(���q)���v����
          j183('.guest_table').on('click','.his_com_btn',function(){

            var $tax_input = $(this).siblings('input[name="tax_no[]"]');
            var $com_input = $(this).siblings('input[name="company[]"]');


            var width = $tax_input.width() + $com_input.width() + 15
            var n_top = $tax_input.offset().top + $tax_input.height()+ 7
            var n_left = $tax_input.offset().left

            var css_obj = { "top":n_top,
                            "left":n_left,
                            "width":width
                          }
            var select_fun = function(li){
              var str = $(li).text().split('-');
              $tax_input.parent('td[name="company"]').attr('data-tax_no',str[0]);
              $tax_input.val(str[0]);
              $com_input.val(str[1]);
              chk_same_com() //�P�_�Ȥ�O�_������
            }

            set_his('#his_com',css_obj,select_fun)
            

          })

          //¾��,�m�W ���v����
          j183('.guest_table').on('focus','input[name="position[]"]',function(){

            if( $('#his_guest').hasClass('active') ){
              $('#his_guest').toggleClass('active');
              j183('#his_guest').off('.set');
              return;
            }

            var tax_no = $(this).parents('tr').find('input[name="tax_no[]"]').val();
            var arr = [];
            if( tax_no.length == 8 ){
              $.ajax({
                type: 'GET',
                url: 'gift_list.php',
                async : false,
                data: {
                  ajax_get:'ajax_get_guest',
                  tax_no:tax_no,
                },
                success:function(data){
                  if(data != 'N'){
                    arr = JSON.parse(data)
                  }
                }
              })
            }

            if( arr.length == 0 ) return;
            var html = '';
            arr.forEach(function(val,ind){
              var arr_1 = val.split('-');
              html += `<li>${arr_1[0]}-${arr_1[1]}</li>`;
            })

            $('#his_guest>ul').html(html);


            var $position_input = $(this);
            var $name_input = $(this).siblings('input[name="name[]"]');


            var width = $position_input.width() + $name_input.width() + 15
            var n_top = $position_input.offset().top + $position_input.height()+ 7
            var n_left = $position_input.offset().left

            var css_obj = { "top":n_top,
                            "left":n_left,
                            "width":width
                          }
            var select_fun = function(li){
              var str = $(li).text().split('-')
              $position_input.val(str[0])
              $name_input.val(str[1])
            }

            set_his('#his_guest',css_obj,select_fun)

          })

          //¾��,�m�W ���v���� keyin�� ��������
          j183('.guest_table').on('input','input[name="position[]"]',function(){

            if( $('#his_guest').hasClass('active') && $(this).val() != '' ){ //�����v����

              $('#his_guest.active').toggleClass('active')
              j183('#his_guest').off('.set');

            }else if( !$('#his_guest').hasClass('active') &&  $(this).val() == '' ){
              j183(this).focus();

            }

          })

          //��X��Q�v�B��ơB�e§�B��
          j183('.guest_table').on('blur','input[name="avg_rev[]"],input[name="avg_gp[]"]',function(){

            var s_num = $('input[name="s_num"]').val();
            var avg_rev = $(this).parents('tr').find('input[name="avg_rev[]"]').val();
            var avg_gp = $(this).parents('tr').find('input[name="avg_gp[]"]').val();
            var base_rev = $('th[data-base_rev]').attr('data-base_rev');
            var base_gp = $('th[data-base_gp]').attr('data-base_gp');

            if( avg_rev == '' || avg_gp == '' ){
              $(this).parents('tr').find('input[name="avg_gpm[]"]').val('');
              $(this).parents('tr').find('input[name="base_num[]"]').val('');
              $(this).parents('tr').find('input[name="quota[]"]').val('');
              return;
            }


            if( avg_gp == 0  && avg_rev == 0 ){ //�L�~�Z�A�w���B�פ@��500��
              $(this).parents('tr').find('input[name="avg_gpm[]"]').val(0);
              $(this).parents('tr').find('input[name="base_num[]"]').val(0);
              $(this).parents('tr').find('input[name="quota[]"]').val(500)

            }else{
              //������Q�v = ������Q / �������禬 *100 ���p���I2��
              var avg_gpm = (avg_gp/avg_rev*100).toFixed(2);
              $(this).parents('tr').find('input[name="avg_gpm[]"]').val(avg_gpm);

              //��� = �禬20%+��Q80% ( 20�P80 �Ӧ�DB�̳]�w��,�i��|�ܰʪ�,�G�b�{���̤��g�� ) ���p���I1��
              var base_num = ( (avg_rev*base_rev/100) + (avg_gp*base_gp/100) ).toFixed(1);
              $(this).parents('tr').find('input[name="base_num[]"]').val(base_num);
              
              //���o�B�� 
              var $quota = $(this).parents('tr').find('input[name="quota[]"]')
              $.ajax({
                type: 'POST',
                url: 'gift_list.php',
                async:false,
                data: {
                  ajax_get:'ajax_get_base',
                  s_num:s_num,
                  base_num:base_num
                },
                success:function(data){
                  if(data){
                    $quota.val(data);
                  }else{
                    alert('�e§�B�ר��o����!')
                  }
                }
              })

            }
            
            cnt_quota() //�X�p�e§�B��


          })

          //���e�X
          $('.submit').click(function(){

            //�P�_�Ȥ�O�_������
            if( chk_same_com() ) return false;
            
            //�P�_�O�_���ťժ���
            var bool = false;
            $('form[name="body_form"] input:not(input[type=hidden])').each(function(ind,ele){
              if( $(ele).val() == '' ){
                bool = true;
                alert('�Фůd�ť�!');
                j183(ele).focus();
                return false; //���X�j��
              }
            })
            if( bool ) return false;

            //�T�{�O�_�� ���P���,���O���ۦP���Ȥ�(���q)
            if( $('input[name="tax_no[]"]').length > 0 ){
              var tax_no = '';
              $('td[name="company"]').each(function(ind,ele){
                tax_no += ',' + $(ele).attr('data-tax_no');
              })
              var arr = [];
              $.ajax({
                  type: 'POST',
                  url: 'gift_list.php',
                  async : false,
                  data: {
                    ajax_get:'ajax_chk_com',
                    s_num:$('input[name="s_num"]').val(),
                    tax_no:tax_no,
                  },
                  success:function(data){
                    console.log(data)
                    if(data != 'N'){
                      arr = JSON.parse(data)
                    }
                  }
              })
              if( arr.length > 0 ){
                var str = arr.join('\n');
                str += '\n�H�W�Ȥ�A�b�O�����w����ơA�O�_�T�w�n�~��s�W?';
                if( !confirm(str) ) return false;
              }
              
            }

            //��� ¾��,�m�W��name => �e���[�W�νs,������
            $('.list>tbody>tr').each(function(ind,ele){
              var tax_no
              if( $(ele).find('input[name="tax_no[]"]').length == 0 ){
                return; // == continue
              }else{
                tax_no = $(ele).find('input[name="tax_no[]"]').val(); 
              }

              $(ele).find('input[name="item_id[]"]').attr('name',tax_no+'_item_id[]');
              $(ele).find('input[name="position[]"]').attr('name',tax_no+'_position[]');
              $(ele).find('input[name="name[]"]').attr('name',tax_no+'_name[]');

            })

            $('form[name="body_form"]').submit();

          })
        
        });

        //autocomplete
        function autocomplete(input){
          $(input).autocomplete(
            "gift_list.php",
            { extraParams:{ ajax_get:'ajax_get_com',rownum:20 },
              delay:10,
              width:250,
              minChars:1,
              maxItemsToShow:20,
              selectFirst:true,
              cacheLength:0,
              onItemSelect:function(str){
                chk_com(str,input)
              } } 
          );
        }

        //�νs autocomplete blur ��^�ǭȪ��B�z
        function chk_com(str,input) {

          if( typeof str == 'string'){ //blur��^�Ǫ����A��str=>1234567-�LXX 
            str = str.split('-');
          }else{
            str = str.innerText.split('-'); //autocomplete�^�Ǫ����A��obj=>li����
          }

          $(input).parent('td[name="company"]').attr('data-tax_no',str[0])
          $(input).val(str[0]);
          $(input).siblings('input[name="company[]"]').val(str[1])

          chk_same_com() //�P�_�Ȥ�O�_������

        }

        //���v��ƪ������B�z
        function set_his(id,css_obj,select_fun){
          $(id).css(css_obj)

          /*if( $(id).hasClass('active') ){
            $(id).toggleClass('active');
            j183(id).off('.set');
            return;
          }*/

          $(id).toggleClass('active');

          j183(id).on('click.set','li',function(){
            select_fun(this)
            $(id).toggleClass('active');
            j183(id).off('.set');
          })

        }

        //�P�_�Ȥ�O�_������
        function chk_same_com(){
          var arr_ele = [];
          var arr_tax = [];
          var bool = false;

          $('td[name="company"]').each(function(ind,ele){
            if( !$(ele).attr('data-tax_no') ) return true; //�S�ȸ��L

            var idx = arr_tax.indexOf( $(ele).attr('data-tax_no') );
            if( idx == -1 ){
                arr_ele.push(ele)
                arr_tax.push( $(ele).attr('data-tax_no') );
            }else{
                //������
                bool = true;
                var ind_2 = $('.guest_table td[name="company"]').index(arr_ele[idx])
                var cname = $(ele).find('input[name="company[]"]').val();
                alert('���� ('+(ind_2+1)+') , ('+(ind+1)+')�u'+cname+'�v'+'�����ơA�ЦX�b�@�_!!');
                //��ج��ⰵ����
                $(ele).css('border','2px solid red');
                $(arr_ele[idx]).css('border','2px solid red');

                //5��� ��ئ^��쪬
                window.setTimeout(function(){
                  $(ele).css('border','none');
                  $(arr_ele[idx]).css('border','none');
                },5000)
                return false; //���X�j��
            }
          })

          return bool;

        }

        //�X�p�e§�B��
        function cnt_quota(){
          var cnt = 0
          $('td[name="quota"]').each(function(ind,ele){
            cnt += +($(ele).text());
          })
          $('input[name="quota[]"]').each(function(ind,ele){
            cnt += +($(ele).val());
          })
          $('th[name="quota_total"]').html(cnt+' ��');
        }

      </script>
    <!-- END IGNORE -->
  <!-- END BLOCK : tb_js_guest -->

  <!-- START BLOCK : tb_js_gift -->
    <!-- START IGNORE -->
      <script>
        $(document).ready(function(){
          
          //§�~�ܧ�ɡA��X§�~����B�`���B
          j183('.guest_table').on('change','select[name="gift_s_num[]"]',function(){

            var $tr = $(this).parents('tr');
            var ind = $tr.find('select[name="gift_s_num[]"]').index($(this))
            var $op = $(this).find('option:selected');
            $tr.find('input[name="gift_price[]"]').eq(ind).val( $op.attr('data-price') );

            j183($tr).find('input[name="gift_cnt[]"]').eq(ind).trigger('change'); //Ĳ�o�ƥ� => ���`���B

          })

          //§�~�ƶq�ɡA��X�`���B
          j183('.guest_table').on('change','input[name="gift_cnt[]"]',function(){

            var cnt = $(this).val();
            var reg = /^\d+$/;
            var $tr = $(this).parents('tr');
            var ind = $tr.find('input[name="gift_cnt[]"]').index($(this))

            if( cnt == ''){ //�榡�����T->�k0
              $(this).val(0);
              $tr.find('input[name="gift_price_total[]"]').eq(ind).val('0');
            }else if( !reg.test(cnt) ){//�榡�����T->�k0
              alert('�ж�g�����');
              $tr.find('input[name="gift_price_total[]"]').eq(ind).val('0');
            }else{
              var price = $tr.find('input[name="gift_price[]"]').eq(ind).val();
              var item_total = cnt * price;
              $tr.find('input[name="gift_price_total[]"]').eq(ind).val( item_total );
              cnt_gift_total()
            }

            var total = +$('th[name="gift_total"]>span').html();
            var fina_total = +$('th[name="fina_quota_total"]').attr('data-fina');
            if( total > fina_total ){ //�W�L�w��->�k0
              $(this).val(0);
              $tr.find('input[name="gift_price_total[]"]').eq(ind).val(0);
              alert('§�~�`���B�X�p�A�ФŶW�L �|�p�f���`�w�� !!');
              cnt_gift_total()
            }
            
          })

          //�n������,confirm
          j183('.guest_table').on('click','.all_done',function(){

            if( confirm('�e�X��A���i�A������ק�A�O�_�~��e�X�H') ){

              $('form[name="body_form"]').append('<input type="hidden" name="all_done" value="Y">');
              $('.submit').click();

            }

          })

          //���e�X
          $('.submit').click(function(){

            //�P�_�O�_���ťժ���
            var bool = false;
            $('form[name="body_form"] select[name="gift_s_num[]"]').each(function(ind,ele){
              if( $(ele).val() == '' ){
                bool = true;
                alert('�п��§�~!!');
                j183(ele).focus();
                return false; //���X�j��
              }
            })
            if( bool ) return false;
            
            //�P�_ �ƶq�Ϊ��B �O�_��0
            $('form[name="body_form"] input:not(input[type=hidden])').each(function(ind,ele){
              if( $(ele).val() == '0' ){
                bool = true;
                alert('�ж�J���T���ƶq!!');
                j183(ele).focus();
                return false; //���X�j��
              }
            })
            if( bool ) return false;

            //�P�_���B�O�_�W�L�w��
            if( +$('th[name="gift_total"]>span').html() > +$('th[name="fina_quota_total"]>span').html() ){
              alert('§�~�`���B�X�p�A�ФŶW�L �|�p�f���`�w�� !!');
              return false;
            }

            $('form[name="body_form"]').submit();

          })

        });

        function cnt_gift_total(){
          //���s�p���`���B���X�p
          var total = 0;
          $('input[name="gift_price_total[]"]').each(function(ind,ele){
            total += +($(ele).val());
          })
          $('th[name="gift_total"]>span').html(total);
        }

      </script>
    <!-- END IGNORE -->
  <!-- END BLOCK : tb_js_gift -->

  <div>
    <form action="{tv_action}" method="POST" name="body_form"> 
      <table class="list left guest_table" width="100%">      
        <caption>
          <div style="font-size:20px">
            {tv_year}�~{tv_festival}�w�p��§��H�W��
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
              �a�} : <span>{tv_address}</span>
              <!-- START BLOCK : tb_upd_address -->
                <img id="upd_address" class="pointer" src="/~sl/img/upd.png" alt="�ק�a�}" title="�ק�a�}">
              <!-- END BLOCK : tb_upd_address -->
            </div>
            <div>
              <!-- START BLOCK : tb_btn_add -->
                <button class="btn btn-red btn-m" type="button" id="add_com">�s�W�Ȥ�</button>
                <button class="btn btn-red btn-m" type="button" id="his_com_btn">�פJ�W�@�����Ȥ�</button>
              <!-- END BLOCK : tb_btn_add -->
            </div>
            <div>
              <!-- START BLOCK : tb_btn_submit -->
                <input class="btn btn-ins btn-l submit" type="button" value="�T�w�x�s">
              <!-- END BLOCK : tb_btn_submit -->
            </div>
          </div>
          <input type="hidden" name="del_company">
          <input type="hidden" name="del_item">
        </caption>
        <thead class="border o_thead">
          <tr>
            <th rowspan=2 style="width: 3%">����</th>
            <th rowspan=2>�Ȥ�W��</th>
            <th colspan=2 style="min-width:130px">�e§��H</th>
            <th colspan=3>��� : �U��</th>
            <th>���</th>
            <th rowspan=2>�e§�B��(��)</th>
            <!-- START BLOCK : tb_th_guest -->
              <th rowspan=2 style="width: 4%">�ק�</th>
              <th rowspan=2 style="width: 4%">�@�o</th>
            <!-- END BLOCK : tb_th_guest -->
            <!-- START BLOCK : tb_th_gift -->
              <th rowspan=2>§�~</th>
              <th rowspan=2>§�~���(��)</th>
              <th rowspan=2>§�~�ƶq(��)</th>
              <th rowspan=2>§�~�`���B(��)</th>
            <!-- END BLOCK : tb_th_gift -->
          </tr>
          <tr>
            <th>¾��</th>
            <th>�m�W</th>
            <th>�������禬</th>
            <th>������Q</th>
            <th>������Q�v</th>
            <th data-base_rev='{tv_base_rev}' data-base_gp='{tv_base_gp}'>�禬{tv_base_rev}% + ��Q{tv_base_gp}%</th>
          </tr>
        </thead>
        <tbody>
          <!-- START BLOCK : tb_guest_tr -->
            <tr>
              <td name="body_id" data-body_id={tv_s_num}>
                <span>{tv_i}</span>
              </td>
              <td name="company" data-tax_no={tv_tax_no}>{tv_company}</td>
              <td colspan=2 name="guest">
                <!-- START BLOCK : tb_guest_div -->
                  <div data-item_id={tv_item_id}>
                    <span style="display:inline-block">{tv_position}</span>
                    <span style="display:inline-block">{tv_name}</span>
                  </div>
                <!-- END BLOCK : tb_guest_div -->
              </td>
              <td name="avg_rev">{tv_avg_rev}</td>
              <td name="avg_gp">{tv_avg_gp}</td>
              <td name="avg_gpm"><span>{tv_avg_gpm}</span> %</td>
              <td name="base_num">{tv_base_num}</td>
              <td name="quota">{tv_quota}</td>
              <!-- START BLOCK : tb_td_guest -->
                <td name="upd" class="upd_company">{tv_upd}</td>
                <td name="del" class="del_com">{tv_del}</td>
              <!-- END BLOCK : tb_td_guest -->

              <!-- START BLOCK : tb_td_gift -->
                <td name="gift">
                  <!-- START BLOCK : tb_gift_div_gift -->
                    <div>
                      <input type="hidden" name="item_id[]" value="{tv_item_id}">
                      {tv_gift}
                    </div>
                  <!-- END BLOCK : tb_gift_div_gift -->

                  <!-- START BLOCK : tb_gift_gift -->
                    <div>
                      {tv_gift}
                    </div>
                  <!-- END BLOCK : tb_gift_gift -->
                </td>
                <td name="gift_price">
                  <!-- START BLOCK : tb_gift_div_price -->
                    <div>
                      <input type="text" name="gift_price[]" size="10" value="{tv_gift_price}" readonly placeholder="�۰ʱa�X">
                    </div>
                  <!-- END BLOCK : tb_gift_div_price -->
                  <!-- START BLOCK : tb_gift_price -->
                    <div>
                      {tv_gift_price}
                    </div>
                  <!-- END BLOCK : tb_gift_price -->
                </td>
                <td name="gift_cnt">
                  <!-- START BLOCK : tb_gift_div_cnt -->
                    <div>
                      <input type="number" name="gift_cnt[]" size="10" value="{tv_gift_cnt}">
                    </div>
                  <!-- END BLOCK : tb_gift_div_cnt -->
                  <!-- START BLOCK : tb_gift_cnt -->
                    <div>
                      {tv_gift_cnt}
                    </div>
                  <!-- END BLOCK : tb_gift_cnt -->
                </td>
                <td name="gift_total">
                  <!-- START BLOCK : tb_gift_div_total -->
                    <div>
                      <input type="text" name="gift_price_total[]" size="10" value="{tv_gift_price_total}" readonly placeholder="�۰ʱa�X">
                    </div>
                  <!-- END BLOCK : tb_gift_div_total -->
                  <!-- START BLOCK : tb_gift_total -->
                    <div>
                      {tv_gift_price_total}
                    </div>
                  <!-- END BLOCK : tb_gift_total -->
                </td>
              <!-- END BLOCK : tb_td_gift -->

            </tr>
          <!-- END BLOCK : tb_guest_tr -->
        </tbody>
        <tfoot class="o_tfoot">
          <tr>
            <th colspan=8 align=right>�X�p: </th>
            <th name="quota_total">{tv_quota_total} ��</th>
            <th colspan=2></th>
            <!-- START BLOCK : tb_tfoot_gift -->
              <th>�X�p: </th>
              <th name="gift_total"><span>{tv_gift_total}</span> ��</th>
            <!-- END BLOCK : tb_tfoot_gift -->
          </tr>
            <tr>
              <th colspan=8 align=right>�|�p�f���`�w��: </th>
              <th name="fina_quota_total" data-fina="{tv_fina_quota_total}">
                <span>{tv_fina_quota_total}</span> ��
              </th>
              <th style="text-align:left">
              <!-- START BLOCK : tb_guest_fina_btn -->
                <button type="button" class="btn btn-s btn-ins upd_fina">�ק�w��</button>
              <!-- END BLOCK : tb_guest_fina_btn -->
              </th>
              <th {tv_colspan}></th>
              <!-- START BLOCK : tb_tfoot_gift_2 -->
                <th></th>
                <th>
                  <button type="button" class="btn btn-l btn-red all_done">�n������</button>
                </th>
              <!-- END BLOCK : tb_tfoot_gift_2 -->
            </tr>
        </tfoot>
      </table>
    </form>
  </div>
  <!-- START BLOCK : tb_his_com -->
    <div class="his ac_results" id="his_com">
      <ul>
      <!-- START BLOCK : tb_com_li -->
        <li>{tv_li}</li>
      <!-- END BLOCK : tb_com_li -->
      </ul>
    </div>
  <!-- END BLOCK : tb_his_com -->

  <div class="his ac_results" id="his_guest">
    <ul>
    </ul>
  </div>

<!-- END BLOCK : tb_guest_table -->


<!-- START BLOCK : tb_insert -->
  <script>
    $(document).ready(function(){
      
      //�a�}�ܰ�
      $('select[name="area_s_num"]').change(function(){
        var address = $(this).find('option:selected').attr('data-address');
        $('input[name="address"]').val(address);
      })

      //���e�X
      $('form[name="insert_form"]').submit(function(){

        var area = $('select[name="area_s_num"]').val();
        if( $.trim(area).length == 0  ){
          alert('�п�ܳ��!!');
          return false;
        }

        var year = $('select[name="year"]').val();
        if( $.trim(year).length == 0 ){
          alert('�п�ܦ~��!!');
          return false;
        }

        var festival = $('select[name="festival"]').val();
        if( $.trim(festival).length == 0  ){
          alert('�п�ܸ`��!!');
          return false;
        }

        var address = $('input[name="address"]').val();
        if( $.trim(address).length == 0  ){
          alert('�a�}��J���~!!');
          return false;
        }

        var cnt
        $.ajax({
            type:'POST',
            url:'gift_list.php',
            async:false,
            data: {
              ajax_get:'ajax_chk_area',
              area:$.trim(area),
              year:$.trim(year),
              festival:$.trim(festival)
            },
            success:function(data){
              cnt = data;
            }
        })

        if( cnt > 0 ){
          var area = $('select[name="area_s_num"]').find('option:selected').text()
          alert('�y'+area+'�z'+$.trim(year)+'�~'+$.trim(festival)+'�A�w�g�إ߸�ƤF�A���i���Ʒs�W!');
          return false;
        }


      })

    });

    

  </script>
  <form  action="{tv_action}" method="POST" enctype="multipart/form-data" name="insert_form">
    <table class="data" width="100%">
    <tr>
      <th colspan=2 class="caption">�s�W</th>
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
                <input type="text" name="{tv_ename}" value="{tv_value}" size="{tv_size}" maxlength="{tv_maxlength}" {readonly} >
              <!-- END BLOCK : tb_ins_text -->

              <!-- START BLOCK : tb_ins_textarea -->
                <textarea  name="{tv_ename}" rows="5" cols="50">{tv_value}</textarea>
              <!-- END BLOCK : tb_ins_textarea -->

              <!-- START BLOCK : tb_ins_select -->
                <select name="{tv_ename}">

                  <!-- START BLOCK : tb_ins_option -->
                    <option  value="{tv_value}" {tv_selected} data-address={tv_address}>{tv_show}</option>
                  <!-- END BLOCK : tb_ins_option -->

                </select>
              <!-- END BLOCK : tb_ins_select -->

                  
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
  <div class="div" style="padding:5px 0;">
    �j�M���� ->  
    <!-- START BLOCK : tb_select -->
      <select name="{tv_name}" >
        <!-- START BLOCK : tb_option -->
          <option  value="{tv_value}" {tv_selected}>{tv_show}</option>
        <!-- END BLOCK : tb_option -->
      </select> {tv_text}
    <!-- END BLOCK : tb_select -->
    <!-- START BLOCK : tb_fina_btn -->
      <button type="button" id="fina_set" class="btn btn-m btn-red" style="margin-left:15px" >�|�p�s��</button>
    <!-- END BLOCK : tb_fina_btn -->

  </div>

  <table class="list" width="100%">
    <thead class="border">
      <th>�Ǹ�</th>
      <th>���</th>
      <th>�~��</th>
      <th>�`��</th>
      <th>�w���e§�B���`��</th>
      <th>�|�p�O�_�f��</th>
      <th>�f�֫�e§�B���`��</th>
      <th>§�~���B�`��</th>
      <th>�s��/�d�� �Ȥ����</th>
      <th>���ɤH</th>
      <!--<th>�@�o</th>-->
    </thead>
    <tbody>
    <!-- START BLOCK : tb_list_tr -->
      <tr>
        <td>{tv_i}</td>
        <td><a href="{tv_href}">{tv_area}</a></td>
        <td>{tv_year}</td>
        <td>{tv_festival}</td>
        <td align=right>{tv_quota_total} ��</td>
        <td>{tv_fina_chk}</td>
        <td class="{tv_class}" align=right>{tv_fina_quota_total} ��</td>
        <td align=right>{tv_gift_total} ��</td>
        <td>{tv_upd}</td>
        <td>{tv_b_empno}</td>
        <!--<td class="delete">{tv_del}</td>-->
      </tr>
    <!-- END BLOCK : tb_list_tr -->
    <!-- START BLOCK : tb_list_none -->
      <tr>
        <td class="txt_center" colspan="99">�ثe�|���������ơI</td>
      </tr>
    <!-- END BLOCK : tb_list_none -->
    </tbody>
  </table>

  <!-- START BLOCK : tb_fina_set -->
  <div class="set">
    <div>
      <img class="pointer close_box" src="/~sl/img/sign-error-32.png" alt="��������" title="��������">
      <div class=box>
        <form action="{tv_action}" method="POST" name="fina_form"> 
          <input type="hidden" name="year" value="{tv_year}">
          <input type="hidden" name="festival" value="{tv_festival}">
          <table class="list fina_table" width="100%">
            <thead class="border">
              <tr><th colspan=3>{tv_year}�~{tv_festival}-�|�p�f�ְe§�B��</th></tr>
              <tr>
                <th>���</th>
                <th>�w���e§�B���`��</th>
                <th>�f���`�w��</th>
              </tr>
            </thead>
            <tbody>
              <!-- START BLOCK : tb_set_tr -->
                <tr>
                  <td>
                    {tv_area}
                    <input type="hidden" name="s_num[]" value="{tv_s_num}">
                  </td>
                  <td>{tv_quota_total} ��</td>
                  <td><input type="number" name="fina_quota_total[]" pattern="^\d+$" min="0" size="12" value="{tv_fina_quota_total}"> ��</td>
                </tr>
              <!-- END BLOCK : tb_set_tr -->

              <!-- START BLOCK : tb_set_ndata -->
                <tr><th colspan=3 class="red">�|�L���!</th></tr>
              <!-- END BLOCK : tb_set_ndata -->
            </tbody>
          </table>
          <div style="margin:10px 0;text-align:right">
            <!-- START BLOCK : tb_set_btn -->
              <button class="btn btn-ins">�T�{�ק�</button>
            <!-- END BLOCK : tb_set_btn -->
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- END BLOCK : tb_fina_set -->

<!-- END BLOCK : tb_list -->





  





