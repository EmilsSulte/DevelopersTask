function getForm(select){
    if(select.value==1){
        document.getElementById("Class_1").style.display = "block";
    }  else{
        document.getElementById("Class_1").style.display = "none" ;
    }
    if (select.value==2){
        document.getElementById("Class_2").style.display = "block";
    }  else{
        document.getElementById("Class_2").style.display = "none" ;
    }
    if (select.value==3){
        document.getElementById("Class_3").style.display = "block";
    }  else{
        document.getElementById("Class_3").style.display = "none";
    }



 }
 function GoBack(){ window.location.replace("ProductList.html")
}
function Redirect(){
    window.location.assign("scandiwebtask.000webhostapp.com/AddProduct.php")
}