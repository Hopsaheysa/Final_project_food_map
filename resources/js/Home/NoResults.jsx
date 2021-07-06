function NoResults(props) {

 const {countries} = props


  return (

    <div className="results__container">
      <div className="no_results">

          {
            countries ?

            <div>
              <h2>I'm afraid we don't have any recipes from {countries[0].name} at such time.</h2>
              <p>Please try again</p>
              {/* <img src="../img/confused-chef.jpg" alt="confused chef"/> */}
            </div>

              : null
          }

    </div>
    
    </div>

      
  );

}

export default NoResults;