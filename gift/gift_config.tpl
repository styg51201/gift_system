
<!-- START IGNORE -->
  <link rel="stylesheet" href="gift.css" type="text/css">
  <style>
    .chk_img,.can_img{
      display:none;
    }
    .can_img{
      width:19px;
      height:19px;
    }
  </style>


  <script type="text/javascript" src="../init/jquery.autocomplete.js"></script>
  
  <script>
    $(document).ready(function(){

      //tab切換
      $('.tabs>li').on('click', function(){
        var $this = $(this),
            target = $this.attr('data-target');
        $this.addClass('active').siblings().removeClass('active');
        $(target).addClass('active').siblings().removeClass('active');
      });

      //autocomplete for empno
      $('#main_container').on('focus','input[name="empno[]"],input[name="fina_empno"]',function(){
       autocomplete(this);
      })

      // blur for chk empno
      $('#main_container').on('blur','input[name="empno[]"],input[name="fina_empno"]',function(){
       var val = $(this).val();
       var input = this;
       var name = $(this).attr('name');
       var name_input;

       //不同地方的input ,針對不同的姓名欄位做修改
        if( name == 'empno[]' ){ //修改的input
          name_input = $(this).parents('tr').find('input[name="name[]"]');
        }else if( name == 'fina_empno' ){ //會計人員的input
          name_input = $('input[name="fina_name"]');
        }

        if(val.length == 7){
          $.ajax({
            type: 'GET',
            url: 'gift_config.php',
            data: {
              ajax_get:'ajax_get_emp',
              q:val
            },
            success:function(data){
              if(data){
                chk_emp(data,input);
              }else{
                alert('員工編號錯誤');
                $(input).val('')
                name_input.val('')
              }
            }
          })
        }else{
          name_input.val('')
        }
      })

      //update 負責人
      $('#main_container').on('click','.upd_btn',function(e){
        
        var $tr = $(this).parents('tr')
        var $td_empno = $(this).parents('tr').find('td:eq(3)');
        var $td_name = $(this).parents('tr').find('td:eq(4)');
        var $td_address = $(this).parents('tr').find('td:eq(5)');

        if( !$(this).hasClass('active') ){ //修改

          $tr.prepend('<input type="hidden" name="s_num[]" value="'+$tr.attr('data-num')+'">');

          $td_empno.html('<input type="text" name="empno[]" value="'+$td_empno.text()+'" maxlength="7" size="8" placeholder="請輸入員編">');

          $td_name.html('<input class="readonly" type="text" name="name[]" size="8" value="'+$td_name.text()+'" readonly placeholder="姓名自動帶出">');

          $td_address.html('<input type="text" name="address[]" value="'+$td_address.text()+'" maxlength="100" size="70" placeholder="請輸入地址(可留白)">')

        }

        $(this).addClass('active')

      })

      //其他設定表 送出
      $('button.submit').click(function(){

        if( $('.tab_content.active form').attr('name') == 'other_form'  ){
          var base_rev = $('input[name="base_rev"]').val();
          var base_gp = $('input[name="base_gp"]').val();
          var fina_empno = $('input[name="fina_empno"]').val();
          var fina_name = $('input[name="fina_name"]').val();

          if( !$.trim(base_rev) || !$.trim(base_gp) || !$.trim(fina_empno) || !$.trim(fina_name) ){
            alert('請勿留空白，或是輸入有誤!');
            return;
          }

          $('form[name="other_form"]').submit();

        }else if( $('.tab_content.active form').attr('name') == 'area_form' ){

          var chk = false;
          $('input[name="empno[]"],input[name="name[]"]').each(function(ind,ele){
            if( $.trim( $(ele).val() ) == '' ){
              chk = true
              alert('請勿留空白!');
              $(ele).focus();
              return false;
            }
          })

          if( chk ) return false

          $('form[name="area_form"]').submit();

        }
        

      })

    });

    function autocomplete(input){
      $(input).autocomplete(
        "gift_config.php",
        { extraParams:{ajax_get:'ajax_get_emp',},
          delay:10,
          width:150,
          minChars:1,
          maxItemsToShow:15,
          selectFirst:true,
          cacheLength:0,
          onItemSelect:function(str){
            chk_emp(str,input)
          }} 
      );
    }

    function chk_emp(str,input) {

      if( typeof str == 'string'){ //blur後回傳的型態為str=>1234567-林XX 
        str = str.split('-');
      }else{
        str = str.innerText.split('-'); //autocomplete回傳的型態為obj=>li元素
      }
      
      var name = $(input).attr('name');
      
      $(input).val(str[0]);

      //不同地方的input ,針對不同的姓名欄位做修改
      if( name == 'empno[]' ){ //修改的input
        $(input).parents('tr').find('input[name="name[]"]').val(str[1]);
      }else if( name == 'fina_empno' ){ //會計人員的input
        $("input[name='fina_name']").val(str[1]);
      }
      
    }

  </script>
<!-- END IGNORE -->

<!-- START BLOCK : tb_link -->
  <table width="100%" border="0" cellpadding="1" cellspacing="1" class="font">
    <tr>
      <td>
        <div align="left">
            <a href="{tv_home}" >首頁</a>&nbsp;|&nbsp;
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
        <li data-target="#content0" class="active">各區設定表</li>
        <li data-target="#content1">其他設定表</li>
      </ul>
    </div>
    <section class="card">
      <div class="tab_content active" id="content0">
        <h2 class="title">
          各區設定表
          <span class="span">( 離開頁籤前，若有變動，請記得儲存 )</span>
          <button class="btn btn-ins btn-l submit">確定儲存</button>
        </h2>
        <form name="area_form"  method="post" action="{tv_action}">
          <table id="area_table" class="list left">
            <thead class="border">
              <tr>
                <th>序</th>
                <th>單位名稱</th>
                <th>額度配置</th>
                <th>負責人員編</th>
                <th>負責人姓名</th>
                <th>預設地址</th>
                <th>修改</th>
              </tr>
            </thead>
            <tbody>
              <!-- START BLOCK : tb_area_tr -->
              <tr data-num="{tv_s_num}">
                <td>{tv_num}</td>
                <td>{tv_area}</td>
                <td>{tv_quota}</td>
                <td>{tv_empno}</td>
                <td>{tv_name}</td>
                <td align=left>{tv_address}</td>
                <td class="upd_btn pointer">{tv_upd}</td>
              </tr>
              <!-- END BLOCK : tb_area_tr -->
            </tbody>
          </table>
        </form>
      </div>
      <div class="tab_content" id="content1">
        <h2 class="title">
          其他設定表
          <span class="span">( 離開頁籤前，若有變動，請記得儲存 )</span>
          <button class="btn btn-ins btn-l submit">確定儲存</button>
        </h2>
        <div>
          <form name="other_form" method="post" action="{tv_action}">
            <table min-width="30%" class="data">
              <tbody>
                <tr>
                  <th>基數算法設定: </th>
                  <td>
                    <input type="number" name="base_rev" min="1" max="100" maxlength="3" value="{tv_rev}"> % 營收 + 
                    <input type="number" name="base_gp" min="1" max="100" maxlength="3" value="{tv_gp}"> % 毛利
                  </td>
                </tr>
                <tr>
                  <th>審核會計人員: </th>
                  <td>
                    <input type="text" name="fina_empno" size="15" maxlength="7" value="{tv_fina_empno}" placeholder="請輸入員編"> 
                    <input class="readonly" type="text" name="fina_name" size="15" value="{tv_fina_name}" readonly placeholder="姓名自動帶出">
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </section>

  </main>
<!-- END BLOCK : tb_list -->





  





