
<?php  
include('Admin-erea/includes/connect.php');
include('Admin-erea/common_function.php');

?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html class=''>
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/oknoblich/pen/qcsih?depth=everything&order=popularity&page=87&q=mobile&show_forks=false" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Roboto");
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


body{
  background-color:#696969;
}

.header {
  padding: 30px 0;
  font-size: 20px;
  text-align: center;
  border-bottom: 1px solid #bbb;
}

.main {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 70vh;
  width: 80vw;
  background: url('secure-online-payment-internet-banking-via-credit-card-mobile-scaled.webp') no-repeat center center fixed;
  background-size: cover;
  border-radius: 20px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  
}

.footer {
  padding: 30px 0;
  font-size: 14px;
  text-align: center;
  color: #aaa;
}

.footer .devices {
  margin: 0 0 15px;
  font-family: fontawesome;
  font-size: 35px;
}

.payments {
  min-width: 320px;
}

/*
* SVG Icons
********************/
svg {
  display: block;
  position: absolute;
  top: 2px;
  right: 15px;
  width: 45px;
  height: 45px;
}

svg.svg-debit {
  top: 5px;
  right: 17px;
  width: 40px;
  height: 40px;
}

svg.svg-visa {
  right: 125px;
}

svg.svg-master {
  right: 70px;
}

svg.svg-sofort {
  top: -8px;
  right: 8px;
  width: 65px;
  height: 65px;
}

.svg-cash-hand {
  fill: #FFCA65;
}

.svg-cash-thumb {
  stroke: #FBAD3E;
  fill: none;
}

.svg-cash-money {
  fill: #34b154;
}

.svg-cash-money-inner {
  fill: #fff;
  opacity: .4;
}

.svg-cash-shirt-inner {
  fill: #def;
}

.svg-cash-shirt-outer {
  fill: #07b;
}

.svg-debit-card {
  fill: #e5e5e5;
}

.svg-debit-data {
  fill: #bbb;
}

.svg-debit-sign {
  fill: #fff;
}

.svg-debit-read {
  fill: #555;
}

.svg-visa-border {
  fill: #005098;
}

.svg-visa-letter {
  fill: #005098;
}

.svg-visa-corner {
  fill: #F6A500;
}

.svg-master-border {
  fill: #E30613;
}

.svg-master-circle1 {
  fill: #E40520;
}

.svg-master-circle2 {
  fill: #FAB31E;
}

.svg-master-letter {
  fill: #fff;
}

.svg-amex-border {
  fill: #0098D0;
}

.svg-amex-letter {
  fill: #0098D0;
}

.svg-sofort-line1 {
  fill: #ee7f00;
}

.svg-sofort-line2 {
  fill: #383a41;
}

.svg-sofort-fill {
  fill: #fff;
}

.svg-click-border {
  fill: #FF8000;
}

.svg-click-logo {
  fill: #FF8000;
}

.svg-click-letter {
  fill: #FF8000;
}

.svg-click-letter-center {
  fill: #808080;
}

.svg-paypal-border {
  fill: #1B557D;
}

.svg-paypal-letter1to3 {
  fill: #1B557D;
}

.svg-paypal-letter4to6 {
  fill: #107DB0;
}

/*
* Buttons
********************/
.button {
  position: relative;
  height: 50px;
  padding: 0 0 0 50px;
  font-size: 14px;
  line-height: 48px;
  border-bottom: 1px solid #bbb;
  background: #fafafa;
  cursor: pointer;
}

.button:hover {
  background: #f5f5f5;
}

.button:after {
  content: '';
  position: absolute;
  top: 15px;
  left: 18px;
  display: block;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  box-shadow: inset 0 0 0 1px #bbb, inset 0 0 0 7px #fff;
  background: #fff;
}

.button:hover:after {
  background: #bbb;
}

.button.active:after {
  background: #555;
}

