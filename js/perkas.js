
// console.log('');

// penggunaan js
var keyword = document.getElementById('keyword');
var tombolcari = document.getElementById('tombol_cari');
var container = document.getElementById('container');

keyword.addEventListener('keyup', function() {

      // buatkan objek ajax
      var xhr = new XMLHttpRequest();

      // persiapan objek ajax
      xhr.onreadystatechange = function() {
          if( xhr.readyState == 4 && xhr.status == 200) {
              container.innerHTML = xhr.responseText;
          }
      }

      // xhr.open('GET', '../ajax/coba.txt', true);
      xhr.open('GET', '../ajax/percobaan1.php?keyword=' + keyword.value, true);
      xhr.send();
});
