<?php 
//�z�w�w�w�w�w�s�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�{
//�x�t�ΦW��: �xgift_rpt�@  �@                                              �x
//�x         �x                                                              �x
//�x�{���W��: �xgift_rpt.php                                                �x
//�x�{������: �x§�~�޲z�t��-����                                      �x
//�x�˪O�W��: �xgift_rpt.tpl                                                 �x
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
//�x�]�p���: �x2021.04.01                                                   �x
//�|�w�w�w�w�w�r�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�}

include_once('/home/sl/public_html/sl_init.php'); 
u_setvar($f_var);

// ------- for excel -------
if($f_var['excel'] == 'Y' ){ //�����btpl�e��,�]��tpl�|�ǰeheader

  if( $_POST['report'] == 'B' ){
    u_excel($f_var);
  }else if( $_POST['report'] == 'C' ){
    repeat_excel($f_var);
  }
  exit;   
}
// ------- end excel -------

include_once($mtp_url."class.TemplatePower.inc.php");
$f_var["tp"] = new  TemplatePower($f_var['tpl']);
$f_var["tp"]-> assignInclude ("tb_sl_tpl_1","/home/sl/public_html/sl_tpl_1.tpl");
$f_var["tp"]-> prepare();


include_once($sl_header_php);
include_once('./gift_access.php'); 

