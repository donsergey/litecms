console.log('custom_js_init2');

function call_chmode(mode){		// ��������� ����� � ������ ������ �������� ������
	var modem=[
	'','mode=daygr','mode=cimgr'
	];
	var fmode=''; 
	var hp=modem[mode]; if (hp!='') fmode=bs+hp;
	document.location.href = turl+fmode;	
	//console.log(turl+fmode);
}