/*
* Breakpoint
********************/
@media all and (min-width: 500px) {
  svg {
    right: 25px;
    width: 55px;
    height: 55px;
  }

  svg.svg-debit {
    top: 4px;
    right: 27px;
    width: 50px;
    height: 50px;
  }

  svg.svg-visa {
    right: 175px;
  }

  svg.svg-master {
    right: 100px;
  }

  svg.svg-sofort {
    top: -14px;
    right: 15px;
    width: 85px;
    height: 85px;
  }

  .button {
    height: 60px;
    padding: 0 0 0 60px;
    font-size: 18px;
    line-height: 58px;
  }

  .button:after {
    top: 20px;
    left: 23px;
  }
}
/*
* Breakpoint
********************/
@media all and (min-width: 700px) {
  svg {
    top: auto !important;
    right: 0 !important;
    left: 0;
    margin: auto;
    bottom: 10px;
    width: 60px;
    height: 60px;
  }

  svg.svg-cash {
    bottom: 5px;
    width: 70px;
    height: 70px;
  }

  svg.svg-debit {
    width: 60px;
    height: 60px;
  }

  svg.svg-visa {
    bottom: 50px;
    width: 40px;
    height: 40px;
  }

  svg.svg-master {
    bottom: 25px;
    width: 40px;
    height: 40px;
  }



  svg.svg-click {
    bottom: -2px;
    width: 90px;
    height: 90px;
  }

  svg.svg-paypal {
    bottom: -8px;
    width: 100px;
    height: 100px;
  }



  .payments {
    max-width: 700px;
    margin: 0 auto;
    padding: 25px;
    overflow: hidden;
  }

  .button {
    float: left;
    width: 100px;
    height: 150px;
    margin-right: 10px;
    padding: 50px 0 0;
    font-size: 12px;
    line-height: 1;
    text-align: center;
    border: 0;
    border-radius: 3px;
    box-shadow: inset 0 0 0 1px #bbb;
    
  }

  .button:last-child {
    margin-right: 0;
  }

  .button:after {
    top: 15px;
    left: 40px;
  }

  <?php
    $user_ip= getIPAddress(); 
     $id = $user_ip;
    if (isset($_SESSION['user_id']))
    {
         $id = $_SESSION['user_id'];
    }
    $get_user='SELECT * from  `user_table` where user_id='.$id;
 


    $result=mysqli_query($con,$get_user);
    $run_query= mysqli_fetch_array($result );
    $user_id=$run_query['user_id'];
  


    ?>
}
</style></head><body>
<section>
       <div class="container-fluid">
                 <!--first child-->
                

