  function notifikasi(status, text) {
          if (status == 'success') {
            $.toast({
                      heading: 'Success',
                      text: text,
                      showHideTransition: 'slide',
                      icon: 'success',
                      hideAfter: 5000,
                      position: 'top-right'
            });
             var audio = new Audio('http://localhost/project4/assets/sound/1.mp3');
          }else{
            $.toast({
                      heading: 'error',
                      text: text,
                      showHideTransition: 'slide',
                      icon: 'error',
                      hideAfter: 5000
                });
            var audio = new Audio('http://localhost/project4/assets/sound/1.mp3');
          }

            audio.play();
  }