if( u_chk_access($f_var) ){ //�v���]�w

  sl_open($f_var['mdb']); // �}�Ҹ�Ʈw
  switch ($f_var['msel']) {
    default:
      u_input($f_var);
    break;
  }

}else{
  $f_var["tp"]-> assign("_ROOT.tv_alert",'�z�L�v���[��!!');
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
//  ��ƦW��: repeat_excel(&$f_var)
//  ��ƥ\��: �ץXExcel
//  �ϥΤ覡: repeat_excel(&$f_var)
//  �{���]�p: 
//  �]�p���: 2006.09.27
// **************************************************************************
function repeat_excel(&$f_var){

  include '/home/sl/public_html/PHPExcelv2/PHPExcel.php';

  sl_open($f_var['mdb']); // �}�Ҹ�Ʈw

  //��X���ƪ��νs����
  $sql = "SELECT tax_no,GROUP_CONCAT(h.s_num) AS h_s_num
          FROM {$f_var['mtable']['head']} AS h 
          LEFT JOIN ( SELECT * FROM {$f_var['mtable']['body']} 
                      WHERE d_date = '0000-00-00 00:00:00'
                      AND tax_no != 'N' GROUP BY tax_no,h_s_num
                      ) AS b ON h.s_num = b.h_s_num 
          LEFT JOIN {$f_var['mtable']['config']} AS c ON c.s_num = h.area_s_num
          WHERE h.year = '{$_POST['year']}'
          AND h.festival = '{$_POST['festival']}'
          AND h.d_date = '0000-00-00 00:00:00'
          GROUP BY b.tax_no
          HAVING COUNT(b.tax_no) > 1";

  // echo '<pre>'.print_r($sql,1).'</pre>';
  // exit;
  $result = mysql_query($sql);
  $row_num = 0;
  if( mysql_num_rows($result) > 0 ){
    //�إ�excel
    $objPHPExcel = new PHPExcel();
    $sheet = $objPHPExcel->getActiveSheet();
    //�]�wthead
    $title = "{$_POST['year']}�~{$_POST['festival']}�w�p��§��H-���ƦW��";
    $sheet->setCellValue('A1',mb_convert_encoding($title,"UTF-8","big5") );
    $sheet->setCellValue('A2',mb_convert_encoding("�νs","UTF-8","big5") );
    $sheet->setCellValue('B2',mb_convert_encoding("���q�W��","UTF-8","big5") );
    $sheet->setCellValue('C2',mb_convert_encoding("��§��H","UTF-8","big5") );
    $sheet->setCellValue('E2',mb_convert_encoding("���ƦW��","UTF-8","big5") );
    $sheet->setCellValue('C3',mb_convert_encoding("¾��","UTF-8","big5") );
    $sheet->setCellValue('D3',mb_convert_encoding("�m�W","UTF-8","big5") );

    //thead�X�ֳ椸��
    $sheet->mergeCells("A1:E1");
    $sheet->mergeCells("A2:A3");
    $sheet->mergeCells("B2:B3");
    $sheet->mergeCells("C2:D2");
    $sheet->mergeCells("E2:E3");

    //�]�w�ʽu�~��-�]�w��
    $style['borders']['outline']['style'] = PHPExcel_Style_Border::BORDER_THICK;
    

    $col = 'E'; //�̪���E��
    $num = 4; //��4�C�}�l

    while( $row = mysql_fetch_assoc($result) ){
      
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

      $result_item = mysql_query($sql_item);
      $list_area = array();
      $list_com = array();
      $i = 0;
      while( $row_item = mysql_fetch_assoc($result_item) ){

        //�X�ֳ椸���-- ��ۦP��� �H�� �ۦP���S�ۦP���q�W ���C���Ʀr�x�s�_��
        $list_area[ $row_item['area'] ][] = $i+$num;
        $list_com[ $row_item['area'] ][ $row_item['company'] ][] = $i+$num;


        $sheet->setCellValue('A'.(int)($i+$num), mb_convert_encoding($row['tax_no'],"UTF-8","big5") );

        $company = to_utf8($row_item['company']); //���q�W�i�঳���r,�n���ഫ
        $sheet->setCellValue('B'.(int)($i+$num), $company);

        $sheet->setCellValue('C'.(int)($i+$num), mb_convert_encoding($row_item['position'],"UTF-8","big5") );

        $name = to_utf8($row_item['name']); //�m�W�i�঳���r,�n���ഫ
        $sheet->setCellValue('D'.(int)($i+$num), $name);

        $sheet->setCellValue('E'.(int)($i+$num), mb_convert_encoding($row_item['area'],"UTF-8","big5") );
        $i++;

      }

      //�]�w�������
      $sheet->getStyle("A{$num}:E".(int)($num+$i-1))
      ->getBorders()->getAllborders()
      ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN); 

      //�]�w�P�@�Ӳνs �P�@�I���C��
      $bg_color = $row_num % 2 == 0 ? 'fef3eb' : 'eaf6f9' ; 
      $sheet->getStyle("A{$num}:E".(int)($num+$i-1))->getFill()
      ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
      ->getStartColor()->setRGB($bg_color);

      //�X�ֳ椸��
      foreach( $list_area as $area => $val ){
        if( count($val) > 1 ){ //�j��1�N��O�ۦP����ƥi�H�X��
          $sheet->mergeCells("E".(int)min($val).":E".(int)max($val)); //E��->���Ƴ��
        }
        //�P���-�]�w�ʽu�~��
        $sheet->getStyle("B".(int)min($val).":E".(int)max($val))->applyFromArray($style); 

        foreach( $list_com[ $area ] as $com => $v ){
          if( count($v) > 1 ){
            $sheet->mergeCells("B".(int)min($v).":B".(int)max($v)); //B��->���q�W
          }
        }

      }

      $sheet->mergeCells("A{$num}:A".(int)($num+$i-1)); //A��->�νs
      $num += $i; 
      $row_num++;
    }

    $num--; //$num �O�U�@�ӦC��,�ҥH��̫�|�h�@�C,�o��n��1

    //�]�wexcel��style
    //�]�w���e�w
    $sheet->getColumnDimension('A')->setWidth(15);
    $sheet->getColumnDimension('B')->setWidth(20);
    $sheet->getColumnDimension('C')->setWidth(15);
    $sheet->getColumnDimension('D')->setWidth(15);
    $sheet->getColumnDimension('E')->setWidth(15);

    //�]�w��r�j�p
    $sheet->getStyle("A1")->getFont()->setSize(16); 

    //thead����
    $sheet->getStyle("A1:{$col}3")->getFont()->setBold(true); 
    
    //thead�I���C��
    $sheet->getStyle("A2:{$col}3")->getFill()
    ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
    ->getStartColor()->setRGB('cbcbcb');

    //�]�wthead���
    $sheet->getStyle("A2:{$col}3")
    ->getBorders()->getAllborders()
    ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN); 

    //��r�����m��
    $sheet->getStyle("A1:{$col}{$num}")->getAlignment()
    ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

    //�qthead�}�l�������] ��r�����m�� ,�᭱�A���O�]�w�m�k�θm����
    $sheet->getStyle("A1:{$col}{$num}")->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    //�A�]�w �Y������r�m�k
    $sheet->getStyle("B4:{$col}{$num}")->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

    // �ɦW = �{���W��+���s
    $filename = "{$_POST['year']}�~{$_POST['festival']}���ƦW��".'-'.$_SESSION['login_empno'];

    // �ǰe�U�������Y
    header('Content-Type: application/vnd.ms-excel');  
    header("Content-Disposition: attachment;filename={$filename}.xls");  
    header('Cache-Control: max-age=0');  

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
    $objWriter->save('php://output');

  }else{
    echo "<h2 style='color:red'>�d�L��ơA�нT�{�d�߱��󦳨S�����T!!</h2>";
  }

}
// **************************************************************************
//  ��ƦW��: u_excel(&$f_var)
//  ��ƥ\��: �ץXExcel
//  �ϥΤ覡: u_excel(&$f_var)
//  �{���]�p: 
//  �]�p���: 2006.09.27
// **************************************************************************
function u_excel(&$f_var){

  include '/home/sl/public_html/PHPExcelv2/PHPExcel.php';
  $objPHPExcel = new PHPExcel();

  sl_open($f_var['mdb']); // �}�Ҹ�Ʈw

  if($_POST['area_s_num'] == 'all'){
    $area = '';
  }else{
    $area = "AND h.area_s_num = {$_POST['area_s_num']}";
  }

  $area_sql = "SELECT h.*,c.config_value AS area ,e.e09_2 AS `b_name` FROM {$f_var['mtable']['head']} AS h
              LEFT JOIN {$f_var['mtable']['config']} AS c ON h.area_s_num = c.s_num
              LEFT JOIN sl.employee AS e ON c.access_empno = e.e09_1
              WHERE h.d_date = '0000-00-00 00:00:00'
              AND h.`year` = '{$_POST['year']}'
              AND h.festival = '{$_POST['festival']}'
              {$area}
              ORDER BY h.area_s_num ASC";

  $area_result = mysql_query($area_sql);
  if( mysql_num_rows($area_result) > 0 ){
    $data = array();
    $i = 0;
    while( $area_row = mysql_fetch_assoc($area_result) ){
      $data['head'] = $area_row;
      $data['body'] = array();

      $thead = array(
        "A" => array('th'=>array('����'),'rowspan'=>'2','width'=>'5'),
        "B" => array('th'=>array('�Ȥ�W��'),'rowspan'=>'2','width'=>'25'),
        "C" => array('th'=>array('�e§��H','¾��'),'colspan'=>'2','width'=>'12'),
        "D" => array('th'=>array('�e§��H','�m�W'),'width'=>'12'),
        "E" => array('th'=>array('��� : �U��','�륭���禬'),'colspan'=>'3','width'=>'12'),
        "F" => array('th'=>array('��� : �U��','�륭����Q'),'width'=>'12'),
        "G" => array('th'=>array('��� : �U��','�륭����Q�v'),'width'=>'14'),
        "H" => array('th'=>array('���',"�禬{$area_row['base_rev']}% + ��Q{$area_row['base_gp']}%"),'width'=>'20'),
        "I" => array('th'=>array("�e§�B��\n(��)"),'rowspan'=>'2','width'=>'12'),
        "J" => array('th'=>array('§�~'),'rowspan'=>'2','width'=>'25'),
        "K" => array('th'=>array("§�~���\n(��)"),'rowspan'=>'2','width'=>'12'),
        "L" => array('th'=>array("§�~�ƶq\n(��)"),'rowspan'=>'2','width'=>'12'),
        "M" => array('th'=>array("§�~�`���B\n(��)"),'rowspan'=>'2','width'=>'15')
      );


      $sql = "SELECT b.*,i.*,
                    g.name AS guest_name,g.position,
                    CASE WHEN gift_s_num IS NULL THEN '�|����ܫ~��' 
                    ELSE CONCAT(t.company,t.`name`,' ',t.price,'��') END AS gift_name
              FROM {$f_var['mtable']['body']} AS b
              LEFT JOIN {$f_var['mtable']['item']} AS i ON b.s_num = i.b_s_num
              LEFT JOIN {$f_var['mtable']['guest']} AS g ON i.guest_s_num = g.s_num
              LEFT JOIN {$f_var['mtable']['type']} AS t ON i.gift_s_num = t.s_num
              WHERE b.d_date = '0000-00-00 00:00:00'
              AND i.d_date = '0000-00-00 00:00:00'
              AND b.h_s_num = '{$area_row['s_num']}'            
              ORDER BY b.s_num ASC";
      $result = mysql_query($sql);
      if( mysql_num_rows($result) > 0 ){
        while( $row = mysql_fetch_assoc($result) ){

          if( !array_key_exists( $row['b_s_num'],$data['body'] ) ){
            $data['body'][ $row['b_s_num'] ] = $row;
          }
          $data['body'][ $row['b_s_num'] ]['item'][] = $row;

        }
      }

      u_get_excel($objPHPExcel,$thead,$i,$data);
      $i++;
      // echo '<pre>'.print_r($data,1).'</pre>';
      // break;
    }

    // �ɦW = �{���W��+���s
    $filename = "{$_POST['year']}�~{$_POST['festival']}��§��H�W��".'-'.$_SESSION['login_empno'];

    // �ǰe�U�������Y
    header('Content-Type: application/vnd.ms-excel');  
    header("Content-Disposition: attachment;filename={$filename}.xls");  
    header('Cache-Control: max-age=0');  

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
    $objWriter->save('php://output');
  }

}

