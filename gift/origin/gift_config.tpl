
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
    .upd_btn>img,.it_btn>img{
      cursor: pointer;
    }
  
  </style>
  <script type="text/javascript" src="/~sl/jquery/jquery-3.1.0.min.js"></script>
  <script type="text/javascript" src="/~sl/jquery/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script> 

  <script type="text/javascript">
    var j310 = jQuery.noConflict(true); //autocomplete jq版本互衝
  </script>
  
  <script type="text/javascript" src="/~sl/jquery/jquery.autocomplete.js"></script>
  
  <script>
    $(document).ready(function(){

      //tab切換
      j310('.tabs>li').on('click', function(){
        var $this = $(this),
            target = $this.attr('data-target');
        $this.addClass('active').siblings().removeClass('active');
        $(target).addClass('active').siblings().removeClass('active');
      });

      //新增區域,負責人
      $('#add_btn').click(function(){
        var area = $('input[name="add_area"]');
        var quota = $('select[name="add_quota"]');
        var name = $('input[name="add_name"]');
        var empno = $('input[name="add_empno"]');
        var address = $('input[name="add_address"]');
        var s_num = 0;

        if( !$.trim(area.val()) || !$.trim(name.val()) || !$.trim(empno.val()) ){
          alert('請勿留空白，或是輸入有誤!');
          return;
        }

        var obj = {s_num,
                  area:$.trim(area.val()),
                  quota:$.trim(quota.val()),
                  name:$.trim(name.val()),
                  empno:$.trim(empno.val()),
                  address:$.trim(address.val())
                  };

        var ajax_res = send_ajax(obj);

        switch(ajax_res.res){
          case'Y':
            alert('新增成功!');
            location.reload();
          break;
          case'N':
            alert('新增失敗!!\n error => '+ajax_res.error);
          break;
        }

      })

      //autocomplete for empno
      j310('#main_container').on('focus','input[name="empno"],input[name="add_empno"],input[name="fina_empno"]',function(){
       autocomplete(this);
      })

      // blur for chk empno
      j310('#main_container').on('blur','input[name="empno"],input[name="add_empno"],input[name="fina_empno"]',function(){
       var val = $(this).val();
       var input = this;
       var name = $(this).attr('name');
       var name_input;

       //不同地方的input ,針對不同的姓名欄位做修改
        if( name == 'add_empno'){ //新增的input
          name_input = $('input[name="add_name"]');
        }else if( name == 'empno' ){ //修改的input
          name_input = $(this).parents('tr').find('input[name="name"]');
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
      j310('#main_container').on('click','.upd_btn>img',function(e){
        
        var $tr = $(this).parents('tr')
        var $td_empno = $(this).parents('tr').find('td:eq(3)');
        var $td_name = $(this).parents('tr').find('td:eq(4)');
        var $td_address = $(this).parents('tr').find('td:eq(5)');

     

        if( $(this).hasClass('upd_img') ){ //修改

          $td_empno.html('<input type="text" name="empno" value="'+$td_empno.text()+'" maxlength="7" size="15" placeholder="請輸入員編">');

          $td_name.html('<input class="readonly" type="text" name="name" size="15" value="'+$td_name.text()+'" readonly placeholder="姓名自動帶出">');

          $td_address.html('<input type="text" name="address" value="'+$td_address.text()+'" maxlength="100" size="80" placeholder="請輸入地址">')

        }else if( $(this).hasClass('chk_img') ){ //儲存 send ajax
          var $empno = $td_empno.find('input[name="empno"]');
          var $name = $td_name.find('input[name="name"]');
          var $address = $td_address.find('input[name="address"]');


          if( !$.trim($empno.val()) || !$.trim($name.val()) ){
            alert('負責人請勿留空，或是填寫有誤!');
            return;
          }

          var s_num = $tr.attr('data-num');
          var area = $tr.find('td:eq(1)').text();
          var quota = $tr.find('td:eq(2)').text();

          var obj = {s_num,area,quota,
                  name:$.trim($name.val()),
                  empno:$.trim($empno.val()),
                  address:$.trim($address.val())
                  };
   
          var ajax_res = send_ajax(obj);

          switch(ajax_res.res){
            case'Y':
              /*location.reload();*/
              $td_empno.text( $.trim($empno.val()) )
              $td_name.text( $.trim($name.val()) )
              $td_address.text( $.trim($address.val()) )

              $tr.find('.alert').text('儲存成功!!');
              //2秒後,提醒消失
              window.setTimeout(function(){
                $tr.find('.alert').text('');
              },2000)
            break;
            case'N':
              alert('修改失敗!!\n error => '+ajax_res.error);
              return;
            break;
          }

        }else if( $(this).hasClass('can_img') ){ //取消 重置
          $('form[name="area_form"]')[0].reset();
          var $empno = $td_empno.find('input[name="empno"]');
          var $name = $td_name.find('input[name="name"]');
          var $address = $td_address.find('input[name="address"]');

          $td_empno.text( $.trim($empno.val()) )
          $td_name.text( $.trim($name.val()) )
          $td_address.text( $.trim($address.val()) )

        }

        $(this).toggle().siblings().toggle();

      })

      //其他設定表 送出
      $('button.submit').click(function(){
        var base_rev = $('input[name="base_rev"]').val();
        var base_gp = $('input[name="base_gp"]').val();
        var fina_empno = $('input[name="fina_empno"]').val();
        var fina_name = $('input[name="fina_name"]').val();

        if( !$.trim(base_rev) || !$.trim(base_gp) || !$.trim(fina_empno) || !$.trim(fina_name) ){
          alert('請勿留空白，或是輸入有誤!');
          return;
        }

        $('form[name="other_form"]').submit();

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
      if( name == 'add_empno'){ //新增的input
        $("input[name='add_name']").val(str[1]);
      }else if( name == 'empno' ){ //修改的input
        $(input).parents('tr').find('input[name="name"]').val(str[1]);
      }else if( name == 'fina_empno' ){ //會計人員的input
        $("input[name='fina_name']").val(str[1]);
      }
      
    }

    function send_ajax(obj){
      // return type => obj
      ans = {};
      ans['res'] = 'N';

      $.ajax({
        type: 'POST',
        url: 'gift_config.php',
        async : false,
        data: {msel:11,json:JSON.stringify(obj)},
        success:function(data){
          data = JSON.parse(data);
          ans = data;
        },
        error:function(jqXHR, textStatus, errorThrown){
          ans['error'] = 'status: '+jqXHR.status+
                        '\nstatusText: '+jqXHR.statusText+
                        '\nAjaxError: '+textStatus;

        }
      })

      return ans;
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
        </h2>
        <!-- START BLOCK : tb_it_add -->
          <div class="flex" style="margin:20px;border:1px solid #000">
            <div class="flex column">
              <label class="label">單位名稱 : 
                <input type="text" name="add_area" size="15">
              </label>
              <label class="label">額度配置 : 
                <select name="add_quota">
                <!-- START BLOCK : tb_area_option -->
                  <option  value="{tv_value}" {tv_selected}>{tv_show}</option>
                <!-- END BLOCK : tb_area_option -->
                </select>
              </label>
            </div>
            <div class="flex column">
              <label class="label">負責人員編 : 
                <input type="text" name="add_empno" size="15"  maxlength="7" placeholder="請輸入員編">
              </label>
              <label class="label">負責人姓名 : 
                <input class="readonly" type="text" name="add_name" size="15" readonly placeholder="姓名自動帶出">
              </label>
            </div>
            <div class="flex column">
              <label class="label">地址 : 
                <input type="text" name="add_address"  maxlength="100" size="50" placeholder="請輸入地址,可留白">
              </label>
            </div>
            <button id="add_btn" class="btn btn-modify" style="align-self:center;margin-left:20px">新增</button>
            <p style="align-self:center;margin-left:20px">(僅 IT0002 時出現，給資訊新增區域用)</p>
          </div>
        <!-- END BLOCK : tb_it_add -->
        <form name="area_form">
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
                <td class="upd_btn">
                  <img class="upd_img" src="/~sl/img/upd.png" border="0" alt="修改此筆" title="修改此筆">
                  <img class="chk_img" src="/~sl/img/tick.png" border="0" alt="確定儲存" title="確定儲存">
                  <img class="can_img" src="/~sl/img/refresh.png" border="0" alt="取消變更" title="取消變更">
                </td>
                <th class="red alert" style="background-color:#fff"></th>
              </tr>
              <!-- END BLOCK : tb_area_tr -->
            </tbody>
          </table>
        </form>
      </div>
      <div class="tab_content" id="content1">
        <h2 class="title">
          其他設定表
          <span class="span">( 離開頁簽前，若有變動，請記得儲存 )</span>
          <button class="btn btn-ins btn-l submit">確定儲存</button>
        </h2>
        <div>
          <form name="other_form" method="post" action="{tv_action}">
            <table width="30%" class="data">
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





  





