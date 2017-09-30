
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
		var count =0;
		var flag =0;
		var arr = [["a","b","c"],["d","e","f"],["g","h","i"]];
		function bin1(e){
			if((count%2)==0){
				e.innerHTML ="X";
				e.style.backgroundColor = "#bb0000";
				arr[0][0]="X";
				count++;
			}
			else{
				e.innerHTML ="O";
				e.style.backgroundColor = "#100098";
				arr[0][0]="O";
				count++;
			}
			win();
		}
		function bin2(e){
			if((count%2)==0){
				e.innerHTML ="X";
				e.style.backgroundColor = "#bb0000";
				arr[0][1]="X";
				count++;
			}
			else{
				e.innerHTML ="O";
				e.style.backgroundColor = "#100098";
				arr[0][1]="O";
				count++;
			}
			win();
		}
		function bin3(e){
			if((count%2)==0){
				e.innerHTML ="X";
				e.style.backgroundColor = "#bb0000";
				arr[0][2]="X";
				count++;
			}
			else{
				e.innerHTML ="O";
				e.style.backgroundColor = "#100098";
				arr[0][2]="O";
				count++;
			}
			win();
		}
		function bin4(e){
			if((count%2)==0){
				e.innerHTML ="X";
				e.style.backgroundColor = "#bb0000";
				arr[1][0]="X";
				count++;
			}
			else{
				e.innerHTML ="O";
				e.style.backgroundColor = "#100098";
				arr[1][0]="O";
				count++;
			}
			win();
		}
		function bin5(e){
			if((count%2)==0){
				e.innerHTML ="X";
				e.style.backgroundColor = "#bb0000";
				arr[1][1]="X";
				count++;
			}
			else{
				e.innerHTML ="O";
				e.style.backgroundColor = "#100098";
				arr[1][1]="O";
				count++;
			}
			win();
		}
		function bin6(e){
			if((count%2)==0){
				e.innerHTML ="X";
				e.style.backgroundColor = "#bb0000";
				arr[1][2]="X";
				count++;
			}
			else{
				e.innerHTML ="O";
				e.style.backgroundColor = "#100098";
				arr[1][2]="O";
				count++;
			}
			win();
		}
		function bin7(e){
			if((count%2)==0){
				e.innerHTML ="X";
				e.style.backgroundColor = "#bb0000";
				arr[2][0]="X";
				count++;
			}
			else{
				e.innerHTML ="O";
				e.style.backgroundColor = "#100098";
				arr[2][0]="O";
				count++;
			}
			win();
		}
		function bin8(e){
			if((count%2)==0){
				e.innerHTML ="X";
				e.style.backgroundColor = "#bb0000";
				arr[2][1]="X";
				count++;
			}
			else{
				e.innerHTML ="O";
				e.style.backgroundColor = "#100098";
				arr[2][1]="O";
				count++;
			}
			win();
		}
		function bin9(e){
			if((count%2)==0){
				e.innerHTML ="X";
				e.style.backgroundColor = "#bb0000";
				arr[2][2]="X";
				count++;
			}
			else{
				e.innerHTML ="O";
				e.style.backgroundColor = "#100098";
				arr[2][2]="O";
				count++;
			}
			win();
		}
		function win(){
			var q=0;
			for(i=0;i<3;i++){
				if(arr[q][0]==arr[q][1] && arr[q][0]==arr[q][2] && (count%2)==0 && flag ==0){
					alert("Player O wins");
					flag=1;
				}
				if(arr[q][0]==arr[q][1] && arr[q][0]==arr[q][2] && (count%2)!=0 && flag ==0){
					alert("Player X wins");
					flag=1;
				}
				q++;
			}
			q=0;
			for(j=0;j<3;j++){
				if(arr[0][q]==arr[1][q] && arr[0][q]==arr[2][q] && (count%2)==0 && flag ==0){
					alert("Player O wins");
					flag=1;
				}
				if(arr[0][q]==arr[1][q] && arr[0][q]==arr[2][q] && (count%2)!=0 && flag ==0){
					alert("Player X wins");
					flag=1;
				}
				q++;
			}
			if(arr[0][0]==arr[1][1] && arr[0][0]==arr[2][2] && (count%2)==0 && flag ==0){
				alert("Player O wins");
				flag=1;
			}
			if(arr[0][0]==arr[1][1] && arr[0][0]==arr[2][2] && (count%2)!=0 && flag ==0){
				alert("Player X wins");
				flag=1;
			}
			if(arr[0][2]==arr[1][1] && arr[1][1]==arr[2][0] && (count%2)==0 && flag ==0){
				alert("Player O wins");
				flag=1;
			}
			if(arr[0][2]==arr[1][1] && arr[1][1]==arr[2][0] && (count%2)!=0 && flag ==0){
				alert("Player X wins");
				flag=1;
			}
			if(count==9 && flag==0){
				alert("Draw match!!");
			}
		}
		
	</script>
</head>
<body><center>
<div id='mainblock'>
	<button name="bt1" id='b1' onclick=" bin1(this);this.disabled='disabled';"></button>
	<button name="bt2" id='b2' onclick="bin2(this);this.disabled='disabled';"></button>
	<button name="bt3" id='b3' onclick="bin3(this);this.disabled='disabled';"></button>
	<button name="bt4" id='b4' onclick="bin4(this);this.disabled='disabled';"></button>
	<button name="bt5" id='b5' onclick="bin5(this);this.disabled='disabled';"></button>
	<button name="bt6" id='b6' onclick="bin6(this);this.disabled='disabled';"></button>
	<button name="bt7" id='b7' onclick="bin7(this);this.disabled='disabled';"></button>
	<button name="bt8" id='b8' onclick="bin8(this);this.disabled='disabled';"></button>
	<button name="bt9" id='b9' onclick="bin9(this);this.disabled='disabled';"></button>

</div>
<form><input type="submit" name="reset" value="RESTART" id="reset"></form>
</center>
</body>
</html>