// **************************************************************************
//  ��ƦW��: u_get_excel($objPHPExcel,$row,$i,$item)
//  ��ƥ\��: ���o Excel ����
//  �ϥΤ覡: u_get_excel($objPHPExcel,$row,$i,$item)
//  �{���]�p: 
//  �]�p���: 2006.09.27
// **************************************************************************
function u_get_excel($objPHPExcel,$thead,$i,$data){

  
  $i != 0 ? $objPHPExcel->createSheet() : '';
  $objPHPExcel->setActiveSheetIndex($i);
  $objPHPExcel->getSheet($i)->setTitle(mb_convert_encoding($data['head']['area'],"UTF-8","big5"));
  $sheet = $objPHPExcel->getActiveSheet();

  end($thead);//���w����̫�
  $col = key($thead); //���o�̫�@��col EX:L��


  //title �]�w�� 
  $title = "{$data['head']['year']}�~{$data['head']['festival']}�w�p��§��H�W��";
  $data['head']['all_done'] != 'Y' ? $title.='(�|���n������)' : '';
  $sheet->setCellValue('A1',mb_convert_encoding($title,"UTF-8","big5") );

  $sheet->setCellValue('A2',mb_convert_encoding("��� : {$data['head']['area']}","UTF-8","big5") );
  $sheet->setCellValue('D2',mb_convert_encoding("�p�����f : {$data['head']['b_name']}","UTF-8","big5") );
  $sheet->setCellValue('G2',mb_convert_encoding("�a�} : {$data['head']['address']}","UTF-8","big5") );

  //title�X�ֳ椸��
  $sheet->mergeCells("A1:{$col}1");
  $sheet->mergeCells("A2:C2");
  $sheet->mergeCells("D2:F2");
  $sheet->mergeCells("G2:{$col}2");


  //thead �]�w
  $num = 3; //��3�C�}�l
  foreach( $thead as $key => $val ){

    $sheet->getColumnDimension($key)->setWidth($val['width']);
   
    foreach( $val['th'] as $ind => $th){
      $sheet->setCellValue("{$key}".(int)($num+$ind),mb_convert_encoding($th,"UTF-8","big5"));
    }
    if( $val['rowspan'] ){
      $rowspan = (int)($num + $val['rowspan'] -1);
      $sheet->mergeCells("{$key}{$num}:{$key}{$rowspan}");
    }
    if( $val['colspan'] ){
      $j = (int)($val['colspan'] -1);
      $colspan = $key;
      for($k=0;$k<$j;$k++,$colspan++){
        // for�̤��������, �D�n�O�� $colspan++
        // �p�G $colspan = "A" , $colspan++ == "B" �H������
      } 

      $sheet->mergeCells("{$key}{$num}:{$colspan}{$num}");
    }

  }

  //tbody �]�w
  $num = 5; //��5�C�}�l
  $k = 0;
  foreach( $data['body'] as $key => $company ){

    // $num++;
    $k++;
    $sheet->setCellValue('A'.$num, mb_convert_encoding($k,"UTF-8","big5") );

    $company['company'] = to_utf8($company['company']); //���q�W�i�঳���r,�n���ഫ
    $sheet->setCellValue('B'.$num, $company['company']);
    

    $sheet->setCellValue('E'.$num, mb_convert_encoding($company['avg_rev'],"UTF-8","big5") );
    $sheet->setCellValue('F'.$num, mb_convert_encoding($company['avg_gp'],"UTF-8","big5") );
    $sheet->setCellValue('G'.$num, mb_convert_encoding($company['avg_gpm'].'%',"UTF-8","big5") );
    $sheet->setCellValue('H'.$num, mb_convert_encoding($company['base_num'],"UTF-8","big5") );
    $sheet->setCellValue('I'.$num, mb_convert_encoding($company['quota'],"UTF-8","big5") );

    foreach( $company['item'] as $ind => $guest ){
      $num_2 = (int)$num+$ind;
      $sheet->setCellValue('C'.$num_2, mb_convert_encoding($guest['position'],"UTF-8","big5") );

      $guest['guest_name'] = to_utf8($guest['guest_name']);//�m�W�i�঳���r,�n���ഫ
      $sheet->setCellValue('D'.$num_2,$guest['guest_name']);

      $sheet->setCellValue('J'.$num_2, mb_convert_encoding($guest['gift_name'],"UTF-8","big5") );
      $sheet->setCellValue('K'.$num_2, mb_convert_encoding($guest['gift_price'],"UTF-8","big5") );
      $sheet->setCellValue('L'.$num_2, mb_convert_encoding($guest['gift_cnt'],"UTF-8","big5") );
      $sheet->setCellValue('M'.$num_2, mb_convert_encoding($guest['gift_price_total'],"UTF-8","big5") );
    }

    if( count( $company['item'] ) > 1 ){
      $total = (int)($num + count( $company['item'] ) - 1);
      $sheet->mergeCells("A{$num}:A{$total}");
      $sheet->mergeCells("B{$num}:B{$total}");
      $sheet->mergeCells("E{$num}:E{$total}");
      $sheet->mergeCells("F{$num}:F{$total}");
      $sheet->mergeCells("G{$num}:G{$total}");
      $sheet->mergeCells("H{$num}:H{$total}");
      $sheet->mergeCells("I{$num}:I{$total}");
      $num = $total;
    }

    $num++;
  }


  //tfoot �]�w
  $sheet->setCellValue('H'.$num, mb_convert_encoding('�X�p:',"UTF-8","big5") );
  $sheet->setCellValue('I'.$num, mb_convert_encoding("{$data['head']['quota_total']}","UTF-8","big5") );

  $sheet->setCellValue('L'.$num, mb_convert_encoding('�X�p:',"UTF-8","big5") );
  $sheet->setCellValue('M'.$num, mb_convert_encoding("{$data['head']['gift_total']}","UTF-8","big5") );

  $num++; //���U�@��
  $sheet->setCellValue('H'.$num, mb_convert_encoding('�|�p�f���`�w��:',"UTF-8","big5") );
  $sheet->setCellValue('I'.$num, mb_convert_encoding("{$data['head']['fina_quota_total']}","UTF-8","big5") );




  //�˦��]�w
  //�]�w�������
  $sheet->getStyle("A3:{$col}{$num}")
        ->getBorders()->getAllborders()
        ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN); 

  //�]�w�ʽu�~��
  $style['borders']['outline']['style'] = PHPExcel_Style_Border::BORDER_THICK;
  $sheet->getStyle("I3:I{$num}")
        ->applyFromArray($style); 
  $sheet->getStyle("M3:M{$num}")
        ->applyFromArray($style); 

  //title ��r�j�p
  $sheet->getStyle("A1")->getFont()->setSize(16); 
  $sheet->getStyle("A2:{$col}2")->getFont()->setSize(14); 

  //thead����
  $sheet->getStyle("A3:{$col}4")->getFont()->setBold(true); 
  //thead�]�w����
  $sheet->getStyle("A3:{$col}4")->getAlignment()->setWrapText(true);



  //thead�I���C��
  $sheet->getStyle("A3:{$col}4")->getFill()
        ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
        ->getStartColor()->setRGB('cddded');


  //tfoot����
  $sheet->getStyle("A".(int)($num-1).":{$col}{$num}")->getFont()->setBold(true); 

  //tfoot�I���C��
  $sheet->getStyle("A".(int)($num-1).":{$col}{$num}")->getFill()
  ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
  ->getStartColor()->setRGB('fde9d9');


  //��r�����m��
  $sheet->getStyle("A1:{$col}{$num}")->getAlignment()
  ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

  //�qthead�}�l�������] ��r�����m�� ,�᭱�A���O�]�w�m�k�θm����
  $sheet->getStyle("A3:{$col}{$num}")->getAlignment()
        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

  //�A�]�w �ƭȪ���r�m�k
  $sheet->getStyle("E5:I{$num}")->getAlignment()
        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

  $sheet->getStyle("K5:M{$num}")->getAlignment()
        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

  //§�~���@��n�m��
  $sheet->getStyle("J5:J{$num}")->getAlignment()
        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

  //�x�s��榡-�ƭ�(��p���I�ĤG��)
  $sheet->getStyle("E5:H{$num}".($rows_count)."")->getNumberFormat()->setFormatCode('0.00');

  //�x�s��榡-�ƭ�(���,���d���쪺�r��)(���B��)
  $sheet->getStyle("I5:M{$num}".($rows_count)."")->getNumberFormat()->setFormatCode('#,##0');
 

}


