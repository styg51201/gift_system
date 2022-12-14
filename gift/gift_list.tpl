
<!-- START IGNORE -->
  <link rel="stylesheet" href="gift.css" type="text/css">

  <style>
    #div_head{
      transition: .2s;
    }
    .upd_fina.active{
      background-color:#ff5722;
      border:none;
    }
    .his{
      display:none;
      position:absolute;
      background-color:#ddd;
      max-height:200px;
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
    p.memo{
      margin:0;
      font-size:12px;
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
      padding:30px;
      background-color: #ffffff;
      border:1px solid #616161;
      border-radius:10px;
      box-shadow:2px 2px 5px #000000;
    }
    .set .close_box{
      position: absolute;
      right: 0%;
      top: 0%;
      z-index: 5;
      width: 40px;
    }
    .fina_table thead th,
    #repeat_table thead th{
      background: #126F6E;
    }
    .fina_table tbody tr{
      background: #cde3e1;
    }
    #repeat_table td{
      border-top:2px solid #fff;
      border-right:2px solid #fff;
    }
    #repeat_table tbody td{
      text-align:right;
    }
    .guest_table>caption{
      background-color:#fff;
    }
    .guest_table>caption,
    .guest_table>.n_thead,
    .guest_table>.n_tfoot{
      z-index:5;
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

    td[name=guest] img{
      width:25px;
    }

    td[name=company] img{
      width:20px;
    }



  </style>
  <!-- <script type="text/javascript" src="/~sl/jquery/jquery.autocomplete.js"></script>  -->
  <!-- ???F???t???A???????Lautocomplete?????l?X -->
  <script type="text/javascript" src="./jquery.autocomplete_V2.js"></script>

  <script>
    $(document).ready(function(){

      //?|?p?f???w????-?s???e?????????@???s
      $('.guest_table').on('click','.upd_fina',function(){

        var btn = this;
        var $th = $(btn).parent('th').prev('th[name="fina_quota_total"]');


        if( $(btn).hasClass('active') ){ //?x?s?eajax

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
                alert('?x?s???\!!');
                location.reload();
              }else{
                alert('?x?s????!!');
              }
            }
          })


        }else{ //????
          var html = "<input type='text' size='8' name='fina_quota_total' value='"+$th.children('span').text()+"'>";
          $th.children('span').html(html);
          $(btn).text('?T?w?x?s');
          $(btn).toggleClass('active');
        }
        
      })

      //?????a?}
      $('#upd_address').click(function(){

        if( !$(this).hasClass('active') ){

          var address = $(this).siblings('span').text();
          var input = '<input type="text" name="address" value="'+address+'" size="40" maxlength="50">';
          $(this).siblings('span').html(input);
          $(this).toggleClass('active');
        }

      })

      var url = new URL(document.location.href);
      var params = url.searchParams;

      //?????????????~?????A???????b?u?????X?{thead??tfoot
      if( params.get('msel') == '?'/*2*/ ){ 

        var caption_top = $('.guest_table>caption').offset().top
        var caption_h = $('.guest_table>caption').height()-1
        var thead_top = $('.guest_table>.o_thead').offset().top
        var tbody_top = $('.guest_table>tbody').offset().top
        var thead_h = $('.guest_table>.o_thead').height()
        var tfoot_top = $('.guest_table>.o_tfoot').offset().top
        var tfoot_h = $('.guest_table>.o_tfoot').height()
        

        
        //tbody??????????callback
        var event_ob = new MutationObserver(function(e){ 
  
          //???s???etfoot??????
          tfoot_top = $('.guest_table>tbody').offset().top + $('.guest_table>tbody').height()
          $(window).scroll()  //?P?_?O?_???n?]?Xthead??tfoot 

          //?e???|?]???i????input?b??????????,???H?R?????e?T?w?????Y????,?A???@???s??
          if( $('.n_thead').length > 0 ){
            $('.n_thead').remove()
            var $o_thead = $('.guest_table>thead.o_thead')
            var $n_thead = $o_thead.clone().removeClass('o_thead').addClass('n_thead').css({
              position:'fixed',
              top:caption_h,
              width:'calc(100% - 19px)',
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

        //tbody?j?w????,?????????I?scallback 
        event_ob.observe($('.guest_table>tbody')[0],{
          attributes:true,
          childList: true,
          subtree: true
        })

        $(window).scroll(function(){
          var s_top = $(this).scrollTop()
          var s_bottom = $(this).scrollTop() + $(this).height()


          //?X?{?T?w?b?W??thead
          if( s_top > caption_top && $('.guest_table>caption').css('position') != 'fixed' ){
            //?s?Wcaption??????div,?]??caption??fix??,???????????????F,???b?|???W,???Pbug
            $('.guest_table').before('<div id="div_head" style="height:'+(caption_h)+'"></div>')

            var $o_thead = $('.guest_table>thead.o_thead')
            //???s?@??thead
            var n_thead = $o_thead.clone().removeClass('o_thead').addClass('n_thead').css({
              boxSizing:'borderBox',
              position:'fixed',
              top:caption_h,
              width:'calc(100% - 19px)',
              display:'table'
            })
            n_thead.find('tr').each(function(ind,ele){ //???s??thead?????e???]?w??????thead?@??
              $(ele).find('th').each(function(i,e){
                var $old = $o_thead.find('tr').eq(ind).find('th').eq(i);
                var w = $old[0].getBoundingClientRect().width
                var padd = (+$old[0].clientWidth - +$old.width() )
                //$(e).width( w - padd )
                $(e).width( $old.width()+2 )
              })
            })

            $('.guest_table>caption').css({
              position:'fixed',
              top:0,
              width:'calc(100% - 17px)',
              display:'table'
            })
            $('.guest_table>caption').after(n_thead);

          }
          //?R???T?w?b?W??thead
          if( s_top <= (caption_top + 5) && $('.guest_table>caption').css('position') == 'fixed' ){

            $('#div_head').remove()
            $('.guest_table>caption').css({
              position:'relative',
              top:0,
              width:'100%',
              display:'revert'
            })

            $('.n_thead').remove()
          }
          //?X?{?T?w?b?U??tfoot
          if( s_bottom < (tfoot_top + (+tfoot_h)) && $('.guest_table>.n_tfoot').css('position') != 'fixed' ){

            var $o_tfoot = $('.guest_table>tfoot.o_tfoot')
            //???s?@??tfoot
            var n_tfoot = $o_tfoot.clone().removeClass('o_tfoot').addClass('n_tfoot').css({
              position:'fixed',
              bottom:0,
              width:'calc(100% - 17px)',
              display:'grid'
            })

            n_tfoot.find('tr').each(function(ind,ele){ //???s??tfoot?????e???]?w??????tfoot?@??
              $(ele).find('th').each(function(i,e){
                $(e).width( $o_tfoot.find('tr').eq(ind).find('th').eq(i).width() )
              })
            })
            $('.guest_table>tbody').after(n_tfoot)

          }
          //?R???T?w?b?U??tfoot
          if( s_bottom >= (tfoot_top + (+tfoot_h)) && $('.guest_table>.n_tfoot').css('position') == 'fixed' ){
            
            //?]??tfoot???|?p?n????input,???H??????tfoot?R??,?s???N??????,????class?W??
            //?o??input?????e?~???|????
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

        $(window).scroll() //?????X?{???A?????@???A???F?]?X????

      }

    });

  </script>
<!-- END IGNORE -->


<!-- START BLOCK : tb_link -->
  <table width="100%" border="0" cellpadding="1" cellspacing="1" class="font">
    <tr>
      <td>
        <div align="left">
            <a href="{tv_home}" >????</a>&nbsp;|&nbsp;
            <a href="{tv_list}" >?C????</a>&nbsp;|&nbsp;
            <!-- START BLOCK : tb_add -->
              <a href="{tv_add}"  >?s?W</a>&nbsp;|&nbsp;
            <!-- END BLOCK : tb_add -->

        </div>
      </td>
      <td>
      <!-- START BLOCK : tb_page -->
        <div align="right">
          <span>(????: {tv_f_page} / {tv_max_page} )</span>&nbsp;|&nbsp;
          <a href="{tv_up_page}">?W?@??</a>&nbsp;|&nbsp;
          <a href="{tv_dn_page}">?U?@??</a>&nbsp;|&nbsp;
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

<!-- START BLOCK : tb_guest_table --> 

  <!-- START BLOCK : tb_js_guest -->
    <!-- START IGNORE -->
      <script>
        $(document).ready(function(){

          //?????p????????even
          $(window).click(function(e){
            var e = e || window.event;
            var elem = e.target;
            //???????v????
            if( $('#his_com').hasClass('active') && !$(elem).is('.his_com_btn') ){
              if( !$(elem).is('#his_com') && $(elem).parents('#his_com').length == 0 ){
                $('#his_com.active').toggleClass('active');
                $('#his_com').off('.set');
              }
            }
            //?e?????H???v????
            if( $('#his_guest').hasClass('active') &&  $(document.activeElement).attr('name') != 'position[]' ){
              if( !$(elem).is('#his_guest') && $(elem).parents('#his_guest').length == 0 ){
                $('#his_guest.active').toggleClass('active');
                $('#his_guest').off('.set');
              }
            }else if( !$('#his_guest').hasClass('active') && $(document.activeElement).attr('name') == 'position[]' ){
              $(document.activeElement).focus();
            }
          


          })

          //autocomplete for ???s
          $('.guest_table').on('focus','input[name="tax_no[]"]',function(event){
            autocomplete(this);
          })

          // blur for chk ???s
          $('.guest_table').on('blur','input[name="tax_no[]"]',function(){
      
            var input = this;
            var val = $(this).val();
            var $tax_input = $(this);
            var $com_input = $(this).siblings('input[name="company[]"]');

            if( val == 'N' ){
              $com_input.attr('readonly',false);
              $com_input.attr('placeholder','');
              $(input).parent('td[name="company"]').attr('data-tax_no','N')
            }else if( val.length == 8 && /^\d+$/.test(val) && $com_input.val() != '' ){
              return; //?????????????????q?W????
            }else{
              $(input).parent('td[name="company"]').attr('data-tax_no','')
              $com_input.val('')
              $com_input.attr('readonly',true);
              $com_input.attr('placeholder','???q?W???????a?X');
            }

          })

          //???J?W?@???????v????
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
              alert('?L???v????!');
              return;
            }else if(arr.length == 0){
              alert('???????v????????!');
              return;
            }

            var tr = '';
            var num = $('.list tbody>tr').length;
            //?????e???W?w???????????s
            var arr_com = [];
            $('td[name="company"]').each(function(ind,ele){
              if( !$(ele).attr('data-tax_no') ) return true; //?S?????L
              arr_com.push( $(ele).attr('data-tax_no') );
            })

            $.each(arr,function(tax,item){
              tax = tax.split('-');
              if( arr_com.indexOf(tax[0]) > -1 )return true; //?e???w?????? ???L

              var div = '';
              $.each(item,function(ind,val){
                val = val.split('-');
                if( ind == 0 ){
                  img = '<img class="add_guest pointer" src="../picture/?[??.png" title="?s?W???H">';
                }else{
                  img = '<img class="del_guest pointer" src="../picture/????.png" title="?R??">';
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
                        '<input type="text" name="tax_no[]" placeholder="???J???s" maxlength="8" size="8" value="'+tax[0]+'">'+
                        '<input type="text" name="company[]" value="'+tax[1]+'" readonly placeholder="???q?W???????a?X">'+
                          '<img class="icon pointer his_com_btn" src="../picture/?b?Y?U.png" title="???v????????">'+
                      '</td>'+
                      '<td colspan="2" name="guest">'+div+'</td>'+
                      '<td name="avg_rev"><input type="number" name="avg_rev[]" size="10"></td>'+
                      '<td name="avg_gp"><input type="number" name="avg_gp[]" size="10"></td>'+
                      '<td name="avg_gpm"><input type="number" name="avg_gpm[]" size="10" readonly placeholder="?????a?X"> %</td>'+
                      '<td name="base_num"><input type="number" name="base_num[]" size="10" readonly  placeholder="?????a?X"></td>'+
                      '<td name="quota"><input type="number" name="quota[]" size="10" readonly placeholder="?????a?X"></td>'+
                      '<td colspan=2 name="del"><button type="button" class="del_com btn btn-cancel">?R??????</button></td>'+
                    '</tr>';

            })

            if( tr == '' ){
              alert('?W?@?????????w?g?b?e???W');
            }else{
              $('.list tbody').append(tr);
            }

          })

          //?s?W????(???q)
          $('#add_com').click(function(){
            
            var tr = '<tr>'+
                        '<td name="body_id" data-body_id="0">'+
                          '<span>'+(++$('.list tbody>tr').length)+'</span>'+
                          '<input type="hidden" name="body_id[]" value="0">'+
                        '</td>'+
                        '<td name="company">'+
                          '<input type="text" name="tax_no[]" placeholder="???J???s" maxlength="8" size="8">'+
                          '<input type="text" name="company[]" readonly placeholder="???q?W???????a?X">'+
                          '<img class="icon pointer his_com_btn" src="../picture/?b?Y?U.png" title="???v????????">'+
                          '<p class="memo">(?Y?D???????q?A???s?????JN?A?????n?????q?W??)</p>'+
                        '</td>'+
                        '<td colspan="2" name="guest">'+
                          '<div data-item_id="0">'+
                            '<input type="hidden" name="item_id[]" value="0">'+
                            '<input type="text" name="position[]" size="10">'+
                            '<input type="text" name="name[]" size="10">'+
                            /*'<img class="icon pointer his_guest_btn" src="../picture/?b?Y?U.png" title="???v????????">'+*/
                            '<img class="add_guest pointer" src="../picture/?[??.png" title="?s?W???H">'+
                        '</div></td>'+
                        '<td name="avg_rev"><input type="number" name="avg_rev[]" size="10"></td>'+
                        '<td name="avg_gp"><input type="number" name="avg_gp[]" size="10"></td>'+
                        '<td name="avg_gpm"><input type="number" name="avg_gpm[]" size="10" readonly placeholder="?????a?X"> %</td>'+
                        '<td name="base_num"><input type="number" name="base_num[]" size="10" readonly  placeholder="?????a?X"></td>'+
                        '<td name="quota"><input type="number" name="quota[]" size="10" readonly placeholder="?????a?X"></td>'+
                        '<td colspan=2 name="del"><button type="button" class="del_com btn btn-cancel">?R??????</button></td>'+
                      '</tr>';

            $('.list tbody').append(tr)
          })

          //????????(???q)
          $('.guest_table').on('click','.upd_company>img',function(){

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

            var readonly = $company.attr('data-tax_no') == 'N' ? '' : 'readonly';
            
            var str_body_id = '<input type="hidden" name="body_id[]" value="'+$body_id.attr('data-body_id')+'">',
                str_company = '<input type="text" name="tax_no[]" value="'+$company.attr('data-tax_no')+'" placeholder="???J???s" maxlength="8" size="8">'+
                              '<input type="text" name="company[]" value="'+$company.text()+'" '+readonly+' placeholder="???q?W???????a?X">'+
                              '<img class="icon pointer his_com_btn" src="../picture/?b?Y?U.png" title="???v????????">',
                str_avg_rev = '<input type="number" name="avg_rev[]" value="'+$avg_rev.text()+'" size="10">',
                str_avg_gp = '<input type="number" name="avg_gp[]" value="'+$avg_gp.text()+'" size="10">',
                str_avg_gpm = '<input type="number" name="avg_gpm[]" value="'+$avg_gpm.children('span').text()+'" size="10" readonly placeholder="?????a?X"> %',
                str_base_num = '<input type="number" name="base_num[]" value="'+$base_num.text()+'" size="10" readonly  placeholder="?????a?X" >',
                str_quota = '<input type="text" name="quota[]" size="10" value="'+$quota.text()+'" readonly placeholder="?????a?X">'
            
      
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
                img = '<img class="add_guest pointer" src="../picture/?[??.png" title="?s?W???H">';
              }else{
                img = '<img class="del_guest pointer save_id" src="../picture/????.png" title="?R??">';
              }
              var item_id = $(ele).attr('data-item_id')
              var position = $(ele).children('span').eq(0).text();
              var name = $(ele).children('span').eq(1).text();
              var str = '<input type="hidden" name="item_id[]" value="'+item_id+'">'+
                        '<input type="text" name="position[]" value="'+position+'" size="10">'+
                        '<input type="text" name="name[]" value="'+name+'" size="10">'
              $(ele).html(str+img)
            })

            

          })

          //?R??????(???q)
          $('.guest_table').on('click','.del_com>img,button.del_com',function(){

            var id = $(this).parents('tr').find('td[name="body_id"]').attr('data-body_id')
            if( id != 0 ){ //s_num?s?_??,?e???????@?o,????0?????O?s?W(???S?iDB??)
              var del_id = $('input[name="del_company"]').val();
              $('input[name="del_company"]').val( del_id+','+id );
            }

            $(this).parents('tr').remove()
            //???????s???C
            $('.guest_table tbody>tr').each(function(ind,el){
              $(el).find('td:eq(0)>span').html(ind+1)
            })

            cnt_quota() //?X?p?e???B??

          })

          //?s?W?e?????H
          $('.guest_table').on('click','.add_guest',function(){
            var div = '<div data-item_id="0">'+
                        '<input type="hidden" name="item_id[]" value="0">'+
                        '<input type="text" name="position[]" size="10">'+
                        '<input type="text" name="name[]" size="10">'+
                        /*'<img class="icon pointer his_guest_btn" src="../picture/?b?Y?U.png" title="???v????????">'+*/
                        '<img class="del_guest pointer" src="../picture/????.png" title="?R??">'+
                      '</div>';
            $(this).parents('td').append(div)
          })

          //?R???e?????H
          $('.guest_table').on('click','.del_guest',function(){

            var id = $(this).parent('div').attr('data-item_id');
            if( id != 0 ){ //s_num?s?_??,?e???????@?o,????0?????O?s?W(???S?iDB??)
              var del_id = $('input[name="del_item"]').val();
              $('input[name="del_item"]').val( del_id+','+id );
            }

            $(this).parent('div').remove()
          })

          //????(???q)???v????
          $('.guest_table').on('click','.his_com_btn',function(){

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
              chk_same_com() //?P?_?????O?_??????
            }

            set_his('#his_com',css_obj,select_fun)
            

          })

          //????,?m?W ???v????
          $('.guest_table').on('focus','input[name="position[]"]',function(){

            if( $('#his_guest').hasClass('active') ){
              $('#his_guest').toggleClass('active');
              $('#his_guest').off('.set');
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

          //????,?m?W ???v???? keyin?? ????????
          $('.guest_table').on('input','input[name="position[]"]',function(){

            if( $('#his_guest').hasClass('active') && $(this).val() != '' ){ //?????v????

              $('#his_guest.active').toggleClass('active')
              $('#his_guest').off('.set');

            }else if( !$('#his_guest').hasClass('active') &&  $(this).val() == '' ){
              $(this).focus();

            }

          })

          //???X???Q?v?B?????B?e???B??
          $('.guest_table').on('blur','input[name="avg_rev[]"],input[name="avg_gp[]"]',function(){

            var s_num = $('input[name="s_num"]').val();
            var avg_rev = $(this).parents('tr').find('input[name="avg_rev[]"]').val();
            var avg_gp = $(this).parents('tr').find('input[name="avg_gp[]"]').val();
            var base_rev = $('th[data-base_rev]').attr('data-base_rev');
            var base_gp = $('th[data-base_gp]').attr('data-base_gp');
            var reg = /^\d+(\.?\d+)?$/;

            if( !reg.test(avg_rev) || !reg.test(avg_gp)  ){
              $(this).parents('tr').find('input[name="avg_gpm[]"]').val('');
              $(this).parents('tr').find('input[name="base_num[]"]').val('');
              $(this).parents('tr').find('input[name="quota[]"]').val('');
              return;
            }


            if( avg_rev == 0 ){ //?L?~?Z=?????A??$('#min_quota')????
              $(this).parents('tr').find('input[name="avg_gpm[]"]').val(0);
              $(this).parents('tr').find('input[name="base_num[]"]').val(0);
              $(this).parents('tr').find('input[name="quota[]"]').val( $('#min_quota').text() )

            }else{
              //???????Q?v = ???????Q / ?????????? *100 ???p???I2??
              var avg_gpm = (avg_gp/avg_rev*100).toFixed(2);
              $(this).parents('tr').find('input[name="avg_gpm[]"]').val(avg_gpm);

              //???? = ????20%+???Q80% ( 20?P80 ????DB???]?w??,?i???|??????,?G?b?{???????g?? ) ???p???I1??
              var base_num = ( (avg_rev*base_rev/100) + (avg_gp*base_gp/100) ).toFixed(1);
              $(this).parents('tr').find('input[name="base_num[]"]').val(base_num);
              
              //???o?B?? 
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
                    alert('?e???B?????o????!')
                  }
                }
              })

            }
            
            cnt_quota() //?X?p?e???B??


          })

          //?????e?X
          $('.submit').click(function(){

            //?P?_?????O?_??????
            if( chk_same_com() ) return false;
            
            //?P?_?O?_??????????
            var bool = false;
            $('form[name="body_form"] input:not(input[type=hidden])').each(function(ind,ele){
              if( $(ele).val() == '' ){
                bool = true;
                alert('?????d????!');
                $(ele).focus();
                return false; //???X?j??
              }
            })
            if( bool ) return false;

            //?T?{?O?_?? ???P????,???O?????P??????(???q)
            if( $('input[name="tax_no[]"]').length > 0 ){
              var tax_no = '';
              $('input[name="tax_no[]"]').each(function(ind,ele){
                if( $(ele).val() == 'N' ) return; //?S???s???????? ???L
                tax_no += ',' + $(ele).val();
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
                    if(data != 'N'){
                      arr = JSON.parse(data)
                    }
                  }
              })
              if( arr.length > 0 ){
                var str = '';
                arr.forEach(function(item,ind){
                  str += item+'-'+$('td[data-tax_no="'+item+'"] input[name="company[]"]').val()+'\n';
                })
                str += '\n?H?W?????A?b?O???????w???????A?O?_?T?w?n?~???s?W?';
                if( !confirm(str) ) return false;
              }
              
            }

            //???? ????,?m?W??name => ?e???[?W???s???y????,??????
            if( $('input[name="tax_no[]"]').length > 0 ){

              $('.list>tbody>tr').each(function(ind,ele){
                var tax_no
                if( $(ele).find('input[name="tax_no[]"]').length == 0 ){
                  return; // == continue
                }else{
                  tax_no = $(ele).find('input[name="tax_no[]"]').val(); 
                  tax_no = tax_no+'_'+ind; //?[?W????
                  
                  $(ele).find('input[name="tax_no[]"]').val( tax_no ) //?????^?h
                }

                $(ele).find('input[name="item_id[]"]').attr('name',tax_no+'_item_id[]');
                $(ele).find('input[name="position[]"]').attr('name',tax_no+'_position[]');
                $(ele).find('input[name="name[]"]').attr('name',tax_no+'_name[]');

              })
            }


            $('form[name="body_form"]').submit();

          })
        
        });

        //autocomplete
        function autocomplete(input){

          //???@??focus?N?w?j?wautocomplete?A???F???????j?w?????????P?_
          var $event = $._data(input).events
          if( $event && $event['keydown'] ){
            return;
          }
          $(input).autocomplete(
            "gift_list.php",
            { extraParams:{ ajax_get:'ajax_get_com',rownum:20 },
              resultsClass:'ac_results ac_box',
              delay:300, 
              width:250,
              minChars:1,
              maxItemsToShow:20,
              selectFirst:false,
              cacheLength:0,
              onItemSelect:function(str){
                chk_com(str,input)
              } } 
          );
        }

        //???s autocomplete blur ???^???????B?z
        function chk_com(str,input) {
          if( typeof str == 'string'){ //blur???^???????A??str=>1234567-?LXX 
            str = str.split('-');
          }else{
            str = str.innerText.split('-'); //autocomplete?^???????A??obj=>li????
          }

          if( str[0].length != 8 || !/^\d+$/.test(str[0])){
            $(input).val(str[0]);
            alert('???@?s?????J???~');
            return;
          }
         
     
          $(input).parent('td[name="company"]').attr('data-tax_no',str[0])
          $(input).val(str[0]);
          $(input).siblings('input[name="company[]"]').val(str[1])

          chk_same_com() //?P?_?????O?_??????

        }

        //???v???????????B?z
        function set_his(id,css_obj,select_fun){
          $(id).css(css_obj)

          /*if( $(id).hasClass('active') ){
            $(id).toggleClass('active');
            $(id).off('.set');
            return;
          }*/

          $(id).toggleClass('active');

          $(id).on('click.set','li',function(){
            select_fun(this)
            $(id).toggleClass('active');
            $(id).off('.set');
          })

        }

        //?P?_?????O?_??????
        function chk_same_com(){
          var arr_ele = []; //????????arr
          var bool = false;

          $('td[name="company"]').each(function(ind,ele){
            if( !$(ele).attr('data-tax_no') ) return true; //?S?????L
            if( $(ele).attr('data-tax_no') == 'N' ) return true; //?S???s???????? ???L

            //???o???q?W
            var cname = $(ele).find('input[name="company[]"]').length > 0 ?
                        $(ele).find('input[name="company[]"]').val() : 
                        $(ele).text();
            
            //?h??????????arr?????S???????? array.find => ???????????^??????,?????^??undefined
            var same_ele = arr_ele.find(function(o_ele){
              //???o???q?W
              var cname2 = $(o_ele).find('input[name="company[]"]').length > 0 ?
                          $(o_ele).find('input[name="company[]"]').val() : 
                          $(o_ele).text();

              //?^?????s?????q?W?????P????
              return ( $(ele).attr('data-tax_no') == $(o_ele).attr('data-tax_no') && cname == cname2 ) 
            })

            if( same_ele !== undefined ){ 
              bool = true;
              var ind_2 = $('.guest_table td[name="company"]').index(same_ele)
              alert('???? ('+(ind_2+1)+') , ('+(ind+1)+')?u'+cname+'?v'+'???????A???X?b?@?_!!');
              //??????????????
              $(ele).css('border','2px solid red');
              $(same_ele).css('border','2px solid red');
              //5???? ?????^??????
              window.setTimeout(function(){
                $(ele).css('border','none');
                $(same_ele).css('border','none');
              },5000)
              return false; //???Xeach?j??
            }else{
              arr_ele.push(ele) //?S?????????P?????h???i??????arr??
            }

          })

          return bool;

        }

        //?X?p?e???B??
        function cnt_quota(){
          var cnt = 0
          $('td[name="quota"]').each(function(ind,ele){
            cnt += +($(ele).text());
          })
          $('input[name="quota[]"]').each(function(ind,ele){
            cnt += +($(ele).val());
          })
          $('th[name="quota_total"]').html(cnt+' ??');
        }

      </script>
    <!-- END IGNORE -->
  <!-- END BLOCK : tb_js_guest -->

  <!-- START BLOCK : tb_js_gift -->
    <!-- START IGNORE -->
      <script>
        $(document).ready(function(){
          
          //???~???????A???X???~?????B?`???B
          $('.guest_table').on('change','select[name="gift_s_num[]"]',function(){

            var $tr = $(this).parents('tr');
            var ind = $tr.find('select[name="gift_s_num[]"]').index($(this))
            var $op = $(this).find('option:selected');
            $tr.find('input[name="gift_price[]"]').eq(ind).val( $op.attr('data-price') );

            $($tr).find('input[name="gift_cnt[]"]').eq(ind).trigger('change'); //???o???? => ???`???B

          })

          //???~???q???A???X?`???B
          $('.guest_table').on('change','input[name="gift_cnt[]"]',function(){

            var cnt = $(this).val();
            var reg = /^\d+$/;
            var $tr = $(this).parents('tr');
            var ind = $tr.find('input[name="gift_cnt[]"]').index($(this))

            if( cnt == ''){ //?????????T->?k0
              $(this).val(0);
              $tr.find('input[name="gift_price_total[]"]').eq(ind).val('0');
            }else if( !reg.test(cnt) ){//?????????T->?k0
              alert('?????g??????');
              $tr.find('input[name="gift_price_total[]"]').eq(ind).val('0');
            }else{
              var price = $tr.find('input[name="gift_price[]"]').eq(ind).val();
              var item_total = cnt * price;
              $tr.find('input[name="gift_price_total[]"]').eq(ind).val( item_total );
              cnt_gift_total()
            }

            var total = +$('th[name="gift_total"]>span').html();
            var fina_total = +$('th[name="fina_quota_total"]').attr('data-fina');
            if( total > fina_total ){ //?W?L?w??->?k0
              $(this).val(0);
              $tr.find('input[name="gift_price_total[]"]').eq(ind).val(0);
              alert('???~?`???B?X?p?A?????W?L ?|?p?f???`?w?? !!');
              cnt_gift_total()
            }
            
          })

          //?n??????,confirm
          $('.guest_table').on('click','#all_done',function(){

            if( confirm('?e?X???A???i?A???????????A?O?_?~???e?X?H') ){

              $('form[name="body_form"]').append('<input type="hidden" name="all_done" value="Y">');
              $('.submit').click();

            }

          })

          //?????e?X
          $('.submit').click(function(){

            //?P?_?O?_??????????
            var bool = false;
            $('form[name="body_form"] select[name="gift_s_num[]"]').each(function(ind,ele){
              if( $(ele).val() == '' ){
                bool = true;
                alert('?????????~!!');
                $(ele).focus();
                return false; //???X?j??
              }
            })
            if( bool ){
              $('form[name="body_form"] input[name="all_done"]').remove();
              return false;
            }
            //?P?_ ???q?????B ?O?_??0
            $('form[name="body_form"] input:not(input[type=hidden])').each(function(ind,ele){
              if( $(ele).val() == '0' ){
                bool = true;
                alert('?????J???T?????q!!');
                $(ele).focus();
                return false; //???X?j??
              }
            })
            if( bool ){
              $('form[name="body_form"] input[name="all_done"]').remove();
              return false;
            }

            //?P?_???B?O?_?W?L?w??
            if( +$('th[name="gift_total"]>span').html() > +$('th[name="fina_quota_total"]').attr('data-fina') ){
              alert('???~?`???B?X?p?A?????W?L ?|?p?f???`?w?? !!');
              $('form[name="body_form"] input[name="all_done"]').remove();
              return false;
            }

            $('form[name="body_form"]').submit();

          })

        });

        function cnt_gift_total(){
          //???s?p???`???B???X?p
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
      <table class="list left guest_table" width="100%" style="position:relative">
        <caption>
          <div style="font-size:20px">
            {tv_year}?~{tv_festival}?w?p???????H?W??
            <input type="hidden" name="s_num" value="{tv_s_num}">
          </div>
          <div class="flex" style="justify-content:space-between;align-items: flex-end;margin-top:10px">
            <div>
              ???? : {tv_area}
            </div>
            <div>
              ?p?????f : {tv_b_name}
            </div>
            <div>
              ?a?} : <span>{tv_address}</span>
              <!-- START BLOCK : tb_upd_address -->
                <img id="upd_address" class="pointer" src="../picture/????.png" alt="?????a?}" title="?????a?}">
              <!-- END BLOCK : tb_upd_address -->
            </div>
            <div>
              <!-- START BLOCK : tb_btn_add -->
                <button class="btn btn-red btn-m" type="button" id="add_com">?s?W????</button>
                <button class="btn btn-red btn-m" type="button" id="his_com_btn">???J?W?@????????</button>
              <!-- END BLOCK : tb_btn_add -->
              <!-- START BLOCK : tb_btn_alldone -->
                <button class="btn btn-l btn-red" type="button" id="all_done">?n???????A???A??????</button>
              <!-- END BLOCK : tb_btn_alldone -->
            </div>
            <div>
              <!-- START BLOCK : tb_btn_submit -->
                <input class="btn btn-ins btn-l submit" type="button" value="?T?w?x?s">
              <!-- END BLOCK : tb_btn_submit -->
            </div>
          </div>
          <input type="hidden" name="del_company">
          <input type="hidden" name="del_item">
          <p id="min_quota" style="display:none">{tv_min_quota}</p>
        </caption>
        <thead class="border o_thead">
          <tr>
            <th rowspan=2 style="width: 3%">????</th>
            <th rowspan=2  style="min-width:70px">?????W??</th>
            <th colspan=2 style="min-width:130px">?e?????H</th>
            <th colspan=3>???? : ?U??</th>
            <th>????</th>
            <th rowspan=2>?e???B??(??)</th>
            <!-- START BLOCK : tb_th_guest -->
              <th rowspan=2 style="width: 4%">????</th>
              <th rowspan=2 style="width: 4%">?@?o</th>
            <!-- END BLOCK : tb_th_guest -->
            <!-- START BLOCK : tb_th_gift -->
              <th rowspan=2>???~</th>
              <th rowspan=2>???~????(??)</th>
              <th rowspan=2>???~???q(??)</th>
              <th rowspan=2>???~?`???B(??)</th>
            <!-- END BLOCK : tb_th_gift -->
          </tr>
          <tr>
            <th>????</th>
            <th>?m?W</th>
            <th>??????????</th>
            <th>???????Q</th>
            <th>???????Q?v</th>
            <th data-base_rev='{tv_base_rev}' data-base_gp='{tv_base_gp}'>????{tv_base_rev}% + ???Q{tv_base_gp}%</th>
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
                      <input type="text" name="gift_price[]" size="10" value="{tv_gift_price}" readonly placeholder="?????a?X">
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
                      <input type="text" name="gift_price_total[]" size="10" value="{tv_gift_price_total}" readonly placeholder="?????a?X">
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
            <th colspan=8 align=right>?X?p: </th>
            <th name="quota_total">{tv_quota_total} ??</th>
            <th colspan=2></th>
            <!-- START BLOCK : tb_tfoot_gift -->
              <th>?X?p: </th>
              <th name="gift_total"><span>{tv_gift_total}</span> ??</th>
            <!-- END BLOCK : tb_tfoot_gift -->
          </tr>
            <tr>
              <th colspan=8 align=right>?|?p?f???`?w??: </th>
              <th name="fina_quota_total" data-fina="{tv_fina_quota_total}">
                <span>{tv_fina_quota_total}</span> ??
              </th>
              <th style="text-align:left" colspan=2>
              <!-- START BLOCK : tb_guest_fina_btn -->
                <button type="button" class="btn btn-s btn-ins upd_fina">?????w??</button>
              <!-- END BLOCK : tb_guest_fina_btn -->
              </th>
              <!-- START BLOCK : tb_tfoot_gift2 -->
                <th colspan=2></th>
              <!-- END BLOCK : tb_tfoot_gift2 -->
            </tr>
        </tfoot>
      </table>
    </form>

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

  </div>

