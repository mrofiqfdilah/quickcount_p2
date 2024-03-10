<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E - Voting Platform</title>
    <link rel="icon" href="img/LOGOS.PNG">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

  <div class="hero">
    <div class="n" style="display: flex;">
<p style="font-size:25px; font-weight:500; letter-spacing:0.5px;">Halo, {{ Auth()->User()->name }} <p class="emoji" style="transform(20deg); position:relative; left:10px; top:-3px; font-size:25px; transition:0.5s; ">&#x1F44B;</p></p>
</div>
<div style="width: 100px; position: relative; top:-10px; border-radius:8px;  height:5px; background-color:rgba(172, 134, 62, 1);"></div>
<p style="letter-spacing: 0.5px; color:#454545; position:relative; top:-10px; text-shadow: 0 5px 10px rgba(0,0,0,0.1); font-weight:420;">Silahkan melakukan voting dahulu sebelum melihat hasil quick count</p>
</div>
 
    <div class="paslon-container">
        @foreach ($paslon as $item)
        <div class="paslon-box" >
            <span class="no-urut">{{ $item->nourut }}</span>
            <img src="{{ $item->gambar }}" alt="">
            <p style="font-size:17px; position: relative; top:-5px; font-weight:500; text-shadow:0 5px 10px rgba(0,0,0,0.1); letter-spacing:0.5px;">{{ $item->nama_lengkap }}</p>
            <button id="openModal{{ $item->id }}" class="popup-button" data-popup-target="#popup{{ $item->id }}">Lihat Visi Misi</button>
            <form action="{{ route('vote') }}" method="post">
                @csrf
                <input type="hidden" name="id_users" value="{{ Auth::id() }}">
                <input type="hidden" name="id_paslon" value="{{ $item->id }}">
                <button type="submit" class="voting">Voting</button>
            </form>
        </div>
        @endforeach
    </div>

    <!-- Popups -->
    @foreach ($paslon as $item)
    <div id="popup{{ $item->id }}" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <h2 style="color: #DE2026; letter-spacing:0.5px; text-shadow:0 5px 10px rgba(0,0,0,0.1);">Visi :</h2>
          <p style="position: relative; color:#454545; top:-15px; text-align:justify;">{{ $item->visi }}</p>
          <h2 style="color: #DE2026; position: relative; top:-15px letter-spacing:0.5px; text-shadow:0 5px 10px rgba(0,0,0,0.1);">Misi :</h2>
          <p style="position: relative; color:#454545; top:-15px; text-align:justify;">{{ $item->misi }}</p>
        </div>
      
      </div>
    @endforeach
      
      <script>
      // Get the modal
      var modals = document.querySelectorAll(".modal");
      
      // Get the button that opens the modal
      var btns = document.querySelectorAll("[id^='openModal']");
      
      // Get the <span> element that closes the modal
      var spans = document.querySelectorAll(".close");
      
      // When the user clicks the button, open the modal 
      btns.forEach((btn, index) => {
        btn.onclick = function() {
          modals[index].style.display = "block";
        }
      });
      
      // When the user clicks on <span> (x), close the modal
      spans.forEach((span, index) => {
        span.onclick = function() {
          modals[index].style.display = "none";
        }
      });
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        modals.forEach((modal) => {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        });
      }
      </script>
</body>
</html>

<style>
    body {
    font-family: Poppins;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #f4f5f8;
}
.hero{
  position: relative;
  left: -255px;
  top:-5px;
}

.emoji{
           animation: wave 2s infinite;
        }
        @keyframes wave {
    0% { transform: rotate(0deg); }
    25% { transform: rotate(20deg); }
    50% { transform: rotate(0deg); }
    
    
  }

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  
    transition: transform 0.3s ease; /* Efek transisi */
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  transition: 0.2s;
  text-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  color:#454545;
  border-radius: 8px;
  border: 1px solid #888;
  width: 40%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

h1 {
    text-align: center;
}

.paslon-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.paslon-box {
    position: relative; /* Menambahkan posisi relatif untuk child elements */
}

.no-urut {
    position: absolute;
    top: 10px;
    right: 30px;
    border: 2px solid #DE2026;
    background-color: #fff;
    color: #DE2026;

    padding: 5px 10px;
    border-radius: 4px;
}

/* Atau Anda juga bisa memodifikasi style sesuai dengan preferensi Anda */


.paslon-box {
    background-color: #fff;
   width:310px;
    border-radius: 8px;
    height: 360px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.paslon-box img {
    max-width: 100%;
    border-radius: 8px;
}

.popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 999;
}

.popup-content {
    background-color: #fff;
    width: 50%;
    max-width: 500px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.popup-content h2 {
    margin-top: 0;
}

.popup-button {
    margin-top: auto; /* Menjadikan tombol ke bawah */
    margin-bottom: 10px; /* Memberikan sedikit ruang di antara tombol dan konten bawah */
    padding: 10px 15px;
    border: 2px solid rgba(172, 134, 62, 1);
    color: rgba(172, 134, 62, 1);
    position: relative;
    background-color: #FFF;
    left: -60px;
    font-size:16px;
    font-weight: 550;
    letter-spacing: 0.5px;
    font-family: poppins;
    border-radius: 4px;
    cursor: pointer;
}

.voting {
    padding: 10px 15px;
    border: 2px solid #DE2026;
    color: #fff;
    position: relative;
    background-color: #DE2026;
    left: 85px;
    top: -60px;
    font-size:16px;
    font-weight: 550;
    letter-spacing: 0.5px;
    font-family: poppins;
    border-radius: 4px;
    cursor: pointer;
}

.close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
    border: none;
    background: transparent;
    font-size: 20px;
    color: #888;
}

@media (max-width: 768px) {
    .paslon-container {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* Atur lebar kotak paslon pada perangkat seluler */
        margin-top: 500px;
    }
}

</style>
