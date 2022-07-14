<?php 
//┌─────┬───────────────────────────────┐
//│系統名稱: │gift_rpt　  　                                              │
//│         │                                                              │
//│程式名稱: │gift_rpt.php                                                │
//│程式說明: │禮品管理系統-報表                                      │
//│樣板名稱: │gift_rpt.tpl                                                 │
//│          │                                                              │
//│資料庫  : │docs                                                          │
//│資料表  : |                                 
//|         |gift_guest  → 送禮客戶資料主檔
//|         |gift_head   → 每年各節的送禮主檔
//|         |gift_body   → 每年各節的送禮客戶明細(必須與gift_head做關聯)
//|         |gift_quota  → 送禮額度明細
//|         |gift_config → 年節送禮系統相關設定檔(輸入各區權限、會計權限、營收及毛利%數)
//|         |
//│相關程式: │/home/sl/public_html/sl_init.php 共用函數                     │
//│          │/home/sl/public_html/tp/*.*      樣板套件                     │
//│          │                                                              │
//│          │/home/sl/public_html/sl.css      css 檔                       │
//│          │/home/sl/public_html/sl.js        javascript 自訂函數         │
//│          │/home/sl/public_html/sl_header.inc.php  頁首                  │
//│          │/home/sl/public_html/sl_footer.inc.php  頁尾                  │
//│          │                                                              │
//│程式設計: │翊靖                                                          │
//│設計日期: │2021.04.01                                                   │
//└─────┴───────────────────────────────┘

include_once('/home/sl/public_html/sl_init.php'); 
u_setvar($f_var);

// ------- for excel -------
if($f_var['excel'] == 'Y' ){ //必須在tpl前面,因為tpl會傳送header

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

if( u_chk_access($f_var) ){ //權限設定

  sl_open($f_var['mdb']); // 開啟資料庫
  switch ($f_var['msel']) {
    default:
      u_input($f_var);
    break;
  }

}else{
  $f_var["tp"]-> assign("_ROOT.tv_alert",'您無權限觀看!!');
}

u_link($f_var); //連結設定

$f_var["tp"]-> printToScreen ();
mysql_close(); // 關閉資料庫

include_once($sl_footer_php); // footer


// **************************************************************************
//  函數名稱: u_link()
//  函數功能: 連結設定
//  使用方式: u_link(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_link(&$f_var){

  $f_var["tp"]-> newBlock('tb_link');
  $f_var["tp"]-> assign("tv_home","./"); //首頁

}

