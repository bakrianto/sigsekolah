<div class="result">
  
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $.get( 'http://localhost/sig_sekolah/index.php?pg=inventaris_detail&id_ruang=1', function( data ) {
    $('.result').html( data );
  });
});
</script>