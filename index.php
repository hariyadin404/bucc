<html>
<meta charset='UTF-8'/><meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5' name='viewport'/><meta content='IE=edge' http-equiv='X-UA-Compatible'/><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"><script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script><link href="https://halokamu.likeadream.repl.co/style.css" rel="stylesheet" type="text/css" /><script src="https://halokamu.likeadream.repl.co/script.js"></script>
<head>
<!-- 
This code was made by Rayya R!
Blog: https://sinkronin.com
Instagram: @rayyarrr
TikTok: @rayyarr_
Telegram: @rayyarr
WhatsApp: 6282130626142
-->
</head>
<body>

<div id="konten">

<input class='chatMenu hidden' id='offchatMenu' type='checkbox' />
<div class='chatBox'>
  <div id='data' class='chatContent'>
    
    <div class='chatText'>
      <span id='text1'>Hai kamu~</span>
      <span id='text2'>Aku mau bilang nih</span>
      <span id='text3'>Kamu lucu banget deh</span>
      <span id='text4'>Ehh &#128123; &#128123; &#128123;</span>
      <span id='text5'>Tapi boong wlee</span>
      <span id='text6'>Ga deh canda &#129396;</span>
      <span id='text7'>Beneran lucu ko &#129395; &#129395; &#129395;</span>
      <span id='text8'>Ohh iyaaaa</span>
      <span id='text9'>Jangan pencet love ini!! <label class="lovein" onclick="selesai();">&#9829;</label></span>
    </div>
  </div>
</div>

<div id="bodyblur"></div>

<script type="text/javascript">
function play() {
  //Link Audio Bisa Diganti
  var audio = new Audio('https://halokamu.likeadream.repl.co/sound.mp3');
  audio.play();
}
            const swals = Swal.mixin({
                allowOutsideClick: false,
            });
            async function mulai(){              
                    await swals.fire('Halo!');
                    await swals.fire('Lihat ini sampai akhir ya &#129396;');                   
                    setTimeout(check,1000);setTimeout(teks1,1000);
                }
            
//Mulai
mulai();
//Ganti Foto Jumpscare 
function jscare(){document.body.style.backgroundImage = "url('https://i.postimg.cc/WpqjBhcv/scare.jpg')";play();}
</script>
</body>
</html>