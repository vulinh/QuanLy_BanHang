jQuery('document').ready(function(){
    
});

function loadnewmessage(url){
    var parent = '#newmessage';      
    $.getJSON(url + 'mails/newmessage',function(data){
        //      var data = $.parseJSON(data);
        jQuery('#newmessage').html(''); 
        if(data.length > 0){
            addHeaderMess(data.length, parent);
            jQuery.each( data, function( i, val ) {
                addMessage(url,val.Mail.idMail, val.UsersSent.name, val.Mail.date, val.Mail.content, parent);
            });
            jQuery('.messageNumber').html(data.length);
            addLinkAllMess(url, parent);
        }
        else{
            addHeaderMess(0, parent);
            addLinkAllMess(url, parent);
        }
    });

    // interval between items
    var itemInterval = 3000;
    var infiniteLoop;
    setTimeout(function() {
        infiniteLoop = setInterval(loadnewmessage(url), itemInterval);
    }, 300);
    // start loop
}
function addMessage(url, id, from, time, mess, parent){
    var element = ' <li><a href="'+url+'mails/viewreceipt/'+id+'"><span class="photo">';
    element += '<img src="'+url+'img/avatar-mini.png" alt="avatar">';
    element += '</span><span class="subject">';    
    element += '<span class="from">'+from+'</span>';        
    element += '</span>';  
    if(mess.length > 60){
        mess = mess.substring(0,60)+'...';  
    }                
    element += '<span class="message">'+mess+'</span>';
    element += '<span class="time" style = "font-weight: 700;display: block;text-align: right;">'+time+'</span>';
    element += '</a></li>';            
    jQuery(element).appendTo(parent);        
}

function addHeaderMess(messageNumber, parent){
    var element ='' ;
    if(messageNumber > 0){
        element = '<li><p>Bạn có '+messageNumber+' tin nhắn mới</p></li>'; 
    }else{
        element = '<li><p>Không có tin nhắn mới</p></li>';
    }  
    jQuery(element).appendTo(parent);  
    return false;                               
}

function addLinkAllMess(url, parent){
    var element = '<li><a href="'+url+'mails" style = "text-align: center;">Tất cả tin nhắn</a></li>';   
    jQuery(element).appendTo(parent);  
    return false;                               
}