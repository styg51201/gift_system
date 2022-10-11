<?php 
//�z�w�w�w�w�w�s�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�{
//�x�t�ΦW��: �xgift_type�@  �@                                              �x
//�x         �x                                                              �x
//�x�{���W��: �xgift_type.php                                                �x
//�x�{������: |�~�`§�~�~���޲z                                      �x
//�x�˪O�W��: �xgift_type.tpl                                                 �x
//�x          �x                                                              �x
//�x��Ʈw  : �xdocs                                                          �x
//�x��ƪ�  : �xgift_type  �� §�~�~����                                  
//�x          �x                                                              �x
//�x          �x                                                              �x
//�x�{���]�p: �x���t                                                          �x
//�x�]�p���: �x2021.02.26                                                    �x
//�|�w�w�w�w�w�r�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�}

include_once('../init/sl_init.php'); 
u_setvar($f_var);
include_once('../init/sl_header.php');
include_once("../TemplatePower/class.TemplatePower.inc.php");
$f_var["tp"] = new  TemplatePower($f_var['tpl']);
$f_var["tp"]-> prepare();


// include_once('./gift_access.php'); 


$f_var['con_db'] = sl_open($f_var['mdb']); // �}�Ҹ�Ʈw
switch ($f_var['msel']) {
  case "1": // �s�W-�e��
    u_in_scr($f_var);
  break;
  case "11": // �s�W-�x�s
    u_save($f_var);
  break;
  case "4": // �s��
    u_list($f_var);
  break;
  case "31": // �@�o
    $sql = "UPDATE {$f_var['mtable']['type']}
            SET `d_empno`= '{$_SESSION['login_empno']}' ,
                `d_dept_id`= '{$_SESSION['login_dept_id']}' ,
                `d_proc`= '{$f_var['mphp_name']}' ,
                `d_date`= now() 
            WHERE `s_num` = {$f_var['f_s_num']}";
    if( mysqli_query($f_var['con_db'],$sql) ){
      echo sl_jreplace($f_var['mphp_name'].".php?f_year={$_GET['f_year']}&f_festival={$_GET['f_festival']}");
    }else{
      $f_var["tp"]-> assign("_ROOT.tv_alert",'�@�o����!!');
      $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
    }
  break;
  default:
  break;
}


u_link($f_var); //�s���]�w

$f_var["tp"]-> printToScreen ();
mysqli_close($f_var['con_db']); // ������Ʈw

// include_once($sl_footer_php); // footer


// **************************************************************************
//  ��ƦW��: u_link()
//  ��ƥ\��: �s���]�w
//  �ϥΤ覡: u_link(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_link(&$f_var){

  $f_var["tp"]-> newBlock('tb_link');
  $f_var["tp"]-> assign("tv_home",'./'); //����
  $f_var["tp"]-> assign("tv_list",u_showproc().".php?msel=4&f_page=1&f_year={$f_var['f_year']}&f_festival={$f_var['f_festival']}"); //�s��

  if($f_var['msel'] == '4' ){

    $f_var["tp"]-> newBlock('tb_add');
    $f_var["tp"]-> assign("tv_add",u_showproc().".php?msel=1"); //�s�W

    $f_var["tp"]-> newBlock('tb_page');
    $f_var["tp"]-> assign("tv_f_page",$f_var['f_page']); //�ثe����
    $f_var["tp"]-> assign("tv_max_page",$f_var['max_page']); //�̤j�̦�

    $up_page = $f_var['f_page'] - 1 <= 1 ? 1 : $f_var['f_page'] - 1 ; //�P�_����,�̧C�O1
    $f_var["tp"]-> assign("tv_up_page",u_showproc().".php?msel=4&f_page={$up_page}&f_year={$f_var['f_year']}&f_festival={$f_var['f_festival']}"); //�W�@��

    //�P�_����,�̰��O$f_var['max_page']
    $dn_page = $f_var['f_page'] + 1 >= $f_var['max_page'] ? $f_var['max_page'] : $f_var['f_page'] + 1 ; 
    $f_var["tp"]-> assign("tv_dn_page",u_showproc().".php?msel=4&f_page={$dn_page}&f_year={$f_var['f_year']}&f_festival={$f_var['f_festival']}"); //�U�@��
  }


  

}