// **************************************************************************
//  ��ƦW��: u_input()
//  ��ƥ\��: �d�߱���
//  �ϥΤ覡: u_input(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_input(&$f_var) {

  $f_var["tp"]-> newBlock('tb_list');
  $f_var["tp"]-> assign("tv_action",$f_var['mphp_name'].'.php?msel=41');

  //���ﶵ
  $f_var["tp"]-> newBlock('tb_label');
  $f_var["tp"]-> assign("tv_cname",'���');
  $f_var["tp"]-> assign("tv_name",'area_s_num');

  $f_var["tp"]-> newBlock('tb_option');
  $f_var["tp"]-> assign("tv_value",'all');
  $f_var["tp"]-> assign("tv_show",'����');
  $f_var["tp"]-> assign("tv_selected",'selected');

  if( $f_var["normal"] == 'Y' ){ //���f�H���u��d�ݦۤv�����
    $where = "AND `access_empno` = {$_SESSION['login_empno']}";
  }else{
    $where = '';
  }
  $result = mysql_query("SELECT * FROM {$f_var['mtable']['config']} 
                        WHERE config_key = 'gift_head_area' {$where}");
  if( mysql_num_rows($result) > 0 ){
    while( $row = mysql_fetch_assoc($result) ){
      $f_var["tp"]-> newBlock('tb_option');
      $f_var["tp"]-> assign("tv_value",$row['s_num']);
      $f_var["tp"]-> assign("tv_show",$row['config_value']);

      if( $_POST['area_s_num'] == $row['s_num'] ){
        $f_var["tp"]-> assign("tv_selected",'selected');
      }

    }
  }

  //�~���ﶵ
  $f_var["tp"]-> newBlock('tb_label');
  $f_var["tp"]-> assign("tv_cname",'�~��');
  $f_var["tp"]-> assign("tv_name",'year');

  //�~���ﶵ,�q2021�}�l �� +1�~(���~)
  for($i = 2021; $i<=(date('Y')+1); $i++){
    $f_var["tp"]-> newBlock('tb_option');
    $f_var["tp"]-> assign("tv_value",$i);
    $f_var["tp"]-> assign("tv_show",$i);

    if( $_POST['year'] == $i ){
      $f_var["tp"]-> assign("tv_selected",'selected');
    }
  }

  //�`��ﶵ
  $f_var["tp"]-> newBlock('tb_label');
  $f_var["tp"]-> assign("tv_cname",'�`��');
  $f_var["tp"]-> assign("tv_name",'festival');

  $festival = array('����`','�K�`');
  foreach( $festival as $val ){
    $f_var["tp"]-> newBlock('tb_option');
    $f_var["tp"]-> assign("tv_value",$val);
    $f_var["tp"]-> assign("tv_show",$val);

    if( $_POST['festival'] == $val ){
      $f_var["tp"]-> assign("tv_selected",'selected');
    }
  }

  //��������ﶵ
  $f_var["tp"]-> newBlock('tb_label');
  $f_var["tp"]-> assign("tv_cname",'�������');
  $f_var["tp"]-> assign("tv_name",'report');

  $report = array('A'=>'§�~�~���έp��','B'=>'��§��H�W����');

  if( $f_var["admin"] == 'Y' || $f_var["job_5019"] == 'Y' ){
    $report['C'] = '���ƦW��';
  }

  foreach( $report as $key => $val){
    $f_var["tp"]-> newBlock('tb_option');
    $f_var["tp"]-> assign("tv_value",$key);
    $f_var["tp"]-> assign("tv_show",$val);

    if( $_POST['report'] == $key ){
      $f_var["tp"]-> assign("tv_selected",'selected');
    }
  }


  if( $f_var['msel'] == 41 ){
    switch( $_POST['report'] ){
      case 'A':
        u_list_gift($f_var);
      break;
      case 'B':
        u_list_guest($f_var);
      break;
      case 'C':
        u_list_repeat($f_var);
      break;
    }
  }else{
    $f_var["tp"]-> newBlock('tb_default');
  }

}


