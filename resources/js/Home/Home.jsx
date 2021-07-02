function Home() {
  return (
    <>
      <div class="main">
          {/* <img src="../img/earth.jpg" /> */}
          <div class="home__container">
            
            <h1 class="home__container__header">World <span>Kitchen</span></h1>
            <h2 class="home__container__slogan"><span>Finding you recipes </span>from around the world</h2>
                  <div class="filter">
                    Search Country
                    <input type="text" class="filter__input" placeholder="e.g Czech Republic"/>
                  </div>

                  <div class="list"></div>
            
          </div>
        </div>
        
    </>
  );
}

export default Home;