// **************************************************************************
//  ��ƦW��: u_list()
//  ��ƥ\��: �C��
//  �ϥΤ覡: u_list(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_list(&$f_var){

 
  $f_var['tp']-> newBlock('tb_list');

  $f_var['tp']-> newBlock('tb_select');
  $f_var["tp"]-> assign("tv_name",'year');
  $f_var["tp"]-> assign("tv_text",'�~');
  foreach( $f_var['s_year']['value'] as $ind => $v ){
    $f_var["tp"]-> newBlock('tb_option');
    $f_var["tp"]-> assign("tv_show",$f_var['s_year']['show'][$ind]);
    $f_var["tp"]-> assign("tv_value",$v);
    if( $f_var['f_year'] == $v ){
      $f_var["tp"]-> assign("tv_selected",'selected');
    }
  } 

  $f_var['tp']-> newBlock('tb_select');
  $f_var["tp"]-> assign("tv_name",'festival');
  foreach( $f_var['s_festival']['value'] as $ind => $v ){
    $f_var["tp"]-> newBlock('tb_option');
    $f_var["tp"]-> assign("tv_show",$f_var['s_festival']['show'][$ind]);
    $f_var["tp"]-> assign("tv_value",$v);
    if( $f_var['f_festival'] == $v ){
      $f_var["tp"]-> assign("tv_selected",'selected');
    }
  }  

  //�ھڭ��X����ܪ�sql 
  $limit_sql = " LIMIT ".( ( $f_var['f_page'] -1 ) * $f_var['mmaxline'] )." , {$f_var['mmaxline']}"; 

  $sql = "SELECT * FROM {$f_var['mtable']['type']} 
          WHERE `d_date` = '0000-00-00 00:00:00'
          AND `year` = '{$f_var['f_year']}'
          AND `festival` = '{$f_var['f_festival']}'
          ORDER BY `b_date` DESC";

  $qty_cnt = mysqli_num_rows( mysqli_query($f_var['con_db'],$sql) ) ;
  if( $qty_cnt > 0 ){
    $f_var['max_page'] = floor(((($f_var['mmaxline']-1)+$qty_cnt)/$f_var['mmaxline'])); // �D��ơA�̤j����
  }

  $sql .= $limit_sql;
  // sl_showsql($sql);
  $result = mysqli_query($f_var['con_db'],$sql);
  if( mysqli_num_rows($result) > 0 ){
    $i = 0;
    while( $row = mysqli_fetch_assoc($result) ){
      $i++;
      $f_var['tp']-> newBlock('tb_list_tr');
      $f_var['tp']-> assign('tv_td00',$i);
      $f_var['tp']-> assign('tv_td01',$row['type']);
      $f_var['tp']-> assign('tv_td02',$row['company']);
      $f_var['tp']-> assign('tv_td03',$row['name']);
      $f_var['tp']-> assign('tv_td04',$row['price'].'��');

      $path = $f_var['mupload_dir'].$row['file'];
      $f_var['tp']-> assign('tv_td05',"<img src='{$path}' class='list_img'>");

      $f_var['tp']-> assign('tv_td06',nl2br($row['content']));
      $f_var['tp']-> assign('tv_td07',"<a href='{$f_var['mphp_name']}.php?msel=1&f_s_num={$row['s_num']}'>{$f_var['upd_img']}</a>");
      $f_var['tp']-> assign('tv_td08',"<a href='{$f_var['mphp_name']}.php?msel=31&f_s_num={$row['s_num']}&f_year={$f_var['f_year']}&f_festival={$f_var['f_festival']}'>{$f_var['del_img']}</a>");
    }

  }else{
    $f_var['tp']-> newBlock('tb_list_none');
  }
  
  return;
} 


