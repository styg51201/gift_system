<?php
//�z�w�w�w�w�w�s�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�{
//�x�t�ΦW��: �xrpt_gasdoc.php�@  �@                                       �x
//�x          �x                                                        �x
//�x�{���W��: �xrpt_gasdoc.php                                         �x
//�x�{������: |�o����ިt�γ���                                                      �x
//�x�˪O�W��: �xrpt_gasdoc.tpl                                                 �x
//�x          �x                                                              �x
//�x��Ʈw  : �xgas                                              �x
//�x��ƪ�  : �xgasdoc
//|          |gasdoc_set
//|          |company
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


// ------- for excel -------
if($_POST['table'] ){ //�����btpl�e��,�]��tpl�|�ǰeheader
  u_excel(&$f_var);
  exit;   
}
// ------- end excel -------



include_once(  $mtp_url."class.TemplatePower.inc.php"  ); 
$f_var["tp"] = new  TemplatePower ( $f_var["tpl"] );  // �˪��e����
$f_var["tp"]-> prepare ();



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
//  ��ƦW��: u_excel($f_var)
//  ��ƥ\��: �򥻸�ƦC��
//  �ϥΤ覡: u_info(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_excel($f_var){

  //�ǰe�Ӫ�json�নarr
  $data = stripslashes($_POST['table']);
  $data = mb_convert_encoding($data,"UTF-8","big5"); 
  $data = json_decode($data,true);


  include '/home/gas/public_html/sap/include/PHPExcel/Classes/PHPExcel.php';
  $objPHPExcel = new PHPExcel();
  $objPHPExcel->setActiveSheetIndex(0);
  $sheet = $objPHPExcel->getActiveSheet();

  
  //excel���椸��(ex:B3) ; chr(65) = 'A' (10�i����r��)
  //$arr_AZ[] = [A,B,C,....,ZY,ZZ,AAA,AAB,...,ZZZZ.....] 
  $arr_AZ = array();
  for($i = "A"; count($arr_AZ) < count($data['arr_td'][0]) ; $i++) {
    $arr_AZ[] = $i;
  }
  $col = end($arr_AZ); //�̫�@�Ӫ�col ex:L 
  
  // print("<pre>".print_r($arr_AZ)."</pre>");
  // exit;



  //title �]�w�� (�o����ިt�γ���)
  $sheet->setCellValue( 'A1' , mb_convert_encoding($f_var['ie_h_title'],"UTF-8","big5") );
  $sheet->setCellValue( 'A2' , trim($data['p_que']) );

  //���e�]�w  $i => excel��row�� , i�q3�}�l,1,2�W���]�wtitle�F
  //          $j,$k => arr��index��
  for( $i = 3 ,$j = 0 ; $j < count($data['arr_td']) ;$i++,$j++ ){

    for( $k = 0 ; $k < count($arr_AZ) ;$k++  ){
      $sheet->setCellValue( $arr_AZ[$k].$i , $data['arr_td'][$j][$k] );
    }
    $sheet->getRowDimension($i)->setRowHeight(20); //�C��
    $row = $i;        //�̫�@�Ӫ�row ex:18
  }


  //title�X�ֳ椸��
  $objPHPExcel->getActiveSheet()->mergeCells("A1:{$col}1");
  $objPHPExcel->getActiveSheet()->mergeCells("A2:{$col}2");


  //�˦��]�w
  $sheet->getStyle("A1:{$col}{$row}")
        ->getBorders()->getAllborders()
        ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN); //�]�w�������

  $sheet->getStyle("A1")->getFont()->setSize(18); //title �j�p
  $sheet->getStyle("A3:{$col}3")->getFont()->setBold(true); //th����


  //���e�� ABCD => �T�w����X (���e����) , ��L����o����,���]20 
  //TODO setAutoSize(true) �ܱo�� ?
  for( $k = 0 ; $k < count($arr_AZ) ;$k++  ){
    if( $arr_AZ[$k] == "A" || $arr_AZ[$k] == "B" || $arr_AZ[$k] == 'C' || $arr_AZ[$k] == 'D' ){
      $sheet->getColumnDimension( $arr_AZ[$k] )->setWidth(10);
    }else{
      $sheet->getColumnDimension( $arr_AZ[$k] )->setWidth(20);
    }
  }

  // �]�w���ƦC�� BG-color 
  for( $i = 3 ; $i <= $row ; $i++ ){
    if( $i % 2 == 1 ){
      $sheet->getStyle("A{$i}:{$col}{$i}")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('f0f0f6');
    }
  }

  // �ɦW = �{���W��+���s
  $filename = $f_var['msub_title'].'-'.$_SESSION['login_empno'];

  // �ǰe�U�������Y
  header('Content-Type: application/vnd.ms-excel');  
  header("Content-Disposition: attachment;filename={$filename}.xls");  
  header('Cache-Control: max-age=0');  

  $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
  $objWriter->save('php://output');

}

