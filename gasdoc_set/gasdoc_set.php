<?php
//�z�w�w�w�w�w�s�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�{
//�x�t�ΦW��: �xgasdoc_set.php�@  �@                                       �x
//�x          �x                                                        �x
//�x�{���W��: �xgasdoc_set.php                                         �x
//�x�{������: |�o����ިt�ζ��س]�w��                                                      �x
//�x�˪O�W��: �xgasdoc_set.tpl                                                 �x
//�x          �x                                                              �x
//�x��Ʈw  : �xgas                                              �x
//�x��ƪ�  : �xgasdoc_set
//|          |                                           �x
//�x          �x                                                              �x
//�x�����{��: �x/home/sl/public_html/sl_init.php �@�Ψ��                     �x
//�x          �x                                                              �x
//�x          �x                                                �x
//�x          �x                                                              �x
//�x�{���]�p: �x���t                                                          �x
//�x�]�p���: �x2020.05.26                                                    �x
//�|�w�w�w�w�w�r�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�}


// include_once('/home/sl/public_html/sl_init.php'); //���Ψ禡�w


u_setvar(&$f_var); // �{���ܼƳ]�w,������ΰ}�C�ܼ�,���A�� global u_setvar(&$f_var),�ݭn��&,�ǭ�,�i�H�N�Ȧ^��,�᭱�~��έ�

include_once( "/home/TemplatePower/class.TemplatePower.inc.php"  ); 
$f_var["tp"] = new  TemplatePower ( $f_var['tpl']  );  // �˪��e����
$f_var["tp"]-> prepare ();


//--------for ajax-----------
  if($_REQUEST['ajax_add'] == 'Y'){
    u_add_input(&$f_var);
    exit;
  }
  if( $_REQUEST['add_info']){
    $req = $_REQUEST['add_info'];
    u_insert(&$f_var,$req);
    exit;
  }
  if( $_REQUEST['ajax_update'] ){
    $req = $_REQUEST['ajax_data'];
    u_update(&$f_var,$req);
    exit;
  }
//------end ajax -------------

// include_once($sl_header_php); // header


// if( u_chk_master() ){
  // sl_open($f_var['mdb']); // �}�Ҹ�Ʈw
  $f_var["tp"]-> newBlock('tb_css&js');
  u_list(&$f_var);

  mysql_close(); // ������Ʈw
// }else{
  // sl_errmsg("�� �`��(�`���q)�Ϊo���t�d�H ���v���[��");
// }




$f_var["tp"]-> printToScreen ();

// include_once($sl_footer_php); // footer


// **************************************************************************
//  ��ƦW��: u_add_input($f_var)
//  ��ƥ\��: �s�W�@����tpl
//  �ϥΤ覡: u_add_input($f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_add_input($f_var){

  $f_var["tp"]-> newBlock('tb_add_tr');

  while(list($key , $val) = each($f_var['fd'])){
    $f_var["tp"]-> newBlock('tb_add_td');


    $f_var["tp"]-> newBlock("tb_{$val['type']}");
    $f_var["tp"]-> assign('tv_ename' ,$val['ename'] );
    $f_var["tp"]-> assign('tv_value' ,$val['value'] );
    
    switch($val['type']){
      case 'select' :
        while(list($show , $value) = each($val['option'])){
          $f_var["tp"]-> newBlock('tb_option');
          $f_var["tp"]-> assign('tv_show' ,$show);
          $f_var["tp"]-> assign('tv_value' ,$value);
        }
      break;
    }
    
  }
  $res = $f_var["tp"]-> getOutputContent();
  $res = mb_convert_encoding($res ,'UTF-8','big5');
  echo trim($res);
}
// **************************************************************************
//  ��ƦW��: u_update($f_var , $data)
//  ��ƥ\��: update DB (�]�t�@�o)
//  �ϥΤ覡: u_update($f_var , $data)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************