<!-- END BLOCK : tb_guest_table -->




<!-- START BLOCK : tb_insert -->
  <script>
    $(document).ready(function(){
      
      //?a?}????
      $('select[name="area_s_num"]').change(function(){
        var address = $(this).find('option:selected').attr('data-address');
        $('input[name="address"]').val(address);
      })

      //?????e?X
      $('form[name="insert_form"]').submit(function(){

        var area = $('select[name="area_s_num"]').val();
        if( $.trim(area).length == 0  ){
          alert('??????????!!');
          return false;
        }

        var year = $('select[name="year"]').val();
        if( $.trim(year).length == 0 ){
          alert('???????~??!!');
          return false;
        }

        var festival = $('select[name="festival"]').val();
        if( $.trim(festival).length == 0  ){
          alert('???????`??!!');
          return false;
        }

        var address = $('input[name="address"]').val();
        if( $.trim(address).length == 0  ){
          alert('?a?}???J???~!!');
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
          alert('?y'+area+'?z'+$.trim(year)+'?~'+$.trim(festival)+'?A?w?g?????????F?A???i?????s?W!');
          return false;
        }

      })

    });

    

  </script>
  <form  action="{tv_action}" method="POST" enctype="multipart/form-data" name="insert_form">
    <table class="data" width="100%">
    <tr>
      <th colspan=2 class="caption">?s?W</th>
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
          <input class="btn btn-m btn-ins" type="submit" value="?e?X">
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

      //?|?p??????????-?}??&????
      $('#fina_set,.fina_set').click(function(even){

        if( even.target == $('.fina_set')[0] || even.target == $('#fina_set')[0] || $(even.target).hasClass('close_box') ){
          $('.fina_set').toggleClass('active');
        }

      })

      //?????W????????-?}??&????
      $('#repeat_set,.repeat_set').click(function(even){ 

        if( even.target == $('.repeat_set')[0] || even.target == $('#repeat_set')[0] || $(even.target).hasClass('close_box') ){
          $('.repeat_set').toggleClass('active');
        }

      })

      //?????W????css????
      if( $('#repeat_table tr').length > 1 ){

        $('#repeat_table td[name="area"]').each(function(ind,ele){
          $(ele).css('border-top','2px solid #000');
          $(ele).siblings('td:not([name="tax_no"])').css('border-top','2px solid #000');
        })

      }


      $('.delete').click(function(){
        if( !confirm('?T?w?@?o?????????') ){
          return false;
        }
      })
    });
  </script>
  <div class="div" style="padding:5px 0;">
    ?j?M???? ->  
    <!-- START BLOCK : tb_select -->
      <select name="{tv_name}" >
        <!-- START BLOCK : tb_option -->
          <option  value="{tv_value}" {tv_selected}>{tv_show}</option>
        <!-- END BLOCK : tb_option -->
      </select> {tv_text}
    <!-- END BLOCK : tb_select -->

    <!-- START BLOCK : tb_fina_btn -->
      <button type="button" id="fina_set" class="btn btn-m btn-red" style="margin-left:15px" >?|?p?s??</button>
    <!-- END BLOCK : tb_fina_btn -->

    <!-- START BLOCK : tb_repeat_btn -->
      <button type="button" id="repeat_set" class="btn btn-m btn-red" style="margin-left:15px" >?d???????W??</button>
    <!-- END BLOCK : tb_repeat_btn -->

  </div>

  <table class="list" width="100%">
    <thead class="border">
      <th>????</th>
      <th>????</th>
      <th>?~??</th>
      <th>?`??</th>
      <th>?w???e???B???`??</th>
      <th>?|?p?O?_?f??</th>
      <th>?f?????e???B???`??</th>
      <th>???~???B?`??</th>
      <th>?s??/?d?? ????????</th>
      <th>?????H</th>
      <!--<th>?@?o</th>-->
    </thead>
    <tbody>
    <!-- START BLOCK : tb_list_tr -->
      <tr>
        <td>{tv_i}</td>
        <td><a href="{tv_href}">{tv_area}</a></td>
        <td>{tv_year}</td>
        <td>{tv_festival}</td>
        <td align=right>{tv_quota_total} ??</td>
        <td>{tv_fina_chk}</td>
        <td class="{tv_class}" align=right>{tv_fina_quota_total} ??</td>
        <td align=right>{tv_gift_total} ??</td>
        <td>{tv_upd}</td>
        <td>{tv_b_empno}</td>
        <!--<td class="delete">{tv_del}</td>-->
      </tr>
    <!-- END BLOCK : tb_list_tr -->
    <!-- START BLOCK : tb_list_none -->
      <tr>
        <td class="txt_center" colspan="99">???e?|?????????????I</td>
      </tr>
    <!-- END BLOCK : tb_list_none -->
    </tbody>
  </table>

  <!-- START BLOCK : tb_fina_set -->
  <div class="set fina_set">
    <div>
      <div class="box">
        <img class="pointer close_box" src="../picture/????.png" alt="????????" title="????????">
        <form action="{tv_action}" method="POST" name="fina_form"> 
          <input type="hidden" name="year" value="{tv_year}">
          <input type="hidden" name="festival" value="{tv_festival}">
          <table class="list fina_table" width="100%">
            <thead class="border">
              <tr><th colspan=3>{tv_year}?~{tv_festival}-?|?p?f???e???B??</th></tr>
              <tr>
                <th>????</th>
                <th>?w???e???B???`??</th>
                <th>?f???`?w??</th>
              </tr>
            </thead>
            <tbody>
              <!-- START BLOCK : tb_set_tr -->
                <tr>
                  <td>
                    {tv_area}
                    <input type="hidden" name="s_num[]" value="{tv_s_num}">
                  </td>
                  <td>{tv_quota_total} ??</td>
                  <td><input type="number" name="fina_quota_total[]" pattern="^\d+$" min="0" size="12" value="{tv_fina_quota_total}"> ??</td>
                </tr>
              <!-- END BLOCK : tb_set_tr -->

              <!-- START BLOCK : tb_set_ndata -->
                <tr><th colspan=3 class="red">?|?L????!</th></tr>
              <!-- END BLOCK : tb_set_ndata -->
            </tbody>
          </table>
          <div style="margin:10px 0;text-align:right">
            <!-- START BLOCK : tb_set_btn -->
              <button class="btn btn-ins">?T?{????</button>
            <!-- END BLOCK : tb_set_btn -->
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- END BLOCK : tb_fina_set -->

  <!-- START BLOCK : tb_repeat -->
  <div class="set repeat_set">
    <div>
      <div class="box">
        <img class="pointer close_box" src="../picture/????.png" alt="????????" title="????????">
        <table class="list" id="repeat_table" width="100%">
          <caption>{tv_year}?~{tv_festival}?w?p???????H?????W??</caption>
          <thead class="border">
            <tr>
              <th rowspan=2>???s</th>
              <th rowspan=2>???q?W??</th>
              <th colspan=2>???????H</th>
              <th rowspan=2>????????</th>
            </tr>
            <tr>
              <th>????</th>
              <th>?m?W</th>
            </tr>
          </thead>
          <tbody>
           <!-- START BLOCK : tb_repeat_tr -->
              <tr style="background-color:{tv_color}">
                {tv_tr}
              </tr>
            <!-- END BLOCK : tb_repeat_tr -->

            <!-- START BLOCK : tb_repeat_none -->
              <tr><th colspan="6" class="red">?|?L????!</th></tr>
            <!-- END BLOCK : tb_repeat_none -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- END BLOCK : tb_repeat -->

<!-- END BLOCK : tb_list -->





  





