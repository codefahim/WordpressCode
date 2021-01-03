jQuery(document).ready(function(){
    jQuery('.submit').click(function(){
        
        
        var name = jQuery('.name').val();
        var add = jQuery('.add').val();
        
        $.ajax({
            'url': 'info.php',
            'type': 'POST',
            'data': {
                'name': name,
                'add': add
            },
            'success' : function(ok){
                jQuery('.fahim').text(ok);
            }
        })
        return false;
    })
})