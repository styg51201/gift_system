<?php 
//�z�w�w�w�w�w�s�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�{
//�x�t�ΦW��: �xgift_config�@  �@                                              �x
//�x         �x                                                              �x
//�x�{���W��: �xgift_config.php                                                �x
//�x�{������: �x§�~�޲z�t��-�]�w��                                      �x
//�x�˪O�W��: �xgift_config.tpl                                                 �x
//�x          �x                                                              �x
//�x��Ʈw  : �xdocs                                                          �x
//�x��ƪ�  : �xgift_config (�]�w��)                                                    �x
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
//�x�]�p���: �x2021.03.09                                                    �x
//�|�w�w�w�w�w�r�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�}

include_once('/home/sl/public_html/sl_init.php'); 
u_setvar($f_var);
include_once($mtp_url."class.TemplatePower.inc.php");
$f_var["tp"] = new  TemplatePower($f_var['tpl']);
$f_var["tp"]-> assignInclude ("tb_sl_tpl_1","/home/sl/public_html/sl_tpl_1.tpl");
$f_var["tp"]-> prepare();


// for ajax 
if ($_REQUEST['ajax_get']=='ajax_get_emp') {
  $q = mb_convert_encoding($_REQUEST["q"],'big5','utf-8');

  sl_open('sl');
  $query = "select empno,name from pass 
            where empno like '{$q}%' or name like '%{$q}%' order by empno ASC";
  $result = mysql_query($query);
  // print_r($row) ;
  while ($row = mysql_fetch_assoc($result)) {
    $data = mb_convert_encoding("{$row['empno']}-{$row['name']}",'UTF-8','big5');
    echo "{$data}\n";
  }
  exit;
}

if($_REQUEST['msel'] == 11 ){
  sl_open($f_var['mdb']); // �}�Ҹ�Ʈw
  ajax_save($f_var);
  mysql_close(); // ������Ʈw
  exit;
}
// end ajax

include_once($sl_header_php);

if( u_chk_access($f_var) ){ //�v���]�w

  sl_open($f_var['mdb']); // �}�Ҹ�Ʈw
  switch ($f_var['msel']) {
    case "21": // �ק�-�x�s
      u_save($f_var);
    break;
    default:
      u_list($f_var);
    break;
  }

}else{
  sl_errmsg('�z�L�v���[��!!');
}

u_link($f_var); //�s���]�w

$f_var["tp"]-> printToScreen ();
mysql_close(); // ������Ʈw

include_once($sl_footer_php); // footer


// **************************************************************************
//  ��ƦW��: u_link()
//  ��ƥ\��: �s���]�w
//  �ϥΤ覡: u_link(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_link(&$f_var){

  $f_var["tp"]-> newBlock('tb_link');
  $f_var["tp"]-> assign("tv_home","./"); //����

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
  $f_var['tp']-> assign('tv_action',$f_var['mphp_name'].'.php?msel=21');


  if( $f_var['IT0002'] == 'Y' ){
    $f_var['tp']-> newBlock('tb_it_add');

    $sql = "SELECT * FROM {$f_var['mtable']['config']} 
          WHERE d_date = '0000-00-00 00:00:00'
          AND `config_key` = 'gift_quota_type'";

    $result = mysql_query($sql);
    while( $row = mysql_fetch_assoc($result) ){
      $f_var['tp']-> newBlock('tb_area_option');
      $f_var['tp']-> assign('tv_value',$row['config_value']);
      $f_var['tp']-> assign('tv_show',$row['config_value']);
    }
  }


  $sql = "SELECT con.*,p.name FROM {$f_var['mtable']['config']} as con
          LEFT JOIN  sl.pass as p ON con.access_empno = p.empno
          WHERE con.d_date = '0000-00-00 00:00:00'
          ";

  $result = mysql_query($sql);
  if( mysql_num_rows($result) > 0 ){
    $i = 0;
    while( $row = mysql_fetch_assoc($result) ){
      
      switch( $row['config_key'] ){
        case 'gift_head_area':
          $i++;
          $f_var['tp']-> newBlock('tb_area_tr');
          $f_var['tp']-> assign('tv_s_num',$row['s_num']);
          $f_var['tp']-> assign('tv_num',$i);
          $f_var['tp']-> assign('tv_area',$row['config_value']);
          $f_var['tp']-> assign('tv_quota',$row['quota_type']);
          $f_var['tp']-> assign('tv_empno',$row['access_empno']);
          $f_var['tp']-> assign('tv_name',$row['name']);
          $f_var['tp']-> assign('tv_address',$row['address']);
        break;
        case 'base_rev':
          $f_var['tp']-> assign('tb_list.tv_rev',$row['config_value']);
        break;
        case 'base_gp':
          $f_var['tp']-> assign('tb_list.tv_gp',$row['config_value']);
        break;
        case 'fina_access':
          $f_var['tp']-> assign('tb_list.tv_fina_empno',$row['access_empno']);
          $f_var['tp']-> assign('tb_list.tv_fina_name',$row['name']);
        break;
      }
    }
  }


  
  
  
  return;
} 


