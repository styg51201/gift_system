<?php 
//�z�w�w�w�w�w�s�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�{
//�x�t�ΦW��: �xgift_quota�@  �@                                              �x
//�x         �x                                                              �x
//�x�{���W��: �xgift_quota.php                                                �x
//�x�{������: �x§�~�޲z�t��-���&�B�׳]�w                                      �x
//�x�˪O�W��: �xgift_quota.tpl                                                 �x
//�x          �x                                                              �x
//�x��Ʈw:   �xdocs                                                          �x
//�x��ƪ�  : �xgift_quota                                                     �x
//�x         �xgift_config (�]�w��)                                                             �x
//|
//�x�����{��: �x/home/sl/public_html/sl_init.php �@�Ψ��                     �x
//�x          �x/home/sl/public_html/tp/*.*      �˪O�M��                     �x
//�x          �x                                                              �x
//�x          �x/home/sl/public_html/sl.css      css ��                       �x
//�x          �x/home/sl/public_html/sl.js        javascript �ۭq���         �x
//�x          �x/home/sl/public_html/sl_header.inc.php  ����                  �x
//�x          �x/home/sl/public_html/sl_footer.inc.php  ����                  �x
//�x          �x                                                              �x
//�x�{���]�p: �x���t                                                          �x
//�x�]�p���: �x2021.03.03                                                    �x
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
  case '11':
    u_save($f_var);
  break;
  default:
    u_list($f_var);
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

  $sql = "SELECT * FROM {$f_var['mtable']['config']}
          WHERE `d_date` = '0000-00-00 00:00:00' 
          AND `config_key` = 'gift_quota_type'";


  $result = mysqli_query($f_var['con_db'],$sql);
  if( mysqli_num_rows($result) > 0 ){
    $f_var['tp']-> newBlock('tb_main_table');
    $f_var['tp']-> assign('tv_colspan',mysqli_num_rows($result));

    $i = 0;
    $main_table = array(); //�`��ΡA�x�s�ӦU��������� $main_table[�B��][���] = �B��;
    $main_base_num = array(); //�`��ΡA�x�s�Ҧ����
    
    while( $row = mysqli_fetch_assoc($result) ){
      $i++;

      //tab
      $f_var['tp']-> newBlock('tb_list_li');
      $f_var['tp']-> assign('tv_num',$i);
      $f_var['tp']-> assign('tv_name',$row['config_value']);

      //�`��table
      $f_var['tp']-> newBlock('tb_main_th');
      $f_var['tp']-> assign('tv_name',$row['config_value']);

      //�U�۪�table
      $f_var['tp']-> newBlock('tb_list_card');
      $f_var['tp']-> assign('tv_num',$i);
      $f_var['tp']-> assign('tv_name',$row['config_value']);
      $f_var['tp']-> assign('tv_type',$row['config_value']);
      $f_var['tp']-> newBlock('tb_list_add');

      

      $sql_2 = "SELECT *,
                       CASE `base_num` WHEN 'MAX' THEN '1' ELSE '0' END AS order_num ,
                       (SELECT MAX( CONVERT( `base_num` , UNSIGNED ) ) 
                        FROM {$f_var['mtable']['quota']}
                        WHERE `d_date` = '0000-00-00 00:00:00' 
                        AND `type` = '{$row['config_value']}') AS max_base
                FROM {$f_var['mtable']['quota']}
                WHERE `d_date` = '0000-00-00 00:00:00' 
                AND `type` = '{$row['config_value']}'
                ORDER BY order_num ASC,CONVERT(`base_num`,UNSIGNED) ASC";
      

      $result_2 = mysqli_query($f_var['con_db'],$sql_2);
      if( mysqli_num_rows($result_2) > 0 ){
        while($row_2 = mysqli_fetch_assoc($result_2)){
          $f_var['tp']-> assign('tb_list_card.tv_version',$row_2['version']);

          if( $row_2['base_num'] == 'MAX'){ //�̤j��
            $f_var['tp']-> newBlock('tb_list_tr_max');
            $f_var['tp']-> assign('tv_base','>'.$row_2['max_base']);
            $f_var['tp']-> assign('tv_upd',$f_var['upd_img']);

            $main_table[ $row['config_value'] ][ '>'.$row_2['max_base'] ] = $row_2['quota'];

            $main_base_num[] = '>'.$row_2['max_base'];

          }else{
            $f_var['tp']-> newBlock('tb_list_tr');
            $f_var['tp']-> assign('tv_base',$row_2['base_num']);
            $f_var['tp']-> assign('tv_del',$f_var['del_img']);
            $main_table[ $row['config_value'] ][ $row_2['base_num'] ] = $row_2['quota'];

            $main_base_num[] = $row_2['base_num'];
          }

          $f_var['tp']-> assign('tv_quota',$row_2['quota']);

        }

      }else{
        //�٨S��Ʈ�,�w�]max=500��
        $f_var['tp']-> assign('tb_list_card.tv_version','0');
        $f_var['tp']-> newBlock('tb_list_tr_max');
        $f_var['tp']-> assign('tv_base','>1');
        $f_var['tp']-> assign('tv_quota','500');
        $f_var['tp']-> assign('tv_upd',$f_var['upd_img']);
        $main_table[ $row['config_value'] ][ '>1' ] = '500';
        $main_base_num[] = '>1';
      }
    }

    // �`��print

    $main_base_num = array_unique($main_base_num); //�h�����ƪ����
    usort($main_base_num,'ar_sort'); //�p��j�Ƨ�

    // echo '<pre>'.print_r($main_base_num,1).'</pre>';

    foreach( $main_base_num as $ind => $num ){
      $f_var['tp']-> newBlock('tb_main_tr');
      $f_var['tp']-> newBlock('tb_main_td');
      $f_var['tp']-> assign('tv_value',$num);
      if( substr($num,0,1) == '>' ){
        $f_var['tp']-> assign('tv_class','red');
      }

      foreach( $main_table as $key => $val ){
        $f_var['tp']-> newBlock('tb_main_td');
        $f_var['tp']-> assign('tv_value',$val[$num]);
        if( substr($num,0,1) == '>' ){
          $f_var['tp']-> assign('tv_class','red');
        }
      }
    }

  }else{
    $f_var['tp']-> newBlock('tb_list_none');
  }

  return;
} 

