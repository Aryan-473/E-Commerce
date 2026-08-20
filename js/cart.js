getfname=()=>{
    let url="http://localhost/billManagement/getcategory.php";
    let xhr = new XMLHttpRequest();
    xhr.open('GET',url,true);
    xhr.onload=()=>{ 
       let appdata = document.querySelector('.table-show'); 
       let tableBody = document.querySelector('.tableBody'); 
       let totalPrice = document.querySelector('#totalPrice'); 
       let countText = document.querySelector('#count');
        Tprice = 0;
        count = 0;

       if(xhr.readyState==4 || xhr.status==200)
       {
           let reponse = JSON.parse(xhr.responseText);
           let {orders} = reponse;


           orders.map(ur=>{ 
               let rowHolder = document.createElement('tr');
               
               let {product_name,product_quantity,product_price} = ur;
               count++;
                

               let prodtname = document.createElement('td');
               let prodtext = document.createTextNode(product_name);
               let productq = document.createElement('td');
               let productqtxt = document.createTextNode(product_quantity);
               let price = document.createElement('td');
               let pricetxt= document.createTextNode(product_price);
               
               appdata.appendChild(tableBody);
               tableBody.appendChild(rowHolder);

               prodtname.appendChild(prodtext);
               productq.appendChild(productqtxt);
               price.appendChild(pricetxt);
           
               rowHolder.appendChild(prodtname);
               rowHolder.appendChild(productq);
               rowHolder.appendChild(price);
              // price += 10;
               Tprice += (parseInt(product_price)*parseInt(product_quantity));
              totalPrice.innerText = Tprice;
              countText.innerText = count;
            });
       }
    } 
    xhr.send();
}
getfname(); 