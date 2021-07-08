function NoResults(props) {

 const {countries} = props


  return (

    <div className="results__container">
      {
            countries ?
          <div className="no_results">

          

            <div>
              <h2>I'm afraid we don't have any recipes from {countries.name} at such time.</h2>
              <p>Please try again</p>
              {/* <img src="../img/confused-chef.jpg" alt="confused chef"/> */}
            </div>
        </div>
              : null
      

     
        }
    </div>

      
  );

}

export default NoResults;