<div class="main">

  <div class='payments'>
  

  <div class='button active'>
 
  <a href="order.php?user_id=<?php echo $user_id ?>" class="text-center">Offline</a>


      <svg class="svg-cash" viewBox="0 0 512 512">
        <path class="svg-cash-hand" d="M106.908,147h56.33h96.607c22.139,0,31.855-0.384,37.188-0.055c5.463,0.334,10.715,2.463,17.723,7.55 c7.719,5.749,21.205,9.042,32.086,20.779c10.906,11.666,32.221,35.637,37.277,42.137c5.01,6.46,32.637,72.549-38.697,77.367 c-71.357,4.78-125.639-8.428-137.912-8.914c-12.289-0.485-31.773-5.975-51.424-10.815c-38.977-9.601-36.828-17.492-57.422-19.182 c-20.619-1.691-29.092-3.55-29.092-3.55L79.035,147H106.908z" />
        <path class="svg-cash-money" d="M426.537,100.903c0,0-49.463,56.124-93.143,92.677c-67.695,56.555-160.115,96.963-160.115,96.963 s36.949,80.367,46.809,121.462c53.283-30.399,150.305-93.938,189.299-124.44c35.197-27.506,95.736-99.566,95.736-99.566 L426.537,100.903z" />
        <path class="svg-cash-money-inner" d="M297.721,266.825c0,22.905,18.574,41.479,41.48,41.479 c22.908,0,41.482-18.574,41.482-41.479c0-22.919-18.574-41.481-41.482-41.481C316.295,225.344,297.721,243.906,297.721,266.825" />
        <path class="svg-cash-money-inner" d="M427.875,171.335c7.904,10.497,21.02,15.349,29.307,10.849 c8.346-4.563,8.65-16.735,0.715-27.284c-7.924-10.507-21.049-15.327-29.318-10.825 C420.305,148.616,419.969,160.839,427.875,171.335" />
        <path class="svg-cash-money-inner" d="M218.041,334.839c6.117,11.018,19.02,17.316,28.619,14.096 c9.697-3.181,12.477-14.663,6.301-25.642c-6.143-11.059-19.066-17.317-28.656-14.179 C214.619,312.355,211.881,323.83,218.041,334.839" />
        <path class="svg-cash-hand" d="M258.408,177.271c0,0,11.541,20.897,27.688,23.333c16.107,2.376,47.537,13.668,55.719,14.892 c8.143,1.148,27.1,5.382,27.1,21.029c0,8.212-5.717,34.513-27.863,34.513c-24.717,0-52.084-17.135-60.707-20.498 c-8.588-3.383-34.088-12.718-45.455-9.574c-11.262,3.09-35.111,2.374-50.895,0.941c-15.918-1.473-46.842-9.115-57.725-17.059 c0,0-18.08-9.965,20.4-28.777C185.225,177.282,242.934,162.21,258.408,177.271" />
        <path class="svg-cash-thumb" d="M258.408,177.271c0,0,11.541,20.897,27.688,23.333 c16.107,2.376,47.537,13.668,55.719,14.892c8.143,1.148,27.1,5.382,27.1,21.029c0,8.212-5.717,34.513-27.863,34.513 c-25.951,0-52.084-17.135-60.707-20.498c-8.588-3.383-34.088-12.718-45.455-9.574c-11.262,3.09-35.111,2.374-50.895,0.941 c-15.918-1.473-46.842-9.115-57.725-17.059c0,0-18.08-9.965,20.4-28.777C185.225,177.282,242.934,162.21,258.408,177.271z" />
        <path class="svg-cash-hand" d="M265.518,168.38l-16.447,17.848c0,0-48.854,11.748-74.717,19.733c-25.797,7.985-40.836,11.747-40.836,11.747 s-8.441,16.883-14.053,19.195c-5.65,2.386-20.699-8.41-10.391-31.398c10.391-23.032,20.254-46.032,77.559-47.435 c57.232-1.419,73.191-7.571,78.396,0.425C270.217,166.511,265.518,168.38,265.518,168.38" />
        <path class="svg-cash-shirt-inner" d="M57.346,142c-29.242,42-29.242,135-29.242,135H90V142H57.346z" />
        <path class="svg-cash-shirt-outer" d="M7,122v165.564c16,8.649,63,10.37,63,10.37V121.644c0,0-45,0.484-63,0" />
      </svg>
    
 
    </div>
    <div class='button active'>

    <a href="" class="text-center">Credit Card </a>
      <svg class="svg-visa" viewBox="0 0 512 512">
        <path class="svg-visa-border" d="M482.722,103.198c13.854,0,25.126,11.271,25.126,25.126v257.9c0,13.854-11.271,25.126-25.126,25.126H30.99 c-13.854,0-25.126-11.271-25.126-25.126v-257.9c0-13.854,11.271-25.126,25.126-25.126H482.722 M482.722,98.198H30.99 c-16.638,0-30.126,13.488-30.126,30.126v257.9c0,16.639,13.488,30.126,30.126,30.126h451.732 c16.639,0,30.126-13.487,30.126-30.126v-257.9C512.848,111.686,499.36,98.198,482.722,98.198L482.722,98.198z" />
        <polygon class="svg-visa-letter" points="190.88,321.104 212.529,194.022 247.182,194.022 225.494,321.104 190.88,321.104" />
        <path class="svg-visa-letter" d="M351.141,197.152c-6.86-2.577-17.617-5.339-31.049-5.339c-34.226,0-58.336,17.234-58.549,41.94 c-0.193,18.256,17.21,28.451,30.351,34.527c13.489,6.231,18.023,10.204,17.966,15.767c-0.097,8.518-10.775,12.403-20.737,12.403 c-13.857,0-21.222-1.918-32.599-6.667l-4.458-2.016l-4.864,28.452c8.082,3.546,23.043,6.618,38.587,6.772 c36.417,0,60.042-17.035,60.313-43.423c0.136-14.447-9.089-25.446-29.071-34.522c-12.113-5.882-19.535-9.802-19.458-15.757 c0-5.281,6.279-10.93,19.846-10.93c11.318-0.179,19.536,2.292,25.912,4.869l3.121,1.468L351.141,197.152L351.141,197.152z" />
        <path class="svg-visa-letter" d="M439.964,194.144h-26.766c-8.295,0-14.496,2.262-18.14,10.538l-51.438,116.47h36.378 c0,0,5.931-15.66,7.287-19.1c3.974,0,39.305,0.059,44.363,0.059c1.027,4.447,4.206,19.041,4.206,19.041h32.152L439.964,194.144 L439.964,194.144z M397.248,276.062c2.868-7.326,13.8-35.53,13.8-35.53c-0.194,0.339,2.849-7.36,4.593-12.132l2.346,10.959 c0,0,6.628,30.336,8.022,36.703H397.248L397.248,276.062z" />
        <path class="svg-visa-letter" d="M161.828,194.114l-33.917,86.667l-3.624-17.607c-6.299-20.312-25.971-42.309-47.968-53.317l31.009,111.149 l36.649-0.048l54.538-126.844H161.828L161.828,194.114z" />
        <path class="svg-visa-corner" d="M96.456,194.037H40.581l-0.426,2.641c43.452,10.523,72.213,35.946,84.133,66.496l-12.133-58.41 C110.062,196.716,103.976,194.318,96.456,194.037L96.456,194.037z" />
      </svg>
      <svg class="svg-master" viewBox="0 0 512 512">
    ath class="svg-master-border" d="M482.722,103.198c13.854,0,25.126,11.271,25.126,25.126v257.9c0,13.854-11.271,25.126-25.126,25.126H30.99 c-13.854,0-25.126-11.271-25.126-25.126v-257.9c0-13.854,11.271-25.126,25.126-25.126H482.722 M482.722,98.198H30.99 c-16.638,0-30.126,13.488-30.126,30.126v257.9c0,16.639,13.488,30.126,30.126,30.126h451.732 c16.639,0,30.126-13.487,30.126-30.126v-257.9C512.848,111.686,499.36,98.198,482.722,98.198L482.722,98.198z" />
        <path class="svg-master-circle2" d="M257.568,355.172c22.646,20.867,53.061,33.522,86.14,33.522 c71.037,0,128.538-57.941,128.538-129.207c0-71.482-57.501-129.424-128.538-129.424c-33.079,0-63.493,12.653-86.14,33.522 c-25.972,23.752-42.401,57.943-42.401,95.902C215.167,297.45,231.597,331.642,257.568,355.172L257.568,355.172z" />
        <path class="svg-master-circle1" d="M299.086,245.725c-0.444-4.662-1.331-9.102-2.223-13.764h-78.586 c0.888-4.662,2.217-9.103,3.549-13.543h71.266c-1.558-4.659-3.333-9.323-5.332-13.763h-60.382 c2.22-4.659,4.661-9.323,7.326-13.763h45.51c-2.887-4.662-6.215-9.325-9.769-13.542h-25.975 c3.996-4.883,8.438-9.545,13.097-13.763c-22.863-20.647-53.057-33.522-86.356-33.522c-70.817,0-128.538,57.942-128.538,129.424 c0,71.266,57.721,129.207,128.538,129.207c33.3,0,63.493-12.655,86.356-33.522l0,0l0,0c4.665-4.221,8.882-8.66,12.878-13.544 h-25.975c-3.552-4.439-6.66-8.879-9.767-13.763h45.51c2.885-4.439,5.327-8.879,7.546-13.764h-60.382 c-2.001-4.439-3.996-8.88-5.552-13.544h71.266c1.553-4.439,2.661-9.1,3.771-13.763c0.892-4.439,1.778-9.104,2.223-13.764 c0.443-4.44,0.666-8.879,0.666-13.544C299.752,254.828,299.529,250.165,299.086,245.725L299.086,245.725z" />
        <path class="svg-master-letter" d="M342.599,229.742l-2.443,14.207 c-4.886-2.441-8.438-3.552-12.434-3.552c-10.433,0-17.76,10.212-17.76,24.644c0,9.987,4.885,15.982,13.098,15.982 c3.33,0,7.326-1.106,11.766-3.332l-2.441,14.876c-5.106,1.332-8.436,2-12.209,2c-15.096,0-24.421-10.88-24.421-28.419 c0-23.309,12.877-39.735,31.302-39.735c2.441,0,4.662,0.222,6.44,0.666l5.549,1.332 C340.822,229.076,341.264,229.298,342.599,229.742L342.599,229.742z" />
        <path class="svg-master-letter" d="M297.755,239.509c-0.444,0-0.892,0-1.333,0 c-4.665,0-7.327,2.22-11.546,8.66l1.331-8.216h-12.651l-8.658,53.282h13.984c5.106-32.635,6.438-38.187,13.098-38.187 c0.443,0,0.443,0,0.888,0c1.332-6.436,3.108-11.1,5.33-15.318L297.755,239.509L297.755,239.509z" />
        <path class="svg-master-letter" d="M217.387,292.566c-3.771,1.332-6.878,1.775-9.987,1.775 c-7.105,0-11.102-3.995-11.102-11.762c0-1.332,0.222-3.113,0.444-4.664l0.889-5.328l0.665-4.221l5.997-36.406h13.763l-1.557,7.992 h7.104l-1.775,13.1h-7.104l-3.771,22.198c-0.224,0.889-0.224,1.552-0.224,2.221c0,2.664,1.332,3.776,4.664,3.776 c1.551,0,2.886,0,3.774-0.444L217.387,292.566L217.387,292.566z" />
        <path class="svg-master-letter" d="M163.887,256.824c0,6.66,3.107,11.323,10.433,14.876 c5.773,2.663,6.661,3.551,6.661,5.771c0,3.332-2.441,4.884-7.992,4.884c-4.218,0-7.992-0.664-12.432-1.995l-2,12.206l0.667,0.225 l2.443,0.444c0.887,0.219,1.998,0.444,3.774,0.444c3.108,0.443,5.771,0.443,7.548,0.443c14.652,0,21.534-5.551,21.534-17.76 c0-7.328-2.886-11.548-9.768-14.875c-5.994-2.663-6.661-3.333-6.661-5.771c0-2.888,2.443-4.221,6.883-4.221 c2.663,0,6.438,0.225,9.989,0.669l1.998-12.212c-3.552-0.666-9.101-1.111-12.209-1.111 C169.214,238.842,163.665,247.056,163.887,256.824L163.887,256.824z" />
        <path class="svg-master-letter" d="M448.935,293.235h-13.097l0.665-5.109 c-3.773,3.996-7.77,5.772-12.875,5.772c-10.215,0-16.874-8.654-16.874-21.979c0-17.758,10.435-32.854,22.646-32.854 c5.55,0,9.546,2.442,13.319,7.328l3.108-18.652h13.766L448.935,293.235L448.935,293.235z M428.511,280.804 c6.438,0,10.879-7.554,10.879-17.982c0-6.886-2.443-10.437-7.325-10.437c-6.217,0-10.881,7.327-10.881,17.759 C421.184,277.251,423.628,280.804,428.511,280.804L428.511,280.804z" />
        <path class="svg-master-letter" d="M260.013,292.122c-4.883,1.558-9.322,2.22-14.432,2.22 c-15.538,0-23.53-8.211-23.53-23.974c0-18.203,10.211-31.748,24.2-31.748c11.542,0,18.868,7.548,18.868,19.315 c0,3.996-0.445,7.768-1.776,13.321h-27.529c-0.222,0.662-0.222,1.106-0.222,1.55c0,6.222,4.218,9.329,12.21,9.329 c5.107,0,9.547-0.888,14.432-3.332L260.013,292.122L260.013,292.122z M252.241,260.375c0-1.107,0-1.994,0-2.663 c0-4.44-2.439-6.881-6.66-6.881c-4.439,0-7.547,3.331-8.879,9.544H252.241L252.241,260.375z" />
        <polygon class="svg-master-letter" points="110.828,293.235 97.065,293.235 105.056,242.839 87.074,293.235 77.527,293.235 76.418,243.282 67.981,293.235 55.106,293.235 65.984,227.741 85.964,227.741 86.63,268.367 99.949,227.741 121.706,227.741 110.828,293.235 " />
        <path class="svg-master-letter" d="M145.238,269.48c-1.332,0-1.998-0.226-3.107-0.226 c-7.771,0-11.767,2.889-11.767,8.217c0,3.332,1.776,5.328,4.884,5.328C141.021,282.8,145.017,277.472,145.238,269.48 L145.238,269.48z M155.45,293.235h-11.544l0.222-5.554c-3.552,4.44-8.215,6.441-14.652,6.441c-7.547,0-12.653-5.771-12.653-14.433 c0-13.1,8.879-20.646,24.418-20.646c1.554,0,3.554,0.224,5.773,0.443c0.444-1.775,0.444-2.438,0.444-3.327 c0-3.551-2.441-4.883-8.88-4.883c-3.996,0-8.436,0.444-11.543,1.332l-1.998,0.663l-1.332,0.224l1.998-11.988 c6.881-1.999,11.545-2.666,16.65-2.666c11.987,0,18.426,5.329,18.426,15.542c0,2.664-0.222,4.659-1.109,10.655l-3.11,18.872 l-0.444,3.327l-0.222,2.664l-0.221,1.999L155.45,293.235L155.45,293.235z" />
        <path class="svg-master-letter" d="M365.019,269.48c-1.555,0-2.22-0.226-3.108-0.226 c-7.991,0-11.987,2.889-11.987,8.217c0,3.332,1.998,5.328,5.106,5.328C360.579,282.8,364.797,277.472,365.019,269.48 L365.019,269.48z M375.229,293.235h-11.543l0.222-5.554c-3.551,4.44-8.213,6.441-14.65,6.441c-7.548,0-12.653-5.771-12.653-14.433 c0-13.1,8.879-20.646,24.418-20.646c1.554,0,3.552,0.224,5.551,0.443c0.443-1.775,0.665-2.438,0.665-3.327 c0-3.551-2.441-4.883-8.88-4.883c-3.995,0-8.656,0.444-11.766,1.332l-1.775,0.663l-1.332,0.224l1.998-11.988 c6.882-1.999,11.543-2.666,16.648-2.666c11.988,0,18.206,5.329,18.206,15.542c0,2.664,0,4.659-1.113,10.655l-2.883,18.872 l-0.446,3.327l-0.443,2.664l-0.223,1.999V293.235L375.229,293.235z" />
        <path class="svg-master-letter" d="M412.526,239.509c-0.444,0-0.889,0-1.332,0 c-4.662,0-7.325,2.22-11.544,8.66l1.331-8.216H388.33l-8.438,53.282h13.765c5.106-32.635,6.438-38.187,13.098-38.187 c0.444,0,0.444,0,0.889,0c1.331-6.436,3.107-11.1,5.327-15.318L412.526,239.509L412.526,239.509z" />
      </svg>

  

  </div>

</div>


<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script >$(document).ready(function() {
  $('.button').on('click', function() {
    $('.button').removeClass('active');
    $(this).toggleClass('active');
  });
});
//# sourceURL=pen.js
</script>
</body></html>