function u_update ($f_var , $data){
  sl_open($f_var['mdb']);

  switch($_REQUEST['ajax_update']){
    case 'delete':
      $sql = "UPDATE `{$f_var['mtable']['gasdoc_set']}`
              SET `d_empno`= '{$_SESSION['login_empno']}' ,
                  `d_dept_id`= '{$_SESSION['login_dept_id']}' ,
                  `d_proc`= '{$f_var['mphp_name']}' ,
                  `d_date`= '{$f_var['dateTime']}' 
              WHERE `itemno` = '{$data}' ";
    break;
    case 'update':
      $data = stripslashes($data);
      $data = json_decode($data,true);

      foreach($data as $key => $val){
        $data[$key] = mb_convert_encoding($data[$key],'Big5','utf-8'); //ajax �L�ӬOutf-8 ,�নbig5
      }

      $sql = "UPDATE `{$f_var['mtable']['gasdoc_set']}`
              SET `item_name` = '{$data['item_name']}',
                  `field_type` = '{$data['field_type']}',
                  `default` = '{$data['default']}',
                  `memo` = '{$data['memo']}',
                  `m_empno`= '{$_SESSION['login_empno']}' ,
                  `m_dept_id`= '{$_SESSION['login_dept_id']}' ,
                  `m_proc`= '{$f_var['mphp_name']}' ,
                  `m_date`= '{$f_var['dateTime']}' 
              WHERE `itemno` = '{$data['itemno']}' ";
    break;
  }

  $result = mysql_query($sql);
  print_r ($result);
  mysql_close();
}
// **************************************************************************
//  ��ƦW��: u_insert()
//  ��ƥ\��: �g�iDB
//  �ϥΤ覡: u_insert()
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************

function u_insert ($f_var , $data){
  sl_open($f_var['mdb']);

  //���oA,B,C�N�X �y�������̤j��
  $sql_que = "SELECT 
        (SELECT SUBSTR( MAX(`itemno`), 2, 3 ) FROM `gasdoc_set` WHERE `block_type` = 'A.�o���򥻸��' group by `block_type` ) as A ,
        (SELECT SUBSTR( MAX(`itemno`), 2, 3 ) FROM `gasdoc_set` WHERE `block_type` = 'B.�o���������' group by `block_type`) as B ,
        (SELECT SUBSTR( MAX(`itemno`), 2, 3 ) FROM `gasdoc_set`WHERE `block_type` = 'C.������' group by `block_type` ) as C
        FROM `{$f_var['mtable']['gasdoc_set']}` group by A";

  $result_que = mysql_query($sql_que);
  $item_num = mysql_fetch_assoc($result_que); // => array([A]=>001,[B]=>002,[C]=>001)

  $b_empno = $_SESSION['login_empno'];
  $b_dept_id = $_SESSION['login_dept_id'];
  $b_proc = $f_var['mphp_name'];
  $b_date = $f_var['dateTime'];
  $fromip  = $_SERVER["REMOTE_ADDR"]; 

  $sql = "INSERT INTO `{$f_var['mtable']['gasdoc_set']}` 
          (`itemno`, `item_name`, `block_type`, `field_type`, `default`,`memo`,`b_empno`, `b_dept_id`, `b_proc`, `b_date`,`fromip`) VALUE ";

  $data = stripslashes($data);
  $data = json_decode($data,true);

  for( $i=0 ;$i<count($data); $i++ ){
    $type = substr($data[$i]['block_type'] , 0 ,1); // ���o A or B or C
    $item_num[ $type ] += 1;  // �a�iarr�� ���y����+1

    $itemno = $type.str_pad( $item_num[ $type ],3,'0',STR_PAD_LEFT); //  �^��r + �y����(�����T��h��0) ex:A001
    $item_name = mb_convert_encoding($data[$i]['item_name'],'Big5','utf-8');  //ajax �L�ӬOutf-8 ,�নbig5
    $block_type = mb_convert_encoding($data[$i]['block_type'],'Big5','utf-8');
    $field_type = mb_convert_encoding($data[$i]['field_type'],'Big5','utf-8');
    $default = $data[$i]['default'];
    $memo = mb_convert_encoding($data[$i]['memo'],'Big5','utf-8');
     

    $sql_val .= ",( '{$itemno}' , '{$item_name}' , '{$block_type}' , '{$field_type}' , '{$default}' , '{$memo}' ,'$b_empno' , '$b_dept_id' , '$b_proc' , '$b_date' , '$fromip' )";
    
  }

  $sql_val = substr($sql_val,1); //�h���Ĥ@�ӳr��
  $sql .= $sql_val;

  $result = mysql_query($sql);
  print_r ($result);
  mysql_close();
}


