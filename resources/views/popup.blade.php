<!DOCTYPE html>
<html lang="en">
<head>
  
  <!--====== Design by foolishdeveloper.com =====-->
  
  
    <title>Automatic Popup</title>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--Stylesheets-->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
  /* background-color: #0855ae; */
}
.popup{
    background-color: rgb(227, 219, 219);
    width: 420px;
    
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
    border-radius: 8px;
    font-family: "Poppins",sans-serif;
    display: none; 
    text-align: center;
}
.popup .but{
    display: block;
    margin:  0 0 20px auto;
    background-color: transparent;
    font-size: 30px;
    color: #ffffff;
    background: #03549a;
    border-radius: 100%;
    width: 40px;
    height: 40px;
    border: none;
    outline: none;
    cursor: pointer;
    position:relative;
    left:0;
    bottom:40%;
}
.popup h2{
  margin-top: 10px;
}
.popup p{
    font-size: 14px;
    text-align: justify;
    margin: 20px 0;
    line-height: 25px;
}
.pop{
    display: block;
   
    position: relative;
    margin: 10px auto;
    text-align: center;
    background-color: #1aa1ff;
    
    color: #ffffff;
    text-decoration: none;
    padding: 8px 0;
}
.t-link {
    text-decoration: none;
    transition: all 0.3s ease;
}
.expert-card__icon {
    background: #1aa1ff;
    color: white;
}.icon--circle {
    border-radius: 50%;
    text-align: center;
}.icon--xs {
    width: 9vw;
    height: 9vw;
    font-size: 4vw;
}.icon {
    position: relative;
    display: grid;
    place-items: center;
    aspect-ratio: 1;
}
.newsletter {
    border: 1px solid white;
  
}
.newsletter__container {
    display: flex;
    align-items: center;
   
}

.newsletter__input {
    height: 38px;
    background: transparent;
    border: none;
    color: hsl(var(--white));
    font-size: 14px;
}.form--control {
   
    line-height: 1;
    
    font-size: 14px;
    font-weight: 500;
    border: 1px solid hsl(var(--border));
    background: hsl(var(--white));
    color: hsl(var(--heading));
    transition: all 0.3s ease;
}
.flex-grow-1 {
    flex-grow: 1!important;
}
.form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 2px solid #1aa1ff;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
   
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.btn {
    font-family: var(--heading-font);
    font-weight: 500;
    letter-spacing: 0.04em;
    transition: all 0.3s ease;
    
    flex-shrink: 0;
}.btn {
    display: inline-block;
    font-weight: 400;
    line-height: 1.5;
    color: #f1f5f9;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid #1aa1ff;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
   
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.iconn{
    position: relative;
    align-items: center;
    width: 50px;
    margin-top:5px;
    margin-bottom: 40px;
    z-index:1;
    padding: 5px 5px;
    left:35%;
    
}
    </style>
</head>
<body>
    
    <div class="popup">
        <button class="but" id="close">&times;</button>
        <div style="padding:20px 20px;">
        <div class="iconn"> 
        <a href="#" class="t-link icon icon--circle icon--xs expert-card__icon">
            <i style="coler:white;" class="fas fa-solid fa-envelope"></i>
            </a>
        </div>
       
            <h2>Don't miss updates from us</h2>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita?
        </p>
        
                         
            <div class="newsletter">
              <div class="newsletter__container rounded-pill">
                 <button class="btn xxl-text lh-1 text--white rounded-pill sm-text" style="background-color:#1aa1ff">
                    <i class="fas fa-solid fa-envelope"></i>
                </button>
                <input
                  type="text"
                  class="form-control form--control newsletter__input flex-grow-1 rounded-pill"
                  placeholder="Subscribe now.."
                />
               
              </div>
            </div>
          <div class="newsletter">
              <a class="pop" href="#">Subscribe</a>
          </div>
        </div>
        
    </div>
    <!--Script-->
<script type="text/javascript">
window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
        },
        3000 
    )
});


document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
    </script>
</body>
</html>