// **************************************************************************
//  ��ƦW��: u_save()
//  ��ƥ\��: �x�s
//  �ϥΤ覡: u_save(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_save(&$f_var){

  //�h�Ů�
  foreach( $_POST as $key => $val ){
    $_POST[$key] = trim($val);
  }

  $_POST['s_num'] = ReturnInt($_POST['s_num']);
  $result = mysqli_query($f_var['con_db'],"SELECT * FROM {$f_var['mtable']['type']} WHERE s_num = {$_POST['s_num']}");
  
  if( mysqli_num_rows($result) > 0 ){ //update

    //�ɮ׳B�z
    if( $_FILES['file']['error'] == 4 ){ //�S�W�ǹ��� => $_POST["file"]=��DB�̭쥻���ɦW
      $row = mysqli_fetch_assoc($result);
      $file_name = $row['file'];
    }else{ //���W�� => �O���ɦW,�h���ɮ�

      $_POST['file'] = $f_var['mupload_dir'].$_FILES[ 'file' ]['name']; //�x�s���|+�ɦW 
      if( !move_uploaded_file($_FILES[ 'file' ]['tmp_name'], $_POST['file'] ) ){ 
        $f_var["tp"]-> assign("_ROOT.tv_alert",'�ɮפW�ǥ���!!');
        return;
      }
      $file_name = $_FILES[ 'file' ]['name'];
    }

    $sql = "UPDATE {$f_var['mtable']['type']}
            SET `year` = '{$_POST["year"]}' ,
                `festival` = '{$_POST["festival"]}' ,
                `type` = '{$_POST["type"]}' ,
                `company` = '{$_POST["company"]}' ,
                `name` = '{$_POST["name"]}' ,
                `price` = '{$_POST["price"]}' ,
                `file` = '{$file_name}' ,
                `content` = '{$_POST["content"]}' ,
                `m_empno`= '{$_SESSION['login_empno']}' ,
                `m_dept_id`= '{$_SESSION['login_dept_id']}' ,
                `m_proc`= '{$f_var['mphp_name']}' ,
                `m_date`= now()
            WHERE `s_num` = {$_POST['s_num']} 
            ";
    
  }else{ //insert

    $_POST['file'] = $f_var['mupload_dir'].$_FILES[ 'file' ]['name']; //�x�s���|+�ɦW 
    if( !move_uploaded_file($_FILES[ 'file' ]['tmp_name'], $_POST['file'] ) ){ 
      $f_var["tp"]-> assign("_ROOT.tv_alert",'�ɮפW�ǥ���!!');
      return;
    }

    $ins_key = '`s_num`'      ;  $ins_val = '""';
    $ins_key .= ',`year`'     ;  $ins_val .= ",'{$_POST["year"]}'";
    $ins_key .= ',`festival`' ;  $ins_val .= ",'{$_POST["festival"]}'";
    $ins_key .= ',`type`'     ;  $ins_val .= ",'{$_POST["type"]}'";
    $ins_key .= ',`company`'  ;  $ins_val .= ",'{$_POST["company"]}'";
    $ins_key .= ',`name`'     ;  $ins_val .= ",'{$_POST["name"]}'";
    $ins_key .= ',`price`'    ;  $ins_val .= ",'{$_POST["price"]}'";
    $ins_key .= ',`file`'     ;  $ins_val .= ",'{$_FILES['file']['name']}'";
    $ins_key .= ',`content`'  ;  $ins_val .= ",'{$_POST["content"]}'";
    $ins_key .= ',`b_empno`'  ;  $ins_val .= ",'{$_SESSION['login_empno']}'";
    $ins_key .= ',`b_dept_id`' ;  $ins_val .= ",'{$_SESSION['login_dept_id']}'";
    $ins_key .= ',`b_proc`'   ;  $ins_val .= ",'{$f_var['mphp_name']}'";
    $ins_key .= ',`b_date`'   ;  $ins_val .= ",now()";
    $ins_key .= ',`fromip`'   ;  $ins_val .= ",'{$_SERVER['REMOTE_ADDR']}'";


    $sql = "INSERT INTO {$f_var['mtable']['type']}
            ( {$ins_key} ) values ( {$ins_val} ) ";

  }

  $result = mysqli_query($f_var['con_db'],$sql);

  if( $result ){
    echo sl_jreplace($f_var['mphp_name'].".php?f_year={$_POST['year']}&f_festival={$_POST['festival']}");
    // echo '�s�W���\..';
  }else{
    $f_var["tp"]-> assign("_ROOT.tv_alert",'�x�s����!!');
    $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
  }

}