// **************************************************************************
//  ��ƦW��: ajax_save()
//  ��ƥ\��: �x�s
//  �ϥΤ覡: ajax_save(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function ajax_save(&$f_var){

  
  $_POST['json'] = stripslashes($_POST['json']); //ajax �L�����޸����ϱ׽u,�ন������޸�
  $data = json_decode($_POST['json'],true); // json�r�� �ন array

  //�h�Ů�
  foreach( $data as $key => $val ){
    $val = mb_convert_encoding($val,'Big5','utf-8'); //ajax �L�ӬOutf-8 ,�নbig5
    $data[ $key ] = trim($val);
  }

  $data['s_num'] = ReturnInt($data['s_num']);
  $result = mysql_query("SELECT * FROM {$f_var['mtable']['config']} WHERE `s_num` = {$data['s_num']}");

  if( mysql_num_rows($result) > 0 ){ //update

    $sql = "UPDATE {$f_var['mtable']['config']}
            SET `config_value` = '{$data["area"]}' ,
                `access_empno` = '{$data["empno"]}' ,
                `quota_type` = '{$data["quota"]}' ,
                `address` = '{$data["address"]}' ,
                `m_empno`= '{$_SESSION['login_empno']}' ,
                `m_dept_id`= '{$_SESSION['login_dept_id']}' ,
                `m_proc`= '{$f_var['mphp_name']}' ,
                `m_date`= now()
            WHERE `s_num` = {$data['s_num']} 
            AND `config_key` = 'gift_head_area'
            ";
    
  }else{ //insert

    $ins_key = '`s_num`'      ;  $ins_val = '""';
    $ins_key .= ',`config_key`'     ;  $ins_val .= ",'gift_head_area'";
    $ins_key .= ',`config_value`'     ;  $ins_val .= ",'{$data["area"]}'";
    $ins_key .= ',`access_empno`' ;  $ins_val .= ",'{$data["empno"]}'";
    $ins_key .= ',`quota_type`'     ;  $ins_val .= ",'{$data["quota"]}'";
    $ins_key .= ',`address`'     ;  $ins_val .= ",'{$data["address"]}'";
    $ins_key .= ',`b_empno`'  ;  $ins_val .= ",'{$_SESSION['login_empno']}'";
    $ins_key .= ',`b_dept_id`' ;  $ins_val .= ",'{$_SESSION['login_dept_id']}'";
    $ins_key .= ',`b_proc`'   ;  $ins_val .= ",'{$f_var['mphp_name']}'";
    $ins_key .= ',`b_date`'   ;  $ins_val .= ",now()";

    $sql = "INSERT INTO {$f_var['mtable']['config']}
            ( {$ins_key} ) values ( {$ins_val} ) ";

  }


  $result = mysql_query($sql);
  // echo $sql;
  // return;

  if( $result ){
    $res = 'Y';
    // echo '�s�W���\..';
  }else{
    $res = 'N';
  }

  $json = '{"res":"'.$res.'","error":"'.mysql_error().'"}';
  $json = mb_convert_encoding($json,'utf-8','Big5'); //ajax�L�h �নutf8
  echo $json;

}

