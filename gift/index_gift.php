<?php 
//�z�w�w�w�w�w�s�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�{
//�x�t�ΦW��: �x�~�`§�~�޲z�t�έ����@  �@                                              �x
//�x         �x                                                              �x
//�x�{���W��: �xindex.php                                                �x
//�x�{������: �x�~�`§�~�޲z�t�έ���                                      �x
//�x�˪O�W��: �xindex.tpl                                                 �x
//�x          �x                                     �x
//�x          �x                                                              �x
//�x�����{��: �x/home/sl/public_html/sl_init.php �@�Ψ��                     �x
//�x          �x/home/sl/public_html/tp/*.*      �˪O�M��                     �x
//�x          �x                                                              �x
//�x          �x/home/sl/public_html/sl.css      css ��                       �x
//�x          �x/home/sl/public_html/sl.js        javascript �ۭq���         �x
//�x          �x/home/sl/public_html/sl_header.inc.php  ����                  �x
//�x          �x/home/sl/public_html/sl_footer.inc.php  ����                  �x
//�x          �x                                                              �x
//�x�{���]�p: �x���t                                                          �x
//�x�]�p���: �x2021.04.13                                                   �x
//�|�w�w�w�w�w�r�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�}

// include_once('../sl_init.php'); 
// u_setvar($f_var);
echo 'index_gift';
// include_once($sl_header_php);

?>


<link rel="stylesheet" href="gift.css" type="text/css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<style>
  a.box{
    text-align:center;
    text-decoration: none;
  }
  a.box:hover{
    text-decoration: none;
    color:'';
  }
  .container{
    display:flex;
    justify-content: center;
    margin:25px;
  }
  .container>.box{
    display: flex;
    width: 200px;
    height: 200px;
    padding:25px 0;
    background-color: #fff;
    margin: 20px 30px;
    border: 2px solid #cbcbcb;
    border-radius: 5%;
    box-shadow: 3px 3px 7px #cbcbcb;
    flex-direction: column;
    transition: .2s;

  }
  .container>.box:hover{
    transform: translateY(-10px);
    box-shadow: none;
  }
  .container>.box:hover i{
    color:#fff;
  }
  .box>div{
    margin:0 auto;
  }
  .box h5{
    font-size: 20px;
    font-weight:bolder;
    text-align-last: justify;
    margin:15px auto 20px;
  }
  .box i{
    font-size:60px;
    padding:10px;
    transition: .3s;
    border-radius: 25%;
  }
  .box ul{
    padding-left:20px;
    color: #777777;
    font-size: 13px;
    letter-spacing: 1px;
    text-align:left;
  }
  .box li{
    list-style: square;
  }
</style>
<script>
  $(document).ready(function(){

    var userAgent = navigator.userAgent;
    if( userAgent.indexOf('Chrome') == -1  ){
      alert('�Шϥ� Google ���uChrome�s�����v�}�ҡA����');
    }

    $('a').click(function(event){
      if( userAgent.indexOf('Chrome') == -1  ){
        alert('�Шϥ� Google ���uChrome�s�����v�}�ҡA����');
        event.preventDefault();
      }
    })

    //hover�� �ھڦۨ�box���C��=>icon���C���ܤ�
    $('a.box').hover(
      function(){
      $(this).css('border','3px solid '+$(this).css('color'))
      $(this).find('i').css('background',$(this).css('color'))
    },function(){
      $(this).css('border','2px solid #cbcbcb')
      $(this).find('i').css('background','transparent')
    })
  });
</script>

<div>
  <h1 style="color:red;font-weight:500;text-align:center">�Шϥ� Google ���uChrome�s�����v�}�ҡA����</h1>

</div>
<div class="container">
  <a class='box' href="gift_list.php" style="color:#33a1f8">
    <div>
      <i class="fad fa-user-edit"></i>
    </div>
    <div>
      <h5>��§��H�W��</h5>
      <ul>
        <li>�U�ϵ��f�n���e§�Ȥ�</li>
        <li>�|�p�f�ְe§�B��</li>
        <li>����e§§�~</li>
      </ul>
    </div>
  </a>
  <a class='box' href="gift_type.php" style="color:#ff9800" >
    <div>
      <i class="fad fa-gifts"></i>
    </div>
    <div>
      <h5>§�~�~���޲z</h5>
      <ul>
        <li>�ѱ��ʳ��޲z</li>
        <li>�n���~�`���~������T</li>
      </ul>
    </div>
  </a>
  <a class='box' href="gift_rpt.php" style="color:#4caf50">
    <div>
      <i class="fad fa-file-alt"></i>
    </div>
    <div>
      <h5>����d��</h5>
      <ul>
        <li>�~�`§�~�έp��</li>
        <li>�U����§��H�W����</li>
        <li>�ץXExcel��</li>
      </ul>
    </div>
  </a>
</div>
<div class="container">
  <a class='box' href="gift_quota.php" style="color:#d3b615">
    <div>
      <i class="fad fa-sack-dollar"></i>
    </div>
    <div>
      <h5>�e§�B�׳]�w</h5>
      <ul>
        <li>�U�ϰe§�B�׳]�w</li>
      </ul>
    </div>
  </a>
  <a class='box' href="gift_config.php" style="color:#795548">
    <div>
      <i class="fad fa-tools"></i>
    </div>
    
    <div>
      <h5>��L�]�w</h5>
      <ul>
        <li>�U�ϵ��f�H���]�w</li>
        <li>�|�p�H���]�w</li>
        <li>��ƺ�k�]�w</li>
      </ul>
    </div>
  </a>
</div>