// **************************************************************************
//  ��ƦW��: u_chk_master()
//  ��ƥ\��: �v���]�w
//  �ϥΤ覡: u_chk_master()
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_chk_master (){
  // �v�� => ����(��)(PD0001)
  sl_open('it');
  $sql = "SELECT gp_id, dept_id
          FROM  it.ap_deptgroup  
          WHERE d_date =  '0000-00-00 00:00:00'
          AND dept_id = '{$_SESSION["login_hrm_dept_id"]}'
          AND  gp_id = 'PD0001' ";

  $result = mysql_query($sql);
  $result = mysql_num_rows($result);
  mysql_close();


  $option = sl_add_select_gas('gas','Y','S111');

  if( $result || (count($option[0]) > 1) ){
    return true;
  }else{
    return false;
  }
}
// **************************************************************************
//  ��ƦW��: u_list()
//  ��ƥ\��: �C��
//  �ϥΤ覡: u_list(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_list($f_var){


  $f_var["tp"]-> newBlock('tb_list');
  $f_var["tp"]-> newBlock('tb_edit_select');
  $f_var["tp"]-> assign('tv_ename' ,$f_var['fd']['field_type']['ename'] );
  while(list($show , $value) = each($f_var['fd']['field_type']['option'])){
    $f_var["tp"]-> newBlock('tb_edit_option');
    $f_var["tp"]-> assign('tv_show' ,$show);
    $f_var["tp"]-> assign('tv_value' ,$value);
  }


  $sql = "SELECT `itemno`,`item_name`,`block_type`,`field_type`,`default`,`memo`,`b_date`,`b_empno` 
          FROM  {$f_var['mtable']['gasdoc_set']} 
          WHERE `gasdoc_set`.`d_date` = '0000-00-00 00:00:00' ORDER BY `itemno` ASC";

  $result = mysql_query($sql);

  if( mysql_num_rows($result) > 0){

    while( $row = mysql_fetch_assoc($result) ){
      $f_var["tp"]-> newBlock('tb_gasdoc');

      // ����ɤH�m�W
      sl_open('sl');
      $result_name = mysql_query("SELECT `name` FROM `pass` WHERE `empno` = '{$row['b_empno']}'");
      $row_name = mysql_fetch_assoc($result_name);


      $f_var['tp'] -> assign('tv_type',substr($row['block_type'],0,1));

      $f_var['tp'] -> assign('tv_block_type',$row['block_type']);
      $f_var['tp'] -> assign('tv_itemno',$row['itemno']);
      $f_var['tp'] -> assign('tv_item_name',$row['item_name']);
      $f_var['tp'] -> assign('tv_field_type',$row['field_type']);

      if($row['default'] == 'Y'){
        $f_var['tp'] -> assign('tv_default','checked');
      }else{
        $f_var['tp'] -> assign('tv_default','');
      }

      if ($row['memo']){ 
        $f_var['tp'] -> assign('tv_memo', nl2br($row['memo']) );
      }else{
        $f_var['tp'] -> assign('tv_memo','-'); //�S����NULL 
      }

      
      $f_var['tp'] -> assign('tv_b_name',$row_name['name']);
      $f_var['tp'] -> assign('tv_b_date',$row['b_date']);
      $f_var['tp'] -> assign('tv_del_img','<img src="/~sl/img/del.png">');

      

    }

  }

}  
// **************************************************************************
//  ��ƦW��: u_setvar()
//  ��ƥ\��: �ܼƳ]�w
//  �ϥΤ覡: u_setvar(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_setvar ($f_var){

  // post or get data Begin ............................................//
    if(is_array($_REQUEST)){
      while(list($f_fd_name,$f_fd_value) = each($_REQUEST)){
        $f_var[$f_fd_name] = $f_fd_value;
      }
    }
  // post or get data End ..............................................//
  
  // ���ǤJ�Ȥ��w�]�ȳ]�w Begin.................................................//
    if($f_var['msel'] == NULL){
      $f_var['msel'] = 4;
    }
  // ���ǤJ�Ȥ��w�]�ȳ]�w End ..................................................//

  
    $f_var['mphp_name'] = u_showproc(); //�{���W��
    $f_var['show_year'] = '4';
    $f_var['msel_name'] = array('1'=>'�s�W','2'=>'�ק�','3'=>'�R��','4'=>'�s��','5'=>'�d��','6'=>'���w�q','7'=>'�C�L'); // msel ����
    $f_var['ie_h_title'] = '�o����ިt�ζ��س]�w��'; // �������D
    $f_var['msub_title'] = '�o����ިt�ζ��س]�w��'; // �{���Ƽ��D
    $f_var['mdb'] = 'gas'; // db name
    $f_var['mtable'] = array('gasdoc_set'=>'gasdoc_set'); // �ϥ� table �W�� 
    $f_var['tpl'] = 'gasdoc_set.tpl'; // �˪��e����
    $f_var['dateTime'] = date('Y-m-d H:i:s'); //����

  
    // form������w�q
    $fd_var['block_type'] = array( 
      'ename' => 'block_type',
      'cname' => '�������O',
      'type' => 'select',
      'option' => array(
        '--�п��--' => null,
        'A.�o���򥻸��' => 'A.�o���򥻸��',
        'B.�o���������' => 'B.�o���������',
        'C.������' => 'C.������',
      ),
      'memo' => '',
    );
  
    $fd_var['itemno'] = array( 
      'ename' => 'itemno',
      'cname' => '���إN�X',
      'type' => 'p',
      'value' => '<I>(�t�Φ۰ʽs�X)</I>',
      'readonly' => 'readonly',
      'memo' => '',
    );
  
    $fd_var['item_name'] = array(
      'ename' => 'item_name',
      'cname' => '���ئW��',
      'type' => 'text',
      'value' => '',
      'memo' => "",
    );
  
    $fd_var['field_type'] = array(
      'ename' => 'field_type',
      'cname' => '�n������',
      'type' => 'select',
      'option' => array(
        '--�п��--' => null,
        '01.����r����' => '01.����r����',
        '02.�h���r����' => '02.�h���r����',
        '03.����϶�' => '03.����϶�',
        '04.��@���' => '04.��@���',
        '05.�ɮפW��' => '05.�ɮפW��',
      ),
      'memo' => '',
    );

    $fd_var['default'] = array(
      'ename' => 'default',
      'cname' => '�w�]���',
      'type' => 'checkbox',
      'value' => '',
      'checked' => '',
      'memo' => '',
    );

    $fd_var['memo'] = array(
      'ename' => 'memo',
      'cname' => '�d�һ���',
      'type' => 'textarea',
      'value' => '',
      'checked' => '',
      'memo' => '',
    );

    $fd_var['b_name'] = array(
      'ename' => 'b_name',
      'cname' => '���ɤH',
      'type' => 'p',
      'value' => $_SESSION['login_name'],
      'readonly' => 'readonly',
      'memo' => '',
    );

    $fd_var['b_date'] = array(
      'ename' => 'b_date',
      'cname' => '���ɤ��',
      'type' => 'p',
      'value' => $f_var['dateTime'],
      'readonly' => 'readonly',
      'memo' => '',
    );

    $fd_var['delete'] = array(
      'ename' => 'delete',
      'cname' => '�@�o',
      'type' => 'p',
      'value' => '<button class="add_del">�M��</button>',
      'memo' => '',
    );

    $f_var['fd'] = $fd_var;
    return;
  }

?>