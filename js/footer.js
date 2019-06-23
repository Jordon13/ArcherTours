$('.himg').eq(1).hover(function() {
    $(this).attr('src', '<?php echo base_url('
        assets / icons / instagram1.png ')?>');
}).mouseleave(function() {
    $(this).attr('src', '<?php echo base_url('
        assets / icons / instagram.png ')?>');
});

$('.himg').eq(2).hover(function() {
    $(this).attr('src', '<?php echo base_url('
        assets / icons / whatsapp1.png ')?>');
}).mouseleave(function() {
    $(this).attr('src', '<?php echo base_url('
        assets / icons / whatsapp.png ')?>');
});

$('.himg').eq(0).hover(function() {
    $(this).attr('src', '<?php echo base_url('
        assets / icons / facebook1.png ')?>');
}).mouseleave(function() {
    $(this).attr('src', '<?php echo base_url('
        assets / icons / facebook.png ')?>');
});