// **************************************************************************
//  函數名稱: repeat_excel(&$f_var)
//  函數功能: 匯出Excel
//  使用方式: repeat_excel(&$f_var)
//  程式設計: 
//  設計日期: 2006.09.27
// **************************************************************************
function repeat_excel(&$f_var){

  include '/home/sl/public_html/PHPExcelv2/PHPExcel.php';

  sl_open($f_var['mdb']); // 開啟資料庫

  //找出重複的統編跟單位
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
    //建立excel
    $objPHPExcel = new PHPExcel();
    $sheet = $objPHPExcel->getActiveSheet();
    //設定thead
    $title = "{$_POST['year']}年{$_POST['festival']}預計贈禮對象-重複名單";
    $sheet->setCellValue('A1',mb_convert_encoding($title,"UTF-8","big5") );
    $sheet->setCellValue('A2',mb_convert_encoding("統編","UTF-8","big5") );
    $sheet->setCellValue('B2',mb_convert_encoding("公司名稱","UTF-8","big5") );
    $sheet->setCellValue('C2',mb_convert_encoding("贈禮對象","UTF-8","big5") );
    $sheet->setCellValue('E2',mb_convert_encoding("重複名單","UTF-8","big5") );
    $sheet->setCellValue('C3',mb_convert_encoding("職稱","UTF-8","big5") );
    $sheet->setCellValue('D3',mb_convert_encoding("姓名","UTF-8","big5") );

    //thead合併單元格
    $sheet->mergeCells("A1:E1");
    $sheet->mergeCells("A2:A3");
    $sheet->mergeCells("B2:B3");
    $sheet->mergeCells("C2:D2");
    $sheet->mergeCells("E2:E3");

    //設定粗線外框-設定值
    $style['borders']['outline']['style'] = PHPExcel_Style_Border::BORDER_THICK;
    

    $col = 'E'; //最長第E行
    $num = 4; //第4列開始

    while( $row = mysql_fetch_assoc($result) ){
      
      //依統編跟單位 找出贈禮對象
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

        //合併單元格用-- 把相同單位 以及 相同單位又相同公司名 的列的數字儲存起來
        $list_area[ $row_item['area'] ][] = $i+$num;
        $list_com[ $row_item['area'] ][ $row_item['company'] ][] = $i+$num;


        $sheet->setCellValue('A'.(int)($i+$num), mb_convert_encoding($row['tax_no'],"UTF-8","big5") );

        $company = to_utf8($row_item['company']); //公司名可能有難字,要做轉換
        $sheet->setCellValue('B'.(int)($i+$num), $company);

        $sheet->setCellValue('C'.(int)($i+$num), mb_convert_encoding($row_item['position'],"UTF-8","big5") );

        $name = to_utf8($row_item['name']); //姓名可能有難字,要做轉換
        $sheet->setCellValue('D'.(int)($i+$num), $name);

        $sheet->setCellValue('E'.(int)($i+$num), mb_convert_encoding($row_item['area'],"UTF-8","big5") );
        $i++;

      }

      //設定全部邊框
      $sheet->getStyle("A{$num}:E".(int)($num+$i-1))
      ->getBorders()->getAllborders()
      ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN); 

      //設定同一個統編 同一背景顏色
      $bg_color = $row_num % 2 == 0 ? 'fef3eb' : 'eaf6f9' ; 
      $sheet->getStyle("A{$num}:E".(int)($num+$i-1))->getFill()
      ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
      ->getStartColor()->setRGB($bg_color);

      //合併單元格
      foreach( $list_area as $area => $val ){
        if( count($val) > 1 ){ //大於1代表是相同的資料可以合併
          $sheet->mergeCells("E".(int)min($val).":E".(int)max($val)); //E行->重複單位
        }
        //同單位-設定粗線外框
        $sheet->getStyle("B".(int)min($val).":E".(int)max($val))->applyFromArray($style); 

        foreach( $list_com[ $area ] as $com => $v ){
          if( count($v) > 1 ){
            $sheet->mergeCells("B".(int)min($v).":B".(int)max($v)); //B行->公司名
          }
        }

      }

      $sheet->mergeCells("A{$num}:A".(int)($num+$i-1)); //A行->統編
      $num += $i; 
      $row_num++;
    }

    $num--; //$num 是下一個列數,所以到最後會多一列,這邊要減1

    //設定excel的style
    //設定欄位寬定
    $sheet->getColumnDimension('A')->setWidth(15);
    $sheet->getColumnDimension('B')->setWidth(20);
    $sheet->getColumnDimension('C')->setWidth(15);
    $sheet->getColumnDimension('D')->setWidth(15);
    $sheet->getColumnDimension('E')->setWidth(15);

    //設定文字大小
    $sheet->getStyle("A1")->getFont()->setSize(16); 

    //thead粗體
    $sheet->getStyle("A1:{$col}3")->getFont()->setBold(true); 
    
    //thead背景顏色
    $sheet->getStyle("A2:{$col}3")->getFill()
    ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
    ->getStartColor()->setRGB('cbcbcb');

    //設定thead邊框
    $sheet->getStyle("A2:{$col}3")
    ->getBorders()->getAllborders()
    ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN); 

    //文字垂直置中
    $sheet->getStyle("A1:{$col}{$num}")->getAlignment()
    ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

    //從thead開始先全部設 文字水平置中 ,後面再分別設定置右或置左的
    $sheet->getStyle("A1:{$col}{$num}")->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    //再設定 某些欄位文字置右
    $sheet->getStyle("B4:{$col}{$num}")->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

    // 檔名 = 程式名稱+員編
    $filename = "{$_POST['year']}年{$_POST['festival']}重複名單".'-'.$_SESSION['login_empno'];

    // 傳送下載的檔頭
    header('Content-Type: application/vnd.ms-excel');  
    header("Content-Disposition: attachment;filename={$filename}.xls");  
    header('Cache-Control: max-age=0');  

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
    $objWriter->save('php://output');

  }else{
    echo "<h2 style='color:red'>查無資料，請確認查詢條件有沒有正確!!</h2>";
  }

}
// **************************************************************************
//  函數名稱: u_excel(&$f_var)
//  函數功能: 匯出Excel
//  使用方式: u_excel(&$f_var)
//  程式設計: 
//  設計日期: 2006.09.27
// **************************************************************************
function u_excel(&$f_var){

  include '/home/sl/public_html/PHPExcelv2/PHPExcel.php';
  $objPHPExcel = new PHPExcel();

  sl_open($f_var['mdb']); // 開啟資料庫

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
        "A" => array('th'=>array('項次'),'rowspan'=>'2','width'=>'5'),
        "B" => array('th'=>array('客戶名稱'),'rowspan'=>'2','width'=>'25'),
        "C" => array('th'=>array('送禮對象','職稱'),'colspan'=>'2','width'=>'12'),
        "D" => array('th'=>array('送禮對象','姓名'),'width'=>'12'),
        "E" => array('th'=>array('單位 : 萬元','月平均營收'),'colspan'=>'3','width'=>'12'),
        "F" => array('th'=>array('單位 : 萬元','月平均毛利'),'width'=>'12'),
        "G" => array('th'=>array('單位 : 萬元','月平均毛利率'),'width'=>'14'),
        "H" => array('th'=>array('基數',"營收{$area_row['base_rev']}% + 毛利{$area_row['base_gp']}%"),'width'=>'20'),
        "I" => array('th'=>array("送禮額度\n(元)"),'rowspan'=>'2','width'=>'12'),
        "J" => array('th'=>array('禮品'),'rowspan'=>'2','width'=>'25'),
        "K" => array('th'=>array("禮品單價\n(元)"),'rowspan'=>'2','width'=>'12'),
        "L" => array('th'=>array("禮品數量\n(個)"),'rowspan'=>'2','width'=>'12'),
        "M" => array('th'=>array("禮品總金額\n(元)"),'rowspan'=>'2','width'=>'15')
      );


      $sql = "SELECT b.*,i.*,
                    g.name AS guest_name,g.position,
                    CASE WHEN gift_s_num IS NULL THEN '尚未選擇品項' 
                    ELSE CONCAT(t.company,t.`name`,' ',t.price,'元') END AS gift_name
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

    // 檔名 = 程式名稱+員編
    $filename = "{$_POST['year']}年{$_POST['festival']}贈禮對象規劃".'-'.$_SESSION['login_empno'];

    // 傳送下載的檔頭
    header('Content-Type: application/vnd.ms-excel');  
    header("Content-Disposition: attachment;filename={$filename}.xls");  
    header('Cache-Control: max-age=0');  

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
    $objWriter->save('php://output');
  }

}

