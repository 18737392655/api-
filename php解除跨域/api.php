<!DOCTYPE html>

<html>

<head>

<title>Ǯ��</title>

<meta http-equiv="Content-Type" content="textml; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="css/main.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/layer.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" type="text/css" href="css/style.css"/>




</head>

<body>

<div id="modal-container">
  <div class="modal-background">
    <div class="modal">
      <div id="qrcode" style="margin:auto"></div> 
      <button class="adbtn ewm_btn">��������</button>
      
    </div>
  </div>
</div>



<div class="wrapper">

  

</div>


<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
	
	
	function showalert()
	{	
		
		$.ajax({
			               //����ʽ
			               type : "GET",
			               //�����ַ
			               url : "https://api.binance.com/api/v3/ticker/price",
			               //����ɹ�
			               success : function(result) {
			                   console.log(result);
			               },
			               //����ʧ�ܣ���������Ĵ�����Ϣ
			               error : function(e){
			                   console.log(e.status);
			                   console.log(e.responseText);
			               }
			           });
		
	}
	
	 $(function(){
		 
		setInterval(showalert, 2000);
		
	 });
	
</script>




</body>

</html>

