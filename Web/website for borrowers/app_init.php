<?php

# ���� ������ ���������� ������� �� ������ ������ ���� �� ����� �� ����
if (!isset($user['id']))  {header("Location: /"); exit;} 
$o=checkUser(); $nheader=''; 

# ��������� ���� � ������� ������� �� app_wizard �� ��� �������� ����� > �� �������
if ($o['h']=='app_wizard') {
	if ($user['a_lid']==0) {
		#
		$nheader='/';
	}
	
}

# ���� �� ������� ������� ��� �� ������ �������� -> ����� ����
if ($o['h']!=$this_wizard_name) $nheader='/'.$o['h'];

if ($nheader!='') {
	header("Location: ".$nheader); exit; 
}

?>