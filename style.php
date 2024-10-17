@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

section{
  position: relative;
  width: 100%;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  background: url(./image/home.png)no-repeat;
  background-size: cover;
  background-position: center;
}

header{
  position: relative;
  top: 0;
  width: 100%;
  padding: 30px 100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

@keyframes changeColor {
  0% {
    color: #ec19ff;
  }
  60% {
    color: #eaff00;
  }
  70% {
    color:  #00FF00;
  }
  100% {
    color: #ff7700;
  }
}

.Logo{
  font-size: 45px;
  font-weight: 1000;
  
}
.Logo-animation {
  animation-name: changeColor;
  animation-duration: 3s;
  animation-iteration-count: infinite;
}



header .navigation a{
  color: #fff;
  font-size: 20px;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.2s ease;
  transition-property: background;
}

header .navigation a:not(:last-child){
  margin-right: 30px;
}

header .navigation a:hover{
  color: #c2185b;
  transition: 0.1s;
}

.Center-text{
  width: 90%;
  color: #fffcf9;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  text-align: center;
  font-size: 42px;
  padding-left: 75px;

}

.Center-text h1 {
  font-family: "Montserrat Medium";
  max-width: 40ch;
  justify-content: center;
  align-items: center;
  transform: scale(0.94);
  animation: scale 3s forwards cubic-bezier(0.5, 1, 0.89, 1);
}
@keyframes scale {
  100% {
    transform: scale(1);
  }
}

span {
  display: inline-block;
  opacity: 0;
  filter: blur(4px);
}

span:nth-child(1) {
  animation: fade-in 0.8s 0.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(2) {
  animation: fade-in 0.8s 0.2s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(3) {
  animation: fade-in 0.8s 0.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(4) {
  animation: fade-in 0.8s 0.4s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(5) {
  animation: fade-in 0.8s 0.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(6) {
  animation: fade-in 0.8s 0.6s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(7) {
  animation: fade-in 0.8s 0.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(8) {
  animation: fade-in 0.8s 0.8s forwards cubic-bezier(0.11, 0, 0.5, 0);
}


@keyframes fade-in {
  100% {
    opacity: 1;
    filter: blur(0);
  }
}


.Center-btn{
  display: inline-block;
  text-decoration: none;
  color: #ffffff;
  border: 1px solid #fff;
  padding: 10px 34px;
  font-size: 15px;background: transparent;
  position: relative;
  cursor: pointer;
}

.Center-btn:hover{
  border: 1px solid #f44336;
  background: #fff;
  color: #000000;
  font-size: 15px;
transition: 1s;
}


/* footer css */


footer {
  background-color: #222;
  color: #fff;
  padding: 30px 0;
  text-align: center;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.footer-logo {
  position: relative;
  color: #ffffff;
  font-size: 20px;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: 800;
  letter-spacing: 1px;
}

.footer-links ul,
.footer-social ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
}

.footer-links ul li,
.footer-social ul li {
  margin-right: 15px;
}

.footer-links ul li:last-child,
.footer-social ul li:last-child {
  margin-right: 0;
}

.footer-links a,
.footer-social a {
  color: #fff;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.2s ease;
}

.footer-links a:hover,
.footer-social a:hover {
  color: #c2185b;
}

.footer-text p {
  margin: 0;
  font-size: 14px;
}

.fab {
  font-size: 24px;
}


