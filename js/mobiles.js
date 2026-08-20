getfname=()=>{

    let url="http://localhost/billManagement/getcategory.php";
    let xhr = new XMLHttpRequest();
    xhr.open('GET',url,true);
    xhr.onload=()=>{ 
       let cartTotal = document.getElementById('cartT');
       
       let count = 0;
    
       if(xhr.readyState==4 || xhr.status==200)
       {
           let reponse = JSON.parse(xhr.responseText);
           let {orders} = reponse;

                orders.map(ur=>{ 
                    count++;
                    cartTotal.innerText = count;
                  });
            
           
       }
    } 
    xhr.send();
}
getfname(); 