
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

      //會計審核預算用-編輯畫面裡的單一按鈕
      j183('.guest_table').on('click','.upd_fina',function(){

        var btn = this;
        var $th = $(btn).parent('th').prev('th[name="fina_quota_total"]');


        if( $(btn).hasClass('active') ){ //儲存送ajax

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
                alert('儲存成功!!');
                location.reload();
              }else{
                alert('儲存失敗!!');
              }
            }
          })


        }else{ //修改
          var html = "<input type='text' size='8' name='fina_quota_total' value='"+$th.children('span').text()+"'>";
          $th.children('span').html(html);
          $(btn).text('確定儲存');
          $(btn).toggleClass('active');
        }
        
      })

      //修改地址
      $('#upd_address').click(function(){

        if( !$(this).hasClass('active') ){

          var address = $(this).siblings('span').text();
          var input = '<input type="text" name="address" value="'+address+'" size="40" maxlength="50">';
          $(this).siblings('span').html(input);
          $(this).toggleClass('active');
        }

      })

      //會計修改的視窗-開啟&關閉
      $('#fina_set,.set').click(function(even){

        if( even.target == $('.set')[0] || even.target == $('#fina_set')[0] || even.target == $('.close_box')[0]){
          $('.set').toggleClass('active');
        }

      })

      var url = new URL(document.location.href);
      var params = url.searchParams;

      //明細表頁面時才執行，關於卷軸滾動時出現thead跟tfoot
      if( params.get('msel') == '2' ){ 

        var caption_top = $('.guest_table>caption').offset().top
        var caption_h = $('.guest_table>caption').height()-1
        var thead_top = $('.guest_table>thead').offset().top
        var thead_h = $('.guest_table>thead').height()
        var tfoot_top = $('.guest_table>tfoot').offset().top
        var tfoot_h = $('.guest_table>tfoot').height()
        
        //tbody有變動時的callback
        var event_ob = new MutationObserver(function(e){ 
  
          //更新目前tfoot的高度
          tfoot_top = $('.guest_table>tbody').offset().top + $('.guest_table>tbody').height()
          $(window).scroll()  //判斷是否需要跑出thead或tfoot 

          //寬度會因為可能有input在而有所改變,所以刪掉目前固定的表頭表尾,再建一個新的
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

        //tbody綁定事件,有變動時呼叫callback 
        event_ob.observe($('.guest_table>tbody')[0],{
          attributes:true,
          childList: true,
          subtree: true
        })

        $(window).scroll(function(){
          var s_top = $(this).scrollTop()
          var s_bottom = $(this).scrollTop() + $(this).height()

          //出現固定在上方thead
          if( s_top > caption_top && $('.guest_table>caption').css('position') != 'fixed' ){
            //新增caption高度的div,因為caption變fix時,佔據的空間消失了,卷軸會往上,導致bug
            $('.guest_table').before('<div id="div_head" style="height:'+(caption_h)+'"></div>')
            
            var $o_thead = $('.guest_table>thead.o_thead')
            //複製一個thead
            var n_thead = $o_thead.clone().removeClass('o_thead').addClass('n_thead').css({
              position:'fixed',
              top:caption_h,
              width:'calc(100% - 17px)',
              display:'table'
            })
            n_thead.find('tr').each(function(ind,ele){ //把新的thead裡面寬度設定跟舊的thead一樣
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
          //刪除固定在上方thead
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
          //出現固定在下方tfoot
          if( s_bottom < (tfoot_top + (+tfoot_h)) && $('.guest_table>.n_tfoot').css('position') != 'fixed' ){

            var $o_tfoot = $('.guest_table>tfoot.o_tfoot')
            //複製一個tfoot
            var n_tfoot = $o_tfoot.clone().removeClass('o_tfoot').addClass('n_tfoot').css({
              position:'fixed',
              bottom:0,
              width:'calc(100% - 17px)',
              display:'grid'
            })

            n_tfoot.find('tr').each(function(ind,ele){ //把新的tfoot裡面寬度設定跟舊的tfoot一樣
              $(ele).find('th').each(function(i,e){
                $(e).width( $o_tfoot.find('tr').eq(ind).find('th').eq(i).width() )
              })
            })
            $('.guest_table>tbody').after(n_tfoot)

          }
          //刪除固定在下方tfoot
          if( s_bottom >= (tfoot_top + (+tfoot_h)) && $('.guest_table>.n_tfoot').css('position') == 'fixed' ){
            
            //因為tfoot有會計登打的input,所以把舊的tfoot刪掉,新的代替舊的,更改class名稱
            //這樣input的內容才不會消失
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

        $(window).scroll() //頁面出現時，執行一次，為了跑出表尾
      }

    
    });

  </script>
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


<!-- START BLOCK : tb_guest_table --> 

  <!-- START BLOCK : tb_js_guest -->
    <!-- START IGNORE -->
      <script>
        $(document).ready(function(){

          //關閉小視窗用的even
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

          //autocomplete for 統編
          j183('.guest_table').on('focus','input[name="tax_no[]"]',function(event){
            autocomplete(this);
          })

          // blur for chk 統編
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
                    alert('編號錯誤，沒有匹配的客戶');
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

          //匯入上一次的歷史資料
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
              alert('無歷史紀錄!');
              return;
            }else if(arr.length == 0){
              alert('讀取歷史紀錄失敗!');
              return;
            }

            var tr = '';
            var num = $('.list tbody>tr').length;
            //收集畫面上已有的客戶統編
            var arr_com = [];
            $('td[name="company"]').each(function(ind,ele){
              if( !$(ele).attr('data-tax_no') ) return true; //沒值跳過
              arr_com.push( $(ele).attr('data-tax_no') );
            })

            $.each(arr,function(tax,item){
              tax = tax.split('-');
              if( arr_com.indexOf(tax[0]) > -1 )return true; //畫面已有客戶 跳過

              var div = '';
              $.each(item,function(ind,val){
                val = val.split('-');
                if( ind == 0 ){
                  img = '<img class="add_guest pointer" src="/~sl/img/plus.png" title="新增對象">';
                }else{
                  img = '<img class="del_guest pointer" src="/~sl/img/minus.png" title="刪除">';
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
                        '<input type="text" name="tax_no[]" placeholder="請輸入統編" maxlength="8" size="10" value="'+tax[0]+'">'+
                        '<input type="text" name="company[]" value="'+tax[1]+'" readonly placeholder="公司名稱自動帶出">'+
                          '<img class="icon pointer his_com_btn" src="/~sl/img/arrow-down.svg" title="歷史紀錄選單">'+
                      '</td>'+
                      '<td colspan="2" name="guest">'+div+'</td>'+
                      '<td name="avg_rev"><input type="text" name="avg_rev[]" size="10"></td>'+
                      '<td name="avg_gp"><input type="text" name="avg_gp[]" size="10"></td>'+
                      '<td name="avg_gpm"><input type="text" name="avg_gpm[]" size="10" readonly placeholder="自動帶出"> %</td>'+
                      '<td name="base_num"><input type="text" name="base_num[]" size="10" readonly  placeholder="自動帶出"></td>'+
                      '<td name="quota"><input type="text" name="quota[]" size="10" readonly placeholder="自動帶出"></td>'+
                      '<td colspan=2 name="del"><button type="button" class="del_com btn btn-cancel">刪除此行</button></td>'+
                    '</tr>';

            })

            if( tr == '' ){
              alert('上一次客戶皆已經在畫面上');
            }else{
              $('.list tbody').append(tr);
            }

          })

          //新增客戶(公司)
          $('#add_com').click(function(){
            
            var tr = '<tr>'+
                        '<td name="body_id" data-body_id="0">'+
                          '<span>'+(++$('.list tbody>tr').length)+'</span>'+
                          '<input type="hidden" name="body_id[]" value="0">'+
                        '</td>'+
                        '<td name="company">'+
                          '<input type="text" name="tax_no[]" placeholder="請輸入統編" maxlength="8" size="10">'+
                          '<input type="text" name="company[]" readonly placeholder="公司名稱自動帶出">'+
                          '<img class="icon pointer his_com_btn" src="/~sl/img/arrow-down.svg" title="歷史紀錄選單">'+
                        '</td>'+
                        '<td colspan="2" name="guest">'+
                          '<div data-item_id="0">'+
                            '<input type="hidden" name="item_id[]" value="0">'+
                            '<input type="text" name="position[]" size="10">'+
                            '<input type="text" name="name[]" size="10">'+
                            /*'<img class="icon pointer his_guest_btn" src="/~sl/img/arrow-down.svg" title="歷史紀錄選單">'+*/
                            '<img class="add_guest pointer" src="/~sl/img/plus.png" title="新增對象">'+
                        '</div></td>'+
                        '<td name="avg_rev"><input type="text" name="avg_rev[]" size="10"></td>'+
                        '<td name="avg_gp"><input type="text" name="avg_gp[]" size="10"></td>'+
                        '<td name="avg_gpm"><input type="text" name="avg_gpm[]" size="10" readonly placeholder="自動帶出"> %</td>'+
                        '<td name="base_num"><input type="text" name="base_num[]" size="10" readonly  placeholder="自動帶出"></td>'+
                        '<td name="quota"><input type="text" name="quota[]" size="10" readonly placeholder="自動帶出"></td>'+
                        '<td colspan=2 name="del"><button type="button" class="del_com btn btn-cancel">刪除此行</button></td>'+
                      '</tr>';

            $('.list tbody').append(tr)
          })

          //修改客戶(公司)
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
                str_company = '<input type="text" name="tax_no[]" value="'+$company.attr('data-tax_no')+'" placeholder="請輸入統編" maxlength="8" size="10">'+
                              '<input type="text" name="company[]" value="'+$company.text()+'" readonly placeholder="公司名稱自動帶出">'+
                              '<img class="icon pointer his_com_btn" src="/~sl/img/arrow-down.svg" title="歷史紀錄選單">',
                str_avg_rev = '<input type="text" name="avg_rev[]" value="'+$avg_rev.text()+'" size="10">',
                str_avg_gp = '<input type="text" name="avg_gp[]" value="'+$avg_gp.text()+'" size="10">',
                str_avg_gpm = '<input type="text" name="avg_gpm[]" value="'+$avg_gpm.children('span').text()+'" size="10" readonly placeholder="自動帶出"> %',
                str_base_num = '<input type="text" name="base_num[]" value="'+$base_num.text()+'" size="10" readonly  placeholder="自動帶出" >',
                str_quota = '<input type="text" name="quota[]" size="10" value="'+$quota.text()+'" readonly placeholder="自動帶出">'
            
      
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
                img = '<img class="add_guest pointer" src="/~sl/img/plus.png" title="新增對象">';
              }else{
                img = '<img class="del_guest pointer save_id" src="/~sl/img/minus.png" title="刪除">';
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

          //刪除客戶(公司)
          j183('.guest_table').on('click','.del_com>img,button.del_com',function(){

            var id = $(this).parents('tr').find('td[name="body_id"]').attr('data-body_id')
            if( id != 0 ){ //s_num存起來,送到後端作廢,等於0的話是新增(還沒進DB的)
              var del_id = $('input[name="del_company"]').val();
              $('input[name="del_company"]').val( del_id+','+id );
            }

            $(this).parents('tr').remove()
            //序號重新排列
            $('.guest_table tbody>tr').each(function(ind,el){
              $(el).find('td:eq(0)>span').html(ind+1)
            })

            cnt_quota() //合計送禮額度

          })

          //新增送禮對象
          j183('.guest_table').on('click','.add_guest',function(){
            var div = '<div data-item_id="0">'+
                        '<input type="hidden" name="item_id[]" value="0">'+
                        '<input type="text" name="position[]" size="15">'+
                        '<input type="text" name="name[]" size="15">'+
                        /*'<img class="icon pointer his_guest_btn" src="/~sl/img/arrow-down.svg" title="歷史紀錄選單">'+*/
                        '<img class="del_guest pointer" src="/~sl/img/minus.png" title="刪除">'+
                      '</div>';
            $(this).parents('td').append(div)
          })

          //刪除送禮對象
          j183('.guest_table').on('click','.del_guest',function(){

            var id = $(this).parent('div').attr('data-item_id');
            if( id != 0 ){ //s_num存起來,送到後端作廢,等於0的話是新增(還沒進DB的)
              var del_id = $('input[name="del_item"]').val();
              $('input[name="del_item"]').val( del_id+','+id );
            }

            $(this).parent('div').remove()
          })

          //客戶(公司)歷史紀錄
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
              chk_same_com() //判斷客戶是否有重複
            }

            set_his('#his_com',css_obj,select_fun)
            

          })

          //職稱,姓名 歷史紀錄
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

          //職稱,姓名 歷史紀錄 keyin時 關閉視窗
          j183('.guest_table').on('input','input[name="position[]"]',function(){

            if( $('#his_guest').hasClass('active') && $(this).val() != '' ){ //有歷史視窗

              $('#his_guest.active').toggleClass('active')
              j183('#his_guest').off('.set');

            }else if( !$('#his_guest').hasClass('active') &&  $(this).val() == '' ){
              j183(this).focus();

            }

          })

          //算出毛利率、基數、送禮額度
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


            if( avg_gp == 0  && avg_rev == 0 ){ //無業績，預算額度一律500元
              $(this).parents('tr').find('input[name="avg_gpm[]"]').val(0);
              $(this).parents('tr').find('input[name="base_num[]"]').val(0);
              $(this).parents('tr').find('input[name="quota[]"]').val(500)

            }else{
              //平均毛利率 = 平均毛利 / 平均月營收 *100 取小數點2位
              var avg_gpm = (avg_gp/avg_rev*100).toFixed(2);
              $(this).parents('tr').find('input[name="avg_gpm[]"]').val(avg_gpm);

              //基數 = 營收20%+毛利80% ( 20與80 來自DB裡設定檔,可能會變動的,故在程式裡不寫死 ) 取小數點1位
              var base_num = ( (avg_rev*base_rev/100) + (avg_gp*base_gp/100) ).toFixed(1);
              $(this).parents('tr').find('input[name="base_num[]"]').val(base_num);
              
              //取得額度 
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
                    alert('送禮額度取得失敗!')
                  }
                }
              })

            }
            
            cnt_quota() //合計送禮額度


          })

          //表單送出
          $('.submit').click(function(){

            //判斷客戶是否有重複
            if( chk_same_com() ) return false;
            
            //判斷是否有空白的值
            var bool = false;
            $('form[name="body_form"] input:not(input[type=hidden])').each(function(ind,ele){
              if( $(ele).val() == '' ){
                bool = true;
                alert('請勿留空白!');
                j183(ele).focus();
                return false; //跳出迴圈
              }
            })
            if( bool ) return false;

            //確認是否有 不同單位,但是有相同的客戶(公司)
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
                str += '\n以上客戶，在別的單位已有資料，是否確定要繼續新增?';
                if( !confirm(str) ) return false;
              }
              
            }

            //更改 職位,姓名的name => 前面加上統編,分類用
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

        //統編 autocomplete blur 後回傳值的處理
        function chk_com(str,input) {

          if( typeof str == 'string'){ //blur後回傳的型態為str=>1234567-林XX 
            str = str.split('-');
          }else{
            str = str.innerText.split('-'); //autocomplete回傳的型態為obj=>li元素
          }

          $(input).parent('td[name="company"]').attr('data-tax_no',str[0])
          $(input).val(str[0]);
          $(input).siblings('input[name="company[]"]').val(str[1])

          chk_same_com() //判斷客戶是否有重複

        }

        //歷史資料的視窗處理
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

        //判斷客戶是否有重複
        function chk_same_com(){
          var arr_ele = [];
          var arr_tax = [];
          var bool = false;

          $('td[name="company"]').each(function(ind,ele){
            if( !$(ele).attr('data-tax_no') ) return true; //沒值跳過

            var idx = arr_tax.indexOf( $(ele).attr('data-tax_no') );
            if( idx == -1 ){
                arr_ele.push(ele)
                arr_tax.push( $(ele).attr('data-tax_no') );
            }else{
                //有重複
                bool = true;
                var ind_2 = $('.guest_table td[name="company"]').index(arr_ele[idx])
                var cname = $(ele).find('input[name="company[]"]').val();
                alert('項次 ('+(ind_2+1)+') , ('+(ind+1)+')「'+cname+'」'+'有重複，請合在一起!!');
                //邊框紅色做提醒
                $(ele).css('border','2px solid red');
                $(arr_ele[idx]).css('border','2px solid red');

                //5秒後 邊框回到原狀
                window.setTimeout(function(){
                  $(ele).css('border','none');
                  $(arr_ele[idx]).css('border','none');
                },5000)
                return false; //跳出迴圈
            }
          })

          return bool;

        }

        //合計送禮額度
        function cnt_quota(){
          var cnt = 0
          $('td[name="quota"]').each(function(ind,ele){
            cnt += +($(ele).text());
          })
          $('input[name="quota[]"]').each(function(ind,ele){
            cnt += +($(ele).val());
          })
          $('th[name="quota_total"]').html(cnt+' 元');
        }

      </script>
    <!-- END IGNORE -->
  <!-- END BLOCK : tb_js_guest -->

  <!-- START BLOCK : tb_js_gift -->
    <!-- START IGNORE -->
      <script>
        $(document).ready(function(){
          
          //禮品變更時，算出禮品單價、總金額
          j183('.guest_table').on('change','select[name="gift_s_num[]"]',function(){

            var $tr = $(this).parents('tr');
            var ind = $tr.find('select[name="gift_s_num[]"]').index($(this))
            var $op = $(this).find('option:selected');
            $tr.find('input[name="gift_price[]"]').eq(ind).val( $op.attr('data-price') );

            j183($tr).find('input[name="gift_cnt[]"]').eq(ind).trigger('change'); //觸發事件 => 算總金額

          })

          //禮品數量時，算出總金額
          j183('.guest_table').on('change','input[name="gift_cnt[]"]',function(){

            var cnt = $(this).val();
            var reg = /^\d+$/;
            var $tr = $(this).parents('tr');
            var ind = $tr.find('input[name="gift_cnt[]"]').index($(this))

            if( cnt == ''){ //格式不正確->歸0
              $(this).val(0);
              $tr.find('input[name="gift_price_total[]"]').eq(ind).val('0');
            }else if( !reg.test(cnt) ){//格式不正確->歸0
              alert('請填寫正整數');
              $tr.find('input[name="gift_price_total[]"]').eq(ind).val('0');
            }else{
              var price = $tr.find('input[name="gift_price[]"]').eq(ind).val();
              var item_total = cnt * price;
              $tr.find('input[name="gift_price_total[]"]').eq(ind).val( item_total );
              cnt_gift_total()
            }

            var total = +$('th[name="gift_total"]>span').html();
            var fina_total = +$('th[name="fina_quota_total"]').attr('data-fina');
            if( total > fina_total ){ //超過預算->歸0
              $(this).val(0);
              $tr.find('input[name="gift_price_total[]"]').eq(ind).val(0);
              alert('禮品總金額合計，請勿超過 會計審核總預算 !!');
              cnt_gift_total()
            }
            
          })

          //登打完畢,confirm
          j183('.guest_table').on('click','.all_done',function(){

            if( confirm('送出後，不可再做任何修改，是否繼續送出？') ){

              $('form[name="body_form"]').append('<input type="hidden" name="all_done" value="Y">');
              $('.submit').click();

            }

          })

          //表單送出
          $('.submit').click(function(){

            //判斷是否有空白的值
            var bool = false;
            $('form[name="body_form"] select[name="gift_s_num[]"]').each(function(ind,ele){
              if( $(ele).val() == '' ){
                bool = true;
                alert('請選擇禮品!!');
                j183(ele).focus();
                return false; //跳出迴圈
              }
            })
            if( bool ) return false;
            
            //判斷 數量或金額 是否為0
            $('form[name="body_form"] input:not(input[type=hidden])').each(function(ind,ele){
              if( $(ele).val() == '0' ){
                bool = true;
                alert('請填入正確的數量!!');
                j183(ele).focus();
                return false; //跳出迴圈
              }
            })
            if( bool ) return false;

            //判斷金額是否超過預算
            if( +$('th[name="gift_total"]>span').html() > +$('th[name="fina_quota_total"]>span').html() ){
              alert('禮品總金額合計，請勿超過 會計審核總預算 !!');
              return false;
            }

            $('form[name="body_form"]').submit();

          })

        });

        function cnt_gift_total(){
          //重新計算總金額的合計
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
            {tv_year}年{tv_festival}預計贈禮對象規劃
            <input type="hidden" name="s_num" value="{tv_s_num}">
          </div>
          <div class="flex" style="justify-content:space-between;align-items: flex-end;margin-top:10px">
            <div>
              單位 : {tv_area}
            </div>
            <div>
              聯絡窗口 : {tv_b_name}
            </div>
            <div>
              地址 : <span>{tv_address}</span>
              <!-- START BLOCK : tb_upd_address -->
                <img id="upd_address" class="pointer" src="/~sl/img/upd.png" alt="修改地址" title="修改地址">
              <!-- END BLOCK : tb_upd_address -->
            </div>
            <div>
              <!-- START BLOCK : tb_btn_add -->
                <button class="btn btn-red btn-m" type="button" id="add_com">新增客戶</button>
                <button class="btn btn-red btn-m" type="button" id="his_com_btn">匯入上一次的客戶</button>
              <!-- END BLOCK : tb_btn_add -->
            </div>
            <div>
              <!-- START BLOCK : tb_btn_submit -->
                <input class="btn btn-ins btn-l submit" type="button" value="確定儲存">
              <!-- END BLOCK : tb_btn_submit -->
            </div>
          </div>
          <input type="hidden" name="del_company">
          <input type="hidden" name="del_item">
        </caption>
        <thead class="border o_thead">
          <tr>
            <th rowspan=2 style="width: 3%">項次</th>
            <th rowspan=2>客戶名稱</th>
            <th colspan=2 style="min-width:130px">送禮對象</th>
            <th colspan=3>單位 : 萬元</th>
            <th>基數</th>
            <th rowspan=2>送禮額度(元)</th>
            <!-- START BLOCK : tb_th_guest -->
              <th rowspan=2 style="width: 4%">修改</th>
              <th rowspan=2 style="width: 4%">作廢</th>
            <!-- END BLOCK : tb_th_guest -->
            <!-- START BLOCK : tb_th_gift -->
              <th rowspan=2>禮品</th>
              <th rowspan=2>禮品單價(元)</th>
              <th rowspan=2>禮品數量(個)</th>
              <th rowspan=2>禮品總金額(元)</th>
            <!-- END BLOCK : tb_th_gift -->
          </tr>
          <tr>
            <th>職稱</th>
            <th>姓名</th>
            <th>平均月營收</th>
            <th>平均毛利</th>
            <th>平均毛利率</th>
            <th data-base_rev='{tv_base_rev}' data-base_gp='{tv_base_gp}'>營收{tv_base_rev}% + 毛利{tv_base_gp}%</th>
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
                      <input type="text" name="gift_price[]" size="10" value="{tv_gift_price}" readonly placeholder="自動帶出">
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
                      <input type="text" name="gift_price_total[]" size="10" value="{tv_gift_price_total}" readonly placeholder="自動帶出">
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
            <th colspan=8 align=right>合計: </th>
            <th name="quota_total">{tv_quota_total} 元</th>
            <th colspan=2></th>
            <!-- START BLOCK : tb_tfoot_gift -->
              <th>合計: </th>
              <th name="gift_total"><span>{tv_gift_total}</span> 元</th>
            <!-- END BLOCK : tb_tfoot_gift -->
          </tr>
            <tr>
              <th colspan=8 align=right>會計審核總預算: </th>
              <th name="fina_quota_total" data-fina="{tv_fina_quota_total}">
                <span>{tv_fina_quota_total}</span> 元
              </th>
              <th style="text-align:left">
              <!-- START BLOCK : tb_guest_fina_btn -->
                <button type="button" class="btn btn-s btn-ins upd_fina">修改預算</button>
              <!-- END BLOCK : tb_guest_fina_btn -->
              </th>
              <th {tv_colspan}></th>
              <!-- START BLOCK : tb_tfoot_gift_2 -->
                <th></th>
                <th>
                  <button type="button" class="btn btn-l btn-red all_done">登打完畢</button>
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
      
      //地址變動
      $('select[name="area_s_num"]').change(function(){
        var address = $(this).find('option:selected').attr('data-address');
        $('input[name="address"]').val(address);
      })

      //表單送出
      $('form[name="insert_form"]').submit(function(){

        var area = $('select[name="area_s_num"]').val();
        if( $.trim(area).length == 0  ){
          alert('請選擇單位!!');
          return false;
        }

        var year = $('select[name="year"]').val();
        if( $.trim(year).length == 0 ){
          alert('請選擇年份!!');
          return false;
        }

        var festival = $('select[name="festival"]').val();
        if( $.trim(festival).length == 0  ){
          alert('請選擇節日!!');
          return false;
        }

        var address = $('input[name="address"]').val();
        if( $.trim(address).length == 0  ){
          alert('地址輸入錯誤!!');
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
          alert('『'+area+'』'+$.trim(year)+'年'+$.trim(festival)+'，已經建立資料了，不可重複新增!');
          return false;
        }


      })

    });

    

  </script>
  <form  action="{tv_action}" method="POST" enctype="multipart/form-data" name="insert_form">
    <table class="data" width="100%">
    <tr>
      <th colspan=2 class="caption">新增</th>
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
  <div class="div" style="padding:5px 0;">
    搜尋條件 ->  
    <!-- START BLOCK : tb_select -->
      <select name="{tv_name}" >
        <!-- START BLOCK : tb_option -->
          <option  value="{tv_value}" {tv_selected}>{tv_show}</option>
        <!-- END BLOCK : tb_option -->
      </select> {tv_text}
    <!-- END BLOCK : tb_select -->
    <!-- START BLOCK : tb_fina_btn -->
      <button type="button" id="fina_set" class="btn btn-m btn-red" style="margin-left:15px" >會計編輯</button>
    <!-- END BLOCK : tb_fina_btn -->

  </div>

  <table class="list" width="100%">
    <thead class="border">
      <th>序號</th>
      <th>單位</th>
      <th>年份</th>
      <th>節日</th>
      <th>預估送禮額度總數</th>
      <th>會計是否審核</th>
      <th>審核後送禮額度總數</th>
      <th>禮品金額總數</th>
      <th>編輯/查看 客戶明細</th>
      <th>建檔人</th>
      <!--<th>作廢</th>-->
    </thead>
    <tbody>
    <!-- START BLOCK : tb_list_tr -->
      <tr>
        <td>{tv_i}</td>
        <td><a href="{tv_href}">{tv_area}</a></td>
        <td>{tv_year}</td>
        <td>{tv_festival}</td>
        <td align=right>{tv_quota_total} 元</td>
        <td>{tv_fina_chk}</td>
        <td class="{tv_class}" align=right>{tv_fina_quota_total} 元</td>
        <td align=right>{tv_gift_total} 元</td>
        <td>{tv_upd}</td>
        <td>{tv_b_empno}</td>
        <!--<td class="delete">{tv_del}</td>-->
      </tr>
    <!-- END BLOCK : tb_list_tr -->
    <!-- START BLOCK : tb_list_none -->
      <tr>
        <td class="txt_center" colspan="99">目前尚未有任何資料！</td>
      </tr>
    <!-- END BLOCK : tb_list_none -->
    </tbody>
  </table>

  <!-- START BLOCK : tb_fina_set -->
  <div class="set">
    <div>
      <img class="pointer close_box" src="/~sl/img/sign-error-32.png" alt="關閉視窗" title="關閉視窗">
      <div class=box>
        <form action="{tv_action}" method="POST" name="fina_form"> 
          <input type="hidden" name="year" value="{tv_year}">
          <input type="hidden" name="festival" value="{tv_festival}">
          <table class="list fina_table" width="100%">
            <thead class="border">
              <tr><th colspan=3>{tv_year}年{tv_festival}-會計審核送禮額度</th></tr>
              <tr>
                <th>單位</th>
                <th>預估送禮額度總數</th>
                <th>審核總預算</th>
              </tr>
            </thead>
            <tbody>
              <!-- START BLOCK : tb_set_tr -->
                <tr>
                  <td>
                    {tv_area}
                    <input type="hidden" name="s_num[]" value="{tv_s_num}">
                  </td>
                  <td>{tv_quota_total} 元</td>
                  <td><input type="number" name="fina_quota_total[]" pattern="^\d+$" min="0" size="12" value="{tv_fina_quota_total}"> 元</td>
                </tr>
              <!-- END BLOCK : tb_set_tr -->

              <!-- START BLOCK : tb_set_ndata -->
                <tr><th colspan=3 class="red">尚無資料!</th></tr>
              <!-- END BLOCK : tb_set_ndata -->
            </tbody>
          </table>
          <div style="margin:10px 0;text-align:right">
            <!-- START BLOCK : tb_set_btn -->
              <button class="btn btn-ins">確認修改</button>
            <!-- END BLOCK : tb_set_btn -->
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- END BLOCK : tb_fina_set -->

<!-- END BLOCK : tb_list -->





  





