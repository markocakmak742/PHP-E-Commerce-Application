<script>

//var max_vrednost = 300;    
    
var max_vrednost = <?php Print($MaxPreis); ?>;    
var min_vrednost = <?php Print($MinPreis); ?>; 


// slider
$("#sliderRange")
.slider({
range: true,
min: 0,
max: 900,
step: 1,
values: [min_vrednost, max_vrednost],
slide: function(event, ui) {
var price1 = ui.values[0];
var price2 = ui.values[1];
$("#price1")
//.val("\u20ac" + price1);
.val("" + price1);
$("#price2")
//.val("\u20ac" + price2);
.val("" + price2);
}
});
$('#price1')
.bind('keyup', function() {
var from = $(this)
.val();
var to = $('#price2')
.val();
$('#sliderRange')
.slider('option', 'values', [from, to]);
});
$('#price2')
.bind('keyup', function() {
var from = $('#price1')
.val();
var to = $(this)
.val();
$('#sliderRange')
.slider('option', 'values', [from, to]);
});
</script>