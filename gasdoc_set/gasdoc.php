<?php
//�z�w�w�w�w�w�s�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�{
//�x�t�ΦW��: �xgasdoc.php�@  �@                                       �x
//�x          �x                                                        �x
//�x�{���W��: �xgasdoc.php                                         �x
//�x�{������: |�o����ިt��                                                      �x
//�x�˪O�W��: �xgasdoc.tpl                                                 �x
//�x          �x                                                              �x
//�x��Ʈw  : �xgas                                              �x
//�x��ƪ�  : �xgasdoc
//|          |gasdoc_his
//|          |                                           �x
//�x          �x                                                              �x
//�x�����{��: �x/home/sl/public_html/sl_init.php �@�Ψ��                      �x
//�x          �x                                                              �x
//�x          �x                                                �x
//�x          �x                                                              �x
//�x�{���]�p: �x���t                                                          �x
//�x�]�p���: �x2020.06.01                                                    �x
//�|�w�w�w�w�w�r�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�}


include_once('/home/sl/public_html/sl_init.php'); //���Ψ禡�w


u_setvar(&$f_var); // �{���ܼƳ]�w,������ΰ}�C�ܼ�,���A�� global u_setvar(&$f_var),�ݭn��&,�ǭ�,�i�H�N�Ȧ^��,�᭱�~��έ�

include_once(  $mtp_url."class.TemplatePower.inc.php"  ); 
$f_var["tp"] = new  TemplatePower ( $f_var["tpl"] );  // �˪��e����
$f_var["tp"]-> prepare ();

// ------- for ajax -------

if( $_REQUEST['ajax_hist'] == 'Y' ){
  u_hist(&$f_var);
  exit;
}
if( $_REQUEST['ajax_upfile'] == 'Y' ){
  u_insert(&$f_var);
  exit;
}
if( $_REQUEST['ajax_add'] == 'Y'){
  sl_open($f_var['mdb']);
  $sql = "UPDATE `gasdoc_set` SET `default` = 'Y' WHERE `itemno` = '{$_POST['itemno']}'";
  $result = mysql_query($sql);
  echo mysql_affected_rows();
  mysql_close();
  exit;
}
// ------- end ajax -------

include_once($sl_header_php); // header

if( u_chk_master() ){
  sl_open($f_var['mdb']); // �}�Ҹ�Ʈw
  $f_var["tp"]-> newBlock('tb_css&js');

  switch($f_var['msel']){
    case '5' : // �C��d��
      u_list(&$f_var); 
    break;
    case '4' : // ���O��T
      u_info(&$f_var);
    break;
  }

  mysql_close(); // ������Ʈw
}else{
  sl_errmsg("�� �`��(�`���q)�Ϊo���t�d�H ���v���[��");
}


$f_var["tp"]-> printToScreen ();


include_once($sl_footer_php); // footer



// **************************************************************************
//  ��ƦW��: u_hist($f_var)
//  ��ƥ\��: �^�Ǿ��v���p����
//  �ϥΤ覡: u_hist($f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_hist($f_var){
  sl_open($f_var['mdb']);
  $sql = "SELECT `item_name`,`gd_1`,`gd_2`,h.`itemno`,h.`b_empno`,h.`b_date`
          FROM `{$f_var['mtable']['gasdoc_hist']}` AS h
          LEFT JOIN `gasdoc_set` ON h.`itemno` = `gasdoc_set`.`itemno`
          WHERE `code` = '{$_POST['code']}' AND h.`itemno` = '{$_POST['itemno']}'
          ORDER BY h.`b_date` DESC";

  $result = mysql_query($sql);
  $f_var["tp"]-> newBlock('tb_hist');
  $f_var["tp"]-> assign('tv_item_name',mb_convert_encoding($_POST['item_name'] ,'big5','UTF-8'));
  
  $download = "http://eip.slc.com.tw/~gas/gasdoc_upfile/";
  $i = 1;
  while( $row = mysql_fetch_assoc($result) ){
    $f_var["tp"]-> newBlock('tb_hist_tr');
    $f_var["tp"]-> assign('tv_num',$i);
    $f_var["tp"]-> assign('tv_b_date',$row['b_date']);

    // ����ɤH�m�W
    sl_open('sl');
    $result_name = mysql_query("SELECT `name` FROM `pass` WHERE `empno` = '{$row['b_empno']}'");
    $row_name = mysql_fetch_assoc($result_name);

    $f_var["tp"]-> assign('tv_b_empno',$row_name['name']);

    if( $row['gd_2'] ){
      $row['gd_1'] = sl_4ymd($row['gd_1'],'/').' ~ '.sl_4ymd($row['gd_2'],'/');
    }


    if( substr($_POST['itemno'],0,1) == 'A' ){
      $f_var["tp"]-> newBlock('tb_hist_p');
      $f_var["tp"]-> assign('tv_gd_1',nl2br($row['gd_1']));
    }else{
      $f_var["tp"]-> newBlock('tb_hist_a');
      $file = mb_convert_encoding($row['gd_1'],"UTF-8","big5");
      $file = urlencode($file);
      $f_var["tp"]-> assign('tv_href',$download.$file);
      $f_var["tp"]-> assign('tv_gd_1',$row['gd_1']);
    }

    $i++;
  }

  $res = $f_var["tp"]-> getOutputContent();
  $res = mb_convert_encoding($res ,'UTF-8','big5');
  echo trim($res);
  mysql_close();
}
// **************************************************************************
//  ��ƦW��: u_insert($f_var)
//  ��ƥ\��: �g�iDB
//  �ϥΤ覡: u_insert($f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************

