<?php 
//�z�w�w�w�w�w�s�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�{
//�x�t�ΦW��: �xgift_access.php�@  �@                                              �x
//�x         �x                                                              �x
//�x�{���W��: �x�xgift_access.php                                                �x
//�x�{������: �x§�~�޲z�t��-�v���]�w��                                      �x      
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
//�x�]�p���: �x2021.04.28                                                   �x
//�|�w�w�w�w�w�r�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�}



// **************************************************************************
//  ��ƦW��: u_chk_access()
//  ��ƥ\��: �v���]�w
//  �ϥΤ覡: u_chk_access(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_chk_access(&$f_var){

  $f_var["admin"] = 'N'; //�̰��v��
  $f_var["fina"] = 'N'; //�|�p�f�֤H��
  $f_var["PD0001"] = 'N'; //���ʳ�
  $f_var["job_5019"] = 'N'; //¾���O��z��
  $f_var["normal"] = 'N'; //�@�뵡�f�H��


  $dept_id  = sl_dept_gp($_SESSION["login_hrm_dept_id"]);

  //IT0002 ��T�]�p
  if( strstr($dept_id,"IT0002") ){
    // $f_var["IT0002"] = 'Y';
    $f_var["admin"] = 'Y';
  }

  //PD0001 ����(��)
  if( strstr($dept_id,"PD0001") ){ 
    $f_var["PD0001"] = 'Y';
  }


  sl_open($f_var['mdb']); // �}�Ҹ�Ʈw

  //��config�̪��v���H��
  $sql = "SELECT * FROM {$f_var['mtable']['config']}
          WHERE access_empno LIKE '%{$_SESSION['login_empno']}%' 
          AND d_date ='0000-00-00 00:00:00'";

  $result = mysql_query($sql);
  if( mysql_num_rows($result) > 0 ){
    while( $row = mysql_fetch_assoc($result) ){

      //admin�v��
      if($row['config_key'] == 'admin'){
        $f_var["admin"] = 'Y';
      }
      //�|�p�f���v��
      if($row['config_key'] == 'fina_access'){
        $f_var["fina"] = 'Y';
      }
      
      //�@�뵡�f�v��
      if( $row['config_key'] == 'gift_head_area' ){

        if( $f_var["admin"] != 'Y'){ //���Oadmin����,
          $f_var["normal"] = 'Y'; 
        }

      }

    }
  }else{ //�Yconfig�̨S����v��,�h ��¾��P�_�O���O��z

    sl_openhrmdb('HRMDB');
    $sql_hrm = "SELECT e.code,e.CnName,j.code
                FROM Employee AS e
                LEFT JOIN Job AS j ON e.JobId = j.JobId
                WHERE e.code = '{$_SESSION['login_empno']}'
                AND j.code = '5019' /*5019 = ��z*/
                ";
    $rs_hrm = mssql_query($sql_hrm);
    if( mssql_num_rows($rs_hrm) > 0 ){
      //�]�w��z�v��--�ȥi�H�[��
      $f_var['job_5019'] = 'Y';
    }

  }



  //�P�_�O�����{�� �ھ��v���q�L
  
  switch( $f_var['mphp_name'] ){

    case 'gift_config': //�]�w��
    case 'gift_quota': //���&�B�׳]�w
      if( $f_var['admin'] == 'Y' ){
        return true;
      }
    break;
    case 'gift_type': //§�~�~���޲z
      if( $f_var['admin'] == 'Y' ){
        return true;
      }else if( $f_var['PD0001'] == 'Y' ){
        return true;
      }
    break;
    case 'gift_rpt': //����
      if( $f_var['admin'] == 'Y' || $f_var['PD0001'] == 'Y' || $f_var['fina'] == 'Y' ){
        return true;
      }else if( $f_var['normal'] == 'Y' || $f_var['job_5019'] == 'Y' ){
        return true;
      }
    break;
    case 'gift_list': //��§��H�W����
      if( $f_var['admin'] == 'Y' || $f_var['fina'] == 'Y' ){
        return true;
      }else if( $f_var['normal'] == 'Y' || $f_var['job_5019'] == 'Y' ){
        return true;
      }
    break;
    default:
     return false;
  }

}




?>