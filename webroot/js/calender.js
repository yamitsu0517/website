function math1_button(){

    var math1 = document.getElementById("calender1").value;
    var math2 = document.getElementById("calender2").value;
    var date1 =new Date(math1);
    var date2 =new Date(math2);
    
    // 空チェック
    if(math1==="" || math2===""){
        alert("開始日と終了日を入力してください");
    } else{
        var result = (date2 - date1)/86400000;
        document.getElementById('result1').innerHTML = "日付の差は「 " + result + " 」日間です";
    }   
}
function math2_button() {
    var number = document.getElementById('number').value;
    number = Number(number);
    var today  = new Date() ;
    today.setDate(today.getDate() + number);

    var year   = today.getFullYear();
    var month  = today.getMonth() + 1 ;
    var day    = today.getDate();
    console.log(day)
    console.log(number >= 0);
    number >= 0 ?  document.getElementById('result2').innerHTML = number + "日後は" + year + "年" + month 
                                                    + "月" + day + "日" + "です" :
                    document.getElementById('result2').innerHTML = -1 * number + "日前は" + year + "年" + month 
                                                    + "月" + day + "日" + "です" 
}