// **************************************************************************
//  ��ƦW��: u_in_scr()
//  ��ƥ\��: �s�W/�ק�
//  �ϥΤ覡: u_in_scr(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_in_scr(&$f_var) {

  $f_var["tp"]-> newBlock('tb_insert');
  $f_var["tp"]-> assign("tv_action",$f_var['mphp_name'].'.php?msel=11');
  $f_var["tp"]-> assign("tv_msel_name",$f_var['f_s_num']?'�ק�':'�s�W');



  $f_var['f_s_num'] = ReturnInt($f_var['f_s_num']);

  $sql = "SELECT * FROM {$f_var['mtable']['type']} 
          WHERE s_num = {$f_var['f_s_num']}
          AND d_date = '0000-00-00 00:00:00'
  ";

  $row = array();
  $result = mysqli_query($f_var['con_db'],$sql);
  if( mysqli_num_rows($result) > 0 ){
    $row = mysqli_fetch_assoc($result);
  }

  
  foreach($f_var['fd'] as $key => $val){

    $f_var["tp"]-> newBlock('tb_ins_tr');
    $f_var["tp"]-> assign("tv_cname",$val['cname']);
    $f_var["tp"]-> assign("tv_memo",$val['memo']);

    if( $val['pkey'] == 'Y' ){
      $f_var["tp"]-> assign("tv_pkey","<span class='red'>*</span>");
    }


    $f_var["tp"]-> newBlock('tb_ins_'.$val['type']);

    $f_var["tp"]-> assign("tv_ename",$val['ename']);
    $f_var["tp"]-> assign("tv_value",$row[ $val['ename'] ]);
    $f_var["tp"]-> assign("tv_size",$val['size']);
    $f_var["tp"]-> assign("tv_maxlength",$val['maxlength']);


    switch( $val['type'] ){
      case 'select':
        foreach( $val['show'] as $ind => $v ){
          $f_var["tp"]-> newBlock('tb_ins_option');
          $f_var["tp"]-> assign("tv_show",$val['show'][$ind]);
          $f_var["tp"]-> assign("tv_value",$val['value'][$ind]);
          if( $row[ $val['ename'] ] == $val['value'][$ind] ){
            $f_var["tp"]-> assign("tv_selected",'selected');
          }
          if( !$f_var['f_s_num'] && date('Y') == $val['value'][$ind] ){ //f_s_num ���� = �s�W,�w�]���~
            $f_var["tp"]-> assign("tv_selected",'selected');
          }
        }  
      break;
      case 'file':
        if( $row[ $val['ename'] ] ){ //���� = �ק� �A�q����
          $path = $f_var['mupload_dir'].$row[ $val['ename'] ];
          $f_var['tp']-> assign('tv_img',"<img src='{$path}' class='list_img'>");
        }
      break;
      case 'hidden':
        $f_var["tp"]-> assign("tb_ins_tr.tv_style",'display:none');
      break;
    }

  }
  return;
}


