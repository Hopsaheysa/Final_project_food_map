function Footer() {

  return (

    <footer>
            <div className="footer">
                <div className="footer__container">
                    <ul className="footer__nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>
                <div className="footer__social">
                    <ul className="footer__links">
                        <li><a href="#"><ion-icon name="logo-facebook" className="facebook"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-twitter" className="twitter"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-google" className="google"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-instagram" className="instagram"></ion-icon></a></li>
                    </ul>
                    
                </div>
                {/* <p>
                    Copyright &copy; 2021 by WorldKitchen. All rights reserved.
                </p> */}
            </div>
        </footer>
    
      
  );

}

export default Footer;