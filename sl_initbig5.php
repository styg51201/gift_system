<?php
//�z�w�w�w�w�w�s�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�{
//�x�t�ΦW��: �xsl        PHP�}�o���                                         �x
//�x�{���W��: �xsl_init.php �@�Φۭq��ƻP�ܼƳ]�w                            �x
//�x�{������: �x�ۦ�}�o����ơA�H���ܼƳ]�w                                  �x
//�x          �x                                                              �x
//�x�{���]�p: �x���L��                                                        �x
//�x�]�p���: �x2004.03.12                                                    �x
//�x�{���ק�: �x                                                              �x
//�x�ק���: �x                                                              �x
//�|�w�w�w�w�w�r�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�}
//�z�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�s�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�{
//�x��ƦW��                      �x��ƥ\��                                                  �x
//�u�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�q�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�t
//�xu_open()                      �x�}�Ҹ�Ʈw                                                �x
//�xsl_open()                     �x�}�Ҹ�Ʈw                                                �x
//�xsl_openi()                    �x�}�Ҹ�Ʈw�ϥ� mysqli                                     �x
//�xu_openms()                    �x�}��ms��Ʈw                                              �x
//�xu_chkuser()                   �x�ˬd�ϥΪ�                                                �x
//�xu_chk_run()                   �x�ˬd�O�_�i�H����                                          �x
//�xu_showdate()                  �x�q���                                                    �x
//�xu_title()                     �x�q�{���N���B���Y�B���Ѥ��                                �x
//�xu_msg()                       �x�q�T��                                                    �x
//�xu_bot()                       �x������??                                                 �x
//�xu_showproc()                  �x�q�{���W��                                                �x
//�xu_sel()                       �x�s�W�B�ק�B�R���B�d�ߡB�C�L�I�ﶵ��                      �x
//�xu_showtime()                  �x�q�ɶ� (�ɤ�hh:mm)                                        �x
//�xu_chkid()                     �x�����Ҧr���ˬd                                            �x
//�xu_chkemail()                  �x�q�l�l���ˬd                                              �x
//�xu_bad_login()                 �x�n�J���~                                                  �x
//�xu_que_form()                  �x�d�ߵe��                                                  �x
//�xu_qed()                       �x�I�� Q E D (�s�W�B�ק�B�R��)                             �x
//�xu_chk_badword()               �xż�r�ˬd                                                  �x
//�xu_chg_num()                   �x���ԧB�Ʀr�ഫ��r                                        �x
//�xu_add_select()                �x�W�[ select �����                                        �x
//�xu_add_select1()               �x�W�[ select ����ơA��x�ϥ�                              �x
//�xu_add_select2()               �x�W�[ select ����ơATemplatePower �ϥ�                    �x
//�xsl_add_select3()              �x�W�[ select �����- Ū�� mysql ���                       �x
//�xu_upload()                    �x�ɮפW��                                                  �x
//�xu_int()                       �x�����(�h���p�ƭ�)                                        �x
//�xu_count_upd()                 �x��s�p�ƾ�                                                �x
//�xu_count_list()                �x�q�X�p�ƾ��A�^�ǰ}�C                                      �x
//�xu_upd_log()                   �x�g�J���� log File                                         �x
//�xu_yymmdd2yyyymmdd()           �x��������褸���                                        �x
//�xu_add_space()                 �x���ɪť�                                                �x
//�xsl_send_msg()                 �x�ǰe�T�����߰T��                                          �x
//�xiif()                         �xiif(cond,true_set,false_set)����db4��iif()                �x
//�xSl_Jreplace()                 �x���s���V���}�A�ϥ� javascript ���                        �x
//�xsl_errmsg()                   �x�q���~�T��-��²��                                         �x
//�xsl_get()                      �x�q�X��J�����($f_var['fd'])                              �x
//�xsl_get_re()                   �x�q�X�^���ҭn��J�����($f_var['fd_re'])                   �x
//�xsl_js_rule()                  �x�ǤJ js ����ˬd���                                      �x
//�xsl_list()                     �x�q�X�s�����T�w�����Y�W��                                �x
//�xsl_disp_1()                   �x�C�X�浧���                                              �x
//�xsl_conv_date()                �x�褸/����������                                         �x
//�xsl_ymd()                      �x�q�X�褸�~���άO����~���                              �x
//�xsl_4ymd()                     �x�q�X�褸�~��� ex: 2006-10-22                             �x
//�xsl_2ymd()                     �x�q�X�����~��� ex: 95-10-22                               �x
//�xsl_cht_ymd()                  �x�q�X����~��� ex: 2015�~11��17��                         �x
//�xsl_chk_msg()                  �x����W�L�t�Τ��Ѥ���B�ثe�|��Ū�����T���ƶq              �x
//�xsl_chk_qa()                   �x����W�L�t�Τ��Ѥ���B�ثe�|�����ת��q�����׼ƶq          �x
//�xsl_web_log()                  �x�����s��LOG                                               �x
//�xsl_dept_mr()                  �x�Ǧ^ERP�����h�Ť��������N��                               �x
//�xsl_eval_fnc_name()            �x��Ķ�r��A������                                        �x
//�xsl_date_diff()                �x����۴�A�^�ǤѼ�                                        �x
//�xsl_span_str()                 �x�N�r��ϥաA���L�o���n�������r��                          �x
//�xsl_save()                     �x����x�s                                                  �x
//�xsl_sel_link()                 �x�I����]�w                                              �x
//�xsl_mgr_dept()                 �x�^�Ǻ޲z�h���ϥΪ����s                                    �x
//�xsl_chk_login2()               �x�ˬd�ĤG�h�K�X                                            �x
//�xsl_showsql()                  �x�ȹ��T���P�����SQL�ԭz                                 �x
//�xsl_range_gas()                �x                                                          �x
//�xsl_mgr_pid()                  �x�̺޲z�h�����sl.multi_dept�A���㤻�X�o�~���O�}�C $a_pid  �x
//�xsl_add_select_gas()           �x�̺޲z�h�����v��,�q�X�U�Ԧ����, ���/~gas/g_pid.itm      �x
//�xsl_area_get_dept()            �x��ܰϧO��,�C�X�o���N�X,�ΤH�Ƴ����N��,��ERP�����N��      �x
//�xsl_eip2flw($f_var)            �xEIP�U�������q�lñ��-ñ�ֳ�                              �x
//�xsl_custcomp_get_code($f_var)  �x��ܫȤ��`����,�C�X�Ȥ�s��                               �x
//�xsl_timediff($atime,$btime)    �x�����ɶ��۴�A�o��ѡB�ɡB���B��                        �x
//�xsl_show_sname($dept_id)       �x���Oid�त��W                                            �x
//�xsl_show_name($empno)          �x���s��H�W                                                �x
//�xsl_resaj($class_id)           �x�s���Z�O���Ӱ}�C                                          �x
//�xu_ERP_MA083_SAP_ZTERM_V2()    �x�w�� ERP ���ڱ���h���X SAP �����ڱ��� erp TABLE-->COPMA�x
//�xsl_flwset()                   �xwebñ�֫�,�^�g���                                        �x
//�xsl_sap_up_msg()               �x��}��                                                    �x
//�xu_get_sap_bp_s()              �x���o��������                                              �x
//�xsl_get_file()                 �x�q�X��J���ʺA�������                                    �x
//�xsl_disp_file()                �x��ܤw�����ʺA�������                                    �x
//�xsl_save_file()                �x�x�s�ʺA������                                          �x
//�xsl_b_gid()                    �x��ܥ��o���έpcheckbox�e��                                �x
//�xsl_sapid2bgid($sap_id)        �x�����N���ഫ sap -> b_gid                                 �x
//�|�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�r�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�}
session_cache_limiter("nocache");
//session_cache_limiter("private");
session_start();

include_once("/home/sl/public_html/sl_session.inc.php"); // hr_is_session load


//$login_empno     = $_SESSION["login_empno"];
//$login_name      = $_SESSION["login_name"];
//$login_dept_id   = $_SESSION["login_dept_id"];
//$login_dept_name = $_SESSION["login_dept_name"];
//$login_time      = $_SESSION["login_time"];
//$login_state     = $_SESSION["login_state"];
//$login_mode      = $_SESSION["login_mode"];
//$_SESSION['cnt']=0;
$f_var["no_save"] = 'file/hr/';  // �x�s�ɤ��B�z
$f_var["prn_title"] = '�s���q�B�ѥ��������q';
$f_var["today"]     = date('Ymd');
$f_var['server_name']  = 'http://'.$_SERVER["SERVER_NAME"];
$f_var['mysql_set_names'] = 'big5'; // �w�] mysql �r��
$f_var['home_link']='http://eip.slc.com.tw/';
if(strstr($_SERVER["PHP_SELF"],'mslb_st')) { // �j���s�q�A�n�� utf8 �ӳB�z Add by Tony 2010.03.08
  $f_var['mysql_set_names'] = 'utf8';
  $f_var['home_link']='/~docs/mslb_st/';
}
// Add by Tony 2011-03-10 �W�[�o�~�����հϩ� slt.slc.com.tw
$f_var['gas_connect'] = 'gas2.slc.com.tw'; // gas2 �w�]�s��
$f_var['gas_db']      = 'gas';             // gas2 �w�] db
// Add by Tony 2011-03-10 �W�[�P�_ db �O�_�}���վ�
if('192.168.2.19'==$_SERVER["SERVER_ADDR"] or 'slt.slc.com.tw'==$_SERVER["SERVER_NAME"]) { // ���վ�
  $f_var['gas_connect'] = 'localhost';      // ���վ�
  $f_var['gas_db']      = 'gas_eip_960125'; // ���վ� gas �w�] db
}


// Add by Tony 2011-04-08
$f_var['msg_img']['qa_new']='<img src=/~sl/img/wrench_orange.png border=0 alt=�s����>'; // �s����
$f_var['msg_img']['qa_re']='<img src=/~sl/img/wrench.png border=0 alt=�s�^��>';         // �^������
$f_var['msg_img']['qa_ok']='<img src=/~sl/img/money.png border=0 alt=����,����...>';    // ����
$f_var['msg_img']['wt']='<img src=/~sl/img/user.png border=0 alt=���ѭn�ȯZ...>';       // �ȯZ

$mindex        = "index.php";    // �e�ݭ���
$mmain         = "index.php";    // �e�ݥD�\��e��
$mlogin        = "sl_login.php"; // �e�ݵn�J�@�~

$bg_time       = u_caclutime();                       // �{���_�l�ɶ�

//$mtp_url     = 'tp/';
//$mbase_url   = './';
$mtp_url       = '/home/sl/public_html/tp/';
$mbase_url     = '/home/sl/public_html/';
$sl_header_php = '/home/sl/public_html/sl_header.inc.php';
$sl_footer_php = '/home/sl/public_html/sl_footer.inc.php';
$sl_tp_file    = "/home/sl/public_html/tp/class.TemplatePower.inc.php";
$sl_erp_db     = 'Leader9503';
$sl_eip_db     = 'sl';
$mdat3         = "Leader9503";                         // ms ��Ʈw

$mmenu         = "admin_main.php"; // ��ݥD�\��e��

$mlogin        = "{$f_var['server_name']}/~sl/sl_login.php";  // �e�ݵn�J�@�~
$mlogout       = "{$f_var['server_name']}/~sl/sl_logout.php"; // �n�X

$memailurl     = "{$f_var['server_name']}/~sl/";   // �w�]�ǰe�l�������m�A��ϥ�
$mbaseurl      = "{$f_var['server_name']}/~sl/";   // base href ��m
$mboturl       = "slc2.slc.com.tw/"; // ����T��URL
$mbottitle     = "�s��"; // ����T��
//$mtitle1       = "�s��EIP-�ϥΪ̵n�J"; // �s�������Y
$mtitle1       = "�s��EIP-"; // �s�������Y
$mtitle1img    = ""; // �s�������Y���ɦW��
$mtitle2       = "�s��EIP"; // �������Y
$mprn_title    = "�s���q�B�ѥ��������q"; // ������Y
$mservermail   = "tony@slc.com.tw";  // �ǰe�l�󪺦^�Ц�}
$mservername   = "tony";     // �ǰe�l�󪺦^�ЦW��
$mtarget       = "";            // �����}�Ҧ�m
$mmaxline      = 10;             // �C���̤j����
$mbmaxline     = 20;             // �C���̤j����-���
$msnum         = 0;             // �_�l����
$menum         = 10;             // ��������
$mselmsgcolor  ='000060';       // �ثe�T�����C��...�s�W�B�ק�....
$mtitleg_color ='BBD8F9';       // ���Y�I���C��
$mtitlef_color ='000000';       // ���Y�r���C��
$mbody_text_color  = '#000000'; // body-text �C��
$mbody_link_color  = '#800080'; // body-link �C��
$mbody_vlink_color = '#800080'; // body-vlink �C��
$mbody_alink_color = '#800080'; // body-alink �C��

//$adepart['S102'] = 'S102'; // �`���q

$ctoday  = date("Ymd");
$ctoday  = strval(substr($ctoday,0,4)-1911).substr($ctoday,4,4);
$cyy     = substr($ctoday,0,3);
$cmm     = substr($ctoday,3,2);
$cdd     = substr($ctoday,5,2);


$mdat1       = "sl"; // ��Ʈw

$mtable_ap   = "ap";   // �t�ι�ӥD��
$mtable_dept = "dept"; // �t����ӥD��
$mtable_ct   = "ct";   // �������u������
$mtable_pass = "pass"; // �������u�n�J��

$mdat3        = "Leader9503";                         // ms ��Ʈw
$mtable_cmsna = "CMSNA";                              // �I�ڱ���
$mtable_purta = "PURTA";                              // �i�f��


//if($_SESSION['login_empno'] == '1430174' || $_SESSION['login_empno'] == '1130937'){
  if($_REQUEST['msel']=='ajax_get_title'){
    $f_title = iconv('UTF-8','BIG5',$_REQUEST['f_title']);
    sl_open('sl');
    $upd = "
           update use_log
              set pg_title = '{$f_title}'
            where pg_name = '{$_SERVER['PHP_SELF']}'
           ";
    mysql_query($upd);
    //$d = iconv('BIG5','UTF-8',$_SERVER['PHP_SELF']);
    //$d = json_encode($d);
    //echo $d;
    exit;
  }
  $f_var['ban_web'] = array('/~docs/eip-new/v4/personal/func.js.php',//add20150212 by �p������v4�ӤH�M�Ϥ���
                            '/~docs/eip-new/v3/func.js.php',
                            '/~docs/eip-new/v3/func.js_test.php',
                            '/~docs/it/docs/it_tools/it_tools_ajax.php',
                            '/~docs/leeyen/it_tools/it_tools_ajax.php',
                            '/~docs/sle/docs/e09_que.php',
                            '/~gas/gas_trandelv.php',
                            './gas_trandelv.php',
                            '/home/gas/public_html/gas_trandelv.php',
                            '/~gas/gas_tranrecv.php',
                            './gas_tranrecv.php',
                            '/home/gas/public_html/gas_tranrecv.php',
                            '/home/gas/public_html/gas_touchtrandelv.php',
                            '/~gas/gas_touchtrandelv.php',
                            './gas_touchtrandelv.php',
                            './gas_loginone.php',
                            './tran_delv2acco.php',
                            '/home/gas/public_html/tran_delv2acco.php',
                            './db_iconv.php',
                            '/home/docs/public_html/1430174/db_iconv.php',
                            '/~docs/sle/docs/index.php',
                            '/~docs/sle/docs/e09_que_emp.php',
                            '/~docs/gaswork/admin/sl_main.php',
                            './get_shipping.php',
                            '/~docs/wwrpt/wwrpt.php',
                            '/~docs/wwrpt/wwrpt_manage.php',		// add by ���� 20210115 �g���P�_
                            '/~docs/wwrpt/HR_config.php',			// add by ���� 20210209 �g���P�_
                            '/~docs/wwrpt/test/wwrpt.php',
                            '/~docs/wwrpt/test/wwrpt_manage.php',	// add by ���� 20210115 �g���P�_
                            '/~docs/wwrpt/test/HR_config.php', 		// add by ���� 20210219 �g���P�_
                            '/~gas/1330075/api/maininvoout.php', 		// add by �p�� 20210513 api�P�_
                            '/~gas/1330075/api/v1/maininvo.php', 		// add by �p�� 20210513 api�P�_
                            '/~gas/1330075/api/invosubsoout.php', 		// add by �p�� 20210521 api�P�_
                            '/~gas/1330075/api/v1/invosubs.php' 		// add by �p�� 20210521 api�P�_
						); 
  if('' == $_REQUEST['msel'] || is_numeric($_REQUEST['msel'])){   // ���� msel=�Ʀr ����ajax�C�J�p��
    use_log($_SERVER["PHP_SELF"]);//���դ��Ф�����
    //if('/~docs/eip-new/v3/func.js.php' != $_SERVER["PHP_SELF"] &&
    //   '/~docs/it/docs/it_tools/it_tools_ajax.php' != $_SERVER["PHP_SELF"] &&
    //   '/~docs/leeyen/it_tools/it_tools_ajax.php' != $_SERVER["PHP_SELF"]){
    if(!in_array($_SERVER["PHP_SELF"],$f_var['ban_web'])){
      sl_open('sl');
      $sql = "
             select *
               from use_log
              where pg_name = '{$_SERVER['PHP_SELF']}'
             ";
      $result = mysql_query($sql);
      $qty = mysql_num_rows($result);
      $row = mysql_fetch_assoc($result);
      if($qty > 0){
        if('' == $row['pg_title']){
          echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js'></script>\n";
          echo "<script language=\"javascript\">";
          echo "$(document).ready(function(){";
          echo "  var title = $(document).attr(\"title\");";
          echo "  $.getJSON( location.href ,";
          echo "    { f_title : title , msel : \"ajax_get_title\" },";
          echo "    function(json){";
          echo "    });";
          echo "});";
          echo "</script>\n";
        }
      }
    }
  }
//}
// **************************************************************************
//  ��ƦW��: use_log()
//  ��ƥ\��: �p��{���ϥΦ���
//  �ϥΤ覡: use_log($pg_path)
//  �{���]�p: �¶v
//  �]�p���: 2014.07.21
// **************************************************************************
function use_log($pg_path) {

  //-------------------------- ���o�{������W�� START --------------------------
  //$_POST['url'] = $_SERVER['HTTP_HOST'].$pg_path;   // ���o URL �������
  //�t�~�@��Ū������title tag����k
  //if($_SESSION['login_empno'] == '1130937'){
  //$buffer = file("http://".$_POST['url']); //�N���}Ū�Jbuffer�ܼ�
  //for($i=0;$i<sizeof($buffer);$i++){ //�N�C�q��rŪ�X��,�H���欰���,sizeof�|�Ǧ^�@���X��
  //  $n1=strpos(" ".$buffer[$i],"<title>"); //�ˬd�A�n�䪺�r,�O�_�s�b,���]�ڷQ��<title>�������e����,������e���n�[�ť�,�]���p�G����m�p�G�O�Ĥ@�Ӧ�m�O0,0��䤣��b�P�_�|�����D
  //  //echo $n1."<br>";
  //  if($n1>0){
  //    $n2=strrpos($buffer[$i],"</title>"); //��X</title>����m
  //    $title=substr($buffer[$i],$n1+6,$n2-$n1-6); //+6���N��O<title>�����״�e�����@�Ӫť�,-6���ܬO����״
  //    break;//�Ҽ{�[�W�o�ӸոլݡH�u�n���title�N�������}�j��
  //    //$title=iconv("UTF-8","big5",$title);
  //    //echo $title."<br>\n"; //�Ntitle�����e�ȦL�X\n�N����ܭ�l�X���ɭԷ|����,<BR>�Obrower��ܷ|����
  //  }
  //}
  //}

  //curl�����k
  //echo $_POST['url'];exit;
  //
  //if(!isset($_POST['url']) || $_POST['url'] == ''){   // �ˬd URL
  //  //echo "URL ���~";exit;
  //}
  //
  //$ch = curl_init();   // ��l�� CURL
  //
  //curl_setopt ($ch, CURLOPT_URL, $_POST['url']); // �]�w URL
  //curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);  // �� curl_exec() ������H���H��Ƭy���Φ���^�A�Ӥ��O������X�C
  //curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 0);  // �b�o�_�s���e���ݪ��ɶ��A�p�G�]�m��0�A�h������
  //curl_setopt ($ch, CURLOPT_TIMEOUT, 30);        // �]�w CURL �̪����檺���
  //$store = curl_exec ($ch);                      // ���ը��o��󤺮e
  //
  //if(!curl_errno($ch)){                          // �ˬd���O�_���T���o
  //  //echo "�L�k���o URL ���";
  //  //echo curl_error($ch);exit;   //��ܿ��~�T��
  //}
  //
  //curl_close($ch);    // ���� CURL
  //
  //preg_match("/<head.*>(.*)<\/head>/smUi",$store, $htmlHeaders);   // �ѪR HTML �� <head> �Ϭq
  //if(!count($htmlHeaders)){
  //  //echo "�L�k�ѪR��Ƥ��� <head> �Ϭq";exit;
  //}
  //
  //if(preg_match("/<meta[^>]*http-equiv[^>]*charset=(.*)(\"|')/Ui",$htmlHeaders[1], $results)){     // ���o <head> �� meta �]�w���s�X�榡
  //   $charset =  $results[1];
  //}else{
  //   $charset = "None";
  //}
  //
  //if(preg_match("/<title>(.*)<\/title>/Ui",$htmlHeaders[1], $htmlTitles)){    // ���o <title> ������r
  //  if(!count($htmlTitles)){
  //     //echo "�L�k�ѪR <title> �����e";exit;
  //  }
  //  $title = $htmlTitles[1];  // ���otitle  EX�G�s��EIP--�ɥ��
  //  //echo $title;
  //}

  //-------------------------- ���o�{������W�� END --------------------------

  sl_open('sl');
  $use_log_sql = "INSERT INTO use_log (pg_name,  pg_cnt)
                       VALUES ('{$pg_path}', '1')
                  ON DUPLICATE KEY
                       UPDATE pg_cnt = pg_cnt+1
                 ";//,pg_title='{$title}'
  if(!mysql_query($use_log_sql)){
    sl_errmsg('�{�����~�A�гq����T�H��!!');
    //exit;
  }

}
// **************************************************************************
//  ��ƦW��: u_open()
//  ��ƥ\��: �}�Ҹ�Ʈw
//  �ϥΤ覡: u_open($vdat)
//  �{���]�p: Tony
//  �]�p���: 2004.03.12
// **************************************************************************
function u_open($vdat) {
  global $f_var;
  if ($vdat == 'gas' || $vdat == 'gas_sap') {
    //$vdat = $f_var['gas_db']; // Add by Tony 2011-03-10
    mysql_connect($f_var['gas_connect'],'slprg','sl85') or die("��Ʈw�s������!!");
    $year = date('Y');
    if ($_SESSION[db_year]) {
      switch ($_SESSION[db_year]) {
        case "$year":
          $vdat = $vdat;
          break;
        default:
          $vdat = $vdat.'_'.$_SESSION[db_year];
          break;
      }
    }
  }
  else {
    mysql_connect('localhost','slprg','sl85') or die("��Ʈw�s������!!");
  }
  mysql_select_db($vdat) or die("�L�kŪ����Ʈw!!-u_open()-$vdat");
  mysql_query("SET NAMES {$f_var['mysql_set_names']}");
  //echo $f_var['mysql_set_names'].'---';
  //if('8966389'==$_SESSION['login_empno']) {
  //  mysql_query("SET NAMES 'utf8'");
  //  echo 'utf8';
  //}
  //else {
  //  mysql_query("SET NAMES 'big5'");
  //}
  return;
}

function sl_open($vdat) {
  //echo $vdat;
  GLOBAL $f_var;
  //if(strstr('1130937/',$_SESSION['login_empno'])){
  //  $_SESSION['cnt']++;
  //  echo "<pre>";
  //  echo 'cnt'.$_SESSION['cnt']."<br>";
  //  print_r($f_var);
  //
  //  echo "</pre>";
  //}
  if ((substr($vdat,0,4) == 'gas_' || $vdat == 'gas') && ($vdat != 'gas_docs' && $vdat != 'gas_eip_960125' && $vdat != 'gas_ge' && $vdat != 'gas_t' && $vdat != 'gas_test') ) {
    //$vdat = $f_var['gas_db']; // Add by Tony 2011-03-10
    mysql_connect($f_var['gas_connect'],'slprg','sl85') or die(date('Y-m-d H:i:s')."��Ʈw�s������!!");
    $year = date('Y');
    if ($_SESSION[db_year]) {
      switch ($_SESSION[db_year]) {
        case "$year":
          $vdat = $vdat;
          break;
        default:
          $vdat = $vdat.'_'.$_SESSION[db_year];
          break;
      }
    }
  }
  else {
    mysql_connect('localhost','slprg','sl85') or die(date('Y-m-d H:i:s')."��Ʈw�s������!!");
  }
  mysql_select_db($vdat) or die(date('Y-m-d H:i:s')."�L�kŪ����Ʈw!!-sl_open()-$vdat");
  mysql_query("SET NAMES Big5");
  //sl_open2();
  return;
}

function sl_open2() {
  GLOBAL $f_var;
  echo '*'.$f_var['gas_connect'].'*<br>';
}


// **************************************************************************
//  ��ƦW��: u_openi()
//  ��ƥ\��: �}�Ҹ�Ʈw�ϥ� mysqli
//  �ϥΤ覡: u_openi($vdat)
//  �{���]�p: Tony
//  �]�p���: 2008.11.11
// **************************************************************************
function sl_openi($vdat) { // 20210315 update by ���� �ק�P�_����GAS�����ո�Ʈw�]�i�H�ϥ�
  global $f_var;  
  if ((substr($vdat,0,4) == 'gas_' || $vdat == 'gas') && ($vdat != 'gas_docs' && $vdat != 'gas_eip_960125' && $vdat != 'gas_ge' && $vdat != 'gas_t' && $vdat != 'gas_test') ) {
    //$vdat = $f_var['gas_db']; // Add by Tony 2011-03-10
    $vlink = mysqli_connect($f_var['gas_connect'],'slprg','sl85',$vdat) or die("��Ʈw�s������!!");
    $year = date('Y');
    if ($_SESSION[db_year]) {
      switch ($_SESSION[db_year]) {
        case "$year":
          //$vdat = $vdat;
          $vdat = $f_var['gas_db'];
          break;
        default:
          $vdat = $vdat.'_'.$_SESSION[db_year];
          break;
      }
    }
  }
  else {
    $vlink = mysqli_connect('localhost','slprg','sl85',$vdat) or die("��Ʈw�s������!!");
  }
  mysqli_query($vlink,"SET NAMES {$f_var['mysql_set_names']}");
  return($vlink);
}

// **************************************************************************
//  ��ƦW��: u_openms()
//  ��ƥ\��: �}�Ҹ�Ʈw
//  �ϥΤ覡: u_openms($vdat)
//  �{���]�p: Tony
//  �]�p���: 2005.10.11
// **************************************************************************
function u_openms($vdat) {
  //$msdb = mssql_connect("59.120.26.162","sa","") or die("��Ʈw�s������!!");
  $msdb = mssql_connect("slg.slc.com.tw:1433","sa","sanloong") or die("��Ʈw�s������!!");
  //$msdb = mssql_connect("slg.slc.com.tw:1433","sa","dsc") or die("��Ʈw�s������!!");
  //$msdb = mssql_connect("slg.slc.com.tw:1433","slprg","sl85") or die("��Ʈw�s������!!");
  mssql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
  return;
}

function u_openef2k($vdat) {
  $msdb = mssql_connect("flow.slc.com.tw","sa","s9704") or die("��Ʈw�s������!!");
  //$msdb = mssql_connect("192.168.2.190","sa","s9704") or die("��Ʈw�s������!!");
  mssql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
  return;
}

function sl_openef2k($vdat) {
  //$vfileopen = fopen("/home/sl/public_html/sl_opdb.log",'a');
  //$vstr = "mssql;FLOW;sl_openef2k;{$vdat};{$_SERVER['PHP_SELF']}\n";
  //fwrite($vfileopen,$vstr);
  //fclose($vfileopen); // �����ɮ�
  
  $msdb = mssql_connect("flow.slc.com.tw","sa","s9704") or die("��Ʈw�s������!!");
  //$msdb = mssql_connect("192.168.2.190","sa","s9704") or die("��Ʈw�s������!!");
  mssql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
  return;
}

function sl_openef2kc($vdat) { //add by �Ϊ� 2020.08.26 ���ݹqñ�D��
  //$msdb = mssql_connect("flow1.slc.com.tw","sa","s9704") or die("��Ʈw�s������!!");
  $msdb = mssql_connect("175.98.134.105:1433","sa","s9704") or die("��Ʈw�s������!!");
  mssql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
  return;
}


function sl_openel($vdat) {
  $msdb = mssql_connect("elearn.slc.com.tw:9000","sa","sanloong") or die("��Ʈw�s������!!");
  mssql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
  return;
}

function sl_openms($vdat) {
  //add by mimi ����-15424 �W�[93���հϪ��P�_
  global $f_var;
  //echo $f_var['f_comp'].'----initbig5';
  $ex_comp=explode('-',$f_var['f_comp']);
  if('93�����հ�'==$ex_comp[1] or '93'==$f_var['f_comp']){
    sl_openms_new($vdat);
  }
  else{
    $msdb = mssql_connect("slg.slc.com.tw","sa","sanloong") or die("��Ʈw�s������!!");
    //$msdb = mssql_connect("slg.slc.com.tw","slprg","sl85") or die("��Ʈw�s������!!");
    //$msdb = mssql_connect("slg.slc.com.tw","sa","dsc") or die("��Ʈw�s������!!");
    mssql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
  }
  return;
}
function sl_openms_new($vdat) {//add by �F�� ����-15424 �W�[93���հϪ��P�_
  if('192.168.2.19'==$_SERVER["SERVER_ADDR"] or 'slt.slc.com.tw'==$_SERVER["SERVER_NAME"]) { // ���վ�
    $msdb = mssql_connect("192.168.2.10:1433","sa","sanloong") or die("��Ʈw�s������!!");
  }
  else{
    //$msdb = mssql_connect("slg.slc.com.tw:1533","sa","sanloong") or die("��Ʈw�s������!!");
    //$msdb = mssql_connect("slg.slc.com.tw","slprg","sl85") or die("��Ʈw�s������!!");
    //$msdb = mssql_connect("slg.slc.com.tw","sa","dsc") or die("��Ʈw�s������!!");
    $msdb = mssql_connect("slg.slc.com.tw","sa","sanloong") or die("��Ʈw�s������!!");
  }
  mssql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
  return;
}
function sl_openfwd($vdat='fwd3'){
  //$msdb = mssql_connect("59.120.26.170:1433","sa","slcperfect") or die("��Ʈw�s������!!");
  // Modify by Tony 2012-03-29 ���DNS,�ñN�}���D���}��sql:1433��������H��EIP��IP
//$msdb = mssql_connect("fwd.slc.com.tw:1433","sa","slcperfect") or die("��Ʈw�s������!!");
// modify 106.07.18 fwd.slc.com.tw �אּ 210.201.104.136
  $msdb = mssql_connect("210.201.104.136:1433","sa","slcperfect") or die("��Ʈw�s������!!");
  mssql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
  return;
}
function sl_openhrmdb($vdat){
  //$vfileopen = fopen("/home/sl/public_html/sl_opdb.log",'a');
  //$vstr = "mssql;HRM;sl_openhrmdb;{$vdat};{$_SERVER['PHP_SELF']}\n";
  //fwrite($vfileopen,$vstr);
  //fclose($vfileopen); // �����ɮ�
  
  //$msdb = mssql_connect("192.168.1.8:1433","slprg","sl9611prg") or die("��Ʈw�s������!!");
  $msdb = mssql_connect("175.98.134.108:1433","slprg","sl9611prg") or die("��Ʈw�s������!!");
  mssql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
  //mssql_query("SET NAMES 'big5'");
  return;
}
function sl_openhrmdbmy($vdat){ //add by �Ϊ� 2020.06.08 �ݿ�15370-�y�����ѥ��d, ���u�������hrm mysql
  $msdb = mysql_connect("175.98.134.108:3306","slprg","sl8611prg") or die("��Ʈw�s������!!");
  mysql_select_db($vdat) or die(date('Y-m-d H:i:s')."�L�kŪ����Ʈw!!-$vdat");
  //mysql_query("SET NAMES Big5");
  return;
}
function sl_openhrbpm($vdat){
  $msdb = mssql_connect("175.98.134.104:1433","slprg","sl9611prg") or die("��Ʈw�s������!!");
  mssql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
  //mssql_query("SET NAMES 'big5'");
  return;
}
function sl_openrtm($vdat) {
  Global $_SESSION;
  //if ($_SESSION['login_dept_id']=='S122' || $_SESSION['login_dept_id']=='S121') {
  //if (strstr($_SERVER["PHP_SELF"],'rtmtest')) {
  //  $vdat = 'RTMDBTEST';
  //}
  //$msdb = mssql_connect("60.251.72.111:1433","sa","sl98") or die("��Ʈw�s������!!");
  mysql_connect('localhost','slprg','sl85') or die("��Ʈw�s������!!");
  mysql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
  return;
}
function sl_opengps($vdat='MjCarcenter') {
  $f_port = '1433';
  //if($vdat == 'FI_PAY_SLC' || $vdat == 'FI_PAY_SLC_TEST2'){
  //  $f_port='2433';
  //}
  if($vdat == 'FI_PAY_SLC' || $vdat == 'FI_PAY_SLC_TEST2'){
    $msdb = mssql_connect("175.98.134.106:{$f_port}","sa","sanloong") or die("��Ʈw�s������!!");
  }
  else{
    $msdb = mssql_connect("gps.slc.com.tw:{$f_port}","sa","sanloong") or die("��Ʈw�s������!!");
  }
  //$msdb = mssql_connect("59.120.26.174:1433","sa","sanloong") or die("��Ʈw�s������!!");
// modify 2016.11.23 by markliu
//$msdb = mssql_connect("gps.slc.com.tw:1433","sa","sanloong") or die("��Ʈw�s������!!");
  mssql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
  return;
}
function u_opengps($vdat){
  //$msdb = mssql_connect("59.120.26.174:1433","sa","sanloong") or die("��Ʈw�s������!!");
  $msdb = mssql_connect("gps.slc.com.tw:1433","sa","sanloong") or die("��Ʈw�s������!!");
  mssql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
  return;
}
function u_openvip($vdat){
  $msdb = mssql_connect("vip.slc.com.tw:1433","it","sl85") or die("vip��Ʈw�s������!!");
  //$msdb = mssql_connect("59.120.26.166:1433","it","sl85") or die("vip��Ʈw�s������!!");
  //'192.168.2.19'==$_SERVER["SERVER_ADDR"] or 'slt.slc.com.tw'==$_SERVER["SERVER_NAME"] or
  //if(  'eip.slc.com.tw'==$_SERVER["SERVER_NAME"]) { // ���վ�
  //  $vdat='TESTDB';
  //}
  mssql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
  return;
}
function sl_openvip($vdat){
  //$msdb = mssql_connect("59.120.26.166:1433","it","sl85") or die("vip��Ʈw�s������!!");
  $msdb = mssql_connect("vip.slc.com.tw:1433","it","sl85") or die("vip��Ʈw�s������!!");
  //'192.168.2.19'==$_SERVER["SERVER_ADDR"] or 'slt.slc.com.tw'==$_SERVER["SERVER_NAME"] or
  //if(  'eip.slc.com.tw'==$_SERVER["SERVER_NAME"]) { // ���վ�
  //  $vdat='TESTDB';
  //}
  mssql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
  return;
}
function u_opengas1($vdat){
  //$msdb = mysql_connect("gas1.slc.com.tw","slprg","sl85") or die("��Ʈw�s������!!");
  $msdb = mysql_connect("192.168.1.6","slprg","sl85") or die("��Ʈw�s������!!");
  mysql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
  mysql_query("SET NAMES Big5");
  return;
}
function sl_opengas($b_gid){//2010.10.26 add by �F��
  // sl_openpos($b_gid)      // Mark by tony 2010-11-09
  return(sl_openpos($b_gid));
}
function sl_openpos($b_gid){
  $vconnect='Y'; // �O�_�s�u���\ Add by Tony 2010-11-09
        $f_var['b_gid']=$b_gid;
        $f_var['db']='gas';
        u_open('gas');

        $sql="select mysql_port,sname from company where b_gid = '{$f_var['b_gid']}'";
        $rs=mysql_query($sql);
        $row=mysql_fetch_array($rs);
        $f_var['port'] = $row['mysql_port'];
        $f_var['mbtime'] = date('Y-m-d H:i:s');
  //add by �F�� 2010.10.19 ��ping�o���O�_���b�u
  //if('507'==$f_var['b_gid'] && date('Ymd')<'20110901' ){
  //   $f_var['b_gid'] = '517';
  //}
  //Line:368~370 2011.08.01 add by �F��
  //�����q���[�b���غ��q �s����n��줶�ت�5506,�}���201108�멳
  //MARK by �F�� 2011.08.10 ����
  
  $a= shell_exec("ping {$f_var['b_gid']}.slc.com.tw -c 3");
  $chk = strstr($a,'rtt min/avg/max/mdev');
  
  if(''!=$chk){
    //echo "{$f_var['b_gid']}.slc.com.tw:{$f_var['port']}";
    //$f_var['link_pos'] = mysql_connect("{$f_var['b_gid']}.slc.com.tw:{$f_var['port']}", 'it', 'sl85') or die("{$f_var['b_gid']}-�s������!!{$f_var['mbtime']}");
    //$f_var['link_pos'] = mysql_connect("{$f_var['b_gid']}.slc.com.tw:{$f_var['port']}", 'it', 'sl85') or die("{$f_var['b_gid']}:{$f_var['port']}-�s������!!{$f_var['mbtime']}");
    $f_var['link_pos'] = @mysql_connect("{$f_var['b_gid']}.slc.com.tw:{$f_var['port']}", 'it', 'sl85') or $vconnect='N';//upd by �h�Z 2012-06-27
    
    //$chk2 = strstr($f_var['link_pos'],'�s������!!');
    if('N'!=$vconnect){           //upd by �h�Z 2012-06-27
      mysql_select_db($f_var['db'],$f_var['link_pos']);
      mysql_query("SET NAMES big5");
    }
    //else {
      //$vconnect='N'; // �O�_�s�u���\ Add by �F�� 2012-06-27
    //  sl_errmsg($row['sname'].'�s�u���`,�гq���t�κ��@�H��,����!');  //upd by �F�� 2012-06-27
    //}
  }
  else {
    $vconnect='N'; // �O�_�s�u���\ Add by Tony 2010-11-09
    sl_errmsg($row['sname'].'�s�u���`,�гq���t�κ��@�H��,����!');  //upd by mimi 2010.10.21 �q�X���O�W��
  }
  return($vconnect);
}

// **************************************************************************
//  ��ƦW��: sl_opensl8()
//  ��ƥ\��: �}��sl8��Ʈw
//  �ϥΤ覡: sl_opensl8($b_gid,$port)
//  �{���]�p: �h�Z
//  �]�p���: 2012.06.27
// **************************************************************************
function sl_opensl8($b_gid,$port){
  $vconnect='Y'; // �O�_�s�u��?\ Add by Tony 2010-11-09
        $f_var['b_gid']=$b_gid;
        $f_var['db']='gas';
        $f_var['port'] = $port;
        $f_var['mbtime'] = date('Y-m-d H:i:s');
  //add by �F�� 2010.10.19 ��ping�o���O�_���b�u
  $a= shell_exec("ping {$f_var['b_gid']}.slc.com.tw -c 3");
  $chk = strstr($a,'rtt min/avg/max/mdev');
  if(''!=$chk){
    //$f_var['link_pos'] = mysql_connect("{$f_var['b_gid']}.slc.com.tw:{$f_var['port']}", 'it', 'sl85') or die("{$f_var['b_gid']}:{$f_var['port']}-�s������!!{$f_var['mbtime']}");
    $f_var['link_pos'] = @mysql_connect("{$f_var['b_gid']}.slc.com.tw:{$f_var['port']}", 'it', 'sl85') or $vconnect='N';//upd by �h�Z 2012-06-27
    //$chk2 = strstr($f_var['link_pos'],'�s������!!');
    if('N'!=$vconnect){           //upd by �h�Z 2012-06-27
      mysql_select_db($f_var['db'],$f_var['link_pos']);
      mysql_query("SET NAMES big5");
    }
    //else {
      //$vconnect='N'; // �O�_�s�u���\ Add by �F�� 2012-06-27
    //  sl_errmsg($row['sname'].'�s�u���`,�гq���t�κ��@�H��,����!');  //upd by �F�� 2012-06-27
    //}
  }
  else {
    $vconnect='N'; // �O�_�s�u���\ Add by Tony 2010-11-09
    sl_errmsg($row['sname'].'�s�u���`,�гq���t�κ��@�H��,����!');  //upd by mimi 2010.10.21 �q�X���O�W��
  }
  return($vconnect);
}
// **************************************************************************
//  ��ƦW��: sl_openoci()
//  ��ƥ\��: �}�Ҹ�Ʈw�ϥ�
//  �ϥΤ覡: sl_openoci($vdat)
//  �{���]�p: supergk
//  �]�p���: 2013.03.10
// **************************************************************************
function sl_openoci($vdat) {
  global $f_var;
  switch($vdat){
    case "DEV":
      $vdat = "172.16.4.28:1527/DEV";
      $ac = 'SLCODBC';
      $pwd = 'SLCODBC';
    break;
    case"SN1":
      $vdat = "172.16.4.137:1526/SN1";
      $ac = 'SLCODBC';
      $pwd = 'SLCODBC';
    break;
    case "PRD":
      $vdat = "172.16.4.30:1527/E68";
      $ac = 'SLCODBC';
      $pwd = 'SLCODBC';
      break;
    case "SND":  //add by �Ϊ� 2015.03.11 ������,SND���s�����հ�
      $vdat = "172.16.4.166:1526/SND";
      $ac = 'SLCODBC';
      $pwd = 'SLCODBC';
      break;
    case "SB1"://add by �h�Z 2015.06.23 utf8���հ�
      $vdat = "172.16.4.167:1527/SB1";
      $ac = 'SLCODBC';
      $pwd = 'SLCODBC';
      break;
    case "SB2"://add by �Ž� 2015.10.06 ���հ�
      $vdat = "172.16.4.167:1528/SB2";
      $ac = 'SLCODBC';
      $pwd = 'SLCODBC';
      break;
    case "SB3"://add by �h�Z 2018.12.26 ���հ�
      $vdat = "172.16.4.19:1527/SB3";
      $ac = 'SLCODBC';
      $pwd = 'SLCODBC';
      break;
  }
  //$vlink = oci_connect($ac,$pwd,$vdat,'WE8DEC');
  //$vlink = oci_pconnect($ac,$pwd,$vdat,'WE8DEC');
  $vlink = oci_pconnect($ac,$pwd,$vdat,'utf8');
  if(!$vlink) {
    die("�L�k�s���ioracle�j!!�Ь��`���q���β� \n");
  }
  return($vlink);
}

// **************************************************************************
//  ��ƦW��: u_chkuser()
//  ��ƥ\��: �ˬd�ϥΪ�
//  �ϥΤ覡: u_chkuser($�ϥΪ̥N��)
//  �{���]�p: Tony
//  �]�p���: 92.02.19
// **************************************************************************
function u_chkuser($vuser_no,$vuser_pw) {
  $v_chkok  = 'Y';                // �Ǧ^�ȬO�_���T
  global $mtable_pass; // �������u�n�J��

  $query = "select PASSWORD('$vuser_pw') as vuser_pw";
  $result = mysql_query($query);
  $row = mysql_fetch_row($result);
  list($vuser_pw) = $row;

  $query1  = "select * from $mtable_pass where empno='$vuser_no' and password='$vuser_pw' and state='Y' and d_date='0000-00-00 00:00:00'";
  $row1 = mysql_fetch_array(mysql_query($query1));
  if(empty($row1["empno"])) { // �S�����
    $v_chkok  = 'N'; // �Ǧ^�ȬO�_���T
    //u_msg(4,'center','FF0000','','��Ʀ��~!! ���~�N��:init: 01');
  }
  return($v_chkok);
}

// **************************************************************************
//  ��ƦW��: u_chk_run()
//  ��ƥ\��: �ˬd�O�_�i�H����
//  �ϥΤ覡: u_chk_run()
//  �{���]�p: Tony
//  �]�p���: 93.11.04
// **************************************************************************
function u_chk_run($f_var) {
  //echo  $f_var['ap_id'];
  Global $_SERVER;
  Global $_SESSION;
  Global $vlogin_mode;
  Global $mlogin; // �n�J����

  if (substr($_SERVER['PHP_SELF'],0,5) == '/~gas') {
    $f_var['ap_id'] = 'gas';
  }
  //var_dump($f_var);

  if(NULL<>$f_var['ap_id']) {
     sl_open('sl');
     $query2       = "select *
                             from ct
                             where d_date='0000-00-00' and empno='{$_SESSION["login_empno"]}' and ap_id='{$f_var['ap_id']}'
                             order by empno
                     ";

     //echo $query2;
     $row2 = mysql_fetch_array(mysql_query($query2));

     $vlogin_mode = $row2["mode"];
     if(NULL<>trim($vlogin_mode)) {
       $_SESSION["login_mode"] = $row2["mode"];
     }

  }
  else {
     $vlogin_mode  = $_SESSION["login_mode"]; // �v��
     //echo $vlogin_mode;
  }
  //echo $vlogin_mode.'-----';
  if($vlogin_mode!='1'&&$vlogin_mode!='2'&&$vlogin_mode!='3'&&$vlogin_mode!='4'&&$vlogin_mode!='5'&&$vlogin_mode!='6') {
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    if (substr($_SERVER['PHP_SELF'],0,5) == '/~gas') {// add by �p��20201127 �Ѥ�ѧ����֥i�H�i�o�~�`��
      if(strstr(sl_gas_ct($_SESSION['login_empno'], u_showproc()), u_showproc())){
        return;
      }else{
        //sl_errmsg('��p�I�z�L�v���ϥΪo�~�`���t�ΡA�p���ðݽЬ��`���q-�o�~�S�U ����815...<a href="http://'.$_SERVER['SERVER_NAME'].'">���I���n�J</a>');
        sl_errmsg('��p�I�z�L�v���ϥΪo�~�`���t�ΡA�o�~�H���жK���׳B�z�A��l�H���p���ðݽЬ��`���q-�o�~�S�U ����815...<a href="http://'.$_SERVER['SERVER_NAME'].'">���I���n�J</a>');
      }
    }else{
      sl_errmsg('��p�I�z�|���n�J�A���v���L�k�ϥΦ��t��...<a href="http://'.$_SERVER['SERVER_NAME'].'">���I���n�J</a>');
    }
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    //include_once("/home/sl/public_html/sl_footer.inc.php");
    exit;
  }
  return;
}
// **************************************************************************
//  ��ƦW��: sl_chk_ct()
//  ��ƥ\��: �ˬd�t�άO�_�i�H����
//  �ϥΤ覡: sl_chk_ct($f_var)
//  �{���]�p: Tony
//  �]�p���: 2007.07.04
// **************************************************************************
function sl_chk_ct($f_var) {
  //echo  $f_var['ap_id'];
  Global $_SESSION;
  global $mlogin; // �n�J����

  if(NULL<>$f_var['ap_id']) {
     sl_open('sl');
     $query2       = "select *
                             from ct
                             where d_date='0000-00-00 00:00:00' and empno='{$_SESSION["login_empno"]}' and ap_id='{$f_var['ap_id']}'
                             order by empno
                     ";

     //echo $query2;
     $row2 = mysql_fetch_array(mysql_query($query2));

     $vlogin_mode = $row2["mode"];
     $_SESSION["login_mode"] = $row2["mode"];
  }
  else {
     $vlogin_mode  = $_SESSION["login_mode"]; // �v��
  }
  //echo $vlogin_mode.'-----';
  if($vlogin_mode!='1'&&$vlogin_mode!='2'&&$vlogin_mode!='3'&&$vlogin_mode!='4'&&$vlogin_mode!='5'&&$vlogin_mode!='6') {
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    sl_errmsg('��p�I�z�|���n�J�A���v���L�k�ϥΦ��t��...<a href="http://'.$_SERVER['SERVER_NAME'].'">���I���n�J</a>');
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    include_once("sl_footer.inc.php");
    exit;
  }
  return;
}
// **************************************************************************
//  ��ƦW��: u_showdate()
//  ��ƥ\��: �q��� (�~���yyyy.mm.dd �� yy.mm.dd)
//  �ϥΤ覡: u_showdate($���,$���j�榡<'.'�B'/'�B'-'>)
//  �{���]�p: Tony
//  �]�p���: 92.02.17
// **************************************************************************
function u_showdate($vdate,$vstyle='.') { // $vstyle='.' = $vstyle �S���ǻ��ѼƮɪ��w�]��
  $vokdate = ''; // �^�Ǥ���ܼ�
  $vdatelen = strlen(trim($vdate)); // ����r�����
  switch ($vdatelen) {
    case 0: // empty
    $vokdate = '';
    break ;
    case 4: // yymm or mmdd
    $vokdate = substr($vdate,0,2).$vstyle.substr($vdate,2,2);
    break ;
    case 5: // yyymm
    $vokdate = substr($vdate,0,3).$vstyle.substr($vdate,3,2);
    break ;
    case 6: // yymmdd
    $vokdate = substr($vdate,0,2).$vstyle.substr($vdate,2,2).$vstyle.substr($vdate,4,2);
    break ;
    case 7: // yyymmdd
    $vokdate = substr($vdate,0,3).$vstyle.substr($vdate,3,2).$vstyle.substr($vdate,5,2);
    break ;
    case 8: // yyyymmdd
    $vokdate = substr($vdate,0,4).$vstyle.substr($vdate,4,2).$vstyle.substr($vdate,6,2);
    break ;
    default:
    $vokdate = '????';
    break ;
  }
  return($vokdate);
}
// **************************************************************************
//  ��ƦW��: u_title()
//  ��ƥ\��: �q�e���N���P�W��
//  �ϥΤ覡: u_title($�e�����Y,$�r���C��,$�I���C��)
//  �{���]�p: Tony
//  �]�p���: 92.02.13
// **************************************************************************
function u_title($vstr,$vfontcolor,$vgbcolor) {
  $vtoday    = date("Y.m.d");
  // 0123456789012345678
  //$vfilename = $GLOBALS["PHP_SELF"]; // �ثe�ɮצW�� (~/xxx/xxxx/xxxx.php)
  //$vfilelen  = strlen($vfilename);   // �ɮצr�����
  //$vstrrpos  = strrpos($vfilename,'/'); // '/' �̫�X�{��m �H�W�d�Ҭ� 11
  //$vprocname = substr($vfilename,$vstrrpos+1,($vfilelen-$vstrrpos-5)); // -5 ���q�X .php
  $vprocname = u_showproc();
     ?>
       <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
         <tr bgColor="#<? echo $vgbcolor;?>">
           <td width="30%" align="left">  <b><font color="#<? echo $vfontcolor;?>">�e��:&nbsp;<? echo $vprocname; ?></b></font></td>
           <td width="40%" align="center"><b><font color="#<? echo $vfontcolor;?>"><? echo $vstr; ?></b></font></td>
           <td width="30%" align="right"> <b><font color="#<? echo $vfontcolor;?>">���:&nbsp;<? echo $vtoday; ?></b></font></td>
         </tr>
       </table>
     <?
     return;
}
// **************************************************************************
//  ��ƦW��: u_msg()
//  ��ƥ\��: �q�T��
//  �ϥΤ覡: u_msg($�r���j�p,$��m,$�r���C��,$�I���C��,$�T��)
//  �{���]�p: Tony
//  �]�p���: 92.02.13
// **************************************************************************
function u_msg($vfontsize,$vtalign,$vcolor,$vbgcolor,$vmsg) {
  if(empty($vtalign)) {
    $vtalign = 'left'; // �w�]�m��
  }
     ?>
       <table border="0" cellspacing="0" cellpadding="0" width="100%">
         <tr bgColor="<? echo $vbgcolor;?>">
           <td width="100%" align="<?echo $vtalign;?>"><font size="<? echo $vfontsize;?>" color="#<? echo $vcolor;?>"><? echo $vmsg;?></font></td>
         </tr>
       </table>
     <?
     return;
}
// **************************************************************************
//  ��ƦW��: u_errmsg()
//  ��ƥ\��: �q�T��
//  �ϥΤ覡: u_errmsg($�r���j�p,$��m,$�r���C��,$�I���C��,$���~���C��,$�T��)
//            u_errmsg('2','left','000000','66FF00','FF9966','����x�s���\!!');
//  �{���]�p: Tony
//  �]�p���: 92.02.13
// **************************************************************************
function u_errmsg($vfontsize=2,$vtalign,$vcolor,$vbgcolor,$vbordercolor='FF9966',$vmsg) {
  if(empty($vtalign)) {
    $vtalign = 'left'; // �w�]�m��
  }
     ?>
       <table width="60%" border="1" cellpadding="3" cellspacing="0" bordercolor="<?=$vbordercolor;?>" class="font" style="border-collapse: collapse">
         <tr bgColor="<? echo $vbgcolor;?>">
           <td align="<?echo $vtalign;?>"><font size="<? echo $vfontsize;?>" color="#<? echo $vcolor;?>"><? echo $vmsg;?></font></td>
         </tr>
       </table>
       <br>
     <?
     return;
}
// **************************************************************************
//  ��ƦW��: u_bot()
//  ��ƥ\��: �������
//  �ϥΤ覡: u_bot()
//  �{���]�p: Tony
//  �]�p���: 92.02.13
// **************************************************************************
function u_bot() {
  global $mboturl;
  global $mbottitle;
     ?>
       <hr>
       <center>
         <font size="2">
           [ <A HREF="http://<? echo $mboturl;?>" target="_top"><? echo $mbottitle; ?></A> ]
         </font>
       </center>
       </body></html>
     <?
     return;
}
// **************************************************************************
//  ��ƦW��: u_showproc()
//  ��ƥ\��: �q�{���W��
//  �ϥΤ覡: u_showproc()
//  �{���]�p: Tony
//  �]�p���: 92.02.13
// **************************************************************************
function u_showproc() {
  //$vtoday    = date("Y.m.d");
  // 0123456789012345678
  //$vfilename = $GLOBALS["PHP_SELF"]; // �ثe�ɮצW�� (~/xxx/xxxx/xxxx.php) php.ini register_globals = On �~�i�H�ϥ�
  $vfilename = $_SERVER["PHP_SELF"];; // �ثe�ɮצW�� (~/xxx/xxxx/xxxx.php)
  $vfilelen  = strlen($vfilename);   // �ɮצr�����
  $vstrrpos  = strrpos($vfilename,'/'); // '/' �̫�X�{��m �H�W�d�Ҭ� 11
  $vprocname = substr($vfilename,$vstrrpos+1,($vfilelen-$vstrrpos-5)); // -5 ���q�X .php
  if ($_SERVER['PHP_SELF'] == '/~gas/main.php') {
    $vprocname = 'gas';
  }
  return($vprocname);
}
// **************************************************************************
//  ��ƦW��: u_sel()
//  ��ƥ\��: �s�W�B�ק�B�R���B�d�ߡB�C�L�I�ﶵ��
//  �ϥΤ覡: u_sel($�{���W��,$��m,$�i�οﶵ,$���i�ϥΪ��r���C��)
//  �{���]�p: Tony
//  �]�p���: 92.07.23
// **************************************************************************
function u_sel($vphpname,$vtalign,$vasel,$vdisfcolor,$vpage) {

  global $mbmaxline; // �C���̤j����
  global $msnum;    // �_�l����
  global $menum;    // ��������
  global $msel;     // �ثe���檬�p
  global $morder;   // ����

  if(empty($vpage)) {
    $vpage = 1;
  }

  //$msnum = $menum;
  $menum = $mbmaxline*$vpage;
  $msnum = $menum-$mbmaxline;
  $vppage = $vpage-1; // �W�@��
  $vnpage = $vpage+1; // �U�@��


  //global $mempname;
  //global $mlogintime;
     ?>
         <table border="0" cellspacing="3" cellpadding="3" width="100%">
           <tr>
             <td width="100%" align="<?echo $vtalign;?>">
               <font size="2">
     <?
     switch (count($vasel)) {
       case 4:
       if($vasel[0]=='Y') {
               ?>
                 [<a href='<?echo $vphpname;?>?msel=1&morder=<? echo $morder;?>&f_page=<?echo $vpage;?>'>�s�W</a>]
               <?
       }
       else {
               ?>
                 [<font color='<?echo $vdisfcolor;?>'>�s�W</font>]
               <?
       }

       if($vasel[1]=='Y') {
               ?>
                 [<a href='<?echo $vphpname;?>?msel=4&morder=<? echo $morder;?>&f_page=<?echo $vpage;?>'>�s��</a>]
               <?
       }
       else {
               ?>
                 [<font color='<?echo $vdisfcolor;?>'>�s��</font>]
               <?
       }

       if($vasel[2]=='Y') {
               ?>
                 [<a href='<?echo $vphpname;?>?msel=5&morder=<? echo $morder;?>&f_page=<?echo $vpage;?>'>�d��</a>]
               <?
       }
       else {
               ?>
                 [<font color='<?echo $vdisfcolor;?>'>�d��</font>]
               <?
       }
       if($vasel[3]=='Y') {
               ?>
                 [<a href='<?echo $vphpname;?>?msel=6&morder=<? echo $morder;?>&f_page=<?echo $vpage;?>'>�C�L</a>]
               <?
       }
       else {
               ?>
                 [<font color='<?echo $vdisfcolor;?>'>�C�L</font>]
               <?
       }
       break ;
       default:
             ?>
               <font color='<?echo $vdisfcolor;?>'>
                 [�s�W]
                 [�s��]
                 [�d��]
                 [�C�L]
               </font>
             <?
             break ;
     }
     ?>
          [<A href="<?echo $GLOBALS['mmenu'];?>">�^�D���</a>]
             </td>
             </font>
           </tr>
           <tr>
              <td width="100%" align="<?echo $vtalign;?>">
                 <font size="2">
                    <?
                    if(substr($msel,0,1)=='4') {
                      $vprocname = u_showproc(); // �{���W��
                      switch ($vprocname) {
                        case 'xxxxxxxxxxx':
                                 ?>
                                   [<a href='<? echo $vprocname ;?>.php?msel=4&morder=<? echo $morder;?>&f_page=1'>����</a>]
                                   [<a href='<? echo $vprocname ;?>.php?msel=4&morder=<? echo $morder;?>&f_page=<? echo $vppage;?>'>�W��</a>]
                                   [<a href='<? echo $vprocname ;?>.php?msel=4&morder=<? echo $morder;?>&f_page=<? echo $vnpage;?>'>�U��</a>]
                                 <?
                                 break ;
                                 default:
                                 ?>
                                   [<a href='<? echo $vprocname ;?>.php?msel=4&f_page=1'>����</a>]
                                   [<a href='<? echo $vprocname ;?>.php?msel=4&f_page=<? echo $vppage;?>'>�W��</a>]
                                   [<a href='<? echo $vprocname ;?>.php?msel=4&f_page=<? echo $vnpage;?>'>�U��</a>]
                                 <?
                                 break ;
                      }
                    }
                    else {
                        ?>
                          <font color='<?echo $vdisfcolor;?>'>
                            [����]
                            [�W��]
                            [�U��]
                          </font>
                        <?
                    }
                    if($vpage>=10) {
                      $vspace = '';
                    }
                    else {
                      $vspace = '&nbsp;&nbsp;';
                    }
                    ?>
                    [�����G<? echo $vspace;?><font color='009900'><? echo $vpage;?></font>]
                 </font>
              </td>
           </tr>
         </table>
     <?
}
return;
// **************************************************************************
//  ��ƦW��: u_showtime()
//  ��ƥ\��: �q�ɶ� (�ɤ�hh:mm)
//  �ϥΤ覡: u_showdate($�ɶ�,$���j�榡<':'�B'-'>)
//  �{���]�p: Tony
//  �]�p���: 92.07.23
// **************************************************************************
function u_showtime($vtime,$vstyle=':') { // $vstyle=':' = $vstyle �S���ǻ��ѼƮɪ��w�]��
  $voktime = ''; // �^�Ǯɶ��ܼ�
  $vtimelen = strlen(trim($vtime)); // �ɶ��r�����
  switch ($vtimelen) {
    case 0: // empty
    $voktime = '';
    break ;
    case 4: // hh:mm
    $voktime = substr($vtime,0,2).$vstyle.substr($vtime,2,2);
    break ;
    case 6: // hh:mm:ss
    $voktime = substr($vtime,0,2).$vstyle.substr($vtime,2,2).$vstyle.substr($vtime,4,2);
    break ;
    default:
    $voktime = '????';
    break ;
  }
  return($voktime);
}
// **************************************************************************
//  ��ƦW��: u_chkid()
//  ��ƥ\��: �����Ҧr���ˬd
//  �ϥΤ覡: u_chkid($vid)
//  �{���]�p: Tony
//  �]�p���: 92.10.30
//
//  upd by 2012.10.08 �Ϊ�
//  �W�[��ƥ\��: �����Ҧr���ˬd(�~�y�H�h)
//            �d�� :
//            GB20004930
//              1612000493  0                     --> �B�J�@
//            * 1987654321                        --> �B�J�G
//            -------------
//              1484000283 = 30 -> 0              --> �B�J�T
//                           0 ����10�X�ˬd�X   --> �B�J�|
//
//            GB00003982
//              1610000398  2
//            * 1987654321
//            -------------
//              1480000988 = 38 -> 8
//                           10 - 8 = 2
// **************************************************************************
function u_chkid($vid) {
  $vchk_ok = 'Y';
  $vid1 = $vid2 = $vid3 = $vid4 = $vid5 = $vid6 = $vid7 = $vid8 = $vid9 = $vid10 = '';
  if(empty($vid)||strlen($vid)<>10) {
    $vchk_ok = 'N';
  }
  else {
    $vid1  = ucfirst(substr($vid,0,1)); // �� 1�X
    $vid2  = substr($vid,1,1); // �� 2�X
    $vid3  = substr($vid,2,1); // �� 3�X
    $vid4  = substr($vid,3,1); // �� 4�X
    $vid5  = substr($vid,4,1); // �� 5�X
    $vid6  = substr($vid,5,1); // �� 6�X
    $vid7  = substr($vid,6,1); // �� 7�X
    $vid8  = substr($vid,7,1); // �� 8�X
    $vid9  = substr($vid,8,1); // �� 9�X
    $vid10 = substr($vid,9,1); // ��10�X
  }
  if( !is_numeric($vid2) ){  //add by �Ϊ� 2012.10.08 (��18375)�~�y�H�h�����ҧP�_
          // �r�������S�w��
          $ar_abc = array('10'=>'A','11'=>'B','12'=>'C','13'=>'D','14'=>'E','15'=>'F','16'=>'G','17'=>'H','34'=>'I','18'=>'J',
                          '19'=>'K','20'=>'L','21'=>'M','22'=>'N','35'=>'O','23'=>'P','24'=>'Q','25'=>'R','26'=>'S','27'=>'T',
                          '28'=>'U','29'=>'V','32'=>'W','30'=>'X','31'=>'Y','33'=>'Z');

          // �B�J�@ >> �N1~10�X���O��m���ܼƤ�
          $vid1  = array_search(ucfirst(substr($vid,0,1)),$ar_abc);  //ucfirst(substr($vid,0,1)); // �� 1�X
          $vid2  = substr(array_search(ucfirst(substr($vid,1,1)),$ar_abc),1,1);  //ucfirst(substr($vid,1,1)); // �� 2�X

          // �B�J�G >> ��1~9�X���O���H�S�w�� 1987654321
          $vidchk[0]  = substr($vid1,0,1);
          $vidchk[1]  = substr($vid1,1,1)*9;
          $vidchk[2]  = $vid2*8;
          $vidchk[3]  = $vid3*7;
          $vidchk[4]  = $vid4*6;
          $vidchk[5]  = $vid5*5;
          $vidchk[6]  = $vid6*4;
          $vidchk[7]  = $vid7*3;
          $vidchk[8]  = $vid8*2;
          $vidchk[9]  = $vid9*1;
          $vidchk[10] = $vid10;
          //print_r($vidchk);
          // �B�J�T >> �N1~9�X�ۭ���Ӧ�Ƭۥ[�`�M
          $vt = 0;
          for( $i=0;$i<(count($vidchk)-1);$i++){
            $vn = $vidchk[$i];
            if( $vidchk[$i]>=10 ){ //�����
              $vn = substr($vidchk[$i],1,1);
            }
            $vt += $vn;
          }
          // �ۥ[�������
          if( $vt>=10 ){
            $vt = substr($vt,1,1);
          }
          // �ˬd���X��10�Ьۭ���Ӧ�Ƭۥ[�`�M������
          if( $vt<>0 ){
            $vt = 10 - $vt;
          }
          // �B�J�| >> ���O�_�����ˬd�X
          if( $vt!=$vidchk[10] ){
            $vchk_ok = 'N';
          }
  }else{  //����H�h������
          switch ($vid1) { // �������r���Ĥ@�X
            case "A": //
            $vidnum1 = '10';
            break ;
            case "B": //
            $vidnum1 = '11';
            break ;
            case "C": //
            $vidnum1 = '12';
            break ;
            case "D": //
            $vidnum1 = '13';
            break ;
            case "E": //
            $vidnum1 = '14';
            break ;
            case "F": //
            $vidnum1 = '15';
            break ;
            case "G": //
            $vidnum1 = '16';
            break ;
            case "H": //
            $vidnum1 = '17';
            break ;
            case "I": //
            $vidnum1 = '34';
            break ;
            case "J": //
            $vidnum1 = '18';
            break ;
            case "K": //
            $vidnum1 = '19';
            break ;
            case "L": //
            $vidnum1 = '20';
            break ;
            case "M": //
            $vidnum1 = '21';
            break ;
            case "N": //
            $vidnum1 = '22';
            break ;
            case "O": //
            $vidnum1 = '35';
            break ;
            case "P": //
            $vidnum1 = '23';
            break ;
            case "Q": //
            $vidnum1 = '24';
            break ;
            case "R": //
            $vidnum1 = '25';
            break ;
            case "S": //
            $vidnum1 = '26';
            break ;
            case "T": //
            $vidnum1 = '27';
            break ;
            case "U": //
            $vidnum1 = '28';
            break ;
            case "V": //
            $vidnum1 = '29';
            break ;
            case "W": //
            $vidnum1 = '32';
            break ;
            case "X": //
            $vidnum1 = '30';
            break ;
            case "Y": //
            $vidnum1 = '31';
            break ;
            case "Z": //
            $vidnum1 = '33';
            break ;
            default:
            break ;
          }
          $vidchk0  = substr($vidnum1,0,1);
          $vidchk1  = substr($vidnum1,1,1)*9;
          $vidchk2  = $vid2*8;
          $vidchk3  = $vid3*7;
          $vidchk4  = $vid4*6;
          $vidchk5  = $vid5*5;
          $vidchk6  = $vid6*4;
          $vidchk7  = $vid7*3;
          $vidchk8  = $vid8*2;
          $vidchk9  = $vid9*1;
          $vidchk10 = $vid10;

          $vidchknum = $vidchk0+$vidchk1+$vidchk2+$vidchk3+$vidchk4+$vidchk5+$vidchk6+$vidchk7+$vidchk8+$vidchk9+$vidchk10;
          if($vidchknum%10<>0) { // ���l�ơA���~
            $vchk_ok = 'N';
          }
        }
        return($vchk_ok);
}
// **************************************************************************
//  ��ƦW��: u_checkID()
//  ��ƥ\��: �νs�ˬd
//  �ϥΤ覡: u_checkID($vid)
//  �{���]�p: �P�p��
//  �]�p���: 2014.12.11
// **************************************************************************
function u_checkID($vid){
  $tbNum = array(1,2,1,2,1,2,4,1);
   if(strlen($vid)!=8 || !eregi("^[0-9*]{8}",$vid)){//eregi���W��8�X���������Ʀr
     $vchk_ok = 'N';
     return $vchk_ok;
   }
   $intSum = 0;
   for($i = 0; $i < count($tbNum); $i++){
     $intMultiply=substr($vid,$i,1)*$tbNum[$i];
     $intAddition=(floor($intMultiply / 10) + ($intMultiply % 10));
     $intSum+=$intAddition;
   }
   if(($intSum % 10 == 0 ) || ($intSum%10==9 && substr($vid,6,1)==7)){
     $vchk_ok = 'Y';
   }else{
     $vchk_ok = 'N';
   }
        return($vchk_ok);
}
// **************************************************************************
//  ��ƦW��: u_chkemail()
//  ��ƥ\��: �q�l�l���ˬd
//  �ϥΤ覡: u_chkemail($vmail)
//  �{���]�p: Tony
//  �]�p���: 92.10.30
// **************************************************************************
function u_chkemail($vmail) {
  $vchk_ok = 'Y';
  if(empty($vmail)||strlen($vmail)<7||strpos($vmail,'@')===false||strpos($vmail,'.')===false) {
    $vchk_ok = 'N';
  }
  return($vchk_ok);
}
// **************************************************************************
//  ��ƦW��: u_bad_login()
//  ��ƥ\��: �n�J���~
//  �ϥΤ覡: u_bad_login()
//  �{���]�p: Tony
//  �]�p���: 93.02.12
// **************************************************************************
function u_bad_login() {
    ?>
      <script language="JavaScript">
      //window.location.replace('index.php'); // �^�n�J����
      alert('�n�J���~!!�Э��s�n�J..');
      //top.location.href='index.php'; // �^��n�J�e��
      top.location.replace(''); // �^�n�J����
      </script>
    <?
}

// **************************************************************************
//  ��ƦW��: u_que_form()
//  ��ƥ\��: �d�ߵe��
//  �ϥΤ覡: u_que_form($�{���W��,$����)
//  �{���]�p: Tony
//  �]�p���: 93.02.04
// **************************************************************************
function u_que_form($vproc,$vpage) {
     ?>
       <table border="0" width="100%">
          <tr>
              <td width="100%" align="left"><font color="#0000FF">��ܿ�J�z���j�M������r:</font></td>
          </tr>
       </table>
       <table border="0" width="100%">
         <form method="POST" action="<? echo $vproc; ?>.php?msel=51&f_page=<? echo $vpage ;?>">
           <tr>
             <td width="15%">�d�ߦr��G</td>
             <td width="85%"><input type="text" name="f_quetext" size="50"><font color="#0000FF" size="2">&nbsp;(�ť�=�d�ߥ���)</font></td>
           </tr>
           <tr>
             <td width="15%" align="center"></td>
             <td width="85%"><input type="submit" value="�T�w�d��" name="f_ok"><input type="reset" value="���s��J" name="f_reset"></td>
           </tr>
         </form>
       </table>
    <?
}

// **************************************************************************
//  ��ƦW��: u_qud()
//  ��ƥ\��: �I�� Q E D (�s�W�B�ק�B�R��)
//  �ϥΤ覡: u_qud($��,$�{���W��,$���W��,$����,$����)
//  �{���]�p: Tony
//  �]�p���: 2004.03.26
// **************************************************************************
function u_qed($vnum,$vprocname,$vfield_name,$vmfield_name,$vpage) {
  echo "<a href='".$vprocname."?msel=41&".$vfield_name."=".$vmfield_name."&f_page=".$vpage."'>";
  if($vnum%2==0) {
    echo '<font color="#009900">';
  }
  echo " Q";
  echo "</a>";
  echo " ";
  if($vnum%2==0) {
    echo '</font>';
  }
  echo "<a href='".$vprocname."?msel=21&".$vfield_name."=".$vmfield_name."&f_page=".$vpage."'>";
  if($vnum%2==0) {
    echo '<font color="#009900">';
  }
  echo " E";
  echo "</a>";
  echo " ";
  if($vnum%2==0) {
    echo '</font>';
  }
  echo "<a href='".$vprocname."?msel=31&".$vfield_name."=".$vmfield_name."&f_page=".$vpage."'>";
  if($vnum%2==0) {
    echo '<font color="#009900">';
  }
  echo " D";
  echo "</a>";
  echo " ";
  return;
}
// **************************************************************************
//  ��ƦW��: u_chk_badword()
//  ��ƥ\��: ż�r�ˬd
//  �ϥΤ覡: u_chk_badword($vchkfield)
//  �{���]�p: Tony
//  �]�p���: 2004.04.05
// **************************************************************************
function u_chk_badword($vchkfield,$vsel) {
  global $mdat1;    // ��Ʈw
  global $mtable24; // �d�����]�w-ż�r

  u_open($mdat1); // �}�Ҹ�Ʈw
  // ż�r�L�o
  $mchk_ok = 'Y'; // �O�_���T�A�i�H�x�s
  $query1       = "select zl024_1,zl024_2,zl024_3,zl024_4,zl024_5,zl024_6,zl024_9,zl024_10
                             from $mtable24
                             where zl024_1='$vsel' and d_date='0000-00-00 00:00:00'
                     ";
  $result1      = mysql_query($query1);
  $row1 = mysql_fetch_row($result1);
  list($mzl024_1,$mzl024_2,$mzl024_3,$mzl024_4,$mzl024_5,$mzl024_6,$mzl024_9,$mzl024_10) = $row1;
  $abadword     = explode(',',$mzl024_9); //�r����� ��,�x......�� ',' �Ϥ� $abadword[0] = '��' ; $abadword[1] = '�x'
  $abadwordlen  = count($abadword); // ż�r�r��
  $abadword1    = explode(',',$mzl024_10); //�r�����
  $abadword1len = count($abadword1); // ż�r�r��
  //echo 'mzl021_9:'.$mzl024_9.'<br>';
  //echo 'mzl021_10:'.$mzl024_10.'<br>';
  //echo 'f_zl021_9:'.$f_zl021_9.'<br>';
  for($ii=0;$ii<=$abadwordlen;$ii++) {
    if($mchk_ok=='N'){  // ���i�H�x�s
      break;
    }

    $mbadpos1 = strpos($vchkfield,$abadword[$ii]); // �O�_���X�{�bż�r�L�o��
    //echo 'mbadpos1:'.$mbadpos1.'<br>';
    //echo 'abadword[ii]:'.$abadword[$ii].'<br>';
    if($mbadpos1===false) { // �S���X�{�A�i�H�q�L
      // �~��j�M�U�@��
    }
    else {
      for($jj=0;$jj<=$abadword1len;$jj++) {
        $mbadpos2 = strpos($vchkfield,$abadword1[$jj]); // �O�_���X�{�b�i�q�L��ż�r..
        //echo 'mbadpos2:'.$mbadpos1.'<br>';
        //echo 'abadword[jj]:'.$abadword1[$jj].'<br>';
        if($mbadpos2===false) { // �S���X�{�A���i�H�q�L
          $mchk_ok = 'N'; // ���i�H�x�s
        }
        else {
          $mchk_ok = 'Y'; // �i�H�x�s
          break;
        }

      }
    }
  }
  return($mchk_ok);
}
// **************************************************************************
//  ��ƦW��: u_add_select()
//  ��ƥ\��: �W�[ select �����
//  �ϥΤ覡: u_add_select('xxx.txt')
//  �{���]�p: Tony
//  �]�p���: 2004.04.14
// **************************************************************************
function u_add_select($vfile) {
  $vopenfile = file($vfile);
  foreach($vopenfile as $vlist) { // �v��Ū�X
    $vdatalen = strlen(trim($vlist));     // ��ƪ���
    $vdatapos = strpos(trim($vlist),";"); // ; ����m
        ?>
          <option value="<? echo trim(substr(trim($vlist),0,$vdatapos));?>">
             <? echo trim(substr(trim($vlist),$vdatapos+1,$vdatalen-$vdatapos));?>
          </option>
        <?
  }
}
// **************************************************************************
//  ��ƦW��: u_add_select1()
//  ��ƥ\��: �W�[ select ����ơA��x�ϥ�
//  �ϥΤ覡: u_add_select('xxx.txt','���W��')
//  �{���]�p: Tony
//  �]�p���: 2004.04.14
// **************************************************************************
function u_add_select1($vfile,$vfieldname) {
  global $aadd_f_select;
  $vopenfile = file($vfile);
  foreach($vopenfile as $vlist) { // �v��Ū�X
    $vdatalen = strlen(trim($vlist));     // ��ƪ���
    $vdatapos = strpos(trim($vlist),";"); // ; ����m
    $aadd_f_select[$vfieldname]['value'][] = trim(substr(trim($vlist),0,$vdatapos));
    $aadd_f_select[$vfieldname]['show'][]  = trim(substr(trim($vlist),$vdatapos+1,$vdatalen-$vdatapos));
  }
}
// **************************************************************************
//  ��ƦW��: u_add_select2()
//  ��ƥ\��: �W�[ select �����-TemplatePower �ϥ�
//  �ϥΤ覡: list($adept_value,$adept_show,$mdept_qty) = u_add_select2('xxx.txt')
//  �{���]�p: Tony
//  �]�p���: 2004.04.14
// **************************************************************************
function u_add_select2($vfile) {
  $vopenfile = file($vfile);
  if( !empty($vopenfile) ){
    foreach($vopenfile as $key => $vlist) { // �v��Ū�X
      $vdatalen = strlen(trim($vlist));     // ��ƪ���
      $vdatapos = strpos(trim($vlist),";"); // ; ����m
      $avalue[] = trim(substr(trim($vlist),0,$vdatapos));
      $ashow[]  = trim(substr(trim($vlist),$vdatapos+1,$vdatalen-$vdatapos));
    }
  }
  else{
    sl_errmsg("�L�k�}��{$vfile}");
  }

  return array($avalue,$ashow,count($avalue));
}

// **************************************************************************
//  ��ƦW��: sl_add_select3()
//  ��ƥ\��: �W�[ select �����- Ū�� mysql ���
//  �ϥΤ覡:
//            $mfd_show  = array('fy01','fy02');
//            $mfd_value = array('fy01');
//            list($f_var['pp12_show'],$f_var['pp12_value']) = sl_add_select3($f_var['mdb'],$f_var['mtable']['factory'],'1=1','fy01',$mfd_show,$mfd_value);
//  �{���]�p: Tony
//  �]�p���: 2004.04.14
// **************************************************************************
function sl_add_select3($vdb,$vtable,$vwhere,$vorder,$vfd_show,$vfd_value) {
   sl_open($vdb); // �}�Ҹ�Ʈw
   $query1  = "select *
                      from $vtable
                      where $vwhere
                      order by $vorder
              ";
  //   echo $query1."<BR>";

   $result1  = mysql_query($query1);
   $ashow[]  = '--�п��--';
   $avalue[] = '--';
   while ($row1 = mysql_fetch_array($result1)) {
          $vvalue = '';

          $vshow     = '';
          $mshow_cnt = count($vfd_show);
          for($i=0;$i<$mshow_cnt;$i++) {
              $vshow .= $row1[ $vfd_show[$i] ];
               //echo $vshow."<BR>";
              if($mshow_cnt-1>$i) {
                 $vshow .= '-';
              }
          }

          $vvalue     = '';
          $mvalue_cnt = count($vfd_value);
          for($i=0;$i<$mvalue_cnt;$i++) {
              $vvalue .= $row1[ $vfd_value[$i] ];
              if($mvalue_cnt-1>$i) {
                 $vvalue .= '-';
              }
          }
          $ashow[]  = $vshow;
          $avalue[] = $vvalue;
          //echo $vvalue.'<br>';
   }
   mysql_close();
   return array($ashow,$avalue);
}


// **************************************************************************
//  ��ƦW��: sl_add_select4()
//  ��ƥ\��: �W�[ select �����- Ū�� mssql-flow ���
//  �ϥΤ覡:
//            $mfd_show  = array('fy01','fy02');
//            $mfd_value = array('fy01');
//            list($f_var['pp12_show'],$f_var['pp12_value']) = sl_add_select3($f_var['mdb'],$f_var['mtable']['factory'],'1=1','fy01',$mfd_show,$mfd_value);
//  �{���]�p: Mimi
//  �]�p���: 2008.07.03
// **************************************************************************
function sl_add_select4($vdb,$vtable,$vwhere,$vorder,$vfd_show,$vfd_value) {
   u_openef2k($vdb); // �}�Ҹ�Ʈw
   $query1  = "select *
                      from $vtable
                      where $vwhere
                      order by $vorder
              ";
     //echo $query1."<BR>";

   $result1  = mssql_query($query1);
   $ashow[]  = '--�п��--';
   $avalue[] = '--';
   while ($row1 = mssql_fetch_array($result1)) {
          $vvalue = '';

          $vshow     = '';
          $mshow_cnt = count($vfd_show);
          for($i=0;$i<$mshow_cnt;$i++) {
              $vshow .= $row1[ $vfd_show[$i] ];
               //echo $vshow."<BR>";
              if($mshow_cnt-1>$i) {
                 $vshow .= '-';
              }
          }

          $vvalue     = '';
          $mvalue_cnt = count($vfd_value);
          for($i=0;$i<$mvalue_cnt;$i++) {
              $vvalue .= $row1[ $vfd_value[$i] ];
              if($mvalue_cnt-1>$i) {
                 $vvalue .= '-';
              }
          }
          $ashow[]  = $vshow;
          $avalue[] = $vvalue;
          //echo $vvalue.'<br>';
   }
   mssql_close();
   return array($ashow,$avalue);
}

// **************************************************************************
//  ��ƦW��: sl_add_select5()
//  ��ƥ\��: �W�[ select �����- Ū�� mssql-flow ���
//  �ϥΤ覡:
//            $mfd_show  = array('fy01','fy02');
//            $mfd_value = array('fy01');
//            list($f_var['pp12_show'],$f_var['pp12_value']) = sl_add_select3($f_var['mdb'],$f_var['mtable']['factory'],'1=1','fy01',$mfd_show,$mfd_value);
//  �{���]�p: Mimi
//  �]�p���: 2009.08.06
// **************************************************************************
function sl_add_select5($vdb,$vtable,$vwhere,$vorder,$vfd_show,$vfd_value) {
   sl_openrtm($vdb); // �}�Ҹ�Ʈw
   $query1  = "select *
                      from $vtable
                      where $vwhere
                      order by $vorder
              ";
     //echo $query1."<BR>";

   $result1  = mysql_query($query1);
   $ashow[]  = '--�п��--';
   $avalue[] = '--';
   while ($row1 = mysql_fetch_array($result1)) {
          $vvalue = '';

          $vshow     = '';
          $mshow_cnt = count($vfd_show);
          for($i=0;$i<$mshow_cnt;$i++) {
              $vshow .= $row1[ $vfd_show[$i] ];
               //echo $vshow."<BR>";
              if($mshow_cnt-1>$i) {
                 $vshow .= '-';
              }
          }

          $vvalue     = '';
          $mvalue_cnt = count($vfd_value);
          for($i=0;$i<$mvalue_cnt;$i++) {
              $vvalue .= $row1[ $vfd_value[$i] ];
              if($mvalue_cnt-1>$i) {
                 $vvalue .= '-';
              }
          }
          $ashow[]  = $vshow;
          $avalue[] = $vvalue;
          //echo $vvalue.'<br>';
   }
   mysql_close();
   return array($ashow,$avalue);
}
// **************************************************************************
//  ��ƦW��: u_chg_num()
//  ��ƥ\��: ���ԧB�Ʀr�ഫ��r
//  �ϥΤ覡: u_chg_num($�Ʀr,$����),�p�G$vkind=2,�ഫ�j�g��r
//  �{���]�p: Tony
//  �]�p���: 2004.04.19
//  �ק�{��: Mimi
//  �]�p���: 2009.01.22
// **************************************************************************
function u_chg_num($vnum,$vkind) {
  $vrtn_str = '';
  $vkind = iif($vkind=='','1',$vkind);
  if($vkind=='2'){
    switch ($vnum) {
      case 0:
      $vrtn_str = '�s';
      break;
      case 1:
      $vrtn_str = '��';
      break;
      case 2:
      $vrtn_str = '�L';
      break;
      case 3:
      $vrtn_str = '��';
      break;
      case 4:
      $vrtn_str = '�v';
      break;
      case 5:
      $vrtn_str = '��';
      break;
      case 6:
      $vrtn_str = '��';
      break;
      case 7:
      $vrtn_str = '�m';
      break;
      case 8:
      $vrtn_str = '��';
      break;
      case 9:
      $vrtn_str = '�h';
      break;
    }
  }
  else{
    switch ($vnum) {
      case 0:
      $vrtn_str = '��';
      break;
      case 1:
      $vrtn_str = '�@';
      break;
      case 2:
      $vrtn_str = '�G';
      break;
      case 3:
      $vrtn_str = '�T';
      break;
      case 4:
      $vrtn_str = '�|';
      break;
      case 5:
      $vrtn_str = '��';
      break;
      case 6:
      $vrtn_str = '��';
      break;
      case 7:
      $vrtn_str = '�C';
      break;
      case 8:
      $vrtn_str = '�K';
      break;
      case 9:
      $vrtn_str = '�E';
      break;
      case 10:
      $vrtn_str = '��';
      break;
      case 11:
      $vrtn_str = '�̤@';
      break;
      case 12:
      $vrtn_str = '�̤G';
      break;
    }
  }
  return($vrtn_str);
}
// **************************************************************************
//  ��ƦW��: u_upload()
//  ��ƥ\��: �ɮפW��
//  �ϥΤ覡: u_upload($vsfile,$vtfile,$vtfsize,$vtftype,$vfpath)
//  �{���]�p: Tony
//  �]�p���: 2004.05.28
// **************************************************************************
function u_upload($vsfile,$vtfile,$vtfsize,$vtftype,$vfpath) {
  //echo $vsfile.','.$vsfile.','.$vtfile.','.$vtfsize.','.$vtftype.','.$vfpath;exit;
  $mstrrpos = strrpos($vtfile,".");
  if(!empty($vtfile)) {
    $msubname = substr($vtfile,$mstrrpos+1,3);

    if($msubname=="jpg"||$msubname=="JPG"||$msubname=="gif"||$msubname=="GIF") {
      $vtcpfile = $vtfile; // �x�s��
            ?>
              <script language="javascript">
              //fshowmsg.innerHTML='�ɮפW�Ǥ�...�еy��...';
              </script>
            <?
            //if(copy( $vsfile, "$vfpath".$vtfile)) {
            if(copy( $vsfile, $vfpath.$vtfile)) {
              // �W�Ǧ��\
            }
            else {
              $mchk_err = 'N';
               ?>
                 <script language="javascript">
                 alert("�W���ɮץ���!!�Э��s�W���ɮ�...");
                 history.go(-1) // �^�W�@��
                 </script>
               <?
            }
    }
    else {
      $mchk_err = 'N';
           ?>
             <script language="javascript">
             alert("�ɮ׮榡���~!!�Ы��W�@�����s�W���ɮ�...");
             history.go(-1) // �^�W�@��
             </script>
           <?
    }
  }
  //echo $vtcpfile.'up';exit;
  return($vtcpfile);
}

// **************************************************************************
//  ��ƦW��: u_int()
//  ��ƥ\��: �����(�h���p�ƭ�)
//  �ϥΤ覡: u_int($�Ʀr)
//  �{���]�p: Tony
//  �]�p���: 2004.06.11
// **************************************************************************
function u_int($vint) {
  $vrtn_int = $vint;           // �^�ǭ�
  $avint = explode('.',$vint); // �H . ���θ�ơA�h���p���I
  if(count($avint)>0) { // ���p���I
    $vrtn_int = $avint[0];           // ����
  }
  return($vrtn_int);
}

// **************************************************************************
//  ��ƦW��: u_count_upd()
//  ��ƥ\��: ��s�p�ƾ�
//  �ϥΤ覡: u_count_upd($vfield_name)
//  �{���]�p: Tony
//  �]�p���: 2004.07.08
// **************************************************************************
function u_count_upd($vfield_name) {
  global $mtable2;

  $vfromip  = $_SERVER["REMOTE_ADDR"]; // ���� IP
  $vzc02_where = "zc02_2 = '".$vfield_name."' and d_date='0000-00-00 00:00:00'";

  $query2  = "update $mtable2 set   zc02_3    = (zc02_3+1),
                                       fromip    = '$vfromip'
                                 where $vzc02_where
                ";
  //echo $query2;exit;
  if(!mysql_query($query2)) { // �g�J����
        ?>
          <script language="javascript">
          alert("�p�ƾ���Ƽg�J����!!\n���p���޲z�H��!!")
          </script>
        <?

  }
  return;
}

// **************************************************************************
//  ��ƦW��: u_count_list()
//  ��ƥ\��: �q�X�p�ƾ��A�^�ǰ}�C
//  �ϥΤ覡: u_count_list($vfield_name)
//  �{���]�p: Tony
//  �]�p���: 2004.07.08
// **************************************************************************
function u_count_list($vfield_name) {
  global $mtable2;

  $vzc02_where = "zc02_2 = '".$vfield_name."' and d_date='0000-00-00 00:00:00'";

  $query2       = "select zc02_1,zc02_2,zc02_3
                             from $mtable2
                             where $vzc02_where
                             order by zc02_1 desc
                     ";
  //echo $query1;exit;

  $result2      = mysql_query($query2);
  $row2 = mysql_fetch_row($result2);
  list($mzc02_1,$mzc02_2,$mzc02_3) = $row2;
  //echo $mzc02_2.'<br>';
  //echo $mzc02_3.'<br>';
  //exit;
  for($ii=0;$ii<strlen($mzc02_3);$ii++) {
    if(substr($mzc02_3,$ii,1)=='0') {
      $azc02_3[]='010.gif';
    }
    else {
      $azc02_3[]='00'.substr($mzc02_3,$ii,1).'.gif';
    }
  }
  //return array($azc02_3);
  return($azc02_3);
}

// **************************************************************************
//  ��ƦW��: u_upd_log();
//  ��ƥ\��: �q�X�p�ƾ��A�^�ǰ}�C
//  �ϥΤ覡: u_upd_log($vfile_name,$vdata)
//  �{���]�p: Tony
//  �]�p���: 2004.09.30
// **************************************************************************
function u_upd_log($vfile_name,$vdata) {
  $vfileopen = fopen($vfile_name,'a+');
  if(fwrite($vfileopen,$vdata)) { // �N��Ƽg�J
    //u_msg('2','left','000000','66FF00','FF9966',$itm_name.'����x�s���\!!');
  }
  else {
    //u_msg('2','left','000000','66FF00','FF9966',$itm_name.'����x�s����!!');
  }
  fclose($vfileopen); // �����ɮ�
  return;
}
// **************************************************************************
//  ��ƦW��: u_yymmdd2yyyymmdd()
//  ��ƥ\��: ��������褸���
//  �ϥΤ覡: u_yymmdd2yyyymmdd($vdate)
//  �ϥΤ覡: u_yymmdd2yyyymmdd($vdate,$vstyle) �Ȯɨ���
//  �{���]�p: Tony
//  �]�p���: 2004.10.18
// **************************************************************************
function u_yymmdd2yyyymmdd($vdate) {
  $vrtn_date = '';  // �^�Ǥ��
  if(strlen($vdate)!=6) {
    $vrtn_date = 'error!!';  // �^�Ǥ��
  }
  else {
    $vyy = substr($vdate,0,2)+1911;
    $vrtn_date = $vyy.substr($vdate,2,2).substr($vdate,4,2); // �^�Ǥ��
    //$vrtn_date = $vyy.$vstyle.substr($vdate,2,2).$vstyle.substr($vdate,4,2); // �^�Ǥ��
  }
  return($vrtn_date);
}
function u_yyyymmdd2yymmdd($vdate) {
  $vrtn_date = '';  // �^�Ǥ��
  if(strlen($vdate)!=8) {
    $vrtn_date = 'error!!';  // �^�Ǥ��
  }
  else {
    $vyy = substr($vdate,0,4)-1911;
    $vrtn_date = $vyy.substr($vdate,4,2).substr($vdate,6,2); // �^�Ǥ��
  }
  return($vrtn_date);
}
// **************************************************************************
//  ��ƦW��: u_add_space()
//  ��ƥ\��: ?��ɪť?
//  �ϥΤ覡: u_add_space("�r��","����","�n�ɪ��r��",$valign='left') {
//  �{���]�p: Tony
//  �]�p���: 2005.06.14
// **************************************************************************
function u_add_space($vstr,$vlen,$addstr=' ',$valign='left') {
  $vrtn_str  = "";
  $voldlen   = strlen($vstr);
  $maddspace = $vlen-$voldlen;
  //echo $maddspace.'-';
  if($maddspace<=0) {
    $maddspace = 0;
  }
  //echo '('.$vlen.'-'.$voldlen.')='.$maddspace;
  if($valign=='left') {
    //echo $vstr.str_repeat(' ',$maddspace);
    $vrtn_str = $vstr.str_repeat($addstr,$maddspace);
  }
  else {
    //echo str_repeat(' ',$maddspace).$vstr;
    $vrtn_str = str_repeat($addstr,$maddspace).$vstr;
  }
  //echo '('.$maddspace.')';
  //echo '('.$vlen-$voldlen.')';
  //echo ' ';
  return($vrtn_str);
}
// **************************************************************************
//  ��ƦW��: sl_send_msg()
//  ��ƥ\��: �ǰe�T��
//  �ϥΤ覡: sl_send_msg(�H��̭��s,����̭��s,�D��,���e);
//  �{���]�p: Tony
//  �]�p���: 2005.06.14
// **************************************************************************
function sl_send_msg($vmb05='it',$vmb07,$vmb10,$vmb11,$scnt='0') {
  global $mdat1;       // ��Ʈw
  global $mtable_ap;   // �t�ι�ӥD��
  global $mtable_dept; // �t����ӥD�ɤU�� 04:32 2011/11/17
  global $mtable_ct;   // �������u������
  global $mtable_pass; // �������u�n�J��.
  include_once('/home/docs/public_html/message/message_init.php');  // �T�����ߦ@�Ψ��



  // ��M����ϥΦ۰ʶǰe�T��,�QMark �u��...�Ȯɨ���Mark 2008-03-31 by Tony

  $vchk_rtn                  = 'N'; // �ǰe�O�_���\�AN=���ѡBY=���\
  $mmsg_file                 = '/home/docs/public_html/message/msgid.itm';      // �T���N����
  $mtable_message_box        = "message_box_new";       // �T���X
  $mtable_message_trace      = "message_trace";     // �H��X/�l��-�D��
  $mtable_message_trace_sub  = "message_trace_sub"; // �H��X/�l��-������
  $mtable_message_my_book    = "message_my_book";   // ?q�T��
  $mtable_message_del        = "message_del";       // �ӤH�T��_�R���ƥ��X

  //echo $vmb01.'<br>'; // �T���N��
  //echo $vmb02.'<br>'; // ��ƧX�N��
  //echo $vmb03.'<br>'; // �H��̳����N��
  //echo $vmb04.'<br>'; // �H��̳����W��
  //echo $vmb05.'<br>'; // �H��̥N��
  //echo $vmb06.'<br>'; // �H��̩m�W
  //echo $vmb07.'<br>'; // ����̥N��
  //echo $vmb08.'<br>'; // ����̩m�W
  //echo $vmb09.'<br>'; // Ū������
  //echo $vmb10.'<br>'; // �D��
  //echo $vmb11.'<br>'; // ���e
  //echo $vmb12.'<br>'; // �̫᪬�A
  //echo $vmb13.'<br>'; // �̫᪬�A���
  //exit;

  if(NULL==$vmb05 || NULL==$vmb07 || NULL==$vmb10 || NULL==$vmb11) { // ����ƨS���ǤJ�A�N�����s�W
    u_errmsg('3','left','FFFFFF','FF0000','FF9966','�ǰe�T�����ѡI�I���p����T���I�I���~�N�X�Ge_message_add_001');
    exit;
  }

  u_open($mdat1);
  //---------- �H��̳����N����Ƨ�� ----------//
  //$query_dept  = "select * from $mtable_dept
  //                         where dept_id='$vmb03' and d_date='0000-00-00 00:00:00'
  //           ";
  //
  ////echo $query_dept;exit;
  //$row_dept = mysql_fetch_array(mysql_query($query_dept));
  //$vmb04 = $row_dept["dept_name"]; // �H��̳����W��
  //---------- �H��̳����N����Ƨ�� ----------//

  //---------- �H��̸�Ƨ�� ----------//
  $query_pass1  = "select $mtable_pass.*,$mtable_dept.dept_name
                               from $mtable_pass
                               left join $mtable_dept on $mtable_dept.dept_id=$mtable_pass.dept_id
                               where $mtable_pass.empno='$vmb05' and $mtable_pass.d_date='0000-00-00 00:00:00'
                       ";

  //echo $query_pass1."<br>\n";
  $row_pass1 = mysql_fetch_array(mysql_query($query_pass1));
  $vmb03 = $row_pass1["dept_id"];   // �H��̳����N��
  $vmb04 = $row_pass1["dept_name"]; // �H��̳����W��
  $vmb06 = $row_pass1["name"]; // �H��̩m�W
  //---------- �H��̸�Ƨ�� ----------//

  //---------- ����̸�Ƨ�� ----------//
  $query_pass2  = "select * from $mtable_pass
                                 where empno='$vmb07' and d_date='0000-00-00 00:00:00'
                       ";

  //echo $query_pass2."<br>\n";
  //echo $mdat1;

  $row_pass2 = mysql_fetch_array(mysql_query($query_pass2));
  $vmb08 = addslashes($row_pass2["name"]); // ����̩m�W
  //---------- ����̸�Ƨ�� ----------//
  //mysql_close(); // ������Ʈw
  if(NULL<>$vmb08) {
     if(NULL==$vmb04 || NULL==$vmb06 || NULL==$vmb08) { // ����ƨS���d�ߨ�W��
       u_errmsg('3','left','FFFFFF','FF0000','FF9966',$vmb06.'-'.$vmb04.'-'.$vmb08.'-�ǰe�T�����ѡI�I���p����T���I�I���~�N�X�Ge_message_add_002');
       exit;
     }
  } else {
    return($vchk_rtn);
  }



  $vmb02 = "A"; // ��ƧX�N�� A=�s�T��
  $vmb12 = "1"; // �̫᪬�A 1=��Ū��


  $mmsg_ok = '��Ʒs�W���\!';
  $mmsg_ng = '��Ʒs�W����';
  $mmsg_ng_num  = '178534';
  $mmsg_ng_num2 = '243673';

  $query_data  = '';
  $query_data2 = '';



  $login_empno = $vmb05; // ����̭��s
  $mb_date  = date("Y-m-d H:i:s");     // ���ɤ���ɶ�
  $m_date   = date("Y-m-d H:i:s");     // ���ɤ���ɶ�
  $m_proc   = u_showproc();            // ���ɵ{���W��
  $mfromip  = $_SERVER["REMOTE_ADDR"]; // ���� IP
  $mmb01  = u_get_lastno($mmsg_file,'r'); // Ū���U�@�Ӹ��X
  $query_data = " insert into $mtable_message_box (s_num,
                                                      mb01 ,
                                                      mb02 ,
                                                      mb03 ,
                                                      mb04 ,
                                                      mb05 ,
                                                      mb06 ,
                                                      mb07 ,
                                                      mb08 ,
                                                      mb09 ,
                                                      mb10 ,
                                                      mb11 ,
                                                      mb12 ,
                                                      mb13 ,

                                                      b_empno,
                                                      b_proc ,
                                                      b_date ,
                                                      fromip
                                                     )
                                              values (0,
                                                      '$mmb01'  ,
                                                      '$vmb02'  ,
                                                      '$vmb03'  ,
                                                      '$vmb04'  ,
                                                      '$vmb05'  ,
                                                      '".stripslashes($vmb06)."'  ,
                                                      '$vmb07'  ,
                                                      '".stripslashes($vmb08)."'  ,
                                                      '$vmb09'  ,
                                                      '$vmb10'  ,
                                                      '$vmb11'  ,
                                                      '$vmb12'  ,
                                                      '$m_date'  ,
                                                      '$login_empno',
                                                      '$m_proc' ,
                                                      '$m_date' ,
                                                      '$mfromip'
                                                     )
                   ";

  //if('it'!=$vmb05){//add Mimi 2008-02-19 �p�G�O�t�εo�e���N���s�l��
    $query_data2 = " insert into $mtable_message_trace (s_num,
                                                           mt01 ,
                                                           mt02 ,
                                                           mt03 ,
                                                           mt04 ,
                                                           mt05 ,
                                                           mt06 ,
                                                           mt07 ,
                                                           mt08 ,
                                                           mt09 ,
                                                           mt10 ,
                                                           mt11 ,
                                                           mt12 ,
                                                           mt13 ,

                                                           b_empno,
                                                           b_proc ,
                                                           b_date ,
                                                           fromip
                                                          )
                                                   values (0,
                                                           '$mmb01'  ,
                                                           '$vmb02'  ,
                                                           '$vmb03'  ,
                                                           '$vmb04'  ,
                                                           '$vmb05'  ,
                                                           '".stripslashes($vmb06)."'  ,
                                                           '$vmb07'  ,
                                                           '".stripslashes($vmb08)."'  ,
                                                           '$vmb09'  ,
                                                           '$vmb10'  ,
                                                           '$vmb11'  ,
                                                           '$vmb12'  ,
                                                           '$m_date'  ,
                                                           '$login_empno',
                                                           '$m_proc' ,
                                                           '$m_date' ,
                                                           '$mfromip'
                                                          )
                      ";

  //}

  //echo $query_data.'<br>';
  //echo $query_data2.'<hr>';
  //exit;
  $proc = u_showproc();
  u_open1('message_center');
  if($query_data<>NULL) {
    if(!mysql_query($query_data)) { // �g�J����
      u_errmsg('3','left','FF99FF','FF0000','FF9966',$query_data.'<br>'.$mmsg_ng.'�A�ЦA�դ@��...errno:'.$mmsg_ng_num.'<br>�нT�{����ΥD���O�_���ϥΨ�²��r�ΥH�U�ĽX�r����<br>�\�B�\�B�\�B�\�B�\�B<br>
                                                                                                                                                                                 �\�B�\�B�\�B�\�B�\�B<br>
                                                                                                                                                                                 �\�B�\�B�\�B�\�B�\�B<br>
                                                                                                                                                                                 �\�B�\�B�\�B�\�B�\�B<br>
                                                                                                                                                                                 �\�B�\�B�\�B�\�B�\�B<br>
                                                                                                                                                                                 �\�B�\�B�\�B�\�B�\�B<br>
                                                                                                                                                                                 �\�B�\�B�\�B�\�B�\�B<br>
                                                                                                                                                                                 �|�B�|�B�|�B�|�B�|�B<br>
                                                                                                                                                                                 �|�B�|�B�|�B�|�B�|�B<br>
                                                                                                                                                                                 �|�B�|�B�|�B�|�B�|�B<br>
                                                                                                                                                                                 �|�B�|�B�|�B�|�B�|�B<br>
                                                                                                                                                                                 �|�B�|�B�|�B�|�B�|�B<br>
                                                                                                                                                                                 �|�B�|�B�|�B�|�B�|�B<br>
                                                                                                                                                                                 �|�B�|�B�|�B�|�B�|<br>�i�H�b�̫�@�Ӧr��[���I�Ÿ��ư����~�C<br>EX:�D���G�аѾ\�אּ�аѾ\~');
      $vchk_rtn = 'NG'; // �ǰe�O�_���\�AN=���ѡBY=���\
    }
  }
  if($query_data2<>NULL) {
    if(!mysql_query($query_data2)) { // �g�J����
      u_errmsg('3','left','FF99FF','FF0000','FF9966',$query_data2.'<br>'.$mmsg_ng.'�A�ЦA�դ@��...errno:'.$mmsg_ng_num2);
      $vchk_rtn = 'NG'; // �ǰe�O�_���\�AN=���ѡBY=���\
    }
  }
  //mysql_close(); // ������Ʈw
  u_get_lastno($mmsg_file,'w'); // �g�J�U�@�Ӹ��X
  //2016.06.20 supergk ���ʨ�i�H�ͮĪ���m

  //2017.06.23 supergk �h�Z��5��T���|����,�����ճ]�w�۰ʭ��o�@��
  if('NG'==$vchk_rtn &&  '1' != $scnt){
    sl_send_msg($vmb05='it',$vmb07,$vmb10,$vmb11,$scnt='1');
  }

  return($vchk_rtn); //mark by �¶v 2016.06.21 line:2124 �w�g��return

}

// **************************************************************************
//  ��ƦW��: iif()
//  ��ƥ\��: db4 �� iif
//  �ϥΤ覡:
//  �{���]�p: Mark
//  �]�p���:
// **************************************************************************
function iif($cond,$ok_value,$ng_value){
  $r_value = $cond ? $ok_value : $ng_value;
  return ($r_value);
}

// **************************************************************************
//  ��ƦW��: sl_jreplace()
//  ��ƥ\��: ���s���V���}�A�ϥ� javascript ���
//  �ϥΤ覡: echo sl_jreplace($go_url); �@�w�n�� echo ���M�|����
//  �{���]�p: Tony
//  �]�p���: 2006.11.07
// **************************************************************************
  function sl_jreplace($go_url,$vtarget='') {
     $vurl  = "<script language=\"javascript\">";
     if(NULL<>$vtarget) {
        $vurl .= "$vtarget.";
     }
     $vurl .= "location.replace(\"$go_url\");";
     $vurl .= "</script>";
     return ($vurl);
  }

// **************************************************************************
//  ��ƦW��: sl_jgetdate()
//  ��ƥ\��:
//  �ϥΤ覡: echo sl_jgetdate($vdate_fd); �@�w�n�� echo ���M�|����
//  �{���]�p: Tony
//  �]�p���: 2006.11.07
// **************************************************************************
function sl_jgetdate($vdate_fd) {
  $vurl  = "<script language=\"javascript\">";
  $vurl .=   "var time   = new Date();       ";
  $vurl .=   "var year   = time.getYear();   ";
  $vurl .=   "var month  = time.getMonth();  ";
  $vurl .=   "var date   = time.getDate();   ";
  $vurl .=   "var hour   = time.getHours();  ";
  $vurl .=   "var minute = time.getMinutes();";
  $vurl .=   "var second = time.getSeconds();";
  $vurl .=   "";
  $vurl .=   "var nowdate  = year;                             ";
  $vurl .=   "    nowdate += ((month < 10) ? \":0\":\":\")+month;  ";
  $vurl .=   "    nowdate += ((date  < 10) ? \":0\":\":\")+date;   ";
  $vurl .=   "    nowdate += ((hour  < 10) ? \":0\":\":\")+hour;   ";
  $vurl .=   "    nowdate += ((minute < 10) ? \":0\":\":\")+minute;";
  $vurl .=   "    nowdate += ((second < 10) ? \":0\":\":\")+second;";
  $vurl .=   "vdate_fd = nowdate;";
  $vurl .=   "alert(gw_form.f_gw07_s.value);";
  $vurl .= "</script>";
  return ($vurl);
}



// **************************************************************************
//  ��ƦW��: sl_errmsg()
//  ��ƥ\��: �q���~�T��
//  �ϥΤ覡: sl_errmsg($�T��)
//  �{���]�p: Tony
//  �]�p���: 2006.11.07
// **************************************************************************
function sl_errmsg($vmsg) {
     ?>
       <table width="100%" border="1" cellpadding="3" cellspacing="0" bordercolor="FF9966" class="font" style="border-collapse: collapse">
         <tr bgColor="#FFFF99">
           <td align="left"><font size="2" color="#000000"><? echo $vmsg;?></font></td>
         </tr>
       </table>
       <br>
     <?
     return;
}

// **************************************************************************
//  ��ƦW��: sl_get_file()
//  ��ƥ\��: �q�X��J���ʺA�������($f_var['fd_file'])
//  �ϥΤ覡: sl_get_file()
//  �{���]�p: ���\
//  �]�p���: 2018.02.06
// **************************************************************************
function sl_get_file($f_var,$sql_type='mysql') {
        $f_init_cnt = 1;
  switch(substr($f_var['msel'],0,1)){
    // �s�W
    case '1':
      break;
    // �ק�
    case '2':
      $query = "select {$f_var['mtable']['head']}.*
                from {$f_var['mtable']['head']}
                where s_num='{$f_var['f_s_num']}'
                ";
      //echo "<pre>".$query."</pre>";
      $db_attach = mysql_fetch_array( mysql_query($query));
      if($db_attach['attach'] == 'Y') {
        $query = "select sl.dyn_upfile.*
                  from sl.dyn_upfile
                  where index_num  = '{$f_var['f_s_num']}'
                    and b_proc     = '{$db_attach['b_proc']}'
                    and d_date     = '0000-00-00 00:00:00'
                ";
        //echo $query;
        if(!mysql_query($query)) {
          sl_errmsg($f_var['mmsg_ng']);
          exit;
        }
        $f_count = 0;
        $f_var['disp_result'] = mysql_query($query);
        while($row = mysql_fetch_array($f_var['disp_result'])) {
          $f_count++;
          $f_var["tp"]-> newBlock ("tb_edit_file"                 ); // �R���ɮ�
          $f_var["tp"]-> assign   ("tv_f_link"    , $f_var["mupload_dir"].$row['file_name']);
          $f_var["tp"]-> assign   ("tv_filename"  , $row['file_name']);
          $f_var["tp"]-> assign   ("tv_f_value"   , $row['file_name']);
          $f_var["tp"]-> assign   ("tv_f_card_num", $row['index_num']);
          $f_var["tp"]-> assign   ("tv_count"     , $f_count);
          $f_var["tp"]-> assign   ("tv_cnt"       , $f_count);
          $f_var["tp"]-> assign   ("tv_f_count"   , $f_count);
        }
      }
      //echo $f_count;
      $f_var["tp"]-> newBlock ("tb_edit_file_total" );
      $f_var["tp"]-> assign   ("tv_f_total"   , $f_count);
      if($f_count != 0) {
        $f_count++;
        $f_init_cnt = $f_count;
      }
    break;
  }
  $f_var["tp"]-> newBlock ("tb_file_dyn");
  $f_var["tp"]-> assign   ("tv_name"     , $f_var['fd_dyn_file']);
  $f_var["tp"]-> assign   ("tv_init_cnt" , $f_init_cnt);
}

// **************************************************************************
//  ��ƦW��: sl_disp_file()
//  ��ƥ\��: ��ܤw�����ʺA�������($f_var['fd_file'])
//  �ϥΤ覡: sl_disp_file()
//  �{���]�p: ���\
//  �]�p���: 2018.02.06
// **************************************************************************
function sl_disp_file($f_var) {
        $query      = "select {$f_var['mtable']['head']}.*
                           from {$f_var['mtable']['head']}
                           where s_num='{$f_var['f_s_num']}'
                   ";
   //echo "<pre>".$query."</pre>";
   $db_attach = mysql_fetch_array( mysql_query($query));
   if($db_attach['attach'] == 'Y') {
        $query      = "select sl.dyn_upfile.*
                           from sl.dyn_upfile
                           where index_num  = '{$f_var['f_s_num']}'
                                                                                        and b_proc     = '{$db_attach['b_proc']}'
                                                                                        and d_date     = '0000-00-00 00:00:00'
                   ";
        //echo $query;
        if(!mysql_query($query)) {
        sl_errmsg($f_var['mmsg_ng']);
                exit;
                }
                $i = 0;
        $f_var['disp_result'] = mysql_query($query);
        while($row = mysql_fetch_array($f_var['disp_result'])) {
                $i++;
                $f_var["tp"]-> newBlock ("tb_disp_file"                 ); // �ʺA����
                        $f_var["tp"]-> assign   ("tv_f_link"    , $f_var["mupload_dir"].$row['file_name']);
                        $f_var["tp"]-> assign   ("tv_filename"  , $row['file_name']);
                        $f_var["tp"]-> assign   ("tv_count"     , $i);
        }
   }
}

// **************************************************************************
//  ��ƦW��: sl_save_file()
//  ��ƥ\��: �x�s�ʺA������
//  �ϥΤ覡: sl_save_file()
//  �{���]�p: ���\
//  �]�p���: 2018.02.06
// **************************************************************************
function sl_save_file($f_var) {
          $vb_empno   = $_SESSION["login_empno"];
  $vb_dept_id = $_SESSION["login_dept_id"];
  $vb_date    = date("Y-m-d H:i:s");
  $vfromip    = $_SERVER["REMOTE_ADDR"];
  $vproc      = u_showproc(); // �{���N��
  $f_var['mmsg_ng'] = "���{$f_var['msel_name'][ substr($f_var['msel'],0,1) ]}����...";
  include_once("HTTP/Upload.php"); // PEAR �W�ǮM��
  $vupload = new HTTP_Upload();
  $file_name_fix = date('dmHis');
  $chk_attach = '';
  $f_name     = $f_var['fd_dyn_file'];
  $f_file_cnt = count($_FILES[$f_name]["name"]);
  if($f_file_cnt <> 0){
    for($i=0; $i < $f_file_cnt; $i++) {
      if($_FILES[$f_name]["name"][$i] != "") {
        $chk_attach = 'Y'; // ��?ܦ��L����
        //���o�̷s�@���s�W��ƪ�s_num
        if( $f_var['f_s_num'] == ''){
          $query ="select s_num from {$f_var['mtable']['head']} order by b_date desc limit 1";
          $db_s_num = mysql_fetch_array( mysql_query($query));
          $f_var['f_s_num'] = $db_s_num['s_num'];
        }
        $_FILES[$f_name]["name"][$i] = date('ymdHis')."_".$_FILES[$f_name]["name"][$i];
        $query = "insert into sl.dyn_upfile
                          set index_num = '{$f_var['f_s_num']}',
                              file_name = '{$_FILES[$f_name]["name"][$i]}',
                              b_empno   = '$vb_empno',
                              b_dept_id = '$vb_dept_id',
                              b_proc    = '$vproc'   ,
                              b_date    = '$vb_date'";
        if(!mysql_query($query)) {
          sl_errmsg($f_var['mmsg_ng']);
          exit;
        }
        move_uploaded_file($_FILES[$f_name]["tmp_name"][$i], $f_var["mupload_dir"].$_FILES[$f_name]["name"][$i]);
      }
    }
  }
  switch(substr($f_var['msel'],0,1)){
    //�s�W
    case '1':
      $query ="update {$f_var['mtable']['head']}
                 set attach = '{$chk_attach}'
               where s_num  = '{$db_s_num['s_num']}'
               ";
    break;
    //�ק�
    case '2':
      //�R���ɮ�
      $exit_file = 0;
      for($i=1; $i <= $f_var['exit_f_total']; $i++){
        if($f_var['d_file_'.$i] == "Y") { //�R���ɮ�
          $exit_file++;
          $f_name = $f_var['m_file_'.$i];
          $query ="update sl.dyn_upfile
                  set d_empno   = '$vb_empno',
                      d_dept_id = '$vb_dept_id',
                      d_proc    = '$vproc'   ,
                      d_date    = '$vb_date'
                where index_num = '{$f_var['f_s_num']}'
                  and file_name = '{$f_name}'
                  and b_proc    = '$vproc'
               ";
          //  echo $query;
          if(!mysql_query($query)) {
            sl_errmsg($f_var['mmsg_ng']);
            exit;
          }
          unlink($f_var["mupload_dir"].$f_var['m_file_'.$i]);
        }
      }
      $f_var['exit_f_total'] = $f_var['exit_f_total'] - $exit_file;
      if($f_var['exit_f_total'] > 0) {
        $chk_attach = 'Y';
      }
      $query ="update {$f_var['mtable']['head']}
                  set attach    = '{$chk_attach}',
                      m_empno   = '$vb_empno',
                      m_dept_id = '$vb_dept_id',
                      m_proc    = '$vproc'   ,
                      m_date    = '$vb_date'
                where s_num     = '{$f_var['f_s_num']}'
               ";
      //echo $query."</br>";
    break;
    //�@�o
    case '3':
      $query ="update {$f_var['mtable']['head']}
                  set d_empno   = '$vb_empno',
                      d_dept_id = '$vb_dept_id',
                      d_proc    = '$vproc'   ,
                      d_date    = '$vb_date'
                where s_num     = '{$f_var['f_s_num']}'
               ";
      //echo $query."</br>";
      if(!mysql_query($query)) {
        sl_errmsg($f_var['mmsg_ng']);
        exit;
      }
      $query ="update sl.dyn_upfile
                  set m_empno   = '$vb_empno',
                      m_dept_id = '$vb_dept_id',
                      m_proc    = '$vproc'   ,
                      m_date    = '$vb_date'
                where index_num = '{$f_var['f_s_num']}'
                  and b_proc    = '$vproc'
               ";
      //echo $query;
    break;
  }
  if(!mysql_query($query)) {
    sl_errmsg($f_var['mmsg_ng']);
    exit;
  }
}

// **************************************************************************
//  ��ƦW��: sl_get()
//  ��ƥ\��: �q�X��J�����($f_var['fd'])
//  �ϥΤ覡: sl_get()
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function sl_get($f_var,$sql_type='mysql') { // add by mimi 2009.04.13 $sql_type='mysql' = $sql_type �S���ǻ��ѼƮɪ��w�]??��mysql
  $vjs_rule = ''; // ������]�w
  $mpkey_str = ''; // ���n��J����Ȧr�� Add by Tony 2007.08.20

  if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=�ק� C=�ƻs 85=�禬ñ��,upd by mimi 2011.01.06 ���ʰl�� �禬ñ�ַ|�Ψ�~
    if(NULL==$f_var['in_scr_row']) { // �S���ǤJ����  Add by Mimi 2007.08.20
      $f_var['mwhere'] = "s_num='{$f_var['f_s_num']}'";
      $f_var['morder'] = "s_num";
      $query1      = "select {$f_var['mtable']['head']}.*
                                 from {$f_var['mtable']['head']}
                                 where {$f_var['mwhere']}
                                 order by {$f_var['morder']}
                         ";
      //echo $query1."<BR>";
     //upd by mimi 2009.04.13 ��mssql�]���
     $result_scr  = call_user_func($sql_type.'_query',$query1);//mysql_query($query1);
     $row_scr     = call_user_func($sql_type.'_fetch_array',$result_scr);//mysql_fetch_array($result_scr);
     $f_var['in_scr_row'] = $row_scr;
    }
  }

  reset($f_var['fd']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
  while(list($mfd_id)=each($f_var['fd'])) {
    if('N'==$f_var['fd'][$mfd_id]['show_scr']) { // ���q�b�e���W
      continue; // loop �^�� while
    }

    if('hidden'==$f_var['fd'][$mfd_id]['type']) { // �p�G type �O hidden �N���b�e���h�q���
      //echo $f_var['fd'][$mfd_id]['type'].'-----';
      $f_var["tp"]-> newBlock (  "tb_".$f_var['fd'][$mfd_id]['type']                  ); // ��� type
      reset($f_var['fd'][$mfd_id]); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
      while(list($mfd_name)=each($f_var['fd'][$mfd_id])) {
          if('value'==$mfd_name && '2'==$f_var['msel']) { // �p�G�O value and 2=�ק�A�N��� $f_var['in_scr_row'][] ���
            $mfd_value = $f_var['in_scr_row'][$mfd_id];
            $f_var["tp"]-> assign   (  "tv_value", $mfd_value     );
          }
          else{
            $f_var["tp"]-> assign   (  "tv_".$mfd_name , $f_var['fd'][$mfd_id][$mfd_name]     );
          }
      }
      continue; // loop �^�� while
    }

    // Add by Tony 2006.12.12
    if('hr'==$f_var['fd'][$mfd_id]['type']) { // �p�G type �O hr �N�b�e���h�W�[�@��<tr>
       $f_var["tp"]-> newBlock (  "tb_get_hr"      ); // ����u
       $f_var["tp"]-> assign   (  "tv_cname"      , $f_var['fd'][$mfd_id]['cname']   ); // ��줤��W��
       $f_var["tp"]-> assign   (  "tv_class"      , $f_var['fd'][$mfd_id]['class']   ); // class
       continue; // loop �^�� while
    }

    $mmemo = '';
    if(''<>$f_var['fd'][$mfd_id]['memo']) {
      $mmemo = '&nbsp;('.$f_var['fd'][$mfd_id]['memo'].')';
    }

    // Add by Tony 2007.08.20 �W�[ pkey �������
    if('Y'==$f_var['fd'][$mfd_id]['pkey']) { // ���n��J����Ȧr��
       //$mpkey_str = '<span class=pkey>��</span>';
       $mpkey_str = '<span class=pkey>*</span>';
    }
    else {
       $mpkey_str = '';
    }

    $f_var["tp"]-> newBlock (  "tb_in_get_fd"         ); // ��J�e��
    $f_var["tp"]-> assign   (  "tv_width1"     , $f_var["mwidth1"]                  ); //
    $f_var["tp"]-> assign   (  "tv_width2"     , $f_var["mwidth2"]                  ); //
    $f_var["tp"]-> assign   (  "tv_cname"      , $mpkey_str.$f_var['fd'][$mfd_id]['cname']   ); // ��줤��W��
    $f_var["tp"]-> assign   (  "tv_fd_ename"   , $f_var['fd'][$mfd_id]['ename']   ); // ���^��W��

    $f_var["tp"]-> assign   (  "tv_memo"       , $mmemo      ); // ��� memo
    $f_var["tp"]-> newBlock (  "tb_".$f_var['fd'][$mfd_id]['type']                  ); // ��� type

    $url = 'http://'.$_SERVER['SERVER_NAME'].'/~sl/sl_download.php?show=1&file=';
    reset($f_var['fd'][$mfd_id]); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
    while(list($mfd_name)=each($f_var['fd'][$mfd_id])) {
      if('value'==$mfd_name && ('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1)) ) { // �p�G�O value and 2=�ק�A�N��� $f_var['in_scr_row'][] ���
        $mfd_value = $f_var['in_scr_row'][$mfd_id];
        //echo $f_var['fd'][$mfd_id]['type'].'---'.$mfd_id.'---'.$mfd_value.'<hr>';
        //�W�[file2����Ū����ƬO�@�P�_
        if(('file'==$f_var['fd'][$mfd_id]['type'] or 'file2'==$f_var['fd'][$mfd_id]['type'] )&& NULL<>$mfd_value) {
           //$file_path   = $f_var['proc_upfile_path'][u_showproc()].trim($f_var['in_scr_row'][$mfd_id]);
           $strpos = strrpos($_SERVER['SCRIPT_FILENAME'],'/');
           $strlen = substr($_SERVER['SCRIPT_FILENAME'],0,$strpos+1);
           $file_path = $strlen.$f_var[mupload_dir].trim($f_var['in_scr_row'][$mfd_id]);
           $file_uri  = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']."?f_sid={$f_var['f_sid']}";
           //echo $filE_uri.$_SERVER['HTTP_REFERER'];
           //phpinfo();
           //$mfile_name      = '<a href='.$f_var[mupload_dir].trim($f_var['in_scr_row'][$mfd_id]).'>'.trim($f_var['in_scr_row'][$mfd_id]).'</a>';
           $mfile_name      = '<a href='.$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].trim($f_var['in_scr_row'][$mfd_id])).'>'.trim($f_var['in_scr_row'][$mfd_id]).'</a>';
           $mfile_del_link  = "http://".$_SERVER['SERVER_NAME']."/~sl/sl_del_file.php?f_field_name={$mfd_id}&f_db={$f_var['mdb']}&f_table={$f_var['mtable']['head']}&f_wrere_field=s_num&f_no={$f_var['in_scr_row'][s_num]}&f_file_path={$file_path}&f_file_url={$file_uri}&f_file_name=".trim($f_var['in_scr_row'][$mfd_id]);
           //$mre_url = "&re_url=".u_showproc().".php?msel=2&f_s_num={$f_var['in_scr_row'][s_num]}&f_page={$f_var['f_page']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}";
           // �@�w�n�s�X�A���M�^�ǭȷ|���~�H�u�O�_�ǡI�I�I 2006.11.20 By Tony
           //upd by mimi 2012.06.01 ����-13608 �W�[�^��f_change1�Pf_change2
           $mre_url = u_showproc().".php?msel=2&f_sid={$f_var['f_sid']}&f_s_num={$f_var['in_scr_row'][s_num]}&f_page={$f_var['f_page']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_del={$f_var['f_del']}&f_change1={$f_var['f_change1']}&f_change2={$f_var['f_change2']}";
           $mfile_del_link .= "&re_url=".urlencode($mre_url); // return url
           //echo $mfd_id.'-1-'.$f_var['fd'][$mfd_id]['type'].'-2-'.$mfd_value.'-3-<br>';
           if('file'==$f_var['fd'][$mfd_id]['type']){
             $f_var["tp"]-> newBlock (  "tb_in_file_del"                              ); // �R���ɮ� Block
           }
           else{
             $f_var["tp"]-> newBlock (  "tb_in_file_del2"                              ); // �R���ɮ� Block
           }
           //$f_var["tp"]-> newBlock (  "tb_in_file_del"                              ); // �R���ɮ� Block
           $f_var["tp"]-> assign   (  "tv_file_name"       , $mfile_name            ); // �ɮצW��
           $f_var["tp"]-> assign   (  "tv_file_del_link"   , $mfile_del_link        ); // ��줤��W��
           $mfd_value = $f_var['fd'][$mfd_id][$mfd_name];
        }
        if('0000-00-00'==substr($mfd_value,0,10)) {
           $mfd_value = '';
        }
        if('sign'==$f_var['fd'][$mfd_id]['type'] && ''!=trim($mfd_value)){
          $mfd_value1 = "<img style='border:1px grey dashed' src='/~sl/sl_sign/sign_img/".trim($mfd_value)."'>";
          $f_var["tp"]-> assign   (  "tb_".$f_var['fd'][$mfd_id]['type'].".tv_value1" , $mfd_value1      );
        }
        //add by �p��20190418 ���F�[�Wb_gid function
        $fd_type=$f_var['fd'][$mfd_id]['type'];
        if('2'==substr($f_var['msel'],0,1) and $fd_type=='checkbox2' and $mfd_name=='value'){
          $fd_boxval = $mfd_value;
        }
      }
      else {
        $mfd_value = $f_var['fd'][$mfd_id][$mfd_name];
      }
      $f_var["tp"]-> assign   (  "tb_".$f_var['fd'][$mfd_id]['type'].".tv_".$mfd_name , $mfd_value      );
    }
    //add by �p��20190418 ���F�[�Wb_gid function
    $ex_key = explode(",",$fd_boxval);
    /*
    if(isset($_SESSION['insert'])) {//add by ���\ 2018.06.08 �s�W�x�s���session
	    if('1'==substr($f_var['msel'],0,1)){
		   //echo $f_var['fd'][$mfd_id]['type'].": ".$mfd_id.": ".$_SESSION['insert'][$mfd_id]."</br>";
		    $f_var["tp"]-> assign   (  "tv_value"      , $_SESSION['insert'][$mfd_id] );
		    $f_var['fd'][$mfd_id]['selected'] = $_SESSION['insert'][$mfd_id]; //select session
		    $f_var['fd'][$mfd_id]['checked'] = $_SESSION['insert'][$mfd_id]; //radio session
	    }
    }
    */
    switch($f_var['fd'][$mfd_id]['type']) {
      case "select":
      reset($f_var['fd'][$mfd_id]['value']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
      while( list($mvalue)=each($f_var['fd'][$mfd_id]['value']) ) {
        $f_var["tp"]-> newBlock (  "tb_option"                  ); // option
        //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
        $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd'][$mfd_id]['value'][$mvalue]  );
        $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd'][$mfd_id]['show'][$mvalue]   );

        if('1'==$f_var['msel']) { // �p�G�s�W���w�w�]��
          //echo $f_var['fd'][$mfd_id]['selected']."-------<br>";
          //echo $mvalue."----<br>";
          //echo $f_var['fd'][$mfd_id]['value'][$mvalue]."******<br>";
          if( "qah_2" == $mfd_id && substr($f_var['fd']['qah_2']['value'][$mvalue],1,1)==substr($_SESSION["login_dept_id"],1,1)){  // ���װϧO�w�] By Job 2014.05.30
            $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }else if($f_var['fd'][$mfd_id]['value'][$mvalue]==$f_var['fd'][$mfd_id]['selected']) {
            $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }
        if('81'==$f_var['msel']) { // �p�G�s�W���w�w�]��
          //echo $f_var['fd'][$mfd_id]['selected']."-------<br>";
          //echo $mvalue."----<br>";
          //echo $f_var['fd'][$mfd_id]['value'][$mvalue]."******<br>";
          if($f_var['fd'][$mfd_id]['value'][$mvalue]==$f_var['fd'][$mfd_id]['selected']) {
             $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }

        if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=�ק� C=�ƻs 85=�禬ñ��,upd by mimi 2011.01.06 ���ʰl�� �禬ñ�ַ|�Ψ�~
          // �N select ���b��Ʀ�m
          if($f_var['fd'][$mfd_id]['value'][$mvalue]==trim($f_var['in_scr_row'][$mfd_id])) {
            $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }
      }
      //echo $mfd_id.'--------';
      //echo $f_var['fd'][$mfd_id]['value']['3'];
      //echo $f_var['fd'][$mfd_id]['value'][0]['3'].'++++++++';
      break;
      case "select2":
      reset($f_var['fd'][$mfd_id]['value']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
      while( list($mvalue)=each($f_var['fd'][$mfd_id]['value']) ) {
        $f_var["tp"]-> newBlock (  "tb_option2"                  ); // option
        //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
        $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd'][$mfd_id]['value'][$mvalue]  );
        $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd'][$mfd_id]['show'][$mvalue]   );

        if('1'==$f_var['msel']) { // �p�G�s�W���w�w�]��
          if($f_var['fd'][$mfd_id]['value'][$mvalue]==$f_var['fd'][$mfd_id]['selected']) {
             $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }
        if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=�ק� C=�ƻs 85=�禬ñ��,upd by mimi 2011.01.06 ���ʰl�� �禬ñ�ַ|�Ψ�~
          // �N select ���b��Ʀ�m
          if($f_var['fd'][$mfd_id]['value'][$mvalue]==trim($f_var['in_scr_row'][$mfd_id])) {
            $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }
      }
      //echo $mfd_id.'--------';
      //echo $f_var['fd'][$mfd_id]['cname'];
      //echo $f_var['fd'][$mfd_id]['value'][0]['3'].'++++++++';
      break;
      case "select4":
      reset($f_var['fd'][$mfd_id]['value']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
      while( list($mvalue)=each($f_var['fd'][$mfd_id]['value']) ) {
        $f_var["tp"]-> newBlock (  "tb_option4"                  ); // option
        //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
        $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd'][$mfd_id]['value'][$mvalue]  );
        $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd'][$mfd_id]['show'][$mvalue]   );

        if('1'==$f_var['msel']) { // �p�G�s�W���w�w�]��
          //echo $f_var['fd'][$mfd_id]['selected']."-------<br>";
          //echo $mvalue."----<br>";
          //echo $f_var['fd'][$mfd_id]['value'][$mvalue]."******<br>";
          if( "qah_2" == $mfd_id && substr($f_var['fd']['qah_2']['value'][$mvalue],1,1)==substr($_SESSION["login_dept_id"],1,1)){  // ���װϧO�w�] By Job 2014.05.30
            $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }else if($f_var['fd'][$mfd_id]['value'][$mvalue]==$f_var['fd'][$mfd_id]['selected']) {
            $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }
        if('81'==$f_var['msel']) { // �p�G�s�W���w�w�]��
          //echo $f_var['fd'][$mfd_id]['selected']."-------<br>";
          //echo $mvalue."----<br>";
          //echo $f_var['fd'][$mfd_id]['value'][$mvalue]."******<br>";
          if($f_var['fd'][$mfd_id]['value'][$mvalue]==$f_var['fd'][$mfd_id]['selected']) {
             $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }

        if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=�ק� C=�ƻs 85=�禬ñ��,upd by mimi 2011.01.06 ���ʰl�� �禬ñ�ַ|�Ψ�~
          // �N select ���b��Ʀ�m
          if($f_var['fd'][$mfd_id]['value'][$mvalue]==trim($f_var['in_scr_row'][$mfd_id])) {
            $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }
      }
      //echo $mfd_id.'--------';
      //echo $f_var['fd'][$mfd_id]['value']['3'];
      //echo $f_var['fd'][$mfd_id]['value'][0]['3'].'++++++++';
      break;
      case "select5":
      reset($f_var['fd'][$mfd_id]['value']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
      while( list($mvalue)=each($f_var['fd'][$mfd_id]['value']) ) {
        $f_var["tp"]-> newBlock (  "tb_option5"                  ); // option
        //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
        $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd'][$mfd_id]['value'][$mvalue]  );
        $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd'][$mfd_id]['show'][$mvalue]   );

        if('1'==$f_var['msel']) { // �p�G�s�W���w�w�]��
          if($f_var['fd'][$mfd_id]['value'][$mvalue]==$f_var['fd'][$mfd_id]['selected']) {
             $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }
        if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=�ק� C=�ƻs 85=�禬ñ��,upd by mimi 2011.01.06 ���ʰl�� �禬ñ�ַ|�Ψ�~
          // �N select ���b��Ʀ�m
          $f_tmp3 = $f_var['in_scr_row'][substr($mfd_id,0,9)."3"];
          //upd by �p��20180814 �����H�W�����|�X�{strstr�ŭȸ��@��Warning,���P�w�p�G�O�ŭȴNcontinue,�[��ݬ�
          if($f_var['in_scr_row'][$mfd_id]==''){
            continue;
          }
          if($f_var['in_scr_row'][substr($mfd_id,0,9)."3"] < 1 && strstr('17��/29-2��1��/30��',$f_var['in_scr_row'][$mfd_id])){
            $f_tmp3 = "2/";
          }
          else if($f_var['in_scr_row'][substr($mfd_id,0,9)."3"] < 1){
            $f_tmp3 = "1/";
          }
          if($f_var['fd'][$mfd_id]['value'][$mvalue]==trim($f_var['in_scr_row'][$mfd_id].';'.$f_tmp3)) {
            $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
            $f_var["tp"]-> assign   (  "tb_select5.tv_value2"   , $f_var['in_scr_row'][substr($mfd_id,0,9)."2"]     );
            $f_var["tp"]-> assign   (  "tb_select5.tv_value3"   , $f_var['in_scr_row'][substr($mfd_id,0,9)."3"]      );
          }
          // echo $f_var['in_scr_row'][substr($mfd_id,0,9)."3"]."<br>";
        }
      }
      //echo $mfd_id.'--------';
      //echo $f_var['fd'][$mfd_id]['cname'];
      //echo $f_var['fd'][$mfd_id]['value'][0]['3'].'++++++++';
      break;
      case "textarea":
      case "sign":
      reset($f_var['fd'][$mfd_id]['size']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
      while( list($msize)=each($f_var['fd'][$mfd_id]['size']) ) {
        $f_var["tp"]-> assign   (  "tv_".$msize    , $f_var['fd'][$mfd_id]['size'][$msize]     ); // �]�w cols�Brows�Bwrap
      }
      //echo $msize.'---';
      //echo $f_var['fd'][$mfd_id]['size'][$msize].'+++';
      break;
      case "date2":
        if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=�ק� C=�ƻs 85=�禬ñ��,upd by mimi 2011.01.06 ���ʰl�� �禬ñ�ַ|�Ψ�~
          $mfd_value = iif($f_var['in_scr_row'][$mfd_id]=='',$f_var['in_scr_row'][$mfd_id],$f_var['in_scr_row'][$mfd_id]-19110000);
          $f_var["tp"]-> assign   (  "tv_value"      , $mfd_value   );
        }
      break;
      case "checkbox":
        reset($f_var['fd'][$mfd_id]['value']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���

        foreach($f_var['fd'][$mfd_id]['value'] as $i => $mfd_value){
          $f_var["tp"]-> newBlock (  "tb_box" );
          $f_var["tp"]-> assign   (  "tv_ename"  , "f_".$mfd_id  );
          $f_var["tp"]-> assign   (  "tv_value"  , $mfd_value   );
          if(!empty($f_var['fd'][$mfd_id]['show'])){
            $f_var["tp"]-> assign   (  "tv_show"  , $f_var['fd'][$mfd_id]['show'][$i]   );
          }else{
            $f_var["tp"]-> assign   (  "tv_show"  , $mfd_value   );
          }

          //Add by TzuYu 2017.10.11 �W�[ ��ܹw�]���
				  if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=�ק� C=�ƻs 85=�禬ñ��,upd by mimi 2011.01.06 ���ʰl�� �禬ñ�ַ|�Ψ�~
		        // �N select ���b��Ʀ�m
		        if($f_var['fd'][$mfd_id]['value'][$i]==trim($f_var['in_scr_row'][$mfd_id])) {
		          $f_var["tp"]-> assign   (  "tv_checked"   , 'checked'                             );
		        }
		      }else{ //add by ���\ 2018.06.08 �s�W�x�s���session
		      	if($f_var['fd'][$mfd_id]['value'][$i]==trim($f_var['fd'][$mfd_id]['checked'])) {
		          $f_var["tp"]-> assign   (  "tv_checked"   , 'checked'                             );
		        }
		      }

        }
      break;
      //add by �p��20190418 ���F�[�Wb_gid function checkbox2
      case "checkbox2":
             if( $f_var['fd'][$mfd_id]['ename'] == 'f_ScName'){
               $f_var['check']['value'] = $f_var['ScName']['value'];  //�o���t�����}
               $f_var['check']['show'] = $f_var['ScName']['show'];
             }

             $f_var["tp"]-> newBlock(  "tb_ckbox_all"            ); // checkboxall
             $f_var["tp"]-> assign  (  "tv_name"   , $f_var['fd'][$mfd_id]['ename']);
             $f_var["tp"]-> assign  (  "tv_value"  , "����"      );
             $fd_num=0;     //
             $fd_num2=0;
             //$f_var['check']['value'] = $f_var['web']['value'];  //�o���t�����}
             //$f_var['check']['show'] = $f_var['web']['show'];
             while( list($mvalue)=each($f_var['check']['value'])) {
               if('--'!=$f_var['check']['value'][$mvalue]){
                 if('8'==$fd_num or '0'==$fd_num){ //add by mimi 2010.12.22 �@��K�ӿﶵ
                   $fd_num=0;
                   $f_var["tp"]-> newBlock("tb_ckbox_tr"                            ); // checkbox
                 }
                 $fd_num ++;
                 $fd_num2 ++;
                 $f_var["tp"]-> newBlock("tb_ckbox_{$fd_num}"                       ); // checkbox
                 $f_var["tp"]-> assign  ("tv_name"   , $f_var['fd'][$mfd_id]['ename']);
                 $f_var["tp"]-> assign  ("tv_value"  , "{$f_var['check']['show'][$mvalue]}");
                 $fd_value = $f_var['check']['value'][$mvalue];

                 //echo $f_var['check']['value'][$mvalue]."<br>";
                 //echo substr($f_var['msel'],0,1);
                 if('2'==substr($f_var['msel'],0,1)){
                   for($i=0;$i<count($ex_key);$i++){
                     $ex_key2 = explode(",",$ex_key[$i]);
                     //echo $fd_value."---".$ex_key[$i]."<br>";
                     if($fd_value==$ex_key2[0]){
                       $f_var["tp"]-> assign  ("checked"   , "checked");
                     }
                   }
                 }
               }
             }
             $f_var["tp"]-> newBlock("tb_ckbox_hr");

             //$vjs_rule .="var fd_ck = $('input[name^={$f_var['fd'][$mfd_id]['ename']}]').length; //�ƿ�ƶq
             //             var fd_cked = $('input[name^={$f_var['fd'][$mfd_id]['ename']}]:checked').length; //�w�Ŀ�ƶq
             //             if(fd_cked<=0){
             //               alert('�y{$f_var['fd'][$mfd_id]['cname']}�z�ֿ̤�@��!!') ;
             //               return(false)
             //             };
             //            ";
             break;
      case "radio":
        reset($f_var['fd'][$mfd_id]['value']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���

        foreach($f_var['fd'][$mfd_id]['value'] as $i => $mfd_value){
          $f_var["tp"]-> newBlock (  "tb_item" );
          $f_var["tp"]-> assign   (  "tv_ename"  , "f_".$mfd_id  );
          $f_var["tp"]-> assign   (  "tv_value"  , $mfd_value   );
          if(!empty($f_var['fd'][$mfd_id]['show'])){
            $f_var["tp"]-> assign   (  "tv_show"  , $f_var['fd'][$mfd_id]['show'][$i]   );
          }else{
            $f_var["tp"]-> assign   (  "tv_show"  , $mfd_value   );
          }

          //Add by TzuYu 2017.10.11 �W�[ ��ܹw�]���
				  if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=�ק� C=�ƻs 85=�禬ñ��,upd by mimi 2011.01.06 ���ʰl�� �禬ñ�ַ|�Ψ�~
		        // �N select ���b��Ʀ�m
		        if($f_var['fd'][$mfd_id]['value'][$i]==trim($f_var['in_scr_row'][$mfd_id])) {
		          $f_var["tp"]-> assign   (  "tv_checked"   , 'checked'                             );
		        }
		      }else{ //add by ���\ 2018.06.08 �s�W�x�s���session
		      	if($f_var['fd'][$mfd_id]['value'][$i]==trim($f_var['fd'][$mfd_id]['checked'])) {
		          $f_var["tp"]-> assign   (  "tv_checked"   , 'checked'                             );
		        }
		      }

        }
      break;
      case "datetime":
        if($f_var['fd'][$mfd_id]['hhmm']['picker'] != "N"){
          $f_var["tp"]-> newBlock (  "tb_picker" );
          $f_var["tp"]-> assign   (  "tv_ename"  , "f_".$mfd_id  );
          $f_var["tp"]-> assign   (  "tv_value_date"  , substr($f_var['in_scr_row'][$mfd_id],0,8) );
        }

        foreach($f_var['fd'][$mfd_id]['hhmm'] as $a_key => $a_val){
          if($a_key != "picker"){
            foreach($a_val[0] as $b_key => $b_val){
              $f_var["tp"]-> newBlock (  "tb_option_".$a_key  ); // option
              $f_var["tp"]-> assign   (  "tv_value_".$a_key      , $f_var['fd'][$mfd_id]['hhmm'][$a_key][0][$b_key]  );
              $f_var["tp"]-> assign   (  "tv_show_".$a_key       , $f_var['fd'][$mfd_id]['hhmm'][$a_key][0][$b_key]  );

              switch($f_var['msel']){ // �p�G�s�W���w�w�]��
                case"1":
                case"81":
                  if($f_var['fd'][$mfd_id]['hhmm'][$a_key][1] == $f_var['fd'][$mfd_id]['hhmm'][$a_key][0][$b_key]) {
                    $f_var["tp"]-> assign   (  "tv_selected_".$a_key   , 'selected'                             );
                  }
                  break;
                default:
                  if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=�ק� C=�ƻs 85=�禬ñ��,upd by mimi 2011.01.06 ���ʰl�� �禬ñ�ַ|�Ψ�~
                    // �N select ���b��Ʀ�m
                    if($f_var['fd'][$mfd_id]['hhmm']['picker'] != "N"){
                      $f_var['tmp_hh'] = substr($f_var['in_scr_row'][$mfd_id],9,2);
                      $f_var['tmp_mm'] = substr($f_var['in_scr_row'][$mfd_id],11,2);
                      if($f_var['tmp_'.$a_key] == $f_var['fd'][$mfd_id]['hhmm'][$a_key][0][$b_key]) {
                        $f_var["tp"]-> assign   (  "tv_selected_".$a_key   , 'selected'  );
                      }
                    }else{
                      $f_var['tmp_hh'] = substr($f_var['in_scr_row'][$mfd_id],0,2);
                      $f_var['tmp_mm'] = substr($f_var['in_scr_row'][$mfd_id],2,2);
                      if($f_var['tmp_'.$a_key] == $f_var['fd'][$mfd_id]['hhmm'][$a_key][0][$b_key]) {
                        $f_var["tp"]-> assign   (  "tv_selected_".$a_key   , 'selected'  );
                      }
                    }

                  }
                  break;
              }
            }
          }
        }
      break;
      default:
      break;
    }

    // js_rule �]�w
    if(NULL!=$f_var['fd'][$mfd_id]['js_rule']['kind']) {
       $vjs_rule .= sl_js_rule($f_var['fd'][$mfd_id]['js_rule']['kind'],
                               $f_var['fd'][$mfd_id]['ename'],
                               $f_var['fd'][$mfd_id]['cname'],
                               $f_var['fd'][$mfd_id]['js_rule']['chk_value'],
                               $f_var['fd'][$mfd_id]['js_rule']['chk_len']
                             );
    }

    if('sign'==$f_var['fd'][$mfd_id]['type'] &&  'required'==$f_var['fd'][$mfd_id]['js_rule']['kind'] && '1'==$f_var['msel']){
       $f_var["tp"]-> assignglobal   (  "tv_signJs"    , 'Y'  );
    }

    ///// js_rule �]�w
    ///switch ($f_var['fd'][$mfd_id]['js_rule']['kind']) {
    ///  case "required":  // �@�w�n��J�ȡA�]�N�O�ˬd�O�_���ť�
    ///  $vjs_rule .= "
    ///                                   if(this.{$f_var['fd'][$mfd_id]['ename']}.value=='{$f_var['fd'][$mfd_id]['js_rule']['chk_value']}'){;
    ///                                     alert('�y{$f_var['fd'][$mfd_id]['cname']}�z��J���~!!') ;
    ///                                     this.{$f_var['fd'][$mfd_id]['ename']}.focus();
    ///                                     return(false)
    ///                                   };
    ///                                 ";
    ///  break;
    ///  default:
    ///  break;
    ///}

    $f_var["tp"]-> assignglobal   (  "tv_js_rule"    , $vjs_rule                                   ); // js rule

  }

  //add by ���\ 2018.02.07 ����33239 �^��2 �ʺA������� >>
  if($f_var['fd_dyn_file'] != "") { //��ܰʺA�������
        sl_get_file($f_var);
  }
  //add by ���\ 2018.02.07 ����33239 �^��2 �ʺA������� <<
  return;
}

// **************************************************************************
//  ��ƦW��: sl_get_re()
//  ��ƥ\��: �q�X�^���ҭn��J�����($f_var['fd_re'])
//  �ϥΤ覡: sl_get_re()
//  �{���]�p: Tony
//  �]�p���: 2007.08.21
// **************************************************************************
function sl_get_re($f_var,$sql_type='mysql') {// add by mimi 2009.04.13 $sql_type='mysql' = $sql_type �S���ǻ��ѼƮɪ��w�]�Ȭ�mysql
  $vjs_rule = ''; // ������]�w
  $mpkey_str = ''; // ���n��J����Ȧr�� Add by Tony 2007.08.20

  if('62'==$f_var['msel']) { // 2=�ק�
    if(NULL==$f_var['in_scr_row']) { // �S���ǤJ����  Add by Mimi 2007.08.20
      $f_var['mwhere'] = "s_num='{$f_var['f_s_num']}'";
      $f_var['morder'] = "s_num";
      $query1      = "select {$f_var['mtable']['body']}.*
                                 from {$f_var['mtable']['body']}
                                 where {$f_var['mwhere']}
                                 order by {$f_var['morder']}
                         ";
      //echo $query1."<BR>";
      //upd by mimi 2009.04.13 ��mssql�]���
      $result_scr  = call_user_func($sql_type.'_query',$query1);//mysql_query($query1);
      $row_scr     = call_user_func($sql_type.'_fetch_array',$result_scr);//mysql_fetch_array($result_scr);
      $f_var['in_scr_row'] = $row_scr;
    }
  }


  reset($f_var['fd_re']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
  while(list($mfd_id)=each($f_var['fd_re'])) {
    if('N'==$f_var['fd_re'][$mfd_id]['show_scr']) { // ���q�b�e���W
      continue; // loop �^�� while
    }

    //echo $f_var['fd_re'][$mfd_id]['type'].'-----';
    if('hidden'==$f_var['fd_re'][$mfd_id]['type']) { // �p�G type �O hidden �N���b�e���h�q���
      //echo $f_var['fd_re'][$mfd_id]['type'].'-----';
      $f_var["tp"]-> newBlock (  "tb_re_".$f_var['fd_re'][$mfd_id]['type']                  ); // ��� type
      reset($f_var['fd_re'][$mfd_id]); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
      while(list($mfd_name)=each($f_var['fd_re'][$mfd_id])) {
            $f_var["tp"]-> assign   (  "tv_".$mfd_name , $f_var['fd_re'][$mfd_id][$mfd_name]     );
      }
      continue; // loop �^�� while
    }

    // Add by Tony 2006.12.12
    if('hr'==$f_var['fd_re'][$mfd_id]['type']) { // �p�G type �O hr �N�b�e���h�W�[�@��<tr>
       $f_var["tp"]-> newBlock (  "tb_re_get_hr"      ); // ����u
       $f_var["tp"]-> assign   (  "tv_cname"      , $f_var['fd_re'][$mfd_id]['cname']   ); // ��줤��W��
       $f_var["tp"]-> assign   (  "tv_class"      , $f_var['fd_re'][$mfd_id]['class']   ); // class
       continue; // loop �^�� while
    }


    $mmemo = '';
    if(''<>$f_var['fd_re'][$mfd_id]['memo']) {
      $mmemo = '&nbsp;('.$f_var['fd_re'][$mfd_id]['memo'].')';
    }

    // Add by Tony 2007.08.20 �W�[ pkey �������
    if('Y'==$f_var['fd_re'][$mfd_id]['pkey']) { // ���n��J����Ȧr��
       //$mpkey_str = '<span class=pkey>��</span>';
       $mpkey_str = '<span class=pkey>*</span>';
    }
    else {
       $mpkey_str = '';
    }

    $f_var["tp"]-> newBlock (  "tb_re_in_get_fd"         ); // ��J�e��
    $f_var["tp"]-> assign   (  "tv_width1"     , $f_var["mwidth1"]                  ); //
    $f_var["tp"]-> assign   (  "tv_width2"     , $f_var["mwidth2"]                  ); //
    $f_var["tp"]-> assign   (  "tv_cname"      , $mpkey_str.$f_var['fd_re'][$mfd_id]['cname']   ); // ��줤��W��
    $f_var["tp"]-> assign   (  "tv_fd_ename"   , $f_var['fd_re'][$mfd_id]['ename']   ); // ���^��W��

    $f_var["tp"]-> assign   (  "tv_memo"       , $mmemo      ); // ��� memo
    $f_var["tp"]-> newBlock (  "tb_re_".$f_var['fd_re'][$mfd_id]['type']                  ); // ��� type
    //echo $f_var['fd_re'][$mfd_id]['type'].'++++';

    reset($f_var['fd_re'][$mfd_id]); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
    while(list($mfd_name)=each($f_var['fd_re'][$mfd_id])) {
      if('value'==$mfd_name && '62'==$f_var['msel']) { // �p�G�O value and 62=�^���ק�A�N��� $f_var['in_scr_row'][] ���
         //echo $mfd_id.'---';
         $mfd_value = $f_var['in_scr_row'][$mfd_id];
         if('file'==$f_var['fd_re'][$mfd_id]['type'] && NULL<>$mfd_value) {
           $file_path   = $f_var['proc_upfile_path'][u_showproc()].trim($f_var['in_scr_row'][$mfd_id]);
           $strpos = strrpos($_SERVER['SCRIPT_FILENAME'],'/');
           $strlen = substr($_SERVER['SCRIPT_FILENAME'],0,$strpos+1);
           $file_path = $strlen.$f_var[mupload_dir].trim($f_var['in_scr_row'][$mfd_id]);
           $file_uri  = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']."?f_sid={$f_var['f_sid']}";
           //echo $file_uri;
           //phpinfo();
           $mfile_name      = '<a href='.$f_var['proc_upfile_path'][u_showproc()].trim($f_var['in_scr_row'][$mfd_id]).'>'.trim($f_var['in_scr_row'][$mfd_id]).'</a>';
           $mfile_del_link  = "http://".$_SERVER['SERVER_NAME']."/~sl/sl_del_file.php?f_field_name={$mfd_id}&f_db={$f_var['mdb']}&f_table={$f_var['mtable']['body']}&f_wrere_field=s_num&f_no={$f_var['in_scr_row'][s_num]}&f_file_path={$file_path}&f_file_url={$file_uri}&f_file_name=".trim($f_var['in_scr_row'][$mfd_id]);
           //$mre_url = "&re_url=".u_showproc().".php?msel=2&f_s_num={$f_var['in_scr_row'][s_num]}&f_page={$f_var['f_page']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}";
           // �@�w�n�s�X�A���M�^�ǭȷ|���~�H�u�O�_�ǡI�I�I 2006.11.20 By Tony
           //upd by mimi 2012.06.01 ����-13608 �W�[�^��f_change1�Pf_change2
           $mre_url = u_showproc().".php?msel=2&f_sid={$f_var['f_sid']}&f_s_num={$f_var['in_scr_row'][s_num]}&f_page={$f_var['f_page']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_del={$f_var['f_del']}&f_change1={$f_var['f_change1']}&f_change2={$f_var['f_change2']}";
           $mfile_del_link .= "&re_url=".urlencode($mre_url); // return url
           //$mfile_name      = '<a href='.$f_var['proc_upfile_path'][u_showproc()].trim($f_var['in_scr_row'][$mfd_id]).'>'.trim($f_var['in_scr_row'][$mfd_id]).'</a>';
           //$mfile_del_link  = "http://eip.slc.com.tw/~sl/sl_del_file.php?f_field_name={$mfd_id}&f_table={$f_var['mtable']['head']}&f_wrere_field=s_num&f_no={$f_var['in_scr_row'][s_num]}&f_file_path={$f_var['proc_upfile_path'][u_showproc()]}&f_file_name=".trim($f_var['in_scr_row'][$mfd_id]);
            //$mre_url = "&re_url=".u_showproc().".php?msel=2&f_s_num={$f_var['in_scr_row'][s_num]}&f_page={$f_var['f_page']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}";
            // �@�w�n�s�X�A���M�^�ǭȷ|���~�H�u�O�_�ǡI�I�I 2006.11.20 By Tony
           //$mre_url = u_showproc().".php?msel=2&f_s_num={$f_var['in_scr_row'][s_num]}&f_page={$f_var['f_page']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}";
           //$mfile_del_link .= "&re_url=".urlencode($mre_url); // return url
            //echo $mfd_id.'-1-'.$f_var['fd_re'][$mfd_id]['type'].'-2-'.$mfd_value.'-3-<br>';
            $f_var["tp"]-> newBlock (  "tb_re_in_file_del"                              ); // �R���ɮ� Block
            $f_var["tp"]-> assign   (  "tv_file_name"       , $mfile_name            ); // �ɮצW��
            $f_var["tp"]-> assign   (  "tv_file_del_link"   , $mfile_del_link        ); // ��줤��W��
            $mfd_value = $f_var['fd_re'][$mfd_id][$mfd_name];
         }
         if('0000-00-00'==substr($mfd_value,0,10)) {
            $mfd_value = '';
         }
      }
      else {
        $mfd_value = $f_var['fd_re'][$mfd_id][$mfd_name];
      }
      //echo $mfd_id.'---';
      $f_var["tp"]-> assign   (  "tb_re_".$f_var['fd_re'][$mfd_id]['type'].".tv_".$mfd_name , $mfd_value      );
    }

    switch($f_var['fd_re'][$mfd_id]['type']) {
      case "select":
           reset($f_var['fd_re'][$mfd_id]['value']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
           while( list($mvalue)=each($f_var['fd_re'][$mfd_id]['value']) ) {
             $f_var["tp"]-> newBlock (  "tb_re_option"                  ); // option
             //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
             $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd_re'][$mfd_id]['value'][$mvalue]  );
             $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd_re'][$mfd_id]['show'][$mvalue]   );
             if('41'==$f_var['msel']){ // ���װϧO�w�] By Job 2014.05.30
               if( "qab_2" == $mfd_id && substr($f_var['fd_re'][$mfd_id]['value'][$mvalue],1,1)==substr($_SESSION["login_dept_id"],1,1)){
                 $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
               }else if($f_var['fd_re'][$mfd_id]['value'][$mvalue]==$f_var['fd_re'][$mfd_id]['selected']) {
                 $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
               }
             }

             if('62'==$f_var['msel']) { // 62=�ק�
               // �N select ���b��Ʀ�m
               if($f_var['fd_re'][$mfd_id]['value'][$mvalue]==trim($f_var['in_scr_row'][$mfd_id])) {
                 $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
               }
             }
           }
           //echo $mfd_id.'--------';
           //echo $f_var['fd_re'][$mfd_id]['value']['3'];
           //echo $f_var['fd_re'][$mfd_id]['value'][0]['3'].'++++++++';
           break;
      case "select2":
           reset($f_var['fd_re'][$mfd_id]['value']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
           while(list($mvalue)=each($f_var['fd_re'][$mfd_id]['value']) ) {
                 $f_var["tp"]-> newBlock (  "tb_re_option2"                  ); // option
                 //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
                 $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd_re'][$mfd_id]['value'][$mvalue]  );
                 $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd_re'][$mfd_id]['show'][$mvalue]   );

                 if('62'==$f_var['msel']) { // 62=�ק�
                   // �N select ���b��Ʀ�m
                   if($f_var['fd_re'][$mfd_id]['value'][$mvalue]==trim($f_var['in_scr_row'][$mfd_id])) {
                     $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
                   }
                 }
           }
           //echo $mfd_id.'--------';
           //echo $f_var['fd_re'][$mfd_id]['value']['3'];
           //echo $f_var['fd_re'][$mfd_id]['value'][0]['3'].'++++++++';
           break;
      case "select4":
           reset($f_var['fd_re'][$mfd_id]['value']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
           while( list($mvalue)=each($f_var['fd_re'][$mfd_id]['value']) ) {
             $f_var["tp"]-> newBlock (  "tb_re_option4"                  ); // option
             //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
             $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd_re'][$mfd_id]['value'][$mvalue]  );
             $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd_re'][$mfd_id]['show'][$mvalue]   );
             if('41'==$f_var['msel']){ // ���װϧO�w�] By Job 2014.05.30
               if( "qab_2" == $mfd_id && substr($f_var['fd_re'][$mfd_id]['value'][$mvalue],1,1)==substr($_SESSION["login_dept_id"],1,1)){
                 $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
               }else if($f_var['fd_re'][$mfd_id]['value'][$mvalue]==$f_var['fd_re'][$mfd_id]['selected']) {
                 $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
               }
             }

             if('62'==$f_var['msel']) { // 62=�ק�
               // �N select ���b��Ʀ�m
               if($f_var['fd_re'][$mfd_id]['value'][$mvalue]==trim($f_var['in_scr_row'][$mfd_id])) {
                 $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
               }
             }
           }
           //echo $mfd_id.'--------';
           //echo $f_var['fd_re'][$mfd_id]['value']['3'];
           //echo $f_var['fd_re'][$mfd_id]['value'][0]['3'].'++++++++';
           break;
      case "textarea":
      case "textarea2":  // Add By Job 2014.05.05 textarea2
           reset($f_var['fd_re'][$mfd_id]['size']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
           while( list($msize)=each($f_var['fd_re'][$mfd_id]['size']) ) {
             $f_var["tp"]-> assign   (  "tv_".$msize    , $f_var['fd_re'][$mfd_id]['size'][$msize]     ); // �]�w cols�Brows�Bwrap
           }
           //echo $msize.'---';
           //echo $f_var['fd_re'][$mfd_id]['size'][$msize].'+++';
           break;
      default:
           break;
    }

    // js_rule �]�w
    if(NULL!=$f_var['fd_re'][$mfd_id]['js_rule']['kind']) {
       $vjs_rule .= sl_js_rule($f_var['fd_re'][$mfd_id]['js_rule']['kind'],
                               $f_var['fd_re'][$mfd_id]['ename'],
                               $f_var['fd_re'][$mfd_id]['cname'],
                               $f_var['fd_re'][$mfd_id]['js_rule']['chk_value'],
                               $f_var['fd_re'][$mfd_id]['js_rule']['chk_len']
                             );
    }
    ///// js_rule �]�w
    ///switch ($f_var['fd_re'][$mfd_id]['js_rule']['kind']) {
    ///  case "required":  // �@�w�n��J�ȡA�]�N�O�ˬd�O�_���ť�
    ///  $vjs_rule .= "
    ///                                   if(this.{$f_var['fd_re'][$mfd_id]['ename']}.value=='{$f_var['fd_re'][$mfd_id]['js_rule']['chk_value']}'){;
    ///                                     alert('�y{$f_var['fd_re'][$mfd_id]['cname']}�z��J���~!!') ;
    ///                                     this.{$f_var['fd_re'][$mfd_id]['ename']}.focus();
    ///                                     return(false)
    ///                                   };
    ///                                 ";
    ///  break;
    ///  default:
    ///  break;
    ///}

    $f_var["tp"]-> assignglobal   (  "tv_js_rule"    , $vjs_rule                                   ); // js rule
  }
  return;
}

  // **************************************************************************
  //  ��ƦW��: sl_js_rule()
  //  ��ƥ\��: �ǤJ js ����ˬd���
  //  �ϥΤ覡: sl_js_rule($vkind,$vfd_ename,$vfd_cname,$vchk_value,$vchk_len)
  //  �{���]�p: Tony
  //  �]�p���: 2006.11.20
  // **************************************************************************
  function sl_js_rule($vkind,$vfd_ename,$vfd_cname,$vchk_value,$vchk_len) {
     if(NULL!=$vkind) {
        switch ($vkind) {
             case "required":  // �@�w�n��J�ȡA�]�N�O�ˬd�O�_���ť�
                  $vchk = "$.trim($('[name={$vfd_ename}]').val()) == '{$vchk_value}'"; // edit by Job 2015.03.31 �ץ�IE8�L�k���Ҫť�
                  //$vchk = "this.{$vfd_ename}.value.trim()=='{$vchk_value}'";    // upd by �¶v 2015.01.09 �W�[trim()�h�ť�
                  break;
             case "chkstr":  // u_chkstr ��� zi.js
                  $vchk = "u_chkstr(this.{$vfd_ename}.value,'{$vchk_value}',{$vchk_len})==false";
                  break;
             case "chkdate":  // �ˬd���
                  $vchk = "!u_chkdate1(this.{$vfd_ename}.value,{$vchk_len})";
                  break;
             case "chkid":  // �ˬd������
                  $vchk = "!u_chkid(this.{$vfd_ename}.value)";
                  break;
             default:
                  break;
        }
        $vjs_rule .= "
                       if($vchk){
                         alert('�y{$vfd_cname}�z��J���~!!') ;
                         this.{$vfd_ename}.focus();
                         return(false);
                       };
                     ";
     }
     return($vjs_rule);
  }
// **************************************************************************
//  ��ƦW��: sl_list()
//  ��ƥ\��: �q�X�s�����Y�P�����
//  �ϥΤ覡: sl_list($f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.11.08
// **************************************************************************
function sl_list($f_var,$sql_type='mysql') {// add by mimi 2009.04.13 $sql_type='mysql' = $sql_type �S���ǻ��ѼƮɪ��w�]�Ȭ�mysql
  //echo $sql_type.'<hr>';
  reset($f_var["list"]); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
  $f_var["tp"]-> newBlock (  "tb_list_01"                                ); // �q�X���


  // Add by Tony 2007.08.16 �����ѥD�{���ǤJ��($f_var['qty_cnt'])�ܼƴN���ݭn�A���ⵧ��
  //echo $f_var['qty_cnt'].'------';
  if(NULL==$f_var['qty_cnt']) { // �S���ǤJ����
     $query_qty   =  "select count(*) as max_cnt
                              from {$f_var['mtable']['head']}  {$f_var['from_join']} /* add by ���� ���F�o��{��(http://eip.slc.com.tw/~docs/slcar/sl_car07.php)�W�[��{$f_var['from_join']}(��¾�H���d��) */
                              where {$f_var['mwhere']}
                              order by {$f_var['morder']}
                     ";
     sl_showsql($query_qty);
     //upd by mimi 2009.04.13 ��mssql�]���
     $result_qty  = call_user_func($sql_type.'_query',$query_qty);//mysql_query($query_qty);
     $row_qty     = call_user_func($sql_type.'_fetch_array',$result_qty);//mysql_fetch_array($result_qty);

     $f_var['qty_cnt']    = $row_qty['max_cnt']; // �ثe�`����
  }


  $f_var['msnum']  = ($f_var['f_page']*$f_var['mmaxline'])-$f_var['mmaxline']; // �_�l���
  $mpagetot = floor(((($f_var['mmaxline']-1)+$f_var['qty_cnt'])/$f_var['mmaxline'])); // �D��ơA�̤j����
  $f_var["tp"]-> assign   ( array("tv_page"     => number_format($f_var['f_page']),     // �ثe����
                                  "tv_maxpage"  => number_format($mpagetot),   // �`����
                                  "tv_reccount" => number_format($f_var['qty_cnt'])  // ��Ƶ���
                                 )
                          );

  for($i=0;$i<count($f_var['list']['th_width']);$i++) {
    $morder_link = '#';
    $morder_pic = '';

    //upd by leeyen 2012.02.24 �ץ��ϥΦۭq��ܨ禡�ɤ���ƧǪ����D
    if( strstr($f_var['list']['fd_name'][$i] ,$f_var['f_order_fd']) ) {
    //$func_b = strpos($f_var['list']['fd_name'][$i],'('); // function �W�� "(" ��m
    //$func_e = strpos($f_var['list']['fd_name'][$i],')'); // function �W�� ")" ��m
    //if($f_var['f_order_fd']==$f_var['list']['fd_name'][$i] || $f_var['f_order_fd'] == substr($f_var['list']['fd_name'][$i],$func_b+1,$func_e-$func_b-1)) {
      //if('8966389'==$_SESSION["login_empno"]) {
      //   echo $f_var['list']['fd_name'][$i].'------';
      //}
      $morder_md = iif('asc'==$f_var['f_order_md'],'desc','asc');
      $f_var['f_order_md'] = $morder_md;
      $morder_pic_name = iif('asc'==$morder_md,'desc_order.png','asc_order.png');
      $morder_pic_alt  = iif('asc'==$morder_md,'����','���W');
      $morder_pic      = "&nbsp;<img src='/~sl/img/{$morder_pic_name}' alt='{$morder_pic_alt}' title='{$morder_pic_alt}'>";
    }
    else {
      $morder_md = 'asc';
    }

    //if(!strstr('u_upd/u_del/u_close',$f_var['list']['fd_name'][$i])) {
    if(!strstr('u_upd/u_del/u_close/u_2flow',$f_var['list']['fd_name'][$i])) {//upd by mimi 2011.07.01 �W�[��ñ�֥\��
       // Mark by Tony 2007.09.05
       //$morder_link = u_showproc().".php?msel=4&f_page={$f_var['f_page']}&f_que={$f_var['f_que']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['list']['fd_name'][$i]}&f_order_md={$morder_md}&f_que={$f_var['f_que']}&f_change1={$f_var['f_change1']}&f_change2={$f_var['f_change2']}";

       // Add by Tony 2007.09.05 list �p�G���ϥ� function �άO�h�Ӹ�ƦX�֤@��B�z�A�N�t�~�B�z
       $mfd_name = $f_var['list']['fd_name'][$i];
       $morder_fd = $mfd_name;
       if(strstr($mfd_name,',')) {
          $afd_name = explode(",",$mfd_name);
          $morder_fd = $afd_name[0]; // �Ĥ@�����W�ٷ�@���ޭ�
          $func_b = strpos($afd_name[0],'('); // function �W�� "(" ��m
          $func_e = strpos($afd_name[0],')'); // function �W�� ")" ��m
          if($func_b>0 && $func_e>0) { // �����
             $morder_fd = substr($afd_name[0],$func_b+1,$func_e-$func_b-1); // ����ǤJfuncfion���� sl_xxxx(fd_name)->fd_name
          }
       }
       else {
          $func_b = strpos($morder_fd,'('); // function �W�� "(" ��m
          $func_e = strpos($morder_fd,')'); // function �W�� ")" ��m
          if($func_b>0 && $func_e>0) { // �����
             $morder_fd = substr($morder_fd,$func_b+1,$func_e-$func_b-1); // ����ǤJfuncfion���� sl_xxxx(fd_name)->fd_name
          }
       }
       if('4'==$f_var['msel']){
        $morder_link = u_showproc().".php?msel=4&f_page={$f_var['f_page']}&f_que={$f_var['f_que']}&f_del={$f_var['f_del']}&f_order_fd={$morder_fd}&f_order_md={$morder_md}&f_que={$f_var['f_que']}&f_change1={$f_var['f_change1']}&f_change2={$f_var['f_change2']}&f_sid={$f_var['f_sid']}";
       }
    }


    $f_var["tp"]-> newBlock (  "tb_list_01_th"                         ); // �q�X���
    $f_var["tp"]-> assign   (  "tv_th_width"   , $f_var['list']['th_width'][$i]      ); //
    $f_var["tp"]-> assign   (  "tv_th_name"    , $f_var['list']['th_name'][$i]       ); //
    $f_var["tp"]-> assign   (  "tv_fd_ename"   , $f_var['list']['fd_name'][$i]       ); //
    $f_var["tp"]-> assign   (  "tv_order_link" , $morder_link                        ); //
    $f_var["tp"]-> assign   (  "tv_order_pic"  , $morder_pic                         ); //
    //echo $f_var['list']['th_width'][$i].'++++++++';
    //echo $f_var['list']['th_name'][$i].'++++++++';
  }

  $mnum = 1;
  while ($row1 = call_user_func($sql_type.'_fetch_array',$f_var['list_result'])){  //mysql_fetch_array($f_var['list_result'])) {
    $mclass = iif($mnum%2==0,'field_color','white_color'); // Add by Tony 2008-04-16 update by MIMI 2008-12-23
    $f_var["tp"]-> newBlock (  "tb_list_01_body_th"        ); // �q�X��� // qq:�o�q���ǽ���
    $f_var["tp"]-> assign   (  "tv_class"   , $mclass ); //
    for($i=0;$i<count($f_var['list']['fd_name']);$i++) {   // �N $f_var['list'] �w�q������X
      $mmsel = iif($f_var['mmsel'] == NULL,'41',$f_var['mmsel']);  // ���]���s���� link
      $mfd_value      = '';   // �w�]����
      $mfd_name       = $f_var['list']['fd_name'][$i];   // ���W��
      $morder_fd = $f_var['list']['fd_name'][$i];
      // �h�����X�ֽаѾ\wh01_init.php����$f_var["list"] Add by Tony 2007.08.24
      if(strstr($mfd_name,',')) {
         $afd_name = explode(",",$mfd_name);
         $mfd_row1_value = '';
         for($j=0;$j<count($afd_name);$j++) {
             $func_b = strpos($afd_name[$j],'('); // function �W�� "(" ��m
             $func_e = strpos($afd_name[$j],')'); // function �W�� ")" ��m
             if($func_b>0 && $func_e>0) { // �����
                $mfunc_name     = substr($afd_name[$j],0,$func_b); // ��� function name
                $mfd_name       = substr($afd_name[$j],$func_b+1,$func_e-$func_b-1); // ����ǤJfuncfion���� sl_xxxx(fd_name)->fd_name
                //echo $afd_name[$j];
                //echo $mfd_name.'___';
                //echo $row1[$afd_name[$j]].'+++';
                //add by yifun 2014.04.14
                if(strstr($mfd_name,'date') && strstr($row1[$mfd_name],'-')){
                  $mfd_name = substr($mfd_name,0,10);
                }
                $mfd_row1_value .= " " . sl_eval_fnc_name($mfunc_name,$row1[$mfd_name]);
                //echo $mfd_row1_value.'____<br>';
             }
             else {
               //add by yifun 2014.04.14
               if(strstr($mfd_name,'date') && strstr($row1[$afd_name[$j]],'-')){
                 $mfd_row1_value .= " " . sl_2ymd(str_replace('-','',substr($row1[$afd_name[$j]],0,10)),'');
               }
               else{
                 $mfd_row1_value .= " " . $row1[$afd_name[$j]];                // ����
               }
               //echo $mfd_name."<br>";
               //echo $mfd_row1_value."<br>";
             }
         }
         // �]���h�����ۥ[�A�G�j����쫬�A��TEXT�_�h�|���~! by Tony 2007.08.24
         $mfd_type       = 'text'; // ��쫬�A

      }
      else {
         $mfd_row1_value = $row1[$mfd_name];                // ����
         if(''==$f_var['list']['fd_type'][$i]){
            $mfd_type       = $f_var['fd'][$mfd_name]['type']; // ��쫬�A
         }
         else{
            $mfd_type       = $f_var['list']['fd_type'][$i]; // ��쫬�A
         }
      }


      $msubstr_s      = $f_var['fd'][$mfd_name]['start']; // substr �_�l��m
      $msubstr_e      = $f_var['fd'][$mfd_name]['end'];   // substr ������m




      // Add by Tony 2007.05.28 �����ƨq�X�������
      $func_b = strpos($mfd_name,'('); // function �W�� "(" ��m
      $func_e = strpos($mfd_name,')'); // function �W�� ")" ��m
      if($func_b>0 && $func_e>0) { // �����
         $mfunc_name     = substr($mfd_name,0,$func_b); // ��� function name
         $mfd_name       = substr($mfd_name,$func_b+1,$func_e-$func_b-1); // ����ǤJfuncfion���� sl_xxxx(fd_name)->fd_name
         //$mfd_row1_value = $row1[$mfd_name];                // ����
         //$mfd_row1_value = $row1[$mfd_name].'-'.sl_eval_fnc_name($mfunc_name,$row1[$mfd_name]);
         $mfd_row1_value = sl_eval_fnc_name($mfunc_name,$row1[$mfd_name]);
      }

   switch ($mfd_name) {
        //case "s_num":
        //    if("Y" == $row1["attach"]){
        //        $f_var['show'] = '<img src="/~sl/img/attach.png" border="0" alt="������">';
        //        $mfd_value = "{$f_var['show']}";
        //        $mfd_value .= $row1["s_num"];
        //     }
        //     else{
        //        $mfd_value = $row1["s_num"];
        //     }
        //    break;
        case "u_add":
                if('0000-00-00 00:00:00'==$row1['d_date'] or ''==$row1['d_date']) { //add by mimi�]�����dslb01,d_date�O����~
                   $mfd_value = '<img src="/~sl/img/add.png"   border="0">';
                }
             $mmsel = '99'; // �ק�
             break;

        case "u_upd":
             $mmsel = '2'; // �ק�
             $vct_ok = 'N';
             //echo $f_var["upd_ct"];
             switch ($f_var["upd_ct"]) {
                  case "empno": // �ˬd���u�s��
                       if($row1['b_empno']==$_SESSION["login_empno"]) {
                          $vct_ok = 'Y';
                       }
                       break;
                  case "dept": // �ˬd�����N��
                       if('Y'==$_SESSION["it_mode"]) {
                          if('S121'==$_SESSION["login_dept_id"] or 'S122'==$_SESSION["login_dept_id"]) {
                             $vct_ok = 'Y';
                          }
                       }
                       else {
                          if($row1['b_dept_id']==$_SESSION["login_dept_id"]) {
                             $vct_ok = 'Y';
                          }
                       }
                       break;
                  case "user_def": // �ϥΪ̦ۦ�w�q
                       if('Y'==$f_var['user_def']) {
                          $vct_ok = 'Y';
                       }
                       if('empno'==$f_var['user_def_empno']) { //�ˬd���u�s��.....2008/01/21..MIMI
                         if($row1['b_empno']==$_SESSION["login_empno"]) {
                            $vct_ok = 'Y';
                         }
                       }
                       break;
                  default: // ���ˬd�A�q�q���i�H�ק�
                       $vct_ok = 'Y';
                       break;
             }
             if('Y'==$vct_ok) {
                if($f_var['close'] == 'N' && substr($row1['dh02'],0,2) == '02'){//20141113 add by �a�� �w�O�խק�P�_
                }else{
                  if('0000-00-00 00:00:00'==$row1['d_date'] or ''==$row1['d_date']) { //add by mimi�]�����dslb01,d_date�O����~
                    $mfd_value = '<img src="/~sl/img/upd.png"   border="0" alt="�ק惡��" title="�ק惡��">';
                  }
                }
             }

             break;
        case "u_del":
             $mmsel = '3'; // �@�o
             if(NULL !=$f_var["del_ct"]){//add 2008.02.29 by:Mimi �P�_�֥i�H�@�o
               if('Y'==$f_var['d_user_def']){
                 //add by mimi 2009.10.23 RTMDB ��d_date�w�]�ONULL
                 if('0000-00-00 00:00:00'==$row1['d_date'] or NULL==$row1['d_date']) {
                   $mfd_value = "<img src='/~sl/img/del.png'   border='0' alt='�@�o����' title='�@�o����'>";
                 }
               }
               if('S'==$f_var['d_user_def']){
                 //add by �p�� 2017.02.07
                 if('0000-00-00 00:00:00'==$row1['d_date'] && '0000-00-00 00:00:00'!=$row1['d_date2']) {
                   $mfd_value = "<img src='/~sl/img/del.png'   border='0' alt='�@�o����' title='�@�o����'>";
                 }
               }
             }
             else{
               if($row1['b_empno']==$_SESSION["login_empno"]) {
                 if($f_var['close'] == 'N' && substr($row1['dh02'],0,2) == '02'){//20141113 add by �a�� �w�O�է@�o�P�_
                 }else{
                   if('0000-00-00 00:00:00'==$row1['d_date']) {
                      $mfd_value = "<img src='/~sl/img/del.png'   border='0' alt='�@�o����' title='�@�o����'>";
                   }
                 }
               }
             }
             break;
        case "u_close":
             if(NULL==$f_var["close_ct"]) {
                sl_send_msg('it',"0775711","u_close-�ܼƥ��w�q�{��",$_SERVER["PHP_SELF"]);
                sl_send_msg('it',"8966389","u_close-�ܼƥ��w�q�{��",$_SERVER["PHP_SELF"]);
                $f_var["close_ct"]=$f_var["upd_ct"];
             }
             else{
              $f_var["close_ct"]=$f_var["close_ct"];
             }
             $mmsel = '9'; // ����
             $vct_ok = 'N';
             switch ($f_var["close_ct"]) {
                  case "empno": // �ˬd���u�s��
                       if($row1['b_empno']==$_SESSION["login_empno"]) {
                          $vct_ok = 'Y';
                       }
                       break;
                  case "dept": // �ˬd�����N��
                       if('Y'==$_SESSION["it_mode"]) {
                          if('S121'==$_SESSION["login_dept_id"] or 'S122'==$_SESSION["login_dept_id"]) {
                             $vct_ok = 'Y';
                          }
                       }
                       else {
                          if($row1['b_dept_id']==$_SESSION["login_dept_id"]) {
                             $vct_ok = 'Y';
                          }
                       }
                       break;
                  case "user_def": // �ϥΪ̦ۦ�w�q
                       //echo $row1['b_empno'].'--'.$_SESSION["login_empno"].'<br>';
                       if('Y'==$f_var['user_def']) { //���w�Y������...
                          $vct_ok = 'Y';
                       }
                       if('empno'==$f_var['user_def_empno']) { //�ˬd���u�s��.....2008/01/21..MIMI
                         if($row1['b_empno']==$_SESSION["login_empno"]) {
                            $vct_ok = 'Y';
                         }
                       }
                       break;
                  default: // ���ˬd�A�q�q���i�H�ק�
                       $vct_ok = 'Y';
                       break;
             }
             if('Y'==$vct_ok) {
                if($f_var['close']=='N' && substr($row1['dh02'],0,2) == '02'){//20141113 add by �a�� �w�O�յ��קP�_
                }else{
                  if('0000-00-00 00:00:00'==$row1['d_date']) {
                    $mfd_value = '<img src="/~sl/img/lock.png" border="0" alt="���צ���" title="���צ���">';
                  }
                }
             }
             break;
        case "u_copy":
             $mmsel = 'C'; // �ק�
             $vct_ok = 'N';
             switch ($f_var["upd_ct"]) {
                  case "empno": // �ˬd���u�s��
                       if($row1['b_empno']==$_SESSION["login_empno"]) {
                          $vct_ok = 'Y';
                       }
                       break;
                  case "dept": // �ˬd�����N��
                       if('Y'==$_SESSION["it_mode"]) {
                          if('S121'==$_SESSION["login_dept_id"] or 'S122'==$_SESSION["login_dept_id"]) {
                             $vct_ok = 'Y';
                          }
                       }
                       else {
                          if($row1['b_dept_id']==$_SESSION["login_dept_id"]) {
                             $vct_ok = 'Y';
                          }
                       }
                       break;
                  case "user_def": // �ϥΪ̦ۦ�w�q
                       if('Y'==$f_var['user_def']) {
                          $vct_ok = 'Y';
                       }
                       if('empno'==$f_var['user_def_empno']) { //�ˬd���u�s��.....2008/01/21..MIMI
                         if($row1['b_empno']==$_SESSION["login_empno"]) {
                            $vct_ok = 'Y';
                         }
                       }
                       break;
                  default: // ���ˬd�A�q�q���i�H�ק�
                       $vct_ok = 'Y';
                       break;
             }
             if('Y'==$vct_ok) {
                if('0000-00-00 00:00:00'==$row1['d_date'] or ''==$row1['d_date']) { //add by mimi�]�����dslb01,d_date�O����~
                   $mfd_value = '<img src="/~sl/img/copy.png"   border="0" alt="�ƻs����" title="�ƻs����">';
                }
             }
             break;
        case "u_trace":
           $mmsel = 'A'; // �l��
           $vct_ok = 'N';
           switch ($f_var["trace_ct"]) {
             case "empno": // �ˬd���u�s��
               if($row1['b_empno']==$_SESSION["login_empno"]) {
                 $vct_ok = 'Y';
               }
               break;
             case "dept": // �ˬd�����N��
               if('Y'==$_SESSION["it_mode"]) {
                 if('S121'==$_SESSION["login_dept_id"] or 'S122'==$_SESSION["login_dept_id"]) {
                    $vct_ok = 'Y';
                 }
               }
               else {
                 if($row1['b_dept_id']==$_SESSION["login_dept_id"]) {
                    $vct_ok = 'Y';
                 }
               }
               break;
             case "user_def": // �ϥΪ̦ۦ�w�q
               //echo $row1['b_empno'].'--'.$_SESSION["login_empno"].'<br>';
               if('Y'==$f_var['user_def']) { //���w�Y������...
                 $vct_ok = 'Y';
               }
               if('empno'==$f_var['user_def_empno']) { //�ˬd���u�s��.....2008/01/21..MIMI
                 if($row1['b_empno']==$_SESSION["login_empno"]) {
                   $vct_ok = 'Y';
                 }
               }
               break;
             default: // ���ˬd�A�q�q���i�H�ק�
               $vct_ok = 'Y';
               break;
           }
           if('Y'==$vct_ok) {
             if('0000-00-00 00:00:00'==$row1['d_date']) {
               $mfd_value = '<img src="/~sl/img/trace.png" border="0" alt="�l�ܦ���" title="�l�ܦ���">';
             }
           }
           break;
        case "u_2flow"://add by mimi 2011.07.01 �W�[��ñ�֥\��
             if(NULL==$f_var["2flow_ct"]) {
                $f_var["2flow_ct"]=$f_var["upd_ct"];
             }
             else{
              $f_var["2flow_ct"]=$f_var["2flow_ct"];
             }
             $mmsel = 'f'; // ��ñ��
             $vct_ok = 'N';
             switch ($f_var["2flow_ct"]) {
                  case "empno": // �ˬd���u�s��
                       if($row1['b_empno']==$_SESSION["login_empno"]) {
                          $vct_ok = 'Y';
                       }
                       break;
                  case "dept": // �ˬd�����N��
                       if('Y'==$_SESSION["it_mode"]) {
                          if('S121'==$_SESSION["login_dept_id"] or 'S122'==$_SESSION["login_dept_id"]) {
                             $vct_ok = 'Y';
                          }
                       }
                       else {
                          if($row1['b_dept_id']==$_SESSION["login_dept_id"]) {
                             $vct_ok = 'Y';
                          }
                       }
                       break;
                  case "user_def": // �ϥΪ̦ۦ�w�q
                       //echo $row1['b_empno'].'--'.$_SESSION["login_empno"].'<br>';
                       if('Y'==$f_var['user_def']) { //���w�Y������...
                          $vct_ok = 'Y';
                       }
                       if('empno'==$f_var['user_def_empno']) { //�ˬd���u�s��.....2008/01/21..MIMI
                         if($row1['b_empno']==$_SESSION["login_empno"]) {
                            $vct_ok = 'Y';
                         }
                       }
                       break;
                  default: // ���ˬd�A�q�q���i�H�ק�
                       $vct_ok = 'Y';
                       break;
             }
             if('Y'==$vct_ok) {
                if('0000-00-00 00:00:00'==$row1['d_date']) {
                   $mfd_value = '<img src="/~sl/img/flow.png" border="0" alt="������ñ�ֳ�" title="������ñ�ֳ�">';
                }
             }
             break;
        default:
            switch ($mfd_type) {
                 case "select":
                      //upd by mimi 2012.03.06 �ĤT�X����,�i��|�����`,�ҥH�ץ�...
                      $str_value = str_replace('.','-',$mfd_row1_value);
                      $ex_value  = explode('-',$str_value);
                      $mfd_value = trim($ex_value[1]);
                      //$mfd_value = trim(substr($mfd_row1_value,3,999));
                      break;
                 case "select2":
                      $mfd_value = trim($mfd_row1_value);
                      break;
                 case "textarea":
                      //$mfd_value = nl2br($mfd_row1_value); // Mark by Tony 2007.09.03
                      $mfd_value = '<pre>'.$mfd_row1_value.'</pre>';
                      break;
                 case "date":
                      switch ($f_var['show_year']) {
                          case "2":
                               $mfd_value = sl_2ymd(trim($mfd_row1_value),'.');   //2008.04.17 add by mimi �[�h�O�s���ץX��..������A�|�Q����..�ҥH�אּ"."
                               break;
                          case "4":
                               $mfd_value = sl_4ymd(trim($mfd_row1_value));
                               break;
                          default:
                               $mfd_value = (trim($mfd_row1_value));
                               break;
                      }
                      break;
                 case "date2":
                        $mfd_value = sl_2ymd(trim($mfd_row1_value));
                      break;
                 //add by mimi 2009.08.31 �ȯZ���s���n�q�X�P��
                 case "date3":
                        $mfd_value = sl_2ymd(trim($mfd_row1_value),'.').' '.sl_day_week($mfd_row1_value);
                      break;
                 case "date4": //add by �Ϊ� 2015.08.19 ����ܥX�� ��� �ɤ���
                        $mfd_value = $mfd_row1_value;
                      break;
                 case "time":
                        $mfd_value = substr(trim($mfd_row1_value),0,2).':'.substr(trim($mfd_row1_value),2,2);
                      break;
                 case "substr":
                      if('0000'==substr($mfd_row1_value,0,4) ) {
                         $mfd_value = '';
                      }
                      else {
                         $mfd_value = trim(substr($mfd_row1_value,$msubstr_s,$msubstr_e));
                      }

                      break;
                 default:
                      //if(strstr($mfd_name,'date')) { // ������A�t�~�B�z
                        //echo $mfd_row1_value.'---';
                        if('0000-00-00' == substr($mfd_row1_value,0,10)) {
                          $mfd_value = '';
                        }
                        else {
                          //$mfd_name = '<font color=red>'.substr($row1[$f_var['list']['fd_name'][$i]],0,10).'</font>';
                          //$mfd_value = substr($mfd_row1_value,0,10);
                          //if(strstr($mfd_name,'date') ) { // Mark by Tony 2009.06.23 �j�� sl_hosts �q�X�ɤ���
                          if(strstr($mfd_name,'date') and ('sl_hosts'<>u_showproc() and 'acct01'<>u_showproc())) { // ������A�t�~�B�z //modify by phil 20101105 acct01�ӵ{���[SHOW�ɤ���

                             $mfd_value = substr($mfd_row1_value,0,10);
                          }
                          else {
                             $mfd_value = $mfd_row1_value;
                          }
                        }
                      //}
                      //else {
                      //  $mfd_value = trim($mfd_row1_value);
                      //}
                      break;
             }

             break;

      }
      $f_var['new']='';
      $f_var['show']='';
      $proc = u_showproc();
      if('slp01'!=$proc){
        if($mfd_name ==$f_var['list']['fd_name'][0]){    //�w��Ĥ@�����q�Ϫ��B�z
          //if('8966389'==$_SESSION['login_empno']) {
            //echo $_SERVER["PHP_SELF"].'---';
            //echo $row1['s_num'].'---';
            //echo $_SESSION['login_empno'].'***';
          sl_open('sl');//2009-08-18 add by�F��
          //upd by mimi 2009-05-03 �S�\Ū�L���N�q�XNEW
          $query_web   =  "select *
                                   from sl.web_log
                                   where sl.web_log.wg01='{$_SESSION['login_empno']}' and
                                         sl.web_log.wg05='{$_SERVER["PHP_SELF"]}' and
                                         sl.web_log.wg06='{$row1['s_num']}'
                                   order by sl.web_log.wg01,sl.web_log.wg05,sl.web_log.wg06
                          ";
          $result_web = mysql_query($query_web);
          $row_web = mysql_fetch_array($result_web);
          //echo $query_web;
          //echo 'row_web:'.$row_web['m_date'].'---';
          //echo 'row_web:'.$row_web['s_num'].'---<br>';
          //echo 'row1_b_date:'.$row1['b_date'].'---';
          //echo 'row_web_date:'.$row_web['b_date'].'---<br>';
          //echo 'row1_m_date:'.$row1['m_date'].'---';
          //echo 'row_web_date:'.$row_web['m_date'].'---<br>';
          //upd by mimi 2010-03-23 ����-9356 �令�ϥ�7�餺�qNEW�N�n�F
          //if($row_web['m_date']<$row1['b_date'] or $row_web['m_date']<$row1['m_date']) {
          //  $f_var['new']  ='<img src="/~sl/img/new.gif" border="0">';
          //}
          //}

          //upd by mimi 2009-05-03 ���ϥΤC�餺���qNEW�F
          if(date("Y-m-d",time()-60*60*24*7)<=substr($row1['b_date'],0,10)){  //�C�餺
            //echo date("Y-m-d",time()-60*60*24*7).'----'.substr($row1['b_date'],0,10).'<hr>';
            $f_var['new']  ='<img src="/~sl/img/new.gif" border="0">';
          }
          if("Y" == $row1["attach"] and NUll != $row1["attach"]){             //������
            $f_var['show'] = '<img src="/~sl/img/attach.png" border="0" alt="������">';
          }
          //$mfd_value = $f_var['new'].$f_var['show'].$row1["{$f_var['list']['fd_name'][0]}"];
          //update by mimi 2008-12-23
          $mfd_value = $f_var['new'].$f_var['show'].$mfd_value;
        }
      }
      //if(NUll != $row1["attach"]){
      //  //echo $row1["attach"];
      //   if($mfd_name ==$f_var['list']['fd_name'][0]){
      //   //echo $f_var['list']['fd_name'][0].'----';
      //   //echo $row1["{$f_var['list']['fd_name'][0]}"].'****';
      //   //echo $row1["attach"].'<br>';
      //     if("Y" == $row1["attach"]){
      //         $f_var['show'] = '<img src="/~sl/img/attach.png" border="0" alt="������">';
      //         $mfd_value = "{$f_var['show']}";
      //         $mfd_value .= $row1["{$f_var['list']['fd_name'][0]}"];
      //
      //         //echo $f_var['list']['fd_name'][0].'----';
      //         //echo $f_var['show'];
      //         //echo $row1["{$f_var['list']['fd_name'][0]}"].'****';
      //         //echo $row1["attach"].'<br>';
      //     }
      //     else{
      //         $mfd_value = $row1["{$f_var['list']['fd_name'][0]}"];
      //     }
      //   }
      //}
      //echo $mfd_value.'++++++++++++++++++++++++++';
      if(NULL<>$f_var["f_que"]) { // �d�ߥ�����r��@�ϥճB�z
        //$mfd_value = str_replace($f_var["f_que"],"<span style='{$f_var['mque_color']}'>{$f_var['f_que']}</span>",$mfd_row1_value);
        //$mfd_value = str_replace($f_var["f_que"],"<span style='{$f_var['mque_color']}'>{$f_var['f_que']}</span>",$mfd_value);
        $str_que  = substr_count($f_var['f_que']," ");
        if('0'<$str_que){
          $fd_que=explode(" ",$f_var['f_que']);
                  for($j=0;$j<count($fd_que);$j++){
                    $f_var['f_que_ary'] = $fd_que[$j];
            $mfd_value = sl_span_str($f_var,$mfd_value);
                  }
        }
        else{
          $mfd_value = sl_span_str($f_var,$mfd_value);
        }
      }
      $url = 'http://'.$_SERVER['SERVER_NAME'].'/~sl/sl_download.php?show=1&file=';
      switch ($mfd_type) {
        case "file":
          $mfd_value=$mfd_value;
          //$mfd_link = $f_var[mupload_dir].$mfd_value;  //mark by �¶v 2016.09.10
          $mfd_link = $url.base64_encode(getcwd().'/'.$f_var[mupload_dir].$mfd_value);  // add by �¶v 2016.09.10 ����29884-�ɮקt�����ɦW�|�L�k�}��
          break;
        case "file2":
          //$mfd_link = $f_var[mupload_dir].$mfd_value);  //mark by �¶v 2016.09.10
          $mfd_link = $url.base64_encode(getcwd().'/'.$f_var[mupload_dir].$mfd_value);  // add by �¶v 2016.09.10 ����29884-�ɮקt�����ɦW�|�L�k�}��
          $mfd_arr=split("/",$mfd_value);
          $mfd_value=$mfd_arr[1];
          break;
        default:
          $mfd_value=$mfd_value;

          //upd by mimi 2012.06.01 ����-13608 �W�[�^��f_change1�Pf_change2
          //upd by �P�p�� 2014.10.31 �W�[�^��f_h_s_num
          $mfd_link = u_showproc().".php?msel=".$mmsel."&f_s_num=".$row1["s_num"]."&f_h_s_num=".$row1["h_s_num"]."&f_page=".$f_var['f_page']."&f_del=".$f_var["f_del"]."&f_que=".$f_var["f_que"]."&mnf01=".$_GET[mnf01]."&f_sid={$f_var['f_sid']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_change1={$f_var['f_change1']}&f_change2={$f_var['f_change2']}&f_id=".$row1["id"]."&f_date_s=".$row1["date_s"]."&f_date_e=".$row1["date_e"]."&f_empno=".$row1["empno"]."";
          break;
      }
      //$mfd_link = iif($mfd_type=='file',$f_var[mupload_dir].$mfd_value,u_showproc().".php?msel=".$mmsel."&f_s_num=".$row1["s_num"]."&f_page=".$f_var['f_page']."&f_del=".$f_var["f_del"]."&f_que=".$f_var["f_que"]."&mnf01=".$_GET[mnf01]."&f_sid={$f_var['f_sid']}");
      $f_var["tp"]-> newBlock (  "tb_list_01_body_detail"                               ); // �q�X���

      // Add by Tony 2008-04-16
      if('hr_is'==$f_var['ap_id']) { // �[�h�O�t�ΡA�C��t�~�B�z
         if('W'==$row1['im02'] or 'W'==$row1['ic06']) {
            $mclass = 'field_color_hr_w';
         }
         else {
            $mclass = 'field_color';
         }
         $f_var["tp"]-> assign   (  "tv_class"      , $mclass ); //
      }

      // Add by Mimi 2008-09-17
      if('tran03.php'==u_showproc().".php"){ // ���d�f�d�d�ߡA�w�ﵲ�����C��t�~�B�z
        $fd_year = date("Y")-1911;
        $fd_date = $fd_year.date("-m-d");
        //echo $fd_date.'--'.$row1['b01_14'].'<hr>';
        if($row1['b01_14']==$fd_date) {
           $mclass = 'field_color_hr_w';
        }
        if(''==$mclass){
           $mclass = 'field_color';
        }
        if('field_color'==$mclass){
           $mclass = '';
        }
        $f_var["tp"]-> assign   (  "tv_class"      , $mclass ); //
      }
      // Mark by Tony 2009-05-19 ����,���M�L�k�X�{���Ϊ���m
      //$f_var["tp"]-> assign   (  "tv_class"      , $mclass ); //
      $f_var["tp"]-> assign   (  "tv_fd_align"   , $f_var['list']['fd_align'][$i]       ); // align
      $f_var["tp"]-> assign   (  "tv_fd_name"    , $mfd_value                           ); // field value
      $f_var["tp"]-> assign   (  "tv_link"       , $mfd_link                            ); // �s��
      $mfd_link='#';
    }

    $mnum++;
  }
  return;
}

// **************************************************************************
//  ��ƦW��: sl_disp_1()
//  ��ƥ\��: �C�X�浧���
//  �ϥΤ覡: sl_disp_1($f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.11.08
//  �{���ק�: Tony
//  �]�p���: 2007.08.21
//  �ק鷺�e: �D�n�w��^���������W�[�C�X�P��J�\��
// **************************************************************************
function sl_disp_1($f_var,$sql_type='mysql') {// add by mimi 2009.04.13 $sql_type='mysql' = $sql_type �S���ǻ��ѼƮɪ��w�]�Ȭ�mysql
  //upd by mimi 2009.04.13 ��mssql�]���
  $row1     = call_user_func($sql_type.'_fetch_array',$f_var['disp_result']);//$row1 = mysql_fetch_array($f_var['disp_result']);
  //echo $sql_type;
  //echo $f_var['disp_result'];

  $f_var['row1'] = $row1;
  if(NULL==$f_var['action_del']) {
     $f_var['action_del'] = u_showproc().".php?msel=31&f_sid={$f_var['f_sid']}&f_s_num={$row1['s_num']}&f_page={$f_var['f_page']}&f_que={$f_var['f_que']}&f_del={$f_var['f_del']}";
  }
  else {
      $f_var['action_del'] .= $row1['s_num'];
  }
  // Add by Mimi 2008.02.13
  if(NULL==$f_var['action_other']) {
     $f_var['action_other'] = u_showproc().".php?msel=811&f_sid={$f_var['f_sid']}&f_s_num={$row1['s_num']}&f_page={$f_var['f_page']}&f_que={$f_var['f_que']}&f_del={$f_var['f_del']}";
  }
  else {
     $f_var['action_other'] .= $row1['s_num'];
  }

  // Add by Tony 2007.09.06
  if(NULL==$f_var['action_close']) {
     $f_var['action_close'] = u_showproc().".php?msel=91&f_sid={$f_var['f_sid']}&f_s_num={$row1['s_num']}&f_page={$f_var['f_page']}&f_que={$f_var['f_que']}&f_del={$f_var['f_del']}";
  }
  else {
     $f_var['action_close'] .= $row1['s_num'];
  }

  // Add by Mimi 2009.02.03
  if(NULL==$f_var['action_trace']) {
     $f_var['action_trace'] = u_showproc().".php?msel=A1&f_sid={$f_var['f_sid']}&f_s_num={$row1['s_num']}&f_page={$f_var['f_page']}&f_que={$f_var['f_que']}&f_del={$f_var['f_del']}";
  }
  else {
     $f_var['action_trace'] .= $row1['s_num'];
  }

  // add by mimi 2011.07.01 �W�[��ñ�֥\��
  if(NULL==$f_var['action_2flow']) {
     $f_var['action_2flow'] = u_showproc().".php?msel=f1&f_sid={$f_var['f_sid']}&f_s_num={$row1['s_num']}&f_page={$f_var['f_page']}&f_que={$f_var['f_que']}&f_del={$f_var['f_del']}";
  }
  else {
     $f_var['action_2flow'] .= $row1['s_num'];
  }


  $f_var["tp"]-> newBlock (  "tb_disp_01"                 ); // ����
  $f_var["tp"]-> assign   (  "tv_disp_title"     , $f_var['msel_name'][substr($f_var['msel'],0,1)]   ); //

  if($row1['d_date']>'0000-00-00 00:00:00') { // �@�o
    $f_var["tp"]-> newBlock (  "tb_disp_del"                ); // �@�o
    $f_var["tp"]-> assign   (  "tv_d_date"     , "<b><font size=3 color=red>������Ƥw�@�o�G($row1[d_date])</font></b>"     );
  }


  reset($f_var['fd']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
  while(list($mfd_id)=each($f_var['fd'])) {
    //echo $mfd_id.'<br>';
    if('f_read_cnt'==$f_var['fd'][$mfd_id]['ename'] ) { // �p���I�\���� add 2008.03.03 by Mimi
      // ��s�\Ū����
      $query_head = "
                     update {$f_var['mtable']['head']} set read_cnt = (read_cnt+1)
                                                    where s_num='{$row1['s_num']}'
                    ";
      //echo $query_head.'---';
      if(!mysql_query($query_head)) { // �g�J����
         sl_errmsg('<b>�`�N!!</b>�\Ū���Ʒs����!!!!-sl_init:2477');
         exit;
      }
    }
    //echo $f_var['fd'][$mfd_id]['ename'].'--<br>';
    if('N'==$f_var['fd'][$mfd_id]['show_scr'] || 'hidden'==$f_var['fd'][$mfd_id]['type']) { // ���q�b�e���W
      //echo $f_var['fd'][$mfd_id]['ename'].'******<br>';
      continue; // loop �^�� while
    }
    //echo $f_var['fd'][$mfd_id]['type'].'--------';
    if('hr'==$f_var['fd'][$mfd_id]['type']) { // �p�G type �O hr �N�b�e���h�W�[�@��<tr>
       $f_var["tp"]-> newBlock (  "tb_disp_hr"    ); // ����u
       $f_var["tp"]-> assign   (  "tv_cname"      , $f_var['fd'][$mfd_id]['cname']   ); // ��줤��W��
       $f_var["tp"]-> assign   (  "tv_class"      , $f_var['fd'][$mfd_id]['class']   ); // class
       continue; // loop �^�� while
    }

    $mfd_value = '';
    $url = 'http://'.$_SERVER['SERVER_NAME'].'/~sl/sl_download.php?show=1&file=';
    $path = pathinfo($_SERVER['SCRIPT_NAME']);
    switch($f_var['fd'][$mfd_id]['type']) {
      case "file":
           if(NULL<>trim($row1[$mfd_id])) { // ����Ƥ~�C�X
              //$mfd_res = str_replace(" ","%20",$row1[$mfd_id]);
              $mext_name = trim(substr($row1[$mfd_id],strrpos($row1[$mfd_id],'.')+1,4));
              if(strstr('jpg/JPG/jpeg/JPEG/gif/GIF/png/PNG/bmp/BMP',$mext_name)) { // ���ɴN�����q�X
                //echo $f_var['server_name'].$path['dirname'].'/'.$f_var["mupload_dir"].$mhistory_dir.$row1[$mfd_id].'<br>';
                 //$mfd_value = "<div id='album_pic'><a  href='".$f_var[mupload_dir].trim($mfd_res)."' target='_blank' class='album_img'><img  border='0' src=".$f_var[mupload_dir].trim($mfd_res)."></a></div>";//add by mimi 2011.01.12 �Ϥ�������Y�p
                 //$mfd_value = "<a  href='".$f_var[mupload_dir].trim($mfd_res)."' target='_blank' class='album_img'><img  border='0' src=".$f_var[mupload_dir].trim($mfd_res)." onload='javascript:DrawImage(this)'></a>";//add by mimi 2011.01.12 �Ϥ�������Y�p
                 //$mfd_value = "<a  href='".$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].trim($mfd_res))."' target='_blank' class='album_img'><img  border='0' src=".$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].trim($mfd_res))." onload='javascript:DrawImage(this)'></a>";//add by mimi 2011.01.12 �Ϥ�������Y�p

                 $mfd_value = "<a href='".$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].$row1[$mfd_id])."' target='_blank' class='album_img'><img src='./thumb/phpThumb.php?src={$f_var['server_name']}{$path['dirname']}/{$f_var["mupload_dir"]}{$mhistory_dir}{$row1[$mfd_id]}'></a>";//add by mimi 2011.01.12 �Ϥ�������Y�p //Edit By Job 2014.06.12 �����ťզr����%20
                 //echo $f_var['mupload_dir'].$row1['$mfd_id'];
              }
              else {
                //upd by mimi 2011.12.08 ��@�μ˪O�W�[�P�_�s������$mfd_value = '<a href='.$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].trim($mfd_res)).'>'.trim($mfd_res).'</a>';
                //$mfd_value = '<a href='.$f_var[mupload_dir].trim($mfd_res).'>'.trim($mfd_res).'</a>';
                //upd by LeeYen 2012.08.13 �ݿ�14620 �U���ɮפ覡��Hsl_download.php
                //$mfd_value = '<a href="'.$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].trim($mfd_res)).'">'.trim($mfd_res).'</a>';
                $mfd_value = '<a href="'.$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].$row1[$mfd_id]).'">'.$row1[$mfd_id].'</a>';
              }
              //$mfd_value = '<a href='.$f_var[mupload_dir].trim($mfd_res).'>'.trim($mfd_res).'</a>';
           }
           break;
      case "file2":
           if(NULL<>trim($row1[$mfd_id])) { // ����Ƥ~�C�X
              $mfd_res = str_replace(" ","%20",$row1[$mfd_id]);
              $mext_name = trim(substr($mfd_res,strrpos($mfd_res,'.')+1,4));
              if(strstr('jpg/JPG/jpeg/JPEG/gif/GIF/png/PNG/bmp/BMP',$mext_name)) { // ���ɴN�����q�X
                 $mfd_value = "<a href='".$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].trim($mfd_res))."' target='_blank' class='album_img'><img src='./thumb/phpThumb.php?src={$f_var['server_name']}{$path['dirname']}/{$f_var["mupload_dir"]}{$mhistory_dir}{".trim($mfd_res)."'></a>";//add by mimi 2011.01.12 �Ϥ�������Y�p //Edit By Job 2014.06.12 �����ťզr����%20
                 //$mfd_value = "<a  href='".$f_var[mupload_dir].trim($mfd_res)."' target='_blank' class='album_img'><img  border='0' src=".$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].trim($mfd_res))." onload='javascript:DrawImage(this)'></a>";//add by mimi 2011.01.12 �Ϥ�������Y�p
              }
              else {
                 $mfd_arr = split('/',trim($mfd_res));
                 $mfd_value = '<a href="'.$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].trim($mfd_res)).'">'.trim($mfd_res).'</a>';
                 //$mfd_value = '<a href='.$f_var[mupload_dir].trim($mfd_res).'>'.$mfd_arr[1].'</a>';
              }
              //$mfd_value = '<a href='.$f_var[mupload_dir].trim($mfd_res).'>'.trim($mfd_res).'</a>';
           }
           break;
      case "select":
           //upd by mimi 2012.03.06 �ĤT�X����,�i��|�����`,�ҥH�ץ�...
           $str_value = str_replace('.','-',$row1[$mfd_id]);
           $ex_value  = explode('-',$str_value);
           $mfd_value = trim($ex_value[1]);
           //$mfd_value = trim(substr($row1[$mfd_id],3,999));
           break;
      case "select2":
           $mfd_value = trim($row1[$mfd_id]);
           break;
      case "textarea":
           //$mfd_value = nl2br($row1[$mfd_id]);
           //$mfd_value = '<pre>'.nl2br($row1[$mfd_id]).'</pre>';
           $mfd_value = '<pre>'.$row1[$mfd_id].'</pre>';
           break;
      case "date":
           switch ($f_var['show_year']) {
               case "2":
                    $mfd_value = sl_2ymd(trim($row1[$mfd_id]));
                    break;
               case "4":
                    $mfd_value = sl_4ymd(trim($row1[$mfd_id]));
                    break;
               default:
                    $mfd_value = trim($row1[$mfd_id]);
                    break;
           }
           break;
      case "date2":
             $mfd_value = sl_2ymd(trim($row1[$mfd_id]));
           break;
      //add by mimi 2009.08.31 �ȯZ���s���n�q�X�P��
      case "date3":
             $mfd_value = sl_2ymd(trim($mfd_row1_value),'.').' '.sl_day_week($mfd_row1_value);
           break;
      case "time":
             $mfd_value = substr(trim($row1[$mfd_id]),0,2).':'.substr(trim($row1[$mfd_id]),2,2);
           break;

      case "sign":
           if(''!=trim($row1[$mfd_id])){
             $mfd_value = "<img style='border:1px grey dashed' src='/~sl/sl_sign/sign_img/".trim($row1[$mfd_id])."'>";
           }
           break;

      default:
           $mfd_value = trim($row1[$mfd_id]);
           break;
    }
    if($f_var['fd'][$mfd_id]['for_dispre'] == 'Y'){
       //echo $f_var['fd'][$mfd_id]['cname']."<br>";
       //echo $mfd_id."<br>";
       $f_var['for_dispre'] = $mfd_value;
       //echo $f_var['for_dispre'];
    }
    //echo $mfd_value.'--------<br>';
    if(NULL<>$f_var['fd'][$mfd_id]['func_name']) { // ���ۭq��ƭn�q���
      // Add by Tony 2007.05.28 �����ƨq�X�������
      $mfd_name = $f_var['fd'][$mfd_id]['func_name'];
      $func_b = strpos($mfd_name,'('); // function �W�� "(" ��m
      $func_e = strpos($mfd_name,')'); // function �W�� ")" ��m
      if($func_b>0 && $func_e>0) { // �����
         $mfunc_name  = substr($mfd_name,0,$func_b); // ��� function name
         $mfd_name    = substr($mfd_name,$func_b+1,$func_e-$func_b-1); // ����ǤJfuncfion���� sl_xxxx(fd_name)->fd_name
         $mfd_value   = $mfd_value.'-'.sl_eval_fnc_name($mfunc_name,$mfd_value);
      }
    }

    if(NULL<>$f_var["f_que"]) { // List
      $str_que  = substr_count($f_var['f_que']," ");
        if('0'<$str_que){
          $fd_que=explode(" ",$f_var['f_que']);
                  for($j=0;$j<count($fd_que);$j++){
                    $f_var['f_que_ary'] = $fd_que[$j];
            $mfd_value = sl_span_str($f_var,$mfd_value);
                  }
        }
        else{
          if(!strstr($mfd_value,'</a>')){
            $mfd_value = sl_span_str($f_var,$mfd_value);
          }
        }       //$mfd_value = str_replace($f_var["f_que"],"<span style='{$f_var['mque_color']}'>{$f_var['f_que']}</span>",$mfd_value);
      // Mark by tony 2007.07.19 �W�[�P�_�O�_���ɮשάO���ɡA�����ϥ�
      //$mfd_value = str_replace($f_var["f_que"],"<span style='{$f_var['mque_color']}'>{$f_var['f_que']}</span>",$mfd_value);
    }

    if($f_var['fd'][$mfd_id]['type'] == "file" && !$mfd_value){ // Add by Job 2015.04.30 �S������N���q�X
      continue;
    }
    $f_var["tp"]-> newBlock (  "tb_disp_fd"                                       ); // ��J�e��
    $f_var["tp"]-> assign   (  "tv_width1"     , $f_var["mwidth1"]                ); //
    $f_var["tp"]-> assign   (  "tv_width2"     , $f_var["mwidth2"]                ); //
    $f_var["tp"]-> assign   (  "tv_cname"      , $f_var['fd'][$mfd_id]['cname']   ); // ��줤��W��
    $f_var["tp"]-> assign   (  "tv_fd_ename"   , $f_var['fd'][$mfd_id]['ename']   ); // ���^��W��
    $f_var["tp"]-> assign   (  "tv_fd_value"   , $mfd_value                       ); // ��줺�e
    if('02'==substr($row1[$f_var['close_name']],0,2)){
      echo "<span style='position: absolute; left: 25%; top: 20% ; z-index: 1'><img src='/~sl/img/close2.gif' width='70' height='68' alt='���פF��'></span>";
    }
    //if('02'==substr($row1[$f_var['close_name']],0,2)){
    //  echo "<span id='close_pic' style='position:absolute ; left:25% ; top:15% ; z-index:1 ; width:400px ; height:400px ; background-image: url(/~sl/img/close.png); opacity : 0.2'></span>";
    //}
    //if ($f_var['fd'][$mfd_id]['cname'] === "�W�Ǫ���") {
    //  //$d_tmp = @read_dir("$f_var[mupload_dir].$_POST[nf03]");
    //  //$dd = read_dir($f_var[mupload_dir]);
    //  $dd = read_dir($f_var[mupload_dir]."095004");
    //  echo $f_var[mupload_dir].'----';
    //  echo $dd.'++++';
    //  $f_var["tp"]-> assign   (  "tv_fd_value"   , $dd                       ); // ��줤��W��
    //} else {
    //  $f_var["tp"]-> assign   (  "tv_fd_value"   , $mfd_value                       ); // ��줤��W��
    //}
    //@read_dir("$f_var[mupload_dir].$_POST[nf03]");

  }

  // �t�~�B�z�� msel
  switch ($f_var['msel']) {
    case "3": // �R��
         $f_var["tp"]-> newBlock (  "tb_del_btn"                              ); // �@�o���s�e��
         $f_var["tp"]-> assign   (  "tv_action"        , $f_var['action_del'] ); // form action
         break;
    case "81": // �䥦 add Mimi 2008.02.13
         $f_var["tp"]-> newBlock (  "tb_other_btn"                              ); // �䥦���s�e�� ex:staf/doc01.php(���ʷ~��)
         $f_var["tp"]-> assign   (  "tv_action"        , $f_var['action_other'] ); // form action
         break;
    case "9": // ����
         $f_var["tp"]-> newBlock (  "tb_close_btn"                              ); // ���׫��s�e��
         $f_var["tp"]-> assign   (  "tv_action"        , $f_var['action_close'] ); // form action
         break;
    case "A": // �l��
         $f_var["tp"]-> newBlock (  "tb_trace_btn"                              ); // �l�ܫ��s�e��
         $f_var["tp"]-> assign   (  "tv_action"        , $f_var['action_trace'] ); // form action
         break;
    case "f": // ��ñ�ֳ� add by mimi 2011.07.01 �W�[��ñ�֥\��
         $f_var["tp"]-> newBlock (  "tb_2flow_btn"                              ); // ��ñ�ֳ���s�e��
         $f_var["tp"]-> assign   (  "tv_action"        , $f_var['action_2flow'] ); // form action
         break;
    default:
         break;
  }


  // ���]�w�^���N�ϥγo�q Display
  if(count($f_var['fd_re']) > 0 && '41' == $f_var['msel']) {  // �� body ���
    if('f_read_cnt'==$f_var['fd'][$mfd_id]['ename'] ) {//upd by yifun 2014.04.21
      // ��s�\Ū����
      $query_head = "
                     update {$f_var['mtable']['head']} set read_cnt = (read_cnt+1)
                                                    where s_num='{$row1['s_num']}'
                    ";
      //echo $query_head.'---';
      if(!mysql_query($query_head)) { // �g�J����
        sl_errmsg('<b>�`�N!!</b>�\Ū���Ʒs����!!!!-sl_init:2315');
        exit;
      }
    }
     if(NULL == $f_var['body_order']){
       $f_var['body_order']  = "b_date DESC";
       $f_var['body_order2'] = "b_date ASC";
     }else{
       $f_var['body_order2'] = "b_date DESC";
     }
     if(isset($_REQUEST['f_s_num'])){
       $row1['s_num'] = $_REQUEST['f_s_num'];
     }
     $query_body  = "select {$f_var['mtable']['body']}.*
                            from {$f_var['mtable']['body']}
                            where {$f_var['mtable']['body']}.h_s_num = {$row1['s_num']} and {$f_var['mtable']['body']}.d_date='0000-00-00 00:00:00'
                            order by {$f_var['mtable']['body']}.{$f_var['body_order']}
                    ";
     //echo $query_body."<BR>";

     $result_body = mysql_query($query_body);
     $body_cnt    = mysql_num_rows($result_body); // body �`����
     $maxlen = mb_strlen($body_cnt); // body_cnt �r����סA��0��
     if($body_cnt>0) { // �����
        //$mnum = 1;
        $f_var["tp"]-> newBlock (  "tb_disp_re_01"                              ); // body �C�X
        //-----------------------------------By Job 2014.05.06 �^������---------------------------------------------------
        $a_bpage = '50';
        $max_page=  ceil($body_cnt/$a_bpage);
        $b_page = '1'; // ��show_all��
        if($max_page > 1){
          if($_REQUEST['show_all'] != 'Y'){   // Add By Job 2014.07.28 �[�J�C�X�����P�_
            $b_page = (''==$_REQUEST['f_bpage'])?$max_page:$_REQUEST['f_bpage'];
            $limt = 'LIMIT '.$a_bpage*($b_page-1).','.$a_bpage;
          }
          /*$query_body  = "select {$f_var['mtable']['body']}.*
                         from {$f_var['mtable']['body']}
                         where {$f_var['mtable']['body']}.h_s_num = {$row1['s_num']} and {$f_var['mtable']['body']}.d_date='0000-00-00 00:00:00'
                         order by {$f_var['mtable']['body']}.{$f_var['body_order']} {$limt}
                  ";*/
          $query_body  = "select * from
                                    (select {$f_var['mtable']['body']}.* from {$f_var['mtable']['body']}
                                              where {$f_var['mtable']['body']}.h_s_num = {$row1['s_num']} and {$f_var['mtable']['body']}.d_date='0000-00-00 00:00:00'
                                              order by {$f_var['mtable']['body']}.{$f_var['body_order2']} {$limt}) as a
                          order by a.{$f_var['body_order']}
                          ";
          //echo $f_var['body_order']."<BR>";
          //echo $query_body."<BR>";
          $result_body = mysql_query($query_body);
          $body_cnt    = mysql_num_rows($result_body); // body �`����

          $f_var["tp"]-> newBlock (  "tp_in_page_list"                                     ); //
          $f_var["tp"]-> assign   (  "tv_all_link" , "<a href='".u_showproc().".php?msel=41&f_s_num=".$row1[s_num]."&show_all=Y'>"         ); // Add By Job 2014.07.28 �[�J�C�X����
          $f_var["tp"]-> assign   (  "tv_all"      , '�������C�X'             );
          for($i=1;$i<=$max_page;$i++){
            $f_var["tp"]-> newBlock (  "tp_in_page"              ); //
            $f_var["tp"]-> assign   (  "tv_re_link" , "<a href='".u_showproc().".php?msel=41&f_s_num=".$row1[s_num]."&f_bpage=".$i."'>"             );
            $f_var["tp"]-> assign   (  "tv_page"    , '��'.$i.'��'             );
            $f_var["tp"]-> assign   (  "tv_re_link_foot" , '</a>'             );
          }
        }
        //----------------------------------------------------------------------------------------------------------------
        //-----------------------------------By Job 2014.05.07 �^���Ƨ�---------------------------------------------------
        if(strstr($f_var['body_order'],"DESC")){
          $mnum = $body_cnt;
        }else{
          $mnum = 1;
        }
        $mnum    = $mnum + $a_bpage*($b_page-1);
        //----------------------------------------------------------------------------------------------------------------
        while ($row_body = mysql_fetch_array($result_body)) {
               $mb_date = substr($row_body[b_date],5,11); // ���ɤ��
               $f_var["tp"]-> newBlock (  "tb_disp_re_detail"                       ); // body ���
               $vct_ok = 'N';
               $f_var["tp"]-> newBlock (  "tb_disp_re_upd"               ); // �i�H�ק� // edit by Job 2014.04.29 �N�^�����Y���϶�
               switch ($f_var["upd_ct"]) {
                    case "empno": // �ˬd���u�s��
                         if($row_body['b_empno']==$_SESSION["login_empno"]) {
                            $vct_ok = 'Y';
                         }
                         break;
                    case "dept": // �ˬd�����N��
                         if('Y'==$_SESSION["it_mode"]) {
                            if('S121'==$_SESSION["login_dept_id"] or 'S122'==$_SESSION["login_dept_id"] or 'S102'==$_SESSION["login_dept_id"]) {
                               $vct_ok = 'Y';
                            }
                         }
                         else {
                            if($row1['b_dept_id']==$_SESSION["login_dept_id"]) {
                               $vct_ok = 'Y';
                            }
                         }
                         break;
                    case "user_def": // �ϥΪ̦ۦ�w�q
                         if('Y'==$f_var['user_def']) {
                            $vct_ok = 'Y';
                         }
                         if('empno'==$f_var['user_def_empno']) { //�ˬd���u�s��.....2008/01/21..MIMI
                           if($row1['b_empno']==$_SESSION["login_empno"]) {
                              $vct_ok = 'Y';
                           }
                         }
                         break;
                    case "reply": // ���צ^�����ק�
                         $vct_ok = 'N';
                         break;
                    default: // ���ˬd�A�q�q���i�H�ק�
                         $vct_ok = 'Y';
                         break;
               }
               if('Y'==$vct_ok) {
                  $f_var["tp"]-> newBlock (  "tb_disp_re_upd_01"               );// Edit By Job 2014.04.29 �N�^�����Y���϶��A�ק�W�����
                  $f_var["tp"]-> assign   (  "tv_upd_link"        , u_showproc().".php?msel=62&f_page={$f_var['f_page']}&f_s_num={$row_body['s_num']}&f_h_s_num={$f_var['f_s_num']}&f_que={$f_var['f_que']}"               ); //
               }
               reset($f_var["list_re_title"]); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
               $mt_cnt = count($f_var["list_re_title"]);
               $mre_title = '';
               for($i=0;$i<$mt_cnt;$i++) {
                 if(strstr($f_var["list_re_title"][$i],'date')) { // ������A�t�~�B�z
                   if('0000-00-00' == substr($row_body[$f_var["list_re_title"][$i]],0,10) ) {
                      $mre_title .= '';
                   }
                   else {
                      //$mre_title .= substr($row_body[ $f_var["list_re_title"][$i] ],5,11);
                      $mre_title .= substr($row_body[$f_var["list_re_title"][$i]],0,16);
                   }
                 }
                 else {
                   if(strpos($row_body[$f_var["list_re_title"][$i]], ".") || empty($row_body[$f_var["list_re_title"][$i]])) {
                     //$mre_title .= substr($row_body[$f_var["list_re_title"][$i]],3);
                     $mre_title .= str_pad(substr($row_body[$f_var["list_re_title"][$i]],3),6,'�@',STR_PAD_RIGHT); //Edit By Job 2014.05.07 �^��title�ϧO�ɪŦ�
                   }else{
                     //$mre_title .= $row_body[$f_var["list_re_title"][$i]];
                     switch ( mb_strlen($row_body[$f_var["list_re_title"][$i]])) {
                          case "1":
                          case "3":
                          case "5":
                          case "7":
                               $row_body[$f_var["list_re_title"][$i]] = $row_body[$f_var["list_re_title"][$i]].' ';//Edit By Job 2014.05.08 �^��title�W�r�b�θɪ�
                            break;
                       default:
                            break;
                     }
                     $mre_title .= str_pad($row_body[$f_var["list_re_title"][$i]],8,'�@',STR_PAD_RIGHT);            //Edit By Job 2014.05.07 �^��title�W�r�w�d�|�Ӧr���Ŧ�
                   }
                   if($mt_cnt>$i) {
                     $mre_title .= '&nbsp;-&nbsp;';
                   }
                 }
               }

               //echo "<pre>";
               //echo $mnum;
               //print_r($f_var['body_order']);
               //echo "</pre>";
               //-----------------------------------By Job 2014.05.07 �^���Ƨ�---------------------------------------------------
               $mnum2 = str_pad($mnum,$maxlen,'0',STR_PAD_LEFT);   //Edit By Job 2014.05.07 �^���y������0
               $f_var["tp"]-> assign   (  "tb_disp_re_detail.tv_disp_re_title"   , "({$mnum2} - {$mre_title})"               );
               $f_var["tp"]-> assign   (  "tb_disp_re_detail.tp_num"   , $mnum               );
               //----------------------------------------------------------------------------------------------------------------
               reset($f_var['fd_re']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
               $f_var['file_count'] = 1;
               //---------------------------------By Job 2014.05.06 �ﵽ�^�����X���D----------------------------------
               $f_var["tp"]-> newBlock (  "tb_disp_re_fd"    ); // �}�Ҧ^���϶�
               $f_var["tp"]-> assign   (  "tb_disp_re_fd.tp_num"   , $mnum               );
               //-----------------------------------------------------------------------------------------------------
               while(list($mfd_re_id)=each($f_var['fd_re'])) {
                     if('N'==$f_var['fd_re'][$mfd_re_id]['disp_re'] || 'hidden'==$f_var['fd_re'][$mfd_re_id]['type']) { // ���q�b�e���W
                        continue; // loop �^�� while
                     }
                     $mfd_re_value = '';
                     //echo $mfd_re_id.'---';
                     //echo $f_var['fd_re'][$mfd_re_id]['type'].'_____';
                     switch($f_var['fd_re'][$mfd_re_id]['type']) {
                            case "file":
                                 $url = 'http://'.$_SERVER['SERVER_NAME'].'/~sl/sl_download.php?show=1&file=';
                                 $path = pathinfo($_SERVER['SCRIPT_NAME']);
                                 if(NULL<>trim($row_body[$mfd_re_id])) { // ����Ƥ~�C�X
                                    //$mfd_res = str_replace(" ","%20",$row_body[$mfd_re_id]);
                                    $mext_name = trim(substr($row_body[$mfd_re_id],strrpos($row_body[$mfd_re_id],'.')+1,4));
                                    if(strstr('jpg/JPG/jpeg/JPEG/gif/GIF/png/PNG/bmp/BMP',$mext_name)) { // ���ɴN�����q�X
                                       //$mfd_re_value = '<hr>����'.$f_var['file_count']."�G<br><a  href='".$f_var[mupload_dir].trim($mfd_res)."' target='_blank' class='album_img'><img  border='0' src=".$f_var[mupload_dir].trim($mfd_res)." onload='javascript:DrawImage(this)'></a>";//add by mimi 2011.01.12 �Ϥ�������Y�p
                                       //upd by LeeYen 2012.08.13 �ݿ�14620 �U���ɮפ覡��Hsl_download.php
                                       //$mfd_re_value = '<hr>����'.$f_var['file_count']."�G<br><a href='/~sl/sl_download.php?show=1&file=".base64_encode(getcwd()."/".$f_var[mupload_dir].trim(str_replace("%20", ' ',$mfd_res)))."' target='_blank' class='album_img'><img  border='0' src='/~sl/sl_download.php?show=1&file=".base64_encode(getcwd()."/".$f_var[mupload_dir].trim(str_replace("%20", ' ',$mfd_res)))."' onload='javascript:DrawImage(this)'></a>";//add by mimi 2011.01.12 �Ϥ�������Y�p
                                       //if('0883430'==$_SESSION['login_empno']){
                                         //echo 'http://'.$_SERVER['SERVER_NAME'].'/~docs/it/docs/'.$f_var[mupload_dir].$row_body[$mfd_re_id].'<br>';
                                         //if (file_exists('http://'.$_SERVER['SERVER_NAME'].'/~docs/it/docs/'.$f_var[mupload_dir].$row_body[$mfd_re_id])){
                                         if(file_exists(getcwd().'/'.$f_var[mupload_dir].$row_body[$mfd_re_id])){
                                           $f_path = getcwd().'/'.$f_var[mupload_dir].$row_body[$mfd_re_id];
                                         } else {
                                           $f_path = getcwd().'/'.$f_var[mupload_dir].substr($row_body[$mfd_re_id],0,2).'/'.$row_body[$mfd_re_id];
                                           $f_year = substr($row_body[$mfd_re_id],0,2).'/';
                                         }
                                         //echo $f_var["mupload_dir"].'<br>';
                                       //}
                                       $mfd_re_value = "<hr>����".$f_var['file_count']."�G<br><a href='".$url.base64_encode($f_path)."' target='_blank' class='album_img'><img src='./thumb/phpThumb.php?src={$f_var['server_name']}{$path['dirname']}/{$f_var["mupload_dir"]}{$f_year}{$mhistory_dir}{$row_body[$mfd_re_id]}'></a>";//add by mimi 2011.01.12 �Ϥ�������Y�p //Edit By Job 2014.06.12 �����ťզr����%20
                                       $f_var['file_count']++;
                                    }
                                    else {
                                       //$mfd_re_value = '<hr>����'.$f_var['file_count'].'�G<br>  <a href='.$f_var[mupload_dir].trim($mfd_res).'>'.trim($mfd_res).'</a>';
                                       //upd by LeeYen 2012.08.13 �ݿ�14620 �U���ɮפ覡��Hsl_download.php
                                       //$mfd_re_value = '<hr>����'.$f_var['file_count'].'�G<br><a href="/~sl/sl_download.php?show=1&file='.base64_encode(getcwd()."/".$f_var[mupload_dir].trim($mfd_res)).'">'.trim($mfd_res).'</a>';
                                       if(file_exists(getcwd().'/'.$f_var[mupload_dir].$row_body[$mfd_re_id])){
                                         $f_path = getcwd().'/'.$f_var[mupload_dir].$row_body[$mfd_re_id];
                                       } else {
                                         $f_path = getcwd().'/'.$f_var[mupload_dir].substr($row_body[$mfd_re_id],0,2).'/'.$row_body[$mfd_re_id];
                                       }
                                       //$mfd_re_value = '<hr>����'.$f_var['file_count'].'�G<br><a href="'.$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].$row_body[$mfd_re_id]).'">'.$row_body[$mfd_re_id].'</a>';
                                       $mfd_re_value = '<hr>����'.$f_var['file_count'].'�G<br><a href="'.$url.base64_encode($f_path).'">'.$row_body[$mfd_re_id].'</a>';
                                       $f_var['file_count']++;
                                    }
                                    //$mfd_value = '<a href='.$f_var[mupload_dir].trim($mfd_res).'>'.trim($mfd_res).'</a>';
                                    //$mfd_re_value = '<hr><a href='.$f_var[mupload_dir].trim($row_body[$mfd_re_id]).'>'.trim($row_body[$mfd_re_id]).'</a>';
                                 }
                                 break;
                            case "select":
                                 //upd by mimi 2012.03.06 �ĤT�X����,�i��|�����`,�ҥH�ץ�...
                                 $str_value = str_replace('.','-',$row_body[$mfd_re_id]);
                                                                                                 $ex_value  = explode('-',$str_value);
                                 $mfd_re_value = trim($ex_value[1]);
                                 //$mfd_re_value = trim(substr($row_body[$mfd_re_id],3,999));
                                 break;
                            case "select2":
                                 $mfd_re_value = trim($row_body[$mfd_re_id]);
                                 break;
                            case "textarea":
                                 $mfd_re_value = '<pre>'.$row_body[$mfd_re_id].'</pre>';
                                 break;
                            case "textarea2":  // Add By Job 2014.05.05 textarea2
                                 if(!empty($row_body[$mfd_re_id])) {
                                   $mfd_re_value = '<pre><span class="comp-fd"><hr>��T�M�Φ^��:(�u����T�ݪ���(��.��)�Y)</span><br>'.sl_span_str($f_var,$row_body[$mfd_re_id]).'</pre>'; // �N�d�ߦr��ϥ�
                                 }
                                 break;
                            case "date":
                                 switch ($f_var['show_year']) {
                                     case "2":
                                          $mfd_re_value = sl_2ymd(trim($row_body[$mfd_re_id]));
                                          break;
                                     case "4":
                                          $mfd_re_value = sl_4ymd(trim($row_body[$mfd_re_id]));
                                          break;
                                     default:
                                          $mfd_re_value = trim($row_body[$mfd_re_id]);
                                          break;
                                 }
                                 break;
                            case "time":
                                   $mfd_value = substr(trim($row_body[$mfd_re_id]),0,2).':'.substr(trim($row_body[$mfd_re_id]),2,2);
                                 break;
                            default:
                                 $mfd_re_value = trim($row_body[$mfd_re_id]);
                                 break;
                     }
                     if(NULL != $f_var['fd_re'][$mfd_re_id]['disp_extra']){
                      $mfd_re_value = str_replace('#value#',$mfd_re_value,$f_var['fd_re'][$mfd_re_id]['disp_extra']);
                     }

                     $f_var["tp"]-> assign   (  "tv_width1"        , $f_var["mwidth1"]                ); //
                     $f_var["tp"]-> assign   (  "tv_width2"        , $f_var["mwidth2"]                ); //
                     //---------------------------------By Job 2014.05.06---------------------------------------------
                     $f_var["tp"]-> newBlock (  "tb_disp_re_fd_value"    ); // �C�X�����
                     $f_var["tp"]-> assign   (  "tv_fd_re_value"   , $mfd_re_value );
                     //-----------------------------------------------------------------------------------------------

                     if ($f_var['fd_re'][$mfd_re_id]['type']=='textarea') {
                       $f_var["tp"]-> assign   (  "tp_num", $mnum      );
                       $f_var["tp"]-> assign   (  "tb_disp_re_upd.tp_display_flag" , $reply_cnt?'+':'-'             ); //���X���w�]+
                       $f_var["tp"]-> assign   (  "tb_disp_re_fd.tp_display_value", $reply_cnt?'close':''      );      //�^������w�]close�ݩ�
                       $patterns = array('/\s*<[^>]*>/','/-->|\/|\-|\.|,|\*\*|:|&nbsp;/','/\t|\s|\r|\n/');
                       $mfd_re_value_cut = mb_substr(preg_replace($patterns,'',$mfd_re_value),0,40,'BIG5').'...';      //�K�n�^���e�X�Ӧr�˵�
                       $f_var["tp"]-> assign   (  "tb_disp_re_detail.tp_qab_5_cut"   , $mfd_re_value_cut             );//title���K�n
                       $f_var["tp"]-> assign   (  "tb_disp_re_detail.tp_qab_5_value" , $reply_cnt?'':'close'      );   //title�w�]���
                       $reply_cnt++;
                       //$f_var["tp"]-> newBlock (  "tb_disp_re_fd_close"    ); // edit by Job 2014.05.05 �^����[close]�̫�C�X
                       //$f_var["tp"]-> assign   (  "tp_num", $mnum      );
                     }
               }
               //$f_var["tp"]-> newBlock (  "tb_disp_re_fd_close"    );           // edit by Job 2014.05.05 �^����[close]�̫�C�X
               $f_var["tp"]-> assign   (  "tp_num", $mnum      );
               if(strstr($f_var['body_order'],"DESC")){
                 $mnum--;
               }else{
                 $mnum++;
               }
        }
     }

     if('4' == substr($f_var['msel'],0,1) && $f_var['fd_close_re'] != 'Y' && '02'!=substr($row1[$f_var['close_name']],0,2)){  //edit by Job 2014.06.11 �D����
       $f_var["tp"]-> newBlock (  "tb_in_re"                 ); // �s�W���
       $f_var["tp"]-> assign   (  "tv_scrmsg"     , '�^��'   ); // ���s��r
       $f_var["tp"]-> assign   (  "tv_re_action" , u_showproc().".php?msel=61&f_sid={$f_var['f_sid']}&f_h_s_num={$row1['s_num']}"    ); // form action
       /*if(NULL!=$f_var['close_btn']){    // add Mimi2008.02.29 �W�[���׫��s
          $f_var["tp"]-> newBlock (  "tb_re_in_close"                 ); // ����
          $f_var["tp"]-> assign   (  "tv_close_link" ,  $f_var['close_btn']  ); // form action
       }*/
       sl_get_re($f_var); // sl_init.php
      }
  }
  //add by �p�� 2019.04.19 �p�G�n���body�o��,$f_var['sl_b_gid']�@�w�n����
  if($f_var['msel'] == '41' && $f_var['sl_b_gid'] == 'Y' || $f_var['msel'] == '3' && $f_var['sl_b_gid'] == 'Y'){
    $f_var["tp"]-> newBlock ("tb_table_bd2"        ); //�ɨ�
    $b_gid = sl_b_gid2($row1['b_gid']);
    $f_var["tp"]-> assign   ("tv_dept"      , $b_gid                 );
  }
  // Mark by Tony 2007.05.11
  //$f_var['f_wg06'] = $row1['s_num'];
  //sl_web_log($f_var);

  //add by ���\ 2018.02.07 ����33239 �^��2 �ʺA������� >>
  if($f_var['fd_dyn_file'] != "") { //��ܰʺA�������
        sl_disp_file($f_var);
  }
  //add by ���\ 2018.02.07 ����33239 �^��2 �ʺA������� <<

  return;
}








function read_dir($dir) {
   $path = opendir($dir);
   while (false !== ($file = readdir($path))) {
       if($file!="." && $file!="..") {
           if(is_file($dir."/".$file))
               $files[]=$file;
           else
               $dirs[]=$dir."/".$file;
       }
   }
   if($dirs) {
       natcasesort($dirs);
       foreach($dirs as $dir) {
           //echo $dir;
           read_dir($dir);
       }
   }
   if($files) {
       natcasesort($files);
       foreach ($files as $file) {
           //echo $file."\n";
           $dd[] = $file;
       }
       $dd = implode(',',$dd);

   }
   return $dd;
   closedir($path);
}
// **************************************************************************
//  ��ƦW��: sl_array_count()
//  ��ƥ\��: �[�`�}�C value �ƭ�
//  �ϥΤ覡: sl_array_count($array)
//  �{���]�p: kenny
//  �]�p���: 2006.11.10
// **************************************************************************
function sl_array_count($a) {
  if(!is_array($a)) return $a;
  foreach($a as $key=>$value)
  $totale += sl_array_count($value);
  return $totale;
}

/*
�W��: sl_conv_date()    �ഫ�褸�~ - ����~
�Ϊk: ch_date(�ӷ����, �ӷ����j�Ÿ�[���], ��X���j�Ÿ�[���]);
�d��: echo ch_date(2006/12/31,'/','-'); // output: 95-12-31
�]�p: kenny
���: 2006-12-25
*/
function sl_conv_date($date="", $from="", $to="") {
  if (!$date) $date = date('Ymd');
  $m = substr($date,-4,2);
  $d = substr($date,-2,2);
  if (strlen($date)>7) {
    $mode = 1;
  } else $mode = 2;
  switch ($mode) {
    case "1":
    if ($from == '') {
      $y = substr($date,0,4)-1911;
    } else {
      $tok = explode($from,$date);
      $y = $tok[0]-1911;
      $m = $tok[1];
      $d = $tok[2];
    }
    break;
    case "2":
    if ($from == '') {
      if (strlen($date)==7) {
        $y = substr($date,0,3)+1911;
      } else $y = substr($date,0,2)+1911;
    } else {
      $tok = explode($from,$date);
      $y = $tok[0]+1911;
      $m = $tok[1];
      $d = $tok[2];
    }
    break;
  }
  $date = $y.$to.$m.$to.$d;
  return $date;
}
  function sl_left($str,$str_n) {
    return(substr($str."                    ",0,$str_n));
  }
  function sl_right($str,$str_n) {
    $str_n=$str_n * -1;
    return(substr("                    ".trim($str),$str_n));
  }
  function sl_iif($cond,$ok_value,$ng_value){
      $r_value = $cond ? $ok_value : $ng_value;
      return ($r_value);
  }
  function left($str,$str_n) {
    return(substr($str."                    ",0,$str_n));
  }
  function right($str,$str_n) {
    $str_n=$str_n * -1;
    return(substr("                    ".trim($str),$str_n));
  }

// **************************************************************************
//  ��ƦW��: sl_ymd()
//  ��ƥ\��: �q�X�褸�~���άO����~���
//  �ϥΤ覡: sl_ymd($f_var['show_year'],'20061022','$���j�榡<'.'�B'/'�B'-'>);   return 2006-10-22
//                                                   ^^^^^^^^^���ǭȹw�]��"-"
//  ��    ��: �ǤJ����@�߬��褸�~���A$f_var['show_year'] �� xx_init.php �]�w
//  �{���]�p: Tony
//  �]�p���: 2007.02.28
// **************************************************************************
function sl_ymd($vshow_year,$vdate,$vstyle='-') {
  switch ($vshow_year) {
      case "2":
           $vrtn_date = sl_2ymd(trim($vdate),$vstyle);
           break;
      case "4":
           $vrtn_date = sl_4ymd(trim($vdate),$vstyle);
           break;
      default:
           $vrtn_date = trim($vdate);
           break;
  }
  return($vrtn_date);
}
// **************************************************************************
//  ��ƦW��: sl_4ymd()
//  ��ƥ\��: �q�褸�~��� (yyyy-mm-dd)
//  �ϥΤ覡: sl_4ymd('20061022',$���j�榡<'.'�B'/'�B'-'>);   return 2006-10-22
//                               ^^^^^^^^^���ǭȹw�]��"-"
//  ��    ��: �ǤJ����@�߬��褸�~���
//  �{���]�p: Tony
//  �]�p���: 2007.01.10
// **************************************************************************
function sl_4ymd($vdate,$vstyle='-') { // $vstyle='.' = $vstyle �S���ǻ��ѼƮɪ��w�]��
  $vokdate = ''; // �^�Ǥ���ܼ�
  $vdatelen = strlen(trim($vdate)); // ����r�����
  if(8==$vdatelen) {
     $vokdate = substr($vdate,0,4).$vstyle.substr($vdate,4,2).$vstyle.substr($vdate,6,2);
  }
  //else {
  //   $vokdate = '������~-sl_4ymd()';
  //}
  return($vokdate);
}

// **************************************************************************
//  ��ƦW��: sl_2ymd()
//  ��ƥ\��: �q����~��� (yyyy-mm-dd)
//  �ϥΤ覡: sl_4ymd('20061022',$���j�榡<'.'�B'/'�B'-'>);   return 95-10-22
//                               ^^^^^^^^^���ǭȹw�]��"-"
//  ��    ��: �ǤJ����@�߬��褸�~���
//  �{���]�p: Tony
//  �]�p���: 2007.01.10
// **************************************************************************
function sl_2ymd($vdate,$vstyle='-') { // $vstyle='.' = $vstyle �S���ǻ��ѼƮɪ��w�]��
  $vokdate = ''; // �^�Ǥ���ܼ�
  $vdatelen = strlen(trim($vdate)); // ����r�����
  if(8==$vdatelen) {
     $vokdate =  strval(substr($vdate,0,4)-1911).$vstyle.substr($vdate,4,2).$vstyle.substr($vdate,6,2);
  }
  //else {
  //   $vokdate = '������~-sl_2ymd()';
  //}
  return($vokdate);
}

// **************************************************************************
//  ��ƦW��: sl_cht_ymd()
//  ��ƥ\��: �q����~��� (yyyy�~mm��dd)
//  �ϥΤ覡: sl_cht_ymd('20061022','ad(�褸�~)'��'roc(����~)');
//                                   ^^^^^^^^^���ǭȹw�]��"�褸�~"
//  ��    ��: �ǤJ����@�߬��褸�~���
//  �{���]�p: Job
//  �]�p���: 2015.11.19
// **************************************************************************
function sl_cht_ymd($vdate,$vstyle='ad') { // $vstyle �S���ǻ��ѼƮɪ��w�]��
  $vokdate = ''; // �^�Ǥ���ܼ�
  $vdatelen = strlen(trim($vdate)); // ����r�����
  if(8==$vdatelen) {
        switch($vstyle){
          case "ad":
                $vokdate =  substr($vdate,0,4)."�~".substr($vdate,4,2)."��".substr($vdate,6,2)."��";
                break;
          case "roc":
                $vokdate =  strval(substr($vdate,0,4)-1911)."�~".substr($vdate,4,2)."��".substr($vdate,6,2)."��";
                break;
        }
  }

  return($vokdate);
}

// **************************************************************************
//  ��ƦW��: sl_chk_msg()
//  ��ƥ\��: ����W�L�t�Τ��Ѥ���B�ثe�|��Ū�����T���ƶq
//  �{���]�p: Tony
//  �]�p���: 2007.02.06
// **************************************************************************
   function sl_chk_msg($vempno,$vshow_msg='N') {
      $vtoday = date('Y-m-d');

      u_open('message_center');
      $query_msg  = "select count(*) as new_msg_qty
                            from message_box_new
                            where mb02 = 'A'            AND
                                  mb12 = '1'            AND
                                  mb07 = '$vempno' AND
                                  substring(mb13,1,10) < '$vtoday'     AND
                                  mb17<='{$vtoday}' and
                                  d_date = '0000-00-00 00:00:00'
                            order by mb07
                    ";
      //echo $query_msg.'----------';
      $result_msg = mysql_query($query_msg);
      $row_msg    = mysql_fetch_array($result_msg);

      $mmsg_qty = $row_msg["new_msg_qty"];
      //echo $mmsg_qty;
      if('Y'==$vshow_msg && $mmsg_qty>0) {
         sl_errmsg('�z�� <font class=new>'.$mmsg_qty.'</font> �ʶW�L�@�ѥH�W���T���|��Ū���I<br>�Х���<a href="/~docs/message/message_main.php?msel=4&mmb02=A">�i�T�����ߡj</a>Ū����A�~�i�~��ϥΨ�L�t�ΡI');
      }

      return($mmsg_qty);
   }
// **************************************************************************
//  ��ƦW��: sl_chk_qa()
//  ��ƥ\��: ����W�L�t�Τ��Ѥ���B�ثe�|�����ת��q�����׼ƶq
//  �{���]�p: Tony
//  �]�p���: 2007.06.12
// **************************************************************************
   function sl_chk_qa($vempno,$vshow_msg='N') {
      $vtoday = date('Y-m-d');
      u_open('qa');
      $query1  = "select *
                         from qah
                         where substring(qah_6,1,2 ) = '04'       AND
                               b_empno = '$vempno'                AND
                               substring(m_date,1,10) < '$vtoday' AND
                               d_date = '0000-00-00 00:00:00'
                         order by s_num
                 ";
      //echo $query1.'----------';
      $result1  = mysql_query($query1);
      $mmax_qty = mysql_num_rows($result1);   // �����׼ƶq
      if('Y'==$vshow_msg && $mmax_qty>0) {
         sl_errmsg('�z�� <font class=new>'.$mmax_qty.'</font> �ӶW�L�@�ѥH�W�������ץ�I<br>�Цܡi�q�����סj���סA�~�i�~��ϥΨ�L�t�ΡI');
         while($row1 = mysql_fetch_array($result1)) {
               $vm_date = substr($row1['m_date'],5,5);
               $mlink    = "/~docs/erp_qa/erp_qa.php?msel=6&mqah_no={$row1['s_num']}";
               $msubject = "<a href={$mlink}>�Ǹ�:{$row1['s_num']}&nbsp;({$vm_date})&nbsp;{$row1['qah_4']}</a>";
               sl_errmsg($msubject);
         }
      }
      return($mmax_qty);
   }
// **************************************************************************
//  ��ƦW��: sl_chk_hr()
//  ��ƥ\��: ����W�L�t�Τ@�Ӥ�B�ثe�|���T�{���[�h�O���ʸ��
//  �{���]�p: Mimi
//  �]�p���: 2011.11.01
// **************************************************************************
   function sl_chk_hr($vempno,$vshow_msg='N') {
      $vtoday = date('Y-m-d');
      $fd_one_month = date("Y-m-d",strtotime(date("Ymd")." -1 month")); ;
      sl_open('hr');
     
      ///$query_msg  = "SELECT count(*) as cnt
       //              FROM is_mf_mdfy
       //                LEFT JOIN sl.dept on is_mf_mdfy.im01=dept.dept_id
       //              WHERE is_mf_mdfy.a_date = '0000-00-00 00:00:00'
       //                    AND is_mf_mdfy.d_date = '0000-00-00 00:00:00'
       //                    AND ( ({$vempno}='9167722' and (p_gid like 'S1%' or p_gid like 'E1%' or p_gid like 'T1%') )
       //                         or ({$vempno}='0778320' and (p_gid like 'S2%') )
       //                         or ({$vempno}='9203443' and (p_gid like 'S3%') )
       //                         /*or ({$vempno}='0775711' and (p_gid like 'S3%') )*/
       //                        )
       //                    AND is_mf_mdfy.b_date < '{$fd_one_month}'
      
       //             ";     
      $query_msg  = "SELECT count(*) as cnt
                     FROM is_mf_mdfy
                       LEFT JOIN sl.dept on is_mf_mdfy.im01=dept.dept_id
                     WHERE is_mf_mdfy.a_date = '0000-00-00 00:00:00'
                           AND is_mf_mdfy.d_date = '0000-00-00 00:00:00'
                           AND {$vempno}='9167722'
                           AND is_mf_mdfy.b_date < '{$fd_one_month}'
      
                    ";  //upd by �Ϊ� 2020.06.15 �ثe���T�����H���O���ʳ����N�O���b�F, �w�M�p�ŧi����, ���������t 
      //if($vempno=='9167722'){
      //  echo '<pre>'.$query_msg.'</pre>----------';
      //}
      $result_msg = mysql_query($query_msg);
      $row_msg    = mysql_fetch_array($result_msg);

      $mmsg_qty = $row_msg["cnt"];
      //echo $mmsg_qty;
      if('Y'==$vshow_msg && $mmsg_qty>0) {
         sl_errmsg('�z�� <font class=new>'.$mmsg_qty.'</font> ���W�L�t�Τ@�Ӥ�B�ثe�|���T�{���[�h�O���ʸ�ơI<br>�Х���<a href="/~hr/hr_is/is_mf02.php?msel=8&f_page=1&f_del=A">���u/���ݡi��Ʋ��ʡj</a>�T�{��A�~�i�~��ϥΨ�L�t�ΡI');
      }

      return($mmsg_qty);
   }
// **************************************************************************
//  ��ƦW��: sl_chk_meet()
//  ��ƥ\��: �ˬd�O�_���ϥΪ̧�A�u�W�|ĳ�A�|�۰ʶ}�ҷ|ĳ����
//  �{���]�p: Tony
//  �]�p���: 2007.02.06
// **************************************************************************
   function sl_chk_meet() {
      $f_var['mdb']          = 'docs';                  // db name
      $f_var['mtable']       = array('head'=>'rtmeet_h','body'=>'rtmeet_b');

      sl_open($f_var['mdb']);

      $f_var['mwhere'] = "{$f_var['mtable']['head']}.rt22='0000-00-00' and {$f_var['mtable']['head']}.b_date>'0000-00-00' and ({$f_var['mtable']['head']}.rt01 ='{$_SESSION['login_empno']}' or {$f_var['mtable']['head']}.rt11 ='{$_SESSION['login_empno']}') ";
      //echo $f_var['mwhere']."<BR>";
      $f_var['morder'] = "{$f_var['mtable']['head']}.b_date DESC";

      $query      = "select {$f_var['mtable']['head']}.*
                             from {$f_var['mtable']['head']}
                             where {$f_var['mwhere']}
                             order by {$f_var['morder']}
                     ";

      //echo $query;
      $result  = mysql_query($query);
      //$row = mysql_fetch_array($result);
      while($row = mysql_fetch_array($result)){
       $f_var['url_empno0'] = base64_encode($row['rt01']);
       $f_var['url_name0'] = urlencode($row['rt02']);
       $f_var['url_empno1'] = base64_encode($row['rt11']);
       $f_var['url_name1'] = urlencode($row['rt12']);
       if($_SESSION['login_name'] == $row['rt02']){
          $f_var['window'] = $row['rt12'];
       }
       else{
          $f_var['window'] = $row['rt02'];
       }
            echo "<script language='JavaScript'>";
            echo "window.open('/~docs/meeting/meetingbox.php?s_num={$row['s_num']}&rt01={$f_var['url_empno0']}&rt02={$f_var['url_name0']}&rt11={$f_var['url_empno1']}&rt12={$f_var['url_name1']}','{$f_var['window']}','width=700,height=500,toolbar=no,center=yes,help=yes,resizable=yes,status=yes');";
            //echo "alert('{$f_var['window']}');";
            echo "</script>";
      }
      return;
   }

// **************************************************************************
//  ��ƦW��: sl_showsql()
//  ��ƥ\��: �ȹ��T���P�����SQL�ԭz
//  �ϥΤ覡: sl_showsql($str1,str2,...loop)
//  �{���]�p: kenny
//  �]�p���: 2007.03.12
// **************************************************************************
/*
function sl_showsql($sql='',$ar='') {
  Global $_SESSION;
  include_once('/home/sl/public_html/geshi/geshi.php');
  $geshi =& new GeSHi($sql, 'mysql');
  $sql = $geshi->parse_code();
  $sql = str_replace('<pre', '<div' ,$sql);
  $sql = str_replace('</pre>', '</div>' ,$sql);
  if ($_SESSION['it_mode'] == "Y") {
    echo '<input type="button" value="��ܸ�T���������" onclick=\'$(this).toggle(function(){var thisValue=$(this).val();switch(thisValue){case"��ܸ�T���������":$(".sl_showsql").show("normal");$(this).val("���ø�T���������");$(this).fadeIn();break;case"���ø�T���������":$(".sl_showsql").fadeOut("normal");$(this).val("��ܸ�T���������");$(this).fadeIn();break}});\' class="showsql_tog" /><br style="margin:0;height:0;clear:both;" />';
    echo '<pre name="sl_showsql" class="sl_showsql">';
    echo $sql."\n";
    if ($ar!='') print_r($ar);
    echo '</pre>';
  }
}
*/
function sl_showsql() {
  $no = rand(01,99);
  Global $_SESSION;
  include_once('/home/sl/public_html/geshi/geshi.php');

  if (func_get_args()) {
    foreach (func_get_args() as $k=>$v) {
      if (is_array($v) == false) {
        $geshi =& new GeSHi($v, 'mysql');
        $v = $geshi->parse_code();
        $v = str_replace('<pre', '<div' ,$v);
        $v = str_replace('</pre>', '</div>' ,$v);
      }
      $output[] = $v;
    }
  } else {
    $output = array('�L��ơI');
  }

  if ($_SESSION['it_mode'] == "Y") {
    echo '<input type="button" value="��ܸ�T���������" onclick=\'$(this).toggle(function(){var thisValue=$(this).val();switch(thisValue){case"��ܸ�T���������":$("#sl_showsql_'.$no.'").show("normal");$(this).val("���ø�T���������");$(this).fadeIn();break;case"���ø�T���������":$("#sl_showsql_'.$no.'").hide("normal");$(this).val("��ܸ�T���������");$(this).fadeIn();break}});\' class="showsql_tog" /><br style="margin:0;height:0;clear:both;" />';
    echo '<pre id="sl_showsql_'.$no.'" class="sl_showsql">';
    foreach ($output as $k=>$v) {
      if ($k>0) {
        echo '<hr />';
      }
      print_r($v);
    }
    echo '</pre>';
  }
}
// **************************************************************************
//  ��ƦW��: sl_web_log()
//  ��ƥ\��: ���� web log
//  �ϥΤ覡: sl_web_log($f_var)
//  �{���]�p: Tony
//  �]�p���: 2007.05.11
// **************************************************************************
  function sl_web_log($f_var) {
     // Add by Tony 2007.05.11
     // Add by supergk 2016.03.02 �^�D�ޫ��������\��
     //if('S122'==$_SESSION['login_dept_id']) {
        $f_var["tp"]-> newBlock (  "tb_list_web_log"                         ); // show web log
        $f_var["tp"]-> newBlock (  "tb_list_web_log_head"                    );
        sl_open('sl');

        //$query1 = "
        //           select distinct web_log.*,sl_hosts.sh04,sle24.E24_3,dept.sname
        //                  from web_log
        //                  left join sl_hosts  on web_log.fromip = sl_hosts.sh05
        //                  left join pass      on web_log.wg01   = pass.empno
        //                  left join dept      on web_log.wg03   = dept.dept_id
        //                  left join sle.sle24 on sle.sle24.E24_2 = sl.pass.job_id
        //                  where web_log.wg04   = '{$_REQUEST["f_sid"]}'      and
        //                        web_log.wg05   = '{$_SERVER["PHP_SELF"]}'    and
        //                        web_log.wg06   = '{$f_var["f_wg06"]}'        and
        //                        web_log.d_date = '0000-00-00 00:00:00'
        //                  order by web_log.m_date desc
        //          ";
        //if('1130091'==$_SESSION["login_empno"]) {
        $query1 = "
                   select distinct web_log.*,
                          sl_hosts.sh04,
                          sle24.E24_3,
                          pass.hr_deptid AS wg03,
                          dept.sname
                   from web_log
                          left join sl_hosts  on web_log.fromip = sl_hosts.sh05
                          left join pass      on web_log.wg01   = pass.empno
                          /*left join dept      on web_log.wg03   = dept.dept_id*/
                          left join dept      on pass.hr_deptid   = dept.dept_id
                          left join sle.sle24 on sle.sle24.E24_2 = sl.pass.job_id
                   where web_log.wg04   = '{$_REQUEST["f_sid"]}'      and
                                web_log.wg05   = '{$_SERVER["PHP_SELF"]}'    and
                                web_log.wg06   = '{$f_var["f_wg06"]}'        and
                                web_log.d_date = '0000-00-00 00:00:00'
                   order by web_log.m_date desc
                  ";
                                // web_log.wg05   = '{$_SERVER["REQUEST_URI"]}' and
        
        //   echo $query1.'---';
        //}
        //echo $query1;
        $result1  = mysql_query($query1);

        while ($row1 = mysql_fetch_array($result1)) {
          $fd_ipname=iif($row1['si03']=='',$row1['si03'],$row1['fromip']);
               $f_var["tp"]-> newBlock (  "tb_list_web_log_body"                    );
               $f_var["tp"]-> assign   (  "tv_wg03"          , $row1['wg03'] ); // dept_id
               $f_var["tp"]-> assign   (  "tv_sname"         , $row1['sname'] ); // ����²��
               $f_var["tp"]-> assign   (  "tv_wg02"          , $row1['wg02'] ); // name
               $f_var["tp"]-> assign   (  "tv_e24_3"         , $row1['E24_3'] ); // job id
               $f_var["tp"]-> assign   (  "tv_wg07"          , $row1['wg07'] ); // cnt
               //$f_var["tp"]-> assign   (  "tv_date"          , iif($row1['wg07']>1,$row1['m_date'],$row1['b_date']) ); // date
               $f_var["tp"]-> assign   (  "tv_date"          , $row1['m_date'] ); // date

               $fromip = ($row1['sh04']=='')?$row1['fromip']:$row1['sh04'];
               $f_var["tp"]-> assign   (  "tv_from"          , $fromip ); // ip_name
        }

     //}
     return($f_var);
  }
// **************************************************************************
//  ��ƦW��: sl_dept_mr()
//  ��ƥ\��: �Ǧ^ERP�����h�Ť��������N��
//  �ϥΤ覡: $mdept_mr = sl_dept_mr($f_var)
//  ��    ��: �ݳ]�w���ܼƱa�Jerp�����N���~��ϥ� $f_var["erp_dept_id"] = '5200'
//            �^�ǭȬ��r�� '5200','5201','5202','5203','5204','5205','5206','5207','5208','5209','5210','5211','5212','5213','2201','2202','2203','5214'
//            �u�n select �ק��������� in(...) �Y�i
//
//            SELECT *
//                   FROM dept
//                   WHERE erp_dept_id IN ('5200', '5201', '5202', '5203', '5204', '5205', '5206', '5207', '5208', '5209', '5210', '5211', '5212', '5213', '2201', '2202', '2203', '5214')
//
//  �{���]�p: Tony
//  �]�p���: 2007.05.16
// **************************************************************************
   function sl_dept_mr($f_var) {
      //sl_open('sl');
      //
      //if ($f_var['usedb']=='forwarder') {
      //  $tb = 'actmr_fw';
      //} else {
      //  $tb = 'actmr';
      //}
      //echo $f_var['usedb'];
      if ($f_var['usedb']=='forwarder') {//upd by mimi 2011.02.15 ����-12763 ����ŪERP�Y�i
        $tb = 'forwarder';
      } else {
        $tb = 'Leader9503';
      }
      sl_openms($tb);     // sl_openms($sl_erp_db); // �}�� MSSQL ��Ʈw
      $vdept_mr = '';
      $query1 = "
                 select *
                 from ACTMR
                 where MR001  = '{$f_var['erp_dept_id']}'
                ";
      //echo $tb.'---'.$query1.'<br>';
      $result1  = mssql_query($query1);
      $row1 = mssql_fetch_array($result1);
      if(NULL<>$row1['MR001']) { // �����
         $vmr002 = trim($row1['MR002']); // ����h�Ÿ��
         $query2 = "
                    select *
                    from ACTMR
                    where MR002  like '$vmr002%'
                    order by MR002
                   ";
         //echo $query2.'---';
         $result2  = mssql_query($query2);
         $vcnt = mssql_num_rows($result2); // ����`����
         $vnum = 0;
         while($row2 = mssql_fetch_array($result2)) {
               //echo $row2['mr001'].'---';
               //echo $row2['mr002'].'<br>';
               $vdept_mr .= "'{$row2['MR001']}'";
               $vnum++;
               if($vnum<$vcnt) {
                  $vdept_mr .= ',';
               }
         }
      }
      return($vdept_mr);
   }
// **************************************************************************
//  ��ƦW��: sl_dept_name()
//  ��ƥ\��: �Ǧ^�����W��
//  �ϥΤ覡: $mdept_name = sl_dept_name($mdept_id)
//  �{���]�p: Tony
//  �]�p���: 2007.05.16
// **************************************************************************
   function sl_dept_name($vdept_id) {
      sl_open('sl');

      $vdept_name = '';
      $query1 = "
                 select *
                        from  dept
                        where dept_id = '$vdept_id'          and
                              d_date = '0000-00-00 00:00:00'
                        order by dept_id
                ";
      //echo $query1.'---';
      $result1  = mysql_query($query1);
      $row1 = mysql_fetch_array($result1);
      if(NULL<>$row1['s_num']) { // �����
         $vdept_name = $row1['sname'];
      }
      return($vdept_name);
   }
// **************************************************************************
//  ��ƦW��: sl_eval_fnc_name()
//  ��ƥ\��: ��Ķ�r��A������
//  �ϥΤ覡: sl_eval_fnc_name($func_name,$value)
//  �{���]�p: Tony
//  �]�p���: 2007.05.16
// **************************************************************************
   function sl_eval_fnc_name($vfunc_name,$vvalue) {
      //echo $vfunc_name.'+++';
      //echo $vvalue.'+++';
      return eval('return $vfunc_name($vvalue);');
   }

  // **************************************************************************
  //  ��ƦW��: sl_date_diff()
  //  ��ƥ\��: ����۴�A�^�ǤѼ�
  //  �ϥΤ覡: sl_date_diff('20060531','20060501')
  //  �{���]�p: Tony
  //  �]�p���: 2006.04.17
  // **************************************************************************
  function sl_date_diff($vdate1,$vdate2) {
     $vdate1_yy = substr($vdate1,0,4);
     $vdate1_mm = substr($vdate1,4,2);
     $vdate1_dd = substr($vdate1,6,2);

     $vdate2_yy = substr($vdate2,0,4);
     $vdate2_mm = substr($vdate2,4,2);
     $vdate2_dd = substr($vdate2,6,2);

     //echo $vdate1_yy.$vdate1_mm.$vdate1_dd.'<hr>';
     //echo $vdate2_yy.$vdate2_mm.$vdate2_dd.'<hr>';

     $vday1 = mktime(0,0,0,$vdate1_mm,$vdate1_dd,$vdate1_yy);
     $vday2 = mktime(0,0,0,$vdate2_mm,$vdate2_dd,$vdate2_yy);
     //echo $vday1.'<hr>';
     //echo $vday2.'<hr>';
     //$vrtn_day = (($vday1-$vday2)/86000-1);
     $vrtn_day = floor((($vday1-$vday2)/86000));
     return($vrtn_day);
  }
// **************************************************************************
//  ��ƦW��: u_caclutime()
//  ��ƥ\��: �p��{������ɶ�
//  �ϥΤ覡: $b_times=u_caclutime();$e_times=ucalcutime();$t_times=$b_times-$e_times;
//  �{���]�p: sharbui
//  �]�p���: 2005.11.24
// **************************************************************************
function u_caclutime(){
  $time = explode( " ", microtime());
  $usec = (double)$time[0];
  $sec = (double)$time[1];
  return $sec + $usec;
}
// **************************************************************************
//  ��ƦW��: u_read_username()
//  ��ƥ\��: �έ��sŪ�X�ϥΪ̦W��
//  �ϥΤ覡: u_read_username($empno)
//  �{���]�p: sharbui
//  �]�p���: 2005.12.06
// **************************************************************************
function u_read_username($user_empno) {
  Global $mdat1;
  Global $mtable_pass;
  u_open($mdat1);
  if (NULL == $user_empno) {
    $noname = "�L";
    return $noname;
  }
  else {
    $q_user_data = "SELECT * from $mtable_pass
                                WHERE empno='$user_empno'
                               ";
    //echo $q_user_data.'----';
    $r_user_data = mysql_query($q_user_data);
    $user_data   = mysql_fetch_array($r_user_data);
    return $user_data["name"];
  }
}
// **************************************************************************
//  ��ƦW��: sl_span_str()
//  ��ƥ\��: �N�r��ϥաA���L�o���n�������r��
//  �ϥΤ覡: lspan_str($f_var,$vstr)
//  �{���]�p: Tony
//  �]�p���: 2007.06.12
// **************************************************************************
function sl_span_str($f_var,$vstr) {
   $vchg = 'Y'; // �󴫦r��

   $achk_str[] = 'http'; // url
   $achk_str[] = 'src';  // img
   $achk_str[] = '.doc';  // doc
   $achk_str[] = '.xls';  // xls
   $achk_str[] = '.pdf';  // pdf
   for($i=0;$i<count($achk_str);$i++) {
       if(strstr($vstr,$achk_str[$i])) {
          $vchg = 'N'; // �󴫦r��
          break;
       }
   }
   if('Y'==$vchg) {
     if(''!=$f_var['f_que_ary']){
       $vrtn_str = str_replace($f_var['f_que_ary'],"<span style='".$f_var['mque_color']."'>".$f_var['f_que_ary']."</span>",$vstr);
     }
     else{
       $vrtn_str = str_replace($f_var['f_que'],"<span style='".$f_var['mque_color']."'>".$f_var['f_que']."</span>",$vstr);
     }
   }
   else {
      $vrtn_str = $vstr;
   }
   return $vrtn_str;
}
// **************************************************************************
//  ��ƦW��: sl_save()
//  ��ƥ\��: ����x�s
//  �ϥΤ覡: sl_save($f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
//  �{���ק�: Tony
//  �ק���: 2007.08.15
// **************************************************************************
function sl_save($f_var) {

   $vb_empno = $_SESSION["login_empno"];
   $vb_dept_id =$_SESSION["login_dept_id"];
   $vb_date  = date("Y-m-d H:i:s");
   $vfromip  = $_SERVER["REMOTE_ADDR"];
   $vproc    = u_showproc(); // �{���N��

   //$f_var['mgo_url'] = u_showproc().'.php?msel=4';
   $f_var['mgo_url'] = u_showproc().".php?msel=4&f_sid={$f_var['f_sid']}&f_page=".$f_var["f_page"].'&f_que='.$f_var["f_que"];
   $f_var['mmsg_ok'] = "���{$f_var['msel_name'][ substr($f_var['msel'],0,1) ]}���\...";
   $f_var['mmsg_ng'] = "���{$f_var['msel_name'][ substr($f_var['msel'],0,1) ]}����...";

   include_once("HTTP/Upload.php"); // PEAR �W��?M��
   $vupload = new HTTP_Upload();
   $file_name_fix = date('dmHis');
   switch ($f_var['msel']) {
        case "11": // �s�W-�x�s
        case "C1": // �ƻs-�x�s
             $chk_attach = 'N';//add by mimi 2012.01.13 ����-16013 �W�[�q�X�O�_������
             $vins_fd    = 's_num,';
             $vins_value = '0,';
             reset($f_var['fd']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
             while(list($vfd_id)=each($f_var['fd'])) {
                   if('N'==$f_var['fd'][$vfd_id]['save']) { // �������x�s  Add by Mimi 2007.08.20
                      continue; // loop �^�� while
                   }
                   if(!strstr($f_var["no_save"],$f_var['fd'][$vfd_id]['type'])) {
                     if($f_var['fd'][$vfd_id]['type'] == "datetime"){
                       if($f_var['fd'][$vfd_id]['hhmm']['picker'] != 'N'){
                         $hh = $f_var[$f_var['fd'][$vfd_id]['ename']."_hh"];
                         $mm = $f_var[$f_var['fd'][$vfd_id]['ename']."_mm"];
                         $vfd_value = stripslashes($f_var[ $f_var['fd'][$vfd_id]['ename'] ]);
                         $vfd_value2 = $hh.$mm."00";
                         $vins_fd    .= $vfd_id.',';
                         $vins_value .= "'$vfd_value $vfd_value2',";
                       }else{
                         $hh = $f_var[$f_var['fd'][$vfd_id]['ename']."_hh"];
                         $mm = $f_var[$f_var['fd'][$vfd_id]['ename']."_mm"];
                         $vfd_value = $hh.$mm;
                         $vins_fd    .= $vfd_id.',';
                         $vins_value .= "'$vfd_value',";
                       }
                     }else{
                       $vfd_value = stripslashes($f_var[ $f_var['fd'][$vfd_id]['ename'] ]);
                       $vins_fd    .= $vfd_id.',';
                       $vins_value .= "'$vfd_value',";

                     }
                     //echo $vfd_id.'------'.$f_var[ $f_var['fd'][$vfd_id]['ename'] ]."<br>";
                   	 /*
	                   if('1'==substr($f_var['msel'],0,1)){ //add by ���\ 2018.06.08 �s�W�x�s���session
                     	 $_SESSION['insert'][$vfd_id] = $f_var[ $f_var['fd'][$vfd_id]['ename'] ];
                     }*/
                   }

                   // Mark by Tony 2006.10.02 �L�k�B�z����...��~~~����!!
                   // �W�Ǥ~�ݭn����
                   if('file'==$f_var['fd'][$vfd_id]['type']) {
                      $vfile = $vupload->getFiles($f_var['fd'][$vfd_id]['ename']);
                      if($vfile->isValid()) {
                         if('Y'==$f_var["set_file_name"]) {  //xxx_init.php�̳]�w
                            $vf_prop   = $vfile->getProp();             //��X�쥻�ɦW
                            $vf_explode=explode('.',$vf_prop['name']);  //�r�����,��X���ɦW
                            $vf_name   =$f_var['fd'][$vfd_id]['u_file_name'];
                            //�n��$f_var['fd'][$vfd_id]['u_file_name'] ��"$vfd_id"�~���D�O�����������
                            $vfile->setName("{$vf_name}.{$vf_explode[1]}"); // �ۤv�w�q�ɦW abc.xxx by mimi 2008.12.24
                         }
                         else {
                            $vfile->setName("real",date('ymdHis').'_'); // ����ɦW yymmddhhiiss_xxxxxx.xxx
                         }
                         //$vfile->setName("real");
                         $vfd_name = $vfile->moveTo($f_var["mupload_dir"]);
                         $vins_fd    .= $vfd_id.',';
                         $vins_value .= "'$vfd_name',";
                         if(trim($vfd_name)<>''){
                           $chk_attach = "Y";//add by mimi 2012.01.13 ����-16013 �W�[�q�X�O�_������
                         }
                      }
                   }

             }
             //add by mimi 2012.01.13 ����-16013 �W�[�q�X�O�_������
             $query = "SHOW COLUMNS FROM {$f_var['mtable']['head']} WHERE field = 'attach'";
             //echo $query."<BR>";
             $result = mysql_query($query);
             $num = mysql_num_rows($result);
             //echo $num.'<hr>';
             //echo $chk_attach.'<hr>';
             if($num>0 and 'Y'==$chk_attach){
               $vins_fd    .= "attach ,";
               $vins_value .= "'Y',";
             }
             //-----------------------------------------------------

             //echo '<hr>';
             //echo $vins_fd.'++++';
             //echo $vins_value.'***';
             //if($vproc=='reach01_set'){//�}�ݲ{�P�Ȥ�]�w�@�~���Ҫ��ۦ�n�����ɤ�   2014/11/13�������\��
             //
             //
             //  $f_b_date = substr($f_var['f_b_date'],0,4)."-".substr($f_var['f_b_date'],4,2)."-".substr($f_var['f_b_date'],6,2);
             //  echo $f_b_date;
             //  $vins_fd    .= 'b_proc,b_empno,b_dept_id,b_date,fromip';
             //  $vins_value .= "'$vproc','$vb_empno','$vb_dept_id','$f_b_date','$vfromip'";
             //}
             //else{
               $vins_fd    .= 'b_proc,b_empno,b_dept_id,b_date,fromip';
               $vins_value .= "'$vproc','$vb_empno','$vb_dept_id','$vb_date','$vfromip'";
             //}
             // $vins_value = stripslashes($vins_value);
             $f_var['query_data'] = "insert into {$f_var['mtable']['head']} ($vins_fd) values ($vins_value)";
             //echo"<pre>";
             //echo $f_var['query_data'];
             //echo"</pre>";
             //exit;
             break;
        case "21": // �ק�-�x�s
             $chk_attach='N';//add by mimi 2012.01.13 ����-16013 �W�[�q�X�O�_������
             $vsetupd = "m_empno='$vb_empno',
                         m_dept_id='$vb_dept_id',
                         m_proc ='$vproc'   ,
                         m_date ='$vb_date'
                        ";
             reset($f_var['fd']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
             while(list($vfd_id)=each($f_var['fd'])) {
              if('N'==$f_var['fd'][$vfd_id]['save']) { // �������x�s  Add by Mimi 2007.08.20
                   continue; // loop �^�� while
              }
                   if(!strstr($f_var["no_save"],$f_var['fd'][$vfd_id]['type'])) {
                     if($f_var['fd'][$vfd_id]['type'] == "datetime"){
                       if($f_var['fd'][$vfd_id]['hhmm']['picker'] != 'N'){
                         $hh = $f_var[$f_var['fd'][$vfd_id]['ename']."_hh"];
                         $mm = $f_var[$f_var['fd'][$vfd_id]['ename']."_mm"];
                         $vfd_value = stripslashes($f_var[ $f_var['fd'][$vfd_id]['ename'] ]);
                         $vfd_value2 = $hh.$mm."00";
                         $vsetupd .= ", $vfd_id='{$vfd_value} {$vfd_value2}'";
                       }else{
                         $hh = $f_var[$f_var['fd'][$vfd_id]['ename']."_hh"];
                         $mm = $f_var[$f_var['fd'][$vfd_id]['ename']."_mm"];
                         $vfd_value = $hh.$mm;
                         $vsetupd .= ", $vfd_id='{$vfd_value}'";
                       }
                     }else{
                       $vfd_value = stripslashes($f_var[ $f_var['fd'][$vfd_id]['ename'] ]);
                       $vsetupd .= ", $vfd_id='{$vfd_value}'";
                     }
                     //echo $vfd_id.'------'.$f_var[ $f_var['fd'][$vfd_id]['ename'] ]."<br>";
                   }

                   // �W�Ǥ~�ݭn����
                   if('file'==$f_var['fd'][$vfd_id]['type']) {
                      $vfile = $vupload->getFiles($f_var['fd'][$vfd_id]['ename']);
                         //echo '<pre>';
                         //var_dump($vfile);
                         //echo '</pre>';
                         //exit;
                      if($vfile->isValid()) {
                         if('Y'==$f_var["set_file_name"]) {  //xxx_init.php�̳]�w
                            //�n��$f_var['fd'][$vfd_id]['u_file_name'] ��"$vfd_id"�~���D�O�����������
                            //echo '*****'.$f_var['fd'][$vfd_id]['u_file_name'].'*****';
                            $vf_prop   = $vfile->getProp();             //��X�쥻�ɦW
                            $vf_explode=explode('.',$vf_prop['name']);  //�r�����,��X���ɦW
                            $vf_name   =$f_var['fd'][$vfd_id]['u_file_name'];
                            $vfile->setName("{$vf_name}.{$vf_explode[1]}"); // �ۤv�w�q�ɦW abc.xxx by mimi 2008.12.24
                         }
                         else {
                            $vfile->setName("real",date('ymdHis').'_'); // ����ɦW yymmddhhiiss_xxxxxx.xxx
                         }
                         $vfd_value  = $vfile->moveTo($f_var["mupload_dir"]);
                         $vsetupd   .= ", $vfd_id='{$vfd_value}'";
                         if(trim($vfd_value)<>''){
                           $chk_attach = "Y";//add by mimi 2012.01.13 ����-16013 �W�[�q�X�O�_������
                         }
                      }
                   }

             }
             //add by mimi 2012.01.13 ����-16013 �W�[�q�X�O�_������
             $query = "SHOW COLUMNS FROM {$f_var['mtable']['head']} WHERE field = 'attach'";
             //echo $query."<BR>";
             $result = mysql_query($query);
             $num = mysql_num_rows($result);
             //echo $num;exit;
             //echo $chk_attach;
             if($num>0 and 'Y'==$chk_attach){
               $vsetupd   .= ",attach='Y'";
             }
             //-----------------------------------------------------
             //exit;
             // $vsetupd = stripslashes($vsetupd);
             $f_var['query_data'] = "
                                      update {$f_var['mtable']['head']} set $vsetupd
                                                                        where s_num='{$f_var['f_s_num']}'
                                    ";
             // echo $f_var['query_data']."*****<br>".$vsetupd;exit;
             break;
        case "31": // �@�o-�x�s
             sl_del2flw(&$f_var);
             $f_var['query_data'] = "
                                     update {$f_var['mtable']['head']} set   d_empno='$vb_empno',
                                                                             d_dept_id='$vb_dept_id',
                                                                             d_proc ='$vproc',
                                                                             d_date ='$vb_date'
                                                                    where s_num='{$f_var['f_s_num']}'
                                    ";
             //echo $f_var['query_data'];exit;
             break;
        case "f1": // ��ñ��-�x�s add by mimi 2011.07.01
          //���ɤH��+��Ʈw+��ƪ�+s_num+���O+ñ�e���e+���ɦ��� ���i���ŭ�
          //echo "{$f_var['f_b_empno']}<>'' and {$f_var['f_db']}<>'' and {$f_var['f_table']}<>'' and {$f_var['f_s_num']}<>'' and {$f_var['f_type']}<>'' and {$f_var['f_content']}<>'' and {$f_var['f_cnt']}<>''";
          if($f_var['f_b_empno']<>'' and $f_var['f_db']<>'' and $f_var['f_table']<>'' and $f_var['f_s_num']<>'' and $f_var['f_type']<>'' and $f_var['f_content']<>'' and $f_var['f_cnt']<>''){
            sl_eip2flw(&$f_var);//add by mimi 2011.06.02 ��ñ�֪�
          }
          else{
            sl_errmsg("��ñ�ֳ楢�ѡA�гq����T�H���A���¡I PS.���ɤH��+��Ʈw+��ƪ�+s_num+���O+ñ�e���e+���ɦ��� ���i���ŭȡC"); //qq:para�u��str����font
            exit;
          }
          break;
        default:
             break;
   }
   /*
   //add by ���\ 2018.06.08 �s�W�ڦs���SESSION
   //echo $f_var['query_data']."</br>";
   if(!empty($f_var['query_data'])) { //�p�Gquery_data�����,�N����mysql_query(),only for�s�W�x�s,�ק��x�s,�@�o�x�s,
    if(!mysql_query($f_var['query_data'])) { // �g�J����
      sl_errmsg('<font color="#FFFFFF"><b>�`�N!!</b></font>'.$f_var['mmsg_ng'].'!!'); //qq:para�u��str����font
      exit;
    }else {
    	unset($_SESSION['insert']);
    }
    $f_var['query_data'] = "";
    echo sl_jreplace($f_var['mgo_url']);
   }
   */
   return;
}
  // **************************************************************************
  //  ��ƦW��: sl_del2flw()
  //  ��ƥ\��: �@�o�q�lñ��-ñ�ֳ�
  //  �ϥΤ覡: sl_del2flw(&$f_var)
  //  �{���]�p: Mimi
  //  �]�p���: 2011.06.02
  // **************************************************************************
  function sl_del2flw(&$f_var) {
    sl_open('docs');
    $count_table= substr_count($f_var['mtable']['head'],'.');
    $ex_table   = explode('.',$f_var['mtable']['head']);
    $fd_table   = iif($count_table==0,$f_var['mtable']['head'],$ex_table[1]);
    $vb_empno   = $_SESSION["login_empno"];
    $vb_date    = date("Ymd");
    $vb_time    = date("His");
    $vproc      = u_showproc(); // �{���N��
    $fd_b_empno = $_SESSION["login_empno"];
    $fd_date    = date('Y/m/d H:i:s');
    $vdat1      = 'EF2KWeb';
    $query1 = "SELECT *
               FROM docs.sleip2flw
               where sleip2flw003='{$f_var['mdb']}' and sleip2flw004='{$fd_table}' and sleip2flw010='{$f_var['f_s_num']}'";
    //echo $query1;
    //exit;
    $result1  = mysql_query($query1);
    $num1 = mysql_num_rows($result1);  //����
    //echo $num1;
    if($num1>0){
      $row1 = mysql_fetch_array($result1);
      if('3'==$row1['resda020'] or '4'==$row1['resda020']){
        echo "<script language='JavaScript'>";
        echo "alert('�wñ�֧����Τw���A�L�k�@�o�C');";
        echo "location.replace(\"{$vproc}.php?msel=4\");";
        echo "</script>";
        exit;
      }
      else{
        $query_date = "update docs.sleip2flw set  resda019='{$vb_date}',resda020='4',resda021='4',m_empno='{$vb_empno}', m_dept_id='{$vb_date}', m_proc='{$vproc}', m_date='{$vb_date}'
                        where sleip2flw001='{$row1['sleip2flw001']}' and sleip2flw002='{$row1['sleip2flw002']}'
                       ";
        //echo $query_date.'<hr>';
        if(!mysql_query($query_date)) { // �g�J����
          sl_errmsg("<b>�`�N!!</b>{$query_date}-sl_init:391");
        }
        sl_openef2k($vdat1);
        $query_date1 = "update resda set  resda020='4',resda021='4',resda902='{$fd_b_empno}',resda903='{$fd_date}'
                        where resda001='{$row1['sleip2flw001']}' and resda002='{$row1['sleip2flw002']}'
                       ";
        //echo $query_date1.'<hr>';
        if(!mssql_query($query_date1)) { // �g�J����
          sl_errmsg("<b>�`�N!!</b>{$query_date1}-sl_init:391");
        }
        $query_date2 = "update resdc set  resdc007='11',resdc008='9',resdc902='{$fd_b_empno}',resdc903='{$fd_date}'
                        where resdc001='{$row1['sleip2flw001']}' and resdc002='{$row1['sleip2flw002']}'
                       ";
        //echo $query_date2.'<hr>';
        if(!mssql_query($query_date2)) { // �g�J����
          sl_errmsg("<b>�`�N!!</b>{$query_date2}-sl_init:391");
        }
        $query_date3 = "update resdd set  resdd014='11',resdd015='9',resdd902='{$fd_b_empno}',resdd903='{$fd_date}'
                        where resdd001='{$row1['sleip2flw001']}' and resdd002='{$row1['sleip2flw002']}'
                       ";
        //echo $query_date3.'<hr>';
        if(!mssql_query($query_date3)) { // �g�J����
          sl_errmsg("<b>�`�N!!</b>{$query_date3}-sl_init:391");
        }
        //$f_var['f_msg']="�@�o�����I�ç@�oñ�ֳ� {$row1['sleip2flw001']}-{$row1['sleip2flw002']} �Ыe���q�lñ�֬d�ݡC"; //�T��
      }
    }
    sl_open($f_var['mdb']);//�קK������s�u�Q�����A���s�A�}�@�� add by �h�Z 2014.06.27
    return;
  }
  // **************************************************************************
  //  ��ƦW��: sl_sel_link()
  //  ��ƥ\��: �I����]�w
  //  �ϥΤ覡: sl_sel_link(&$f_var)
  //  ��    ��: �I����]�w
  //  �{���]�p: Tony
  //  �]�p���: 2007.08.21
  // **************************************************************************
  function sl_sel_link($f_var) {
    if($f_var['msel'] == 81){
      reset($f_var['fd_que']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
      while(list($vfd_id)=each($f_var['fd_que'])) {
        switch ($f_var['fd_que'][$vfd_id]['type']) {
          case "text":
          case "select":
            $vfd_value = stripslashes($f_var[ $f_var['fd_que'][$vfd_id]['ename'] ]);
            if(trim($vfd_value) != ''){
              $q_url[$f_var['fd_que'][$vfd_id]['ename']] = $vfd_value;
            }
            break;
          case "date3":
              $vfd_value_s = stripslashes($f_var[$f_var['fd_que'][$vfd_id]['ename'].'_s'].' 00:00:00');
              $vfd_value_e = stripslashes($f_var[$f_var['fd_que'][$vfd_id]['ename'].'_e'].' 23:59:59');
              if(trim($vfd_value_s) != '00:00:00'){
                $q_url[$f_var['fd_que'][$vfd_id]['ename'].'_s'] = $vfd_value_s;
              }
              if(trim($vfd_value_e) != '23:59:59'){
                $q_url[$f_var['fd_que'][$vfd_id]['ename']."_e"] = $vfd_value_e;
              }
            break;
          default:
            break;
        }
      }
      if(!empty($q_url)){
        //print_r($q_url);
        $f_var['q_url'] = http_build_query($q_url);
      }
    }
     if($f_var['f_page']==1) {  // �����A���i�A���W
        $f_var['mup_page'] = $f_var['f_page'];
     }
     else {
        $f_var['mup_page'] = $f_var['f_page']-1;
     }
     if($f_var['f_page']==$f_var['mpagetot']) {  // �����A���i�A���W
        $f_var['mdn_page'] = $f_var['f_page'];
     }
     else {
        $f_var['mdn_page'] = $f_var['f_page']+1;
     }

     /*
     if('71'<>$f_var['msel'] ) {  // �C�L���n�����Y
         $f_var["tp"]-> newBlock ("tb_sel_link"              ); // �s�W���
         $f_var["tp"]-> assign   ("tv_index"   , $f_var['index_url']); // ����
         $f_var["tp"]-> assign   ("tv_add"     , u_showproc().".php?msel=1&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"              ); // �s�W
         $f_var["tp"]-> assign   ("tv_list"    , u_showproc().".php?msel=4&f_page=1&f_del={$f_var['f_del']}&f_sid={$f_var['f_sid']}"                                                                                                   ); // �s��
         $f_var["tp"]-> assign   ("tv_que"     , u_showproc().".php?msel=5&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"              ); // �d��
         $f_var["tp"]-> assign   ("tv_prn"     , u_showproc().".php?msel=7&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"              ); // �C�L
         $f_var["tp"]-> assign   ("tv_help"    , "/~docs/erp/doc/erphelp.htm"   ); // �d��
         //$f_var["tp"]-> assign   ("tv_up_page" , u_showproc().".php?msel=4&f_page=".$f_var['mup_page']."&f_del=".$f_var['f_del']."&f_que=".$f_var['f_que'] ); // �W��
         $f_var["tp"]-> assign   ("tv_up_page" , u_showproc().".php?msel=4&f_page={$f_var['mup_page']}&f_del={$f_var['f_del']}&f_que={$f_var['f_que']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}" ); // �W��
         $f_var["tp"]-> assign   ("tv_dn_page" , u_showproc().".php?msel=4&f_page={$f_var['mdn_page']}&f_del={$f_var['f_del']}&f_que={$f_var['f_que']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}" ); // �U��
         $f_var["tp"]-> assign   ("tv_del_n"   , u_showproc().".php?msel=4&f_page=1&f_del=N&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"                                   ); // N.���o
         $f_var["tp"]-> assign   ("tv_del_y"   , u_showproc().".php?msel=4&f_page=1&f_del=Y&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"                                   ); // Y.�@�o
         $f_var["tp"]-> assign   ("tv_del_a"   , u_showproc().".php?msel=4&f_page=1&f_del=A&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"                                   ); // A.����
     }
     */
     switch ($f_var['msel']) {
      case 71:
      break;
      case 81:
         $f_var["tp"]-> newBlock ("tb_sel_link"              ); // �i���d��
         $f_var["tp"]-> assign   ("tv_index"   , $f_var['index_url']); // ����
         $f_var["tp"]-> assign   ("tv_add"     , u_showproc().".php?msel=1&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"              ); // �s�W
         $f_var["tp"]-> assign   ("tv_list"    , u_showproc().".php?msel=4&f_page=1&f_del={$f_var['f_del']}&f_sid={$f_var['f_sid']}"                                                                                                   ); // �s��
         $f_var["tp"]-> assign   ("tv_que"     , u_showproc().".php?msel=5&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"              ); // �d��
         $f_var["tp"]-> assign   ("tv_advque"  , u_showproc().".php?msel=8&f_page=1"          ); // �i���d��
         $f_var["tp"]-> assign   ("tv_up_page" , u_showproc().".php?msel=81&f_page={$f_var['mup_page']}&{$f_var['q_url']}" ); // �W��
         $f_var["tp"]-> assign   ("tv_dn_page" , u_showproc().".php?msel=81&f_page={$f_var['mdn_page']}&{$f_var['q_url']}" ); // �U��
      break;
      case 'gmaps':
      break;
      default:
         $f_var["tp"]-> newBlock ("tb_sel_link"              ); // �w�]
         $f_var["tp"]-> assign   ("tv_index"   , $f_var['index_url']); // ����
         $f_var["tp"]-> assign   ("tv_add"     , u_showproc().".php?msel=1&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"              ); // �s�W
         $f_var["tp"]-> assign   ("tv_list"    , u_showproc().".php?msel=4&f_page=1&f_del={$f_var['f_del']}&f_sid={$f_var['f_sid']}"                                                                                                   ); // �s��
         $f_var["tp"]-> assign   ("tv_que"     , u_showproc().".php?msel=5&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"              ); // �d��
         $f_var["tp"]-> assign   ("tv_advque"  , u_showproc().".php?msel=8&f_page=1"          ); // �i���d��
         $f_var["tp"]-> assign   ("tv_prn"     , u_showproc().".php?msel=7&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"              ); // �C�L
         $f_var["tp"]-> assign   ("tv_help"    , "/~docs/erp/doc/erphelp.htm"   ); // �d��
         //$f_var["tp"]-> assign   ("tv_up_page" , u_showproc().".php?msel=4&f_page=".$f_var['mup_page']."&f_del=".$f_var['f_del']."&f_que=".$f_var['f_que'] ); // �W��
         $f_var["tp"]-> assign   ("tv_up_page" , u_showproc().".php?msel=4&f_page={$f_var['mup_page']}&f_del={$f_var['f_del']}&f_que={$f_var['f_que']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}&f_qk={$f_var['f_qk']}&f_maxline={$f_var['f_maxline']}&{$f_var['f_sift']}" ); // �W��
         $f_var["tp"]-> assign   ("tv_dn_page" , u_showproc().".php?msel=4&f_page={$f_var['mdn_page']}&f_del={$f_var['f_del']}&f_que={$f_var['f_que']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}&f_qk={$f_var['f_qk']}&f_maxline={$f_var['f_maxline']}&{$f_var['f_sift']}" ); // �U��
         $f_var["tp"]-> assign   ("tv_del_n"   , u_showproc().".php?msel=4&f_page=1&f_del=N&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"                                   ); // N.���o
         $f_var["tp"]-> assign   ("tv_del_y"   , u_showproc().".php?msel=4&f_page=1&f_del=Y&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"                                   ); // Y.�@�o
         $f_var["tp"]-> assign   ("tv_del_a"   , u_showproc().".php?msel=4&f_page=1&f_del=A&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"                                   ); // A.����
      break;
     }
     return;
  }
  // **************************************************************************
  //  ��ƦW��: sl_day_week()
  //  ��ƥ\��: �Y�@������P���X?
  //  �ϥΤ覡: sl_day_week($f_day)
  //  ��    ��: �Y�@������P���X?
  //  �{���]�p: Mimi
  //  �]�p���: 2007.08.24
  // **************************************************************************
  function sl_day_week($f_day) {
      $week = strftime("%w",strtotime($f_day));
      switch($week){
        case "1":
            $week = "(�@)";
            break;
        case "2":
            $week = "(�G)";
            break;
        case "3":
            $week = "(�T)";
            break;
        case "4":
            $week = "(�|)";
            break;
        case "5":
            $week = "(��)";
            break;
        case "6":
            $week = "(��)";
            break;
        case "0":
            $week = "(��)";
            break;
         default:
            $week = "(xx)";
            break;
      }

    return($week);
  }
  // **************************************************************************
  //  ��ƦW��: sl_day()
  //  ��ƥ\��: �q�X���
  //  �ϥΤ覡: sl_day($f_day)
  //  ��    ��: �q�X���
  //  �{���]�p: Mimi
  //  �]�p���: 2007.09.05
  // **************************************************************************
  function sl_day($f_day) {
      if('0000'==substr($f_day,0,4)) {
         $month_day = '-';
      }
      else {
         $month_day = substr($f_day,5,5);
      }
      //echo $month_day;
    return($month_day);
  }
  // **************************************************************************
  //  ��ƦW��: sl_day2()
  //  ��ƥ\��: �q�X���
  //  �ϥΤ覡: sl_day($f_day)
  //  ��    ��: �q�X���
  //  �{���]�p: Mimi
  //  �]�p���: 2007.09.05
  // **************************************************************************
  function sl_day2($f_day) {
      $month_day = substr($f_day,4,2)."-".substr($f_day,6,2);
    return($month_day);
  }

  // **************************************************************************
  //  ��ƦW��: sl_mgr_dept()
  //  ��ƥ\��: �^�ǯS�w�H���γ����i�޲z���ƼƯ��O
  //  �ϥΤ覡: sl_mgr_dept('S102,S161');
  //            �| �Y����T/�|�p,�����^��all,��l�^�ǵn�J���s�i�Ϊ�(SLE/GAS/ERP)�N��
  //            sl_mgr_dept();
  //            �| �^�ǵn�J���s�i�Ϊ�(SLE/GAS/ERP)�N��
  //  ��    ��: $ignore = �����������N��?έ?�u�s��,�H�r�����j�i�V�X��J
  //            $sql_f = �O�_��XSQL�ή榡(�w�]1=YES  0=NO)
  //            $ignore_show = ��������������X�����N��(�w�]0=��Xfalse  1=��X�N��)
  //  �^    ��: array('gas' => '301,302,303',
  //                  'sle' => 'S100,S101,S102',
  //                  'erp' => '1000,1010,1030'
  //                 );
  //  �d    ��:   $dept = sl_mgr_dept();
  //              if ($f_var['show_dept']['erp']<>'all') {
  //                $mwhere .= " and b_gid in (".$dept['erp'].") ";
  //              }
  //  Array
  //  (
  //      [gas] => '802','805','801','804','807','808','811','812','813','815','816','817','818','819','820','821','822','823','824','825','826'
  //      [erp] => '8201','8202','8203','8205','8207','8208','8211','8212','8213','8215','8216','8217','8218','8219','8220','8221','8222','8223','8224','8225','8226'
  //      [sle] => 'S8A1','S8A2','S8A3','S8A5','S8C7','S8A8','S8B2','S8B3','S8B4','S8B6','S8B7','S8B9','S8B8','S8C2','S8C1','S8C5','S8C3','S8C4','S8C6','S8C9','S8C8'
  //      [area] => 800,006,007
  //  )
  //
  //  �{���]�p: kenny
  //  �]�p���: 2007.11.22
  // **************************************************************************
  function sl_mgr_dept($ignore='',$sql_f=1,$ignore_show=0) {
    Global $_SESSION;
    Global $f_var;
    Global $a_pid;
    //include_once('/home/gas/public_html/sl_init.php');

    sl_open('sl');
    $sql = "select * from multi_dept where empno='".$_SESSION['login_empno']."' and ap_id like '%".$f_var['ap_id']."%'";
    //echo $sql;
    $rs = mysql_query($sql);
    $rows = mysql_num_rows($rs);
    if ($rows>0) {
      $ar = mysql_fetch_assoc($rs);
      //if ($ar['area']) $tmp_gas[$ar['area']] = $ar['area'];
      //$query_dept_area = $ar['area'];
      //$dept['area'] = $query_dept_area;
      $dept['area'] = $ar['area'];
      $query_dept_ar = explode(',',str_replace("\r\n","",$ar['dept_id'])); //upd by mimi 2010.10.13 ����-11140 �|�p���\��L�k��ܳ������O,�]��SQL�̦��q�檺���Y,�ثe�w�ư�
      $query_dept = "'".implode("','",$query_dept_ar)."'";
      $sql = "select dept_id as sle,erp_dept_id as erp,b_gid as gas from dept where dept_id in (".$query_dept.") and stop='N'  order by erp_dept_id";
      $rs = mysql_query($sql);
      while ($ar = mysql_fetch_assoc($rs)) {
        if ($ar['gas']) { $tmp_gas[$ar['gas']] = $ar['gas']; }
        if ($ar['erp']) { $tmp_erp[$ar['erp']] = $ar['erp']; }
        if ($ar['sle']) { $tmp_sle[$ar['sle']] = $ar['sle']; }
      }
      if (strstr($query_dept, "614")!=false) { // �w�� ��ϯ� �S�O�ץ�
        $tmp_gas['614'] = '614';
        $tmp_erp['6213'] = '6213';
      }
      if ($sql_f==0) {
        $dept['gas'] = @implode(",",$tmp_gas);
        $dept['erp'] = @implode(",",$tmp_erp);
        $dept['sle'] = @implode(",",$tmp_sle);
      } else {
        $dept['gas'] = "'".@implode("','",$tmp_gas)."'";
        $dept['erp'] = "'".@implode("','",$tmp_erp)."'";
        $dept['sle'] = "'".@implode("','",$tmp_sle)."'";
      }
    } else {
      if ($sql_f==0) {
        /*
        $dept['gas'] = $ar['gas'];
        $dept['erp'] = $ar['erp'];
        $dept['sle'] = $ar['sle'];
        */
        $dept['gas'] = $_SESSION['login_gas_id'];
        $dept['erp'] = $_SESSION['login_erp_dept_id'];
        $dept['sle'] = $_SESSION['login_dept_id'];
      } else {
        /*
        $dept['gas'] = "'".$ar['gas']."'";
        $dept['erp'] = "'".$ar['erp']."'";
        $dept['sle'] = "'".$ar['sle']."'";
        */
        $dept['gas'] = "'".$_SESSION['login_gas_id']."'";
        $dept['erp'] = "'".$_SESSION['login_erp_dept_id']."'";
        $dept['sle'] = "'".$_SESSION['login_dept_id']."'";
      }
    }
    if ($ignore) {
      $ignore = 'S121,S122,S140,S141,S181,S153,S154,'.$ignore;
    } else {
      $ignore = 'S121,S122,S140,S141,S181,S153,S154';
    }
    if (strstr($ignore, $_SESSION['login_dept_id'])!=false || strstr($ignore, $_SESSION['login_empno'])!=false) {
      if ($ignore_show==0) {
        $dept = array('gas'=>'all','erp'=>'all','sle'=>'all');
      } else {
        $dept = '';
        $sql = "select dept_id as sle,erp_dept_id as erp,b_gid as gas from dept where stop='N' order by erp_dept_id";
        $rs = mysql_query($sql);
        while ($ar = mysql_fetch_assoc($rs)) {
          if ($ar['gas']) { $tmp_gas[$ar['gas']] = $ar['gas']; }
          if ($ar['erp']) { $tmp_erp[$ar['erp']] = $ar['erp']; }
          if ($ar['sle']) { $tmp_sle[$ar['sle']] = $ar['sle']; }
        }

        if ($sql_f==0) {
          $dept['gas'] = @implode(",",$tmp_gas);
          $dept['erp'] = @implode(",",$tmp_erp);
          $dept['sle'] = @implode(",",$tmp_sle);
        } else {
          $dept['gas'] = "'".@implode("','",$tmp_gas)."'";
          $dept['erp'] = "'".@implode("','",$tmp_erp)."'";
          $dept['sle'] = "'".@implode("','",$tmp_sle)."'";
        }
      }
    }
    //$dept['area'] = $query_dept_area;
    if (is_array($a_pid) && $dept['area']) {
      foreach ($a_pid as $k=>$v) {
        if ($dept['area']=='000' && trim($k) && (substr($k,4,2)=='00' || substr($k,3,1)=='0')) {
          $tmp_dept['area'][substr($k,3,3)] = substr($k,3,3);
        } else if (substr($dept['area'],1,2)=='00' && trim($k)) { // �Ʋz
          if (substr($k,4,2)=='00' && substr($dept['area'],0,1)==substr($k,0,1)) {
            $tmp_dept['area'][substr($k,3,3)] = substr($k,3,3); // ��
          } else if (substr($k,3,1)=='0' && substr($dept['area'],0,1)==substr($k,0,1)) {
            $tmp_dept['area'][substr($k,3,3)] = substr($k,3,3); // ��
          }
        } else { // �Ҫ�
          if (substr($k,3,1)=='0' && $dept['area']==substr($k,0,3)) {
            $tmp_dept['area'][substr($k,3,3)] = substr($k,3,3); // ��
          }
        }
      }
      //$dept['area'] = '';
      $dept['area'] = @implode(',',$tmp_dept['area']);
      //$dept['area'] = $tmp_dept['area'];
    }

    $f_var['show_dept'] = $dept;
    return $f_var['show_dept'];
  }
  // **************************************************************************
  //  ��ƦW��: sl_get_ap()
  //  ��ƥ\��: �ˬdap_id�P�_��Ʈw�W��
  //  �ϥΤ覡: sl_get_ap($ap_id,$row_ad)
  //  �{���]�p: Mimi
  //  �]�p���: 2008.02.29
  // **************************************************************************
  function sl_get_ap($f_var) {
    sl_open(sl);
    $query = "select sl.ap.* from sl.ap where sl.ap.ap_id='{$f_var['f_sid']}'";
    //echo $query;
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $f_var['sl_ap_db']     = $row['ap_db'];
    $f_var['sl_ap_dept']   = $row['ap_dept'];
    $f_var['sl_ap_job_id'] = $row['ap_job_id'];
    $f_var['sl_ap_gp'] = $row['ap_gp'];  //add by ChiaWen 2021.11.30 �W�[hrm�����s�էP�_
    return $f_var;
  }

  // **************************************************************************
  //  ��ƦW��: sl_chk_login2()
  //  ��ƥ\��: �ˬd�ĤG�h�K�X
  //  �ϥΤ覡: sl_chk_login2($f_var)
  //  �{���]�p: Tony
  //  �]�p���: 2007.11.28
  // **************************************************************************
  function sl_chk_login2($f_var) {
    global $mtable_pass; // �������u�n�J��
    //echo $f_var['f_pwd2'].'--------';
    $query = "select old_PASSWORD('{$f_var['f_pwd2']}') as pwd2";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    //sl_open('sl');
    $query1  = "select * from sl.$mtable_pass where empno='{$_SESSION['login_empno']}' and pwd2='{$row['pwd2']}' and d_date='0000-00-00 00:00:00'";
    //echo $query1.'<br>';
    $row1    = mysql_fetch_array(mysql_query($query1));
    //echo $row1["empno"].'++++';
    if(NULL!=trim($row1["empno"])) { // �����
       $_SESSION['login_2'] = 'Y'; // �{�� ok �N login2 �g�J Y , �o�˴N���ΦA�ݱK�X�F�A����n�X
       if( ''!=$f_var['f_tohref'] ){ //�~�|�d�߷|�@�����^���e��, �W�[�ѼƧP�_
         echo sl_jreplace($f_var['f_tohref']);
       }else{
         echo sl_jreplace(u_showproc().'.php');
       }
    }
    else {
       //sl_errmsg('�K�X���~!!�Э��s��J!!�z�ٳѾl'..'��');
       sl_errmsg('�ӤH�K�X���~!!�Э��s��J!!');
       //exit;
    }
    //echo $_SESSION['login_2'].'-function-';
    return;
  }
  // **************************************************************************
  //  ��ƦW��: sl_range_gas()
  //  ��ƥ\��: �^�ǫ��w�ϧO�����o���N�X
  //  �ϥΤ覡: sl_range_gas('001') �^�� '301','302','303' ...
  //  �{���]�p: kenny
  //  �]�p���: 2008-03-27
  // **************************************************************************
  function sl_range_gas($gas) {
    //u_open('gas'); // Mark by Tony 2010-07-06 �}��EIP����Ʈw�ϥ�,���M�u���`�����!!
    if(!mysql_select_db('gas')) {
      sl_open('gas_eip_960125');
      //sl_open('gas');
    }

    $mwhere = " and stop_flag!='Y' ";
    $mlen = strlen($gas);
    $gas_short = substr($gas,0,3);
    if ($mlen=='3') {
      switch ($gas) {
        case '001':
        case '002':
        case '003':
        case '004':
        case '005':
        case '006':
        case '007':
        case '008':
        case '009':
        case '010':
          $sql = "select b_gid from company where substring(p_gid,2,2)='".substr($gas,1,2)."' $mwhere order by p_gid";
        break;
        case '500':
        case '600':
        case '800':
          $sql = "select b_gid from company where substring(p_gid,1,1)='".substr($gas,0,1)."' $mwhere order by p_gid";
        break;
        case '501':
        case '502':
        case '603':
        case '604':
        case '605':
        case '806':
        case '807':
          $sql = "select b_gid from company where substring(p_gid,1,3)='".$gas."' $mwhere order by p_gid";
        break;
        case '000':
          $sql = "select b_gid from company where 1 $mwhere order by p_gid";
        break;
        default:
          $sql = "select b_gid from company where substring(p_gid,4,3)='".$gas."' $mwhere order by p_gid";
        break;
      }
    } else {
      switch ($gas) {
        case '800800':
        case '500500':
        case '600600':
          $sql = "select b_gid from company where substring(p_gid,1,1)='".substr($gas_short,0,1)."' $mwhere order by p_gid";
        break;
        case '501001':
        case '502002':
        case '603003':
        case '604004':
        case '605005':
        case '806006':
        case '807007':
          $sql = "select b_gid from company where substring(p_gid,1,3)='".substr($gas_short,0,3)."' $mwhere order by p_gid";
        break;
        case '000000':
          $sql = "select b_gid from company where 1 $mwhere order by p_gid";
        break;
        default:
          $sql = "select b_gid from company where p_gid='".$gas."' $mwhere order by p_gid";
        break;
      }
    }
    $rs = mysql_query($sql);
    while ($ar = mysql_fetch_assoc($rs)) {
      $array[] = $ar['b_gid'];
    }
    $dump = "'".@implode("','", $array)."'";
    return $dump;
  }
  // **************************************************************************
  //  ��ƦW��: sl_tb_log()
  //  ��ƥ\��:
  //  �ϥΤ覡: sl_tb_log($f_var)
  //  �{���]�p: Mimi
  //  �]�p���: 2008.04.24
  // **************************************************************************
  function sl_tb_log($f_var) {
    //echo "<pre>";
    //var_dump($f_var);
    //echo "</pre>";exit;
    sl_open($f_var['mdb']); // �}�Ҹ�Ʈw
    $query_log = "INSERT INTO {$f_var['mtable']['log']}
                  SELECT *
                  FROM {$f_var['mtable']['head']}
                  WHERE {$f_var['mtable']['head']}.s_num='{$f_var['f_s_num']}'
                   ";
    //echo $query_log;exit;
    if(!mysql_query($query_log)) { // �g�J����
      sl_errmsg('<font color="#FFFFFF"><b>�`�N!!</b></font>'.$query_log.'!!---1139-head');
      exit;
    }
    return ($f_var);
  }
  // **************************************************************************
  //  ��ƦW��: sl_rebuild_msg()
  //  ��ƥ\��: ���t�X�s�������T����ܨô�t�θ귽�ϥβv
  //            �W�[�T���J���ɩ�sl�ؿ�

  //  �ϥΤ覡: sl_rebuild_msg()
  //  �{���]�p: �F��
  //  �]�p���: 2009.04.16
  // **************************************************************************
function sl_rebuild_msg(){
    sl_open('docs');
    $f_var['content_qty'] = 3; //
    $sql_num = "select * from news_board where d_date = '0000-00-00 00:00:00'";
    $rs_num = mysql_query( $sql_num );
    $eip_num = mysql_num_rows($rs_num);
    if($eip_num>0){
      $f_var['content_title']   []="�T���o��";
      $f_var['content_fd_name'] []="nb04,nb01,nb02";
      $f_var['content_fd_type'] []="date,text";
      $f_var['content_link']    []="{$f_var['server_name']}/~docs/news_board/nb01.php?msel=41&f_s_num='s_num'"; // list �浧
      $f_var['content_sql' ]    []="select * from docs.news_board where docs.news_board.d_date='0000-00-00' order by docs.news_board.s_num desc limit {$f_var['content_qty']}";  // sql
      $f_var['content_more']    []="{$f_var['server_name']}/~docs/news_board/nb01.php";
    }
    //stop by mimi 2010.11.04 ����-11469 �|ĳ�q���^�g,�����`
    //open by �F�� 2011.05.02 ����-13531 �����Q�װϭ��s�}��
    $f_var['content_title']   []="�����Q��";
    $f_var['content_fd_name'] []="dh03,dh02,dh07";
    $f_var['content_fd_type'] []="date,text,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/moderated/doc02.php?mnf01=02&msel=41&f_s_num='s_num'"; // list �浧
    $f_var['content_sql' ]    []="select * from moderated.doc02_h  where moderated.doc02_h.d_date='0000-00-00' and moderated.doc02_h.dh10='' order by moderated.doc02_h.b_date desc limit {$f_var['content_qty']}";  // sql

    $f_var['content_title']   []="�̪񤽧i";
    //$f_var['content_fd_name'] []="nf03,nf021,nf022,nf023,nf05";
    //$f_var['content_fd_type'] []="date,text,text,text,text";
    $f_var['content_fd_name'] []="nf03,nf05";
    $f_var['content_fd_type'] []="date,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf01.php?mnf01=01&msel=41&f_s_num='s_num'"; // list �浧
    $f_var['content_sql' ]    []="select * from notify.notify1 where substring(notify.notify1.nf01,1,2)='01' and notify.notify1.d_date='0000-00-00' order by notify.notify1.s_num desc limit {$f_var['content_qty']}";  // sql

    //add by zihan 2020.02.07 ����37721-�ݿ�15338-eip�����s�W�H�Ƥ��i    20.02.11��seip
    //edit by ���\ 2020.02.21 �̸�T�Ʋz���ܻݱN�u�H�Ƥ��i�v�qEIP��������, ��ܡu�̪񤽧i�v�U��
    $f_var['content_title']   []="�H�Ƥ��i";
    $f_var['content_fd_name'] []="nf03,nf05";
    $f_var['content_fd_type'] []="date,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf03.php?mnf01=05&msel=41&f_s_num='s_num'"; // list �浧
    $f_var['content_sql' ]    []="select * from notify.notify3 where substring(notify.notify3.nf01,1,2)='05' and notify.notify3.d_date='0000-00-00' order by notify.notify3.s_num desc limit {$f_var['content_qty']}";  // sql

    $f_var['content_title']   []="�̪�q��";
    $f_var['content_fd_name'] []="nf03,nf05";
    $f_var['content_fd_type'] []="date,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf01.php?mnf01=02&msel=41&f_s_num='s_num'"; // list �浧
    $f_var['content_sql' ]    []="select * from notify.notify1 where substring(notify.notify1.nf01,1,2)='02' and notify.notify1.d_date='0000-00-00' order by notify.notify1.s_num desc limit {$f_var['content_qty']}";  // sql

    $f_var['content_title']   []="�̪�q��";
    $f_var['content_fd_name'] []="nf03,nf05";
    $f_var['content_fd_type'] []="date,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf01.php?mnf01=03&msel=41&f_s_num='s_num'"; // list �浧
    $f_var['content_sql' ]    []="select * from notify.notify1 where substring(notify.notify1.nf01,1,2)='03' and notify.notify1.d_date='0000-00-00' order by notify.notify1.s_num desc limit {$f_var['content_qty']}";  // sql

    $f_var['content_title']   []="�����q��";
    $f_var['content_fd_name'] []="nf02,sname,nf03";
    $f_var['content_fd_type'] []="date,text,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf06.php?msel=41&mnf01='nf01_dept'&f_s_num='s_num'"; // list �浧
    /*$f_var['content_sql' ]    []="select notify.notify6.*,sl.dept.sname
                                         from notify.notify6
                                         inner join sl.dept on sl.dept.dept_id=notify.notify6.nf01
                                         where notify.notify6.d_date = '0000-00-00'
                                         order by notify.notify6.nf02 desc
                                         limit {$f_var['content_qty']}
                                 "; // sql*/
    $f_var['content_sql' ]    []="select notify.notify6.*,case
                                         when sl.dept.dept_id = 'S122'
                                         then '��T��'
                                         else sl.dept.sname
                                         end as sname
                                         from notify.notify6
                                         inner join sl.dept on sl.dept.dept_id=notify.notify6.nf01
                                         where notify.notify6.d_date = '0000-00-00'
                                         order by notify.notify6.nf02 desc
                                         limit {$f_var['content_qty']}
                                 "; // sql
    $f_var['content_title']   []="�|ĳ�q��";
    $f_var['content_fd_name'] []="nf02,nf01";
    $f_var['content_fd_type'] []="date,substr";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf10.php?msel=41&f_s_num='s_num'"; // list �浧
    $f_var['content_sql' ]    []="select * from notify.notify10 where  notify.notify10.d_date='0000-00-00 00:00:00' and notify.notify10.nf12='Y' order by notify.notify10.nf02 desc limit {$f_var['content_qty']}";  // sql

    $f_var['content_title']   []="�̪�|ĳ";
    $f_var['content_fd_name'] []="nf02,nf01";
    $f_var['content_fd_type'] []="date,substr";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf10.php?msel=41&f_s_num='s_num'"; // list �浧
    $f_var['content_sql' ]    []="select * from notify.notify10 where  notify.notify10.d_date='0000-00-00 00:00:00' and notify.notify10.nf12<>'Y' and nf02>='".date('Ymd')."' order by notify.notify10.nf02 limit {$f_var['content_qty']}";  // sql

    //stop by mimi 2010.11.04 ����-11469 �|ĳ�q���^�g,�����`
        //$f_var['content_title']   []="�̪�|ĳ";
        //$f_var['content_fd_name'] []="nf021,nf01,nf022,nf03";
        //$f_var['content_fd_type'] []="date,substr,substr_time,substr";
        //$f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf09.php?mnf01='nf01_meet'&msel=41&f_s_num='s_num'"; // list �浧
        //$f_var['content_sql' ]    []="select * from notify.notify9 where substring(notify.notify9.nf01,1,1) in('0','1') and notify.notify9.d_date='0000-00-00' and nf022!='--' order by notify.notify9.nf021 desc limit {$f_var['content_qty']}";  // sql
        //$f_var['content_sql' ]    []="select * from notify.notify9 where notify.notify9.nf021>=(curdate()+0) /*and substring(notify.notify9.nf01,1,1) in('0','1')*/ and notify.notify9.d_date='0000-00-00' and nf022!='--' order by notify.notify9.nf021 desc limit {$f_var['content_qty']}";  // sql

    //add by �¶v 2016.06.04 ����29184-���qEIP�����W�[�Ш|�V�m���
    $f_var['content_title']   []="�Ш|�V�m";
    $f_var['content_fd_name'] []="nf03,nf05";
    $f_var['content_fd_type'] []="date,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf01.php?mnf01=04&msel=41&f_s_num='s_num'"; // list �浧
    $f_var['content_sql' ]    []="select * from notify.notify1 where substring(notify.notify1.nf01,1,2)='04' and notify.notify1.d_date='0000-00-00' order by notify.notify1.s_num desc limit {$f_var['content_qty']}";  // sql

    $f_var['content_title']   []="�ų����";
    $f_var['content_fd_name'] []="nf02,nf04";
    $f_var['content_fd_type'] []="date,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf07.php?msel=41&f_s_num='s_num'"; // list �浧
    $f_var['content_sql' ]    []="select * from notify.notify7 where notify.notify7.d_date='0000-00-00' order by notify.notify7.nf02 desc limit {$f_var['content_qty']}";  // sql

    //stop by mimi 2010.11.04 ����-11469 �|ĳ�q���^�g,�����`
    $f_var['content_title']   []="�̷s����";
    $f_var['content_fd_name'] []="pah01,pah02,pah04";
    $f_var['content_fd_type'] []="date,text,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/pap/pa01.php?msel=41&f_s_num='s_num'"; // list �浧
    $f_var['content_sql' ]    []="select * from pap.pap_h where pap.pap_h.d_date='0000-00-00' order by pap.pap_h.b_date desc limit {$f_var['content_qty']}";  // sql

    $open = fopen('/home/sl/public_html/eip_public_msg.itm','w+');

     for($i=0;$i<count($f_var['content_title']);$i++) {

         $afd_name = explode(',',$f_var['content_fd_name'][$i]);
         $afd_type = explode(',',$f_var['content_fd_type'][$i]);

         $result = mysql_query($f_var['content_sql'][$i]);
         //if('0775711'==$_SESSION['login_empno']){
         // echo ($f_var['content_sql'][$i]).'<br>';
         //}
         while ($row = mysql_fetch_array($result)) {
                $mlist_fd = $f_var['content_title'][$i].';';
                $mlink = str_replace("'s_num'",$row['s_num'],$f_var['content_link'][$i]); // ��� s_num ����
                $mlink = str_replace("'nf01_meet'",substr($row['nf01'],0,2),$mlink);      // �|ĳ�q���n�t�~�B�z
                $mlink = str_replace("'nf01_dept'",$row['nf01'],$mlink);                  // �����q���n�t�~�B�z
                //echo $mlink;
                $mlist_fd.= $mlink.';';
                for($j=0;$j<count($afd_name);$j++) {
                    switch ($afd_type[$j]) {
                       case "date":
                            $mlist_fd .= sl_ymd($f_var['show_year'],$row[ $afd_name[$j] ],'.').';';
                            break;
                       case "date4":
                            $mlist_fd .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.u_showdate($row[ $afd_name[$j] ],'.').';';
                            break;
                       case "substr_time":
                            $mlist_fd .= u_showtime(substr($row[ $afd_name[$j] ],3,999) ).';';
                            break;
                       case "time":
                            $mlist_fd .= u_showtime($row[ $afd_name[$j] ]).';';
                            break;
                       case "dept":
                            $mlist_fd .= trim(substr($row[ $afd_name[$j] ],3,999)).';';
                            break;
                       case "substr":
                            //$mlist_fd .= trim(substr($row[ $afd_name[$j] ],3,999)).';';
                            if( $afd_name[$j]=='nf01' ){  // �|ĳ�q���B�̪�|ĳ�n�t�~�B�z  add by �Ϊ� 2013.07.08
                              $ex_td03  = explode(".",$row[ $afd_name[$j] ]);
                              $mlist_fd .= trim($ex_td03[1]).';';
                            }else{
                              $mlist_fd .= trim(substr($row[ $afd_name[$j] ],3,999)).';';
                            }

                            break;
                       default:
                            $mlist_fd .= $row[ $afd_name[$j] ].';';
                            break;
                    }
                }
                $data = $mlist_fd."\r\n";
                fwrite( $open,$data );
         }
     }
     //exit;
}
  // **************************************************************************
  //  ��ƦW��: sl_month_change()
  //  ��ƥ\��: �^�ǫe��Φ���]�褸�~���^
  //  �ϥΤ覡: sl_month_change('20090131','+1') ??20090201
  //            sl_month_change('20090131','-1') �� 20081201
  //  �{���]�p: kenny
  //  �]�p���: 2009.09.01
  // **************************************************************************
  function sl_month_change($ymd,$calc) {
    switch ($calc{0}) {
      case '+':
        $calc = (int)$calc;
        $ymd = date('Ymd',mktime(0,0,0,(date('n',strtotime($ymd))+$calc>12)?1:date('n',strtotime($ymd))+$calc,1,date('Y',strtotime($ymd.' +'.$calc.' months'))));
      break;
      case '-':
        $calc = abs($calc);
        $ymd = date('Ymd',mktime(0,0,0,(date('n',strtotime($ymd))-$calc)<1?13-$calc:date('n',strtotime($ymd))-$calc,1,date('Y',strtotime($ymd.' -'.$calc.' months'))));
      break;
    }
    return $ymd;
  }

  // **************************************************************************
  //  ��ƦW��: sl_mgr_pid()
  //  ��ƥ\��: �̺޲z�h�����sl.multi_dept�A���㤻�X�o�~���O�}�C $a_pid
  //  �ϥΤ覡: sl_mgr_pid($a_pid,$ignore)
  //            or
  //            foreach (sl_mgr_pid($a_pid) as $k=>$v) { ... }
  //            $ignore = �i�ݥ����o�����|�X�H�Ƴ����N���άO���s�]�r�I���j�^
  //  Array
  //  (
  //      [800800] => �n��
  //      [806006] => �Ĥ���
  //      [807007] => �ĤC��
  //      [806801] => �j�L��
  //      [807802] => ������
  //      ...
  //  )
  //  �{���]�p: kenny
  //  �]�p���: 2010.02.02
  // **************************************************************************
  function sl_mgr_pid($a_pid,$ignore='') {
    Global $a_pid;
    if (is_array($a_pid)) {
      $mgr_dept = sl_mgr_dept($ignore);
      foreach ($a_pid as $k=>$v) {
        if (strstr($mgr_dept['gas'].$mgr_dept['area'],substr($k,3,3))!=false || trim($k)=='') {
          $new_a_pid[$k] = $v;
        } else if ($mgr_dept['gas']=='all') {
          $new_a_pid[$k] = $v;
        }
      }
    } else {
      sl_errmsg('�d�L���O�}�C���[$a_pid]�I');
    }
    return $new_a_pid;
  }
  // **************************************************************************
  //  ��ƦW��: sl_in()
  //  ��ƥ\��: �d�߫��w�r��O�_���ŦX�]�i�Φb�v���]�w�^
  //  �ϥΤ覡: if (sl_in('S122','S111,S122,S133')) { ... }
  //  �{���]�p: kenny
  //  �]�p���: 2010.03.29
  // **************************************************************************
  function sl_in($str_a,$str_b) {
    return (strstr($str_b,$str_a)!=false)?true:false;
  }
  // **************************************************************************
  //  ��ƦW��: sl_str_explode()
  //  ��ƥ\��: �r�����,�C�̭Ӧr�N�q��
  //  �ϥΤ覡: sl_str_explode($vstr,$vqty,$vstyle)
  //            ex.sl_str_explode('2;3;4;5;6;7;8;9;10','3',';')
  //            ��X��, 2;3;4;
  //                    5;6;7;
  //                    8;9;10
  //  ��    ��: �r�����,�C�̭Ӧr�N�q��
  //  �{���]�p: Mimi
  //  �]�p���: 2009.04.13
  // **************************************************************************
  function sl_str_explode($vstr,$vqty='10',$vstyle=',',$vtype='str') {
    global $f_var;
    $fd_exp = explode("{$vstyle}",$vstr);
    $mfd_value= '';
    $fd_cnt   = 0;
    for($i=0;$i<count($fd_exp);$i++) {
      //$fd_key = iif(ereg("[^0-9]",substr($fd_exp[$i],0,1)),$fd_exp[$i],substr($fd_exp[$i],0,3));//�e�T�X�p�G���O�Ʀr�N���q
      //upd by mimi 2011.06.28 �P�_�r��κA
      $fd_key = $fd_exp[$i];
      $fd_cnt++;
      //10�Ӧr��N����
      $mfd_value .= iif(0==($fd_cnt%$vqty),
                        //�̫�@�Ӥ��n���r�I
                        iif($fd_cnt==count($fd_exp),$fd_key,"{$fd_key}{$vstyle}<br>"),
                        //�̫�@�Ӥ��n���r�I
                        iif($fd_cnt==count($fd_exp),$fd_key,"{$fd_key}{$vstyle}"));
    }
    return($mfd_value);
  }


  // **************************************************************************
  //  ��ƦW��: sl_add_select_gas()
  //  ��ƥ\��: �̺޲z�h�����v��,�q�X�U�Ԧ����, ��� /~gas/g_pid.itm
  //  �ϥΤ覡: 1.�������O�ιw�]��,�U�Կ��q�X�o���N��,�B���ܰϧO
  //              list($adept_value,$adept_show,$mdept_qty) = sl_add_select_gas()
  //            2.�Q�n�ۤv�]�w�q�X �o���N�� OR ERP�N��..����
  //              list($adept_value,$adept_show,$mdept_qty) = sl_add_select_gas('erp','N','0775711/S123')
  //            $vkind:  b_gid=�q�X�o���N�� ; erp_dept_id=�q�XERP�N�� ; dept_id=�H�ƨt�γ����N�� ; gas=�o���N�� EX.301 ; hrm=HRM�H�Ʒs�����N�X(8�X)
  //            $varea:  Y=�n���ϧO�ﶵ ; N=�Ȩq�X���O
  //            $voption:�����N���έ��u�s���t�~�n�q�X�����o�����H,�i�H / ���j�i�V�X��J
  //            $voutput:array=�^�ǰ}�C����,�i���Ω�U�Ԧ���� ; where_list=�^�ǳr�I���j����,�i���Ω�SQL��where����
  //  �{���]�p: Mimi
  //  �]�p���: 2010.05.27
  // **************************************************************************
  function sl_add_select_gas($vkind='b_gid',$varea='Y',$voption='',$voutput='array',$vempno='') {
    Global $_SESSION;
    Global $f_var;

    $ashow[]  = '----�п��----';
    $avalue[] = '--';

    $vempno  = iif($vempno=='',$_SESSION['login_empno'],$vempno);//add by mimi 2012.04.03 �W�[�ܼƨϥέ��s�d�޲z���X��
    $vjob_id = iif($vjob_id=='',$_SESSION['login_job_id'],$vjob_id);
    if( 'hrm'!=$vkind ){ //add by 2018.07.03 �w��hrm�����N���B�z
      $vdept_id= iif($vdept_id=='',$_SESSION['login_dept_id'],$vdept_id);
    }else{
      $vdept_id= iif($vdept_id=='',$_SESSION['login_hrm_dept_id'],$vdept_id);
    }
    // Add by Tony 2011-03-11 ���ӭn�ﵴ����|�A�����}�����|�����D???�i�OEIP�T�i�H???
    $fd_p_gid_file= "/home/gas/public_html/g_pid.itm";    // �o���N����
    //$fd_p_gid_file= "http://slt.slc.com.tw/~gas/g_pid.itm";    // �o���N����
    //$fd_p_gid_file= "http://eip.slc.com.tw/~gas/g_pid.itm";    // �o���N����

    list($ar_p_gid_value    ,$ar_p_gid_show    ,$ar_p_gid_qty)   = u_add_select2($fd_p_gid_file);   // �N����J �}�C

    sl_open('sl');
    //$fv_hu = '';
    //$sql_sp = "SELECT *
    //          FROM   hr.set_pview
    //          WHERE  set_pview.d_date='0000-00-00 00:00:00'
    //                 and empno = '{$_SESSION['login_empno']}'
    //          ORDER BY set_pview.b_date";
    //$res_sp = mysql_query($sql_sp);
    //$cnt_sp = mysql_num_rows($res_sp);
    //if( $cnt_sp>0 ){
    //  while ($ar_sp = mysql_fetch_assoc($res_sp)) {
    //    $fv_hu = $ar_sp['dept'];   //�H���v��
    //  }
    //}
    $fv_dept_mf = '';
    $fv_hrdept_mf = '';
    $sql_mf = "SELECT is_mf_set.dept, is_mf_set.hr_dept
              FROM    hr.is_mf_set
                      LEFT JOIN sl.pass on pass.empno = is_mf_set.empno
                      LEFT JOIN hr.set_pview on pass.empno = set_pview.empno
                                                and set_pview.d_date='0000-00-00 00:00:00'
              WHERE  is_mf_set.d_date='0000-00-00 00:00:00'
                     and pass.d_date='0000-00-00 00:00:00'
                     /*and pass.dept_id = 'S116'*/
                     and is_mf_set.empno = '{$_SESSION['login_empno']}'
                     and set_pview.empno != ''
              ORDER BY is_mf_set.b_date";
    $res_mf = mysql_query($sql_mf);
    $cnt_mf = mysql_num_rows($res_mf);
    if( $cnt_mf>0 ){
      while ($ar_mf = mysql_fetch_assoc($res_mf)) {
        $fv_dept_mf = $ar_mf['dept'];   //�H�Ƥ����v��
        $fv_hrdept_mf = $ar_mf['hr_dept'];   //�H�Ƥ����v��
      }
    }
    mysql_query(" insert into dept (dept_id,erp_dept_id,b_gid,p_gid,sap_dept_id,sap_ba) values ('614','6213','614','S3605613','L613','L613'); ");//�t�~�W�[��ϯ�

    //add by mimi 2012.04.03 �C�X�޲z���o�����H��������
    //add by zihan 2021.09.16 �]�|�s�W�䴩��... S126 �q�B-�]�|�B-�䴩��
    if( 'hrm'!=$vkind ){
      $query_s1     = "select group_concat(empno order by empno separator '/') as empno, '' as hr_deptid
                       from sl.pass
                       where dept_id in ('S121','S122','S112','S131','S132','S133','S136','S137','S138','S139','S155','S156','S181','S183','S184','S188','S196','S191','S177','S119','S179','S126')
                             and d_date='0000-00-00 00:00:00'
                    ";
    }
    else{
      $query_s1     = "select group_concat(pass.empno order by pass.empno separator '/') as empno,
                              group_concat(pass.dept_id order by pass.dept_id separator '/') as hr_deptid
                       from   sl.dept_hrm
                              left join sl.pass on dept_hrm.dept_id = pass.hr_deptid
                       where  dept_hrm.sle_dept_id in ('S121','S122','S112','S131','S132','S133','S136','S137','S138','S139','S151','S153','S154','S155','S156','S181','S196','S191','S177','S119','S126')
                              and dept_hrm.d_date='0000-00-00 00:00:00'
                              and pass.d_date='0000-00-00 00:00:00'
                              and dept_hrm.end_date >= '".date("Ymd")."'
                      ";
    }
    //echo "<pre>{$query_s1}</pre>";
    $result_s1 = mysql_query($query_s1);
    $row_s1 = mysql_fetch_array($result_s1);
    $fd_empno_s1 = $row_s1['empno'];
    $fd_hrdept_s1 = $row_s1['hr_deptid'];
    //echo $fd_empno_s1;

    //--�n�t�~�P�_�q�X���o�����H------------------------------------------//upd by mimi 2011.06.21 ����-14064 �W�[�|�p�n�t���v��
    //upd by �p��2019.06.17 �G�W�s�g�z�ɾE�ܰ]�|�B�D��,�ϬMS102�o�~��O�~�ݤ�����
    $fd_exdept_id= strstr("{$voption}/S121/S122/S112/S131/S132/S133/S136/S137/S138/S139/S153/S154/S155/S156/S181/S196/S191/S102/S177/S190/S119",$vdept_id);
    if( 'hrm'==$vkind ){ //add by �Ϊ� 2018.06.21 �w��hrm�����N���B�z
      $fd_exdept_id= strstr("{$voption}/{$fd_hrdept_s1}",$vdept_id);
      //echo $voption."-".$fd_hrdept_s1."-".$vdept_id."<br>";
    }
    //2011.02.09 S196.S191 ADD BY �F��-����
    $fd_exempno  = strstr("{$voption}/{$fd_empno_s1}/0883174/7800053/0970534/7865309/9475036/1631161/9478752/1530453",$vempno); //upd by �Ϊ� 2015.01.07 �g�z�����S���v��!!�]���N5020������,�L�޲z�h���v��,�ɭP�L�v���[�ݦU��,�W�[7800053
                                                                                //upd by �¶v 2016.10.24 ����30217-�k�ȪL�ߥ��ɲժ�, JOB_ID 1026��5030 ��έ��s0970534�P�_
                                                                                //upd by �p�� 2016.12.06 �����ݭn�o���v��
                                                                                //upd by �p�� 2020.02.21 ����37829 �G�W�� - 1631161
                                                                                //upd by �p�� 2020.09.03 ���s�I 9478752
                                                                                //upd by ���� 2022.03.25 �J���� 1530453
    //$fd_exjob_id = strstr("{$voption}/5001/5002/5003/5019/5020/5042/1026",$vjob_id);//upd by mimi 2011.03.09 �N��-5126 �W�[�ƥD�ޥi�s�������o�����v��
    $fd_exjob_id = strstr("{$voption}/5001/5002/5003/5019/5042/1026",$vjob_id);//upd by mimi 2011.03.09 �N��-5126 �W�[�ƥD�ޥi�s�������o�����v��  upd by �Ϊ� 2015.01.06 �����g�z�ݥ���, �]�����o�~�ϸg�z
    //echo $fd_exdept_id.'--'.$fd_exempno.'--'.$fd_exjob_id.'<hr>';
    if($fd_exdept_id<>null or $fd_exempno<>null or $fd_exjob_id<>null){
      if( 'hrm'!=$vkind ){
        $query1     = "SELECT group_concat( dept_id ORDER BY dept_id SEPARATOR ',' )  as dept_id
                       FROM sl.dept
                       where stop='N'
                             and d_date='0000-00-00 00:00:00'
                             and substring(p_gid,1,3) in ('S35','S36','S38')
                       ORDER BY dept_id ASC
                      ";
      }else{
        $query1 = "SELECT group_concat( dept_id ORDER BY dept_id SEPARATOR ',' )  as dept_id
                   FROM   sl.dept_hrm
                   where  stop='N'
                          and d_date='0000-00-00 00:00:00'
                          and dept_id like 'S23%'
                          and dept_hrm.end_date >= '".date("Ymd")."'
                   ORDER BY dept_id ASC
                  ";
      }
      //echo "<pre>{$query1}</pre>";
      $result1 = mysql_query($query1);
      $row1 = mysql_fetch_array($result1);
      //echo $row1['dept_id'];
      $rep_dept_id = str_replace(",","','",$row1['dept_id']);
      $add_ct = 'Y';
    }
    //--------------------------------------------------------------------
    else{
      $rep_dept_id = '';
      //---�P�_�޲z�h�����H-------------------------------------------------------
      //upd by mimi 2011.05.10 �޲z�h�����H�ƨt����X��
      //$query2     = "select *
      //               from sl.multi_dept
      //               where empno='{$vempno}'
      //                     and ap_id like '%{$f_var['ap_id']}%'
      //                     and d_date='0000-00-00 00:00:00'
      //              ";
      //$query2     = "SELECT pass.empno,pass.name,dept_group.group_id,dept_group.group_name,dept_group.dept_id
      //               FROM sl.pass
      //                 left join dept_group on pass.group_id=dept_group.group_id
      //                                         and dept_group.d_date='0000-00-00 00:00:00'
      //               where pass.empno='{$vempno}'
      //                     and pass.group_id <>''
      //                     and pass.d_date='0000-00-00 00:00:00'
      //               order by dept_group.group_id
      //              ";
      //------------------------------------------------------------------------------------------------------

      //if( '1025'==$_SESSION['login_job_id'] or ''!=$fv_hu ){ //add by �Ϊ� 2016.04.08 ����28672-�H�ƨS���޲z�h��,���S�n���Ϭd��
      if( '1025'==$_SESSION['login_job_id'] or ''!=$fv_dept_mf ){
        if( 'hrm'!=$vkind ){
          //switch( substr($_SESSION['login_dept_id'],0,2) ){
          //  case 'S2':
          //       $fd_swhere_pgid = " and substring(p_gid,1,5) in ('S3501') ";
          //       break;
          //  case 'S5':
          //       $fd_swhere_pgid = " and substring(p_gid,1,5) in ('S3502','S3503') ";
          //       break;
          //  case 'S6':
          //       $fd_swhere_pgid = " and (substring(p_gid,1,3) in ('S36')
          //                              or substring(p_gid,1,5) in ('S3504','S3505') )";
          //       break;
          //  case 'S8':
          //       $fd_swhere_pgid = " and substring(p_gid,1,3) in ('S38') ";
          //       break;
          //  default:
          //       break;
          //
          //}
          //$sql_dt = "SELECT group_concat( dept_id ORDER BY dept_id SEPARATOR ',' )  as dept_id
          //           FROM   sl.dept
          //           where  stop='N'
          //                  and d_date='0000-00-00 00:00:00'
          //                  {$fd_swhere_pgid}
          //           ORDER BY dept_id ASC
          //           ";
          $rep_dept_id = str_replace(",","','",$fv_dept_mf);
        }
        else{
          //switch( substr($_SESSION['login_hrm_dept_id'],3,1) ){
          //  case '5':
          //       if( 'S2151102'==$_SESSION['login_hrm_dept_id'] ){
          //         $fd_swhere_pgid_hrm = " and (dept_id like 'S23511%'
          //                                      or dept_id in ('S2010000','S2110000','S2150000','S2151100','S2151102',
          //                                       'S2151202','S2152000','S2152100','S2152101','S2152102',
          //                                       'S2152103','S2310000','S2350000') )";
          //       }else{
          //         $fd_swhere_pgid_hrm = " and ( dept_id like 'S23512%'
          //                                     or dept_id like 'S23513%'
          //                                     or dept_id like 'S2352%' ) ";
          //       }
          //       break;
          //  case '6':
          //       $fd_swhere_pgid_hrm = " and ( dept_id like 'S236%' or dept_id like 'S2362%' ) ";
          //       break;
          //  case '8':
          //       $fd_swhere_pgid_hrm = " and ( dept_id like 'S238%' or dept_id like 'S2382%' ) ";
          //       break;
          //  default:
          //       break;
          //
          //}
          //$sql_dt = "SELECT group_concat( dept_id ORDER BY dept_id SEPARATOR ',' )  as dept_id
          //         FROM   sl.dept_hrm
          //         where  stop='N'
          //                and d_date='0000-00-00 00:00:00'
          //                {$fd_swhere_pgid_hrm}
          //         ORDER BY dept_id ASC
          //         ";
          $rep_dept_id = str_replace(",","','",$fv_hrdept_mf);

        }
        //echo "<pre>{$sql_dt}</pre>";
        //$res_dt = mysql_query($sql_dt);
        //$ar_dt  = mysql_fetch_array($res_dt);
        //$rep_dept_id = str_replace(",","','",$ar_dt['dept_id']);
      }

      if( substr($_SESSION['login_dept_id'],2,1) == 'Z' ){ //add by �h�Z 2018.12.10 ����35136-�o�~��~�S���޲z�h��,���S�n���Ϭd��
        if( 'hrm'!=$vkind ){
          switch( substr($_SESSION['login_dept_id'],0,2) ){
            case 'S5':
                 $fd_swhere_pgid = " and substring(p_gid,1,4) in ('S350') ";
                 break;
            case 'S6':
                 $fd_swhere_pgid = " and substring(p_gid,1,4) in ('S360') ";
                 break;
            case 'S8':
                 $fd_swhere_pgid = " and substring(p_gid,1,4) in ('S380') ";
                 break;
            default:
                 break;

          }
          $sql_dt = "SELECT group_concat( dept_id ORDER BY dept_id SEPARATOR ',' )  as dept_id
                     FROM   sl.dept
                     where  stop='N'
                            and d_date='0000-00-00 00:00:00'
                            {$fd_swhere_pgid}
                     ORDER BY dept_id ASC
                     ";
        }
        else{

          switch( substr($_SESSION['login_hrm_dept_id'],3,1) ){
            case '5':
                 $fd_swhere_pgid_hrm = " and ( dept_id like 'S235%') ";
                 break;
            case '6':
                 $fd_swhere_pgid_hrm = " and ( dept_id like 'S236%' ) ";
                 break;
            case '8':
                 $fd_swhere_pgid_hrm = " and ( dept_id like 'S238%' ) ";
                 break;
            default:
                 break;
          }
          $sql_dt = "SELECT group_concat( dept_id ORDER BY dept_id SEPARATOR ',' )  as dept_id
                   FROM   sl.dept_hrm
                   where  stop='N'
                          and d_date='0000-00-00 00:00:00'
                          and dept_hrm.end_date >= '".date("Ymd")."'
                          {$fd_swhere_pgid_hrm}
                   ORDER BY dept_id ASC
                   ";

        }
        //echo "<pre>{$sql_dt}</pre>";
        $res_dt = mysql_query($sql_dt);
        $ar_dt  = mysql_fetch_array($res_dt);
        $rep_dept_id = str_replace(",","','",$ar_dt['dept_id']);
      }


      if( 'hrm'!=$vkind ){
        if( '7865694'!=$vempno ){  //upd by �Ϊ� 2016.03.01 ����28343, ����ب��N�t�Ϊ��u�@
          //if( '9167781'!=$vempno ){   //upd by �Ϊ� 2014.08.26 ����24394,�t��9167781�D�H�Ƴ���,job_id�]�D�H��,group_id���ŭ�,�ҥH�W�[�ҥ~�P�_�i�H�ݨ줤�Ϫo��
          $query2     = "SELECT pass.empno,pass.name,dept_group.group_id,dept_group.group_name,dept_group.dept_id
                         FROM sl.pass
                           left join dept_group on pass.group_id = dept_group.group_id
                                                   and dept_group.d_date='0000-00-00 00:00:00'
                         where pass.empno='{$vempno}'
                               and pass.group_id <>''
                               and pass.d_date='0000-00-00 00:00:00'
                         order by dept_group.group_id
                        ";
        }else{
          $query2     = "SELECT pass.empno,pass.name,dept_group.group_id,dept_group.group_name,dept_group.dept_id
                         FROM sl.pass
                              left join dept_group on 'SG6G' = dept_group.group_id
                                                   and dept_group.d_date='0000-00-00 00:00:00'
                         where pass.empno='{$vempno}'
                               and pass.d_date='0000-00-00 00:00:00'
                         order by dept_group.group_id
                        ";
        }
      }
      else{
        if( '7865694'!=$vempno ){  //upd by �Ϊ� 2016.03.01 ����28343, ����ب��N�t�Ϊ��u�@
          //if( '9167781'!=$vempno ){   //upd by �Ϊ� 2014.08.26 ����24394,�t��9167781�D�H�Ƴ���,job_id�]�D�H��,group_id���ŭ�,�ҥH�W�[�ҥ~�P�_�i�H�ݨ줤�Ϫo��
          $query2     = "SELECT pass.empno,pass.name,dept_group.group_id,dept_group.group_name,dept_group.dept_id
                         FROM sl.pass
                           left join dept_group on pass.ulyqq_id = dept_group.group_id
                                                   and dept_group.d_date='0000-00-00 00:00:00'
                         where pass.empno='{$vempno}'
                               and pass.ulyqq_id <>''
                               and pass.d_date='0000-00-00 00:00:00'
                         order by dept_group.group_id
                        ";
        }else{
          $query2     = "SELECT dept_group.group_id,dept_group.group_name,dept_group.dept_id
                         FROM   dept_group
                         where  d_date='0000-00-00 00:00:00'
                                and group_id = 'H60000'
                         order by dept_group.group_id
                        ";
        }
      }

      $result2 = mysql_query($query2);
      $num2 = mysql_num_rows($result2);
      if ($num2>0 and ''==$rep_dept_id ) {
        $row2 = mysql_fetch_array($result2);
        $rep_dept_id = str_replace(",","','",str_replace("\r\n","",$row2['dept_id'])); //upd by mimi 2010.10.13 ����-11140 �|�p���\��L�k��ܳ������O,�]��SQL�̦��q�檺���Y,�ثe�w�ư�
        $fd_group_id = $row2['group_id'];
        //echo $rep_dept_id;
      }
      else if( ''==$rep_dept_id ){
        if( 'hrm'!=$vkind ){
          $query3     = "SELECT dept_id
                         FROM sl.pass
                         where empno='{$vempno}'
                               and d_date='0000-00-00 00:00:00'
                        ";
        }else{
          $query3     = "SELECT hr_deptid as dept_id
                         FROM sl.pass
                         where empno='{$vempno}'
                               and d_date='0000-00-00 00:00:00'
                        ";
        }
        //echo "<pre>{$query3}</pre>";
        $result3 = mysql_query($query3);
        $row3 = mysql_fetch_array($result3);
        $rep_dept_id =  $row3['dept_id'];
      }
    }
    if('S6B4'==$_SESSION['login_dept_id'] and 'hrm'!=$vkind){//upd by mimi 2011.05.31 �N�M�����g��,�û����n�C�X�⯸
      $rep_dept_id="S6B4','614";
    }
    //echo $rep_dept_id;
    if( 'hrm'!=$vkind ){
      $query4     = "select *
                     from sl.dept
                     where dept_id in ('{$rep_dept_id}')
                           and d_date='0000-00-00 00:00:00'
                    ";
    }
    else{
      $query4     = "select *
                     from sl.dept_hrm
                     where dept_id in ('{$rep_dept_id}')
                           and d_date='0000-00-00 00:00:00'
                           and dept_hrm.end_date >= '".date("Ymd")."'
                    ";
    }

    //echo "<pre>{$query4}</pre>{$vempno}";//exit;
    $result4 = mysql_query($query4);
    $num4 = mysql_num_rows($result4);
    if ($num4>0) {
      while($row4 = mysql_fetch_array($result4)){
        $fd_b_gid=$row4['b_gid'];
        $ar_gas[$fd_b_gid]=$fd_b_gid;
        $ar_erp[$fd_b_gid]=$row4['erp_dept_id'];
        $ar_sle[$fd_b_gid]=$row4['dept_id'];
        $ar_ba[$fd_b_gid]=$row4['sap_ba'];
      }
    }
    if('Y'==$varea){//�n�q�X�ϧO
      //if($fd_exdept_id<>null or $fd_exempno<>null or $fd_exjob_id<>null
      // or 'SG00'==$fd_group_id or ('SG'==substr($fd_group_id,0,2) and 'G'==substr($fd_group_id,3,1) )
      // or 'SGG'==substr($fd_group_id,0,3) ){
        reset ($ar_p_gid_value);
        //echo '<pre>';
        //print_r($ar_p_gid_value);
        //echo '</pre>';
        while(list($dvalue)=each($ar_p_gid_value)){
          if( 'hrm'!=$vkind ){
            if( ( ($fd_exdept_id<>null or $fd_exempno<>null or $fd_exjob_id<>null or 'SG00'==$fd_group_id ) /*upd by mimi 2011.05.31 �W�[�C�X�Ϫ��ﶵ-���o�~*/
                  and (substr($ar_p_gid_value[$dvalue],6,2)== '00' or substr($ar_p_gid_value[$dvalue],7,2) == '00' )
                ) or
                ( ('SG'==substr($fd_group_id,0,2) and 'G'==substr($fd_group_id,3,1))/*upd by mimi 2011.05.31 �W�[�C�X�Ϫ��ﶵ-�Ϫ�*/
                  and (substr($ar_p_gid_value[$dvalue],3,1)==substr($fd_group_id,2,1) and (substr($ar_p_gid_value[$dvalue],6,2)== '00' or substr($ar_p_gid_value[$dvalue],7,2) == '00') )
                ) or
                ( ('SGG'==substr($fd_group_id,0,3))/*upd by mimi 2011.05.31 �W�[�C�X�Ϫ��ﶵ-�Ҫ�*/
                  and (substr($ar_p_gid_value[$dvalue],5,1)==substr($fd_group_id,3,1)  and substr($ar_p_gid_value[$dvalue],6,2) == '00' ) )){
              $ex_value = explode('.',trim($ar_p_gid_value[$dvalue]));
              $avalue[] = $ex_value[1];
              $ashow[]  = trim($ar_p_gid_show[$dvalue]);
            }
          }
          else{
            $ex_p_gid_val = explode('.',trim($ar_p_gid_value[$dvalue]));
            switch($fd_group_id){
              case 'H10000':
                   if( ($fd_exdept_id<>null or $fd_exempno<>null or $fd_exjob_id<>null)
                      and ('00'==substr($ex_p_gid_val[1],1,2) or '00'==substr($ex_p_gid_val[1],3,2)) ){
                     $avalue[] = $ex_p_gid_val[1];
                     $ashow[]  = trim($ar_p_gid_show[$dvalue]);
                   }
                   break;
              case 'H50000':  //�_��
              case 'H60000':  //����
              case 'H80000':  //�n��
                   if( substr($fd_group_id,1,1)==substr($ex_p_gid_val[1],0,1) and '00'==substr($ex_p_gid_val[1],1,2) ){
                     $avalue[] = $ex_p_gid_val[1];
                     $ashow[]  = trim($ar_p_gid_show[$dvalue]);
                   }
                   break;
              default:
                   if( ''!=$fd_group_id ){
                     switch(substr($fd_group_id,0,2)){ //�_�o�@��...���o�@��....
                       case 'H5':
                            if( strstr("1,2,3",substr($ex_p_gid_val[1],2,1))!=null and '00'==substr($ex_p_gid_val[1],3,2) ){
                              if( substr($ex_p_gid_val[1],2,1)==substr($fd_group_id,3,1) ){
                                $avalue[] = $ex_p_gid_val[1];
                                $ashow[]  = trim($ar_p_gid_show[$dvalue]);
                              }
                            }
                            break;
                       case 'H6':
                            if( strstr("4,5,6",substr($ex_p_gid_val[1],2,1))!=null and '00'==substr($ex_p_gid_val[1],3,2) ){
                              if( substr($ex_p_gid_val[1],2,1)==(substr($fd_group_id,3,1)+3) ){
                                $avalue[] = $ex_p_gid_val[1];
                                $ashow[]  = trim($ar_p_gid_show[$dvalue]);
                              }
                            }
                            break;
                       case 'H8':
                            if( strstr("7,8,9",substr($ex_p_gid_val[1],2,1))!=null and '00'==substr($ex_p_gid_val[1],3,2) ){
                              if( substr($ex_p_gid_val[1],2,1)==(substr($fd_group_id,3,1)+6) ){
                                $avalue[] = $ex_p_gid_val[1];
                                $ashow[]  = trim($ar_p_gid_show[$dvalue]);
                              }
                            }
                            break;
                       default:
                            break;
                     }
                   }
                   else{
                     if( ($fd_exdept_id<>null or $fd_exempno<>null or $fd_exjob_id<>null)
                        and ('00'==substr($ex_p_gid_val[1],1,2) or '00'==substr($ex_p_gid_val[1],3,2)) ){
                       $avalue[] = $ex_p_gid_val[1];
                       $ashow[]  = trim($ar_p_gid_show[$dvalue]);
                     }
                   }
                   break;
            }
          }
        }
      //}
      if('Y'==$add_ct && '/~gas'==substr($_SERVER["PHP_SELF"],0,5)){
      //echo $_SERVER["PHP_SELF"];
        $avalue[] = 'C01C01';
        $ashow[]  = 'C01C01-���o��';
        $avalue[] = 'T01T01';
        $ashow[]  = 'T01T01-�x�쯸';
      }
    }

    reset ($ar_p_gid_value);
    while(list($dvalue)=each($ar_p_gid_value)){
      $ex_value = explode('.',trim($ar_p_gid_value[$dvalue]));
      $ex_show  = explode('-',trim($ar_p_gid_show[$dvalue]));
      $key      = substr($ex_value[1],3,3);

      if($key==$ar_gas[$key] and $key<>NULL){
        switch ($vkind) {
          case "b_gid":  // �o���N��   EX.501301
            $avalue[] = $ex_value[1];
            $ashow[]  = "{$ex_value[1]}-{$ex_show[1]}";
            break;
          case "erp_dept_id":  // ERP�N��    EX.2201
            $avalue[] = $ar_erp[$key];
            $ashow[]  = "{$ar_erp[$key]}-{$ex_show[1]}";
            break;
          case "gas":  // �o���N��    EX.301
            $avalue[] = $ar_gas[$key];
            $ashow[]  = "{$ar_gas[$key]}-{$ex_show[1]}";
            break;
          case "sap_ba":  // SAP�o���N��    EX.L301
            $avalue[] = $ar_ba[$key];
            $ashow[]  = "{$ar_ba[$key]}-{$ex_show[1]}";
            //ECHO $ar_ba[$key]." - ".$ex_show[1];
            break;
          default:    //�H�Ƴ����N�� EX.S2A1
            $avalue[] = $ar_sle[$key];
            $ashow[]  = "{$ar_sle[$key]}-{$ex_show[1]}";
            break;
        }
      }
    }
    // echo "<pre>";
    // print_r($avalue);
    // echo "</pre>";
    mysql_query(" delete from dept where dept_id = '614'; ");//�R���ȮɼW�[����?ϯ?
    if('where_list'==$voutput){
      $fd_where = substr("'".implode("','",$avalue)."'" ,5,99999);

      return $fd_where;
    }
    else{
      return array($avalue,$ashow,count($avalue));
    }
  }
  // **************************************************************************
  //  ��ƦW��: sl_area_get_dept()
  //  ��ƥ\��: ��ܰϧO��,�C�X�o���N�X,�ΤH�Ƴ����N��,��ERP�����N��
  //  �ϥΤ覡: sl_area_get_dept('501001','b_gid'),�N�|�C�X '301','302','303','304'........
  //            $vfd : b_gid=�C�X�o���N�� ; dept_id=�����N�� ; erp_dept_id= erp�����N��
  //  �{���]�p: Mimi
  //  �]�p���: 2010.05.27
  // **************************************************************************
  function sl_area_get_dept($v_b_gid,$vfd='b_gid') {
    Global $f_var;
    sl_open('sl');
    mysql_query(" insert into dept (dept_id,erp_dept_id,b_gid,p_gid,sap_dept_id,stop) values ('614','6213','614','S3605613','L613','N'); ");//�t�~�W�[��ϯ�
    mysql_query(" insert into dept (dept_id,erp_dept_id,b_gid,p_gid) values ('501','','501','S3502501'); ");//add by mimi 2011.09.27 �t�~�W�[�򶩯�
    switch ($v_b_gid) {
      case "000000"://����
        $vwhere  = " and ( ( substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S235%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "500500"://�_��
        //$vwhere  = " and substring(sl.dept.p_gid, 3, 1 ) = '5'";
        $vwhere  = " and ( ( substring(sl.dept.p_gid, 3, 1 ) = '5' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S235%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "600600"://����
        //$vwhere = " and substring(sl.dept.p_gid, 3, 1 ) = '6'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 1 ) = '6' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S236%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "800800"://�n��
        //$vwhere = " and substring(sl.dept.p_gid, 3, 1 ) = '8'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 1 ) = '8' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S238%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "501001"://�Ĥ@��
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '501'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '501' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23511%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "502002"://�ĤG��
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '502'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '502' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23512%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "503003"://�ĤT��  // upd by �¶v 2016.12.15 ����30675-�o�~�t���B��´�N�X�ܰ�
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '503'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '503' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23513%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "604004"://�ĥ|��
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '604'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '604' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23611%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "605005"://�Ĥ���
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '605'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '605' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23612%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "606006"://�Ĥ���  // upd by �¶v 2016.12.15 ����30675-�o�~�t���B��´�N�X�ܰ�
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '606'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '606' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23613%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "807007"://�ĤC��
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '807'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '807' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23811%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "808008"://�ĤK�� add by �h�Z 2012.01.02
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '808'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '808' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23812%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "809009"://�ĤE�� add by �¶v 2016.12.15 ����30675-�o�~�t���B��´�N�X�ܰ�
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '809'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '809' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23813%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "T01T01"://�x�쯸 add by �h�Z 2012.01.02
        //$mleft = "left join gas_eip_960125.company on gas_eip_960125.company.sle_dept = sl.dept.dept_id ";
        $mleft = "left join gas_eip_960125.company on gas_eip_960125.company.sle_dept = sl.dept.dept_id
                                                      or gas_eip_960125.company.hr_deptid = sl.dept.dept_id ";
        $vwhere = " and company.oil_supply = '2'
                    and ( substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38')
                          or ( sl.dept.dept_id like 'S23%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "C01C01"://���o�� add by �h�Z 2012.01.02
        //$mleft = "left join gas_eip_960125.company on gas_eip_960125.company.sle_dept = sl.dept.dept_id ";
        $mleft = "left join gas_eip_960125.company on gas_eip_960125.company.sle_dept = sl.dept.dept_id
                                                      or gas_eip_960125.company.hr_deptid = sl.dept.dept_id ";
        $vwhere = " and company.oil_supply = '1'
                    and ( substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38')
                          or ( sl.dept.dept_id like 'S23%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      default:
        $len_b_gid= strlen($v_b_gid);
        $fd_b_gid = iif($len_b_gid=='6',substr($v_b_gid,3,3),$v_b_gid);
        $vwhere = " and dept.b_gid = '{$fd_b_gid}'
                    and ( substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38')
                          or ( sl.dept.dept_id like 'S23%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
    }
    $query1     = "SELECT group_concat( sl.dept.{$vfd} ORDER BY sl.dept.{$vfd} SEPARATOR ',' )  as {$vfd}
                   FROM sl.dept
                   {$mleft}
                   where stop='N'
                         and dept.d_date='0000-00-00 00:00:00'
                         {$vwhere}
                   ORDER BY dept_id ASC
                  ";

    //echo "<pre>{$query1}</pre>";//exit;
    $result1 = mysql_query($query1);
    $row1 = mysql_fetch_array($result1);
    $rep_dept_id = str_replace(",","','",$row1[$vfd]);
    $fd_dept_id  = "'{$rep_dept_id}'";
    mysql_query(" delete from dept where dept_id in ('614','501'); ");//�R���ȮɼW�[����ϯ�//add by mimi 2011.09.27 �t�~�R���򶩯�
    return ($fd_dept_id);
  }

  // **************************************************************************
  //  ��ƦW��: u_chk_pay()
  //  ��ƥ\��: �x�}�B�O�p��ϥ�
  //  �ϥΤ覡: u_chk_pay(�ۥ~���O,�Ƚs,��ڰe�F���)
  //  �{���]�p: �F��
  //  �]�p���: 2011.01.24
  // **************************************************************************

function u_chk_pay($kind,$custno,$adate){
  u_open('taisugar');
  $sql = "select pay,custno from pd_set
              where substring(kind,1,1) = '{$kind}' and
                    start_date <= '{$adate}' and
                    end_date >= '{$adate}'
             ";
  $rs = mysql_query($sql);
  $num = mysql_num_rows($rs);
  if ($num>1){
    while($row=mysql_fetch_array($rs)){
      if($row['custno']==$custno && $row['custno']!=''){
        $cost = $row['pay'];
      } else {
        if($row['custno']==''){
          $cost = $row['pay'];
        }
      }
    }
  } else {
    $row=mysql_fetch_array($rs);
    $cost = $row['pay'];
  }
  return $cost;
}
  // **************************************************************************
  //  ��ƦW��: sl_eip2flw()
  //  ��ƥ\��: EIP�U�������q�lñ��-ñ�ֳ�
  //  ��?Τ�?
  //  �{���]�p: Mimi
  //  �]�p���: 2011.05.31
  // **************************************************************************
  function sl_eip2flw(&$f_var) {
    Global $_SESSION;
    Global $f_var;
    $vb_empno   = $_SESSION["login_empno"];
    $vb_name    = $_SESSION["login_name"];
    $vb_dept_id = $_SESSION["login_dept_id"];
    $vb_date    = date("Y-m-d H:i:s");
    $vfromip    = $_SERVER["REMOTE_ADDR"];
    $vproc      = u_showproc(); // �{���N��
    //$f_var['mgo_url'] = "/~docs/erp_qa/erp_qa.php?msel=6&mqah_no={$_REQUEST['f_s_num']}";
    //$f_var['f_s_num'] = '6173';

    if(is_array($_REQUEST)) { // ����Ƥ~�B�z
       while (list($f_fd_name,$f_fd_value) = each($_REQUEST)) {
              //echo "$f_fd_name=$f_fd_value----";
              $f_var[$f_fd_name] = $f_fd_value;
       }
    }
    $count_table= substr_count($f_var['f_table'],'.');
    $ex_table   = explode('.',$f_var['f_table']);
    $fd_table   = iif($count_table==0,$f_var['f_table'],$ex_table[1]);

    $fd_b_empno      = $f_var['f_b_empno'];                                          //���ɪ̭��s
    $fd_sleip2flw003 = str_replace("\"","",$f_var['f_db']);                          //DB
    $fd_sleip2flw004 = str_replace("\"","",$fd_table);                               //table
    $fd_sleip2flw005 = str_replace("\"","",$f_var['f_file_path']);                   //������|
    $fd_sleip2flw006 = date('Y/m/d',strtotime($f_var['f_b_date']));                  //�����
    $fd_sleip2flw007 = str_replace("\"","",$f_var['f_title']);                       //�D��
    $fd_sleip2flw008 = str_replace("\"","",$f_var['f_type']);                        //���O
    $fd_sleip2flw009 = str_replace("\"","",str_replace("'","",$f_var['f_content'])); //���e
    $fd_sleip2flw010 = str_replace("\"","",$f_var['f_s_num']);                       //s_num
    $fd_sleip2flw011 = str_replace("\"","",$f_var['f_cnt']);                         //���� //upd by mimi 2011.06.13 �W�[���ɦ���
    $fd_resda020 = "2"; // Add By Tails 2015.06.09 �s��ñ�֪��A�w�]
    $fd_resda021 = "1"; // Add By Tails 2015.06.09 �s��ñ�ֵ��G�w�]
    //if($f_var['f_file1'] <> ''){
    //  $remote_file[]= $f_var['f_file1'];         // remote���ɮצW��
    //}
    //if($f_var['f_file2'] <> ''){
    //  $remote_file[]= $f_var['f_file2'];         // remote���ɮצW��
    //}
    //if($f_var['f_file3'] <> ''){
    //  $remote_file[]= $f_var['f_file3'];         // remote���ɮצW��
    //}
    //upd by mimi 2011.07.01 �W�[��10�Ӫ���
    $fd_cnt=1;
    for($i=0;$i<10;$i++){
      $fd_file = "f_file".($fd_cnt+$i);
      if($f_var[$fd_file] <> ''){
        $remote_file[]= $f_var[$fd_file];         // remote���ɮצW��
      }
    }

    //echo '<pre>'.$fd_qah_5.'</pre>';exit;
    //echo $query1.'<br>'.$fd_b_empno;exit;
    $eipsql= 'docs';
    $vdat1 = 'EF2KWeb';
    $mftp_server  = "flow.slc.com.tw";         // ftp server
    $mftp_user    = "it";                   // ftp user name
    $mftp_pass    = "sl85";                 // ftp user password
    sl_openef2k($vdat1);
    //***************************************************************************
    // (����20585)upd by �Ϊ� 2013.07.08 �������v���H���bresak004�|�H���s+_U���
    //***************************************************************************
    $u_query = "SELECT resak001,resak002,resak015,resal002,resak013
                FROM resak
                     LEFT JOIN resal
                               ON resak015 = resal001
                WHERE LTrim(RTrim(resak004)) = '{$fd_b_empno}'
               ";
    $u_res   = mssql_query($u_query);
    $u_count = mssql_num_rows($u_res);
    if( $u_count==0 ){
      sl_errmsg("<b><font color='#FF0000'>�`�N!!</font> ���u: {$vb_name}({$fd_b_empno}) �q�lñ�ְ򥻸�Ʋ��`(��´.�W�h�D��)���p���H�ƺ��@��ơA���¡I�C</b>"); //qq:para�u��str����font
      exit;
    }
    //******************************************************************

    $query2 = "SELECT resak001,resak002,resak015,resal002,resak013
               FROM resak
                 LEFT JOIN resal
                   ON resak015 = resal001
               WHERE resak001 = '{$fd_b_empno}'
              ";
    $result2 = mssql_query($query2);
    $row2 = mssql_fetch_array($result2);
    $fd_resak015 = $row2['resak015'];  //FLW-�����N��
    $fd_resal002 = $row2['resal002'];  //FLW-�����W��
    $fd_resak013 = $row2['resak013'];  //FLW-���ݥD��

    $query3 = "SELECT top 1 resdz001,resdz002
               FROM resdz
               where resdz001 = 'SL-EIP2FLW'
               order by resdz002 DESC
              ";
    $result3 = mssql_query($query3);
    $row3 = mssql_fetch_array($result3);
    $fd_resdz001 = 'SL-EIP2FLW';    //FLW-�渹
    $fd_resdz002 = str_pad(($row3['resdz002']+1),10,0,STR_PAD_LEFT);  //FLW-��O
    $fd_ymd      = date('Y/m/d');
    $fd_date     = date('Y/m/d H:i:s');

    //resdz ���渹������ (RESDZ) upd by mimi 2011.11.18 Ū��渹�渹�ᰨ�W�g�J,�p�G�S�����Ъ��h����g�J,�H�קK�{�����`~
    $query_head6 ="insert into {$vdat1}..resdz (resdz001,resdz002) values ('{$fd_resdz001}','{$fd_resdz002}')";
    //echo $query_head6.'<hr>';
    if(!mssql_query($query_head6)) { // �g�J����
       sl_errmsg('<font color="#FF0000"><b>�`�N!!��O�渹���СA�Э��s��J!!</b></font>'.$query_head6.'!!'); //qq:para�u��str����font
       exit;
    }


    $vins_fd1    ="sleip2flw001,sleip2flw002,
                   sleip2flw003,sleip2flw004,sleip2flw005,sleip2flw006,
                   sleip2flw007,sleip2flw008,sleip2flw009,sleip2flw010,sleip2flw011
                  ";
    $vins_value1 ="'{$fd_resdz001}','{$fd_resdz002}',
                   '{$fd_sleip2flw003}','{$fd_sleip2flw004}','{$fd_sleip2flw005}','{$fd_sleip2flw006}',
                   '{$fd_sleip2flw007}','{$fd_sleip2flw008}','{$fd_sleip2flw009}','{$fd_sleip2flw010}','{$fd_sleip2flw011}'
                  ";

    //eip-docs.sleip2flw
    sl_open($eipsql);
    $query_head7 ="insert into {$eipsql}.sleip2flw ({$vins_fd1},resda020,resda021,b_empno,b_dept_id,b_proc,b_date)
                   values ({$vins_value1},'{$fd_resda020}','{$fd_resda021}','{$vb_empno}','{$vb_dept_id}','{$vproc}','{$vb_date}')";
    if(!mysql_query($query_head7)) { // �g�J����
       sl_errmsg('<font color="#FF0000"><b>�`�N!!</b></font>'.$query_head7.'!!'); //qq:para�u��str����font
    }

    //flw-sleip2flw
    sl_openef2k($vdat1);
    $query_head1 ="insert into {$vdat1}..sleip2flw ({$vins_fd1},sleip2flw900,sleip2flw901,sleip2flw904)
                   values ({$vins_value1},'{$fd_b_empno}','{$fd_date}','{$fd_resak015}')";
    //echo $query_head1.'<hr>';
    if(!mssql_query($query_head1)) { // �g�J����
       sl_errmsg('<font color="#FF0000"><b>�`�N!!</b></font>'.$query_head1.'!!'); //qq:para�u��str����font
       //echo $f_var['query_data'];
       //exit;
    }

    //resda ���y�{���ʥD�� (RESDA)
    $vins_fd2    =" resda001,resda002,resda015,resda016,resda017,resda018,resda019,resda020,resda021,resda022,resda023 ";
    $vins_value2 =" '{$fd_resdz001}','{$fd_resdz002}','{$fd_date}','{$fd_b_empno}','{$fd_b_empno}','{$fd_date}','','2','1','','' ";
    $vins_fd2   .=" ,resda030,resda031,resda032,resda033,resda034,resda900,resda901,resda904 ";
    $vins_value2.=" ,'','{$fd_sleip2flw007}','1','Y','','{$fd_b_empno}','{$fd_date}','{$fd_resak015}' ";
    $query4 = "SELECT resca.*
               FROM resca
               where resca001 = '{$fd_resdz001}'
              ";
    $result4 = mssql_query($query4);
    $row4 = mssql_fetch_array($result4);
    ksort($row4);
    while (list($key4,$value4) = each($row4)){
      if (ereg("^[r]",substr($key4,0,1))){
          switch ($key4) {
            case "resca004": //�y�{����
              $vins_fd2   .=",resda003";
              $vins_value2.=",'{$value4}'";
              break;
            case "resca005": //�۰ʽs��?
            case "resca017": //���H�i�_�ܧ���ʽ�?
              break;
            case "resca006": //�O��ĵ�ܶ}��
            case "resca007": //�O��ĵ��-���H
            case "resca008": //�O��ĵ��-�O�ɤH�����D??
            case "resca009": //�O��ĵ��-���w�޲z�H
            case "resca010": //�O��ĵ��-���w�޲z�H���u�N��
            case "resca011": //�O��ĵ��-ĵ�ܶ��j�Ѽ�
            case "resca012": //�O��ĵ��-ĵ�ܦ���
            case "resca013": //�O�_���׫�q���Ҧ��H��?
            case "resca014": //�O�_�v�Ŧ^��?
            case "resca015": //���H�i�_�j��
            case "resca016": //���H�i�_���?
              $fd_resda    ="resda".str_pad((substr($key4,5,3)-2),3,'0',STR_PAD_LEFT);
              $vins_fd2   .=",{$fd_resda}";
              $vins_value2.=",'{$value4}'";
              break;
            case "resca018": //��Z�i�_�C�L�H
            case "resca019": //��Z�i�_��H�H
            case "resca020": //��Z�i�_�\Ū����H
            case "resca021": //�^��i�_�C�L�H
            case "resca022": //�^��i�_��H�H
            case "resca023": //�^��i�_�\Ū����H
              $fd_resda    ="resda".str_pad((substr($key4,5,3)+6),3,'0',STR_PAD_LEFT);
              $vins_fd2   .=",{$fd_resda}";
              $vins_value2.=",'{$value4}'";
              break;
            default:
              break;
          }
      }
    }
    $query_head2 ="insert into {$vdat1}..resda ($vins_fd2) values ($vins_value2)";
    //echo $query_head2.'<hr>';
    if(!mssql_query($query_head2)) { // �g�J����
       sl_errmsg('<font color="#FF0000"><b>�`�N!!</b></font>'.$query_head2.'!!'); //qq:para�u��str����font
       //echo $f_var['query_data'];
       //exit;
    }

    //resdb ���y�{���ʤl�� (RESDB),resdc ���y�{���ʩ����� (RESDC),resdd ���y�{���ʩ����� (RESDD)
    //$query51 = "SELECT rescd.rescd001,rescd.rescd002,rescd.rescd003,rescd.rescd004,EFormWizardCond.OperationDef,
    //                   rescd.rescd006,rescd.rescd007,rescc006,rescc007
    //           FROM rescd
    //             LEFT JOIN EFormWizardCond ON EFormWizardCond.CondID=rescd005
    //             LEFT JOIN rescc ON rescd001=rescc001 AND rescd002=rescc002 AND rescd003=rescc003
    //           WHERE rescd001='SL-EIP2FLW' AND rescd007='{$fd_sleip2flw008}'
    //          ";�ϥάy�{���󪺤�k
    $query51 = "SELECT rescf005,EFormWizardCond.OperationDef,rescf006,rescf007,resce005
                FROM rescf
                  LEFT JOIN  resce ON rescf001=resce001 AND rescf003=resce003
                  LEFT JOIN EFormWizardCond ON EFormWizardCond.CondID=rescf005
                WHERE rescf001='{$fd_resdz001}' AND CONVERT(VARCHAR(999), rescf007)='{$fd_sleip2flw008}'
              ";//�ϥΤl�y�{�w�q����k
    $result51 = mssql_query($query51);
    $row51 = mssql_fetch_array($result51);
    $int_rescc006 = intval($row51['rescc006']);
    $int_rescc007 = intval($row51['rescc007']);
    $num_resdb    = 0;
    //echo $int_rescc006.'~~~~'.$int_rescc007.'<br>';
    //$query52 = "SELECT *
    //           FROM rescc
    //           WHERE rescc001='SL-EIP2FLW'
    //          ";
    $query52 = "SELECT *
                FROM resch
                WHERE resch001 = '{$row51['resce005']}'
              ";
    $result52 = mssql_query($query52);
    while($row52 = mssql_fetch_array($result52)){
      //echo $row52['rescc002'].'~~~~'.$row52['rescc003'].'<br>';

      $vins_fd3    =" resdb001,resdb002 ";
      $vins_value3 =" '{$fd_resdz001}','{$fd_resdz002}' ";
      $vins_fd3   .=" ,resdb900,resdb901,resdb904 ";
      $vins_value3.=" ,'{$fd_b_empno}','{$fd_date}','{$fd_resak015}' ";

      $num_resdb++;
      if('1'==$num_resdb){
        $vins_fd3   .=" ,resdb026 ";
        $vins_value3.=" ,'Y'";
        $resdc006=iif($row52['resch006']=='',$fd_resak013,$row52['resch006']);
        if($row52['resch004']=='3' && strlen($resdc006)<>'7'){
          $query_an = "SELECT resan003
                         FROM resan
                        WHERE resan.resan001 = '{$row52['resch006']}'
                          AND resan.resan004 = '{$row52['resch007']}'
                      ";
          $result_an = mssql_query($query_an);
          $row_an = mssql_fetch_array($result_an);
          $resdc006 = $row_an['resan003'];
        }
        $resdd020 = sl_get_resck($resdc006,$fd_resdz001,$fd_date); //add by �Ϊ� 2017.09.30 �O�_���]�w�N�z�H
        //resdc ���y�{���ʩ����� (RESDC)
        $vins_fd4    =" resdc001,resdc002,resdc005,resdc006,resdc007,resdc008,resdc900,resdc901,resdc904 ";
        $vins_value4 =" '{$fd_resdz001}','{$fd_resdz002}','0001','{$resdc006}','3','1','{$fd_b_empno}','{$fd_date}','{$fd_resak015}' ";

        //resdd ���y�{?��ʩ?��??(RESDD)
        $vins_fd5    =" resdd001,resdd002,resdd005,resdd006,resdd007,resdd008,resdd009,resdd020 ";
        $vins_value5 =" '{$fd_resdz001}','{$fd_resdz002}','0001','01','{$resdc006}','','{$fd_date}','{$resdd020}' ";
        $vins_fd5   .=" ,resdd013,resdd014,resdd015,resdd017,resdd018,resdd019,resdd900,resdd901,resdd904 ";
        $vins_value5.=" ,'0','2','1','N','8','Y','{$fd_b_empno}','{$fd_date}','{$fd_resak015}' ";
      }
      else{
        $vins_fd3   .=" ,resdb026 ";
        $vins_value3.=" ,'N'";
      }
      //echo $row52['rescc002'].'---'.$row52['rescc003'].'<br>';
      ksort($row52);
      while (list($key52,$value52) = each($row52)){
        if (ereg("^[r]",substr($key52,0,1))){
          switch ($key52) {
            case "resch002": //����
            case "resch003": //�丹
              $fd_resdb    ="resdb".str_pad((substr($key52,5,3)+1),3,'0',STR_PAD_LEFT);
              $vins_fd3   .=",{$fd_resdb}";
              $vins_value3.=",'{$value52}'";

              if('1'==$num_resdb){
                $fd_resdc    ="resdc".str_pad((substr($key52,5,3)+1),3,'0',STR_PAD_LEFT);
                $vins_fd4   .=",{$fd_resdc}";
                $vins_value4.=",'{$value52}'";

                $fd_resdd    ="resdd".str_pad((substr($key52,5,3)+1),3,'0',STR_PAD_LEFT);
                $vins_fd5   .=",{$fd_resdd}";
                $vins_value5.=",'{$value52}'";
              }
              break;
            case "resch004": //�y�{����
            case "resch005": //ñ�ֺ���
            case "resch006": //�y�{����Ѽ�1
            case "resch007": //�y�{����Ѽ�2
            case "resch008": //�y�{����Ѽ�3
            case "resch009": //�y�{����Ѽ�4
            case "resch010": //�e�\ñ�֮ɶ�
            case "resch011": //�۰�ByPass?
            case "resch012": //ByPass�覡
            case "resch013": //�O�_�j��ñ��?
            case "resch014": //�O�_��@ñ��
            case "resch015": //�i�_�C�L?
            case "resch016": //�i�_�Mñ?
            case "resch017": //�i�_�[ñ?
            case "resch018": //�i�_��|?
            case "resch019": //�i�_��H?
            case "resch020": //�i�_�s�W���[��?
            case "resch021": //�i�_�ק���[��?
            case "resch022": //�i�_�R�����[��?
            case "resch023": //�i�_�\Ū���[��?
            case "resch024": //ñ�֮ɱK�X����?
              $fd_resdb    ="resdb".str_pad((substr($key52,5,3)+1),3,'0',STR_PAD_LEFT);
              $vins_fd3   .=",{$fd_resdb}";
              $vins_value3.=",'{$value52}'";
              break;
            default:
              break;
          }
        }
      }
      $query_head3 ="insert into {$vdat1}..resdb ($vins_fd3) values ($vins_value3)";
      //echo $query_head3.'<hr>';
      if(!mssql_query($query_head3)) { // �g�J����
         sl_errmsg('<font color="#FF0000"><b>�`�N!!</b></font>'.$query_head3.'!!'); //qq:para�u��str����font
         //echo $f_var['query_data'];
         //exit;
      }
    }
    //resdc ���y�{���ʩ����� (RESDC)
    $query_head4 ="insert into {$vdat1}..resdc ($vins_fd4) values ($vins_value4)";
    //echo $query_head4.'<hr>';
    if(!mssql_query($query_head4)) { // �g�J����
       sl_errmsg('<font color="#FF0000"><b>�`�N!!</b></font>'.$query_head4.'!!'); //qq:para�u��str����font
       //echo $f_var['query_data'];
       //exit;
    }

    $query_head5 ="insert into {$vdat1}..resdd ($vins_fd5) values ($vins_value5)";
    //echo $query_head5.'<hr>';
    if(!mssql_query($query_head5)) { // �g�J����
       sl_errmsg('<font color="#FF0000"><b>�`�N!!</b></font>'.$query_head5.'!!'); //qq:para�u��str����font
       //echo $f_var['query_data'];
       //exit;
    }

    //resde ���y�{���[�� (RESDE) add by mimi 2010.07.07
    // **************************************************************************
    //  ��ƦW��: u_ftp_put()
    //  ��ƥ\��: �N�ɮפW�Ǧ�190
    //  �ϥΤ覡: u_ftp_put($f_var)
    //  �{���]�p: Mimi
    //  �]�p���: 2010.07.08
    // **************************************************************************
    $mftp_connect = ftp_connect($mftp_server); // connect ftp
    if($mftp_connect) {
      $mftp_login   = ftp_login($mftp_connect,$mftp_user,$mftp_pass); // login
      ftp_pasv($mftp_connect, FALSE);
      //ftp_chdir($mftp_connect, "/wms/{$f_var['f_stock_cd']}");
      $remote_dir = "/SL-EIP2FLW/{$fd_resdz002}/";
      //$local_dir  = "/home/docs/public_html/erp_qa/upfile/";
      //echo $remote_dir.'<br>';
      @ftp_mkdir($mftp_connect,$remote_dir);
      //$local_file
      //-----���.190���D��----------------------------------------------------------------
      $fd_resde003 = 0;  //�Ǹ�
      for($i=0;$i<count($remote_file);$i++){
        if(ftp_put($mftp_connect,"{$remote_dir}{$remote_file[$i]}","{$fd_sleip2flw005}{$remote_file[$i]}", FTP_BINARY)) {
          //ftp_chmod($mftp_connect,0666,"{$remote_dir1}{$remote_file[$i]}");
          //u_errmsg('3','left','000000','FFFF99','FF9966',"{$remote_file[$i]} ������ɦ��\\!!");
          $fd_resde003 ++;
          $fd_resde003 = str_pad($fd_resde003,4,'0',STR_PAD_LEFT);
          $fd_resde010 = filesize("{$fd_sleip2flw005}{$remote_file[$i]}");
          $vins_fd8    ="resde001,resde002,resde003,resde004,resde005,resde006,resde010,resde011,resde900,resde901,resde904";
          $vins_value8 ="'{$fd_resdz001}','{$fd_resdz002}','{$fd_resde003}',
                         '{$remote_file[$i]}','{$remote_file[$i]}','{$remote_file[$i]}','{$fd_resde010}','{$fd_date}',
                         '{$fd_b_empno}','{$fd_date}','{$fd_resak015}'";
          $query_head8 ="insert into {$vdat1}..resde ($vins_fd8) values ($vins_value8)";
          //echo $query_head8.'<hr>';
          if(!mssql_query($query_head8)) { // �g�J����
             sl_errmsg('<font color="#FF0000"><b>�`�N!!</b></font>'.$query_head8.'!!'); //qq:para�u��str����font
             //echo $f_var['query_data'];
             //exit;
          }
        }
        else{
          u_errmsg('3','left','000000','FFFF99','FF9966',"{$remote_file[$i]} �ɮפW�ǥ���!!");
        }
      }
      //-------------------------------------------------------------------------------------
      ftp_close($mftp_connect);                  // close ftp
      //-------------------------------------------------------------------------------------

    }
    else {
       u_errmsg('3','left','000000','FFFF99','FF9966','FWL�D���s�u���ѡA�гq����T��!!');
    }
    $f_var['f_resdz001']=$fd_resdz001;//upd by mimi 2011.06.02 �^��ñ�֪��O
    $f_var['f_resdz002']=$fd_resdz002;//upd by mimi 2011.06.02 �^��ñ�֪�渹
    return $f_var;
  }
  // **************************************************************************
  //  ��ƦW��: sl_chk_rak013()
  //  ��ƥ\��: �T�{�O�_�����ݥD�� add by mimi 2011.11.28 ����-15581 �T�{�O�_�����ݥD��
  //  �ϥΤ覡:
  //  �{���]�p: Mimi
  //  �]�p���: 2011.11.28
  // **************************************************************************
  function sl_chk_rak013(&$f_var) {
    Global $_SESSION;
    Global $f_var;
    $vdat1 = 'EF2KWeb';
    sl_openef2k($vdat1);
    $query2 = "SELECT resak001,resak002,resak015,resal002,resak013
               FROM resak
                 LEFT JOIN resal
                   ON resak015 = resal001
               WHERE resak001 = '{$_SESSION['login_empno']}'
              ";
    $result2 = mssql_query($query2);
    $row2 = mssql_fetch_array($result2);
    if(''==$row2['resak013']){
      echo "<script language='JavaScript'>";
      echo "alert('�d�L���ݥD�ޡA���p���`���q�H�ƨ�U�B�z�C');";
      echo "history.back();";
      echo "</script>";

    }
    return $f_var;
  }
  // **************************************************************************
  //  ��ƦW��: sl_prn()
  //  ��ƥ\��: �C�L
  //  �ϥΤ覡: sl_prn($f_var)
  //  �{���]�p: yifun
  //  �]�p���: 2012.02.10
  // **************************************************************************
  function sl_prn($f_var){
    $f_var["tp"] -> newBlock( 'tb_print'      );
    $f_var["tp"] -> newBlock( 'tb_prn_select' );
    $f_var["tp"] -> assign  ("tv_action",u_showproc().".php?msel=71&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}");
    //�]�w�d�߿��
    if( !isset($f_var['prn_mode']) ){
      $f_var['prn_mode'] = '1';
    }
    //head�����
    foreach($f_var['fd'] as $t_key =>$t_val){
      if( $f_var['fd'][$t_key]['que'] == 'Y' ){
        $f_var["tp"] -> newBlock( 'tb_select_prn1' );
        $f_var["tp"] -> assign( 'tv_ename' , "{$f_var['mtable']['head']}.{$t_key};{$f_var['fd'][$t_key]['cname']}");
        $f_var["tp"] -> assign( 'tv_cname' , "{$t_key}-{$f_var['fd'][$t_key]['cname']}");
      }
    }
    //body�����
    if( $f_var['prn_mode'] == '2' ){
      foreach($f_var['fd_re'] as $t_key =>$t_val){
        if($f_var['fd_re'][$t_key]['que'] == 'Y' ){
          $f_var["tp"] -> newBlock( 'tb_select_prn1' );
          $f_var["tp"] -> assign( 'tv_ename' , "{$f_var['mtable']['body']}.{$t_key};{$f_var['fd_re'][$t_key]['cname']}" );
          $f_var["tp"] -> assign( 'tv_cname' , "{$t_key}-{$f_var['fd_re'][$t_key]['cname']}" );
        }
      }
    }
  }
  // **************************************************************************
  //  ��ƦW��: sl_prn_list()
  //  ��ƥ\��: �C�L�d�ߵ��G
  //  �ϥΤ覡: sl_prn_list($f_var)
  //  �{���]�p: yifun
  //  �]�p���: 2012.02.10
  // **************************************************************************
  function sl_prn_list($f_var){
    $f_var["tp"] -> newBlock( 'tb_print' );
    $selprn = $_POST['selprn'];
    $sel    = $_POST['selname2'];//������d�����ﶵ
    $chkcsv = $_POST['chkcsv'];  //�O�_�U��csv�ɿﶵ
    $f_var["tp"] -> newBlock( 'tb_prn_query' );
    $table_width = 0 ;
    $selquery    = '';//�d�����]�w�ܼ�
    $selwhere    = '';//�d�߱���]�w�ܼ�
    $seltitle    = '';//csv�����Y�]�w�ܼ�
    $selcsv      = '';//csv���ɨ��]�w�ܼ�
    $oth_where   = '';//�ҥ~�B�z��sql�y�k�]�w(��Ȥ@�߳]����)
    $width       = array();
    //�p�G��n�U��csv�ɪ��ܤ~�]�w�ɦW�ö}���ɮ�
    if($chkcsv == 'Y'){
      $filename = '/home/sl/public_html/dlcsv/'.$_SESSION['login_empno'].'.csv';
      $fp = fopen( $filename , "w+" );
    }

    //�]�w���Y�B�d�����B�d�߱���
    for($i = 0 ; $i < count($sel) ; $i++ ){
      $sellen     = strlen(trim($sel[$i]));     // ��ƪ���
      $selpos     = strpos(trim($sel[$i]),";"); // ; ����m
      $selvalue[] = trim(substr(trim($sel[$i]),0,$selpos));
      $selshow[]  = trim(substr(trim($sel[$i]),$selpos+1,$sellen-$selpos));
      if($i != 0){
        $selquery .= ',';
        $seltitle .= ',';
        $selwhere .= ' or ';
      }
      $selquery .= $selvalue[$i];
      $seltitle .= $selshow[$i];
      $selwhere .= "{$selvalue[$i]} like '%{$_POST['selprn']}%'";
    }

    //�]�w�d�ߵ��G���Y
    if( isset($f_var['pnt_title']) != ''){
      $f_var["tp"] -> assign( 'tv_title' , "{$f_var['pnt_title']}���Ӫ�" );
    }
    else{
      $f_var["tp"] -> assign( 'tv_title' , "{$f_var['msub_title']}���Ӫ�" );
    }
    //��ܬd�߱���
    $f_var["tp"] -> assign( 'tv_selprn' , $selprn   );

    //��ܬd�����
    $f_var["tp"] -> assign( 'tv_seltab' , $seltitle );

    //�]�w�ҥ~����
    if( isset($f_var['prn_where_other']) != ''){
      $oth_where = "and({$f_var['prn_where_other']}) " ;
      $f_var["tp"] -> assign( 'tv_exception' , '<font color=red>��</font>' );
    }
    if( !isset($f_var['prn_mode']) ){
      $f_var['prn_mode'] = '1';
    }
    switch( $f_var['prn_mode'] ){
      case '1':
      //�u��head��@�@��table�ɪ�sql�y�k
        $sql= "select {$selquery},{$f_var['mtable']['head']}.s_num
               from {$f_var['mtable']['head']}
               where ({$selwhere})
               {$oth_where}
               and {$f_var['mtable']['head']}.d_date like '0000-00-00 00:00:00'";
        break;
      case '2':
      //head�Mbody���table�����ɪ�sql�y�k
        $sql = "select {$selquery},{$f_var['mtable']['head']}.s_num
                from {$f_var['mtable']['head']}
                join {$f_var['mtable']['body']}
                on ( {$f_var['mtable']['head']}.s_num = {$f_var['mtable']['body']}.h_s_num )
                where ({$selwhere})
                {$oth_where}
                and {$f_var['mtable']['head']}.d_date like '0000-00-00 00:00:00'
                order by {$f_var['mtable']['head']}.s_num";
        break;
    }
    //echo '<pre>'.$sql.'</pre>';
    $result = mysql_query($sql);

    //echo $seltitle."<br>";
    //�]�w���e��
    for($i = 0 ; $i < count($f_var['list']['th_width']) ; $i++){
      for($j = 0 ; $j < count($selvalue) ; $j++){
        $sel_lab = substr($selvalue[$j],strpos($selvalue[$j],".")+1);
        if( $f_var['list']['fd_name'][$i] == $sel_lab ){
          $width[$sel_lab] = $f_var['list']['th_width'][$i];
        }
      }
    }

    $f_var["tp"] -> newBlock( 'tb_tr_prn' );
    if($result){
      $row_num = mysql_num_rows($result);
      $col_num = mysql_num_fields($result);
      $f_var["tp"] -> assign( 'tv_color' , "bgcolor='#CDDDED'" );
      if($row_num != 0){
        $f_var["tp"] -> newBlock( 'tb_query' );
        $f_var["tp"] -> assign( 'tv_align'    , 'center'            );
        $f_var["tp"] -> assign( 'tv_td_width' , "1%"                );
        $f_var["tp"] -> assign( 'tv_query'    , '��'                );
        for($i = 0 ; $i < count($selshow) ; $i++){
          $f_var["tp"] -> newBlock( 'tb_query' );
          $f_var["tp"] -> assign( 'tv_align'    , 'center'                   );
          $f_var["tp"] -> assign( 'tv_td_width' , "{$width[$selvalue[$i]]}%" );
          $f_var["tp"] -> assign( 'tv_query'    , $selshow[$i]               );//��ܬd�ߵ��G�����Y���e
        }
        //�p�G��n�U��csv�ɪ��ܤ~�g�J���Y���
        if($chkcsv == 'Y'){
          fwrite( $fp , $seltitle."\n" );
        }
        $j = 1;
        $k = 0;
        $redo_num = '';
        while( $a = mysql_fetch_array($result) ){
          $f_var["tp"] -> newBlock( 'tb_tr_prn' );
          $selcsv = '';//����L�@������N�M�ťΨӰO���U�@��

          if($redo_num != $a['s_num']){
            $k++;
          }
          if($k % 2 == 0 ){
            $f_var["tp"] -> assign( 'tv_color' , "bgcolor='#EBFFEB'" );
          }
          $f_var["tp"] -> newBlock( 'tb_query' );
          $f_var["tp"] -> assign( 'tv_align'    , 'center' );
          $f_var["tp"] -> assign( 'tv_td_width' , "1%"     );
          $f_var["tp"] -> assign( 'tv_query'    , $j       );
          for($i = 0 ; $i < count($selvalue) ; $i++ ){
            if($i != 0){
              //$seldata .= ',';
              $selcsv  .= ',';
            }
            //�h�����W�١A���X���W��
            $sel_tbl = substr($selvalue[$i], 0, strpos($selvalue[$i],"."));
            //�h�����W�١A���X���W��
            $sel_lab = substr($selvalue[$i],strpos($selvalue[$i],".")+1);
            //echo $selvalue[$i]."*<br>";
            //echo $sel_tbl."**<br>";
            //echo $sel_lab."***<br>";
            $field = mysql_field_type($result , $i);
            //echo $field."<br>";
            $f_var["tp"] -> newBlock( 'tb_query' );
            if($field == 'varchar' or $field == 'char' or $field == 'text' or $field == 'longtext' or $field == 'string' or $field == 'blob' ){
              $f_var["tp"] -> assign( 'tv_align' , 'left' );
            }
            if($field == 'date' or $field == 'datetime' or $field == 'time' ){
              $f_var["tp"] -> assign( 'tv_align' , 'center' );
            }
            if($field == 'int' or $filed == 'double' or $field == 'float' ){
              $f_var["tp"] -> assign( 'tv_align' , 'right' );
            }
            if( $a['s_num'] != $redo_num and $f_var['mtable']['head'] == $sel_tbl ){
              $f_var["tp"] -> assign( 'tv_td_width' , "{$width[$selvalue[$i]]}%" );
              $f_var["tp"] -> assign( 'tv_query'    , $a[$sel_lab]               );//��ܬd�ߵ��G�������e
            }
            if( $f_var['mtable']['body'] == $sel_tbl ){
              $f_var["tp"] -> assign( 'tv_td_width' , "{$width[$selvalue[$i]]}%" );
              $f_var["tp"] -> assign( 'tv_query'    , $a[$sel_lab]               );//��ܬd�ߵ��G�������e
            }
            //$seldata .= $a[$selvalue[$i]];
            $selcsv  .= $a[$sel_lab];
          }
          $redo_num = $a['s_num'];
          //�p�G��n�U��csv�ɪ��ܤ~�g�J���
          if($chkcsv == 'Y'){
            fwrite( $fp , $selcsv."\n" );
          }
          //$seldata .= "<br>";
          $j++;
        }
      }
    }
    else{
      $row_num = 0;
      $col_num = 0;
    }

    $f_var["tp"] -> assignGlobal( 'tv_cnt' , $row_num     );//��ܥ����d�ߦ@�X�����

    //�p�G��n�U��csv�� �B ���d���� �~��ܤU��csv�ɪ��s��
    if($chkcsv == 'Y' and $result){
      $downloadcsv = "location.replace('/~sl/dlcsv/{$_SESSION['login_empno']}.csv');";
      $f_var["tp"] -> newBlock( 'tb_csv' );
      $f_var["tp"] -> assignGlobal( 'tv_col' , $col_num  );
      $f_var["tp"] -> assignGlobal( 'tv_csv' , $downloadcsv );
      fclose($fp);
    }
    //echo $seldata."<br>";
  }
  // **************************************************************************
  //  ��ƦW��: sl_custcomp_get_code()
  //  ��ƥ\��: ��ܫȤ��`����,�C�X�Ȥ�s��
  //  �ϥΤ覡: sl_custcomp_get_code('1004'),�N�|�C�X '068019','068018','068017'........
  //            $v_custcomp_id : �Ȥ��`��
  //  �{���]�p: Mimi
  //  �]�p���: 2012.02.15
  // **************************************************************************
  function sl_custcomp_get_code($v_custcomp_id) {
    Global $f_var;
    sl_open('gas');
    $query1     = "SELECT group_concat( code ORDER BY code SEPARATOR ',' )  as code
                   FROM gas.custcomp_id
                   where d_date='0000-00-00 00:00:00'
                         and id='{$v_custcomp_id}'
                   ORDER BY code ASC
                  ";
    //echo "<pre>{$query1}</pre>";exit;
    $result1 = mysql_query($query1);
    $row1 = mysql_fetch_array($result1);
    $rep_code = str_replace(",","','",$row1['code']);
    $fd_code  = "'{$rep_code}'";
    return ($fd_code);
  }

  // **************************************************************************
  //  ��ƦW��: sl_chkpwd()
  //  ��ƥ\��: �P�_�O�_�j���ק�K�X
  //  �ϥΤ覡: sl_chkpwd($vproc)  $vproc = u_showproc();
  //  �{���]�p: �Ϊ�
  //  �]�p���: 2012.05.02
  // **************************************************************************
  function sl_chkpwd($vproc) {
    if('Y'==$_SESSION['chg_pass']){
        if(strstr("/eip_forget/sl_person/sl_ps/sl_pm/sl_mail/sl_chgpass/index/func.js",$vproc)){  //�ӤH�]�w�����i����
                return;
        }else{
                //if('7137109'<>$_SESSION["login_empno"] and '5074002'<>$_SESSION["login_empno"] and '6918069'<>$_SESSION["login_empno"]){
                        echo '<br>';
                        echo '<br>';
                        echo '<br>';
                        sl_errmsg("��p�I�z���K�X�w�W�L�T�Ӥ�|���󴫡A���T�O��Ʀw���ʡA�Цܡi<a href='/~sl/sl_person.php?f_tab_name=eip'>�ӤH�򥻸�Ƴ]�w</a>�j���s�]�m�K�X�C");
                        echo '<br>';
                        echo '<br>';
                        echo '<br>';
            exit;
                //}
        }
    }
    return;
  }
  // **************************************************************************
  //  ��ƦW��: sl_area_list()
  //  ��ƥ\��: �C�X�Ϥ����O
  //  �ϥΤ覡: sl_area_list($group_id,$type='b_gid')  $vproc = b_gid or p_gid;
  //  �{���]�p: �F��
  //  �]�p���: 2012.09.25
  // **************************************************************************
  function sl_area_list($group_id,$type='b_gid'){
    sl_open('sl');
    $data_sql="select dept.dept_id,dept.b_gid,dept.sname,gas_eip_960125.company.p_gid
               from dept
               left join gas_eip_960125.company on gas_eip_960125.company.b_gid = dept.b_gid
               where dept.stop <> 'Y' and dept.b_gid<>''";
    $data_rs = mysql_query($data_sql);
    while($data_row=mysql_fetch_array($data_rs)){
      //echo $data_row['dept_id'].'<br>';
      $arr_data[$data_row['dept_id']]['b_gid'] = $data_row['b_gid'];
      $arr_data[$data_row['dept_id']]['sname'] = $data_row['sname'];
      $arr_data[$data_row['dept_id']]['p_gid'] = $data_row['p_gid'];
    }
    $sql="select * from dept_group where group_id ='{$group_id}' ";
    $rs=mysql_query($sql);
    $row=mysql_fetch_array($rs);
    $arr_list = explode(',',$row['dept_id']);
    foreach( $arr_list as $no => $id ){
      $ans[$arr_data[$id][$type]] = $arr_data[$id]['sname'];
    }
    if(''!=$ans['613']) $ans['614']='��ϯ�';
    if(''!=$ans['605613']) $ans['605614']='��ϯ�';
    return $ans;
  }
  // **************************************************************************
  //  ��ƦW��: sl_getPageTotal($path)
  //  ��ƥ\��: ���opdf�ɮ׭���
  //  �ϥΤ覡: sl_getPageTotal('/home/gas/public_html/0970312/10038.pdf');
  //  �{���]�p: �F��
  //  �]�p���: 2013.06.13 �^���ۺ���
  // **************************************************************************
  function sl_getPageTotal($path){
    // ���}���
    if (!$fp = @fopen($path,'r')) {
        $error = '���}���{$path}����';
        return false;
    }
    else {
        $max=0;
        while(!feof($fp)) {
            $line = fgets($fp,255);
            if (preg_match('/\/Count [0-9]+/', $line, $matches)){
                preg_match('/[0-9]+/',$matches[0], $matches2);
                if ($max<$matches2[0]) $max=$matches2[0];
            }
        }
        fclose($fp);
        // ��^����
        return $max;
    }
  }

// **************************************************************************
//  ��ƦW��: sl_timediff()
//  ��ƥ\��: �����ɶ��۴�A�o��ѡB�ɡB���B��
//  �ϥΤ覡: sl_timediff($atime,$btime)
//            �ǤJ�榡 -> yyyy-mm-dd hh:ii:ss
//            �d�� : $atime = 2012-07-09 01:40:00
//                   $btime = 2012-07-10 01:40:00
//                   ["day"] = 1
//            �Ǧ^�}�C�Aday -> ��  hour -> �p��  min -> ��  sec -> ��
//  �{���]�p: �Ϊ�
//  �]�p���: 2012.07.09
// **************************************************************************
function sl_timediff($atime,$btime){ //2012-07-09 01:40:00  -> �ǤJ�榡
  //echo "<font color=red>{$atime}---{$btime}</font><br>";
  if($atime > $btime){
    $start_time = strtotime($btime);
    $end_time   = strtotime($atime);
  }else{
    $start_time = strtotime($atime);
    $end_time   = strtotime($btime);
  }
  //echo "<font color=red>{$start_time}---{$end_time}</font><br>";
  $fd_timediff = $end_time - $start_time;
  $days  = str_pad(floor($fd_timediff/3600/24),2,0,STR_PAD_LEFT ); //��
  $works  = str_pad(floor($fd_timediff/3600/8),2,0,STR_PAD_LEFT ); //�u�@��
  $hours = str_pad(floor($fd_timediff%(24*3600)/3600),2,0,STR_PAD_LEFT );  //��
  $mins  = str_pad(floor($fd_timediff%3600/60),2,0,STR_PAD_LEFT);     //��
  $secs  = str_pad(floor($fd_timediff%3600%60), 2, 0, STR_PAD_LEFT);  //��
  //echo "<font color=red>{$days}---{$hours}---{$mins}---{$secs}</font><br>";
  $ar_timediff = array("day" => $days,"work" => $works,"hour" => $hours,"min" => $mins,"sec" => $secs);
  return $ar_timediff;
}

  // **************************************************************************
  //  ��ƦW��: sl_olddept()
  //  ��ƥ\��: �d�ߤH���b�Y�@�S�w�ɶ����򥻸��
  //  �ϥΤ覡: sl_olddept($vemp, $vdate=date('Ymd'))
  //            $vemp = ���s
  //            $vdate = ���
  //            �^�� �}�C
  //            $ar_olddept['E09_3']   /*�����N��*/
  //            $ar_olddept['E09_15']  /*¾�ȥN�X*/
  //            $ar_olddept['E09_16']  /*�u�O*/
  //            $ar_olddept['E09_17']  /*¾*/
  //            $ar_olddept['E09_18']  /*��*/
  //            $ar_olddept['E09_19']  /*���~/���~*/
  //            $ar_olddept['E09_36']  /*group_id*/
  //            $ar_olddept['E09_371'] /*¾�Ȭz�K1*/
  //            $ar_olddept['E09_372'] /*¾�Ȭz�K2*/
  //            $ar_olddept['E09_373'] /*¾�Ȭz�K3*/
  //            $ar_olddept['E09_374'] /*¾�Ȭz�K4*/
  //            $ar_olddept['E09_375'] /*¾�Ȭz�K5*/
  //            $ar_olddept['E09_376'] /*¾�Ȭz�K6*/
  //            $ar_olddept['E09_58']  /*���~�~��*/
  //            $ar_olddept['b_gid']
  //            $ar_olddept['erp_dept_id']  /*erp�����N��*/
  //            $ar_olddept['sname']        /*�����W��*/
  //            $ar_olddept['E26_6']        /*����*/
  //            $ar_olddept['E26_7']        /*����*/
  //
  //  �{���]�p: �Ϊ�
  //  �]�p���: 2013.06.27
  // **************************************************************************
  function sl_olddept($vid, $vdate){
    //ECHO "vid:  ".$vid." -- ".$vdate."<br>";
    sl_open('sle');
    if ( $vdate=='' ) {
      $vdate = date('Ymd');
    }
    //����~
    if( strlen($vdate)>7 ) {
      $vdate_roc = $vdate-19110000;
    }else{
      $vdate_roc = $vdate;
    }
    
    if( strlen($vid)==7 ) { //���s  �@�Ө����ҥi��h�ӭ��s
      $vempno = $vid;
    }
    
    if( strlen($vdate_roc)<7 ){
      $vdate_roc = "0".$vdate_roc;
    }

    $sqlx = "select sle.sle09.E09_24,
                    sle.sle09.E09_26,
                    sle.sle09.E09_1
                 from   sle.sle09
                 where  (sle.sle09.E09_45 = '{$vid}'
                        OR sle.sle09.E09_1 = '{$vempno}'  )
                ";
    $resx = mysql_query($sqlx);
    $numx = mysql_num_rows($resx);  //����
    $fv_e09_26 = '';
    if( $numx>0 ){
      //$ar_olddept['yn'] = "Y";
      while( $rowx = mysql_fetch_array($resx) ){
        $fv_e09_24 = $rowx['E09_24'];
        $fv_e09_26 = '';
        if( ''<>$rowx['E09_26'] ){
          $fv_e09_26 = $rowx['E09_26']+19110000;  //��¾��
        }
        $vemp = $rowx['E09_1'];
        //echo $rowx['E09_2']."<br>";
      }
    }


    if( $fv_e09_24 <= $vdate_roc ){
                $sql2 = "select sle.sle09.E09_1  as E09_1,  /*���s*/
                                sle.sle09.E09_2  as E09_2,  /*�m�W*/
                                sle.sle09.E09_14 as E09_14, /*��¾��*/
                                /*�� �ե��� ��*/
                          sle.sle09.E09_3  as E09_3,  /*�����N��*/
                          sle.sle09.E09_15 as E09_15,  /*¾�ȥN�X*/
                          sle.sle09.E09_16 as E09_16,  /*�u�O*/
                          sle.sle09.E09_17 as E09_17,  /*¾*/
                          sle.sle09.E09_18 as E09_18,  /*��*/
                          sle.sle09.E09_19 as E09_19,  /*���~/���~*/
                          sle.sle09.E09_36 as E09_36,  /*group_id*/
                          sle.sle09.E09_371 as E09_371,  /*¾�Ȭz�K1*/
                          sle.sle09.E09_372 as E09_372,  /*¾�Ȭz�K2*/
                          sle.sle09.E09_373 as E09_373,  /*¾�Ȭz�K3*/
                          sle.sle09.E09_374 as E09_374,  /*¾�Ȭz�K4*/
                          sle.sle09.E09_375 as E09_375,  /*¾�Ȭz�K5*/
                          sle.sle09.E09_376 as E09_376,  /*¾�Ȭz�K6*/
                          sle.sle09.E09_58 as E09_58,  /*���~�~��*/
                          sle.sle09.E09_26 as E09_26,  /*��¾��*/
                          sl.dept.b_gid as b_gid,
                          sl.dept.erp_dept_id as erp_dept_id,
                          sl.dept.sname as sname,
                      /*sle.sle26.E26_6,
                      sle.sle26.E26_7,*/
                      sle.sle23.E23_3,
                      sle.sle23b.E23B_3,
                      CASE WHEN (hr.is_mf.im02='W' && hr.is_mf.im23<>'') THEN 'WN'
                             WHEN (hr.is_mf.im02='W' && hr.is_mf.im23='')THEN 'MY'
                             WHEN (sle.sle09.E09_31='' || sle.sle09.E09_32='' || sle.sle09.E09_33='')THEN 'MY'
                        ELSE 'AN'
                      END AS take
                   from   sle.sle09
                          left join sl.dept on sle.sle09.E09_3 = sl.dept.dept_id
                          /*left join sle.sle26 on substring(sle.sle09.E09_3,1,1) = sle.sle26.E26_1
                                             and sle.sle09.E09_6 = sle.sle26.E26_2
                                             and sle.sle09.E09_16 = sle.sle26.E26_3
                                             and sle.sle09.E09_17 = sle.sle26.E26_4
                                             and sle.sle09.E09_18 = sle.sle26.E26_5*/
                      left join sle.sle23b on sle.sle23b.E23B_A = sle.sle09.E09_16
                      left join sle.sle23  on sle.sle23.E23_A   = '1'
                                              and sle.sle23.E23_1 = sle.sle09.E09_17
                                              and sle.sle23.E23_2 = sle.sle09.E09_18
                      left join hr.is_mf on sle.sle09.E09_45 = hr.is_mf.im05
                   where  (sle.sle09.E09_45 = '{$vid}'
                           OR sle.sle09.E09_1 = '{$vempno}' )
                          and (sle.sle09.E09_26 = '' or sle.sle09.E09_26>'{$vdate_roc}') /*�P�_��¾��n���ŭȡA�򥻸�Ƥ��e�~�|��*/
                   order by sle.sle09.E09_14 desc
                   limit 1
                  ";
          $res2 = mysql_query($sql2);
          $num2 = mysql_num_rows($res2);  //����
          if( $num2>0 ){
            while( $row2 = mysql_fetch_array($res2) ){

              //echo $row2['E09_14']." -- ".$row2['E09_26']." -- ".$vdate;
            if( $row2['E09_14']<=$vdate_roc AND ($row2['E09_26']>=$vdate_roc OR $row2['E09_26']=='') ){
            $ar_olddept['E09_2'] = $row2['E09_2'];
            $ar_olddept['E09_3'] = $row2['E09_3'];
            $ar_olddept['E09_15'] = $row2['E09_15'];
            $ar_olddept['E09_16'] = $row2['E09_16'];
            $ar_olddept['E09_17'] = $row2['E09_17'];
            $ar_olddept['E09_18'] = $row2['E09_18'];
            $ar_olddept['E09_19'] = $row2['E09_19'];
            $ar_olddept['E09_36'] = trim(substr($row2['E09_36'],0,4));
            $ar_olddept['E09_371'] = $row2['E09_371'];
            $ar_olddept['E09_372'] = $row2['E09_372'];
            $ar_olddept['E09_373'] = $row2['E09_373'];
            $ar_olddept['E09_374'] = $row2['E09_374'];
            $ar_olddept['E09_375'] = $row2['E09_375'];
            $ar_olddept['E09_376'] = $row2['E09_376'];
            $ar_olddept['E09_58'] = $row2['E09_58'];
            $ar_olddept['b_gid'] = $row2['b_gid'];
            $ar_olddept['erp_dept_id'] = $row2['erp_dept_id'];
            $ar_olddept['sname'] = $row2['sname'];
            //$ar_olddept['E26_6'] = $row2['E26_6'];
            //$ar_olddept['E26_7'] = $row2['E26_7'];
            $ar_olddept['E23_1'] = $row2['E23_3'];
            $ar_olddept['E23_2'] = $row2['E23B_3'];
            //$ar_olddept['take'] = $row2['take'];
          }
        }
      }
    }else{
        $sql  = "select sle.sle09.E09_2  as E09_2,  /*�m�W*/
                        sle.sle07.E07_1  as E07_1,  /*���s*/
                        sle.sle07.E07_14 as E07_14, /*�ͮĤ�*/
                        sle.sle07.E07_2 as E07_2,
                        /*�� �ե��� ��*/
                      sle.sle07.E07_3  as E07_3,  /*�����N��*/
                      sle.sle07.E07_15 as E07_15,  /*¾�ȥN�X*/
                      sle.sle07.E07_16 as E07_16,  /*�u�O*/
                      sle.sle07.E07_17 as E07_17,  /*¾*/
                      sle.sle07.E07_18 as E07_18,  /*��*/
                      sle.sle07.E07_21 as E07_21,  /*���~/���~*/
                      /*(case
                        when sle.sle07.E07_36<>'' then sle.sle07.E07_36
                        else sle.sle09.E09_36
                       end) as E07_36, */
                      sle.sle07.E07_36 as E07_36,  /*group_id  */
                      sle.sle07.E07_371 as E07_371,  /*¾�Ȭz�K1*/
                      sle.sle07.E07_372 as E07_372,  /*¾�Ȭz�K2*/
                      sle.sle07.E07_373 as E07_373,  /*¾�Ȭz�K3*/
                      sle.sle07.E07_374 as E07_374,  /*¾�Ȭz�K4*/
                      sle.sle07.E07_375 as E07_375,  /*¾�Ȭz�K5*/
                      sle.sle07.E07_376 as E07_376,  /*¾�Ȭz�K6*/
                      sle.sle07.E07_58 as E07_58,  /*���~�~��*/
                      sl.dept.b_gid as b_gid,
                      sl.dept.erp_dept_id as erp_dept_id,
                      sl.dept.sname as sname,
                      /*sle.sle26.E26_6,
                      sle.sle26.E26_7,*/
                      sle.sle23.E23_3,
                      sle.sle23b.E23B_3,
                      CASE WHEN (hr.is_mf.im02='W' && hr.is_mf.im23<>'') THEN 'WN'
                           WHEN (hr.is_mf.im02='W' && hr.is_mf.im23='')THEN 'MY'
                        ELSE 'AN'
                      END AS take
               from   sle.sle07
                      left join sl.dept on sle.sle07.E07_3 = sl.dept.dept_id
                      left join hr.is_mf on  sle.sle07.E07_1 = hr.is_mf.im07
                      left join sle.sle09 on sle.sle09.E09_1 = sle.sle07.E07_1
                        /*left join sle.sle26 on substring(sle.sle07.E07_3,1,1) = sle.sle26.E26_1
                                             and sle.sle09.E09_6 = sle.sle26.E26_2
                                             and sle.sle07.E07_16 = sle.sle26.E26_3
                                             and sle.sle07.E07_17 = sle.sle26.E26_4
                                             and sle.sle07.E07_18 = sle.sle26.E26_5   */
                      left join sle.sle23b on sle.sle23b.E23B_A = sle.sle09.E09_16
                      left join sle.sle23  on sle.sle23.E23_A   = '1'
                                              and sle.sle23.E23_1 = sle.sle09.E09_17
                                              and sle.sle23.E23_2 = sle.sle09.E09_18
               where  sle.sle07.E07_1 = '{$vemp}'
                      and sle.sle07.E07_14 <= '{$vdate_roc}'
               order by sle.sle07.E07_14 desc
               limit 1
              ";
      $res = mysql_query($sql);
      $num = mysql_num_rows($res);  //����
      if( $num>0 ){
        while( $row = mysql_fetch_array($res) ){
          if('1530120'==$vemp && $row['E07_2']=='10630855'){//add by �¶v 2019.08.28 1530120�\�ɹa 8/1�ե��e�������ӬOS5B5�j�˯�
            $row['E07_3'] = 'S5B5';
            $row['E07_15'] = '0005';
            $row['b_gid'] = '513';
            $row['erp_dept_id'] = '5212';
            $row['sname'] = '�j�˯�';
          }
          $ar_olddept['E09_2'] = $row['E09_2'];
          $ar_olddept['E09_3'] = $row['E07_3'];
          $ar_olddept['E09_15'] = $row['E07_15'];
          $ar_olddept['E09_16'] = $row['E07_16'];
          $ar_olddept['E09_17'] = $row['E07_17'];
          $ar_olddept['E09_18'] = $row['E07_18'];
          $ar_olddept['E09_19'] = $row['E07_21'];
          $ar_olddept['E09_36'] = trim(substr($row['E07_36'],0,4));
          $ar_olddept['E09_371'] = $row['E07_371'];
          $ar_olddept['E09_372'] = $row['E07_372'];
          $ar_olddept['E09_373'] = $row['E07_373'];
          $ar_olddept['E09_374'] = $row['E07_374'];
          $ar_olddept['E09_375'] = $row['E07_375'];
          $ar_olddept['E09_376'] = $row['E07_376'];
          $ar_olddept['E09_58'] = $row['E07_58'];
          $ar_olddept['b_gid'] = $row['b_gid'];
          $ar_olddept['erp_dept_id'] = $row['erp_dept_id'];
          $ar_olddept['sname'] = $row['sname'];
          //$ar_olddept['E26_6'] = $row['E26_6'];
          //$ar_olddept['E26_7'] = $row['E26_7'];
          $ar_olddept['E23_1'] = $row['E23_3'];
          $ar_olddept['E23_2'] = $row['E23B_3'];
          //$ar_olddept['take'] = $row['take'];
        }
      }
    }
    sl_open('sl');
    $sql_3 = " select *
               from   sl.dept
               where  stop <> 'Y'
                      and d_date = '0000-00-00 00:00:00'
                      and dept_id = '{$ar_olddept['E09_3']}'
             ";
    $res_3 = mysql_query($sql_3);
    $num_3 = mysql_num_rows($res_3);  //����
    if( $num_3>0 ){
      //echo "<pre>".$sql."</pre>";
      while( $row_3 = mysql_fetch_array($res_3) ){
        $ar_olddept['sap_ba']    = $row_3['sap_ba'];    //�Q����
        $ar_olddept['sap_ekgrp'] = $row_3['sap_ekgrp']; //���ʸs��
        $ar_olddept['sap_vk']    = $row_3['sap_vk'];    //�P��s�եN�X
        $ar_olddept['sap_bp']    = $row_3['sap_bp'];    //bp
        $ar_olddept['sap_bp_s']  = $row_3['sap_bp_s'];  //�������� s�P��
        $ar_olddept['sap_bp_a']  = $row_3['sap_bp_a'];  //�������� a�޲z
        $ar_olddept['sap_bp_c']  = $row_3['sap_bp_c'];  //�������� c��~
      }
    }
    //ECHO $vid."-".$ar_olddept['E23_2']."<BR>";
    return $ar_olddept;
  }

// **************************************************************************
//  ��ƦW��: u_call_rfc()
//  ��ƥ\��: �ഫ���O�W��
//  �ϥΤ覡: u_call_rfc($f_intable,$sap_import,$sap_itable,$sap_export,$sap_otable)
//            $f_intable  => rfc�W��
//            $sap_import => import���ܼ� ex:$a = array('P_WERKS'=> '2201',..,...)
//            $sap_itable => import���}�C ex:$b = array(array('TRN_LOG'=> �n�ǤJ���}�C ,'TRN_LOG_2'=> �n�ǤJ���}�C))
//            $sap_export => export���ܼ� ex:$c = array('SCNT'=> 'SCNT',..,...)
//            $sap_otable => export���}�C ex:$d = array('TRN_LOG'=> 'TRN_LOG',..,...)
//  �^�ǵ��G: $f_return['export']=>rfc�^�Ǫ��ܼ�
//            $f_return['otable']=>rfc�^�Ǫ��}�C
//  �{���]�p: �h�Z
//  �]�p���: 2013.04.21  ���� �Ҫ��i��  EIP RFC OK �h���L��
// **************************************************************************
function u_call_rfc($f_intable,$sap_import,$sap_itable,$sap_export,$sap_otable,$f_saplogin="PRD"){ //$f_saplogin="DEV" ��$f_saplogin �ܼƨS�����ȮɡA�w�]��"DEV"
  /*������call rfc������*/
  //echo $f_saplogin;
  sl_open("sl");
  $f_proc   = u_showproc();
  $fs_import = serialize($sap_import);
  $fs_itable = serialize($sap_itable);
  $fs_export = serialize($sap_export);
  $fs_otable = serialize($sap_otable);
  $f_pid     = getmypid();
  $f_empno  = $_SESSION['login_empno'];
  $f_date   = date("Y-m-d H:i:s");
  if('' == $f_empno){
    $f_empno = 'IT';
  }
  $f_var['sap_login'] = array(
                            "DEV" =>  array ("ASHOST"   => "DEV [SLC]",
                                             "SYSNR"    => "00",
                                             "CLIENT"   => "600",
                                             "USER"     => "SLCPHP",
                                             "PASSWD"   => "@ver2slc!",
                                             "MSHOST"   => "172.16.4.28",
                                             "R3NAME"   => "DEV",
                                             "GROUP"    => "SLC",
                                             "LANG"     => "ZF",
                                             "CODEPAGE" => "8300"),
                            "SN1" =>  array("ASHOST"  =>  "SN1 [SLC]",
                                            "SYSNR"   =>  "10",
                                            "CLIENT"  =>  "368",
                                            "USER"    =>  "SLCPHP",
                                            "PASSWD"  =>  "@ver2slc!",
                                            "MSHOST"  =>  "172.16.4.137",
                                            "R3NAME"  =>  "E68",
                                            "GROUP"   =>  "slc",
                                            "LANG"    => "ZF",
                                            "CODEPAGE"=> "8300"),
                            "PRD" =>  array("ASHOST"  => "E68 [SLC]",
                                            "SYSNR"   => "10",
                                            "CLIENT"  => "368",
                                            "USER"    => "slcphp",
                                            "PASSWD"  => "@ver2slc!",
                                            "MSHOST"  => "172.16.4.30",
                                            "R3NAME"  => "E68",
                                            "GROUP"   => "slc",
                                            "LANG"    => "ZF"  ,
                                            "CODEPAGE"=> "8300"), //4110
                            "PRD1" => array("ASHOST"  => "E68 [SLC]",
                                            "SYSNR"   => "10",
                                            "CLIENT"  => "668",
                                            "USER"    => "SLCPHP",
                                            "PASSWD"  => "@ver2slc!",
                                            "MSHOST"  => "172.16.4.30",
                                            "R3NAME"  => "E68",
                                            "GROUP"   => "slc",
                                            "LANG"    => "ZF"  ,
                                            "CODEPAGE"=> "8300"),
                            "PRD2" => array("ASHOST"  => "E68 [SLC]",
                                            "SYSNR"   => "10",
                                            "CLIENT"  => "368",
                                            "USER"    => "slcphp",
                                            "PASSWD"  => "@ver2slc!",
                                            "MSHOST"  => "172.16.4.30",
                                            "R3NAME"  => "E68",
                                            "GROUP"   => "slc2",
                                            "LANG"    => "ZF"  ,
                                            "CODEPAGE"=> "8300"),
                            "SB1" => array("ASHOST"  => "SB1 [SB1]",
                                           "SYSNR"   => "10",
                                           "CLIENT"  => "368",
                                           "USER"    => "slcphp",
                                           "PASSWD"  => "@ver2slc!",
                                           "MSHOST"  => "172.16.4.167",
                                           "R3NAME"  => "SB1",
                                           "GROUP"   => "slc",
                                           "LANG"    => "ZF"  ,
                                           "CODEPAGE"=> "4110"),
                            "SB2" => array("ASHOST"  => "SB2 [SB2]",
                                           "SYSNR"   => "10",
                                           "CLIENT"  => "368",
                                           "USER"    => "slcphp",
                                           "PASSWD"  => "@ver2slc!",
                                           "MSHOST"  => "172.16.4.167",
                                           "R3NAME"  => "SB2",
                                           "GROUP"   => "slc",
                                           "LANG"    => "ZF"  ,
                                           "CODEPAGE"=> "4110"),
                            "SB3" => array("ASHOST"  => "SB3 [SB3]",
                                           "SYSNR"   => "00",
                                           "CLIENT"  => "368",
                                           "USER"    => "slcphp",
                                           "PASSWD"  => "@ver2slc!",
                                           "MSHOST"  => "172.16.4.19",
                                           "R3NAME"  => "SB3",
                                           "GROUP"   => "slc",
                                           "LANG"    => "ZF"  ,
                                           "CODEPAGE"=> "4110")
                          );
    $rfc = saprfc_open($f_var['sap_login'][$f_saplogin]);
  if(!$rfc){
    echo "RFC connection failed with error:".saprfc_error();
    exit;
  }
  //$f_intable = 'YNM0RECV01xxx';
  //echo $rfc;
  //echo $f_intable.'<br>';
  $fce = saprfc_function_discover($rfc,$f_intable);
  if(!$fce){
    echo "Discovering interface of function module RFC_READ_REPORT failed";
    exit;
  }
  //�ǤJrfc���ܼ�
  if( $sap_import != '' && is_array($sap_import) ){
    foreach($sap_import as $i_key => $i_val){
      //echo $i_key .','.$i_val."<br>";
      saprfc_import($fce , $i_key,$i_val);//$fce name value
    }
  }
  //�ǤJrfc���}�C


   //echo "<pre>";
   //var_dump($sap_itable);
   //echo "</pre>";//exit;
  if( $sap_itable !='' && is_array($sap_itable) ){
    foreach( $sap_itable as $i_key => $i_val ){
      saprfc_table_init($fce , $i_key );
      //echo $i_key.'---'.$i_val.'</br>';
      foreach($i_val as $v_key => $v_val  ){
         //echo $v_key.'---'.$v_val.'</br>';
         //echo "<pre>";
         //print_r($v_val);
         //echo "</pre>";
         //ECHO $fce." -- ".$i_key." -- ".$v_val;
        saprfc_table_append($fce , $i_key , $v_val);
      }
    }
  }
  $rc = saprfc_call_and_receive($fce);//call rfc
  //echo "RC:".$rc."<BR>";
  if ($rc != SAPRFC_OK) {
    if ($rfc == SAPRFC_EXCEPTION ){
      echo ("Exception raised: ".saprfc_exception($fce));
    }
    else{
      echo (saprfc_error($fce));
    }
    //exit;
  }
  //rfc return���ܼ�
  if( $sap_export != '' && is_array($sap_export) ){
    foreach( $sap_export as $e_key => $e_val ){
      $f_export[$e_key] = saprfc_export($fce,$e_key);
    }
    // echo '<pre>';
    // print_r($sap_export) ;
    // echo '</pre>';
  }
  //rfc return���}�C
  if( $sap_otable != '' && is_array($sap_otable) ){
    foreach( $sap_otable as $o_key => $o_val ){
      //ECHO $o_key."<BR>";
      $rows = saprfc_table_rows($fce,$o_key);
      for($i = 1 ; $i <= $rows ; $i++){
        //ECHO $o_key." ----  ".$i."<BR>";
        $f_otable[$o_key][] = saprfc_table_read($fce , $o_key , $i);
      }
      //echo "<pre>";
      //print_r($f_otable[$o_key]);
      //echo "</pre>";
      saprfc_function_free($fce);
      saprfc_close($rfc);
      /*������call rfc������*/
    }
  }

  $f_return = array( 'rfcname'=>$f_intable,
                     'export' => $f_export,
                     'otable' => $f_otable);
  $fr_return = serialize($f_return);
  $sql = "insert into sap_rfc_log
                (s_num           ,slc_proc      ,sap_rfc       ,s_return
                 s_import        ,s_itable      ,s_export      ,s_otable,
                 s_login         ,b_empno       ,b_date        ,b_proc)
          values(0               ,'{$f_proc}'   ,'{$f_intable}','{$fr_return}'
                 '{$fs_import}'  ,'{$fs_itable}','{$fs_export}','{$fs_otable}',
                 '{$f_saplogin}' ,'{$f_empno}'  ,'{$f_date}'   ,'{$f_pid}')";
  mysql_query($sql);
  return $f_return;
}
  // **************************************************************************
  //  ��ƦW��: sl_ERP_MA083_SAP_ZTERM()
  //  ��ƥ\��: �w�� ERP ���ڱ���h���X SAP �����ڱ��� erp TABLE-->COPMA
  //  �ϥΤ覡: sl_ERP_MA083_SAP_ZTERM($MA041 , $MA083)
  //  �{���]�p: ����
  //  �]�p���: 2013.08.19
  // **************************************************************************
  function sl_ERP_MA083_SAP_ZTERM($MA083) { //��MA041 ���ڤ覡 ���� --> 02.�䲼 �A���b�t�~�W�[if�P�_�O�_��MA041-->02 ���P�_�C
      $MA083 = (substr($MA083,1,2)=='31')?substr($MA083,0,1).'30'.substr($MA083,3,3):$MA083; //�]�ȱi�Ʋz�i���A�ĤG~�T�X�u�n�O31���A���אּ30 ��:131015 --> 130015�C
      $sap_ZTERM = $MA083;
      $f_var["ygs0_v4_2_2"]    = "/home/gas/ygsonatr_v4_2_2.itm";    // �I�ڳ��� �s���䲼����
      list($f_var['ygs0_v4_2_2_value']    ,$f_var['ygs0_v4_2_2_show']    ,$f_var['ygs0_v4_2_2_qty'])   = u_add_select2($f_var["ygs0_v4_2_2"]);   // ���ڳ�_�䲼��J �}�C
      $f_var['ygs0_v4_2_2'] = array('value'=> $f_var['ygs0_v4_2_2_value']  ,'show'=> $f_var['ygs0_v4_2_2_show'] ,'qty'=> $f_var['ygs0_v4_2_2']);
      for($i=0 ; $i<count($f_var['ygs0_v4_2_2']['show']) ; $i++){
        $f_var['ygs0_v4_2_2_item'] = $f_var['ygs0_v4_2_2']['show'][$i] ;
        $f_var['ygs0_v4_2_2_MEINS'][$f_var['ygs0_v4_2_2_item']] = $f_var['ygs0_v4_2_2']['value'][$i] ;
      }
        $sap_ZTERM = (Trim($f_var['ygs0_v4_2_2_MEINS'][$MA083])=='')?'':Trim($f_var['ygs0_v4_2_2_MEINS'][$MA083]);
        if($sap_ZTERM==''){ //�p�G�}�C��藍���ơA�~�i�J�j��h�@���@���P�_�C
          for($i=0 ; $i<count($f_var['ygs0_v4_2_2']['show']) ; $i++){
            $j = $i + 1 ;
            if($f_var['ygs0_v4_2_2']['show'][$j] > $MA083 and $f_var['ygs0_v4_2_2']['show'][$i] < $MA083 ){
              $sap_ZTERM = $f_var['ygs0_v4_2_2']['value'][$j];
            }
          }
        }
    return  $sap_ZTERM   ;
  }

  // **************************************************************************
  //  ��ƦW��: sl_ERP_MA083_SAP_ZTERM_V2()
  //  ��ƥ\��: �w�� ERP ���ڱ���h���X SAP �����ڱ��� erp TABLE-->COPMA //2013/11/14 ���� �j��P�_���~�A�ݭn�A�ק�~~�C
  //  �ϥΤ覡: sl_ERP_MA083_SAP_ZTERM_V2( $MA083)
  //  �{���]�p: ����
  //  �]�p���: 2013.08.19
  // **************************************************************************
  function sl_ERP_MA083_SAP_ZTERM_V2($MA083) { //��MA041 ���ڤ覡 ���� --> 2-�q��        �A���b�t�~�W�[if�P�_�O�_��MA041-->02 ���P�_�C
      $MA083 = (substr($MA083,1,2)=='31')?substr($MA083,0,1).'30'.substr($MA083,3,3):$MA083; //�]�ȱi�Ʋz�i���A�ĤG~�T�X�u�n�O31���A���אּ30 ��:131015 --> 130015�C
      $sap_ZTERM = $MA083;
      $MA083_v2 = substr($MA083,3,3); //�]�ȱi�Ʋz�i���A�q�ת��u�n����3�X

      $f_var["ygs0_v4_2"]    = "/home/gas/ygsonatr_v4_2.itm";    // ���ڳ���
      list($f_var['ygs0_v4_2_value']    ,$f_var['ygs0_v4_2_show']    ,$f_var['ygs0_v4_2_qty'])   = u_add_select2($f_var["ygs0_v4_2"]);   // ���ڳ���J �}�C
      $f_var['ygs0_v4_2'] = array('value'=> $f_var['ygs0_v4_2_value']  ,'show'=> $f_var['ygs0_v4_2_show'] ,'qty'=> $f_var['ygs0_v4_2']);
      for($i=1 ; $i<count($f_var['ygs0_v4_2']['show']) ; $i++){
        $f_var['ygs0_2_item'] = $f_var['ygs0_v4_2']['show'][$i] ;
        $f_var['ygs0_2_MEINS'][$f_var['ygs0_2_item']] = $f_var['ygs0_v4_2']['value'][$i] ;
      }
        $sap_ZTERM = (Trim($f_var['ygs0_2_MEINS'][$MA083])=='')?'':Trim($f_var['ygs0_2_MEINS'][$MA083]);
        if($sap_ZTERM==''){ //�p�G�}�C��藍���ơA�~�i�J�j��h�@���@���P�_�C
          for($i=0 ; $i<count($f_var['ygs0_v4_2']['show']) ; $i++){
            $j = $i + 1 ;
            // echo $MA083_v2 .'<---�T�X���Ȧ�q��'.'</br>';
            // echo substr($f_var['ygs0_v4_2']['show'][$j],3,3) .'<---�T�X�@___'.substr($f_var['ygs0_v4_2']['show'][$i],3,3).'<--�T�X�G'.'</br>';
            if(substr($f_var['ygs0_v4_2']['show'][$j],3,3) == $MA083_v2){ //�q�ת��u�n����3�X �p�G��T�X�@�ˡA�N���s���ܼƭȡC
              $sap_ZTERM_v2 = $f_var['ygs0_v4_2']['value'][$j];
            }elseif( substr($f_var['ygs0_v4_2']['show'][$j],3,3) >= $MA083_v2 and substr($f_var['ygs0_v4_2']['show'][$i],3,3) <= $MA083_v2 ){
              // if( substr($f_var['ygs0_v4_2']['show'][$j],3,3) >= $MA083_v2){
                $sap_ZTERM = $f_var['ygs0_v4_2']['value'][$j];
              }
          }
          $sap_ZTERM = ($sap_ZTERM_v2=='')?$sap_ZTERM:$sap_ZTERM_v2;   //�p�G sap_ZTERM_v2 ���ȡA�N�� sap_ZTERM_v2 ���ȡC
        }
    return  $sap_ZTERM   ;
  }


  // **************************************************************************
  //  ��ƦW��: u_dept_sap_werks()
  //  ��ƥ\��: �w�� ERP �����O�h���X �s��bsl.dept  �� sap �Q���߻P�P���´
  //  �ϥΤ覡: u_dept_sap_werks($MA015)
  //  �{���]�p: ����
  //  �]�p���: 2013.08.26
  // **************************************************************************
  function u_dept_sap_werks($MA015) { //��MA041 ���ڤ覡 ���� --> 02.�䲼 �A���b�t�~�W�[if�P�_�O�_��MA041-->02 ���P�_�C
    u_open('sl');
      $werks = '';
      $f_var['where_v1='] = '';
      switch(substr($MA015,0,1)){
        case "L":
            $f_var['where_v1']  = "sap_ba='$MA015'  and";
          break;
        default:
            $f_var['where_v1'] = "b_gid='$MA015'  and";
          break;
      }
      $sql  = "select *
               from dept
               where {$f_var['where_v1']}   stop <>'Y'  and sap_ba <>'' and  sap_vk <>'' " ;
      // echo $sql.'</br>';
      $re = mysql_query($sql);
      $num = mysql_num_rows($re);
      if($num >= 1 ){
        while($row = mysql_fetch_assoc($re)){
          $werks =  $row['sap_ba'].'_'.$row['sap_vk'].'_'.$row['b_gid'];
          // $werks =  $row['sap_ba'].'_'.$row['sap_vk'].'_'.$row['ef_dept'];
        }
      }
    return $werks   ;
  }

  // **************************************************************************
  //  ��ƦW��: u_MA083_NAME()
  //  ��ƥ\��: �w�� ���sERP���ڱ����ഫ�����ڱ���N�X+���廡��
  //  �ϥΤ覡: u_MA083_NAME($MA015)
  //  �{���]�p: ����
  //  �]�p���: 2013.08.26
  // **************************************************************************
  function u_MA083_NAME($MA015) { //��MA041 ���ڤ覡 ���� --> 02.�䲼 �A���b�t�~�W�[if�P�_�O�_��MA041-->02 ���P�_�C
    // u_openms("forwarder");
    u_openms("Leader9503");
      $werks = $MA015;
      $sql  = "SELECT  * FROM Leader9503..CMSNA  WHERE NA002 = '{$MA015}'  " ;
      // echo $sql.'</br>';
      $re = mssql_query($sql);
      $num = mssql_num_rows($re);
      if($num >= 1 ){
        while($row = mssql_fetch_array($re)){
          $werks =  $row['NA002'].'_'.$row['NA003'];
        }
      }else{
        u_openms("forwarder");
          $werks = $MA015;
          $sql2  = "SELECT  * FROM forwarder..CMSNA  WHERE NA002 = '{$MA015}'  " ;
          // echo $sql.'</br>';
          $re2 = mssql_query($sql2);
          $num2 = mssql_num_rows($re2);
          if($num2 >= 1 ){
            while($row2 = mssql_fetch_array($re2)){
              $werks =  $row2['NA002'].'_'.$row2['NA003'];
            }
          }
      }
    return $werks   ;
  }

  // **************************************************************************
  //  ��ƦW��: u_SAP_ZTERM_NAME()
  //  ��ƥ\��: �w�� SAP���ڱ����ഫ�����ڱ���N�X+���廡��
  //  �ϥΤ覡: u_SAP_ZTERM_NAME($MA015)
  //  �{���]�p: ����
  //  �]�p���: 2013.08.26
  // **************************************************************************
  function u_SAP_ZTERM_NAME($MA015) { //��MA041 ���ڤ覡 ���� --> 02.�䲼 �A���b�t�~�W�[if�P�_�O�_��MA041-->02 ���P�_�C
    sl_open("SAP_test");
      $werks = $MA015;
      $sql  = "SELECT  * FROM SAP_KNB1  WHERE ZTERM = '{$MA015}'  " ;
      // echo $sql.'</br>';
      $re = mysql_query($sql);
      $num = mysql_num_rows($re);
      if($num >= 1 ){
        while($row = mysql_fetch_array($re)){
          $werks =  $row['ZTERM'].'_'.$row['LIFNR'];
        }
      }
    return $werks   ;
  }


// **************************************************************************
//  ��ƦW��: sl_mb_substr()
//  ��ƥ\��: �]�L�k�ϥ�mb_substr..�ҥH�������@�Ө��
//  �ϥΤ覡: sl_mb_substr($vdate)
//  �{���]�p: ����
//  �]�p���: 2013.010.08
// **************************************************************************
function  sl_mb_substr( $str ,  $start  =  0 ,  $length  =  0 ,  $encode  =  'utf-8' )  {
    /*�ӽs�X�C�ӫD�^��r�Ū��r�`����*/
    $encode_len  =  $encode  == 'utf -8' ? 3  :  2 ;
    /*�p��}�l�r�`*/
    for ( $byteStart  =  $i  =  0 ;  $i  <  $start ;  ++ $i )  {
        $byteStart  +=  ord ( $str { $byteStart } )  <  128 ? 1  :  $encode_len ;
        /*��_�l���жW�X�r�Ŧ�A�h��^�ŭ�*/
        if (  $str { $byteStart }  ==  ''  )  return  '' ;
    }
    /*�p��r�`����*/
    for ( $i  =  0 ,  $byteLen  =  $byteStart ;  $i  <  $length ;  ++ $i ){
        $byteLen  +=  ord ( $str { $byteLen } )  <  128 ? 1  :  $encode_len ;
    }
    // echo '�n���Ϊ��W��-->'.$str .'___�n�}�l�����r��a��-->'. $byteStart .'___�̫᪺���r��a��-->'. $byteLen - $byteStart.'</br>';
    return  substr (  $str ,  $byteStart ,  $byteLen - $byteStart  ) ;
  }
  // **************************************************************************
  //  ��ƦW��: sl_advque()
  //  ��ƥ\��: �i���d��
  //  �ϥΤ覡: sl_advque($f_var['fd_que'])
  //  �{���]�p: Job
  //  �]?p���: 2014.05.12
  // **************************************************************************
  function sl_advque($f_var,$sql_type='mysql') { // add by mimi 2009.04.13 $sql_type='mysql' = $sql_type �S���ǻ��ѼƮɪ��w�]�Ȭ�mysql
    $vjs_rule = ''; // ������]�w

    reset($f_var['fd_que']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
    while(list($mfd_id)=each($f_var['fd_que'])) {
      if('N'==$f_var['fd_que'][$mfd_id]['show_que']) { // ���q�b�e���W
        continue; // loop �^�� while
      }

      if('hidden'==$f_var['fd_que'][$mfd_id]['type']) { // �p�G type �O hidden �N���b�e���h�q���
        //echo $f_var['fd_que'][$mfd_id]['type'].'-----';
        $f_var["tp"]-> newBlock (  "tb_".$f_var['fd_que'][$mfd_id]['type']                  ); // ��� type
        reset($f_var['fd_que'][$mfd_id]); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
        while(list($mfd_name)=each($f_var['fd_que'][$mfd_id])) {
            if('value'==$mfd_name && '2'==$f_var['msel']) { // �p�G�O value and 2=�ק�A�N��� $f_var['in_scr_row'][] ���
              $mfd_value = $f_var['in_scr_row'][$mfd_id];
              $f_var["tp"]-> assign   (  "tv_value", $mfd_value     );
            }
            else{
              $f_var["tp"]-> assign   (  "tv_".$mfd_name , $f_var['fd_que'][$mfd_id][$mfd_name]     );
            }
        }
        continue; // loop �^�� while
      }


      $mmemo = '';
      if(''<>$f_var['fd_que'][$mfd_id]['memo']) {
        $mmemo = '&nbsp;('.$f_var['fd_que'][$mfd_id]['memo'].')';
      }
      $f_var["tp"]-> newBlock (  "tb_in_get_fd"         ); // ��J�e��
      $f_var["tp"]-> assign   (  "tv_width1"     , $f_var["mwidth1"]                  ); //
      $f_var["tp"]-> assign   (  "tv_width2"     , $f_var["mwidth2"]                  ); //
      $f_var["tp"]-> assign   (  "tv_cname"      , $mpkey_str.$f_var['fd_que'][$mfd_id]['cname']   ); // ��줤��W��
      $f_var["tp"]-> assign   (  "tv_fd_ename"   , $f_var['fd_que'][$mfd_id]['ename']   ); // ���^��W��
      $f_var["tp"]-> assign   (  "tv_class"      , $f_var['fd_que'][$mfd_id]['class']              ); //
      $f_var["tp"]-> assign   (  "tv_memo"       , $mmemo      ); // ��� memo
      $f_var["tp"]-> newBlock (  "tb_".$f_var['fd_que'][$mfd_id]['type']                  ); // ��� type

      reset($f_var['fd_que'][$mfd_id]); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
      while(list($mfd_name)=each($f_var['fd_que'][$mfd_id])) {
        if('value'==$mfd_name && ('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1)) ) { // �p�G�O value and 2=�ק�A�N��� $f_var['in_scr_row'][] ���
          $mfd_value = $f_var['in_scr_row'][$mfd_id];
          //echo $f_var['fd_que'][$mfd_id]['type'].'---'.$mfd_id.'---'.$mfd_value.'<hr>';
          //�W�[file2����Ū����ƬO�@�P�_
          if('0000-00-00'==substr($mfd_value,0,10)) {
             $mfd_value = '';
          }
        }
        else {
          $mfd_value = $f_var['fd_que'][$mfd_id][$mfd_name];
        }
        //echo $mfd_id.'---';
        $f_var["tp"]-> assign   (  "tb_".$f_var['fd_que'][$mfd_id]['type'].".tv_".$mfd_name , $mfd_value      );
      }

      switch($f_var['fd_que'][$mfd_id]['type']) {
        case "text":
          $f_var["tp"]-> assign   (  "tv_value"      , $_SESSION['advque_memo']["f_".$mfd_id]      );
          break;
        case "date3":
          $f_var["tp"]-> assign   (  "tv_value_s"    , $_SESSION['advque_memo']["f_".$mfd_id."_s"] );
          $f_var["tp"]-> assign   (  "tv_value_e"    , $_SESSION['advque_memo']["f_".$mfd_id."_e"] );
          break;
        case "select":
        $f_var["tp"]-> newBlock (  "tb_all_option"                  ); // all_option
        // reset($f_var['fd_que'][$mfd_id]['value']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
        while( list($mvalue)=each($f_var['fd_que'][$mfd_id]['value']) ) {
          $f_var["tp"]-> newBlock (  "tb_option"                  ); // option
          //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
          if($_SESSION['advque_memo']["f_".$mfd_id] == $f_var['fd_que'][$mfd_id]['value'][$mvalue]){
            $f_var["tp"]-> assign   (  "tv_selected"      , "selected"); //
          }
          $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd_que'][$mfd_id]['value'][$mvalue]  );
          $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd_que'][$mfd_id]['show'][$mvalue]   );
        }
        //echo $mfd_id.'--------';
        //echo $f_var['fd_que'][$mfd_id]['value']['3'];
        //echo $f_var['fd_que'][$mfd_id]['value'][0]['3'].'++++++++';
        break;
        case "select2":
        $f_var["tp"]-> newBlock (  "tb_all_option2"                  ); // all_option2
        reset($f_var['fd_que'][$mfd_id]['value']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
        while( list($mvalue)=each($f_var['fd_que'][$mfd_id]['value']) ) {
          $f_var["tp"]-> newBlock (  "tb_option2"                  ); // option
          //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
          $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd_que'][$mfd_id]['value'][$mvalue]  );
          $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd_que'][$mfd_id]['show'][$mvalue]   );

        }
        //echo $mfd_id.'--------';
        //echo $f_var['fd_que'][$mfd_id]['cname'];
        //echo $f_var['fd_que'][$mfd_id]['value'][0]['3'].'++++++++';
        break;
        default:
        break;
      }

      // js_rule �]�w
      if(NULL!=$f_var['fd_que'][$mfd_id]['js_rule']['kind']) {
         $vjs_rule .= sl_js_rule($f_var['fd_que'][$mfd_id]['js_rule']['kind'],
                                 $f_var['fd_que'][$mfd_id]['ename'],
                                 $f_var['fd_que'][$mfd_id]['cname'],
                                 $f_var['fd_que'][$mfd_id]['js_rule']['chk_value'],
                                 $f_var['fd_que'][$mfd_id]['js_rule']['chk_len']
                               );
      }
      ///// js_rule �]�w
      ///switch ($f_var['fd_que'][$mfd_id]['js_rule']['kind']) {
      ///  case "required":  // �@�w�n��J�ȡA�]�N�O�ˬd�O�_���ť�
      ///  $vjs_rule .= "
      ///                                   if(this.{$f_var['fd_que'][$mfd_id]['ename']}.value=='{$f_var['fd_que'][$mfd_id]['js_rule']['chk_value']}'){;
      ///                                     alert('�y{$f_var['fd_que'][$mfd_id]['cname']}�z��J���~!!') ;
      ///                                     this.{$f_var['fd_que'][$mfd_id]['ename']}.focus();
      ///                                     return(false)
      ///                                   };
      ///                                 ";
      ///  break;
      ///  default:
      ///  break;
      ///}

      $f_var["tp"]-> assignglobal   (  "tv_js_rule"    , $vjs_rule                                   ); // js rule

    }
    return;
  }
  // **************************************************************************
  //  ��ƦW��: sl_advpo()
  //  ��ƥ\��: �רҬ���
  //  �ϥΤ覡: sl_advpo($f_var['fd_po'])
  //  �{���]�p: �¶v
  //  �]�p���: 2016.10.24
  // **************************************************************************
  function sl_advpo($f_var,$sql_type='mysql') { // add by mimi 2009.04.13 $sql_type='mysql' = $sql_type �S���ǻ��ѼƮɪ��w�]�Ȭ�mysql
    $vjs_rule = ''; // ������]�w

    if( '10'==$f_var['msel']) {
      if(NULL==$f_var['in_scr_row']) {
        $f_var['mwhere'] = "s_num='{$f_var['f_s_num']}'";
        $f_var['morder'] = "s_num";
        $query1      = "select {$f_var['mtable']['head']}.*
                                   from {$f_var['mtable']['head']}
                                   where {$f_var['mwhere']}
                                   order by {$f_var['morder']}
                           ";
        //echo $query1."<BR>";
       //upd by mimi 2009.04.13 ��mssql�]���
       $result_scr  = call_user_func($sql_type.'_query',$query1);//mysql_query($query1);
       $row_scr     = call_user_func($sql_type.'_fetch_array',$result_scr);//mysql_fetch_array($result_scr);
       $f_var['in_scr_row'] = $row_scr;
      }
    }

    reset($f_var['fd_po']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
    while(list($mfd_id)=each($f_var['fd_po'])) {
      if('N'==$f_var['fd_po'][$mfd_id]['show_que']) { // ���q�b�e���W
        continue; // loop �^�� while
      }

      if('hidden'==$f_var['fd_po'][$mfd_id]['type']) { // �p�G type �O hidden �N���b�e���h�q���
        //echo $f_var['fd_po'][$mfd_id]['type'].'-----';
        $f_var["tp"]-> newBlock (  "tb_".$f_var['fd_po'][$mfd_id]['type']                  ); // ��� type
        reset($f_var['fd_po'][$mfd_id]); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
        while(list($mfd_name)=each($f_var['fd_po'][$mfd_id])) {
            if('value'==$mfd_name && '2'==$f_var['msel']) { // �p�G�O value and 2=�ק�A�N��� $f_var['in_scr_row'][] ���
              $mfd_value = $f_var['in_scr_row'][$mfd_id];
              $f_var["tp"]-> assign   (  "tv_value", $mfd_value     );
            }
            else{
              $f_var["tp"]-> assign   (  "tv_".$mfd_name , $f_var['fd_po'][$mfd_id][$mfd_name]     );
            }
        }
        continue; // loop �^�� while
      }

      // Add by Tony 2007.08.20 �W�[ pkey �������
      if('Y'==$f_var['fd_po'][$mfd_id]['pkey']) { // ���n��J����Ȧr��
         //$mpkey_str = '<span class=pkey>��</span>';
         $mpkey_str = '<span class=pkey>*</span>';
      }
      else {
         $mpkey_str = '';
      }

      $mmemo = '';
      if(''<>$f_var['fd_po'][$mfd_id]['memo']) {
        $mmemo = '&nbsp;('.$f_var['fd_po'][$mfd_id]['memo'].')';
      }
      $f_var["tp"]-> newBlock (  "tb_in_get_fd"         ); // ��J�e��
      $f_var["tp"]-> assign   (  "tv_width1"     , $f_var["mwidth1"]                  ); //
      $f_var["tp"]-> assign   (  "tv_width2"     , $f_var["mwidth2"]                  ); //
      $f_var["tp"]-> assign   (  "tv_cname"      , $mpkey_str.$f_var['fd_po'][$mfd_id]['cname']   ); // ��줤��W��
      $f_var["tp"]-> assign   (  "tv_fd_ename"   , $f_var['fd_po'][$mfd_id]['ename']   ); // ���^��W��
      $f_var["tp"]-> assign   (  "tv_class"      , $f_var['fd_po'][$mfd_id]['class']              ); //
      $f_var["tp"]-> assign   (  "tv_memo"       , $mmemo      ); // ��� memo
      $f_var["tp"]-> newBlock (  "tb_".$f_var['fd_po'][$mfd_id]['type']                  ); // ��� type

      reset($f_var['fd_po'][$mfd_id]); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
      while(list($mfd_name)=each($f_var['fd_po'][$mfd_id])) {
        if('value'==$mfd_name && '10'==$f_var['msel'] ) { // �p�G�O value and 2=�ק�A�N��� $f_var['in_scr_row'][] ���
          $mfd_value = $f_var['in_scr_row'][$mfd_id];
          //echo $f_var['fd_po'][$mfd_id]['type'].'---'.$mfd_id.'---'.$mfd_value.'<hr>';
          //�W�[file2����Ū����ƬO�@�P�_
          if(('file'==$f_var['fd_po'][$mfd_id]['type'] or 'file2'==$f_var['fd_po'][$mfd_id]['type'] ) && NULL<>$mfd_value) {
             //$file_path   = $f_var['proc_upfile_path'][u_showproc()].trim($f_var['in_scr_row'][$mfd_id]);
             $strpos = strrpos($_SERVER['SCRIPT_FILENAME'],'/');
             $strlen = substr($_SERVER['SCRIPT_FILENAME'],0,$strpos+1);
             $file_path = $strlen.$f_var[po_mupload_dir].trim($f_var['in_scr_row'][$mfd_id]);
             $file_uri  = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']."?f_sid={$f_var['f_sid']}";
             //echo $filE_uri.$_SERVER['HTTP_REFERER'];
             //phpinfo();
             //$mfile_name      = '<a href='.$f_var[po_mupload_dir].trim($f_var['in_scr_row'][$mfd_id]).'>'.trim($f_var['in_scr_row'][$mfd_id]).'</a>';
             $mfile_name      = '<a href='.$url.base64_encode(getcwd().'/'.$f_var[po_mupload_dir].trim($f_var['in_scr_row'][$mfd_id])).'>'.trim($f_var['in_scr_row'][$mfd_id]).'</a>';
             $mfile_del_link  = "http://".$_SERVER['SERVER_NAME']."/~sl/sl_del_file.php?f_field_name={$mfd_id}&f_db={$f_var['mdb']}&f_table={$f_var['mtable']['head']}&f_wrere_field=s_num&f_no={$f_var['in_scr_row'][s_num]}&f_file_path={$file_path}&f_file_url={$file_uri}&f_file_name=".trim($f_var['in_scr_row'][$mfd_id]);
             //$mre_url = "&re_url=".u_showproc().".php?msel=2&f_s_num={$f_var['in_scr_row'][s_num]}&f_page={$f_var['f_page']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}";
             // �@�w�n�s�X�A���M�^�ǭȷ|���~�H�u�O�_�ǡI�I�I 2006.11.20 By Tony
             //upd by mimi 2012.06.01 ����-13608 �W�[�^��f_change1�Pf_change2
             $mre_url = u_showproc().".php?msel=2&f_sid={$f_var['f_sid']}&f_s_num={$f_var['in_scr_row'][s_num]}&f_page={$f_var['f_page']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_del={$f_var['f_del']}&f_change1={$f_var['f_change1']}&f_change2={$f_var['f_change2']}";
             $mfile_del_link .= "&re_url=".urlencode($mre_url); // return url
             //echo $mfd_id.'-1-'.$f_var['fd'][$mfd_id]['type'].'-2-'.$mfd_value.'-3-<br>';
             if('file'==$f_var['fd_po'][$mfd_id]['type']){
               $f_var["tp"]-> newBlock (  "tb_in_file_del"                              ); // �R���ɮ� Block
             }
             else{
               $f_var["tp"]-> newBlock (  "tb_in_file_del2"                              ); // �R���ɮ� Block
             }
             //$f_var["tp"]-> newBlock (  "tb_in_file_del"                              ); // �R���ɮ� Block
             $f_var["tp"]-> assign   (  "tv_file_name"       , $mfile_name            ); // �ɮצW��
             $f_var["tp"]-> assign   (  "tv_file_del_link"   , $mfile_del_link        ); // ��줤��W��
             $mfd_value = $f_var['fd_po'][$mfd_id][$mfd_name];
          }
          if('0000-00-00'==substr($mfd_value,0,10)) {
             $mfd_value = '';
          }
        }
        else {
          $mfd_value = $f_var['fd_po'][$mfd_id][$mfd_name];
        }
        //echo $mfd_id.'---';
        $f_var["tp"]-> assign   (  "tb_".$f_var['fd_po'][$mfd_id]['type'].".tv_".$mfd_name , $mfd_value      );
      }

      switch($f_var['fd_po'][$mfd_id]['type']) {
        case "select":
        reset($f_var['fd_po'][$mfd_id]['value']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
        while( list($mvalue)=each($f_var['fd_po'][$mfd_id]['value']) ) {
          $f_var["tp"]-> newBlock (  "tb_option"                  ); // option
          //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
          $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd_po'][$mfd_id]['value'][$mvalue]  );
          $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd_po'][$mfd_id]['show'][$mvalue]   );
          if('10'==$f_var['msel']) {
            // �N select ���b��Ʀ�m
            if($f_var['fd_po'][$mfd_id]['value'][$mvalue]==trim($f_var['in_scr_row'][$mfd_id])) {
              $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
            }
          }
        }
        //echo $mfd_id.'--------';
        //echo $f_var['fd_po'][$mfd_id]['value']['3'];
        //echo $f_var['fd_po'][$mfd_id]['value'][0]['3'].'++++++++';
        break;
        case "textarea":
        reset($f_var['fd_po'][$mfd_id]['size']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
        while( list($msize)=each($f_var['fd_po'][$mfd_id]['size']) ) {
          $f_var["tp"]-> assign   (  "tv_".$msize    , $f_var['fd_po'][$mfd_id]['size'][$msize]     ); // �]�w cols�Brows�Bwrap
        }
        //echo $msize.'---';
        //echo $f_var['fd_po'][$mfd_id]['size'][$msize].'+++';
        break;;
        default:
        break;
      }

      // js_rule �]�w
      if(NULL!=$f_var['fd_po'][$mfd_id]['js_rule']['kind']) {
         $vjs_rule .= sl_js_rule($f_var['fd_po'][$mfd_id]['js_rule']['kind'],
                                 $f_var['fd_po'][$mfd_id]['ename'],
                                 $f_var['fd_po'][$mfd_id]['cname'],
                                 $f_var['fd_po'][$mfd_id]['js_rule']['chk_value'],
                                 $f_var['fd_po'][$mfd_id]['js_rule']['chk_len']
                               );
      }
      ///// js_rule �]�w
      ///switch ($f_var['fd_po'][$mfd_id]['js_rule']['kind']) {
      ///  case "required":  // �@�w�n��J�ȡA�]�N�O�ˬd�O�_���ť�
      ///  $vjs_rule .= "
      ///                                   if(this.{$f_var['fd_po'][$mfd_id]['ename']}.value=='{$f_var['fd_po'][$mfd_id]['js_rule']['chk_value']}'){;
      ///                                     alert('�y{$f_var['fd_po'][$mfd_id]['cname']}�z��J���~!!') ;
      ///                                     this.{$f_var['fd_po'][$mfd_id]['ename']}.focus();
      ///                                     return(false)
      ///                                   };
      ///                                 ";
      ///  break;
      ///  default:
      ///  break;
      ///}

      $f_var["tp"]-> assignglobal   (  "tv_js_rule"    , $vjs_rule                                   ); // js rule

    }
    return;
  }
  // **************************************************************************
  //  ��ƦW��: sl_show_name()
  //  ��ƥ\��: �Ӧh�a��t�~�[�{���F,�g�@�Ӧb�o��
  //  �ϥΤ覡: sl_show_name($empno)
  //  �{���]�p: supergk
  //  �]�p���: 2014.10.09
  // **************************************************************************
  function  sl_show_name($empno){
    if($empno){
      sl_open('sl');
      $sql ="select name from sl.pass where empno = '{$empno}'";
      $rs = mysql_query($sql);
      $row = mysql_fetch_array($rs);
      return($row['name']);
    }else{
      return;
    }
  }

  // **************************************************************************
  //  ��ƦW��: sl_eip2flwV2()
  //  ��ƥ\��: EIP�U�������q�lñ��-ñ�ֳ�,�G����
  //  �ϥΤ覡:
  //  �{���]�p: �Ϊ�
  //  �]�p���: 2015.03.11
  // **************************************************************************
  function sl_eip2flwV2(&$f_var) {
    //ignore_user_abort(true);
    //set_time_limit(60);
    Global $_SESSION;
    Global $f_var;
    if( ''!=$f_var['f_b_empno'] ){
      $vb_empno   = $f_var['f_b_empno'];
      $vb_name    = '';
      $vb_dept_id = '';
    }else if( ''==$_SESSION["login_empno"] ){
      $vb_empno   = $f_var['f_b_empno'];
      $vb_name    = '';
      $vb_dept_id = '';
    }else{
      $vb_empno   = $_SESSION["login_empno"];
      $vb_name    = $_SESSION["login_name"];
      $vb_dept_id = $_SESSION["login_dept_id"];
    }

    $vb_date    = date("Y-m-d H:i:s");
    $vfromip    = $_SERVER["REMOTE_ADDR"];
    $vproc      = u_showproc(); // �{���N��
    $eipdb       = 'docs';
    $flwdb       = 'EF2KWeb';
    $fp         = fopen("http://eip.slc.com.tw/~sl/eip2flwV2.log", 'a'); //���г渹�W�c,�slog�d��
    $mftp_server = "flow.slc.com.tw";         // ftp server


    //sl_chk_rak013($f_var); //�T�{�O�_���]�w���ݥD��
    $vdat1 = 'EF2KWeb';
    sl_openef2k($vdat1);
    $query2 = "SELECT resak001,resak002,resak015,resal002,resak013
               FROM resak
                 LEFT JOIN resal
                   ON resak015 = resal001
               WHERE resak001 = '{$vb_empno}'
              ";
    $result2 = mssql_query($query2);
    $row2 = mssql_fetch_array($result2);
    if(''==$row2['resak013']){
      echo "<script language='JavaScript'>";
      echo "alert('�d�L���ݥD�ޡA���p���`���q�H�ƨ�U�B�z�C');";
      echo "history.back();";
      echo "</script>";

    }

    sl_openef2k($flwdb);
    //������������������������������������������������������������������������������������������������������������������������������������������������������
    // (����20585)upd by �Ϊ� 2013.07.08 �������v���H���bresak004�|�H���s+_U���
    $u_query = "SELECT resak001,resak002,resak015,resal002,resak013
                FROM resak
                     LEFT JOIN resal
                               ON resak015 = resal001
                WHERE LTrim(RTrim(resak004)) = '{$vb_empno}'
               ";
    $u_res   = mssql_query($u_query);
    $u_count = mssql_num_rows($u_res);
    if( $u_count==0 ){
      echo "<script language='JavaScript'>";
      echo "alert('�`�N!! ���u: ".$vb_name."(".$vb_empno.") �L�q�lñ�֨ϥ��v���C');";
      echo "history.back();";
      echo "</script>";
      exit;
    }
    //������������������������������������������������������������������������������������������������������������������������������������������������������

    $fd_stop = 'N'; //�O�_�i��ñ��
    if(is_array($_REQUEST)) {
      while (list($f_fd_name,$f_fd_value) = each($_REQUEST)) {
        //echo "$f_fd_name=$f_fd_value----";
        $f_var[$f_fd_name] = $f_fd_value;
        //if( strstr("f_table/f_b_empno/f_db/f_file_path/f_b_date/f_title/f_type/f_content/f_s_num/f_cnt",$f_fd_name)!=NULL ){
        if( strstr("f_db/f_table/f_b_empno/f_b_date/f_title/f_content/f_s_num",$f_fd_name)!=NULL ){
          if( $f_var[$f_fd_name]=='' ){
            $fd_stop = 'Y';
            $inLog .= "E..�y����: {$f_var['f_s_num']}({$vb_date})..�ǤJ�Ѽ�, ���ŭȪ�: ".$f_fd_name."\n";
          }
        }
      }
    }
    if( 'Y'==$fd_stop ){
      fwrite($fp, $inLog);
      fclose($fp);
      echo "<script language='JavaScript'>";
      echo "alert('�`�N!! �qñ�ѼƸ�Ʀ��~!!');";
      echo "history.back();";
      echo "</script>";
      $fd_stop = 'Y'; //�O�_�i��ñ��
    }
    else{
      $count_table= substr_count($f_var['f_table'],'.');
      $ex_table   = explode('.',$f_var['f_table']);
      $fd_table   = iif($count_table==0,$f_var['f_table'],$ex_table[1]);

      $fd_b_empno      = $f_var['f_b_empno'];                                          //���ɪ̭��s
      $fd_sleip2flw001 = 'SL-EIP2FLW';
      $fd_sleip2flw002 = '';
      $fd_sleip2flw003 = str_replace("\"","",$f_var['f_db']);                          //DB
      $fd_sleip2flw004 = str_replace("\"","",$fd_table);                    //table
      $fd_sleip2flw005 = str_replace("\"","",$f_var['f_file_path']);                   //������|
      $fd_sleip2flw006 = date('Y/m/d',strtotime($f_var['f_b_date']));                  //�����
      $fd_sleip2flw007 = str_replace("\"","",$f_var['f_title']);                       //�D��
      $fd_sleip2flw008 = str_replace("\"","",$f_var['f_type']);                        //���O
      $fd_sleip2flw009 = str_replace("\"","",str_replace("'","",$f_var['f_content'])); //���e
      $fd_sleip2flw010 = str_replace("\"","",$f_var['f_s_num']);                       //s_num
      $fd_sleip2flw011 = str_replace("\"","",$f_var['f_cnt']);                         //���� //upd by mimi 2011.06.13 �W�[���ɦ���
      $fd_cnt=1;
      $ins_key = '';
      $ins_val = '';
      for($i=0;$i<10;$i++){ //upd by mimi 2011.07.01 �W�[��10�Ӫ���
        $fd_file = "f_file".($fd_cnt+$i);
        if($f_var[$fd_file] <> ''){
          //$remote_file[]= $f_var[$fd_file];         // remote���ɮצW��
          $fd_num = str_pad(($fd_cnt+$i),3,'0',STR_PAD_LEFT);
          $ins_key .= " file{$fd_num}, ";
          $ins_val .= " '{$f_var[$fd_file]}', ";
        }
      }

      sl_open($eipdb);
      $sql = "insert into docs.mid2flw
                          (sleip2flw001,sleip2flw002,sleip2flw003,sleip2flw004,sleip2flw005,
                           sleip2flw006,sleip2flw007,sleip2flw008,sleip2flw009,sleip2flw010,sleip2flw011, {$ins_key}
                           b_empno,b_dept_id,b_proc,b_date,fromip)
                   values ('{$fd_sleip2flw001}','{$fd_sleip2flw002}','{$fd_sleip2flw003}','{$fd_sleip2flw004}','{$fd_sleip2flw005}',
                           '{$fd_sleip2flw006}','{$fd_sleip2flw007}','{$fd_sleip2flw008}','{$fd_sleip2flw009}','{$fd_sleip2flw010}','{$fd_sleip2flw011}', {$ins_val}
                           '{$fd_b_empno}','{$vb_dept_id}','{$vproc}','{$vb_date}','{$vfromip}')
             ";
      if(!mysql_query($sql)) {
        sl_errmsg("����x�s����!!{$sql}");
        exit;
      }else{
        $fk_snum = mysql_insert_id();
        if( !ftp_connect($mftp_server) ){
          $sql_upd = " update docs.mid2flw
                       set    t_result = 'C',
                              t_date = '{$vb_date}',
                              t_proc = '{$vproc}'
                       where  s_num = '{$fk_snum}'
                     ";
          mysql_query($sql_upd);
          echo "<script language='JavaScript'>";
          echo "alert('�q�lñ�֥D��FLW�s�u���`, �Э��s�ϥ�!!!!');";
          echo "history.back();";
          echo "</script>";
          $fd_stop = 'Y'; //�O�_�i��ñ��
        }
        echo $fd_stop."\n";
        if( 'N'==$fd_stop ){
        
        
          $f_var['ewbUrl'] = "http://eip.slc.com.tw/~sl/t_mid2flw_curl.php";
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $f_var['ewbUrl']);
          curl_setopt($ch, CURLOPT_POST, 1 );
          curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(
            array("f_s_num" => $fk_snum)
            ));    
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // ���Lhost����
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //�W��ssl���Ү��ˬd�C
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //output�~��^�Ǧ^��
          curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
          $output = curl_exec($ch);
          //echo "T_EWB: ".$output;
          curl_close($ch);
           
          //$t_path = "/home/sl/public_html/t_mid2flw.php {$fk_snum} &";
          //$t_popen = popen($t_path,"r");
          //if($t_popen){
          //  while (!feof($t_popen)) {      //?�q�D�������o?��
          //    $out = fgets($t_popen, 4096);
          //    //echo $out;         //���L�X?
          //  }
          //}
          //pclose($t_popen);
          
        }

      }
    }
  }



  // **************************************************************************
  //  ��ƦW��: sl_show_sname()
  //  ��ƥ\��: ���Oid����������W
  //  �ϥΤ覡: sl_show_sname($dept_id)
  //  �{���]�p: Job
  //  �]�p���: 2015.06.02
  // **************************************************************************
  function sl_show_sname($dept_id) {
    sl_open('sl');
    $query = "select sname
                from dept
               where sap_dept_id = '{$dept_id}'
             ";
    //echo '<pre>'.$query_es.'</pre>';
    $result = mysql_query($query);
    $row    = mysql_fetch_array($result);
    $dept_sname = $row['sname'];

    return $dept_sname;
  }
  // **************************************************************************
  //  ��ƦW��: sl_resaj()
  //  ��ƥ\��: �s���Z�O���Ӱ}�C(2015.06.09 �g�z���n�g��)
  //  �ϥΤ覡: sl_resaj($class_id)
  //  �{���]�p: Job
  //  �]�p���: 2015.06.10
  // **************************************************************************
  function sl_resaj($class_id) {
    $f_var['resaj'] = array('resaj001'  => array('A'        ,'B'            ,'C'            ,'D'                      ,'E'          ,'F'            ,'G'            ,'H'            ,'I'            ,'J'            ,'K'            ,'L'     ),
                            'resaj003'  => array('08:30'        ,'08:00'        ,'06:00'        ,'15:00'                  ,'13:00'      ,'06:30'        ,'13:00'        ,'10:00'        ,'23:00'  ,'07:00'      ,'03:00'        ,'09:00' ),
                            'resaj004'  => array('17:30'        ,'17:00'        ,'15:00'        ,'23:59'                  ,'22:00'      ,'15:30'        ,'21:30'        ,'19:00'        ,'08:00'  ,'16:00'      ,'12:00'        ,'18:00' ),
                            'resaj005'  => array('8'        ,'8'            ,'8'            ,'7.98333333333333' ,'8'        ,'8'            ,'8'            ,'8'        ,'8'        ,'8'            ,'8'            ,'8'     ),
                            'resaj006'  => array('12:00'        ,'12:00'        ,'12:00'        ,'18:00'                  ,'17:00'      ,'12:00'        ,'17:00'        ,'12:00'        ,'03:00'  ,'12:00'      ,'07:00'        ,'12:00' ),
                            'resaj007'  => array('13:00'        ,'13:00'        ,'13:00'        ,'19:00'                  ,'18:00'      ,'13:00'        ,'17:30'        ,'13:00'        ,'04:00'  ,'13:00'      ,'08:00'        ,'13:00' )
                           );

    $class_key = array_search($class_id,$f_var['resaj']['resaj001']);

    $f_var['f_resaj']['wtime_s']   = $f_var['resaj']['resaj003'][$class_key];
    $f_var['f_resaj']['wtime_e']   = $f_var['resaj']['resaj004'][$class_key];
    $f_var['f_resaj']['wtime_cnt'] = $f_var['resaj']['resaj005'][$class_key];
    $f_var['f_resaj']['rtime_s']   = $f_var['resaj']['resaj006'][$class_key];
    $f_var['f_resaj']['rtime_e']   = $f_var['resaj']['resaj007'][$class_key];

    return($f_var["f_resaj"]);
  }
  // **************************************************************************
  //  ��ƦW��: u_ERP_MA083_SAP_ZTERM()
  //  ��ƥ\��: �w�� ERP ���ڱ���h���X SAP �����ڱ��� erp TABLE-->COPMA
  //  �ϥΤ覡: u_ERP_MA083_SAP_ZTERM($MA041 , $MA083)
  //  �{���]�p: ����
  //  �]�p���: 2013.08.19
  // **************************************************************************
  function u_ERP_MA083_SAP_ZTERM($MA083) { //��MA041 ���ڤ覡 ���� --> 02.�䲼 �A���b�t�~�W�[if�P�_�O�_��MA041-->02 ���P�_�C
      $MA083 = (substr($MA083,1,2)=='31')?substr($MA083,0,1).'30'.substr($MA083,3,3):$MA083; //�]�ȱi�Ʋz�i���A�ĤG~�T�X�u�n�O31���A���אּ30 ��:131015 --> 130015�C
      $sap_ZTERM = $MA083;
      $f_var["ygs0_v4_2_2"]    = "/home/sl/public_html/ygsonatr_v4_2_2.itm"; //"./ygsonatr_v4_2_2.itm";    // �I�ڳ��� �s���䲼����
      list($f_var['ygs0_v4_2_2_value']    ,$f_var['ygs0_v4_2_2_show']    ,$f_var['ygs0_v4_2_2_qty'])   = u_add_select2($f_var["ygs0_v4_2_2"]);   // ���ڳ�_�䲼��J �}�C
      $f_var['ygs0_v4_2_2'] = array('value'=> $f_var['ygs0_v4_2_2_value']  ,'show'=> $f_var['ygs0_v4_2_2_show'] ,'qty'=> $f_var['ygs0_v4_2_2']);
      for($i=0 ; $i<count($f_var['ygs0_v4_2_2']['show']) ; $i++){
        $f_var['ygs0_v4_2_2_item'] = $f_var['ygs0_v4_2_2']['show'][$i] ;
        $f_var['ygs0_v4_2_2_MEINS'][$f_var['ygs0_v4_2_2_item']] = $f_var['ygs0_v4_2_2']['value'][$i] ;
      }
        //echo $f_var['ygs0_v4_2_2_MEINS'][$MA083];
        //exit;
        $sap_ZTERM = (Trim($f_var['ygs0_v4_2_2_MEINS'][$MA083])=='')?'':Trim($f_var['ygs0_v4_2_2_MEINS'][$MA083]);
        //���������A�p�G��������A�N���n�i�j��A���]�ȥL�̼W�[����ɡA���M�N���g�J�A
        if($sap_ZTERM==''){ //�p�G�}�C��藍���ơA�~�i�J�j��h�@���@���P�_�C
          for($i=0 ; $i<count($f_var['ygs0_v4_2_2']['show']) ; $i++){
            $j = $i + 1 ;
            if($f_var['ygs0_v4_2_2']['show'][$j] > $MA083 and $f_var['ygs0_v4_2_2']['show'][$i] < $MA083 ){
              $sap_ZTERM = $f_var['ygs0_v4_2_2']['value'][$j];
            }
          }
        }
    return  $sap_ZTERM   ;
  }
  // **************************************************************************
  //  ��ƦW��: u_ERP_MA083_SAP_ZTERM_V2()
  //  ��ƥ\��: �w�� ERP ���ڱ���h���X SAP �����ڱ��� erp TABLE-->COPMA //2013/11/14 ���� �j��P�_���~�A�ݭn�A�ק�~~�C
  //  �ϥΤ覡: u_ERP_MA083_SAP_ZTERM_V2( $MA083)
  //  �{���]�p: ����
  //  �]�p���: 2013.08.19
  // **************************************************************************
  function u_ERP_MA083_SAP_ZTERM_V2($MA083) { //��MA041 ���ڤ覡 ���� --> 2-�q��         �A���b�t�~�W�[if�P�_�O�_��MA041-->02 ���P�_�C
      $MA083 = (substr($MA083,1,2)=='31')?substr($MA083,0,1).'30'.substr($MA083,3,3):$MA083; //�]�ȱi�Ʋz�i���A�ĤG~�T�X�u�n�O31���A���אּ30 ��:131015 --> 130015�C
      $MA083_v2 = substr($MA083,3,3); //�]�ȱi�Ʋz�i���A�q�ת��u�n����3�X
      $sap_ZTERM = $MA083;
      $f_var["ygs0_v4_2"]    = "/home/sl/public_html/ygsonatr_v4_2.itm"; //"./ygsonatr_v4_2.itm";    // ���ڳ���
      list($f_var['ygs0_v4_2_value']    ,$f_var['ygs0_v4_2_show']    ,$f_var['ygs0_v4_2_qty'])   = u_add_select2($f_var["ygs0_v4_2"]);   // ���ڳ���J �}�C
      $f_var['ygs0_v4_2'] = array('value'=> $f_var['ygs0_v4_2_value']  ,'show'=> $f_var['ygs0_v4_2_show'] ,'qty'=> $f_var['ygs0_v4_2']);
      for($i=1 ; $i<count($f_var['ygs0_v4_2']['show']) ; $i++){
        $f_var['ygs0_2_item'] = $f_var['ygs0_v4_2']['show'][$i] ;
        $f_var['ygs0_2_MEINS'][$f_var['ygs0_2_item']] = $f_var['ygs0_v4_2']['value'][$i] ;
      }
        $sap_ZTERM = (Trim($f_var['ygs0_2_MEINS'][$MA083])=='')?'':Trim($f_var['ygs0_2_MEINS'][$MA083]);
        if($sap_ZTERM==''){ //�p�G�}�C��藍���ơA�~�i�J�j��h�@���@���P�_�C
          for($i=0 ; $i<count($f_var['ygs0_v4_2']['show']) ; $i++){
            $j = $i + 1 ;
            // echo $MA083_v2 .'<---�T�X���Ȧ�q��'.'</br>';
            // echo substr($f_var['ygs0_v4_2']['show'][$j],3,3) .'<---�T�X�@___'.substr($f_var['ygs0_v4_2']['show'][$i],3,3).'<--�T�X�G'.'</br>';
            if(substr($f_var['ygs0_v4_2']['show'][$j],3,3) == $MA083_v2){ //�q�ת��u�n����3�X �p�G��T�X�@�ˡA�N���s���ܼƭȡC
              $sap_ZTERM_v2 = $f_var['ygs0_v4_2']['value'][$j];
            }elseif( substr($f_var['ygs0_v4_2']['show'][$j],3,3) >= $MA083_v2 and substr($f_var['ygs0_v4_2']['show'][$i],3,3) <= $MA083_v2 ){
              // if( substr($f_var['ygs0_v4_2']['show'][$j],3,3) >= $MA083_v2){
                $sap_ZTERM = $f_var['ygs0_v4_2']['value'][$j];
              }
          }
          $sap_ZTERM = ($sap_ZTERM_v2=='')?$sap_ZTERM:$sap_ZTERM_v2;   //�p�G sap_ZTERM_v2 ���ȡA�N�� sap_ZTERM_v2 ���ȡC
        }
    return  $sap_ZTERM   ;
  }
// **************************************************************************
//  ��ƦW��: u_werks_sap()
//  ��ƥ\��: �ഫ���O�W��
//  �ϥΤ覡: u_werks_sap($pos)
//            $pos => �|�X�N�� ex: 2201 -> �s�w��  1010 -> �`���q
//  �^�ǵ��G: $sap => sap�N�X
//  �{���]�p: �Ϊ�
//  �]�p���: 2013.04.23
// **************************************************************************
function u_werks_sap($pos){
  $oracle_server = sl_openoci("PRD");
  if (!$oracle_server) {
    die("�L�k�s���ioracle�j!!�Ь��t�κ޲z�� \n");
  }
  $sap = '';
  $sap_sel = "select WERKS_POS, WERKS_SAP
              from   SAPE68.YGSSTN
              where  WERKS_POS LIKE '{$pos}'
                         ";
        //echo "<pre>".$sap_sel."</pre>";
  $stid = oci_parse($oracle_server,$sap_sel);
  $result  = oci_execute($stid);
  if($result){
    while ($ar =  oci_fetch_array($stid, OCI_ASSOC)) {
      $sap = trim($ar['WERKS_SAP']);
    }
  }
  return $sap;
}
  // **************************************************************************
  //  ��ƦW��: u_set_y3()
  //  ��ƥ\��: �C�X�~�u�`�� �P �ǲ�����
  //  �ϥΤ覡: u_set_y3($f_var)
  //  �{���]�p: �F��
  //  �]�p���: 2013.04.09
  // **************************************************************************
  function u_set_y3(&$f_var) {
    //�}�l�ǲ�������--------------------------------------------------------------------
    $ar_sap['y0003']['MANDT']   = $f_var['f_MANDT'];
    $ar_sap['y0003']['BUKRS']   = $f_var['f_BUKRS'];
    $ar_sap['y0003']['GJAHR']   = substr($f_var['f_yymm'],0,4);
    $ar_sap['y0003']['MONAT']   = substr($f_var['f_yymm'],4,2);
    $ar_sap['y0003']['CLASS']   = $f_var['f_CLASS'];
    $ar_sap['y0003']['VOUCHER'] = $f_var['f_VOUCHER']; //001 -> �~�u�ǲ�
    $ar_sap['y0003']['DADAT']   = $f_var['f_DADAT'];
    $ar_sap['y0003']['BELNR_F'] = $f_var['f_BELNR_F'];
    $ar_sap['y0003']['BELNR_A'] = $f_var['f_BELNR_A'];
    $f_var['fv_y0003'] = implode(",",$ar_sap['y0003']);
    //ECHO "��init_fv_y0003: ".$f_var['fv_y0003'];
    $f_var['y0003'][$f_var['fv_y0003']]['MANDT']    = $f_var['f_MANDT'];//�Τ��
    $f_var['y0003'][$f_var['fv_y0003']]['BUKRS']    = $f_var['f_BUKRS'];//���q�N�X
    $f_var['y0003'][$f_var['fv_y0003']]['GJAHR']    = substr($f_var['f_yymm'],0,4);//�|�p�~��
    $f_var['y0003'][$f_var['fv_y0003']]['MONAT']    = substr($f_var['f_yymm'],4,2);//�|�p����
    $f_var['y0003'][$f_var['fv_y0003']]['CLASS']    = $f_var['f_CLASS']; //�ǲ����O
    $f_var['y0003'][$f_var['fv_y0003']]['VOUCHER']  = $f_var['f_VOUCHER']; //001 -> �~�u�ǲ�//�ǲ�ID
    $f_var['y0003'][$f_var['fv_y0003']]['DADAT']    = $f_var['f_DADAT'];//��Ƥ��
    $f_var['y0003'][$f_var['fv_y0003']]['BELNR_F']  = $f_var['f_BELNR_F'];//�e�ݤ�󸹽X
    $f_var['y0003'][$f_var['fv_y0003']]['BELNR_A']  = $f_var['f_BELNR_A'];//�|�p��󸹽X
    $f_var['y0003'][$f_var['fv_y0003']]['BELNR_R']  = $f_var['f_BELNR_R']; //�j��:�|�p��󸹽X
    $f_var['y0003'][$f_var['fv_y0003']]['BLART']    = $f_var['f_BLART']; //�������
    $f_var['y0003'][$f_var['fv_y0003']]['BUDAT']    = $f_var['f_BUDAT']; //��󤤪��L�b���
    $f_var['y0003'][$f_var['fv_y0003']]['CONDAT']   = $f_var['f_CONDAT']; //�T�{���
    $f_var['y0003'][$f_var['fv_y0003']]['CONTIME']  = $f_var['f_CONTIME']; //�T�{�ɶ�
    $f_var['y0003'][$f_var['fv_y0003']]['CONSTAFF'] = $f_var['f_CONSTAFF']; //�T�{�H���s
    $f_var['y0003'][$f_var['fv_y0003']]['CONSTNAME']= $f_var['f_CONSTNAME']; //�T�{�H�m�W
    $f_var['y0003'][$f_var['fv_y0003']]['TVDAT']    = $f_var['f_TVDAT']; //��ǲ����
    $f_var['y0003'][$f_var['fv_y0003']]['TVTIME']   = $f_var['f_TVTIME']; //��ǲ��ɶ�
    $f_var['y0003'][$f_var['fv_y0003']]['TVSTAFF']  = $f_var['f_TVSTAFF']; //��ǲ��H�����s
    $f_var['y0003'][$f_var['fv_y0003']]['TVSTNAME'] = $f_var['f_TVSTNAME']; //��ǲ��H���m�W
    $f_var['y0003'][$f_var['fv_y0003']]['RTVDAT']   = $f_var['f_RTVDAT']; //�j��:��ǲ����
    $f_var['y0003'][$f_var['fv_y0003']]['RTVTIME']  = $f_var['f_RTVTIME']; //�j��:��ǲ��ɶ�
    $f_var['y0003'][$f_var['fv_y0003']]['RTVSTAFF'] = $f_var['f_RTVSTAFF']; //�j��:��ǲ��H�����s
    $f_var['y0003'][$f_var['fv_y0003']]['RTVSTNAME']= $f_var['f_RTVSTNAME']; //�j��:��ǲ��H���m�W
    $f_var['y0003'][$f_var['fv_y0003']]['ERR_TEXT'] = $f_var['f_ERR_TEXT']; //MESSAGE
    return;
  }
  // **************************************************************************
  //  ��ƦW��: u_set_y4()
  //  ��ƥ\��: �C�X�~�u�`�� �P �ǲ�����
  //  �ϥΤ覡: u_set_y4($f_var)
  //  �{���]�p: �F��
  //  �]�p���: 2013.04.09
  // **************************************************************************
  function u_set_y4(&$f_var) {
    //***************************************************************************//
    //  �iYFIGL0004�j �s�J SAP �t��
    //***************************************************************************//
    //MANDT, BUKRS,   GJAHR,   MONAT,   CLASS,   VOUCHER,DADAT,   BELNR_F,     BUZEI,                   BELNR_A
    //�Τ��,���q�N�X,�|�p�~��,�|�p����,�ǲ����O,�ǲ�ID, ��Ƥ��,�e�ݤ�󸹽X,�|�p��󤤪����Ӷ��ظ��X,�|�p��󸹽X
    $bschl = ('S'==$f_var['SHKZG'])?'40':'50';
    $ar_sap['y0004']['MANDT']   = $f_var['f_MANDT'];
    $ar_sap['y0004']['BUKRS']   = $f_var['f_BUKRS'];
    $ar_sap['y0004']['GJAHR']   = substr($f_var['f_yymm'],0,4);
    $ar_sap['y0004']['MONAT']   = substr($f_var['f_yymm'],4,2);
    $ar_sap['y0004']['CLASS']   = $f_var['f_CLASS'];
    $ar_sap['y0004']['VOUCHER'] = $f_var['f_VOUCHER']; //001 -> �~�u�ǲ�
    $ar_sap['y0004']['DADAT']   = $f_var['f_DADAT'];
    $ar_sap['y0004']['BELNR_F'] = $f_var['f_BELNR_F'];
    $ar_sap['y0004']['BUZEI']   = $f_var['f_BUZEI'];
    $ar_sap['y0004']['BELNR_A'] = $f_var['f_BELNR_A'];
    $f_var['fv_y0004'] = implode(",",$ar_sap['y0004']);
    $f_var['y0004'][$f_var['fv_y0004']]['MANDT']    = $f_var['f_MANDT'];//�Τ��
    $f_var['y0004'][$f_var['fv_y0004']]['BUKRS']    = $f_var['f_BUKRS'];//���q�N�X
    $f_var['y0004'][$f_var['fv_y0004']]['GJAHR']    = substr($f_var['f_yymm'],0,4);//�|�p�~��
    $f_var['y0004'][$f_var['fv_y0004']]['MONAT']    = substr($f_var['f_yymm'],4,2);//�|�p����
    $f_var['y0004'][$f_var['fv_y0004']]['CLASS']    = $f_var['f_CLASS'];//�ǲ����O
    $f_var['y0004'][$f_var['fv_y0004']]['VOUCHER']  = $f_var['f_VOUCHER']; //001 -> �~�u�ǲ�//�ǲ�ID
    $f_var['y0004'][$f_var['fv_y0004']]['DADAT']    = $f_var['f_DADAT'];//��Ƥ��
    $f_var['y0004'][$f_var['fv_y0004']]['BELNR_F']  = $f_var['f_BELNR_F'];//�e�ݤ�󸹽X
    $f_var['y0004'][$f_var['fv_y0004']]['BUZEI']    = $f_var['f_BUZEI']; //�|�p��󤤪����Ӷ��ظ��X
    $f_var['y0004'][$f_var['fv_y0004']]['BELNR_A']  = $f_var['f_BELNR_A'];//�|�p��󸹽X
    $f_var['y0004'][$f_var['fv_y0004']]['BELNR_R']  = $f_var['f_BELNR_R']; //�j��:�|�p��󸹽X
    $f_var['y0004'][$f_var['fv_y0004']]['SHKZG']    = $f_var['f_SHKZG']; //��S/�UH����ܽX
    $f_var['y0004'][$f_var['fv_y0004']]['BUDAT']    = $f_var['f_BUDAT']; //��󤤪��L�b���
    $f_var['y0004'][$f_var['fv_y0004']]['BSCHL']    = $f_var['f_BSCHL']; //�L�b�X
    $f_var['y0004'][$f_var['fv_y0004']]['HKONT']    = $f_var['f_HKONT']; //�`�b���
    $f_var['y0004'][$f_var['fv_y0004']]['UMSKZ']    = $f_var['f_UMSKZ']; //�S���`�b���ܽX
    $f_var['y0004'][$f_var['fv_y0004']]['KUNNR']    = $f_var['f_KUNNR']; //�Ȥ�s�� 1
    $f_var['y0004'][$f_var['fv_y0004']]['LIFNR']    = $f_var['f_LIFNR']; //�����өζU�誺�b��
    $f_var['y0004'][$f_var['fv_y0004']]['MWSKZ']    = $f_var['f_MWSKZ']; //��~�|�N�X
    $f_var['y0004'][$f_var['fv_y0004']]['GL']       = $f_var['f_GL']; //GL FLAG
    $f_var['y0004'][$f_var['fv_y0004']]['AP']       = $f_var['f_AP']; //AP FLAG
    $f_var['y0004'][$f_var['fv_y0004']]['AR']       = $f_var['f_AR']; //AR FLAG
    $f_var['y0004'][$f_var['fv_y0004']]['TX']       = $f_var['f_TX']; //TX FLAG
    $f_var['y0004'][$f_var['fv_y0004']]['COPA']     = $f_var['f_COPA']; //COPA FLAG
    $f_var['y0004'][$f_var['fv_y0004']]['PA']       = $f_var['f_PA']; //PORTFOLIO FLAG
    $f_var['y0004'][$f_var['fv_y0004']]['KOSTL']    = $f_var['f_KOSTL']; //��������
    $f_var['y0004'][$f_var['fv_y0004']]['GSBER']    = $f_var['f_GSBER']; //�~�Ƚd��  ADD BY �Ϊ� 2015.04.02 �d�Ҫ�����/�q�O�ݭn�o�����
    $f_var['y0004'][$f_var['fv_y0004']]['WAERS']    = "TWD"; //���O�X
    $f_var['y0004'][$f_var['fv_y0004']]['WRBTR']    = $f_var['f_WRBTR']/100; //���f�����B upd by �h�Z 2014.05.06 ���B�ݰ�100 call rfc��~�|���T
    $f_var['y0004'][$f_var['fv_y0004']]['LONG_TEXT']= $f_var['f_LONG_TEXT']; //����
    $f_var['y0004'][$f_var['fv_y0004']]['SGTXT']    = $f_var['f_SGTXT']; //���ؤ���
    $f_var['y0004'][$f_var['fv_y0004']]['ZUONR']    = $f_var['f_ZUONR']; //�������X
    $f_var['y0004'][$f_var['fv_y0004']]['XREF3']    = $f_var['f_XREF3']; //���Ӷ��ذѦҽX
    $f_var['y0004'][$f_var['fv_y0004']]['FKBER']    = $f_var['f_FKBER']; //�\��d�� add by �p�� 20150610 �֩e�|�ϥ�
      ECHO $f_var['f_BUKRS'].'-'.$f_var['f_FKBER'].'+++'.'<BR>';
    return;
  }
  // **************************************************************************
  //  ��ƦW��: u_set_y7()
  //  ��ƥ\��: �g�J�I�ڽХܳ�]�w
  //  �ϥΤ覡: u_set_y7($f_var)
  //  �{���]�p: �h�Z
  //  �]�p���: 2013.04.12
  // **************************************************************************
  function u_set_y7(&$f_var) {
    //***************************************************************************//
    //  �iYFIGL0007�j �s�J SAP �t��
    //***************************************************************************//
    //MANDT, BUKRS,   GJAHR,   MONAT,   CLASS,   VOUCHER,
    //�Τ��,���q�N�X,�|�p�~��,�|�p����,�ǲ����O,�ǲ�ID ,
    $ar_sap['y0007']['MANDT']   = $f_var['f_MANDT'];
    $ar_sap['y0007']['BUKRS']   = $f_var['f_BUKRS'];
    $ar_sap['y0007']['GJAHR']   = substr($f_var['f_yymm'],0,4);
    $ar_sap['y0007']['MONAT']   = substr($f_var['f_yymm'],4,2);
    $ar_sap['y0007']['CLASS']   = $f_var['f_CLASS'];
    $ar_sap['y0007']['VOUCHER'] = $f_var['f_VOUCHER'];
    $ar_sap['y0007']['WTNOTE']  = $f_var['f_WTNOTE'];
    $ar_sap['y0007']['WTNO']    = $f_var['f_WTNO'];
    $f_var['fv_y0007'] = implode(",",$ar_sap['y0007']);
    $f_var['y0007'][$f_var['fv_y0007']]['MANDT']    = $f_var['f_MANDT'];//�Τ��
    $f_var['y0007'][$f_var['fv_y0007']]['BUKRS']    = $f_var['f_BUKRS'];//���q�N�X
    $f_var['y0007'][$f_var['fv_y0007']]['GJAHR']    = substr($f_var['f_yymm'],0,4);//�|�p�~��
    $f_var['y0007'][$f_var['fv_y0007']]['MONAT']    = substr($f_var['f_yymm'],4,2);//�|�p����
    $f_var['y0007'][$f_var['fv_y0007']]['CLASS']    = $f_var['f_CLASS'];//�ǲ����O
    $f_var['y0007'][$f_var['fv_y0007']]['VOUCHER']  = $f_var['f_VOUCHER'];//�ǲ�ID
    $f_var['y0007'][$f_var['fv_y0007']]['WTNOTE']   = $f_var['f_WTNOTE']; //���q�O���O
    $f_var['y0007'][$f_var['fv_y0007']]['WTNO']     = $f_var['f_WTNO'];//��/�q��
    $f_var['y0007'][$f_var['fv_y0007']]['BLNO']     = $f_var['f_BLNO']; //�дڳ渹
    $f_var['y0007'][$f_var['fv_y0007']]['LIFNR']    = $f_var['f_LIFNR']; //�����өζU�誺�b��
    $f_var['y0007'][$f_var['fv_y0007']]['NOTE_BANK']= $f_var['f_NOTE_BANK']; //���O�O�_�O�Ȧ榩ú���
          $f_var['y0007'][$f_var['fv_y0007']]['KOSTL']    = $f_var['f_KOSTL']; //��������
    $f_var['y0007'][$f_var['fv_y0007']]['WAERS']    = "TWD"; //���O�X
          $f_var['y0007'][$f_var['fv_y0007']]['BUPLA']    = $f_var['f_BUPLA']; //��~�B
          $f_var['y0007'][$f_var['fv_y0007']]['GSBER']    = $f_var['f_GSBER']; //�~�Ƚd��
          $f_var['y0007'][$f_var['fv_y0007']]['MWSKZ']    = $f_var['f_MWSKZ']; //��~�|�N�X
          $f_var['y0007'][$f_var['fv_y0007']]['HKONT_D']  = $f_var['f_HKONT_D']; //�`�b���
    $f_var['y0007'][$f_var['fv_y0007']]['AMT_FEE']  = $f_var['f_AMT_FEE']/100; //�O�Ϊ��B add by �h�Z 2014.05.06 �ݰ�100 call rfc����B�~�|���`
    $f_var['y0007'][$f_var['fv_y0007']]['AMT_TAX']  = $f_var['f_AMT_TAX']/100; //�i�����B add by �h�Z 2014.05.06 �ݰ�100 call rfc����B�~�|���`
    $f_var['y0007'][$f_var['fv_y0007']]['AMT_AP']   = $f_var['f_AMT_AP']/100; //���I���B  add by �h�Z 2014.05.06 �ݰ�100 call rfc����B�~�|���`
    $f_var['y0007'][$f_var['fv_y0007']]['HKONT_BANK'] = $f_var['f_HKONT_BANK']; //�`�b���
    $f_var['y0007'][$f_var['fv_y0007']]['PAYNO']    = $f_var['f_PAYNO']; //�I�ڽХܳ渹
    $f_var['y0007'][$f_var['fv_y0007']]['BELNR_A']  = $f_var['f_BELNR_A'];//�|�p��󸹽X
    $f_var['y0007'][$f_var['fv_y0007']]['BELNR_F']  = $f_var['f_BELNR_F']; //�]�Ȥ�󸹽X
    $f_var['y0007'][$f_var['fv_y0007']]['SGTXT']    = $f_var['f_SGTXT'];//���ؤ���
    $f_var['y0007'][$f_var['fv_y0007']]['ZUONR']    = $f_var['f_ZUONR']; //�������X
    return;
  }
  // **************************************************************************
  //  ��ƦW��: u_set_y8()
  //  ��ƥ\��: �g�J���O�ǲ�����-COPA
  //  �ϥΤ覡: u_set_y8($f_var)
  //  �{���]�p: �h�Z
  //  �]�p���: 2013.04.12
  // **************************************************************************
  function u_set_y8(&$f_var) {
    //***************************************************************************//
    //  �iYFIGL0008�j �s�J SAP �t��
    //***************************************************************************//
    //MANDT, BUKRS,   GJAHR,   MONAT,   CLASS,   VOUCHER,
    //�Τ��,���q�N�X,�|�p�~��,�|�p����,�ǲ����O,�ǲ�ID ,
    $ar_sap['y0008']['MANDT']   = $f_var['f_MANDT'];
    $ar_sap['y0008']['BUKRS']   = $f_var['f_BUKRS'];
    $ar_sap['y0008']['GJAHR']   = substr($f_var['f_yymm'],0,4);
    $ar_sap['y0008']['MONAT']   = substr($f_var['f_yymm'],4,2);
    $ar_sap['y0008']['CLASS']   = $f_var['f_CLASS'];
    $ar_sap['y0008']['VOUCHER'] = $f_var['f_VOUCHER'];
    $ar_sap['y0008']['DADAT']   = $f_var['f_DADAT'];
    $ar_sap['y0008']['BELNR_F'] = $f_var['f_BELNR_F'];
    $ar_sap['y0008']['BUZEI']   = $f_var['f_BUZEI'];
    $f_var['fv_y0008'] = implode(",",$ar_sap['y0008']);
    $f_var['y0008'][$f_var['fv_y0008']]['MANDT']   = $f_var['f_MANDT'];//�Τ��
    $f_var['y0008'][$f_var['fv_y0008']]['BUKRS']   = $f_var['f_BUKRS'];//���q�N�X
    $f_var['y0008'][$f_var['fv_y0008']]['GJAHR']   = substr($f_var['f_yymm'],0,4);//�|�p�~��
    $f_var['y0008'][$f_var['fv_y0008']]['MONAT']   = substr($f_var['f_yymm'],4,2);//�|�p����
    $f_var['y0008'][$f_var['fv_y0008']]['CLASS']   = $f_var['f_CLASS'];//�ǲ����O
    $f_var['y0008'][$f_var['fv_y0008']]['VOUCHER'] = $f_var['f_VOUCHER'];//�ǲ�ID
    $f_var['y0008'][$f_var['fv_y0008']]['DADAT']   = $f_var['f_DADAT']; //��Ƥ��
    $f_var['y0008'][$f_var['fv_y0008']]['BELNR_F'] = $f_var['f_BELNR_F']; //�e�ݤ�󸹽X
    $f_var['y0008'][$f_var['fv_y0008']]['BUZEI']   = $f_var['f_BUZEI']; //�|�p��󤤪����Ӷ��ظ��X
    //$f_var['y0008'][$f_var['fv_y0008']]['KOSTL']   = $f_var['f_KOSTL']; //��������
    $f_var['y0008'][$f_var['fv_y0008']]['VKORG']   = $f_var['f_VKORG'];//�P���´
    $f_var['y0008'][$f_var['fv_y0008']]['VERSI']   = $f_var['f_VERSI']; //�p������(CO-PA)
    $f_var['y0008'][$f_var['fv_y0008']]['WAERS']   = "TWD"; //���O�X
    $f_var['y0008'][$f_var['fv_y0008']]['FRWAE']   = "TWD"; //���O�X
    $f_var['y0008'][$f_var['fv_y0008']]['VRGAR']   = $f_var['f_VRGAR']; //�O������
    $f_var['y0008'][$f_var['fv_y0008']]['WERKS']   = $f_var['f_WERKS']; //�u�t
    $f_var['y0008'][$f_var['fv_y0008']]['PRCTR']   = $f_var['f_PRCTR']; //�Q����
    $f_var['y0008'][$f_var['fv_y0008']]['GSBER']   = $f_var['f_GSBER']; //�~�Ƚd��
    $f_var['y0008'][$f_var['fv_y0008']]['KMVKBU']  = $f_var['f_KMVKBU'];//�P����I
    $f_var['y0008'][$f_var['fv_y0008']]['KDGRP']   = $f_var['f_KDGRP']; //�Ȥ�s��
    $f_var['y0008'][$f_var['fv_y0008']]['SPART']   = $f_var['f_SPART']; //���~��
    $f_var['y0008'][$f_var['fv_y0008']]['VTWEG']   = $f_var['f_VTWEG']; //�t�P�q��
    //$f_var['y0008'][$f_var['fv_y0008']]['KUNNR']   = $f_var['f_KUNNR']; //�Ȥ�s��1
    $f_var['y0008'][$f_var['fv_y0008']]['KMVTNR']  = $f_var['f_KMVTNR']; //�P��H��
    //$f_var['y0008'][$f_var['fv_y0008']]['MATNR']   = $f_var['f_MATNR'];//���Ƹ��X
    //$f_var['y0008'][$f_var['fv_y0008']]['VBEL2']   = $f_var['f_VBEL2']; //�P����
    //$f_var['y0008'][$f_var['fv_y0008']]['POSN2']   = $f_var['f_POSN2']; //�P���󶵥�
    $f_var['y0008'][$f_var['fv_y0008']]['MATKL']   = $f_var['f_MATKL']; //�����s��
    //$f_var['y0008'][$f_var['fv_y0008']]['WW040']   = $f_var['f_WW040']; //���~�j��
    $f_var['y0008'][$f_var['fv_y0008']]['WW160']   = $f_var['f_WW160']; //�ڧO
    //$f_var['y0008'][$f_var['fv_y0008']]['WW100']   = $f_var['f_WW100'];//�էO
    $f_var['y0008'][$f_var['fv_y0008']]['WW110']   = $f_var['f_WW110']; //���O
    $f_var['y0008'][$f_var['fv_y0008']]['WW120']   = $f_var['f_WW120']; //����
    $f_var['y0008'][$f_var['fv_y0008']]['WW130']   = $f_var['f_WW130']; //�q��
    $f_var['y0008'][$f_var['fv_y0008']]['WW140']   = $f_var['f_WW140']; //�����ʽ�
    //$f_var['y0008'][$f_var['fv_y0008']]['VVQ10']   = $f_var['f_VVQ10']/100; //Q10-�P���-SOu  ADD BY �Ϊ� 2014.05.16
    //$f_var['y0008'][$f_var['fv_y0008']]['VVQ20']   = $f_var['f_VVQ20']/100; //Q20-�P���-STu
    //$f_var['y0008'][$f_var['fv_y0008']]['VVR10']   = $f_var['f_VVR10']/100; //R10-�P�f���J
    $f_var['y0008'][$f_var['fv_y0008']]['VVQ10_ME']   = $f_var['f_VVQ10_ME']; //��¦�p�q���
    $f_var['y0008'][$f_var['fv_y0008']]['VVQ20_ME']   = $f_var['f_VVQ20_ME']; //��¦�p�q���

    $f_var['y0008'][$f_var['fv_y0008']]['KOKRS']   = $f_var['f_KOKRS']; //��������d��
    $f_var['y0008'][$f_var['fv_y0008']]['ARTNR']   = $f_var['f_ARTNR']; //���~���X
    $f_var['y0008'][$f_var['fv_y0008']]['PERIO']   = $f_var['f_PERIO'];
    return;
  }
  // **************************************************************************
  //  ��ƦW��: u_set_y9()
  //  ��ƥ\��: �g�J���O�ǲ�����-COPA
  //  �ϥΤ覡: u_set_y9($f_var)
  //  �{���]�p: �h�Z
  //  �]�p���: 2013.04.12
  // **************************************************************************
  function u_set_y9(&$f_var) {
    //***************************************************************************//
    //  �iYFIGL0009�j �s�J SAP �t��
    //***************************************************************************//
    //MANDT, BUKRS,   GJAHR,   MONAT,   CLASS,   VOUCHER,
    //�Τ��,���q�N�X,�|�p�~��,�|�p����,�ǲ����O,�ǲ�ID ,
    $ar_sap['y0009']['MANDT']   = $f_var['f_MANDT'];
    $ar_sap['y0009']['BUKRS']   = $f_var['f_BUKRS'];
    $ar_sap['y0009']['GJAHR']   = substr($f_var['f_yymm'],0,4);
    $ar_sap['y0009']['MONAT']   = substr($f_var['f_yymm'],4,2);
    $ar_sap['y0009']['CLASS']   = $f_var['f_CLASS'];
    $ar_sap['y0009']['VOUCHER'] = $f_var['f_VOUCHER'];
    $ar_sap['y0009']['BELNR_F'] = $f_var['f_BELNR_F'];
    $ar_sap['y0009']['BUZEI']   = $f_var['f_BUZEI'];
    $ar_sap['y0009']['SEQNO']   = $f_var['f_SEQNO'];
    $f_var['fv_y0009'] = implode(",",$ar_sap['y0009']);
    $f_var['y0009'][$f_var['fv_y0009']]['MANDT']      = $f_var['f_MANDT'];//�Τ��
    $f_var['y0009'][$f_var['fv_y0009']]['BUKRS']      = $f_var['f_BUKRS'];//���q�N�X
    $f_var['y0009'][$f_var['fv_y0009']]['GJAHR']      = substr($f_var['f_yymm'],0,4);//�|�p�~��
    $f_var['y0009'][$f_var['fv_y0009']]['MONAT']      = substr($f_var['f_yymm'],4,2);//�|�p����
    $f_var['y0009'][$f_var['fv_y0009']]['CLASS']      = $f_var['f_CLASS'];//�ǲ����O
    $f_var['y0009'][$f_var['fv_y0009']]['VOUCHER']    = $f_var['f_VOUCHER'];//�ǲ�ID
    $f_var['y0009'][$f_var['fv_y0009']]['BELNR_F']    = $f_var['f_BELNR_F']; //�e�ݤ�󸹽X
    $f_var['y0009'][$f_var['fv_y0009']]['BUZEI']      = $f_var['f_BUZEI']; //�|�p��󤤪����Ӷ��ظ��X
    $f_var['y0009'][$f_var['fv_y0009']]['SEQNO']      = $f_var['f_SEQNO']; //�����и��X
    $f_var['y0009'][$f_var['fv_y0009']]['BSEG_BUPLA'] = $f_var['f_BSEG_BUPLA']; //��~�B
    $f_var['y0009'][$f_var['fv_y0009']]['GSBER']      = $f_var['f_GSBER']; //�~�Ƚd��
    $f_var['y0009'][$f_var['fv_y0009']]['GUIDT']      = $f_var['f_GUIDT']; //�o�����
    $f_var['y0009'][$f_var['fv_y0009']]['INVO_STECG'] = $f_var['f_INVO_STECG']; //�Τ@�s��
    $f_var['y0009'][$f_var['fv_y0009']]['INVO_NO']    = $f_var['f_INVO_NO']; //�o�����X
    $f_var['y0009'][$f_var['fv_y0009']]['BSCHL']      = $f_var['f_BSCHL']; //�L�b�X
    $f_var['y0009'][$f_var['fv_y0009']]['MWSKZ']      = $f_var['f_MWSKZ']; //��~�|�N�X
    $f_var['y0009'][$f_var['fv_y0009']]['NOTE_AMT']   = $f_var['f_NOTE_AMT']/100; //�ײ��B��(����f��)
    $f_var['y0009'][$f_var['fv_y0009']]['TAX_AMT']    = $f_var['f_TAX_AMT']/100; //���f���p���|����B
    $f_var['y0009'][$f_var['fv_y0009']]['FINSTAFF']   = $f_var['f_FINSTAFF']; //�]�ȤH��
    $f_var['y0009'][$f_var['fv_y0009']]['FINSTNAME']  = $f_var['f_FINSTNAME']; //�]�ȤH���m�W
    $f_var['y0009'][$f_var['fv_y0009']]['INDATE']     = $f_var['f_INDATE']; //��J���
    $f_var['y0009'][$f_var['fv_y0009']]['INTIME']     = $f_var['f_INTIME']; //��J�ɶ�
    $f_var['y0009'][$f_var['fv_y0009']]['LONG_TEXT']  = $f_var['f_LONG_TEXT']; //�����r
    $f_var['y0009'][$f_var['fv_y0009']]['ACTSTAFF']   = $f_var['f_ACTSTAFF']; //�B�z�|�p���s
    $f_var['y0009'][$f_var['fv_y0009']]['ACTSTNAME']  = $f_var['f_ACTSTNAME']; //�B�z�|�p�m�W
    $f_var['y0009'][$f_var['fv_y0009']]['PRDATE']     = $f_var['f_PRDATE']; //�B�z���
    $f_var['y0009'][$f_var['fv_y0009']]['PRTIME']     = $f_var['f_PRTIME']; //�B�z�ɶ�
    $f_var['y0009'][$f_var['fv_y0009']]['PRMESG']     = $f_var['f_PRMESG']; //�B�z�T��
    return;
  }
  // **************************************************************************
  //  ��ƦW��: sl_webflw()
  //  ��ƥ\��: ��webñ��
  //  �ϥΤ覡: sl_webflw($f_var)
  //  �{���]�p: �Ϊ�
  //  �]�p���: 2016.03.02
  // **************************************************************************
  function sl_webflw(&$f_var){
    sl_open('docs');
    $fd_db = $f_var['f_db'];
    $fd_tb = $f_var['f_tb'];
    $fd_th_num = $f_var['f_s_num'];
    $fd_class = $f_var['f_class'];
    $fd_subject = $f_var['f_subject'];
    $fd_content = $f_var['f_content'];
    $fd_upfile_path = $f_var['f_upfile_path'];
    $fd_cstatus = '2';
    $fd_cresult = '1';
    $fd_bgid = iif($_SESSION["login_gwbgid"]=='',$f_var['f_bgid'],$_SESSION["login_gwbgid"]);
    $fd_bempno = iif($_SESSION["login_gwempno"]=='',$_SESSION["login_empno"],$_SESSION["login_gwempno"]);
    $fd_bproc = u_showproc();
    $fd_bdate = date("Y-m-d H:i:s");
    $fd_fromip = $_SERVER["REMOTE_ADDR"];
    $vb_ym = date('Ym');
    $fd_nodate = (date("Y")-1911).date("md");
    $f_var['log_yf'] = '';
    $ins_flwh ="insert into docs.webflw_h
                set  s_num    = '',
                     flwno    = ( case
                                    when (select (max(wf2.flwno)+1)
                                                      from   docs.webflw_h as wf2
                                                            where  wf2.flwno like '{$fd_nodate}%') != ''
                                      then (select (max(wf2.flwno)+1)
                                                        from   docs.webflw_h as wf2
                                                              where  wf2.flwno like '{$fd_nodate}%')
                                    else '{$fd_nodate}001' end
                                 ),
                     db       = '{$fd_db}',
                     tb       = '{$fd_tb}',
                     tb_num   = '{$fd_th_num}',
                     class    = '{$fd_class}',
                     subject  = '{$fd_subject}',
                     content  = '{$fd_content}',
                     upfile_path  = '{$fd_upfile_path}',
                     c_status = '2',
                     c_result = '1',
                     b_gid    = '{$fd_bgid}',
                     b_empno  = '{$fd_bempno}',
                     b_proc   = '{$fd_bproc}',
                     b_date   = '{$fd_bdate}',
                     fromip   = '{$fd_fromip}'
               ";
    if( !mysql_query($ins_flwh) ){
      sl_errmsg('<font color="#FF0000"><b>�а�����ñ�ֲ��`!! ���`�N��: 44</b></font>...���p��������F��T���B�z!!(<font color="#FF0000">�Чi�����`�N��</font>)');
      $f_var['log_yf'] .= "Error => ".$ins_flwh."\n";
    }
    else{
      $fd_autoindex = mysql_insert_id(); //�s�W��s_num
      $sql_flwh = "select *
                   from   docs.webflw_h
                   where  s_num = '{$fd_autoindex}'
                  ";
      //echo $sql_flwh."<br>";
      $res_flwh = mysql_query($sql_flwh);
      $ar_flwh  = mysql_fetch_assoc($res_flwh);

      $sql_itm = " select *
                    from   docs.webflw_item
                    where  d_date = '0000-00-00 00:00:00'
                           and db = '{$ar_flwh['db']}'
                           and tb = '{$ar_flwh['tb']}'
                           and class = '{$ar_flwh['class']}'
                    order by itemno
                  ";
      $res_itm = mysql_query($sql_itm);
      $cnt_itm = mysql_num_rows($res_itm);
      if( $cnt_itm>0 ){
        sl_open('sl');
        while( $ar_itm = mysql_fetch_assoc($res_itm) ){
          $sql_boss ="select pass.name, pass.empno, pass.job_id
                      from   sl.dept
                             left join sl.pass on dept.dept_id = pass.dept_id
                                                  and pass.d_date = '0000-00-00 00:00:00'
                      where  dept.b_gid = '{$fd_bgid}'
                             and dept.d_date = '0000-00-00 00:00:00'
                             and job_id in ('{$ar_itm['job_id']}')
                      union
                      select slpas.name, slpas.empno, slpas.job_id
                      from   sl.dept_group
                             left join sl.pass slpas on sl.dept_group.group_id=slpas.group_id
                                                        and (slpas.job_id = '{$ar_itm['job_id']}'
                                                             or slpas.job_id = '5021'/*�Ʋz*/ )
                                                        and substring(slpas.dept_id,1,3) not in ('S13','S18')
                                                        and slpas.d_date = '0000-00-00 00:00:00'
                      where  sl.dept_group.dept_id like CONCAT('%',(select dept_id
                                                                    from   dept
                                                                    where  b_gid='{$fd_bgid}' and
                                                                           stop='N'),'%')
                             and slpas.empno is not null
                             and ( slpas.dept_id in ('S132','S191','S196')
                                   OR slpas.dept_id LIKE '%A%'
                                   OR slpas.dept_id LIKE '%B%'
                                   OR slpas.dept_id LIKE '%C%'
                                   OR slpas.dept_id LIKE '%D%'  )
                             and dept_group.d_date = '0000-00-00 00:00:00'
                     ";
          //echo "<pre>".$sql_boss."</pre>";
          $res_boss = mysql_query($sql_boss);
          $cnt_boss = mysql_num_rows($res_boss);
          if( $cnt_boss>0 ){
            while($ar_boss = mysql_fetch_assoc($res_boss)){
              if( $ar_itm['job_id']==$ar_boss['job_id'] ){
                $fd_boss_emp = $ar_boss['empno'];
              }
              if( '5021'==$ar_boss['job_id'] ){ //�o�~�Ʋz
                $fd_boss5021_emp = $ar_boss['empno'];
              }
            }
          }else{
            $fd_boss_emp = '';
          }

          if( ''==$fd_boss_emp AND '5027'==$ar_itm['job_id'] ){ //�o�~�Ҫ���ߤ���, �h��o�~�Ʋz
            $fd_boss_emp = $fd_boss5021_emp;
          }
          if( ''!=$fd_boss_emp ){
            $ins_flwb ="insert into docs.webflw_b
                                   (s_num, flwno, itemno, empno, getdate,
                                    b_empno, b_proc, b_date, fromip)
                            values (0,'{$ar_flwh['flwno']}','{$ar_itm['itemno']}','{$fd_boss_emp}','{$fd_bdate}',
                                    '{$fd_bempno}','{$fd_bproc}','{$fd_bdate}','{$fd_fromip}')
                      ";
            //echo "<pre>".$ins_flwb."</pre>";
            if(!mysql_query($ins_flwb)) { //�g�J����,���s����
              sl_errmsg('<font color="#FF0000"><b>�а�����ñ�ֲ��`!! ���`�N��: 835</b></font>...���p��������F��T���B�z!!(<font color="#FF0000">�Чi�����`�N��</font>)');
              $f_var['log_yf'] .= "Error => ".$ins_flwb."\n";
            }else{
              $f_var['webflw_no'] = $ar_flwh['flwno'];
              return;
            }

          }
        }
      }
    }

    if( ''!=$f_var['log_yf'] ){
      $f_var['mupload_dir'] = getcwd().'/webflw/';
      if( !$f_var['mupload_dir'] ){
        echo '�s���Ƨ������T�إߡA�Ь���T���H����U�B�z�C\n';
      }else{
        $up_dir = $f_var['mupload_dir'];
        if(!is_dir($up_dir.$vb_ym)){
          mkdir($up_dir.$vb_ym);
          chmod($up_dir.$vb_ym, 0777);
          $up_dir .= $vb_ym;
        }else{
          $up_dir .= $vb_ym;
        }
        $f_var['mupload_dir'] = $up_dir."/";
      }
      $f_var['fp_yf'] = fopen($f_var['mupload_dir']."{$fd_bgid}_{$fd_bempno}_{$fd_tb}_{$fd_th_num}.txt","w");
      fputs($f_var['fp_yf'],$f_var['log_yf']);
      fclose($f_var['fp_yf']);
    }
    return;

  }

  // **************************************************************************
  //  ��ƦW��: sl_flwset()
  //  ��ƥ\��: webñ�֫�^�g���
  //  �ϥΤ覡: sl_flwset($f_var)
  //  �{���]�p: �Ϊ�
  //  �]�p���: 2015.08.21
  // **************************************************************************
  function sl_flwset(&$f_var) {
    sl_open('docs');
    $sql_1 = " select *
               from   webflw_set
               where  db = '{$f_var['f_db']}'
                      and tb = '{$f_var['f_tb']}'
                      and class = '{$f_var['f_class']}'
                      and d_date = '0000-00-00 00:00:00'
             ";
    //echo $sql_1."<br>";
    $rs_1 = mysql_query($sql_1);
    $cnt_1 = mysql_num_rows($rs_1);
    if( $cnt_1>0 ){
      while( $rows_1 = mysql_fetch_assoc($rs_1) ){
        switch( $rows_1['method'] ){
          case '1':
               if( 'gwsle03'==$f_var['f_tb'] AND '11'==$f_var['f_class'] ){

                  $f_var['gwUrl'] = "http://eip.slc.com.tw/~docs/gaswork/admin/t_leavegw_curl.php";
                  $ch = curl_init();
                  curl_setopt($ch, CURLOPT_URL, $f_var['gwUrl']);
                  curl_setopt($ch, CURLOPT_POST, 1 );
                  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(
                    array("f_db" => $f_var['f_db'],
                    "f_tb" => $f_var['f_tb'],
                    "f_class" => $f_var['f_class'],
                    "f_tb_num" => $f_var['f_tb_num'])
                    ));    
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // ���Lhost����
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //�W��ssl���Ү��ˬd�C
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //output�~��^�Ǧ^��
                  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                  $output = curl_exec($ch);
                  curl_close($ch);
                  /*
                 $t_path = "/home/docs/public_html/gaswork/admin/t_leavegw.php {$f_var['f_db']} {$f_var['f_tb']} {$f_var['f_class']} {$f_var['f_tb_num']} &";
                 $t_popen = popen($t_path,"r");
                 if($t_popen){
                   while (!feof($t_popen)) {
                     $out = fgets($t_popen, 4096);
                   }
                 }
                 pclose($t_popen);    .
                 */
               }else{
                 $fins_to = '';
                 $fins_from = '';
                 $ex_filed = explode(';',$rows_1['field']);
                 foreach($ex_filed as $key1=>$val1) {
                   $ex_ffield = explode('#',$ex_filed[$key1]);
                   $fins_to .= ",{$ex_ffield[0]} ";
                   $fins_from .= ",{$ex_ffield[1]} ";
                 }
                 $fins_to = substr($fins_to,1);
                 $fins_from = substr($fins_from,1);
                 sl_open($rows_1['to_db']);
                 $sql_ins = " insert into {$rows_1['to_db']}.{$rows_1['to_tb']} ({$fins_to})
                              select {$fins_from}
                              from   {$rows_1['from_db']}.{$rows_1['from_tb']}
                              where  {$rows_1['factor']} = '{$f_var['f_tb_num']}'
                            ";
                 echo "<pre>".$sql_ins."</pre>";
                 sl_send_msg('it','1130091','[�[�o���а��t��]�s�Wgaswork���',$sql_ins);
//                 if(!mysql_query($sql_ins)) { // �g�J����
//                   sl_errmsg('<font color="#FFFFFF"><b>�`�N!!</b></font>'.$sql_ins.'!!'); //qq:para�u��str����font
//                   exit;
//                 }
               }
               break;
          case '2':
               break;
          case '3':
               sl_open($rows_1['to_db']);
               $sql_else = " {$rows_1['field']}
                             where  {$rows_1['factor']} = '{$f_var['f_tb_num']}'
                           ";
               //echo "<pre>".$sql_else."</pre>";
               //exit;
               if(!mysql_query($sql_else)) { // �g�J����
                 sl_errmsg('<font color="#FFFFFF"><b>�`�N!!</b></font>'.$sql_else.'!!'); //qq:para�u��str����font
                 exit;
               }
               break;
          default:
               break;
        }
      }
    }
  }
  // **************************************************************************
  //  ��ƦW��: sl_invoclose()
  //  ��ƥ\��: �P�_�o���O�_���b
  //  �ϥΤ覡: sl_invoclose($f_werks,$f_year,$f_month,$prd="PRD")
  //  �{���]�p: �h�Z
  //  �]�p���: 2015.09.09
  // **************************************************************************
  function sl_invoclose($f_werks,$f_year,$f_month,$prd="PRD"){

    $oracle_server = sl_openoci($prd);
    $sql = "select ZCLOSE
            from SAPE68.ZCBCLOSE
            where MANDT = '368'
              and WERKS = '{$f_werks}'
              and GJAHR = '{$f_year}'
              and MONAT = '{$f_month}'
              and ZWORK = 'R'";
    $stid = oci_parse($oracle_server,$sql);
    $result  = oci_execute($stid);
    $ar =  oci_fetch_array($stid, OCI_ASSOC);
    return $ar['ZCLOSE'];
  }
  // **************************************************************************
  //  ��ƦW��: sl_sap_up_msg()
  //  ��ƥ\��: .12�睊�L�פp�{��
  //  �ϥΤ覡: sl_sap_up_msg()
  //  �{���]�p: supergk
  //  �]�p���: 2015.09.18
  // **************************************************************************
  function sl_sap_up_msg(){
    if('0883430'==$_SESSION['login_empno']){

    } else {
      if(date('YmdHis')>'20150918190000'){//||'0883430'==$_SESSION['login_empno']||'S122'==$_SESSION['login_dept_id']
        echo "<script type=text/javascript>";
        echo " if(confirm('���\��ݱqSAP����{���ϨϥΡA���I�T�{��еn�J����ϡA���¡I�I')){
                 document.location.href='http://slt2.slc.com.tw/~docs/eip-new/v3/';
               } else {
                  history.go(-1);
               }
               ";
        echo "</script>";
      }
    }
  }
  // **************************************************************************
  //  ��ƦW��: u_get_sap_bp_s()
  //  ��ƥ\��: ���o��������
  //  �ϥΤ覡: u_get_sap_bp_s()
  //  �{���]�p: �¶v
  //  �]�p���: 2015.05.12
  // **************************************************************************
  function u_get_sap_bp_s(){
    sl_open('sl');
    $sql_sap_bp_s = "select distinct
                            dept.b_gid,
                            dept.sap_dept_id,
                            dept.sap_bp_a,
                            dept.sap_bp_s,
                            dept.sap_bp_c,
                            dept.sap_bp
                       from dept
                      where dept.d_date='0000-00-00 00:00:00' and dept_id not like 'S23%' and LENGTH(dept.dept_id) = '4'
                        and dept.stop<>'Y' and dept.sap_dept_id<>''";
    //echo '<pre>'.$sql_sap_bp_s.'</pre>';
    $result_sap_bp_s = mysql_query($sql_sap_bp_s);
    while($row_sap_bp_s = mysql_fetch_array($result_sap_bp_s)){
      //echo $row_sap_bp_s['sap_bp_s'].'+++<br>';
      if ( ''<>trim($row_sap_bp_s['b_gid']) ) {
        if( $row_sap_bp_s['sap_dept_id'] == substr($row_sap_bp_s['sap_bp_s'],0,4) ){
          $sap_bp_s[$row_sap_bp_s['b_gid']]['sap_bp_s'] = $row_sap_bp_s['sap_bp_s'];//�o���P�⦨������
          $sap_bp_s[$row_sap_bp_s['sap_dept_id']]['sap_bp_s'] = $row_sap_bp_s['sap_bp_s'];//�o���P�⦨������
        }
        if( $row_sap_bp_s['sap_dept_id'] == substr($row_sap_bp_s['sap_bp_a'],0,4) ){
          $sap_bp_s[$row_sap_bp_s['b_gid']]['sap_bp_a'] = $row_sap_bp_s['sap_bp_a'];//�o���޲z��������
          $sap_bp_s[$row_sap_bp_s['sap_dept_id']]['sap_bp_a'] = $row_sap_bp_s['sap_bp_a'];//�o���޲z��������
        }
        if( $row_sap_bp_s['sap_dept_id'] == substr($row_sap_bp_s['sap_bp_c'],0,4) ){
          $sap_bp_s[$row_sap_bp_s['b_gid']]['sap_bp_c'] = $row_sap_bp_s['sap_bp_c'];//�o����~��������
          $sap_bp_s[$row_sap_bp_s['sap_dept_id']]['sap_bp_c'] = $row_sap_bp_s['sap_bp_c'];//�o����~��������
        }
      }
      else {
        //if('LF4Z'==$row_sap_bp_s['sap_bp']){//���c�s��
        //  $row_sap_bp_s['sap_bp']='LF4J';
        //}
        if( $row_sap_bp_s['sap_dept_id'] == substr($row_sap_bp_s['sap_bp_s'],0,4) ){
          $sap_bp_s[$row_sap_bp_s['sap_dept_id']]['sap_bp_s'] = $row_sap_bp_s['sap_bp_s'];//���~�P�⦨������
        }
        if( $row_sap_bp_s['sap_dept_id'] == substr($row_sap_bp_s['sap_bp_a'],0,4) ){
          $sap_bp_s[$row_sap_bp_s['sap_dept_id']]['sap_bp_a'] = $row_sap_bp_s['sap_bp_a'];//���~�޲z��������
        }
        if( $row_sap_bp_s['sap_dept_id'] == substr($row_sap_bp_s['sap_bp_c'],0,4) ){
          $sap_bp_s[$row_sap_bp_s['sap_dept_id']]['sap_bp_c'] = $row_sap_bp_s['sap_bp_c'];//���~��~��������
        }
      }
    }
    $sap_bp_s['L110']['sap_bp_a'] = 'L11000';  // add by �¶v 2016.05.09 �߰ݷ|�p�ӻ�, �`���q�@���k��L11000
    return $sap_bp_s;
  }
  // **************************************************************************
  //  ��ƦW��: sl_get_resck()
  //  ��ƥ\��: ���o�N�z�H
  //  �ϥΤ覡: sl_get_resck($f_empno,$f_kind,$f_date) ���s�Añ�e��O�A���(y/m/d H:i:s)
  //  �{���]�p: �h�Z
  //  �]�p���: 2017.09.26
  // **************************************************************************
  function sl_get_resck($f_empno,$f_kind,$f_date,$resck003='0010'){
    u_openef2k('EF2KWeb');
    $f_resdd020 = '';
    $sql = "select resck006
            from resck
            where resck001 = '{$f_empno}'
              and resck002 ='{$f_kind}'
              and resck003 = '{$resck003}'
              and '{$f_date}' between resck004 and resck005";
    $rs = mssql_query($sql);
    $ar = mssql_fetch_assoc($rs);
    if($ar['resck006'] <> ''){
      $f_resdd020 = $ar['resck006'];
    }
    return $f_resdd020;
  }

  // **************************************************************************
  //  ��ƦW��: sl_hrmws()
  //  ��ƥ\��: hrm ws
  //  �ϥΤ覡: sl_hrmws($f_var)
  //            $f_var['hrmws']['method']�B$f_var['hrmws']['method_item']
  //            $f_var['hrmws']['parm'][] <<�Ѽ�
  //  �^�ǭ�:   $f_var['hrmws'][status] �D0������
  //            $f_var['hrmws'][error] ���~�T��
  //            $f_var['hrmws'][rtn][] �^��ws����� (array)
  //  �{���]�p: �Ϊ�
  //  �]�p���: 2018.01.09
  // **************************************************************************
  function sl_hrmws(&$f_var){
    $f_var['wsUrl'] = "http://slt2.slc.com.tw/~sl/t_hrmws.php";
    //$f_var['wsUrl'] = "http://192.168.1.13/t_hrmws.php";
    //if( '1130091'==$_SESSION["login_empno"] ){
    //  $f_var['wsUrl'] = "http://slt2.slc.com.tw/~sl/t_hrmws.php";
    //}
    $vb_date  = date("Y-m-d H:i:s");
    $vfromip  = $_SERVER["REMOTE_ADDR"];
    $vproc    = u_showproc(); // �{���N��
    $vb_empno = $_SESSION["login_empno"];
    if( strstr('gw_essf03/rpt_gwessf03',$vproc)!=null ){
      $vb_empno = $_SESSION["login_gwempno"];
    }
    $fd_parm = serialize($f_var['hrmws']['parm']);
    //unserialize($a); //unserialize�N����٭즨�}�C
    sl_open('hrm');
    $use_log_sql_field = "serviceType, method, parameterType, parm, b_empno, b_date, b_proc, fromip";
    $use_log_sql_value = "'{$f_var['hrmws']['serviceType']}',
                          '{$f_var['hrmws']['method']}',
                          '{$f_var['hrmws']['parameterType']}',
                          '{$fd_parm}',
                          '{$vb_empno}','{$vb_date}','{$vproc}','{$vfromip}'";
    if( ''!=$f_var['hrmws']['serviceType'] ){
      $fd_pxml  = "<Request><Access><Authentication user='gp' password=''/></Access>";
      $fd_pxml .= "<RequestContent>
                     <ServiceType>{$f_var['hrmws']['serviceType']}</ServiceType>
                     <Method>{$f_var['hrmws']['method']}</Method>
                   <Parameters>";

      if( 'System.Object'==$f_var['hrmws']['parameterType'] ){
        $fd_pxml .= '<Parameter type="'.$f_var['hrmws']['parameterType'].'" IsArray="1"><DATA>';
        reset($f_var['hrmws']['parm']); // �N?}�C�����Ы���}�C�Ĥ@�Ӥ���
        while(list($key1,$val1)=each($f_var['hrmws']['parm'])){
          reset($f_var['hrmws']['parm'][$key1]); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
          while(list($key2,$val2)=each($f_var['hrmws']['parm'][$key1])){
            $fd_pxml .=  "<{$key2}>{$f_var['hrmws']['parm'][$key1][$key2]}</{$key2}>";
          }
        }
        $fd_pxml .= '</DATA></Parameter>';
      }else if( ''!=$f_var['hrmws']['parameterType'] and 'System.Object'!=$f_var['hrmws']['parameterType'] ){
        $fd_pxml .= '<Parameter type="'.$f_var['hrmws']['parameterType'].'"><![CDATA[<TWALReg xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/200 1/XMLSchema">';
        reset($f_var['hrmws']['parm']); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
        while(list($key,$value)=each($f_var['hrmws']['parm'])){
          $fd_pxml .=  "<{$key}>{$f_var['hrmws']['parm'][$key]}</{$key}>";
        }
        $fd_pxml .= "</TWALReg>]]></Parameter>";
      }else{
        reset($f_var['hrmws']['parm']); // ?N�}�C�����Ы���}�C�Ĥ@�Ӥ���
        while(list($key1,$val1)=each($f_var['hrmws']['parm'])){
          reset($f_var['hrmws']['parm'][$key1]); // �N�}�C�����Ы���}�C�Ĥ@�Ӥ���
          while(list($key2,$val2)=each($f_var['hrmws']['parm'][$key1])){
              $fd_pxml .=  "<Parameter type='System.{$key2}'>{$f_var['hrmws']['parm'][$key1][$key2]}</Parameter>";
          }
        }
      }
      $fd_pxml .= "</Parameters></RequestContent></Request>";
    }else{
      sl_errmsg('hrm ws �ѼƲ��`! �нT�{�C');
      echo "<pre>";
      print_r($f_var['hrmws']);
      echo "</pre>";
      exit;
    }
    $f_var['hrmws']['pxml'] = $fd_pxml;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $f_var['wsUrl']);
    curl_setopt($ch, CURLOPT_POST, 1 );
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array("pXml"=>$f_var['hrmws']['pxml'])));
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //output�~��^�Ǧ^��
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    $output = curl_exec($ch);
    if(curl_errno($ch)){
      $f_var['hrmws']['rtn'][] = curl_error($ch);
    }else{
      $output_big5 = mb_convert_encoding($output,'big5','utf-8');
      $status_site_start = strpos($output_big5,'<Execution>');
      $status_site_end = strpos($output_big5,'</Execution>');
      $status_str = substr($output_big5,$status_site_start,($status_site_end-$status_site_start)); //<Execution><Status Code="0" description="" />
      //echo htmlspecialchars($status_str,ENT_QUOTES)."<br>";
      $code_site_start = strpos($status_str,'Code="');  //Code=" ��m
      $code_site_end = 10;
      $code_str = substr($status_str,$code_site_start,$code_site_end); //�qCode���޸��}�l��5��, �]�����T�wDS�|�Ǥ�����~�N�X,�ҥH�ȥ���5�r��
      $ex_code = explode('"',$code_str);
      $f_var['hrmws']['status'] = $ex_code[1]; //code ���~�X �D0�h�����~
      $description_site_start = strpos($status_str,'description="');  //description=" ��m
      $description_str = substr($status_str,$description_site_start);
      $ex_description = explode('"',$description_str);
      $f_var['hrmws']['error'] = $ex_description[1]; //description ���~�T��
      $record_site_start = strpos($output_big5,'<Data>');
      $record_site_end = strpos($output_big5,'</Data>');
      $record_str = substr($output_big5,$record_site_start,$record_site_end);
      if( strstr($record_str,"<Record id=")==null ){
        $ex_data = explode("</Data>",$record_str);
        for($i=0; $i<count($ex_data); $i++){
          if( ''!=strip_tags($ex_data[$i]) ){
            $f_var['hrmws']['rtn'][] = strip_tags($ex_data[$i]);
          }
        }
      }else{
        $ex_record = explode("<Record id=",$record_str);
        for($i=0; $i<count($ex_record); $i++){
          if( ''!=strip_tags($ex_record[$i]) ){
            $ex_row = explode(">",strip_tags($ex_record[$i]));  //"f07ec15ad867430c8ac08e22ed44fb36">�S��?�|2017/12/13 �W�� 12:00:00|08:30|2017/12/13 �W�� 12:00:00|09:00|PlanState_003|excel�ɤJ
            if( !empty($ex_row) ){
              $f_var['hrmws']['rtn'][] = $ex_row[1];  // �S��|2017/12/13 �W�� 12:00:00|08:30|2017/12/13 �W�� 12:00:00|09:00|PlanState_003|excel�ɤJ
            }
          }
        }
      }
      if( !empty($f_var['hrmws']['rtn']) ){
        $fv_rtn = implode("<br>",$f_var['hrmws']['rtn']);
      }else{
        $fv_rtn = "";
      }

      //if( !empty($f_var['hrmws']['status']) ){
      sl_open('hrm');
      $use_log_sql = "INSERT INTO hrm.hrmws_log ({$use_log_sql_field},status,error)
                      VALUES ({$use_log_sql_value},'{$f_var['hrmws']['status']}','{$fv_rtn}')
                   ";
      mysql_query($use_log_sql);
      //}
    }
    //echo "<pre>";
    //print_r($f_var['hrmws']);
    //echo "</pre>";
    curl_close($ch);
    //$f_var['hrmws']['serviceType']="";
    //$f_var['hrmws']['method']="";
    //$f_var['hrmws']['parameterType']="";

    return $f_var;
  }
  // **************************************************************************
  //  ��ƦW��: sl_get_oil_set()
  //  ��ƥ\��: ���o�o�~�馩�]�w
  //  �ϥΤ覡: sl_get_oil_set($s_date,$oil_supply) ��� �A������(1or2)1�O���o2�O�x��
  //  �{���]�p: �h�Z
  //  �]�p���: 2018.12.19
  // **************************************************************************
  function sl_get_oil_set(&$f_var,$s_date,$oil_supply='1') {
    sl_open('gas');
    $sql = "select *
            from oil_dis
            where '{$s_date}' >= s_date
            and oil_supply = '{$oil_supply}'
            order by s_date desc";
    if($_SESSION['it_mode']=='Y' && $_SESSION['login_empno'] == '1130937'){
      echo $sql."<br>";
    }
    // echo $sql;
    $rs = mysql_query($sql);
    $cnt = mysql_num_rows($rs);
    if( $cnt>0 ){
      $ar = mysql_fetch_assoc($rs);
      $f_var['oil']['300'] = $ar['dis_300'];
      $f_var['oil']['200'] = $ar['dis_200'];
      $f_var['oil']['500'] = $ar['dis_500'];
      $f_var['oil']['800'] = $ar['dis_800'];
      $f_var['oil']['e258'] = $ar['exp_dis258'];
      $f_var['oil']['e300'] = $ar['exp_dis300'];

    }
    else{
      sl_send_msg('IT','0883430','�o�~�馩�]�w���`�I','���ˬd<a href="http://eip.slc.com.tw/~gas/oil_dis_set.php?msel=4">�o�~�馩�]�w��</a>�O�_���~'. u_showproc());
      sl_send_msg('IT','1130937','�o�~�馩�]�w���`�I','���ˬd<a href="http://eip.slc.com.tw/~gas/oil_dis_set.php?msel=4">�o�~�馩�]�w��</a>�O�_���~'. u_showproc());
      sl_send_msg('IT','0883086','�o�~�馩�]�w���`�I','���ˬd<a href="http://eip.slc.com.tw/~gas/oil_dis_set.php?msel=4">�o�~�馩�]�w��</a>�O�_���~'. u_showproc());
      sl_send_msg('IT','1430175','�o�~�馩�]�w���`�I','���ˬd<a href="http://eip.slc.com.tw/~gas/oil_dis_set.php?msel=4">�o�~�馩�]�w��</a>�O�_���~'. u_showproc());
      exit;
    }
    // return $f_var['oil'];
    // return ;
  }

  // **************************************************************************
  //  ��ƦW��: sl_re_match()
  //  ��ƥ\��: �i��ƯZ�B�ɵn�B�а��B�P�����ˬd�P�_�첧�`�X�ԬO�_���`
  //  ��ƥ\��:     �X�h�ԭY�ˬd�w���`�~�@�o���`����
  //  �ϥΤ覡: sl_re_match($�o���T�X���O,$�p�~�~��,$�[�o�������Ҧr��,$�[�o���X/�h�Ԥ��,$�n�����ʪ�H���s��)
  //  �{���]�p: zihan
  //  �]�p���: 2019.01.02
  // **************************************************************************
  function sl_re_match($updgid, $updym='', $updid, $updwkdate, $updempno){ 
    //HRM�����ɩҦ����\�ೣ�|���ĩҥH�����s���� add by zihan 2019.12.19  
    $vb_date = date("Y-m-d H:i:s");
    $f_var['hrmctrl'] = "";
    $f_var['hrmctrl_ing'] = "";
    sl_open('hrm');
    $sql_tr = "select startime, endtime, reason
                from  hrm.hrmupdatectrl
                where '{$vb_date}' >= startime
                      and chk = 'Y'
                      and d_date = '0000-00-00 00:00:00'
               ";
    $res_tr = mysql_query($sql_tr);
    $qty_tr = mysql_num_rows($res_tr);
    if($qty_tr > 0){
      while($row_tr = mysql_fetch_array($res_tr)){
        $f_var['hrmctrl_ing'] = "<font size='+2' style='font-family:Microsoft JhengHei;'><font style='font-weight:bold;color:red;'>�`�N!! ���s�H�ƨt�Ϊ�����@���C</font><br>
                             ����ɶ�: <font style='font-weight:bold;color:blue;'>{$row_tr['startime']} ~ {$row_tr['endtime']}</font> <br>
                             �����]: <font style='font-weight:bold;color:blue;'>{$row_tr['reason']}</font><br>
                             �е����󵲧���, �A�ϥΡC<br>
                             <font style='font-weight:bold;color:green;'>(���s�������w�p�����ɶ�,�|�����᪺�i��)</font></font>";
      } 
    }  
    if( ''!=trim($f_var['hrmctrl_ing']) ){ //add by zihan 2019.12.19 �̸�T����/�v���޲z/���s����ɶ�����]�w ����}��l�ήɶ�
      return;
    }else{ 
      $f_var["at_errmsg"] = "";
      $upddproc = "sl_re_match";
      $updddate = date("Y-m-d H:i:s");
      
      sl_openhrmdb("HRMDB");//�Z�O�}�C
      $sqlcc = " SELECT Code, Name, ShortName, WorkBeginTime, WorkEndTime, WorkHours, JobHours, Flag, IsDisPlayInEss, IsStop
                 FROM  AttendanceRank
                 WHERE  ( Code LIKE '[0-9]%' OR Code LIKE '%P%' )
                   and Flag = '1' and IsDisPlayInEss = '1' and IsStop = '0'
                 ORDER BY Code
               ";
      $rescc = mssql_query($sqlcc);
      $qtycc = mssql_num_rows($rescc);
      if ( $qtycc>0 ){
        while( $rowcc = mssql_fetch_array($rescc) ){
          $f_var['ClassAR'][$rowcc["Code"]]["time_start"] = $rowcc["WorkBeginTime"];
          $f_var['ClassAR'][$rowcc["Code"]]["time_end"]   = $rowcc["WorkEndTime"];
          $f_var['ClassAR'][$rowcc["Code"]]["hr_rule"]    = $rowcc["WorkHours"];
          $f_var['ClassAR'][$rowcc["Code"]]["class_name"] = $rowcc["Name"];
        }
      }
      
      if ( strlen($updym)==6 ){  //(1) gid+ym
        $query = " SELECT *
                     FROM shiftmatch
                    WHERE d_date ='0000-00-00 00:00:00'
                      AND gid = '{$updgid}'
                      AND ym = '{$updym}'
                      AND deduct < 4
                 ";
      }else{  //(2) gid+id+wkday
        $query = " SELECT *
                     FROM shiftmatch
                    WHERE d_date ='0000-00-00 00:00:00'
                      AND gid = '{$updgid}'
                      AND id = '{$updid}'
                      AND workdt = '{$updwkdate}'
                      AND deduct < 4
                 ";
      }
      sl_open("gaswork");
      //���`
      $res = mysql_query($query);
      $qty = mysql_num_rows($res);
      if( $qty > 0 ){
        while( $row = mysql_fetch_array($res) ){
          $chkError[$row["ym"]][$row["workdt"]][$row["gid"]][$row["s_num"]] = $row["id"];
        }
        //echo "<pre>";  print_r($chkError);  echo "</pre><hr>";
      
        foreach( $chkError as $Erym => $val1 ){
          foreach( $val1 as $Erwkday => $val2 ){
            foreach( $val2 as $Ergid => $val3 ){
              foreach( $val3 as $Ernum => $Eruid ){
                //�ƯZ
                $query2 = " SELECT *
                              FROM gwshift
                             WHERE d_date = '0000-00-00 00:00:00'
                               /*AND b_gid = '$Ergid'*/
                               AND id = '$Eruid'
                               AND ym = '$Erym'
                               AND wkdate = '$Erwkday'
                          ";
                $res2 = mysql_query($query2);
                $qty2 = mysql_num_rows($res2);
                if( $qty2 > 0 ){
                  $NewClassCode = $NewClassTimeStart = $NewClassTimeEnd = $NewClassWorkHr = "";
                  $row2 = mysql_fetch_array($res2);
                  if( strlen( $row2["wkclass1"] )>="2" ){  //���T�Z�O
                    $NewClassCode      = $row2["wkclass1"];
                    $NewClassTimeStart = $f_var['ClassAR'][$row2["wkclass1"]]["time_start"]; //�p�G���ƯZ�n�A���X�Ԯɶ�<=�ƯZ�}�l�ɶ�
                    $NewClassTimeEnd   = $f_var['ClassAR'][$row2["wkclass1"]]["time_end"];
                    $NewClassWorkHr    = $f_var['ClassAR'][$row2["wkclass1"]]["hr_rule"];
      
                    //�а�
                    $query3 = " SELECT *
                                  FROM gwsle03
                                 WHERE d_date = '0000-00-00 00:00:00'
                                   /*AND b_gid = '$Ergid'*/
                                   AND id = '$Eruid'
                                   AND ( date_s = '$Erwkday' OR date_e = '$Erwkday' )
                              ";
                    $res3 = mysql_query($query3);
                    $qty3 = mysql_num_rows($res3);
                    if( $qty3 > 0 ){              //���S���а��������S���Y
                      $NewSleDayStart = $NewSleDayEnd = $NewSleTimeStart = $NewSleTimeEnd = "";
                      $row3 = mysql_fetch_array($res3);
                      $gwsle = "Y";
                      $NewSleDayStart  = $row3["date_s"]; //YYYYMMDD  �p�G���а��n��� �а��_�W�ɶ� �O�_�P �X�Ԯɶ� �M �Z���ɶ� ����
                      $NewSleDayEnd    = $row3["date_e"]; //YYYYMMDD
                      $NewSleTimeStart = $row3["time_s"]; //hhii
                      $NewSleTimeEnd   = $row3["time_e"]; //hhii
                      //echo "  $Ergid - $Eruid - $Erwkday($Erym) -> ���@���ŦX���а������C <br>";
                    }else{
                      $gwsle = "N";
                    }
                    //�X��
                    $f2gw_wkday = sl_4ymd($Erwkday,"-");
                    $query4 = " SELECT *,
                                       DATE_FORMAT( gw08_s, '%Y%m%d' ) AS wkD1,
                                       DATE_FORMAT( gw08_e, '%Y%m%d' ) AS wkD2,
                                       DATE_FORMAT( gw08_s, '%H%i' )   AS wkT1,
                                       DATE_FORMAT( gw08_e, '%H%i' )   AS wkT2,
                                       DATE_FORMAT( gw07_s, '%Y%m%d' ) AS wkD11,
                                       DATE_FORMAT( gw07_e, '%Y%m%d' ) AS wkD12,
                                       DATE_FORMAT( gw07_s, '%H%i' )   AS wkT11,
                                       DATE_FORMAT( gw07_e, '%H%i' )   AS wkT12,
                                       DATE_FORMAT( gw08_s, '%H:%i' )  AS strwkT1,
                                       DATE_FORMAT( gw08_e, '%H:%i' )  AS strwkT2,
                                       DATE_FORMAT( gw07_s, '%H:%i' )  AS strwkT11,
                                       DATE_FORMAT( gw07_e, '%H:%i' )  AS strwkT12,
                                       DATE_FORMAT( min(gw08_s), '%H:%i' )  AS wktimemin1,
                                       DATE_FORMAT( max(gw08_e), '%H:%i' )  AS wktimemax2,
                                       DATE_FORMAT( min(gw08_s), '%H%i' )  AS wktimeS,
                                       DATE_FORMAT( max(gw08_e), '%H%i' )  AS wktimeE,
                                       sum( gw09) AS wksumhr
                                  FROM gaswork
                                 WHERE d_date = '0000-00-00 00:00:00'
                                   /*AND gw04 = '$Ergid'*/
                                   AND gw02 = '$Eruid'
                                   AND ( ( left(gw08_s,10) between '$f2gw_wkday' and '$f2gw_wkday' ) OR
                                         ( left(gw08_e,10) between '$f2gw_wkday' and '$f2gw_wkday' ) OR
                                         ( ownerdate = '$Erwkday' )
                                       )
                                 GROUP BY  DATE_FORMAT( gw08_s, '%Y%m%d' )
                              ";
                    $res4 = mysql_query($query4);
                    $qty4 = mysql_num_rows($res4);
                    if( $qty4 > 0 ){              //���S���а��������S���Y
                      $stimeLESS = $etimeLESS = $wkinoutLESS = -1;
                      while( $row4 = mysql_fetch_array($res4)){
                        //upd by zihan 2019.01.17 �ϥΥ[�`�᪺����(�X�Ԯɶ�+�h�Ԯɶ�+�X�ԥ[�`�ɼ�)���P�_
                        $stimeLESS   = (date("H",strtotime($NewClassTimeStart))-date("H",strtotime($row4["wktimemin1"])))*60+(date("i",strtotime($NewClassTimeStart))-date("i",strtotime($row4["wktimemin1"])));
                        $etimeLESS   = (date("H",strtotime($row4["wktimemax2"]))-date("H",strtotime($NewClassTimeEnd)))*60+(date("i",strtotime($row4["wktimemax2"]))-date("i",strtotime($NewClassTimeEnd)));
                        $wkinoutLESS = $row4["wksumhr"];
                        //add by zihan 2019.01.28 �k�ݤ���u���P�_
                        if( $row4["ownerdate"]==$Erwkday && $gwsle == "Y" ){
                          $query5 = "SELECT *,
                                           DATE_FORMAT( gw08_s, '%Y%m%d' ) AS wkD1,
                                           DATE_FORMAT( gw08_e, '%Y%m%d' ) AS wkD2,
                                           DATE_FORMAT( gw08_s, '%H%i' )   AS wkT1,
                                           DATE_FORMAT( gw08_e, '%H%i' )   AS wkT2,
                                           DATE_FORMAT( gw07_s, '%Y%m%d' ) AS wkD11,
                                           DATE_FORMAT( gw07_e, '%Y%m%d' ) AS wkD12,
                                           DATE_FORMAT( gw07_s, '%H%i' )   AS wkT11,
                                           DATE_FORMAT( gw07_e, '%H%i' )   AS wkT12,
                                           DATE_FORMAT( gw08_s, '%H:%i' )  AS strwkT1,
                                           DATE_FORMAT( gw08_e, '%H:%i' )  AS strwkT2,
                                           DATE_FORMAT( gw07_s, '%H:%i' )  AS strwkT11,
                                           DATE_FORMAT( gw07_e, '%H:%i' )  AS strwkT12,
                                           DATE_FORMAT( min(gw08_s), '%H:%i' )  AS wktimemin1,
                                           DATE_FORMAT( max(gw08_e), '%H:%i' )  AS wktimemax2,
                                           DATE_FORMAT( min(gw08_s), '%H%i' )  AS wktimeS,
                                           DATE_FORMAT( max(gw08_e), '%H%i' )  AS wktimeE,
                                           sum( gw09 ) AS wksumhr
                                      FROM gaswork
                                     WHERE d_date = '0000-00-00 00:00:00'
                                       /*AND gw04 = '$Ergid'*/
                                       AND gw02 = '$Eruid'
                                       AND gw09 > 0
                                       AND ( ( left(gw08_s,10) between '$f2gw_wkday' and '$f2gw_wkday' AND flwno <> '' ) OR
                                             ( left(gw08_e,10) between '$f2gw_wkday' and '$f2gw_wkday' AND flwno <> '' ) OR
                                             ( ownerdate = '$Erwkday' )
                                           )
                                     GROUP BY  gw02
                                    ";
                          $res5 = mysql_query($query5);
                          $qty5 = mysql_num_rows($res5);
                          if( $qty5 > 0 ){
                            while( $row5=mysql_fetch_array($res5) ){
                              $stimeLESS   = (date("H",strtotime($NewClassTimeStart))-date("H",strtotime($row5["wktimemin1"])))*60+(date("i",strtotime($NewClassTimeStart))-date("i",strtotime($row5["wktimemin1"])));
                              $etimeLESS   = (date("H",strtotime($row5["wktimemax2"]))-date("H",strtotime($NewClassTimeEnd)))*60+(date("i",strtotime($row5["wktimemax2"]))-date("i",strtotime($NewClassTimeEnd)));
                              $wkinoutLESS = $row5["wksumhr"];
      
                              if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"��") OR
                                  strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"�Ұ�") OR
                                  strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"��w") OR
                                  $NewClassCode == "--" ){
                                  $queryupd = " update shiftmatch
                                                   set d_empno = '$updempno',
                                                       d_proc = '$upddproc',
                                                       d_date = '$updddate'
                                                 where s_num = '$Ernum'
                                                   and d_date = '0000-00-00 00:00:00'
                                              ";
                                  sl_open("gaswork");
                                  if( !mysql_query($queryupd) ){
                                    $f_var["at_errmsg"] .= "�[�o��[��/�Ұ�/��w/�ůZ(--)] �ƯZ�X�Ԥw���`�A��d_date����:<br>$queryupd<br>";
                                  }
                                  //echo " �[�o��[��/�Ұ�/��w/�ůZ(--)] �ƯZ�X�Ԥw���`�A�X�Բ��`�s��: $Ernum ���� <br>";
                              }else{
                                //���i��[�Z����
                                if( $stimeLESS >= 0 AND $stimeLESS < 30 ){
                                  if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"PT") ){
                                    $queryupd = " update shiftmatch
                                                     set d_empno = '$updempno',
                                                         d_proc = '$upddproc',
                                                         d_date = '$updddate'
                                                   where s_num = '$Ernum'
                                                     and d_date = '0000-00-00 00:00:00'
                                                ";
                                    sl_open("gaswork");
                                    if( !mysql_query($queryupd) ){
                                      $f_var["at_errmsg"] .= "PT�[�o�� �ƯZ�X�Ԥw���`�A��d_date����:<br>$queryupd<br>";
                                    }
                                    //echo " PT�[�o�� �ƯZ�X�Ԥw���`�A�X�Բ��`�s��: $Ernum ���� <br>";
                                  }else{
                                    //echo "<pre> $etimeLESS / $row5[wktimeS] / $row5[wktimeE] / $row5[wkD2] / $row5[wkD1] / $wkinoutLESS  / $NewClassWorkHr  </pre>";
                                    if( ( $etimeLESS>=0 OR ( $row5["wktimeS"]>$row5["wktimeE"] AND $row5["wkD2"]>$row5["wkD1"] ) ) AND $wkinoutLESS>=$NewClassWorkHr ){
                                      $queryupd = " update shiftmatch
                                                       set d_empno = '$updempno',
                                                           d_proc = '$upddproc',
                                                           d_date = '$updddate'
                                                     where s_num = '$Ernum'
                                                       and d_date = '0000-00-00 00:00:00'
                                                  ";
                                      sl_open("gaswork");
                                      if( !mysql_query($queryupd) ){
                                        $f_var["at_errmsg"] .= "���~�[�o�� �X��$wkinoutLESS[�p] �ƯZ�X�Ԥw���`�A��d_date����:<br>$queryupd<br>";
                                      }
                                      //echo " ���~�[�o�� �X��$wkinoutLESS[�p] �ƯZ�X�Ԥw���`�A�X�Բ��`�s��: $Ernum ���� <br>";
                                    }else{
                                      $f_var["at_errmsg"] .=  " ���~�[�o��1 �X��$wkinoutLESS[�p] �ɼƤ����̧C�u�� �� �h�Ԯɶ����`�A����s��ơI�I�I  <br>";
                                    }
                                  }
                                }else{
                                  if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"PT") && $wkinoutLESS>0 ){
                                    $queryupd = " update shiftmatch
                                                     set d_empno = '$updempno',
                                                         d_proc = '$upddproc',
                                                         d_date = '$updddate'
                                                   where s_num = '$Ernum'
                                                     and d_date = '0000-00-00 00:00:00'
                                                ";
                                    sl_open("gaswork");
                                    if( !mysql_query($queryupd) ){
                                      $f_var["at_errmsg"] .= "PT�[�o�� �ƯZ�X�Ԥw���`$wkinoutLESS[�p]�A��d_date����:<br>$queryupd<br>";
                                    }
                                    //echo " PT�[�o�� �ƯZ�X�Ԥw���`�A�X�Բ��`�s��: $Ernum ���� <br>";
                                  }else{
                                    $f_var["at_errmsg"] .= " ���`�X�Ԥ��:$Erwkday      �Z��: $NewClassCode  �X�Ԯɼ�:$wkinoutLESS �p <br>";
                                    $f_var["at_errmsg"] .= " �W�Z�ɶ�$NewClassTimeStart �P ��ڥX�Ԯɶ�".$row5["wktimemin1"]." �ۮt ".$stimeLESS." ���A<br>";
                                    $f_var["at_errmsg"] .= " �U�Z�ɶ�$NewClassTimeEnd   �P ��ڰh�Ԯɶ�".$row5["wktimemax2"]." �ۮt ".$etimeLESS." ���A���`�X�h�Ԥ���s��ơI�I�I <hr>";
                                      
                                  }  
                                }
      
                              }
      
                            }
                          }
                        }else if( $row4["wkD1"]==$Erwkday ){
                          if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"��") OR
                              strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"�Ұ�") OR
                              strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"��w") OR
                              $NewClassCode == "--" ){
                              $queryupd = " update shiftmatch
                                               set d_empno = '$updempno',
                                                   d_proc = '$upddproc',
                                                   d_date = '$updddate'
                                             where s_num = '$Ernum'
                                               and d_date = '0000-00-00 00:00:00'
                                          ";
                              sl_open("gaswork");
                              if( !mysql_query($queryupd) ){
                                $f_var["at_errmsg"] .= "�[�o��[��/�Ұ�/��w/�ůZ] �ƯZ�X�Ԥw���`�A��d_date����:<br>$queryupd<br>";
                              }
                              //echo " �[�o��[��/�Ұ�/��w/�ůZ] �ƯZ�X�Ԥw���`�A�X�Բ��`�s��: $Ernum ���� <br>";
                          }else{
                            //���i��[�Z����
                            if( $stimeLESS >= 0 AND $stimeLESS < 30 ){
                              if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"PT") ){
                                $queryupd = " update shiftmatch
                                                 set d_empno = '$updempno',
                                                     d_proc = '$upddproc',
                                                     d_date = '$updddate'
                                               where s_num = '$Ernum'
                                                 and d_date = '0000-00-00 00:00:00'
                                            ";
                                sl_open("gaswork");
                                if( !mysql_query($queryupd) ){
                                  $f_var["at_errmsg"] .= "PT�[�o�� �ƯZ�X�Ԥw���`�A��d_date����:<br>$queryupd<br>";
                                }
                                //echo " PT�[�o�� �ƯZ�X�Ԥw���`�A�X�Բ��`�s��: $Ernum ���� <br>";
                              }else{
                                if( ( $etimeLESS>=0 OR ( $row4["wktimeS"]>$row4["wktimeE"] AND $row4["wkD2"]>$row4["wkD1"] ) ) AND $wkinoutLESS>=$NewClassWorkHr ){
                                  $queryupd = " update shiftmatch
                                                   set d_empno = '$updempno',
                                                       d_proc = '$upddproc',
                                                       d_date = '$updddate'
                                                 where s_num = '$Ernum'
                                                   and d_date = '0000-00-00 00:00:00'
                                              ";
                                  sl_open("gaswork");
                                  if( !mysql_query($queryupd) ){
                                    $f_var["at_errmsg"] .= "���~�[�o�� �X��$wkinoutLESS[�p] �ƯZ�X�Ԥw���`�A��d_date����:<br>$queryupd<br>";
                                  }
                                  //echo " ���~�[�o�� �X��$wkinoutLESS[�p] �ƯZ�X�Ԥw���`�A�X�Բ��`�s��: $Ernum ���� <br>";
                                }else{
                                  $f_var["at_errmsg"] .= " ���~�[�o�� �X��$wkinoutLESS[�p] �ɼƤ����̧C�u�� �� �h�Ԯɶ����`�A����s��ơI�I�I  <br>";
                                }
                              }
                            }else{
                              if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"PT") && $wkinoutLESS>0 ){
                                $queryupd = " update shiftmatch
                                                 set d_empno = '$updempno',
                                                     d_proc = '$upddproc',
                                                     d_date = '$updddate'
                                               where s_num = '$Ernum'
                                                 and d_date = '0000-00-00 00:00:00'
                                            ";
                                sl_open("gaswork");
                                if( !mysql_query($queryupd) ){
                                  $f_var["at_errmsg"] .= "PT�[�o�� �ƯZ�X�Ԥw���`$wkinoutLESS[�p]�A��d_date����:<br>$queryupd<br>";
                                }
                                //echo " PT�[�o�� �ƯZ�X�Ԥw���`�A�X�Բ��`�s��: $Ernum ���� <br>";
                              }else{
                                $f_var["at_errmsg"] .= " ���`�X�Ԥ��:$Erwkday      �Z��: $NewClassCode  �X�Ԯɼ�:$wkinoutLESS �p <br>";
                                $f_var["at_errmsg"] .= " �W�Z�ɶ�$NewClassTimeStart �P ��ڥX�Ԯɶ�".$row4["strwkT11"]." �ۮt ".$stimeLESS." ���A<br>";
                                $f_var["at_errmsg"] .= " �U�Z�ɶ�$NewClassTimeEnd   �P ��ڰh�Ԯɶ�".$row4["strwkT12"]." ��?t ".$etimeLESS." ���A���`�X�h�Ԥ���s��ơI�I�I <hr>"; 
                              }
                                
                            }
                          }
                        }else{
                          //echo " ���h�� $Erwkday �A�P�_������ŦX�A���B�z  <br>";
                          //�줣��X�ԫܥi��O�ůZ���ΥX�ԡA�o�̥[�W���ΥX�Ԫ��P�_
                          if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"��") OR
                              strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"�Ұ�") OR
                              strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"��w") OR
                              $NewClassCode == "--" ){
                              $queryupd = " update shiftmatch
                                               set d_empno = '$updempno',
                                                   d_proc = '$upddproc',
                                                   d_date = '$updddate'
                                             where s_num = '$Ernum'
                                               and d_date = '0000-00-00 00:00:00'
                                          ";
                              sl_open("gaswork");
                              if( !mysql_query($queryupd) ){
                                $f_var["at_errmsg"] .= "�i�h�j�[�o��[��/�Ұ�/��w/�ůZ(--)] �ƯZ�X�Ԥw���`�A��d_date����:<br>$queryupd<br>";
                              }
                              $f_var["at_errmsg"] .=  "�i�h�j �[�o��[��/�Ұ�/��w/�ůZ(--)] �ƯZ�X�Ԥw���`�A�X�Բ��`�s��: $Ernum ���� <br>";
                          }
                          //���i��j�]�Z(�X�Ԥ鬰�e�@��)
                          /*if( $stimeLESS >= 0 AND $stimeLESS < 30 ){
                            if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"PT") ){
                              $queryupd = " update shiftmatch
                                               set d_empno = '$updempno',
                                                   d_proc = '$upddproc',
                                                   d_date = '$updddate'
                                             where s_num = '$Ernum'
                                               and d_date = '0000-00-00 00:00:00'
                                          ";
                              sl_open("gaswork");
                              if( !mysql_query($queryupd) ){
                                $f_var["at_errmsg"] .=  "PT�[�o�� �ƯZ�X�Ԥw���`�A��d_date����:<br>$queryupd<br>";
                              }
                              $f_var["at_errmsg"] .=  " PT�[�o�� �ƯZ�X�Ԥw���`�A�X�Բ��`�s��: $Ernum ���� <br>";
                            }else{
                              if( $etimeLESS>=0 AND $wkinoutLESS>=$NewClassWorkHr ){
                                $queryupd = " update shiftmatch
                                                 set d_empno = '$updempno',
                                                     d_proc = '$upddproc',
                                                     d_date = '$updddate'
                                               where s_num = '$Ernum'
                                                 and d_date = '0000-00-00 00:00:00'
                                            ";
                                sl_open("gaswork");
                                if( !mysql_query($queryupd) ){
                                  $f_var["at_errmsg"] .=  "���~�[�o�� �X��$wkinoutLESS[�p] �ƯZ�X�Ԥw���`�A��d_date����:<br>$queryupd<br>";
                                }
                                $f_var["at_errmsg"] .= " ���~�[�o�� �X��$wkinoutLESS[�p] �ƯZ�X�Ԥw���`�A�X�Բ��`�s��: $Ernum ���� <br>";
                              }else{
                                $f_var["at_errmsg"] .= " ���~�[�o��2 �X��$wkinoutLESS[�p] �ɼƤ����̧C�u�� �� �h�Ԯɶ����`�A����s��ơI�I�I  <br>";
                              }
                            }
                          }*/
                        }
                      }
      
                    }else{
                      if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"��") OR
                          strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"�Ұ�") OR
                          strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"��w") OR
                          $NewClassCode == "--" ){
                          $queryupd = " update shiftmatch
                                           set d_empno = '$updempno',
                                               d_proc = '$upddproc',
                                               d_date = '$updddate'
                                         where s_num = '$Ernum'
                                           and d_date = '0000-00-00 00:00:00'
                                      ";
                          sl_open("gaswork");
                          if( !mysql_query($queryupd) ){
                            $f_var["at_errmsg"] .= "�[�o��[��/�Ұ�/��w/�ůZ] �ƯZ�𰲤��ΥX�ԡA�w���`�A��d_date����:<br>$queryupd<br>";
                          }
                          //echo " �[�o��[��/�Ұ�/��w/�ůZ] �ƯZ�𰲤��ΥX�ԡA�w���`�A�X�Բ��`�s��: $Ernum ���� <br>";
                      }else{
                        //$f_var["at_errmsg"] .= "  $Ergid - $Eruid - $Erwkday($Erym) -> ���X�ԡA����s��ơI�I�I <br>";
                        $f_var["at_errmsg"] .= "  $Ergid - $Eruid - $Erwkday($Erym) -> ���X�ԡA�ˬd���O�_���X�ԡG <br>";
                        //�줣��X�ԫܥi��O�ůZ���ΥX�ԡA�o�̥[�W���ΥX�Ԫ��P�_
                        if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"��") OR
                            strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"�Ұ�") OR
                            strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"��w") OR
                            $NewClassCode == "--" ){
                            $queryupd = " update shiftmatch
                                             set d_empno = '$updempno',
                                                 d_proc = '$upddproc',
                                                 d_date = '$updddate'
                                           where s_num = '$Ernum'
                                             and d_date = '0000-00-00 00:00:00'
                                        ";
                            sl_open("gaswork");
                            if( !mysql_query($queryupd) ){
                              $f_var["at_errmsg"] .= "�i���X�ԡj�[�o��[��/�Ұ�/��w/�ůZ(--)] �ƯZ�X�Ԥw���`�A��d_date����:<br>$queryupd<br>";
                            }
                            $f_var["at_errmsg"] .= "�i���X�ԡj �[�o��[��/�Ұ�/��w/�ůZ(--)] �ƯZ�X�Ԥw���`�A�X�Բ��`�s��: $Ernum ���� <br>";
                        }
                      }
                    }
      
                  }else{
                    $f_var["at_errmsg"] .= "  $Ergid - $Eruid - $Erwkday($Erym) -> �ƯZ�Z���L�]�w �� �]�w���~�ƯZ�A����s��ơI�I�I <br>";
                  }
      
                }else{
                  $f_var["at_errmsg"] .= "  $Ergid - $Eruid - $Erwkday($Erym) -> ���ƯZ�A����s��ơI�I�I <br>";
                }
      
              }
            }
          }
        }
      }
      if( strlen($f_var["at_errmsg"])>0 ){
        return  $f_var["at_errmsg"];
      }
    }
    
  }
// **************************************************************************
//  ��ƦW��: ul_group_dept()
//  ��ƥ\��: ���w�^�Ǻ޲z�h����
//  �ϥΤ覡: ul_group_dept($vsource, $vdate, $vtype, $voutdept, $voutput)
//            $vsource: ���s �� HRM�K�X�����N�X
//            $vdate:  �d�߬Y�@�ɶ��I�ӤH�����A (�褸�~���)
//            $vtype: (gas)�o�~�B(mslb)�B��B(slh)���y�B(�ť�)����
//            $voutdept: (gid)�o�~�T�X�B(dept)HRM�K�X�����N�X�B(sap)sap�N�XL�}�Y�|�X
//            $voutput: array=�^�ǰ}�C����,�i���Ω�U�Ԧ����
//                      where_list=�^�ǳr�I���j����,�i���Ω�SQL��where����
//  �{���]�p: �Ϊ�
//  �]�p���: 2019.03.05
// **************************************************************************
  function sl_group_dept($vsource,$vdate='',$vtype='',$voutdept='dept',$voutput='array'){
    if( ''==trim($vsource) ){
      return;
    }
    $vsource2 = substr($vsource,8,7);
    sl_openhrmdb("HRMDB");
    if( ''==$vsource ){
      $vsource = $_SESSION['login_empno'];
    }
    if( $vdate>date("Ymd") OR ''==trim($vdate) ){
      $vdate = date("Ymd");
    }
    if( strlen($vsource)>7 AND 'S'==substr($vsource,0,1) ){ //�ϥγ����d�޲z�h����
      $vsource = substr($vsource,0,8);
      $swh_cte_in = " a.Code = '{$vsource}' ";
    }else{ //�ϥέ��s�d�޲z�h����
      $swh_cte_in = " Employee.Code = '{$vsource}' ";
    }
    if( $vdate!=date("Ymd") AND strlen($vsource)==7 ){
      $esql="SELECT Department.Code AS dept_id
             FROM   EmployeeTranslation
                    LEFT JOIN Employee on EmployeeTranslation.EmployeeId = Employee.EmployeeId
                    LEFT JOIN Department on EmployeeTranslation.OldDepartmentId = Department.DepartmentId
             WHERE Employee.Code = '{$vsource}'
                   AND CONVERT(varchar(100), EmployeeTranslation.TranslationDate, 112) > '{$vdate}'
            ";  //�d�߬O�_���ե�����
      $eres = mssql_query($esql);
      $eqty = mssql_num_rows($eres);
      if($eqty>0){
        while($erow = mssql_fetch_array($eres)){
          $vdpt = $erow['dept_id'];
          $swh_cte_in = " a.Code = '{$vdpt}' "; //�p�G���N�ϥθӤH����l�����N���h��޲z�h����
        }
      }
    }
    if( strpos($vtype,"/") ){ //�����w�h����B���O
      $ex_type = explode("/",$vtype);
      $swhere = " AND ( ";
      foreach($ex_type as $key => $val) {
        switch($ex_type[$key]){
          case 'gas': //�o�~
               $arwhere[] = " tb.Code LIKE 'S235%'  ";
               $arwhere[] = " tb.Code LIKE 'S236%'  ";
               $arwhere[] = " tb.Code LIKE 'S238%'  ";
               $arwhere[] = " tb.Code NOT LIKE 'S23_2%'  ";
               break; //�B��
          case 'mslb':
               $arwhere[] = " tb.Code LIKE 'S21%' ";
               break;
          case 'slh': //���y
               $arwhere[] = " tb.Code LIKE 'S22%' ";
               break;
          default:
               break;
        }
      }
      $swhere .= implode(" OR ",$arwhere)." ) ";
    }else{
      switch($vtype){
        case 'gas': //�o�~
             $swhere = " AND (tb.Code LIKE 'S235%' OR
                              tb.Code LIKE 'S236%' OR
                              tb.Code LIKE 'S238%' )
                         /*AND  tb.Code NOT LIKE 'S23_2%'*/ ";
             break; //�B��
        case 'mslb':
             $swhere = " AND tb.Code LIKE 'S21%' ";
             break;
        case 'slh': //���y
             $swhere = " AND tb.Code LIKE 'S22%' ";
             break;
        default:
             break;
      }
    }
    $vsql="WITH tb(DepartmentId,Code,Name,ShortName,enddate) AS
          (
            SELECT a.DepartmentId, a.Code, a.Name, a.ShortName,
                   ISNULL(CONVERT(varchar, a.BeginEndDate_EndDate, 112),'') AS enddate
            FROM   Employee
                   LEFT JOIN Department as a ON Employee.DepartmentId = a.DepartmentId
            WHERE  {$swh_cte_in}
            UNION ALL
            SELECT b.DepartmentId, b.Code, b.Name, b.ShortName,
                   ISNULL(CONVERT(varchar, b.BeginEndDate_EndDate, 112),'') AS enddate
            FROM   Department as b
                   JOIN tb on b.ParentId = tb.DepartmentId
          )
          SELECT tb.Code as dept_id,
                 tb.Name as dept_name,
                 tb.ShortName as dept_sname
          FROM   tb
          WHERE  1=1 {$swhere}
                 AND (tb.enddate > '{$vdate}'
                      OR tb.enddate = ''
                      OR tb.enddate = '99991231')
          ORDER BY tb.Code
          ";
    if( '1130091'==$_SESSION["login_empno"] ){
	echo "<pre>".$vsql."</pre>";
	}
    //echo "<pre>".$vsql."</pre>";
    $vres = mssql_query($vsql);
    $vqty = mssql_num_rows($vres);
    if($vqty>0){
      while($vrow = mssql_fetch_array($vres)){
        $avalue[]=$vrow['dept_id'];
        $ashow[]=$vrow['dept_sname'];
      }
    }
    //�ݥ��H��
    //echo "��: <pre><font color=red>".$vsource."</font></pre>";
    if( strlen($vsource)==7){
      $psql="SELECT Employee.Code AS emp,
                    Employee.CnName AS name,
                    tb.Code AS dept_id,
                    tb.Name AS dept_name
             FROM   EmployeePartJob
                    LEFT JOIN Employee on EmployeePartJob.EmployeeId = Employee.EmployeeId
                    LEFT JOIN Department as tb on EmployeePartJob.DepartmentId = tb.DepartmentId
             WHERE  Employee.Code = '{$vsource}'
                    AND ISNULL(CONVERT(varchar, EmployeePartJob.BeginDate, 112),'') <='{$vdate}'
                    AND ISNULL(CONVERT(varchar, EmployeePartJob.EndDate, 112),'') >'{$vdate}'
                    AND EmployeePartJob.IsEffective = '1'
                    {$swhere}
             ORDER BY Employee.CnName
            ";
          //echo "<pre>".$psql."</pre>";
      $pres = mssql_query($psql);
      $pqty = mssql_num_rows($pres);
      if($pqty>0){
        while($prow = mssql_fetch_array($pres)){
          $vfd_ptj = $prow['dept_id'];
          $v2sql="WITH tb(DepartmentId,Code,Name,ShortName,enddate) AS
                (
                  SELECT a.DepartmentId, a.Code, a.Name, a.ShortName,
                         ISNULL(CONVERT(varchar, a.BeginEndDate_EndDate, 112),'') AS enddate
                  FROM   Employee
                         LEFT JOIN Department as a ON Employee.DepartmentId = a.DepartmentId
                  WHERE  a.Code = '{$vfd_ptj}'
                  UNION ALL
                  SELECT b.DepartmentId, b.Code, b.Name, b.ShortName,
                         ISNULL(CONVERT(varchar, b.BeginEndDate_EndDate, 112),'') AS enddate
                  FROM   Department as b
                         JOIN tb on b.ParentId = tb.DepartmentId
                )
                SELECT tb.Code as dept_id,
                       tb.Name as dept_name,
                       tb.ShortName as dept_sname
                FROM   tb
                WHERE  1=1 {$swhere}
                       AND (tb.enddate > '{$vdate}'
                            OR tb.enddate = ''
                            OR tb.enddate = '99991231')
                ORDER BY tb.Code
                ";
          //echo "<pre>".$v2sql."</pre>";
          $v2res = mssql_query($v2sql);
          $v2qty = mssql_num_rows($v2res);
          if($v2qty>0){
            while($v2row = mssql_fetch_array($v2res)){
              if(!in_array($v2row['dept_id'],$avalue)){
                $avalue[]=$v2row['dept_id'];
                $ashow[]=$v2row['dept_sname'];
              }
            }
          }
        }
      }
    }else if (strlen($vsource)>7){
      $psql="SELECT Employee.Code AS emp,
                    Employee.CnName AS name,
                    tb.Code AS dept_id,
                    tb.Name AS dept_name
             FROM   EmployeePartJob
                    LEFT JOIN Employee on EmployeePartJob.EmployeeId = Employee.EmployeeId
                    LEFT JOIN Department as tb on EmployeePartJob.DepartmentId = tb.DepartmentId
             WHERE  Employee.Code = '{$vsource2}'
                    AND ISNULL(CONVERT(varchar, EmployeePartJob.BeginDate, 112),'') <='{$vdate}'
                    AND ISNULL(CONVERT(varchar, EmployeePartJob.EndDate, 112),'') >'{$vdate}'
                    AND EmployeePartJob.IsEffective = '1'
                    {$swhere}
             ORDER BY Employee.CnName
            ";
      //echo "<pre>".$psql."</pre>";
      $pres = mssql_query($psql);
      $pqty = mssql_num_rows($pres);
      if($pqty>0){
        while($prow = mssql_fetch_array($pres)){
          $vfd_ptj = substr($prow['dept_id'],0,4)."1".substr($prow['dept_id'],5,3);
          $v2sql="WITH tb(DepartmentId,Code,Name,ShortName,enddate) AS
                (
                  SELECT a.DepartmentId, a.Code, a.Name, a.ShortName,
                         ISNULL(CONVERT(varchar, a.BeginEndDate_EndDate, 112),'') AS enddate
                  FROM   Employee
                         LEFT JOIN Department as a ON Employee.DepartmentId = a.DepartmentId
                  WHERE  a.Code = '{$vfd_ptj}'
                  UNION ALL
                  SELECT b.DepartmentId, b.Code, b.Name, b.ShortName,
                         ISNULL(CONVERT(varchar, b.BeginEndDate_EndDate, 112),'') AS enddate
                  FROM   Department as b
                         JOIN tb on b.ParentId = tb.DepartmentId
                )
                SELECT tb.Code as dept_id,
                       tb.Name as dept_name,
                       tb.ShortName as dept_sname
                FROM   tb
                WHERE  1=1 {$swhere}
                       AND (tb.enddate > '{$vdate}'
                            OR tb.enddate = ''
                            OR tb.enddate = '99991231')
                ORDER BY tb.Code
                ";
          //echo "<pre>".$v2sql."</pre>";
          $v2res = mssql_query($v2sql);
          $v2qty = mssql_num_rows($v2res);
          if($v2qty>0){
            while($v2row = mssql_fetch_array($v2res)){
              if(!in_array($v2row['dept_id'],$avalue)){
                $avalue[]=$v2row['dept_id'];
                $ashow[]=$v2row['dept_sname'];
              }
            }
          }
        }
      }
    }
    $vfield = "";
    switch($voutdept){
      case 'gid': //�o�~�T�X
           $vfield = "b_gid";
           break;
      case 'sap': //sap�N�XL�}�Y�|�X
           $vfield = "sap_dept_id";
           break;
      default:
           break;
    }
    if( ""!=$vfield and !empty($avalue) ){
      $fv_dept_in = "'".implode("','",$avalue)."'";
      unset($avalue);
      unset($ashow);
      sl_open('sl');
      $esql = "SELECT {$vfield} as dpt, sname
               FROM   sl.dept
               WHERE  dept_id in ({$fv_dept_in})
                      AND {$vfield} != ''
               ";
      //echo "<pre>".$esql."</pre>";
      $eres = mysql_query($esql);
      $eqty = mysql_num_rows($eres);
      if($eqty>0){
        while($erow = mysql_fetch_array($eres) ){
          $avalue[]=$erow['dpt'];
          $ashow[]=$erow['sname'];
        }
      }
    }

    if( !empty($avalue) ){
      if('where_list'==$voutput){
        $fd_where = str_replace("'',","","'".implode("','",$avalue)."'");
        return($fd_where);
      }
      else{
        return array($avalue,$ashow,count($avalue));
      }
    }else{
      return;
    }

  }
// **************************************************************************
//  ��ƦW��: sl_getboss()
//  ��ƥ\��: �Ǧ^���ݥD��(���s,�m�W)
//  �ϥΤ覡: $mar_boss = sl_getboss(���s,���ݴX��)
//            $vemp: ���s
//            $vrank: ���ݴX��
//            $voutput: array=�^�ǰ}�C����
//                      where_list=�^�ǳr�I���j����,�i���Ω�SQL��where����
//            $sys: hrm �H��  flw �qñ  flwc ���ݹqñ
//  �{���]�p: �Ϊ�
//  �]�p���: 2019.03.13
// **************************************************************************
  function sl_getboss($vemp,$vrank='1',$voutput='array',$sys='hrm'){
    if( ''==trim($vemp) ){
      return;
    }
    if('hrm'==$sys){
      sl_openhrmdb("HRMDB");    
    }else if( 'flwc'==$sys ){
      sl_openef2kc('EF2KWeb');
    }else{
      sl_openef2k('EF2KWeb');
    } 
    $vcnt=0;
    $do_emp=$vemp;
    do{
      $vcnt++;
      switch($sys){
        case 'hrm':
             $vsql = "SELECT emp2.Code AS empno,
                             emp2.CnName AS name,
                             Job.Code AS job_id,
                             Job.Name AS job_name
                      FROM   Employee AS emp1
                             LEFT JOIN Employee AS emp2 ON emp1.DirectorId = emp2.EmployeeId
                             LEFT JOIN Job ON emp2.JobId = Job.JobId
                      WHERE  emp1.Code = '{$do_emp}'
                    ";
             break;
        case 'flwc': 
        case 'flw':   
             $vsql = "SELECT rsk2.resak001 AS empno,
                             rsk2.resak002 AS name,
                             resan.resan004 AS job_id,
                             resab.resab002 AS job_name
                      FROM   resak AS rsk1
                             LEFT JOIN resak AS rsk2 ON rsk1.resak013 = rsk2.resak001
                             LEFT JOIN resan ON rsk2.resak001 = resan.resan003
                                                and rsk2.resak015 = resan.resan001
                             LEFT JOIN resab ON resan.resan004 = resab.resab001
                      WHERE  rsk1.resak001 = '{$do_emp}'
                    "; 
             break;
        default:
             break;
      }
      //echo "<pre>{$vsql}</pre>";
      $vres = mssql_query($vsql);
      $vqty = mssql_num_rows($vres);
      if($vqty>0){
        while($vrow = mssql_fetch_array($vres)){
          if( $do_emp==$vrow['empno'] ){ //���ݵ��󥻤H
            break;
          }
          $ar_getboss[$vcnt]['empno'] = $vrow['empno'];
          $ar_getboss[$vcnt]['name'] = $vrow['name'];
          $ar_getboss[$vcnt]['job'] = $vrow['job_id'];
          $ar_getboss[$vcnt]['jobn'] = $vrow['job_name'];
          $arempboss[$vrow['empno']] = $vrow['empno'];
          $do_emp=$vrow['empno'];
        }
      }else{
        $vcnt=$vrank; //�j����X�j��
      }
    }while($vcnt<$vrank);
    if( !empty($arempboss) ){
      if('where_list'==$voutput){
        $vfd_where = str_replace("'',","","'".implode("','",$arempboss)."'");
        return($vfd_where);
      }
      else{
        return($ar_getboss);
      }
    }else{
      return;
    }

  }
// **************************************************************************
//  ��ƦW��: sl_getstaff()
//  ��ƥ\��: ���w�^�ǳ���
//  �ϥΤ覡: sl_getstaff($vemp, $vpass, $vjob, $vopt, $vdates, $vdatee, $voutput)
//            $vemp: ���s �� HRM�K�X�����N�X
//            $vpass: Y / N / (�ť�)���� �O�_��n�JEIP����
//            $vjob: ���w¾�ȥN�Xjob_id), �h��¾�ȥi�H�Ρu/�v���j
//            $vopt: (gas)�o�~�B(mslb)�B��B(slh)���y�B(�ť�)����
//            $vdates: �_�l, �Y�@�϶��b¾�H��, �w�]���t�Τ��
//            $vdatee: �פ�, �Y�@�϶��b¾�H��, �w�]���t�Τ��
//            $voutput: select=�^�ǰ}�C����,�i���Ω�U�Ԧ����  value->���s show->�m�W
//                      array=�^�ǰ}�C����,���Ѫ���Ƥ���h,�i�ۦ�B��
//                      where_list=�^�ǳr�I���j����,�i���Ω�SQL��where����
//  �{���]�p: �Ϊ�
//  �]�p���: 2019.03.21
// **************************************************************************
  function sl_getstaff($vemp,$vpass='',$vjob='',$vopt='',$vdates='',$vdatee='',$voutput='array'){
    if( ''==trim($vemp) ){
      return;
    }
    //echo "{$vemp}-{$vpass}-{$vjob}-{$vopt}-{$voutput}<br>";
    $swhere = "";
    if( 'Y'==$vpass ){ //���w����޲z�� (��n�Jeip)
      $swhere .= " AND SUBSTRING(WorkType_Info.ScName,1,1) = '1' ";
    }else if( 'N'==$vpass ){ //���w����D�޲z��
      $swhere .= " AND SUBSTRING(WorkType_Info.ScName,1,1) <> '1' ";
    }
    if( strpos($vjob,"/") ){ //�����w�h��job_id
      $wh_in_job = "'".str_replace("/","','",$vjob)."'";
      $swhere .= " AND Job.Code in ({$wh_in_job}) ";
    }else{
      if( ''!=$vjob ){
        $swhere .= " AND Job.Code = '{$vjob}' ";
      }
    }
    switch($vopt){
      case 'gas': //�o�~
           $swhere .= " AND Department.Code LIKE 'S23%' ";
           break;
      case 'mslb': //�B��
           $swhere .= " AND Department.Code LIKE 'S21%' ";
           break;
      case 'slh': //���y
           $swhere .= " AND Department.Code LIKE 'S22%' ";
           break;
      default:
           break;
    }
    if( !is_numeric($vdates) AND strlen($vdates)!=8 ){
      $vdates = date("Ymd");
    }
    if( !is_numeric($vdatee) AND strlen($vdatee)!=8 ){
      $vdatee = date("Ymd");
    }
    if( $vdatee<$vdates ){
      $vdates = date("Ymd");
      $vdatee = date("Ymd");
    }

    //$vdate_e = '99991231';
    sl_openhrmdb("HRMDB");
    if( strlen($vemp)>7 ){  //����
      /*
      $vsqlin = "SELECT a.EmployeeId, a.Code, a.CnName, a.EmployeeStateId, a.JobId, a.PositionId, a.DepartmentId, a.WorkTypeId, a.Date, a.IDCardNo
                 FROM   Department AS d1
                        LEFT JOIN Employee AS a ON d1.DepartmentId = a.DepartmentId
                 WHERE  d1.Code = '{$vemp}'
                 UNION ALL
                 SELECT b.EmployeeId, b.Code, b.CnName, b.EmployeeStateId, b.JobId, b.PositionId, b.DepartmentId, b.WorkTypeId, b.Date, b.IDCardNo
                 FROM   Employee as b
                 JOIN tb on b.DirectorId = tb.EmployeeId
                 
                  WITH tb AS (
                    SELECT dpt.Code , dpt.ShortName, dpt.DepartmentId, dpt.Name
                    FROM   Department dpt where dpt.Code = '{$vemp}'
                    UNION ALL
                    SELECT dpt.Code , dpt.ShortName, dpt.DepartmentId, dpt.Name
                    FROM   Department dpt, tb where dpt.ParentId = tb.DepartmentId
                  )  ";
      */
      $vsql = "   WITH tb AS (
                    SELECT dpt.Code , dpt.ShortName, dpt.DepartmentId, dpt.Name
                    FROM   Department dpt where dpt.Code = '{$vemp}'
                    UNION ALL
                    SELECT dpt.Code , dpt.ShortName, dpt.DepartmentId, dpt.Name
                    FROM   Department dpt, tb where dpt.ParentId = tb.DepartmentId
                  ) 
                  SELECT  
                    Employee.Code AS empno,
                    Employee.CnName AS name,
                    Job.Code AS job_id,
                    Job.Name AS job_name,
                    tb.Code AS dept_id,
                    tb.Name AS dept_name,
                    tb.ShortName AS dept_sname,
                    SUBSTRING(WorkType_Info.ScName,1,1) as work_id,
                    ISNULL(CONVERT(varchar, Employee.Date, 112),'') AS begin_date,
                    ISNULL(CONVERT(varchar, EmployeeDimission.PlanDate, 112),'') AS end_date,
                    Employee.IDCardNo AS id,
                    EmployeeState.Code as state
                  FROM  tb
                    LEFT JOIN Employee ON tb.DepartmentId = Employee.DepartmentId
                    LEFT JOIN EmployeeState on Employee.EmployeeStateId = EmployeeState.EmployeeStateId
                    LEFT JOIN Job ON Employee.JobId = Job.JobId
                    LEFT JOIN Position ON Employee.PositionId = Position.PositionId
                    LEFT JOIN CodeInfo AS WorkType_Info on Employee.WorkTypeId = WorkType_Info.CodeInfoId
                    LEFT JOIN EmployeeDimission on Employee.EmployeeId = EmployeeDimission.EmployeeId
                    LEFT JOIN Department ON tb.DepartmentId = Department.DepartmentId
                  WHERE  
                    tb.Code != '{$vemp}'
                    AND CONVERT(varchar, Employee.Date, 112) <= '{$vdatee}'
                    AND ( ( CONVERT(varchar, EmployeeDimission.PlanDate, 112) < '{$vdatee}'
                         AND CONVERT(varchar, EmployeeDimission.PlanDate, 112) > '{$vdates}' )
                        OR EmployeeState.Code IN ('1001','2001') )
                  {$swhere}
                  ORDER BY Department.Code, Job.Code DESC            
                 ";
    }else{  //���s
      $vsqlin = "SELECT a.EmployeeId, a.Code, a.CnName, a.EmployeeStateId, a.JobId, a.PositionId, a.DepartmentId, a.WorkTypeId, a.Date, a.IDCardNo
                 FROM   Employee AS a
                 WHERE  a.Code = '{$vemp}'
                 UNION ALL
                 SELECT b.EmployeeId, b.Code, b.CnName, b.EmployeeStateId, b.JobId, b.PositionId, b.DepartmentId, b.WorkTypeId, b.Date, b.IDCardNo
                 FROM Employee as b
                 JOIN tb on b.DirectorId = tb.EmployeeId
                 ";
      $vsql="WITH tb(EmployeeId,Code,CnName,EmployeeStateId,JobId,PositionId,DepartmentId,WorkTypeId,Date,IDCardNo) AS
            (
              {$vsqlin}
            )
            SELECT tb.Code AS empno,
                   tb.CnName AS name,
                   Job.Code AS job_id,
                   Job.Name AS job_name,
                   Department.Code AS dept_id,
                   Department.Name AS dept_name,
                   Department.ShortName AS dept_sname,
                   SUBSTRING(WorkType_Info.ScName,1,1) as work_id,
                   ISNULL(CONVERT(varchar, tb.Date, 112),'') AS begin_date,
                   ISNULL(CONVERT(varchar, EmployeeDimission.PlanDate, 112),'') AS end_date,
                   tb.IDCardNo AS id,
                   EmployeeState.Code as state
            FROM   tb
                   LEFT JOIN EmployeeState on tb.EmployeeStateId = EmployeeState.EmployeeStateId
                   LEFT JOIN Job ON tb.JobId = Job.JobId
                   LEFT JOIN Position ON tb.PositionId = Position.PositionId
                   LEFT JOIN Department on tb.DepartmentId = Department.DepartmentId
                   LEFT JOIN CodeInfo AS WorkType_Info on tb.WorkTypeId = WorkType_Info.CodeInfoId
                   LEFT JOIN EmployeeDimission on tb.EmployeeId = EmployeeDimission.EmployeeId
            WHERE  tb.Code NOT LIKE 'S%'
                   AND tb.Code != '{$vemp}'
                   /*AND EmployeeState.Code IN ('1001','2001')*/
                   AND CONVERT(varchar, tb.Date, 112) <= '{$vdatee}'
                   AND ( ( CONVERT(varchar, EmployeeDimission.PlanDate, 112) < '{$vdatee}'
                           AND CONVERT(varchar, EmployeeDimission.PlanDate, 112) > '{$vdates}' )
                         OR EmployeeState.Code IN ('1001','2001') )
                   {$swhere}
            ORDER BY Department.Code, Job.Code DESC, tb.Code
            ";
    }

    //ECHO "<PRE>{$vsql}</PRE>";
    $vres = mssql_query($vsql);
    $vqty = mssql_num_rows($vres);
    if( 'select'==$voutput ){
      $ashow[]="--�п��--";	//add by ���\ 2021.01.22 
      $avalue[] ="--";					//add by ���\ 2021.01.22 
    }
    if($vqty>0){
      while($vrow = mssql_fetch_array($vres)){
      	//upd by ���\ 2021.01.22 
        $avalue[]=$vrow['empno'];  //upd by �Ϊ� 2021.05.24 ��^empno��key��
        //$ashow[]=trim($vrow['name'])."({$vrow['job_name']})";
        //$avalue[]=trim($vrow['name']);
        $ashow[] =$vrow['empno']."-".trim($vrow['name']);	
        
        $fk_emp = $vrow['empno'];
        $ardata[$fk_emp]['empno'] = $vrow['empno'];  //���s
        $ardata[$fk_emp]['name'] = $vrow['name'];  //�m�W
        $ardata[$fk_emp]['job'] = $vrow['job_id'];  //¾�ȥN�X
        $ardata[$fk_emp]['jobn'] = $vrow['job_name'];  //¾�ȦW��
        $ardata[$fk_emp]['dept'] = $vrow['dept_id'];  //�����N��
        $ardata[$fk_emp]['deptn'] = $vrow['dept_sname'];  //�����W��
        $ardata[$fk_emp]['begin_date'] = $vrow['begin_date']; //��¾��
        $ardata[$fk_emp]['end_date'] = $vrow['end_date'];  //��¾��
        $ardata[$fk_emp]['id'] = $vrow['id'];  //������
        $ardata[$fk_emp]['loa'] = "N"; //�d¾���~���O
        if( $vrow['state']=='2001' AND  $vrow['end_date']!='' ){
          $ardata[$fk_emp]['loa'] = "Y"; //�d¾���~ Y
        }
      }
    }
    if(!empty($avalue)){
      switch($voutput){
        case 'where_list':
             $fd_where = str_replace("'',","","'".implode("','",$avalue)."'");
             return($fd_where);
             break;
        case 'select':
             return array($avalue,$ashow,count($avalue));
             break;
        case 'array':
             return $ardata;
             break;
        default:
             return;
             break;
      }
    }else{
      return;
    }
  }
// **************************************************************************
//  ��ƦW��: sl_getupdept()
//  ��ƥ\��: �^�ǤW�h����
//  �ϥΤ覡: sl_getupdept($vdept, $lv, $voutput)
//            $vdept: HRM�K�X�����N�X
//            $lv: ���W�X�h���ݳ���
//            $voutput: array=�^�ǰ}�C����,�i���Ω�U�Ԧ����
//                      where_list=�^�ǳr�I���j����,�i���Ω�SQL��where����
//  �{���]�p: �Ϊ�
//  �]�p���: 2019.03.22
// **************************************************************************
  function sl_getupdept($vdept,$lv='1',$voutput='array'){
    if( ''==trim($vdept) ){
      return;
    }
    sl_openhrmdb("HRMDB");
    $vnum = $lv;
    $vdept_do = $vdept;
    do{
      $vsql = "SELECT b.Code as dept_id, b.ShortName as dept_sname,
                      Employee.Code as empno, Employee.CnName as name, Job.Code as job_id
               FROM   Department AS h
                      LEFT JOIN Department AS b ON h.ParentId = b.DepartmentId 
                      LEFT JOIN Employee ON b.Principal = Employee.EmployeeId
                      LEFT JOIN Job on Employee.JobId = Job.JobId
               WHERE  h.Code = '{$vdept_do}'
              ";
      $vres = mssql_query($vsql);
      $vqty = mssql_num_rows($vres);
      if($vqty>0){
        while($vrow = mssql_fetch_array($vres)){
          $avalue[]=$vrow['dept_id'];
          $ashow[]=$vrow['dept_sname'];
          $aboss[]=$vrow['empno']."-".$vrow['name']."-".$vrow['job_id'];
          $vdept_do = $vrow['dept_id']; 
        }
      }
      $vnum--;
    }while($vnum>0);
    if( !empty($avalue) ){
      if('where_list'==$voutput){
        $fd_where = str_replace("'',","","'".implode("','",$avalue)."'");
        return($fd_where);
      }
      else{
        return array($avalue,$ashow,$aboss,count($avalue));
      }
    }
    else{
      return;
    }
  }
  // **************************************************************************
  //  ��ƦW��: sl_show_cust_info()
  //  ��ƥ\��: show kna1 �Ȥᤤ��
  //  �ϥΤ覡: sl_show_cust_info($parm,$type,$output)
  //                              $type='code'�G��ܫȤ�N���B$type='name'�G��ܫȤᤤ��B$type=''�G��ܫȤ�N��-�Ȥᤤ��
  //                              $output='array'�G��X�}�C�B$output=''�G��X�r��
  //  �{���]�p: �¶v
  //  �]�p���: 2014.07.22
  // **************************************************************************
  function sl_show_cust_info($parm,$type='',$output=''){
    //if(trim($parm)==''){
    //  continue;
    //}
    $parm = mb_convert_encoding($parm,'utf-8','big5');
    //echo $parm."-".$type."-".$output."<br>";
    $f_var['oracle_server'] = sl_openoci('PRD'); // �}�Ҹ�Ʈw
    $sql = "
        select KNA1.KUNNR,
               KNA1.SORTL,
               KNA1.NAME1,
               KNA1.NAME2
          from SAPE68.KNA1
         where KNA1.MANDT = '368'
               AND ( KNA1.KUNNR like '%{$parm}%' or KNA1.NAME1 like '%{$parm}%' or KNA1.NAME2 like '%{$parm}%' )
      order by KNA1.KUNNR
           ";
    if('1430174'==$_SESSION['login_empno']){
      //echo $sql.'<br>';
    }
    $stid = oci_parse($f_var['oracle_server'],$sql);
    if(!oci_execute($stid)){
      sl_errmsg('SQL�y�k���~�I���p����T�H���I');
      exit ;
    }else{
      while($row = oci_fetch_assoc($stid)) {
        switch($output){
          case 'array':
            switch($type){
              case 'code':
                $value[$row['KUNNR']] = mb_convert_encoding($row['KUNNR'],'big5','utf-8');
                break;
              case 'name':
                $value[$row['KUNNR']] = mb_convert_encoding($row['NAME1'].$row['NAME2'],'big5','utf-8');
                break;
              default:
                $value[$row['KUNNR']] = mb_convert_encoding($row['KUNNR'].'-'.$row['NAME1'].$row['NAME2'],'big5','utf-8');
                break;
            }
            break;
          default:
            switch($type){
              case 'code':
                $value = mb_convert_encoding($row['KUNNR'],'big5','utf-8');
                break;
              case 'name':
                $value = mb_convert_encoding($row['NAME1'].$row['NAME2'],'big5','utf-8');
                break;
              default:
                $value = mb_convert_encoding($row['KUNNR'].'-'.$row['NAME1'].$row['NAME2'],'big5','utf-8');
                break;
            }
            break;
        }
      }
    }
    if('1430174'==$_SESSION['login_empno']){
    //echo '<pre>';
    //print_r($value);
    //echo '</pre>';
    }
    return $value;
  }
  // **************************************************************************
  //  ��ƦW��: sl_b_gid()
  //  ��ƥ\��: ��ܥ��o���έpcheckbox�e��
  //  �ϥΤ覡: sl_b_gid($f_var)  �s�Wmsel=1(�u�n��bsl_get($f_var)���U�Y�i)
  //                           ex:sl_get($f_var)
  //                              sl_b_gid($f_var);
  //--------------------------------------------------------------------------
  //                              �ק�msel=2(����)
  //                              $f_var['bgid']�G�o���N��
  //ex:$f_var['bgid'] => 801,812,816,825,826,827,832,833,808,815,817,819,824,828,829,830,831,802,804,805,807,811,813,821,822,823
  //  �{���]�p: �p��
  //  �]�p���: 2019.04.18
  // **************************************************************************
  function sl_b_gid($f_var){
    //echo '<pre>';
    //print_r($f_var);
    //echo '</pre>';
    $f_var['depts']['dept'] = array('�_��'  ,'�Ĥ@��','�ĤG��','�ĤT��','����'  ,'�ĥ|��','�Ĥ���','�Ĥ���','�n��'  ,'�ĤC��','�ĤK��','�ĤE��');
    $f_var['depts']['flag'] = array('500500','501001','502002','503003','600600','604004','605005','606006','800800','807007','808008','809009');
    $f_var["tp"]-> newBlock ("tb_script_inpt");
    $f_var["tp"]-> newBlock ("tb_list_slbgid"                     ); //
    //���
    $f_var["tp"]-> newBlock ("tv_submit"                     ); //
    $f_var["tp"]-> assign   ("tv_value"     , "�x�s"         );
    $f_var["tp"]-> newBlock ("tb_table_bd"        ); //�ɨ�
    if('2'==substr($f_var['msel'],0,1)) { // 2=�ק� C=�ƻs 85=�禬ñ��,upd by mimi 2011.01.06 ���ʰl�� �禬ñ�ַ|�Ψ�~
		  for($j=0;$j<count($f_var['depts']['dept']);$j++){
        switch($f_var['depts']['dept'][$j]){
          case '�����o��':
          case '�_��':
          case '�Ĥ@��':
          case '�ĤG��':
          case '�ĤT��':
          case '����':
          case '�ĥ|��':
          case '�Ĥ���':
          case '�Ĥ���':
          case '�n��':
          case '�ĤC��':
          case '�ĤK��':
          case '�ĤE��':
            $where_mrg_dept = sl_area_get_dept($f_var['depts']['flag'][$j],'b_gid');
            $mwhere = " and b_gid in ({$where_mrg_dept}) ";
          break;
          default:
            $mwhere = "123";
          break;
        }
        sl_open("gas");
        $query2 = "SELECT sname,b_gid
                   FROM company
                   WHERE stop_flag = ' '
                   and code not in ('701','702')
                   {$mwhere}";
        $result2  = mysql_query($query2);
        $str = '';
        $k = 0;
        $str2 = '';
        while($row2 = mysql_fetch_array($result2)){
          $d = $row2['sname'];
          $v = $row2['b_gid'];
          $b_gid = strstr($f_var['bgid'],$row2['b_gid']);
          if($b_gid <> NULL){
            $str .= "<div style='width:100px;height:20px;float:left;'><input type='checkbox' name='f_name_{$f_var['depts']['flag'][$j]}[]' value='{$v}' checked>".$d.'</div>';
          }else{
            $str .= "<div style='width:100px;height:20px;float:left;'><input type='checkbox' name='f_name_{$f_var['depts']['flag'][$j]}[]' value='{$v}'>".$d.'</div>';
          }
        }
        $gsber[] = $str;
      }
		}else{
      for($j=0;$j<count($f_var['depts']['dept']);$j++){
        switch($f_var['depts']['dept'][$j]){
          case '�����o��':
          case '�_��':
          case '�Ĥ@��':
          case '�ĤG��':
          case '�ĤT��':
          case '����':
          case '�ĥ|��':
          case '�Ĥ���':
          case '�Ĥ���':
          case '�n��':
          case '�ĤC��':
          case '�ĤK��':
          case '�ĤE��':
            $where_mrg_dept = sl_area_get_dept($f_var['depts']['flag'][$j],'b_gid');
            $mwhere = " and b_gid in ({$where_mrg_dept}) ";
          break;
          default:
            $mwhere = "123";
          break;
        }
        sl_open("gas");
        $query2 = "SELECT sname,b_gid
                   FROM company
                   WHERE stop_flag = ' '
                    and code not in ('701','702')
                   {$mwhere}";
        //echo $query2.'<br>';
        $result2  = mysql_query($query2);
        $str = '';
        $k = 0;
        while($row2 = mysql_fetch_array($result2)){
          $d = $row2['sname'];
          $v = $row2['b_gid'];
          //$k++;
          //if($k % 5==0){
		      //  $str .= "<div style='width:100px;height:20px;float:left;'><input type='checkbox' name='f_name_{$f_var['depts']['flag'][$j]}[]' value='{$v}'>".$d.'</div><br/>';
		      //}else{
		        $str .= "<div style='width:100px;height:20px;float:left;'><input type='checkbox' name='f_name_{$f_var['depts']['flag'][$j]}[]' value='{$v}'>".$d.'</div>';
		      //}
        }
        $gsber[] = $str;
      }
    }
    //echo '<pre>';
    //print_r($gsber2);
    //echo '</pre>';
    $f_var["tp"]-> newBlock (  "tb_in_que_hr_tr4"                         );
    $f_var["tp"]-> assign   ("tv_f_name"    , '����');
    $f_var["tp"]-> assign   ("tv_number4"    , '0'                 );
    for($i=0;$i<count($gsber);$i++){
      //echo substr($f_var['depts']['flag'][$i],0,1);
      if('' != $gsber[$i]){
        switch($f_var['depts']['dept'][$i]){
          case '�_��':
          case '����':
          case '�n��':
            $f_var["tp"]-> newBlock (  "tb_in_que_hr_tr"                         );
            $f_var["tp"]-> newBlock (  "tb_in_que_hr_tr2"                         );
            $f_var["tp"]-> assign   ("tv_number"      , substr($f_var['depts']['flag'][$i],0,1)                 );
            $f_var["tp"]-> assign   ("tv_f_name2"      , $f_var['depts']['dept'][$i]                 );
            break;
          default:
            $f_var["tp"]-> newBlock (  "tb_in_que_hr_tr"                         );
            $f_var["tp"]-> newBlock (  "tb_in_que_hr_tr3"                         );
            $f_var["tp"]-> assign   ("tv_number"    , $f_var['depts']['flag'][$i]                 );
    	      $f_var["tp"]-> assign   ("tv_f_name"    , $f_var['depts']['dept'][$i]);
    	      $f_var["tp"]-> assign   ("tv_dept"      , $gsber[$i]                 );
    	      $f_var["tp"]-> assign   ("tv_all_name"  , $f_var['depts']['flag'][$i]);
            break;
        }
      }
    }
  }
// **************************************************************************
//  ��ƦW��: sl_b_gid2()
//  ��ƥ\��: �o���N���ഫ����
//  �ϥΤ覡: sl_b_gid2($f_ary)
//  ��    ��: sl_disp_1($f_var)������
//
//  �ϥΤ覡: b_gid�o���N�� ex:301
//  �{���]�p: �P�p��
//  �]�p���: 2019.04.19
// **************************************************************************
function sl_b_gid2($f_ary){
  global $f_var;
  $n_gid = str_replace(",","','",$f_ary);
  $mwhere = " and b_gid in ('{$n_gid}') ";
  sl_open("gas");
  $query3 = "SELECT sname
             FROM company
             WHERE stop_flag = ' '
             {$mwhere}";
  //echo $query3.'<br>';
  $result3  = mysql_query($query3);
  $mfd_value = '�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@';
  $i=1;
  while($row3 = mysql_fetch_array($result3)){
    $u = fmod($i,10);
    //echo $u.'<br>';
    if($u==0){
      $mfd_value .= $row3['sname'].'<br>'.'�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@';
    }else{
      $mfd_value .= $row3['sname'].'�@�@';
    }
    $i++;
  }
  //$mfd_value = substr_replace($mfd_value,'',-1);
  return($mfd_value);
}
// **************************************************************************
//  ��ƦW��: sl_curl_get_acct()
//  ��ƥ\��: ���o�l�q����
//  �ϥΤ覡: sl_curl_get_acct($s_date,$e_date,$s_werks,$f_kind,$f_time,$f_acct)
//  �ϥλ���:  $s_date => �_�l��   ex 20190401
//            $e_date => �פ��   ex 20190430
//            $s_werks=> �d�߳�� ex L201
//            $f_kind => ���O
//              mn => �޲z�O��
//              sa => �P��O��
//              ss => ��~�~���J
//              so => ��~�~��X
//              oi => ��~���J
//              oe => ��~�O��
//              oo => ��~����
//            $f_time => ���ΤW�� ��뵹t �W�뵹p
//            $f_acct => �|�p��� ex 6188010000
//  �{���]�p:�h�Z
//  �]�p���:2019.05.30
// **************************************************************************
function sl_curl_get_acct($s_date,$e_date,$f_werks,$f_kind = 'total',$f_time = '',$f_acct = '',$bukrs = 'LV1'){
  $ch = curl_init();
  
  if('LV1'==$bukrs){
    $acctUrl = "http://slt2.slc.com.tw/~gas/1130937/get_yf5311.php?S_DATE1L={$s_date}&S_DATE1H={$e_date}&S_GSBERL={$f_werks}&S_GSBERH={$f_werks}&kind={$f_kind}&time={$f_time}&acct={$f_acct}&P_BUKRS={$bukrs}";
  }
  elseif('LW1'==$bukrs){
    $acctUrl = "http://slt2.slc.com.tw/~gas/1130937/get_yf5311_lw1.php?S_DATE1L={$s_date}&S_DATE1H={$e_date}&S_GSBERL={$f_werks}&S_GSBERH={$f_werks}&kind={$f_kind}&time={$f_time}&acct={$f_acct}&P_BUKRS={$bukrs}";
  }
  curl_setopt($ch,CURLOPT_URL,$acctUrl);
  //�ư�����header meta��T
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
  curl_setopt ($ch, CURLOPT_TIMEOUT, 30);
  $html = curl_exec($ch);
  curl_close($ch);
  return iconv('utf8','big5',$html);
}

function sl_recover(&$f_var,$a,$cut,$str){
  $f_var['explode'] = array('@','#','$');
  // echo $cut;
  $b = explode($f_var['explode'][$cut],$a[1]);
  if( $f_var['explode'][$cut] <> '$'){
    $str .= ";{$b[0]}";
    sl_recover($f_var,$b,$cut+1,$str);
  }
  else{
    $a_str = explode(';',$str);
    if($a_str[0] == "\nsa")
      $a_str[0] = "sa";
    $f_var['recover'][$a_str[0]][$a_str[1]][$a_str[2]][$b[0]] = $b[1];
  }
}
function sl_recover2(&$f_var,$a,$cut,$str){
  $f_var['explode'] = array('@','#');
  // echo $cut;
  $b = explode($f_var['explode'][$cut],$a[1]);
  if( $f_var['explode'][$cut] <> '#'){
    $str .= ";{$b[0]}";
    sl_recover2($f_var,$b,$cut+1,$str);
  }
  else{
    $a_str = explode(';',$str);
    if($a_str[0] == "\noi")
      $a_str[0] = "oi";
    $f_var['recover'][$a_str[0]][$a_str[1]][$b[0]] = $b[1];
  }
}
// **************************************************************************
//  ��ƦW��: sl_dept_gp()
//  ��ƥ\��: �v���s��
//  �ϥΤ覡: sl_dept_gp($dept)
//  �ϥλ���: $dept => login_hrm_dept_id 
//  �{���]�p: �Ϊ�
//  �]�p���: 2020.02.12
// **************************************************************************
function sl_dept_gp($vdept, $vjob=''){
  sl_open('it');
  $swhere = "";
  if( ''!=trim($vjob) ){
    $swhere = " AND ( job_id = '{$vjob}' OR job_id = '' ) ";
  }
  $sql = "SELECT GROUP_CONCAT( gp_id ) AS gp_id
          FROM it.ap_deptgroup
          WHERE d_date = '0000-00-00 00:00:00'
                AND dept_id = '{$vdept}'
                {$swhere}
         ";
  $res = mysql_query($sql);
  $qty = mysql_num_rows($res);
  if($qty > 0){
    $row = mysql_fetch_assoc($res);
    return $row['gp_id'];
  }
  else{                    
    return;
  }
}


  // **************************************************************************
  //  ��ƦW��: sl_eip2flwcd()
  //  ��ƥ\��: EIP�U�������q�lñ��-ñ�ֳ�,���ݥD��
  //  �ϥΤ覡:
  //  �{���]�p: �Ϊ�
  //  �]�p���: 2020.08.26
  // **************************************************************************
  function sl_eip2flwcd(&$f_var) {
    //ignore_user_abort(true);
    //set_time_limit(60);
    Global $_SESSION;
    Global $f_var;
    if( ''!=$f_var['f_b_empno'] ){
      $vb_empno   = $f_var['f_b_empno'];
      $vb_name    = '';
      $vb_dept_id = '';
    }else if( ''==$_SESSION["login_empno"] ){
      $vb_empno   = $f_var['f_b_empno'];
      $vb_name    = '';
      $vb_dept_id = '';
    }else{
      $vb_empno   = $_SESSION["login_empno"];
      $vb_name    = $_SESSION["login_name"];
      $vb_dept_id = $_SESSION["login_dept_id"];
    }

    $vb_date    = date("Y-m-d H:i:s");
    $vfromip    = $_SERVER["REMOTE_ADDR"];
    $vproc      = u_showproc(); // �{���N��
    $eipdb       = 'docs';
    $flwdb       = 'EF2KWeb';
    $fp         = fopen("http://eip.slc.com.tw/~sl/eip2flwcd.log", 'a'); //���г渹�W�c,�slog�d��
    $mftp_server = "175.98.134.105";         // ftp server


    //sl_chk_rak013($f_var); //�T�{�O�_���]�w���ݥD��
    $vdat1 = 'EF2KWeb';
    sl_openef2kc($vdat1);
    $query2 = "SELECT resak001,resak002,resak015,resal002,resak013
               FROM resak
                 LEFT JOIN resal
                   ON resak015 = resal001
               WHERE resak001 = '{$vb_empno}'
              ";
    $result2 = mssql_query($query2);
    $row2 = mssql_fetch_array($result2);
    if(''==$row2['resak013']){
      echo "<script language='JavaScript'>";
      echo "alert('�d�L���ݥD�ޡA���p���`���q�H�ƨ�U�B�z�C');";
      echo "history.back();";
      echo "</script>";

    }

    sl_openef2kc($flwdb);
    //������������������������������������������������������������������������������������������������������������������������������������������������������
    // (����20585)upd by �Ϊ� 2013.07.08 �������v���H���bresak004�|�H���s+_U���
    $u_query = "SELECT resak001,resak002,resak015,resal002,resak013
                FROM resak
                     LEFT JOIN resal
                               ON resak015 = resal001
                WHERE LTrim(RTrim(resak004)) = '{$vb_empno}'
               ";
    $u_res   = mssql_query($u_query);
    $u_count = mssql_num_rows($u_res);
    if( $u_count==0 ){
      echo "<script language='JavaScript'>";
      echo "alert('�`�N!! ���u: ".$vb_name."(".$vb_empno.") �L�q�lñ�֨ϥ��v���C');";
      echo "history.back();";
      echo "</script>";
      exit;
    }
    //������������������������������������������������������������������������������������������������������������������������������������������������������

    $fd_stop = 'N'; //�O�_�i��ñ��
    if(is_array($_REQUEST)) {
      while (list($f_fd_name,$f_fd_value) = each($_REQUEST)) {
        //echo "$f_fd_name=$f_fd_value----";
        $f_var[$f_fd_name] = $f_fd_value;
        //if( strstr("f_table/f_b_empno/f_db/f_file_path/f_b_date/f_title/f_type/f_content/f_s_num/f_cnt",$f_fd_name)!=NULL ){
        if( strstr("f_db/f_table/f_b_empno/f_b_date/f_title/f_content/f_s_num",$f_fd_name)!=NULL ){
          if( $f_var[$f_fd_name]=='' ){
            $fd_stop = 'Y';
            $inLog .= "E..�y����: {$f_var['f_s_num']}({$vb_date})..�ǤJ�Ѽ�, ���ŭȪ�: ".$f_fd_name."\n";
          }
        }
      }
    }
    if( 'Y'==$fd_stop ){
      fwrite($fp, $inLog);
      fclose($fp);
      echo "<script language='JavaScript'>";
      echo "alert('�`�N!! �qñ�ѼƸ�Ʀ��~!!');";
      echo "history.back();";
      echo "</script>";
      $fd_stop = 'Y'; //�O�_�i��ñ��
    }
    else{
      $count_table= substr_count($f_var['f_table'],'.');
      $ex_table   = explode('.',$f_var['f_table']);
      $fd_table   = iif($count_table==0,$f_var['f_table'],$ex_table[1]);

      $fd_b_empno      = $f_var['f_b_empno'];                                          //���ɪ̭��s
      $fd_sleip2flw001 = 'SL-EIP2FLW';
      $fd_sleip2flw002 = '';
      $fd_sleip2flw003 = str_replace("\"","",$f_var['f_db']);                          //DB
      $fd_sleip2flw004 = str_replace("\"","",$fd_table);                    //table
      $fd_sleip2flw005 = str_replace("\"","",$f_var['f_file_path']);                   //������|
      $fd_sleip2flw006 = date('Y/m/d',strtotime($f_var['f_b_date']));                  //�����
      $fd_sleip2flw007 = str_replace("\"","",$f_var['f_title']);                       //�D��
      $fd_sleip2flw008 = str_replace("\"","",$f_var['f_type']);                        //���O
      $fd_sleip2flw009 = str_replace("\"","",str_replace("'","",$f_var['f_content'])); //���e
      $fd_sleip2flw010 = str_replace("\"","",$f_var['f_s_num']);                       //s_num
      $fd_sleip2flw011 = str_replace("\"","",$f_var['f_cnt']);                         //���� //upd by mimi 2011.06.13 �W�[���ɦ���
      $fd_cnt=1;
      $ins_key = '';
      $ins_val = '';
      for($i=0;$i<10;$i++){ //upd by mimi 2011.07.01 �W�[��10�Ӫ���
        $fd_file = "f_file".($fd_cnt+$i);
        if($f_var[$fd_file] <> ''){
          //$remote_file[]= $f_var[$fd_file];         // remote���ɮצW��
          $fd_num = str_pad(($fd_cnt+$i),3,'0',STR_PAD_LEFT);
          $ins_key .= " file{$fd_num}, ";
          $ins_val .= " '{$f_var[$fd_file]}', ";
        }
      }

      sl_open($eipdb);
      $sql = "insert into docs.mid2flwcd
                          (sleip2flw001,sleip2flw002,sleip2flw003,sleip2flw004,sleip2flw005,
                           sleip2flw006,sleip2flw007,sleip2flw008,sleip2flw009,sleip2flw010,sleip2flw011, {$ins_key}
                           b_empno,b_dept_id,b_proc,b_date,fromip)
                   values ('{$fd_sleip2flw001}','{$fd_sleip2flw002}','{$fd_sleip2flw003}','{$fd_sleip2flw004}','{$fd_sleip2flw005}',
                           '{$fd_sleip2flw006}','{$fd_sleip2flw007}','{$fd_sleip2flw008}','{$fd_sleip2flw009}','{$fd_sleip2flw010}','{$fd_sleip2flw011}', {$ins_val}
                           '{$fd_b_empno}','{$vb_dept_id}','{$vproc}','{$vb_date}','{$vfromip}')
             ";
      if(!mysql_query($sql)) {
        sl_errmsg("����x�s����!!{$sql}");
        exit;
      }else{
        $fk_snum = mysql_insert_id();
        if( !ftp_connect($mftp_server) ){
          $sql_upd = " update docs.mid2flwcd
                       set    t_result = 'C',
                              t_date = '{$vb_date}',
                              t_proc = '{$vproc}'
                       where  s_num = '{$fk_snum}'
                     ";
          mysql_query($sql_upd);
          echo "<script language='JavaScript'>";
          echo "alert('�q�lñ�֥D��FLW�s�u���`, �Э��s�ϥ�!!!!');";
          echo "history.back();";
          echo "</script>";
          $fd_stop = 'Y'; //�O�_�i��ñ��
        }
        echo $fd_stop."\n";
        if( 'N'==$fd_stop ){
          $t_path = "/home/sl/public_html/t_mid2flwcd.php {$fk_snum} &";
          $t_popen = popen($t_path,"r");
          if($t_popen){
            while (!feof($t_popen)) {      //?�q�D�������o?��
              $out = fgets($t_popen, 4096);
              //echo $out;         //���L�X?
            }
          }
          pclose($t_popen);
        }

      }
    }
  }
  
// **************************************************************************
//  ��ƦW��: sl_sapid2bgid()
//  ��ƥ\��: �����N���ഫ sap -> b_gid
//  �ϥΤ覡: sl_sapid2bgid($sap_id)
//  �{���]�p: ���\
//  �]�p���: 2020.09.25
// **************************************************************************
  function sl_sapid2bgid($sap_id) {
  	sl_open('gas');
    $query = "select b_gid, sname
                from company
               where sap_dept_id = '{$sap_id}'
      					and d_date = '0000-00-00 00:00:00'
             ";
		//echo $query;
    //exit;
    $result = mysql_query($query);
    $row    = mysql_fetch_array($result);
    $b_gid = $row['b_gid'];

  	return $b_gid;
  }
  // **************************************************************************
  //  ��ƦW��: sl_cn_openef2k()
  //  ��ƥ\��: �i�a�ݡj�q�lñ�e�a�ݶ��ݤ���, �ݭn��close db���ʧ@
  //  �ϥΤ覡: sl_cn_openef2k($vdat)
  //  �{���]�p: �Ϊ�
  //  �]�p���: 2020.11.11
  // **************************************************************************  
  function sl_cn_openef2k($vdat) {
    $msdb = mssql_connect("flow.slc.com.tw","sa","s9704") or die("��Ʈw�s������!!");
    //$msdb = mssql_connect("192.168.2.190","sa","s9704") or die("��Ʈw�s������!!");
    mssql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
    return $msdb;
  }
  // **************************************************************************
  //  ��ƦW��: sl_cn_openef2kc()
  //  ��ƥ\��: �i���ݡj�q�lñ�e�a�ݶ��ݤ���, �ݭn��close db���ʧ@
  //  �ϥΤ覡: sl_cn_openef2kc($vdat)
  //  �{���]�p: �Ϊ�
  //  �]�p���: 2020.11.11
  // ************************************************************************** 
  function sl_cn_openef2kc($vdat) { //add by �Ϊ� 2020.08.26 ���ݹqñ�D��
    //$msdb = mssql_connect("flow1.slc.com.tw","sa","s9704") or die("��Ʈw�s������!!");
    $msdb = mssql_connect("175.98.134.105","sa","s9704") or die("��Ʈw�s������!!");
    mssql_select_db($vdat) or die("�L�kŪ����Ʈw!!");
    return $msdb;
  }
  // **************************************************************************
  //  ��ƦW��: sl_cn_delflw()
  //  ��ƥ\��: �qñ���-�a��
  //  �ϥΤ覡: sl_cn_delflw(��O,�渹)
  // **************************************************************************
  function sl_cn_delflw($fv_resdz001,$fv_resdz002,$vcon='flw',$vtb='EF2KWeb'){
      $ms_date = date("Y/m/d H:i:s");
      if( 'flw'==$vcon ){
        $fndb = sl_cn_openef2k($vtb); 
      }else{
        $fndb = sl_cn_openef2kc($vtb); 
      }
      $sql_sda = "select resda022
                  from resda
                  where resda001 = '{$fv_resdz001}'
                        and resda002 = '{$fv_resdz002}'";
      $result_sda = mssql_query($sql_sda);
      $a_sda = mssql_fetch_assoc($result_sda);
      if( $a_sda['resda022'] == '' ){
        $fv_resda022 = '0000-0000-0000';
      }
      else{
        $fv_resda022 = "{$a_sda['resda022']};0000-0000-0000";
      }
      $sql_d1 = "update resda
                 set    resda019 = '{$ms_date}',
                        resda020 = 4,
                        resda021 = 4,
                        resda022 = '{$fv_resda022}'
                 WHERE resda001 = '{$fv_resdz001}' 
                       AND resda002 = '{$fv_resdz002}'
                ";
      $sql_d2 = " update resdc
                  set    resdc007 = 11,
                         resdc008 = 9
                  WHERE resdc001 = '{$fv_resdz001}' 
                  AND resdc002 = '{$fv_resdz002}'
                ";
      $sql_d3 = " update resdd
                  set    resdd014 = 11,
                         resdd015 = 9,
                         resdd902 = resdd900,
                         resdd903 = '{$ms_date}'
                  WHERE resdd001 = '{$fv_resdz001}' 
                        AND resdd002 = '{$fv_resdz002}'
                ";
      if(!mssql_query($sql_d1)){
        echo "upd resda error!! .. <pre>{$sql_d1}</pre>"; 
        exit;
      }
      if(!mssql_query($sql_d2)){
        echo "upd resdc error!! .. <pre>{$sql_d2}</pre>";
        exit;
      }
      if(!mssql_query($sql_d3)){
        echo "upd resdd error!! .. <pre>{$sql_d3}</pre>";
        exit;
      }
      mssql_close($fndb);
      return;
  }
  // **************************************************************************
  //  ��ƦW��: sl_cn_getresck()
  //  ��ƥ\��: �d�߬O�_���N�z�H (�qñ�a�ݶ��ݤ����ϥ�)
  //  �ϥΤ覡: sl_cn_getresck($f_empno,$f_kind,$f_date,$resck003='0010',$vcon='flw')
  //           ���s, �qñ��O, ���('Y/m/d H:i:s')
  //  �{���]�p: �Ϊ�
  //  �]�p���: 2020.11.11
  // **************************************************************************
  function sl_cn_getresck($f_empno,$f_kind,$f_date,$resck003='0010',$vcon='flw',$vtb='EF2KWeb'){
      $fn_flwDB = $vtb;
      if( 'flw'==$vcon ){
        $fndb = sl_cn_openef2k($fn_flwDB);
      }
      else{
        $fndb = sl_cn_openef2kc($fn_flwDB);  
      }
      $f_resdd020 = '';
      $sql = "select resck006
              from resck
              where resck001 = '{$f_empno}'
                and resck002 ='{$f_kind}'
                and resck003 = '{$resck003}'
                and '{$f_date}' between resck004 and resck005";
      //echo "<pre><font color=blue>{$sql}</font></pre>";
      $rs = mssql_query($sql);
      $ar = mssql_fetch_assoc($rs);
      if($ar['resck006'] <> ''){
        $f_resdd020 = $ar['resck006'];
      }
      mssql_close($fndb);
      return $f_resdd020;
  }
  // **************************************************************************
  //  ��ƦW��: sl_else2flw()
  //  ��ƥ\��: �Dsleip2flw�qñ��e(�а���B�[�Z��....����)
  //  �ϥΤ覡: sl_else2flw($f_var, $vcon)
  //           $f_var[f_flwType] => ��O
  //           $f_var['flw']['f_b_empno'] => �ӽФH
  //           $f_var['flw']['f_field'][xxxxx] => �D�ntable�U����� e.g. sla015003 ���s 
  //           $f_var['flw']['f_title'] => �D��
  //           $f_var['flw']['f_resch001'] => �y�{���d
  //           $vcon => flw �a�ݹq�lñ�e�Bflwc ���ݹq�lñ�e
  //  �{���^�X: $f_var['rtn']['code'] => 0   �D0�������\
  //           $f_var['rtn']['meg'] => ��e�᪺�t�ΰT��
  //  �{���]�p: �Ϊ�
  //  �]�p���: 2020.11.11
  // **************************************************************************
  function sl_else2flw($f_var,$vcon='flw',$vtb='EF2KWeb'){
    //$f_var[f_flwType] //��O
    //$f_var['flw']['f_b_empno'] //�ӽФH
    //$f_var['flw']['f_field'][xxxxx]  �D�ntable�U�����
    //$f_var['flw']['f_title'] �D��
    //$f_var['flw']['f_resch001'] �y�{���d
    $fd_pre_flwNum = '';
    if( ''!=$f_var['f_flwNum'] ){
      $fd_pre_flwNum = $f_var['f_flwNum'];
    }
    $fn_flwDB = $vtb;
    $fn_flwTB = str_replace("-","",strtolower($f_var['f_flwType']));
    if( 'SL-D001'==$f_var['f_flwType'] ){
      $fn_flwTB = 'sl_d001';
    }
    $fn_date = date('Y/m/d H:i:s');
    if( 'flw'==$vcon ){
      $fndb = sl_cn_openef2k($fn_flwDB);
      $mftp_server  = "flow.slc.com.tw";      // ftp server
      $mftp_user    = "it";                   // ftp user name
      $mftp_pass    = "sl85";                 // ftp user password
    }
    else if( 'flwc'==$vcon ){
      $fndb = sl_cn_openef2kc($fn_flwDB);  
      $mftp_server  = "175.98.134.105";      // ftp server
      //$mftp_server  = "flow1.slc.com.tw";
      $mftp_user    = "it";                   // ftp user name
      $mftp_pass    = "sl85";                 // ftp user password
    }
    //echo $mftp_server."<br>";
    $fn_test = 'N'; //�O�_���� Y ����  N ����
    if( 'Y'==$fn_test ){
      echo "<pre>";
      print_r($f_var['flw']);
      echo "</pre>";
    }
    $f_var['rtn']['code'] = '0';
    $f_var['rtn']['meg'] = "�w���\��X�q�lñ�e!";
    //----------------------------------------------
    //������ݥD��
    //----------------------------------------------
    $query2 = "SELECT resak001,resak002,resak015,resal002,resak013
               FROM   {$fn_flwDB}..resak
                      inner JOIN resal ON resak015 = resal001
               WHERE resak001 = '{$f_var['flw']['f_b_empno']}'
              ";
    $result2 = mssql_query($query2);
    $row2 = mssql_fetch_array($result2);
    $fd_resak015 = $row2['resak015'];  //FLW-�����N��
    $fd_resal002 = $row2['resal002'];  //FLW-�����W��
    $fd_resak013 = $row2['resak013'];  //FLW-���ݥD��
    //----------------------------------------------
    // ����渹
    //----------------------------------------------
    $query_iNum = "INSERT INTO {$fn_flwDB}..resdz (resdz001,resdz002) 
                   SELECT resdz001 AS resdz001,
                          RIGHT(REPLICATE('0', 10) + CAST((MAX(resdz002)+1) as NVARCHAR), 10) AS resdz002
                   FROM   {$fn_flwDB}..resdz
                   WHERE  resdz001 = '{$f_var['f_flwType']}'
                   GROUP BY resdz001 ";
    if( 'Y'==$fn_test ){
      echo "<pre>{$query_iNum}</pre>";
    }
    else{
      if( !mssql_query($query_iNum) ){
        $f_var['rtn']['code'] = '1';
        $f_var['rtn']['meg'] = "����渹����!<pre>{$query_iNum}</pre>";
        return;  
      }
    }
  
    $query3 = "SELECT top 1 resdz001,resdz002
               FROM {$fn_flwDB}..resdz
               where resdz001 = '{$f_var['f_flwType']}'
               order by resdz002 DESC
              ";  
    $result3 = mssql_query($query3);
    $row3 = mssql_fetch_array($result3);
    $f_var['f_flwNum'] = $row3['resdz002']; //FLW-�渹
    //----------------------------------------------
    // �g�J��O�D�ntable
    //----------------------------------------------
    $f_var['flw']['f_field'][$fn_flwTB.'001'] = $f_var['f_flwType'];
    $f_var['flw']['f_field'][$fn_flwTB.'002'] = $f_var['f_flwNum'];
    $f_var['flw']['f_field'][$fn_flwTB.'900'] = $f_var['flw']['f_b_empno'];
    $f_var['flw']['f_field'][$fn_flwTB.'901'] = $fn_date;
    $f_var['flw']['f_field'][$fn_flwTB.'904'] = $fd_resak015;
    if($f_var["f_flwType"]== 'SL-A016'){
      $f_var['flw']['f_field'][$fn_flwTB.'902'] = $f_var['flw']['f_b_empno'];
      $f_var['flw']['f_field'][$fn_flwTB.'903'] = $fn_date;
      $f_var['flw']['f_field'][$fn_flwTB.'905'] = $fd_resak015;
    }
    $ar_sql[] = "insert into {$fn_flwDB}..{$fn_flwTB} ( ".implode(",",array_keys($f_var['flw']['f_field']))." )
                 values ( '".implode("','",$f_var['flw']['f_field'])."' )";
    //----------------------------------------------
    // resda ���y�{���ʥD�� (RESDA)
    //----------------------------------------------
    $vins_fd2    =" resda001,resda002,resda015,resda016,resda017,resda018,resda019,resda020,resda021,resda022,resda023 ";
    $vins_value2 =" '{$f_var['f_flwType']}','{$f_var['f_flwNum']}','{$fn_date}','{$f_var['flw']['f_b_empno']}','{$f_var['flw']['f_b_empno']}','{$fn_date}','','2','1','','' ";
    $vins_fd2   .=" ,resda030,resda031,resda032,resda033,resda034,resda900,resda901,resda904 ";
    $vins_value2.=" ,'','{$f_var['flw']['f_title']}','1','Y','','{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}' ";
    $query4 = "SELECT resca.*
               FROM   {$fn_flwDB}..resca
               where resca001 = '{$f_var['f_flwType']}'
              ";
    $result4 = mssql_query($query4);
    $row4 = mssql_fetch_array($result4);
    ksort($row4);
    while (list($key4,$value4) = each($row4)){
      if (ereg("^[r]",substr($key4,0,1))){
          switch ($key4) {
            case "resca004": //�y�{����
              $vins_fd2   .=",resda003";
              $vins_value2.=",'{$value4}'";
              break;
            case "resca005": //�۰ʽs��?
            case "resca017": //���H�i�_�ܧ���ʽ�?
              break;
            case "resca006": //�O��ĵ�ܶ}��
            case "resca007": //�O��ĵ��-���H
            case "resca008": //�O��ĵ��-�O�ɤH�����D��
            case "resca009": //�O��ĵ��-���w�޲z�H
            case "resca010": //�O��ĵ��-���w�޲z�H���u�N��
            case "resca011": //�O��ĵ��-ĵ�ܶ��j�Ѽ�
            case "resca012": //�O��ĵ��-ĵ�ܦ���
            case "resca013": //�O�_���׫�q���Ҧ��H��?
            case "resca014": //�O�_�v�Ŧ^��?
            case "resca015": //���H�i�_�j��
            case "resca016": //���H�i�_���?
              $fd_resda    ="resda".str_pad((substr($key4,5,3)-2),3,'0',STR_PAD_LEFT);
              $vins_fd2   .=",{$fd_resda}";
              $vins_value2.=",'{$value4}'";
              break;
            case "resca018": //��Z�i�_�C�L�H
            case "resca019": //��Z�i�_��H�H
            case "resca020": //��Z�i�_�\Ū����H
            case "resca021": //�^��i�_�C�L�H
            case "resca022": //�^��i�_��H�H
            case "resca023": //�^��i�_�\Ū����H
              $fd_resda    ="resda".str_pad((substr($key4,5,3)+6),3,'0',STR_PAD_LEFT);
              $vins_fd2   .=",{$fd_resda}";
              $vins_value2.=",'{$value4}'";
              break;
            default:
              break;
          }
      }
    }
    $ar_sql[] ="insert into {$fn_flwDB}..resda ($vins_fd2) values ($vins_value2)";
  
    //-------------------------------------------------------------
    // resdb
    //-------------------------------------------------------------         
    $num_resdb    = 0;
    $sql_ch = "SELECT *
                FROM  {$fn_flwDB}..resch
                WHERE resch001 = '{$f_var['flw']['f_resch001']}'
                ORDER BY resch002, resch003
               ";
    //echo "<pre>{$sql_ch}</pre>";
    $res_52 = mssql_query($sql_ch);
    $qty_52 = mssql_num_rows($res_52);
    if( $qty_52>0 AND ''!=$f_var['flw']['f_resch001'] ){ //��ñ�e���U�O�l�y�{
      while($row52 = mssql_fetch_assoc($res_52)){
        $vins_fd3    =" resdb001,resdb002 ";
        $vins_value3 =" '{$f_var['f_flwType']}','{$f_var['f_flwNum']}' ";
        $vins_fd3   .=" ,resdb900,resdb901,resdb904 ";
        $vins_value3.=" ,'{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}' ";
    
        $num_resdb++;
        if('1'==$num_resdb){
          $vins_fd3   .=" ,resdb026 ";
          $vins_value3.=" ,'Y'";
          $resdc006=iif($row52['resch006']=='',$fd_resak013,$row52['resch006']);
          //resdc ���y�{���ʩ����� (RESDC)
          $vins_fd4    =" resdc001,resdc002,resdc005,resdc006,resdc007,resdc008,resdc900,resdc901,resdc904 ";
          $vins_value4 =" '{$f_var['f_flwType']}','{$f_var['f_flwNum']}','0001','{$resdc006}','3','1','{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}' ";
    
          //resdd ���y�{���ʩ����� (RESDD)
          $resdd020 = sl_cn_getresck($resdc006,$f_var['f_flwType'],$fn_date,'0010',$vcon,'EF2KWeb'); //add by �Ϊ� 2018.07.03 �O�_���]�w�N�z�H
          
          $vins_fd5    =" resdd001,resdd002,resdd005,resdd006,resdd007,resdd008,resdd009,resdd020 ";
          $vins_value5 =" '{$f_var['f_flwType']}','{$f_var['f_flwNum']}','0001','01','{$resdc006}','','{$fn_date}','{$resdd020}' ";
          $vins_fd5   .=" ,resdd013,resdd014,resdd015,resdd017,resdd018,resdd019,resdd900,resdd901,resdd904 ";
          $vins_value5.=" ,'0','2','1','N','8','Y','{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}' ";
        }
        else{
          $vins_fd3   .=" ,resdb026 ";
          $vins_value3.=" ,'N'";
        }
        //echo $row52['resch002'].'---'.$row52['resch003'].'<br>';
        //ksort($row52);
        foreach($row52 as $key52 =>$value52){
        //while (list($key52,$value52) = each($row52)){
          if (ereg("^[r]",substr($key52,0,1))){
            switch ($key52) {
              case "resch002": //����
              case "resch003": //�丹
                $fd_resdb    ="resdb".str_pad((substr($key52,5,3)+1),3,'0',STR_PAD_LEFT);
                $vins_fd3   .=",{$fd_resdb}";
                $vins_value3.=",'{$value52}'";
    
                if('1'==$num_resdb){
                  $fd_resdc    ="resdc".str_pad((substr($key52,5,3)+1),3,'0',STR_PAD_LEFT);
                  $vins_fd4   .=",{$fd_resdc}";
                  $vins_value4.=",'{$value52}'";
    
                  $fd_resdd    ="resdd".str_pad((substr($key52,5,3)+1),3,'0',STR_PAD_LEFT);
                  $vins_fd5   .=",{$fd_resdd}";
                  $vins_value5.=",'{$value52}'";
                }
                break;
              case "resch004": //�y�{����
              case "resch005": //ñ�ֺ���
              case "resch006": //�y�{����Ѽ�1
              case "resch007": //�y�{����Ѽ�2
              case "resch008": //�y�{����Ѽ�3
              case "resch009": //�y�{����Ѽ�4
              case "resch010": //�e�\ñ�֮ɶ�
              case "resch011": //�۰�ByPass?
              case "resch012": //ByPass�覡
              case "resch013": //�O�_�j��ñ��?
              case "resch014": //�O�_��@ñ��
              case "resch015": //�i�_�C�L?
              case "resch016": //�i�_�Mñ?
              case "resch017": //�i�_�[ñ?
              case "resch018": //�i�_��|?
              case "resch019": //�i�_��H?
              case "resch020": //�i�_�s�W���[��?
              case "resch021": //�i�_�ק���[��?
              case "resch022": //�i�_�R�����[��?
              case "resch023": //�i�_�\Ū���[��?
              case "resch024": //ñ�֮ɱK�X����?
                $fd_resdb    ="resdb".str_pad((substr($key52,5,3)+1),3,'0',STR_PAD_LEFT);
                $vins_fd3   .=",{$fd_resdb}";
                $vins_value3.=",'{$value52}'";
                break;
              default:
                break;
            }
          }
        }
        $ar_sql[] ="insert into {$fn_flwDB}..resdb ($vins_fd3) values ($vins_value3)";
      }
      $ar_sql[] ="insert into {$fn_flwDB}..resdc ($vins_fd4) values ($vins_value4)";
      $ar_sql[] ="insert into {$fn_flwDB}..resdd ($vins_fd5,resdd010,resdd011) values ($vins_value5,'','')"; 
    }else if( !empty($f_var['flw']['resdb003']) ){ //�D�зǬy�{,�ۭq�y�{
      $sql_db="SELECT top 1 resdb.*
               FROM   {$fn_flwDB}..resdb
               WHERE  resdb001 = '{$f_var['f_flwType']}'  ";
      $res_db = mssql_query($sql_db);
      $row_db = mssql_fetch_assoc($res_db);
      foreach ($f_var['flw']['resdb003'] as $k_fd=>$v_fd) {
        ksort($row_db);
        while (list($kdb,$vdb) = each($row_db)){
          if (ereg("^[r]",substr($kdb,0,1))){
            switch ($kdb) {
              case "resdb001": //��O
                $vins_fd3    ="{$kdb}";
                $vins_value3 ="'{$f_var['f_flwType']}'";
                break;
              case "resdb002": //�渹
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'{$f_var['f_flwNum']}'";
                break;
              case "resdb003": //����             
              case "resdb004": //�丹            
              case "resdb005": //�y�{����            
              case "resdb006": //ñ�ֺ���            
              case "resdb007": //�y�{����Ѽ�1       
              case "resdb008": //�y�{����Ѽ�2       
              case "resdb026": //�y�{�O�_�w�g�ѪR?
                $fd_value    = $f_var['flw'][$kdb][$k_fd];  
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'{$fd_value}'";
                break;
              case "resdb900": //���ɤH�����s
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'{$f_var['flw']['f_b_empno']}'";
                break;
              case "resdb901": //���ɮɶ�
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'{$fn_date}'";
                break;
              case "resdb904": //�����N��
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'{$fd_resak015}'";         
                break;
              case "resdb014": //�O�_�j��ñ��?
              case "resdb017": //�i�_�Mñ?
              case "resdb018": //�i�_�[ñ?
              case "resdb019": //�i�_��|?
              case "resdb020": //�i�_��H?
              case "resdb021": //�i�_�s�W���[��?
              case "resdb024": //�i�_�\Ū���[��?
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'Y'";
                break;
              case "resdb011": //�e�\ñ�֮ɶ�
              case "resdb013": //ByPass�覡
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'0'";
                break;
              case "resdb012": //�۰�ByPass?
              case "resdb015": //�O�_��@ñ��
              case "resdb016": //�i�_�C�L?
              case "resdb022": //�i�_�ק���[��?
              case "resdb023": //�i�_�R�����[��?
              case "resdb025": //ñ�֮ɱK�X����?
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'N'";
                break;
              default:
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'{$vdb}'";
                break;
            }
          }
        }
        $ar_sql[] ="insert into {$fn_flwDB}..resdb ($vins_fd3) values ($vins_value3)";
      }
      //resdc
      $sql_dc="SELECT top 1 resdc.*
               FROM   {$fn_flwDB}..resdc
               WHERE  resdc001 = '{$f_var['f_flwType']}'  ";
      $res_dc = mssql_query($sql_dc);
      $row_dc = mssql_fetch_assoc($res_dc);
      $arr_resdc  = array('',"{$f_var['f_flwType']}","{$f_var['f_flwNum']}",'0010','0010','0001',"{$fd_resak013}",'2','1');
      $vins_fd4    ="resdc900,resdc901,resdc904";
      $vins_value4 ="'{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}'"; 
      ksort($row_dc);
      while (list($kdc,$vdc) = each($row_dc)){
        if (ereg("^[r]",substr($kdc,0,1)) and ereg("^[0]",substr($kdc,5,1))){
          $fd_key4     =substr($kdc,7,1);
          $vins_fd4   .=",{$kdc}";
          $vins_value4.=",'{$arr_resdc[$fd_key4]}'";
        }
      }
      $ar_sql[] ="insert into {$fn_flwDB}..resdc ($vins_fd4) values ($vins_value4)";
      //resdd
      $sql_dd="SELECT top 1 resdd.*
               FROM   {$fn_flwDB}..resdd
               WHERE  resdd001 = '{$f_var['f_flwType']}'  ";
      $res_dd = mssql_query($sql_dd);
      $row_dd = mssql_fetch_assoc($res_dd);
      $arr_resdd  = array('',"{$f_var['f_flwType']}","{$f_var['f_flwNum']}",'0010','0010','0001','01',"{$fd_resak013}","","{$fn_date}"," "," "," ",'0','2','1'," ",'N','8','Y'," ");
      $vins_fd5    ="resdd900,resdd901,resdd904";
      $vins_value5 ="'{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}'"; 
      ksort($row_dd);
      while (list($kdd,$vdd) = each($row_dd)){
        if (ereg("^[r]",substr($kdd,0,1)) and ereg("^[0]",substr($kdd,5,1))  ){
          $fd_key5     = substr($kdd,6,2)+0;
          $vins_fd5   .=",{$kdd}";
          $vins_value5.=",'{$arr_resdd[$fd_key5]}'";
        }
      }
      $ar_sql[] ="insert into {$fn_flwDB}..resdd ($vins_fd5) values ($vins_value5)";

    }else{  //��ñ�e���]�w�l�y�{, �]�зǬy�{
      $query53 = "SELECT *
                  FROM rescc
                  WHERE rescc001='{$f_var['f_flwType']}' 
                        and rescc002<>'9999'
                ";
      $res_53 = mssql_query($query53);
      $qty_53 = mssql_num_rows($res_53);
      while($row53 = mssql_fetch_assoc($res_53)){
        $vins_fd3    =" resdb001,resdb002 ";
        $vins_value3 =" '{$f_var['f_flwType']}','{$f_var['f_flwNum']}' ";
        $vins_fd3   .=" ,resdb900,resdb901,resdb904 ";
        $vins_value3.=" ,'{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}' ";
    
        $num_resdb++;
        if('1'==$num_resdb){
          $vins_fd3   .=" ,resdb026 ";
          $vins_value3.=" ,'Y'";
          $resdc006=iif($row53['rescc006']=='',$fd_resak013,$row53['rescc006']);
          //resdc ���y�{���ʩ����� (RESDC)
          $vins_fd4    =" resdc001,resdc002,resdc005,resdc006,resdc007,resdc008,resdc900,resdc901,resdc904 ";
          $vins_value4 =" '{$f_var['f_flwType']}','{$f_var['f_flwNum']}','0001','{$resdc006}','3','1','{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}' ";
    
          //resdd ���y�{���ʩ����� (RESDD)
          $resdd020 = sl_cn_getresck($resdc006,$f_var['f_flwType'],$fn_date,'0010',$vcon,'EF2KWeb'); //add by �Ϊ� 2018.07.03 �O�_���]�w�N�z�H
          
          $vins_fd5    =" resdd001,resdd002,resdd005,resdd006,resdd007,resdd008,resdd009,resdd020 ";
          $vins_value5 =" '{$f_var['f_flwType']}','{$f_var['f_flwNum']}','0001','01','{$resdc006}','','{$fn_date}','{$resdd020}' ";
          $vins_fd5   .=" ,resdd013,resdd014,resdd015,resdd017,resdd018,resdd019,resdd900,resdd901,resdd904 ";
          $vins_value5.=" ,'0','2','1','N','8','Y','{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}' ";
        }
        else{
          $vins_fd3   .=" ,resdb026 ";
          $vins_value3.=" ,'N'";
        }
        foreach($row53 as $key53 =>$value53){
        //while (list($key52,$value52) = each($row52)){
          if (ereg("^[r]",substr($key53,0,1))){
            switch ($key53) {
              case "rescc002": //����
              case "rescc003": //�丹
                $fd_resdb    ="resdb".str_pad((substr($key53,5,3)+1),3,'0',STR_PAD_LEFT);
                $vins_fd3   .=",{$fd_resdb}";
                $vins_value3.=",'{$value53}'";
    
                if('1'==$num_resdb){
                  $fd_resdc    ="resdc".str_pad((substr($key53,5,3)+1),3,'0',STR_PAD_LEFT);
                  $vins_fd4   .=",{$fd_resdc}";
                  $vins_value4.=",'{$value53}'";
    
                  $fd_resdd    ="resdd".str_pad((substr($key53,5,3)+1),3,'0',STR_PAD_LEFT);
                  $vins_fd5   .=",{$fd_resdd}";
                  $vins_value5.=",'{$value53}'";
                }
                break;
              case "rescc004": //�y�{����
              case "rescc005": //ñ�ֺ���
              case "rescc006": //�y�{����Ѽ�1
              case "rescc007": //�y�{����Ѽ�2
              case "rescc008": //�y�{����Ѽ�3
              case "rescc009": //�y�{����Ѽ�4
              case "rescc010": //�e�\ñ�֮ɶ�
              case "rescc011": //�۰�ByPass?
              case "rescc012": //ByPass�覡
              case "rescc013": //�O�_�j��ñ��?
              case "rescc014": //�O�_��@ñ��
              case "rescc015": //�i�_�C�L?
              case "rescc016": //�i�_�Mñ?
              case "rescc017": //�i�_�[ñ?
              case "rescc018": //�i�_��|?
              case "rescc019": //�i�_��H?
              case "rescc020": //�i�_�s�W���[��?
              case "rescc021": //�i�_�ק���[��?
              case "rescc022": //�i�_�R�����[��?
              case "rescc023": //�i�_�\Ū���[��?
              case "rescc024": //ñ�֮ɱK�X����?
                $fd_resdb    ="resdb".str_pad((substr($key53,5,3)+1),3,'0',STR_PAD_LEFT);
                $vins_fd3   .=",{$fd_resdb}";
                $vins_value3.=",'{$value53}'";
                break;
              default:
                break;
            }
          }
        }
        $ar_sql[] ="insert into {$fn_flwDB}..resdb ($vins_fd3) values ($vins_value3)";
      }
      $ar_sql[] ="insert into {$fn_flwDB}..resdc ($vins_fd4) values ($vins_value4)";
      $ar_sql[] ="insert into {$fn_flwDB}..resdd ($vins_fd5,resdd010,resdd011) values ($vins_value5,'','')"; 
    }
    //---------------------------------------------------------------------------------------------------------
    //mark by zihan 2020.11.17 �а���|resdc�Presdd�U���Ʀh�s�@��
    //$ar_sql[] ="insert into {$fn_flwDB}..resdc ($vins_fd4) values ($vins_value4)";
    //$ar_sql[] ="insert into {$fn_flwDB}..resdd ($vins_fd5,resdd010,resdd011) values ($vins_value5,'','')"; 
    //---------------------------------------------------------------------------------------------------------
    //echo "f_flwType: ".$f_var['f_flwType'];
    if('SL-A015'==$f_var['f_flwType']){ //�а���
       //add by �Ϊ� 2017.06.20 �ݿ�15143-�а���g�z�ΰϥD�ޤG��H�Wñ�֦ܸ��ƪ�
       if( ($f_var['flw']['f_field']['sla015008']>=2 AND strstr("5020/5041",$_SESSION['login_job_id'])!=null) or '1130091'==$_SESSION["login_empno"] ){
         $sql_rdb = "select resdb.resdb003, resdb.resdb004,
                            resdd.resdd007
                     from   {$fn_flwDB}..resdb
                            left join {$fn_flwDB}..resdd on resdb.resdb001 = resdd.resdd001
                            and resdb.resdb002 = resdd.resdd002
                            and resdb.resdb003 = resdd.resdd003
                            and resdb.resdb004 = resdd.resdd004
                     where  resdb.resdb001 = '{$f_var['f_flwType']}'
                            and resdb.resdb002 = '{$f_var['f_flwNum']}'
                     ORDER BY resdb.resdb003, resdb.resdb004   
                   ";
         $res_rdb = mssql_query($sql_rdb);
         while($row_rdb = mssql_fetch_array($res_rdb)){
            $fd_db003 = $row_rdb['resdb003'];
            $fd_db004 = $row_rdb['resdb004'];
            if( ''==trim($row_rdb['resdd007'])  ){ 
              $vsql = "SELECT rsk1.resak013 AS empno
                       FROM   resak AS rsk1
                              LEFT JOIN resak AS rsk2 ON rsk1.resak013 = rsk2.resak001
                              LEFT JOIN resan ON rsk2.resak001 = resan.resan003
  							                   and rsk2.resak015 = resan.resan001
                       WHERE  rsk1.resak001 = '{$fd_emp_pre}'
                     "; 
              $vres = mssql_query($vsql);
              $vqty = mssql_num_rows($vres);
              if($vqty>0){
                $vrow = mssql_fetch_array($vres);
                $fd_emp_pre = $vrow['empno'];
              }
            }
            else{
              $fd_emp_pre = $row_rdb['resdd007'];
            }    
         } 
  
         //exit;
         if( ''!=$fd_emp_pre ){
            $fr_pre_db03 = $fd_db003; 
            $fr_pre_db04 = $fd_db004;           
            $fr_next_db03 = str_pad(($fd_db003+10),4,0,STR_PAD_LEFT);
            do{               
                if( empty($fr_next_emp) ){
                  $fr_next_emp = $fd_emp_pre;
                }else{
                  $fr_next_emp = $fr_emp_k;
                }
                $vsql = "SELECT rsk1.resak013 AS empno, resan.resan004 AS job_id
                         FROM   resak AS rsk1
                                LEFT JOIN resak AS rsk2 ON rsk1.resak013 = rsk2.resak001
                                LEFT JOIN resan ON rsk2.resak001 = resan.resan003
                                                  and rsk2.resak015 = resan.resan001
                         WHERE  rsk1.resak001 = '{$fr_next_emp}'
                       "; 
                $vres = mssql_query($vsql);
                $vqty = mssql_num_rows($vres);
                if($vqty>0){
                  $vrow = mssql_fetch_array($vres);
                  $fr_emp_k = $vrow['empno'];
                  $fr_job_k = $vrow['job_id']; //���ݥD��, ¾�ȥN�X
                }
  
                if( '5001'!=$fr_job_k ){  //�w�츳�ƪ����d�̫�@��
                  //echo $fr_next_db03."--".$fr_emp_k."  (".$fr_next_emp."-".$row_rk2['resak002'].")<br>";  
                  $sql_rk2 = "select resak015 
                              from    {$fn_flwDB}..resak         
                              where   resak001 = '{$fr_emp_k}'
                             ";
                  echo $sql_rk2."<br>";             
                  $res_rk2 = mssql_query($sql_rk2);
                  $row_rk2 = mssql_fetch_array($res_rk2);   
                  $fr_dept_k = $row_rk2['resak015'];
                  $ar_sql[] ="insert into {$fn_flwDB}..resdb (resdb001,resdb002,resdb003,resdb004,resdb005,resdb006,
                                                              resdb007,resdb008,resdb011,resdb012,resdb013,resdb014,
                                                              resdb015,resdb016,resdb017,resdb018,resdb019,
                                                              resdb020,resdb021,resdb022,resdb023,resdb024,
                                                              resdb009,resdb010,
                                                              resdb025,resdb026,resdb027,resdb900,resdb901,resdb904)
                                                      values ('{$f_var['f_flwType']}','{$f_var['f_flwNum']}','{$fr_next_db03}','0010','2','2',
                                                              '{$fr_pre_db03}','{$fr_pre_db04}','0','N','0','Y',
                                                              'N','N','Y','Y','Y',
                                                              'Y','Y','N','N','Y',
                                                              '','',
                                                              'N','N','','{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}')";        
                  $fr_pre_db03 = $fr_next_db03; 
                  $fr_pre_db04 = "0010";                 
                  $fr_next_db03 = str_pad(($fr_next_db03+10),4,0,STR_PAD_LEFT);
                }
            }while( $fr_next_emp!=$fr_emp_k );
         }
       }
    }
    $ar_sqlEr[] = "update {$fn_flwDB}..resda
                   set    resda019 = '{$fn_date}', resda020 = 4, resda021 = 4,
                          resda022 = '0000-0000-0000'
                   where resda001 = '{$f_var['f_flwType']}'
                         and resda002 = '{$f_var['f_flwNum']}' ";
    $ar_sqlEr[] = "update {$fn_flwDB}..resdc
                   set    resdc007 = 11, resdc008 = 9
                   where resdc001 = '{$f_var['f_flwType']}'
                         and resdc002 = '{$f_var['f_flwNum']}' ";
    $ar_sqlEr[] = "update {$fn_flwDB}..resdd
                   set    resdd014 = 11, resdd015 = 9, resdd902 = '{$f_var['flw']['f_b_empno']}',  resdd903 = '{$fn_date}'
                   where resdd001 = '{$f_var['f_flwType']}'
                         and resdd002 = '{$f_var['f_flwNum']}' ";
    // -----------------------------------------------------------------------
    //  �ɮפW�Ǧ�190 resde ���y�{���[�� (RESDE)
    // -----------------------------------------------------------------------
    //$mftp_server  = "flow.slc.com.tw";      // ftp server
    //$mftp_user    = "it";                   // ftp user name
    //$mftp_pass    = "sl85";                 // ftp user password
    if( 'Y'!=$fn_test ){
      $f_var['mftp_connect'] = ftp_connect($mftp_server) or die("flow.slc.com.tw  Could not connect"); // connect ftp
      if($f_var['mftp_connect']) {
          $f_var['mftp_login'] = ftp_login($f_var['mftp_connect'],$mftp_user,$mftp_pass); // login
          ftp_pasv($f_var['mftp_connect'], FALSE);
          //$remote_r_dir = "./{$f_var['f_flwType']}/";
          //@ftp_mkdir($f_var['mftp_connect'],$remote_r_dir);
          //@ftp_chmod($f_var['mftp_connect'],"0777",$remote_r_dir);
  
          $remote_dir = "./{$f_var['f_flwType']}/{$f_var['f_flwNum']}/";
          @ftp_mkdir($f_var['mftp_connect'],$remote_dir);
          @ftp_chmod($f_var['mftp_connect'],"0777",$remote_dir);
          $fd_resde003 = 0;  //�Ǹ�
          //$file_count = 0;
          for($i=1;$i<=3;$i++) {
          $fd_file = "f_resde003".$i;
          if($_FILES[$fd_file]['tmp_name']<>''){
              $fd_resde003++;
              $f_var['eipftp_connect'] = "{$fn_flwTB}/{$f_var['f_flwNum']}_";
              $f_var['file_count']     = str_pad($fd_resde003,4,'0',STR_PAD_LEFT);
              $f_var['mftp_dir']       = $remote_dir;
              $f_var['mftp_file']      = $fd_file;
              $f_updname    = $f_var['mftp_file'];
              $file_name    = $f_var['file_count']."_".$f_var['f_flwType']."_".date('Ymd').substr($_FILES[$f_updname]['name'],strpos($_FILES[$f_updname]['name'],'.'));
              $upload_file  = $f_var['eipftp_connect'].$file_name;
              $uplocal_file = $f_var['mftp_dir'].$file_name;
              $upload_temp  = $_FILES[$f_updname]['tmp_name'];
              if( ''!=$fd_pre_flwNum ){
                  $fv_eipftp  = "{$fn_flwTB}/{$fd_pre_flwNum}_";
                  $fv_eipftp .= $f_var['file_count']."_".$f_var['f_flwType']."_".date('Ymd').substr($_FILES[$f_updname]['name'],strpos($_FILES[$f_updname]['name'],'.'));
                  copy($fv_eipftp,$upload_file);
              }
              else{
                  move_uploaded_file( $upload_temp , iconv("big5","UTF-8",$upload_file) );   //�W�Ǧ�EIP
              }
              if(ftp_put($f_var['mftp_connect'], $uplocal_file, $upload_file,  FTP_BINARY )){  //�W�Ǧܹq�lñ��
                $f_var['flw_name'] = $file_name;
              }else{
                $f_var['rtn']['code'] = '2';
                $f_var['rtn']['meg'] = "�����ɶǰe����! �Э��s�s�W�@��!".$f_var['f_flwType']."-".$f_var['f_flwNum'];
              }
              $v_resde003 = $f_var['file_count'];
              $ar_resde003[$v_resde003] = $v_resde003;
              $ar_resde004[$v_resde003] = $_FILES[$fd_file]["name"];
              $ar_resde006[$v_resde003] = $f_var['flw_name'];
              $ar_resde010[$v_resde003] = $_FILES[$fd_file]["size"];
              $ar_resde005[$v_resde003] = $f_var['flw_name'];
          }
          }
          //-------------------------------------------------------------------------------------
          ftp_close($f_var['mftp_connect']);                  // close ftp
          //-------------------------------------------------------------------------------------
          if(!empty($ar_resde003)){
          foreach ($ar_resde003 as $key=>$value) {
              $ar_sql[] ="insert into {$fn_flwDB}..resde (resde001,resde002,resde003,resde004,resde006,resde010,resde011,resde005)
                                                  values('{$f_var['f_flwType']}','{$f_var['f_flwNum']}','{$ar_resde003[$key]}','{$ar_resde004[$key]}','{$ar_resde006[$key]}','{$ar_resde010[$key]}','{$fn_date}','{$ar_resde005[$key]}')
                              ";
          }
          }
      }
      else{
          $f_var['rtn']['code'] = '3';
          $f_var['rtn']['meg'] = "FWL�D���s�u���ѡA�гq����T ���β�!";
      }
    }
    $f_var['rtn']['flwType'] = $f_var['f_flwType'];
    $f_var['rtn']['flwNum'] = $f_var['f_flwNum'];
    if( 'Y'==$fn_test ){
      $f_var['rtn']['code'] = 'T';
      echo "<pre>";
      print_r($ar_sql);
      print_r($ar_sqlEr);
      echo "</pre>";
    }
    else{
      if( '0'==$f_var['rtn']['code'] AND !empty($ar_sql) ){
        $f_var['rtn']['meg'] = '';
        foreach ($ar_sql as $ky=>$vy) {
          if( !mssql_query($ar_sql[$ky]) ){
              $f_var['rtn']['code'] = '5';
              $f_var['rtn']['meg'] .= "�x�s���`! ";
              $f_var['rtn']['meg'] .= "<pre>{$ar_sql[$ky]}</pre><br>";
          }
        } 
      }
  
      if( '0'!=$f_var['rtn']['code'] ){ //�x�s�U���qñtable����, ���
        foreach ($ar_sqlEr as $ky=>$vy) {
          if( !mssql_query($ar_sqlEr[$ky]) ){
            $f_var['rtn']['code'] = '4';
            $f_var['rtn']['meg'] = "��楢��! ";
          }
        }
      }
      if( 'SL-EIP2FLW'==$f_var['f_flwType'] ){
        $vb_b_date = date("Y-m-d H:i:s");
        $vb_dept_id = '';
        $vb_empno = $f_var['flw']['f_b_empno']; 
        $vb_proc = u_showproc(); // �{���N��
        if( 'flwc'==$vcon ){
          $fd_intable = "sleip2flwcd";
        }else if( 'flw'==$vcon ){
          $fd_intable = "sleip2flw";
        }
        if( '0'==$f_var['rtn']['code'] ){
          foreach ($f_var['flw']['f_field'] as $kf=>$vf) {
            if( strstr($kf,"sleip2flw9")==null ){
              $ar_in[$kf] = $f_var['flw']['f_field'][$kf];
            }
          }
          sl_open('docs');
          $ins_eip = "insert into docs.{$fd_intable} ( ".implode(",",array_keys($ar_in)).", resda020, resda021, b_empno, b_dept_id, b_proc, b_date )
                       values ( '".implode("','",$ar_in)."', '2', '1', '{$vb_empno}', '{$vb_dept_id}', '{$vb_proc}', '{$vb_b_date}' )";
          if( !mysql_query($ins_eip) ){                  
            echo "<font color=red>Error�I�x�s��eip���`, ���^�ϨöK�q�����ױԭz, �i����T�H��, ���¡I {$ins_eip}</font>";
          }
        }    
      }
    }
    $f_var['rtn']['meg'] .= " ��O-�渹:  {$f_var['f_flwType']}-{$f_var['f_flwNum']}";
    mssql_close($fndb);

    return;
  }
// **************************************************************************
//  ��ƦW��: sl_gas_ct()
//  ��ƥ\��: �v���s��
//  �ϥΤ覡: sl_gas_ct($dept)
//  �ϥλ���: $dept => login_hrm_dept_id         
//  �{���]�p: �P�p��
//  �]�p���: 2020.12.12
// **************************************************************************
function sl_gas_ct($vdept, $vtpl){
  sl_open('sl');
  $sql = "SELECT es04
          FROM gas_ct
          WHERE d_date = '0000-00-00 00:00:00'
                AND es02 = '{$vdept}'
         ";
  //echo $sql.'<br>';
  $res = mysql_query($sql);
  $qty = mysql_num_rows($res);
  if($qty > 0){
    //echo $vtpl;
    $row = mysql_fetch_assoc($res);
    $f_var['domain1']    = $row['es04'];
    $f_var['domain1']    = strstr($row['es04'],$vtpl);
    //echo $f_var['domain1'].'+++'.'<br>';
    return $f_var['domain1'];
  }
  else{                    
    return;
  }
}
// **************************************************************************
//  ��ƦW��: sl_gp_emp()
//  ��ƥ\��: �v���s�զC�X���s
//  �ϥΤ覡: sl_gp_emp($vgp,$voutput )
//  �ϥλ���: $vgp => empno 
//            $voutput:empno=���s ; name=�m�W
//  �{���]�p: �Ϊ�
//  �]�p���: 2021.05.05
// **************************************************************************
function sl_gp_emp($vgp, $voutput='empno'){
  sl_open('it');
  $sql = "SELECT GROUP_CONCAT( pass.empno order by empno desc) AS empno,
                 GROUP_CONCAT( pass.name order by empno desc) AS name
          FROM   it.ap_deptgroup
                 LEFT JOIN sl.pass ON ap_deptgroup.dept_id = pass.hr_deptid
                                      AND pass.d_date = '0000-00-00 00:00:00'                      
          WHERE  ap_deptgroup.d_date = '0000-00-00 00:00:00'
                 AND ap_deptgroup.gp_id = '{$vgp}'
                 AND (CASE
                       WHEN ap_deptgroup.job_id != '' THEN ap_deptgroup.job_id = pass.job_id 
                      ELSE 1=1 END) 
         ";
  $res = mysql_query($sql);
  $qty = mysql_num_rows($res);
  if($qty > 0){
    $row = mysql_fetch_assoc($res);
    return $row[$voutput];
  }
  else{                    
    return;
  }
}

// **************************************************************************
//  ��ƦW��: sl_gp_getDept()
//  ��ƥ\��: ���o�v���s�դ�HRM�N�X
//  �ϥΤ覡: sl_gp_getDept($dept)
//  �ϥλ���: $gp => �s�եN�X 
//  �{���]�p: ���t
//  �]�p���: 2022.04.25
// **************************************************************************
function sl_gp_getDept($gp, $vjob=''){
  sl_open('it');
  $swhere = "";
  if( ''!=trim($vjob) ){
    $swhere = " AND ( job_id = '{$vjob}' OR job_id = '' ) ";
  }
  $sql = "SELECT GROUP_CONCAT( dept_id ) AS dept_id
          FROM it.ap_deptgroup
          WHERE d_date = '0000-00-00 00:00:00'
                AND gp_id = '{$gp}'
                {$swhere}
         ";
  $res = mysql_query($sql);
  $qty = mysql_num_rows($res);
  if($qty > 0){
    $row = mysql_fetch_assoc($res);
    return $row['dept_id'];
  }
  else{                    
    return;
  }
}

// **************************************************************************
//  ��ƦW��: sl_getbrowser()
//  ��ƥ\��: ���o�s����
//  �ϥΤ覡: sl_getbrowser()
//  �{���]�p: �Ϊ�
//  �]�p���: 2021.06.07
// **************************************************************************
function sl_getbrowser(){
  $user_agent = $_SERVER['HTTP_USER_AGENT'];
  if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
  elseif (strpos($user_agent, 'Edge')) return 'Edge';
  elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
  elseif (strpos($user_agent, 'Safari')) return 'Safari';
  elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
  elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'IE';
  return 'Other';
}
?>
