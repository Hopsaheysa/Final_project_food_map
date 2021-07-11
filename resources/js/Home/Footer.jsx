import { Link } from 'react-router-dom'

function Footer() {

  return (

    <footer>
            <div className="footer">
                <div className="footer__container">

                    <ul className="footer__nav">
                        <Link to='/about'><li><a href="#">About us</a></li></Link>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
               

                <div className="footer__copyright">
                    <p>Copyright &copy; 2021 by WorldKitchen.</p>
                    <p>All rights reserved</p>
                </div>
            
                
                    <ul className="footer__nav__social">
                        <li><a href="#" className="facebook"><ion-icon name="logo-facebook" ></ion-icon></a></li>
                        <li><a href="#" className="twitter" ><ion-icon name="logo-twitter" ></ion-icon></a></li>
                        <li><a href="#" className="google" ><ion-icon name="logo-google" ></ion-icon></a></li>
                        <li><a href="#" className="instagram"><ion-icon name="logo-instagram" ></ion-icon></a></li>
                    </ul>
       

                 </div>
            </div>
        </footer>
    
      
  );

}

export default Footer;