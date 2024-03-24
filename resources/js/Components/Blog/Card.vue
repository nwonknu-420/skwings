
<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;700;800&display=swap');
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  list-style-type: none;
  outline: none;
}

:root {
  --card-shadow: 0 0 8rem rgba(220, 234, 255, 0.183);
  --popup-shadow: 0 0 2rem rgba(0, 0, 0, 0.183);
  --text-dark: #080809;
  --text-light: #84829a;
  --icon-bg: #f5f5f5;
  --white: #fff;
  --progress-bg: #f5f5f5;
  --progress-fill-bg: #4475f2;
}





.heading {
  color: var(--text-dark);
  font-size: 1.3rem;
  font-weight: 800;
}

.subheading,
.card-footer {
  color: var(--text-light);
  font-weight: 500;
  font-size: 1rem;
}

.card-1 {
color:	#181818 ;
  max-width: 18rem;
  background: var(--white);
  padding: 1.5rem;
  border-radius: 1.2rem;
  box-shadow: var(--card-shadow);
  background-color: 	#DDDBCB;
  
}

.card-image {
  height:8rem;
  width: 15rem;
}

.card-image .card-img {
  object-fit: contain;
  height: 100%; 
}

.card-details {
  padding: 1rem 0;
  align-items: center;
}

.card-details .subheading {
  padding: 1rem 0;
  display: inline-flex;
}

.card-icons {
  display: flex;
  flex-wrap: wrap;
  gap: 3rem;
}

.card-icon {
  width: 2.5rem;
  height: 2.5rem;
  background: var(--icon-bg);
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  cursor: pointer;
}

.card-icon img {
  width: 1.5rem;
}

.card-bottom {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.card-footer {
  display: flex;
  gap: 1rem;
  flex: 90%;
  align-items: center;
}

.card-footer img {
  width: 1.6rem;
}

.popup-btn {
  position: relative;
}

.popup-btn > img {
  cursor: pointer;
}

.popup {
  position: absolute;
  top: -10rem;
  left: -11rem;
  padding: 1rem;
  width: 25rem;
  background: var(--white);
  border-radius: 1.5rem;
  box-shadow: var(--popup-shadow);
  display: flex;
  align-items: center;
  transition: all 1s ease;
  gap: 1rem;
  opacity: 0;
  visibility: hidden;
  clip-path: circle(0% at 50% 100%);
}

.popup-btn:hover .popup {
  transform: translateY(-1rem);
  opacity: 1;
  visibility: visible;
  clip-path: circle(100% at 50% 100%);
}

.popup-image {
  width: 5rem;
  height: 5rem;
}

.popup-image img {
  width: 100%;
  object-fit: contain;
}

.popup-details .heading {
  padding: 0.5rem 0;
}

.progress-title {
  padding: 0 0 0.5rem 0;
  font-weight: 500;
}

.progress-title span {
  color: var(--progress-fill-bg);
}

.progress {
  position: relative;
  background: var(--progress-bg);
  height: 0.5rem;
  width: 100%;
  border-radius: 1rem;
}

.progress::before {
  position: absolute;
  content: '';
  left: 0;
  width: 40%;
  height: 100%;
  background: var(--progress-fill-bg);
  border-radius: inherit;
}

</style>

<template>
    
     <div class="card-1">
      <div class="card-image">
        <img src="/public/cards/images/card-main.png" alt="Card Image" class="card-img" />
      </div>
      <div class="card-details">
        <h3 class="heading">Liburan ke Bali 🚗</h3>
        <span class="subheading">4-29 Juni | by Shandika</span>
        <div class="card-icons">
          <div class="card-icon">
            <img src="cards/images/icon-leaf.svg" alt="icon" class="icon" />
          </div>
          <div class="card-icon">
            <img src="cards/images/icon-map.svg" alt="icon" class="icon" />
          </div>
          <div class="card-icon">
            <img src="cards/images/icon-send.svg" alt="icon" class="icon" />
          </div>
        </div>
      </div>
      <div class="card-bottom">
        <h3 class="card-footer">
          <img src="cards/images/icon-building.svg" alt="icon" />
          <span>12 Orang pergi bersama</span>
        </h3>
        
      </div>
    </div>
</template>
