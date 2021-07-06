import quotesData from "./QUOTES.js";
import {useState, useEffect} from 'react'

function Hero() {

const [quoteIndex, setQuoteIndex] = useState(0)

  useEffect(() => {
    setInterval(() =>
    setQuoteIndex(Math.floor(Math.random() * quotesData.length)), 7000)
  },[])



  return (

    <div className="hero__container">
      <div className="hero__quote">
        <h3>"{quotesData[quoteIndex].quote}"</h3>
        <cite>- {quotesData[quoteIndex].cite}</cite>
    </div>
    </div>

      
  );

}

export default Hero;