// **************************************************************************
//  ��ƦW��: ar_sort($a,$b)
//  ��ƥ\��: �ۭq�}�C�Ƨ�
//  �ϥΤ覡: ar_sort($a,$b)
// **************************************************************************
function ar_sort($a,$b){
  $x = substr($a,0,1) == '>' ? substr($a,1) : $a ;
  $y = substr($b,0,1) == '>' ? substr($b,1) : $b ;
  if( $x == $y ){
    return substr($a,0,1) == '>' ? 1 : -1;
  }
  return ($x > $y) ? 1 : -1;
}
// **************************************************************************
//  ��ƦW��: u_save()
//  ��ƥ\��: �x�s
//  �ϥΤ覡: u_save(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_save(&$f_var){

  // echo '<pre>'.print_r($_POST,1).'</pre>';
  // exit;
  
  $b_info = " '{$_SESSION['login_empno']}',
              '{$_SESSION['login_dept_id']}',
              '{$f_var['mphp_name']}',
                now()";

  $str = '';
  $new_version = (int)$_POST['version']+1;

  foreach( $_POST['base_num'] as $ind => $val ){
    $str .= ",('{$_POST['type']}',
                '{$new_version}',
                '{$_POST['base_num'][$ind]}',
                '{$_POST['quota'][$ind]}',
                {$b_info})";

  }

  $str = substr($str,1); //�h���Ĥ@�ӳr��

  $sql = "INSERT INTO {$f_var['mtable']['quota']}
          (`type`,`version`,`base_num`,`quota`,`b_empno`,`b_dept_id`,`b_proc`,`b_date`) 
          VALUES {$str} ";

  $result = mysqli_query($f_var['con_db'],$sql);
  if(!$result){
    $f_var["tp"]-> assign("_ROOT.tv_alert",'�x�s����!!');
    $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
    return;
  }

  
  if($_POST['version'] != '0'){
    $sql_2 = "UPDATE {$f_var['mtable']['quota']}
              SET `d_empno`= '{$_SESSION['login_empno']}' ,
                  `d_dept_id`= '{$_SESSION['login_dept_id']}' ,
                  `d_proc`= '{$f_var['mphp_name']}' ,
                  `d_date`= now()
              WHERE `type` = '{$_POST['type']}'
                AND `version` = '{$_POST['version']}'
                AND `d_date` = '0000-00-00 00:00:00'";

    $result_2 = mysqli_query($f_var['con_db'],$sql_2);
    if(!$result){
      $f_var["tp"]-> assign("_ROOT.tv_alert",'�x�s����!!(�¸�ƵL�k�@�o)');
      $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
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
    foreach($_REQUEST as $f_fd_name => $f_fd_value){
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
  $f_var['ie_h_title'] = '�~�`§�~�޲z�t��-���&�B�׳]�w'; // �������D
  $f_var['msub_title'] = '�~�`§�~�޲z�t��-���&�B�׳]�w'; // �{���Ƽ��D
  $f_var['mmaxline'] = 10; // �C���̤j����
  $f_var['mdb'] = 'heroku'; // db name
  $f_var['mupload_dir']  = "./gift_upfile/" ; //�W���ɮר즹��Ƨ�
  $f_var['mtable'] = array('head'=>'gift_head','body'=>'gift_body','type'=>'gift_type','quota'=>'gift_quota',
                          'config'=>'gift_config','guest'=>'gift_guest','item'=>'gift_item'); // �ϥ� table �W��
  $f_var['tpl'] = 'gift_quota.tpl'; // �˪��e����


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