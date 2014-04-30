$(document).ready(function(){
    	$("input[type=submit]").click(function(){
    		var str = $(this).val();
    		var arr = str.split(' ');
    		$("input[type=hidden]").val(arr[0]);
    	});
    	$(".sort").click(function(){
    		var str = $(".combo").val();
    		$(".hidden").val(str);
    	});
 });