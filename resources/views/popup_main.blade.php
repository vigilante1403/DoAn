
 
<div class="popup1">
  
    <button class="but12" id="close">&times;</button>
    <div style="padding:10px 10px;">
    <div class="iconn1"> 
    <a href="#" class="t-link1 icon1 icon--circle1 icon--xs1 expert-card__icon1">
        <i style="coler:white;" class="fas fa-solid fa-envelope"></i>
        </a>
    </div>
    <form action="/subscribe" method="post">
        <h2>Don't miss updates from us</h2>            
        <div class="newsletter1">
          <div class="newsletter__container1 rounded-pill">
             <button class="btn1 xxl-text lh-1 text--white rounded-pill sm-text" style="background-color:#1aa1ff">
                <i class="fas fa-solid fa-envelope"></i>
            </button>
            
              @csrf
            <input
              type="text"
              class="form-control1 form--control1 newsletter__input1 flex-grow-1 rounded-pill"
              placeholder="Subscribe now.." name="email"
            />
           
          </div>
        </div>
      <div class="newsletter1">
        <button type="submit" class="pop1">Subscribe</button>
      </div>
    </form>
    </div>
</div>
