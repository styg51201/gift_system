<?php 
//�z�w�w�w�w�w�s�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�{
//�x�t�ΦW��: �xgift_list�@  �@                                              �x
//�x         �x                                                              �x
//�x�{���W��: �xgift_list.php                                                �x
//�x�{������: �x§�~�޲z�t��-���Ӫ�                                      �x
//�x�˪O�W��: �xgift_list.tpl                                                 �x
//�x          �x                                                              �x
//�x��Ʈw  : �xdocs                                                          �x
//�x��ƪ�  : |                                 
//|         |gift_guest  �� �e§�Ȥ��ƥD��
//|         |gift_head   �� �C�~�U�`���e§�D��
//|         |gift_body   �� �C�~�U�`���e§�Ȥ����(�����Pgift_head�����p)
//|         |gift_quota  �� �e§�B�ש���
//|         |gift_config �� �~�`�e§�t�ά����]�w��(��J�U���v���B�|�p�v���B�禬�Τ�Q%��)
//|         |
//�x�����{��: �x/home/sl/public_html/sl_init.php �@�Ψ��                     �x
//�x          �x/home/sl/public_html/tp/*.*      �˪O�M��                     �x
//�x          �x                                                              �x
//�x          �x/home/sl/public_html/sl.css      css ��                       �x
//�x          �x/home/sl/public_html/sl.js        javascript �ۭq���         �x
//�x          �x/home/sl/public_html/sl_header.inc.php  ����                  �x
//�x          �x/home/sl/public_html/sl_footer.inc.php  ����                  �x
//�x          �x                                                              �x
//�x�{���]�p: �x���t                                                          �x
//�x�]�p���: �x2021.03.11                                                    �x
//�|�w�w�w�w�w�r�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�}

include_once('../init/sl_init.php'); 
u_setvar($f_var);
include_once("../TemplatePower/class.TemplatePower.inc.php");
$f_var["tp"] = new  TemplatePower($f_var['tpl']);
$f_var["tp"]-> prepare();



