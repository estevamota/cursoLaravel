<!--JavaScript at end of body for optimized loading-->
<!--<script type="text/javascript" src="js/materialize.min.js"></script> -->

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script type="text/javascript">

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  $(document).ready(function() {
    M.updateTextFields();
    $('.sidenav').sidenav();
  });

</script>

</body>
</html>