// **************************************************************************
//  ��ƦW��: u_setvar()
//  ��ƥ\��: �ܼƳ]�w
//  �ϥΤ覡: u_setvar(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_setvar(&$f_var) {

  //echo $_REQUEST.'---------';
  if(is_array($_REQUEST)) { // ����Ƥ~�B�z
    foreach($_REQUEST as $f_fd_name => $f_fd_value){
      $f_var[$f_fd_name] = $f_fd_value;
    }
  }

  // ���ǤJ�Ȥ��w�]�ȳ]�w Begin.................................................//
  if(!isset($f_var['msel'])){
    $f_var['msel'] = 4;
  }
  if(!isset($f_var['f_page'])) {
    $f_var['f_page']  = 1;  //����
  }
  if(!isset($f_var['max_page'])) {
    $f_var['max_page']  = 1;  //�̤j����
  }
  if(!isset($f_var['f_year'])){
    $f_var['f_year'] = date('Y'); //�~��
  }
  if(!isset($f_var['f_festival'])){
    if( date('m')>2 && date('m')<10 ){
      $f_var['f_festival'] = '����`'; //�`��
    }else{
      $f_var['f_festival'] = '�K�`'; //�`��
    }
  }
  
  // ���ǤJ�Ȥ��w�]�ȳ]�w End ..................................................//


  $f_var['mphp_name'] = u_showproc(); //�{���W��
  $f_var['show_year'] = '4';
  $f_var['msel_name'] = array('1'=>'�s�W','2'=>'�ק�','3'=>'�R��','4'=>'�s��','5'=>'�d��','6'=>'���w�q','7'=>'�C�L'); // msel ����
  $f_var['ie_h_title'] = '�~�`§�~�޲z�t��-§�~�~���޲z'; // �������D
  $f_var['msub_title'] = '�~�`§�~�޲z�t��-§�~�~���޲z'; // �{���Ƽ��D
  $f_var['mmaxline'] = 5; // �C���̤j����
  $f_var['mdb'] = 'heroku'; // db name
  $f_var['mupload_dir']  = "./gift_upfile/" ; //�W���ɮר즹��Ƨ�
  $f_var['mtable'] = array('head'=>'gift_head','body'=>'gift_body','type'=>'gift_type','quota'=>'gift_quota',
                          'config'=>'gift_config','guest'=>'gift_guest','item'=>'gift_item'); // �ϥ� table �W��
  $f_var['tpl'] = 'gift_type.tpl'; // �˪��e����


  $f_var['s_festival']['show'] = array('�K�`','����`'); //�`��ﶵ
  $f_var['s_festival']['value'] = array('�K�`','����`'); //�`��ﶵ

  //�~���ﶵ,�q2021�}�l �� +1�~(���~)
  for($i = 2021; $i<=(date('Y')+1); $i++){
    $f_var['s_year']['show'][] = $i;
    $f_var['s_year']['value'][] = $i;
  }



  $f_var['fd']['s_num'] = array(
    'ename'     => 's_num',
    'cname'     => '�y����',
    'type'      => 'hidden',
    'value'     => '',
    'pkey'      => 'Y',
    'memo'      => '',
    'size'      => '',
    'maxlength' => '',

  );

  $f_var['fd']['year'] = array(
    'ename'     => 'year',
    'cname'     => '�~��',
    'type'      => 'select',
    'value'     => $f_var['s_year']['value'],
    'show'      => $f_var['s_year']['show'],
    'pkey'      => 'Y',
    'maxlength' => '4',
    'size'      => '4',
    'memo'      => '',
  );

  $f_var['fd']['festival'] = array(
    'ename'     => 'festival',
    'cname'     => '�`��',
    'type'      => 'select',
    'show'      => $f_var['s_festival']['show'],
    'value'     => $f_var['s_festival']['value'],
    'pkey'      => 'Y',
    'memo'      => '',
    'maxlength' => '',
    'size'      => '',

  );

  $f_var['fd']['type'] = array(
    'ename'     => 'type',
    'cname'     => '���O',
    'type'      => 'text',
    'value'     => '',
    'maxlength' => '10',
    'pkey'      => 'Y',
    'memo'      => '',
    'size'      => '',

  );

  $f_var['fd']['company'] = array(
    'ename'     => 'company',
    'cname'     => '�t��',
    'type'      => 'text',
    'value'     => '',
    'maxlength' => '50',
    'pkey'      => 'Y',
    'memo'      => '',
    'size'      => '',

  );

  $f_var['fd']['name'] = array(
    'ename'     => 'name',
    'cname'     => '���~�W��',
    'type'      => 'text',
    'value'     => '',
    'maxlength' => '50',
    'pkey'      => 'Y',
    'size'      => '',
    'memo'      => '',
  );

  $f_var['fd']['price'] = array(
    'ename'     => 'price',
    'cname'     => '���',
    'type'      => 'text',
    'value'     => '',
    'maxlength' => '10',
    'pkey'      => 'Y',
    'size'      => '',
    'memo'      => '��'
  );

  $f_var['fd']['file'] = array(
    'ename'     => 'file',
    'cname'     => '���~',
    'type'      => 'file',
    'value'     => '',
    'pkey'      => isset($f_var['f_s_num']) ? '' : 'Y', //���� = �ק�A����pkey
    'size'      => '',
    'maxlength' => '',
    'memo'      => '(�ɮפj�p��500KB)',
  );

  $f_var['fd']['content'] = array(
    'ename'     => 'content',
    'cname'     => '���e��',
    'type'      => 'textarea',
    'value'     => '',
    'pkey'      => 'Y',
    'size'      => '',
    'maxlength' => '',
    'memo'      => '',
  );

  return;
}

// **************************************************************************
//  ��ƦW��: ReturnInt()
//  ��ƥ\��: �ഫ�禡�A�ǤJ����ƭY���O�Ʀr�A�@���ন0
//  �ϥΤ覡: ReturnInt($data)
//  �{���]�p: Bruce
//  �]�p���: 2020.06.18
// **************************************************************************
function ReturnInt($data){
  $result=is_numeric($data)?$data:"0";
  return $result;
}


?>