// **************************************************************************
//  ��ƦW��: u_list_repeat()
//  ��ƥ\��: ���ƦW��
//  �ϥΤ覡: u_list_repeat(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_list_repeat(&$f_var){

  //��X���ƪ��νs����
  $sql = "SELECT tax_no,GROUP_CONCAT(h.s_num) AS h_s_num
          FROM {$f_var['mtable']['head']} AS h 
          LEFT JOIN ( SELECT * FROM {$f_var['mtable']['body']} 
                      WHERE d_date = '0000-00-00 00:00:00'
                      AND tax_no != 'N' GROUP BY tax_no,h_s_num
                      ) AS b ON h.s_num = b.h_s_num 
          LEFT JOIN {$f_var['mtable']['config']} AS c ON c.s_num = h.area_s_num
          WHERE h.year = '{$_POST['year']}'
          AND h.festival = '{$_POST['festival']}'
          AND h.d_date = '0000-00-00 00:00:00'
          GROUP BY b.tax_no
          HAVING COUNT(b.tax_no) > 1";

  // echo '<pre>'.print_r($sql,1).'</pre>';
  // exit;
  $count_tax = 0;
  $result = mysql_query($sql);
  if( mysql_num_rows($result) > 0 ){
    $f_var['tp']-> newBlock('tb_table_repeat');
    $f_var['tp']-> assign('tv_year',$_POST['year']);
    $f_var['tp']-> assign('tv_festival',$_POST['festival']);

    while( $row = mysql_fetch_assoc($result) ){
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

      $result_item = mysql_query($sql_item);
      $list = array(); //���ƥ�
      $count = array(); //�p��X�{���� rowspan��
      while( $row_item = mysql_fetch_assoc($result_item) ){
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
              $td .= "<td name='tax_no' rowspan=".mysql_num_rows($result_item).">{$row['tax_no']}</td>";
            }
            if( $ind == 0 ){  //���q����§��H���Ĥ@�� �|�����q�W��
              $td .= "<td rowspan=".$count[$area][$company].">{$company}</td>";
            }
            $td .= "<td>{$val['position']}</td>";
            $td .= "<td>{$val['name']}</td>";

            if( $k == 0 && $ind == 0 ){ //���̪��Ĥ@�� �|�����W��
              $a = "<a href='{$f_var['server_name']}/~docs/gift/gift_list.php?msel=2&f_s_num={$val['h_s_num']}' target='_blank'>
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
    $f_var['tp']-> newBlock('tb_no_table');
  }
  


}

// **************************************************************************
//  ��ƦW��: u_list_guest()
//  ��ƥ\��: ��§��H�W����
//  �ϥΤ覡: u_list_guest(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_list_guest(&$f_var){

  if($_POST['area_s_num'] == 'all'){

    if($f_var["normal"] == 'Y'){ //���f�H���u��d�ݦۤv�����
      $area = "AND c.`access_empno` = {$_SESSION['login_empno']}";
    }else{
      $area = '';
    }
    
  }else{
    $area = "AND h.area_s_num = {$_POST['area_s_num']}";
  }

  $area_sql = "SELECT h.*,c.config_value AS area ,e.e09_2 AS `b_name` FROM {$f_var['mtable']['head']} AS h
              LEFT JOIN {$f_var['mtable']['config']} AS c ON h.area_s_num = c.s_num
              LEFT JOIN sl.employee AS e ON h.b_empno = e.e09_1
              WHERE h.d_date = '0000-00-00 00:00:00'
              AND h.`year` = '{$_POST['year']}'
              AND h.festival = '{$_POST['festival']}'
              {$area}
              ORDER BY h.area_s_num ASC";

  sl_showsql($area_sql);

  $area_result = mysql_query($area_sql);
  if( mysql_num_rows($area_result) > 0 ){
    $f_var['tp']-> newBlock('tb_table_guest');
    while( $area_row = mysql_fetch_assoc($area_result) ){

      $f_var['tp']-> newBlock('tb_guest_li');
      $f_var['tp']-> assign('tv_area_name',$area_row['area']);
      $f_var['tp']-> assign('tv_s_num',$area_row['s_num']);
      $f_var['tp']-> newBlock('tb_table');
      $f_var['tp']-> assign('tv_year',$area_row['year']);
      $f_var['tp']-> assign('tv_festival',$area_row['festival']);
      $f_var['tp']-> assign('tv_s_num',$area_row['s_num']);
      $f_var['tp']-> assign('tv_area',$area_row['area']);
      $f_var['tp']-> assign('tv_b_name',$area_row['b_name']);
      $f_var['tp']-> assign('tv_address',$area_row['address']);
      $f_var['tp']-> assign('tv_base_rev',$area_row['base_rev']);
      $f_var['tp']-> assign('tv_base_gp',$area_row['base_gp']);
      $f_var['tp']-> assign('tv_quota_total',$area_row['quota_total']);
      $f_var['tp']-> assign('tv_gift_total',$area_row['gift_total']);
      $f_var['tp']-> assign('tv_fina_quota_total',$area_row['fina_quota_total']);

      if($area_row['all_done']  != 'Y'){
        $f_var['tp']-> assign('tv_all_done','(�|���n������)');
      }

      $b_sql = "SELECT * FROM {$f_var['mtable']['body']}
                WHERE h_s_num = {$area_row['s_num']}
                AND d_date = '0000-00-00 00:00:00'
                ORDER BY s_num ASC";

      $b_result = mysql_query($b_sql);
      if( mysql_num_rows($b_result) > 0 ){
        $i = 0;
        while( $b_row = mysql_fetch_assoc($b_result) ){
          $i++;
          $f_var['tp']-> newBlock('tb_guest_tr'); 
          $f_var['tp']-> assign('tv_i',$i);
          $f_var['tp']-> assign('tv_company',$b_row['company']);
          $f_var['tp']-> assign('tv_avg_rev',$b_row['avg_rev']);
          $f_var['tp']-> assign('tv_avg_gp',$b_row['avg_gp']);
          $f_var['tp']-> assign('tv_avg_gpm',$b_row['avg_gpm']);
          $f_var['tp']-> assign('tv_base_num',$b_row['base_num']);
          $f_var['tp']-> assign('tv_quota',$b_row['quota']);

          $i_sql = "SELECT i.*,g.position,g.name, 
                    CASE WHEN gift_s_num IS NULL THEN '�|����ܫ~��' 
                    ELSE CONCAT(t.company,t.`name`,' ',t.price,'��') END AS gift_name
                  FROM {$f_var['mtable']['item']} AS i
                  LEFT JOIN {$f_var['mtable']['guest']} AS g ON i.guest_s_num = g.s_num
                  LEFT JOIN {$f_var['mtable']['type']} AS t ON i.gift_s_num = t.s_num
                  WHERE i.b_s_num = {$b_row['s_num']} AND i.d_date = '0000-00-00 00:00:00'";

          $i_result = mysql_query($i_sql);
          if( mysql_num_rows($i_result) > 0 ){
            while( $i_row = mysql_fetch_assoc($i_result) ){

              $f_var['tp']-> newBlock('tb_guest_div'); 
              $f_var['tp']-> assign('tv_position',$i_row['position']);
              $f_var['tp']-> assign('tv_name',$i_row['name']);

              $f_var['tp']-> newBlock('tb_gift_div'); 
              $f_var['tp']-> assign('tv_gift',$i_row['gift_name']);

              $f_var['tp']-> newBlock('tb_price_div'); 
              $f_var['tp']-> assign('tv_gift_price',$i_row['gift_price']);

              $f_var['tp']-> newBlock('tb_cnt_div'); 
              $f_var['tp']-> assign('tv_gift_cnt',$i_row['gift_cnt']);

              $f_var['tp']-> newBlock('tb_total_div'); 
              $f_var['tp']-> assign('tv_gift_price_total',$i_row['gift_price_total']);
            }
          }


        }
      }

    }
  }else{
    $f_var['tp']-> newBlock('tb_no_table');
  }

  
} 