function u_insert ($f_var){
  sl_open($f_var['mdb']);

  //��X���o���Ҧ������ظ��,����
  $db_itemno = array();
  $sql_chk = "SELECT *
              FROM `{$f_var['mtable']['gasdoc']}`
              WHERE `d_date` = '0000-00-00 00:00:00' AND `code` = '{$f_var['code']}'";

  $result_chk = mysql_query($sql_chk);
  while ( $row_chk = mysql_fetch_assoc($result_chk) ){
    $db_itemno[ $row_chk['itemno'] ] = $row_chk;
  }


  $pattern ='/^([A-C]\d{3})(_s)?$/'; //���W��F�� ex: A002 or A002_s(����϶�)

  $b_info = " '{$_SESSION['login_empno']}' , '{$_SESSION['login_dept_id']}' , '{$f_var['mphp_name']}' , '{$f_var['dateTime']}' , '{$_SERVER['REMOTE_ADDR']}'";

  
  // print_r($_FILES);
  // exit;

  foreach ( $_FILES as $key => $val ){
    $name = $val['name'];
    if( $val['error'] == 4 ) continue; // �S���W�Ǥ��N���L
    if( !move_uploaded_file($_FILES[ $key ]['tmp_name'], $f_var['mupload_dir'].$name) ){
      echo mb_convert_encoding('�ɮפW�ǥ���!' ,'UTF-8','big5');
      exit;
    }
     $_POST[ $key ] = $name;  // �ⶵ��itemno �s��post��,�U���g�iDB�n��
  }


  foreach( $_POST as $key => $val ){

    $val = mb_convert_encoding($val,'Big5','utf-8'); //ajax �L�ӬOutf-8 ,�নbig5

    if( $key == 'rent_type' ){
      $sql = "UPDATE `company`
              SET `rent_type` = '{$val}',
                  `m_empno`= '{$_SESSION['login_empno']}' ,
                  `m_dept_id`= '{$_SESSION['login_dept_id']}' ,
                  `m_proc`= '{$f_var['mphp_name']}' ,
                  `m_date`= '{$f_var['dateTime']}' 
              WHERE `code` = '{$f_var['code']}'";
    }else{

      if( preg_match($pattern,$key,$matches) ){ //�ŦX�N�X�榡�� , $matches[1] = ���إN�X(A002)
        
        if( !$db_itemno[ $matches[1] ] && $val ){  // �P�_DB���S����� && ���O�ŭ� true -> insert

          $sql = "INSERT INTO `{$f_var['mtable']['gasdoc']}` 
                  (`code`,`itemno`,`gd_1`,`gd_2`,`b_empno`,`b_dept_id`,`b_proc`,`b_date`,`fromip`) 
                  VALUE ( '{$f_var['code']}' , '{$matches[1]}' ,'{$val}' , '{$_POST[ $matches[1].'_e' ]}' ,{$b_info})";

        }else if( $db_itemno[ $matches[1] ]['gd_1'] ==  $val && $db_itemno[ $matches[1] ]['gd_2'] ==  $_POST[ $matches[1].'_e' ] ){ // �P�_�PDB����ƬO�_�@�P true -> ���L,����s
          continue;
        }else{

          $sql = "UPDATE `{$f_var['mtable']['gasdoc']}`
                  SET `gd_1` = '{$val}',
                      `gd_2` = '{$_POST[ $matches[1].'_e' ]}',
                      `m_empno`= '{$_SESSION['login_empno']}' ,
                      `m_dept_id`= '{$_SESSION['login_dept_id']}' ,
                      `m_proc`= '{$f_var['mphp_name']}' ,
                      `m_date`= '{$f_var['dateTime']}' 
                  WHERE `code` = '{$f_var['code']}' AND `itemno` = '{$matches[1]}'";
            
            $hist_b_info = "'{$db_itemno[ $matches[1] ]['b_empno']}' ,
                            '{$db_itemno[ $matches[1] ]['b_dept_id']}' ,
                            '{$db_itemno[ $matches[1] ]['b_proc']}' ,
                            '{$db_itemno[ $matches[1] ]['b_date']}' ,
                            '{$db_itemno[ $matches[1] ]['fromip']}'";

            $hist_m_info = "'{$db_itemno[ $matches[1] ]['m_empno']}' , 
                            '{$db_itemno[ $matches[1] ]['m_dept_id']}' ,
                            '{$db_itemno[ $matches[1] ]['m_proc']}' ,
                            '{$db_itemno[ $matches[1] ]['m_date']}' ,
                            '{$db_itemno[ $matches[1] ]['fromip']}'";

            // $info = m_empno�����ܴN�Om�t�C , �L���ܬOb�t�C (�Ĥ@���s�W���S��m�t�C)
            $info = $db_itemno[ $matches[1] ]['m_empno'] ? $hist_m_info : $hist_b_info;
            
            $sql_hist = "INSERT INTO `{$f_var['mtable']['gasdoc_hist']}` 
                        (`code`,`itemno`,`gd_1`,`gd_2`,`memo`,`b_empno`,`b_dept_id`,`b_proc`,`b_date`,`fromip`) 
                        VALUE ( '{$f_var['code']}' , 
                                '{$matches[1]}' , 
                                '{$db_itemno[ $matches[1] ]['gd_1']}', 
                                '{$db_itemno[ $matches[1] ]['gd_2']}' , 
                                '{$db_itemno[ $matches[1] ]['memo']}' , 
                                {$info})";

        }

      }else{
        continue;
      }
    }

    //  echo "<pre>";
    // print_r($sql);
    // echo "</pre>";

    if( $sql_hist ){
      $result_hist = mysql_query($sql_hist);
      if( !mysql_affected_rows() || !$result_hist ){
        echo mb_convert_encoding('�ƥ��x�s����! �Цb�դ@��' ,'UTF-8','big5');
        mysql_close();
        exit;
      }
    }

    $result = mysql_query($sql);
    if( !mysql_affected_rows() || !$result){
      echo mb_convert_encoding('�x�s����!' ,'UTF-8','big5');
      mysql_close();
      exit;
    }
   
  }


  // echo "<pre>";
  // print_r($sql_hist);
  // echo "</pre>";
  echo mb_convert_encoding('�x�s���\!' ,'UTF-8','big5');
  mysql_close();

}



