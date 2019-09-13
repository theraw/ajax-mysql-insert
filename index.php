<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
 <input type='button' class='btn btn-primary' name='Info' value='Info' onclick='cinfo(<?php echo $row['privatekey']; ?>);'>
    

<script>
      function cinfo(privatekey) {
        swal({
          title: 'Jeni i sigurt?', 
          text: "Jeni i sigurt qe doni te shfaqni infot e klientit?", 
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: '#33cc33',
          cancelButtonColor: '#d33',
          confirmButtonText: 'PO!',
          cancelButtonText: 'JO!',
          confirmButtonClass: 'btn btn-success',
          cancelButtonClass: 'btn btn-danger',
          buttonsStyling: true,
          reverseButtons: true
          }).then(function (result) {
            if (result.value) {
             $.ajax({
               type: 'POST',
               url: "ok.php",
               data: {id: privatekey},
                 success: function(data) {
                     if(!$.trim(data)) {
                         swal("Cancelled", "Dicka esht gabim, Provoni Perseri!", "error");
                         console.log("Error!");
                     } else {
                         swal("Sukses!", data, "success");
                         console.log(data);
                         console.log("Sukses!");
                   }
               }
             })
            } else if (result.dismiss === swal.DismissReason.close) {
              swal(
                'Cancelled',
                ':)',
                'error'
              )
            }
        });
  }
</script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.min.js" async></script>
</html>