//----- for ajax 
//��J�νs���o���q�W
if ($_REQUEST['ajax_get']=='ajax_get_com'){
  echo "{$_REQUEST['q']}-{$_REQUEST['q']}";
  exit;
  /* �qDB���o���q�W���Ȱ��A���^�ǲνs
  // $q = mb_convert_encoding($_REQUEST["q"],'big5','utf-8');
  $oci = sl_openoci('PRD');
  $sql = "SELECT STCEG,SORTL FROM SAPE68.KNA1 
            WHERE MANDT = 368 AND STCEG LIKE '{$_REQUEST["q"]}%' 
            AND SORTL != ' ' AND rownum <= {$_REQUEST['rownum']}
            ";

  $result_oci = oci_parse($oci,$sql);
  $rs = oci_execute($result_oci);
  $pattern ='/&#\d+;/'; //���W��F�� 
  while( $row = oci_fetch_assoc($result_oci) ){
    $company = $row['SORTL'];
    if( strpos($company,'&') > -1 ){
      $company = preg_replace_callback($pattern,"replace",$company);
    }
    echo "{$row['STCEG']}-{$company}\n";
  }
  oci_close($oci);
  exit;
  */
}
//�פJ�W�@���Ȥ���
if ($_REQUEST['ajax_get']=='ajax_get_his_com'){
  $f_var['con_db'] = sl_open($f_var['mdb']); // �}�Ҹ�Ʈw

  $result = mysqli_query($f_var['con_db'],"SELECT * FROM {$f_var['mtable']['head']} 
                        WHERE s_num = {$_REQUEST['s_num']}");
  $row = mysqli_fetch_assoc($result); 
  $where = '';

  //�ݭn��W�@���`�骺�Ȥ���
  if( $row['festival'] == '�K�`'){ //�K�`=>��W�@�~������`���
    $row['year'] -= 1;
    $where .= "AND h.festival = '����`'";
    $where .= "AND h.year = '{$row['year']}'"; 
  }else{ //����`=>���~�K�`���
    $where .= "AND h.festival = '�K�`'";
    $where .= "AND h.year = '{$row['year']}'";
  }

  $sql = "SELECT g.* FROM {$f_var['mtable']['head']} AS h
          INNER JOIN {$f_var['mtable']['body']} AS b ON h.s_num = b.h_s_num AND b.d_date = '0000-00-00 00:00:00'
          INNER JOIN {$f_var['mtable']['item']} AS i ON b.s_num = i.b_s_num AND i.d_date = '0000-00-00 00:00:00'
          INNER JOIN {$f_var['mtable']['guest']} AS g ON g.s_num = i.guest_s_num 
          WHERE h.d_date = '0000-00-00 00:00:00'
            AND h.area_s_num = {$row['area_s_num']}
            {$where}
          ORDER BY b.s_num,g.s_num";
  // echo $sql;
  // exit;
  // echo 'N';
  $result = mysqli_query($f_var['con_db'],$sql);
  if( mysqli_num_rows($result) > 0 ){
    $data = array();
    while( $row = mysqli_fetch_assoc($result) ){
      $tax = mb_convert_encoding($row['tax_no'].'-'.$row['company'],'UTF-8','big5');
      $name = mb_convert_encoding($row['position'].'-'.$row['name'],'UTF-8','big5');
      $data[ $tax ][] = $name;
    }
    $data = json_encode($data);
  }else{
    $data = 'N';
  }
  echo $data;
  mysqli_close($f_var['con_db']); // ������Ʈw
  exit;

}
//�̰�ƨ��o�e§�B��
if ($_REQUEST['ajax_get']=='ajax_get_base'){
  $f_var['con_db'] = sl_open($f_var['mdb']); // �}�Ҹ�Ʈw


  $sql = "SELECT *,count(*) AS cnt FROM {$f_var['mtable']['quota']} 
          WHERE `type` = (SELECT quota_type FROM {$f_var['mtable']['head']} WHERE s_num = {$_REQUEST['s_num']}) 
          AND `version` = (SELECT quota_version FROM {$f_var['mtable']['head']} WHERE s_num = {$_REQUEST['s_num']}) 
          AND ( {$_REQUEST['base_num']} <= `base_num` OR `base_num` = 'MAX' )
          ORDER by CONVERT(`base_num`,UNSIGNED) ASC LIMIT 1";

  $result = mysqli_query($f_var['con_db'],$sql);
  $row = mysqli_fetch_assoc($result);
  echo $row['quota'];
  mysqli_close($f_var['con_db']); // ������Ʈw
  exit;
}
//�̫Ȥ�(���q)��e§��H�����v����
if ($_REQUEST['ajax_get']=='ajax_get_guest'){
  $f_var['con_db'] = sl_open($f_var['mdb']); // �}�Ҹ�Ʈw


  $sql = "SELECT s_num,position,`name` FROM {$f_var['mtable']['guest']} 
          WHERE tax_no = {$_REQUEST['tax_no']} AND d_date = '0000-00-00 00:00:00' ";

  $result = mysqli_query($f_var['con_db'],$sql);
  if( mysqli_num_rows($result) > 0 ){
    $data = array();
    while( $row = mysqli_fetch_assoc($result) ){
      $item = $row['position'].'-'.$row['name'];
      $item = mb_convert_encoding($item,'UTF-8','big5');
      $data[] = $item;
    }
    $data = json_encode($data);
  }else{
    $data = 'N';
  }
  echo $data;
  mysqli_close($f_var['con_db']); // ������Ʈw
  exit;
}
//�x�s�|�p�f���`�w��
if ($_REQUEST['ajax_get']=='ajax_save_fina'){
  $f_var['con_db'] = sl_open($f_var['mdb']); // �}�Ҹ�Ʈw


  $sql = "UPDATE {$f_var['mtable']['head']} 
          SET fina_quota_total = {$_REQUEST['fina_quota_total']},
              fina_chk = CASE fina_quota_total WHEN '0' THEN 'N' ELSE 'Y' END,
              fina_empno = '{$_SESSION['login_empno']}',
              fina_upd_date = now()
          WHERE s_num = {$_REQUEST['s_num']} ";

  $result = mysqli_query($f_var['con_db'],$sql);
  if( $result ){
    echo 'Y';
  }else{
    echo 'N';
  }
  mysqli_close($f_var['con_db']); // ������Ʈw
  exit;
}
//�ˬd�O�_�����ƪ��Ȥ�(���q)
if ($_REQUEST['ajax_get']=='ajax_chk_com'){
  $f_var['con_db'] = sl_open($f_var['mdb']); // �}�Ҹ�Ʈw

  $tax_no = mb_convert_encoding($_REQUEST["tax_no"],'big5','utf-8');
  $tax_no = substr($tax_no,1); //�h���Ĥ@�ӳr��

  $sql = "SELECT tax_no,company FROM {$f_var['mtable']['head']} AS h
          LEFT JOIN {$f_var['mtable']['body']} AS b ON h.s_num = b.h_s_num
          WHERE h.s_num != {$_REQUEST['s_num']} 
          AND h.year = (SELECT `year` FROM {$f_var['mtable']['head']} WHERE s_num = {$_REQUEST['s_num']}) 
          AND h.festival = (SELECT `festival` FROM {$f_var['mtable']['head']} WHERE s_num = {$_REQUEST['s_num']} )
          AND h.d_date = '0000-00-00 00:00:00' AND b.d_date = '0000-00-00 00:00:00'
          AND tax_no IN ($tax_no) 
          GROUP BY tax_no";
  // echo $sql;
  // exit;
  $result = mysqli_query($f_var['con_db'],$sql);
  if( mysqli_num_rows($result) > 0 ){
    while( $row = mysqli_fetch_assoc($result) ){
      $item = $row['tax_no'];
      $item = mb_convert_encoding($item,'UTF-8','big5');
      $data[] = $item;
    }
    $data = json_encode($data);
  }else{
    $data = "N";
  }
  echo $data;
  mysqli_close($f_var['con_db']); // ������Ʈw
  exit;
}
//�s�W���ˬd �~��,�`��,��� �O�_�����Ƹ��
if ($_REQUEST['ajax_get']=='ajax_chk_area'){
  $f_var['con_db'] = sl_open($f_var['mdb']); // �}�Ҹ�Ʈw

  $area = mb_convert_encoding($_REQUEST["area"],'big5','utf-8');
  $year = mb_convert_encoding($_REQUEST["year"],'big5','utf-8');
  $festival = mb_convert_encoding($_REQUEST["festival"],'big5','utf-8');

  $sql = "SELECT * FROM {$f_var['mtable']['head']} AS h
          WHERE h.d_date = '0000-00-00 00:00:00'
          AND h.area_s_num = '{$area}'
          AND h.year = '{$year}'
          AND h.festival = '{$festival}'";
  // echo $sql;
  // exit;
  $result = mysqli_query($f_var['con_db'],$sql);
  if( $result ){
    echo  mysqli_num_rows($result);
  }else{
    echo 'N';
  }
  mysqli_close($f_var['con_db']); // ������Ʈw
  exit;
}
//------ end ajax


include_once('../init/sl_header.php');

// include_once('./gift_access.php'); 


$f_var['con_db'] = sl_open($f_var['mdb']); // �}�Ҹ�Ʈw
$f_var['admin'] = 'Y';
switch ($f_var['msel']) {
  case "1": // �s�W-�e��
    u_in_scr($f_var);
    // u_upd($f_var); 
  break;
  case "11": // �s�W-�x�s
    u_save($f_var);
  break;
  case "2": //�ק�
    u_upd($f_var); 
  break;
  case "21": //�ק�
    u_upd_save($f_var); 
  break;
  case "31": // �@�o
    /*$sql = "UPDATE {$f_var['mtable']['head']}
            SET `d_empno`= '{$_SESSION['login_empno']}' ,
                `d_dept_id`= '{$_SESSION['login_dept_id']}' ,
                `d_proc`= '{$f_var['mphp_name']}' ,
                `d_date`= now() 
            WHERE `s_num` = {$f_var['f_s_num']}";
    if( mysqli_query($f_var['con_db'],$sql) ){
      echo sl_jreplace($f_var['mphp_name'].'.php');
    }else{
      $f_var["tp"]-> assign("_ROOT.tv_alert",'�@�o����!!');
      $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
    }*/
  break;
  case "4": // �s��
    u_list($f_var);
  break;
  case '41': //�|�p�f���x�s

    foreach($_POST['s_num'] as $ind => $val){
      $str .= ",(".trim($_POST['s_num'][$ind]).",".trim($_POST['fina_quota_total'][$ind]).")";
    }
    $str = substr($str,1);//�h���Ĥ@�ӳr��

    // INSERT INTO ... ON DUPLICATE KEY UPDATE =>DB�Y���ۦP��ƴNUPD,�S���N�s�W(�i��q),�ݭn���ߤ@�ȥh�P�_
    $sql = "INSERT INTO {$f_var['mtable']['head']} (s_num,fina_quota_total) 
            VALUES {$str} 
            ON DUPLICATE KEY UPDATE 
            fina_quota_total = VALUES(fina_quota_total),
            fina_chk = CASE fina_quota_total WHEN '0' THEN 'N' ELSE 'Y' END,
            fina_empno = '{$_SESSION['login_empno']}',
            fina_upd_date = now()";
    if( mysqli_query($f_var['con_db'],$sql) ){
      echo sl_jreplace($f_var['mphp_name'].".php?msel=4&f_year={$_POST['year']}&f_festival={$_POST['festival']}");
    }else{
      $f_var["tp"]-> assign("_ROOT.tv_alert",'�|�p�f�ֹw��ק異��!!');
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
  $f_var["tp"]-> assign("tv_list",$f_var['mphp_name'].".php?msel=4&f_page=1&f_year={$f_var['f_year']}&f_festival={$f_var['f_festival']}"); //�s��


  if($f_var['msel'] == '4' ){


    $f_var["tp"]-> newBlock('tb_add');
    $f_var["tp"]-> assign("tv_add",$f_var['mphp_name'].".php?msel=1"); //�s�W


    $f_var["tp"]-> newBlock('tb_page');

    $f_var["tp"]-> assign("tv_f_page",$f_var['f_page']); //�ثe����
    $f_var["tp"]-> assign("tv_max_page",$f_var['max_page']); //�̤j�̦�

    $up_page = $f_var['f_page'] - 1 <= 1 ? 1 : $f_var['f_page'] - 1 ; //�P�_����,�̧C�O1
    $f_var["tp"]-> assign("tv_up_page",$f_var['mphp_name'].".php?msel=4&f_page={$up_page}&f_year={$f_var['f_year']}&f_festival={$f_var['f_festival']}"); //�W�@��

    //�P�_����,�̰��O$f_var['max_page']
    $dn_page = $f_var['f_page'] + 1 >= $f_var['max_page'] ? $f_var['max_page'] : $f_var['f_page'] + 1 ; 
    $f_var["tp"]-> assign("tv_dn_page",$f_var['mphp_name'].".php?msel=4&f_page={$dn_page}&f_year={$f_var['f_year']}&f_festival={$f_var['f_festival']}"); //�U�@��
  }

  

}

// **************************************************************************
//  ��ƦW��: u_upd_save()
//  ��ƥ\��: ���Ӫ�-�x�s
//  �ϥΤ覡: u_upd_save(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_upd_save(&$f_var){

  // echo '<pre>'.print_r($_POST,1).'</pre>';
  // return;

  $h_s_num = $_POST['s_num'];

  $b_info = " '{$_SESSION['login_empno']}',
              '{$_SESSION['login_dept_id']}',
              '{$f_var['mphp_name']}',
                now()";

  
  //�|�p�w�f�֫�A���ק�§�~�ﶵ��input
  if( isset($_POST['gift_s_num']) ){

    foreach( $_POST['item_id'] as $ind => $val ){

      $s_num = trim($_POST['item_id'][$ind]);
      $gift_s_num = trim($_POST['gift_s_num'][$ind]);
      $gift_price = trim($_POST['gift_price'][$ind]);
      $gift_cnt = trim($_POST['gift_cnt'][$ind]);
      $gift_price_total = trim($_POST['gift_price_total'][$ind]);


      $sql = "UPDATE {$f_var['mtable']['item']}
                SET `gift_s_num` = {$gift_s_num} ,
                    `gift_price` = '{$gift_price}' ,
                    `gift_cnt` = '{$gift_cnt}' ,
                    `gift_price_total` = {$gift_price_total} ,
                    `m_empno`= '{$_SESSION['login_empno']}' ,
                    `m_dept_id`= '{$_SESSION['login_dept_id']}' ,
                    `m_proc`= '{$f_var['mphp_name']}' ,
                    `m_date`= now()
                WHERE `s_num` = {$s_num} 
              ";
  
        $result = mysqli_query($f_var['con_db'],$sql);
        if( !$result ){
          // sl_showsql($sql);
          $f_var["tp"]-> assign("_ROOT.tv_alert",'§�~�~���ק異��!!');
          $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
          return;
        }

    }

    

    // update ���Y�� gift_gift_total �� �O�_all done
    $sub_sql = "SELECT sum(gift_price_total) FROM {$f_var['mtable']['body']} AS b
                LEFT JOIN {$f_var['mtable']['item']} AS i 
                ON b.s_num = i.b_s_num 
                WHERE b.h_s_num = {$h_s_num}
                AND i.d_date = '0000-00-00 00:00:00'
                AND b.d_date = '0000-00-00 00:00:00'";

    if( isset($_POST['all_done']) ){
      $all_done = "`all_done` = '".trim($_POST['all_done'])."',";
    }else{
      $all_done = '';
    }

    $sql = "UPDATE {$f_var['mtable']['head']}
            SET `gift_total` = ({$sub_sql}),
                 {$all_done}
                `m_empno`= '{$_SESSION['login_empno']}' ,
                `m_dept_id`= '{$_SESSION['login_dept_id']}' ,
                `m_proc`= '{$f_var['mphp_name']}' ,
                `m_date`= now()
            WHERE `s_num` = {$h_s_num} "; 
    if( !mysqli_query($f_var['con_db'],$sql) ){
      // sl_showsql($sql);
      $f_var["tp"]-> assign("_ROOT.tv_alert",'§�~�`���B��s����!!');
      $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
      return;
    }

    

  }else{

    //�@�o�B�ztable->body
    if( $_POST['del_company'] != '' ){
      $del_id = substr($_POST['del_company'],1); //�h���Ĥ@�ӳr��
      $sql = "UPDATE {$f_var['mtable']['body']} AS b
              LEFT JOIN {$f_var['mtable']['item']} AS i 
              ON b.s_num = i.b_s_num
                SET b.`d_empno`= '{$_SESSION['login_empno']}' ,
                    b.`d_dept_id`= '{$_SESSION['login_dept_id']}' ,
                    b.`d_proc`= '{$f_var['mphp_name']}' ,
                    b.`d_date`= now(),
                    i.`d_empno`= '{$_SESSION['login_empno']}' ,
                    i.`d_dept_id`= '{$_SESSION['login_dept_id']}' ,
                    i.`d_proc`= '{$f_var['mphp_name']}' ,
                    i.`d_date`= now() 
                WHERE b.`s_num` IN ({$del_id})";
        if( !mysqli_query($f_var['con_db'],$sql) ){
          // sl_showsql($sql);
          $f_var["tp"]-> assign("_ROOT.tv_alert",'�Ȥ�@�o����!!');
          $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
          return;
        }
    }
    
    //�@�o�B�ztable->item
    if( $_POST['del_item'] != '' ){
      $del_id = substr($_POST['del_item'],1); //�h���Ĥ@�ӳr��
      $sql = "UPDATE {$f_var['mtable']['item']}
                SET `d_empno`= '{$_SESSION['login_empno']}' ,
                    `d_dept_id`= '{$_SESSION['login_dept_id']}' ,
                    `d_proc`= '{$f_var['mphp_name']}' ,
                    `d_date`= now() 
                WHERE `s_num` IN ({$del_id})";
        if( !mysqli_query($f_var['con_db'],$sql) ){
          // sl_showsql($sql);
          $f_var["tp"]-> assign("_ROOT.tv_alert",'��§��H�@�o����!!');
          $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
          return;
        }
    }


    //�|�p�٨S�f�֫e�A���ק�ηs�W���Ȥ�(���q)��input
    if( isset($_POST['tax_no']) ){ 

      $tax_no_arr = array();
      foreach( $_POST['tax_no'] as $ind => $val ){

        $body_s_num = trim($_POST['body_id'][$ind]);

        $tax_no = trim($_POST['tax_no'][$ind]);
        if( substr($tax_no,0,1) == 'N' ){
          $tax_no = 'N'; //�u��N
        }else{
          $tax_no = substr($tax_no,0,8); //���e8�X���νs
          $tax_no_arr[] = $tax_no;
        }

        $company = trim($_POST['company'][$ind]);
        $avg_rev = trim($_POST['avg_rev'][$ind]);
        $avg_gp = trim($_POST['avg_gp'][$ind]);
        $avg_gpm = trim($_POST['avg_gpm'][$ind]);
        $base_num = trim($_POST['base_num'][$ind]);
        $quota = trim($_POST['quota'][$ind]);
        $guest_array = array();

        if( $body_s_num == '0' ){ //�s�W
          
          $ins_key = '`s_num`'            ;  $ins_val = '""';
          $ins_key .= ',`h_s_num`'        ;  $ins_val .= ",'{$h_s_num}'";
          $ins_key .= ',`tax_no`'         ;  $ins_val .= ",'{$tax_no}'";
          $ins_key .= ',`company`'        ;  $ins_val .= ",'{$company}'";
          $ins_key .= ',`avg_rev`'        ;  $ins_val .= ",{$avg_rev}";
          $ins_key .= ',`avg_gp`'         ;  $ins_val .= ",{$avg_gp}";
          $ins_key .= ',`avg_gpm`'        ;  $ins_val .= ",{$avg_gpm}";
          $ins_key .= ',`base_num`'       ;  $ins_val .= ",{$base_num}";
          $ins_key .= ',`quota`'          ;  $ins_val .= ",{$quota}";
    
          $ins_key .= ',`b_empno`,`b_dept_id`,`b_proc`,`b_date`';
          $ins_val .= ",{$b_info}";
          
          $sql = "INSERT INTO {$f_var['mtable']['body']}
                    ({$ins_key}) VALUES ( {$ins_val} ) ";

          // echo '<pre>'.print_r($sql,1).'</pre>';
          // exit;
          
          $result = mysqli_query($f_var['con_db'],$sql);
          if( !$result ){
            // sl_showsql($sql);
            $f_var["tp"]-> assign("_ROOT.tv_alert",'�Ȥ�s�W����!!');
            $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
            return;
          } 

          $body_s_num = mysqli_insert_id($f_var['con_db']);
    
        }else{ //�ק�
    
          $sql = "UPDATE {$f_var['mtable']['body']}
                  SET `tax_no` = '{$tax_no}' ,
                      `company` = '{$company}' ,
                      `avg_rev` = {$avg_rev} ,
                      `avg_gp` = {$avg_gp},
                      `avg_gpm` = {$avg_gpm},
                      `base_num` = {$base_num},
                      `quota` = {$quota},
                      `m_empno`= '{$_SESSION['login_empno']}' ,
                      `m_dept_id`= '{$_SESSION['login_dept_id']}' ,
                      `m_proc`= '{$f_var['mphp_name']}' ,
                      `m_date`= now()
                  WHERE `s_num` = {$body_s_num} AND `h_s_num` = {$h_s_num} 
                ";
    
          $result = mysqli_query($f_var['con_db'],$sql);
          if( !$result ){
            // sl_showsql($sql);
            $f_var["tp"]-> assign("_ROOT.tv_alert",'�Ȥ�ק異��!!');
            $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
            return;
          }
    
        }

        //�B�z�e§��H,���(�νs,¾��,�m�W)�Y���P���s�W,�����ק�
        //�n�� $val �Ӥ��O $tax_no => �O�쥻�ǹL�Ӫ���,ex: N_1 N_2 12345678_3 �|���y����
        foreach( $_POST[ "{$val}".'_item_id' ] as $i => $item_id ){
          $guest_id = '';
          $position = trim($_POST[ $val.'_position' ][$i]);
          $name = trim($_POST[ $val.'_name' ][$i]);
    
          $sql = "SELECT s_num FROM {$f_var['mtable']['guest']}
                    WHERE tax_no = '{$tax_no}' 
                    AND company = '{$company}' 
                    AND position = '{$position}' 
                    AND `name` = '{$name}' AND d_date = '0000-00-00 00:00:00'";
    
          $result = mysqli_query($f_var['con_db'],$sql);
          if( mysqli_num_rows($result) > 0 ){ //DB���Y���ۦP���,�ss_num,���U�@��
            $row = mysqli_fetch_assoc($result);
            $guest_id = $row['s_num'];
          }else{  //�s�W

            
            $sql = "INSERT INTO {$f_var['mtable']['guest']}
            (`tax_no`,`company`,`position`,`name`,`b_empno`,`b_dept_id`,`b_proc`,`b_date`) 
            VALUES ( '{$tax_no}','{$company}','{$position}','{$name}',{$b_info} ) ";

            // echo '<pre>'.print_r($sql,1).'</pre>';
            // exit;

            $result = mysqli_query($f_var['con_db'],$sql);
            if( !$result ){
              // sl_showsql($sql);
              $f_var["tp"]-> assign("_ROOT.tv_alert",'��§��H�s�W����!!');
              $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
              return;
            }
            $guest_id = mysqli_insert_id($f_var['con_db']);
          }

          if( $item_id == 0 ){ //�s�W

            $sql = "INSERT INTO {$f_var['mtable']['item']}
                    (`b_s_num`,`guest_s_num`,`b_empno`,`b_dept_id`,`b_proc`,`b_date`) 
                    VALUES ( {$body_s_num},{$guest_id},{$b_info} ) ";

          }else{ //�ק�
            $sql = "UPDATE {$f_var['mtable']['item']}
                    SET `guest_s_num` = {$guest_id} ,
                        `m_empno`= '{$_SESSION['login_empno']}' ,
                        `m_dept_id`= '{$_SESSION['login_dept_id']}' ,
                        `m_proc`= '{$f_var['mphp_name']}' ,
                        `m_date`= now()
                    WHERE `s_num` = {$item_id} ";
          }

          $result = mysqli_query($f_var['con_db'],$sql);
          if( !$result ){
            // sl_showsql($sql);
            $f_var["tp"]-> assign("_ROOT.tv_alert",'��§��H�ק異��!!');
            $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
            return;
          }
          
        }
      
      }

      // �H�H������
      //�s�W��T�{�O�_�� ���P���,���O���ۦP���Ȥ�(���q)
      $tax_no = implode("','",$tax_no_arr);
      $sql = "SELECT b.tax_no,b.company,h.year,h.festival,
              GROUP_CONCAT(h.s_num ORDER BY c.s_num ASC) AS s_num,
              GROUP_CONCAT(c.config_value ORDER BY c.s_num ASC) AS area_name,
              ( SELECT access_empno FROM {$f_var['mtable']['config']} WHERE config_key = 'admin' ) AS admin_list
              FROM {$f_var['mtable']['head']} AS h
              LEFT JOIN {$f_var['mtable']['body']} AS b ON h.s_num = b.h_s_num
              LEFT JOIN {$f_var['mtable']['config']} AS c ON c.s_num = h.area_s_num
              WHERE 1
              AND h.year = (SELECT `year` FROM {$f_var['mtable']['head']} WHERE s_num = {$h_s_num}) 
              AND h.festival = (SELECT `festival` FROM {$f_var['mtable']['head']} WHERE s_num = {$h_s_num} )
              AND h.d_date = '0000-00-00 00:00:00' AND b.d_date = '0000-00-00 00:00:00'
              AND b.tax_no IN ('{$tax_no}')
              GROUP BY b.tax_no
              HAVING count(tax_no) > 1";
      // echo '<pre>'.print_r($sql,1).'</pre>';
      // exit;
      $result = mysqli_query($f_var['con_db'],$sql);
      if( mysqli_num_rows($result) > 0 ){
        $title = '';
        $str = '';
        $admin_list = '';

        while( $row = mysqli_fetch_assoc($result) ){
          $title = "{$row['year']}�~{$row['festival']} �w�p��§��H���ƦW��";
          $admin_list = explode(',',$row['admin_list']);
          $arr_snum = array_unique( explode(',',$row['s_num']) );
          $arr_area = array_unique( explode(',',$row['area_name']) );
          $area_td = '';

          foreach( $arr_area as $key => $val ){
            $area_td .= '<a href="'.$f_var['server_name'].$_SERVER['PHP_SELF'].'?msel=2&f_s_num='.$arr_snum[$key].'">'.$val.'</a>';
          }
          $str .= '<tr>';
          $str .= '<td>'.$row['tax_no'].'</td>';
          $str .= '<td>'.$row['company'].'</td>';
          $str .= '<td>'.$area_td.'</td>';
          $str .= '</tr>';

        }
        $str = '<style>#gift_table{border-collapse:collapse;width:50%}
                      #gift_table tr{text-align:center}
                      #gift_table th,#gift_table td{border:1px solid #000;padding:5px}
                      #gift_table th{font-size:18px}
                      #gift_table td{font-size:16px}
                      #gift_table td a{display:block;padding:2;}
                </style>
              <h2>'.$title.'</h2>
              <table id="gift_table"">
                <tr>
                  <th>�νs</th>
                  <th>���q�W��</th>
                  <th>���Ƴ��</th>
                </tr>'.$str.'</table>';
        foreach( $admin_list as $emp ){
          if( $emp == '8965552' || $emp == '8365644' || $emp == '2030087' ) continue;
          // sl_send_msg('IT',$emp,$title.'(���դ�)',$str);
          // echo $str;
          // exit;
        }
      }
    }

    sl_open($f_var['mdb']); //�W���i��|���H�H�|����O��DB��

    

    //update���Y�� quota_total
    $sub_sql = "SELECT sum(quota) FROM {$f_var['mtable']['body']}
                WHERE h_s_num = {$h_s_num}
                AND d_date = '0000-00-00 00:00:00'";

    $sql = "UPDATE {$f_var['mtable']['head']}
            SET `quota_total` = ({$sub_sql}),
                `m_empno`= '{$_SESSION['login_empno']}' ,
                `m_dept_id`= '{$_SESSION['login_dept_id']}' ,
                `m_proc`= '{$f_var['mphp_name']}' ,
                `m_date`= now()
            WHERE `s_num` = {$h_s_num} "; 
    if( !mysqli_query($f_var['con_db'],$sql) ){
      // sl_showsql($sql);
      $f_var["tp"]-> assign("_ROOT.tv_alert",'�e§�B���`���B��s����!!');
      $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
      return;
    }


  }

  if( isset($_POST['address']) ){
    $address = trim($_POST['address']);

    $sql = "UPDATE {$f_var['mtable']['head']} 
            SET `address` = '{$address}',
                `m_empno`= '{$_SESSION['login_empno']}' ,
                `m_dept_id`= '{$_SESSION['login_dept_id']}' ,
                `m_proc`= '{$f_var['mphp_name']}' ,
                `m_date`= now()
            WHERE s_num = {$h_s_num} ";
    $result = mysqli_query($f_var['con_db'],$sql);
    if( !$result ){
      // sl_showsql($sql);
      $f_var["tp"]-> assign("_ROOT.tv_alert",'�a�}�ק異��!!');
      $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
      return;
    }
  }
  

  echo sl_jreplace("{$f_var['mphp_name']}.php?msel=2&f_s_num={$h_s_num}&f_year={$f_var['f_year']}&f_festival={$f_var['f_festival']}");

}

// **************************************************************************
//  ��ƦW��: u_upd()
//  ��ƥ\��: ���Ӫ�
//  �ϥΤ覡: u_upd(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_upd(&$f_var){

  $f_var['f_s_num'] = ReturnInt($f_var['f_s_num']);
  // $f_var["tp"]-> assign("tv_msel_name",$f_var['f_s_num']?'�ק�':'�s�W');

  $sql = "SELECT h.* ,e.name AS b_name,c.config_value AS area,c.access_empno
          FROM {$f_var['mtable']['head']} AS h
          LEFT JOIN {$f_var['mtable']['config']} AS c ON h.area_s_num = c.s_num
          LEFT JOIN empno AS e ON c.access_empno = e.empno
          WHERE h.`s_num` = {$f_var['f_s_num']}
          ";

  $result = mysqli_query($f_var['con_db'],$sql);

  if( mysqli_num_rows($result) > 0 ){ 
    $h_row = mysqli_fetch_assoc($result);

    //��X§�~�~���̧C������A��������
    $sql = "SELECT min(price) AS price 
            FROM {$f_var['mtable']['type']}
            WHERE `year` = '{$h_row['year']}'
            AND  `festival` = '{$h_row['festival']}'
            AND `d_date` = '0000-00-00 00:00:00'";
    $result = mysqli_query($f_var['con_db'],$sql);
    $row = mysqli_fetch_assoc($result);
    if( $row['price'] == NULL ){ 
      $str = "�u{$h_row['year']}�~{$h_row['festival']}�v��§�~�~���A
                ���ʳ��٨S�إߡA�е��إ߫�A�ӵn���W����A����!!";
      $f_var["tp"]-> assign("_ROOT.tv_alert",$str);
      return;
    }

    $f_var['tp']-> newBlock('tb_guest_table');
    $f_var["tp"]-> assign("tv_min_quota",$row['price']);
    
    //�|�p�f�ֹw��ק���s
    if( $h_row['all_done'] != 'Y' && ($h_row['quota_total'] > 0) ){
      if( $f_var['admin'] == 'Y' || $f_var['fina'] == 'Y' ){
        $f_var['tp']-> newBlock('tb_guest_fina_btn');
      }
    }
    
    //�|�p�٥��f��
    if( $h_row['fina_chk'] == 'N' ){ 
      
      $f_var['tp']-> newBlock('tb_js_guest');
      $f_var['tp']-> newBlock('tb_th_guest');
      
      //�u��admin�򵡤f�i�H��btn���ק�
      if( $f_var['admin'] == 'Y' || $f_var['normal'] == 'Y'){ 
        $f_var['tp']-> newBlock('tb_btn_submit');
        $f_var['tp']-> newBlock('tb_upd_address');
        $f_var['tp']-> newBlock('tb_btn_add');
      }

      //�Ȥ�(���q)�����v����
      $sql_c = "SELECT tax_no,company FROM {$f_var['mtable']['head']} AS h
              LEFT JOIN {$f_var['mtable']['body']} AS b
              ON b.h_s_num = h.s_num
              WHERE area_s_num = {$h_row['area_s_num']}
              AND tax_no != 'N'
              AND h.d_date = '0000-00-00 00:00:00' AND b.d_date = '0000-00-00 00:00:00'
              GROUP BY tax_no,company";

      $result_c = mysqli_query($f_var['con_db'],$sql_c);
      if( mysqli_num_rows($result_c) > 0 ){
        $f_var['tp']-> newBlock('tb_his_com');
        while( $row_c = mysqli_fetch_assoc($result_c) ){
          $f_var['tp']-> newBlock('tb_com_li');
          $f_var["tp"]-> assign("tv_li",$row_c['tax_no'].'-'.$row_c['company']);
        }
      }

    }else{ //�|�p�w�f�ֹL

      $f_var['tp']-> newBlock('tb_js_gift');
      $f_var['tp']-> newBlock('tb_th_gift');
      $f_var['tp']-> newBlock('tb_tfoot_gift');
      $f_var["tp"]-> assign("tv_gift_total",$h_row['gift_total']);
      $f_var['tp']-> newBlock('tb_tfoot_gift2');

      //�u��admin�򵡤f �ӥB�������n��-�i�H��btn���ק�
      if( ( $f_var['admin'] == 'Y' || $f_var['normal'] == 'Y' ) && $h_row['all_done'] != 'Y' ){ 
        $f_var['tp']-> newBlock('tb_upd_address');
        $f_var['tp']-> newBlock('tb_btn_submit');
      }

      if( $f_var["admin"] == 'Y' && $h_row['all_done'] != 'Y' ){ //�Oadmin�ӥB������-�������n����btn
        $f_var['tp']-> newBlock('tb_btn_alldone');
      }


    
      //�Φ�§�~�ﶵselect
      $gift_sql = "SELECT * FROM {$f_var['mtable']['type']}
                   WHERE d_date = '0000-00-00 00:00:00' 
                   AND `year` = {$h_row['year']} AND festival = '{$h_row['festival']}' ";
      $result = mysqli_query($f_var['con_db'],$gift_sql);
      $gift_select = "<select name='gift_s_num[]'>";
      $gift_select .= "<option value='' data-price='0' >�п��</option>";
      if( mysqli_num_rows($result) > 0 ){
        while( $row = mysqli_fetch_assoc($result) ){
          $gift_select .= "<option value='{$row['s_num']}' data-price='{$row['price']}'>{$row['company']}{$row['name']} {$row['price']}��</option>";
          
          $gift_array[ $row['s_num'] ] = "{$row['company']}{$row['name']} {$row['price']}��"; //�@���r��
        }
      }
      $gift_select .= "</select>";

    }


    //���Ythead
    $f_var["tp"]-> gotoBlock("tb_guest_table"); 
    $f_var["tp"]-> assign("tv_action","{$f_var['mphp_name']}.php?msel=21&f_year={$f_var['f_year']}&f_festival={$f_var['f_festival']}");
    $f_var["tp"]-> assign("tv_s_num",$h_row['s_num']);
    $f_var["tp"]-> assign("tv_year",$h_row['year']);
    $f_var["tp"]-> assign("tv_festival",$h_row['festival']);
    $f_var["tp"]-> assign("tv_area",$h_row['area']);
    $f_var["tp"]-> assign("tv_b_name",$h_row['b_name']);
    $f_var["tp"]-> assign("tv_address",$h_row['address']);
    $f_var["tp"]-> assign("tv_base_rev",$h_row['base_rev']);
    $f_var["tp"]-> assign("tv_base_gp",$h_row['base_gp']);
    $f_var["tp"]-> assign("tv_quota_total",$h_row['quota_total']);
    $f_var["tp"]-> assign("tv_fina_quota_total",$h_row['fina_quota_total']);


    //��d�Ȥ�(���q)
    $sql = "SELECT * FROM {$f_var['mtable']['body']}
            WHERE h_s_num = {$h_row['s_num']} AND d_date = '0000-00-00 00:00:00'
            ORDER BY s_num ASC";

    $result = mysqli_query($f_var['con_db'],$sql);
    if( mysqli_num_rows($result) > 0 ){
      $i = 0;
      while( $row = mysqli_fetch_assoc($result) ){

        $i++;
        $f_var['tp']-> newBlock('tb_guest_tr');
        $f_var["tp"]-> assign("tv_i",$i);
        $f_var["tp"]-> assign("tv_s_num",$row['s_num']);
        $f_var["tp"]-> assign("tv_tax_no",$row['tax_no']);
        $f_var["tp"]-> assign("tv_company",$row['company']);
        $f_var["tp"]-> assign("tv_avg_rev",$row['avg_rev']);
        $f_var["tp"]-> assign("tv_avg_gp",$row['avg_gp']);
        $f_var["tp"]-> assign("tv_avg_gpm",$row['avg_gpm']);
        $f_var["tp"]-> assign("tv_base_num",$row['base_num']);
        $f_var["tp"]-> assign("tv_quota",$row['quota']);


        //�|�p�٥��f�� => �i�ק��@�o
        if( $h_row['fina_chk'] == 'N' ){ 

          $f_var['tp']-> newBlock('tb_td_guest');

          //�u��admin�򵡤f�i�H��btn���ק�
          if( $f_var['admin'] == 'Y' || $f_var['normal'] == 'Y' ){ 
            $f_var["tp"]-> assign("tv_upd",$f_var['upd_img']);
            $f_var["tp"]-> assign("tv_del",$f_var['del_img']);
          }else{ 
            $f_var["tp"]-> assign("tv_upd",'-');
            $f_var["tp"]-> assign("tv_del",'-');
          }

        }else{ //�|�p�w�f�ֹL => ���o�ק�@�o,�u����§�~�ﶵ
          $f_var['tp']-> newBlock('tb_td_gift');
        }


        //�� guest_s_num ��¾�ٸ�m�W
        $sql_2 = "SELECT i.*,g.position,g.name FROM {$f_var['mtable']['item']} AS i
                  LEFT JOIN {$f_var['mtable']['guest']} AS g ON i.guest_s_num = g.s_num
                  WHERE i.b_s_num = {$row['s_num']} AND i.d_date = '0000-00-00 00:00:00'";
        $result_2 = mysqli_query($f_var['con_db'],$sql_2);
        if( mysqli_num_rows($result_2) > 0 ){
          while( $row_2 = mysqli_fetch_assoc($result_2) ){

            $f_var['tp']-> newBlock('tb_guest_div');
            $f_var["tp"]-> assign("tv_item_id",$row_2['s_num']);
            $f_var["tp"]-> assign("tv_position",$row_2['position']);
            $f_var["tp"]-> assign("tv_name",$row_2['name']);

            //�|�p�w�f�ֹL => �q�X§�~�ﶵ
            if( $h_row['fina_chk'] == 'Y' ){
              $f_var["tp"]-> gotoBlock("tb_td_gift"); 

              //�n���������ӥB �Oadmin�򵡤f->�i�H���§�~�ﶵ
              if( $h_row['all_done'] != 'Y' && ( $f_var['admin'] == 'Y' || $f_var['normal'] == 'Y' ) ){ 

                $f_var['tp']-> newBlock('tb_gift_div_gift');
                $gift_select_new = str_replace("value='{$row_2['gift_s_num']}'","value='{$row_2['gift_s_num']}' selected",$gift_select);
                $f_var["tp"]-> assign("tv_gift",$gift_select_new);
                $f_var["tp"]-> assign("tv_item_id",$row_2['s_num']);

                $f_var['tp']-> newBlock('tb_gift_div_price');
                $f_var["tp"]-> assign("tv_gift_price",$row_2['gift_price']);

                $f_var['tp']-> newBlock('tb_gift_div_cnt');
                $f_var["tp"]-> assign("tv_gift_cnt",$row_2['gift_cnt']);

                $f_var['tp']-> newBlock('tb_gift_div_total');
                $f_var["tp"]-> assign("tv_gift_price_total",$row_2['gift_price_total']);

                $f_var['tp']-> newBlock('tb_gift_div');
                $f_var["tp"]-> assign("tv_position",$row_2['position']);
                $f_var["tp"]-> assign("tv_name",$row_2['name']);

              }else{  //��L�@�ߥu���s��,�S��§�~�ﶵ���

                $f_var['tp']-> newBlock('tb_gift_gift');
                if( $row_2['gift_s_num'] != NULL ){
                  $f_var["tp"]-> assign("tv_gift",$gift_array[ $row_2['gift_s_num'] ]);
                }else{
                  $f_var["tp"]-> assign("tv_gift",'�|����ܫ~��');
                }

                $f_var['tp']-> newBlock('tb_gift_price');
                $f_var["tp"]-> assign("tv_gift_price",$row_2['gift_price']);

                $f_var['tp']-> newBlock('tb_gift_cnt');
                $f_var["tp"]-> assign("tv_gift_cnt",$row_2['gift_cnt']);

                $f_var['tp']-> newBlock('tb_gift_total');
                $f_var["tp"]-> assign("tv_gift_price_total",$row_2['gift_price_total']);

                $f_var['tp']-> newBlock('tb_gift_div');
                $f_var["tp"]-> assign("tv_position",$row_2['position']);
                $f_var["tp"]-> assign("tv_name",$row_2['name']);
              }
            }
            
            
          }
        }

      }
    }

  }else{
    $f_var["tp"]-> assign("_ROOT.tv_alert",'�d�L���!!');
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

  //�v��
  $sql_where  = "AND c.`access_empno` = {$_SESSION['login_empno']} "; 
  //admin��|�p���L��z--�i�H�ݨ����
  if( $f_var['admin'] == 'Y' || $f_var['fina'] == 'Y' || $f_var['job_5019'] == 'Y' ){
    $sql_where = '';
  }
  
  $sql = "SELECT h.*,c.config_value AS area,e.name AS b_name
          FROM {$f_var['mtable']['head']} AS h
          LEFT JOIN {$f_var['mtable']['config']} AS c ON h.area_s_num = c.s_num
          LEFT JOIN empno AS e ON h.b_empno = e.empno
          WHERE h.`d_date` = '0000-00-00 00:00:00'
          AND h.`year` = '{$f_var['f_year']}'
          AND h.`festival` = '{$f_var['f_festival']}'
          {$sql_where}";


  $qty_cnt = mysqli_num_rows( mysqli_query($f_var['con_db'],$sql) ) ;
  if( $qty_cnt > 0 ){
    $f_var['max_page'] = floor(((($f_var['mmaxline']-1)+$qty_cnt)/$f_var['mmaxline'])); // �D��ơA�̤j����
  }

  $sql .= $limit_sql;
  // sl_showsql($sql);
  $result = mysqli_query($f_var['con_db'],$sql);
  if( mysqli_num_rows($result) > 0 ){
    $i = 0;
    $fina = false;

    if( $f_var['admin'] == 'Y' || $f_var['fina'] == 'Y' ){ //�|�p�f�֥�
      $f_var['tp']-> newBlock('tb_fina_btn');
      $f_var['tp']-> newBlock('tb_fina_set');
      $f_var['tp']-> assign('tv_action',"{$f_var['mphp_name']}.php?msel=41&f_year={$f_var['f_year']}&f_festival={$f_var['f_festival']}");
      $f_var['tp']-> assign('tv_year',$f_var['f_year']);
      $f_var['tp']-> assign('tv_festival',$f_var['f_festival']);
    }

    while( $row = mysqli_fetch_assoc($result) ){
      $i++;
      $href = "{$f_var['mphp_name']}.php?msel=2&f_s_num={$row['s_num']}&f_year={$f_var['f_year']}&f_festival={$f_var['f_festival']}";
      $f_var['tp']-> newBlock('tb_list_tr');
      $f_var['tp']-> assign('tv_i',$i);
      $span = '<span class="red"> (�|���n������)</span>';
      $f_var['tp']-> assign('tv_area',$row['all_done'] != 'Y' ? $row['area'].$span : $row['area']);
      $f_var['tp']-> assign('tv_href',$href);
      $f_var['tp']-> assign('tv_year',$row['year']);
      $f_var['tp']-> assign('tv_festival',$row['festival']);
      $f_var['tp']-> assign('tv_quota_total',$row['quota_total']);
      $f_var['tp']-> assign('tv_fina_chk',$row['fina_chk']);
      $f_var['tp']-> assign('tv_fina_quota_total',$row['fina_quota_total']);
      if( $row['fina_quota_total'] > 0 ) $f_var['tp']-> assign('tv_class','red');
      $f_var['tp']-> assign('tv_gift_total',$row['gift_total']);
      $f_var['tp']-> assign('tv_b_empno',$row['b_name']);
      $str = $row['all_done'] == 'Y' ? '�d��' : '�s��';
      $f_var['tp']-> assign('tv_upd',"<a href='{$href}'>{$str} �Ȥ����</a>");
      //�@�o
      // $f_var['tp']-> assign('tv_del',"<a href='{$f_var['mphp_name']}.php?msel=31&f_s_num={$row['s_num']}'>{$f_var['del_img']}</a>");

      //�|�p�f�֥�
      if( ($row['quota_total'] > 0)  && $row['all_done'] != 'Y' ){
        if( $f_var['admin'] == 'Y' || $f_var['fina'] == 'Y' ){ 
          $fina = true;
          $f_var['tp']-> newBlock('tb_set_tr');
          $f_var['tp']-> assign('tv_s_num',$row['s_num']);
          $f_var['tp']-> assign('tv_area',$row['area']);
          $f_var['tp']-> assign('tv_quota_total',$row['quota_total']);
          $f_var['tp']-> assign('tv_fina_quota_total',$row['fina_quota_total']);
        }
      }
      
    }

    //�Y���i�H�f�֪���ƫh�q�X�ק���s
    $fina ? $f_var['tp']->newBlock('tb_set_btn') : $f_var['tp']->newBlock('tb_set_ndata');

    //�C�X���ƦW��
    if( $f_var['admin'] == 'Y' || $f_var['job_5019'] == 'Y'){
      $f_var['tp']-> newBlock('tb_repeat_btn');
      $f_var['tp']-> newBlock('tb_repeat');
      $f_var['tp']-> assign('tv_year',$f_var['f_year']);
      $f_var['tp']-> assign('tv_festival',$f_var['f_festival']);

      //��X���ƪ��νs����
      $sql = "SELECT tax_no,GROUP_CONCAT(h.s_num) AS h_s_num
              FROM {$f_var['mtable']['head']} AS h 
              LEFT JOIN ( SELECT * FROM {$f_var['mtable']['body']} 
                          WHERE d_date = '0000-00-00 00:00:00'
                          AND tax_no != 'N' GROUP BY tax_no,h_s_num
                          ) AS b ON h.s_num = b.h_s_num 
              LEFT JOIN {$f_var['mtable']['config']} AS c ON c.s_num = h.area_s_num
              WHERE h.year = '{$f_var['f_year']}'
              AND h.festival = '{$f_var['f_festival']}'
              AND h.d_date = '0000-00-00 00:00:00'
              GROUP BY b.tax_no
              HAVING COUNT(b.tax_no) > 1";

      // echo '<pre>'.print_r($sql,1).'</pre>';
      // exit;
      $count_tax = 0;
      $result = mysqli_query($f_var['con_db'],$sql);
      if( mysqli_num_rows($result) > 0 ){
        while( $row = mysqli_fetch_assoc($result) ){
          //�̲νs���� ��X��§��H
          $sql_item = "SELECT c.config_value AS area,b.h_s_num,b.company,g.position,g.name 
                      FROM {$f_var['mtable']['body']} AS b
                      LEFT JOIN {$f_var['mtable']['head']} AS h ON h.s_num = b.h_s_num
                      LEFT JOIN {$f_var['mtable']['item']} AS i ON b.s_num = i.b_s_num
                      LEFT JOIN {$f_var['mtable']['guest']} AS g ON g.s_num = i.guest_s_num
                      LEFT JOIN {$f_var['mtable']['config']} AS c ON c.s_num = h.area_s_num
                      WHERE h.d_date = '0000-00-00 00:00:00'
                      AND b.d_date = '0000-00-00 00:00:00'
                      AND i.d_date = '0000-00-00 00:00:00'
                      AND b.tax_no = '{$row['tax_no']}'
                      AND h.s_num IN ({$row['h_s_num']})
                      ";
    
          // echo '<pre>'.print_r($sql_item,1).'</pre>';
          // exit;
    
          $result_item = mysqli_query($f_var['con_db'],$sql_item);
          $list = array(); //���ƥ�
          $count = array(); //�p��X�{���� rowspan��
          while( $row_item = mysqli_fetch_assoc($result_item) ){
            $list[ $row_item['area'] ][ $row_item['company'] ][] = $row_item;
            $count[ $row_item['area'] ]['num']++;
            $count[ $row_item['area'] ][ $row_item['company'] ]++;
          }
    
          // echo '<pre>'.print_r($count,1).'</pre>';
          // exit;
    
          //�C�X���ƦW�檺table
          $i = 0;
          $td = '';
          foreach( $list as $area => $arr ){
            $k = 0;
            foreach( $list[$area] as $company => $item ){
              foreach( $item as $ind => $val ){
                $td = '';
    
                if( $i == 0 && $k == 0 && $ind == 0 ){ //�̲Ĥ@�� �|��tax_no��
                  $td .= "<td name='tax_no' rowspan=".mysqli_num_rows($result_item).">{$row['tax_no']}</td>";
                }
                if( $ind == 0 ){  //���q����§��H���Ĥ@�� �|�����q�W��
                  $td .= "<td rowspan=".$count[$area][$company].">{$company}</td>";
                }
                $td .= "<td>{$val['position']}</td>";
                $td .= "<td>{$val['name']}</td>";
    
                if( $k == 0 && $ind == 0 ){ //���̪��Ĥ@�� �|�����W��
                  $a = "<a href='{$f_var['server_name']}{$_SERVER["PHP_SELF"]}?msel=2&f_s_num={$val['h_s_num']}'>
                        {$area}</a>";
                  $td .= "<td name='area' rowspan=".$count[$area]['num'].">{$a}</td>";
                }
                $f_var['tp']-> newBlock('tb_repeat_tr');
                $f_var['tp']-> assign('tv_tr',$td);
                $f_var['tp']-> assign('tv_color',$count_tax%2==0 ? '#cde3e1' : '#eeedec');
              }
              $k++;
            }
            $i++;
          }
          $count_tax++;
        }
      }else{
        $f_var['tp']-> newBlock('tb_repeat_none');
      }
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


  $_POST['s_num'] = ReturnInt($_POST['s_num']);
  $result = mysqli_query($f_var['con_db'],"SELECT * FROM {$f_var['mtable']['head']} WHERE s_num = {$_POST['s_num']}");


  $base_rev = "SELECT config_value FROM {$f_var['mtable']['config']} 
                WHERE config_key = 'base_rev' AND d_date = '0000-00-00 00:00:00'";

  $base_gp = "SELECT config_value FROM {$f_var['mtable']['config']} 
              WHERE config_key = 'base_gp' AND d_date = '0000-00-00 00:00:00'";

  $quota_type = "SELECT quota_type FROM {$f_var['mtable']['config']} 
                WHERE s_num = {$_POST["area_s_num"]} AND d_date = '0000-00-00 00:00:00'";

  $quota_version = "SELECT CASE WHEN max(`version`) IS NULL THEN 1 ELSE max(`version`) END AS `version` 
                    FROM {$f_var['mtable']['quota']} AS q
                    LEFT JOIN {$f_var['mtable']['config']} AS c ON c.s_num = {$_POST["area_s_num"]}
                    where q.d_date = '0000-00-00 00:00:00' and q.`type` = c.`quota_type`";



  
  
  if( mysqli_num_rows($result) > 0 ){ //update

    $sql = "UPDATE {$f_var['mtable']['head']}
            SET `year` = '{$_POST["year"]}' ,
                `festival` = '{$_POST["festival"]}' ,
                `address` = '{$_POST["address"]}' ,
                `area_s_num` = '{$_POST["area_s_num"]}' ,

                `base_rev` = ({$base_rev}),
                `base_gp` = ({$base_gp}),
                `quota_type` = ({$quota_type}),
                `quota_version` = ({$quota_version}),

                `m_empno`= '{$_SESSION['login_empno']}' ,
                `m_dept_id`= '{$_SESSION['login_dept_id']}' ,
                `m_proc`= '{$f_var['mphp_name']}' ,
                `m_date`= now()
            WHERE `s_num` = {$_POST['s_num']} 
            ";
    
  }else{ //insert


    $ins_key = '`s_num`'            ;  $ins_val = '""';
    $ins_key .= ',`area_s_num`'     ;  $ins_val .= ",'{$_POST["area_s_num"]}'";
    $ins_key .= ',`year`'           ;  $ins_val .= ",'{$_POST["year"]}'";
    $ins_key .= ',`festival`'       ;  $ins_val .= ",'{$_POST["festival"]}'";
    $ins_key .= ',`address`'        ;  $ins_val .= ",'{$_POST["address"]}'";

    $ins_key .= ',`base_rev`'       ;  $ins_val .= ",($base_rev)";
    $ins_key .= ',`base_gp`'        ;  $ins_val .= ",($base_gp)";
    $ins_key .= ',`quota_type`'     ;  $ins_val .= ",($quota_type)";
    $ins_key .= ',`quota_version`'  ;  $ins_val .= ",($quota_version)";

    $ins_key .= ',`b_empno`'        ;  $ins_val .= ",'{$_SESSION['login_empno']}'";
    $ins_key .= ',`b_dept_id`'      ;  $ins_val .= ",'{$_SESSION['login_dept_id']}'";
    $ins_key .= ',`b_proc`'         ;  $ins_val .= ",'{$f_var['mphp_name']}'";
    $ins_key .= ',`b_date`'         ;  $ins_val .= ",now()";
    $ins_key .= ',`fromip`'         ;  $ins_val .= ",'{$_SERVER['REMOTE_ADDR']}'";


    $sql = "INSERT INTO {$f_var['mtable']['head']}
            ( {$ins_key} ) values ( {$ins_val} ) ";

  }

  $result = mysqli_query($f_var['con_db'],$sql);
  // sl_showsql($sql);


  if( $result ){
    echo sl_jreplace($f_var['mphp_name'].'.php?msel=2&f_s_num='.mysqli_insert_id($f_var['con_db']) );
    // echo '�s�W���\..';
  }else{
    $f_var["tp"]-> assign("_ROOT.tv_alert",'�W����s�W����!!');
    $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
    return false;
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

  if( $f_var['fina'] == 'Y' || $f_var['job_5019'] == 'Y' ){
    $f_var["tp"]-> assign("_ROOT.tv_alert",'�z�L�v���s�W!!');
    return;
  }

  //���v���]�w�s�W�ɪ����ﶵ
  if( $f_var['admin'] == 'Y' ){ //�v��
    $sql_access = '';
  }else{
    $sql_access = " AND access_empno = '{$_SESSION['login_empno']}' "; //���w���f�H
  }

  $result = mysqli_query($f_var['con_db'],"SELECT * FROM {$f_var['mtable']['config']} 
                        WHERE config_key = 'gift_head_area' 
                        {$sql_access} ");

  $f_var['fd']['area_s_num']['show'][] = "�п��";
  $f_var['fd']['area_s_num']['value'][] = '';
  $f_var['fd']['area_s_num']['data-address'][] = '';

  while($row = mysqli_fetch_assoc($result)){
    $f_var['fd']['area_s_num']['show'][] = $row['config_value'];
    $f_var['fd']['area_s_num']['value'][] = $row['s_num'];
    $f_var['fd']['area_s_num']['data-address'][] = $row['address'];
  }

  

  $f_var["tp"]-> newBlock('tb_insert');
  $f_var["tp"]-> assign("tv_action",$f_var['mphp_name'].'.php?msel=11');


  $f_var['f_s_num'] = ReturnInt($f_var['f_s_num']);

  $sql = "SELECT *
          FROM {$f_var['mtable']['head']} 
          WHERE s_num = {$f_var['f_s_num']}
          AND d_date = '0000-00-00 00:00:00'";

  // sl_showsql($sql);

  $row = array();
  $result = mysqli_query($f_var['con_db'],$sql);
  if( mysqli_num_rows($result) > 0 ){
    $row = mysqli_fetch_assoc($result);
  }


  foreach($f_var['fd'] as $key => $val){

    $f_var["tp"]-> newBlock('tb_ins_tr');
    $f_var["tp"]-> assign("tv_cname",$val['cname']);
    $f_var["tp"]-> assign("tv_memo",$val['memo']);
    $f_var["tp"]-> assign("tv_readonly",$val['readonly']);


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
          if( $key == 'area_s_num' ){
            $f_var["tp"]-> assign("tv_address",$val['data-address'][$ind]);
          }
          if( $key == 'year' && date('Y') == $val['value'][$ind] ){ //�w�]���~
            $f_var["tp"]-> assign("tv_selected",'selected');
          }
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
  if($f_var['msel'] == NULL){
    $f_var['msel'] = 4;
  }
  if(NULL==$f_var['f_page']) {
    $f_var['f_page']  = 1;  //����
  }
  if(NULL==$f_var['max_page']) {
    $f_var['max_page']  = 1;  //�̤j����
  }
  if($f_var['f_year'] == NULL){
    $f_var['f_year'] = date('Y'); //�~��
  }
  if($f_var['f_festival'] == NULL){
    $f_var['f_festival'] = '����`'; //�`��
  }
  if($f_var['admin'] == NULL){
    $f_var['admin'] == 'N';
  }
  
  // ���ǤJ�Ȥ��w�]�ȳ]�w End ..................................................//


  $f_var['mphp_name'] = u_showproc(); //�{���W��
  $f_var['show_year'] = '4';
  $f_var['msel_name'] = array('1'=>'�s�W','2'=>'�ק�','3'=>'�R��','4'=>'�s��','5'=>'�d��','6'=>'���w�q','7'=>'�C�L'); // msel ����
  $f_var['ie_h_title'] = '§�~�޲z�t��-��§��H�W����'; // �������D
  $f_var['msub_title'] = '§�~�޲z�t��-��§��H�W����'; // �{���Ƽ��D
  $f_var['mmaxline'] = 15; // �C���̤j����
  $f_var['mdb'] = 'heroku'; // db name
  $f_var['mupload_dir']  = "./gift_upfile/" ; //�W���ɮר즹��Ƨ�
  $f_var['mtable'] = array('head'=>'gift_head','body'=>'gift_body','type'=>'gift_type','quota'=>'gift_quota',
                          'config'=>'gift_config','guest'=>'gift_guest','item'=>'gift_item'); // �ϥ� table �W�� 
  $f_var['tpl'] = 'gift_list.tpl'; // �˪��e����




  $f_var['s_festival']['show'] = array('����`','�K�`'); //�`��ﶵ
  $f_var['s_festival']['value'] = array('����`','�K�`'); //�`��ﶵ


  //�~���ﶵ,�q2021�}�l �� +1�~(���~)
  for($i = 2021; $i<=(date('Y')+1); $i++){
    $f_var['s_year']['show'][] = $i;
    $f_var['s_year']['value'][] = $i;
  }


  if( $f_var['msel'] == '1' ){ //�s�W�ɤ~��

    //�s�W�ɪ����]�w
    $f_var['fd'] = array(
  
      's_num' =>  array('ename'     => 's_num',
                        'cname'     => '�y����',
                        'type'      => 'hidden',
                        'value'     => '',
                        'pkey'      => 'Y'),
  
      'area_s_num'  =>  array('ename'     => 'area_s_num',
                              'cname'     => '���',
                              'type'      => 'select',
                              'value'     => [],
                              'show'      => [],
                              'data-address' => [],
                              'pkey'      => 'Y',
                              'memo'      => '',),
  
      'year'  =>   array('ename'    => 'year',
                        'cname'     => '�~��',
                        'type'      => 'select',
                        'value'     => $f_var['s_year']['value'],
                        'show'      => $f_var['s_year']['show'],
                        'pkey'      => 'Y',
                        'memo'      => '',),
  
      'festival'  =>  array('ename'     => 'festival',
                            'cname'     => '�`��',
                            'type'      => 'select',
                            'show'      => $f_var['s_festival']['show'],
                            'value'     => $f_var['s_festival']['value'],
                            'pkey'      => 'Y'),
  
  
      'address'  =>  array('ename'     => 'address',
                          'cname'     => '�a�}',
                          'type'      => 'text',
                          'value'     => '',
                          'size'      => '40',
                          'maxlength' => '100',
                          'pkey'      => 'Y'),
    ); 
  }

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

// **************************************************************************
//  ��ƦW��: replace(matches)
//  ��ƥ\��: preg_replace_callback ��callback�禡
//  �ϥΤ覡: replace($matches)
//  �{���]�p: ���t
//  �]�p���: 2021.04.23
// **************************************************************************
function replace($matches){
  return mb_convert_encoding($matches[0], 'UTF-8', 'HTML-ENTITIES');
}

?>