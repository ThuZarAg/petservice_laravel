$(document).ready(function(){

    showTable();
    cartnoti();


        $('.addtocart').on('click', function(){

            var id = $(this).data('id');
            var codeno = $(this).data('codeno');
            var name = $(this).data('name');
            var photo = $(this).data('photo');
            var price = $(this).data('price');
            var discount = $(this).data('discount');
            var qty = 1;

            var item={
                    id:id,
                    codeno:codeno,
                    name:name,
                    price:price,
                    photo:photo,
                    discount:discount,
                    qty:qty
            };

            var itemString=localStorage.getItem("itemlist");
            var itemArray;

            if (itemString==null) {

                itemArray=[];

            }else{

                itemArray=JSON.parse(itemString);
            }

            var status=false;
            $.each(itemArray,function(i,v){
                if (id==v.id){
                    status=true;
                    v.qty++;
                }

        });

        if (!status){
            itemArray.push(item);
        }

        var itemData=JSON.stringify(itemArray);
        localStorage.setItem("itemlist",itemData);
        cartnoti();
        showTable();
    });

    function cartnoti(){
        
        var itemString = localStorage.getItem("itemlist");
        if (itemString) {
            var itemArray = JSON.parse(itemString);
            var total =0;
            var noti =0;
            $.each(itemArray, function(i,v){

                var unitprice = v.price;
                var discount = v.discount;
                var qty = v.qty;
                if (discount){
                    var price = discount;
                }else{
                    var price = unitprice;
                }
                var subtotal = price * qty;
                noti += qty ++;
                total += subtotal ++;
            })
            $('.cartnoti').html(noti);
            $('.cartTotal').html(total+' Ks');

        }
        else{
            $('.cartnoti').html(0);
            $('.cartTotal').html(0+' Ks');

        }
    }


    function showTable()
        {
            var itemString = localStorage.getItem("itemlist");

            if (itemString) {
                var itemArray = JSON.parse(itemString);

                if(itemArray != 0){
                    var mytable = ''; 
                    var total = 0;
                    $.each(itemArray, function(i,v){
                        if (v){
                            var id = v.id;
                            var codeno = v.codeno;
                            var name = v.name;
                            var price = v.price;
                            var discount = v.discount;
                            var photo = v.photo;
                            var qty = v.qty;
                            console.log(qty);
                            if (discount > 0) {
                                var unit = discount;
                            }
                            else{
                                var unit = price;
                            }
                            var subtotal = unit * qty;  

                mytable += `<tr>
                    <td>
                    <button class="btn btn-outline-danger remove" data-id="${i}"> <i
                    class="fas fa-times"> </i> </button>
                    </td>
                    <td>
                    <img src="${photo}" class="img-fluid" style="width:50px; height:50px;">
                    </td>
                    <td>
                    <p>${name}</p>
                    </td>
                    <td>
                    <button class="btn btn-outline-secondary plus_btn" data-id="${i}"><i
                    class="fas fa-plus"></i> </button>
                    </td>
                    <td>
                    <p> ${qty} </p>
                    </td>
                    <td>
                    <button class="btn btn-outline-secondary minus_btn" data-id="${i}"> <i
                    class="fas fa-minus"></i> </button>
                    </td>
                    <td>`;
                    if (discount > 0){
                        mytable += `<h5> ${discount} Ks </h5>
                        <p class="text-danger"> <del> ${price} Ks
                        </del> </p>`

                    }
                    else{
                        mytable += `<p > ${price} Ks </p>`;
                    }
                    mytable +=`</td>

                    <td> <p class="text-danger"> ${subtotal} Ks </p> </td>
                    </tr>`;
                }
                total += subtotal++;
            });
                mytable += `<tr>
                        <td colspan="8">
                        <h3 class="text-right"> Total : ${total} </h3>
                        </td>
                        </tr>`;
                        //console.log(mytable);

                    $('.shoppingcart_div').show();
                    $('.noneshoppingcart_div').hide();
                    $('#shoppingcart_body').html(mytable);
                    //$('#shoppingcart_tfoot').html(mytfoot);

                }

                else{

                    $('.shoppingcart_div').hide();
                    $('.noneshoppingcart_div').show();
                }

            }
            else{
                $('.shoppingcart_div').hide();
                $('.noneshoppingcart_div').show();
            }
        }


        // increase quantity

        $('#shoppingcart_body').on('click','.plus_btn', function()  

            { 
                var id = $(this).data('id');  
                var itemString = localStorage.getItem("itemlist");  
                var itemArray = JSON.parse(itemString);
                  
                $.each(itemArray,function (i,v){  
                    if (i == id) {  
                        v.qty++;  
                    }
                      
                })  

                cart = JSON.stringify(itemArray);  
                localStorage.setItem("itemlist",cart);  
                showTable();  
                cartnoti();  
            })

        // Sub quantity

        $('#shoppingcart_body').on('click','.minus_btn', function()  
            {  
                var id = $(this).data('id');  
                var itemString = localStorage.getItem("itemlist");  
                var itemArray = JSON.parse(itemString);
                  
                $.each(itemArray,function (i,v) {  
                    if (i == id) {  
                        v.qty--;
                          
                        if (v.qty == 0) {  
                            itemArray.splice(id,1);  
                        }  
                    }  
                })    

                cart = JSON.stringify(itemArray);  
                localStorage.setItem("itemlist",cart);  
                showTable();  
                cartnoti();    
            })

        // remove item

        $('#shoppingcart_body').on('click','.remove', function() 

            {  

            var id = $(this).data('id');  
            var itemString = localStorage.getItem("itemlist");  
            var itemArray = JSON.parse(itemString);  
            $.each(itemArray,function (i,v) 

                {  
                    if (i == id) {  
                        itemArray.splice(id,1);  
                    }  
                })
                
            cart = JSON.stringify(itemArray);  
            localStorage.setItem('itemlist',cart);  
            showTable();  
            cartnoti();    
        }) 


    });

    $('.checkoutbtn').on('click',function(){
        //console.log('hello');


        var notes = $('.notes').val();
        // console.log(notes);
        var itemString = localStorage.getItem('itemlist');
        var itemArray = JSON.parse(itemString);

        var total =0;
        $.each(itemArray, function(i,v){

            var unitprice = v.price;
            var discount = v.discount;
            var qty = v.qty;
            if (discount) {
                var price = discount;
            }
            else{
                var price = unitprice;
            }
            var subtotal = price * qty;

            total += subtotal ++;
        });

        // console.log(total);

        // $.post('storeorder.php',{
        //     cart: itemArray,
        //     notes: notes,
        //     total: total
        // },function(response){
        //     localStorage.clear();
        //     location.href="ordersuccess.php";
        // });
    });

    


    // $('.profile_editBtn').show();
    // $('.profile_cancelBtn').hide();

    // $('.profile_editBtn').on('click', function(){
    //     $("fieldset").removeAttr("disabled");
    //     $("#imageUpload").removeAttr("disabled");

    //     $('.profile_editBtn').hide();
    //     $('.profile_cancelBtn').show();

    // });

    // $('.profile_cancelBtn').on('click', function(){
    //     $('#imageUpload').prop('disabled', true);
    //     $('fieldset').prop('disabled', true);


    //     $('.profile_editBtn').show();
    //     $('.profile_cancelBtn').hide();

    // });

   

    

    



