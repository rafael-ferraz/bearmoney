$(document).ready(function(){

	$("#amount").on("input", function() {
console.log('teste');
        // allow numbers, a comma or a dot
        var v= $(this).val(), vc = v.replace(/[^0-9,\.]/, '');
        if (v !== vc)        
            $(this).val(vc);
    });

});