// **************************************************************************
//  ��ƦW��: u_info()
//  ��ƥ\��: �򥻸�ƦC��
//  �ϥΤ覡: u_info(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_info($f_var){

  $block_arr = array('A'=>array('name'=>'�o���򥻸��'),
                    'B'=>array('name'=>'�o���������'),
                    'C'=>array('name'=>'������') );

  // for �o���N�X,�W��,�Ѫo�t�ӵ�
  $sql_company = "SELECT `code`,`sname`,`rent_type`,
                  CASE `oil_supply` WHEN 1 THEN '���o'
                  WHEN 2 THEN '�x��' END AS `oil_supply`
                  FROM `company` WHERE `code` = {$f_var['code']}";
  $result_company = mysql_query($sql_company);
  $row_company = mysql_fetch_assoc($result_company);

  //�w�q���
  $block_arr['A']['item'][]=array('item_name'=>'���O�N�X','type'=>'p','value'=>$row_company['code'],'memo'=>'-');
  $block_arr['A']['item'][]=array('item_name'=>'���O�W��','type'=>'p','value'=>$row_company['sname'],'memo'=>'-');
  $block_arr['A']['item'][]=array('item_name'=>'�Ѫo�t��','type'=>'p','value'=>$row_company['oil_supply'],'memo'=>'-');
  $block_arr['A']['item'][]=array('item_name'=>'�ۥ�/����',
                                  'ename'=>'rent_type',
                                  'memo'=>'-',
                                  'pkey'=>'<span style="color:red">*</span>',
                                  'type'=>'select',
                                  'value'=>$row_company['rent_type'],
                                  'option'=>array(
                                            '--�п��--' => null,
                                            '1.�ۥ�' => '1',
                                            '2.����' => '2',
                                            '3.���a�۫�' => '3',) 
                                  );
  
  // for �n�����ئC�X
  $sql = "SELECT  `gasdoc_set`.`itemno`,`item_name`, `gasdoc_set`.`itemno` AS `ename`,`memo`, `gd_1`,`gd_2`,SUBSTR(`block_type`,1,1) AS `block_type`,
          CASE `field_type` WHEN '01.����r����' THEN 'text'
          WHEN '02.�h���r����' THEN 'textarea'
          WHEN '03.����϶�' THEN 'dt2dt'
          WHEN '04.��@���' THEN 'date'
          WHEN '05.�ɮפW��' THEN 'file' END AS `type`
          FROM `gasdoc_set`
          LEFT JOIN `gasdoc` ON `gasdoc_set`.`itemno` = `gasdoc`.`itemno` AND `gasdoc`.`code` = {$f_var['code']}
          WHERE  `gasdoc_set`.`d_date` = '0000-00-00 00:00:00' AND `default` = 'Y' 
          ORDER BY  `gasdoc_set`.`itemno`";

  $result = mysql_query($sql);
  while ( $row = mysql_fetch_assoc($result) ){
    $block_arr[ $row['block_type'] ]['item'][] = $row; // $block_arr[ 'A' ]['item'][0] = $row;
  }


  // �w�]�������,�n��b�s�W���ظ̪�
  $sql_add = "SELECT `itemno`,`item_name`,SUBSTR(`block_type`,1,1) AS `block_type`
              FROM `gasdoc_set`
              WHERE `d_date` = '0000-00-00 00:00:00' AND `default` = 'N'
              ORDER BY  `itemno`" ;
  $result_add = mysql_query($sql_add);
  $add_block = array();
  while ( $row_add = mysql_fetch_assoc($result_add) ){
    $add_block[ $row_add['block_type'] ][] = $row_add;
  }


  $f_var["tp"]-> newBlock('tb_info');

  foreach($block_arr as $key => $val){   // $key = 'A','B','C'
    $f_var["tp"]-> newBlock('tb_info_block');
    $f_var["tp"]-> assign('tv_block_type',$key);
    $f_var["tp"]-> assign('tv_title',$val['name']); //$val['name'] = '�o���������' line:299

    //�s�W����
    $f_var["tp"]-> newBlock('tb_item_select');
    $f_var["tp"]-> assign('tv_ename',$key);
    if( $add_block[ $key ] ){ // �S�[�P�_���� �Ű}�C�|�X�{���~�T��
      foreach( $add_block[ $key ] as $add){
        $f_var["tp"]-> newBlock('tb_item_option');
        $f_var["tp"]-> assign('tv_value',$add['itemno']);
        $f_var["tp"]-> assign('tv_show',$add['item_name']);
      }
    }
    

    if( $val['item'] ){ // �S�[�P�_���� �Ű}�C�|�X�{���~�T��

      foreach( $val['item'] as $row ){
    
        $f_var["tp"]-> newBlock('tb_info_tr');
        if( $row['itemno'] ){ // for ���v�p����
          $f_var["tp"]-> assign('tv_hist','hist');
        }
        $f_var["tp"]-> assign('tv_cname',$row['item_name']);
        $f_var["tp"]-> assign('tv_key',$row['pkey']);
        $f_var["tp"]-> assign('tv_memo1',nl2br($row['memo']));

        $f_var["tp"]-> assign('tv_itemno',$row['itemno']);
  
  
        $f_var["tp"]-> newBlock("tb_info_".$row['type']);
        $f_var["tp"]-> assign('tv_ename',$row['ename']);

        switch ($row['type']){
          case 'p' :
            $f_var["tp"]-> assign('tv_p',$row['value']);

          case 'file' : 
            $download = "http://eip.slc.com.tw/~gas/gasdoc_upfile/";

            $f_var["tp"]-> assign('tv_value',$row['gd_1']);
            // �n��UTF-8 �����ҥH? 
            $file = mb_convert_encoding($row['gd_1'],"UTF-8","big5"); 
            $file = urlencode($file);
            $f_var["tp"]-> assign('tv_href',$download.$file);
          break;
          case 'select':
            $f_var["tp"]-> assign('tv_value',$row['value']);
            foreach( $row['option'] as $show => $value ){
              $f_var["tp"]-> newBlock('tb_info_option');
              $f_var["tp"]-> assign('tv_show' ,$show);
              $f_var["tp"]-> assign('tv_value' ,$value);
              if( $row['value'] == $value ) $f_var["tp"]-> assign('tv_selected' ,'selected');
            }
          break;
          case 'dt2dt':
            $f_var["tp"]-> assign('tv_value_s',$row['gd_1']);
            $f_var["tp"]-> assign('tv_value_e',$row['gd_2']);
          break;
          default:
            $f_var["tp"]-> assign('tv_value',$row['gd_1']);
          break;
        }
     
      }
    }
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

  // �v�� => ����(��)(PD0001)
  sl_open('it');
  $sql = "SELECT gp_id, dept_id
          FROM  it.ap_deptgroup  
          WHERE d_date =  '0000-00-00 00:00:00'
          AND dept_id = '{$_SESSION["login_hrm_dept_id"]}'
          AND gp_id = 'PD0001' ";

  $result = mysql_query($sql);
  $result = mysql_num_rows($result);
  mysql_close();
  $empno =  $result ? $_SESSION["login_empno"] : '';


  $option = sl_add_select_gas('gas','Y',"S111/{$empno}",'where_list');

  $f_var["tp"]-> newBlock('tb_gas_list');

  sl_open($f_var['mdb']); // �}�Ҹ�Ʈw
  $sql = "SELECT `hr_deptid` , `code` , `sname` ,
          CASE SUBSTR(`hr_deptid`, 4, 1 ) 
          WHEN '5' THEN '�_��'
          WHEN '6' THEN '����' 
          WHEN '8' THEN '�n��' END AS `type` ,
          CASE SUBSTR(`hr_deptid`, 6, 1 ) 
          WHEN '1' THEN '�Ĥ@��'
          WHEN '2' THEN '�ĤG��' 
          WHEN '3' THEN '�ĤT��' END AS `class` 
          FROM `company` 
          WHERE `stop_flag` != 'Y' 
          AND `hr_deptid` != '' 
          AND `code` in ({$option})
          ORDER BY `hr_deptid` ASC";
  

  $result = mysql_query($sql);

  if( mysql_num_rows($result) > 0){
    $arr = array();
    while( $row = mysql_fetch_assoc($result) ){
      $arr[ $row['type'] ][ $row['class'] ][] = $row['code'].'-'.$row['sname']; 
      //$arr['�_��']['�Ĥ@��'][0] = '301-�s�w��'
    }
  }

  // print_r($arr);
  foreach($arr as $key => $val){
    $f_var["tp"]-> newBlock('tb_gas_table');
    $f_var["tp"]-> assign('tv_title',$key);

    foreach($val as $ind => $value){
      $f_var["tp"]-> newBlock('tb_gas_tr');
      $f_var["tp"]-> assign('tv_subtitle',$ind);

      sort($value);//��code�Ƨ�
      foreach($value as $station){
        $f_var["tp"]-> newBlock('tb_gas_td');
        $f_var["tp"]-> assign('tv_gas_station',$station);
        $str = explode('-',$station);
        $f_var["tp"]-> assign('tv_href'," {$f_var['mphp_name']}.php?msel=4&code={$str[0]} ");
      }
    }
  }
  return;
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
      $f_var['msel'] = 5;
    }
  // ���ǤJ�Ȥ��w�]�ȳ]�w End ..................................................//

  
    $f_var['mphp_name'] = u_showproc(); //�{���W��
    $f_var['show_year'] = '4';
    $f_var['msel_name'] = array('1'=>'�s�W','2'=>'�ק�','3'=>'�R��','4'=>'�s��','5'=>'�d��','6'=>'���w�q','7'=>'�C�L'); // msel ����
    $f_var['ie_h_title'] = '�o����ިt��'; // �������D
    $f_var['msub_title'] = '�o����ިt��'; // �{���Ƽ��D
    $f_var['mdb'] = 'gas'; // db name
    $f_var['mupload_dir']  = "/home/gas/public_html/gasdoc_upfile/" ; //�W���ɮר즹��Ƨ�
    $f_var['mtable'] = array('gasdoc'=>'gasdoc' ,'gasdoc_hist'=>'gasdoc_hist'); // �ϥ� table �W�� 
    $f_var['tpl'] = 'gasdoc.tpl'; // �˪��e����
    $f_var['dateTime'] = date('Y-m-d H:i:s'); //����

  
    
    return;
}

?>