// **************************************************************************
//  函數名稱: u_get_excel($objPHPExcel,$row,$i,$item)
//  函數功能: 取得 Excel 物件
//  使用方式: u_get_excel($objPHPExcel,$row,$i,$item)
//  程式設計: 
//  設計日期: 2006.09.27
// **************************************************************************
function u_get_excel($objPHPExcel,$thead,$i,$data){

  
  $i != 0 ? $objPHPExcel->createSheet() : '';
  $objPHPExcel->setActiveSheetIndex($i);
  $objPHPExcel->getSheet($i)->setTitle(mb_convert_encoding($data['head']['area'],"UTF-8","big5"));
  $sheet = $objPHPExcel->getActiveSheet();

  end($thead);//指針指到最後
  $col = key($thead); //取得最後一個col EX:L行


  //title 設定值 
  $title = "{$data['head']['year']}年{$data['head']['festival']}預計贈禮對象規劃";
  $data['head']['all_done'] != 'Y' ? $title.='(尚未登打完畢)' : '';
  $sheet->setCellValue('A1',mb_convert_encoding($title,"UTF-8","big5") );

  $sheet->setCellValue('A2',mb_convert_encoding("單位 : {$data['head']['area']}","UTF-8","big5") );
  $sheet->setCellValue('D2',mb_convert_encoding("聯絡窗口 : {$data['head']['b_name']}","UTF-8","big5") );
  $sheet->setCellValue('G2',mb_convert_encoding("地址 : {$data['head']['address']}","UTF-8","big5") );

  //title合併單元格
  $sheet->mergeCells("A1:{$col}1");
  $sheet->mergeCells("A2:C2");
  $sheet->mergeCells("D2:F2");
  $sheet->mergeCells("G2:{$col}2");


  //thead 設定
  $num = 3; //第3列開始
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
        // for裡不做什麼事, 主要是讓 $colspan++
        // 如果 $colspan = "A" , $colspan++ == "B" 以此類推
      } 

      $sheet->mergeCells("{$key}{$num}:{$colspan}{$num}");
    }

  }

  //tbody 設定
  $num = 5; //第5列開始
  $k = 0;
  foreach( $data['body'] as $key => $company ){

    // $num++;
    $k++;
    $sheet->setCellValue('A'.$num, mb_convert_encoding($k,"UTF-8","big5") );

    $company['company'] = to_utf8($company['company']); //公司名可能有難字,要做轉換
    $sheet->setCellValue('B'.$num, $company['company']);
    

    $sheet->setCellValue('E'.$num, mb_convert_encoding($company['avg_rev'],"UTF-8","big5") );
    $sheet->setCellValue('F'.$num, mb_convert_encoding($company['avg_gp'],"UTF-8","big5") );
    $sheet->setCellValue('G'.$num, mb_convert_encoding($company['avg_gpm'].'%',"UTF-8","big5") );
    $sheet->setCellValue('H'.$num, mb_convert_encoding($company['base_num'],"UTF-8","big5") );
    $sheet->setCellValue('I'.$num, mb_convert_encoding($company['quota'],"UTF-8","big5") );

    foreach( $company['item'] as $ind => $guest ){
      $num_2 = (int)$num+$ind;
      $sheet->setCellValue('C'.$num_2, mb_convert_encoding($guest['position'],"UTF-8","big5") );

      $guest['guest_name'] = to_utf8($guest['guest_name']);//姓名可能有難字,要做轉換
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


  //tfoot 設定
  $sheet->setCellValue('H'.$num, mb_convert_encoding('合計:',"UTF-8","big5") );
  $sheet->setCellValue('I'.$num, mb_convert_encoding("{$data['head']['quota_total']}","UTF-8","big5") );

  $sheet->setCellValue('L'.$num, mb_convert_encoding('合計:',"UTF-8","big5") );
  $sheet->setCellValue('M'.$num, mb_convert_encoding("{$data['head']['gift_total']}","UTF-8","big5") );

  $num++; //跳下一行
  $sheet->setCellValue('H'.$num, mb_convert_encoding('會計審核總預算:',"UTF-8","big5") );
  $sheet->setCellValue('I'.$num, mb_convert_encoding("{$data['head']['fina_quota_total']}","UTF-8","big5") );




  //樣式設定
  //設定全部邊框
  $sheet->getStyle("A3:{$col}{$num}")
        ->getBorders()->getAllborders()
        ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN); 

  //設定粗線外框
  $style['borders']['outline']['style'] = PHPExcel_Style_Border::BORDER_THICK;
  $sheet->getStyle("I3:I{$num}")
        ->applyFromArray($style); 
  $sheet->getStyle("M3:M{$num}")
        ->applyFromArray($style); 

  //title 文字大小
  $sheet->getStyle("A1")->getFont()->setSize(16); 
  $sheet->getStyle("A2:{$col}2")->getFont()->setSize(14); 

  //thead粗體
  $sheet->getStyle("A3:{$col}4")->getFont()->setBold(true); 
  //thead設定換行
  $sheet->getStyle("A3:{$col}4")->getAlignment()->setWrapText(true);



  //thead背景顏色
  $sheet->getStyle("A3:{$col}4")->getFill()
        ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
        ->getStartColor()->setRGB('cddded');


  //tfoot粗體
  $sheet->getStyle("A".(int)($num-1).":{$col}{$num}")->getFont()->setBold(true); 

  //tfoot背景顏色
  $sheet->getStyle("A".(int)($num-1).":{$col}{$num}")->getFill()
  ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
  ->getStartColor()->setRGB('fde9d9');


  //文字垂直置中
  $sheet->getStyle("A1:{$col}{$num}")->getAlignment()
  ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

  //從thead開始先全部設 文字水平置中 ,後面再分別設定置右或置左的
  $sheet->getStyle("A3:{$col}{$num}")->getAlignment()
        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

  //再設定 數值的文字置右
  $sheet->getStyle("E5:I{$num}")->getAlignment()
        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

  $sheet->getStyle("K5:M{$num}")->getAlignment()
        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

  //禮品那一行要置左
  $sheet->getStyle("J5:J{$num}")->getAlignment()
        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

  //儲存格格式-數值(到小數點第二位)
  $sheet->getStyle("E5:H{$num}".($rows_count)."")->getNumberFormat()->setFormatCode('0.00');

  //儲存格格式-數值(整數,有千分位的逗號)(金額用)
  $sheet->getStyle("I5:M{$num}".($rows_count)."")->getNumberFormat()->setFormatCode('#,##0');
 

}


