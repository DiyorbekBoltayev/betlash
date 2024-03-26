<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <!-- Basic meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Site meta tags -->
  <title>Betlash</title>
  <meta name="description" content="Kitobcha shaklida chop etish uchun betlar ketma-ketligini aniqlab beruvchi veb-sahifa">
  <meta name="keywords" content="betlash, kitobcha , kitobcha chop etish, kitob betlash, betlash uz">

  <!-- Open Graph meta tags (for social media sharing) -->
  <meta property="og:title" content="Betlash">
  <meta property="og:description" content="Kitobcha shaklida chop etish uchun betlar ketma-ketligini aniqlab beruvchi veb-sahifa">
  <!-- Favicon -->
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .jumbotron {
      background-image: linear-gradient(to right, #667eea, #764ba2);
      color: white;
      padding: 3rem 1rem;
    }

    .form-container {
      background-color: white;
      padding: 2rem;
      border-radius: 0.5rem;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    .list-group-item {
      background-color: transparent;
      border: none;
      padding: 0.75rem 0;
    }

    .btn {
      transition: all 0.3s ease;
    }

    .btn-primary {
      background-color: #667eea;
      border-color: #667eea;
    }

    .btn-primary:hover {
      background-color: #5469d4;
      border-color: #5469d4;
    }

    .btn-info {
      background-color: #17a2b8;
      border-color: #17a2b8;
    }

    .btn-info:hover {
      background-color: #138496;
      border-color: #138496;
    }

    .input-group-text {
      background-color: #e9ecef;
      border: none;
    }

    .animate__animated {
      animation-duration: 1s;
    }
  </style>
</head>
<body>
<div class="jumbotron animate__animated animate__fadeInDown">
  <div class="container">
    <h1 class="display-4">Betlash</h1>
    <p class="lead">Kitobcha shaklida chop etish uchun betlar ketma-ketligini aniqlab beruvchi veb-sahifa</p>
  </div>
</div>

<div class="container my-5">
  <div class="form-container animate__animated animate__fadeInUp">
    <form class="inline-form">
      <div class="row">
        <div class="col-md-6">
          <h3 class="mb-4">Chop etishga tayyorlash</h3>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <p>Har bir varaqda qancha sahifa chop etishni xohlaysiz?</p>
              <div class="input-group mb-3">
                <select id="pageMode" class="form-select" onchange="calculate();">
                  <option value="2" selected>2 sahifa</option>
                  <option value="4">4 sahifa</option>
                </select>
                <span class="input-group-text"><i class="fas fa-book"></i></span>
              </div>
            </li>
            <li class="list-group-item" id="prep-tip-1">Sahifalar soni <b id="prep-tip-1-1">4</b> <b>ga bo'linishiga ishonch hosil qiling</b>, masalan <i id="prep-tip-1-2">4 yoki 8 yoki 12 va h.k</i>. Agar unday bo'lmasa bo'sh sahifa qo'shing.</li>
            <li class="list-group-item">
              <p>Sahifalar sonini kiriting:</p>
              <div class="input-group mb-3">
                <input class="form-control" type="text" size="4" id="count" value="16" onchange="calculate();">
                <button onclick="calculate();" title="Hisoblash" class="btn btn-primary" type="button"><i class="fas fa-calculator"></i></button>
              </div>
            </li>
            <li class="list-group-item">
              <p>Printeringiz bir vaqtning o'zida ikkala tomonini ham chop qila oladimi?</p>
              <div class="input-group mb-3">
                <select id="duplex" class="form-select" onchange="calculate();">
                  <option value="No" selected>Yo'q</option>
                  <option value="Yes">Ha</option>
                </select>
                <span class="input-group-text"><i class="fas fa-print"></i></span>
              </div>
            </li>
            <li class="list-group-item">
              <p>Yozuvlar chapdan-o'ngga qarab o'qiladimi (O'zbekcha, Ruscha, Inglizcha va h.k) yoki o'ngdan-chapga qarab o'qiladimi (Arabcha, Forscha va h.k)?</p>
              <div class="input-group mb-3">
                <select id="direction" class="form-select" onchange="calculate();">
                  <option value="LTR">Chapdan-o'ngga</option>
                  <option value="RTL">O'ngdan-chapga</option>
                </select>
                <span class="input-group-text"><i class="fas fa-text-width"></i></span>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <h3 class="mb-4">Chop etish</h3>
          <ul class="list-group list-group-flush" id="doublesided">
            <li class="list-group-item" id="print-tip-doublesided-3">
              <p>Quyidagi tartibda chop eting:</p>
              <div class="input-group mb-3">
                <input class="form-control" type="text" id="duplexlist" size="50" readonly>
                <button onclick="copyToClipboard('duplexlist');" title="Copy to clipboard" class="btn btn-info" type="button"><i class="far fa-copy"></i></button>
              </div>
            </li>
            <li class="list-group-item" id="print-tip-doublesided-10"> &nbsp;</li>
          </ul>
          <ul class="list-group list-group-flush" id="singlesided">
            <li class="list-group-item" id="print-tip-singlesided-2">
              <p>Dastlab buni chop eting:</p>
              <div class="input-group mb-3">
                <input class="form-control" type="text" id="side1list" size="50" readonly>
                <button onclick="copyToClipboard('side1list');" title="Copy to clipboard" class="btn btn-info" type="button"><i class="far fa-copy"></i></button>
              </div>
            </li>
            <li class="list-group-item" id="print-tip-singlesided-3">Chop etilgan sahifalarni aylantiring va printerga qo'ying.</li>
            <li class="list-group-item" id="print-tip-singlesided-4">
              <p>Keyin buni chop eting:</p>
              <div class="input-group mb-3">
                <input class="form-control" type="text" id="side2list" size="50" readonly>
                <button onclick="copyToClipboard('side2list');" title="Copy to clipboard" class="btn btn-info" type="button"><i class="far fa-copy"></i></button>
              </div>
            </li>
            <li class="list-group-item" id="print-tip-singlesided-10"> &nbsp;</li>
          </ul>
        </div>
      </div>
    </form>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
  function calculate() {
    // set options to variables
    duplex = document.getElementById('duplex').value;
    direction = document.getElementById('direction').value;
    pageMode = document.getElementById('pageMode').value;

    // show different elements based on duplex option
    if (duplex == "Yes") {
      document.getElementById("doublesided").style.display = "block";
      document.getElementById("singlesided").style.display = "none";
    } else {
      document.getElementById("doublesided").style.display = "none";
      document.getElementById("singlesided").style.display = "block";
    }

    // set option to variable
    count = document.getElementById('count').value;
    var duplexlist = '';
    var side1list = '';
    var side2list = '';

    switch (pageMode) {
            // for 2 page per sheet booklet
      case '2':
        var pagesPerPaper = 4
        var pageRemainder = count % pagesPerPaper
        document.getElementById('prep-tip-1-1').textContent = pagesPerPaper.toString();
        document.getElementById('prep-tip-1-2').textContent = "4 yoki 8 yoki 12 va h.k";


        var printTip10 = ""
        document.getElementById('print-tip-doublesided-10').textContent = printTip10;
        document.getElementById('print-tip-singlesided-10').textContent = printTip10;
        if (pageRemainder === 0) {

          for (var i = 1; i < count / 2; i = i + 2) {
            var newside1;
            var newside2;
            if (direction == "LTR") {
              var newside1 = (count - i + 1).toString() + ',' + i.toString() + ',';
              var newside2 = (i + 1).toString() + ',' + (count - i).toString() + ',';
            } else {
              // RTL; this is the above two lines with each pair of numbers in the
              // other order
              var newside1 = i.toString() + ',' + (count - i + 1).toString() + ',';
              var newside2 = (count - i).toString() + ',' + (i + 1).toString() + ',';
            }

            side1list = side1list + newside1;
            side2list = side2list + newside2;
            duplexlist = duplexlist + newside1 + newside2;

          }
        } else {
          side1list = "Betlar soni " + pagesPerPaper + " ga bo'linmaydi . Chop etish uchun " + (pagesPerPaper - pageRemainder) + " sahifa qo'shish kerak,";
          side2list = "";
          duplexlist = "Betlar soni " + pagesPerPaper + " ga bo'linmaydi . Chop etish uchun " + (pagesPerPaper - pageRemainder) + "sahifa qo'shish kerak,";
        }
        break;

      case '4':
        var pagesPerPaper = 8
        var pageRemainder = count % pagesPerPaper
        document.getElementById('prep-tip-1-1').textContent = pagesPerPaper.toString();
        document.getElementById('prep-tip-1-2').textContent = "8 yoki 16 yoki 24 va h.k";



        var printTip10single = "";
        var printTip10double = "";
        document.getElementById('print-tip-doublesided-10').textContent = printTip10double;
        document.getElementById('print-tip-singlesided-10').textContent = printTip10single;


        if (pageRemainder === 0) {
          for (var i = 1; i < count / 4; i = i + 2) {
            var newside1;
            var newside2;
            if (direction == "LTR") {
              var newside1 = (count - i + 1).toString() + ',' + i.toString() + ','
                      + (count - (count / 4) - i + 1).toString() + ',' + (i + (count / 4)).toString() + ',';
              var newside2 = (i + 1).toString() + ',' + (count - i).toString() + ','
                      + (i + 1 + (count / 4)).toString() + ',' + (count - i - (count / 4)).toString() + ',';
            } else {
              // RTL; this is the above two lines with each pair of numbers in the
              // other order
              var newside1 = i.toString() + ',' + (count - i + 1).toString() + ','
                      + (i + (count / 4)).toString() + ',' + (count - (count / 4) - i + 1).toString() + ',';
              var newside2 = (count - i).toString() + ',' + (i + 1).toString() + ','
                      + (count - i - (count / 4)).toString() + ',' + (i + 1 + (count / 4)).toString() + ',';
            }side1list = side1list + newside1;
            side2list = side2list + newside2;
            duplexlist = duplexlist + newside1 + newside2;
          }
        } else {
          side1list = "Betlar soni " + pagesPerPaper + " ga bo'linmaydi . Chop etish uchun " + (pagesPerPaper - pageRemainder) + " sahifa qo'shish kerak,";
          side2list = "";
          duplexlist = "Betlar soni " + pagesPerPaper + " ga bo'linmaydi . Chop etish uchun " + (pagesPerPaper - pageRemainder) + "sahifa qo'shish kerak,";
        }

        break;

      default:
        break;
    }

    // delete last comma
    side1list = side1list.substr(0, side1list.length - 1);
    side2list = side2list.substr(0, side2list.length - 1);
    duplexlist = duplexlist.substr(0, duplexlist.length - 1);

    document.getElementById('side1list').value = side1list;
    document.getElementById('side2list').value = side2list;
    document.getElementById('duplexlist').value = duplexlist;
  }

  function init() {
    calculate();
  }

  function copyToClipboard(id) {
    var copyText = document.getElementById(id);
    copyText.select();
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/
    document.execCommand("copy");
    toastr.clear()
    toastr.info("Xotiraga nusxalandi !");
  }

  document.addEventListener("DOMContentLoaded", init);
</script>