// **************************************************************************
//  ��ƦW��: u_save()
//  ��ƥ\��: �x�s
//  �ϥΤ覡: u_save(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_save(&$f_var){

  foreach( $_POST as $key => $val ){
    
    $upd_key = '';
    $upd_val = '';
    $sql_where = '';

    switch( $key ){
      case 'base_rev':
        $upd_key = 'config_value';
        $upd_val = trim($val);
        $sql_where = "and config_key = 'base_rev'";
      break;
      case 'base_gp':
        $upd_key = 'config_value';
        $upd_val = trim($val);
        $sql_where = "and config_key = 'base_gp'";
      break;
      case 'fina_empno':
        $upd_key = 'access_empno';
        $upd_val = trim($val);
        $sql_where = "and config_key = 'fina_access'";
      break;
    }

    if( $upd_key == '' ) continue;

    $sql = "UPDATE {$f_var['mtable']['config']}
            SET {$upd_key} = '{$upd_val}' 
            WHERE d_date = '0000-00-00 00:00:00'
            {$sql_where} ";

    $result = mysql_query($sql);
    if( !$result ){
      sl_showsql($sql);
      sl_errmsg('�ק異��!!<br>'.mysql_error());
      return;
    }

  }
  
  echo sl_jreplace($f_var['mphp_name'].'.php');
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
    while (list($f_fd_name,$f_fd_value) = each($_REQUEST)) {
      //echo "$f_fd_name=$f_fd_value----";
      $f_var[$f_fd_name] = $f_fd_value;
    }
  }

  // ���ǤJ�Ȥ��w�]�ȳ]�w Begin.................................................//
  if($f_var['msel'] == NULL){
    $f_var['msel'] = 4;
  }
  if(NULL==$f_var['f_page']) {
    $f_var['f_page']  = 1;  //����
  }
  if(NULL==$f_var['max_page']) {
    $f_var['max_page']  = 1;  //�̤j����
  }

  
  // ���ǤJ�Ȥ��w�]�ȳ]�w End ..................................................//


  $f_var['mphp_name'] = u_showproc(); //�{���W��
  $f_var['show_year'] = '4';
  $f_var['msel_name'] = array('1'=>'�s�W','2'=>'�ק�','3'=>'�R��','4'=>'�s��','5'=>'�d��','6'=>'���w�q','7'=>'�C�L'); // msel ����
  $f_var['ie_h_title'] = '§�~�޲z�t��-�]�w��'; // �������D
  $f_var['msub_title'] = '§�~�޲z�t��-�]�w��'; // �{���Ƽ��D
  $f_var['mmaxline'] = 10; // �C���̤j����
  $f_var['mdb'] = 'docs'; // db name
  $f_var['mupload_dir']  = "/home/docs/public_html/gift/gift_upfile/" ; //�W���ɮר즹��Ƨ�
  $f_var['mtable'] = array('head'=>'gift_head','body'=>'gift_body','type'=>'gift_type','quota'=>'gift_quota',
                          'config'=>'gift_config','guest'=>'gift_guest','item'=>'gift_item'); // �ϥ� table �W��
  $f_var['tpl'] = 'gift_config.tpl'; // �˪��e����
  $f_var['dateTime'] = date('Y-m-d H:i:s'); //����

  $f_var['upd_img'] = '<img src="/~sl/img/upd.png" border="0" alt="�ק惡��" title="�ק惡��">';
  $f_var['del_img'] = '<img src="/~sl/img/del.png" border="0" alt="�@�o����" title="�@�o����">';



  return;
}

// **************************************************************************
//  ��ƦW��: u_chk_access()
//  ��ƥ\��: �v���]�w
//  �ϥΤ覡: u_chk_access(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_chk_access(&$f_var){

  $dept_id  = sl_dept_gp($_SESSION["login_hrm_dept_id"]);

  //IT0002 ��T�]�p  
  if( strstr($dept_id,"IT0002")  ){
    // $f_var["IT0002"] = 'Y';
    $f_var["admin"] = 'Y';
    return true;
  }else{ 

    sl_open($f_var['mdb']); // �}�Ҹ�Ʈw

    //��config�̪��v���H��
    $sql = "SELECT * FROM {$f_var['mtable']['config']}
            WHERE access_empno LIKE '${$_SESSION['login_empno']}%' 
            AND d_date ='0000-00-00 00:00:00'";

    $result = mysql_query($sql);
    if( mysql_num_rows($result) > 0 ){
      while( $row = mysql_fetch_assoc($result) ){
        //admin�v���]�wadmin
        if($row['config_key'] == 'admin'){
          $f_var["admin"] = 'Y';
        }
        //�|�p�f�֤H��-�]�wfina
        if($row['config_key'] == 'fina_access'){
          $f_var["fina"] = 'Y';
        }
      }

      //admin�H���q�L
      if($f_var["admin"] == 'Y') return true;
      
    }
  }

  return false;
  
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