// **************************************************************************
//  ��ƦW��: u_info($f_var)
//  ��ƥ\��: �򥻸�ƦC��
//  �ϥΤ覡: u_info(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_info($f_var){

  $pattern ='/([0,5,6,8])00$/'; //000����;500�_�ϥ���;600���ϥ���;800�n�ϥ���
  $pattern2 ='/00([1-9])$/'; //001�Ĥ@��;002�ĤG��;003�ĤT��;.....

  if( $f_var['code'] != '--' ){
    $code = substr($f_var['code'],3);
    if( preg_match($pattern,$code,$matches) ){ //�P�_�� ����?�_��?����?�n��?
      if( $matches[1] != 0 ){ //0=>�N�����,�h���L
      $sql_com_where .= "AND substr(`hr_deptid`,4,1) = {$matches[1]}";
      }
    }else if( preg_match($pattern2,$code,$matches) ){ //�P�_�� �Ĥ@��?�ĤG��?�ĤT��?

      $num = substr($f_var['code'],0,1); //�P�_�� �_��?����?�n��?
      $num2 = $matches[1] % 3; 
      $num2 = $num2 == 0 ? 3 : $num2;

      $sql_com_where .= " AND substr(`hr_deptid`,4,1) = {$num} 
                          AND substr(`hr_deptid`,6,1) = {$num2}";
    }else{ // ���w���O��
      $sql_com_where .= " AND `code` = {$code}";
    }
  }

  //����r��]�w
  $tv_q_code = array_search( $f_var['code'] , $f_var['fd']['code']['option'] );
  $tv_q_code = explode('-',$tv_q_code);
  $tv_q_code = $tv_q_code[1] == '�п��' ? '����' : $tv_q_code[1];


  if( $f_var['oil_supply'] && $f_var['oil_supply'] != 'all' ){
    $sql_com_where .= " AND `oil_supply` = {$f_var['oil_supply']}";

    //����r��]�w
    $tv_q_oil = array_search( $f_var['oil_supply'] , $f_var['fd']['oil_supply']['option'] );
  }else{
    $tv_q_oil = '����';
  }

  if( $f_var['rent_type'] && $f_var['rent_type'] != 'all' ){
    $sql_com_where .= " AND `rent_type` = {$f_var['rent_type']}";

    //����r��]�w
    $tv_q_rent = array_search( $f_var['rent_type'] , $f_var['fd']['rent_type']['option'] );
  }else{
    $tv_q_rent = '����';
  }

  // �l�d�ߥ�
  $sql_com = "SELECT `code` FROM `company`
              WHERE `stop_flag` != 'Y' 
              AND `hr_deptid` != ''";
  $sql_com .= $sql_com_where;


  if ( in_array('all',$_POST['itemno']) ){
    $sql_gs_where = ''; //��ܥ�������,�N���]�w����
  }else{
    foreach( $_POST['itemno'] as $key => $val){
      $_POST['itemno'][ $key ] = "'".$val."'"; //�e��[�W��޸�,sql��
    }
    $str = implode(',',$_POST['itemno']);  // �γr���s�� $str = 'A001','B002','C003'
    $sql_gs_where = "AND gs.itemno in ({$str})"; 
  }



  $sql = "  SELECT com.`code`,`sname`,`rent_type`, gs.`itemno`,`item_name`,`field_type`,
            CASE `oil_supply` WHEN 1 THEN '���o' 
            WHEN 2 THEN '�x��' END AS `oil_supply`,
            CASE `rent_type` WHEN 1 THEN '�ۥ�' 
            WHEN 2 THEN '����' 
            WHEN 3 THEN '���a�۫�' END AS `rent_type`,
            CASE WHEN `gd_2`<>'' THEN  CONCAT( `gd_1`,'~',`gd_2`)
            ELSE `gd_1` END AS `gd_1`
            FROM `gasdoc` AS gd
            RIGHT JOIN `gasdoc_set` AS gs ON gs.itemno = gd.itemno {$sql_gs_where} 
            RIGHT JOIN `company` AS com ON com.`code` = gd.`code` 
            WHERE com.`code` in ({$sql_com})";

  // echo "<br>";
  // echo $sql;

  // �C�Xthead��
  $sql_item = "SELECT `itemno`,`item_name` FROM `gasdoc_set` AS gs WHERE d_date = '0000-00-00 00:00:00' {$sql_gs_where} ORDER BY `itemno` ASC";

  $result_item = mysql_query($sql_item);
  while( $row_item = mysql_fetch_assoc($result_item) ){
    $arr_item[ $row_item['itemno'] ] = $row_item['item_name']; //$arr_item['A0001'] = '����~��'
  }



  $result = mysql_query($sql);
  if( mysql_num_rows($result) > 0 ){

    while( $row = mysql_fetch_assoc($result) ){
      // print("<pre>".print_r($row)."</pre>");
      $arr_rpt[ $row['code'] ]['sname'] = $row['sname'];
      $arr_rpt[ $row['code'] ]['oil_supply'] = $row['oil_supply'];
      $arr_rpt[ $row['code'] ]['rent_type'] = $row['rent_type'];
  
      if( $row['field_type'] == '03.����϶�' ){
        $arr_str = explode('~',$row['gd_1']);
        $arr_rpt[ $row['code'] ]['itemno'][ $row['itemno'] ] = sl_4ymd($arr_str[0],'/').' ~ '.sl_4ymd($arr_str[1],'/');
      }else if ( $row['field_type'] == '04.��@���' ){
        $arr_rpt[ $row['code'] ]['itemno'][ $row['itemno'] ] = sl_4ymd($row['gd_1'],'/');
      }else{
        $arr_rpt[ $row['code'] ]['itemno'][ $row['itemno'] ] = $row['gd_1'];
      }
    }

    $f_var["tp"]-> newBlock('tb_gas_list');
    $f_var["tp"]-> assign('tv_q_code',$tv_q_code);
    $f_var["tp"]-> assign('tv_q_oil',$tv_q_oil);
    $f_var["tp"]-> assign('tv_q_rent',$tv_q_rent);


    foreach($arr_item as $val){
      $f_var["tp"]-> newBlock('tb_gas_list_th');
      $f_var["tp"]-> assign('tv_th',$val);
    }

    $i = 1;
    foreach($arr_rpt as $val){
      $f_var["tp"]-> newBlock('tb_gas_list_tr');
      $f_var["tp"]-> assign('tv_num',$i);
      $f_var["tp"]-> assign('tv_sname',$val['sname']);
      $f_var["tp"]-> assign('tv_oil',$val['oil_supply']);
      $f_var["tp"]-> assign('tv_rent',$val['rent_type']);

      foreach($arr_item as $key => $value){
        $f_var["tp"]-> newBlock('tb_gas_list_td');
        if( $val['itemno'][$key] ){
          $f_var["tp"]-> assign('tv_td',$val['itemno'][$key]);
        }else{
          $f_var["tp"]-> assign('tv_td','-');
        }
      }
      $i++;
    }

  }else{
    sl_errmsg("�d�L���");
  }

}
// **************************************************************************
//  ��ƦW��: u_list($f_var)
//  ��ƥ\��: �C�X�d��table
//  �ϥΤ覡: u_list($f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_list($f_var){




  $sql = "SELECT `itemno`,`item_name`,`block_type`
          FROM `gasdoc_set` WHERE `d_date` = '0000-00-00 00:00:00'
          ORDER BY `itemno` ASC";

  $result = mysql_query($sql);
  if( mysql_num_rows($result) > 0 ){
    while( $row = mysql_fetch_assoc($result) ){
      $item[ $row['block_type'] ]['block'] = array('itemno'=>substr($row['block_type'],0,1),'item_name'=>$row['block_type']);
      $item[ $row['block_type'] ][] = $row;
    }
  }else{
    $item = array();
  }
  
  // print("<pre>".print_r($item)."</pre>");
  $f_var['fd']['itemno']['value'] = $item ;



  $f_var["tp"]-> newBlock('tb_gas_que');
  $f_var["tp"]-> assign('tv_action',"{$f_var['mphp_name']}.php?msel=4");
  $f_var["tp"]-> assign('tv_title','�п�J�d�߱���');

  foreach( $f_var['fd'] as $td ){
    $f_var["tp"]-> newBlock('tb_gas_tr');
    $f_var["tp"]-> assign('tv_cname',$td['cname']);

    switch( $td['type'] ){
      case 'select':
        $f_var["tp"]-> newBlock('tb_gas_select');
        $f_var["tp"]-> assign('tv_ename',$td['ename']);
        foreach( $td['option'] as $show => $value ){
          $f_var["tp"]-> newBlock('tb_gas_option');
          $f_var["tp"]-> assign('tv_show',$show);
          $f_var["tp"]-> assign('tv_value',$value);
        }
      break;
      case 'checkbox':
        if( count($td['value']) ){
          $f_var["tp"]-> newBlock('tb_gas_checkbox');
          foreach( $td['value'] as $name => $val ){
            $f_var["tp"]-> newBlock('tb_gas_checkbox_tr');
            $f_var["tp"]-> assign('tv_class',$val['block']['itemno']);

            foreach( $val as $value1 ){
              $f_var["tp"]-> newBlock('tb_gas_checkbox_td');
              $f_var["tp"]-> assign('tv_ename',$td['ename']);
              $f_var["tp"]-> assign('tv_value',$value1['itemno']);
              $f_var["tp"]-> assign('tv_cname',$value1['item_name']);
            }
          }
        }else{
          $f_var["tp"]-> newBlock('tb_gas_checkbox_none');
        }
        
      break;
    }
  }
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
    $f_var['ie_h_title'] = '�o����ިt�γ���'; // �������D
    $f_var['msub_title'] = '�o����ިt�γ���'; // �{���Ƽ��D
    $f_var['mdb'] = 'gas'; // db name
    $f_var["mupload_dir"]  = "/home/gas/public_html/gasdoc_upfile/" ; //�W���ɮר즹��Ƨ�
    $f_var['mtable'] = array('gasdoc'=>'gasdoc' ,'gasdoc_hist'=>'gasdoc_hist'); // �ϥ� table �W�� 
    $f_var['tpl'] = 'rpt_gasdoc.tpl'; // �˪��e����
    $f_var['dateTime'] = date('Y-m-d H:i:s'); //����


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
    $empno =  $result ? $_SESSION["login_empno"] : '';
    

    $option = sl_add_select_gas('b_gid','Y',"S111/{$empno}");
    $code_option = array();
    foreach ( $option[1] as $key => $val){
      if( substr($val,0,3)  == 'C01' || substr($val,0,3)  == 'T01') continue; // ���o��,�x�쯸 ���L
      $code_option[ substr($val,3) ] = $option[0][ $key ]; // $code_option['301-�s�w��'] = 301
    }
    // print("<pre>".print_r($code_option)."</pre>");
  
 
    $fd_var['code'] = array(  'cname' => '���O',
                                  'ename' => 'code',
                                  'type' => 'select',
                                  'option' => $code_option,
                                );
    $fd_var['oil_supply'] = array(  'cname' => '�o�~',
                                  'ename' => 'oil_supply',
                                  'type' => 'select',
                                  'option' => array('--�п��--' => NULL,
                                                    '����' => 'all',
                                                    '���o' => 1,
                                                    '�x��' => 2
                                                  ),
                                );
    $fd_var['rent_type'] = array( 'cname' => '�ۥ�/����',
                                  'ename' => 'rent_type',
                                  'type' => 'select',
                                  'option' => array('--�п��--' => NULL,
                                                    '����' => 'all',
                                                    '�ۥ�' => 1,
                                                    '����' => 2,
                                                    '���a�۫�' => 3
                                                  ),
                                );
    $fd_var['itemno'] = array( 'cname' => '������',
                                  'ename' => 'itemno',
                                  'type' => 'checkbox',
                                  'value' => array(),
                                );                            

    $f_var['fd'] = $fd_var;
    
    return;
  }
?>