// **************************************************************************
//  ��ƦW��: u_list_gift()
//  ��ƥ\��: §�~�~���έp��
//  �ϥΤ覡: u_list_gift(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_list_gift(&$f_var){

  //�C�X§�~����
  $sql = "SELECT * FROM {$f_var['mtable']['type']} AS t 
          WHERE t.d_date = '0000-00-00 00:00:00'
            AND t.`year` = '{$_POST['year']}'
            AND t.festival = '{$_POST['festival']}'
          ORDER BY t.price,t.s_num ASC";

  $result = mysql_query($sql);
  if( mysql_num_rows($result) > 0 ){
    $f_var['tp']-> newBlock('tb_table_gift');
    $f_var['tp']-> assign('tv_year',$_POST['year']);
    $f_var['tp']-> assign('tv_festival',$_POST['festival']);
    $arr_gift_id = array();
    while( $row = mysql_fetch_assoc($result) ){
      $arr_gift_id[] = $row['s_num'];
      $f_var['tp']-> newBlock('tb_gift_name');
      $f_var['tp']-> assign('tv_gift_name',$row['company'].'<br>'.$row['name']."<br>{$row['price']}��");
      $f_var['tp']-> newBlock('tb_gift_info');
    }
  }else{
    $f_var['tp']-> newBlock('tb_no_table');
    return;
  }

  
  if($_POST['area_s_num'] == 'all'){
    $area = '';
  }else{
    $area = "AND s_num = {$_POST['area_s_num']}";
  }

  $area_result = mysql_query("SELECT * FROM {$f_var['mtable']['config']}
                        WHERE config_key = 'gift_head_area' {$area}");
  if( mysql_num_rows($area_result) > 0 ){
    $data = array();
    while( $area_row = mysql_fetch_assoc($area_result) ){
      $f_var['tp']-> newBlock('tb_gift_tr');
      $f_var['tp']-> assign('tv_area',$area_row['config_value']);

      $sql = "SELECT i.gift_s_num,i.gift_price,sum(i.gift_cnt) AS gift_cnt 
              FROM {$f_var['mtable']['head']} AS h 
              LEFT JOIN {$f_var['mtable']['body']} AS b 
                ON h.s_num = b.h_s_num AND b.d_date = '0000-00-00 00:00:00'
              LEFT JOIN {$f_var['mtable']['item']} AS i 
                ON b.s_num = i.b_s_num AND i.d_date = '0000-00-00 00:00:00'
              WHERE h.d_date = '0000-00-00 00:00:00'
                AND h.area_s_num = '{$area_row['s_num']}'
                AND h.`year` = '{$_POST['year']}'
                AND h.festival = '{$_POST['festival']}'
              GROUP BY i.gift_s_num
              ORDER BY i.gift_price,i.gift_s_num ASC";
      $result = mysql_query($sql);
      $gift = array();
      $total = 0;
      if( mysql_num_rows($result) > 0 ){
        while( $row = mysql_fetch_assoc($result) ){
          $total += $row['gift_price']*$row['gift_cnt'];
          $gift[ $row['gift_s_num'] ] = $row;
        }
      }

      $data['tfoot_total'] += $total;
      $f_var['tp']-> assign('tv_total',$total);

      foreach( $arr_gift_id as $id ){
        $f_var['tp']-> newBlock('tb_gift_td');

        $cnt = $gift[ $id ]['gift_cnt'];
        $total = $gift[ $id ]['gift_price']*$gift[ $id ]['gift_cnt'];
        if( !$cnt ) $cnt = 0;
        if( !$total ) $total = 0;

        $f_var['tp']-> assign('tv_gift_cnt',$cnt);
        $f_var['tp']-> assign('tv_gift_total',$total);

        $data[ $id ]['gift_cnt'] += $cnt;
        $data[ $id ]['gift_total'] += $total;
      }
    }
    
    foreach( $arr_gift_id as $id ){
      $f_var['tp']-> newBlock('tb_gift_tfoot');
      $f_var['tp']-> assign('tv_gift_cnt',$data[ $id ]['gift_cnt']);
      $f_var['tp']-> assign('tv_gift_total',$data[ $id ]['gift_total']);
    }

    $f_var['tp']-> assign('tb_table_gift.tv_tfoot_total',$data['tfoot_total']);
        
  }

  
  
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
  $f_var['ie_h_title'] = '§�~�޲z�t��-����'; // �������D
  $f_var['msub_title'] = '§�~�޲z�t��-����'; // �{���Ƽ��D
  $f_var['mmaxline'] = 10; // �C���̤j����
  $f_var['mdb'] = 'docs'; // db name
  $f_var['mupload_dir']  = "/home/docs/public_html/gift/gift_upfile/" ; //�W���ɮר즹��Ƨ�
  $f_var['mtable'] = array('head'=>'gift_head','body'=>'gift_body','type'=>'gift_type','quota'=>'gift_quota',
                          'config'=>'gift_config','guest'=>'gift_guest','item'=>'gift_item'); // �ϥ� table �W�� 
  $f_var['tpl'] = 'gift_rpt.tpl'; // �˪��e����

  $f_var['upd_img'] = '<img src="/~sl/img/upd.png" border="0" alt="�ק惡��" title="�ק惡��">';
  $f_var['del_img'] = '<img src="/~sl/img/del.png" border="0" alt="�@�o����" title="�@�o����">';


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
//  ��ƦW��: to_utf8($str)
//           replace($matches)
//  ��ƥ\��: DB�̪����r,�ݭn�t�~�ഫ
//  �ϥΤ覡: to_utf8($str)
//  �{���]�p: 
//  �]�p���: 2021.04.27
// **************************************************************************
function to_utf8($str){
  if( strpos($str,'&') > -1  ){
    $str = mb_convert_encoding($str,'UTF-8','big5');
    $pattern ='/&#\d+;/'; //���W��F�� 
    $str = preg_replace_callback($pattern,"replace",$str);
    return $str;
  }else{
    return mb_convert_encoding($str,'UTF-8','big5');
  }
}
function replace($matches){
  return mb_convert_encoding($matches[0], 'UTF-8', 'HTML-ENTITIES');
}


?>