// **************************************************************************
//  函數名稱: u_input()
//  函數功能: 查詢條件
//  使用方式: u_input(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_input(&$f_var) {

  $f_var["tp"]-> newBlock('tb_list');
  $f_var["tp"]-> assign("tv_action",$f_var['mphp_name'].'.php?msel=41');

  //單位選項
  $f_var["tp"]-> newBlock('tb_label');
  $f_var["tp"]-> assign("tv_cname",'單位');
  $f_var["tp"]-> assign("tv_name",'area_s_num');

  $f_var["tp"]-> newBlock('tb_option');
  $f_var["tp"]-> assign("tv_value",'all');
  $f_var["tp"]-> assign("tv_show",'全部');
  $f_var["tp"]-> assign("tv_selected",'selected');

  if( $f_var["normal"] == 'Y' ){ //窗口人員只能查看自己的單位
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

  //年份選項
  $f_var["tp"]-> newBlock('tb_label');
  $f_var["tp"]-> assign("tv_cname",'年份');
  $f_var["tp"]-> assign("tv_name",'year');

  //年份選項,從2021開始 到 +1年(明年)
  for($i = 2021; $i<=(date('Y')+1); $i++){
    $f_var["tp"]-> newBlock('tb_option');
    $f_var["tp"]-> assign("tv_value",$i);
    $f_var["tp"]-> assign("tv_show",$i);

    if( $_POST['year'] == $i ){
      $f_var["tp"]-> assign("tv_selected",'selected');
    }
  }

  //節日選項
  $f_var["tp"]-> newBlock('tb_label');
  $f_var["tp"]-> assign("tv_cname",'節日');
  $f_var["tp"]-> assign("tv_name",'festival');

  $festival = array('中秋節','春節');
  foreach( $festival as $val ){
    $f_var["tp"]-> newBlock('tb_option');
    $f_var["tp"]-> assign("tv_value",$val);
    $f_var["tp"]-> assign("tv_show",$val);

    if( $_POST['festival'] == $val ){
      $f_var["tp"]-> assign("tv_selected",'selected');
    }
  }

  //報表種類選項
  $f_var["tp"]-> newBlock('tb_label');
  $f_var["tp"]-> assign("tv_cname",'報表種類');
  $f_var["tp"]-> assign("tv_name",'report');

  $report = array('A'=>'禮品品項統計表','B'=>'贈禮對象規劃表');

  if( $f_var["admin"] == 'Y' || $f_var["job_5019"] == 'Y' ){
    $report['C'] = '重複名單';
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
//  函數名稱: u_list_repeat()
//  函數功能: 重複名單
//  使用方式: u_list_repeat(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_list_repeat(&$f_var){

  //找出重複的統編跟單位
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
      //依統編跟單位 找出贈禮對象
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
      $list = array(); //放資料用
      $count = array(); //計算出現次數 rowspan用
      while( $row_item = mysql_fetch_assoc($result_item) ){
        $list[ $row_item['area'] ][ $row_item['company'] ][] = $row_item;
        $count[ $row_item['area'] ]['num']++;
        $count[ $row_item['area'] ][ $row_item['company'] ]++;
      }

      // echo '<pre>'.print_r($count,1).'</pre>';
      // exit;

      //列出重複名單的table
      $i = 0;
      $td = '';
      foreach( $list as $area => $arr ){
        $k = 0;
        foreach( $list[$area] as $company => $item ){
          foreach( $item as $ind => $val ){
            $td = '';

            if( $i == 0 && $k == 0 && $ind == 0 ){ //最第一個 會有tax_no的
              $td .= "<td name='tax_no' rowspan=".mysql_num_rows($result_item).">{$row['tax_no']}</td>";
            }
            if( $ind == 0 ){  //公司裡贈禮對象的第一個 會有公司名稱
              $td .= "<td rowspan=".$count[$area][$company].">{$company}</td>";
            }
            $td .= "<td>{$val['position']}</td>";
            $td .= "<td>{$val['name']}</td>";

            if( $k == 0 && $ind == 0 ){ //單位裡的第一個 會有單位名稱
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
//  函數名稱: u_list_guest()
//  函數功能: 贈禮對象規劃表
//  使用方式: u_list_guest(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_list_guest(&$f_var){

  if($_POST['area_s_num'] == 'all'){

    if($f_var["normal"] == 'Y'){ //窗口人員只能查看自己的單位
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
        $f_var['tp']-> assign('tv_all_done','(尚未登打完畢)');
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
                    CASE WHEN gift_s_num IS NULL THEN '尚未選擇品項' 
                    ELSE CONCAT(t.company,t.`name`,' ',t.price,'元') END AS gift_name
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
//  函數名稱: u_list_gift()
//  函數功能: 禮品品項統計表
//  使用方式: u_list_gift(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_list_gift(&$f_var){

  //列出禮品種類
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
      $f_var['tp']-> assign('tv_gift_name',$row['company'].'<br>'.$row['name']."<br>{$row['price']}元");
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
//  函數名稱: u_setvar()
//  函數功能: 變數設定
//  使用方式: u_setvar(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_setvar(&$f_var) {

  //echo $_REQUEST.'---------';
  if(is_array($_REQUEST)) { // 有資料才處理
    while (list($f_fd_name,$f_fd_value) = each($_REQUEST)) {
      //echo "$f_fd_name=$f_fd_value----";
      $f_var[$f_fd_name] = $f_fd_value;
    }
  }

  // 未傳入值之預設值設定 Begin.................................................//
  if($f_var['msel'] == NULL){
    $f_var['msel'] = 4;
  }
  if(NULL==$f_var['f_page']) {
    $f_var['f_page']  = 1;  //頁次
  }
  if(NULL==$f_var['max_page']) {
    $f_var['max_page']  = 1;  //最大頁次
  }
  
  // 未傳入值之預設值設定 End ..................................................//


  $f_var['mphp_name'] = u_showproc(); //程式名稱
  $f_var['show_year'] = '4';
  $f_var['msel_name'] = array('1'=>'新增','2'=>'修改','3'=>'刪除','4'=>'瀏覽','5'=>'查詢','6'=>'未定義','7'=>'列印'); // msel 中文
  $f_var['ie_h_title'] = '禮品管理系統-報表'; // 頁面標題
  $f_var['msub_title'] = '禮品管理系統-報表'; // 程式副標題
  $f_var['mmaxline'] = 10; // 每頁最大筆數
  $f_var['mdb'] = 'docs'; // db name
  $f_var['mupload_dir']  = "/home/docs/public_html/gift/gift_upfile/" ; //上傳檔案到此資料夾
  $f_var['mtable'] = array('head'=>'gift_head','body'=>'gift_body','type'=>'gift_type','quota'=>'gift_quota',
                          'config'=>'gift_config','guest'=>'gift_guest','item'=>'gift_item'); // 使用 table 名稱 
  $f_var['tpl'] = 'gift_rpt.tpl'; // 樣版畫面檔

  $f_var['upd_img'] = '<img src="/~sl/img/upd.png" border="0" alt="修改此筆" title="修改此筆">';
  $f_var['del_img'] = '<img src="/~sl/img/del.png" border="0" alt="作廢此筆" title="作廢此筆">';


}

// **************************************************************************
//  函數名稱: ReturnInt()
//  函數功能: 轉換函式，傳入的資料若不是數字，一律轉成0
//  使用方式: ReturnInt($data)
//  程式設計: Bruce
//  設計日期: 2020.06.18
// **************************************************************************
function ReturnInt($data){
  $result=is_numeric($data)?$data:"0";
  return $result;
}

// **************************************************************************
//  函數名稱: to_utf8($str)
//           replace($matches)
//  函數功能: DB裡的難字,需要另外轉換
//  使用方式: to_utf8($str)
//  程式設計: 
//  設計日期: 2021.04.27
// **************************************************************************
function to_utf8($str){
  if( strpos($str,'&') > -1  ){
    $str = mb_convert_encoding($str,'UTF-8','big5');
    $pattern ='/&#\d+;/'; //正規表達式 
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