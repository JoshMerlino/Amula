$(function(){
	
	$(".app-bar .back").click(function(){

		window.location.href = "./";
	})
	
	$("form[name='signup']").submit(function(e){
		
		e.preventDefault();
		var serial = $(this).serialize();

		$.ajax({
			type:"POST",
			data:serial,
			url:"protected/signup.php",
			success:function(d){
				if(d != "success"){
					Materialize.toast(d,5000);
				} else {
					window.location.href = "./";
				}
			}
		})
	})
	
	$("form[name='login']").submit(function(e){
		
		e.preventDefault();
		var serial = $(this).serialize();

		$.ajax({
			type:"POST",
			data:serial,
			url:"protected/login.php",
			success:function(d){
				if(d != "success"){
					Materialize.toast(d,5000);
				} else {
					window.location.href = "./";
				}
			}
		})
	})
	
	$("form[name='upload']").submit(function(e){
		
		e.preventDefault();
		var serial = $(this).serialize();
		
		$.ajax({
			type:"POST",
			data:serial,
			url:"protected/upload.php",
			success:function(d){
				alert(d)
				window.location.href = "./";
			}
		})
	})
	
	$("a#logout").click(function(){
		$.ajax({
			type:"POST",
			url:"protected/signout.php",
			success:function(d){
				window.location.href = "./";
			}
		})
	})
	
	$("a.upload").click(function(){
		$("input[type='file']").click();
	})
	
	$("input[type='file']#avatar").change(function(e){
		
		var file = new FileReader();
		var m = e.target;
		
		file.onload = function(){
			$(".change_avatar").children("img").attr("src",file.result);
			$.ajax({
				type:"POST",
				data:{
					d:file.result
				},
				url:"protected/setavatar.php"
			})
		}
		
		file.readAsDataURL(m.files[0]);
		
	})
	
	$("a#search").click(function(){
		window.location.href = "./search?q=" + $("input.search").val();
	})
	
	$(".search").change(function(){
		window.location.href = "./search?q=" + $("input.search").val();
	})
	
	$(".app-info").click(function(){
		window.location.href = "./";
	})
	
})